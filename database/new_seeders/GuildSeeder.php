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
			'guild_category' => '',				//Assembly (318), Chivalric (318), Monastic (), Cleric (), Merchant (), Craft ()
			'guild_subcategory' => '',			//Duke (), Count (), Baron (283), Bishop (21), Patrician (14); Knight (), Crusader_Teutonic (), Crusader_Hospitaller, Crusader_Templar(); Monk_Catholic_Augustinian (), Monk_Catholic_Benedictine (), Monk_Catholic_Carmelite (), Monk_Catholic_Cistercian (), Monk_Catholic_Franciscan (), Monk_Orthodox_Greek (), Monk_Orthodox_Serbian (), Monk_Orthodox_Bulgarian (), Monk_Muslim_Sufi (); Cleric_Catholic (), Cleric_Orthodox_Greek (), Cleric_Orthodox_Serbian (), Cleric_Orthodox_Bulgarian (), Cleric_Muslim_Sunni (), Cleric_Muslim_Shia (); Merchant_Florin(162), Merchant_Bezant (3), Merchant_Dirham (3), Merchant_Dinar (5); Master_Smith (), Master_Tanner (), Master_Furrier (), Master_Potter ();
			'empire' => '',						//default = null
			'kingdom' => '',					//default = null
			'duchy' => '',						//default = null
			'county' => '',						//default = null
			'barony' => ''						//default = null
		]);
		
		*/
		
		/*	age:	chivalric | crusader | publican | peasant:		clergy:						miller | merchant | artisan:			
		//	7		page											novice						apprentice								
		//	14		squire | hostler | farmhand						acolyte						journeyman								
		//	21		knight | crusader | innkeeper | farmer			priest | monk				miller | mercer | master artisan 		
		//
		*/
		
		//Holy Roman Empire
		//Kingdom of Germany
		//Austria
		//Vienna
		//Vienna
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Austria',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '1',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of Saint George',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '1',
			'county' => null,
			'barony' => ''
		]);
		//Bavaria
		//Donaugau
		//Regensburg
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Bavaria',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
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
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '2',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of Saint George',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '2',
			'county' => null,
			'barony' => ''
		]);
		//Rottgau
		//Passau
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of Saint George',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '2',
			'county' => null,
			'barony' => ''
		]);
		//Brabant
		//Brabant
		//Brussels
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Brabant',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Golden Fleece',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => null,
			'barony' => ''
		]);
		//Louvain
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Louvain',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Golden Fleece',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => null,
			'barony' => ''
		]);
		//Hennegau
		//Valenciennes
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Golden Fleece',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => null,
			'barony' => ''
		]);
		//Mons
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Golden Fleece',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => null,
			'barony' => ''
		]);
		//Toxandria
		//Turnhout
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Turnhout',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => null,
			'barony' => ''
		]);	
		//Waasgau
		//Ghent
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Ghent',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Golden Fleece',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => null,
			'barony' => ''
		]);		
		//Carinthia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '4',
			'county' => null,
			'barony' => ''
		]);
		//Lurngau
		//Millstatt
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of Saint George',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '4',
			'county' => null,
			'barony' => ''
		]);
		//Carniola
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '5',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '5',
			'county' => null,
			'barony' => ''
		]);
		//Franconia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '6',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '6',
			'county' => null,
			'barony' => ''
		]);
		//Gollachgau
		//Rotenburg
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Rotenburg',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '6',
			'county' => null,
			'barony' => ''
		]);
		//Frisia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => null,
			'barony' => ''
		]);
		//Rhineland
		//Leithen
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Leithen',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => null,
			'barony' => ''
		]);
		//Haag
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of Saint George',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => null,
			'barony' => ''
		]);
		//Teisterbant
		//Gorcum
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of Saint George',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => null,
			'barony' => ''
		]);
		//Westflinge
		//Hoorn
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Hoorn',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => null,
			'barony' => ''
		]);	
		//Guelders
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '8',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '8',
			'county' => null,
			'barony' => ''
		]);
		//Hamaland
		//Deventer
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Deventer',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '8',
			'county' => null,
			'barony' => ''
		]);	
		//Julich
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '9',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '9',
			'county' => null,
			'barony' => ''
		]);
		//Limburg
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '10',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '10',
			'county' => null,
			'barony' => ''
		]);
		//Condrustgau
		//Huy
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Huy',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '10',
			'county' => null,
			'barony' => ''
		]);
		//Lorraine
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '11',
			'county' => null,
			'barony' => ''
		]);
		//Toullois
		//Nancy
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Lorraine',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '11',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Golden Fleece',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => null,
			'barony' => ''
		]);
		//Luxembourg
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '12',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '12',
			'county' => null,
			'barony' => ''
		]);
		//Saxony
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '13',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '13',
			'county' => null,
			'barony' => ''
		]);
		//Derlingau
		//Brunswick
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Brunswick',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '13',
			'county' => null,
			'barony' => ''
		]);
		//Styria
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '14',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '14',
			'county' => null,
			'barony' => ''
		]);
		//Norital
		//Bolzano
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Bolzano',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '14',
			'county' => null,
			'barony' => ''
		]);
		//Swabia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => null,
			'barony' => ''
		]);
		//Thuringia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '16',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '16',
			'county' => null,
			'barony' => ''
		]);
		//Ostergau
		//Naumburg
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Naumburg',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '16',
			'county' => null,
			'barony' => ''
		]);
		//Bremen
		//Largau
		//Bremen
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Bremen',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Bremen',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
			'county' => null,
			'barony' => ''
		]);
		//Gronegau
		//Osnabruck
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Osnabruck',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
			'county' => null,
			'barony' => ''
		]);
		//Stormarngau
		//Hamburg
		DB::table('guilds')->insert([
			'guild_name' => 'Hanse of Hamburg',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
			'county' => null,
			'barony' => ''
		]);
		//Sudergau
		//Warendorf
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Warendorf',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
			'county' => null,
			'barony' => ''
		]);
		//Westfaliagau
		//Attendorn
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Attendorn',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
			'county' => null,
			'barony' => ''
		]);
		//Cologne
		//Gillgau
		//Cologne
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Cologne',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '18',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Cologne',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '18',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '18',
			'county' => null,
			'barony' => ''
		]);
		//Magdeburg
		//Nordthuringgau
		//Magdeburg
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Magdeburg',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '19',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '19',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Magdeburg',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '19',
			'county' => null,
			'barony' => ''
		]);
		//Osterwalde
		//Salzwedel
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Salzwedel',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '19',
			'county' => null,
			'barony' => ''
		]);
		//Mainz
		//Wormsfeld
		//Mainz
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Mainz',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => null,
			'barony' => ''
		]);
		//Hessengau
		//Kassel
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Kassel',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => null,
			'barony' => ''
		]);	
		//Fritzlar
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Fritzlar',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => null,
			'barony' => ''
		]);
		//Lahngau
		//Limburg
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Limburg',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => null,
			'barony' => ''
		]);			
		//Wettergau
		//Frankfurt
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Frankfurt',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => null,
			'barony' => ''
		]);
		//Salzburg
		//Salzburggau
		//Salzburg
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Salzburg',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '21',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of Saint George',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '21',
			'county' => null,
			'barony' => ''
		]);
		//Trier
		//Bitgau
		//Trier
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Trier',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '22',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '22',
			'county' => null,
			'barony' => ''
		]);
		//Kingdom of Lombardy
		//Milano
		//Milano
		//Milano
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Milano',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Milano',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => null,
			'barony' => ''
		]);
		//Piacenza
		//Piacenza
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Piacenza',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => null,
			'barony' => ''
		]);
		//Piedmont
		//Asti
		//Asti
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Asti',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
			'county' => null,
			'barony' => ''
		]);
		//Turino
		//Turino
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Piedmont',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
			'county' => null,
			'barony' => ''
		]);
		//Vigevano
		//Vigevano
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Vigevano',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
			'county' => null,
			'barony' => ''
		]);	
		//Tuscany
		//Siena
		//Siena
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Tuscany',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '25',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '25',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Siena',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '25',
			'county' => null,
			'barony' => ''
		]);
		//Verona
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '26',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '26',
			'county' => null,
			'barony' => ''
		]);
		//Aquileia
		//Friuli
		//Aquileia
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Aquileia',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '27',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '27',
			'county' => null,
			'barony' => ''
		]);
		//Florence
		//Florence
		//Florence
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Florence',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Patrician',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '28',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of Saint George',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '28',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Florence',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '28',
			'county' => null,
			'barony' => ''
		]);
		//Arezzo
		//Arezzo
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Arezzo',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '28',
			'county' => null,
			'barony' => ''
		]);
		//Genoa
		//Genoa
		//Genoa
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Genoa',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Patrician',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '29',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '29',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Genoa',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '29',
			'county' => null,
			'barony' => ''
		]);
		//Noli
		//Noli
		//Noli
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Noli',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Patrician',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '30',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '30',
			'county' => null,
			'barony' => ''
		]);
		//Oneglia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '31',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '31',
			'county' => null,
			'barony' => ''
		]);
		//Lucca
		//Lucca
		//Lucca
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Lucca',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Patrician',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '32',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '32',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Lucca',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '32',
			'county' => null,
			'barony' => ''
		]);
		//Pistoia
		//Pistoia
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Pistoia',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '32',
			'county' => null,
			'barony' => ''
		]);
		//Pescia
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Pescia',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '32',
			'county' => null,
			'barony' => ''
		]);	
		//Pisa
		//Pisa
		//Pisa
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Pisa',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Patrician',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '33',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '33',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Pisa',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '33',
			'county' => null,
			'barony' => ''
		]);
		//Venice
		//Dogado
		//Venice
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Venice',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Patrician',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '34',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '34',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Venice',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '33',
			'county' => null,
			'barony' => ''
		]);
		//Kingdom of Bohemia
		//Bohemia
		//Prague
		//Prague
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Bohemia',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '35',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '35',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Prague',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '35',
			'county' => null,
			'barony' => ''
		]);
		//Glatzerland
		//Wunschelburg
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Wunschelburg',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '35',
			'county' => null,
			'barony' => ''
		]);
		//Koniggratz
		//Braunau
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Braunau',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Lusatia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '36',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '36',
			'county' => null,
			'barony' => ''
		]);
		//Nisangau
		//Leipzig
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Leipzig',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '36',
			'county' => null,
			'barony' => ''
		]);
		//Lusizigau
		//Senftenberg
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Senftenberg',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '36',
			'county' => null,
			'barony' => ''
		]);
		//Lebusa
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Lebusa',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);			
		//Moravia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '37',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '37',
			'county' => null,
			'barony' => ''
		]);
		//Iglau
		//Iglau
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Iglau',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '37',
			'county' => null,
			'barony' => ''
		]);	
		//Olmutz
		//Prossnitz
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Prossnitz',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '37',
			'county' => null,
			'barony' => ''
		]);
		//Sternberg
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Sternberg',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '37',
			'county' => null,
			'barony' => ''
		]);			
		//Lower Silesia
		//Jauer
		//Jauer
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Jauer',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '38',
			'county' => null,
			'barony' => ''
		]);
		//Glogau
		//Glogau
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Glogau',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
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
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '38',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '38',
			'county' => null,
			'barony' => ''
		]);
		//Schweidnitz
		//Striegau
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Striegau',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '38',
			'county' => null,
			'barony' => ''
		]);
		//Schmiedeberg
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Schmiedeberg',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '38',
			'county' => null,
			'barony' => ''
		]);			
		//Hirschberg
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Hirschberg',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '38',
			'county' => null,
			'barony' => ''
		]);
		//Upper Silesia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '39',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '39',
			'county' => null,
			'barony' => ''
		]);
		//Troppau
		//Jagerndorf
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Jagerndorf',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '39',
			'county' => null,
			'barony' => ''
		]);	
		//Kingdom of Burgundy
		//Burgundy
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '40',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '40',
			'county' => null,
			'barony' => ''
		]);
		//Lassois
		//Chatillon
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Chatillon',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '40',
			'county' => null,
			'barony' => ''
		]);	
		//Cisjurania
		//Dauphine
		//Voiron
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Voiron',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '41',
			'county' => null,
			'barony' => ''
		]);
		//Lyonnais
		//Lyon
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Cisjurania',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '41',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '41',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Lyon',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '41',
			'county' => null,
			'barony' => ''
		]);
		//Transjurania
		//Amosenais
		//Besancon
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Transjurania',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '42',
			'county' => null,
			'barony' => ''
		]);
		//Dole
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of Saint George',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '42',
			'county' => null,
			'barony' => ''
		]);
		//Orange
		//Venaissin
		//Avignon
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Orange',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '43',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '43',
			'county' => null,
			'barony' => ''
		]);
		//Provence
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '44',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '44',
			'county' => null,
			'barony' => ''
		]);
		//Arles
		//Arles
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Arles',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '44',
			'county' => null,
			'barony' => ''
		]);
		//Savoy
		//Tarantais
		//Moutiers
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Savoy',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '45',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '45',
			'county' => null,
			'barony' => ''
		]);
		//Papal States
		//Rome
		//Rome
		//Rome
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Rome',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '46',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '46',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Rome',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '46',
			'county' => null,
			'barony' => ''
		]);
		//Romagna
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '47',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '47',
			'county' => null,
			'barony' => ''
		]);
		//Spoleto
		//Ancona
		//Ancona
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Spoleto',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Patrician',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '48',
			'county' => null,
			'barony' => ''
		]);
		//Senigallia
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Senigallia',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '48',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '48',
			'county' => null,
			'barony' => ''
		]);
		//Urbino
		//Pesaro
		//Pesaro
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Urbino',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '49',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '49',
			'county' => null,
			'barony' => ''
		]);
		//Teutonic Order State
		//Livonia
		//Riga
		//Riga
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Livonia',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '50',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '50',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Riga',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '50',
			'county' => null,
			'barony' => ''
		]);
		//Wenden
		//Lemsal
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Lemsal',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '50',
			'county' => null,
			'barony' => ''
		]);
		//Estonia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '51',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '51',
			'county' => null,
			'barony' => ''
		]);
		//Prussia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '52',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '52',
			'county' => null,
			'barony' => ''
		]);
		//Natangergau
		//Wehlau
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Wehlau',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '52',
			'county' => null,
			'barony' => ''
		]);
		//Pomerelia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '53',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '53',
			'county' => null,
			'barony' => ''
		]);
		//Kulmerland
		//Graudenz
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Graudenz',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '53',
			'county' => null,
			'barony' => ''
		]);	
		//Pomerania
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '54',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '54',
			'county' => null,
			'barony' => ''
		]);
		//Brandenburg
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '55',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '55',
			'county' => null,
			'barony' => ''
		]);
		//Mecklenburg
		//Obotritegau
		//Mecklenburg
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '56',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '56',
			'county' => null,
			'barony' => ''
		]);
		//Wismar
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Wismar',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);	
		//Wagrigau
		//Lubeck
		DB::table('guilds')->insert([
			'guild_name' => 'Hanse of Lubeck',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '56',
			'county' => null,
			'barony' => ''
		]);
		//Crown of France
		//Kingdom of France
		//Anjou
		//Anjou
		//Angers
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Anjou',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '57',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of Saint George',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '57',
			'county' => null,
			'barony' => ''
		]);
		//Saumur
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of Saint George',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '57',
			'county' => null,
			'barony' => ''
		]);
		//Maine
		//Laval
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Laval',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '57',
			'county' => null,
			'barony' => ''
		]);	
		//Aquitaine
		//Bordelais
		//Bordeaux
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Aquitaine',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '58',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '58',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Bordeaux',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '58',
			'county' => null,
			'barony' => ''
		]);
		//Saintogne
		//Taillebourg
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Taillebourg',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '58',
			'county' => null,
			'barony' => ''
		]);
		//Auvergne
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '59',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '59',
			'county' => null,
			'barony' => ''
		]);
		//Brioude
		//Sauveterre
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Sauveterre',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '59',
			'county' => null,
			'barony' => ''
		]);	
		//Murat
		//Murat
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Murat',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '59',
			'county' => null,
			'barony' => ''
		]);
		//Saint Flour
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Saint Flour',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '59',
			'county' => null,
			'barony' => ''
		]);
		//Berry
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '60',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '60',
			'county' => null,
			'barony' => ''
		]);
		//Bourbonnais
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '61',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '61',
			'county' => null,
			'barony' => ''
		]);
		//Gascony
		//Armagnac
		//Eauze
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Eauze',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '62',
			'county' => null,
			'barony' => ''
		]);
		//Comminges
		//Luchon
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Luchon',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '62',
			'county' => null,
			'barony' => ''
		]);
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '62',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '62',
			'county' => null,
			'barony' => ''
		]);
		//Champagne
		//Remois
		//Reims
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Champagne',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '63',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '63',
			'county' => null,
			'barony' => ''
		]);
		//Chalonnais
		//Vitry
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Vitry',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '63',
			'county' => null,
			'barony' => ''
		]);	
		//Provins
		//Provins
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Provins',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '63',
			'county' => null,
			'barony' => ''
		]);
		//Senois
		//Mussy
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Mussy',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '63',
			'county' => null,
			'barony' => ''
		]);
		//Troyes
		//Troyes
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Troyes',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '63',
			'county' => null,
			'barony' => ''
		]);
		//Francia
		//Pay de France
		//Paris
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Francia',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Star',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => null,
			'barony' => ''
		]);
		//Ecouen
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Star',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => null,
			'barony' => ''
		]);
		//Brie
		//Lagny
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Star',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Lagny',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => null,
			'barony' => ''
		]);	
		//Gatinais
		//Landon
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Landon',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => null,
			'barony' => ''
		]);	
		//Hurepoix
		//Dourdan
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Dourdan',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => null,
			'barony' => ''
		]);
		//Senlis
		//Ressons
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Star',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => null,
			'barony' => ''
		]);	
		//Gournay
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Star',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => null,
			'barony' => ''
		]);			
		//Normandy
		//Roumois
		//Rouen
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Normandy',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Rouen',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => null,
			'barony' => ''
		]);
		//Alencon
		//Argentan
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Argentan',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => null,
			'barony' => ''
		]);	
		//Coutances
		//Saint Lo
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Saint Lo',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => null,
			'barony' => ''
		]);	
		//Orleanais
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '66',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '66',
			'county' => null,
			'barony' => ''
		]);
		//Dreux
		//Nonancourt
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Nonancourt',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '66',
			'county' => null,
			'barony' => ''
		]);
		//Picardy
		//Artois
		//Arras
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Arras',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => null,
			'barony' => ''
		]);
		//Saint Omer
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Saint Omer',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => null,
			'barony' => ''
		]);	
		//Amienois
		//Amiens
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Picardy',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Amiens',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Flanders
		//Bruges
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Golden Fleece',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Kontor of Bruges Easterling House',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => null,
			'barony' => ''
		]);
		//Ypres
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Ypres',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Golden Fleece',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => null,
			'barony' => ''
		]);
		//Lille
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Lille',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Golden Fleece',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => null,
			'barony' => ''
		]);		
		//Douai
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Douai',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Golden Fleece',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => null,
			'barony' => ''
		]);
		//Poperinge
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Poperinge',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => null,
			'barony' => ''
		]);	
		//Tournais
		//Tournai
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Tournai',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Golden Fleece',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => null,
			'barony' => ''
		]);
		//Courtrai
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Courtrai',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Vermandois
		//Saint Quentin
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Saint Quentin',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => null,
			'barony' => ''
		]);			
		//Poitou
		//Poitou
		//Poitiers
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Poitou',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => null,
			'barony' => ''
		]);
		//Niort
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Niort',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => null,
			'barony' => ''
		]);
		//Briancais
		//Brioux
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Brioux',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => null,
			'barony' => ''
		]);
		//Chatellerault
		//Clairvaux
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Clairvaux',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => null,
			'barony' => ''
		]);
		//Thouarsais
		//Fontenay
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Fontenay',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => null,
			'barony' => ''
		]);
		//Toulouse
		//Toulouse
		//Toulouse
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Toulouse',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => null,
			'barony' => ''
		]);
		//Foix
		//Tarascon
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of Saint George',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => null,
			'barony' => ''
		]);
		//Gevaudan
		//Langogne
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Langogne',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => null,
			'barony' => ''
		]);
		//Narbonne
		//Agde
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Toulouse',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => null,
			'barony' => ''
		]);
		//Quercy
		//Cahors
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Cahors',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => null,
			'barony' => ''
		]);
		//Kingdom of Brittany
		//Brittany
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '70',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '70',
			'county' => null,
			'barony' => ''
		]);
		//Leon
		//Morlaix
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Morlaix',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '70',
			'county' => null,
			'barony' => ''
		]);
		//Domnonee
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '71',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '71',
			'county' => null,
			'barony' => ''
		]);
		//Penthievre
		//Chatelaudren
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Chatelaudren',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '71',
			'county' => null,
			'barony' => ''
		]);
		//Retz
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '72',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '72',
			'county' => null,
			'barony' => ''
		]);
		//Crown of Britain
		//High Kingdom of Ireland
		//Connacht
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '73',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '73',
			'county' => null,
			'barony' => ''
		]);
		//Leinster
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '74',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '74',
			'county' => null,
			'barony' => ''
		]);
		//Meath
		//Dublin
		//Dublin
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Meath',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '75',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '75',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Dublin',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '75',
			'county' => null,
			'barony' => ''
		]);
		//Munster
		//Clare
		//Bunratty
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Bunratty',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '76',
			'county' => null,
			'barony' => ''
		]);
		//Cork
		//Buttevant
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Buttevant',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '76',
			'county' => null,
			'barony' => ''
		]);
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '76',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '76',
			'county' => null,
			'barony' => ''
		]);
		//Ulster
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '77',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '77',
			'county' => null,
			'barony' => ''
		]);
		//Kingdom of England
		//East Anglia
		//Norfolk
		//Norwich
		DB::table('guilds')->insert([
			'guild_name' => 'Court of East Anglia',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '78',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of Saint George',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '78',
			'county' => null,
			'barony' => ''
		]);
		//Aylsham
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Aylsham',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '78',
			'county' => null,
			'barony' => ''
		]);
		//Suffolk
		//Sudbury
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Sudbury',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '78',
			'county' => null,
			'barony' => ''
		]);
		//Essex
		//Essex
		//Colchester
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Colchester',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '79',
			'county' => null,
			'barony' => ''
		]);
		//Chelmsford
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Essex',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '79',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '79',
			'county' => null,
			'barony' => ''
		]);
		//Hadleigh
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Hadleigh',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '79',
			'county' => null,
			'barony' => ''
		]);
		//Walden
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Walden',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '79',
			'county' => null,
			'barony' => ''
		]);
		//Hertfordshire
		//Berkhamsted
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Berkhamsted',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);			
		//Middlesex
		//London
		DB::table('guilds')->insert([
			'guild_name' => 'Kontor of London Steelyard',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '79',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Garter',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '79',
			'county' => null,
			'barony' => ''
		]);
		//Kensington
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Garter',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '79',
			'county' => null,
			'barony' => ''
		]);
		//Westminster
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Westminster',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '79',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Garter',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '79',
			'county' => null,
			'barony' => ''
		]);
		//Hwicce
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '80',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '80',
			'county' => null,
			'barony' => ''
		]);
		//Kent
		//Kent
		//Canterbury
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '81',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '81',
			'county' => null,
			'barony' => ''
		]);
		//Leeds
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Leeds',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '81',
			'county' => null,
			'barony' => ''
		]);	
		//Lindsey
		//Derbyshire
		//Derby
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Derby',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => null,
			'barony' => ''
		]);
		//Lincolnshire
		//Lincoln
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => null,
			'barony' => ''
		]);
		//Stamford
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Stamford',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => null,
			'barony' => ''
		]);	
		//Nothinghamshire
		//Newark
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Newark',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Mansfield
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Mansfield',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => null,
			'barony' => ''
		]);
		//Southwell
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Southwell',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => null,
			'barony' => ''
		]);		
		//Mercia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '83',
			'county' => null,
			'barony' => ''
		]);
		//Herefordshire
		//Leominster
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Leominster',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '83',
			'county' => null,
			'barony' => ''
		]);
		//Staffordshire
		//Stafford
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Stafford',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '83',
			'county' => null,
			'barony' => ''
		]);	
		//Tamworth
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Mid Anglia',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '83',
			'county' => null,
			'barony' => ''
		]);
		//Mid Anglia
		//Bedfordshire
		//Dunstable
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of Saint George',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => null,
			'barony' => ''
		]);
		//Cambridgeshire
		//Cambridge
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of Saint George',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => null,
			'barony' => ''
		]);
		//Peterborough
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of Saint George',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => null,
			'barony' => ''
		]);		
		//Northamptonshire
		//Northampton
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Northampton',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of Saint George',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Mid Anglia',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => null,
			'barony' => ''
		]);
		//Northumbria
		//Burghshire
		//Wetherby
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Wetherby',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => null,
			'barony' => ''
		]);
		//Cumberland
		//Appleby
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Appleby',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => null,
			'barony' => ''
		]);
		//Yorkshire
		//York
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Northumbria',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => null,
			'barony' => ''
		]);
		//Ripon
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Ripon',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => null,
			'barony' => ''
		]);	
		//Scarborough
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Scarborough',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => null,
			'barony' => ''
		]);
		//Sussex
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '86',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '86',
			'county' => null,
			'barony' => ''
		]);
		//Wessex
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '87',
			'county' => null,
			'barony' => ''
		]);
		//Berkshire
		//Windsor
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Garter',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '87',
			'county' => null,
			'barony' => ''
		]);
		//Dorsetshire
		//Dorchester
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Dorchester',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);	
		//Hampshire
		//Winchester
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Winchester',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '87',
			'county' => null,
			'barony' => ''
		]);
		//Southampton
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Southampton',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '87',
			'county' => null,
			'barony' => ''
		]);
		//Surrey
		//Guildford
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Guildford',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '87',
			'county' => null,
			'barony' => ''
		]);
		//Wiltshire
		//Trowbridge
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Trowbridge',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '87',
			'county' => null,
			'barony' => ''
		]);			
		//Principality of Wales
		//Cornwall
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '88',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '88',
			'county' => null,
			'barony' => ''
		]);
		//Devonshire
		//Okehampton
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Okehampton',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '88',
			'county' => null,
			'barony' => ''
		]);
		//Axminster
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Axminster',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '88',
			'county' => null,
			'barony' => ''
		]);
		//Plymouth
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Plymouth',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '88',
			'county' => null,
			'barony' => ''
		]);	
		//Barnstaple
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Barnstaple',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '88',
			'county' => null,
			'barony' => ''
		]);			
		//Tavistock
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Tavistock',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '88',
			'county' => null,
			'barony' => ''
		]);
		//Dyfed
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '89',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '89',
			'county' => null,
			'barony' => ''
		]);
		//Pembrokeshire
		//Haverford
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Haverford',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '89',
			'county' => null,
			'barony' => ''
		]);	
		//Gwent
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '90',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '90',
			'county' => null,
			'barony' => ''
		]);
		//Gwynedd
		//Anglesey
		//Llanfaes
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Llanfaes',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '91',
			'county' => null,
			'barony' => ''
		]);
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '91',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '91',
			'county' => null,
			'barony' => ''
		]);
		//Flintshire
		//Mold
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Mold',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '91',
			'county' => null,
			'barony' => ''
		]);
		//Powys
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '92',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '92',
			'county' => null,
			'barony' => ''
		]);
		//Kingdom of Scotland
		//Alba
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '93',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '93',
			'county' => null,
			'barony' => ''
		]);
		//Perthshire
		//Ruthven
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Ruthven',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '93',
			'county' => null,
			'barony' => ''
		]);
		//Bernicia
		//Edinburghshire
		//Edinburgh
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Bernicia',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '94',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '94',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Edinburgh',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '94',
			'county' => null,
			'barony' => ''
		]);
		//Dalradia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '95',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '95',
			'county' => null,
			'barony' => ''
		]);
		//Fortriu
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '96',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '96',
			'county' => null,
			'barony' => ''
		]);
		//Galloway
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '97',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '97',
			'county' => null,
			'barony' => ''
		]);
		//Gododdin
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '98',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '98',
			'county' => null,
			'barony' => ''
		]);
		//Strathclyde
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '99',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '99',
			'county' => null,
			'barony' => ''
		]);
		//Crown of Aragon
		//Kingdom of Aragon
		//Aragon
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '100',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '100',
			'county' => null,
			'barony' => ''
		]);
		//Barcelona
		//Barcelona
		//Barcelona
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Barcelona',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '101',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '101',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Barcelona',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '101',
			'county' => null,
			'barony' => ''
		]);
		//Bergueda
		//Baga
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Baga',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '101',
			'county' => null,
			'barony' => ''
		]);
		//Girona
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '102',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '102',
			'county' => null,
			'barony' => ''
		]);
		//Ripolles
		//Olot
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Olot',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '102',
			'county' => null,
			'barony' => ''
		]);
		//Huesca
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '103',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '103',
			'county' => null,
			'barony' => ''
		]);
		//Lleida
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '104',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '104',
			'county' => null,
			'barony' => ''
		]);
		//Urgell
		//Tarrega
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Tarrega',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '104',
			'county' => null,
			'barony' => ''
		]);
		//Tarragona
		//Tarragona
		//Tarragona
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Tarragona',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '105',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '105',
			'county' => null,
			'barony' => ''
		]);
		//Teruel
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '106',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '106',
			'county' => null,
			'barony' => ''
		]);
		//Zaragoza
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '107',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '107',
			'county' => null,
			'barony' => ''
		]);
		//Kingdom of Navarre
		//Alava
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '108',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '108',
			'county' => null,
			'barony' => ''
		]);
		//Gipuzcoa
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '109',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '109',
			'county' => null,
			'barony' => ''
		]);
		//Navarre
		//Irunerria
		//Pamplona
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Navarre',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '110',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '110',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Pamplona',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '110',
			'county' => null,
			'barony' => ''
		]);
		//Viscaya
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '111',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '111',
			'county' => null,
			'barony' => ''
		]);
		//Crown of Castile
		//Kingdom of Castile
		//Avila
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '112',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '112',
			'county' => null,
			'barony' => ''
		]);
		//Burgos
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '113',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '113',
			'county' => null,
			'barony' => ''
		]);
		//Bureba
		//Miranda
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Miranda',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '113',
			'county' => null,
			'barony' => ''
		]);
		//Palencia
		//Campos
		//Palencia
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '114',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '114',
			'county' => null,
			'barony' => ''
		]);
		//Medina
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Medina',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '114',
			'county' => null,
			'barony' => ''
		]);
		//Cerrato
		//Astudillo
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Astudillo',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '114',
			'county' => null,
			'barony' => ''
		]);	
		//Segovia
		//Segovia
		//Segovia
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Segovia',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '115',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '115',
			'county' => null,
			'barony' => ''
		]);
		//Pedraza
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Pedraza',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '115',
			'county' => null,
			'barony' => ''
		]);
		//Soria
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '116',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '116',
			'county' => null,
			'barony' => ''
		]);
		//Toledo
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '117',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '117',
			'county' => null,
			'barony' => ''
		]);
		//Valladolid
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '118',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '118',
			'county' => null,
			'barony' => ''
		]);
		//Medina
		//Medina
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Medina',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '118',
			'county' => null,
			'barony' => ''
		]);
		//Rioseco
		//Medina
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Medina',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '118',
			'county' => null,
			'barony' => ''
		]);
		//Kingdom of Galicia
		//Coruna
		//Santiago
		//Santiago
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '119',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '119',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '119',
			'county' => null,
			'barony' => ''
		]);
		//Lugo
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '120',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '120',
			'county' => null,
			'barony' => ''
		]);
		//Sarria
		//Sarria
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Sarria',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '120',
			'county' => null,
			'barony' => ''
		]);
		//Ourense
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '121',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '121',
			'county' => null,
			'barony' => ''
		]);
		//Pontevedra
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '122',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '122',
			'county' => null,
			'barony' => ''
		]);
		//Kingdom of Leon
		//Caceres
		//Alcantara
		//Eljas
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Eljas',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '123',
			'county' => null,
			'barony' => ''
		]);
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '123',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '123',
			'county' => null,
			'barony' => ''
		]);
		//Leon
		//Leon
		//Leon
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Leon',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '124',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '124',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Leon',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '124',
			'county' => null,
			'barony' => ''
		]);
		//Salamanca
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '125',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '125',
			'county' => null,
			'barony' => ''
		]);
		//Zamora
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '126',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '126',
			'county' => null,
			'barony' => ''
		]);
		//Principality of Asturias
		//Asturias
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '127',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '127',
			'county' => null,
			'barony' => ''
		]);
		//Cantabria
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '128',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '128',
			'county' => null,
			'barony' => ''
		]);
		//Kingdom of Portugal
		//Aveiro
		//Aveiro
		//Aveiro
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Aveiro',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '129',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '129',
			'county' => null,
			'barony' => ''
		]);
		//Braga
		//Barcelos
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Barcelos',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Beira
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '130',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '130',
			'county' => null,
			'barony' => ''
		]);
		//Guarda
		//Guarda
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Guarda',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '130',
			'county' => null,
			'barony' => ''
		]);
		//Braganca
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '131',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '131',
			'county' => null,
			'barony' => ''
		]);
		//Estremadura
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '132',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '132',
			'county' => null,
			'barony' => ''
		]);
		//Danelagen
		//Kingdom of Denmark
		//Jutland
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '133',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '133',
			'county' => null,
			'barony' => ''
		]);
		//Scania
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '134',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '134',
			'county' => null,
			'barony' => ''
		]);
		//Sjaeland
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '135',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '135',
			'county' => null,
			'barony' => ''
		]);
		//Kingdom of Norway
		//Nordjor
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '136',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '136',
			'county' => null,
			'barony' => ''
		]);
		//Sodor
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '137',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '137',
			'county' => null,
			'barony' => ''
		]);
		//Hedmark
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '138',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '138',
			'county' => null,
			'barony' => ''
		]);
		//Oppland
		//
		//Trondheim
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Oppland',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '139',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '139',
			'county' => null,
			'barony' => ''
		]);
		//Rogaland
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '140',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '140',
			'county' => null,
			'barony' => ''
		]);
		//Sorland
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '141',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '141',
			'county' => null,
			'barony' => ''
		]);
		//Vestland
		//Vestland
		//Bergen
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Vestland',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '142',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '142',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Kontor of Bergen Tyskebryggen',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '142',
			'county' => null,
			'barony' => ''
		]);
		//Viken
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '143',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '143',
			'county' => null,
			'barony' => ''
		]);
		//Kingdom of Sweden
		//Gotland
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '144',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '144',
			'county' => null,
			'barony' => ''
		]);
		//Norrland
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '145',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '145',
			'county' => null,
			'barony' => ''
		]);
		//Osterland
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '146',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '146',
			'county' => null,
			'barony' => ''
		]);
		//Smaland
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '147',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '147',
			'county' => null,
			'barony' => ''
		]);
		//Svealand
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '148',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '148',
			'county' => null,
			'barony' => ''
		]);
		//Crown of Poland
		//Kingdom of Poland
		//Greater Poland
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '149',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '149',
			'county' => null,
			'barony' => ''
		]);
		//Lesser Poland
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '150',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '150',
			'county' => null,
			'barony' => ''
		]);
		//Gnesen
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '151',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '151',
			'county' => null,
			'barony' => ''
		]);
		//Kalisz
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '152',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '152',
			'county' => null,
			'barony' => ''
		]);
		//Krakow
		//Krakow
		//Krakow
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Krakow',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '153',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '153',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Krakow',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '153',
			'county' => null,
			'barony' => ''
		]);
		//Kuyavia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '154',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
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
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '155',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
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
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '156',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
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
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '157',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '157',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Posen',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '157',
			'county' => null,
			'barony' => ''
		]);
		//Sieradz
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '158',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
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
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '159',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
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
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '160',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
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
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '161',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
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
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '162',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
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
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '162',
			'county' => null,
			'barony' => ''
		]);
		//Vilnius
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '163',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
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
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '164',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
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
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '165',
			'county' => null,
			'barony' => ''
		]);
		//Esztergom
		//Esztergom
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of Saint George',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '165',
			'county' => null,
			'barony' => ''
		]);
		//Nitra
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '166',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
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
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '167',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
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
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '168',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
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
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '169',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
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
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '170',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '170',
			'county' => null,
			'barony' => ''
		]);
		//Ragusa
		//
		//Ragusa
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Ragusa',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Patrician',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '171',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '171',
			'county' => null,
			'barony' => ''
		]);
		//Slavonia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '172',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '172',
			'county' => null,
			'barony' => ''
		]);
		//Split
		//
		//Split
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Split',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Patrician',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '173',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '173',
			'county' => null,
			'barony' => ''
		]);
		//Zadar
		//
		//Zadar
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Zadar',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Patrician',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '174',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
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
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '175',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '175',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '175',
			'county' => null,
			'barony' => ''
		]);
		//Trapani
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '176',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
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
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '177',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '177',
			'county' => null,
			'barony' => ''
		]);
		//Agrigento
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '178',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '178',
			'county' => null,
			'barony' => ''
		]);
		//Catania
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '179',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '179',
			'county' => null,
			'barony' => ''
		]);
		//Siracusa
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '180',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '180',
			'county' => null,
			'barony' => ''
		]);
		//Kingdom of Naples
		//Naples
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '181',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '181',
			'county' => null,
			'barony' => ''
		]);
		//Capua
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '182',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
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
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Patrician',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '183',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '183',
			'county' => null,
			'barony' => ''
		]);
		//Calabria
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '184',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '184',
			'county' => null,
			'barony' => ''
		]);
		//Basilicata
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '185',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '185',
			'county' => null,
			'barony' => ''
		]);
		//Taranto
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '186',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '186',
			'county' => null,
			'barony' => ''
		]);
		//Foggia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '187',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '187',
			'county' => null,
			'barony' => ''
		]);
		//Benevento
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '188',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '188',
			'county' => null,
			'barony' => ''
		]);
		//Salerno
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '189',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '189',
			'county' => null,
			'barony' => ''
		]);
		//Kingdom of Sardinia
		//Gallura
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '190',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '190',
			'county' => null,
			'barony' => ''
		]);
		//Logudoro
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '191',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '191',
			'county' => null,
			'barony' => ''
		]);
		//Arborea
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '192',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
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
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '193',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
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
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Constantinople',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Bezant',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Macedonia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Kingdom of Thessalonica
		//Hellas
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Peloponessos
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Archipelago
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Epirus
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Thessalonica
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Kingdom of Trebizond
		//Paphlagonia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Armeniac
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Chaldia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Crimea
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Kingdom of Anatolia
		//Thracesia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Bucellaria
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Anatolia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Cappadocia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Seleucia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Opsicia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Nicaea
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Lycia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Pamphylia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Kingdom of Georgia
		//Colchis
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Javakheti
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Kartli
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Kakheti
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Kingdom of Armenia
		//Vaspurakan
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Taron
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Kars
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Azerbaijan
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Kievan Russia
		//Grand Principality of Kiev
		//Kiev
		//Kiev
		//Kiev
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Kiev',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Kiev',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Bezant',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Pereyaslavl
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Grand Principality of Chernigov
		//Chernigov
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Ryazan
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Grand Principality of Ruthenia
		//Halych
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Podolia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Volhynia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Turov
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Grand Principality of Vladimir
		//Vladimir
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Moscow
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Suzdal
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Grand Principality of Smolensk
		//Smolensk
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Rzhev
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Tver
		//
		//Rostov
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Tver',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Principality of Novgorod
		//Novgorod
		//Novgorod
		//Novgorod
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Novgorod',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Patrician',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Kontor of Novgorod Peterhof',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Bezant',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Polotsk
		//
		//Polotsk
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Polotsk',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Patrician',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Pleskov
		//
		//Pleskov
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Pleskov',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Patrician',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Pleskov',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Bezant',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Bulgarian Empire
		//Kingdom of Bulgaria
		//Preslav
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Tarnovo
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Principality of Wallachia
		//Wallachia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
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
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Serbian Empire
		//Principality of Serbia
		//Rashka
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Principality of Bosnia
		//Bosnia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Cordoba
		//Kingdom of Andalucia
		//Algeciras
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Almeria
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Arcos
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Carmona
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Cordoba
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Granada
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Malaga
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Ronda
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Sevilla
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Kingdom of Algarves
		//Algarves
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Badajoz
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Huelva
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Kingdom of Levante
		//Alpuente
		//Alcarria
		//Guadalajara
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Guadalajara',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Dirham',
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
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Baleares
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Denia
		//Albacete
		//Albacete
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Albacete',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Dirham',
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
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Murcia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Valencia
		//Valencia
		//Valencia
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Valencia',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Valencia',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Dirham',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);		
		//Almohad
		//Kingdom of Marrakesh
		//Marrakesh
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Sijilmassa
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Ouarzazate
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Kingdom of Fez
		//Fez
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Rabat
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Tangier
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Kingdom of Kairouan
		//Kairouan
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Tunis
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Djerid
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Tripoli
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Sirte
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Kingdom of Tlemcen
		//Tlemcen
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Oujda
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Oran
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Algiers
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Tiaret
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Mzab
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Laghouat
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Djelfa
		//Djelfa
		//Djelfa
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Djelfa',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Djelfa',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Dinar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);	
		//Principality of Ifni
		//Ifni
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Taroudant
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Principality of Figuig
		//Figuig
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Adrar
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Abbasid
		//Kingdom of Baghdad
		//Baghdad
		//Baghdad
		//Baghdad
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Baghdad',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Baghdad',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Dinar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);	
		//Kingdom of Syria
		//Damascus
		//Damascus
		//Damascus
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Damascus',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Damascus',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Dinar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);	
		//Aleppo
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Homs
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Principality of Najd
		//Najd
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Principality of Antioch
		//Antioch
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Fatimid
		//Kingdom of Cairo
		//Cairo
		//Cairo
		//Cairo
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Cairo',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Cairo',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Dinar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);	
		//Alexandria
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Mansoura
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Damietta
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Minya
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Asyut
		//Asyut
		//Asyut
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Asyut',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Asyut',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Merchant_Dinar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Kharga
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Baritun
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Boula
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Kingdom of Jerusalem
		//Jerusalem
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Principality of Hejaz
		//Mecca
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Medina
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Tabuk
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Khazar Empire
		//Kingdom of Khazaria
		//Aqtobe
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Sarkel
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Atil
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Bolghar
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Bilar
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Kingdom of Alania
		//Derbent
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Azov
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Kingdom of Cumania
		//Sighnaq
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Sozak
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Sibir
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Seljuk Empire
		//Kingdom of Kwarezm
		//Gurganj
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);	
		//Khiva
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);	
		//Kingdom of Isfahan
		//Isfahan
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);	
		//Principality of Hormuz
		//Hormuz
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Kerman
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Baron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);			
		
		
    }
}
