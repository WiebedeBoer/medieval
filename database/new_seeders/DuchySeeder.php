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
				'levy_feudal' => '',				//minimal, normal, large, maximal; default=large
				'levy_ecclesiastical' => '',		//minimal, normal, large, maximal; default=normal
				'levy_burgher' => '',				//minimal, normal, large, maximal; default=normal
				'tax_feudal' => '',					//minimal, normal, large, maximal; default=minimal		
				'tax_ecclesiastical' => '',			//minimal, normal, large, maximal; default=normal				
				'tax_burgher' => ''					//minimal, normal, large, maximal; default=normal			
				'souvereign' => '1',				(empire); default=1
				'lord_paramount' => '1',			(kingdom); default=1
				'tenant_in_chief' => '1'			(duchy); default=1
            ]);			
			*/
			
			/*
			
			type					area							wall type			window type		facade type									roof type				roof color
			
			Half_Timbered_Fachwerk 	[Germany,Denmark]			=	wattle daub	wall	sash window		whitewashed, crossed timber beams			tiled sloped roof		grey tiles
			Half_Timbered_Studded 	[England,France]			=	wattle daub	wall	sash window		whitewashed, studded timber beams			tiled sloped roof		orange tiles
			Half_Timbered_Khata 	[Kyiv,Poland,Hungary]		=	wattle daub	wall	sash window		whitewashed									tatched sloped roof		tatch
			Half_Timbered_Konak		[Bulgaria,Trebizond]		=	wattle daub	wall	mashrabiya 		whitewashed	 								tiled sloped roof		orange tiles
			Log_Chalet	 			[Burgundy,Austria,Croatia]	=	timber logs wall	sash window		timber, loggia								tiled sloped roof		grey tiles
			Log_Stave				[Norway,Sweden]				=  	timber logs wall	sash window		timber, loggia								tatched sloped roof		tatch
			Log_Izba				[Novgorod]					= 	timber logs wall	sash window		timber, loggia								wooden sloped roof		brown wood
			Stone_Croft				[Connacht,Ulster,Scotland]	= 	stone wall			sash window		ashlar										tatched sloped roof		tatch
			Stone_Mudejar			[Andalucia,Portugal]		=  	stone wall			lancet window	ashlar, loggia, merlons, turquoise tiled	tiled sloped roof		orange tiles
			Stone_Romanesque 		[Europe Mediterranean]		= 	stone wall			lancet window	ashlar, loggia								tiled sloped roof		orange tiles
			Stone_Adjar 			[Georgia,Armenia]			= 	stone wall			sash window		ashlar, loggia								wooden sloped roof		brown wood
			Adobe_Mashriq 			[Arabia,Syria]				= 	adobe wall			mashrabiya 		adobe, balustrade							adobe flat roof			adobe
			Adobe_Maghreb 			[Maghreb]					=	adobe wall			mashrabiya		adobe, merlons				 				adobe flat roof			adobe
			Adobe_Persian 			[Persia,Steppes]			=	adobe wall			lancet window	adobe, merlons, turquoise iwan				adobe flat roof			adobe
						
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
				'altitude' => 'Highland'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Lowland'	
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Lowland'	
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
				'altitude' => 'Lowland'	
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Highland'	
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Lowland'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Highland'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'	
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Lowland'	
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Highland'	
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Highland'	
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Lowland'	
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Highland'	
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Lowland'	
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Lowland'	
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Highland'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Highland'	
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Highland'	
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Highland'	
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
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
				'altitude' => 'Montane'
            ]);
			//201
			//Naupaktos, Arta
            DB::table('duchies')->insert([
				'duchy_name' => 'Epirus',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '31',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane'
            ]);
			//202
			//Thessalonica
            DB::table('duchies')->insert([
				'duchy_name' => 'Thessalonica',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '31',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane'
            ]);
			//203
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
				'altitude' => 'Montane'
            ]);
			//Trebizond
			//204
			//Germanicopolis
            DB::table('duchies')->insert([
				'duchy_name' => 'Paphlagonia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '32',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Konak',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane'
            ]);
			//205
			//Amasia
            DB::table('duchies')->insert([
				'duchy_name' => 'Armeniac',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '32',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Konak',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane'
            ]);
			//206
			//Trapezus
            DB::table('duchies')->insert([
				'duchy_name' => 'Chaldia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '32',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Konak',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane'
            ]);
			//207
			//Chersonesus
            DB::table('duchies')->insert([
				'duchy_name' => 'Crimea',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '32',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Konak',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane'
            ]);
			//Anatolia
			//208
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
				'altitude' => 'Montane'
            ]);
			//209
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
				'altitude' => 'Montane'
            ]);
			//210
			//Ancyra
            DB::table('duchies')->insert([
				'duchy_name' => 'Bucellaria',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '33',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane'
            ]);
			//211
			//Iconium
            DB::table('duchies')->insert([
				'duchy_name' => 'Anatolia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '33',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane'
            ]);
			//212
			//Caesarea
            DB::table('duchies')->insert([
				'duchy_name' => 'Cappadocia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '33',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Steppe',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane'
            ]);
			//213
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
				'altitude' => 'Montane'
            ]);
			//214
			//Cyzicus
            DB::table('duchies')->insert([
				'duchy_name' => 'Opsicia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '33',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane'
            ]);
			//215
			//Nicaea
            DB::table('duchies')->insert([
				'duchy_name' => 'Nicaea',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '33',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane'
            ]);
			//216
			//Rhodes
            DB::table('duchies')->insert([
				'duchy_name' => 'Lycia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '33',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane'
            ]);
			//217
			//Attaleia
            DB::table('duchies')->insert([
				'duchy_name' => 'Pamphylia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '33',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Romanesque',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane'
            ]);
			//Georgia
			//218
			//Phasis, Pityus, Imereti, Batumi
            DB::table('duchies')->insert([
				'duchy_name' => 'Colchis',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '34',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Konak',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane'
            ]);
			//219
			//Akhalkalaki
            DB::table('duchies')->insert([
				'duchy_name' => 'Javakheti',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '34',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Adjar',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane'
            ]);
			//220
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
				'altitude' => 'Montane'
            ]);
			//221
			//Telavi
            DB::table('duchies')->insert([
				'duchy_name' => 'Kakheti',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '34',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Adjar',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane'
            ]);
			//Armenia
			//222
			//Van
            DB::table('duchies')->insert([
				'duchy_name' => 'Vaspurakan',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '35',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Adjar',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane'
            ]);
			//223
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
				'altitude' => 'Montane'
            ]);
			//224
			//Kars, Ani
            DB::table('duchies')->insert([
				'duchy_name' => 'Kars',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '35',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Stone_Adjar',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane'
            ]);
			//225
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
				'altitude' => 'Montane'
            ]);	
			//Kievan Rus
			//Kyiv
			//226
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
				'altitude' => 'Montane'
            ]);
			//227
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
				'altitude' => 'Montane'
            ]);
			//Chernigov
			//228
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
				'altitude' => 'Montane'
            ]);
			//229
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
				'altitude' => 'Montane'
            ]);
			//Ruthenia
			//230
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
				'altitude' => 'Montane'
            ]);	
			//231
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
				'altitude' => 'Montane'
            ]);
			//232
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
				'altitude' => 'Montane'
            ]);
			//233
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
				'altitude' => 'Montane'
            ]);
			//Vladimir
			//234
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
				'altitude' => 'Montane'
            ]);
			//235
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
				'altitude' => 'Montane'
            ]);
			//236
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
				'altitude' => 'Montane'
            ]);
			//Smolensk
			//237
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
				'altitude' => 'Montane'
            ]);
			//238
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
				'altitude' => 'Montane'
            ]);
			//239
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
				'altitude' => 'Montane'
            ]);
			//Novgorod
			//240
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
				'altitude' => 'Montane'
            ]);
			//241
			//Polotsk
            DB::table('duchies')->insert([
				'duchy_name' => 'Polotsk',
				'duchy_category' => 'Burgher_Estate',
				'de_jure_kingdom' => '41',
				'law_succession' => 'Agnatic_Seniority',
				'vernacular_architecture' => 'Log_Izba',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane'
            ]);
			//242
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
				'altitude' => 'Montane'
            ]);
			//Bulgaria
			//Bulgaria
			//
			//Preslav
            DB::table('duchies')->insert([
				'duchy_name' => 'Preslav',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '42',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Konak',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane'
            ]);
			//
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
				'altitude' => 'Montane'
            ]);
			//
			//Philippopolis
            DB::table('duchies')->insert([
				'duchy_name' => 'Philippopolis',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '42',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Konak',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane'
            ]);
			//Wallachia
			//
			//Targoviste
            DB::table('duchies')->insert([
				'duchy_name' => 'Wallachia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '43',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Konak',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane'
            ]);
			//
			//Suceava
            DB::table('duchies')->insert([
				'duchy_name' => 'Moldavia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '43',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Half_Timbered_Konak',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane'
            ]);
			//Serbia
			//Serbia
			//
			//Rashka
            DB::table('duchies')->insert([
				'duchy_name' => 'Rashka',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '44',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Log_Chalet',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane'
            ]);	
			//
			//
            DB::table('duchies')->insert([
				'duchy_name' => '',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '44',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Log_Chalet',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane'
            ]);
			//Bosnia
			//
			//Srebrenik
            DB::table('duchies')->insert([
				'duchy_name' => 'Bosnia',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '45',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Log_Chalet',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane'
            ]);
			//
			//
            DB::table('duchies')->insert([
				'duchy_name' => '',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '45',
				'law_succession' => 'Salic_Primogeniture',
				'vernacular_architecture' => 'Log_Chalet',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane'
            ]);
			//Cordoba
			//Andalucia
			//
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
				'altitude' => 'Montane'
            ]);
			//
			//Almeria, Baza
            DB::table('duchies')->insert([
				'duchy_name' => 'Almeria',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '46',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Marshland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane'
            ]);
			//
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
				'altitude' => 'Lowland'
            ]);
			//
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
				'altitude' => 'Montane'
            ]);	
			//
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
				'altitude' => 'Montane'
            ]);	
			//
			//Alpujarra, Baeza, Carolina, Granada, Guadix, Jaen, Lecrin, Motril, Torvizcon, Ubeda
            DB::table('duchies')->insert([
				'duchy_name' => 'Granada',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '46',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane'
            ]);	
			//
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
				'altitude' => 'Montane'
            ]);	
			//
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
				'altitude' => 'Montane'
            ]);	
			//
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
				'altitude' => 'Montane'
            ]);
			//Algarves
			//
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
				'altitude' => 'Montane'
            ]);
			//
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
				'altitude' => 'Montane'
            ]);	
			//
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
				'altitude' => 'Montane'
            ]);
			//Levante
			//
			//Alcarria, Almarza, Henares, Medinaceli, Molina, Serranos
            DB::table('duchies')->insert([
				'duchy_name' => 'Alpuente',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '48',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Stone_Mudejar',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane'
            ]);	
			//
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
				'altitude' => 'Montane'
            ]);	
			//
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
				'altitude' => 'Montane'
            ]);	
			//
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
				'altitude' => 'Montane'
            ]);	
			//
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
				'altitude' => 'Montane'
            ]);	
			//Almohad
			//Marrakesh
			//
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
				'altitude' => 'Montane'
            ]);
			//
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
				'altitude' => 'Montane'
            ]);
			//
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
				'altitude' => 'Montane'
            ]);
			//
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
				'altitude' => 'Montane'
            ]);
			//Fez
			//
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
				'altitude' => 'Montane'
            ]);	
			//
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
				'altitude' => 'Montane'
            ]);	
			//
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
				'altitude' => 'Montane'
            ]);
			//Kairouan
			//
			//Kairouan, 
            DB::table('duchies')->insert([
				'duchy_name' => 'Kairouan',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '51',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Maghreb',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane'
            ]);	
			//
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
				'altitude' => 'Montane'
            ]);	
			//
			//Djerid,
            DB::table('duchies')->insert([
				'duchy_name' => 'Djerid',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '51',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Maghreb',
				'law_court' => 'Palatial',
				'vegetation' => 'Steppe',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane'
            ]);	
			//
			//Tripoli,
            DB::table('duchies')->insert([
				'duchy_name' => 'Tripoli',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '51',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Maghreb',
				'law_court' => 'Palatial',
				'vegetation' => 'Steppe',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane'
            ]);		
			//
			//Sirte,
            DB::table('duchies')->insert([
				'duchy_name' => 'Sirte',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '51',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Maghreb',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Oasis',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane'
            ]);
			//Tlemcen
			//
			//Tlemcen,
            DB::table('duchies')->insert([
				'duchy_name' => 'Tlemcen',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '52',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Maghreb',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane'
            ]);	
			//
			//Oujda,
            DB::table('duchies')->insert([
				'duchy_name' => 'Oujda',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '52',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Maghreb',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Marshland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane'
            ]);	
			//
			//Oran,
            DB::table('duchies')->insert([
				'duchy_name' => 'Oran',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '52',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Maghreb',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane'
            ]);	
			//
			//Algiers,
            DB::table('duchies')->insert([
				'duchy_name' => 'Algiers',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '52',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Maghreb',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Marshland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane'
            ]);	
			//
			//Tiaret,
            DB::table('duchies')->insert([
				'duchy_name' => 'Tiaret',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '52',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Maghreb',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane'
            ]);	
			//
			//Mzab,
            DB::table('duchies')->insert([
				'duchy_name' => 'Mzab',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '52',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Maghreb',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Oasis',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane'
            ]);
			//
			//Laghouat,
            DB::table('duchies')->insert([
				'duchy_name' => 'Laghouat',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '52',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Maghreb',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Oasis',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane'
            ]);	
			//
			//Djelfa,
            DB::table('duchies')->insert([
				'duchy_name' => 'Djelfa',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '52',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Maghreb',
				'law_court' => 'Palatial',
				'vegetation' => 'Steppe',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane'
            ]);
			//Ifni
			//
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
				'altitude' => 'Montane'
            ]);	
			//
			//Taroudant, Agadir
            DB::table('duchies')->insert([
				'duchy_name' => 'Taroudant',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '53',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Maghreb',
				'law_court' => 'Palatial',
				'vegetation' => 'Steppe',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane'
            ]);			
			//Figuig
			//
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
				'altitude' => 'Montane'
            ]);	
			//
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
				'altitude' => 'Montane'
            ]);
			//Abbasid
			//Baghdad
			//
			//Baghdad, Karbala, Najaf
            DB::table('duchies')->insert([
				'duchy_name' => 'Baghdad',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '55',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Mashriq',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Marshland',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane'
            ]);
			//Syria
			//Damascus
			//
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
				'altitude' => 'Montane'
            ]);	
			//
			//Aleppo,
            DB::table('duchies')->insert([
				'duchy_name' => 'Jabal',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '56',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Mashriq',
				'law_court' => 'Palatial',
				'vegetation' => 'Steppe',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane'
            ]);	
			//
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
				'altitude' => 'Montane'
            ]);
			//Najd
			//
			//Najd,
            DB::table('duchies')->insert([
				'duchy_name' => 'Najd',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '57',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Mashriq',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Oasis',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane'
            ]);
			//Antioch
			//
			//Antioch,
            DB::table('duchies')->insert([
				'duchy_name' => 'Antioch',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '58',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Mashriq',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane'
            ])			
			//Fatimid
			//Cairo
			//
			//Cairo,
            DB::table('duchies')->insert([
				'duchy_name' => 'Cairo',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '59',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Mashriq',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Marshland',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane'
            ]);	
			//
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
				'altitude' => 'Montane'
            ]);	
			//
			//Mansoura,
            DB::table('duchies')->insert([
				'duchy_name' => 'Mansoura',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '59',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Mashriq',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Marshland',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane'
            ]);
			//
			//Damietta,
            DB::table('duchies')->insert([
				'duchy_name' => 'Damietta',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '59',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Mashriq',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Marshland',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane'
            ]);
			//
			//Minya,
            DB::table('duchies')->insert([
				'duchy_name' => 'Minya',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '59',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Mashriq',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Marshland',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane'
            ]);
			//
			//Asyut,
            DB::table('duchies')->insert([
				'duchy_name' => 'Asyut',
				'duchy_category' => 'Ecclesiastical_Estate',
				'de_jure_kingdom' => '59',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Mashriq',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Marshland',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane'
            ]);
			//
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
				'altitude' => 'Montane'
            ]);
			//
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
				'altitude' => 'Montane'
            ]);
			//
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
				'altitude' => 'Montane'
            ]);
			//Jerusalem
			//
			//Jerusalem, Ascolon
            DB::table('duchies')->insert([
				'duchy_name' => 'Jerusalem',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '60',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Mashriq',
				'law_court' => 'Palatial',
				'vegetation' => 'Mediterranean_Woodland',
				'transport' => 'Donkey_Train',
				'altitude' => 'Montane'
            ]);
			//
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
				'altitude' => 'Montane'
            ]);
			//Hejaz
			//
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
				'altitude' => 'Montane'
            ]);	
			//
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
				'altitude' => 'Montane'
            ]);	
			//
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
				'altitude' => 'Montane'
            ]);
			//Khazar
			//Khazaria
			//
			//Aqtobe,
            DB::table('duchies')->insert([
				'duchy_name' => 'Aqtobe',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Persian',
				'law_court' => 'Palatial',
				'vegetation' => 'Steppe',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane'
            ]);
			//
			//Sarkel,
            DB::table('duchies')->insert([
				'duchy_name' => 'Sarkel',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Persian',
				'law_court' => 'Palatial',
				'vegetation' => 'Steppe',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane'
            ]);
			//
			//Atil,
            DB::table('duchies')->insert([
				'duchy_name' => 'Atil',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Persian',
				'law_court' => 'Palatial',
				'vegetation' => 'Steppe',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane'
            ]);
			//
			//Bolghar,
            DB::table('duchies')->insert([
				'duchy_name' => 'Bolghar',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Persian',
				'law_court' => 'Palatial',
				'vegetation' => 'Steppe',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane'
            ]);
			//
			//Bilar,
            DB::table('duchies')->insert([
				'duchy_name' => 'Bilar',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Persian',
				'law_court' => 'Palatial',
				'vegetation' => 'Steppe',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane'
            ]);
			//Alania
			//
			//Derbent,
            DB::table('duchies')->insert([
				'duchy_name' => 'Derbent',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Persian',
				'law_court' => 'Palatial',
				'vegetation' => 'Steppe',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane'
            ]);
			//
			//Azov,
            DB::table('duchies')->insert([
				'duchy_name' => 'Azov',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Persian',
				'law_court' => 'Palatial',
				'vegetation' => 'Steppe',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane'
            ]);
			//Cumania
			//
			//Sighnaq,
            DB::table('duchies')->insert([
				'duchy_name' => 'Sighnaq',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Persian',
				'law_court' => 'Palatial',
				'vegetation' => 'Steppe',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane'
            ]);
			//
			//Sozak,
            DB::table('duchies')->insert([
				'duchy_name' => 'Sozak',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Persian',
				'law_court' => 'Palatial',
				'vegetation' => 'Steppe',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane'
            ]);
			//
			//Sibir,
            DB::table('duchies')->insert([
				'duchy_name' => 'Sibir',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Persian',
				'law_court' => 'Palatial',
				'vegetation' => 'Steppe',
				'transport' => 'Dog_Cart',
				'altitude' => 'Montane'
            ]);
			//Seljuk
			//Kwarezm
			//
			//Gurganj, Khorezm
            DB::table('duchies')->insert([
				'duchy_name' => 'Gurganj',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Persian',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Oasis',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane'
            ]);
			//
			//Khiva, Durghan
            DB::table('duchies')->insert([
				'duchy_name' => 'Khiva',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Persian',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Oasis',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane'
            ]);
			//
			//Merv, Sarakhs, Bereket
            DB::table('duchies')->insert([
				'duchy_name' => 'Merv',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Persian',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Oasis',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane'
            ]);
			//Isfahan
			//
			//Isfahan, Qom
            DB::table('duchies')->insert([
				'duchy_name' => 'Isfahan',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Persian',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Oasis',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane'
            ]);	
			//
			//Shiraz,
            DB::table('duchies')->insert([
				'duchy_name' => 'Shiraz',
				'duchy_category' => 'Feudal_Estate',
				'de_jure_kingdom' => '',
				'law_succession' => 'Shura',
				'vernacular_architecture' => 'Adobe_Persian',
				'law_court' => 'Palatial',
				'vegetation' => 'Desert_Oasis',
				'transport' => 'Camel_Caravan',
				'altitude' => 'Montane'
            ]);
			//Hormuz
			//
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
				'altitude' => 'Montane'
            ]);	
			//
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
				'altitude' => 'Montane'
            ]);
			
    }
}