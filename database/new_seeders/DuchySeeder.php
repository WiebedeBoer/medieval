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
				'duchy_name' => '',					//total = 324 duchies
				'duchy_category' => '',				//Feudal_Estate (287), Ecclesiastical_Estate (21), Burgher_Estate (14)
				'de_jure_kingdom' => '',			//
				'law_succession' => '',				//Elective_Monarchy (29), Salic_Primogeniture (184), Agnatic_Seniority (17), Tanistry (17), Shura (75), Yassa (0)
				'law_assembly' => '',				//absolute, limited, medium, high; default=medium	
				'law_court' => '',					//Itinerant (247), Palatial (75)
				'vernacular_architecture' => '',	//Half_Timbered_Fachwerk (35), Half_Timbered_Studded (45), Half_Timbered_Khata (30), Half_Timbered_Konak (11), Log_Chalet (14), Log_Stave (8), Log_Izba (10), Stone_Croft (6), Stone_Mudejar (40), Stone_Romanesque (58), Stone_Adjar (7), Adobe_Mashriq (19), Adobe_Maghreb (23), Adobe_Persian (16) 									
				'vegetation' => '',					//Desert_Oasis (21), Desert_Marshland (7), Steppe (34), Mediterranean_Shrubland (2), Mediterranean_Marshland (13), Mediterranean_Woodland (84), Temperate_Grassland (3), Temperate_Shrubland (30), Temperate_Woodland (112), Temperate_Marshland (16)
				'transport' => '',					//Donkey_Train (250), Oxen_Cart (), Camel_Caravan (44), Dog_Cart (30)
				'altitude' => '',					//Lowland (9), Montane (303), Highland (10)
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => '',
				'levy_feudal' => '',				//minimal, normal, large, maximal; default=large
				'levy_ecclesiastical' => '',		//minimal, normal, large, maximal; default=normal
				'levy_burgher' => '',				//minimal, normal, large, maximal; default=normal
				'tax_feudal' => '',					//minimal, normal, large, maximal; default=minimal
				'tax_ecclesiastical' => '',			//minimal, normal, large, maximal; default=normal
				'tax_burgher' => ''					//minimal, normal, large, maximal; default=normal
				'empire' => null,					//(emperor); default=null
				'kingdom' => null,					//(king); default=null
				'duchy' => null						//(duke); default=null
            ]);			
			*/
			
			/*
			
			type					area						
			
			Half_Timbered_Fachwerk 	[Germany,Denmark]			
			Half_Timbered_Studded 	[England,France]			
			Half_Timbered_Khata 	[Kyiv,Poland,Hungary]		
			Half_Timbered_Konak		[Bulgaria,Trebizond]		
			Log_Chalet	 			[Burgundy,Austria,Croatia]	
			Log_Stave				[Norway,Sweden]				
			Log_Izba				[Novgorod]					
			Stone_Croft				[Connacht,Ulster,Scotland]	
			Stone_Mudejar			[Andalucia,Portugal]		
			Stone_Romanesque 		[Europe Mediterranean]		
			Stone_Adjar 			[Georgia,Armenia]			
			Adobe_Mashriq 			[Arabia,Syria]				
			Adobe_Maghreb 			[Maghreb]					
			Adobe_Persian 			[Persia,Steppes]			
						
			*/
			
			//holy roman empire
			//germany
			//1
			//Grunsweit, Ostmark, Vienna
            DB::table('duchies')->insert([
				'duchy_name' => 'Austria',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '1',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Fachwerk',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Shrubland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Highland',
				'horse_breed' => '',
				'cattle_breed' => 'Fleckvieh',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//2
			//Donaugau, Folkfeld, Isengau, Mattiggau, Nordgau, Radenzgau, Rottgau, Schweinachgau, Westergau
            DB::table('duchies')->insert([
				'duchy_name' => 'Bavaria',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '1',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Fachwerk',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Fleckvieh',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//3
			//Brabant, Haspengau, Hennegau, Kamerykgau, Toxandria, Waasgau
            DB::table('duchies')->insert([
				'duchy_name' => 'Brabant',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '1',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Fachwerk',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Marshland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Lowland',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//4
			//Hengistgau, Ingeringtal, Jauntal, Kroatengau, Lavanttal, Leobental, Lurngau, Murztal, Sanntal
            DB::table('duchies')->insert([
				'duchy_name' => 'Carinthia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '1',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Log_Chalet',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//5
			//Krainmark, Histria
            DB::table('duchies')->insert([
				'duchy_name' => 'Carniola',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '1',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Log_Chalet',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//6
			//Grabfeld, Gollachgau, Gotzfeld, Jagstgau, Saalgau, Sualafeld, Sulmgau, Taubergau, Waldsassengau
            DB::table('duchies')->insert([
				'duchy_name' => 'Franconia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '1',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Fachwerk',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//7
			//Ammergau, Auricherland, Beveland, Bornegau, Drenthe, Dithmarschen, Emsigerland, Fivelgau, Hadeln, Holtland, Hunsingau, Kennemerland, Maasland, Nifterlake, Norderland, Ostringen, Oostergau, Rhineland, Rustringen, Salland, Sudergau, Teisterbant, Twente, Veluwe, Vollenhove, Walcheren, Westergau, Westflinge, Wursten
            DB::table('duchies')->insert([
				'duchy_name' => 'Frisia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '1',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Fachwerk',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Marshland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Lowland',
				'horse_breed' => 'Friesian',
				'cattle_breed' => 'Friesian',
				'sheep_breed' => 'East_Friesian',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//8
			//Hettergau, Betuwe, Cleveland, Hamaland, Mulgau, Ruhrgau
            DB::table('duchies')->insert([
				'duchy_name' => 'Guelders',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '1',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Fachwerk',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Marshland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Lowland',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//9
			//Julichgau, Eifelgau, Zulpichgau
            DB::table('duchies')->insert([
				'duchy_name' => 'Julich',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '1',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Fachwerk',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//10
			//Luttichgau, Ardennengau, Condrustgau, Lommegau, Maasgau
            DB::table('duchies')->insert([
				'duchy_name' => 'Limburg',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '1',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Fachwerk',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//11
			//Metzgau, Bleisgau, Chaumontois, Saargau, Salingau, Soulossois, Toullois
            DB::table('duchies')->insert([
				'duchy_name' => 'Lorraine',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '1',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Fachwerk',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//12
			//Methingau, Barrois, Moselgau, Verdungau, Wavergau
            DB::table('duchies')->insert([
				'duchy_name' => 'Luxembourg',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '1',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Fachwerk',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//13
			//Bardengau, Derlingau, Eastfalagau, Gretingau, Gudingau, Harzgau, Wenzengau
            DB::table('duchies')->insert([
				'duchy_name' => 'Saxony',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '1',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Fachwerk',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Shrubland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Rotvieh',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//14
			//Traungau, Attergau, Ennstal, Norital, Vinschgau
            DB::table('duchies')->insert([
				'duchy_name' => 'Styria',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '1',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Log_Chalet',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Shrubland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Highland',
				'horse_breed' => '',
				'cattle_breed' => 'Fleckvieh',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//15
			//Ortengau, Albegau, Augstgau, Breisgau, Churgau, Hegau, Linzgau, Neckargau, Nordgau, Riesgau, Schwerzgau, Schwyzgau, Sundgau, Turgau, Zurichgau  
            DB::table('duchies')->insert([
				'duchy_name' => 'Swabia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '1',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Fachwerk',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Dog_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Braunvieh',
				'sheep_breed' => 'Zaupelschaf',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//16
			//Thuringgau, Altgau, Eichsfeld, Helmegau, Langwitzgau, Nabelgau, Orlagau, Ostergau, Zwickaugau
            DB::table('duchies')->insert([
				'duchy_name' => 'Thuringia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '1',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Fachwerk',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Rotvieh',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//17
			//Largau, Agradingau, Angerngau, Augau, Bukkigau, Bursibant, Dervegau, Dreingau, Gronegau, Hasegau, Heilangau, Holsteingau, Leinegau, Mosidegau, Padergau, Stevergau, Stormarngau, Sturmigau, Sudergau, Werregau, Westfaliagau      
            DB::table('duchies')->insert([
				'duchy_name' => 'Bremen',
				'duchy_category' => 'Ecclesiastical_Estate',
				'de_jure_kingdom' => '1',
				'law_succession' => 'Elective_Monarchy',
				'vernacular_architecture' => 'Half_Timbered_Fachwerk',
				'law_court' => 'Itinerant',		
				'vegetation' => 'Temperate_Marshland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Lowland',
				'horse_breed' => '',
				'cattle_breed' => 'Angeln',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//18
			//Gillgau, Auelgau, Bonngau, Deutzgau
            DB::table('duchies')->insert([
				'duchy_name' => 'Cologne',
				'duchy_category' => 'Ecclesiastical_Estate',
				'de_jure_kingdom' => '1',
				'law_succession' => 'Elective_Monarchy',
				'vernacular_architecture' => 'Half_Timbered_Fachwerk',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Marshland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//19
			//Nordthuringgau, Balsamgau, Friesenfeld, Hartingau, Hassegau, Osterwalde, Schwabengau
            DB::table('duchies')->insert([
				'duchy_name' => 'Magdeburg',
				'duchy_category' => 'Ecclesiastical_Estate',
				'de_jure_kingdom' => '1',
				'law_succession' => 'Elective_Monarchy',
				'vernacular_architecture' => 'Half_Timbered_Fachwerk',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//20
			//Wormsfeld, Engersgau, Hessengau, Lahngau, Lobdengau, Maingau, Nahegau, Niddagau, Speyergau, Ufgau, Wettergau, Wurmgau
            DB::table('duchies')->insert([
				'duchy_name' => 'Mainz',
				'duchy_category' => 'Ecclesiastical_Estate',
				'de_jure_kingdom' => '1',
				'law_succession' => 'Elective_Monarchy',
				'vernacular_architecture' => 'Half_Timbered_Fachwerk',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//21
			//Salzburggau, Chiemgau, Lungau, Pinzgau, Sundergau
            DB::table('duchies')->insert([
				'duchy_name' => 'Salzburg',
				'duchy_category' => 'Ecclesiastical_Estate',
				'de_jure_kingdom' => '1',
				'law_succession' => 'Elective_Monarchy',
				'vernacular_architecture' => 'Log_Chalet',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Shrubland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Highland',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//22
			//Bitgau, Maifeld, Hunsruckgau, Trechirgau
            DB::table('duchies')->insert([
				'duchy_name' => 'Trier',
				'duchy_category' => 'Ecclesiastical_Estate',
				'de_jure_kingdom' => '1',
				'law_succession' => 'Elective_Monarchy',
				'vernacular_architecture' => 'Half_Timbered_Fachwerk',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Lombardy
			//23
			//Milano, Bergamo, Brescia, Crema, Cremona, Frignana, Lodi, Mantua, Modena, Novara, Parma, Pavia, Piacenza, Reggio, Tortona, Vernio
            DB::table('duchies')->insert([
				'duchy_name' => 'Milan',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '2',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Fachwerk',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Marshland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//24
			//Alba, Asti, Auriate, Canavese, Casale, Cuneo, Montferrat, Pragelato, Susa, Turino, Vercelli, Vigevano
            DB::table('duchies')->insert([
				'duchy_name' => 'Piedmont',
				'duchy_category' => 'Ecclesiastical_Estate',
				'de_jure_kingdom' => '2',
				'law_succession' => 'Elective_Monarchy',
				'vernacular_architecture' => 'Half_Timbered_Fachwerk',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Marshland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Piedmontese',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//25
			//Siena, Grosseto, Piombino, Sovana
            DB::table('duchies')->insert([
				'duchy_name' => 'Tuscany',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '2',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//26
			//Verona, Padova, Rovigo, Vicenza, Trent
            DB::table('duchies')->insert([
				'duchy_name' => 'Verona',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '2',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Marshland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//27
			//Friuli, Gorizia, Pordenone
            DB::table('duchies')->insert([
				'duchy_name' => 'Aquileia',
				'duchy_category' => 'Ecclesiastical_Estate',
				'de_jure_kingdom' => '2',
				'law_succession' => 'Elective_Monarchy',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Marshland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//28
			//Florence, Arezzo, Cortona, Perugia, Prato
            DB::table('duchies')->insert([
				'duchy_name' => 'Florence',
				'duchy_category' => 'Burgher_Estate',
				'de_jure_kingdom' => '2',
				'law_succession' => 'Elective_Monarchy',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//29
			//Genoa, Lunigiana, Massa
            DB::table('duchies')->insert([
				'duchy_name' => 'Genoa',
				'duchy_category' => 'Burgher_Estate',
				'de_jure_kingdom' => '2',
				'law_succession' => 'Elective_Monarchy',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//30
			//Noli, Albenga, Finale
            DB::table('duchies')->insert([
				'duchy_name' => 'Noli',
				'duchy_category' => 'Burgher_Estate',
				'de_jure_kingdom' => '2',
				'law_succession' => 'Elective_Monarchy',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//31
			//Oneglia, Monaco, Ventimiglia
            DB::table('duchies')->insert([
				'duchy_name' => 'Oneglia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '2',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//32
			//Lucca, Pistoia
            DB::table('duchies')->insert([
				'duchy_name' => 'Lucca',
				'duchy_category' => 'Burgher_Estate',
				'de_jure_kingdom' => '2',
				'law_succession' => 'Elective_Monarchy',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//33
			//Pisa, Corsica, Livorno, Volterra
            DB::table('duchies')->insert([
				'duchy_name' => 'Pisa',
				'duchy_category' => 'Burgher_Estate',
				'de_jure_kingdom' => '2',
				'law_succession' => 'Elective_Monarchy',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',		
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//34
			//Dogado, Belluno, Treviso
            DB::table('duchies')->insert([
				'duchy_name' => 'Venice',
				'duchy_category' => 'Burgher_Estate',
				'de_jure_kingdom' => '2',
				'law_succession' => 'Elective_Monarchy',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Marshland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Lowland',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//bohemia
			//35
			//Prague, Bechin, Bunzlau, Elbogen, Glatzerland, Koniggratz, Leitmeritz, Pilsen, Rakonitz, Schlan, Saaz, Tschaslawsko
            DB::table('duchies')->insert([
				'duchy_name' => 'Bohemia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '3',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Log_Chalet',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//36
			//Meissengau, Milzenigau, Nisangau, Lusizigau, Selpuligau
            DB::table('duchies')->insert([
				'duchy_name' => 'Lusatia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '6',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Log_Chalet',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//37
			//Brunn, Iglau, Olmutz, Prerau, Velingrad, Znaim
            DB::table('duchies')->insert([
				'duchy_name' => 'Moravia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '3',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Khata',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//38
			//Jauer, Glogau, Leubus, Liegnitz, Oels, Schweidnitz
            DB::table('duchies')->insert([
				'duchy_name' => 'Lower Silesia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '3',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Khata',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//39
			//Oppeln, Breslau, Brieg, Ratibor, Teschen, Troppau
            DB::table('duchies')->insert([
				'duchy_name' => 'Upper Silesia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '3',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Khata',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Burgundy
			//40
			//Avalois, Autunais, Auxerrois, Auxois, Beaujolais, Beaunois, Chalonais, Lassois, Maconnais, Nivernais, Tonerrois
            DB::table('duchies')->insert([
				'duchy_name' => 'Burgundy',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '4',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Fachwerk',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Charolais',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//41
			//Dauphine, Albon, Belinois, Embrunnais, Forcalquier, Lyonnais, Mauronais, Valentinois, Viennois
            DB::table('duchies')->insert([
				'duchy_name' => 'Cisjurania',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '4',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Fachwerk',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Marshland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//42
			//Amosenais, Aargau, Bargenais, Genevanais, Lausonnais, Portenais, Vaudenais
            DB::table('duchies')->insert([
				'duchy_name' => 'Transjurania',
				'duchy_category' => 'Ecclesiastical_Estate',
				'de_jure_kingdom' => '4',
				'law_succession' => 'Elective_Monarchy',
				'vernacular_architecture' => 'Log_Chalet',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Shrubland',
				'transport' => 'Dog_Cart',
				'altitude' => 'Highland',
				'horse_breed' => '',
				'cattle_breed' => 'Simmental',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//43
			//Orange, Venaissin, Vivarais
            DB::table('duchies')->insert([
				'duchy_name' => 'Orange',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '4',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Marshland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => 'Camarque',
				'cattle_breed' => 'Camarque',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//44
			//Provence, Arles, Baux, Marseille, Nice, Toulon 
            DB::table('duchies')->insert([
				'duchy_name' => 'Provence',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '4',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Marshland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => 'Camarque',
				'cattle_breed' => 'Camarque',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//45
			//Savoia, Aosta, Chablais, Genevanais, Tarantais, Valais
            DB::table('duchies')->insert([
				'duchy_name' => 'Savoy',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '4',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Log_Chalet',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Shrubland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Highland',
				'horse_breed' => '',
				'cattle_breed' => 'Chablaisien',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Papal States
			//46
			//Rome, Frosinone, Latina, Rieti, Viterbo
            DB::table('duchies')->insert([
				'duchy_name' => 'Rome',
				'duchy_category' => 'Ecclesiastical_Estate',
				'de_jure_kingdom' => '5',
				'law_succession' => 'Elective_Monarchy',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//47 
			//Ferrara, Bologna, Carpegna, Ravenna
            DB::table('duchies')->insert([
				'duchy_name' => 'Romagna',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '5',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//48 
			//Ancona, Chieti, Fermo, Pescara, Spoleto
            DB::table('duchies')->insert([
				'duchy_name' => 'Spoleto',
				'duchy_category' => 'Burgher_Estate',
				'de_jure_kingdom' => '5',
				'law_succession' => 'Elective_Monarchy',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//49
			//Urbino, Pesaro
            DB::table('duchies')->insert([
				'duchy_name' => 'Urbino',
				'duchy_category' => 'Ecclesiastical_Estate',
				'de_jure_kingdom' => '5',
				'law_succession' => 'Elective_Monarchy',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//teutonic order state
			//50 
			//Livland, Ascheraden, Dorpat, Dunaburg, Fellin, Kurland, Mitau, Segewold, Wenden, Wolkenburg
            DB::table('duchies')->insert([
				'duchy_name' => 'Livonia',
				'duchy_category' => 'Ecclesiastical_Estate',
				'de_jure_kingdom' => '6',
				'law_succession' => 'Elective_Monarchy',
				'vernacular_architecture' => 'Half_Timbered_Fachwerk',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//51
			//Reval, Pernau
            DB::table('duchies')->insert([
				'duchy_name' => 'Estonia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '6',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Log_Stave',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//52
			//Pomesanengau, Bartengau, Ermland, Memelland, Nadrauengau, Natangergau, Pogesanengau, Samland
            DB::table('duchies')->insert([
				'duchy_name' => 'Prussia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '6',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Fachwerk',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//53
			//Danzig, Butow, Dirschau, Karthaus, Kulmerland, Lauenburg, Putzig, Schlochau, Schwetz, Thorn, Tuchel
            DB::table('duchies')->insert([
				'duchy_name' => 'Pomerelia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '6',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Fachwerk',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Pomeranian',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//54 
			//Kammin, Arnswalde, Gollnow, Greifenhagen, Greifenberg, Pyritz, Kessinigau, Kolberg, Koslin, Neustettin, Schivelbein, Slupsk, Schlawe, Stettin, Wostrosegau
            DB::table('duchies')->insert([
				'duchy_name' => 'Pomerania',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '6',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Fachwerk',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Marshland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Pomeranian',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//55
			//Havelland, Dossegau, Linaggau, Nelitzigau, Retschanengau, Uckermark
            DB::table('duchies')->insert([
				'duchy_name' => 'Brandenburg',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '6',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Fachwerk',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//56
			//Circipanigau, Obotritegau, Polabigau, Wagrigau
            DB::table('duchies')->insert([
				'duchy_name' => 'Mecklenburg',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '6',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Fachwerk',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//France
			//France
			//57
			//Anjou, Maine, Perche, Touraine, Vendomois
            DB::table('duchies')->insert([
				'duchy_name' => 'Anjou',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '7',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Marshland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Lowland',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Maine',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//58
			//Bordelais, Agenais, Angoumois, Bazadais, Limousin, Lomagne, Perigord, Saintogne
            DB::table('duchies')->insert([
				'duchy_name' => 'Aquitaine',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '7',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Limousine',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);	
			//59
			//Auvergne, Aurillac, Brioude, Carlat, Clermont, Forez, Murat
            DB::table('duchies')->insert([
				'duchy_name' => 'Auvergne',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '7',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Aubrac',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//60
			//Berry, Sancerre
            DB::table('duchies')->insert([
				'duchy_name' => 'Berry',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '7',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//61 
			//Bourbonnais, Montlucon
            DB::table('duchies')->insert([
				'duchy_name' => 'Bourbonnais',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '7',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//62
			//Armagnac, Astarac, Bearn, Bigorre, Comminges, Couserans, Dax, Fezensac, Marsan, Tursan 
            DB::table('duchies')->insert([
				'duchy_name' => 'Gascony',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '7',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Shrubland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Highland',
				'horse_breed' => '',
				'cattle_breed' => 'Aubrac',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//63
			//Remois, Brenois, Chalonnais, Duesmois, Langres, Meaux, Perthois, Provins, Rethelois, Senois, Troyes
            DB::table('duchies')->insert([
				'duchy_name' => 'Champagne',
				'duchy_category' => 'Ecclesiastical_Estate',
				'de_jure_kingdom' => '7',
				'law_succession' => 'Elective_Monarchy',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Grassland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//64 
			//Pay de France, Beauvaisis, Beaumont, Brie, Clermont, Gatinais, Hurepoix, Mantois, Senlis, Soissonnais, Valois, Vexin 
            DB::table('duchies')->insert([
				'duchy_name' => 'Francia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '7',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Marshland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//65
			//Roumois, Alencon, Avranches, Bayeux, Caux, Coutances, Evreux, Eu, Lisieux, Mortainais
            DB::table('duchies')->insert([
				'duchy_name' => 'Normandy',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '7',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Marshland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Normande',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//66
			//Orleanais, Blaisois, Chartres, Dreux, Dunois, Etampois, Nemours 
            DB::table('duchies')->insert([
				'duchy_name' => 'Orleanais',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '7',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//67
			//Artois, Amienois, Boulognois, Flanders, Guines, Laonnais, Montreuil, Noyonnais, Ponthieu, Ternois, Tournais, Vermandois 
            DB::table('duchies')->insert([
				'duchy_name' => 'Picardy',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '7',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Marshland',
				'transport' => 'Dog_Cart',
				'altitude' => 'Lowland',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//68
			//Poitou, Aunis, Briancais, Chatellerault, Marche, Thouarsais, Turenne
            DB::table('duchies')->insert([
				'duchy_name' => 'Poitou',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '7',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Parthenaise',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//69
			//Toulouse, Albi, Carcasonne, Foix, Gevaudan, Melgueil, Millau, Narbonne, Nimes, Quercy, Rouergue, Velay
            DB::table('duchies')->insert([
				'duchy_name' => 'Toulouse',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '7',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Aubrac',
				'sheep_breed' => 'Lacaune',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Brittany
			//70
			//Cornouailles, Ach, Dol, Leon, Poher, Vannais
            DB::table('duchies')->insert([
				'duchy_name' => 'Brittany',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '8',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//71
			//Penthievre, Alet, Tregor
            DB::table('duchies')->insert([
				'duchy_name' => 'Domnonee',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '8',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//72
			//Retz, Nantais, Rennais
            DB::table('duchies')->insert([
				'duchy_name' => 'Retz',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '8',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Marshland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Britain
			//Ireland
			//73
			//Galway, Mayo, Roscommon, Sligo
            DB::table('duchies')->insert([
				'duchy_name' => 'Connacht',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '9',
				'law_succession' => 'Tanistry',
				'vernacular_architecture' => 'Stone_Croft',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Dog_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Irish_Moiled',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//74
			//Carlow, Kildare, Kilkenny, Leix, Tipperary, Waterford, Wexford, Wicklow
            DB::table('duchies')->insert([
				'duchy_name' => 'Leinster',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '9',
				'law_succession' => 'Tanistry',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Dog_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Irish_Moiled',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//75
			//Dublin, Longford, Meath, Offaly
            DB::table('duchies')->insert([
				'duchy_name' => 'Meath',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '9',
				'law_succession' => 'Tanistry',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Dog_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Irish_Moiled',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//76
			//Clare, Cork, Kerry, Limerick
            DB::table('duchies')->insert([
				'duchy_name' => 'Munster',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '9',
				'law_succession' => 'Tanistry',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Dog_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Irish_Moiled',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//77
			//Antrim, Armagh, Cavan, Derry, Donegal, Down, Fermanagh, Leitrim, Louth, Monaghan, Tyrone
            DB::table('duchies')->insert([
				'duchy_name' => 'Ulster',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '9',
				'law_succession' => 'Tanistry',
				'vernacular_architecture' => 'Stone_Croft',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Dog_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Irish_Moiled',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//England
			//78
			//Norfolk, Suffolk
            DB::table('duchies')->insert([
				'duchy_name' => 'East Anglia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '10',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Marshland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//79
			//Essex, Hertfordshire, Middlesex
            DB::table('duchies')->insert([
				'duchy_name' => 'Essex',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '10',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//80
			//Gloucestershire, Warwickshire, Winchcombeshire, Worcestershire
            DB::table('duchies')->insert([
				'duchy_name' => 'Hwicce',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '10',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Marshland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Gloucester',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//81
			//Aylesfordshire, Kent, Shepwayshire
            DB::table('duchies')->insert([
				'duchy_name' => 'Kent',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '10',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Marshland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//82
			//Derbyshire, Leicestershire, Lincolnshire, Nothinghamshire, Rutland
            DB::table('duchies')->insert([
				'duchy_name' => 'Lindsey',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '10',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Lincoln',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//83
			//Cheshire, Herefordshire, Shropshire, Staffordshire
            DB::table('duchies')->insert([
				'duchy_name' => 'Mercia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '10',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Ryeland',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//84
			//Bedfordshire, Buckinghamshire, Cambridgeshire, Huntingdonshire, Northamptonshire, Oxfordshire
            DB::table('duchies')->insert([
				'duchy_name' => 'Mid Anglia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '10',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Marshland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Lowland',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);	
			//85
			//Allertonshire, Burghshire, Cumberland, Durham, Hallamshire, Hexhamshire, Howdenshire, Northumberland, Lancashire, Richmondshire, Yorkshire
            DB::table('duchies')->insert([
				'duchy_name' => 'Northumbria',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '10',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Shrubland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Herdwick',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//86
			//Arundelshire, Brambershire, Chichestershire, Leweshire, Pevenshire, Sussex
            DB::table('duchies')->insert([
				'duchy_name' => 'Sussex',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '10',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//87
			//Berkshire, Dorsetshire, Hampshire, Somersetshire, Surrey, Wiltshire
            DB::table('duchies')->insert([
				'duchy_name' => 'Wessex',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '10',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Dog_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Wales
			//88
			//Cornwall, Devonshire
            DB::table('duchies')->insert([
				'duchy_name' => 'Cornwall',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '11',
				'law_succession' => 'Tanistry',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//89
			//Cardiganshire, Carmarthenshire, Pembrokeshire
            DB::table('duchies')->insert([
				'duchy_name' => 'Dyfed',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '11',
				'law_succession' => 'Tanistry',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);	
			//90
			//Glamorgan, Monmouthshire
            DB::table('duchies')->insert([
				'duchy_name' => 'Gwent',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '11',
				'law_succession' => 'Tanistry',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);	
			//91
			//Anglesey, Caernarvonshire, Denbighshire, Flintshire
            DB::table('duchies')->insert([
				'duchy_name' => 'Gwyned',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '11',
				'law_succession' => 'Tanistry',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Shrubland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);	
			//92
			//Brecknockshire, Montgomeryshire, Radnorshire
            DB::table('duchies')->insert([
				'duchy_name' => 'Powys',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '11',
				'law_succession' => 'Tanistry',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Shrubland',
				'transport' => 'Oxen_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);	
			//Scotland
			//93
			//Aberdeenshire, Banffshire, Fife, Forfarshire, Kincardineshire, Kinrossshire, Perthshire
            DB::table('duchies')->insert([
				'duchy_name' => 'Alba',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '12',
				'law_succession' => 'Tanistry',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Dog_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Highland',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//94
			//Berwickshire, Edinburghshire, Haddingtonshire, Lothian, Stirlingshire
            DB::table('duchies')->insert([
				'duchy_name' => 'Bernicia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '12',
				'law_succession' => 'Tanistry',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Dog_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Highland',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//95
			//Argyll, Bute, Mann
            DB::table('duchies')->insert([
				'duchy_name' => 'Dalriada',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '12',
				'law_succession' => 'Tanistry',
				'vernacular_architecture' => 'Stone_Croft',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Shrubland',
				'transport' => 'Dog_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Highland',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//96
			//Cromartyshire, Elginshire, Invernessshire, Nairnshire, Sutherland
            DB::table('duchies')->insert([
				'duchy_name' => 'Fortriu',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '12',
				'law_succession' => 'Tanistry',
				'vernacular_architecture' => 'Stone_Croft',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Shrubland',
				'transport' => 'Dog_Cart',
				'altitude' => 'Highland',
				'horse_breed' => '',
				'cattle_breed' => 'Highland',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//97
			//Kirkcudbrightshire, Wigtownshire
            DB::table('duchies')->insert([
				'duchy_name' => 'Galloway',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '12',
				'law_succession' => 'Tanistry',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Dog_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Highland',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//98
			//Dumfriesshire, Peeblesshire, Roxburghshire, Selkirkshire
            DB::table('duchies')->insert([
				'duchy_name' => 'Gododdin',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '12',
				'law_succession' => 'Tanistry',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Dog_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Highland',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//99
			//Ayrshire, Dunbartonshire, Lanarkshire, Renfrewshire
            DB::table('duchies')->insert([
				'duchy_name' => 'Strathclyde',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '12',
				'law_succession' => 'Tanistry',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Dog_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Highland',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Aragon
			//Aragon
			//100
			//Aragon, Cinca, Matarrana
            DB::table('duchies')->insert([
				'duchy_name' => 'Aragon',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '13',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Itinerant',
				'vegetation' => 'Steppe',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Pirenaica',
				'sheep_breed' => 'Churra',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//101
			//Bages, Barcelona, Bergueda, Llobregat, Maresme, Osona, Valles
            DB::table('duchies')->insert([
				'duchy_name' => 'Barcelona',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '13',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Pirenaica',
				'sheep_breed' => 'Churra',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//102
			//Cerdanya, Conflent, Emporda, Girones, Razes, Ripolles, Rosello, Selva
            DB::table('duchies')->insert([
				'duchy_name' => 'Girona',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '13',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Pirenaica',
				'sheep_breed' => 'Churra',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//103
			//Huesca, Jacetania, Ribagorza, Sobrarbe
            DB::table('duchies')->insert([
				'duchy_name' => 'Huesca',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '13',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Shrubland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Highland',
				'horse_breed' => '',
				'cattle_breed' => 'Pirenaica',
				'sheep_breed' => 'Churra',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//104
			//Lleida, Pallars, Urgell
            DB::table('duchies')->insert([
				'duchy_name' => 'Lleida',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '13',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Shrubland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Pirenaica',
				'sheep_breed' => 'Churra',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//105
			//Montsia, Tarragona, Tortosa
            DB::table('duchies')->insert([
				'duchy_name' => 'Tarragona',
				'duchy_category' => 'Ecclesiastical_Estate',
				'de_jure_kingdom' => '13',
				'law_succession' => 'Elective_Monarchy',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Pirenaica',
				'sheep_breed' => 'Churra',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//106
			//Albarracin, Teruel
            DB::table('duchies')->insert([
				'duchy_name' => 'Teruel',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '13',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Itinerant',
				'vegetation' => 'Steppe',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Pirenaica',
				'sheep_breed' => 'Churra',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//107
			//Aranda, Calatayud, Zaragoza
            DB::table('duchies')->insert([
				'duchy_name' => 'Zaragoza',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '13',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Itinerant',
				'vegetation' => 'Steppe',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Pirenaica',
				'sheep_breed' => 'Churra',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Navarre
			//108
			//Ayala, Gasteiz, Rioja
            DB::table('duchies')->insert([
				'duchy_name' => 'Alava',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '14',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Itinerant',
				'vegetation' => 'Steppe',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Pirenaica',
				'sheep_breed' => 'Churra',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);	
			//109
			//Donostialdea, Leitzaldea, Mungialdea, Tolosaldea
            DB::table('duchies')->insert([
				'duchy_name' => 'Gipuzcoa',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '14',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Shrubland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Pirenaica',
				'sheep_breed' => 'Churra',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//110
			//Estella, Irunerria, Sanguesa, Tafalla, Tudela, Ultzamaldea
            DB::table('duchies')->insert([
				'duchy_name' => 'Navarre',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '14',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Shrubland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Pirenaica',
				'sheep_breed' => 'Churra',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//111
			//Busturialdea, Bilbaoldea, Uribe
            DB::table('duchies')->insert([
				'duchy_name' => 'Viscaya',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '14',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Shrubland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Pirenaica',
				'sheep_breed' => 'Churra',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Castile
			//Castile
			//112
			//Avila, Morana, San Pedro
            DB::table('duchies')->insert([
				'duchy_name' => 'Avila',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '15',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Itinerant',
				'vegetation' => 'Steppe',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Pirenaica',
				'sheep_breed' => 'Merino',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//113
			//Arlanza, Bureba, Burgos
            DB::table('duchies')->insert([
				'duchy_name' => 'Burgos',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '15',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Itinerant',
				'vegetation' => 'Steppe',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Pirenaica',
				'sheep_breed' => 'Merino',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//114
			//Campos, Cerrato, Valdivia
            DB::table('duchies')->insert([
				'duchy_name' => 'Palencia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '15',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Itinerant',
				'vegetation' => 'Steppe',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Pirenaica',
				'sheep_breed' => 'Merino',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//115
			//Coca, Riaza, Segovia, Sepulveda
            DB::table('duchies')->insert([
				'duchy_name' => 'Segovia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '15',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Itinerant',
				'vegetation' => 'Steppe',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Pirenaica',
				'sheep_breed' => 'Merino',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//116
			//Almazan, Berlanga, Gomara, Osma, Soria
            DB::table('duchies')->insert([
				'duchy_name' => 'Soria',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '15',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Itinerant',
				'vegetation' => 'Steppe',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Pirenaica',
				'sheep_breed' => 'Merino',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//117
			//Jara, Madrid, Ocana, Sagra, Talavera, Toledo, Torrijos, Vegas
            DB::table('duchies')->insert([
				'duchy_name' => 'Toledo',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '15',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Itinerant',
				'vegetation' => 'Steppe',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Pirenaica',
				'sheep_breed' => 'Merino',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//118
			//Esgueva, Medina, Pinares, Penafiel, Pisuerga, Rioseco
            DB::table('duchies')->insert([
				'duchy_name' => 'Valladolid',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '15',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Itinerant',
				'vegetation' => 'Steppe',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Pirenaica',
				'sheep_breed' => 'Merino',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Galicia
			//119
			//Coruna, Eume, Ferrol, Santiago, Trastamara
            DB::table('duchies')->insert([
				'duchy_name' => 'Coruna',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '16',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Shrubland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Merino',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);	
			//120
			//Lugo, Marina, Meira, Sarria, Ulloa
            DB::table('duchies')->insert([
				'duchy_name' => 'Lugo',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '16',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Shrubland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Merino',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//121
			//Carbalino, Celanova, Ourense, Valdeorras, Viana
            DB::table('duchies')->insert([
				'duchy_name' => 'Ourense',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '16',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Shrubland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Merino',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//122
			//Caldas, Pontevedra, Vigo
            DB::table('duchies')->insert([
				'duchy_name' => 'Pontevedra',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '16',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Shrubland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Merino',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Leon
			//123
			//Alcantara, Caceres, Plasencia, Trujillo
            DB::table('duchies')->insert([
				'duchy_name' => 'Caceres',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '17',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Pirenaica',
				'sheep_breed' => 'Merino',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//124
			//Astorga, Baneza, Bierzo, Leon, Sahagun
            DB::table('duchies')->insert([
				'duchy_name' => 'Leon',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '17',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Shrubland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Pirenaica',
				'sheep_breed' => 'Merino',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//125
			//Alba, Caceres, Cantalapiedra, Guijielo, Ledesma, Penaranda, Rodrigo, Salamanca, Vitigudino
            DB::table('duchies')->insert([
				'duchy_name' => 'Salamanca',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '17',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Itinerant',
				'vegetation' => 'Steppe',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Pirenaica',
				'sheep_breed' => 'Merino',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//126
			//Aliste, Carballeda, Guarena, Sanabria, Sayago, Tabara
            DB::table('duchies')->insert([
				'duchy_name' => 'Zamora',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '17',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Itinerant',
				'vegetation' => 'Steppe',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Pirenaica',
				'sheep_breed' => 'Merino',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Asturias
			//127
			//Aviles, Gijon, Navia, Oviedo
            DB::table('duchies')->insert([
				'duchy_name' => 'Asturias',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '18',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Shrubland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Pirenaica',
				'sheep_breed' => 'Churra',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//128
			//Campoo, Liebana, Santander, Trasmiera
            DB::table('duchies')->insert([
				'duchy_name' => 'Cantabria',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '18',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Studded',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Shrubland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Pirenaica',
				'sheep_breed' => 'Churra',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Portugal
			//129
			//Aveiro, Braga, Porto, Viana
            DB::table('duchies')->insert([
				'duchy_name' => 'Aveiro',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '19',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Merino',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//130
			//Branco, Coimbra, Guarda, Viseu
            DB::table('duchies')->insert([
				'duchy_name' => 'Beira',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '19',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Shrubland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Merino',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//131
			//Braganca, Vila Real
            DB::table('duchies')->insert([
				'duchy_name' => 'Braganca',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '19',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Shrubland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Merino',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//132
			//Leiria, Lisboa, Ribatejo, Setubal
            DB::table('duchies')->insert([
				'duchy_name' => 'Estremadura',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '19',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Merino',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Danelagen
			//Denmark
			//133
			//Aarhus, Borglum, Ribe, Slesvig, Viborg
            DB::table('duchies')->insert([
				'duchy_name' => 'Jutland',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '20',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Fachwerk',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Grassland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Fjall',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//134
			//Blekinge, Bornholm, Halland, Rugen, Scania
            DB::table('duchies')->insert([
				'duchy_name' => 'Scania',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '20',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Fachwerk',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Fjall',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//135
			//Funen, Lolland, Roskilde, Sjaeland, Soro
            DB::table('duchies')->insert([
				'duchy_name' => 'Sjaeland',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '20',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Fachwerk',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Grassland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Fjall',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Norway
			//136
			//Caithness, Orkney, Shetland
            DB::table('duchies')->insert([
				'duchy_name' => 'Nordjor',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '21',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Croft',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Shrubland',
				'transport' => 'Dog_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Shetland',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//137
			//Islay, Lewis, Mull, Skye, Uist
            DB::table('duchies')->insert([
				'duchy_name' => 'Sodor',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '21',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Croft',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Shrubland',
				'transport' => 'Dog_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Shetland',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//138
			//Hadeland, Hedmark, Romerike
            DB::table('duchies')->insert([
				'duchy_name' => 'Hedmark',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '21',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Log_Stave',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Shrubland',
				'transport' => 'Dog_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Fjall',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//139
			//Jamtland, Namdal, Oppland, Trondelag
            DB::table('duchies')->insert([
				'duchy_name' => 'Oppland',
				'duchy_category' => 'Ecclesiastical_Estate',
				'de_jure_kingdom' => '20',
				'law_succession' => 'Elective_Monarchy',
				'vernacular_architecture' => 'Log_Stave',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Shrubland',
				'transport' => 'Dog_Cart',
				'altitude' => 'Highland',
				'horse_breed' => '',
				'cattle_breed' => 'Fjall',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//140
			//Dalane, Haugeland, Jaeren, Rogaland
            DB::table('duchies')->insert([
				'duchy_name' => 'Rogaland',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '21',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Fachwerk',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Shrubland',
				'transport' => 'Dog_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Fjall',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//141
			//Agder, Grenland, Telemark
            DB::table('duchies')->insert([
				'duchy_name' => 'Sorland',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '21',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Fachwerk',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Dog_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Fjall',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//142
			//Hordaland, Romsdal, Vestland
            DB::table('duchies')->insert([
				'duchy_name' => 'Vestland',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '21',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Fachwerk',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Shrubland',
				'transport' => 'Dog_Cart',
				'altitude' => 'Highland',
				'horse_breed' => '',
				'cattle_breed' => 'Fjall',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//143
			//Akershus, Buskerud, Ostfold, Ranrike, Vestfold, Vingulmark
            DB::table('duchies')->insert([
				'duchy_name' => 'Viken',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '21',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Fachwerk',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Dog_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Fjall',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Sweden
			//144
			//Gotland, Ostergotland, Vastergotland
            DB::table('duchies')->insert([
				'duchy_name' => 'Gotland',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '22',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Log_Stave',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Dog_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Fjall',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//145
			//Angermanland, Gastrikland, Halsingland
            DB::table('duchies')->insert([
				'duchy_name' => 'Norrland',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '22',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Log_Stave',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Dog_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Fjall',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//146
			//Aland, Finland, Karelia, Nyland, Ostrobothnia, Satakunta, Savonia, Tavastland
            DB::table('duchies')->insert([
				'duchy_name' => 'Osterland',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '22',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Log_Stave',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Dog_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Fjall',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//147
			//Oland, Smaland
            DB::table('duchies')->insert([
				'duchy_name' => 'Smaland',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '22',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Log_Stave',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Dog_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Fjall',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//148
			//Dalarna, Narke, Sodermanland, Uppland, Varmland, Vastmanland
            DB::table('duchies')->insert([
				'duchy_name' => 'Svealand',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '22',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Log_Stave',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Dog_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Fjall',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Poland
			//Poland
			//149
			//Gostyn, Grodisze, Jarotschin, Kosten, Lissa 
            DB::table('duchies')->insert([
				'duchy_name' => 'Greater Poland',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '23',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Khata',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//150
			//Auswitz, Chrzanow, Sandez, Tarnow, Wadowitz, Lublin, Lukow, Sandomierz
            DB::table('duchies')->insert([
				'duchy_name' => 'Lesser Poland',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '23',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Khata',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//151
			//Gnesen, Kolo, Kunau, Slupca, Turek, Znin
            DB::table('duchies')->insert([
				'duchy_name' => 'Gnesen',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '23',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Khata',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);	
			//152
			//Kalisz, Pleschen, Schildberg, Wielun, Wreschen
            DB::table('duchies')->insert([
				'duchy_name' => 'Kalisz',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '23',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Khata',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//153
			//Krakow, Olkusz, Czestochowa, Gorlitz
            DB::table('duchies')->insert([
				'duchy_name' => 'Krakow',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '23',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Khata',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//154
			//Brodnica, Inowroclaw, Leipe, Mogilno, Naklo, Radziejow
            DB::table('duchies')->insert([
				'duchy_name' => 'Kuyavia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '23',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Khata',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);	
			//155
			//Losice, Makow, Minsk, Zuromin, Rawa, Wizna
            DB::table('duchies')->insert([
				'duchy_name' => 'Mazovia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '23',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Khata',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//156
			//Plock, Gostynin, Mlawa
            DB::table('duchies')->insert([
				'duchy_name' => 'Plock',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '23',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Khata',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//157
			//Posen, Chodziez, Pila, Rogasen, Samter, Scharnikau, Schrim
            DB::table('duchies')->insert([
				'duchy_name' => 'Posen',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '23',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Khata',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//158
			//Sieradz, Radom, Lentschitz
            DB::table('duchies')->insert([
				'duchy_name' => 'Sieradz',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '23',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Khata',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//159
			//Warsaw, Czersk
            DB::table('duchies')->insert([
				'duchy_name' => 'Warsaw',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '23',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Khata',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Lithuania
			//160
			//Minsk, Gomel, Mogilev
            DB::table('duchies')->insert([
				'duchy_name' => 'Minsk',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '24',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Log_Izba',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//161
			//Lahoysk, Barysaw
            DB::table('duchies')->insert([
				'duchy_name' => 'Lahoysk',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '24',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Log_Izba',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//162
			//Panevezys, Schaulen, Redau
            DB::table('duchies')->insert([
				'duchy_name' => 'Samogitia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '24',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Log_Izba',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//163
			//Alytus, Kauen, Tracken 
            DB::table('duchies')->insert([
				'duchy_name' => 'Tracken',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '24',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Log_Izba',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//164
			//Vilnius, Kernave
            DB::table('duchies')->insert([
				'duchy_name' => 'Vilnius',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '24',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Log_Izba',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Hungary
			//Balaton
			//165
			//Gyor, Moson, Sopron, Somogy, Vas, Vezprem, Zala
            DB::table('duchies')->insert([
				'duchy_name' => 'Balaton',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '25',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Khata',
				'law_court' => 'Itinerant',
				'vegetation' => 'Steppe',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Hungarian_Grey',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//166
			//Baranya, Esztergom, Fejer, Heves, Pest, Szolnok
            DB::table('duchies')->insert([
				'duchy_name' => 'Buda',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '25',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Khata',
				'law_court' => 'Itinerant',
				'vegetation' => 'Steppe',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Hungarian_Grey',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//167
			//Nitra, Arva, Bars, Hont, Komarom, Lipto, Orava, Pozsony, Trencsen, Zolyom
            DB::table('duchies')->insert([
				'duchy_name' => 'Nitra',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '25',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Khata',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Hungarian_Grey',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//168
			//Temesvar, Arad, Bihar, Caransebes
            DB::table('duchies')->insert([
				'duchy_name' => 'Temesvar',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '25',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Khata',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Hungarian_Grey',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//169
			//Ungvar, Bereg, Borsod, Hajdu, Szabolcs, Szatmar, Szepes, Zemplen
            DB::table('duchies')->insert([
				'duchy_name' => 'Ungvar',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '25',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Khata',
				'law_court' => 'Itinerant',
				'vegetation' => 'Steppe',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Hungarian_Grey',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//170
			//Aranyosszek, Csikszek, Haromzsek, Koloszvar, Marosszek, Udvarhelyszek
            DB::table('duchies')->insert([
				'duchy_name' => 'Transylvania',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '25',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Log_Chalet',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Hungarian_Grey',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Croatia
			//171
			//Bribir, Knin, Krbava, Lika, Modrus
            DB::table('duchies')->insert([
				'duchy_name' => 'Dalmatia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '26',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//172
			//Ragusa, Cetina, Kotor
            DB::table('duchies')->insert([
				'duchy_name' => 'Ragusa',
				'duchy_category' => 'Burgher_Estate',
				'de_jure_kingdom' => '26',
				'law_succession' => 'Elective_Monarchy',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//173
			//Zagreb, Bjelovar, Pozega, Syrmia, Varazdin, Veroce
            DB::table('duchies')->insert([
				'duchy_name' => 'Slavonia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '26',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Log_Chalet',
				'law_court' => 'Itinerant',
				'vegetation' => 'Steppe',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//174
			//Split, Trogir
            DB::table('duchies')->insert([
				'duchy_name' => 'Split',
				'duchy_category' => 'Burgher_Estate',
				'de_jure_kingdom' => '26',
				'law_succession' => 'Elective_Monarchy',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//175
			//Zadar, Cres, Veglia
            DB::table('duchies')->insert([
				'duchy_name' => 'Zadar',
				'duchy_category' => 'Burgher_Estate',
				'de_jure_kingdom' => '26',
				'law_succession' => 'Elective_Monarchy',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Trinacria
			//Sicily
			//176
			//Palermo
            DB::table('duchies')->insert([
				'duchy_name' => 'Palermo',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '27',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Marshland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//177
			//Trapani
            DB::table('duchies')->insert([
				'duchy_name' => 'Trapani',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '27',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Marshland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//178
			//Messina
            DB::table('duchies')->insert([
				'duchy_name' => 'Messina',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '27',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//179
			//Agrigento
            DB::table('duchies')->insert([
				'duchy_name' => 'Agrigento',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '27',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//180
			//Catania
            DB::table('duchies')->insert([
				'duchy_name' => 'Catania',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '27',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Marshland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//181
			//Siracusa
            DB::table('duchies')->insert([
				'duchy_name' => 'Siracusa',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '27',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Naples
			//182
			//Naples, Aversa, Nola
            DB::table('duchies')->insert([
				'duchy_name' => 'Naples',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '28',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//183
			//Volturno, Capua, Caserta
            DB::table('duchies')->insert([
				'duchy_name' => 'Capua',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '28',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//184
			//Amalfi, Sorrento
            DB::table('duchies')->insert([
				'duchy_name' => 'Amalfi',
				'duchy_category' => 'Burgher_Estate',
				'de_jure_kingdom' => '28',
				'law_succession' => 'Elective_Monarchy',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//185
			//Catanzaro, Cosenza, Crotone, Reggio
            DB::table('duchies')->insert([
				'duchy_name' => 'Calabria',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '28',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//186
			//Matera, Potenza
            DB::table('duchies')->insert([
				'duchy_name' => 'Basilicata',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '28',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//187
			//Taranto, Bari, Brindisi, Lecce
            DB::table('duchies')->insert([
				'duchy_name' => 'Taranto',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '28',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//188
			//Foggia, Sangro, Lesina, Termoli
            DB::table('duchies')->insert([
				'duchy_name' => 'Foggia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '28',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//189
			//Benevento, Bojano, Isernia, Molise, Alife, Celano, Mignano
            DB::table('duchies')->insert([
				'duchy_name' => 'Benevento',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '28',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//190
			//Salerno, Castiglione, Cilento
            DB::table('duchies')->insert([
				'duchy_name' => 'Salerno',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '28',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Sardinia
			//191
			//Olbia, Montacuto
            DB::table('duchies')->insert([
				'duchy_name' => 'Gallura',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '29',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Sarda',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//192
			//Torres, Sassari
            DB::table('duchies')->insert([
				'duchy_name' => 'Logudoro',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '29',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//193
			//Oristano, Campadino
            DB::table('duchies')->insert([
				'duchy_name' => 'Arborea',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '29',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//194
			//Cagliari, Oglistria, Sarrabus
            DB::table('duchies')->insert([
				'duchy_name' => 'Cagliari',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '29',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Byzantine
			//Thrace
			//195
			//Constantinople, Pera, Ergisce
            DB::table('duchies')->insert([
				'duchy_name' => 'Thrace',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '30',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Konak',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//196
			//Adrianople, Bergule, Traianopolis
            DB::table('duchies')->insert([
				'duchy_name' => 'Macedonia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '30',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Konak',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Thessalonica
			//197
			//Attica, Boeotia, Euboea, Thessaly
            DB::table('duchies')->insert([
				'duchy_name' => 'Hellas',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '31',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Serrai',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//198
			//Corinthia, Argos, Patras, Laconia
            DB::table('duchies')->insert([
				'duchy_name' => 'Peloponessos',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '31',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Serrai',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//199
			//Heraklion, Chania
            DB::table('duchies')->insert([
				'duchy_name' => 'Candia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '31',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Serrai',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//200
			//Chios, Naxos
            DB::table('duchies')->insert([
				'duchy_name' => 'Archipelago',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '31',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Serrai',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//201
			//Naupaktos, Nicopolis, Arta, Hadrianopolis
            DB::table('duchies')->insert([
				'duchy_name' => 'Epirus',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '31',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Serrai',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//202
			//Cephalonia, Korkyra, Zakynthos, Leucadia
            DB::table('duchies')->insert([
				'duchy_name' => 'Cephalonia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '31',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Serrai',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//203
			//Thessalonica, Athos
            DB::table('duchies')->insert([
				'duchy_name' => 'Thessalonica',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '31',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Serrai',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//204
			//Serres, Christoupolis
            DB::table('duchies')->insert([
				'duchy_name' => 'Strymon',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '31',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Serrai',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Trebizond
			//205
			//Germanicopolis, Kastamone, Amastris, Hadrianopolis
            DB::table('duchies')->insert([
				'duchy_name' => 'Paphlagonia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '32',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Konak',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Anatolian',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//206
			//Amasia, Amisos, Sinope
            DB::table('duchies')->insert([
				'duchy_name' => 'Armeniac',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '32',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Konak',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Anatolian',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//207
			//Trapezus, Polemonion
            DB::table('duchies')->insert([
				'duchy_name' => 'Chaldia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '32',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Konak',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Anatolian',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//208
			//Chersonesus, Theodosia, Theodoro
            DB::table('duchies')->insert([
				'duchy_name' => 'Crimea',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '32',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Konak',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Anatolian',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Anatolia
			//209
			//Samos, Ephesos, Smyrna
            DB::table('duchies')->insert([
				'duchy_name' => 'Samos',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '33',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Anatolian',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//210
			//Sardes, Chonae
            DB::table('duchies')->insert([
				'duchy_name' => 'Thracesia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '33',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Anatolian',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//211
			//Ancyra, Sarmalius
            DB::table('duchies')->insert([
				'duchy_name' => 'Bucellaria',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '33',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Anatolian',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//212
			//Iconium, Laranda
            DB::table('duchies')->insert([
				'duchy_name' => 'Anatolia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '33',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Anatolian',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//213
			//Caesarea, Neapolis, Garsaura
            DB::table('duchies')->insert([
				'duchy_name' => 'Cappadocia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '33',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Steppe',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Anatolian',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//214
			//Seleucea, Adana, Tarsos
            DB::table('duchies')->insert([
				'duchy_name' => 'Seleucia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '33',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Anatolian',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//215
			//Cyzicus, Prousa, Abydos, Kotyaion
            DB::table('duchies')->insert([
				'duchy_name' => 'Opsicia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '33',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Anatolian',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//216
			//Nicaea, Nicomedia, Malagina
            DB::table('duchies')->insert([
				'duchy_name' => 'Nicaea',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '33',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Anatolian',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//217
			//Rhodes, Xanthos
            DB::table('duchies')->insert([
				'duchy_name' => 'Lycia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '33',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Anatolian',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//218
			//Attaleia, Saporda
            DB::table('duchies')->insert([
				'duchy_name' => 'Pamphylia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '33',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Anatolian',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Georgia
			//219
			//Phasis, Guria, Abkhazia, Imereti, Adjar
            DB::table('duchies')->insert([
				'duchy_name' => 'Colchis',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '34',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Konak',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//220
			//Akhalkalaki, Akhaltsikhe, Tori
            DB::table('duchies')->insert([
				'duchy_name' => 'Javakheti',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '34',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Adjar',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//221
			//Bolnisi, Tiblisi, Rustavi, Gori
            DB::table('duchies')->insert([
				'duchy_name' => 'Kartli',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '34',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Adjar',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//222
			//Telavi, Gurjaani
            DB::table('duchies')->insert([
				'duchy_name' => 'Kakheti',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '34',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Adjar',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Armenia
			//223
			//Van, Artamet, Hadamakert, Berkri
            DB::table('duchies')->insert([
				'duchy_name' => 'Vaspurakan',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '35',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Adjar',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//224
			//Acilisene, Karapet
            DB::table('duchies')->insert([
				'duchy_name' => 'Taron',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '35',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Adjar',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//225
			//Kars, Ani, Sardarabad, Yerevan
            DB::table('duchies')->insert([
				'duchy_name' => 'Kars',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '35',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Adjar',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//226
			//Baku, Rasht
            DB::table('duchies')->insert([
				'duchy_name' => 'Azerbaijan',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '35',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Adjar',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Kievan Rus
			//Kyiv
			//227
			//Kyiv, Bratslav, Cherkasy, Korosten
            DB::table('duchies')->insert([
				'duchy_name' => 'Kyiv',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '36',
				'law_succession' => 'Agnatic_Seniority',
				'vernacular_architecture' => 'Half_Timbered_Khata',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//228
			//Pereyaslavl
            DB::table('duchies')->insert([
				'duchy_name' => 'Pereyaslavl',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '36',
				'law_succession' => 'Agnatic_Seniority',
				'vernacular_architecture' => 'Half_Timbered_Khata',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Chernigov
			//229
			//Chernigov, Bryansk, Lyubech, Mozhaysk, Novosil
            DB::table('duchies')->insert([
				'duchy_name' => 'Chernigov',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '37',
				'law_succession' => 'Agnatic_Seniority',
				'vernacular_architecture' => 'Half_Timbered_Khata',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//230
			//Ryazan, Murom, Tula, Kaluga, Vorotynsk
            DB::table('duchies')->insert([
				'duchy_name' => 'Ryazan',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '37',
				'law_succession' => 'Agnatic_Seniority',
				'vernacular_architecture' => 'Half_Timbered_Khata',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Ruthenia
			//231
			//Halych, Peremyshl, Lviv, Belz
            DB::table('duchies')->insert([
				'duchy_name' => 'Halych',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '38',
				'law_succession' => 'Agnatic_Seniority',
				'vernacular_architecture' => 'Half_Timbered_Khata',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//232
			//Podolia, Terebovlia
            DB::table('duchies')->insert([
				'duchy_name' => 'Podolia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '38',
				'law_succession' => 'Agnatic_Seniority',
				'vernacular_architecture' => 'Half_Timbered_Khata',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//233
			//Volhynia, Brest, Kremenets, Lutsk
            DB::table('duchies')->insert([
				'duchy_name' => 'Volhynia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '38',
				'law_succession' => 'Agnatic_Seniority',
				'vernacular_architecture' => 'Half_Timbered_Khata',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//234
			//Turov, Slutsk
            DB::table('duchies')->insert([
				'duchy_name' => 'Turov',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '38',
				'law_succession' => 'Agnatic_Seniority',
				'vernacular_architecture' => 'Half_Timbered_Khata',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Vladimir
			//235
			//Vladimir, Vyazniki, Nizhny Novgorod
            DB::table('duchies')->insert([
				'duchy_name' => 'Vladimir',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '39',
				'law_succession' => 'Agnatic_Seniority',
				'vernacular_architecture' => 'Log_Izba',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//236
			//Moscow, Dmitrov, Volokolamsk, Zvenigorod
            DB::table('duchies')->insert([
				'duchy_name' => 'Moscow',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '39',
				'law_succession' => 'Agnatic_Seniority',
				'vernacular_architecture' => 'Log_Izba',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//237
			//Suzdal, Yuryev
            DB::table('duchies')->insert([
				'duchy_name' => 'Suzdal',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '39',
				'law_succession' => 'Agnatic_Seniority',
				'vernacular_architecture' => 'Log_Izba',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Smolensk
			//238
			//Smolensk, Roslavl, Toropets, Mstislavl
            DB::table('duchies')->insert([
				'duchy_name' => 'Smolensk',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '40',
				'law_succession' => 'Agnatic_Seniority',
				'vernacular_architecture' => 'Half_Timbered_Khata',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//239
			//Rzhev, Zubtsov
            DB::table('duchies')->insert([
				'duchy_name' => 'Rzhev',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '40',
				'law_succession' => 'Agnatic_Seniority',
				'vernacular_architecture' => 'Half_Timbered_Khata',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//240
			//Tver, Galich, Kostroma, Pereslavl, Rostov, Yaroslavl
            DB::table('duchies')->insert([
				'duchy_name' => 'Tver',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '40',
				'law_succession' => 'Agnatic_Seniority',
				'vernacular_architecture' => 'Half_Timbered_Khata',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Novgorod
			//241
			//Novgorod, Ladoga
            DB::table('duchies')->insert([
				'duchy_name' => 'Novgorod',
				'duchy_category' => 'Burgher_Estate',
				'de_jure_kingdom' => '41',
				'law_succession' => 'Agnatic_Seniority',
				'vernacular_architecture' => 'Log_Izba',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//242
			//Polotsk, Zaslawye, Vitebsk
            DB::table('duchies')->insert([
				'duchy_name' => 'Polotsk',
				'duchy_category' => 'Burgher_Estate',
				'de_jure_kingdom' => '41',
				'law_succession' => 'Agnatic_Seniority',
				'vernacular_architecture' => 'Log_Izba',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//243
			//Pleskov, Kholm
            DB::table('duchies')->insert([
				'duchy_name' => 'Pleskov',
				'duchy_category' => 'Burgher_Estate',
				'de_jure_kingdom' => '41',
				'law_succession' => 'Agnatic_Seniority',
				'vernacular_architecture' => 'Log_Izba',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Bulgaria
			//Bulgaria
			//244
			//Preslav, Simeonis, Provat, Karvuna
            DB::table('duchies')->insert([
				'duchy_name' => 'Preslav',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '42',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Konak',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//245
			//Tarnovo, Kopsis, Seuthopolis
            DB::table('duchies')->insert([
				'duchy_name' => 'Tarnovo',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '42',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Konak',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//246
			//Philippopolis, Stanimaka
            DB::table('duchies')->insert([
				'duchy_name' => 'Philippopolis',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '42',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Konak',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//247
			//Ohrid, Bitola, Kastoria
            DB::table('duchies')->insert([
				'duchy_name' => 'Ohrid',
				'duchy_category' => 'Ecclesiastical_Estate',
				'de_jure_kingdom' => '42',
				'law_succession' => 'Elective_Monarchy',
				'vernacular_architecture' => 'Half_Timbered_Konak',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Wallachia
			//248
			//Targoviste, Omurtag, Arges
            DB::table('duchies')->insert([
				'duchy_name' => 'Wallachia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '43',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Konak',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//249
			//Suceava, Neamt, Akkerman, Soroca, Vaslui, Lapusna, Iasi, Orhei
            DB::table('duchies')->insert([
				'duchy_name' => 'Moldavia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '43',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Konak',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Serbia
			//Serbia
			//250
			//Rashka, Kraljevo
            DB::table('duchies')->insert([
				'duchy_name' => 'Rashka',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '44',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Log_Chalet',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Bardoka',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//251
			//Bar, Scodra, Lezhe, Sape
            DB::table('duchies')->insert([
				'duchy_name' => 'Dioclea',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '44',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Log_Chalet',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Bardoka',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//252
			//Borac, Pavlovac
            DB::table('duchies')->insert([
				'duchy_name' => 'Podrinje',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '44',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Log_Chalet',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Bardoka',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Bosnia
			//253
			//Srebrenik, Tesanj
            DB::table('duchies')->insert([
				'duchy_name' => 'Usora',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '45',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Log_Chalet',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Bardoka',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//254
			//Tuzla, Zvornik
            DB::table('duchies')->insert([
				'duchy_name' => 'Soli',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '45',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Log_Chalet',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Bardoka',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//255
			//Blagaj, Ston, Dabar, Popovo
            DB::table('duchies')->insert([
				'duchy_name' => 'Zachumlia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '45',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Log_Chalet',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Bardoka',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Cordoba
			//Andalucia
			//256
			//Algeciras, Gibraltar
            DB::table('duchies')->insert([
				'duchy_name' => 'Algeciras',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '46',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Andalusian',
				'sheep_breed' => 'Churra',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//257
			//Almeria, Baza, Alpujarra, Dalias
            DB::table('duchies')->insert([
				'duchy_name' => 'Almeria',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '46',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Marshland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Andalusian',
				'sheep_breed' => 'Churra',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//258
			//Cadiz, Jerez, Sanlucar
            DB::table('duchies')->insert([
				'duchy_name' => 'Arcos',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '46',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Marshland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Lowland',
				'horse_breed' => '',
				'cattle_breed' => 'Andalusian',
				'sheep_breed' => 'Churra',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//259
			//Carmona, Ecija
            DB::table('duchies')->insert([
				'duchy_name' => 'Carmona',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '46',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Marshland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Andalusian',
				'sheep_breed' => 'Churra',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//260
			//Andujar, Carpio, Cordoba, Martos, Pedroche
            DB::table('duchies')->insert([
				'duchy_name' => 'Cordoba',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '46',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Marshland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Andalusian',
				'sheep_breed' => 'Churra',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//261
			//Alpujarra, Baeza, Morena, Granada, Guadix, Jaen, Lecrin, Motril, Torvizcon, Ubeda
            DB::table('duchies')->insert([
				'duchy_name' => 'Granada',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '46',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Andalusian',
				'sheep_breed' => 'Churra',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//262
			//Alhama, Antequera, Loja, Malaga
            DB::table('duchies')->insert([
				'duchy_name' => 'Malaga',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '46',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Andalusian',
				'sheep_breed' => 'Churra',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//263
			//Marbella, Ronda
            DB::table('duchies')->insert([
				'duchy_name' => 'Ronda',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '46',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Andalusian',
				'sheep_breed' => 'Churra',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//264
			//Aljarafe, Estepa, Sevilla
            DB::table('duchies')->insert([
				'duchy_name' => 'Sevilla',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '46',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Andalusian',
				'sheep_breed' => 'Churra',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Algarves
			//265
			//Faro, Mertola, Silves
            DB::table('duchies')->insert([
				'duchy_name' => 'Algarves',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '47',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Andalusian',
				'sheep_breed' => 'Churra',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//266
			//Badajoz, Beja, Evora, Guadiana, Llerena, Merida, Olivenza, Portalegre, Serena
            DB::table('duchies')->insert([
				'duchy_name' => 'Badajoz',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '47',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Andalusian',
				'sheep_breed' => 'Churra',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//267
			//Aracena, Huelva, Niebla
            DB::table('duchies')->insert([
				'duchy_name' => 'Huelva',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '47',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Andalusian',
				'sheep_breed' => 'Churra',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Levante
			//268
			//Alcarria, Almarza, Henares, Medinaceli, Molina, Serrania
            DB::table('duchies')->insert([
				'duchy_name' => 'Alpuente',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '48',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Andalusian',
				'sheep_breed' => 'Churra',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//269
			//Ibiza, Mallorca, Menorca
            DB::table('duchies')->insert([
				'duchy_name' => 'Baleares',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '48',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Andalusian',
				'sheep_breed' => 'Churra',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//270
			//Albacete, Alcaraz, Alcira, Alcoy, Alicante, Almagro, Chinchilla, Cofrentes, Denia, Jativa, Montesa
            DB::table('duchies')->insert([
				'duchy_name' => 'Denia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '48',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Andalusian',
				'sheep_breed' => 'Churra',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//271
			//Cartagena, Cieza, Hellin, Lorca, Murcia, Orihuela, Segura
            DB::table('duchies')->insert([
				'duchy_name' => 'Murcia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '48',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Marshland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Andalusian',
				'sheep_breed' => 'Churra',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//272
			//Castellon, Morella, Peniscola, San Clemente, Valencia
            DB::table('duchies')->insert([
				'duchy_name' => 'Valencia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '48',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Marshland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => 'Andalusian',
				'sheep_breed' => 'Churra',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Almohad
			//Marrakesh
			//273
			//Marrakesh, Safi, Mogador
            DB::table('duchies')->insert([
				'duchy_name' => 'Marrakesh',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '49',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Maghreb',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//274
			//Khenifra, Mellal
            DB::table('duchies')->insert([
				'duchy_name' => 'Tadla',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '49',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Maghreb',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//275
			//Tafilalt, Merzouga, Erfoud
            DB::table('duchies')->insert([
				'duchy_name' => 'Sijilmassa',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '49',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Maghreb',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Oasis',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//276
			//Ouarzazate, Zagora, Tinghir
            DB::table('duchies')->insert([
				'duchy_name' => 'Ouarzazate',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '49',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Maghreb',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Oasis',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Fez
			//277
			//Fez, Meknes
            DB::table('duchies')->insert([
				'duchy_name' => 'Fez',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '50',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Maghreb',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//278
			//Rabat, Mehdya
            DB::table('duchies')->insert([
				'duchy_name' => 'Rabat',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '50',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Maghreb',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Marshland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//279
			//Tangier, Tetouan, Kebir, Ouazzane
            DB::table('duchies')->insert([
				'duchy_name' => 'Tangier',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '50',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Maghreb',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Marshland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Kairouan
			//280
			//Kairouan, Mahdia, Susa, Taparura
            DB::table('duchies')->insert([
				'duchy_name' => 'Kairouan',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '51',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Maghreb',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//281
			//Tunis, Bizerte
            DB::table('duchies')->insert([
				'duchy_name' => 'Tunis',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '51',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Maghreb',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Marshland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//282
			//Djerid, Tozeur
            DB::table('duchies')->insert([
				'duchy_name' => 'Djerid',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '51',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Maghreb',
				'law_court' => 'Palatial',
				'vegetation' => 'Steppe',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//283
			//Tripoli, Misrata
            DB::table('duchies')->insert([
				'duchy_name' => 'Tripoli',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '51',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Maghreb',
				'law_court' => 'Palatial',
				'vegetation' => 'Steppe',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//284
			//Sirte, Cyrene
            DB::table('duchies')->insert([
				'duchy_name' => 'Sirte',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '51',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Maghreb',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Oasis',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Tlemcen
			//285
			//Tlemcen, Rachgoun
            DB::table('duchies')->insert([
				'duchy_name' => 'Tlemcen',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '52',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Maghreb',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//286
			//Oujda, Nador
            DB::table('duchies')->insert([
				'duchy_name' => 'Oujda',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '52',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Maghreb',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Marshland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//287
			//Oran, Mostaganem, Mascara
            DB::table('duchies')->insert([
				'duchy_name' => 'Oran',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '52',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Maghreb',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//288
			//Algiers, Hadjar, Lamdia, Titteri
            DB::table('duchies')->insert([
				'duchy_name' => 'Algiers',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '52',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Maghreb',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Marshland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//289
			//Tiaret, Saida
            DB::table('duchies')->insert([
				'duchy_name' => 'Tiaret',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '52',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Maghreb',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//290
			//Mzab, Bounoura
            DB::table('duchies')->insert([
				'duchy_name' => 'Mzab',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '52',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Maghreb',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Oasis',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//291
			//Laghouat, Madhi
            DB::table('duchies')->insert([
				'duchy_name' => 'Laghouat',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '52',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Maghreb',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Oasis',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//292
			//Djelfa, Airene
            DB::table('duchies')->insert([
				'duchy_name' => 'Djelfa',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '52',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Maghreb',
				'law_court' => 'Palatial',
				'vegetation' => 'Steppe',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//293
			//Tuggert, Ouargla
            DB::table('duchies')->insert([
				'duchy_name' => 'Tuggert',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '52',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Maghreb',
				'law_court' => 'Palatial',
				'vegetation' => 'Steppe',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Ifni
			//294
			//Ifni, Tiznit
            DB::table('duchies')->insert([
				'duchy_name' => 'Ifni',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '53',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Maghreb',
				'law_court' => 'Palatial',
				'vegetation' => 'Steppe',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//295
			//Taroudant, Agadir, Tinmel
            DB::table('duchies')->insert([
				'duchy_name' => 'Taroudant',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '53',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Maghreb',
				'law_court' => 'Palatial',
				'vegetation' => 'Steppe',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Figuig
			//296
			//Figuig, Bechar, Moghrar
            DB::table('duchies')->insert([
				'duchy_name' => 'Figuig',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '54',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Maghreb',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Oasis',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//297
			//Tuat, Tademait
            DB::table('duchies')->insert([
				'duchy_name' => 'Adrar',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '54',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Maghreb',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Oasis',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Abbasid
			//Baghdad
			//298
			//Baghdad, Shareban, Anbar, Basra, Karbala, Najaf
            DB::table('duchies')->insert([
				'duchy_name' => 'Baghdad',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '55',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Mashriq',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Marshland',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Arabi',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//299
			//Erbil, Kirkuk
            DB::table('duchies')->insert([
				'duchy_name' => 'Erbil',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '53',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Mashriq',
				'law_court' => 'Palatial',
				'vegetation' => 'Steppe',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Arabi',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Syria
			//Damascus
			//300
			//Damascus, Qalamoun, Jayrud, Dumayr, Suada
            DB::table('duchies')->insert([
				'duchy_name' => 'Damascus',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '56',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Mashriq',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Oasis',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Awassi',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);	
			//301
			//Aleppo, Idlib
            DB::table('duchies')->insert([
				'duchy_name' => 'Jabal',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '56',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Mashriq',
				'law_court' => 'Palatial',
				'vegetation' => 'Steppe',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Awassi',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//302
			//Homs, Tripoli, Beirut, Sidon, Tyre
            DB::table('duchies')->insert([
				'duchy_name' => 'Homs',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '56',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Mashriq',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Awassi',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//303
			//Mosul, Tikrit, Hatra, Mardin
            DB::table('duchies')->insert([
				'duchy_name' => 'Rabia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '53',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Mashriq',
				'law_court' => 'Palatial',
				'vegetation' => 'Steppe',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Awassi',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//304
			//Amida, Siirt
            DB::table('duchies')->insert([
				'duchy_name' => 'Bakr',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '56',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Mashriq',
				'law_court' => 'Palatial',
				'vegetation' => 'Steppe',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Awassi',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Najd
			//305
			//Kharj, Turaif
            DB::table('duchies')->insert([
				'duchy_name' => 'Najd',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '57',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Mashriq',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Oasis',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Awassi',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//306
			//Tawam, Uqair
            DB::table('duchies')->insert([
				'duchy_name' => 'Khatt',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '57',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Mashriq',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Oasis',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Awassi',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Antioch
			//307
			//Antioch, Alexandretta, Laodicea, Zardana, Apamea
            DB::table('duchies')->insert([
				'duchy_name' => 'Antioch',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '58',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Mashriq',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Awassi',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
			]);
			//308
			//Edessa, Harran
            DB::table('duchies')->insert([
				'duchy_name' => 'Mudar',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '56',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Mashriq',
				'law_court' => 'Palatial',
				'vegetation' => 'Steppe',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Awassi',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Fatimid
			//Cairo
			//309
			//Cairo, Helwan
            DB::table('duchies')->insert([
				'duchy_name' => 'Cairo',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '59',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Mashriq',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Marshland',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);	
			//310
			//Alexandria, Damanhur, Rosetta
            DB::table('duchies')->insert([
				'duchy_name' => 'Alexandria',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '59',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Mashriq',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Marshland',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//311
			//Mansoura, Dekernes
            DB::table('duchies')->insert([
				'duchy_name' => 'Mansoura',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '59',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Mashriq',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Marshland',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//312
			//Damietta, Tinnis
            DB::table('duchies')->insert([
				'duchy_name' => 'Damietta',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '59',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Mashriq',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Marshland',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//313
			//Minya, Mallawi
            DB::table('duchies')->insert([
				'duchy_name' => 'Minya',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '59',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Mashriq',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Marshland',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//314
			//Asyut, Abnub, Abu
            DB::table('duchies')->insert([
				'duchy_name' => 'Asyut',
				'duchy_category' => 'Ecclesiastical_Estate',
				'de_jure_kingdom' => '59',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Mashriq',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Marshland',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//315
			//Kharga, Dakhla
            DB::table('duchies')->insert([
				'duchy_name' => 'Kharga',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '59',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Mashriq',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Oasis',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//316
			//Baritun, Siwa, Natrun
            DB::table('duchies')->insert([
				'duchy_name' => 'Baritun',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '59',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Mashriq',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Oasis',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//317
			//Boula, Hammamat
            DB::table('duchies')->insert([
				'duchy_name' => 'Boula',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '59',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Mashriq',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Oasis',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Jerusalem
			//318
			//Jerusalem, Ascolon, Jericho
            DB::table('duchies')->insert([
				'duchy_name' => 'Jerusalem',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '60',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Mashriq',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//319
			//Tiberias, Banias, Haifa 
            DB::table('duchies')->insert([
				'duchy_name' => 'Galilee',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '60',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Mashriq',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Hejaz
			//320
			//Mecca, Jeddah, Taif
            DB::table('duchies')->insert([
				'duchy_name' => 'Mecca',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '61',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Mashriq',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Oasis',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Hajaz',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//321
			//Medina, Yanbu, Khaybar
            DB::table('duchies')->insert([
				'duchy_name' => 'Medina',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '61',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Mashriq',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Oasis',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Hajaz',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//322
			//Tabuk, Sharat, Hegra
            DB::table('duchies')->insert([
				'duchy_name' => 'Tabuk',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '61',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Mashriq',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Oasis',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Hajaz',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Khazar
			//Khazaria
			//323
			//Aqtobe, Araltobe
            DB::table('duchies')->insert([
				'duchy_name' => 'Aqtobe',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '62',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Persian',
				'law_court' => 'Palatial',
				'vegetation' => 'Steppe',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//324
			//Sarkel, Mayaki
            DB::table('duchies')->insert([
				'duchy_name' => 'Sarkel',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '62',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Persian',
				'law_court' => 'Palatial',
				'vegetation' => 'Steppe',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//325
			//Sarayberke, Sarayjuk
            DB::table('duchies')->insert([
				'duchy_name' => 'Khazaran',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '62',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Persian',
				'law_court' => 'Palatial',
				'vegetation' => 'Steppe',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//326
			//Bolghar, Suar, Bilar
            DB::table('duchies')->insert([
				'duchy_name' => 'Tatar',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '62',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Persian',
				'law_court' => 'Palatial',
				'vegetation' => 'Steppe',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Alania
			//327
			//Derbent, Tarki
            DB::table('duchies')->insert([
				'duchy_name' => 'Derbent',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '63',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Persian',
				'law_court' => 'Palatial',
				'vegetation' => 'Steppe',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//328
			//Azov, Karcha, Maghas
            DB::table('duchies')->insert([
				'duchy_name' => 'Alania',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '63',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Persian',
				'law_court' => 'Palatial',
				'vegetation' => 'Steppe',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Cumania
			//329
			//Sighnaq, Sozak
            DB::table('duchies')->insert([
				'duchy_name' => 'Kazakh',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '64',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Persian',
				'law_court' => 'Palatial',
				'vegetation' => 'Steppe',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//330
			//Sibir, Bashkor
            DB::table('duchies')->insert([
				'duchy_name' => 'Sibir',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '64',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Persian',
				'law_court' => 'Palatial',
				'vegetation' => 'Steppe',
				'transport' => 'Dog_Cart',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => '',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Seljuk
			//Kwarezm
			//331
			//Gurganj, Khorezm
            DB::table('duchies')->insert([
				'duchy_name' => 'Gurganj',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '65',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Persian',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Oasis',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Arabi',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//332
			//Khiva, Durghan
            DB::table('duchies')->insert([
				'duchy_name' => 'Khiva',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '65',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Persian',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Oasis',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Arabi',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//333
			//Merv, Sarakhs, Bereket
            DB::table('duchies')->insert([
				'duchy_name' => 'Merv',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '65',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Persian',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Oasis',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Arabi',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Isfahan
			//334
			//Isfahan, Kashan, Qom, Yazd, Karaj, Qazvin
            DB::table('duchies')->insert([
				'duchy_name' => 'Jibal',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Persian',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Oasis',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Arabi',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//335
			//Shiraz, Fasa, Darab
            DB::table('duchies')->insert([
				'duchy_name' => 'Fars',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Persian',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Oasis',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Arabi',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//336
			//Gorgan, Amol
            DB::table('duchies')->insert([
				'duchy_name' => 'Daylam',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Persian',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Arabi',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//Hormuz
			//337
			//Hormuz, Minab, Bandar, Lengeh
            DB::table('duchies')->insert([
				'duchy_name' => 'Hormuz',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Persian',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Marshland',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Arabi',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
			//338
			//Kerman, Bam, Rafsinjan
            DB::table('duchies')->insert([
				'duchy_name' => 'Kerman',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Persian',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Oasis',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane',
				'horse_breed' => '',
				'cattle_breed' => '',
				'sheep_breed' => 'Arabi',
				'goat_breed' => '',
				'pig_breed' => '',
				'chicken_breed' => '',
				'duck_breed' => ''
            ]);
    }
}