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
			//austria, tegernsee, krems, gars, durnstein, saint polten, linz
            DB::table('duchies')->insert([
				'duchy_name' => 'Austria',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
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
				'tenant_in_chief' => '1'
            ]);
			// 
			//bavaria, berchtesgaden, regensburg, ortenburg, passau, niedermunster, obermunster, freising, leuchtenberg, haag
            DB::table('duchies')->insert([
				'duchy_name' => 'Bavaria',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
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
				'tenant_in_chief' => '1'
            ]);			
			// 
			//brussels, antwerp, louvain, hainaut, cambrai, toxandria, hasbania, thorn
            DB::table('duchies')->insert([
				'duchy_name' => 'Brabant',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
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
				'tenant_in_chief' => '1'
            ]);
			// 
			//carinthia, carniola, styria
            DB::table('duchies')->insert([
				'duchy_name' => 'Carinthia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
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
				'tenant_in_chief' => '1'
            ]);	
			// 
			//franconia, ansbach, bamberg, eichstatt, henneberg, nuremberg, rothenburg, weissenburg, wurzburg
            DB::table('duchies')->insert([
				'duchy_name' => 'Franconia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
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
				'tenant_in_chief' => '1'
            ]);
			// 
			//dithmarschen, oldenburg, teisterbant, kennemerland, rijnland, maasland, westflinge, utrecht, holland, naarderland drenthe, twente, salland, beveland, walcheren, ostringen, rustringen, wursten, hadeln, auricherland, norderland, fivelgo, hunsingo, oostergo, westergo, bornego
            DB::table('duchies')->insert([
				'duchy_name' => 'Frisia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
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
				'tenant_in_chief' => '1'
            ]);
			// 
			//hattuaria, maasau, betuwe, hameland, veluwe
            DB::table('duchies')->insert([
				'duchy_name' => 'Guelders',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
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
				'tenant_in_chief' => '1'
            ]);	
			// 
			//julich, aachen, duren, kornelimunster, mark, arnsberg, cleveland
            DB::table('duchies')->insert([
				'duchy_name' => 'Julich',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
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
				'tenant_in_chief' => '1'
            ]);
			// 
			//limburg, namur, liege, rode, valkenburg, dalhem, muhlgau
            DB::table('duchies')->insert([
				'duchy_name' => 'Limburg',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
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
				'tenant_in_chief' => '1'
            ]);	
			// 
			//toul, metz, nancy, verdun, alsace, saarbrucken, zweibrucken, strassbourg
            DB::table('duchies')->insert([
				'duchy_name' => 'Lorraine',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
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
				'tenant_in_chief' => '1'
            ]);
			// 
			//luneburg, brunswick, schauenburg
            DB::table('duchies')->insert([
				'duchy_name' => 'Luneburg',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
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
				'tenant_in_chief' => '1'
            ]);	
			// 
			//luxembourg, stavelot, salm, vianden, chiny, bouillon
            DB::table('duchies')->insert([
				'duchy_name' => 'Luxembourg',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
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
				'tenant_in_chief' => '1'
            ]);		
			// 
			//saxony, altenburg, anhalt, mansfeld
            DB::table('duchies')->insert([
				'duchy_name' => 'Saxony',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
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
				'tenant_in_chief' => '1'
            ]);
			// 
			//silesia, lusatia, meissen
            DB::table('duchies')->insert([
				'duchy_name' => 'Silesia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
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
				'tenant_in_chief' => '1'
            ]);
			// 
			//zurich, konstanz, saint gall, lucerne, schwyz, disentis, baden, augsburg, ellwangen, gengenbach, hohenzollern, kempten, lindau, roggenburg, salem, weingarten, wettenhausen, ulm, thengen, ravensburg, kyburg, habsburg
            DB::table('duchies')->insert([
				'duchy_name' => 'Swabia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
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
				'tenant_in_chief' => '1'
            ]);
			// 
			//bremen, hamburg, stade, holstein, verden, munster, paderborn, osnabruck, minden, ravensberg, corvey, bentheim, hoya, tecklenburg
            DB::table('duchies')->insert([
				'duchy_name' => 'Bremen',
				'duchy_category' => 'Ecclesiastical',
				'de_jure_kingdom' => '1',	
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
				'tenant_in_chief' => '1'
            ]);
			// 
			//cologne, berg, sayn, wied, thuringia
            DB::table('duchies')->insert([
				'duchy_name' => 'Cologne',
				'duchy_category' => 'Ecclesiastical',
				'de_jure_kingdom' => '1',	
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
				'tenant_in_chief' => '1'
            ]);	
			// 
			//magdeburg, walbeck, halberstadt, merseburg, naumburg
            DB::table('duchies')->insert([
				'duchy_name' => 'Magdeburg',
				'duchy_category' => 'Ecclesiastical',
				'de_jure_kingdom' => '1',	
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
				'tenant_in_chief' => '1'
            ]);
			// 
			//mainz, rieneck, wertheim, nidda, fulda, hersfeld, pfalz, speyer, wissembourg, worms
            DB::table('duchies')->insert([
				'duchy_name' => 'Mainz',
				'duchy_category' => 'Ecclesiastical',
				'de_jure_kingdom' => '1',	
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
				'tenant_in_chief' => '1'
            ]);
			// 
			//salzburg, brixen, tyrol, chur, trent
            DB::table('duchies')->insert([
				'duchy_name' => 'Salzburg',
				'duchy_category' => 'Ecclesiastical',
				'de_jure_kingdom' => '1',	
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
				'tenant_in_chief' => '1'
            ]);	
			// 
			//trier, sponheim, prum, bitburg
            DB::table('duchies')->insert([
				'duchy_name' => 'Trier',
				'duchy_category' => 'Ecclesiastical',
				'de_jure_kingdom' => '1',	
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
				'tenant_in_chief' => '1'
            ]);	
			//lombardy
			// 
			//milan, bergamo, crema, lodi, valtellina
            DB::table('duchies')->insert([
				'duchy_name' => 'Milan',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '2',	
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
				'tenant_in_chief' => '1'
            ]);
			// 
			//modena, parma, reggio, frignana, piacenza, mantua, cremona, brescia
            DB::table('duchies')->insert([
				'duchy_name' => 'Modena',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '2',	
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
				'tenant_in_chief' => '1'
            ]);	
			// 
			//pavia, novara, casale, vercelli
            DB::table('duchies')->insert([
				'duchy_name' => 'Pavia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '2',	
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
				'tenant_in_chief' => '1'
            ]);	
			// 
			//salluzo, susa, asti
            DB::table('duchies')->insert([
				'duchy_name' => 'Saluzzo',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '2',	
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
				'tenant_in_chief' => '1'
            ]);				
			// 
			//grosseto, siena, cortona, arezzo
            DB::table('duchies')->insert([
				'duchy_name' => 'Tuscany',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '2',	
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
				'tenant_in_chief' => '1'
            ]);	
			// 
			//verona, treviso, padua
            DB::table('duchies')->insert([
				'duchy_name' => 'Verona',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '2',	
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
				'tenant_in_chief' => '1'
            ]);	
			// 
			//friuli, gorizia, istria
            DB::table('duchies')->insert([
				'duchy_name' => 'Aquileia',
				'duchy_category' => 'Ecclesiastical',
				'de_jure_kingdom' => '2',	
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
				'tenant_in_chief' => '1'
            ]);
			// 
			//florence
            DB::table('duchies')->insert([
				'duchy_name' => 'Florence',
				'duchy_category' => 'Crowned_Republic',
				'de_jure_kingdom' => '2',	
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
				'tenant_in_chief' => '1'
            ]);
			// 
			//genoa, malaspina, tortona, alessandria, montferrat, alba, sandova, mondovi, albenga, oneglia, monaco
            DB::table('duchies')->insert([
				'duchy_name' => 'Genoa',
				'duchy_category' => 'Crowned_Republic',
				'de_jure_kingdom' => '2',	
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
				'tenant_in_chief' => '1'
            ]);	
			// 
			//pisa, lucca, pistoja, volterra
            DB::table('duchies')->insert([
				'duchy_name' => 'Pisa',
				'duchy_category' => 'Crowned_Republic',
				'de_jure_kingdom' => '2',	
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
				'tenant_in_chief' => '1'
            ]);	
			// 
			//venice, chioggia
            DB::table('duchies')->insert([
				'duchy_name' => 'Venice',
				'duchy_category' => 'Crowned_Republic',
				'de_jure_kingdom' => '2',	
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
				'tenant_in_chief' => '1'
            ]);	
			//bohemia
			// 
			//bohemia
            DB::table('duchies')->insert([
				'duchy_name' => 'Bohemia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '3',	
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
				'tenant_in_chief' => '1'
            ]);	
			// 
			//moravia
            DB::table('duchies')->insert([
				'duchy_name' => 'Moravia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '3',	
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
				'tenant_in_chief' => '1'
            ]);				
			//burgundy
			// 
			//burgundy, avalois, autun, auxerre, nevers, auxois, lassois, beaunois, chalon, maconnais, tonerrois, avalois, beaujolais
            DB::table('duchies')->insert([
				'duchy_name' => 'Burgundy',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '4',	
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
				'tenant_in_chief' => '1'
            ]);	
			// 
			// dauphine, lyonnais, viennois, valentinois, forcalquier, briancon, embrunnais
            DB::table('duchies')->insert([
				'duchy_name' => 'Cisjurania',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '4',	
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
				'tenant_in_chief' => '1'
            ]);			
			// 
			//lausanne, bern, sion,  aargau, solothurn, freiburg, neuenburg
            DB::table('duchies')->insert([
				'duchy_name' => 'Transjurania',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '4',	
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
				'tenant_in_chief' => '1'
            ]);	
			// 
			//orange, venaissin, vivarais
            DB::table('duchies')->insert([
				'duchy_name' => 'Orange',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '4',	
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
				'tenant_in_chief' => '1'
            ]);	
			// 
			//arles, aix, baux, vaison, marseille, toulon, nice
            DB::table('duchies')->insert([
				'duchy_name' => 'Provence',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '4',	
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
				'tenant_in_chief' => '1'
            ]);	
			// 
			//tarantaise, chablais, valais, geneva, aosta
            DB::table('duchies')->insert([
				'duchy_name' => 'Savoy',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '4',	
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
				'tenant_in_chief' => '1'
            ]);	
			//papal states
			// 
			//rome
            DB::table('duchies')->insert([
				'duchy_name' => 'Rome',
				'duchy_category' => 'Ecclesiastical',
				'de_jure_kingdom' => '5',	
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
				'tenant_in_chief' => '1'
            ]);
			// 
			//ancona
            DB::table('duchies')->insert([
				'duchy_name' => 'Ancona',
				'duchy_category' => 'Crowned_Republic',
				'de_jure_kingdom' => '5',	
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
				'tenant_in_chief' => '1'
            ]);
			// 
			//ferrara, ravenna, bologna
            DB::table('duchies')->insert([
				'duchy_name' => 'Romagna',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '5',	
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
				'tenant_in_chief' => '1'
            ]);
			// 
			//spoleto
            DB::table('duchies')->insert([
				'duchy_name' => 'Spoleto',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '5',	
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
				'tenant_in_chief' => '1'
            ]);	
			//teutonic order state
			// 
			//riga, dorpat, fellin, wenden, dunaburg, selburg, goldingen, courland, rositten
            DB::table('duchies')->insert([
				'duchy_name' => 'Livonia',
				'duchy_category' => 'Ecclesiastical',
				'de_jure_kingdom' => '6',	
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
				'tenant_in_chief' => '1'
            ]);
			// 
			//reval, hapsal, arensburg, weissenstein, wesenberg, narva
            DB::table('duchies')->insert([
				'duchy_name' => 'Estonia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '6',	
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
				'tenant_in_chief' => '1'
            ]);	
			// 
			//koningsberg, elbing, memelburg, marienburg, ermland
            DB::table('duchies')->insert([
				'duchy_name' => 'Prussia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '6',	
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
				'tenant_in_chief' => '1'
            ]);	
			// 
			//danzig, culmerland, thorn
            DB::table('duchies')->insert([
				'duchy_name' => 'Pomerelia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '6',	
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
				'tenant_in_chief' => '1'
            ]);	
			// 
			//kolberg, slupsk, cammin, stettin, stralsund, greifswald, demmin, grimmen, koslin, pasewalk
            DB::table('duchies')->insert([
				'duchy_name' => 'Pomerania',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '6',	
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
				'tenant_in_chief' => '1'
            ]);	
			// 
			//havelland, brandenburg
            DB::table('duchies')->insert([
				'duchy_name' => 'Brandenburg',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '6',	
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
				'tenant_in_chief' => '1'
            ]);	
			// 
			//mecklenburg, lubeck, schwerin, ratzeburg
            DB::table('duchies')->insert([
				'duchy_name' => 'Mecklenburg',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '6',	
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
				'tenant_in_chief' => '1'
            ]);
			//france
			//france
			// 
			//perche, maine, anjou, vendome, touraine
            DB::table('duchies')->insert([
				'duchy_name' => 'Anjou',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
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
				'tenant_in_chief' => '1'
            ]);	
			// 
			//agenais, lomagne, bordeaux, bazadais, angouleme, saintogne, perigord, limousin
            DB::table('duchies')->insert([
				'duchy_name' => 'Aquitaine',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
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
				'tenant_in_chief' => '1'
            ]);	
			// 
			//auvergne, aurillac, clermont, brioude, carlat, murat
            DB::table('duchies')->insert([
				'duchy_name' => 'Auvergne',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
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
				'tenant_in_chief' => '1'
            ]);	
			//berry, sancerre
            DB::table('duchies')->insert([
				'duchy_name' => 'Berry',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
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
				'tenant_in_chief' => '1'
            ]);
			// 
			//bourbonnais, montlucon
            DB::table('duchies')->insert([
				'duchy_name' => 'Bourbonnais',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
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
				'tenant_in_chief' => '1'
            ]);	
			// 
			//nantes, rennes, vannes, dol, rohan, penthievre, cornouailles, leon
            DB::table('duchies')->insert([
				'duchy_name' => 'Brittany',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
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
				'tenant_in_chief' => '1'
            ]);	
			// 
			//casgony, armagnac, bearn, bigorre, comminges, dax, tursan, marsan, fezensac, astarac, couserans
            DB::table('duchies')->insert([
				'duchy_name' => 'Casgony',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
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
				'tenant_in_chief' => '1'
            ]);	
			// 
			//reims, rethel, langres, troyes, sens, bar, provins, meaux, chalons
            DB::table('duchies')->insert([
				'duchy_name' => 'Champagne',
				'duchy_category' => 'Ecclesiastical',
				'de_jure_kingdom' => '7',	
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
				'tenant_in_chief' => '1'
            ]);	
			// 
			//beauvaisis, senlis, valois, soissonnais, pay de france, brie, gatinais, mantois, hurepoix, vexin, clermont, beaumont
            DB::table('duchies')->insert([
				'duchy_name' => 'Francia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
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
				'tenant_in_chief' => '1'
            ]);	
			// 
			//alencon, mortain, evreux, rouen, eu, fecamp, lisieux, bayeux, coutances, avranches
            DB::table('duchies')->insert([
				'duchy_name' => 'Normandy',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
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
				'tenant_in_chief' => '1'
            ]);	
			// 
			//orleanais, blois, dunois, nemours, chartres, chateaudun, dreux
            DB::table('duchies')->insert([
				'duchy_name' => 'Orleanais',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
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
				'tenant_in_chief' => '1'
            ]);	
			// 
			//artois, boulogne, guines, montreuil, ponthieu, amienois, vermandois, laonnais, noyonnais, flanders, tournai
            DB::table('duchies')->insert([
				'duchy_name' => 'Picardy',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
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
				'tenant_in_chief' => '1'
            ]);	
			// 
			//poitou, aunis, turenne, marche, thouars, chatellerault
            DB::table('duchies')->insert([
				'duchy_name' => 'Poitou',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
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
				'tenant_in_chief' => '1'
            ]);	
			// 
			//toulouse, quercy, foix, carcasonne, narbonne, albi, gevaudan, velay, rouergue, nimes, millau
            DB::table('duchies')->insert([
				'duchy_name' => 'Toulouse',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
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
				'tenant_in_chief' => '1'
            ]);	


			
    }
}