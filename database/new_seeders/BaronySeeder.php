<?php

use Illuminate\Database\Seeder;

class BaronySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

			/*
			*Hospice, Almshouse, Chantry
            DB::table('baronies')->insert([
				'barony_name' => '',
				'barony_category' => '',			//Feudal, Ecclesiastical, Monastic_Order, Crusader_Order, Burgher, Villager				
				'de_jure_county' => '',
				'population' => '',	
				'charter_castle' => '',				//Hall (242), Fortified_Glebe (9), Fortified_Abbey (229), Chancellery (113), Knight_Court (40), Manor_Court (234), County_Court (362), Royal_Court (40)				
				'charter_assembly' => '',			//Moot (374), Senate (833), Diet (53), Parliament (8)	
				'charter_cathedral' => '',			//Chaplain (118), Priest (594), Bishop (458), Archbishop (92), Patriarch (6)
				'charter_market' => '',				//Square, Market_Right, Fair_Right, Cloth_Hall
				'charter_walls' => '',				//None, Earthwork, Palisade, Stronghold
				'charter_mint' => '',				//None, Mint, Reliquary
				'charter_university' => '',			//None, Monastic_School, Cathedral_School, Scriptorium_Library
				'quarter_downtown' => '',			//Citadel, Courtyard, Hospice, Almshouse, Granary, Merchant_Quarter, Jewry_Quarter 
				'quarter_suburb' => '',				//Tiltyard, Hunting_Lodge, Coaching_Inn, Industrial_Smith, Industrial_Tanner, Industrial_Potter, Marke_Forest
				'quarter_harbor' => '',				//Stockpile, Warehouse_Quarter, Staple_Port, Arsenal
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
				'lord_of_the_manor' => '1'		(barony); default=1
            ]);
			*/


			//Holy Roman Empire, Empire	
			//Germany, Kingdom
			//Austria, Duchy
			//Grunsweit 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Melk',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '1',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'				
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Gottweig',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '1',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'				
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sankt Polten',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '1',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);
			//Ostmark 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Altenburg',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '2',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'				
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Eggenburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '2',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Rosenburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '2',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'				
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Chremis',
				'barony_category' => 'Feudal',
				'de_jure_county' => '2',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);
			//Vienna
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Vienna',
				'barony_category' => 'Feudal',
				'de_jure_county' => '3',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Klosterneuburg',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '3',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'				
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kreuzenstein',
				'barony_category' => 'Feudal',
				'de_jure_county' => '3',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Stockpile'						
            ]);
			//Bavaria, Duchy
			//Donaugau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Regensburg',
				'barony_category' => 'Burgher',
				'de_jure_county' => '4',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Straubing',
				'barony_category' => 'Burgher',
				'de_jure_county' => '4',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);
			//Folkfeld 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bamberg',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '5',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Hallstadt',
				'barony_category' => 'Feudal',
				'de_jure_county' => '5',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//Isengau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Geisenhausen',
				'barony_category' => 'Burgher',
				'de_jure_county' => '6',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Veldenstein',
				'barony_category' => 'Crusader_Order',
				'de_jure_county' => '6',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//Nordgau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Egerburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '7',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);			
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Nuremberg',
				'barony_category' => 'Burgher',
				'de_jure_county' => '7',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Smith',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Grafengehaig',
				'barony_category' => 'Villager',
				'de_jure_county' => '7',
				'population' => '',
				'charter_castle' => 'Fortified_Glebe',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//Radenzgau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Forchheim',
				'barony_category' => 'Feudal',
				'de_jure_county' => '8',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Staffelstein',
				'barony_category' => 'Feudal',
				'de_jure_county' => '8',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//Rottgau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Passau',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '9',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Erneck',
				'barony_category' => 'Crusader_Order',
				'de_jure_county' => '9',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Stockpile'							
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Vornbach',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '9',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);	
			//Schweinachgau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Vilshofen',
				'barony_category' => 'Burgher',
				'de_jure_county' => '10',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Furstenstein',
				'barony_category' => 'Feudal',
				'de_jure_county' => '10',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Saldenburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '10',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Courtyard',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);	
			//Westergau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ingolstadt',
				'barony_category' => 'Feudal',
				'de_jure_county' => '11',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Neuburg',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '11',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Freising',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '11',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);				
			//Brabant, Duchy
			//Brabant
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Brussels',
				'barony_category' => 'Burgher',
				'de_jure_county' => '12',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Louvain',
				'barony_category' => 'Burgher',
				'de_jure_county' => '12',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Cloth_Hall',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);
			//Haspengau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Hasselt',
				'barony_category' => 'Burgher',
				'de_jure_county' => '13',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Almshouse',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tongeren',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '13',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Borgloon',
				'barony_category' => 'Feudal',
				'de_jure_county' => '13',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//Hennegau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Valenciennes',
				'barony_category' => 'Feudal',
				'de_jure_county' => '14',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Mons',
				'barony_category' => 'Burgher',
				'de_jure_county' => '14',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lobbes',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '14',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//Kamerykgau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Cambrai',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '15',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Caudry',
				'barony_category' => 'Feudal',
				'de_jure_county' => '15',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//Toxandria
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Antwerp',
				'barony_category' => 'Burgher',
				'de_jure_county' => '16',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Breda',
				'barony_category' => 'Feudal',
				'de_jure_county' => '16',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Almshouse',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tilburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '16',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Turnhout',
				'barony_category' => 'Feudal',
				'de_jure_county' => '16',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Cloth_Hall',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Stryen',
				'barony_category' => 'Feudal',
				'de_jure_county' => '16',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Geldrop',
				'barony_category' => 'Villager',
				'de_jure_county' => '16',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Mierlo',
				'barony_category' => 'Feudal',
				'de_jure_county' => '16',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//Waasgau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ghent',
				'barony_category' => 'Burgher',
				'de_jure_county' => '17',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Cloth_Hall',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Almshouse',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Axel',
				'barony_category' => 'Burgher',
				'de_jure_county' => '17',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Hulst',
				'barony_category' => 'Burgher',
				'de_jure_county' => '17',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Assenede',
				'barony_category' => 'Burgher',
				'de_jure_county' => '17',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Almshouse',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Boekhoute',
				'barony_category' => 'Burgher',
				'de_jure_county' => '17',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sluys',
				'barony_category' => 'Feudal',
				'de_jure_county' => '17',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'							
            ]);
			//Carinthia, Duchy
			//Hengistgau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Hengistburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '18',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sankt Nikolai',
				'barony_category' => 'Villager',
				'de_jure_county' => '18',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//Ingeringtal 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Judenburg',
				'barony_category' => 'Burgher',
				'de_jure_county' => '19',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Palisade',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Frauenburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '19',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Palisade',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//Jauntal
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Steinz',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '20',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Graz',
				'barony_category' => 'Feudal',
				'de_jure_county' => '20',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);			
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Seckau',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '20',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//Kroatengau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Karlsberg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '21',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Klagenfurt',
				'barony_category' => 'Burgher',
				'de_jure_county' => '21',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Velden',
				'barony_category' => 'Feudal',
				'de_jure_county' => '21',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Coaching_Inn',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sankt Veit',
				'barony_category' => 'Feudal',
				'de_jure_county' => '21',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Gurk',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '21',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//Lavanttal 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sankt Paul',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '22',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sankt Andra',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '22',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Industrial_Smith',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//Leobental 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Leoben',
				'barony_category' => 'Burgher',
				'de_jure_county' => '23',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Almshouse',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sankt Stefan',
				'barony_category' => 'Feudal',
				'de_jure_county' => '23',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//Lurngau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kadour',
				'barony_category' => 'Villager',
				'de_jure_county' => '24',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lienz',
				'barony_category' => 'Feudal',
				'de_jure_county' => '24',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Stronghold',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Villach',
				'barony_category' => 'Burgher',
				'de_jure_county' => '24',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Stronghold',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Coaching_Inn',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			//Murztal
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Eppenstein',
				'barony_category' => 'Feudal',
				'de_jure_county' => '25',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Stronghold',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Hohenwang',
				'barony_category' => 'Feudal',
				'de_jure_county' => '25',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Stronghold',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			//Sanntal
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Celje',
				'barony_category' => 'Feudal',
				'de_jure_county' => '26',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Stronghold',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Richenburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '26',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Stronghold',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			//Carniola
			//Krainmark 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Laibach',
				'barony_category' => 'Feudal',
				'de_jure_county' => '27',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Zobelsberg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '27',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Stronghold',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//Histria 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tergeste',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '28',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Parenzo',
				'barony_category' => 'Burgher',
				'de_jure_county' => '28',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Mitterburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '28',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Pican',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '28',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Pula',
				'barony_category' => 'Burgher',
				'de_jure_county' => '28',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'							
            ]);
			//Franconia, Duchy
			//Grabfeld 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Fulda',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '29',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Potter',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Hunfeld',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '29',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Mellrichstadt',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '29',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ebersburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '29',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Stronghold',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Henneberg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '29',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Stronghold',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Schweinfurt',
				'barony_category' => 'Burgher',
				'de_jure_county' => '29',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Stronghold',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			//Gollachgau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Rotenburg',
				'barony_category' => 'Burgher',
				'de_jure_county' => '30',
				'population' => '',
				'charter_castle' => 'Fortified_Glebe',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Industrial_Potter',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Colmberg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '30',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Comburg',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '30',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'						
            ]);
			//Gotzfeld
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Kitzingen',
				'barony_category' => 'Burgher',
				'de_jure_county' => '31',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Gerolshofen',
				'barony_category' => 'Burgher',
				'de_jure_county' => '31',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//Jagstgau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Mosbach',
				'barony_category' => 'Burgher',
				'de_jure_county' => '32',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Minneburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '32',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//Saalgau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Hammelburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '33',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Gersfeld',
				'barony_category' => 'Feudal',
				'de_jure_county' => '33',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//Sualafeld
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Gosheim',
				'barony_category' => 'Villager',
				'de_jure_county' => '34',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Kaisersheim',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '34',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//Sulmgau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Heilbronn',
				'barony_category' => 'Burgher',
				'de_jure_county' => '35',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Palisade',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Weinsberg',
				'barony_category' => 'Burgher',
				'de_jure_county' => '35',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ellhofen',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '35',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Almshouse',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ohringen',
				'barony_category' => 'Burgher',
				'de_jure_county' => '35',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Hall',
				'barony_category' => 'Burgher',
				'de_jure_county' => '35',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Coaching_Inn',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Hohenstein',
				'barony_category' => 'Burgher',
				'de_jure_county' => '35',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//Taubergau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Weikersheim',
				'barony_category' => 'Burgher',
				'de_jure_county' => '36',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Mergentheim',
				'barony_category' => 'Crusader_Order',
				'de_jure_county' => '36',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//Waldsassengau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Wurzburg',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '37',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Wertheim',
				'barony_category' => 'Feudal',
				'de_jure_county' => '37',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Waldsassen',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '37',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//Frisia, Duchy
			//Ammergau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Oldenburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '38',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Stockpile'							
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Rastede',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '38',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Westerstede',
				'barony_category' => 'Feudal',
				'de_jure_county' => '38',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Courtyard',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Stockpile'																					
            ]);
			//Auricherland
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Aurichove',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '39',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ihlow',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '39',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Marienhafe',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '39',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'										
            ]);
			//Beveland
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Goes',
				'barony_category' => 'Burgher',
				'de_jure_county' => '40',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'										
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Wissenkerk',
				'barony_category' => 'Villager',
				'de_jure_county' => '40',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'										
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Hellenburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '40',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);			
			//Bornegau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Jouwer',
				'barony_category' => 'Villager',
				'de_jure_county' => '41',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Haskerhorn',
				'barony_category' => 'Villager',
				'de_jure_county' => '41',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bakkeveen',
				'barony_category' => 'Villager',
				'de_jure_county' => '41',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Beets',
				'barony_category' => 'Villager',
				'de_jure_county' => '41',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Oudeschoot',
				'barony_category' => 'Crusader_Order',
				'de_jure_county' => '41',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//Drenthe
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Coevorden',
				'barony_category' => 'Feudal',
				'de_jure_county' => '42',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);		
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Groningen',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '42',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Almshouse',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ruinen',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '42',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Rolde',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '42',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Wolvega',
				'barony_category' => 'Villager',
				'de_jure_county' => '42',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Appelsche',
				'barony_category' => 'Villager',
				'de_jure_county' => '42',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Oostwold',
				'barony_category' => 'Villager',
				'de_jure_county' => '42',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//Dithmarschen
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Meldorf',
				'barony_category' => 'Villager',
				'de_jure_county' => '43',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'										
            ]);		
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Hemmingstedt',
				'barony_category' => 'Feudal',
				'de_jure_county' => '43',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Courtyard',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Wohrden',
				'barony_category' => 'Villager',
				'de_jure_county' => '43',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);				
			//Emsigerland
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Emden',
				'barony_category' => 'Burgher',
				'de_jure_county' => '44',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Staple_Port'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Leer',
				'barony_category' => 'Feudal',
				'de_jure_county' => '44',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);			
			//Fivelgau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Appingedam',
				'barony_category' => 'Burgher',
				'de_jure_county' => '45',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Staple_Port'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Winschoten',
				'barony_category' => 'Feudal',
				'de_jure_county' => '45',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Farmsum',
				'barony_category' => 'Feudal',
				'de_jure_county' => '45',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Courtyard',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Staple_Port'										
            ]);
			//Hadeln
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Otterndorf',
				'barony_category' => 'Villager',
				'de_jure_county' => '46',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ritzebuttel',
				'barony_category' => 'Feudal',
				'de_jure_county' => '46',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//Holtland
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Dordrecht',
				'barony_category' => 'Burgher',
				'de_jure_county' => '47',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Gouda',
				'barony_category' => 'Burgher',
				'de_jure_county' => '47',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Almshouse',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			//Hunsingau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Winsum',
				'barony_category' => 'Feudal',
				'de_jure_county' => '48',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Courtyard',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bedum',
				'barony_category' => 'Feudal',
				'de_jure_county' => '48',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Courtyard',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Selwerd',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '48',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//Kennemerland
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Haarlem',
				'barony_category' => 'Burgher',
				'de_jure_county' => '49',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Alkmaar',
				'barony_category' => 'Burgher',
				'de_jure_county' => '49',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Amsterdam',
				'barony_category' => 'Burgher',
				'de_jure_county' => '49',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'None',
				'quarter_downtown' => 'Almshouse',			
				'quarter_suburb' => 'Coaching_Inn',
				'quarter_harbor' => 'Staple_Port'										
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Edam',
				'barony_category' => 'Burgher',
				'de_jure_county' => '49',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'										
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Purmerstein',
				'barony_category' => 'Feudal',
				'de_jure_county' => '49',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Brederode',
				'barony_category' => 'Feudal',
				'de_jure_county' => '49',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);			
			//Maasland
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Delft',
				'barony_category' => 'Burgher',
				'de_jure_county' => '50',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Almshouse',			
				'quarter_suburb' => 'Industrial_Potter',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Vlaardingen',
				'barony_category' => 'Burgher',
				'de_jure_county' => '50',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'										
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Rotterdam',
				'barony_category' => 'Burgher',
				'de_jure_county' => '50',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Almshouse',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'										
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Holylede',
				'barony_category' => 'Feudal',
				'de_jure_county' => '50',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Courtyard',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Berkel',
				'barony_category' => 'Villager',
				'de_jure_county' => '50',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'																					
            ]);				
			//Nifterlake
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Utrecht',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '51',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Almshouse',			
				'quarter_suburb' => 'Industrial_Potter',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Dorestadt',
				'barony_category' => 'Burgher',
				'de_jure_county' => '51',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Amerongen',
				'barony_category' => 'Feudal',
				'de_jure_county' => '51',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Courtyard',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'																					
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Zuilenburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '51',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Courtyard',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'																					
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Woudenberg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '51',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Courtyard',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'																					
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Heemstede',
				'barony_category' => 'Feudal',
				'de_jure_county' => '51',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Courtyard',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'																					
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Nyenrode',
				'barony_category' => 'Feudal',
				'de_jure_county' => '51',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Courtyard',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'																					
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Vianen',
				'barony_category' => 'Feudal',
				'de_jure_county' => '51',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'																					
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Woerden',
				'barony_category' => 'Feudal',
				'de_jure_county' => '51',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'																					
            ]);
			//Norderland
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Norden',
				'barony_category' => 'Feudal',
				'de_jure_county' => '52',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Staple_Port'																					
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Berum',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '52',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Stockpile'																					
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Jever',
				'barony_category' => 'Feudal',
				'de_jure_county' => '52',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Staple_Port'																					
            ]);
			//Ostringen
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Ostringfeld',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '53',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Stockpile'																					
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Reepsholt',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '53',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Stockpile'																					
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Kniphausen',
				'barony_category' => 'Feudal',
				'de_jure_county' => '53',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Stockpile'																					
            ]);
			//Oostergau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Dockum',
				'barony_category' => 'Burgher',
				'de_jure_county' => '54',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'																					
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Liowerd',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '54',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Almshouse',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'																					
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Klaarkamp',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '54',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'																					
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Wytgaard',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '54',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'																					
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Mariengaard',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '54',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'																					
            ]);
			//Rhineland
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Leithen',
				'barony_category' => 'Burgher',
				'de_jure_county' => '55',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Cloth_Hall',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Wassenaar',
				'barony_category' => 'Feudal',
				'de_jure_county' => '55',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Cronestein',
				'barony_category' => 'Feudal',
				'de_jure_county' => '55',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Courtyard',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Haag',
				'barony_category' => 'Feudal',
				'de_jure_county' => '55',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Loosduinen',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '55',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'																					
            ]);	
			//Rustringen
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Nordenham',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '56',
				'population' => '',
				'charter_castle' => 'Fortified_Glebe',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Almshouse',			
				'quarter_suburb' => 'Coaching_Inn',
				'quarter_harbor' => 'Staple_Port'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Rodenkirchen',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '56',
				'population' => '',
				'charter_castle' => 'Fortified_Glebe',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Langwarden',
				'barony_category' => 'Feudal',
				'de_jure_county' => '56',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Courtyard',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'																					
            ]);	
			//Salland
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Zwolle',
				'barony_category' => 'Burgher',
				'de_jure_county' => '57',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School',
				'quarter_downtown' => 'Almshouse',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'																					
            ]);				
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Kampen',
				'barony_category' => 'Burgher',
				'de_jure_county' => '57',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Hasselt',
				'barony_category' => 'Burgher',
				'de_jure_county' => '57',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Waardenborg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '57',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Hardenberg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '57',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'																					
            ]);				
			//Sudergau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Starum',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '58',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'																					
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Sloten',
				'barony_category' => 'Feudal',
				'de_jure_county' => '58',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Courtyard',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Stockpile'																					
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Hemlum',
				'barony_category' => 'Villager',
				'de_jure_county' => '58',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'																					
            ]);
			//Teisterbant
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Tiel',
				'barony_category' => 'Burgher',
				'de_jure_county' => '59',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Buren',
				'barony_category' => 'Feudal',
				'de_jure_county' => '59',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Arkel',
				'barony_category' => 'Feudal',
				'de_jure_county' => '59',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Hunting_Lodge',
				'quarter_harbor' => 'Stockpile'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Heusden',
				'barony_category' => 'Feudal',
				'de_jure_county' => '59',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Vianen',
				'barony_category' => 'Feudal',
				'de_jure_county' => '59',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Loevestein',
				'barony_category' => 'Feudal',
				'de_jure_county' => '59',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Courtyard',			
				'quarter_suburb' => 'Hunting_Lodge',
				'quarter_harbor' => 'Stockpile'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Almkerk',
				'barony_category' => 'Feudal',
				'de_jure_county' => '59',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'																					
            ]);	
			//Twente
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Oldenzaal',
				'barony_category' => 'Burgher',
				'de_jure_county' => '60',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Almshouse',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Enschede',
				'barony_category' => 'Villager',
				'de_jure_county' => '60',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Almelo',
				'barony_category' => 'Feudal',
				'de_jure_county' => '60',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Earthwork',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Ottenstein',
				'barony_category' => 'Feudal',
				'de_jure_county' => '60',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Palisade',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'																					
            ]);
			//Veluwe
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Elburg',
				'barony_category' => 'Burgher',
				'de_jure_county' => '61',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Harderwick',
				'barony_category' => 'Burgher',
				'de_jure_county' => '61',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Barnefeld',
				'barony_category' => 'Villager',
				'de_jure_county' => '61',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'																					
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Scherpenzeel',
				'barony_category' => 'Feudal',
				'de_jure_county' => '61',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Courtyard',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'																					
            ]);
			//Vollenhove	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Vollenhove',
				'barony_category' => 'Feudal',
				'de_jure_county' => '62',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Kuinre',
				'barony_category' => 'Feudal',
				'de_jure_county' => '62',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Steenwick',
				'barony_category' => 'Burgher',
				'de_jure_county' => '62',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'																					
            ]);	
			//Walcheren
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Flissinghe',
				'barony_category' => 'Burgher',
				'de_jure_county' => '63',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Serooskerke',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '63',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Middelburg',
				'barony_category' => 'Burgher',
				'de_jure_county' => '63',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Earthwork',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'																					
            ]);	
			//Westergau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Froonacker',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '64',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Earthwork',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Coaching_Inn',
				'quarter_harbor' => 'Warehouse_Quarter'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Bolsward',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '64',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Courtyard',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Drylts',
				'barony_category' => 'Burgher',
				'de_jure_county' => '64',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Hylpen',
				'barony_category' => 'Burgher',
				'de_jure_county' => '64',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Snits',
				'barony_category' => 'Burgher',
				'de_jure_county' => '64',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Earthwork',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Harns',
				'barony_category' => 'Burgher',
				'de_jure_county' => '64',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Hoxwier',
				'barony_category' => 'Feudal',
				'de_jure_county' => '64',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Courtyard',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Boksum',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '54',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'																					
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Lidlum',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '54',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'																					
            ]);
			//Westflinge
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Hoorn',
				'barony_category' => 'Burgher',
				'de_jure_county' => '65',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Cloth_Hall',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Coaching_Inn',
				'quarter_harbor' => 'Staple_Port'										
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Medemblik',
				'barony_category' => 'Feudal',
				'de_jure_county' => '65',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'										
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Enkhuizen',
				'barony_category' => 'Feudal',
				'de_jure_county' => '65',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Almshouse',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'										
            ]);
			//Wursten
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Sieversham',
				'barony_category' => 'Feudal',
				'de_jure_county' => '66',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Midlum',
				'barony_category' => 'Villager',
				'de_jure_county' => '66',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Bederkesa',
				'barony_category' => 'Feudal',
				'de_jure_county' => '66',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Diepholt',
				'barony_category' => 'Feudal',
				'de_jure_county' => '66',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Weddewarden',
				'barony_category' => 'Feudal',
				'de_jure_county' => '66',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Courtyard',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);	
			//Guelders, Duchy
			//Hettergau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Guelders',
				'barony_category' => 'Feudal',
				'de_jure_county' => '67',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Xanten',
				'barony_category' => 'Burgher',
				'de_jure_county' => '67',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Gennep',
				'barony_category' => 'Feudal',
				'de_jure_county' => '67',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Walbeck',
				'barony_category' => 'Villager',
				'de_jure_county' => '67',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//Betuwe
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Nymegen',
				'barony_category' => 'Burgher',
				'de_jure_county' => '68',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Arnhem',
				'barony_category' => 'Burgher',
				'de_jure_county' => '68',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Earthwork',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Almshouse',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Doornenburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '68',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Stockpile'										
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Batenburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '68',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Appeltern',
				'barony_category' => 'Feudal',
				'de_jure_county' => '68',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Stockpile'										
            ]);	
			//Cleveland
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Cleves',
				'barony_category' => 'Feudal',
				'de_jure_county' => '69',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Kranenburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '69',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			//Hamaland
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Zutphen',
				'barony_category' => 'Burgher',
				'de_jure_county' => '70',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Palisade',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Deventer',
				'barony_category' => 'Burgher',
				'de_jure_county' => '70',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Cloth_Hall',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Doetinchem',
				'barony_category' => 'Burgher',
				'de_jure_county' => '70',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Doesburg',
				'barony_category' => 'Burgher',
				'de_jure_county' => '70',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Camphuysen',
				'barony_category' => 'Feudal',
				'de_jure_county' => '70',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Courtyard',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Bronkhorst',
				'barony_category' => 'Feudal',
				'de_jure_county' => '70',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Lochem',
				'barony_category' => 'Burgher',
				'de_jure_county' => '70',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);	
			//Mulgau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Tegelen',
				'barony_category' => 'Feudal',
				'de_jure_county' => '71',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Venlo',
				'barony_category' => 'Burgher',
				'de_jure_county' => '71',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Palisade',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Straelen',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '71',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);	
			//Ruhrgau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Duisburg',
				'barony_category' => 'Burgher',
				'de_jure_county' => '72',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Moers',
				'barony_category' => 'Feudal',
				'de_jure_county' => '72',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);				
			//Julich, Duchy
			//Julichgau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Julich',
				'barony_category' => 'Feudal',
				'de_jure_county' => '73',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Duren',
				'barony_category' => 'Burgher',
				'de_jure_county' => '73',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Industrial_Potter',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Aachen',
				'barony_category' => 'Burgher',
				'de_jure_county' => '73',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Burtscheid',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '73',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kornelimunster',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '73',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//Eifelgau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Kasselburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '74',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Gerolstein',
				'barony_category' => 'Feudal',
				'de_jure_county' => '74',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Kaufungen',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '74',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//Zulpichgau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Zulpich',
				'barony_category' => 'Feudal',
				'de_jure_county' => '75',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Hallenburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '75',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			//Limburg, Duchy
			//Luttichgau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Limburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '76',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Liege',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '76',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'											
            ]);
			//Ardennengau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Stavelot',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '77',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Malmedy',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '77',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Stockpile'											
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Wiltz',
				'barony_category' => 'Feudal',
				'de_jure_county' => '77',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Stockpile'										
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bouillon',
				'barony_category' => 'Feudal',
				'de_jure_county' => '77',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//Condrustgau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Dinant',
				'barony_category' => 'Feudal',
				'de_jure_county' => '78',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'											
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Poilvache',
				'barony_category' => 'Feudal',
				'de_jure_county' => '78',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'											
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Huy',
				'barony_category' => 'Burgher',
				'de_jure_county' => '78',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Cloth_Hall',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'											
            ]);
			//Lommegau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Namur',
				'barony_category' => 'Feudal',
				'de_jure_county' => '79',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Florennes',
				'barony_category' => 'Feudal',
				'de_jure_county' => '79',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);			
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Gembloux',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '79',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//Maasgau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Maastricht',
				'barony_category' => 'Feudal',
				'de_jure_county' => '80',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'											
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Borgharen',
				'barony_category' => 'Feudal',
				'de_jure_county' => '80',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'None',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'											
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Valkenburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '80',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Hunting_Lodge',
				'quarter_harbor' => 'Stockpile'											
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Thorn',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '80',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'											
            ]);
			//Lorraine, Duchy	
			//Metzgau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Metz',
				'barony_category' => 'Burgher',
				'de_jure_county' => '81',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Roncourt',
				'barony_category' => 'Feudal',
				'de_jure_county' => '81',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Courtyard',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Semecourt',
				'barony_category' => 'Feudal',
				'de_jure_county' => '81',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Courtyard',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Gorze',
				'barony_category' => 'Feudal',
				'de_jure_county' => '81',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//Bleisgau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bitche',
				'barony_category' => 'Feudal',
				'de_jure_county' => '81',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Zweibrucken',
				'barony_category' => 'Feudal',
				'de_jure_county' => '81',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Homburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '81',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);	
			//Chaumontois
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Luneville',
				'barony_category' => 'Feudal',
				'de_jure_county' => '82',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Coaching_Inn',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Epinal',
				'barony_category' => 'Feudal',
				'de_jure_county' => '82',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Fontenoy',
				'barony_category' => 'Feudal',
				'de_jure_county' => '82',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Remiremont',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '82',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);	
			//Saargau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sarrebourg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '83',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Saarbrucken',
				'barony_category' => 'Feudal',
				'de_jure_county' => '83',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);	
			//Salingau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Weich',
				'barony_category' => 'Villager',
				'de_jure_county' => '84',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Dieuze',
				'barony_category' => 'Burgher',
				'de_jure_county' => '84',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Salins',
				'barony_category' => 'Feudal',
				'de_jure_county' => '84',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);	
			//Soulossois
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Neufchateau',
				'barony_category' => 'Feudal',
				'de_jure_county' => '85',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Coaching_Inn',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sandaucourt',
				'barony_category' => 'Feudal',
				'de_jure_county' => '85',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Courtyard',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);				
			//Toullois
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Toul',
				'barony_category' => 'Burgher',
				'de_jure_county' => '87',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ochey',
				'barony_category' => 'Villager',
				'de_jure_county' => '87',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Nancy',
				'barony_category' => 'Feudal',
				'de_jure_county' => '87',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Clairlieu',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '87',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//Luxembourg, Duchy
			//Methingau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Luxembourg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '88',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'											
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bettembourg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '88',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Stockpile'											
            ]);	
			//Barrois
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Barrois',
				'barony_category' => 'Feudal',
				'de_jure_county' => '89',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'											
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ligny',
				'barony_category' => 'Villager',
				'de_jure_county' => '89',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'											
            ]);
			//Moselgau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sedan',
				'barony_category' => 'Feudal',
				'de_jure_county' => '90',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'											
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Mouzon',
				'barony_category' => 'Feudal',
				'de_jure_county' => '90',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'											
            ]);	
			//Verdungau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Verdun',
				'barony_category' => 'Burgher',
				'de_jure_county' => '91',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'											
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Recicourt',
				'barony_category' => 'Feudal',
				'de_jure_county' => '91',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Courtyard',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'											
            ]);	
			//Wavergau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Longwy',
				'barony_category' => 'Feudal',
				'de_jure_county' => '92',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Arlon',
				'barony_category' => 'Feudal',
				'de_jure_county' => '92',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Thionville',
				'barony_category' => 'Feudal',
				'de_jure_county' => '92',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Chiny',
				'barony_category' => 'Feudal',
				'de_jure_county' => '92',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Clairefontaine',
				'barony_category' => 'Feudal',
				'de_jure_county' => '92',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);			
			//Saxony, Duchy
			//Bardengau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Luneburg',
				'barony_category' => 'Burgher',
				'de_jure_county' => '93',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Bardowick',
				'barony_category' => 'Feudal',
				'de_jure_county' => '93',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Emmendorf',
				'barony_category' => 'Villager',
				'de_jure_county' => '93',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Uelzen',
				'barony_category' => 'Burgher',
				'de_jure_county' => '93',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);	
			//Derlingau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Brunswick',
				'barony_category' => 'Feudal',
				'de_jure_county' => '94',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Cloth_Hall',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Hebesheim',
				'barony_category' => 'Villager',
				'de_jure_county' => '94',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Haldensleben',
				'barony_category' => 'Feudal',
				'de_jure_county' => '94',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Coaching_Inn',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Supplinburg',
				'barony_category' => 'Crusader_Order',
				'de_jure_county' => '94',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Riddagshausen',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '94',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//Eastfalagau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Hildesheim',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '95',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'											
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Poppenburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '95',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'											
            ]);
			//Gretingau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Celle',
				'barony_category' => 'Feudal',
				'de_jure_county' => '96',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Hanover',
				'barony_category' => 'Burgher',
				'de_jure_county' => '96',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			//Gudingau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Gandersheim',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '97',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Westerhof',
				'barony_category' => 'Feudal',
				'de_jure_county' => '97',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Courtyard',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Willershausen',
				'barony_category' => 'Villager',
				'de_jure_county' => '97',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Lamspringe',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '97',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//Harzgau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Duderstadt',
				'barony_category' => 'Burgher',
				'de_jure_county' => '98',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'											
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Pohlde',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '98',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'											
            ]);
			//
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Goslar',
				'barony_category' => 'Feudal',
				'de_jure_county' => '99',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Coaching_Inn',
				'quarter_harbor' => 'Warehouse_Quarter'											
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Harzburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '99',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Coaching_Inn',
				'quarter_harbor' => 'Stockpile'											
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Osterode',
				'barony_category' => 'Feudal',
				'de_jure_county' => '99',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Coaching_Inn',
				'quarter_harbor' => 'Warehouse_Quarter'											
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Herzberg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '99',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Coaching_Inn',
				'quarter_harbor' => 'Stockpile'											
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Walkenried',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '99',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'											
            ]);
			//Styria, Duchy
			//Traungau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Linz',
				'barony_category' => 'Feudal',
				'de_jure_county' => '100',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Wels',
				'barony_category' => 'Burgher',
				'de_jure_county' => '100',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Styraburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '100',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Kremsmunster',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '100',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Lambach',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '100',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//Attergau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Sankt George',
				'barony_category' => 'Villager',
				'de_jure_county' => '101',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'											
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Sankt Margarethen',
				'barony_category' => 'Villager',
				'de_jure_county' => '101',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Industrial_Smith',
				'quarter_harbor' => 'Stockpile'											
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Moosham',
				'barony_category' => 'Feudal',
				'de_jure_county' => '101',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'											
            ]);
			//Ennstal
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Innsbruck',
				'barony_category' => 'Burgher',
				'de_jure_county' => '102',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Coaching_Inn',
				'quarter_harbor' => 'Warehouse_Quarter'											
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Kufstein',
				'barony_category' => 'Feudal',
				'de_jure_county' => '102',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'											
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Admont',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '102',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'											
            ]);
			//Mattiggau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Mattighofen',
				'barony_category' => 'Feudal',
				'de_jure_county' => '103',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'											
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Fraunhofen',
				'barony_category' => 'Feudal',
				'de_jure_county' => '103',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'											
            ]);
			//Norital 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Brixen',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '104',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'											
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bolzano',
				'barony_category' => 'Burgher',
				'de_jure_county' => '104',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'											
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Merano',
				'barony_category' => 'Burgher',
				'de_jure_county' => '104',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'											
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tirol',
				'barony_category' => 'Feudal',
				'de_jure_county' => '104',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Hunting_Lodge',
				'quarter_harbor' => 'Stockpile'											
            ]);
			//Vinschgau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Sankt Moritz',
				'barony_category' => 'Villager',
				'de_jure_county' => '105',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'											
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Schlandersberg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '105',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Stockpile'											
            ]);
			//Swabia, Duchy
			//Ortengau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Ortenberg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '106',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Stockpile'											
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Offenburg',
				'barony_category' => 'Burgher',
				'de_jure_county' => '106',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'											
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Gengenbach',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '106',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'											
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Schuttern',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '106',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Baden',
				'barony_category' => 'Feudal',
				'de_jure_county' => '106',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Coaching_Inn',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			//Albegau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kempten',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '107',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sulzberg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '107',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Wagegg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '107',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Finkelsburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '107',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Rettenberg',
				'barony_category' => 'Crusader_Order',
				'de_jure_county' => '107',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sankt Ulrich',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '107',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//Augstgau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Augsburg',
				'barony_category' => 'Burgher',
				'de_jure_county' => '108',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Wettenhausen',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '108',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Wittelsbach',
				'barony_category' => 'Feudal',
				'de_jure_county' => '108',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Memmingen',
				'barony_category' => 'Burgher',
				'de_jure_county' => '108',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Buxheim',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '108',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Freiburg',
				'barony_category' => 'Burgher',
				'de_jure_county' => '109',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'
			]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Zahringen',
				'barony_category' => 'Feudal',
				'de_jure_county' => '109',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Roggenburg',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '109',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Muttenz',
				'barony_category' => 'Villager',
				'de_jure_county' => '109',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Wartenberg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '109',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Basel',
				'barony_category' => 'Burgher',
				'de_jure_county' => '109',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			//Churgau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Chur',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '110',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Disentis',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '110',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Feldkirchen',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '110',
				'population' => '',
				'charter_castle' => 'Fortified_Glebe',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bludenz',
				'barony_category' => 'Feudal',
				'de_jure_county' => '110',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sankt George',
				'barony_category' => 'Villager',
				'de_jure_county' => '110',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sonnenberg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '110',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//Hegau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Singen',
				'barony_category' => 'Feudal',
				'de_jure_county' => '111',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Verenahof',
				'barony_category' => 'Feudal',
				'de_jure_county' => '111',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Courtyard',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//Linzgau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Ravensburg',
				'barony_category' => 'Burgher',
				'de_jure_county' => '112',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Weingarten',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '112',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Salem',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '112',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Baindt',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '112',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//Neckargau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Greifenstein',
				'barony_category' => 'Feudal',
				'de_jure_county' => '113',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tubingen',
				'barony_category' => 'Feudal',
				'de_jure_county' => '113',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ruetlingen',
				'barony_category' => 'Burgher',
				'de_jure_county' => '113',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Rottenburg',
				'barony_category' => 'Burgher',
				'de_jure_county' => '113',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//Nordgau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Strassburg',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '114',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Hohenburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '114',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//Riesgau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Nordlingen',
				'barony_category' => 'Burgher',
				'de_jure_county' => '115',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Hunting_Lodge',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Ellwangen',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '115',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Hunting_Lodge',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//Schwerzgau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Hohenzollern',
				'barony_category' => 'Feudal',
				'de_jure_county' => '116',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'											
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Falkenstein',
				'barony_category' => 'Feudal',
				'de_jure_county' => '116',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Hunting_Lodge',
				'quarter_harbor' => 'Stockpile'										
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Ulm',
				'barony_category' => 'Burgher',
				'de_jure_county' => '116',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Hohenstaufen',
				'barony_category' => 'Feudal',
				'de_jure_county' => '116',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'											
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Biberach',
				'barony_category' => 'Burgher',
				'de_jure_county' => '116',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Buchau',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '116',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Gutenzell',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '116',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Marchtal',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '116',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//Schwyzgau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Einsiedeln',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '117',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lenzburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '117',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//Sundgau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Mulhausen',
				'barony_category' => 'Villager',
				'de_jure_county' => '118',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kolmar',
				'barony_category' => 'Burgher',
				'de_jure_county' => '118',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Murbach',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '118',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lichtenberg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '118',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//Turgau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Konstanz',
				'barony_category' => 'Burgher',
				'de_jure_county' => '119',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Sankt Gall',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '119',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Lindau',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '119',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kirchberg',
				'barony_category' => 'Villager',
				'de_jure_county' => '119',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kreuzlingen',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '119',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Reichenau',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '119',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Engelberg',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '119',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//Zurichgau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Zurich',
				'barony_category' => 'Burgher',
				'de_jure_county' => '120',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Coaching_Inn',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Winterthur',
				'barony_category' => 'Burgher',
				'de_jure_county' => '120',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kyburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '120',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//Thuringia, Duchy
			//Thuringgau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Erfurt',
				'barony_category' => 'Burgher',
				'de_jure_county' => '121',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Weimar',
				'barony_category' => 'Feudal',
				'de_jure_county' => '121',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Schmalkalden',
				'barony_category' => 'Feudal',
				'de_jure_county' => '121',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//Altgau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Gruessen',
				'barony_category' => 'Feudal',
				'de_jure_county' => '122',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Runneburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '122',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//Eichsfeld 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Muhlhausen',
				'barony_category' => 'Feudal',
				'de_jure_county' => '123',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Anrode',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '123',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//Helmegau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Nordhausen',
				'barony_category' => 'Burgher',
				'de_jure_county' => '124',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ebersburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '124',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//Langwitzgau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Arnstadt',
				'barony_category' => 'Feudal',
				'de_jure_county' => '125',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Coaching_Inn',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Liebenstein',
				'barony_category' => 'Feudal',
				'de_jure_county' => '125',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//Nabelgau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sondershausen',
				'barony_category' => 'Feudal',
				'de_jure_county' => '126',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Frankenhausen',
				'barony_category' => 'Feudal',
				'de_jure_county' => '126',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Orlagau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Rudolstadt',
				'barony_category' => 'Feudal',
				'de_jure_county' => '127',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Greifenstein',
				'barony_category' => 'Feudal',
				'de_jure_county' => '127',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Saalfeld',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '127',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Leutenberg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '127',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Ostergau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Naumburg',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '128',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Altenburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '1`28',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Moritzburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '128',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Gera',
				'barony_category' => 'Feudal',
				'de_jure_county' => '128',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ronneburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '128',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//Zwickaugau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Zwickau',
				'barony_category' => 'Feudal',
				'de_jure_county' => '129',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Coaching_Inn',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Plauen',
				'barony_category' => 'Crusader_Order',
				'de_jure_county' => '129',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//Bremen, Duchy
			//Largau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bremen',
				'barony_category' => 'Burgher',
				'de_jure_county' => '130',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Arsenal'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Delmenhorst',
				'barony_category' => 'Feudal',
				'de_jure_county' => '130',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Hoya',
				'barony_category' => 'Feudal',
				'de_jure_county' => '130',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//Agradingau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Meppen',
				'barony_category' => 'Burgher',
				'de_jure_county' => '131',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lingen',
				'barony_category' => 'Burgher',
				'de_jure_county' => '131',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Papenburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '131',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//Angerngau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Arnsberg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '132',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Soest',
				'barony_category' => 'Burgher',
				'de_jure_county' => '132',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Warstein',
				'barony_category' => 'Burgher',
				'de_jure_county' => '132',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Wedinghausen',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '132',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Marsfelde',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '132',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Herdringen',
				'barony_category' => 'Feudal',
				'de_jure_county' => '132',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Furstenberg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '132',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//Augau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Corvey',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '133',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Hoxter',
				'barony_category' => 'Burgher',
				'de_jure_county' => '133',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Amelungsborn',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '133',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Holzminden',
				'barony_category' => 'Burgher',
				'de_jure_county' => '133',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Industrial_Smith',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Everstein',
				'barony_category' => 'Feudal',
				'de_jure_county' => '133',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//Bukkigau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Buckeburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '134',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Schaumburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '134',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Hamelin',
				'barony_category' => 'Burgher',
				'de_jure_county' => '134',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//Bursibant
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bentheim',
				'barony_category' => 'Feudal',
				'de_jure_county' => '135',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Dinkelrode',
				'barony_category' => 'Villager',
				'de_jure_county' => '135',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Marienrode',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '135',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Wietmarschen',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '135',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Salzbergen',
				'barony_category' => 'Feudal',
				'de_jure_county' => '135',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Elbergen',
				'barony_category' => 'Villager',
				'de_jure_county' => '135',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Minden',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '136',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Petershagen',
				'barony_category' => 'Feudal',
				'de_jure_county' => '136',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Schlusselburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '136',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Courtyard',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Hausberge',
				'barony_category' => 'Feudal',
				'de_jure_county' => '136',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scotland',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Rahden',
				'barony_category' => 'Feudal',
				'de_jure_county' => '136',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Courtyard',			
				'quarter_suburb' => 'Coaching_Inn',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Reineburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '136',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//Dreingau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lippstadt',
				'barony_category' => 'Burgher',
				'de_jure_county' => '137',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Palisade',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Greven',
				'barony_category' => 'Feudal',
				'de_jure_county' => '137',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Earthwork',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lunen',
				'barony_category' => 'Burgher',
				'de_jure_county' => '137',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Earthwork',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Nienburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '137',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Earthwork',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//Gronegau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Osnabruck',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '138',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Yburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '138',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Courtyard',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Marienfeld',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '138',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//Hasegau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tecklenburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '139',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Scapheim',
				'barony_category' => 'Villager',
				'de_jure_county' => '139',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Cloppenburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '139',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Potter',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Krapendorf',
				'barony_category' => 'Villager',
				'de_jure_county' => '139',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//Heilangau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Stade',
				'barony_category' => 'Feudal',
				'de_jure_county' => '140',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Horneburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '140',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Coaching_Inn',
				'quarter_harbor' => 'Staple_Port'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Harburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '140',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'									
            ]);
			//Holsteingau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Niemunster',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '141',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Rendsburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '141',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Reinfeld',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '141',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//Leinegau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Gottingen',
				'barony_category' => 'Burgher',
				'de_jure_county' => '142',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Leineberg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '142',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//Mosidegau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Buxtehude',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '143',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Jesteburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '143',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//Padergau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Paderborn',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '144',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Salzkotten',
				'barony_category' => 'Burgher',
				'de_jure_county' => '144',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Wewer',
				'barony_category' => 'Villager',
				'de_jure_county' => '144',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Hardehausen',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '144',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Warburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '144',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//Stevergau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ludinghausen',
				'barony_category' => 'Feudal',
				'de_jure_county' => '145',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Asbeck',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '145',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Coesfeld',
				'barony_category' => 'Villager',
				'de_jure_county' => '145',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Darfeld',
				'barony_category' => 'Feudal',
				'de_jure_county' => '145',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Appelhulsen',
				'barony_category' => 'Feudal',
				'de_jure_county' => '145',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Earthwork',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Courtyard',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//Stormarngau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Hamburg',
				'barony_category' => 'Burgher',
				'de_jure_county' => '146',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ahrensburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '146',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//Sturmigau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Verden',
				'barony_category' => 'Burgher',
				'de_jure_county' => '147',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Rotenburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '147',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Potter',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//Sudergau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Munster',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '148',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Warendorf',
				'barony_category' => 'Villager',
				'de_jure_county' => '148',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Gelsenkirchen',
				'barony_category' => 'Villager',
				'de_jure_county' => '148',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//Werregau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Ravensberg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '149',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Sparrenberg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '149',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Limberg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '149',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Herford',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '149',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Hagen',
				'barony_category' => 'Villager',
				'de_jure_county' => '150',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Attendorn',
				'barony_category' => 'Burgher',
				'de_jure_county' => '150',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Cloth_Hall',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Essen',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '150',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Industrial_Smith',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Werden',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '150',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//Cologne, Duchy
			//Gillgau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Cologne',
				'barony_category' => 'Burgher',
				'de_jure_county' => '151',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Industrial_Smith',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Friesheim',
				'barony_category' => 'Feudal',
				'de_jure_county' => '151',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Courtyard',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Rondorf',
				'barony_category' => 'Villager',
				'de_jure_county' => '151',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Palmersdorf',
				'barony_category' => 'Crusader_Order',
				'de_jure_county' => '151',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Courtyard',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Junkersdorf',
				'barony_category' => 'Villager',
				'de_jure_county' => '151',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Burbach',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '151',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Pesch',
				'barony_category' => 'Villager',
				'de_jure_county' => '151',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//Auelgau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Siegburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '152',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Potter',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Rennenburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '152',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Blankenberg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '152',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Bonngau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bonn',
				'barony_category' => 'Feudal',
				'de_jure_county' => '153',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Industrial_Potter',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Remagen',
				'barony_category' => 'Burgher',
				'de_jure_county' => '153',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//Deutzgau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Deutz',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '154',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Hunting_Lodge',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Altenberg',
				'barony_category' => 'Crusader_Order',
				'de_jure_county' => '154',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Hunting_Lodge',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//Magdeburg, Duchy
			//Nordthuringgau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Magdeburg',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '155',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Haldesleben',
				'barony_category' => 'Feudal',
				'de_jure_county' => '155',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Coaching_Inn',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Oschersleben',
				'barony_category' => 'Burgher',
				'de_jure_county' => '155',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Unseburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '155',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Calbe',
				'barony_category' => 'Feudal',
				'de_jure_county' => '155',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//Balsamgau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Stendal',
				'barony_category' => 'Feudal',
				'de_jure_county' => '156',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Osterburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '156',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//Friesenfeld
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Erdeborn',
				'barony_category' => 'Villager',
				'de_jure_county' => '157',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Alberstedt',
				'barony_category' => 'Villager',
				'de_jure_county' => '157',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//Hartingau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Halberstadt',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '158',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Quedlinburg',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '158',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Gernrode',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '158',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//Hassegau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Merseburg',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '159',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Halle',
				'barony_category' => 'Burgher',
				'de_jure_county' => '159',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Wettin',
				'barony_category' => 'Feudal',
				'de_jure_county' => '159',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//Osterwalde
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Seehausen',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Salzwedel',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Cloth_Hall',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//Schwabengau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bernburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '161',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Nienburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '161',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ascherleben',
				'barony_category' => 'Feudal',
				'de_jure_county' => '161',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Hadmersleben',
				'barony_category' => 'Feudal',
				'de_jure_county' => '161',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ballenstedt',
				'barony_category' => 'Feudal',
				'de_jure_county' => '161',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//Mainz, Duchy
			//Wormsfeld 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Mainz',
				'barony_category' => 'Burgher',
				'de_jure_county' => '162',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Potter',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Worms',
				'barony_category' => 'Burgher',
				'de_jure_county' => '162',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Oppenheim',
				'barony_category' => 'Villager',
				'de_jure_county' => '162',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lorsch',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '162',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Eibingen',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '162',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//Engersgau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Hammerstein',
				'barony_category' => 'Feudal',
				'de_jure_county' => '163',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Logenstein',
				'barony_category' => 'Feudal',
				'de_jure_county' => '163',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Kassel',
				'barony_category' => 'Feudal',
				'de_jure_county' => '164',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Cloth_Hall',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Staufenberg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '164',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Hersfeld',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '164',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Fritzlar',
				'barony_category' => 'Feudal',
				'de_jure_county' => '164',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Cloth_Hall',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Friedelshausen',
				'barony_category' => 'Villager',
				'de_jure_county' => '164',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//Lahngau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Limburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '165',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Cloth_Hall',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Marburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '165',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Weilburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '165',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Wetzlar',
				'barony_category' => 'Feudal',
				'de_jure_county' => '165',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Potter',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Lobdengau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Mannheim',
				'barony_category' => 'Villager',
				'de_jure_county' => '166',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Heidelberg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '166',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//Maingau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Aschaffenburg',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '167',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Seligenstadt',
				'barony_category' => 'Feudal',
				'de_jure_county' => '167',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Nahegau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ingelheim',
				'barony_category' => 'Feudal',
				'de_jure_county' => '168',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Spiesheim',
				'barony_category' => 'Villager',
				'de_jure_county' => '168',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Saulheim',
				'barony_category' => 'Burgher',
				'de_jure_county' => '168',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Flonheim',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '168',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//Niddagau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Nidda',
				'barony_category' => 'Feudal',
				'de_jure_county' => '169',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Warnsberg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '169',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Coaching_Inn',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Speyergau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Speyer',
				'barony_category' => 'Burgher',
				'de_jure_county' => '170',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Dudenhofen',
				'barony_category' => 'Villager',
				'de_jure_county' => '170',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Wissembourg',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '170',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Klingenmunster',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '170',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//Ufgau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Sankt Leon',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '171',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Bretzenheim',
				'barony_category' => 'Villager',
				'de_jure_county' => '171',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//Wettergau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Frankfurt',
				'barony_category' => 'Burgher',
				'de_jure_county' => '172',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Homburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '172',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kransberg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '172',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Falkenstein',
				'barony_category' => 'Feudal',
				'de_jure_county' => '172',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Wurmgau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Pforzheim',
				'barony_category' => 'Feudal',
				'de_jure_county' => '173',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Liebeneck',
				'barony_category' => 'Feudal',
				'de_jure_county' => '173',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Salzburg, Duchy
			//Salzburggau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Salzburg',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '174',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Berchtesgaden',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '174',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//Chiemgau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Falkenstein',
				'barony_category' => 'Feudal',
				'de_jure_county' => '175',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Traunstein',
				'barony_category' => 'Feudal',
				'de_jure_county' => '175',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Coaching_Inn',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Baumburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '175',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Rosenheim',
				'barony_category' => 'Feudal',
				'de_jure_county' => '175',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Hunting_Lodge',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Chiemsee',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '175',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Courtyard',			
				'quarter_suburb' => 'Hunting_Lodge',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Lungau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tamswick',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '176',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sankt Michael',
				'barony_category' => 'Villager',
				'de_jure_county' => '176',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//Pinzgau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Zell',
				'barony_category' => 'Burgher',
				'de_jure_county' => '177',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Coaching_Inn',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Saalfelden',
				'barony_category' => 'Feudal',
				'de_jure_county' => '177',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Sundergau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Tegernsee',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '178',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Ebertshausen',
				'barony_category' => 'Villager',
				'de_jure_county' => '178',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Munich',
				'barony_category' => 'Feudal',
				'de_jure_county' => '178',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Staffelsee',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '178',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//Trier, Duchy
			//Bitgau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bitburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '179',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Trier',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '179',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Prum',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '179',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Gerolstein',
				'barony_category' => 'Feudal',
				'de_jure_county' => '179',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Echternach',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '179',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Vianden',
				'barony_category' => 'Feudal',
				'de_jure_county' => '179',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//Maifeld 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Eltz',
				'barony_category' => 'Feudal',
				'de_jure_county' => '180',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Andernach',
				'barony_category' => 'Feudal',
				'de_jure_county' => '180',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Salm',
				'barony_category' => 'Villager',
				'de_jure_county' => '180',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//Hunsruckgau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ravengiersburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '181',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ehrenburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '181',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//Trechirgau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Treis',
				'barony_category' => 'Feudal',
				'de_jure_county' => '182',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Koblenz',
				'barony_category' => 'Crusader_Order',
				'de_jure_county' => '182',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//Lombardy, Kingdom
			//Milano, Duchy
			//Milano 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Milano',
				'barony_category' => 'Feudal',
				'de_jure_county' => '183',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Monza',
				'barony_category' => 'Burgher',
				'de_jure_county' => '183',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lecco',
				'barony_category' => 'Burgher',
				'de_jure_county' => '183',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Garegnano',
				'barony_category' => 'Villager',
				'de_jure_county' => '183',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Morimondo',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '183',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Piona',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '183',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Como',
				'barony_category' => 'Feudal',
				'de_jure_county' => '183',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Torba',
				'barony_category' => 'Feudal',
				'de_jure_county' => '183',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'San Giuliano',
				'barony_category' => 'Feudal',
				'de_jure_county' => '183',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//Bergamo 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bergamo',
				'barony_category' => 'Feudal',
				'de_jure_county' => '184',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'San Pietro',
				'barony_category' => 'Villager',
				'de_jure_county' => '184',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Stezzano',
				'barony_category' => 'Burgher',
				'de_jure_county' => '184',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Courtyard',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Treviolo',
				'barony_category' => 'Burgher',
				'de_jure_county' => '184',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Mozzo',
				'barony_category' => 'Villager',
				'de_jure_county' => '184',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Astino',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '184',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//Brescia 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Brescia',
				'barony_category' => 'Burgher',
				'de_jure_county' => '185',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Rovato',
				'barony_category' => 'Burgher',
				'de_jure_county' => '185',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Polpenazze',
				'barony_category' => 'Burgher',
				'de_jure_county' => '185',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bedizzole',
				'barony_category' => 'Feudal',
				'de_jure_county' => '185',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'San Giorgo',
				'barony_category' => 'Villager',
				'de_jure_county' => '185',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//Crema 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Crema',
				'barony_category' => 'Burgher',
				'de_jure_county' => '186',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Vaiano',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '186',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bagnolo',
				'barony_category' => 'Villager',
				'de_jure_county' => '186',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Trescore',
				'barony_category' => 'Feudal',
				'de_jure_county' => '186',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);				
			//Cremona 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Cremona',
				'barony_category' => 'Burgher',
				'de_jure_county' => '187',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Caorso',
				'barony_category' => 'Feudal',
				'de_jure_county' => '187',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//Frignana 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Pavullo',
				'barony_category' => 'Villager',
				'de_jure_county' => '188',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Coaching_Inn',
				'quarter_harbor' => 'Stockpile'									
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Monterastello',
				'barony_category' => 'Villager',
				'de_jure_county' => '188',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Montecuccolo',
				'barony_category' => 'Feudal',
				'de_jure_county' => '188',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'Palisade',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);				
			//Lodi 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lodi',
				'barony_category' => 'Burgher',
				'de_jure_county' => '189',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Industrial_Potter',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Cerreto',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '189',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);	
			//Mantua 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Mantua',
				'barony_category' => 'Burgher',
				'de_jure_county' => '190',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Polirone',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '190',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Levata',
				'barony_category' => 'Villager',
				'de_jure_county' => '190',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Pietola',
				'barony_category' => 'Villager',
				'de_jure_county' => '190',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Cavriana',
				'barony_category' => 'Feudal',
				'de_jure_county' => '190',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Gonzaga',
				'barony_category' => 'Feudal',
				'de_jure_county' => '190',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);	
			//Modena 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Modena',
				'barony_category' => 'Burgher',
				'de_jure_county' => '191',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Potter',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Mirandola',
				'barony_category' => 'Feudal',
				'de_jure_county' => '191',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Vignola',
				'barony_category' => 'Feudal',
				'de_jure_county' => '191',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Nonantola',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '191',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);	
			//Novara 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Novara',
				'barony_category' => 'Burgher',
				'de_jure_county' => '192',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Chiavenna',
				'barony_category' => 'Feudal',
				'de_jure_county' => '192',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);	
			//Parma
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Parma',
				'barony_category' => 'Burgher',
				'de_jure_county' => '193',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Fidenza',
				'barony_category' => 'Feudal',
				'de_jure_county' => '193',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Colorno',
				'barony_category' => 'Feudal',
				'de_jure_county' => '193',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sanguigna',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '193',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'San Vitale',
				'barony_category' => 'Villager',
				'de_jure_county' => '193',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Castrignano',
				'barony_category' => 'Feudal',
				'de_jure_county' => '193',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bardi',
				'barony_category' => 'Feudal',
				'de_jure_county' => '193',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);				
			//Pavia 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Pavia',
				'barony_category' => 'Feudal',
				'de_jure_county' => '194',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Certosa',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '194',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'San Martino',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '194',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Carpignano',
				'barony_category' => 'Villager',
				'de_jure_county' => '194',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);	
			//Piacenza
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Piacenza',
				'barony_category' => 'Burgher',
				'de_jure_county' => '195',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Grazzano',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '195',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bobbio',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '195',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//Reggio
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Reggio',
				'barony_category' => 'Feudal',
				'de_jure_county' => '196',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bagnolo',
				'barony_category' => 'Feudal',
				'de_jure_county' => '196',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Fogliano',
				'barony_category' => 'Feudal',
				'de_jure_county' => '196',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Canossa',
				'barony_category' => 'Feudal',
				'de_jure_county' => '196',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tortona',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Montegioco',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Garbagna',
				'barony_category' => 'Villager',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//Piedmont, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Turino',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Vercelli',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Tuscany, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Siena',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Potter',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Verona, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Padova',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Vicenza',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Trent',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Aquileia, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Aquileia',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'									
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Udine',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Gorizia',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);	
			//Florence, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Florence',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Arezzo',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Perugia',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Assisi',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//Genoa, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Genoa',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Arsenal'								
            ]);
			//Noli, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Noli',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'								
            ]);
			//Lucca, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lucca',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Pisa, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Pisa',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Arsenal'								
            ]);
			//Venice, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Venice',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Arsenal'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Belluno',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Treviso',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Bohemia, Kingdom
			//Bohemia, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Prague',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Lusatia, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Leipzig',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Cloth_Hall',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Moravia, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Olmutz',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Lower Silesia, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Leubus',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Upper Silesia, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Breslau',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);			
			//Burgundy, Kingdom
			//Burgundy, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Autun',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Auxerre',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Citeaux',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Macon',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Cluny',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Nevers',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Cisjurania, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Grenoble',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Embrun',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Gap',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Apt',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sisteron',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lyon',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Valence',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Vienne',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);	
			//Transjurania, Duchy
			//Amosenais 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Besancon',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Dole',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Aargau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Habsburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);			
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Aarau',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bern',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lucerne',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Muri',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lausanne',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Orange, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Orange',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Avignon',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Carpentras',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Cavaillon',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Vaison',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);			
			//Provence, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Aix',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Potter',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Arles',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tarascon',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Hunting_Lodge',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Riez',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Senez',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Digne',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Marseille 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Marseille',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Saint Jean',
				'barony_category' => 'Crusader_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Nice',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'							
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Vence',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Glandeves',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Frejus',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Toulon',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Arsenal'						
            ]);			
			//Savoy, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Aosta',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Geneva',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);			
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Moutiers',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sion',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Papal States, Kingdom
			//Rome, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Rome',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Patriarch',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Cassino',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//Romagna, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ferrara',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bologna',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);		
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ravenna',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Arsenal'								
            ]);
			//Spoleto, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ancona',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Staple_Port'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Chieti',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);				
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Fermo',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Pescara',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);	
			//Teutonic Order State, Kingdom
			//Livonia, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Riga',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Arsenal'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Dorpat',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Goldingen',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Estonia, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Reval',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Staple_Port'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Pernau',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Staple_Port'								
            ]);
			//Prussia, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Marienwerder',
				'barony_category' => 'Crusader_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Braunsberg',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Koningsberg',
				'barony_category' => 'Crusader_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Staple_Port'								
            ]);
			//Pomerelia, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kulm',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Pomerania, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kammin',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Rostock',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Greifswald',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'								
            ]);
			//Brandenburg, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Brandenburg',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Havelberg',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Mecklenburg, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Schwerin',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ratzeburg',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lubeck',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Industrial_Potter',
				'quarter_harbor' => 'Arsenal'								
            ]);
			//France, Empire
			//France, Kingdom
			//Anjou, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Angers',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bauge',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Hunting_Lodge',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Mans',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tours',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//Aquitaine, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bordeaux',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Fronsac',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Agen',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Angouleme',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bazas',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Roquetaillade',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Villandraut',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Limoges',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Saint Angel',
				'barony_category' => 'Villager',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Glebe',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lectoure',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Perigeux',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Saintes',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'										
            ]);
			//Auvergne, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Clermont',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Berry, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bourges',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Casgony, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Auch',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Pau',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Oloron',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tarbes',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Saint Bertrand',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Saint Lizier',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Dax',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]); 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bayonne',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Aire',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Champagne, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Reims',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Brienne',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Chalons',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Langres',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Meaux',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sens',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Troyes',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Clairvaux',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//Francia, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Paris',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Parliament',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Beauvais',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Senlis',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Soissons',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Normandy, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Rouen',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sees',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Avranches',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bayeux',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Caen',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Caux
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Fecamp',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Graville',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tancarville',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Stockpile'							
            ]);				
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Coutances',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Evreux',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lisieux',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Orleanais, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Orleans',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Chartres',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Picardy, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Arras',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Amiens',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bruges',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Cloth_Hall',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Staple_Port'								
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Laon',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Noyon',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Therouanne',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tournai',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Cloth_Hall',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Poitou, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Poitiers',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//Toulouse, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Toulouse',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Albi',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Carcasonne',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Melgueil
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Melgueil',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'								
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Montpellier',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);				
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Maguelonne',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'							
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Narbonne',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'						
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Beziers',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);				
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Agde',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'						
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Nimes',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);				
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Uzes',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Cahors',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Rudelle',
				'barony_category' => 'Villager',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Glebe',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);			
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Rodez',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Puy',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Brittany, Kingdom
			//Brittany, Duchy			
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Quimper',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Dol',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Saint Malo',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Saint Pol',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Vannes',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);	
			//Domnonee, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Saint Brieuc',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Treguier',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Retz, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Nantes',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Rennes',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Britain, Empire
			//Ireland, Kingdom
			//Connacht, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Galway',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tuam',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Clonfert',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Killala',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Elphin',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);				
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Achonry',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);	
			//Leinster, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kildare',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kilkenny',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Almshouse',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Cashel',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Waterford',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Almshouse',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ferns',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tintern',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//Meath, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Dublin',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Almshouse',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Staple_Port'								
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ardagh',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tara',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Earthwork',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kells',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Clonard',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bective',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Fore',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Taghmon',
				'barony_category' => 'Villager',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Glebe',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);			
			//Munster, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ennis',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Corcomroe',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Cork',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Almshouse',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Cloyne',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Killarney',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Aghadoe',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);				
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Limerick',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Almshouse',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Ulster, Duchy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Dromore',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Armagh',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kilmore',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Derry',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Raphoe',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Downpatrick',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Grey',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Inch',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Mellifont',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Clogher',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);	
			//England, Kingdom
			//East Anglia, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Norwich',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Saint Benet',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Saint Edmunds',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Essex, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Saint Albans',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Waltham',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'London',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Parliament',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Cloth_Hall',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Staple_Port'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Westminster',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Hwicce, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Gloucester',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Cirencester',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Almshouse',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kenilworth',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Coventry',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Worcester',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);				
			//Kent, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Rochester',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Canterbury',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Almshouse',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//Lindsey, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lincoln',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//Mercia, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Chester',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Hereford',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lichfield',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);	
			//Mid Anglia, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Cambridge',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School',
				'quarter_downtown' => 'Almshouse',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ely',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Thorney',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Peterborough',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Oxford',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//Northumbria, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Carlisle',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Durham',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Jarrow',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'								
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Alnwick',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'York',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Selby',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Scarborough',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'								
            ]);
			//Sussex, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Chichester',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Battle',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);
			//Wessex, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Abingdon',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Winchester',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bath',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'									
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Wells',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Salisbury',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);	
			//Wales, Kingdom
			//Cornwall, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Exeter',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//Dyfed, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Saint Davids',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);	
			//Gwent, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Llandaff',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);	
			//Gwyned, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bangor',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Saint Asaph',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);	
			//Scotland, Kingdom
			//Alba, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Aberdeen',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Arsenal'									
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Deer',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'								
            ]);				
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Saint Andrews',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Aberdour',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'							
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Balmerino',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Culross',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Dunfermline',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Inchcolm',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lindores',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);				
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Brechin',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Arbroath',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'						
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Angus',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'						
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Dunkeld',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Scone',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Inchaffray',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);	
			//Bernicia, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Edinburgh',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Parliament',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Staple_Port'							
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Holyrood',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Dunblane',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Cambuskenneth',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);
			//Dalriada, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lismore',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'							
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Coeffin',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'							
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Saddell',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'							
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Peel',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'							
            ]);	
			//Fortriu, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ross',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Elgin',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Staple_Port'					
            ]);	
			//Galloway, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Dundrennan',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'					
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Whithorn',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Staple_Port'						
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Glenluce',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);
			//Gododdin, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Dercongal',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'						
            ]);	
			//Roxburghshire
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Roxburgh',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Jedburgh',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'					
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kelso',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'					
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Dryburgh',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'					
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Melrose',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'						
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Hawick',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'						
            ]);				
			//Strathclyde, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Crossraguel',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'				
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Glasgow',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Paisley',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);		
			//Aragon, Empire
			//Aragon, Kingdom
			//Barcelona, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Barcelona',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Arsenal'						
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Vic',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);				
			//Girona, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Emporda',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'						
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Girona',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'						
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Perpignan',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'					
            ]);	
			//Huesca, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Huesca',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//Lleida, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lleida',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Urgell',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);
			//Tarragona, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tarragona',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'					
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tortosa',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'					
            ]);
			//Teruel, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Teruel',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'					
            ]);	
			//Zaragoza, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Zaragoza',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tarazona',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'					
            ]);				
			//Navarre, Kingdom
			//Alava, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Calahorra',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);
			//Navarre, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Pamplona',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'					
            ]);			
			//Castile, Empire
			//Castile, Kingdom
			//Avila, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Avila',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'					
            ]);				
			//Burgos, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Burgos',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'								
            ]);				
			//Palencia, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Palencia',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Potter',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);				
			//Segovia, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Segovia',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);
			//Soria, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Osma',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);	
			//Toledo, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Toledo',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Industrial_Potter',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);
			//Valladolid, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Valladolid',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Parliament',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Monastic_School',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);
			//Galicia, Kingdom	
			//Coruna, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Santiago',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'					
            ]);	
			//Lugo, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lugo',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);
			//Ourense, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ourense',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'					
            ]);		
			//Pontevedra, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Vigo',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'						
            ]);		
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tuy',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'						
            ]);				
			//Leon, Kingdom
			//Caceres, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Plasencia',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);			
			//Leon, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Astorga',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Leon',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);
			//Salamanca, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Rodrigo',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Salamanca',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);
			//Zamora, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Zamora',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);			
			//Asturias, Kingdom
			//Asturias, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Oviedo',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'					
            ]);	
			//Portugal, Kingdom
			//Aveiro, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Braga',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Porto',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Arsenal'					
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Viana',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Staple_Port'				
            ]);				
			//Beira, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Coimbra',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'					
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Viseu',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'					
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lamego',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'					
            ]);
			//Braganca, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Braganca',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//Estremadura, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lisboa',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Parliament',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'						
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Santarem',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Setubal',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);				
			//Danelagen, Empire
			//Denmark, Kingdom
			//Jutland, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Aarhus',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'							
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Borglum',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'							
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ribe',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Industrial_Potter',
				'quarter_harbor' => 'Staple_Port'							
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Viborg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Aalborg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'					
            ]);			
			//Scania, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lund',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Staple_Port'					
            ]);
			//Sjaeland, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Odense',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Staple_Port'					
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Roskilde',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kobenhavn',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Parliament',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Arsenal'					
            ]);	
			//Norway, Kingdom
			//Nordjor (Northern Isles), Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kirkwall',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'					
            ]);	
			//Sodor (Southern Isles), Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Iona',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);				
			//Hedmark (eidsivating), Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Hamar',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);				
			//Oppland (frostating), Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Trondheim',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'			
            ]);				
			//Rogaland (gulating), Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Stavanger',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Almshouse',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'		
            ]);				
			//Vestland (gulating), Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bergen',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Arsenal'				
            ]);
			//Viken (borgarting), Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Oslo',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Arsenal'					
            ]);			
			//Sweden, Kingdom
			//Gotland, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Linkoping',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'					
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Skara',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);
			//Osterland, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Turku',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Staple_Port'						
            ]);
			//Smaland, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Vaxjo',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);
			//Svaeland, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Stockholm',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Arsenal'						
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Strangnas',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Uppsala',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'					
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Vasteras',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);
			//Poland, Empire
			//Poland, Kingdom
			//Lesser Poland, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tarnow',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sandomierz',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);
			//Gnesen, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Gnesen',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//Krakow, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Krakow',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Parliament',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Cloth_Hall',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);
			//Kuyavia, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Leslau',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);
			//Plock, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Plock',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'			
            ]);
			//Posen, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Posen',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Cloth_Hall',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Gorzow',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'			
            ]);				
			//Lithuania, Kingdom	
			//Minsk, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Minsk',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'			
            ]);				
			//Tracken, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kauen',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'			
            ]);	
			//Vilnius, Duchy			
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Vilnius',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'		
            ]);				
			//Hungary, Empire
			//Hungary, Kingdom
			//Hungary, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Gyor',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'			
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Pannonhalma',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'			
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Vezprem',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'			
            ]);
			//Buda, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kalocsa',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Pecs',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Esztergom',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Visegrad',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'		
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Fehervar',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'			
            ]);				
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Eger',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'		
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Buda',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);
			//Nitra, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Vac',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Pozsony',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);
			//Temesvar, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bihar',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Nagyvarad',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'			
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Csanad',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'					
            ]);
			//Transylvania, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Guylafehervar',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//Croatia, Kingdom
			//Dalmatia, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Modrus',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'					
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kotor',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);
			//Ragusa, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ragusa',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Arsenal'				
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Korcula',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Narona',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'			
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sibenik',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);	
			//Slavonia, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Zagreb',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'					
            ]);		
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sisak',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Szavaszentdemeter',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'			
            ]);
			//Split, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Split',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Solin',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Hvar',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Makarska',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'							
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Trogir',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'							
            ]);	
			//Zadar, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Zadar',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Nin',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Rab',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'						
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Cres',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'							
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Osor',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'						
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Veglia',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'					
            ]);
			//Trinacria, Empire
			//Sicily, Kingdom
			//Palermo, Duchy
			//Palermo
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Palermo',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Parliament',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Arsenal'						
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Monreale',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Corleone',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//Caccamo
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Caccamo',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);		
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Termini',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//Cefalu
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Cefalu',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'							
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Castelbuono',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);				
			//Trapani, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Trapani',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'						
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Alcamo',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);				
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Marsala',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'						
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Mazara',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'						
            ]);				
			//Messina, Duchy
			//Messina
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Messina',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Staple_Port'						
            ]);		
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Oliveri',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'					
            ]);
			//Milazzo
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Milazzo',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'						
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Patti',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'						
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tindari',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);			
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Taormina',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);			
			//Agrigento, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Agrigento',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Staple_Port'			
            ]);	
			//Gela
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Gela',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Riesi',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'					
            ]);	
			//Caltanisetta
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Caltanisetta',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Mazzarino',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'				
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Mussomeli',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'				
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Mafredonico',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'				
            ]);			
			//Catania, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Catania',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'			
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Caltagirone',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Industrial_Potter',
				'quarter_harbor' => 'Warehouse_Quarter'			
            ]);				
			//Siracusa, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Siracusa',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Arsenal'			
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Modica',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ragusa',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);				
			//Naples, Kingdom
			//Naples, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Naples',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Arsenal'				
            ]);			
			//Capua, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Capua',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);			
			//Amalfi, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Amalfi',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Arsenal'				
            ]);				
			//Calabria, Duchy
			//Catanzaro
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Catanzaro',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Staple_Port'				
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'San Floro',
				'barony_category' => 'Villager',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'				
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Squillace',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Cosenza',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Staple_Port'				
            ]);		
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Crotone',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Staple_Port'				
            ]);		
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Reggio',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Staple_Port'				
            ]);				
			//Basilicata, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Matera',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Potenza',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);			
			//Taranto, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Taranto',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Arsenal'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bari',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Arsenal'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Brindisi',
				'barony_category' => 'Crusader_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lecce',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);				
			//Foggia, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Foggia',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);			
			//Benevento, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Benevento',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);			
			//Salerno, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Salerno',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);					
			//Sardinia, Kingdom
			//Gallura, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Olbia',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);				
			//Logudoro (torres), Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Torres',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sassari',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);				
			//Arborea, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Oristano',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sanluri',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//Cagliari, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Cagliari',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);	
			//Oglistria
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tortoli',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Nuoro',
				'barony_category' => 'Villager',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'				
            ]);	
			//Sarrabus
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Castiadas',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'San Vito',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'				
            ]);				
			//Byzantine, Empire			
			//Thrace, Kingdom
			//Thrace, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Constantinople',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Patriarch',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Coaching_Inn',
				'quarter_harbor' => 'Arsenal'						
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ergisce',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//Macedonia, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Adrianople',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bergule',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);				
			//Thessalonica, Kingdom
			//Hellas, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Athens',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Thebes',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Chalcis',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'						
            ]);				
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Larissa',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Elassona',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Farsala',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lamia',
				'barony_category' => 'Crusader_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);		
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Thaumace',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ravenica',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Amphissa',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bodonitsa',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'						
            ]);				
			//Peloponessos, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Corinth',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Arsenal'						
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Nemea',
				'barony_category' => 'Villager',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'						
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Argos',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'						
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Patras',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'						
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Monemvasia',
				'barony_category' => 'Crusader_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'						
            ]);			
			//Archipelago, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Chios',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Arsenal'						
            ]);			
			//Epirus, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Naupaktos',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'						
            ]);				
			//Thessalonica, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Thessalonica',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'						
            ]);				
			//Strymon, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Serres',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Christoupolis',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'						
            ]);				
			//Trebizond, Kingdom
			//Paphlagonia, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Germanicopolis',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);				
			//Armeniac, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Amasia',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);				
			//Chaldia, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Trapezus',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'						
            ]);				
			//Crimea, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Chersonesus',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'						
            ]);				
			//Anatolia, Kingdom
			//Thracesia, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sardes',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);				
			//Bucellaria, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ancyra',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);			
			//Anatolia, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Iconium',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);				
			//Cappadocia, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Caesarea',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);				
			//Seleucia, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Seleucea',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'						
            ]);				
			//Opsicia, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Cyzicus',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'						
            ]);				
			//Nicaea, Duchy
			//
			//nicaea
            DB::table('baronies')->insert([
				'barony_name' => 'Nicaea',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);			
			//Lycia, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Rhodes',
				'barony_category' => 'Crusader_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'						
            ]);				
			//Pamphylia, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Attaleia',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Arsenal'						
            ]);									
			//Georgia, Kingdom
			//Colchis, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Phasis',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'						
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Pityus',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'						
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kutaisi',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Gelati',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Monastic_School',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'						
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Batumi',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'						
            ]);				
			//Javakheti, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Akhalkalaki',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);				
			//Kartli, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bolnisi',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tiblisi',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Rustavi',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Gori',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);				
			//Kakheti, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Telavi',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ikalto',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'						
            ]);				
			//Armenia, Kingdom
			//Vaspurakan, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Van',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);				
			//Taron, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Acilisene',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Karapet',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);				
			//Kars, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kars',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ani',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);			
			//Azerbaijan, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Baku',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'						
            ]);				
			//Kievan Rus, Empire
			//Kiev, Kingdom
			//Kiev, Duchy 
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kiev',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Pechersk',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'						
            ]);				
			//Pereyaslavl, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Pereyaslavl',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//Chernigov, Kingdom
			//Chernigov, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Chernigov',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bryansk',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Palisade',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kursk',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Palisade',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Oryol',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);				
			//Ryazan, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ryazan',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);			
			//Murom, Duchy
			//Murom
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Murom',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Palisade',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Borisoglebsky',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'						
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tula',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kaluga',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);				
			//Halych, Kingdom
			//Halych, Duchy
			//Halych
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Halych',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Palisade',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kolomyia',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Palisade',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);			
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Peremyshl',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Palisade',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lviv',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Palisade',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Belz',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);				
			//Volhynia, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Volodymyr',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Palisade',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);			
			//Turov, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Turov',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Palisade',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);				
			//Vladimir, Kingdom
			//Vladimir, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Vladimir',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);			
			//Moscow, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Moscow',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Orekhovo',
				'barony_category' => 'Villager',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'						
            ]);				
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Korolyov',
				'barony_category' => 'Villager',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'						
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Danilov',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'						
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Dmitrov',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sergiyev',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Palisade',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'						
            ]);			
			//Suzdal, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Suzdal',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Yuryev',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Palisade',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);				
			//Smolensk, Kingdom
			//Smolensk, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Smolensk',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);				
			//Toropets, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Toropets',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Palisade',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);				
			//Mstislavl, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Mstislavl',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Palisade',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);				
			//Rzhev, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Rzhev',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Palisade',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//Tver, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tver',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kostroma',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ipatiev',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'						
            ]);			
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Rostov',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//Yaroslavl
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Yaroslavl',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Uglich',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Vologda',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Cherepovets',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'						
            ]);				
			//Novgorod, Kingdom
			//Novgorod, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Novgorod',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);			
			//Polotsk, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Polotsk',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);			
			//Pleskov, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Pleskov',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);			
			//Bulgaria, Empire
			//Bulgaria, Kingdom
			//Preslav, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Preslav',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//Tarnovo, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tarnovo',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Patriarch',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);				
			//Wallachia, Kingdom
			//Wallachia, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Targoviste',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Potter',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);			
			//Moldavia, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Suceava',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);				
			//Serbia, Empire
			//Serbia, Kingdom
			//Rashka, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ras',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'						
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Studenica',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'						
            ]);				
			//Bosnia, Kingdom
			//Bosnia, Duchy		
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Srebrenik',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'						
            ]);				
			//Cordoba, Empire
			//Andalucia, Kingdom
			//Arcos, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Cadiz',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'					
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Jerez',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);				
			//Cordoba, Duchy			
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Cordoba',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Diet',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);
			//Granada, Duchy	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Granada',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Coaching_Inn',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Jaen',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Andujar',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);
			//Malaga, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Malaga',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'			
            ]);	
			//Sevilla, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sevilla',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'			
            ]);
			//Algarves, Kingdom
			//Algarves, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Faro',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Silves',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'					
            ]);	
			//Badajoz, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Badajoz',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Beja',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'					
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Evora',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Merida',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//Huelva, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Huelva',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);			
			//Levante, Kingdom
			//Alpuente, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Alcala',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'			
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Cuenca',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Siguenza',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'			
            ]);
			//Baleares, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Palma',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Arsenal'			
            ]);				
			//Denia, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Albacete',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'			
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Denia',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'			
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Jativa',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'		
            ]);	
			//Murcia, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Cartagena',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'	
            ]);			
			//Valencia, Duchy			
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Valencia',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Arsenal'				
            ]);
			//Almohad, Empire
			//Marrakesh, Kingdom
			//Marrakesh, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Marrakesh',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Safi',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Mogador',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);
			//Sijilmassa, Duchy
			//Tafilalt
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sijilmassa',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Rissani',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Merzouga',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Erfoud',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);				
			//Ouarzazate, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ouarzazate',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Zagora',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Potter',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tinghir',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);			
			//Fez, Kingdom
			//Fez, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Fez',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Coaching_Inn',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Meknes',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//Rabat, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Rabat',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Coaching_Inn',
				'quarter_harbor' => 'Staple_Port'				
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sale',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Temara',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Glebe',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'				
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Mehdya',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);				
			//Tangier, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tangier',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tetouan',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kebir',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ouazzane',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Scriptorium_Library',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);				
			//Kairouan, Kingdom
			//Kairouan, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kairouan',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//Tunis, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tunis',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Arsenal'				
            ]);		
			//Djerid, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Gafsa',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//Tripoli, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tripoli',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);		
			//Sirte, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sirte',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);				
			//Tlemcen, Kingdom
			//Tlemcen, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tlemcen',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//Oujda, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Oujda',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//Oran, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Oran',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);	
			//Algiers, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Algiers',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);	
			//Tiaret, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tiaret',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//Mzab, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Mzab',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//Laghouat, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Laghouat',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//Djelfa, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Djelfa',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);				
			//Ifni, Kingdom
			//Ifni, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ifni',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tiznit',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//Taroudant, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Taroudant',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Tanner',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Agadir',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);				
			//Figuig, Kingdom
			//Figuig, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Figuig',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bechar',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Moghrar',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//Adrar, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Adrar',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Timimoun',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);				
			//Abbasid, Empire
			//Baghdad, Kingdom
			//Baghdad, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Baghdad',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);				
			//Syria, Kingdom
			//Damascus, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Damascus',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Coaching_Inn',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//Jabal, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Aleppo',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Coaching_Inn',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//Homs, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Homs',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);			
			//Najd, Kingdom
			//Najd, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kharj',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);			
			//Antioch, Kingdom
			//Antioch, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Antioch',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Patriarch',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);				
			//Fatimid, Empire
			//Cairo, Kingdom
			//Cairo, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Cairo',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);
			//Alexandria, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Alexandria',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Patriarch',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Arsenal'				
            ]);
			//Mansoura, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Mansoura',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);
			//Damietta, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Damietta',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Arsenal'				
            ]);
			//Minya, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Minya',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);
			//Asyut, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Asyut',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);
			//Kharga, Duchy
			//Kharga
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kharga',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Wahat',
				'barony_category' => 'Villager',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'				
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Mahariq',
				'barony_category' => 'Villager',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'				
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Munira',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'				
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Dabadib',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'				
            ]);
			//Dakhla
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Dakhla',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Masara',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);
			//Baritun, Duchy
			//Baritun
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Baritun',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Negila',
				'barony_category' => 'Villager',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'				
            ]);
			//Siwa
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Siwa',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Shali',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Aghurmi',
				'barony_category' => 'Villager',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Granary',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'				
            ]);
			//Natrun
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Nitria',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'				
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Scetis',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'				
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kellia',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'				
            ]);
			//Boula, Duchy
			//Boula
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Deir Anba',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'				
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Deir Mar',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'None',
				'quarter_downtown' => 'Hospice',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'				
            ]);
			//Qoseir
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Qoseir',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Banat',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'				
            ]);
			//Jerusalem, Kingdom
			//Jerusalem, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Jerusalem',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);			
			//Hejaz, Kingdom
			//Mecca, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Mecca',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Patriarch',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Jeddah',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Staple_Port'				
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Asfan',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Stockpile'				
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Taif',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Tiltyard',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//Medina, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Medina',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Yanbu',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Khaybar',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tayma',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);
			//Tabuk, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tabuk',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Aqaba',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Muan',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Hegra',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);				
			//Khazar, Empire
			//Khazaria, Kingdom
			//Aqtobe, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Aqtobe',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);				
			//Sarkel, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sarkel',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);				
			//Atil, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Atil',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);				
			//Bolghar, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bolghar',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);				
			//Bilar, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bilar',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);					
			//Alania, Kingdom
			//Derbent, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Derbent',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);			
			//Azov, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Azov',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);				
			//Cumania, Kingdom
			//Sighnaq, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sighnaq',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);				
			//Sozak, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sozak',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'				
            ]);				
			//Sibir, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Qashliq',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'				
            ]);				
			//Seljuk, Empire
			//Kwarezm, Kingdom
			//Gurganj, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Gurganj',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Industrial_Potter',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);
			//Khiva, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Khiva',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);
			//Isfahan, Kingdom
			//Isfahan, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Isfahan',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//Shiraz, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Shiraz',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Jewry_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);				
			//Hormuz, Kingdom
			//Hormuz, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Hormuz',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Minab',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bandar',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lengeh',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Staple_Port'				
            ]);
			//Kerman, Duchy
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kerman',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Mahan',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Merchant_Quarter',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bam',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Rayen',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Rafsinjan',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Warehouse_Quarter'				
            ]);		
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bayaz',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'quarter_downtown' => 'Citadel',			
				'quarter_suburb' => 'Marke_Forest',
				'quarter_harbor' => 'Stockpile'					
            ]);			
    }
}