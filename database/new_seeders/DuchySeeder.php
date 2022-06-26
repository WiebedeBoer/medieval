<?php

use Illuminate\Database\Seeder;

class DuchySeeder extends Seeder
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
            DB::table('duchies')->insert([
				'duchy_name' => '',				
				'duchy_category' => '',			//Feudal, Ecclesiastical, Crowned_Republic
				'de_jure_kingdom' => '',		//	
				'law_succession' => '',			//Elective_Monarchy, Salic_Primogeniture, Agnatic_Seniority, Tanistry, Shura, Yassa
				'law_assembly' => '',			//absolute, limited, medium, high
				'law_court' => '',				//itinerant, palatial
				'vernacular_cycle' => '',		//Matter_of_Britain, Carolingian, Byzantine, Rus, Persian, Arab					
				'levy_feudal' => '',			//minimal, normal, large, maximal
				'levy_ecclesiastical' => '',	//minimal, normal, large, maximal
				'levy_burgher' => '',			//minimal, normal, large, maximal
				'tax_feudal' => '',				//minimal, normal, large, maximal		
				'tax_ecclesiastical' => '',		//minimal, normal, large, maximal				
				'tax_burgher' => ''				//minimal, normal, large, maximal			
				'souvereign' => '1',			(empire)
				'lord_paramount' => '1',		(kingdom)
				'tenant_in_chief' => '1'		(duchy)
            ]);			
			*/
			
			//holy roman empire
			//germany
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Austria',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Bavaria',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);			
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Brabant',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Carinthia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);	
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Carniola',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);	
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Franconia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Frisia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Guelders',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Julich',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Limburg',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);	
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Lorraine',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Luneburg',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);	
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Luxembourg',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);		
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Saxony',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Styria',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Swabia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Bremen',
				'duchy_category' => 'Ecclesiastical',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Elective_Monarchy',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Cologne',
				'duchy_category' => 'Ecclesiastical',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Elective_Monarchy',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);	
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Magdeburg',
				'duchy_category' => 'Ecclesiastical',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Elective_Monarchy',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Mainz',
				'duchy_category' => 'Ecclesiastical',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Elective_Monarchy',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Salzburg',
				'duchy_category' => 'Ecclesiastical',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Elective_Monarchy',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);	
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Trier',
				'duchy_category' => 'Ecclesiastical',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Elective_Monarchy',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);	
			//lombardy
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Milan',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '2',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Modena',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '2',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);				
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Tuscany',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '2',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);	
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Verona',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '2',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);	
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Aquileia',
				'duchy_category' => 'Ecclesiastical',
				'de_jure_kingdom' => '2',	
				'law_succession' => 'Elective_Monarchy',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Genoa',
				'duchy_category' => 'Crowned_Republic',
				'de_jure_kingdom' => '2',	
				'law_succession' => 'Elective_Monarchy',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);	
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Pisa',
				'duchy_category' => 'Crowned_Republic',
				'de_jure_kingdom' => '2',	
				'law_succession' => 'Elective_Monarchy',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);	
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Venice',
				'duchy_category' => 'Crowned_Republic',
				'de_jure_kingdom' => '2',	
				'law_succession' => 'Elective_Monarchy',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);	
			//bohemia
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Bohemia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '3',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);	
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Moravia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '3',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);				
			//burgundy
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Burgundy',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '4',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);	
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Dauphine',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '4',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);	
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Geneva',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '4',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);	
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Orange',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '4',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);	
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Provence',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '4',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);	
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Savoy',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '4',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);	
			//papal states
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Rome',
				'duchy_category' => 'Ecclesiastical',
				'de_jure_kingdom' => '5',	
				'law_succession' => 'Elective_Monarchy',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Ancona',
				'duchy_category' => 'Crowned_Republic',
				'de_jure_kingdom' => '5',	
				'law_succession' => 'Elective_Monarchy',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Ferrara',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '5',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Spoleto',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '5',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);	
			//teutonic order state
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Livonia',
				'duchy_category' => 'Ecclesiastical',
				'de_jure_kingdom' => '6',	
				'law_succession' => 'Elective_Monarchy',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Estonia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '6',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);	
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Prussia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '6',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);	
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Pomerelia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '6',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);	
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Pomerania',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '6',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);	
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Brandenburg',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '6',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);	
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Mecklenburg',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '6',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);
			//france
			//france
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Aquitaine',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);	
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Brittany',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);	
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Casgony',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);	
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Normandy',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);				
    }
}