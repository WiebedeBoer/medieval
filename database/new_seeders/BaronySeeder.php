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
				'charter_castle' => '',				//Hall, Fortified_Glebe, Fortified_Abbey, Abbey_Scriptorium, Chancellery, Knight_Court, Manor_Court, County_Court, Royal_Court				
				'charter_assembly' => '',			//Moot, Senate, Diet, Parliament	
				'charter_cathedral' => '',			//Chaplain, Priest, Bishop, Archbishop, Patriarch
				'charter_market' => '',				//Square, Market_right, Staple_right, Fair_right
				'charter_walls' => '',				//None, Earthwork, Palisade, Stronghold, Citadel
				'charter_mint' => '',				//None, Mint
				'charter_university' => '',			//None, Monastic_School, Cathedral_School
				'banal_moulin' => '',				//None, Watermill, Windmill
				'banal_pressoir' => '',				//None, Wine
				'banal_chasse' => '',				//None, Falconry, Deer, Boar, Fur
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
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Market_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bamberg',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Fair_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Market_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'Monastic_School',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Market_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Gurk',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Carniola
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Laibach',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Market_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Fair_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Market_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Rastede',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Utrecht',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Chancellery',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Julich
			//
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kornelimunster',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Market_right',
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Stavelot',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Thorn',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Lorraine	
			//
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);			
			//Saxony
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Riddagshausen',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Market_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Walkenried',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Styria
			//
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Kremsmunster',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Admont',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Schuttern',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Market_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Wettenhausen',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Market_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Market_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Weingarten',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Salem',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Market_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Market_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Murbach',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Market_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Market_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Market_right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Reichenau',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Engelberg',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'Monastic_School',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Staple_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Market_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Amelungsborn',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Market_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Herford',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Market_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Market_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Fair_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Fair_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Market_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Market_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Gernrode',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'Cathedral_School',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lorsch',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Hersfeld',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Market_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Market_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Prum',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Echternach',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Lombardy
			//Milano
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Milano',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Como',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bergamo',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Modena',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Pavia',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Piacenza',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Piacenza 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Reggio',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bobbio',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Piedmont
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Turino',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Vercelli',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Tuscany
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Siena',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Verona
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Padova',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Vicenza',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Aquileia
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Aquileia',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Staple_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Udine',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Gorizia',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Fair_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Arezzo',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Perugia',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Staple_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Staple_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Staple_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Staple_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Belluno',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Treviso',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Bohemia
			//Bohemia
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Prague',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Lusatia
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Leipzig',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Macon',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Nevers',
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
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Cisjurania
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Grenoble',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Embrun',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Gap',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Apt',
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
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sisteron',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Valence',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Vienne',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'Monastic_School',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Market_right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Orange
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Orange',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Avignon',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Carpentras',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Cavaillon',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Vaison',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);			
			//Provence
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Aix',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Arles',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Senez',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Digne',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Marseille',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Staple_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Nice',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Staple_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Staple_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Staple_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);			
			//Savoy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Aosta',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sion',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Patriarch',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Cassino',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Romagna
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ferrara',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bologna',
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
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);		
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ravenna',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Spoleto
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ancona',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);				
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Fermo',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Pescara',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Staple_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Estonia
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Reval',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Staple_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Staple_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Prussia
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Marienwerder',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Staple_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Koningsberg',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Staple_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Pomerelia
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kulm',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Staple_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Staple_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Staple_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Monastic_School',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'Cathedral_School',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Market_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Staple_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//France
			//France
			//Anjou
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Angers',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Mans',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tours',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Aquitaine
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bordeaux',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Staple_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Agen',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Angouleme',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lectoure',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Perigeux',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Saintes',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Auvergne
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Clermont',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Berry
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bourges',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Casgony
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Auch',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Pau',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Oloron',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tarbes',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Saint Lizier',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Dax',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]); 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bayonne',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Staple_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Meaux',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sens',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Troyes',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Fair_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Francia
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Paris',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Parliament',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Senlis',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Soissons',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Normandy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Rouen',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Market_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sees',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Avranches',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Staple_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bayeux',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Caen',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Coutances',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Evreux',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lisieux',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Orleanais
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Orleans',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Chartres',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Picardy
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Arras',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Amiens',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Therouanne',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Market_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Poitou
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Poitiers',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Toulouse
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Toulouse',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Albi',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Carcasonne',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Citadel',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Melgueil
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Melgueil',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Staple_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);				
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Maguelonne',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Staple_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Narbonne',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Staple_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Beziers',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);				
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Agde',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Staple_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Nimes',
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
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);				
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Uzes',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'Cathedral_School',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);			
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Rodez',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			// 
            DB::table('baronies')->insert([
				'barony_name' => 'Saint Malo',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Saint Pol',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Vannes',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//Domnonee
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Saint Brieuc',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Treguier',
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
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Retz
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Nantes',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Rennes',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Britain
			//Ireland
			//Connacht
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Galway',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tuam',
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
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Clonfert',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Killala',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Elphin',
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
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);				
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Achonry',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//Leinster
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kildare',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kilkenny',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kells',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bective',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Cashel',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Waterford',
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
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ferns',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tintern',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Meath
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Dublin',
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
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ardagh',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Clonard',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Fore',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);			
			//Munster
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ennis',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Corcomroe',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Cork',
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
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Cloyne',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);			
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Limerick',
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
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Ulster
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Dromore',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Armagh',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kilmore',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Derry',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Grey',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Mellifont',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Clogher',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//England
			//East Anglia
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Norwich',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'London',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Parliament',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Staple_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Westminster',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Hwicce
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Gloucester',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Coventry',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Worcester',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);				
			//Kent
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Rochester',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Canterbury',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Lindsey
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lincoln',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Mercia
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Hereford',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lichfield',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//Mid Anglia
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Cambridge',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Ely',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Peterborough',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Oxford',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Market_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Northumbria
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Carlisle',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Market_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'York',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Archbishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Sussex
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Chichester',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Winchester',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Wells',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Salisbury',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//Wales
			//Cornwall
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Exeter',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Dyfed
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Saint Davids',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//Gwent
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Llandaff',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//Gwyned
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bangor',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Saint Asaph',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//Scotland
			//Alba
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Aberdeen',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Staple_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Market_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'Cathedral_School',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Staple_right',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lindores',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Scone',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//Bernicia
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Edinburgh',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Royal_Court',	
				'charter_assembly' => 'Parliament',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Staple_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Holyrood',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Staple_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Peel',
				'barony_category' => 'Ecclesiastical',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Manor_Court',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Staple_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Staple_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Whithorn',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//Roxburghshire
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Roxburgh',
				'barony_category' => 'Burgher',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Market_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Market_right',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Kelso',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Melrose',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);		
			//Aragon
			//Aragon
			//Barcelona
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Barcelona',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);				
			//Girona
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Emporda',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Girona',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//Lleida
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lleida',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Urgell',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Tortosa',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Teruel
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Teruel',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//Zaragoza
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Zaragoza',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Navarre
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Pamplona',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);			
			//Castile
			//Castile
			//Avila
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Avila',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);				
			//Burgos
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Burgos',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);				
			//Palencia
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Palencia',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);				
			//Segovia
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Segovia',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Soria
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Osma',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//Toledo
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Toledo',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//Lugo
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lugo',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);			
			//Leon
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Astorga',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Leon',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Salamanca
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Rodrigo',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Salamanca',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//Portugal
			//Aveiro
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Braga',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);				
			//Beira
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Coimbra',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lamego',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//Estremadura
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Lisboa',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Santarem',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Setubal',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Borglum',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Viborg',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Aalborg',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Roskilde',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_castle' => 'Hall',	
				'charter_assembly' => 'Senate',
				'charter_cathedral' => 'Bishop',
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//Sodor (Southern Isles)
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Iona',
				'barony_category' => 'Monastic_Order',
				'de_jure_county' => '',
				'population' => '',
				'charter_castle' => 'Abbey_Scriptorium',	
				'charter_assembly' => 'Moot',
				'charter_cathedral' => 'Priest',
				'charter_market' => 'Square',
				'charter_walls' => 'None',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);				
			//Hedmark (eidsivating)
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Hamar',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);				
			//Oppland (frostating)
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Trondheim',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'charter_market' => 'Square',
				'charter_walls' => 'Stronghold',	
				'charter_mint' => 'None',
				'charter_university' => 'None',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);				
			//Vestland (gulating)
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Bergen',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Viken (borgarting)
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Oslo',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);			
			//Sweden
			//Gotland
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Linkoping',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Osterland
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Turku',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Smaland
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Vaxjo',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Svaeland
			//
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Uppsala',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Vasteras',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Poland
			//Poland
			//Greater Poland
			
			//Lesser Poland

			//Kuyavia

			//Mazovia
			
			//Lithuania
			//Brest	
			
			//Minsk	

			//Smolensk
			
			//Tracken

			//Vilnius			
			
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
			//Arcos
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Cadiz',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Jerez',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);				
			//Cordoba			
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Cordoba',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Granada
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Granada',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//Malaga
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Malaga',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//Sevilla
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Sevilla',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Algarves
			//Algarves
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Faro',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Silves',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//Badajoz
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Badajoz',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Beja',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Evora',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Merida',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//Huelva
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Huelva',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);			
			//Levante
			//Alpuente
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Cuenca',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Siguenza',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//Baleares
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Palma',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);				
			//Denia
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Albacete',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Denia',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);	
			//Murcia
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Cartagena',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
            ]);			
			//Valencia			
			//
			//
            DB::table('baronies')->insert([
				'barony_name' => 'Valencia',
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
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None'							
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