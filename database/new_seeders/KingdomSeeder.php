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
				'kingdom_name' => '',			//total = 68 kingdoms
				'kingdom_category' => '',		//Elective (2), Tanistry (3), Feudal (60), Horde (0), Papacy (1), Confederate (1)
				'flag' => '',					
				'de_jure_empire' => '',
				'law_succession' => '',			//Elective_Monarchy (2), Elective_Papacy (1), Elective_Order (1), Salic_Primogeniture (32), Agnatic_Seniority (6), Tanistry (3), Shura (16), Yassa (6)
				'law_assembly' => '',			//absolute, limited, medium, high; default=medium
				'law_court' => '',				//Itinerant (39), Palatial (6), Divan (16), Sarai (6)
				'levy_feudal' => '',			//minimal, normal, large, maximal; default=large
				'levy_ecclesiastical' => '',	//minimal, normal, large, maximal; default=normal
				'levy_burgher' => '',			//minimal, normal, large, maximal; default=normal
				'tax_feudal' => '',				//minimal, normal, large, maximal; default=minimal
				'tax_ecclesiastical' => '',		//minimal, normal, large, maximal; default=normal
				'tax_burgher' => ''				//minimal, normal, large, maximal; default=normal
				'souvereign' => '',				//(empire); default=1
				'lord_paramount' => ''			//(kingdom); default=1
            ]);
			*/
			
			//Holy Roman Empire
			//Germany
			//Austria, Bavaria, Brabant, Carinthia, Carniola, Franconia, Frisia, Guelders, Julich, Limburg, Lorraine, Luxembourg, Saxony, Styria, Swabia, Thuringia, Bremen, Cologne, Magdeburg, Mainz, Salzburg, Trier
			//1
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Germany',
				'kingdom_category' => 'Elective',
				'flag' => 'holy_roman_empire',
				'de_jure_empire' => '1',
				'law_succession' => 'Elective_Monarchy',
				'law_assembly' => 'medium',
				'law_court' => 'Itinerant'
            ]);
			//Lombardy
			//Milan, Piedmont, Tuscany, Verona, Aquileia, Florence, Genoa, Noli, Oneglia, Lucca, Pisa, Venice
			//2
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Lombardy',
				'kingdom_category' => 'Elective',
				'flag' => 'lombardy',
				'de_jure_empire' => '1',
				'law_succession' => 'Elective_Monarchy',
				'law_assembly' => 'medium',
				'law_court' => 'Itinerant'
            ]);
			//Bohemia
			//Bohemia, Lusatia, Moravia, Lower Silesia, Upper Silesia
			//3
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Bohemia',
				'kingdom_category' => 'Feudal',
				'flag' => 'bohemia',
				'de_jure_empire' => '1',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'Itinerant'
            ]);
			//Burgundy
			//Burgundy, Cisjurania, Transjurania, Orange, Provence, Savoy
			//4 
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Burgundy',
				'kingdom_category' => 'Feudal',
				'flag' => 'burgundy',
				'de_jure_empire' => '1',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'Itinerant'
            ]);
			//Papal States 
			//Rome, Romagna, Spoleto, Urbino
			//5
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Papal States',
				'kingdom_category' => 'Papacy',
				'flag' => 'papal_states',
				'de_jure_empire' => '1',
				'law_succession' => 'Elective_Papacy',
				'law_assembly' => 'medium',
				'law_court' => 'Palatial'
            ]);
			//Teutonic Order State
			//Livonia, Estonia, Prussia, Pomerelia, Pomerania, Brandenburg, Mecklenburg
			//6
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Teutonic Order State',
				'kingdom_category' => 'Confederate',
				'flag' => 'teutonic_order',
				'de_jure_empire' => '1',
				'law_succession' => 'Elective_Order',
				'law_assembly' => 'medium',
				'law_court' => 'Itinerant'
            ]);
			//France
			//France
			//Anjou, Aquitaine, Auvergne, Berry, Bourbonnais, Gascony, Champagne, Francia, Normandy, Orleanais, Picardy, Poitou, Toulouse
			//7
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of France',
				'kingdom_category' => 'Feudal',
				'flag' => 'france',
				'de_jure_empire' => '2',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'Itinerant'
            ]);
			//Brittany
			//Brittany, Domnonee, Retz
			//8
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Brittany',
				'kingdom_category' => 'Feudal',
				'flag' => 'brittany',
				'de_jure_empire' => '2',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'Itinerant'
            ]);
			//Britain
			//Ireland 
			//Connacht, Leinster, Meath, Munster, Ulster
			//9
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'High Kingdom of Ireland',
				'kingdom_category' => 'Tanistry',
				'flag' => 'leinster',
				'de_jure_empire' => '3',
				'law_succession' => 'Tanistry',
				'law_assembly' => 'medium',
				'law_court' => 'Itinerant'
            ]);
			//England
			//East Anglia, Essex, Hwicce, Kent, Mercia, Mid Anglia, Northumbria, Sussex, Wessex
			//10
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of England',
				'kingdom_category' => 'Feudal',
				'flag' => 'england',
				'de_jure_empire' => '3',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'Itinerant'
            ]);
			//Wales
			//Cornwall, Dyfed, Gwent, Gwynedd, Powys
			//11
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Principality of Wales',
				'kingdom_category' => 'Tanistry',
				'flag' => 'wales',
				'de_jure_empire' => '3',
				'law_succession' => 'Tanistry',
				'law_assembly' => 'medium',
				'law_court' => 'Itinerant'
            ]);
			//Scotland
			//Alba, Bernicia, Dalradia, Fortriu, Galloway, Gododdin, Strathclyde
			//12
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Scotland',
				'kingdom_category' => 'Tanistry',
				'flag' => 'scotland',
				'de_jure_empire' => '3',
				'law_succession' => 'Tanistry',
				'law_assembly' => 'medium',
				'law_court' => 'Itinerant'
            ]);
			//Aragon
			//Aragon
			//Aragon, Barcelona, Girona, Huesca, Lleida, Tarragona, Teruel, Zaragoza
			//13
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Aragon',
				'kingdom_category' => 'Feudal',
				'flag' => 'aragon',
				'de_jure_empire' => '4',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'Itinerant'
            ]);
			//Navarre
			//Alava, Gipuzcoa, Navarre, Viscaya
			//14
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Navarre',
				'kingdom_category' => 'Feudal',
				'flag' => 'navarre',
				'de_jure_empire' => '4',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'Itinerant'
            ]);
			//Castile
			//Castile
			//Avila, Burgos, Palencia, Segovia, Soria, Toledo, Valladolid
			//15
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Castile',
				'kingdom_category' => 'Feudal',
				'flag' => 'castile',
				'de_jure_empire' => '5',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'Itinerant'
            ]);
			//Galicia
			//Coruna, Lugo, Ourense, Pontevedra
			//16
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Galicia',
				'kingdom_category' => 'Feudal',
				'flag' => 'galicia',
				'de_jure_empire' => '5',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'Itinerant'
            ]);
			//Leon
			//Caceres, Leon, Salamanca, Zamora
			//17
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Leon',
				'kingdom_category' => 'Feudal',
				'flag' => 'leon',
				'de_jure_empire' => '5',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'Itinerant'
            ]);
			//Asturias
			//Asturias, Cantabria
			//18
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Principality of Asturias',
				'kingdom_category' => 'Feudal',
				'flag' => 'asturias',
				'de_jure_empire' => '5',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'Itinerant'
            ]);
			//Portugal
			//Aveiro, Beira, Braganca, Estremadura
			//19
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Portugal',
				'kingdom_category' => 'Feudal',
				'flag' => 'portugal',
				'de_jure_empire' => '5',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'Itinerant'
            ]);
			//Danelagen
			//Denmark
			//Jutland, Scania, Sjaeland 
			//20
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Denmark',
				'kingdom_category' => 'Feudal',
				'flag' => 'denmark',
				'de_jure_empire' => '6',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'Itinerant'
            ]);
			//Norway
			//Nordjor, Sodor, Hedmark, Oppland, Rogaland, Sorland, Vestland, Viken
			//21
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Norway',
				'kingdom_category' => 'Feudal',
				'flag' => 'norway',
				'de_jure_empire' => '6',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'Itinerant'
            ]);
			//Sweden
			//Gotland, Norrland, Osterland, Smaland, Svealand
			//22
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Sweden',
				'kingdom_category' => 'Feudal',
				'flag' => 'sweden',
				'de_jure_empire' => '6',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'Itinerant'
            ]);
			//Poland
			//Poland
			//Greater Poland, Lesser Poland, Gnesen, Kalisz, Krakow, Kuyavia, Mazovia, Plock, Posen, Sieradz, Warsaw
			//23
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Poland',
				'kingdom_category' => 'Feudal',
				'flag' => 'poland',
				'de_jure_empire' => '7',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'Itinerant'
            ]);
			//Lithuania
			//Minsk, Samogitia, Tracken, Vilnius
			//24
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Grand Duchy of Lithuania',
				'kingdom_category' => 'Feudal',
				'flag' => 'lithuania',
				'de_jure_empire' => '7',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'Itinerant'
            ]);
			//Hungary
			//Hungary
			//Balaton, Buda, Nitra, Temesvar, Ungvar, Transylvania
			//25
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Hungary',
				'kingdom_category' => 'Feudal',
				'flag' => 'hungary',
				'de_jure_empire' => '8',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'Itinerant'
            ]);
			//Croatia
			//Dalmatia, Ragusa, Slavonia, Split, Zadar
			//26
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Croatia',
				'kingdom_category' => 'Feudal',
				'flag' => 'croatia',
				'de_jure_empire' => '8',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'Itinerant'
            ]);
			//Trinacria
			//Sicily
			//Palermo, Trapani, Messina, Agrigento, Catania, Siracusa
			//27
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Sicily',
				'kingdom_category' => 'Feudal',
				'flag' => 'sicily',
				'de_jure_empire' => '9',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'Palatial'
            ]);
			//Naples
			//Naples, Capua, Amalfi, Calabria, Basilicata, Taranto, Foggia, Benevento, Salerno
			//28
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Naples',
				'kingdom_category' => 'Feudal',
				'flag' => 'naples',
				'de_jure_empire' => '9',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'Palatial'
            ]);
			//Sardinia
			//Gallura, Logudoro (torres), Arborea, Cagliari
			//29
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Sardinia',
				'kingdom_category' => 'Feudal',
				'flag' => 'sardinia',
				'de_jure_empire' => '9',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'Itinerant'
            ]);
			//Byzantine
			//Thrace
			//Thrace, Macedonia
			//30
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Thrace',
				'kingdom_category' => 'Feudal',
				'flag' => 'byzantine',
				'de_jure_empire' => '10',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'Palatial'
            ]);
			//Thessalonica
			//Hellas, Peloponessos, Candia, Archipelago, Epirus, Cephalonia, Thessalonica, Strymon
			//31
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Thessalonica',
				'kingdom_category' => 'Feudal',
				'flag' => 'byzantine',
				'de_jure_empire' => '10',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'Itinerant'
            ]);
			//Trebizond
			//Paphlagonia, Armeniac, Chaldia, Crimea
			//32
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Trebizond',
				'kingdom_category' => 'Feudal',
				'flag' => 'byzantine',
				'de_jure_empire' => '10',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'Itinerant'
            ]);
			//Anatolia
			//Thracesia, Bucellaria, Anatolia, Cappadocia, Seleucia, Opsicia, Nicaea, Lycia, Pamphylia
			//33
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Anatolia',
				'kingdom_category' => 'Feudal',
				'flag' => 'byzantine',
				'de_jure_empire' => '10',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'Itinerant'
            ]);
			//Georgia
			//Colchis, Javakheti, Kartli, Kakheti
			//34
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Georgia',
				'kingdom_category' => 'Feudal',
				'flag' => 'georgia',
				'de_jure_empire' => '10',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'Itinerant'
            ]);
			//Armenia
			//Vaspurakan, Taron, Kars, Azerbaijan
			//35
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Armenia',
				'kingdom_category' => 'Feudal',
				'flag' => 'armenia',
				'de_jure_empire' => '10',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'Itinerant'
            ]);
			//Kievan Rus
			//Kyiv
			//Kyiv, Pereyaslavl
			//36
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Grand Principality of Kyiv',
				'kingdom_category' => 'Feudal',
				'flag' => 'kiev',
				'de_jure_empire' => '11',
				'law_succession' => 'Agnatic_Seniority',
				'law_assembly' => 'medium',
				'law_court' => 'Palatial'
            ]);
			//Chernigov
			//Chernigov, Ryazan 
			//37
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Grand Principality of Chernigov',
				'kingdom_category' => 'Feudal',
				'flag' => 'chernigov',
				'de_jure_empire' => '11',
				'law_succession' => 'Agnatic_Seniority',
				'law_assembly' => 'medium',
				'law_court' => 'Itinerant'
            ]);
			//Halych
			//Halych, Podolia, Volhynia, Turov
			//38
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Grand Principality of Ruthenia',
				'kingdom_category' => 'Feudal',
				'flag' => 'volhynia',
				'de_jure_empire' => '11',
				'law_succession' => 'Agnatic_Seniority',
				'law_assembly' => 'medium',
				'law_court' => 'Itinerant'
            ]);
			//Vladimir
			//Vladimir, Moscow, Suzdal
			//39
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Grand Principality of Vladimir',
				'kingdom_category' => 'Feudal',
				'flag' => 'vladimir',
				'de_jure_empire' => '11',
				'law_succession' => 'Agnatic_Seniority',
				'law_assembly' => 'medium',
				'law_court' => 'Itinerant'
            ]);
			//Smolensk
			//Smolensk, Rzhev, Tver
			//40
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Grand Principality of Smolensk',
				'kingdom_category' => 'Feudal',
				'flag' => 'smolensk',
				'de_jure_empire' => '11',
				'law_succession' => 'Agnatic_Seniority',
				'law_assembly' => 'medium',
				'law_court' => 'Itinerant'
            ]);
			//Novgorod
			//Novgorod, Polotsk, Pleskov
			//41
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Principality of Novgorod',
				'kingdom_category' => 'Feudal',
				'flag' => 'novgorod',
				'de_jure_empire' => '11',
				'law_succession' => 'Agnatic_Seniority',
				'law_assembly' => 'medium',
				'law_court' => 'Palatial'
            ]);
			//Bulgaria
			//Bulgaria
			//Preslav, Tarnovo, Philippopolis, Ohrid
			//42
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Bulgaria',
				'kingdom_category' => 'Feudal',
				'flag' => 'bulgaria',
				'de_jure_empire' => '12',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'Itinerant'
            ]);
			//Wallachia
			//Wallachia, Moldavia
			//43
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Principality of Wallachia',
				'kingdom_category' => 'Feudal',
				'flag' => 'wallachia',
				'de_jure_empire' => '12',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'Itinerant'
            ]);
			//Serbia
			//Serbia
			//Rashka, Dioclea, Podrinje
			//44
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Principality of Serbia',
				'kingdom_category' => 'Feudal',
				'flag' => 'serbia',
				'de_jure_empire' => '13',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'Itinerant'
            ]);
			//Bosnia
			//Usora, Soli, Zachumlia
			//45
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Principality of Bosnia',
				'kingdom_category' => 'Feudal',
				'flag' => 'bosnia',
				'de_jure_empire' => '13',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'Itinerant'
            ]);
			//Cordoba
			//Andalucia
			//Algeciras, Almeria, Arcos, Carmona, Cordoba, Granada, Malaga, Ronda, Sevilla 
			//46
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Andalucia',
				'kingdom_category' => 'Feudal',
				'flag' => 'fatimid',
				'de_jure_empire' => '14',
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'Divan'
            ]);
			//Algarves
			//Algarves, Badajoz, Huelva 
			//47
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Algarves',
				'kingdom_category' => 'Feudal',
				'flag' => 'fatimid',
				'de_jure_empire' => '14',
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'Divan'
            ]);
			//Levante
			//Alpuente, Baleares, Denia, Murcia, Valencia
			//48
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Levante',
				'kingdom_category' => 'Feudal',
				'flag' => 'fatimid',
				'de_jure_empire' => '14',
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'Divan'
            ]);
			//Almohad
			//Marrakesh
			//Marrakesh, Tadla, Sijilmassa, Ouarzazate
			//49
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Marrakesh',
				'kingdom_category' => 'Feudal',
				'flag' => 'almohad',
				'de_jure_empire' => '15',
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'Divan'
            ]);
			//Fez
			//Fez, Rabat, Tangier
			//50
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Fez',
				'kingdom_category' => 'Feudal',
				'flag' => 'almohad',
				'de_jure_empire' => '15',
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'Divan'
            ]);
			//Kairouan
			//Kairouan, Tunis, Djerid, Tripoli, Sirte
			//51
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Kairouan',
				'kingdom_category' => 'Feudal',
				'flag' => 'almohad',
				'de_jure_empire' => '15',
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'Divan'
            ]);
			//Tlemcen
			//Tlemcen, Oujda, Oran, Algiers, Tiaret, Mzab, Laghouat, Djelfa
			//52
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Tlemcen',
				'kingdom_category' => 'Feudal',
				'flag' => 'almohad',
				'de_jure_empire' => '15',
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'Divan'
            ]);
			//Ifni
			//Ifni, Taroudant
			//53
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Principality of Ifni',
				'kingdom_category' => 'Feudal',
				'flag' => 'almohad',
				'de_jure_empire' => '15',
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'Divan'
            ]);
			//Figuig
			//Figuig, Adrar
			//54
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Principality of Figuig',
				'kingdom_category' => 'Feudal',
				'flag' => 'almohad',
				'de_jure_empire' => '15',
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'Divan'
            ]);
			//Abbasid
			//Baghdad
			//Baghdad,
			//55
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Baghdad',
				'kingdom_category' => 'Feudal',
				'flag' => 'abbasid',
				'de_jure_empire' => '16',
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'Divan'
            ]);
			//Syria
			//Damascus, Aleppo, Homs
			//56
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Syria',
				'kingdom_category' => 'Feudal',
				'flag' => 'abbasid',
				'de_jure_empire' => '16',
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'Divan'
            ]);
			//Najd
			//Najd,
			//57
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Principality of Najd',
				'kingdom_category' => 'Feudal',
				'flag' => 'abbasid',
				'de_jure_empire' => '16',
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'Divan'
            ]);
			//Antioch
			//Antioch,
			//58
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Principality of Antioch',
				'kingdom_category' => 'Feudal',
				'flag' => 'abbasid',
				'de_jure_empire' => '16',
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'Divan'
            ]);
			//Fatimid
			//Cairo
			//Cairo, Alexandria, Mansoura, Damietta, Minya, Asyut, Kharga, Baritun, Boula
			//59
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Cairo',
				'kingdom_category' => 'Feudal',
				'flag' => 'fatimid',
				'de_jure_empire' => '17',
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'Divan'
            ]);
			//Jerusalem
			//Jerusalem,
			//60
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Jerusalem',
				'kingdom_category' => 'Feudal',
				'flag' => '',
				'de_jure_empire' => '17',
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'Divan'
            ]);
			//Hejaz
			//Mecca, Medina, Tabuk
			//61
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Principality of Hejaz',
				'kingdom_category' => 'Feudal',
				'flag' => 'fatimid',
				'de_jure_empire' => '17',
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'Divan'
            ]);
			//Khazar
			//Khazaria
			//Aqtobe, Sarkel, Atil, Bolghar, Bilar
			//62
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Khazaria',
				'kingdom_category' => 'Feudal',
				'flag' => 'khazar',
				'de_jure_empire' => '18',
				'law_succession' => 'Yassa',
				'law_assembly' => 'medium',
				'law_court' => 'Sarai'
            ]);
			//Alania
			//Derbent, Azov, Maghas
			//63
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Alania',
				'kingdom_category' => 'Feudal',
				'flag' => 'khazar',
				'de_jure_empire' => '18',
				'law_succession' => 'Yassa',
				'law_assembly' => 'medium',
				'law_court' => 'Sarai'
            ]);
			//Cumania
			//Sighnaq, Sozak, Sibir
			//64
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Cumania',
				'kingdom_category' => 'Feudal',
				'flag' => 'khazar',
				'de_jure_empire' => '18',
				'law_succession' => 'Yassa',
				'law_assembly' => 'medium',
				'law_court' => 'Sarai'
            ]);
			//Seljuk
			//Kwarezm
			//Gurganj, Khiva, Merv
			//65
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Kwarezm',
				'kingdom_category' => 'Feudal',
				'flag' => 'seljuk',
				'de_jure_empire' => '19',
				'law_succession' => 'Yassa',
				'law_assembly' => 'medium',
				'law_court' => 'Sarai'
            ]);
			//Isfahan
			//Isfahan, Shiraz
			//66
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Isfahan',
				'kingdom_category' => 'Feudal',
				'flag' => 'seljuk',
				'de_jure_empire' => '19',
				'law_succession' => 'Yassa',
				'law_assembly' => 'medium',
				'law_court' => 'Sarai'
            ]);
			//Hormuz
			//Hormuz, Kerman
			//67
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Principality of Hormuz',
				'kingdom_category' => 'Feudal',
				'flag' => 'seljuk',
				'de_jure_empire' => '19',
				'law_succession' => 'Yassa',
				'law_assembly' => 'medium',
				'law_court' => 'Sarai'
            ]);
			
    }
}