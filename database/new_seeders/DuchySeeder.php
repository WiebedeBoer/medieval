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
			//Hengistgau, Ingeringtal, Jauntal, Kroatengau, Lavanttal, Leobental, Murztal, Sanntal
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
			//Milano, Bergamo, Brescia, Crema, Cremona, Frignana, Lodi, Mantua, Modena, Novara, Parma, Pavia, Piacenza, Reggio, Tortona, Vernio
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
			//Alba, Asti, Auriate, Canavese, Casale, Cuneo, Montferrat, Pragelato, Susa, Torino, Vercelli, Vigevano
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
			//Florence, Arezzo, Cortona, Perugia, Prato
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
			//Noli, Albenga, Finale
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
			//Oneglia, Monaco, Ventimiglia
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
			//Lucca, Pistoja
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
			//Pisa, Corsica, Livorno, Volterra
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
			//Prague, Bechin, Bunzlau, Elbogen, Glatzerland, Koniggratz, Leitmeritz, Pilsen, Rakonitz, Schlan, Saaz, Tschaslawsko
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
			//Brunn, Iglau, Olmutz, Prerau, Velingrad, Znaim
            DB::table('duchies')->insert([
				'duchy_name' => 'Moravia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '3',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//38 
			//Jauer, Glogau, Leubus, Liegnitz, Oels, Schweidnitz
            DB::table('duchies')->insert([
				'duchy_name' => 'Lower Silesia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '3',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//39
			//Oppeln, Breslau, Brieg, Ratibor, Teschen, Troppau
			  
            DB::table('duchies')->insert([
				'duchy_name' => 'Upper Silesia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '3',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);				
			//Burgundy
			//40
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
			//41
			//Dauphine, Albon, Belinois, Embrunnais, Forcalquier, Lyonnais, Mauronais, Valentinois, Viennois
            DB::table('duchies')->insert([
				'duchy_name' => 'Cisjurania',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '4',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Marshland',	
				'altitude' => 'Highland'				
            ]);			
			//42 
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
			//43
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
			//44
			//Provence, Arles, Baux, Marseille, Nice, Toulon 
            DB::table('duchies')->insert([
				'duchy_name' => 'Provence',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '4',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Marshland',	
				'altitude' => 'Montane'				
            ]);	
			//45 
			//Savoia, Aosta, Chablais, Genevanais, Tarantais, Valais  
            DB::table('duchies')->insert([
				'duchy_name' => 'Savoy',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '4',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Grassland',	
				'altitude' => 'Highland'				
            ]);	
			//Papal States
			//46 
			//Rome, Frosinone, Latina, Rieti, Viterbo
            DB::table('duchies')->insert([
				'duchy_name' => 'Rome',
				'duchy_category' => 'Ecclesiastical',
				'de_jure_kingdom' => '5',	
				'law_succession' => 'Elective_Monarchy',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//47 
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
			//48 
			//Ancona, Chieti, Fermo, Pescara, Spoleto
            DB::table('duchies')->insert([
				'duchy_name' => 'Spoleto',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '5',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//49
			//Urbino, Pesaro
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
			//50 
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
			//51
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
			//52
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
			//53
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
			//54 
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
			//55
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
			//56
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
			//France
			//France
			//57
			//Anjou, Maine, Perche, Touraine, Vendomois
            DB::table('duchies')->insert([
				'duchy_name' => 'Anjou',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Marshland',	
				'altitude' => 'Montane'				
            ]);	
			//58
			//Bordelais, Agenais, Angoumois, Bazadais, Limousin, Lomagne, Perigord, Saintogne
            DB::table('duchies')->insert([
				'duchy_name' => 'Aquitaine',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//59
			//Auvergne, Aurillac, Brioude, Carlat, Clermont, Forez, Murat
            DB::table('duchies')->insert([
				'duchy_name' => 'Auvergne',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//60
			//Berry, Sancerre
            DB::table('duchies')->insert([
				'duchy_name' => 'Berry',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//61 
			//Bourbonnais, Montlucon
            DB::table('duchies')->insert([
				'duchy_name' => 'Bourbonnais',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//62
			//Armagnac, Astarac, Bearn, Bigorre, Comminges, Couserans, Dax, Fezensac, Marsan, Tursan 
            DB::table('duchies')->insert([
				'duchy_name' => 'Casgony',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Grassland',	
				'altitude' => 'Highland'				
            ]);	
			//63
			//Remois, Brenois, Chalonnais, Duesmois, Langres, Meaux, Perthois, Provins, Rethelois, Senois, Troyes
            DB::table('duchies')->insert([
				'duchy_name' => 'Champagne',
				'duchy_category' => 'Ecclesiastical',
				'de_jure_kingdom' => '7',	
				'law_succession' => 'Elective_Monarchy',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Grassland',	
				'altitude' => 'Montane'				
            ]);	
			//64 
			//Pay de France, Beauvaisis, Beaumont, Brie, Clermont, Gatinais, Hurepoix, Mantois, Senlis, Soissonnais, Valois, Vexin 
            DB::table('duchies')->insert([
				'duchy_name' => 'Francia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Marshland',	
				'altitude' => 'Montane'				
            ]);	
			//65
			//Roumois, Alencon, Avranches, Bayeux, Caux, Coutances, Evreux, Eu, Lisieux, Mortainais
            DB::table('duchies')->insert([
				'duchy_name' => 'Normandy',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Marshland',	
				'altitude' => 'Montane'				
            ]);	
			//66
			//Orleanais, Blaisois, Chartres, Dreux, Dunois, Etampois, Nemours 
            DB::table('duchies')->insert([
				'duchy_name' => 'Orleanais',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//67 
			//Artois, Amienois, Boulognois, Flanders, Guines, Laonnais, Montreuil, Noyonnais, Ponthieu, Ternois, Tournais, Vermandois 
            DB::table('duchies')->insert([
				'duchy_name' => 'Picardy',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Marshland',	
				'altitude' => 'Lowland'				
            ]);	
			//68
			//Poitou, Aunis, Briancais, Chatellerault, Marche, Thouarsais, Turenne
            DB::table('duchies')->insert([
				'duchy_name' => 'Poitou',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//69 
			//Toulouse, Albi, Carcasonne, Foix, Gevaudan, Melgueil, Millau, Narbonne, Nimes, Quercy, Rouergue, Velay
            DB::table('duchies')->insert([
				'duchy_name' => 'Toulouse',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '7',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//Brittany
			//70
			//Cornouailles, Ach, Dol, Leon, Poher, Vannais
            DB::table('duchies')->insert([
				'duchy_name' => 'Brittany',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '8',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//71
			//Penthievre, Alet, Tregor
            DB::table('duchies')->insert([
				'duchy_name' => 'Domnonee',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '8',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//72
			//Retz, Nantais, Rennais
            DB::table('duchies')->insert([
				'duchy_name' => 'Retz',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '8',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//Britain
			//Ireland
			//73
			//Galway, Mayo, Roscommon, Sligo
            DB::table('duchies')->insert([
				'duchy_name' => 'Connacht',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '9',	
				'law_succession' => 'Tanistry',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//74
			//Carlow, Kildare, Kilkenny, Leix, Tipperary, Waterford, Wexford, Wicklow
            DB::table('duchies')->insert([
				'duchy_name' => 'Leinster',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '9',	
				'law_succession' => 'Tanistry',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//75
			//Dublin, Longford, Meath, Offaly
            DB::table('duchies')->insert([
				'duchy_name' => 'Meath',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '9',	
				'law_succession' => 'Tanistry',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//76
			//Clare, Cork, Kerry, Limerick
            DB::table('duchies')->insert([
				'duchy_name' => 'Munster',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '9',	
				'law_succession' => 'Tanistry',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//77
			//Antrim, Armagh, Cavan, Derry, Donegal, Down, Fermanagh, Leitrim, Louth, Monaghan, Tyrone
            DB::table('duchies')->insert([
				'duchy_name' => 'Ulster',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '9',	
				'law_succession' => 'Tanistry',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//England
			//78
			//Norfolk, Suffolk
            DB::table('duchies')->insert([
				'duchy_name' => 'East Anglia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '10',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//79
			//Essex, Hertfordshire, Middlesex
            DB::table('duchies')->insert([
				'duchy_name' => 'Essex',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '10',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//80
			//Gloucestershire, Warwickshire, Winchcombeshire, Worcestershire
            DB::table('duchies')->insert([
				'duchy_name' => 'Hwicce',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '10',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//81
			//Aylesfordshire, Kent, Shepwayshire
            DB::table('duchies')->insert([
				'duchy_name' => 'Kent',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '10',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//82
			//Derbyshire, Leicestershire, Lincolnshire, Nothinghamshire, Rutland
            DB::table('duchies')->insert([
				'duchy_name' => 'Lindsey',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '10',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//83
			//Cheshire, Herefordshire, Shropshire, Staffordshire
            DB::table('duchies')->insert([
				'duchy_name' => 'Mercia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '10',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//84
			//Bedfordshire, Buckinghamshire, Cambridgeshire, Huntingdonshire, Northamptonshire, Oxfordshire
            DB::table('duchies')->insert([
				'duchy_name' => 'Mid Anglia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '10',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//85
			//Allertonshire, Burghshire, Cumberland, Durham, Hallamshire, Hexhamshire, Howdenshire, Northumberland, Lancashire, Richmondshire, Yorkshire
            DB::table('duchies')->insert([
				'duchy_name' => 'Northumbria',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '10',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//86
			//Arundelshire, Brambershire, Chichestershire, Leweshire, Pevenshire, Sussex
            DB::table('duchies')->insert([
				'duchy_name' => 'Sussex',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '10',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//87
			//Berkshire, Dorsetshire, Hampshire, Somersetshire, Surrey, Wiltshire
            DB::table('duchies')->insert([
				'duchy_name' => 'Wessex',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '10',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);				
			//Wales
			//88
			//Cornwall, Devonshire
            DB::table('duchies')->insert([
				'duchy_name' => 'Cornwall',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '11',	
				'law_succession' => 'Tanistry',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//89
			//Cardiganshire, Carmarthenshire, Pembrokeshire
            DB::table('duchies')->insert([
				'duchy_name' => 'Dyfed',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '11',	
				'law_succession' => 'Tanistry',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//90
			//Glamorgan, Monmouthshire
            DB::table('duchies')->insert([
				'duchy_name' => 'Gwent',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '11',	
				'law_succession' => 'Tanistry',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//91
			//Anglesey, Caernarvonshire, Denbighshire, Flintshire
            DB::table('duchies')->insert([
				'duchy_name' => 'Gwyned',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '11',	
				'law_succession' => 'Tanistry',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//92
			//Brecknockshire, Montgomeryshire, Radnorshire
            DB::table('duchies')->insert([
				'duchy_name' => 'Powys',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '11',	
				'law_succession' => 'Tanistry',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//Scotland
			//93
			//Aberdeenshire, Banffshire, Fife, Forfarshire, Kincardineshire, Kinrossshire, Perthshire
            DB::table('duchies')->insert([
				'duchy_name' => 'Alba',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '12',	
				'law_succession' => 'Tanistry',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//94
			//Berwickshire, Edinburghshire, Haddingtonshire, Lothian, Stirlingshire
            DB::table('duchies')->insert([
				'duchy_name' => 'Bernicia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '12',	
				'law_succession' => 'Tanistry',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//95
			//Argyll, Bute, Mann
            DB::table('duchies')->insert([
				'duchy_name' => 'Dalriada',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '12',	
				'law_succession' => 'Tanistry',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//96
			//Cromartyshire, Elginshire, Invernessshire, Nairnshire, Sutherland
            DB::table('duchies')->insert([
				'duchy_name' => 'Fortriu',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '12',	
				'law_succession' => 'Tanistry',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//97
			//Kirkcudbrightshire, Wigtownshire
            DB::table('duchies')->insert([
				'duchy_name' => 'Galloway',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '12',	
				'law_succession' => 'Tanistry',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//98
			//Dumfriesshire, Peeblesshire, Roxburghshire, Selkirkshire
            DB::table('duchies')->insert([
				'duchy_name' => 'Gododdin',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '12',	
				'law_succession' => 'Tanistry',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//99
			//Ayrshire, Dunbartonshire, Lanarkshire, Renfrewshire
            DB::table('duchies')->insert([
				'duchy_name' => 'Strathclyde',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '12',	
				'law_succession' => 'Tanistry',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//Aragon
			//Aragon
			//100
			//Aragon, Cinca, Matarrana
            DB::table('duchies')->insert([
				'duchy_name' => 'Aragon',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '13',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//101
			//Bages, Barcelona, Bergueda, Llobregat, Maresme, Osona, Valles
            DB::table('duchies')->insert([
				'duchy_name' => 'Barcelona',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '13',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//102
			//Cerdanya, Conflent, Emporda, Girones, Razes, Ripolles, Rosello, Selva
            DB::table('duchies')->insert([
				'duchy_name' => 'Girona',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '13',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//103
			//Huesca, Jacetania, Ribagorza, Sobrarbe
            DB::table('duchies')->insert([
				'duchy_name' => 'Huesca',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '13',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//104
			//Lleida, Pallars, Urgell
            DB::table('duchies')->insert([
				'duchy_name' => 'Lleida',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '13',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//105
			//Montsia, Tarragona, Tortosa
            DB::table('duchies')->insert([
				'duchy_name' => 'Tarragona',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '13',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);				
			//106
			//Albarracin, Teruel
            DB::table('duchies')->insert([
				'duchy_name' => 'Teruel',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '13',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//107
			//Aranda, Calatayud, Zaragoza
            DB::table('duchies')->insert([
				'duchy_name' => 'Zaragoza',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '13',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);				
			//Navarre
			//108
			//Ayala, Gasteiz, Rioja
            DB::table('duchies')->insert([
				'duchy_name' => 'Alava',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '14',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//109
			//Donostialdea, Leitzaldea, Mungialdea, Tolosaldea
            DB::table('duchies')->insert([
				'duchy_name' => 'Gipuzcoa',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '14',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//110
			//Estella, Irunerria, Sanguesa, Tafalla, Tudela, Ultzamaldea
            DB::table('duchies')->insert([
				'duchy_name' => 'Navarre',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '14',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//111
			//Busturialdea, Bilbaoldea, Uribe
            DB::table('duchies')->insert([
				'duchy_name' => 'Viscaya',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '14',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//Castile
			//Castile
			//112
			//Avila, Morana, San Pedro
            DB::table('duchies')->insert([
				'duchy_name' => 'Avila',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '15',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//113
			//Arlanza, Bureba, Burgos
            DB::table('duchies')->insert([
				'duchy_name' => 'Burgos',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '15',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//114
			//Campos, Cerrato, Valdivia
            DB::table('duchies')->insert([
				'duchy_name' => 'Palencia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '15',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//115
			//Coca, Segovia, Sepulveda
            DB::table('duchies')->insert([
				'duchy_name' => 'Segovia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '15',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//116
			//Almazan, Berlanga, Gomara, Osma, Soria
            DB::table('duchies')->insert([
				'duchy_name' => 'Soria',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '15',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//117
			//Jara, Madrid, Ocana, Sagra, Talavera, Toledo, Torrijos, Vegas
            DB::table('duchies')->insert([
				'duchy_name' => 'Toledo',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '15',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//118
			//Esgueva, Medina, Pinares, Penafiel, Pisuerga, Rioseco
            DB::table('duchies')->insert([
				'duchy_name' => 'Valladolid',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '15',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//Galicia
			//119
			//Coruna, Eume, Ferrol, Santiago, Trastamara
            DB::table('duchies')->insert([
				'duchy_name' => 'Coruna',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '16',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//120
			//Lugo, Marina, Meira, Sarria, Ulloa
            DB::table('duchies')->insert([
				'duchy_name' => 'Lugo',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '16',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//121
			//Carbalino, Celanova, Ourense, Valdeorras, Viana
            DB::table('duchies')->insert([
				'duchy_name' => 'Ourense',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '16',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//122
			//Caldas, Pontevedra, Vigo
            DB::table('duchies')->insert([
				'duchy_name' => 'Pontevedra',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '16',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//Leon
			//123
			//Alcantara, Caceres, Plasencia, Trujillo
            DB::table('duchies')->insert([
				'duchy_name' => 'Caceres',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '17',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//124
			//Astorga, Baneza, Bierzo, Leon, Sahagun
            DB::table('duchies')->insert([
				'duchy_name' => 'Leon',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '17',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//125
			//Alba, Caceres, Cantalapiedra, Guijielo, Ledesma, Penaranda, Rodrigo, Salamanca, Vitigudino
            DB::table('duchies')->insert([
				'duchy_name' => 'Salamanca',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '17',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//126
			//Aliste, Carballeda, Guarena, Sanabria, Sayago, Tabara
            DB::table('duchies')->insert([
				'duchy_name' => 'Zamora',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '17',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//Asturias
			//127
			//Aviles, Gijon, Navia, Oviedo
            DB::table('duchies')->insert([
				'duchy_name' => 'Asturias',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '18',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//128
			//Campoo, Liebana, Santander, Trasmiera
            DB::table('duchies')->insert([
				'duchy_name' => 'Cantabria',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '18',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//Portugal
			//129
			//Aveiro, Braga, Porto, Viana
            DB::table('duchies')->insert([
				'duchy_name' => 'Aveiro',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '19',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//130
			//Castelo Branco, Coimbra, Guarda, Viseu
            DB::table('duchies')->insert([
				'duchy_name' => 'Beira',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '19',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//131
			//Braganca, Vila Real
            DB::table('duchies')->insert([
				'duchy_name' => 'Braganca',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '19',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//132
			//Leiria, Lisboa, Ribatejo, Santarem, Setubal
            DB::table('duchies')->insert([
				'duchy_name' => 'Estremadura',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '19',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//Danelagen
			//Denmark
			//133
			//Aarhus, Borglum, Ribe, Slesvig, Viborg
            DB::table('duchies')->insert([
				'duchy_name' => 'Jutland',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '20',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//134
			//Blekinge, Bornholm, Halland, Rugen, Scania
            DB::table('duchies')->insert([
				'duchy_name' => 'Scania',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '20',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//135
			//Funen, Lolland, Sjaeland
            DB::table('duchies')->insert([
				'duchy_name' => 'Sjaeland',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '20',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//Norway
			//136
			//Caithness, Orkney, Shetland
            DB::table('duchies')->insert([
				'duchy_name' => 'Nordjor',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '21',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//137
			//Islay, Lewis, Mull, Skye, Uist
            DB::table('duchies')->insert([
				'duchy_name' => 'Sodor',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '21',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//138
			//Hadeland, Hedmark, Romerike
            DB::table('duchies')->insert([
				'duchy_name' => 'Hedmark',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '21',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//139
			//Jamtland, Namdal, Oppland, Trondelag
            DB::table('duchies')->insert([
				'duchy_name' => 'Oppland',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '20',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//140
			//Dalane, Haugeland, Jaeren, Rogaland
            DB::table('duchies')->insert([
				'duchy_name' => 'Rogaland',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '21',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//141
			//Agder, Grenland, Telemark
            DB::table('duchies')->insert([
				'duchy_name' => 'Sorland',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '21',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//142
			//Hordaland, Romsdal, Vestland
            DB::table('duchies')->insert([
				'duchy_name' => 'Vestland',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '21',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//143
			//Akershus, Buskerud, Ostfold, Ranrike, Vestfold, Vingulmark
            DB::table('duchies')->insert([
				'duchy_name' => 'Viken',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '21',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//Sweden
			//144
			//Gotland, Ostergotland, Vastergotland
            DB::table('duchies')->insert([
				'duchy_name' => 'Gotland',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '22',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//145
			//Angermanland, Gastrikland, Halsingland
            DB::table('duchies')->insert([
				'duchy_name' => 'Norrland',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '22',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//146
			//Aland, Finland, Karelia, Nyland, Ostrobothnia, Satakunta, Savonia, Tavastland
            DB::table('duchies')->insert([
				'duchy_name' => 'Osterland',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '22',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//147
			//Oland, Smaland
            DB::table('duchies')->insert([
				'duchy_name' => 'Smaland',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '22',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//148
			//Dalarna, Narke, Sodermanland, Uppland, Varmland, Vastmanland
            DB::table('duchies')->insert([
				'duchy_name' => 'Svealand',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '22',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//Poland
			//Poland
			//149
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Greater Poland',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '23',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//150
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Lesser Poland',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '23',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//151
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Kuyavia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '23',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//152
			//
            DB::table('duchies')->insert([
				'duchy_name' => 'Mazovia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '23',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//Lithuania
			//
			//
            DB::table('duchies')->insert([
				'duchy_name' => '',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '24',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//
			//
            DB::table('duchies')->insert([
				'duchy_name' => '',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '24',	
				'law_succession' => 'Salic_Primogeniture',
				'law_court' => 'Itinerant',	
				'vegetation' => 'Temperate_Woodland',	
				'altitude' => 'Montane'				
            ]);

			//Cordoba
			//Andalucia
			//
			//Algeciras, Gibraltar
            DB::table('duchies')->insert([
				'duchy_name' => 'Algeciras',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '46',	
				'law_succession' => 'Shura',
				'law_court' => 'Palatial',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//
			//Almeria, Baza
            DB::table('duchies')->insert([
				'duchy_name' => 'Almeria',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '46',	
				'law_succession' => 'Shura',
				'law_court' => 'Palatial',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//
			//Cadiz, Jerez, Sanlucar
            DB::table('duchies')->insert([
				'duchy_name' => 'Arcos',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '46',	
				'law_succession' => 'Shura',
				'law_court' => 'Palatial',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//
			//Carmona, Ecija
            DB::table('duchies')->insert([
				'duchy_name' => 'Carmona',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '46',	
				'law_succession' => 'Shura',
				'law_court' => 'Palatial',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//
			//Andujar, Carpio, Cordoba, Martos, Pedroche
            DB::table('duchies')->insert([
				'duchy_name' => 'Cordoba',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '46',	
				'law_succession' => 'Shura',
				'law_court' => 'Palatial',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//
			//Baeza, Carolina, Granada, Guadix, Jaen, Lecrin, Motril, Torvizcon, Ubeda
            DB::table('duchies')->insert([
				'duchy_name' => 'Granada',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '46',	
				'law_succession' => 'Shura',
				'law_court' => 'Palatial',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//
			//Alhama, Antequerra, Loja, Malaga
            DB::table('duchies')->insert([
				'duchy_name' => 'Malaga',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '46',	
				'law_succession' => 'Shura',
				'law_court' => 'Palatial',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//
			//Marbella, Ronda
            DB::table('duchies')->insert([
				'duchy_name' => 'Ronda',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '46',	
				'law_succession' => 'Shura',
				'law_court' => 'Palatial',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//
			//Aljarafe, Estepa, Sevilla
            DB::table('duchies')->insert([
				'duchy_name' => 'Sevilla',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '46',	
				'law_succession' => 'Shura',
				'law_court' => 'Palatial',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);				
			//Algarves
			//
			//Faro, Mertola, Silves
            DB::table('duchies')->insert([
				'duchy_name' => 'Algarves',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '47',	
				'law_succession' => 'Shura',
				'law_court' => 'Palatial',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);
			//
			//Badajoz, Beja, Evora, Guadiana, Llerena, Merida, Olivenza, Portalegre, Serena
            DB::table('duchies')->insert([
				'duchy_name' => 'Badajoz',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '47',	
				'law_succession' => 'Shura',
				'law_court' => 'Palatial',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//
			//Aracena, Huelva, Niebla
            DB::table('duchies')->insert([
				'duchy_name' => 'Huelva',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '47',	
				'law_succession' => 'Shura',
				'law_court' => 'Palatial',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);				
			//Levante
			//
			//Alcarria, Almarza, Henares, Medinaceli, Molina, Serranos
            DB::table('duchies')->insert([
				'duchy_name' => 'Alpuente',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '48',	
				'law_succession' => 'Shura',
				'law_court' => 'Palatial',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//
			//Ibiza, Mallorca, Menorca
            DB::table('duchies')->insert([
				'duchy_name' => 'Baleares',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '48',	
				'law_succession' => 'Shura',
				'law_court' => 'Palatial',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//
			//Albacete, Alcaraz, Alcira, Alcoy, Alicante, Almagro, Chinchilla, Cofrentes, Denia, Jativa, Montesa
            DB::table('duchies')->insert([
				'duchy_name' => 'Denia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '48',	
				'law_succession' => 'Shura',
				'law_court' => 'Palatial',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//
			//Cartagena, Cieza, Hellin, Lorca, Murcia, Orihuela, Segura
            DB::table('duchies')->insert([
				'duchy_name' => 'Murcia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '48',	
				'law_succession' => 'Shura',
				'law_court' => 'Palatial',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);	
			//
			//Castellon, Morella, Peniscola, San Clemente, Valencia
            DB::table('duchies')->insert([
				'duchy_name' => 'Valencia',
				'duchy_category' => 'Feudal',
				'de_jure_kingdom' => '48',	
				'law_succession' => 'Shura',
				'law_court' => 'Palatial',	
				'vegetation' => 'Mediterranean_Woodland',	
				'altitude' => 'Montane'				
            ]);				
    }
}