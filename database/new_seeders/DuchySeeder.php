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
				'law_assembly' => '',			//absolute, limited, medium, high; default=medium	
				'law_court' => '',				//Itinerant, Palatial
				'vegetation' => '',				//Desert_Oasis, Desert_Marshland, Steppe, Mediterranean_Shrubland, Mediterranean_Marshland, Mediterranean_Woodland, Temperate_Grassland, Temperate_Woodland, Temperate_Marshland
				'altitude' => '',				//Lowland, Montane, Highland
				'levy_feudal' => '',			//minimal, normal, large, maximal; default=large
				'levy_ecclesiastical' => '',	//minimal, normal, large, maximal; default=normal
				'levy_burgher' => '',			//minimal, normal, large, maximal; default=normal
				'tax_feudal' => '',				//minimal, normal, large, maximal; default=minimal		
				'tax_ecclesiastical' => '',		//minimal, normal, large, maximal; default=normal				
				'tax_burgher' => ''				//minimal, normal, large, maximal; default=normal			
				'souvereign' => '1',			(empire); default=1
				'lord_paramount' => '1',		(kingdom); default=1
				'tenant_in_chief' => '1'		(duchy); default=1
            ]);			
			*/
			
			//holy roman empire
			//germany
			//1 
			//Grunsweit, Ostmark, Vienna
            DB::table('duchies')->insert([
				'duchy_name' => 'Austria',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Highland'				
            ]);
			//2 
			//Donaugau, Folkfeld, Isengau, Mattiggau, Nordgau, Radenzgau, Rottgau, Schweinachgau, Westergau
            DB::table('duchies')->insert([
				'duchy_name' => 'Bavaria',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);			
			//3 
			//Brabant, Haspengau, Hennegau, Kamerykgau, Toxandria, Waasgau
            DB::table('duchies')->insert([
				'duchy_name' => 'Brabant',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Lowland'				
            ]);
			//4
			//Hengistgau, Ingeringtal, Jauntal, Kroatengau, Leobental, Murztal, Sanntal
            DB::table('duchies')->insert([
				'duchy_name' => 'Carinthia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//5 
			//Krainmark, Histria
            DB::table('duchies')->insert([
				'duchy_name' => 'Carniola',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//6
			//Grabfeld, Gollachgau, Gotzfeld, Jagstgau, Saalgau, Sualafeld, Sulmgau, Taubergau, Waldsassengau
            DB::table('duchies')->insert([
				'duchy_name' => 'Franconia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//7 
			//Ammergau, Auricherland, Beveland, Bornegau, Drenthe, Dithmarschen, Emsigerland, Fivelgau, Hadeln, Holtland, Hunsingau, Kennemerland, Maasland, Nifterlake, Norderland, Ostringen, Oostergau, Rhineland, Rustringen, Salland, Sudergau, Teisterbant, Twente, Veluwe, Vollenhove, Walcheren, Westergau, Westflinge, Wursten
            DB::table('duchies')->insert([
				'duchy_name' => 'Frisia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Marshland',	
				'altitude' => 'Lowland'				
            ]);
			//8 
			//Hettergau, Betuwe, Cleveland, Hamaland, Mulgau, Ruhrgau
            DB::table('duchies')->insert([
				'duchy_name' => 'Guelders',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Marshland',	
				'altitude' => 'Lowland'				
            ]);	
			//9
			//Julichgau, Eifelgau, Zulpichgau
            DB::table('duchies')->insert([
				'duchy_name' => 'Julich',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//10
			//Luttichgau, Ardennengau, Condrustgau, Lommegau, Maasgau
            DB::table('duchies')->insert([
				'duchy_name' => 'Limburg',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//11 
			//Metzgau, Bleisgau, Chaumontois, Saargau, Salingau, Soulossois, Toullois
            DB::table('duchies')->insert([
				'duchy_name' => 'Lorraine',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//12
			//Methingau, Barrois, Moselgau, Verdungau, Wavergau
            DB::table('duchies')->insert([
				'duchy_name' => 'Luxembourg',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//13
			//Bardengau, Derlingau, Eastfalagau, Gretingau, Gudingau, Harzgau, Wenzengau
            DB::table('duchies')->insert([
				'duchy_name' => 'Saxony',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//14
			//Traungau, Attergau, Ennstal, Norital, Vinschgau
            DB::table('duchies')->insert([
				'duchy_name' => 'Styria',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Grassland',	
				'altitude' => 'Highland'				
            ]);	
			//15 
			//Ortengau, Albegau, Augstgau, Breisgau, Churgau, Hegau, Linzgau, Neckargau, Nordgau, Riesgau, Schwerzgau, Schwyzgau, Sundgau, Turgau, Zurichgau  
            DB::table('duchies')->insert([
				'duchy_name' => 'Swabia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//16
			//Thuringgau, Altgau, Eichsfeld, Helmegau, Langwitzgau, Nabelgau, Orlagau, Ostergau, Zwickaugau
            DB::table('duchies')->insert([
				'duchy_name' => 'Thuringia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//17 
			//Largau, Agradingau, Angerngau, Augau, Bukkigau, Bursibant, Dervegau, Dreingau, Gronegau, Hasegau, Heilangau, Holsteingau, Leinegau, Mosidegau, Padergau, Stevergau, Stormarngau, Sturmigau, Sudergau, Werregau, Westfaliagau      
            DB::table('duchies')->insert([
				'duchy_name' => 'Bremen',
				'duchy_category' => 'Ecclesiastical',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Elective_Monarchy',
				'law_court' => 'Itinerant',		
				'vegetation' => 'Temperate_Marshland',	
				'altitude' => 'Lowland'				
            ]);
			//18
			//Gillgau, Auelgau, Bonngau, Deutzgau
            DB::table('duchies')->insert([
				'duchy_name' => 'Cologne',
				'duchy_category' => 'Ecclesiastical',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Elective_Monarchy',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Marshland',	
				'altitude' => 'Montane'				
            ]);	
			//19
			//Nordthuringgau, Balsamgau, Friesenfeld, Hartingau, Hassegau, Osterwalde, Schwabengau
            DB::table('duchies')->insert([
				'duchy_name' => 'Magdeburg',
				'duchy_category' => 'Ecclesiastical',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Elective_Monarchy',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//20
			//Wormsfeld, Engersgau, Hessengau, Lahngau, Lobdengau, Maingau, Nahegau, Niddagau, Speyergau, Ufgau, Wettergau, Wurmgau
            DB::table('duchies')->insert([
				'duchy_name' => 'Mainz',
				'duchy_category' => 'Ecclesiastical',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Elective_Monarchy',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//21
			//Salzburggau, Chiemgau, Lungau, Pinzgau, Sundergau
            DB::table('duchies')->insert([
				'duchy_name' => 'Salzburg',
				'duchy_category' => 'Ecclesiastical',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Elective_Monarchy',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Grassland',	
				'altitude' => 'Highland'				
            ]);	
			//22
			//Bitgau, Maifeld, Hunsruckgau, Trechirgau
            DB::table('duchies')->insert([
				'duchy_name' => 'Trier',
				'duchy_category' => 'Ecclesiastical',
				'de_jure_kingdom' => '1',	
				'law_succession' => 'Elective_Monarchy',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//Lombardy
			//23 
			//Milano, Alessandria, Bergamo, Brescia, Crema, Cremona, Frignana, Lodi, Mantua, Modena, Novara, Parma, Pavia, Piacenza, Reggio, Tortona, Vernio
            DB::table('duchies')->insert([
				'duchy_name' => 'Milan',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '2',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Marshland',	
				'altitude' => 'Montane'				
            ]);	
			//24 
			//Alba, Asti, Canavese, Casale, Montferrat, Saluzzo, Susa, Vercelli
            DB::table('duchies')->insert([
				'duchy_name' => 'Piedmont',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '2',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);				
			//25 
			//Siena, Grosseto, Piombino, Sovana
            DB::table('duchies')->insert([
				'duchy_name' => 'Tuscany',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '2',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//26 
			//Verona, Padova, Rovigo, Vicenza, Trent
            DB::table('duchies')->insert([
				'duchy_name' => 'Verona',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '2',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Marshland',	
				'altitude' => 'Montane'				
            ]);	
			//27 
			//Friuli, Gorizia, Pordenone
            DB::table('duchies')->insert([
				'duchy_name' => 'Aquileia',
				'duchy_category' => 'Ecclesiastical',
				'de_jure_kingdom' => '2',	
				'law_succession' => 'Elective_Monarchy',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Marshland',	
				'altitude' => 'Montane'					
            ]);
			//28 
			//Florence, Arezzo, Cortona, Prato
            DB::table('duchies')->insert([
				'duchy_name' => 'Florence',
				'duchy_category' => 'Crowned_Republic',
				'de_jure_kingdom' => '2',	
				'law_succession' => 'Elective_Monarchy',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//29 
			//Genoa, Lunigiana, Massa
            DB::table('duchies')->insert([
				'duchy_name' => 'Genoa',
				'duchy_category' => 'Crowned_Republic',
				'de_jure_kingdom' => '2',	
				'law_succession' => 'Elective_Monarchy',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Lowland'				
            ]);	
			//30 
			//Noli, Finale
            DB::table('duchies')->insert([
				'duchy_name' => 'Noli',
				'duchy_category' => 'Crowned_Republic',
				'de_jure_kingdom' => '2',	
				'law_succession' => 'Elective_Monarchy',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Lowland'				
            ]);	
			//31 
			//Oneglia, Ventimiglia
            DB::table('duchies')->insert([
				'duchy_name' => 'Oneglia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '2',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//32 
			//Lucca, Pistoja,
            DB::table('duchies')->insert([
				'duchy_name' => 'Lucca',
				'duchy_category' => 'Crowned_Republic',
				'de_jure_kingdom' => '2',	
				'law_succession' => 'Elective_Monarchy',
				'law_court' => 'Itinerant',
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//33 
			//Pisa, Livorno, Volterra
            DB::table('duchies')->insert([
				'duchy_name' => 'Pisa',
				'duchy_category' => 'Crowned_Republic',
				'de_jure_kingdom' => '2',	
				'law_succession' => 'Elective_Monarchy',
				'law_court' => 'Itinerant',		
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//34 
			//Dogado, Belluno, Treviso
            DB::table('duchies')->insert([
				'duchy_name' => 'Venice',
				'duchy_category' => 'Crowned_Republic',
				'de_jure_kingdom' => '2',	
				'law_succession' => 'Elective_Monarchy',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Marshland',	
				'altitude' => 'Lowland'				
            ]);	
			//bohemia
			//35 
			//bohemia
            DB::table('duchies')->insert([
				'duchy_name' => 'Bohemia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '3',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//36 
			//Meissengau, Milzenigau, Nisangau, Lusizigau, Selpuligau
            DB::table('duchies')->insert([
				'duchy_name' => 'Lusatia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '6',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//37 
			//moravia
            DB::table('duchies')->insert([
				'duchy_name' => 'Moravia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '3',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);				
			//burgundy
			//38 
			//Avalois, Autunais, Auxerrois, Auxois, Beaujolais, Beaunois, Chalonais, Lassois, Maconnais, Nivernais, Tonerrois
            DB::table('duchies')->insert([
				'duchy_name' => 'Burgundy',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '4',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',		
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//39 
			//Dauphine, Belinois, Embrunnais, Forcalquier, Lyonnais, Mauronais, Valentinois, Viennois
            DB::table('duchies')->insert([
				'duchy_name' => 'Cisjurania',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '4',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Marshland',	
				'altitude' => 'Highland'				
            ]);			
			//40 
			//Amosenais, Aargau, Bargenais, Genevanais, Lausonnais, Portenais, Vaudenais
            DB::table('duchies')->insert([
				'duchy_name' => 'Transjurania',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '4',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Grassland',	
				'altitude' => 'Highland'				
            ]);	
			//41 
			//Orange, Venaissin, Vivarais
            DB::table('duchies')->insert([
				'duchy_name' => 'Orange',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '4',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Marshland',	
				'altitude' => 'Montane'				
            ]);	
			//42 
			//arles, aix, baux, vaison, marseille, toulon, nice
            DB::table('duchies')->insert([
				'duchy_name' => 'Provence',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '4',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Marshland',	
				'altitude' => 'Montane'				
            ]);	
			//43 
			//Savoia, Aosta, Chablais, Genevanais, Tarantais, Valais,  
            DB::table('duchies')->insert([
				'duchy_name' => 'Savoy',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '4',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Grassland',	
				'altitude' => 'Highland'				
            ]);	
			//papal states
			//44 
			//Rome
            DB::table('duchies')->insert([
				'duchy_name' => 'Rome',
				'duchy_category' => 'Ecclesiastical',
				'de_jure_kingdom' => '5',	
				'law_succession' => 'Elective_Monarchy',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//45 
			//Ferrara, Bologna, Carpegna, Ravenna
            DB::table('duchies')->insert([
				'duchy_name' => 'Romagna',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '5',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//46 
			//Ancona, Fermo, Spoleto
            DB::table('duchies')->insert([
				'duchy_name' => 'Spoleto',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '5',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//47 
			//Urbino
            DB::table('duchies')->insert([
				'duchy_name' => 'Urbino',
				'duchy_category' => 'Crowned_Republic',
				'de_jure_kingdom' => '5',	
				'law_succession' => 'Elective_Monarchy',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//teutonic order state
			//48 
			//Livland, Ascheraden, Dorpat, Dunaburg, Fellin, Kurland, Mitau, Segewold, Wenden, Wolkenburg
            DB::table('duchies')->insert([
				'duchy_name' => 'Livonia',
				'duchy_category' => 'Ecclesiastical',
				'de_jure_kingdom' => '6',	
				'law_succession' => 'Elective_Monarchy',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//49 
			//Reval, Pernau
            DB::table('duchies')->insert([
				'duchy_name' => 'Estonia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '6',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//50 
			//Pomesanengau, Bartengau, Ermland, Memelland, Nadrauengau, Natangergau, Pogesanengau, Samland
            DB::table('duchies')->insert([
				'duchy_name' => 'Prussia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '6',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//51 
			//Danzig, Butow, Dirschau, Karthaus, Kulmerland, Lauenburg, Putzig, Schlochau, Schwetz, Thorn, Tuchel
            DB::table('duchies')->insert([
				'duchy_name' => 'Pomerelia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '6',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//52 
			//Kammin, Arnswalde, Gollnow, Greifenhagen, Greifenberg, Pyritz, Kessinigau, Kolberg, Koslin, Neustettin, Schivelbein, Slupsk, Schlawe, Stettin, Wostrosegau
            DB::table('duchies')->insert([
				'duchy_name' => 'Pomerania',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '6',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//53 
			//Havelland, Dossegau, Linaggau, Nelitzigau, Retschanengau, Uckermark
            DB::table('duchies')->insert([
				'duchy_name' => 'Brandenburg',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '6',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//54 
			//Circipanigau, Obotritegau, Polabigau, Wagrigau
            DB::table('duchies')->insert([
				'duchy_name' => 'Mecklenburg',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '6',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//france
			//france
			//55 
			//perche, maine, anjou, vendome, touraine
            DB::table('duchies')->insert([
				'duchy_name' => 'Anjou',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Marshland',	
				'altitude' => 'Montane'				
            ]);	
			//56 
			//agenais, lomagne, bordeaux, bazadais, angouleme, saintogne, perigord, limousin
            DB::table('duchies')->insert([
				'duchy_name' => 'Aquitaine',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//57 
			//auvergne, aurillac, clermont, brioude, carlat, murat
            DB::table('duchies')->insert([
				'duchy_name' => 'Auvergne',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//58
			//berry, sancerre
            DB::table('duchies')->insert([
				'duchy_name' => 'Berry',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//59 
			//bourbonnais, montlucon
            DB::table('duchies')->insert([
				'duchy_name' => 'Bourbonnais',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//60 
			//nantes, rennes, vannes, dol, rohan, penthievre, cornouailles, leon
            DB::table('duchies')->insert([
				'duchy_name' => 'Brittany',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			// 
			//casgony, armagnac, bearn, bigorre, comminges, dax, tursan, marsan, fezensac, astarac, couserans
            DB::table('duchies')->insert([
				'duchy_name' => 'Casgony',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Grassland',	
				'altitude' => 'Highland'				
            ]);	
			// 
			//reims, rethel, langres, troyes, sens, bar, provins, meaux, chalons
            DB::table('duchies')->insert([
				'duchy_name' => 'Champagne',
				'duchy_category' => 'Ecclesiastical',
				'de_jure_kingdom' => '7',	
				'law_succession' => 'Elective_Monarchy',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Grassland',	
				'altitude' => 'Montane'				
            ]);	
			// 
			//beauvaisis, senlis, valois, soissonnais, pay de france, brie, gatinais, mantois, hurepoix, vexin, clermont, beaumont
            DB::table('duchies')->insert([
				'duchy_name' => 'Francia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Marshland',	
				'altitude' => 'Montane'				
            ]);	
			// 
			//alencon, mortain, evreux, rouen, eu, fecamp, lisieux, bayeux, coutances, avranches
            DB::table('duchies')->insert([
				'duchy_name' => 'Normandy',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Marshland',	
				'altitude' => 'Montane'				
            ]);	
			// 
			//orleanais, blois, dunois, nemours, chartres, chateaudun, dreux
            DB::table('duchies')->insert([
				'duchy_name' => 'Orleanais',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			// 
			//artois, boulogne, guines, montreuil, ponthieu, amienois, vermandois, laonnais, noyonnais, flanders, tournai
            DB::table('duchies')->insert([
				'duchy_name' => 'Picardy',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Marshland',	
				'altitude' => 'Lowland'				
            ]);	
			// 
			//poitou, aunis, turenne, marche, thouars, chatellerault
            DB::table('duchies')->insert([
				'duchy_name' => 'Poitou',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			// 
			//toulouse, quercy, foix, carcasonne, narbonne, albi, gevaudan, velay, rouergue, nimes, millau
            DB::table('duchies')->insert([
				'duchy_name' => 'Toulouse',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	


			
    }
}