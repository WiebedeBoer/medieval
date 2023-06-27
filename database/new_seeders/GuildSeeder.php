<?php

use Illuminate\Database\Seeder;

class GuildSeeder extends Seeder
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
		DB::table('guilds')->insert([
			'guild_name' => '',					//total = guilds
			'guild_category' => '',				//Assembly (318), Chivalric (23), Monastic (13), Cleric (6), Merchant (177), Feast (359), Craft (4)
			'guild_subcategory' => '',			//Baron (285), Bishop (19), Patrician (14); 
												//Crusader_Teutonic (1), Crusader_Hospitaller (1), Crusader_Templar(1), Crusader_Common (9),
												//Knight (11); 
												//Monk_Catholic_Canon(5), Monk_Catholic_Mendicant (4), 
												//Monk_Orthodox_Greek (1), Monk_Orthodox_Serbian (1), Monk_Orthodox_Bulgarian (1), 
												//Monk_Muslim_Sufi (1); 
												//Cleric_Catholic (1), 
												//Cleric_Orthodox_Greek (1), Cleric_Orthodox_Serbian (1), Cleric_Orthodox_Bulgarian (1), 
												//Cleric_Muslim_Sunni (1), Cleric_Muslim_Shia (1); 
												//Fair(165); 
												//Master_Smith (47), Master_Tanner (73), Master_Furrier (7), Master_Potter (56), Master_Silk_Weaver (29), Master_Dyer (8), Master_Mariner (49); 
												//Tournament (339), Tavern (5), Hunt_Boar (0), Hunt_Deer (11), Hunt_Falconer (4);
			'empire' => '',						//default = null
			'kingdom' => '',					//default = null
			'duchy' => '',						//default = null
			'county' => '',						//default = null
			'barony' => ''						//default = null
		]);
		
		*/
		
		/*
		//building:										category:	subcategory:
		//
		//Royal_Court| Ducal_Court:						Court		Petty_Kingdom
		//Signoria:										Court		Republic
		//Chancellery & (!Court) & (Archbishop):		Court		Bishopric
		//
		//Cathedral_School | Monastic_School:			University	Scholar
		//
		//Guild_Smith:									Craft		Master_Smith
		//Guild_Tanner:									Craft		Master_Tanner
		//Guild_Furrier:								Craft		Master_Furrier
		//Guild_Potter:									Craft		Master_Potter
		//Guild_Silk:									Craft		Master_Silk_Weaver
		//Guild_Dyer:									Craft		Master_Dyer
		//Arsenal:										Craft		Master_Mariner
		//
		//Tiltyard:										Feast		Tournament
		//Merchant_Bank | Cloth_Hall | Trade_Fair:		Feast		Fair
		//Coaching_Inn:									Feast		Tavern
		//Hunting_Lodge & (Boar):						Feast		Hunt_Boar
		//Hunting_Lodge & (Deer):						Feast		Hunt_Deer
		//Hunting_Lodge & (Falconry):					Feast		Hunt_Falconer

		//
		*/
		
		//faiths
		DB::table('guilds')->insert([
			'guild_name' => 'Catholicism',
			'guild_category' => 'Cleric',
			'guild_subcategory' => 'Cleric_Catholic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);		
		DB::table('guilds')->insert([
			'guild_name' => 'Greek Orthodox',
			'guild_category' => 'Cleric',
			'guild_subcategory' => 'Cleric_Orthodox_Greek',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Bulgarian Orthodox',
			'guild_category' => 'Cleric',
			'guild_subcategory' => 'Cleric_Orthodox_Bulgarian',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Serbian Orthodox',
			'guild_category' => 'Cleric',
			'guild_subcategory' => 'Cleric_Orthodox_Serbian',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Sunni Islam',
			'guild_category' => 'Cleric',
			'guild_subcategory' => 'Cleric_Muslim_Sunni',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Shia Islam',
			'guild_category' => 'Cleric',
			'guild_subcategory' => 'Cleric_Muslim_Shia',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);
		//monastic orders
		DB::table('guilds')->insert([
			'guild_name' => 'Augustinian Order',
			'guild_category' => 'Monastic',
			'guild_subcategory' => 'Monk_Catholic_Mendicant',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Carmelite Order',
			'guild_category' => 'Monastic',
			'guild_subcategory' => 'Monk_Catholic_Mendicant',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dominican Order',
			'guild_category' => 'Monastic',
			'guild_subcategory' => 'Monk_Catholic_Mendicant',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);	
		DB::table('guilds')->insert([
			'guild_name' => 'Franciscan Order',
			'guild_category' => 'Monastic',
			'guild_subcategory' => 'Monk_Catholic_Mendicant',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Benedictine Order',
			'guild_category' => 'Monastic',
			'guild_subcategory' => 'Monk_Catholic_Canon',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);	
		DB::table('guilds')->insert([
			'guild_name' => 'Carthusian Order',
			'guild_category' => 'Monastic',
			'guild_subcategory' => 'Monk_Catholic_Canon',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);		
		DB::table('guilds')->insert([
			'guild_name' => 'Cistercian Order',
			'guild_category' => 'Monastic',
			'guild_subcategory' => 'Monk_Catholic_Canon',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);	
		DB::table('guilds')->insert([
			'guild_name' => 'Norbertine Order',
			'guild_category' => 'Monastic',
			'guild_subcategory' => 'Monk_Catholic_Canon',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Pauline Order',
			'guild_category' => 'Monastic',
			'guild_subcategory' => 'Monk_Catholic_Canon',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);			
		DB::table('guilds')->insert([
			'guild_name' => 'Greek Orthodox',
			'guild_category' => 'Monastic',
			'guild_subcategory' => 'Monk_Orthodox_Greek',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Bulgarian Orthodox',
			'guild_category' => 'Monastic',
			'guild_subcategory' => 'Monk_Orthodox_Bulgarian',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);	
		DB::table('guilds')->insert([
			'guild_name' => 'Serbian Orthodox',
			'guild_category' => 'Monastic',
			'guild_subcategory' => 'Monk_Orthodox_Serbian',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);			
		DB::table('guilds')->insert([
			'guild_name' => 'Sufi Order',
			'guild_category' => 'Monastic',
			'guild_subcategory' => 'Monk_Muslim_Sufi',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);			
		//chivalric orders
		DB::table('guilds')->insert([
			'guild_name' => 'Knights Templar',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Crusader_Templar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);	
		DB::table('guilds')->insert([
			'guild_name' => 'Knights Hospitaller',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Crusader_Hospitaller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Teutonic Knights',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Crusader_Teutonic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);			
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of Saint Anthony',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => '1',
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of Saint Hubert',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => '1',
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Blessed Mary',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Crusader_Common',
			'empire' => null,
			'kingdom' => '2',
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);	
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of Jesus Christ',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Crusader_Common',
			'empire' => null,
			'kingdom' => '2',
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Golden Fleece',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => '4',
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Holy Sepulchre',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Crusader_Common',
			'empire' => null,
			'kingdom' => '5',
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);	
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Holy Ghost',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Crusader_Common',
			'empire' => null,
			'kingdom' => '7',
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Star',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => '7',
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of Saint Michael',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => '7',
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Ermine',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => '8',
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Garter',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => '10',
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);		
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of Montesa',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Crusader_Common',
			'empire' => null,
			'kingdom' => '13',
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of Calatrava',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Crusader_Common',
			'empire' => null,
			'kingdom' => '15',
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Band',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => '15',
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of Santiago',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Crusader_Common',
			'empire' => null,
			'kingdom' => '16',
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of Alcantara',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Crusader_Common',
			'empire' => null,
			'kingdom' => '17',
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of Aviz',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Crusader_Common',
			'empire' => null,
			'kingdom' => '19',
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);	
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Tower and the Sword',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => '19',
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);		
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of Saint George',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => '25',
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Knot',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => '28',
			'duchy' => null,
			'county' => null,
			'barony' => null
		]);
		//Holy Roman Empire
		//Kingdom of Germany
		//Austria
		//Vienna
		//Vienna
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Austria',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '1',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Vienna',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '1',
			'county' => '3',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Vienna',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '1',
			'county' => '3',
			'barony' => ''
		]);
		//Bavaria
		//Donaugau
		//Regensburg
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Bavaria',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '2',
			'county' => null,
			'barony' => ''
		]);
		//Nordgau
		//Nuremberg
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Nuremberg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '2',
			'county' => '7',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Nuremberg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '2',
			'county' => '7',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Nuremberg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '2',
			'county' => '7',
			'barony' => ''
		]);
		//Rottgau
		//Passau
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Passau',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '2',
			'county' => '9',
			'barony' => ''
		]);
		//Westergau
		//Ingolstadt
		DB::table('guilds')->insert([
			'guild_name' => 'University of Ingolstadt',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '2',
			'county' => '11',
			'barony' => ''
		]);
		//Brabant
		//Brabant
		//Brussels
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Brabant',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Brussels',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => '12',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Brussels',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => '12',
			'barony' => ''
		]);
		//Louvain
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Louvain',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Louvain',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => '12',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Louvain',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => '12',
			'barony' => ''
		]);
		//Haspengau
		//Tongeren
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Tongeren',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => '13',
			'barony' => ''
		]);
		//Hennegau
		//Valenciennes
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Valenciennes',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => '14',
			'barony' => ''
		]);
		//Mons
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Mons',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => '14',
			'barony' => ''
		]);
		//Kamerykgau
		//Cambrai
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Cambrai',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => '15',
			'barony' => ''
		]);
		//Toxandria
		//Antwerp
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Antwerp',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => '16',
			'barony' => ''
		]);
		//Turnhout
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Turnhout',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => '16',
			'barony' => ''
		]);	
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Toxandria',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => '16',
			'barony' => ''
		]);
		//Mierlo
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Toxandria',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => '16',
			'barony' => ''
		]);
		//Heeswick
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Toxandria',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => '16',
			'barony' => ''
		]);
		//Herlaar
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Toxandria',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => '16',
			'barony' => ''
		]);
		//Waalwick
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Waalwick',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => '16',
			'barony' => ''
		]);
		//Bosch
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Bosch',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => '16',
			'barony' => ''
		]);
		//Orthen
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Toxandria',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => '16',
			'barony' => ''
		]);
		//Waasgau
		//Ghent
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Ghent',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => '17',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Ghent',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => '17',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Ghent',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => '17',
			'barony' => ''
		]);
		//Carinthia
		//Jauntal
		//Graz
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Graz',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '4',
			'county' => '20',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Graz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '4',
			'county' => '20',
			'barony' => ''
		]);
		//Seckau
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Seckau',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '4',
			'county' => '20',
			'barony' => ''
		]);
		//Kroatengau
		//Velden
		DB::table('guilds')->insert([
			'guild_name' => 'Alder Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '4',
			'county' => '21',
			'barony' => ''
		]);		
		//Sankt Veit
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Croatia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '4',
			'county' => null,
			'barony' => ''
		]);
		//Lavanttal
		//Sankt Andra
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Sankt Andra',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '4',
			'county' => '22',
			'barony' => ''
		]);
		//Lurngau
		//Villach
		DB::table('guilds')->insert([
			'guild_name' => 'Comrade Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '4',
			'county' => '24',
			'barony' => ''
		]);	
		//Millstatt
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Millstatt',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '4',
			'county' => '24',
			'barony' => ''
		]);
		//Carniola
		//Krainmark
		//Krainburg
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Carniola',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '5',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Krainburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '5',
			'county' => '27',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Krainburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '5',
			'county' => '27',
			'barony' => ''
		]);
		//Histria
		//Tergeste
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Tergeste',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '5',
			'county' => '28',
			'barony' => ''
		]);
		//Franconia
		//Grabfeld
		//Fulda
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Fulda',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '6',
			'county' => '29',
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => 'University of Mellrichstadt',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '6',
			'county' => '29',
			'barony' => ''
		]);
		//Gollachgau
		//Rotenburg
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Rotenburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '6',
			'county' => '30',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Rotenburg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '6',
			'county' => '30',
			'barony' => ''
		]);
		//Sulmgau
		//Hall
		DB::table('guilds')->insert([
			'guild_name' => 'Treasure Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '6',
			'county' => '35',
			'barony' => ''
		]);	
		//Waldsassengau
		//Wurzburg
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Franconia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '6',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Wurzburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '6',
			'county' => '37',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Wurzburg',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '6',
			'county' => '37',
			'barony' => ''
		]);
		//Werthem
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Wertheim',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '6',
			'county' => '37',
			'barony' => ''
		]);
		//Frisia
		//Ammergau
		//Oldenburg
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Oldenburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => '38',
			'barony' => ''
		]);
		//Beveland
		//Goes
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Goes',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => '40',
			'barony' => ''
		]);
		//Emsigerland
		//Emden
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Emden',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => '44',
			'barony' => ''
		]);	
		//Fivelgau
		//Appingedam
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Appingedam',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => '45',
			'barony' => ''
		]);
		//Hunsingau
		//Winsum
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Winsum',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => '48',
			'barony' => ''
		]);
		//Kennemerland
		//Amsterdam
		DB::table('guilds')->insert([
			'guild_name' => 'Toll Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => '49',
			'barony' => ''
		]);
		//Maasland
		//Delft
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Delft',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => '50',
			'barony' => ''
		]);
		//Nifterlake
		//Utrecht
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Utrecht',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => '51',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Utrecht',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => '51',
			'barony' => ''
		]);
		//Dorestadt
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Frisia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => null,
			'barony' => ''
		]);
		//Norderland
		//Jever
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Jever',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => '52',
			'barony' => ''
		]);
		//Ostringen
		//Kniphausen
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Jever',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => '53',
			'barony' => ''
		]);
		//Rhineland
		//Leithen
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Leithen',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => '55',
			'barony' => ''
		]);
		//Haag
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Haag',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => '55',
			'barony' => ''
		]);
		//Rustringen
		//Nordenham
		DB::table('guilds')->insert([
			'guild_name' => 'Farmers Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => '56',
			'barony' => ''
		]);
		//Salland
		//Zwolle
		DB::table('guilds')->insert([
			'guild_name' => 'University of Zwolle',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => '57',
			'barony' => ''
		]);
		//Sudergau
		//Starum
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Starum',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => '58',
			'barony' => ''
		]);
		//Teisterbant
		//Arkel
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Teisterbant',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => '59',
			'barony' => ''
		]);
		//Loevestein
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Teisterbant',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => '59',
			'barony' => ''
		]);
		//Gorcum
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Gorcum',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => '59',
			'barony' => ''
		]);
		//Vollenhove
		//Kuinre
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Kuinre',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => '62',
			'barony' => ''
		]);
		//Westergau
		//Froonacker
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => '64',
			'barony' => ''
		]);
		//Westflinge
		//Hoorn
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Hoorn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => '65',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => '65',
			'barony' => ''
		]);		
		//Guelders
		//Hettergau
		//Guelders
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Guelders',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '8',
			'county' => null,
			'barony' => ''
		]);
		//Betuwe
		//Nymegen
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Nymegen',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '8',
			'county' => '68',
			'barony' => ''
		]);
		//Arnhem
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Arnhem',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '8',
			'county' => '68',
			'barony' => ''
		]);
		//Hamaland
		//Deventer
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Deventer',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '8',
			'county' => '70',
			'barony' => ''
		]);	
		//Julich
		//Julichgau
		//Julich
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Julich',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '9',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Julich',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '9',
			'county' => '73',
			'barony' => ''
		]);
		//Duren
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Duren',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '9',
			'county' => '73',
			'barony' => ''
		]);
		//Aachen
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Aachen',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '9',
			'county' => '73',
			'barony' => ''
		]);
		//Limburg
		//Luttichgau
		//Limburg
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Limburg',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '10',
			'county' => null,
			'barony' => ''
		]);
		//Liege
		DB::table('guilds')->insert([
			'guild_name' => 'University of Liege',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '10',
			'county' => '76',
			'barony' => ''
		]);
		//Ardennengau
		//Malmedy
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Malmedy',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '10',
			'county' => '77',
			'barony' => ''
		]);
		//Wiltz
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Wiltz',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '10',
			'county' => '77',
			'barony' => ''
		]);
		//Bouillon
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Bouillon',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '10',
			'county' => '77',
			'barony' => ''
		]);
		//Condrustgau
		//Huy
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Huy',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '10',
			'county' => '78',
			'barony' => ''
		]);
		//Lommegau
		//Namur
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Namur',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '10',
			'county' => '79',
			'barony' => ''
		]);
		//Maasgau
		//Maastricht
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Maastricht',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '10',
			'county' => '80',
			'barony' => ''
		]);
		//Valkenburg
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Teisterbant',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Falconer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '10',
			'county' => '80',
			'barony' => ''
		]);
		//Lorraine
		//Metzgau
		//Metz
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Metz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '11',
			'county' => '81',
			'barony' => ''
		]);
		//Chaumontois
		//Luneville
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '11',
			'county' => '83',
			'barony' => ''
		]);
		//Saargau
		//Sarrebourg
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Sarrebourg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '11',
			'county' => '84',
			'barony' => ''
		]);
		//Saarbrucken
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Saarbrucken',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '11',
			'county' => '84',
			'barony' => ''
		]);
		//Soulossois
		//Neufchateau
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '11',
			'county' => '86',
			'barony' => ''
		]);
		//Toullois
		//Nancy
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Lorraine',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '11',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Nancy',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '11',
			'county' => '87',
			'barony' => ''
		]);
		//Luxembourg
		//Methingau
		//Luxembourg
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Luxembourg',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '12',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Luxembourg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '12',
			'county' => '88',
			'barony' => ''
		]);
		//Verdungau
		//Verdun
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Verdun',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '12',
			'county' => '91',
			'barony' => ''
		]);
		//Saxony
		//Derlingau
		//Brunswick
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Brunswick',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '13',
			'county' => '94',
			'barony' => ''
		]);
		//Haldensleben
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '13',
			'county' => '94',
			'barony' => ''
		]);
		//Eastfalagau
		//Hildesheim
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Hildesheim',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '13',
			'county' => '95',
			'barony' => ''
		]);
		//Gretingau
		//Celle
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Celle',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '13',
			'county' => '96',
			'barony' => ''
		]);
		//Wenzengau
		//Goslar
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Saxony',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '13',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '13',
			'county' => '99',
			'barony' => ''
		]);
		//Harzburg
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '13',
			'county' => '99',
			'barony' => ''
		]);
		//Osterode
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '13',
			'county' => '99',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Osterode',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '13',
			'county' => '99',
			'barony' => ''
		]);
		//Herzberg
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '13',
			'county' => '99',
			'barony' => ''
		]);
		//Styria
		//Traungau
		//Linz
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Linz',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '14',
			'county' => '100',
			'barony' => ''
		]);
		//Styraburg
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Styria',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '14',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Styraburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '14',
			'county' => '100',
			'barony' => ''
		]);
		//Attergau
		//Sankt Margarethen
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Sankt Margarethen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '14',
			'county' => '101',
			'barony' => ''
		]);
		//Ennstal
		//Innsbruck
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Innsbruck',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '14',
			'county' => '102',
			'barony' => ''
		]);
		//Kufstein
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Kufstein',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '14',
			'county' => '102',
			'barony' => ''
		]);
		//Muhlau
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Muhlau',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '14',
			'county' => '102',
			'barony' => ''
		]);
		//Norital
		//Bolzano
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Bolzano',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '14',
			'county' => '104',
			'barony' => ''
		]);
		//Tirol
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Norital',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Falconer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '14',
			'county' => '104',
			'barony' => ''
		]);
		//Reifenstein
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Norital',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Falconer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '14',
			'county' => '104',
			'barony' => ''
		]);
		//Vinschgau
		//Schlandersberg
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Schlandersberg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '14',
			'county' => '105',
			'barony' => ''
		]);
		//Swabia
		//Ortengau
		//Ortenberg
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Ortenberg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '106',
			'barony' => ''
		]);
		//Baden
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '106',
			'barony' => ''
		]);
		//Augstgau
		//Augsburg
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Augsburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '108',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Augsburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '108',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Augsburg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '108',
			'barony' => ''
		]);
		//Wittelsbach
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Wittelsbach',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '108',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Wittelsbach',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '108',
			'barony' => ''
		]);
		//Breisgau
		//Freiburg
		DB::table('guilds')->insert([
			'guild_name' => 'University of Freiburg',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '109',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Freiburg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '109',
			'barony' => ''
		]);
		//Zahringen
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Swabia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => null,
			'barony' => ''
		]);
		//Basel
		DB::table('guilds')->insert([
			'guild_name' => 'University of Basel',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '109',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Basel',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '109',
			'barony' => ''
		]);
		//Neckargau
		//Tubingen
		DB::table('guilds')->insert([
			'guild_name' => 'University of Tubingen',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '113',
			'barony' => ''
		]);
		//Nordgau
		//Strassburg
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Strassburg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '114',
			'barony' => ''
		]);
		//Riesgau
		//Nordlingen
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Nordlingen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Furrier',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '115',
			'barony' => ''
		]);
		//Schwerzgau
		//Hohenzollern
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Hohenzollern',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '116',
			'barony' => ''
		]);
		//Falkenstein
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Schwerzgau',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Falconer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '116',
			'barony' => ''
		]);
		//Hohenstaufen
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Hohenstaufen',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '116',
			'barony' => ''
		]);
		//Biberach
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Biberach',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '116',
			'barony' => ''
		]);
		//Turgau
		//Sankt Gall
		DB::table('guilds')->insert([
			'guild_name' => 'University of Sankt Gall',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '119',
			'barony' => ''
		]);
		//Zurichgau
		//Zurich
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Zurich',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '120',
			'barony' => ''
		]);
		//Winterthur
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Winterthur',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '120',
			'barony' => ''
		]);
		//Kyburg
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Kyburg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '120',
			'barony' => ''
		]);
		//Thuringia
		//Thuringgau
		//Erfurt
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Thuringia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '16',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Erfurt',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '16',
			'county' => '121',
			'barony' => ''
		]);
		//Weimar
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Weimar',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '16',
			'county' => '121',
			'barony' => ''
		]);
		//Eichsfeld
		//Muhlhausen
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Muhlhausen',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '16',
			'county' => '123',
			'barony' => ''
		]);
		//Langwitzgau
		//Arnstadt
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '16',
			'county' => '125',
			'barony' => ''
		]);
		//Liebenstein
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Liebenstein',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '16',
			'county' => '125',
			'barony' => ''
		]);
		//Nabelgau
		//Sondershausen
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Sondershausen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '16',
			'county' => '126',
			'barony' => ''
		]);
		//Ostergau
		//Naumburg
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Naumburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '16',
			'county' => '128',
			'barony' => ''
		]);
		//Zwickaugau
		//Zwickau
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '16',
			'county' => '129',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Zwickau',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '16',
			'county' => '129',
			'barony' => ''
		]);
		//Bremen
		//Largau
		//Bremen
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Bremen',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Bishopric',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Bremen',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
			'county' => '130',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Bremen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
			'county' => '130',
			'barony' => ''
		]);
		//Angerngau
		//Wedinghausen
		DB::table('guilds')->insert([
			'guild_name' => 'University of Wedinghausen',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
			'county' => '132',
			'barony' => ''
		]);
		//Augau
		//Holzminden
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Holzminden',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
			'county' => '133',
			'barony' => ''
		]);
		//Dervegau
		//Rahden
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
			'county' => '136',
			'barony' => ''
		]);
		//Gronegau
		//Osnabruck
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Osnabruck',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
			'county' => '138',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Gronegau',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
			'county' => '138',
			'barony' => ''
		]);
		//Yburg
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Gronegau',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
			'county' => '138',
			'barony' => ''
		]);
		//Marienfeld
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Gronegau',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
			'county' => '138',
			'barony' => ''
		]);
		//Hasegau
		//Cloppenburg
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Cloppenburg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => '139',
			'barony' => ''
		]);
		//Heilangau
		//Horneburg
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
			'county' => '140',
			'barony' => ''
		]);
		//Holsteingau
		//Rendsburg
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Rendsburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
			'county' => '141',
			'barony' => ''
		]);
		//Padergau
		//Paderborn
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Paderborn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
			'county' => '144',
			'barony' => ''
		]);
		//Warburg
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Warburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
			'county' => '144',
			'barony' => ''
		]);
		//Stevergau
		//Ludinghausen
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Ludinghausen',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
			'county' => '145',
			'barony' => ''
		]);
		//Stormarngau
		//Hamburg
		DB::table('guilds')->insert([
			'guild_name' => 'Hanse of Hamburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
			'county' => '146',
			'barony' => ''
		]);
		//Sturmigau
		//Rotenburg
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Rotenburg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
			'county' => '147',
			'barony' => ''
		]);
		//Sudergau
		//Munster
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Munster',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
			'county' => '148',
			'barony' => ''
		]);
		//Warendorf
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Warendorf',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
			'county' => '148',
			'barony' => ''
		]);
		//Westfaliagau
		//Attendorn
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Attendorn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
			'county' => '150',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Attendorn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
			'county' => '150',
			'barony' => ''
		]);
		//Essen
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Essen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
			'county' => '150',
			'barony' => ''
		]);
		//Cologne
		//Gillgau
		//Cologne
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Cologne',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Bishopric',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '18',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Cologne',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '18',
			'county' => '151',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Cologne',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '18',
			'county' => '151',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Cologne',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '18',
			'county' => '151',
			'barony' => ''
		]);
		//Friesheim
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Friesheim',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '18',
			'county' => '151',
			'barony' => ''
		]);
		//Pesch
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Gillgau',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '18',
			'county' => '151',
			'barony' => ''
		]);
		//Auelgau
		//Siegburg
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Siegburg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '18',
			'county' => '152',
			'barony' => ''
		]);
		//Bonngau
		//Bonn
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Bonn',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '18',
			'county' => '153',
			'barony' => ''
		]);
		//Deutzgau
		//Deutz
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Deutzgau',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '18',
			'county' => '154',
			'barony' => ''
		]);
		//Altenberg
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Altenberg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '18',
			'county' => '154',
			'barony' => ''
		]);
		//Magdeburg
		//Nordthuringgau
		//Magdeburg
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Magdeburg',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Bishopric',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '19',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Magdeburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '19',
			'county' => '155',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Magdeburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '19',
			'county' => '155',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Magdeburg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '19',
			'county' => '155',
			'barony' => ''
		]);
		//Haldesleben
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '19',
			'county' => '155',
			'barony' => ''
		]);
		//Balsamgau
		//Stendal
		DB::table('guilds')->insert([
			'guild_name' => 'University of Stendal',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '19',
			'county' => '156',
			'barony' => ''
		]);
		//Hartingau
		//Halberstadt
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Halberstadt',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '19',
			'county' => '158',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Halberstadt',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '19',
			'county' => '158',
			'barony' => ''
		]);
		//Quedlinburg
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Quedlinburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '19',
			'county' => '158',
			'barony' => ''
		]);
		//Hassegau
		//Merseburg
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Merseburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '19',
			'county' => '159',
			'barony' => ''
		]);
		//Halle
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Halle',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '19',
			'county' => '159',
			'barony' => ''
		]);
		//Osterwalde
		//Salzwedel
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Salzwedel',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '19',
			'county' => '160',
			'barony' => ''
		]);
		//Mainz
		//Wormsfeld
		//Mainz
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Mainz',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Bishopric',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Mainz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '162',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Mainz',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '162',
			'barony' => ''
		]);
		//Eibingen
		DB::table('guilds')->insert([
			'guild_name' => 'University of Eibingen',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '162',
			'barony' => ''
		]);
		//Hessengau
		//Kassel
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Kassel',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '164',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Kassel',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '164',
			'barony' => ''
		]);
		//Fritzlar
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Fritzlar',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '164',
			'barony' => ''
		]);
		//Lahngau
		//Limburg
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Limburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '165',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Limburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '165',
			'barony' => ''
		]);
		//Marburg
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Marburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '165',
			'barony' => ''
		]);
		//Weilburg
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Weilburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '165',
			'barony' => ''
		]);
		//Wetzlar
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Wetzlar',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '165',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Wetzlar',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '165',
			'barony' => ''
		]);
		//Lobdengau
		//Heidelberg
		DB::table('guilds')->insert([
			'guild_name' => 'University of Heidelberg',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '166',
			'barony' => ''
		]);
		//Niddagau
		//Nidda
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Nidda',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '169',
			'barony' => ''
		]);
		//Warnsberg
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '169',
			'barony' => ''
		]);
		//Wettergau
		//Frankfurt
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Frankfurt',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '172',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Frankfurt',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '172',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Frankfurt',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '172',
			'barony' => ''
		]);
		//Homburg
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Wettergau',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Falconer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '172',
			'barony' => ''
		]);
		//Kransberg
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Wettergau',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Falconer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '172',
			'barony' => ''
		]);
		//Falkenstein
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Wettergau',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Falconer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '172',
			'barony' => ''
		]);
		//Wurmgau
		//Pforzheim
		DB::table('guilds')->insert([
			'guild_name' => 'University of Pforzheim',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '173',
			'barony' => ''
		]);
		//Salzburg
		//Salzburggau
		//Salzburg
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Salzburg',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Bishopric',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '21',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Salzburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '21',
			'county' => '174',
			'barony' => ''
		]);
		//Berchtesgaden
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Berchtesgaden',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '21',
			'county' => '174',
			'barony' => ''
		]);
		//Chiemgau
		//Falkenstein
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Chiemgau',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Falconer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '21',
			'county' => '175',
			'barony' => ''
		]);
		//Traunstein
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '21',
			'county' => '175',
			'barony' => ''
		]);
		//Baumburg
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Baumburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '21',
			'county' => '175',
			'barony' => ''
		]);
		//Rosenheim
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Chiemgau',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Falconer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '21',
			'county' => '175',
			'barony' => ''
		]);
		//Chiemsee
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Chiemgau',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Falconer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '21',
			'county' => '175',
			'barony' => ''
		]);
		//Pinzgau
		//Zell
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '21',
			'county' => '177',
			'barony' => ''
		]);
		//Saalfelden
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Saalfelden',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '21',
			'county' => '177',
			'barony' => ''
		]);
		//Trier
		//Bitgau
		//Trier
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Trier',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Bishopric',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '22',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Trier',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '22',
			'county' => '179',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Trier',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '22',
			'county' => '179',
			'barony' => ''
		]);
		//Hunsruckgau
		//Ehrenburg
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Ehrenburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '22',
			'county' => '181',
			'barony' => ''
		]);
		//Kingdom of Lombardy
		//Milano
		//Milano
		//Milano
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Milano',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Milano',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '183',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Milano',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '183',
			'barony' => ''
		]);
		//Bergamo
		//Bergamo
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Bergamo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '184',
			'barony' => ''
		]);
		//Brescia
		//Brescia
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Brescia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '185',
			'barony' => ''
		]);
		//Frignana
		//Pavullo
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '188',
			'barony' => ''
		]);
		//Lodi
		//Lodi
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Lodi',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '189',
			'barony' => ''
		]);
		//Mantua
		//Mantua
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Mantua',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '190',
			'barony' => ''
		]);
		//Levata
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '190',
			'barony' => ''
		]);
		//Modena
		//Modena
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Modena',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '191',
			'barony' => ''
		]);
		//Novara
		//Novara
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Novara',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '192',
			'barony' => ''
		]);
		//Chiavenna
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Chiavenna',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '192',
			'barony' => ''
		]);
		//Parma
		//Parma
		DB::table('guilds')->insert([
			'guild_name' => 'University of Parma',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '193',
			'barony' => ''
		]);
		//Pavia
		//Pavia
		DB::table('guilds')->insert([
			'guild_name' => 'University of Pavia',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '194',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Pavia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '194',
			'barony' => ''
		]);
		//Piacenza
		//Piacenza
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Piacenza',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '195',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Piacenza',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '195',
			'barony' => ''
		]);
		//Bobbio
		DB::table('guilds')->insert([
			'guild_name' => 'University of Bobbio',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '195',
			'barony' => ''
		]);
		//Reggio
		//Reggio
		DB::table('guilds')->insert([
			'guild_name' => 'University of Reggio',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '196',
			'barony' => ''
		]);
		//Piedmont
		//Asti
		//Asti
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Asti',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
			'county' => null,
			'barony' => ''
		]);
		//Cuneo
		//Cuneo
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
			'county' => '204',
			'barony' => ''
		]);
		//Susa
		//Novalesa
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
			'county' => '207',
			'barony' => ''
		]);
		//Turino
		//Turino
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Piedmont',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Bishopric',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Turino',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
			'county' => '208',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Turino',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
			'county' => '208',
			'barony' => ''
		]);
		//Vercelli
		//Vercelli
		DB::table('guilds')->insert([
			'guild_name' => 'University of Vercelli',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
			'county' => '209',
			'barony' => ''
		]);
		//Vigevano
		//Vigevano
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Vigevano',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
			'county' => '210',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Vigevano',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
			'county' => '210',
			'barony' => ''
		]);
		//Lomello
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Lomello',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
			'county' => '210',
			'barony' => ''
		]);
		//Tuscany
		//Siena
		//Siena
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Tuscany',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '25',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Siena',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '25',
			'county' => '211',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Siena',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '25',
			'county' => '211',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Siena',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '25',
			'county' => '211',
			'barony' => ''
		]);
		//Grosseto
		//Grosseto
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Grosseto',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '25',
			'county' => '212',
			'barony' => ''
		]);
		//Verona
		//Verona
		//Verona
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Verona',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '26',
			'county' => null,
			'barony' => ''
		]);
		//Padova
		//Padova
		DB::table('guilds')->insert([
			'guild_name' => 'University of Padova',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '26',
			'county' => '216',
			'barony' => ''
		]);
		//Rovigo
		//Rovigo
		DB::table('guilds')->insert([
			'guild_name' => 'University of Rovigo',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '26',
			'county' => '217',
			'barony' => ''
		]);
		//Vicenza
		//Vicenza
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Vicenza',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '26',
			'county' => '218',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Vicenza',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '26',
			'county' => '218',
			'barony' => ''
		]);
		//Bassano
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Bassano',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '26',
			'county' => '218',
			'barony' => ''
		]);
		//Trent
		//Trent
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Trent',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '26',
			'county' => '219',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Trent',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '26',
			'county' => '219',
			'barony' => ''
		]);
		//Aquileia
		//Friuli
		//Aquileia
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Aquileia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Bishopric',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '27',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Aquileia',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '27',
			'county' => '220',
			'barony' => ''
		]);
		//Monfalcone
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Friuli',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Falconer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '27',
			'county' => '220',
			'barony' => ''
		]);
		//Gorizia
		//Gorizia
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Gorizia',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '27',
			'county' => '221',
			'barony' => ''
		]);
		//Florence
		//Florence
		//Florence
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Florence',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Republic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '28',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Florence',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '28',
			'county' => '223',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Florence',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '28',
			'county' => '223',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Florence',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '26',
			'county' => '223',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Florence',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '26',
			'county' => '223',
			'barony' => ''
		]);
		//San Gimignano
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '28',
			'county' => '223',
			'barony' => ''
		]);
		//Arezzo
		//Arezzo
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Arezzo',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '28',
			'county' => '224',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Arezzo',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '28',
			'county' => '224',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Arezzo',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '28',
			'county' => '224',
			'barony' => ''
		]);
		//Perugia
		//Perugia
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Perugia',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '28',
			'county' => '226',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Perugia',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '28',
			'county' => '226',
			'barony' => ''
		]);
		//Genoa
		//Genoa
		//Genoa
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Genoa',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Republic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '29',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Genoa',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '29',
			'county' => '228',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Genoa',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '29',
			'county' => '228',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Genoa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '29',
			'county' => '228',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Genoa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '29',
			'county' => '228',
			'barony' => ''
		]);
		//Lunigiana
		//Pontremoli
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '29',
			'county' => '229',
			'barony' => ''
		]);
		//Noli
		//Noli
		//Noli
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Noli',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Republic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '30',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Noli',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '30',
			'county' => '231',
			'barony' => ''
		]);
		//Albissola
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Albissola',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '30',
			'county' => '231',
			'barony' => ''
		]);
		//Varazze
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Varazze',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '30',
			'county' => '231',
			'barony' => ''
		]);
		//Oneglia
		//Oneglia
		//Oneglia
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Oneglia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '31',
			'county' => null,
			'barony' => ''
		]);
		//Ventimiglia
		//Ventimiglia
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Ventimiglia',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '31',
			'county' => '236',
			'barony' => ''
		]);
		//Lucca
		//Lucca
		//Lucca
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Lucca',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Republic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '32',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Lucca',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '32',
			'county' => '237',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Lucca',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '32',
			'county' => '237',
			'barony' => ''
		]);
		//Barga
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '32',
			'county' => '237',
			'barony' => ''
		]);
		//Pistoia
		//Pistoia
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Pistoia',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '32',
			'county' => '238',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Pistoia',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '32',
			'county' => '238',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Pistoia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '32',
			'county' => '238',
			'barony' => ''
		]);
		//Pescia
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Pescia',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '32',
			'county' => '238',
			'barony' => ''
		]);	
		//Pisa
		//Pisa
		//Pisa
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Pisa',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Republic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '33',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Pisa',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '33',
			'county' => '239',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Pisa',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '33',
			'county' => '239',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Pisa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '33',
			'county' => '239',
			'barony' => ''
		]);
		//Vecchiano
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Pisa',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '33',
			'county' => '239',
			'barony' => ''
		]);
		//Riparbella
		//Riparbella
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Riparbella',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '33',
			'county' => '242',
			'barony' => ''
		]);
		//Venice
		//Dogado
		//Venice
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Venice',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Republic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '34',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Venice',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '34',
			'county' => '244',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Venice',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '34',
			'county' => '244',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Venice',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '34',
			'county' => '244',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Venice',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '34',
			'county' => '244',
			'barony' => ''
		]);
		//Portogruaro
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Portogruaro',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '34',
			'county' => '244',
			'barony' => ''
		]);
		//Mirano
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Mirano',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '34',
			'county' => '244',
			'barony' => ''
		]);
		//Treviso
		//Treviso
		DB::table('guilds')->insert([
			'guild_name' => 'University of Treviso',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '34',
			'county' => '246',
			'barony' => ''
		]);
		//Kingdom of Bohemia
		//Bohemia
		//Prague
		//Prague
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Bohemia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => '3',
			'duchy' => '35',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Prague',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '35',
			'county' => '247',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Prague',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '35',
			'county' => '247',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Prague',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '35',
			'county' => '247',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Prague',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '35',
			'county' => '247',
			'barony' => ''
		]);
		//Bunzlau
		//Bunzlau
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Bunzlau',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '35',
			'county' => '249',
			'barony' => ''
		]);
		//Pardubitz
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Pardubitz',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '35',
			'county' => '249',
			'barony' => ''
		]);
		//Glatzerland
		//Wunschelburg
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Wunschelburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '35',
			'county' => '251',
			'barony' => ''
		]);
		//Koniggratz
		//Braunau
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Braunau',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '35',
			'county' => '252',
			'barony' => ''
		]);
		//Tschaslawsko
		//Kuttenberg
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Kuttenberg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '35',
			'county' => '258',
			'barony' => ''
		]);
		//Lusatia
		//Meissengau
		//Meissen
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Meissen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '36',
			'county' => '259',
			'barony' => ''
		]);
		//Nisangau
		//Leipzig
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Leipzig',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '36',
			'county' => '261',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Leipzig',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '36',
			'county' => '261',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Leipzig',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '36',
			'county' => '261',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Leipzig',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '36',
			'county' => '261',
			'barony' => ''
		]);
		//Lusizigau
		//Senftenberg
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Senftenberg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '36',
			'county' => '262',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Senftenberg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '36',
			'county' => '262',
			'barony' => ''
		]);
		//Lebusa
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Lebusa',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '36',
			'county' => '262',
			'barony' => ''
		]);
		//Selpuligau
		//Lubben
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Lusatia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '36',
			'county' => null,
			'barony' => ''
		]);
		//Moravia
		//Brunn
		//Brunn
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Brunn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '37',
			'county' => '264',
			'barony' => ''
		]);
		//Iglau
		//Iglau
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Iglau',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '37',
			'county' => '265',
			'barony' => ''
		]);	
		//Olmutz
		//Olmutz
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Moravia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '37',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Olmutz',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '37',
			'county' => '266',
			'barony' => ''
		]);
		//Prossnitz
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Prossnitz',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '37',
			'county' => '266',
			'barony' => ''
		]);
		//Sternberg
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Sternberg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '37',
			'county' => '266',
			'barony' => ''
		]);
		//Prerau
		//Leipnik
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '37',
			'county' => '267',
			'barony' => ''
		]);
		//Kremsier
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '37',
			'county' => '267',
			'barony' => ''
		]);
		//Lower Silesia
		//Jauer
		//Jauer
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Jauer',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '38',
			'county' => '270',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Jauer',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '38',
			'county' => '270',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Jauer',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Furrier',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '38',
			'county' => '270',
			'barony' => ''
		]);
		//Grussau
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '38',
			'county' => '270',
			'barony' => ''
		]);
		//Glogau
		//Glogau
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Glogau',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '38',
			'county' => '271',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Glogau',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '38',
			'county' => '271',
			'barony' => ''
		]);
		//Leubus
		//Leubus
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Leubus',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '38',
			'county' => '272',
			'barony' => ''
		]);
		//Liegnitz
		//Liegnitz
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Lower Silesia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '38',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Liegnitz',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '38',
			'county' => '273',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Liegnitz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '38',
			'county' => '273',
			'barony' => ''
		]);
		//Oels
		//Oels
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Oels',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '38',
			'county' => '274',
			'barony' => ''
		]);
		//Schweidnitz
		//Schweidnitz
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Schweidnitz',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '38',
			'county' => '275',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Schweidnitz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '38',
			'county' => '275',
			'barony' => ''
		]);
		//Striegau
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Striegau',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '38',
			'county' => '275',
			'barony' => ''
		]);
		//Schmiedeberg
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Schmiedeberg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '38',
			'county' => '275',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Schmiedeberg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '38',
			'county' => '275',
			'barony' => ''
		]);
		//Hirschberg
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Hirschberg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '38',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Hirschberg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '38',
			'county' => '275',
			'barony' => ''
		]);
		//Upper Silesia
		//Oppeln
		//Oppeln
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Oppeln',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '38',
			'county' => '276',
			'barony' => ''
		]);
		//Krappitz
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Krappitz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '38',
			'county' => '276',
			'barony' => ''
		]);
		//Breslau
		//Breslau
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Upper Silesia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '39',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Breslau',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '39',
			'county' => '277',
			'barony' => ''
		]);
		//Waldenburg
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Breslau',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '39',
			'county' => '277',
			'barony' => ''
		]);
		//Brieg
		//Brieg
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Brieg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '39',
			'county' => '278',
			'barony' => ''
		]);
		//Ratibor
		//Ratibor
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Ratibor',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '39',
			'county' => '279',
			'barony' => ''
		]);
		//Pless
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Pless',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '39',
			'county' => '279',
			'barony' => ''
		]);
		//Teschen
		//Teschen
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Teschen',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '39',
			'county' => '280',
			'barony' => ''
		]);
		//Troppau
		//Troppau
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Troppau',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '39',
			'county' => '281',
			'barony' => ''
		]);
		//Jagerndorf
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Jagerndorf',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '39',
			'county' => '281',
			'barony' => ''
		]);	
		//Kingdom of Burgundy
		//Burgundy
		//Autunais
		//Autun
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Burgundy',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '40',
			'county' => null,
			'barony' => ''
		]);
		//Auxerrois
		//
		DB::table('guilds')->insert([
			'guild_name' => 'University of Auxerre',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '40',
			'county' => '284',
			'barony' => ''
		]);
		//Auxois
		//Avallon
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Avallon',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '40',
			'county' => '285',
			'barony' => ''
		]);
		//Saulieu
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Saulieu',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '40',
			'county' => '285',
			'barony' => ''
		]);
		//Chalonais
		//Chalon
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Chalon',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '40',
			'county' => '288',
			'barony' => ''
		]);
		//Lassois
		//Chatillon
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Chatillon',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '40',
			'county' => '289',
			'barony' => ''
		]);
		//Maconnais
		//Cluny
		DB::table('guilds')->insert([
			'guild_name' => 'University of Cluny',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '40',
			'county' => '290',
			'barony' => ''
		]);
		//Semur
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Semur',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '40',
			'county' => '290',
			'barony' => ''
		]);
		//Nivernais
		//Nevers
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Nevers',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '40',
			'county' => '291',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Nevers',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '40',
			'county' => '291',
			'barony' => ''
		]);
		//Cisjurania
		//Dauphine
		//Grenoble
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Grenoble',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '41',
			'county' => '293',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Grenoble',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '41',
			'county' => '293',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Grenoble',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '41',
			'county' => '293',
			'barony' => ''
		]);
		//Voiron
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Voiron',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '41',
			'county' => '293',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '41',
			'county' => '293',
			'barony' => ''
		]);
		//Chartreuse
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '41',
			'county' => '293',
			'barony' => ''
		]);
		//Forcalquier
		//Forcalquier
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Forcalquier',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '41',
			'county' => '297',
			'barony' => ''
		]);
		//Lyonnais
		//Lyon
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Cisjurania',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '41',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Lyon',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '41',
			'county' => '298',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Lyon',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '41',
			'county' => '298',
			'barony' => ''
		]);
		//Valentinois
		//Valence
		DB::table('guilds')->insert([
			'guild_name' => 'University of Valence',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '41',
			'county' => '300',
			'barony' => ''
		]);
		//Viennois
		//Vienne
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Vienne',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '41',
			'county' => '301',
			'barony' => ''
		]);
		//Transjurania
		//Amosenais
		//Besancon
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Transjurania',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Bishopric',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '42',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Besancon',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '42',
			'county' => '302',
			'barony' => ''
		]);
		//Dole
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Dole',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '42',
			'county' => '302',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Dole',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '42',
			'county' => '302',
			'barony' => ''
		]);
		//Aargau
		//Bern
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Bern',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '42',
			'county' => '303',
			'barony' => ''
		]);
		//Bargenais
		//Solothurn
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Solothurn',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '42',
			'county' => '304',
			'barony' => ''
		]);
		//Lausonnais
		//Orbe
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '42',
			'county' => '305',
			'barony' => ''
		]);
		//Orange
		//Orange
		//Orange
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Orange',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '43',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Orange',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '43',
			'county' => '308',
			'barony' => ''
		]);
		//Venaissin
		//Avignon
		DB::table('guilds')->insert([
			'guild_name' => 'University of Avignon',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '43',
			'county' => '309',
			'barony' => ''
		]);
		//Vivarais
		//Viviers
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Viviers',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '43',
			'county' => '310',
			'barony' => ''
		]);
		//Saint Martin
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '43',
			'county' => '310',
			'barony' => ''
		]);
		//Saint Just
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Saint Just',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '43',
			'county' => '310',
			'barony' => ''
		]);
		//Provence
		//Provence
		//Aix
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Aix',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '44',
			'county' => '311',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Aix',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '44',
			'county' => '311',
			'barony' => ''
		]);
		//Arles
		//Arles
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Provence',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => '4',
			'duchy' => '44',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Arles',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '44',
			'county' => '312',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Arles',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '44',
			'county' => '312',
			'barony' => ''
		]);
		//Montmajour
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '44',
			'county' => '312',
			'barony' => ''
		]);
		//Tarascon
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Arles',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '44',
			'county' => '312',
			'barony' => ''
		]);
		//Baux
		//Baux
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '44',
			'county' => '313',
			'barony' => ''
		]);
		//Marseille
		//Marseille
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Marseille',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '44',
			'county' => '314',
			'barony' => ''
		]);
		//Nice
		//Escarene
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '44',
			'county' => '315',
			'barony' => ''
		]);
		//Saint Etienne
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '44',
			'county' => '315',
			'barony' => ''
		]);
		//Grasse
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Grasse',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '44',
			'county' => '315',
			'barony' => ''
		]);
		//Toulon
		//Toulon
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Toulon',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '44',
			'county' => '316',
			'barony' => ''
		]);
		//Savoy
		//Savoia
		//Chambery
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Savoy',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '45',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Chambery',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '45',
			'county' => '317',
			'barony' => ''
		]);
		//Chablais
		//Thonon
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Thonon',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '45',
			'county' => '319',
			'barony' => ''
		]);
		//Bons
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Chablais',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '45',
			'county' => '319',
			'barony' => ''
		]);
		//Genevanais
		//Geneve
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Geneve',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '45',
			'county' => '320',
			'barony' => ''
		]);
		//Valais
		//Sion
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Sion',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '45',
			'county' => '322',
			'barony' => ''
		]);
		//Papal States
		//Rome
		//Rome
		//Rome
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Rome',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Bishopric',
			'empire' => null,
			'kingdom' => '5',
			'duchy' => '46',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Rome',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '46',
			'county' => '323',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Rome',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '46',
			'county' => '323',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Rome',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '46',
			'county' => '323',
			'barony' => ''
		]);
		//Frosinone
		//Frosinone
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Frosinone',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '46',
			'county' => '324',
			'barony' => ''
		]);
		//Cassino
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '46',
			'county' => '324',
			'barony' => ''
		]);
		//Romagna
		//Ferrara
		//Ferrara
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Romagna',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '47',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Ferrara',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '47',
			'county' => '328',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Ferrara',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '47',
			'county' => '328',
			'barony' => ''
		]);
		//Cento
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Ferrara',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '47',
			'county' => '328',
			'barony' => ''
		]);
		//Comacchio
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Ferrara',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '47',
			'county' => '328',
			'barony' => ''
		]);
		//Argenta
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Ferrara',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '47',
			'county' => '328',
			'barony' => ''
		]);
		//Copparo
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Ferrara',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '47',
			'county' => '328',
			'barony' => ''
		]);
		//Bologna
		//Bologna
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Bologna',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '47',
			'county' => '329',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Bologna',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '47',
			'county' => '329',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Bologna',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '47',
			'county' => '329',
			'barony' => ''
		]);
		//Forli
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Forli',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '47',
			'county' => '329',
			'barony' => ''
		]);
		//Faenza
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Faenza',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '47',
			'county' => '329',
			'barony' => ''
		]);
		//Imola
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Imola',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '47',
			'county' => '329',
			'barony' => ''
		]);
		//San Pietro
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '47',
			'county' => '329',
			'barony' => ''
		]);
		//San Giovanni
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of San Giovanni',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '47',
			'county' => '329',
			'barony' => ''
		]);
		//Ravenna
		//Ravenna
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Ravenna',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '47',
			'county' => '331',
			'barony' => ''
		]);
		//Spoleto
		//Ancona
		//Ancona
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Spoleto',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Republic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '48',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Ancona',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '48',
			'county' => '332',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Ancona',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '48',
			'county' => '332',
			'barony' => ''
		]);
		//Senigallia
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Senigallia',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '48',
			'county' => '332',
			'barony' => ''
		]);
		//Chieti
		//Chieti
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Chieti',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '48',
			'county' => '333',
			'barony' => ''
		]);
		//Lanciano
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Lanciano',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '48',
			'county' => '333',
			'barony' => ''
		]);
		//Spoleto
		//Spoleto
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Spoleto',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '48',
			'county' => '336',
			'barony' => ''
		]);
		//Aquila
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Aquila',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '48',
			'county' => '336',
			'barony' => ''
		]);
		//Urbino
		//Urbino
		//Urbino
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Urbino',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Bishopric',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '49',
			'county' => null,
			'barony' => ''
		]);
		//Pesaro
		//Pesaro
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Pesaro',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '49',
			'county' => '338',
			'barony' => ''
		]);
		//Teutonic Order State
		//Livonia
		//Livland
		//Riga
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Livonia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Bishopric',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '50',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Riga',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '50',
			'county' => '339',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Riga',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '50',
			'county' => '339',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Riga',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '50',
			'county' => '339',
			'barony' => ''
		]);
		//Kirchholm
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Livland',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '50',
			'county' => '339',
			'barony' => ''
		]);
		//Dunamunde
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Livland',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '50',
			'county' => '339',
			'barony' => ''
		]);
		//Kurland
		//Windau
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Windau',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '50',
			'county' => '344',
			'barony' => ''
		]);
		//Wenden
		//Lemsal
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Lemsal',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '50',
			'county' => '347',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Lemsal',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Furrier',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '50',
			'county' => '347',
			'barony' => ''
		]);
		//Estonia
		//Reval
		//Reval
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Estonia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '51',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Reval',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '51',
			'county' => '349',
			'barony' => ''
		]);
		//Narva
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Narva',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '51',
			'county' => '349',
			'barony' => ''
		]);
		//Pernau
		//Pernau
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Pernau',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '51',
			'county' => '350',
			'barony' => ''
		]);
		//Hapsal
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Hapsal',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '51',
			'county' => '350',
			'barony' => ''
		]);
		//Prussia
		//Memelland
		//Rutzau
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '52',
			'county' => '354',
			'barony' => ''
		]);
		//Natangergau
		//Brandenburg
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Brandenburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '52',
			'county' => '356',
			'barony' => ''
		]);
		//Wehlau
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Wehlau',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '52',
			'county' => '356',
			'barony' => ''
		]);
		//Samland
		//Koningsberg
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Prussia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '52',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Koningsberg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '52',
			'county' => '358',
			'barony' => ''
		]);
		//Pomerelia
		//Danzig
		//Danzig
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Pomerelia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '53',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '53',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Danzig',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '53',
			'county' => '359',
			'barony' => ''
		]);
		//Dirschau
		//Dirschau
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Dirschau',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '53',
			'county' => '361',
			'barony' => ''
		]);
		//Karthaus
		//Chmelno
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Chmelno',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '53',
			'county' => '362',
			'barony' => ''
		]);
		//Kulmerland
		//Graudenz
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Graudenz',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '53',
			'county' => '363',
			'barony' => ''
		]);
		//Putzig
		//Putzig
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Putzig',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '53',
			'county' => '365',
			'barony' => ''
		]);
		//Schwetz
		//Schwetz
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '53',
			'county' => '367',
			'barony' => ''
		]);
		//Thorn
		//Thorn
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '53',
			'county' => '368',
			'barony' => ''
		]);
		//Pomerania
		//Gollnow
		//Stepenitz
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '54',
			'county' => '372',
			'barony' => ''
		]);
		//Kessinigau
		//Rostock
		DB::table('guilds')->insert([
			'guild_name' => 'University of Rostock',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '54',
			'county' => '376',
			'barony' => ''
		]);
		//Stralsund
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Stralsund',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '54',
			'county' => '376',
			'barony' => ''
		]);
		//Greifswald
		DB::table('guilds')->insert([
			'guild_name' => 'University of Greifswald',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '54',
			'county' => '376',
			'barony' => ''
		]);
		//Demmin
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '54',
			'county' => '376',
			'barony' => ''
		]);
		//Schivelbein
		//Schivelbein
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '54',
			'county' => '380',
			'barony' => ''
		]);
		//Slupsk
		//Slupsk
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '54',
			'county' => '381',
			'barony' => ''
		]);
		//Stettin
		//Stettin
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Pomerania',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '54',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '54',
			'county' => '',
			'barony' => ''
		]);
		//Brandenburg
		//Havelland
		//Brandenburg
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Brandenburg',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '55',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '55',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Brandenburg',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '55',
			'county' => '385',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Brandenburg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '55',
			'county' => '385',
			'barony' => ''
		]);
		//Linaggau
		//Perleberg
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Perleberg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '55',
			'county' => '387',
			'barony' => ''
		]);
		//Uckermark
		//Rowenburg
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '55',
			'county' => '390',
			'barony' => ''
		]);
		//Mecklenburg
		//Obotritegau
		//Mecklenburg
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Mecklenburg',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '56',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '56',
			'county' => '',
			'barony' => ''
		]);
		//Wismar
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Wismar',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '56',
			'county' => '392',
			'barony' => ''
		]);	
		//Wagrigau
		//Lubeck
		DB::table('guilds')->insert([
			'guild_name' => 'Hanse of Lubeck',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '56',
			'county' => '394',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Lubeck',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '56',
			'county' => '394',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Lubeck',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '56',
			'county' => '394',
			'barony' => ''
		]);
		//Preetz
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Preetz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '56',
			'county' => '394',
			'barony' => ''
		]);
		//Crown of France
		//Kingdom of France
		//Anjou
		//Anjou
		//Angers
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Anjou',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '57',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Angers',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '57',
			'county' => '395',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Angers',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '57',
			'county' => '395',
			'barony' => ''
		]);
		//Saumur
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Saumur',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '57',
			'county' => '395',
			'barony' => ''
		]);
		//Maine
		//Laval
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Laval',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '57',
			'county' => '396',
			'barony' => ''
		]);	
		//Aquitaine
		//Bordelais
		//Bordeaux
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Aquitaine',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '58',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '58',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Bordeaux',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '58',
			'county' => '400',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Bordeaux',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '58',
			'county' => '400',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Bordeaux',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '58',
			'county' => '400',
			'barony' => ''
		]);
		//Angoumois
		//Angouleme
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Angouleme',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '58',
			'county' => '402',
			'barony' => ''
		]);
		//Saint Michel
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '58',
			'county' => '402',
			'barony' => ''
		]);
		//Limousin
		//Ventadour
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '58',
			'county' => '404',
			'barony' => ''
		]);
		//Perigord
		//Perigueux
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Perigueux',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '58',
			'county' => '406',
			'barony' => ''
		]);
		//Saintogne
		//Taillebourg
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Taillebourg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '58',
			'county' => '407',
			'barony' => ''
		]);
		//Auvergne
		//Brioude
		//Brioude
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '59',
			'county' => '410',
			'barony' => ''
		]);
		//Saint Ferreol
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '59',
			'county' => '410',
			'barony' => ''
		]);
		//Sauveterre
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Sauveterre',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '59',
			'county' => '410',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Sauveterre',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '59',
			'county' => '410',
			'barony' => ''
		]);
		//Clermont
		//Clermont
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Auvergne',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '59',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '59',
			'county' => '',
			'barony' => ''
		]);
		//Thiers
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Thiers',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '59',
			'county' => '412',
			'barony' => ''
		]);
		//Forez
		//Saint Etienne
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '59',
			'county' => '413',
			'barony' => ''
		]);
		//Murat
		//Murat
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Murat',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '59',
			'county' => '414',
			'barony' => ''
		]);
		//Saint Flour
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Saint Flour',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '59',
			'county' => '414',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Saint Flour',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '59',
			'county' => '414',
			'barony' => ''
		]);
		//Berry
		//Berry
		//Bourges
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Berry',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '60',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '60',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Bourges',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '60',
			'county' => '415',
			'barony' => ''
		]);
		//Bourbonnais
		//Bourbonnais
		//Bourbon
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Bourbonnais',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '61',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '61',
			'county' => '',
			'barony' => ''
		]);
		//Gascony
		//Armagnac
		//Eauze
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Eauze',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '62',
			'county' => '419',
			'barony' => ''
		]);
		//Astarac
		//Mirande
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Mirande',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '62',
			'county' => '420',
			'barony' => ''
		]);
		//Auch
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Gascony',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '62',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '62',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Auch',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '62',
			'county' => '420',
			'barony' => ''
		]);
		//Bigorre
		//Maubourguet
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '62',
			'county' => '422',
			'barony' => ''
		]);
		//Comminges
		//Luchon
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Luchon',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '62',
			'county' => '423',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '62',
			'county' => '423',
			'barony' => ''
		]);
		//Champagne
		//Remois
		//Reims
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Champagne',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Bishopric',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '63',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '63',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Reims',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '63',
			'county' => '429',
			'barony' => ''
		]);
		//Brenois
		//Dienville
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '63',
			'county' => '430',
			'barony' => ''
		]);
		//Chalonnais
		//Vitry
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Vitry',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '63',
			'county' => '431',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Vitry',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '63',
			'county' => '431',
			'barony' => ''
		]);
		//Meaux
		//Coulommiers
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Coulommiers',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '63',
			'county' => '434',
			'barony' => ''
		]);
		//Crecy
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Crecy',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '63',
			'county' => '434',
			'barony' => ''
		]);
		//Provins
		//Provins
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Provins',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '63',
			'county' => '436',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '63',
			'county' => '436',
			'barony' => ''
		]);
		//Senois
		//Brienon
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Brienon',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '63',
			'county' => '438',
			'barony' => ''
		]);
		//Mussy
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Mussy',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '63',
			'county' => '438',
			'barony' => ''
		]);
		//Troyes
		//Troyes
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Troyes',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '63',
			'county' => '439',
			'barony' => ''
		]);
		//Clairvaux
		DB::table('guilds')->insert([
			'guild_name' => 'University of Clairvaux',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '63',
			'county' => '439',
			'barony' => ''
		]);
		//Francia
		//Pay de France
		//Paris
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Francia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => '7',
			'duchy' => '64',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Paris',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '440',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Paris',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '440',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Paris',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '440',
			'barony' => ''
		]);
		//Ecouen
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Ecouen',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '440',
			'barony' => ''
		]);
		//Beauvaisis
		//Beauvais
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of ',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '441',
			'barony' => ''
		]);
		//Brie
		//Lagny
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Lagny',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '443',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Lagny',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '443',
			'barony' => ''
		]);	
		//Gatinais
		//Landon
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Landon',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '445',
			'barony' => ''
		]);	
		//Hurepoix
		//Corbeil
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Corbeil',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '446',
			'barony' => ''
		]);
		//Dourdan
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Dourdan',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '446',
			'barony' => ''
		]);
		//Senlis
		//Ressons
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Ressons',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '448',
			'barony' => ''
		]);	
		//Gournay
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Gournay',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '448',
			'barony' => ''
		]);
		//Vexin
		//Pontoise
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Pontoise',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '451',
			'barony' => ''
		]);
		//Normandy
		//Roumois
		//Rouen
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Normandy',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Rouen',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '452',
			'barony' => ''
		]);
		//Alencon
		//Alencon
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Alencon',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '453',
			'barony' => ''
		]);
		//Argentan
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Argentan',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '453',
			'barony' => ''
		]);
		//Bayeux
		//Bayeux
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Bayeux',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '455',
			'barony' => ''
		]);
		//Caen
		DB::table('guilds')->insert([
			'guild_name' => 'University of Caen',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '455',
			'barony' => ''
		]);
		//Coutances
		//Saint Lo
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Saint Lo',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '457',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Saint Lo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '457',
			'barony' => ''
		]);
		//Eu
		//Dieppe
		DB::table('guilds')->insert([
			'guild_name' => 'University of Dieppe',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '459',
			'barony' => ''
		]);
		//Lisieux
		//Saint Michel
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '460',
			'barony' => ''
		]);
		//Orleanais
		//Orleanais
		//Orleans
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Orleanais',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '66',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '66',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Orleans',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '66',
			'county' => '462',
			'barony' => ''
		]);
		//Chartres
		//Chartres
		DB::table('guilds')->insert([
			'guild_name' => 'University of Chartres',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '66',
			'county' => '464',
			'barony' => ''
		]);
		//Dunois
		//Chateaudun
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '66',
			'county' => '465',
			'barony' => ''
		]);
		//Dreux
		//Nonancourt
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Nonancourt',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '66',
			'county' => '466',
			'barony' => ''
		]);
		//Etampois
		//Etampes
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Etampes',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '66',
			'county' => '467',
			'barony' => ''
		]);
		//Picardy
		//Artois
		//Arras
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Arras',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '469',
			'barony' => ''
		]);
		//Saint Omer
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Saint Omer',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '469',
			'barony' => ''
		]);
		//Bethune
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Bethune',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '469',
			'barony' => ''
		]);
		//Amienois
		//Amiens
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Picardy',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Amiens',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '470',
			'barony' => ''
		]);
		//Flanders
		//Bruges
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Bruges',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '472',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Kontor of Bruges Easterling House',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '472',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Bruges',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '472',
			'barony' => ''
		]);
		//Ypres
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Ypres',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '472',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Ypres',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '472',
			'barony' => ''
		]);
		//Lille
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Lille',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '472',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Lille',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '472',
			'barony' => ''
		]);		
		//Douai
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Douai',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '472',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Douai',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '472',
			'barony' => ''
		]);
		//Poperinge
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Poperinge',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '472',
			'barony' => ''
		]);
		//Laonnais
		//Laon
		DB::table('guilds')->insert([
			'guild_name' => 'University of Laon',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '474',
			'barony' => ''
		]);
		//Tournais
		//Tournai
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Tournai',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '479',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Tournai',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '479',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Tournai',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '479',
			'barony' => ''
		]);
		//Courtrai
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Courtrai',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '479',
			'barony' => ''
		]);
		//Vermandois
		//Saint Quentin
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Saint Quentin',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '480',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Saint Quentin',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '480',
			'barony' => ''
		]);
		//Poitou
		//Poitou
		//Poitiers
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Poitou',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Poitiers',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => '481',
			'barony' => ''
		]);
		//Parthenay
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => '481',
			'barony' => ''
		]);
		//Niort
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Niort',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => '481',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Niort',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => '481',
			'barony' => ''
		]);
		//Briancais
		//Brioux
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Brioux',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => '483',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => '483',
			'barony' => ''
		]);
		//Chatellerault
		//Chatellerault
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Chatellerault',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => '484',
			'barony' => ''
		]);
		//Clairvaux
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Clairvaux',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => '484',
			'barony' => ''
		]);
		//Saint Michel
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => '484',
			'barony' => ''
		]);
		//Marche
		//Bellac
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Bellac',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => '485',
			'barony' => ''
		]);
		//Thouarsais
		//Fontenay
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Fontenay',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => '486',
			'barony' => ''
		]);
		//Toulouse
		//Toulouse
		//Toulouse
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Toulouse',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Bishopric',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Toulouse',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '488',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Toulouse',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '488',
			'barony' => ''
		]);
		//Carcasonne
		//Castelnaudary
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '490',
			'barony' => ''
		]);
		//Foix
		//Tarascon
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Tarascon',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '491',
			'barony' => ''
		]);
		//Gevaudan
		//Langogne
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Langogne',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '492',
			'barony' => ''
		]);
		//Melgueil
		//Montpellier
		DB::table('guilds')->insert([
			'guild_name' => 'University of Montpellier',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '493',
			'barony' => ''
		]);
		//Millau
		//Millau
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '494',
			'barony' => ''
		]);
		//Narbonne
		//Narbonne
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Narbonne',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '495',
			'barony' => ''
		]);
		//Lodeve
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Lodeve',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '495',
			'barony' => ''
		]);
		//Agde
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Agde',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '495',
			'barony' => ''
		]);
		//Quercy
		//Cahors
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Cahors',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '497',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Cahors',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '497',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Cahors',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '497',
			'barony' => ''
		]);
		//Gourdon
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '497',
			'barony' => ''
		]);
		//Figeac
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '497',
			'barony' => ''
		]);
		//Cabrerets
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '497',
			'barony' => ''
		]);
		//Rouergue
		//Villefranche
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '498',
			'barony' => ''
		]);
		//Kingdom of Brittany
		//Brittany
		//
		//Quimper
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Quimper',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '70',
			'county' => '500',
			'barony' => ''
		]);
		//Ach
		//Ach
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Ach',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '70',
			'county' => '501',
			'barony' => ''
		]);
		//Leon
		//Morlaix
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Morlaix',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '70',
			'county' => '503',
			'barony' => ''
		]);
		//Vannais
		//Vannes
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Brittany',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => '8',
			'duchy' => '70',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '70',
			'county' => '',
			'barony' => ''
		]);
		//Domnonee
		//Penthievre
		//Guingamp
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Domnonee',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '71',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '71',
			'county' => null,
			'barony' => ''
		]);
		//Chatelaudren
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Chatelaudren',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '71',
			'county' => '506',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Chatelaudren',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '71',
			'county' => '506',
			'barony' => ''
		]);
		//Retz
		//Retz
		//Reze
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Retz',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '72',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '72',
			'county' => '',
			'barony' => ''
		]);
		//Nantais
		//Nantes
		DB::table('guilds')->insert([
			'guild_name' => 'University of Nantes',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '72',
			'county' => '510',
			'barony' => ''
		]);
		//Rennais
		//Fougeres
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Fougeres',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '72',
			'county' => '511',
			'barony' => ''
		]);
		//Crown of Britain
		//High Kingdom of Ireland
		//Connacht
		//Galway
		//Galway
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Connacht',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '73',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '73',
			'county' => '',
			'barony' => ''
		]);
		//Leinster
		//Carlow
		//Carlow
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Leinster',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '74',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '74',
			'county' => '',
			'barony' => ''
		]);
		//Kildare
		//Moone
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '74',
			'county' => '517',
			'barony' => ''
		]);
		//Meath
		//Meath
		//Tara
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Meath',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => '9',
			'duchy' => '75',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '75',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Dublin',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '75',
			'county' => '524',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Dublin',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '75',
			'county' => '524',
			'barony' => ''
		]);
		//Munster
		//Clare
		//Ennis
		DB::table('guilds')->insert([
			'guild_name' => 'University of Ennis',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '76',
			'county' => '528',
			'barony' => ''
		]);
		//Bunratty
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Bunratty',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '76',
			'county' => '528',
			'barony' => ''
		]);
		//Cork
		//Cork
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Munster',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '76',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '76',
			'county' => '',
			'barony' => ''
		]);
		//Buttevant
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Buttevant',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '76',
			'county' => '529',
			'barony' => ''
		]);
		//Limerick
		//Limerick
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Limerick',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '76',
			'county' => '531',
			'barony' => ''
		]);
		//Ulster
		//Armagh
		//Armagh
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Ulster',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '77',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '77',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Armagh',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '77',
			'county' => '533',
			'barony' => ''
		]);
		//Kingdom of England
		//East Anglia
		//Norfolk
		//Norwich
		DB::table('guilds')->insert([
			'guild_name' => 'Court of East Anglia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '78',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Norwich',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '78',
			'county' => '543',
			'barony' => ''
		]);
		//Thetford
		DB::table('guilds')->insert([
			'guild_name' => 'University of Thetford',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '78',
			'county' => '543',
			'barony' => ''
		]);
		//Aylsham
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Aylsham',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '78',
			'county' => '543',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Aylsham',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '78',
			'county' => '543',
			'barony' => ''
		]);
		//Yarmouth
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Yarmouth',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '78',
			'county' => '543',
			'barony' => ''
		]);
		//Lynn
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Lynn',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '78',
			'county' => '543',
			'barony' => ''
		]);
		//Suffolk
		//Ipswich
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Ipswich',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '78',
			'county' => '544',
			'barony' => ''
		]);
		//Lowestoft
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Lowestoft',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '78',
			'county' => '544',
			'barony' => ''
		]);
		//Sudbury
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Sudbury',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '78',
			'county' => '544',
			'barony' => ''
		]);
		//Essex
		//Essex
		//Colchester
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Colchester',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '79',
			'county' => '545',
			'barony' => ''
		]);
		//Hadleigh
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Hadleigh',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '79',
			'county' => '545',
			'barony' => ''
		]);
		//Walden
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Walden',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '79',
			'county' => '545',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Walden',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '79',
			'county' => '545',
			'barony' => ''
		]);
		//Hertfordshire
		//Berkhamsted
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Berkhamsted',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '79',
			'county' => '546',
			'barony' => ''
		]);
		//Langley
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '79',
			'county' => '546',
			'barony' => ''
		]);
		//Middlesex
		//London
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Essex',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => '10',
			'duchy' => '79',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Kontor of London Steelyard',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '79',
			'county' => '547',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of London',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '79',
			'county' => '547',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of London',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '79',
			'county' => '547',
			'barony' => ''
		]);
		//Kensington
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Kensington',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '79',
			'county' => '547',
			'barony' => ''
		]);
		//Westminster
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Westminster',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '79',
			'county' => '547',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Westminster',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '79',
			'county' => '547',
			'barony' => ''
		]);
		//Hwicce
		//Gloucestershire
		//Tewkesbury
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '80',
			'county' => '548',
			'barony' => ''
		]);
		//Wotton
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '80',
			'county' => '548',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Wotton',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '80',
			'county' => '548',
			'barony' => ''
		]);
		//Arlingham
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Arlingham',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '80',
			'county' => '548',
			'barony' => ''
		]);
		//Warwickshire
		//Warwick
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Warwick',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '80',
			'county' => '549',
			'barony' => ''
		]);
		//Alcester
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Alcester',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '80',
			'county' => '549',
			'barony' => ''
		]);
		//Kenilworth
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Kenilworth',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '80',
			'county' => '549',
			'barony' => ''
		]);
		//Coventry
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Coventry',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '80',
			'county' => '549',
			'barony' => ''
		]);
		//Worcestershire
		//Worcester
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Hwicce',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '80',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '80',
			'county' => '',
			'barony' => ''
		]);
		//Kent
		//Aylesfordshire
		//Ashford
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Ashford',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '81',
			'county' => '552',
			'barony' => ''
		]);
		//Boxley
		DB::table('guilds')->insert([
			'guild_name' => 'University of Boxley',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '81',
			'county' => '552',
			'barony' => ''
		]);
		//Dartford
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '81',
			'county' => '552',
			'barony' => ''
		]);
		//Kent
		//Canterbury
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Kent',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '81',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Canterbury',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '81',
			'county' => '553',
			'barony' => ''
		]);
		//Sandwich
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '81',
			'county' => '553',
			'barony' => ''
		]);
		//Leeds
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Leeds',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '81',
			'county' => '553',
			'barony' => ''
		]);
		//Shepwayshire
		//Hythe
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Hythe',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '81',
			'county' => '554',
			'barony' => ''
		]);
		//Folkestone
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Folkestone',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '81',
			'county' => '554',
			'barony' => ''
		]);
		//Lindsey
		//Derbyshire
		//Derby
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Derby',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => '555',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Derby',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => '555',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Derby',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => '555',
			'barony' => ''
		]);
		//Peveril
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Peveril',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => '555',
			'barony' => ''
		]);
		//Leicestershire
		//Leicester
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Leicester',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => '556',
			'barony' => ''
		]);
		//Breedon
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => '556',
			'barony' => ''
		]);
		//Lincolnshire
		//Lincoln
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Lindsey',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Lincoln',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => '557',
			'barony' => ''
		]);
		//Stamford
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Stamford',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => '557',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Stamford',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => '557',
			'barony' => ''
		]);
		//Tattershall
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => '557',
			'barony' => ''
		]);
		//Nothinghamshire
		//Newark
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Newark',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => '558',
			'barony' => ''
		]);
		//Mansfield
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Mansfield',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => '558',
			'barony' => ''
		]);
		//Southwell
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Southwell',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => '558',
			'barony' => ''
		]);		
		//Mercia
		//Cheshire
		//Chester
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Chester',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '83',
			'county' => '560',
			'barony' => ''
		]);
		//Aldford
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '83',
			'county' => '560',
			'barony' => ''
		]);
		//Beeston
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '83',
			'county' => '560',
			'barony' => ''
		]);
		//Nantwich
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Nantwich',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '83',
			'county' => '560',
			'barony' => ''
		]);
		//Herefordshire
		//Hereford
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Hereford',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hereford',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '83',
			'county' => '561',
			'barony' => ''
		]);
		//Goodrich
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '83',
			'county' => '561',
			'barony' => ''
		]);
		//Leominster
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Leominster',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '83',
			'county' => '561',
			'barony' => ''
		]);
		//Ledbury
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '83',
			'county' => '561',
			'barony' => ''
		]);
		//Shropshire
		//Ludlow
		DB::table('guilds')->insert([
			'guild_name' => 'University of Ludlow',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '83',
			'county' => '562',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Ludlow',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '83',
			'county' => '562',
			'barony' => ''
		]);
		//Lilleshall
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Lilleshall',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '83',
			'county' => '562',
			'barony' => ''
		]);
		//Staffordshire
		//Stafford
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Stafford',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '83',
			'county' => '563',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Stafford',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '83',
			'county' => '563',
			'barony' => ''
		]);
		//Lichfield
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Lichfield',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '83',
			'county' => '563',
			'barony' => ''
		]);
		//Tamworth
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Mercia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '83',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '83',
			'county' => '',
			'barony' => ''
		]);
		//Mid Anglia
		//Bedfordshire
		//Tilsworth
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => '564',
			'barony' => ''
		]);
		//Dunstable
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Dunstable',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => '564',
			'barony' => ''
		]);
		//Buckinghamshire
		//Buckingham
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Buckingham',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => '565',
			'barony' => ''
		]);
		//Cublington
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => '565',
			'barony' => ''
		]);
		//Cambridgeshire
		//Cambridge
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Cambridge',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => '566',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Cambridge',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => '566',
			'barony' => ''
		]);
		//Peterborough
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Peterborough',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => '566',
			'barony' => ''
		]);
		//Huntingdonshire
		//Huntingdon
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => '567',
			'barony' => ''
		]);
		//Saint Ives
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => '567',
			'barony' => ''
		]);
		//Stilton
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => '567',
			'barony' => ''
		]);
		//Northamptonshire
		//Northampton
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Mid Anglia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Northampton',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => '568',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Northampton',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => '568',
			'barony' => ''
		]);
		//Oxfordshire
		//Oxford
		DB::table('guilds')->insert([
			'guild_name' => 'University of Oxford',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => '569',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Oxford',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => '569',
			'barony' => ''
		]);
		//Northumbria
		//Burghshire
		//Wetherby
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Wetherby',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '571',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '571',
			'barony' => ''
		]);
		//Cumberland
		//Appleby
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Appleby',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '572',
			'barony' => ''
		]);
		//Workington
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Workington',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '572',
			'barony' => ''
		]);
		//Durham
		//Durham
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Durham',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '573',
			'barony' => ''
		]);
		//Jarrow
		DB::table('guilds')->insert([
			'guild_name' => 'University of Jarrow',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '573',
			'barony' => ''
		]);
		//Hallamshire
		//Sheffield
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '574',
			'barony' => ''
		]);
		//Howdenshire
		//Asselby
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '576',
			'barony' => ''
		]);
		//Northumberland
		//Alnwick
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Alnwick',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '577',
			'barony' => ''
		]);
		//Richmondshire
		//Wensley
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '579',
			'barony' => ''
		]);
		//Yorkshire
		//York
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Northumbria',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of York',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '580',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of York',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '580',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of York',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '580',
			'barony' => ''
		]);
		//Fountains
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Fountains',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '580',
			'barony' => ''
		]);
		//Ripon
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Ripon',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '580',
			'barony' => ''
		]);	
		//Scarborough
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Scarborough',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '580',
			'barony' => ''
		]);
		//Sussex
		//Chichestershire
		//Chichester
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Sussex',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '86',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '86',
			'county' => null,
			'barony' => ''
		]);
		//Leweshire
		//Kingston
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '86',
			'county' => '584',
			'barony' => ''
		]);
		//Sussex
		//Hastings
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Hastings',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '86',
			'county' => '586',
			'barony' => ''
		]);
		//Wessex
		//Berkshire
		//Reading
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '87',
			'county' => '587',
			'barony' => ''
		]);
		//Slough
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '87',
			'county' => '587',
			'barony' => ''
		]);
		//Windsor
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Windsor',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '87',
			'county' => '587',
			'barony' => ''
		]);
		//Dorsetshire
		//Dorchester
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Dorchester',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '588',
			'barony' => ''
		]);	
		//Hampshire
		//Winchester
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Wessex',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '87',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Winchester',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '87',
			'county' => '589',
			'barony' => ''
		]);
		//Southampton
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Southampton',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '87',
			'county' => '589',
			'barony' => ''
		]);
		//Surrey
		//Guildford
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Guildford',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '87',
			'county' => '591',
			'barony' => ''
		]);
		//Wiltshire
		//Trowbridge
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Trowbridge',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '87',
			'county' => '592',
			'barony' => ''
		]);			
		//Principality of Wales
		//Cornwall
		//Cornwall
		//Launceston
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Cornwall',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '88',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '88',
			'county' => '',
			'barony' => ''
		]);
		//Devonshire
		//Okehampton
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Okehampton',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '88',
			'county' => '594',
			'barony' => ''
		]);
		//Axminster
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Axminster',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '88',
			'county' => '594',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '88',
			'county' => '594',
			'barony' => ''
		]);
		//Plymouth
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Plymouth',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '88',
			'county' => '594',
			'barony' => ''
		]);	
		//Barnstaple
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Barnstaple',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '88',
			'county' => '594',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '88',
			'county' => '594',
			'barony' => ''
		]);
		//Tavistock
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Tavistock',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '88',
			'county' => '594',
			'barony' => ''
		]);
		//Totnes
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Totnes',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '88',
			'county' => '594',
			'barony' => ''
		]);
		//Dyfed
		//Cardiganshire
		//Cardigan
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '89',
			'county' => '595',
			'barony' => ''
		]);
		//Llanbadarn
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '89',
			'county' => '595',
			'barony' => ''
		]);
		//Carmarthenshire
		//Carmarthen
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Dyfed',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '89',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '89',
			'county' => '',
			'barony' => ''
		]);
		//Llandovery
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '89',
			'county' => '596',
			'barony' => ''
		]);
		//Pembrokeshire
		//Pembroke
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Pembroke',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '89',
			'county' => '597',
			'barony' => ''
		]);
		//Haverford
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Haverford',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '89',
			'county' => '597',
			'barony' => ''
		]);
		//Tenby
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Tenby',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '89',
			'county' => '597',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Tenby',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '89',
			'county' => '597',
			'barony' => ''
		]);
		//Templeton
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Pembrokeshire',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '89',
			'county' => '597',
			'barony' => ''
		]);
		//Gwent
		//Glamorganshire
		//Ewenny
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Ewenny',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '90',
			'county' => '598',
			'barony' => ''
		]);
		//Penrhys
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '90',
			'county' => '598',
			'barony' => ''
		]);
		//Monmouthshire
		//Dingestow
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '90',
			'county' => '599',
			'barony' => ''
		]);
		//Llangibby
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '90',
			'county' => '599',
			'barony' => ''
		]);
		//Skenfrith
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '90',
			'county' => '599',
			'barony' => ''
		]);
		//Trellech
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '90',
			'county' => '599',
			'barony' => ''
		]);
		//Penhow
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '90',
			'county' => '599',
			'barony' => ''
		]);
		//Caerwent
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Gwent',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '90',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '90',
			'county' => '',
			'barony' => ''
		]);
		//Gwynedd
		//Anglesey
		//Llanfaes
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Llanfaes',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '91',
			'county' => '600',
			'barony' => ''
		]);
		//Caernarvonshire
		//Caernarfon
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Gwynedd',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => '11',
			'duchy' => '91',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '91',
			'county' => '',
			'barony' => ''
		]);
		//Conwy
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Conwy',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '91',
			'county' => '601',
			'barony' => ''
		]);
		//Flintshire
		//Ewloe
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '91',
			'county' => '603',
			'barony' => ''
		]);
		//Hawarden
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '91',
			'county' => '603',
			'barony' => ''
		]);
		//Mold
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Mold',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '91',
			'county' => '603',
			'barony' => ''
		]);
		//Powys
		//Brecknockshire
		//Brecon
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Brecon',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '92',
			'county' => '604',
			'barony' => ''
		]);
		//Montgomeryshire
		//Powis
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Powys',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '92',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '92',
			'county' => '',
			'barony' => ''
		]);
		//Kingdom of Scotland
		//Alba
		//Aberdeenshire
		//Aberdeen
		DB::table('guilds')->insert([
			'guild_name' => 'University of Aberdeen',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '93',
			'county' => '607',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Aberdeen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '93',
			'county' => '607',
			'barony' => ''
		]);
		//Fife
		//Saint Andrews
		DB::table('guilds')->insert([
			'guild_name' => 'University of Saint Andrews',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '93',
			'county' => '610',
			'barony' => ''
		]);
		//Kincardineshire
		//Kincardine
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '93',
			'county' => '612',
			'barony' => ''
		]);
		//Perthshire
		//Perth
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Alba',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '93',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '93',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Perth',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '93',
			'county' => '614',
			'barony' => ''
		]);
		//Ruthven
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Ruthven',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '93',
			'county' => '614',
			'barony' => ''
		]);
		//Bernicia
		//Berwickshire
		//Berwick
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Berwick',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '94',
			'county' => '615',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Berwick',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '94',
			'county' => '615',
			'barony' => ''
		]);
		//Edinburghshire
		//Edinburgh
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Bernicia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => '12',
			'duchy' => '94',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '94',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Edinburgh',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '94',
			'county' => '616',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '94',
			'county' => '616',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Edinburgh',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '94',
			'county' => '616',
			'barony' => ''
		]);
		//Dalradia
		//Argyll
		//Dunadd
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Dalradia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '95',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '95',
			'county' => '',
			'barony' => ''
		]);
		//Mann
		//Ballaugh
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '95',
			'county' => '622',
			'barony' => ''
		]);
		//Fortriu
		//Elginshire
		//Elgin
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Elgin',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '96',
			'county' => '624',
			'barony' => ''
		]);
		//Nairnshire
		//Nairn
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Fortriu',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '96',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '96',
			'county' => '',
			'barony' => ''
		]);
		//Sutherland
		//Durness
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '96',
			'county' => '627',
			'barony' => ''
		]);
		//Galloway
		//Wigtownshire
		//Dunragit
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Galloway',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '97',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '97',
			'county' => '',
			'barony' => ''
		]);
		//Gododdin
		//Dumfriesshire
		//Dumfries
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Gododdin',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '98',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '98',
			'county' => '',
			'barony' => ''
		]);
		//Roxburghshire
		//Jedburgh
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '98',
			'county' => '632',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Jedburgh',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '98',
			'county' => '632',
			'barony' => ''
		]);
		//Hawick
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '98',
			'county' => '632',
			'barony' => ''
		]);
		//Strathclyde
		//Dunbartonshire
		//Dunbarton
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Strathclyde',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '99',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '99',
			'county' => '',
			'barony' => ''
		]);
		//Lanarkshire
		//Glasgow
		DB::table('guilds')->insert([
			'guild_name' => 'University of Glasgow',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '99',
			'county' => '636',
			'barony' => ''
		]);
		//Crown of Aragon
		//Kingdom of Aragon
		//Aragon
		//Aragon
		//Alcaniz
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Aragon',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '100',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '100',
			'county' => '',
			'barony' => ''
		]);
		//Caspe
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Caspe',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '100',
			'county' => '638',
			'barony' => ''
		]);
		//Barcelona
		//Bages
		//Manresa
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Manresa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '101',
			'county' => '641',
			'barony' => ''
		]);
		//Barcelona
		//Barcelona
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Barcelona',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '101',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '101',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Barcelona',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '101',
			'county' => '642',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Barcelona',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '101',
			'county' => '642',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Barcelona',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '101',
			'county' => '642',
			'barony' => ''
		]);
		//Bergueda
		//Baga
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Baga',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '101',
			'county' => '643',
			'barony' => ''
		]);
		//Llobregat
		//San Boi
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of San Boi',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '101',
			'county' => '644',
			'barony' => ''
		]);
		//Valles
		//Bisbal
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Bisbal',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '101',
			'county' => '647',
			'barony' => ''
		]);
		//Girona
		//Emporda
		//Emporda
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Emporda',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '102',
			'county' => '650',
			'barony' => ''
		]);
		//Girones
		//Girona
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Girona',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '102',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '102',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Girona',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '102',
			'county' => '651',
			'barony' => ''
		]);
		//Ripolles
		//Ripoll
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Ripoll',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '102',
			'county' => '653',
			'barony' => ''
		]);
		//San Joan
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '102',
			'county' => '653',
			'barony' => ''
		]);
		//Olot
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Olot',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '102',
			'county' => '653',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Olot',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '102',
			'county' => '653',
			'barony' => ''
		]);
		//Rosello
		//Perpignan
		DB::table('guilds')->insert([
			'guild_name' => 'University of Perpignan',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '102',
			'county' => '654',
			'barony' => ''
		]);
		//Huesca
		//Huesca
		//Huesca
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Huesca',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => '13',
			'duchy' => '103',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '103',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Huesca',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '103',
			'county' => '656',
			'barony' => ''
		]);
		//Lleida
		//Lleida
		//Lleida
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Lleida',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '104',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '104',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Lleida',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '104',
			'county' => '660',
			'barony' => ''
		]);
		//Urgell
		//Mollerusa
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '104',
			'county' => '662',
			'barony' => ''
		]);
		//Tarrega
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Tarrega',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '104',
			'county' => '662',
			'barony' => ''
		]);
		//Tarragona
		//Tarragona
		//Tarragona
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Tarragona',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Bishopric',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '105',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '105',
			'county' => null,
			'barony' => ''
		]);
		//Teruel
		//Teruel
		//Teruel
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Teruel',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '106',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '106',
			'county' => '',
			'barony' => ''
		]);
		//Zaragoza
		//Calatayud
		//Calatayud
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Calatayud',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '107',
			'county' => '669',
			'barony' => ''
		]);
		//Zaragoza
		//Zaragoza
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Zaragoza',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '107',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '107',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Zaragoza',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '107',
			'county' => '670',
			'barony' => ''
		]);
		//Kingdom of Navarre
		//Alava
		//Ayala
		//Ayala
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Alava',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '108',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '108',
			'county' => '',
			'barony' => ''
		]);
		//Gipuzcoa
		//Donostialdea
		//San Sebastian
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '109',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '109',
			'county' => null,
			'barony' => ''
		]);
		//Astigarraga
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Astigarraga',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '109',
			'county' => '674',
			'barony' => ''
		]);
		//Navarre
		//Irunerria
		//Pamplona
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Navarre',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => '14',
			'duchy' => '110',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '110',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Pamplona',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '110',
			'county' => '679',
			'barony' => ''
		]);
		//Sanguesa
		//Sanguesa
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '110',
			'county' => '680',
			'barony' => ''
		]);
		//Viscaya
		//Bilbaoldea
		//Bilbao
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Viscaya',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '111',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '111',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '111',
			'county' => '685',
			'barony' => ''
		]);
		//Crown of Castile
		//Kingdom of Castile
		//Avila
		//Avila
		//Avila
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Avila',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '112',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '112',
			'county' => '',
			'barony' => ''
		]);
		//Burgos
		//Burgos
		//Burgos
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Burgos',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '113',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '113',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Burgos',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '113',
			'county' => '692',
			'barony' => ''
		]);
		//Bureba
		//Miranda
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Miranda',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '113',
			'county' => '691',
			'barony' => ''
		]);
		//Palencia
		//Campos
		//Palencia
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Palencia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '114',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '114',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Palencia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '114',
			'county' => '693',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Palencia',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '114',
			'county' => '693',
			'barony' => ''
		]);
		//Medina
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Medina',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '114',
			'county' => '693',
			'barony' => ''
		]);
		//Cerrato
		//Astudillo
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Astudillo',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '114',
			'county' => '694',
			'barony' => ''
		]);	
		//Segovia
		//Segovia
		//Segovia
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Segovia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '115',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '115',
			'county' => '',
			'barony' => ''
		]);
		//Pedraza
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Pedraza',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '115',
			'county' => '698',
			'barony' => ''
		]);
		//Cantimpalos
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Cantimpalos',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '115',
			'county' => '698',
			'barony' => ''
		]);
		//Soria
		//Soria
		//Soria
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Soria',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '116',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '116',
			'county' => '',
			'barony' => ''
		]);
		//Toledo
		//Toledo
		//Toledo
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Toledo',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '117',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '117',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Toledo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '117',
			'county' => '710',
			'barony' => ''
		]);
		//Talavera
		//Talavera
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Talavera',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '117',
			'county' => '709',
			'barony' => ''
		]);
		//Oropesa
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Oropesa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '117',
			'county' => '709',
			'barony' => ''
		]);
		//Valladolid
		//Medina
		//Medina
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Medina',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '118',
			'county' => '714',
			'barony' => ''
		]);
		//Penafiel
		//Corrales
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '118',
			'county' => '716',
			'barony' => ''
		]);
		//Pisuerga
		//Valladolid
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Valladolid',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => '15',
			'duchy' => '118',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '118',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Valladolid',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '118',
			'county' => '717',
			'barony' => ''
		]);
		//Tudela
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '118',
			'county' => '717',
			'barony' => ''
		]);
		//Rioseco
		//Medina
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Medina',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '118',
			'county' => '718',
			'barony' => ''
		]);
		//Kingdom of Galicia
		//Coruna
		//Santiago
		//Santiago
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Santiago',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => '16',
			'duchy' => '119',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '119',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Santiago',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '119',
			'county' => '722',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Santiago',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '119',
			'county' => '722',
			'barony' => ''
		]);
		//Lugo
		//Lugo
		//Lugo
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Lugo',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '120',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '120',
			'county' => '',
			'barony' => ''
		]);
		//Sarria
		//Sarria
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Sarria',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '120',
			'county' => '727',
			'barony' => ''
		]);
		//Ourense
		//Ourense
		//Ourense
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Ourense',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '121',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '121',
			'county' => '',
			'barony' => ''
		]);
		//Pontevedra
		//Pontevedra
		//Pontevedra
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Pontevedra',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '122',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '122',
			'county' => '',
			'barony' => ''
		]);
		//Kingdom of Leon
		//Caceres
		//Alcantara
		//Eljas
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Eljas',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '123',
			'county' => '737',
			'barony' => ''
		]);
		//Caceres
		//Caceres
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Caceres',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '123',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '123',
			'county' => '',
			'barony' => ''
		]);
		//Leon
		//Leon
		//Leon
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Leon',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => '17',
			'duchy' => '124',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '124',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Leon',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '124',
			'county' => '744',
			'barony' => ''
		]);
		//Sahagun
		//Sahagun
		DB::table('guilds')->insert([
			'guild_name' => 'University of Sahagun',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '124',
			'county' => '745',
			'barony' => ''
		]);
		//Salamanca
		//Salamanca
		//Salamanca
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Salamanca',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '125',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '125',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Salamanca',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '125',
			'county' => '752',
			'barony' => ''
		]);
		//Zamora
		//Aliste
		//Zamora
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Zamora',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '126',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '126',
			'county' => '',
			'barony' => ''
		]);
		//Principality of Asturias
		//Asturias
		//Gijon
		//Gijon
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Gijon',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '127',
			'county' => '761',
			'barony' => ''
		]);
		//Oviedo
		//Oviedo
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Asturias',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => '18',
			'duchy' => '127',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '127',
			'county' => '',
			'barony' => ''
		]);
		//Proaza
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '127',
			'county' => '763',
			'barony' => ''
		]);
		//Siero
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '127',
			'county' => '763',
			'barony' => ''
		]);
		//Cantabria
		//Santander
		//Santander
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Cantabria',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '128',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '128',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Santander',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '128',
			'county' => '766',
			'barony' => ''
		]);
		//Kingdom of Portugal
		//Aveiro
		//Aveiro
		//Aveiro
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Aveiro',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '129',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '129',
			'county' => '',
			'barony' => ''
		]);
		//Braga
		//Barcelos
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Barcelos',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '129',
			'county' => '769',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Barcelos',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '129',
			'county' => '769',
			'barony' => ''
		]);
		//Guimaraes
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Guimaraes',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '129',
			'county' => '769',
			'barony' => ''
		]);
		//Porto
		//Porto
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Porto',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '129',
			'county' => '770',
			'barony' => ''
		]);
		//Beira
		//Coimbra
		//Coimbra
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Beira',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '130',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '130',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Coimbra',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '130',
			'county' => '773',
			'barony' => ''
		]);
		//Guarda
		//Guarda
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Guarda',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '130',
			'county' => '774',
			'barony' => ''
		]);
		//Braganca
		//Braganca
		//Braganca
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Braganca',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '131',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '131',
			'county' => '',
			'barony' => ''
		]);
		//Estremadura
		//Lisboa
		//Lisboa
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Estremadura',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => '19',
			'duchy' => '132',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '132',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Lisboa',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '132',
			'county' => '779',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Lisboa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '132',
			'county' => '779',
			'barony' => ''
		]);
		//Danelagen
		//Kingdom of Denmark
		//Jutland
		//Slesvig
		//Slesvig
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Jutland',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '133',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '133',
			'county' => '',
			'barony' => ''
		]);
		//Ribe
		//Ribe
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Ribe',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '133',
			'county' => '784',
			'barony' => ''
		]);
		//Scania
		//Scania
		//Lund
		DB::table('guilds')->insert([
			'guild_name' => 'University of Lund',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '134',
			'county' => '791',
			'barony' => ''
		]);
		//Malmohus
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Scania',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '134',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '134',
			'county' => '',
			'barony' => ''
		]);
		//Sjaeland
		//Sjaeland
		//Kobenhavn
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Sjaeland',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => '20',
			'duchy' => '135',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '135',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Kobenhavn',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '135',
			'county' => '795',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Kobenhavn',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '135',
			'county' => '795',
			'barony' => ''
		]);
		//Kingdom of Norway
		//Nordjor
		//Orkney
		//Kirkwall
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Nordjor',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '136',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '136',
			'county' => '',
			'barony' => ''
		]);
		//Sodor
		//Islay
		//Dunyvaig
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Sodor',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '137',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '137',
			'county' => '',
			'barony' => ''
		]);
		//Hedmark
		//Hedmark
		//Hamar
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Hedmark',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '138',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '138',
			'county' => '',
			'barony' => ''
		]);
		//Oppland
		//Trondelag
		//Trondheim
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Oppland',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Bishopric',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '139',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '139',
			'county' => '',
			'barony' => ''
		]);
		//Rogaland
		//Haugeland
		//Avaldsnes
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Rogaland',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '140',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '140',
			'county' => '',
			'barony' => ''
		]);
		//Sorland
		//Agder
		//Oddernes
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Sorland',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '141',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '141',
			'county' => '',
			'barony' => ''
		]);
		//Vestland
		//Vestland
		//Bergen
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Vestland',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '142',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '142',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Kontor of Bergen Tyskebryggen',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '142',
			'county' => '821',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Bergen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '142',
			'county' => '821',
			'barony' => ''
		]);
		//Viken
		//Vingulmark
		//Oslo
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Viken',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => '21',
			'duchy' => '143',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '143',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Oslo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '143',
			'county' => '827',
			'barony' => ''
		]);
		//Kingdom of Sweden
		//Gotland
		//Gotland
		//Visby
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Gotland',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '144',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '144',
			'county' => '',
			'barony' => ''
		]);
		//Norrland
		//Angermanland
		//Styresholm
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Norrland',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '145',
			'county' => null,
			'barony' => ''
		]);
		//Gastrikland
		//Gavle
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Gavle',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '145',
			'county' => '832',
			'barony' => ''
		]);
		//Osterland
		//Finland
		//Turku
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Osterland',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '146',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '146',
			'county' => '',
			'barony' => ''
		]);
		//Smaland
		//Smaland
		//Kalmar
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Smaland',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '147',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '147',
			'county' => '',
			'barony' => ''
		]);
		//Svealand
		//Sodermanland
		//Stockholm
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Svealand',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => '22',
			'duchy' => '148',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '148',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Stockholm',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '148',
			'county' => '846',
			'barony' => ''
		]);
		//Crown of Poland
		//Kingdom of Poland
		//Greater Poland
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '149',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '149',
			'county' => '',
			'barony' => ''
		]);
		//Lesser Poland
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '150',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '150',
			'county' => '',
			'barony' => ''
		]);
		//Gnesen
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '151',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '151',
			'county' => '',
			'barony' => ''
		]);
		//Kalisz
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '152',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '152',
			'county' => '',
			'barony' => ''
		]);
		//Krakow
		//Krakow
		//Krakow
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Krakow',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '153',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '153',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Krakow',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '153',
			'county' => '874',
			'barony' => ''
		]);
		//Kuyavia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '154',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '154',
			'county' => null,
			'barony' => ''
		]);
		//Mazovia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '155',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '155',
			'county' => null,
			'barony' => ''
		]);
		//Plock
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '156',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '156',
			'county' => null,
			'barony' => ''
		]);
		//Posen
		//Posen
		//Posen
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Posen',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '157',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '157',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Posen',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '157',
			'county' => '893',
			'barony' => ''
		]);
		//Sieradz
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '158',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '158',
			'county' => null,
			'barony' => ''
		]);
		//Warsaw
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '159',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '159',
			'county' => null,
			'barony' => ''
		]);
		//Grand Duchy of Lithuania
		//Minsk
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '160',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '160',
			'county' => null,
			'barony' => ''
		]);
		//Samogitia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '161',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '161',
			'county' => null,
			'barony' => ''
		]);
		//Tracken
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '162',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '162',
			'county' => null,
			'barony' => ''
		]);
		//Kauen
		//Kauen
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '162',
			'county' => '913',
			'barony' => ''
		]);
		//Vilnius
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '163',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '163',
			'county' => null,
			'barony' => ''
		]);
		//Crown of Hungary
		//Kingdom of Hungary
		//Hungary
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '164',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '164',
			'county' => null,
			'barony' => ''
		]);
		//Buda
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '165',
			'county' => null,
			'barony' => ''
		]);
		//Esztergom
		//Esztergom
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Esztergom',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '165',
			'county' => '926',
			'barony' => ''
		]);
		//Nitra
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '166',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '166',
			'county' => null,
			'barony' => ''
		]);
		//Temesvar
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '167',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '167',
			'county' => null,
			'barony' => ''
		]);
		//Ungvar
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '168',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '168',
			'county' => null,
			'barony' => ''
		]);
		//Transylvania
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '169',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '169',
			'county' => null,
			'barony' => ''
		]);
		//Kingdom of Croatia
		//Dalmatia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '170',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '170',
			'county' => null,
			'barony' => ''
		]);
		//Ragusa
		//Ragusa
		//Ragusa
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Ragusa',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Republic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '171',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '171',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Ragusa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '171',
			'county' => '966',
			'barony' => ''
		]);
		//Slavonia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '172',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '172',
			'county' => null,
			'barony' => ''
		]);
		//Split
		//Split
		//Split
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Split',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Republic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '173',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '173',
			'county' => null,
			'barony' => ''
		]);
		//Zadar
		//Zadar
		//Zadar
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Zadar',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Republic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '174',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '174',
			'county' => null,
			'barony' => ''
		]);	
		//Trinacria
		//Kingdom of Sicily
		//Palermo
		//Palermo
		//Palermo
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Palermo',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '175',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Palermo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '175',
			'county' => '980',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '175',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Palermo',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '175',
			'county' => '980',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Palermo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '175',
			'county' => '980',
			'barony' => ''
		]);
		//Trapani
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '176',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '176',
			'county' => null,
			'barony' => ''
		]);
		//Messina
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '177',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '177',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Messina',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '177',
			'county' => '986',
			'barony' => ''
		]);
		//Agrigento
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '178',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '178',
			'county' => null,
			'barony' => ''
		]);
		//Catania
		//Catania
		//Catania
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Catania',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '179',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '179',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Catania',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '179',
			'county' => '993',
			'barony' => ''
		]);
		//Caltagirone
		//Caltagirone
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Caltagirone',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Siracusa
		//Siracusa
		//Siracusa
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Siracusa',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '180',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '180',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Siracusa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '180',
			'county' => '995',
			'barony' => ''
		]);
		//Kingdom of Naples
		//Naples
		//Naples
		//Naples
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Naples',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '181',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '181',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Naples',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '181',
			'county' => '998',
			'barony' => ''
		]);
		//Capua
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '182',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '182',
			'county' => null,
			'barony' => ''
		]);
		//Amalfi
		//Amalfi
		//Amalfi
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Amalfi',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Republic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '183',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '183',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Amalfi',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Amalfi',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Calabria
		//Catanzaro
		//Catanzaro
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Catanzaro',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '184',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '184',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '184',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Catanzaro',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Cosenza
		//Cosenza
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Cosenza',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '184',
			'county' => '',
			'barony' => ''
		]);
		//Reggio
		//Reggio
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Reggio',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '184',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Reggio',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '184',
			'county' => '',
			'barony' => ''
		]);
		//Basilicata
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '185',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '185',
			'county' => '',
			'barony' => ''
		]);
		//Taranto
		//Taranto
		//Taranto
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Taranto',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '186',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '186',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Taranto',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Foggia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '187',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '187',
			'county' => '',
			'barony' => ''
		]);
		//Benevento
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '188',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '188',
			'county' => '',
			'barony' => ''
		]);
		//Salerno
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '189',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '189',
			'county' => '',
			'barony' => ''
		]);
		//Kingdom of Sardinia
		//Gallura
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '190',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '190',
			'county' => '',
			'barony' => ''
		]);
		//Logudoro
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '191',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '191',
			'county' => '',
			'barony' => ''
		]);
		//Arborea
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '192',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '192',
			'county' => null,
			'barony' => ''
		]);
		//Cagliari
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '193',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '193',
			'county' => null,
			'barony' => ''
		]);
		//Byzantine Empire
		//Kingdom of Thrace
		//Thrace
		//Constantinople
		//Constantinople
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Thrace',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Constantinople',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Constantinople',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Macedonia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Kingdom of Thessalonica
		//Hellas
		//Attica
		//Athens
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Athens',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Boeotia
		//Thebes
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Thebes',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Peloponessos
		//Corinthia
		//Corinth
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Corinth',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Archipelago
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Epirus
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Thessalonica
		//Thessalonica
		//Thessalonica
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Thessalonica',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Thessalonica',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Kingdom of Trebizond
		//Paphlagonia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Armeniac
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Chaldia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Crimea
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Kingdom of Anatolia
		//Thracesia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Bucellaria
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Anatolia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Cappadocia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Seleucia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Opsicia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Nicaea
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Lycia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Pamphylia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Kingdom of Georgia
		//Colchis
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Javakheti
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Kartli
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Kakheti
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Kingdom of Armenia
		//Vaspurakan
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Taron
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Kars
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Azerbaijan
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Kievan Russia
		//Grand Principality of Kyiv
		//Kyiv
		//Kyiv
		//Kyiv
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Kyiv',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Kyiv',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Pereyaslavl
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Grand Principality of Chernigov
		//Chernigov
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Ryazan
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Grand Principality of Ruthenia
		//Halych
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Podolia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Volhynia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Turov
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Grand Principality of Vladimir
		//Vladimir
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Moscow
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Suzdal
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Grand Principality of Smolensk
		//Smolensk
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Rzhev
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Tver
		//Tver
		//Tver
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Tver',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Bishopric',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Rostov
		//Rostov
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Rostov',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Furrier',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Yaroslavl
		//Yaroslavl
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Yaroslavl',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Furrier',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Vologda
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Vologda',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Furrier',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Principality of Novgorod
		//Novgorod
		//Novgorod
		//Novgorod
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Novgorod',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Republic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Kontor of Novgorod Peterhof',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Novgorod',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Furrier',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Polotsk
		//Polotsk
		//Polotsk
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Polotsk',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Republic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Pleskov
		//Pleskov
		//Pleskov
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Pleskov',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Republic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Pleskov',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Bulgarian Empire
		//Kingdom of Bulgaria
		//Preslav
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Tarnovo
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Principality of Wallachia
		//Wallachia
		//Targoviste
		//Targoviste
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Targoviste',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Moldavia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Serbian Empire
		//Principality of Serbia
		//Rashka
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Principality of Bosnia
		//Bosnia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Cordoba
		//Kingdom of Andalucia
		//Algeciras
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Almeria
		//Almeria
		//Almeria
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Almeria',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Almeria',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Arcos
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Carmona
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Cordoba
		//Cordoba
		//Cordoba
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Cordoba',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => '',
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Cordoba',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Granada
		//Alpujarra
		//Castaras
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Castaras',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Juviles
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Juviles',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Trevelez
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Trevelez',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Valor
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Valor',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Portugos
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Portugos',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Granada
		//Granada
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Granada',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Malaga
		//Malaga
		//Malaga
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Malaga',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Malaga',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Ronda
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Sevilla
		//Sevilla
		//Sevilla
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Sevilla',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Sevilla',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Utrera
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Utrera',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Kingdom of Algarves
		//Algarves
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Badajoz
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Huelva
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Kingdom of Levante
		//Alpuente
		//Alcarria
		//Guadalajara
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Guadalajara',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Guadalajara',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Baleares
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Denia
		//Albacete
		//Albacete
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Albacete',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Murcia
		//Murcia
		//Murcia
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Murcia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Valencia
		//Valencia
		//Valencia
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Valencia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Valencia',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);		
		//Almohad
		//Kingdom of Marrakesh
		//Marrakesh
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Sijilmassa
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Ouarzazate
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Zagora
		//Zagora
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Zagora',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Kingdom of Fez
		//Fez
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Rabat
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Tangier
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Kingdom of Kairouan
		//Kairouan
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Tunis
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Djerid
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Tripoli
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Sirte
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Kingdom of Tlemcen
		//Tlemcen
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Oujda
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Oran
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Algiers
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Tiaret
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Mzab
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Laghouat
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Djelfa
		//Djelfa
		//Djelfa
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Djelfa',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Djelfa',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);	
		//Principality of Ifni
		//Ifni
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Taroudant
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Principality of Figuig
		//Figuig
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Adrar
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Abbasid
		//Kingdom of Baghdad
		//Baghdad
		//Baghdad
		//Baghdad
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Baghdad',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Baghdad',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);	
		//Kingdom of Syria
		//Damascus
		//Damascus
		//Damascus
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Damascus',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Damascus',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);	
		//Aleppo
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Homs
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Principality of Najd
		//Najd
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Principality of Antioch
		//Antioch
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Fatimid
		//Kingdom of Cairo
		//Cairo
		//Cairo
		//Cairo
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Cairo',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Cairo',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);	
		//Alexandria
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Mansoura
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Damietta
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Minya
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Asyut
		//Asyut
		//Asyut
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Asyut',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Bishopric',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Asyut',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Kharga
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Baritun
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Boula
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Kingdom of Jerusalem
		//Jerusalem
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Principality of Hejaz
		//Mecca
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Medina
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Tabuk
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Khazar Empire
		//Kingdom of Khazaria
		//Aqtobe
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Sarkel
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Atil
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Bolghar
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Bilar
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Kingdom of Alania
		//Derbent
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Azov
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Kingdom of Cumania
		//Sighnaq
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Sozak
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Sibir
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Seljuk Empire
		//Kingdom of Kwarezm
		//Gurganj
		//Gurganj
		//
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Gurganj',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Guild of Gurganj',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potter',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Khiva
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);	
		//Kingdom of Isfahan
		//Isfahan
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Isfahan',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Principality of Hormuz
		//Hormuz
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Kerman
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);			
		
    }
}
