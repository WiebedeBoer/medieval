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
            DB::table('baronies')->insert([
				'barony_name' => '',
				'barony_category' => '',			//Feudal, Ecclesiastical, Monastic_Order, Crusader_Order, Burgher, Villager				
				'de_jure_county' => '',
				'population' => '',	
				'charter_castle' => '',				//Hall (125), Fortified_Glebe (6), Fortified_Abbey (145), Chancellery (109), Knight_Court (3), Manor_Court (59), County_Court (177), Royal_Court (27)				
				'charter_assembly' => '',			//Moot, Senate, Diet, Parliament	
				'charter_cathedral' => '',			//Chaplain, Priest, Bishop, Archbishop, Patriarch
				'charter_market' => '',				//Square, Market_Right, Staple_Right, Fair_Right
				'charter_walls' => '',				//None, Earthwork, Palisade, Stronghold, Citadel
				'charter_mint' => '',				//None, Mint, Reliquary, Aljama
				'charter_university' => '',			//None, Monastic_School, Cathedral_School, Scriptorium_Library, Rhetoric_Chamber, Tiltyard, Hunting_Lodge						
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


			//Holy Roman Empire	
			//Germany
			//Austria
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Vienna',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Aljama',
				'charter_university' => 'Cathedral_School'						
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kreuzenstein',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
            ]);
			//Bavaria
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Regensburg',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bamberg',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Nuremberg',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Grafengehaig',
				'barony_category' => 'Villager',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Glebe',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Passau',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'							
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Vornbach',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'							
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Freising',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'							
            ]);				
			//Brabant
			//Brabant
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Brussels',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Louvain',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School'						
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lobbes',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Scriptorium_Library'							
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Cambrai',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'							
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ghent',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Rhetoric_Chamber'							
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Antwerp',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Aljama',
				'charter_university' => 'Rhetoric_Chamber'							
            ]);
			//Carinthia
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Seckau',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Gurk',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sant Paul',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'							
            ]);
			//Carniola
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Laibach',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Parenzo',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Pican',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Pula',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'							
            ]);
			//Franconia
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Fulda',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School'							
            ]);
			//Gollachgau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Rotenburg',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Glebe',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Colmberg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'							
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Comburg',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'						
            ]);
			//
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Kaisersheim',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Wurzburg',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'							
            ]);
			//Frisia
			//Ammergau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Oldenburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'							
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Rastede',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'							
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Westerstede',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'																					
            ]);
			//Auricherland
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Aurichove',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ihlow',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Marienhafe',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'										
            ]);
			//Beveland
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Goes',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Wissenkerk',
				'barony_category' => 'Villager',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Hellenburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);			
			//Bornegau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Jouwer',
				'barony_category' => 'Villager',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Haskerhorn',
				'barony_category' => 'Villager',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bakkeveen',
				'barony_category' => 'Villager',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Beets',
				'barony_category' => 'Villager',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);
			//Drenthe
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Coevorden',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);		
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Groningen',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'										
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ruinen',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'										
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Rolde',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'										
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Wolvega',
				'barony_category' => 'Villager',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Appelsche',
				'barony_category' => 'Villager',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Oostwold',
				'barony_category' => 'Villager',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);
			//Dithmarschen
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Meldorf',
				'barony_category' => 'Villager',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);		
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Hemmingstedt',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Wohrden',
				'barony_category' => 'Villager',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);				
			//Emsigerland
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Emden',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Leer',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);			
			//Fivelgau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Appingedam',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Winschoten',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Farmsum',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);
			//Hadeln
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Otterndorf',
				'barony_category' => 'Villager',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ritzebuttel',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);
			//Holtland
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Dordrecht',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Gouda',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);
			//Hunsingau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Winsum',
				'barony_category' => 'Villager',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bedum',
				'barony_category' => 'Villager',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Selwerd',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);
			//Kennemerland
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Haarlem',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Alkmaar',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Amsterdam',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Edam',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Purmerstein',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);			
			//Maasland
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Delft',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Vlaardingen',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Rotterdam',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Holylede',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Berkel',
				'barony_category' => 'Villager',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'																					
            ]);				
			//Nifterlake
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Utrecht',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Dorestadt',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Amerongen',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'																					
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Zuilenburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'																					
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Woudenberg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'																					
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Heemstede',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'																					
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Nyenrode',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'																					
            ]);
			//Oostergau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Dockum',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'None'																					
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Liowerd',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'																					
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Klaarkamp',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'																					
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Wytgaard',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'																					
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Mariengaard',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'																					
            ]);
			//Rhineland
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Leithen',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Wassenaar',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Cronestein',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Haag',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Loosduinen',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'																					
            ]);	
			//Salland
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Zwolle',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School'																					
            ]);				
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Kampen',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Hasselt',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Waardenborg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Hardenberg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'																					
            ]);				
			//Sudergau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Starum',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'																					
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Sloten',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'																					
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Hemlum',
				'barony_category' => 'Villager',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'																					
            ]);
			//Teisterbant
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Tiel',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Buren',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Arkel',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Heusden',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Vianen',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Loevestein',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Almkerk',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'																					
            ]);			
			//Westergau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Froonacker',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Earthwork',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Bolsward',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Drylts',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Hylpen',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Snits',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Earthwork',	
				'charter_mint' => 'None',
				'charter_university' => 'None'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Harns',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'																					
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Hoxwier',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'																					
            ]);	
			//Guelders
			//
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Zutphen',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Palisade',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None'										
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Deventer',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None'										
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Doetinchem',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Doesburg',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Camphuysen',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Bronkhorst',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Lochem',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);				
			//Julich
			//
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Aachen',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'None'										
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Burtscheid',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kornelimunster',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Scriptorium_Library'										
            ]);
			//
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Kaufungen',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'										
            ]);
			//Limburg
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Liege',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School'											
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Stavelot',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'										
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Malmedy',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'											
            ]);
			//Lommegau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Namur',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Florennes',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'										
            ]);			
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Gembloux',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'										
            ]);
			//Maasgau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Maastricht',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Scriptorium_Library'											
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Valkenburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Hunting_Lodge'											
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Thorn',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'											
            ]);
			//Lorraine	
			//Metzgau
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Metz',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'								
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Roncourt',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'								
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Semecourt',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Knight_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Gorze',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'								
            ]);				
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Toul',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'										
            ]);
			//Luxembourg
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Verdun',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'											
            ]);			
			//Saxony
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Riddagshausen',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'										
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Hildesheim',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'											
            ]);
			//
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Gandersheim',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'										
            ]);
			//
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Walkenried',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'											
            ]);
			//Styria
			//
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Kremsmunster',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'										
            ]);
			//
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Admont',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'											
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Brixen',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'											
            ]);
			//Swabia
			//
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Gengenbach',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'											
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Schuttern',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'										
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kempten',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'										
            ]);
			//Augstgau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Augsburg',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Wettenhausen',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Wittelsbach',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Memmingen',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Buxheim',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'										
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Freiburg',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School'
			]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Chur',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Disentis',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'										
            ]);
			//Linzgau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Ravensburg',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Weingarten',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'										
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Salem',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'										
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Baindt',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'										
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Basel',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Muttenz',
				'barony_category' => 'Villager',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Glebe',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Strassburg',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'									
            ]);
			//
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Ellwangen',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'										
            ]);
			//Schwerzgau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Hohenzollern',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'											
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Falkenstein',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Hunting_Lodge'										
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Ulm',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Hohenstaufen',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'											
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Biberach',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Buchau',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'										
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Gutenzell',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'										
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Marchtal',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'										
            ]);
			//Schwyzgau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Einsiedeln',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lenzburg',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Chaplain',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'										
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Murbach',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'										
            ]);
			//Turgau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Konstanz',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'									
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Sankt Gall',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School'									
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Lindau',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kirchberg',
				'barony_category' => 'Villager',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kreuzlingen',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Reichenau',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Engelberg',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'							
            ]);
			//Thuringia
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Erfurt',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Saalfeld',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Naumburg',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'							
            ]);
			//Bremen
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bremen',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'								
            ]);
			//Augau
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Corvey',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Hoxter',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'									
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Amelungsborn',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'										
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Holzminden',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Minden',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'									
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Osnabruck',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Paderborn',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'									
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Verden',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'									
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Munster',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'								
            ]);
			//
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Herford',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'								
            ]);
			//
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Essen',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'								
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Werden',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'								
            ]);
			//Cologne
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Cologne',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Cathedral_School'								
            ]);
			//Magdeburg
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Magdeburg',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'									
            ]);
			//Hartingau 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Halberstadt',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'									
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Quedlinburg',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'									
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Gernrode',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'									
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Merseburg',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'									
            ]);
			//Mainz
			//Wormsfeld 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Mainz',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School'								
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Worms',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Aljama',
				'charter_university' => 'Scriptorium_Library'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Oppenheim',
				'barony_category' => 'Villager',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lorsch',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Eibingen',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School'									
            ]);
			//
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Hersfeld',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Speyer',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Aljama',
				'charter_university' => 'Scriptorium_Library'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Wissembourg',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'								
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Klingenmunster',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Frankfurt',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Fair_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Aljama',
				'charter_university' => 'None'								
            ]);
			//Salzburg
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Salzburg',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'								
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Berchtesgaden',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'								
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Chiemsee',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'								
            ]);
			//Trier
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Trier',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Cathedral_School'								
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Prum',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Echternach',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'									
            ]);
			//Lombardy
			//Milano
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Milano',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Scriptorium_Library'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Monza',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'None'									
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Como',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'									
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bergamo',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'									
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Modena',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'									
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Pavia',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School'									
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Piacenza',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School'								
            ]);
			//Piacenza 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Reggio',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School'								
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Grazzano',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'									
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bobbio',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Fortified_Abbey',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School'									
            ]);
			//Piedmont
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Cathedral_School'								
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
				'charter_university' => 'Cathedral_School'								
            ]);
			//Tuscany
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
				'charter_university' => 'Cathedral_School'								
            ]);
			//Verona
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
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School'								
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
				'charter_university' => 'Cathedral_School'								
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
				'charter_university' => 'Scriptorium_Library'								
            ]);
			//Aquileia
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School'									
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
				'charter_university' => 'None'								
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
				'charter_university' => 'None'								
            ]);	
			//Florence
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
				'charter_university' => 'Cathedral_School'								
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School'								
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School'								
            ]);
			//Genoa
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'None'								
            ]);
			//Noli
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'								
            ]);
			//Lucca
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'								
            ]);
			//Pisa
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Cathedral_School'								
            ]);
			//Venice
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Aljama',
				'charter_university' => 'None'								
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'								
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School'								
            ]);
			//Bohemia
			//Bohemia
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Cathedral_School'								
            ]);
			//Lusatia
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School'								
            ]);
			//Moravia
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
				'charter_university' => 'Scriptorium_Library'								
            ]);
			//Lower Silesia
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
				'charter_university' => 'Scriptorium_Library'								
            ]);
			//Upper Silesia
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
				'charter_university' => 'Scriptorium_Library'								
            ]);			
			//Burgundy
			//Burgundy
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'								
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
				'charter_university' => 'Cathedral_School'								
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
				'charter_university' => 'Scriptorium_Library'								
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'							
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
				'charter_university' => 'Monastic_School'							
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
				'charter_university' => 'Cathedral_School'								
            ]);
			//Cisjurania
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School'								
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
				'charter_university' => 'Scriptorium_Library'								
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
				'charter_university' => 'Scriptorium_Library'								
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
				'charter_university' => 'None'								
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
				'charter_university' => 'None'								
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Aljama',
				'charter_university' => 'Scriptorium_Library'								
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School'								
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'							
            ]);	
			//Transjurania	
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School'								
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School'								
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
				'charter_university' => 'None'								
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
				'charter_university' => 'None'								
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
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'								
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
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'								
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
				'charter_university' => 'Scriptorium_Library'								
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'								
            ]);
			//Orange
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
				'charter_university' => 'Cathedral_School'							
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School'								
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
				'charter_mint' => 'Aljama',
				'charter_university' => 'None'							
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
				'charter_university' => 'None'							
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
				'charter_university' => 'None'							
            ]);			
			//Provence
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School'							
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Aljama',
				'charter_university' => 'None'							
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
				'charter_university' => 'Hunting_Lodge'							
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
				'charter_university' => 'None'								
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
				'charter_university' => 'None'								
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
				'charter_mint' => 'Aljama',
				'charter_university' => 'None'								
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Aljama',
				'charter_university' => 'None'							
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'							
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'							
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
				'charter_university' => 'None'							
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
				'charter_university' => 'None'							
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'							
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
            ]);			
			//Savoy
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'									
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'									
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
				'charter_university' => 'Scriptorium_Library'									
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
				'charter_university' => 'None'								
            ]);
			//Papal States
			//Rome
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Cathedral_School'								
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
				'charter_university' => 'Scriptorium_Library'								
            ]);
			//Romagna
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School'								
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School'								
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None'								
            ]);
			//Spoleto
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'								
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
				'charter_university' => 'None'								
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
				'charter_university' => 'Scriptorium_Library'								
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
				'charter_university' => 'None'								
            ]);	
			//Teutonic Order State
			//Livonia
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'								
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'								
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
				'charter_university' => 'Scriptorium_Library'								
            ]);
			//Estonia
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'								
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'								
            ]);
			//Prussia
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
				'charter_university' => 'None'								
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'								
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'								
            ]);
			//Pomerelia
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'								
            ]);
			//Pomerania
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'								
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School'								
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School'								
            ]);
			//Brandenburg
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School'								
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'								
            ]);
			//Mecklenburg
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
				'charter_university' => 'Scriptorium_Library'									
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'								
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'								
            ]);
			//France
			//France
			//Anjou
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School'							
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
				'charter_university' => 'Hunting_Lodge'							
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'								
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None'							
            ]);
			//Aquitaine
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Aljama',
				'charter_university' => 'Cathedral_School'							
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
				'charter_university' => 'None'							
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'							
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Aljama',
				'charter_university' => 'None'							
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
				'charter_university' => 'None'							
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
				'charter_university' => 'None'							
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
				'charter_university' => 'None'							
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'None'								
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
				'charter_university' => 'None'								
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
				'charter_university' => 'None'								
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'									
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'										
            ]);
			//Auvergne
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
				'charter_university' => 'Scriptorium_Library'								
            ]);
			//Berry
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School'								
            ]);
			//Casgony
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
				'charter_university' => 'None'									
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
				'charter_university' => 'None'								
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
				'charter_university' => 'None'								
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
				'charter_university' => 'None'							
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
				'charter_university' => 'None'								
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
				'charter_university' => 'Scriptorium_Library'							
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
				'charter_university' => 'None'								
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'							
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
				'charter_university' => 'None'								
            ]);
			//Champagne
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School'								
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
				'charter_university' => 'None'								
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
				'charter_university' => 'Scriptorium_Library'							
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
				'charter_university' => 'Scriptorium_Library'							
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'								
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
				'charter_university' => 'Scriptorium_Library'								
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
				'charter_mint' => 'Aljama',
				'charter_university' => 'None'							
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
				'charter_university' => 'Monastic_School'							
            ]);
			//Francia
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
				'charter_university' => 'Cathedral_School'								
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'								
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
				'charter_university' => 'None'								
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'								
            ]);
			//Normandy
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
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'								
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
				'charter_university' => 'Scriptorium_Library'								
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'								
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'								
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School'								
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
				'charter_university' => 'None'							
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'								
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'								
            ]);
			//Orleanais
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School'							
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School'								
            ]);
			//Picardy
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'							
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'							
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Rhetoric_Chamber'								
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School'								
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
				'charter_university' => 'Scriptorium_Library'								
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
				'charter_university' => 'Scriptorium_Library'								
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
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'								
            ]);
			//Poitou
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Cathedral_School'							
            ]);
			//Toulouse
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School'								
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
				'charter_university' => 'Scriptorium_Library'								
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'None',
				'charter_university' => 'None'								
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'								
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
				'charter_university' => 'Monastic_School'							
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'							
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Aljama',
				'charter_university' => 'Scriptorium_Library'						
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
				'charter_university' => 'None'						
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Aljama',
				'charter_university' => 'Scriptorium_Library'						
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
				'charter_university' => 'Scriptorium_Library'							
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
				'charter_mint' => 'Aljama',
				'charter_university' => 'None'						
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School'							
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
				'charter_university' => 'None'							
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
				'charter_university' => 'Scriptorium_Library'								
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
				'charter_university' => 'Scriptorium_Library'								
            ]);
			//Brittany
			//Brittany			
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'								
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
				'charter_university' => 'Scriptorium_Library'								
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
				'charter_university' => 'Scriptorium_Library'								
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
				'charter_university' => 'Scriptorium_Library'								
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'								
            ]);	
			//Domnonee
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
				'charter_university' => 'Scriptorium_Library'								
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
				'charter_university' => 'Scriptorium_Library'								
            ]);
			//Retz
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Cathedral_School'								
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'								
            ]);
			//Britain
			//Ireland
			//Connacht
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'								
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
				'charter_university' => 'None'									
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
				'charter_university' => 'None'								
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
				'charter_university' => 'None'								
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
				'charter_university' => 'None'							
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
				'charter_university' => 'None'							
            ]);	
			//Leinster
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
				'charter_university' => 'None'							
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
				'charter_university' => 'None'							
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
				'charter_university' => 'None'								
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'							
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
				'charter_university' => 'None'								
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
				'charter_university' => 'Scriptorium_Library'								
            ]);
			//Meath
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'								
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
				'charter_university' => 'None'								
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
				'charter_university' => 'None'							
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
				'charter_university' => 'Scriptorium_Library'							
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
				'charter_university' => 'None'							
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
				'charter_university' => 'Scriptorium_Library'							
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
				'charter_university' => 'Scriptorium_Library'								
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
				'charter_university' => 'None'								
            ]);			
			//Munster
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
				'charter_university' => 'Cathedral_School'								
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
				'charter_university' => 'Scriptorium_Library'								
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'								
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
				'charter_university' => 'None'								
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
				'charter_university' => 'None'								
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
				'charter_university' => 'None'								
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'								
            ]);
			//Ulster
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
				'charter_university' => 'None'							
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School'								
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
				'charter_university' => 'Scriptorium_Library'								
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'								
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
				'charter_university' => 'None'								
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
				'charter_university' => 'None'								
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
				'charter_university' => 'Scriptorium_Library'							
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
				'charter_university' => 'Scriptorium_Library'							
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
				'charter_university' => 'Scriptorium_Library'							
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
				'charter_university' => 'None'								
            ]);	
			//England
			//East Anglia
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'							
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
				'charter_university' => 'Scriptorium_Library'								
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
				'charter_university' => 'Scriptorium_Library'								
            ]);
			//Essex
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
				'charter_university' => 'Scriptorium_Library'								
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
				'charter_university' => 'Scriptorium_Library'								
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Aljama',
				'charter_university' => 'None'								
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
				'charter_market' => 'Market_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'								
            ]);
			//Hwicce
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None'							
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'							
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
				'charter_university' => 'Tiltyard'							
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
				'charter_university' => 'None'							
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Aljama',
				'charter_university' => 'None'							
            ]);				
			//Kent
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
				'charter_university' => 'None'							
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Scriptorium_Library'							
            ]);
			//Lindsey
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'							
            ]);
			//Mercia
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'							
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
				'charter_university' => 'Scriptorium_Library'									
            ]);	
			//Mid Anglia
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School'								
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
				'charter_university' => 'None'								
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
				'charter_university' => 'Scriptorium_Library'							
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
				'charter_university' => 'None'							
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
				'charter_university' => 'Cathedral_School'							
            ]);
			//Northumbria
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None'								
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
				'charter_university' => 'Scriptorium_Library'								
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School'								
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Cathedral_School'								
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
				'charter_university' => 'Scriptorium_Library'								
            ]);
			//Sussex
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
				'charter_university' => 'Scriptorium_Library'								
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
				'charter_university' => 'Scriptorium_Library'								
            ]);
			//Wessex
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
				'charter_university' => 'Scriptorium_Library'								
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Aljama',
				'charter_university' => 'None'								
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
				'charter_university' => 'None'									
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
				'charter_university' => 'Scriptorium_Library'								
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'								
            ]);	
			//Wales
			//Cornwall
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'								
            ]);
			//Dyfed
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Scriptorium_Library'								
            ]);	
			//Gwent
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
				'charter_university' => 'Scriptorium_Library'								
            ]);	
			//Gwyned
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
				'charter_university' => 'Scriptorium_Library'								
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
				'charter_university' => 'None'								
            ]);	
			//Scotland
			//Alba
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School'									
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
				'charter_university' => 'Scriptorium_Library'								
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
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School'								
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'							
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
				'charter_university' => 'Scriptorium_Library'							
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
				'charter_university' => 'Scriptorium_Library'							
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
				'charter_university' => 'Scriptorium_Library'							
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
				'charter_university' => 'Scriptorium_Library'							
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
				'charter_university' => 'Scriptorium_Library'							
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
				'charter_university' => 'None'						
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
				'charter_university' => 'Scriptorium_Library'						
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
				'charter_university' => 'Scriptorium_Library'						
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
				'charter_university' => 'None'							
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
				'charter_university' => 'Scriptorium_Library'							
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
				'charter_university' => 'Scriptorium_Library'							
            ]);	
			//Bernicia
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'							
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
				'charter_university' => 'Scriptorium_Library'							
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
				'charter_university' => 'None'						
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
				'charter_university' => 'Scriptorium_Library'							
            ]);
			//Dalriada
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'							
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None'							
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
				'charter_university' => 'Scriptorium_Library'							
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'							
            ]);	
			//Fortriu
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
				'charter_university' => 'None'						
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'					
            ]);	
			//Galloway
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
				'charter_university' => 'Scriptorium_Library'					
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
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
				'charter_university' => 'Scriptorium_Library'						
            ]);
			//Gododdin
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
				'charter_university' => 'Scriptorium_Library'						
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
				'charter_university' => 'None'						
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
				'charter_university' => 'Scriptorium_Library'					
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
				'charter_university' => 'Scriptorium_Library'					
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
				'charter_university' => 'Scriptorium_Library'					
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
				'charter_university' => 'Scriptorium_Library'						
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
				'charter_university' => 'None'						
            ]);				
			//Strathclyde
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
				'charter_university' => 'Scriptorium_Library'				
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
				'charter_university' => 'Cathedral_School'				
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
				'charter_university' => 'Scriptorium_Library'						
            ]);		
			//Aragon
			//Aragon
			//Barcelona
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Barcelona',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Cathedral_School'						
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
				'charter_university' => 'None'							
            ]);				
			//Girona
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None'						
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Aljama',
				'charter_university' => 'None'						
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School'					
            ]);	
			//Huesca
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
				'charter_university' => 'Cathedral_School'						
            ]);	
			//Lleida
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
				'charter_university' => 'Cathedral_School'						
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Urgell',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
            ]);
			//Tarragona
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'					
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'					
            ]);
			//Teruel
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
				'charter_university' => 'None'					
            ]);	
			//Zaragoza
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Zaragoza',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School'				
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
				'charter_mint' => 'Aljama',
				'charter_university' => 'None'					
            ]);				
			//Navarre
			//Alava
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
				'charter_mint' => 'Aljama',
				'charter_university' => 'Scriptorium_Library'				
            ]);
			//Navarre
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
				'charter_university' => 'None'					
            ]);			
			//Castile
			//Castile
			//Avila
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
				'charter_mint' => 'Aljama',
				'charter_university' => 'None'					
            ]);				
			//Burgos
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
				'charter_university' => 'None'								
            ]);				
			//Palencia
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
				'charter_university' => 'Cathedral_School'							
            ]);				
			//Segovia
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
				'charter_mint' => 'Aljama',
				'charter_university' => 'None'							
            ]);
			//Soria
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
				'charter_university' => 'None'							
            ]);	
			//Toledo
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
				'charter_mint' => 'Aljama',
				'charter_university' => 'None'						
            ]);
			//Valladolid
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
				'charter_mint' => 'Aljama',
				'charter_university' => 'Monastic_School'						
            ]);
			//Galicia	
			//Coruna
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
				'charter_university' => 'Cathedral_School'					
            ]);	
			//Lugo
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
				'charter_university' => 'None'						
            ]);
			//Ourense
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
				'charter_university' => 'None'					
            ]);		
			//Pontevedra
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
            ]);				
			//Leon
			//Leon
			//Caceres
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
				'charter_mint' => 'Aljama',
				'charter_university' => 'None'						
            ]);			
			//Leon
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
				'charter_university' => 'Scriptorium_Library'						
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
				'charter_mint' => 'Aljama',
				'charter_university' => 'None'						
            ]);
			//Salamanca
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
				'charter_university' => 'None'						
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
				'charter_university' => 'Cathedral_School'						
            ]);
			//Zamora
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
				'charter_university' => 'None'						
            ]);			
			//Asturias
			//Asturias
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
				'charter_university' => 'None'					
            ]);	
			//Portugal
			//Aveiro
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
				'charter_university' => 'None'				
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Aljama',
				'charter_university' => 'None'					
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'				
            ]);				
			//Beira
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
				'charter_university' => 'Cathedral_School'					
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
				'charter_university' => 'None'					
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
				'charter_university' => 'None'					
            ]);
			//Braganca
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
				'charter_university' => 'None'						
            ]);	
			//Estremadura
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Aljama',
				'charter_university' => 'Cathedral_School'						
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
				'charter_university' => 'None'						
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
				'charter_university' => 'None'						
            ]);				
			//Danelagen
			//Denmark
			//Jutland
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'							
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
				'charter_university' => 'Scriptorium_Library'							
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'							
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
				'charter_university' => 'None'						
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'					
            ]);			
			//Scania
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School'					
            ]);
			//Sjaeland
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'					
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School'				
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School'					
            ]);	
			//Norway
			//Nordjor (Northern Isles)
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'					
            ]);	
			//Sodor (Southern Isles)
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'				
            ]);				
			//Hedmark (eidsivating)
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
				'charter_university' => 'Scriptorium_Library'				
            ]);				
			//Oppland (frostating)
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'			
            ]);				
			//Rogaland (gulating)
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'		
            ]);				
			//Vestland (gulating)
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'				
            ]);
			//Viken (borgarting)
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'					
            ]);			
			//Sweden
			//Gotland
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
				'charter_university' => 'None'					
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
				'charter_university' => 'None'						
            ]);
			//Osterland
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
            ]);
			//Smaland
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
				'charter_university' => 'Scriptorium_Library'						
            ]);
			//Svaeland
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
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
				'charter_university' => 'None'						
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
				'charter_university' => 'Cathedral_School'					
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
				'charter_university' => 'Scriptorium_Library'						
            ]);
			//Poland
			//Poland
			//Lesser Poland
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
				'charter_university' => 'None'						
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
				'charter_university' => 'None'						
            ]);
			//Gnesen
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
				'charter_university' => 'Scriptorium_Library'				
            ]);	
			//Krakow
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Aljama',
				'charter_university' => 'Cathedral_School'				
            ]);
			//Kuyavia
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
				'charter_university' => 'None'				
            ]);
			//Plock
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
				'charter_university' => 'None'			
            ]);
			//Posen
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'				
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
				'charter_university' => 'None'			
            ]);				
			//Lithuania	
			//Minsk
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
				'charter_mint' => 'Aljama',
				'charter_university' => 'None'			
            ]);				
			//Tracken
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
				'charter_university' => 'None'			
            ]);	
			//Vilnius			
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
				'charter_mint' => 'None',
				'charter_university' => 'None'		
            ]);				
			//Hungary
			//Hungary
			//Hungary
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
				'charter_university' => 'None'			
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
				'charter_university' => 'Scriptorium_Library'			
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
				'charter_university' => 'None'			
            ]);
			//Buda
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
				'charter_mint' => 'Aljama',
				'charter_university' => 'Scriptorium_Library'				
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
				'charter_university' => 'Scriptorium_Library'				
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
				'charter_university' => 'None'				
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
				'charter_university' => 'None'		
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
				'charter_university' => 'None'			
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
				'charter_university' => 'None'		
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
				'charter_university' => 'Monastic_School'				
            ]);
			//Nitra
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
				'charter_university' => 'None'				
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
				'charter_university' => 'Monastic_School'				
            ]);
			//Temesvar
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
				'charter_university' => 'None'				
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
				'charter_university' => 'None'			
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
				'charter_university' => 'None'					
            ]);
			//Transylvania
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
				'charter_university' => 'Scriptorium_Library'				
            ]);	
			//Croatia
			//Dalmatia
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
				'charter_university' => 'None'					
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'				
            ]);
			//Ragusa
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Scriptorium_Library'				
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'				
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'			
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'				
            ]);	
			//Slavonia
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
				'charter_university' => 'None'					
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
				'charter_university' => 'None'				
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
				'charter_university' => 'None'			
            ]);
			//Split
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'				
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'				
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'				
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'							
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'							
            ]);	
			//Zadar
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'							
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'							
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'						
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'							
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'					
            ]);
			//Trinacria
			//Sicily
			//Palermo
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Aljama',
				'charter_university' => 'Cathedral_School'						
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
				'charter_university' => 'None'						
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
				'charter_university' => 'None'						
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
				'charter_university' => 'None'						
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
				'charter_university' => 'None'						
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'							
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
				'charter_university' => 'None'						
            ]);				
			//Trapani
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
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
				'charter_university' => 'None'						
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
            ]);				
			//Messina
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Aljama',
				'charter_university' => 'None'						
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
				'charter_university' => 'None'					
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'				
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'				
            ]);			
			//Agrigento
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'			
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
				'charter_university' => 'None'				
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
				'charter_university' => 'None'					
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
				'charter_university' => 'None'				
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
				'charter_university' => 'None'				
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
				'charter_university' => 'None'				
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
				'charter_university' => 'None'				
            ]);			
			//Catania
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Aljama',
				'charter_university' => 'Cathedral_School'			
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
				'charter_mint' => 'Aljama',
				'charter_university' => 'None'			
            ]);				
			//Siracusa
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Aljama',
				'charter_university' => 'Scriptorium_Library'			
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
				'charter_university' => 'None'				
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
				'charter_mint' => 'None',
				'charter_university' => 'None'				
            ]);				
			//Naples
			//Naples
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Aljama',
				'charter_university' => 'Cathedral_School'				
            ]);			
			//Capua
			
			//Amalfi
			
			//Calabria
			
			//Basilicata
			
			//Taranto
			
			//Foggia
			
			//Benevento
			
			//Salerno
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Cathedral_School'				
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
				'charter_university' => 'None'				
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'				
            ]);				
			//Sardinia
			//Gallura
			
			//Logudoro (torres)
			
			//Arborea		
				
			//Byzantine			
			//Thrace
			//Thrace
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Cathedral_School'						
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
				'charter_university' => 'None'						
            ]);	
			//Macedonia
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
				'charter_university' => 'None'						
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
				'charter_university' => 'None'						
            ]);				
			//Thessalonica
			//Hellas
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Cathedral_School'						
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Aljama',
				'charter_university' => 'None'						
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
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
				'charter_university' => 'None'						
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
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
				'charter_university' => 'None'						
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
				'charter_mint' => 'Aljama',
				'charter_university' => 'None'						
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'None'						
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
				'charter_university' => 'None'						
            ]);				
			//Peloponessos
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
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
				'charter_university' => 'None'						
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
            ]);			
			//Archipelago
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
            ]);			
			//Epirus
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
            ]);				
			//Thessalonica
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'Aljama',
				'charter_university' => 'None'						
            ]);				
			//Strymon
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
            ]);				
			//Trebizond
			//Paphlagonia
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
				'charter_university' => 'None'						
            ]);				
			//Armeniac
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
				'charter_university' => 'Cathedral_School'						
            ]);				
			//Chaldia
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
            ]);				
			//Crimea
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School'						
            ]);				
			//Anatolia
			//Thracesia
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
            ]);				
			//Bucellaria
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
				'charter_university' => 'None'						
            ]);			
			//Anatolia
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
				'charter_university' => 'Cathedral_School'						
            ]);				
			//Cappadocia
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
				'charter_university' => 'None'						
            ]);				
			//Seleucia
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
            ]);				
			//Opsicia
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
            ]);				
			//Nicaea
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
				'charter_mint' => 'Aljama',
				'charter_university' => 'None'						
            ]);			
			//Lycia
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Scriptorium_Library'						
            ]);				
			//Pamphylia
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Aljama',
				'charter_university' => 'None'						
            ]);									
			//Georgia
			//Colchis
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
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
				'charter_university' => 'None'						
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
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School'						
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
            ]);				
			//Javakheti
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
				'charter_university' => 'None'						
            ]);				
			//Kartli
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
				'charter_university' => 'None'						
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
				'charter_university' => 'None'						
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
				'charter_university' => 'None'						
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
            ]);				
			//Kakheti
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
				'charter_university' => 'None'						
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
				'charter_university' => 'Monastic_School'						
            ]);				
			//Armenia
			//Vaspurakan
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
				'charter_university' => 'None'						
            ]);				
			//Taron
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
				'charter_university' => 'None'						
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
				'charter_university' => 'Scriptorium_Library'						
            ]);				
			//Kars
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
				'charter_university' => 'None'						
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
				'charter_university' => 'None'						
            ]);			
			//Azerbaijan
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
            ]);				
			//Kievan Rus
			//Kiev
			//Kiev 
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Scriptorium_Library'						
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
				'charter_university' => 'Scriptorium_Library'						
            ]);				
			//Pereyaslavl
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
            ]);	
			//Chernigov
			//Chernigov
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
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
				'charter_university' => 'Scriptorium_Library'						
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
				'charter_university' => 'None'						
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
            ]);				
			//Ryazan
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
            ]);			
			//Murom
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
				'charter_university' => 'Scriptorium_Library'						
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
				'charter_university' => 'Scriptorium_Library'						
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
            ]);				
			//Halych
			//Halych
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
				'charter_university' => 'Scriptorium_Library'						
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
				'charter_university' => 'None'						
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
				'charter_university' => 'None'						
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
				'charter_university' => 'None'						
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'Aljama',
				'charter_university' => 'None'						
            ]);				
			//Volhynia
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
				'charter_university' => 'None'						
            ]);			
			//Turov
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
				'charter_university' => 'None'						
            ]);				
			//Vladimir
			//Vladimir
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
            ]);			
			//Moscow
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'						
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
				'charter_university' => 'None'						
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
				'charter_university' => 'None'						
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
				'charter_university' => 'Scriptorium_Library'						
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
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
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'						
            ]);			
			//Suzdal
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
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
				'charter_university' => 'None'						
            ]);				
			//Smolensk
			//Smolensk
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
            ]);				
			//Toropets
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
				'charter_university' => 'None'						
            ]);				
			//Mstislavl
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
				'charter_university' => 'None'						
            ]);				
			//Rzhev
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
				'charter_university' => 'None'						
            ]);	
			//Tver
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
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
				'charter_university' => 'Scriptorium_Library'						
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'						
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'None',
				'charter_university' => 'None'						
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'						
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
				'charter_university' => 'Scriptorium_Library'						
            ]);				
			//Novgorod
			//Novgorod
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Scriptorium_Library'						
            ]);			
			//Polotsk
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None'						
            ]);			
			//Pleskov
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'Mint',
				'charter_university' => 'None'						
            ]);			
			//Bulgaria
			//Bulgaria
			//Preslav
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
				'charter_university' => 'None'						
            ]);	
			//Tarnovo
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
				'charter_university' => 'None'						
            ]);				
			//Wallachia
			//Wallachia
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
				'charter_university' => 'None'						
            ]);			
			//Moldavia
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
				'charter_university' => 'None'						
            ]);				
			//Serbia
			//Serbia
			//Rashka
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
				'charter_university' => 'Scriptorium_Library'						
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
				'charter_university' => 'Scriptorium_Library'						
            ]);				
			//Bosnia
			//Bosnia		
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
				'charter_university' => 'None'						
            ]);				
			//Cordoba
			//Andalucia
			//Arcos
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'					
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
				'charter_university' => 'None'				
            ]);				
			//Cordoba			
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
				'charter_mint' => 'Aljama',
				'charter_university' => 'Scriptorium_Library'				
            ]);
			//Granada	
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
				'charter_university' => 'Cathedral_School'				
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
				'charter_mint' => 'Aljama',
				'charter_university' => 'None'				
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
				'charter_university' => 'None'				
            ]);
			//Malaga
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'			
            ]);	
			//Sevilla
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
				'charter_mint' => 'Aljama',
				'charter_university' => 'Cathedral_School'			
            ]);
			//Algarves
			//Algarves
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'				
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'					
            ]);	
			//Badajoz
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
				'charter_university' => 'None'				
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
				'charter_university' => 'None'					
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
				'charter_university' => 'None'				
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
				'charter_university' => 'None'				
            ]);	
			//Huelva
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
				'charter_university' => 'None'				
            ]);			
			//Levante
			//Alpuente
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
				'charter_university' => 'Monastic_School'			
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
				'charter_university' => 'Scriptorium_Library'				
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
				'charter_university' => 'Cathedral_School'			
            ]);
			//Baleares
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Aljama',
				'charter_university' => 'Cathedral_School'			
            ]);				
			//Denia
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
				'charter_university' => 'None'			
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'			
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
				'charter_university' => 'None'		
            ]);	
			//Murcia
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'	
            ]);			
			//Valencia			
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Cathedral_School'				
            ]);
			//Almohad
			//Marrakesh
			//Marrakesh
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'Mint',
				'charter_university' => 'Cathedral_School'				
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'None'				
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'None'				
            ]);
			//Sijilmassa
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
				'charter_university' => 'None'				
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
				'charter_university' => 'None'				
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
				'charter_university' => 'None'				
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
				'charter_university' => 'None'				
            ]);				
			//Ouarzazate
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'None',
				'charter_university' => 'None'				
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
				'charter_university' => 'None'				
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
				'charter_university' => 'None'				
            ]);			
			//Fez
			//Fez
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'Aljama',
				'charter_university' => 'Cathedral_School'				
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'Aljama',
				'charter_university' => 'Cathedral_School'				
            ]);	
			//Rabat
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'None',
				'charter_university' => 'Scriptorium_Library'				
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'				
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
				'charter_university' => 'Scriptorium_Library'				
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'				
            ]);				
			//Tangier
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'				
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'				
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
				'charter_university' => 'None'				
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
				'charter_university' => 'Scriptorium_Library'				
            ]);				
			//Kairouan
			//Kairouan
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'Aljama',
				'charter_university' => 'Cathedral_School'				
            ]);	
			//Tunis
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School'				
            ]);		
			//Djerid
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
				'charter_university' => 'None'				
            ]);	
			//Tripoli
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'				
            ]);		
			//Sirte
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'				
            ]);				
			//Tlemcen
			//Tlemcen
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
				'charter_university' => 'Cathedral_School'				
            ]);	
			//Oujda
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
				'charter_mint' => 'Aljama',
				'charter_university' => 'None'				
            ]);	
			//Oran
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Aljama',
				'charter_university' => 'None'				
            ]);	
			//Algiers
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'				
            ]);	
			//Tiaret
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
				'charter_mint' => 'Aljama',
				'charter_university' => 'None'				
            ]);	
			//Mzab
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'None',
				'charter_university' => 'None'				
            ]);	
			//Laghouat
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
				'charter_university' => 'None'				
            ]);	
			//Djelfa
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
				'charter_university' => 'None'				
            ]);				
			//Ifni
			//Ifni
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'				
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
				'charter_university' => 'None'				
            ]);	
			//Taroudant
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
				'charter_university' => 'None'				
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'				
            ]);				
			//Figuig
			//Figuig
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
				'charter_mint' => 'Aljama',
				'charter_university' => 'None'				
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
				'charter_university' => 'None'				
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
				'charter_university' => 'None'				
            ]);	
			//Adrar
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
				'charter_university' => 'None'				
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
				'charter_university' => 'None'				
            ]);				
			//Abbasid
			//Baghdad
			//Baghdad
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
				'charter_university' => 'Cathedral_School'				
            ]);				
			//Syria
			//Damascus
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
				'charter_mint' => 'Mint',
				'charter_university' => 'Cathedral_School'				
            ]);	
			//Jabal
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
				'charter_university' => 'Cathedral_School'				
            ]);	
			//Homs
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
				'charter_university' => 'None'				
            ]);			
			//Najd
			//Najd
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
				'charter_university' => 'None'				
            ]);			
			//Antioch
			//Antioch
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
				'charter_mint' => 'None',
				'charter_university' => 'None'				
            ]);				
			//Fatimid
			//Cairo
			//Cairo
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School'				
            ]);
			//Alexandria
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'				
            ]);
			//Jerusalem
			//Jerusalem
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'None'				
            ]);			
			//Hejaz
			//Hejaz
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
				'charter_university' => 'Cathedral_School'				
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Medina',
				'barony_category' => 'Feudal',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'County_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'Reliquary',
				'charter_university' => 'Cathedral_School'				
            ]);				
			//Khazar
			//Khazaria
			//Aqtobe
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
				'charter_university' => 'None'				
            ]);				
			//Sarkel
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
				'charter_university' => 'None'				
            ]);				
			//Atil
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
				'charter_mint' => 'Aljama',
				'charter_university' => 'None'				
            ]);				
			//Bolghar
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
				'charter_university' => 'None'				
            ]);				
			//Bilar
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
				'charter_university' => 'None'				
            ]);					
			//Alania
			//Derbent
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'None',
				'charter_university' => 'None'				
            ]);			
			//Azov
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'				
            ]);				
			//Cumania
			//Sighnaq
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'				
            ]);				
			//Sozak
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
				'charter_university' => 'None'				
            ]);				
			//Sibir
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
				'charter_university' => 'None'				
            ]);				
			//Seljuk
			//Kwarezm
			//Gurganj
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
				'charter_university' => 'Cathedral_School'				
            ]);
			//Khiva
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School'				
            ]);
			//Isfahan
			//Isfahan
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
				'charter_university' => 'Cathedral_School'				
            ]);	
			//Shiraz
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
				'charter_mint' => 'Aljama',
				'charter_university' => 'Cathedral_School'				
            ]);				
			//Hormuz
			//Hormuz
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'				
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'				
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'				
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
				'charter_market' => 'Staple_Right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None'				
            ]);
			//Kerman
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
				'charter_university' => 'Cathedral_School'				
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
				'charter_university' => 'None'				
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
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'None',
				'charter_university' => 'None'				
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
				'charter_university' => 'None'				
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
				'charter_university' => 'None'				
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
				'charter_university' => 'None'				
            ]);			
    }
}