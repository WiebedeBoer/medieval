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
			'guild_category' => '',				//Assembly (317), Chivalric (316), Monastic (), Pilgrim (), Merchant (), Craft ()
			'guild_subcategory' => '',			//Feudal_Estate (282) Ecclesiastical_Estate (21), Burgher_Estate (14); Knight (), Crusader_Teutonic (), Crusader_Hospitaller, Crusader_Templar(); Catholic_Augustinian (), Catholic_Benedictine (), Catholic_Carmelite (), Catholic_Cistercian (), Catholic_Franciscan (), Orthodox_Greek (), Orthodox_Serbian (), Orthodox_Bulgarian (), Muslim_Sufi (); Catholic (), Orthodox_Greek (), Orthodox_Serbian (), Orthodox_Bulgarian (), Muslim_Sunni (), Muslim_Shia (); Bezant(), Dinar (), Florin (); Guild_Smith (), Guild_Tanner (), Guild_Furrier (), Guild_Potter ();
			'empire' => '',						//default = null
			'kingdom' => '',					//default = null
			'duchy' => '',						//default = null
			'county' => '',						//default = null
			'barony' => ''						//default = null
		]);		
		*/
		
		//Holy Roman Empire
		//Kingdom of Germany
		//Austria
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '1',
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
			'duchy' => '1',
			'county' => null,
			'barony' => ''
		]);
		//Bavaria
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '2',
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
			'duchy' => '2',
			'county' => null,
			'barony' => ''
		]);
		//Brabant
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
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
			'guild_subcategory' => 'Feudal_Estate',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '4',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_name' => '',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Florin',
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
			'guild_subcategory' => 'Feudal_Estate',
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
		//Guelders
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Julich
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
		//Lorraine
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '11',
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
			'duchy' => '11',
			'county' => null,
			'barony' => ''
		]);
		//Luxembourg
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
		//Styria
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_name' => '',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Florin',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_name' => '',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '16',
			'county' => null,
			'barony' => ''
		]);
		//Bremen
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Ecclesiastical_Estate',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
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
			'duchy' => '17',
			'county' => null,
			'barony' => ''
		]);
		//Gronegau
		//Osnabruck
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Florin',
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
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Ecclesiastical_Estate',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '18',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Florin',
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
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Ecclesiastical_Estate',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '19',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '19',
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
			'duchy' => '19',
			'county' => null,
			'barony' => ''
		]);
		//Mainz
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Ecclesiastical_Estate',
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
		//Wettergau
		//Frankfurt
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => null,
			'barony' => ''
		]);
		//Salzburg
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Ecclesiastical_Estate',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '21',
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
			'duchy' => '21',
			'county' => null,
			'barony' => ''
		]);
		//Trier
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Ecclesiastical_Estate',
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
		//Milan
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
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
			'duchy' => '23',
			'county' => null,
			'barony' => ''
		]);
		//Piedmont
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Ecclesiastical_Estate',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
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
			'duchy' => '24',
			'county' => null,
			'barony' => ''
		]);
		//Tuscany
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '25',
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
			'guild_subcategory' => 'Feudal_Estate',
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
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Ecclesiastical_Estate',
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
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Burgher_Estate',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '28',
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
			'duchy' => '28',
			'county' => null,
			'barony' => ''
		]);
		//Arezzo
		//Arezzo
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '28',
			'county' => null,
			'barony' => ''
		]);
		//Genoa
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Burgher_Estate',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '29',
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
			'duchy' => '29',
			'county' => null,
			'barony' => ''
		]);
		//Noli
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Burgher_Estate',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '30',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Burgher_Estate',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '32',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '32',
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
			'duchy' => '32',
			'county' => null,
			'barony' => ''
		]);
		//Pisa
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Burgher_Estate',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '33',
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
			'duchy' => '33',
			'county' => null,
			'barony' => ''
		]);
		//Venice
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Burgher_Estate',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '34',
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
			'duchy' => '34',
			'county' => null,
			'barony' => ''
		]);
		//Kingdom of Bohemia
		//Bohemia
		//Prague
		//Prague
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '35',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '35',
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
			'duchy' => '35',
			'county' => null,
			'barony' => ''
		]);
		//Lusatia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '36',
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
			'duchy' => '36',
			'county' => null,
			'barony' => ''
		]);
		//Moravia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '37',
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
			'duchy' => '37',
			'county' => null,
			'barony' => ''
		]);
		//Lower Silesia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '38',
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
			'duchy' => '38',
			'county' => null,
			'barony' => ''
		]);
		//Schweidnitz
		//Hirschberg
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Florin',
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
			'guild_subcategory' => 'Feudal_Estate',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '39',
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
			'guild_subcategory' => 'Feudal_Estate',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '40',
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
			'duchy' => '40',
			'county' => null,
			'barony' => ''
		]);
		//Cisjurania
		//Dauphine
		//Voiron
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '41',
			'county' => null,
			'barony' => ''
		]);
		//Lyonnais
		//Lyon
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '41',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Ecclesiastical_Estate',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '41',
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
			'duchy' => '41',
			'county' => null,
			'barony' => ''
		]);
		//Transjurania
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Ecclesiastical_Estate',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '42',
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
			'duchy' => '42',
			'county' => null,
			'barony' => ''
		]);
		//Orange
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Ecclesiastical_Estate',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '43',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_name' => '',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '44',
			'county' => null,
			'barony' => ''
		]);
		//Savoy
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Ecclesiastical_Estate',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '45',
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
			'duchy' => '45',
			'county' => null,
			'barony' => ''
		]);
		//Papal States
		//Rome
		//Rome
		//Rome
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Ecclesiastical_Estate',
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
			'guild_name' => '',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Florin',
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
			'guild_subcategory' => 'Feudal_Estate',
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
		//Senigallia
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '48',
			'county' => null,
			'barony' => ''
		]);
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Burgher_Estate',
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
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Ecclesiastical_Estate',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '49',
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
			'duchy' => '49',
			'county' => null,
			'barony' => ''
		]);
		//Teutonic Order State
		//Livonia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Ecclesiastical_Estate',
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
		//Estonia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Prussia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Pomerelia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Pomerania
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Brandenburg
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Mecklenburg
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Wagrigau
		//lubeck
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Crown of France
		//Kingdom of France
		//Anjou
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Aquitaine
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Auvergne
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Berry
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Bourbonnais
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Gascony
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Champagne
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Ecclesiastical_Estate',
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
		//Provins
		//provins
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Merchant',
			'guild_subcategory' => 'Florin',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Francia
		//Pay de France
		//paris
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//paris
		DB::table('guilds')->insert([
			'guild_name' => 'Order of the Star',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Normandy
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Orleanais
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Picardy
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Flanders
		//bruges
		DB::table('guilds')->insert([
			'guild_name' => 'Order of the Golden Fleece',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Poitou
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Toulouse
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Ecclesiastical_Estate',
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
		//Kingdom of Brittany
		//Brittany
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Domnonee
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Retz
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Crown of Britain
		//High Kingdom of Ireland
		//Connacht
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Leinster
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Meath
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Munster
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Ulster
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Kingdom of England
		//East Anglia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Essex
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Hwicce
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Kent
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Mercia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Mid Anglia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Northumbria
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Sussex
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Wessex
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Berkshire
		//windsor
		DB::table('guilds')->insert([
			'guild_name' => 'Order of the Garter',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
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
			'guild_subcategory' => 'Feudal_Estate',
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
		//Dyfed
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Gwent
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Gwynedd
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Powys
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Kingdom of Scotland
		//Alba
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Bernicia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Fortriu
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Galloway
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Gododdin
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Strathclyde
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Crown of Aragon
		//Kingdom of Aragon
		//Aragon
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Barcelona
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Girona
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Huesca
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Lleida
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Tarragona
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Ecclesiastical_Estate',
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
		//Teruel
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Zaragoza
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Kingdom of Navarre
		//Alava
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Gipuzcoa
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Navarre
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Viscaya
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Crown of Castile
		//Kingdom of Castile
		//Avila
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Burgos
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Palencia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Segovia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Soria
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Toledo
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Valladolid
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Kingdom of Galicia
		//Coruna
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Lugo
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Ourense
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Pontevedra
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Kingdom of Leon
		//Caceres
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Leon
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Salamanca
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Zamora
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Principality of Asturias
		//Asturias
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Cantabria
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Kingdom of Portugal
		//Aveiro
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Beira
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Braganca
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Estremadura
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Danelagen
		//Kingdom of Denmark
		//Jutland
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Scania
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Sjaeland
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Kingdom of Norway
		//Nordjor
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Sodor
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Hedmark
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Oppland
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Ecclesiastical_Estate',
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
		//Rogaland
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Sorland
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Vestland
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Viken
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Kingdom of Sweden
		//Gotland
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Norrland
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Osterland
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Smaland
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Svealand
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Crown of Poland
		//Kingdom of Poland
		//Greater Poland
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Lesser Poland
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Gnesen
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Kalisz
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Krakow
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Kuyavia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Mazovia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Plock
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Posen
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Sieradz
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Warsaw
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Grand Duchy of Lithuania
		//Minsk
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Samogitia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Tracken
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Vilnius
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Crown of Hungary
		//Kingdom of Hungary
		//Hungary
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Buda
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Esztergom
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//esztergom
		DB::table('guilds')->insert([
			'guild_name' => 'Order of Saint George',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Nitra
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Temesvar
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Ungvar
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Transylvania
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Kingdom of Croatia
		//Dalmatia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Ragusa
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Burgher_Estate',
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
		//Slavonia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Split
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Burgher_Estate',
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
		//Zadar
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Burgher_Estate',
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
		//Trinacria
		//Kingdom of Sicily
		//Palermo
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Trapani
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Messina
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Agrigento
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Catania
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Siracusa
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Kingdom of Naples
		//Naples
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Capua
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Amalfi
		//Amalfi
		//amalfi
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Burgher_Estate',
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
		//Calabria
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Basilicata
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Taranto
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Foggia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Benevento
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Salerno
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Kingdom of Sardinia
		//Gallura
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Logudoro
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Arborea
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Cagliari
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Byzantine Empire
		//Kingdom of Thrace
		//Thrace
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Macedonia
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Pereyaslavl
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Ecclesiastical_Estate',
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
		//Principality of Novgorod
		//Novgorod
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Burgher_Estate',
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
		//Polotsk
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Burgher_Estate',
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
		//Pleskov
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Burgher_Estate',
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
		//Bulgarian Empire
		//Kingdom of Bulgaria
		//Preslav
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Almohad
		//Kingdom of Marrakesh
		//Marrakesh
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Principality of Ifni
		//Ifni
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Kingdom of Syria
		//Damascus
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Aleppo
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
		//Alexandria
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Ecclesiastical_Estate',
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
		//Kharga
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => '',
			'guild_category' => 'Assembly',
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
			'guild_subcategory' => 'Feudal_Estate',
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
		
		/*




	
		

		//trade leagues
		//guild 23
		DB::table('guilds')->insert([
			'guild_name' => 'Hanseatic League',
			'guild_category' => 'trade_league',
			'place' => '15',
			'quarter' => '16144',
			'realm' => '3',
			'master' => '1'
		]);	
		//guild 24
		DB::table('guilds')->insert([
			'guild_name' => 'Lorrainian League',
			'guild_category' => 'trade_league',
			'place' => '79',
			'quarter' => '16208',
			'realm' => '3',
			'master' => '1'
		]);	
		//guild 25
		DB::table('guilds')->insert([
			'guild_name' => 'Alsatian League',
			'guild_category' => 'trade_league',
			'place' => '59',
			'quarter' => '16188',
			'realm' => '3',
			'master' => '1'
		]);			
		//guild 26
		DB::table('guilds')->insert([
			'guild_name' => 'Swabian League',
			'guild_category' => 'trade_league',
			'place' => '30',
			'quarter' => '16159',
			'realm' => '3',
			'master' => '1'
		]);	
		//guild 27
		DB::table('guilds')->insert([
			'guild_name' => 'Lombard League',
			'guild_category' => 'trade_league',
			'place' => '461',
			'quarter' => '16590',
			'realm' => '24',
			'master' => '1'
		]);	
		//guild 28
		DB::table('guilds')->insert([
			'guild_name' => 'Tuscan League',
			'guild_category' => 'trade_league',
			'place' => '489',
			'quarter' => '16618',
			'realm' => '121',
			'master' => '1'
		]);	
		//guild 29
		DB::table('guilds')->insert([
			'guild_name' => 'Rhenish League',
			'guild_category' => 'trade_league',
			'place' => '73',
			'quarter' => '16202',
			'realm' => '3',
			'master' => '1'
		]);	
		//guild 30
		DB::table('guilds')->insert([
			'guild_name' => 'Prussian League',
			'guild_category' => 'trade_league',
			'place' => '277',
			'quarter' => '16406',
			'realm' => '5',
			'master' => '1'
		]);	
		//guild 31
		DB::table('guilds')->insert([
			'guild_name' => 'Hungarian League',
			'guild_category' => 'trade_league',
			'place' => '685',
			'quarter' => '16814',
			'realm' => '10',
			'master' => '1'
		]);	
		//kontors
		//guild 32
		DB::table('guilds')->insert([
			'guild_name' => 'London Steelyard',
			'guild_category' => 'trade_kontor',
			'place' => '185',
			'quarter' => '16314',
			'realm' => '8',
			'master' => '1'
		]);	
		//guild 33
		DB::table('guilds')->insert([
			'guild_name' => 'Bruges',
			'guild_category' => 'trade_kontor',
			'place' => '97',
			'quarter' => '16226',
			'realm' => '3',
			'master' => '1'
		]);	
		//guild 34
		DB::table('guilds')->insert([
			'guild_name' => 'Tyskebryggen',
			'guild_category' => 'trade_kontor',
			'place' => '241',
			'quarter' => '16370',
			'realm' => '19',
			'master' => '1'
		]);	
		//guild 35
		DB::table('guilds')->insert([
			'guild_name' => 'Kauen',
			'guild_category' => 'trade_kontor',
			'place' => '663',
			'quarter' => '16792',
			'realm' => '51',
			'master' => '1'
		]);	
		//guild 36
		DB::table('guilds')->insert([
			'guild_name' => 'Novgorod Peterhof',
			'guild_category' => 'trade_kontor',
			'place' => '793',
			'quarter' => '16922',
			'realm' => '123',
			'master' => '1'
		]);	
		//guild 37
		DB::table('guilds')->insert([
			'guild_name' => 'Pleskov',
			'guild_category' => 'trade_kontor',
			'place' => '789',
			'quarter' => '16918',
			'realm' => '95',
			'master' => '1'
		]);	
		//fairs
		//guild 38
		DB::table('guilds')->insert([
			'guild_name' => 'Champagne Fairs',
			'guild_category' => 'trade_fair',
			'place' => '129',
			'quarter' => '16258',
			'realm' => '9',
			'master' => '1'
		]);
		//guild 39
		DB::table('guilds')->insert([
			'guild_name' => 'Toulouse Fair',
			'guild_category' => 'trade_fair',
			'place' => '165',
			'quarter' => '16294',
			'realm' => '9',
			'master' => '1'
		]);
		//guild 40
		DB::table('guilds')->insert([
			'guild_name' => 'Nuremberg Fair',
			'guild_category' => 'trade_fair',
			'place' => '32',
			'quarter' => '16161',
			'realm' => '3',
			'master' => '1'
		]);
		//guild 41
		DB::table('guilds')->insert([
			'guild_name' => 'Genoa Fair',
			'guild_category' => 'trade_fair',
			'place' => '465',
			'quarter' => '16594',
			'realm' => '114',
			'master' => '1'
		]);
		//guild 42
		DB::table('guilds')->insert([
			'guild_name' => 'Venice Fair',
			'guild_category' => 'trade_fair',
			'place' => '469',
			'quarter' => '16598',
			'realm' => '113',
			'master' => '1'
		]);
		//guild 43
		DB::table('guilds')->insert([
			'guild_name' => 'Florence Fair',
			'guild_category' => 'trade_fair',
			'place' => '489',
			'quarter' => '16618',
			'realm' => '121',
			'master' => '1'
		]);
		//guild 44
		DB::table('guilds')->insert([
			'guild_name' => 'Scarborough Fair',
			'guild_category' => 'trade_fair',
			'place' => '207',
			'quarter' => '16336',
			'realm' => '8',
			'master' => '1'
		]);
		//guild 45
		DB::table('guilds')->insert([
			'guild_name' => 'Cologne Fair',
			'guild_category' => 'trade_fair',
			'place' => '73',
			'quarter' => '16202',
			'realm' => '3',
			'master' => '1'
		]);
		//guild 46
		DB::table('guilds')->insert([
			'guild_name' => 'Frankfurt Fair',
			'guild_category' => 'trade_fair',
			'place' => '71',
			'quarter' => '16200',
			'realm' => '3',
			'master' => '1'
		]);
		//guild 47
		DB::table('guilds')->insert([
			'guild_name' => 'Lyon Fair',
			'guild_category' => 'trade_fair',
			'place' => '179',
			'quarter' => '16308',
			'realm' => '9',
			'master' => '1'
		]);
		//guild 48
		DB::table('guilds')->insert([
			'guild_name' => 'Palermo Fair',
			'guild_category' => 'trade_fair',
			'place' => '529',
			'quarter' => '16658',
			'realm' => '27',
			'master' => '1'
		]);
		//guild 49
		DB::table('guilds')->insert([
			'guild_name' => 'Santiago Fair',
			'guild_category' => 'trade_fair',
			'place' => '397',
			'quarter' => '16526',
			'realm' => '34',
			'master' => '1'
		]);
		//guild 50
		DB::table('guilds')->insert([
			'guild_name' => 'Leon Fair',
			'guild_category' => 'trade_fair',
			'place' => '381',
			'quarter' => '16510',
			'realm' => '33',
			'master' => '1'
		]);
		//guild 51
		DB::table('guilds')->insert([
			'guild_name' => 'Pamplona Fair',
			'guild_category' => 'trade_fair',
			'place' => '345',
			'quarter' => '16474',
			'realm' => '30',
			'master' => '1'
		]);
		//merchants guilds
		//low countries guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '86',
			'quarter' => '16215',
			'realm' => '3',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Coopers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '85',
			'quarter' => '16214',
			'realm' => '3',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '97',
			'quarter' => '16226',
			'realm' => '3',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '98',
			'quarter' => '16227',
			'realm' => '3',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '100',
			'quarter' => '16229',
			'realm' => '3',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '99',
			'quarter' => '16228',
			'realm' => '3',
			'master' => '1'
		]);
		//english guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '185',
			'quarter' => '16314',
			'realm' => '8',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '207',
			'quarter' => '16336',
			'realm' => '8',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '201',
			'quarter' => '16330',
			'realm' => '8',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '221',
			'quarter' => '16350',
			'realm' => '8',
			'master' => '1'
		]);
		//german guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '73',
			'quarter' => '16202',
			'realm' => '3',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Bookbinders Guild',
			'guild_category' => 'merchant_guild',
			'place' => '32',
			'quarter' => '16161',
			'realm' => '3',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Salters Guild',
			'guild_category' => 'merchant_guild',
			'place' => '3',
			'quarter' => '16132',
			'realm' => '3',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Fishmongers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '14',
			'quarter' => '16143',
			'realm' => '3',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Coopers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '15',
			'quarter' => '16144',
			'realm' => '3',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Coopers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '37',
			'quarter' => '16166',
			'realm' => '3',
			'master' => '1'
		]);
		//lombard guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '469',
			'quarter' => '16598',
			'realm' => '113',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '457',
			'quarter' => '16586',
			'realm' => '24',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '464',
			'quarter' => '16593',
			'realm' => '24',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '465',
			'quarter' => '16594',
			'realm' => '114',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Mercers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '462',
			'quarter' => '16591',
			'realm' => '24',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Mercers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '461',
			'quarter' => '16590',
			'realm' => '24',
			'master' => '1'
		]);
		//tuscan guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '501',
			'quarter' => '16630',
			'realm' => '117',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '503',
			'quarter' => '16632',
			'realm' => '122',
			'master' => '1'
		]);
		//croatia guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild',
			'guild_category' => 'merchant_guild',
			'place' => '669',
			'quarter' => '16798',
			'realm' => '118',
			'master' => '1'
		]);
		//south italian guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild',
			'guild_category' => 'merchant_guild',
			'place' => '532',
			'quarter' => '16661',
			'realm' => '27',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Haberdashers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '529',
			'quarter' => '16658',
			'realm' => '27',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild',
			'guild_category' => 'merchant_guild',
			'place' => '507',
			'quarter' => '16636',
			'realm' => '119',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Haberdashers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '506',
			'quarter' => '16635',
			'realm' => '116',
			'master' => '1'
		]);
		//polish
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Mercers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '645',
			'quarter' => '16774',
			'realm' => '29',
			'master' => '1'
		]);
		//teutonic order state guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Mercers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '277',
			'quarter' => '16406',
			'realm' => '5',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Mercers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '279',
			'quarter' => '16408',
			'realm' => '5',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Mercers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '280',
			'quarter' => '16409',
			'realm' => '5',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '269',
			'quarter' => '16398',
			'realm' => '5',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Mercers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '285',
			'quarter' => '16414',
			'realm' => '5',
			'master' => '1'
		]);
		//scandinavian guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Fishmongers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '241',
			'quarter' => '16370',
			'realm' => '19',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Fishmongers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '250',
			'quarter' => '16379',
			'realm' => '18',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Coopers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '257',
			'quarter' => '16386',
			'realm' => '20',
			'master' => '1'
		]);
		//french guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '113',
			'quarter' => '16242',
			'realm' => '9',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '114',
			'quarter' => '16243',
			'realm' => '9',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Tanners Guild',
			'guild_category' => 'merchant_guild',
			'place' => '115',
			'quarter' => '16244',
			'realm' => '9',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '116',
			'quarter' => '16245',
			'realm' => '9',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Mercers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '134',
			'quarter' => '16263',
			'realm' => '9',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '165',
			'quarter' => '16294',
			'realm' => '9',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild',
			'guild_category' => 'merchant_guild',
			'place' => '169',
			'quarter' => '16298',
			'realm' => '9',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild',
			'guild_category' => 'merchant_guild',
			'place' => '183',
			'quarter' => '16312',
			'realm' => '9',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild',
			'guild_category' => 'merchant_guild',
			'place' => '164',
			'quarter' => '16293',
			'realm' => '9',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild',
			'guild_category' => 'merchant_guild',
			'place' => '131',
			'quarter' => '16260',
			'realm' => '9',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild',
			'guild_category' => 'merchant_guild',
			'place' => '132',
			'quarter' => '16261',
			'realm' => '9',
			'master' => '1'
		]);
		//spanish and portuguese guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '390',
			'quarter' => '16519',
			'realm' => '32',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '391',
			'quarter' => '16520',
			'realm' => '32',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '393',
			'quarter' => '16522',
			'realm' => '32',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild',
			'guild_category' => 'merchant_guild',
			'place' => '405',
			'quarter' => '16534',
			'realm' => '35',
			'master' => '1'
		]);
		//russian guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Furriers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '789',
			'quarter' => '16918',
			'realm' => '95',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Furriers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '795',
			'quarter' => '16924',
			'realm' => '123',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '757',
			'quarter' => '16886',
			'realm' => '89',
			'master' => '1'
		]);
		//byzantine guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Haberdashers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '825',
			'quarter' => '16954',
			'realm' => '4',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Haberdashers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '835',
			'quarter' => '16964',
			'realm' => '4',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Haberdashers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '909',
			'quarter' => '17038',
			'realm' => '4',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Haberdashers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '839',
			'quarter' => '16968',
			'realm' => '4',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '857',
			'quarter' => '16986',
			'realm' => '4',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '887',
			'quarter' => '17016',
			'realm' => '4',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Haberdashers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '867',
			'quarter' => '16996',
			'realm' => '4',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Haberdashers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '869',
			'quarter' => '16998',
			'realm' => '4',
			'master' => '1'
		]);
		//andalucian guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Tanners Guild',
			'guild_category' => 'merchant_guild',
			'place' => '425',
			'quarter' => '16554',
			'realm' => '39',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Haberdashers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '441',
			'quarter' => '16570',
			'realm' => '39',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Haberdashers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '369',
			'quarter' => '16498',
			'realm' => '39',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '445',
			'quarter' => '16574',
			'realm' => '39',
			'master' => '1'
		]);
		//north african guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '549',
			'quarter' => '16678',
			'realm' => '40',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '553',
			'quarter' => '16682',
			'realm' => '41',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '593',
			'quarter' => '16722',
			'realm' => '42',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '629',
			'quarter' => '16758',
			'realm' => '43',
			'master' => '1'
		]);
		//levant guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '993',
			'quarter' => '17122',
			'realm' => '46',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '1005',
			'quarter' => '17134',
			'realm' => '46',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '1005',
			'quarter' => '17134',
			'realm' => '46',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '1033',
			'quarter' => '17162',
			'realm' => '46',
			'master' => '1'
		]);
		//persian guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '961',
			'quarter' => '17090',
			'realm' => '47',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '957',
			'quarter' => '17086',
			'realm' => '47',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '953',
			'quarter' => '17082',
			'realm' => '47',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Haberdashers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '965',
			'quarter' => '17094',
			'realm' => '47',
			'master' => '1'
		]);
		*/
		
    }
}
