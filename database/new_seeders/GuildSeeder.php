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
			'guild_category' => '',				//
			'guild_subcategory' => '',			//
			'empire' => '',						//default = null
			'kingdom' => '',					//default = null
			'duchy' => '',						//default = null
			'county' => '',						//default = null
			'barony' => ''						//default = null
		]);
		
		*/
		
		/*
		//building:										category:	subcategory:				amount:
		//
		//												(23)
		//												Chivalric	Crusader_Teutonic			(1)
		//												Chivalric	Crusader_Hospitaller		(1)
		//												Chivalric	Crusader_Templar			(1)
		//												Chivalric	Crusader_Common				(9)
		//												Chivalric	Knight						(11)
		//
		//												(13)
		//												Monastic	Monk_Catholic_Canon			(5)
		//												Monastic	Monk_Catholic_Mendicant		(4)
		//												Monastic	Monk_Orthodox_Greek			(1)
		//												Monastic	Monk_Orthodox_Serbian		(1)
		//												Monastic	Monk_Orthodox_Bulgarian		(1)
		//												Monastic	Monk_Muslim_Sufi			(1)
		//
		//												(6)
		//												Cleric		Cleric_Catholic				(1)
		//												Cleric		Cleric_Orthodox_Greek		(1)
		//												Cleric		Cleric_Orthodox_Serbian		(1)
		//												Cleric		Cleric_Orthodox_Bulgarian	(1)
		//												Cleric		Cleric_Muslim_Sunni			(1)
		//												Cleric		Cleric_Muslim_Shia			(1)
		//
		//												(328)
		//Royal_Court & (Empire):						Court		Empire						(19)
		//Royal_Court & (!Empire):						Court		Major_Kingdom				(45)
		//Chancellery & (!Court) & (Church State):		Court		Church_Kingdom				(1)
		//Chancellery & (!Court) & (Monastic State):	Court		Monastic_Kingdom			(1)
		//Ducal_Court:									Court		Petty_Kingdom				(234)
		//Chancellery & (!Court) & (Archbishop):		Court		Bishopric					(16)
		//Signoria:										Court		Republic					(14)
		//
		//												(152)
		//Cathedral_School:								University	Scholar_Bishop				(105)
		//Monastic_School:								University	Scholar_Monastic			(47)
		//
		//												(769)													name:
		//Guild_Potter:									Craft		Master_Potterer				(85)			Potterers
		//Guild_Smith:									Craft		Master_Smith				(76)			Cutlers
		//Guild_Tanner:									Craft		Master_Tanner				(115)			Skinners
		//Guild_Furrier:								Craft		Master_Furrier				(13)			Furriers
		//Guild_Silk:									Craft		Master_Silk_Weaver			(40)			Silk Weavers
		//Guild_Dyer_Woad:								Craft		Master_Dyer_Woad			(58)			Dyers
		//Guild_Dyer_Kermes:							Craft		Master_Dyer_Kermes			(17)			Dyers
		//Guild_Dyer_Madder:							Craft		Master_Dyer_Madder			(10)			Dyers
		//Guild_Dyer_Saffron:							Craft		Master_Dyer_Saffron			(33)			Dyers
		//Guild_Perfume_Lavender:						Craft		Master_Perfumer_Lavender	(80)			Perfumers
		//Guild_Perfume_Incense:						Craft		Master_Perfumer_Incense		(12)			Perfumers
		//Guild_Perfume_Rose:							Craft		Master_Perfumer_Rose		(5)				Perfumers
		//
		//Arsenal:										Craft		Master_Mariner				(97)			Mariners
		//Armoury_Mill:									Craft		Master_Platner				(32)			Platners
		//Armoury:										Craft		Master_Armorer				(117)			Armorers
		//
		//Guild_Thatcher:								Craft		Master_Thatcher				(15)			Thatchers
		//Guild_Joiner:									Craft		Master_Joiner				(14)			Joiners
		//Guild_Miller:									Craft		Master_Miller				(51)			Millers
		//Guild_Fuller:									Craft		Master_Fuller				(51)			Fullers
		//Guild_Vintner:								Craft		Master_Vintner				(49)			Vintners
		//Guild_Cheesemonger:							Craft		Master_Cheesemonger			(29)			Cheesemongers
		//Guild_Chandler:								Craft		Master_Chandler				(26)			Chandlers
		//Guild_Ironworks:								Craft		Master_Ironmonger			(36)			Forge
		//
		//												(1079)
		//Tiltyard:										Feast		Tournament					(532)
		//Merchant_Bank | Cloth_Hall | Trade_Fair:		Feast		Fair						(215)
		//Coaching_Inn:									Feast		Tavern						(160)
		//Hunting_Lodge_Boar:							Feast		Hunt_Boar					(61)
		//Hunting_Lodge_Deer:							Feast		Hunt_Deer					(86)
		//Hunting_Lodge_Hare:							Feast		Hunt_Falconer				(15)
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
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '1',
			'county' => '3',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Vienna',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '1',
			'county' => '3',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Vienna',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '1',
			'county' => '3',
			'barony' => ''
		]);
		//Kreuzenstein
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Kreuzenstein',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '1',
			'county' => '3',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Kreuzenstein',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
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
			'guild_subcategory' => 'Empire',
			'empire' => '1',
			'kingdom' => '1',
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
			'guild_name' => 'Cutlers Guild of Nuremberg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '2',
			'county' => '7',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Nuremberg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
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
			'guild_subcategory' => 'Scholar_Monastic',
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
			'guild_name' => 'Cutlers Guild of Brussels',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => '12',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Brussels',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
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
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => '12',
			'barony' => ''
		]);
		//Haspengau
		//Tongeren
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Tongeren',
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
			'guild_name' => 'Skinners Guild of Cambrai',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => '15',
			'barony' => ''
		]);
		//Taisnieres
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Taisnieres',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => '15',
			'barony' => ''
		]);
		//Landrecies
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Mormal',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => '15',
			'barony' => ''
		]);
		//Toxandria
		//Antwerp
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Antwerp',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => '16',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Antwerp',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
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
			'guild_name' => 'Forest of Turnhout',
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
			'guild_name' => 'Forest of Hersel',
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
			'guild_name' => 'Forest of Heeswick',
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
			'guild_name' => 'Forest of Herlaar',
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
			'guild_name' => 'Skinners Guild of Waalwick',
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
			'guild_name' => 'Cutlers Guild of Bosch',
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
			'guild_name' => 'Forest of Mast',
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
			'guild_name' => 'Cutlers Guild of Ghent',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => '17',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Ghent',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
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
			'guild_name' => 'Cutlers Guild of Graz',
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
			'guild_name' => 'Inn',
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
			'guild_name' => 'Cutlers Guild of Sankt Andra',
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
			'guild_name' => 'Inn',
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
			'guild_name' => 'Dyers Guild of Tergeste',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Madder',
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
			'guild_name' => 'Potterers Guild of Fulda',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
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
			'guild_subcategory' => 'Scholar_Monastic',
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
			'guild_name' => 'Potterers Guild of Rotenburg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '6',
			'county' => '30',
			'barony' => ''
		]);
		//Sulmgau
		//Hall
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '6',
			'county' => '35',
			'barony' => ''
		]);
		//Hohenstein
		DB::table('guilds')->insert([
			'guild_name' => 'Joiners Guild of Hohenstein',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Joiner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '6',
			'county' => '35',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Hohenstein',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
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
			'guild_subcategory' => 'Scholar_Bishop',
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
		//Nordheim
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Nordheim',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
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
		//Holtland
		//Waarderhof
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild Waarderhof',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => '47',
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
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => '49',
			'barony' => ''
		]);
		//Runxputte
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild Runxputte',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => '49',
			'barony' => ''
		]);
		//Maasland
		//Delft
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Delft',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => '50',
			'barony' => ''
		]);
		//Nifterlake
		//Utrecht
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Utrecht',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => '51',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Utrecht',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
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
		//Oostergau
		//Wytgaard
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild Wytgaard',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => '54',
			'barony' => ''
		]);
		//Mariengaard
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild Mariengaard',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => '54',
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
			'guild_name' => 'Inn',
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
			'guild_subcategory' => 'Scholar_Monastic',
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
			'guild_name' => 'Forest of Linge',
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
			'guild_name' => 'Forest of Linge',
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
		//Veluwe
		//Hall
		DB::table('guilds')->insert([
			'guild_name' => 'Thatchers Guild of Hall',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Thatcher',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => '61',
			'barony' => ''
		]);
		//Woest Hoef
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
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
		//Boksum
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Boksum',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
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
		//Doornenburg
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Doornenburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Julich',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '9',
			'county' => '73',
			'barony' => ''
		]);
		//Duren
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Duren',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Aachen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
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
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '10',
			'county' => '76',
			'barony' => ''
		]);
		//Ardennengau
		//Malmedy
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Malmedy',
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
			'guild_name' => 'Skinners Guild of Namur',
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
			'guild_name' => 'Skinners Guild of Maastricht',
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
			'guild_name' => 'Forest of Raven',
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
			'guild_name' => 'Cutlers Guild of Metz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '11',
			'county' => '81',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Metz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
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
		//Chauvency
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
			'guild_name' => 'Skinners Guild of Hildesheim',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '13',
			'county' => '95',
			'barony' => ''
		]);
		//Marienrode
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Marienrode',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
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
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '13',
			'county' => '99',
			'barony' => ''
		]);
		//Lichtenstein
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Lichtenstein',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
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
		//Grauhof
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Grauhof',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '13',
			'county' => '99',
			'barony' => ''
		]);
		//Woltingerode
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Woltingerode',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '13',
			'county' => '99',
			'barony' => ''
		]);
		//Zorge
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Zorge',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '13',
			'county' => '99',
			'barony' => ''
		]);
		//Hohoffenberg
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Hohoffenberg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '13',
			'county' => '99',
			'barony' => ''
		]);
		//Langelsheim
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Langelsheim',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
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
			'guild_name' => 'Cutlers Guild of Sankt Margarethen',
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
			'guild_name' => 'Cutlers Guild of Innsbruck',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '14',
			'county' => '102',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Innsbruck',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '14',
			'county' => '102',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Innsbruck',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '14',
			'county' => '102',
			'barony' => ''
		]);
		//Kufstein
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Kufstein',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '14',
			'county' => '102',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Kufstein',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '14',
			'county' => '102',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Kufstein',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '14',
			'county' => '102',
			'barony' => ''
		]);
		//Muhlau
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Muhlau',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '14',
			'county' => '102',
			'barony' => ''
		]);
		//Pfaffenhof
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Pfaffenhof',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '14',
			'county' => '102',
			'barony' => ''
		]);
		//Oberhof
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Oberhof',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
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
			'guild_name' => 'Forest of Haiming',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Falconer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '14',
			'county' => '104',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Tirol',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '14',
			'county' => '104',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Tirol',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '14',
			'county' => '104',
			'barony' => ''
		]);
		//Reifenstein
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Leinefeld',
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
			'guild_name' => 'Skinners Guild of Ortenberg',
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
			'guild_name' => 'Cutlers Guild of Augsburg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '108',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Augsburg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
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
			'guild_name' => 'Cutlers Guild of Wittelsbach',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '108',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Wittelsbach',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
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
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '109',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Freiburg',
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
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '109',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Basel',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '109',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Basel',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '109',
			'barony' => ''
		]);
		//Staufen
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Staufen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
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
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '113',
			'barony' => ''
		]);
		//Nordgau
		//Strassburg
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Strassburg',
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
			'guild_name' => 'Furriers Guild of Nordlingen',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Hohenzollern',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '116',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Hohenzollern',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '116',
			'barony' => ''
		]);
		//Falkenstein
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Falkenstein',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Falconer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '116',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Falkenstein',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '116',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Falkenstein',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Hohenstaufen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '116',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Hohenstaufen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '116',
			'barony' => ''
		]);
		//Biberach
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Biberach',
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
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '119',
			'barony' => ''
		]);
		//Zurichgau
		//Zurich
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Zurich',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '120',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Zurich',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '120',
			'barony' => ''
		]);
		//Winterthur
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Winterthur',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '120',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Winterthur',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '120',
			'barony' => ''
		]);
		//Kyburg
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Kyburg',
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
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '16',
			'county' => '121',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Erfurt',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '16',
			'county' => '121',
			'barony' => ''
		]);
		//Weimar
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Weimar',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '16',
			'county' => '121',
			'barony' => ''
		]);
		//Eisenach
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Eisenach',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '16',
			'county' => '121',
			'barony' => ''
		]);
		//Altgau
		//Gruessen
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Gruessen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '16',
			'county' => '122',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Muhlhausen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '16',
			'county' => '123',
			'barony' => ''
		]);
		//Helmegau
		//Nordhausen
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Nordhausen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '16',
			'county' => '124',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Arnstadt',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
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
			'guild_name' => 'Skinners Guild of Sondershausen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '16',
			'county' => '126',
			'barony' => ''
		]);
		//Frankenhausen
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Frankenhausen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '16',
			'county' => '126',
			'barony' => ''
		]);
		//Orlagau
		//Rudolstadt
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Rudolstadt',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '16',
			'county' => '127',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Naumburg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
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
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '16',
			'county' => '129',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Zwickau',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '16',
			'county' => '129',
			'barony' => ''
		]);
		//Plauen
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Plauen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '16',
			'county' => '129',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Plauen',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '16',
			'county' => '129',
			'barony' => ''
		]);
		//Erlahammer
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Erlahammer',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Bremen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
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
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
			'county' => '132',
			'barony' => ''
		]);
		//Marsfelde
		DB::table('guilds')->insert([
			'guild_name' => 'Thatchers Guild of Marsfelde',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Thatcher',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
			'county' => '132',
			'barony' => ''
		]);
		//Augau
		//Holzminden
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Holzminden',
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
			'guild_name' => 'Forest of Heger',
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
			'guild_name' => 'Forest of Heger',
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
			'guild_name' => 'Forest of Heger',
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
			'guild_name' => 'Potterers Guild of Cloppenburg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
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
		//Neuenfelde
		DB::table('guilds')->insert([
			'guild_name' => 'Thatchers Guild of Neuenfelde',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Thatcher',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
			'county' => '146',
			'barony' => ''
		]);
		//Sturmigau
		//Rotenburg
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Rotenburg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
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
			'guild_name' => 'Cutlers Guild of Essen',
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
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '18',
			'county' => '151',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Cologne',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '18',
			'county' => '151',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Cologne',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '18',
			'county' => '151',
			'barony' => ''
		]);
		//Friesheim
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Friesheim',
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
			'guild_name' => 'Forest of Nussenberg',
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
			'guild_name' => 'Potterers Guild of Siegburg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '18',
			'county' => '152',
			'barony' => ''
		]);
		//Bonngau
		//Bonn
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Bonn',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '18',
			'county' => '153',
			'barony' => ''
		]);
		//Deutzgau
		//Deutz
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Deutz',
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
			'guild_name' => 'Skinners Guild of Magdeburg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '19',
			'county' => '155',
			'barony' => ''
		]);
		//Mammendorf
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Mammendorf',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
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
			'guild_subcategory' => 'Scholar_Monastic',
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
			'guild_name' => 'Skinners Guild of Halberstadt',
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
			'guild_name' => 'Potterers Guild of Mainz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '162',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Mainz',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
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
			'guild_subcategory' => 'Scholar_Monastic',
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
			'guild_name' => 'Potterers Guild of Wetzlar',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
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
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '166',
			'barony' => ''
		]);
		//Bruchhausen
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Bruchhausen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '166',
			'barony' => ''
		]);
		//Grenzhof
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Grenzhof',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '166',
			'barony' => ''
		]);
		//Niddagau
		//Nidda
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Nidda',
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
			'guild_name' => 'Skinners Guild of Frankfurt',
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
			'guild_name' => 'Forest of Homburg',
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
			'guild_name' => 'Forest of Homburg',
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
			'guild_name' => 'Forest of Homburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Falconer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '172',
			'barony' => ''
		]);
		//Nordheim
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Massenheim',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
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
			'guild_subcategory' => 'Scholar_Monastic',
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
			'guild_name' => 'Skinners Guild of Berchtesgaden',
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
			'guild_name' => 'Forest of Falkenstein',
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
			'guild_name' => 'Forest of Falkenstein',
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
			'guild_name' => 'Forest of Falkenstein',
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
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '22',
			'county' => '179',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Trier',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '22',
			'county' => '179',
			'barony' => ''
		]);
		//Trittenheim
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Trittenheim',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
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
			'guild_name' => 'Tournament of Milano',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '183',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Milano',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '183',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Milano',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '183',
			'barony' => ''
		]);
		//Como
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Como',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '183',
			'barony' => ''
		]);
		//San Arialdo
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of San Arialdo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '183',
			'barony' => ''
		]);
		//Santa Brera
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Santa Brera',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '183',
			'barony' => ''
		]);
		//Bergamo
		//Bergamo
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Bergamo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '184',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Bergamo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '184',
			'barony' => ''
		]);
		//Brescia
		//Brescia
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Brescia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '185',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Brescia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
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
			'guild_name' => 'Potterers Guild of Lodi',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
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
			'guild_name' => 'Potterers Guild of Modena',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '191',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Modena',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
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
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '193',
			'barony' => ''
		]);
		//Sanguigna
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Sanguigna',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '193',
			'barony' => ''
		]);
		//Pavia
		//Pavia
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Lombardy',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '2',
			'duchy' => null,
			'county' => '194',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Pavia',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '194',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Pavia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '194',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Pavia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
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
			'guild_subcategory' => 'Scholar_Bishop',
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
			'guild_subcategory' => 'Scholar_Monastic',
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
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '196',
			'barony' => ''
		]);
		//Piedmont
		//Alba
		//Alba
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Alba',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
			'county' => '199',
			'barony' => ''
		]);
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
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Asti',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
			'county' => '200',
			'barony' => ''
		]);
		//Auriate
		//San Dalmazzo
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of San Dalmazzo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
			'county' => '201',
			'barony' => ''
		]);
		//Canavese
		//Canavese
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Canavese',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
			'county' => '202',
			'barony' => ''
		]);
		//Ivrea
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Ivrea',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
			'county' => '202',
			'barony' => ''
		]);
		//Casale
		//Casale
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Casale',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
			'county' => '203',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Cuneo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
			'county' => '204',
			'barony' => ''
		]);
		//Saluzzo
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Saluzzo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
			'county' => '204',
			'barony' => ''
		]);
		//Montferrat
		//Alessandria
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Alessandria',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
			'county' => '205',
			'barony' => ''
		]);
		//Acqui
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Acqui',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
			'county' => '205',
			'barony' => ''
		]);
		//Pragelato
		//Pragelato
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Pragelato',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
			'county' => '206',
			'barony' => ''
		]);
		//Susa
		//Susa
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Susa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
			'county' => '207',
			'barony' => ''
		]);
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
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Novalesa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
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
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
			'county' => '208',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Turino',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
			'county' => '208',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Turino',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
			'county' => '208',
			'barony' => ''
		]);
		//Chieri
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Chieri',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
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
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
			'county' => '209',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Vercelli',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Vigevano',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
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
			'guild_name' => 'Potterers Guild of Siena',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '25',
			'county' => '211',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Siena',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '25',
			'county' => '211',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Siena',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '25',
			'county' => '211',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Siena',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '25',
			'county' => '211',
			'barony' => ''
		]);
		//Corsignano
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Corsignano',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '25',
			'county' => '211',
			'barony' => ''
		]);
		//Cuna
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Cuna',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '25',
			'county' => '211',
			'barony' => ''
		]);
		//Frosini
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Frosini',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '25',
			'county' => '211',
			'barony' => ''
		]);
		//Santa Anna
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Santa Anna',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '25',
			'county' => '211',
			'barony' => ''
		]);
		//San Pietro
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of San Pietro',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Grosseto',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '25',
			'county' => '212',
			'barony' => ''
		]);
		//Grancia
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Grancia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '25',
			'county' => '212',
			'barony' => ''
		]);
		//Piombino
		//Piombino
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Piombino',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '25',
			'county' => '213',
			'barony' => ''
		]);
		//Sovana
		//Sovana
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Sovana',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '25',
			'county' => '214',
			'barony' => ''
		]);
		//Sorano
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Sorano',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '25',
			'county' => '214',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Verona',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '26',
			'county' => '215',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Verona',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '26',
			'county' => '215',
			'barony' => ''
		]);
		//Padova
		//Padova
		DB::table('guilds')->insert([
			'guild_name' => 'University of Padova',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '26',
			'county' => '216',
			'barony' => ''
		]);
		//Este
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Este',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '26',
			'county' => '216',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Este',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
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
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '26',
			'county' => '217',
			'barony' => ''
		]);
		//Vicenza
		//Vicenza
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Vicenza',
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
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '26',
			'county' => '218',
			'barony' => ''
		]);
		//Bassano
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Bassano',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '26',
			'county' => '218',
			'barony' => ''
		]);
		//San Valentino
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of San Valentino',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
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
			'guild_name' => 'Silk Weavers Guild of Trent',
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
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '27',
			'county' => '220',
			'barony' => ''
		]);
		//Monfalcone
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Pietrarossa',
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
			'guild_name' => 'Silk Weavers Guild of Florence',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '28',
			'county' => '223',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Florence',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '28',
			'county' => '223',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Florence',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '28',
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
		//Marcialla
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Marcialla',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '28',
			'county' => '223',
			'barony' => ''
		]);
		//Maiano
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Maiano',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '28',
			'county' => '223',
			'barony' => ''
		]);
		//Frantoio
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Frantoio',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
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
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '28',
			'county' => '224',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Arezzo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '28',
			'county' => '224',
			'barony' => ''
		]);
		//Montisi
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Montisi',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '28',
			'county' => '224',
			'barony' => ''
		]);
		//San Silvestro
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of San Silvestro',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
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
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '28',
			'county' => '226',
			'barony' => ''
		]);
		//Prato
		//San Clemente
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of San Clemente',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '28',
			'county' => '227',
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
			'guild_name' => 'Silk Weavers Guild of Genoa',
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
		//Canellona
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Canellona',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '29',
			'county' => '228',
			'barony' => ''
		]);
		//Lunigiana
		//Luni
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Luni',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '29',
			'county' => '229',
			'barony' => ''
		]);
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
		//Massa
		//Massa
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Massa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '29',
			'county' => '230',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Noli',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '30',
			'county' => '231',
			'barony' => ''
		]);
		//Albissola
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Albissola',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
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
		//Albenga
		//Albenga
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Albenga',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '30',
			'county' => '232',
			'barony' => ''
		]);
		//Finale
		//Finale
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Finale',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '30',
			'county' => '233',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Oneglia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '31',
			'county' => '234',
			'barony' => ''
		]);
		//Monaco
		//Monaco
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Monaco',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '31',
			'county' => '235',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Ventimiglia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
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
			'guild_name' => 'Silk Weavers Guild of Lucca',
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
			'guild_name' => 'Silk Weavers Guild of Pistoia',
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
			'guild_subcategory' => 'Scholar_Bishop',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Pisa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '33',
			'county' => '239',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '33',
			'county' => '239',
			'barony' => ''
		]);
		//Cascina
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Cascina',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '33',
			'county' => '239',
			'barony' => ''
		]);
		//Zambra
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Zambra',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '33',
			'county' => '239',
			'barony' => ''
		]);
		//Vecchiano
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Benedetta',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '33',
			'county' => '239',
			'barony' => ''
		]);
		//Corsica
		//Corte
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Corte',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '33',
			'county' => '240',
			'barony' => ''
		]);
		//Aleria
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Aleria',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '33',
			'county' => '240',
			'barony' => ''
		]);
		//Ajaccio
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Ajaccio',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '33',
			'county' => '240',
			'barony' => ''
		]);
		//Livorno
		//Livorno
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Livorno',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Madder',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '33',
			'county' => '241',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Riparbella',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '33',
			'county' => '242',
			'barony' => ''
		]);
		//Volterra
		//Volterra
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Volterra',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '33',
			'county' => '243',
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
			'guild_name' => 'Silk Weavers Guild of Venice',
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
		//Santa Maria
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Santa Maria',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '34',
			'county' => '244',
			'barony' => ''
		]);
		//Belluno
		//Belluno
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Belluno',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '34',
			'county' => '245',
			'barony' => ''
		]);
		//Feltre
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Feltre',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '34',
			'county' => '245',
			'barony' => ''
		]);
		//Sedico
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Sedico',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '34',
			'county' => '245',
			'barony' => ''
		]);
		//Treviso
		//Treviso
		DB::table('guilds')->insert([
			'guild_name' => 'University of Treviso',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '34',
			'county' => '246',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Treviso',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
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
			'guild_subcategory' => 'Major_Kingdom',
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
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '35',
			'county' => '247',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Prague',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '35',
			'county' => '247',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Prague',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
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
			'guild_name' => 'Potterers Guild of Meissen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '36',
			'county' => '259',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Meissen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '36',
			'county' => '259',
			'barony' => ''
		]);
		//Seusslitz
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Seusslitz',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '35',
			'county' => '259',
			'barony' => ''
		]);
		//Grossenhain
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Grossenhain',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '36',
			'county' => '259',
			'barony' => ''
		]);
		//Milzenigau
		//Hoyerswerda
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Hoyerswerda',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '36',
			'county' => '260',
			'barony' => ''
		]);
		//Bautzen
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Bautzen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '36',
			'county' => '260',
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
			'guild_name' => 'Skinners Guild of Leipzig',
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
			'guild_subcategory' => 'Scholar_Monastic',
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
			'guild_name' => 'Potterers Guild of Senftenberg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Lebusa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
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
			'guild_name' => 'Furriers Guild of Jauer',
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
			'guild_name' => 'Potterers Guild of Liegnitz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
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
			'guild_name' => 'Potterers Guild of Schweidnitz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
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
			'guild_name' => 'Skinners Guild of Krappitz',
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
			'guild_name' => 'Forest of Waldenburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '39',
			'county' => '277',
			'barony' => ''
		]);
		//Quolsdorf
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild of Quolsdorf',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Chandler',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '39',
			'county' => '277',
			'barony' => ''
		]);
		//Brieg
		//Brieg
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Brieg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '39',
			'county' => '278',
			'barony' => ''
		]);
		//Grottkau
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Brieg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '39',
			'county' => '278',
			'barony' => ''
		]);
		//Lowen
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Brieg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '39',
			'county' => '278',
			'barony' => ''
		]);
		//Ratibor
		//Ratibor
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Ratibor',
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
			'guild_subcategory' => 'Scholar_Bishop',
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
			'guild_name' => 'Skinners Guild of Saulieu',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '40',
			'county' => '285',
			'barony' => ''
		]);
		//Beaujolais
		//Arnas
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Arnas',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '40',
			'county' => '286',
			'barony' => ''
		]);
		//Beaunois
		//Savigny
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Creuzotte',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '40',
			'county' => '287',
			'barony' => ''
		]);
		//Saint Jean
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Saint Jean',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '40',
			'county' => '287',
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
		//Macon
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Macon',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '40',
			'county' => '290',
			'barony' => ''
		]);
		//Cluny
		DB::table('guilds')->insert([
			'guild_name' => 'University of Cluny',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '40',
			'county' => '290',
			'barony' => ''
		]);
		//Semur
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Semur',
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
			'guild_subcategory' => 'Scholar_Bishop',
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
			'guild_name' => 'Skinners Guild of Grenoble',
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
			'guild_subcategory' => 'Scholar_Bishop',
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
			'guild_name' => 'Potterers Guild of Forcalquier',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
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
			'guild_name' => 'Silk Weavers Guild of Lyon',
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
		//Givors
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Givors',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
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
			'guild_subcategory' => 'Scholar_Bishop',
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
			'guild_subcategory' => 'Scholar_Bishop',
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
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '42',
			'county' => '302',
			'barony' => ''
		]);
		//Aargau
		//Bern
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Bern',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '42',
			'county' => '303',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Bern',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '42',
			'county' => '303',
			'barony' => ''
		]);
		//Neuenhof
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Neuenhof',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '42',
			'county' => '303',
			'barony' => ''
		]);
		//Bargenais
		//Solothurn
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Solothurn',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '42',
			'county' => '304',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Solothurn',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
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
		//Vaudenais
		//Neuchatel
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Neuchatel',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '42',
			'county' => '307',
			'barony' => ''
		]);
		//Yverdon
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Yverdon',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '42',
			'county' => '307',
			'barony' => ''
		]);
		//Envi
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Envi',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '42',
			'county' => '307',
			'barony' => ''
		]);
		//Pailly
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Pailly',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '42',
			'county' => '307',
			'barony' => ''
		]);
		//Peney
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Peney',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '42',
			'county' => '307',
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
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '43',
			'county' => '308',
			'barony' => ''
		]);
		//Venaissin
		//Venasque
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Venasque',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '43',
			'county' => '309',
			'barony' => ''
		]);
		//Avignon
		DB::table('guilds')->insert([
			'guild_name' => 'University of Avignon',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '43',
			'county' => '309',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Avignon',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '43',
			'county' => '309',
			'barony' => ''
		]);
		//Carpentras
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Carpentras',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '43',
			'county' => '309',
			'barony' => ''
		]);
		//Cavaillon
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Cavaillon',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '43',
			'county' => '309',
			'barony' => ''
		]);
		//Sorgue
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Sorgue',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
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
			'guild_name' => 'Potterers Guild of Saint Just',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
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
			'guild_name' => 'Potterers Guild of Aix',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '44',
			'county' => '311',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Aix',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '44',
			'county' => '311',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Aix',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '44',
			'county' => '311',
			'barony' => ''
		]);
		//Salon
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Salon',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
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
			'guild_subcategory' => 'Major_Kingdom',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Arles',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
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
			'guild_name' => 'Forest of Barbentane',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '44',
			'county' => '312',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Tarascon',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Baux',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Marseille',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '44',
			'county' => '314',
			'barony' => ''
		]);
		//Nice
		//Nice
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Nice',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '44',
			'county' => '315',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Nice',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '44',
			'county' => '315',
			'barony' => ''
		]);
		//Villefranche
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Nice',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '44',
			'county' => '315',
			'barony' => ''
		]);
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
		//Guillaumes
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Nice',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
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
		//Vence
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Vence',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '44',
			'county' => '315',
			'barony' => ''
		]);
		//Glandeves
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Glandeves',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '44',
			'county' => '315',
			'barony' => ''
		]);
		//Grasse
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Grasse',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '44',
			'county' => '315',
			'barony' => ''
		]);
		//Frejus
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Frejus',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '44',
			'county' => '315',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Frejus',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Toulon',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
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
			'guild_name' => 'Forest of Bons',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '45',
			'county' => '319',
			'barony' => ''
		]);
		//Saint Cosme
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Saint Cosme',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
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
			'guild_name' => 'Skinners Guild of Sion',
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
			'guild_subcategory' => 'Church_Kingdom',
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
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '46',
			'county' => '323',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Rome',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
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
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '47',
			'county' => '328',
			'barony' => ''
		]);
		//Cento
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Traversante',
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
			'guild_name' => 'Forest of Traversante',
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
			'guild_name' => 'Forest of Traversante',
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
			'guild_name' => 'Forest of Traversante',
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
			'guild_name' => 'Silk Weavers Guild of Bologna',
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
			'guild_subcategory' => 'Scholar_Bishop',
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
			'guild_name' => 'Silk Weavers Guild of Forli',
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
			'guild_name' => 'Potterers Guild of Faenza',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '47',
			'county' => '329',
			'barony' => ''
		]);
		//Imola
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Imola',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
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
			'guild_name' => 'Silk Weavers Guild of San Giovanni',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Ravenna',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
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
			'guild_name' => 'Silk Weavers Guild of Chieti',
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
			'guild_name' => 'Potterers Guild of Lanciano',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '48',
			'county' => '333',
			'barony' => ''
		]);
		//Spoleto
		//Spoleto
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Spoleto',
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
			'guild_name' => 'Skinners Guild of Aquila',
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
			'guild_subcategory' => 'Monastic_Kingdom',
			'empire' => null,
			'kingdom' => '6',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Riga',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '50',
			'county' => '339',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Riga',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '50',
			'county' => '339',
			'barony' => ''
		]);
		//Kirchholm
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Rumbula',
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
			'guild_name' => 'Forest of Rumbula',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '50',
			'county' => '339',
			'barony' => ''
		]);
		//Geisthof
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild of Geisthof',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Chandler',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '50',
			'county' => '339',
			'barony' => ''
		]);
		//Kramershof
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild of Kramershof',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Chandler',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '50',
			'county' => '339',
			'barony' => ''
		]);
		//Dorpat
		//Kolk
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild of Kolk',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Chandler',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '50',
			'county' => '341',
			'barony' => ''
		]);
		//Lovecotte
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Lovecotte',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '50',
			'county' => '341',
			'barony' => ''
		]);
		//Fellin
		//Paistel
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Paistel',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '50',
			'county' => '343',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild of Windau',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Chandler',
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
			'guild_name' => 'Furriers Guild of Lemsal',
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
		//Pomesanengau
		//Marienburg
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Marienburg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '52',
			'county' => '351',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Marienburg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '52',
			'county' => '351',
			'barony' => ''
		]);
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
		//Pogesanengau
		//Konigshagen
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild of Konigshagen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Chandler',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '50',
			'county' => '357',
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
			'guild_name' => 'Tournament  of Danzig',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '53',
			'county' => '359',
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
		//Kowale
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Kowale',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '53',
			'county' => '359',
			'barony' => ''
		]);
		//Wisselinke
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild of Wisselinke',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Chandler',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '53',
			'county' => '359',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '53',
			'county' => '359',
			'barony' => ''
		]);
		//Butow
		//Butow
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Butow',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '53',
			'county' => '360',
			'barony' => ''
		]);
		//Hygendorf
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild of Hygendorf',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Chandler',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '53',
			'county' => '360',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild of Dirschau',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Chandler',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '53',
			'county' => '361',
			'barony' => ''
		]);
		//Karthaus
		//Chmelno
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Chmelno',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
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
		//Lauenburg
		//Neuendorf
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild of Neuendorf',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Chandler',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '53',
			'county' => '364',
			'barony' => ''
		]);
		//Vietzig
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild of Vietzig',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Chandler',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '53',
			'county' => '364',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Putzig',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
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
		//Grebocin
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Grebocin',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '53',
			'county' => '368',
			'barony' => ''
		]);
		//Tuchel
		//Tuchel
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Tuchel',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '53',
			'county' => '369',
			'barony' => ''
		]);
		//Pomerania
		//Kammin
		//Dievenow
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild of Dievenow',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Chandler',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '54',
			'county' => '370',
			'barony' => ''
		]);
		//Gollnow
		//Massow
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild of Massow',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Chandler',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '54',
			'county' => '372',
			'barony' => ''
		]);
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
		//Pyritz
		//Warnitz
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild of Warnitz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Chandler',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '54',
			'county' => '375',
			'barony' => ''
		]);
		//Prillwitz
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild of Prillwitz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Chandler',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '54',
			'county' => '375',
			'barony' => ''
		]);
		//Kessinigau
		//Rostock
		DB::table('guilds')->insert([
			'guild_name' => 'University of Rostock',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Monastic',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild of Stralsund',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Chandler',
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
			'guild_subcategory' => 'Scholar_Monastic',
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
		//Bentwitz
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild of Bentwitz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Chandler',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '54',
			'county' => '376',
			'barony' => ''
		]);
		//Koslin
		//Koslin
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Koslin',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '54',
			'county' => '378',
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
			'guild_name' => 'Tournament of Stettin',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '54',
			'county' => '383',
			'barony' => ''
		]);
		//Warsow
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild of Warsow',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Chandler',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '54',
			'county' => '383',
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
			'guild_name' => 'Tournament of Brandenburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '55',
			'county' => '385',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Brandenburg',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '55',
			'county' => '385',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Brandenburg',
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
			'guild_name' => 'Skinners Guild of Perleberg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '55',
			'county' => '387',
			'barony' => ''
		]);
		//Wittenberg
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Wittenberg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '55',
			'county' => '387',
			'barony' => ''
		]);
		//Retschanengau
		//Berlin
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Tegel',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '55',
			'county' => '389',
			'barony' => ''
		]);
		//Spandau
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Spandau',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '55',
			'county' => '389',
			'barony' => ''
		]);
		//Kopenick
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Buch',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '55',
			'county' => '389',
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
			'guild_name' => 'Tournament of Mecklenburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '56',
			'county' => '392',
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
		//Polabigau
		//Schwerin
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Schwerin',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '56',
			'county' => '393',
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
			'guild_name' => 'Potterers Guild of Lubeck',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
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
			'guild_name' => 'Skinners Guild of Preetz',
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
			'guild_subcategory' => 'Scholar_Bishop',
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
		//Bauge
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Chaumont',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '57',
			'county' => '395',
			'barony' => ''
		]);
		//Maine
		//Mans
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Mans',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '57',
			'county' => '396',
			'barony' => ''
		]);
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
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Laval',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '57',
			'county' => '396',
			'barony' => ''
		]);
		//Perche
		//Mortagne
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Mortagne',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '57',
			'county' => '397',
			'barony' => ''
		]);
		//Touraine
		//Gaillard
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Coudree',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '57',
			'county' => '398',
			'barony' => ''
		]);
		//Villandry
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Coudree',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '57',
			'county' => '398',
			'barony' => ''
		]);
		//Chatigny
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Coudree',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '57',
			'county' => '398',
			'barony' => ''
		]);
		//Chinon
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Chinon',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '57',
			'county' => '398',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Chinon',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '57',
			'county' => '398',
			'barony' => ''
		]);
		//Saint Genouph
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Saint Genouph',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '57',
			'county' => '398',
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
			'guild_subcategory' => 'Scholar_Bishop',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Bordeaux',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '58',
			'county' => '400',
			'barony' => ''
		]);
		//Meyrinac
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Meyrinac',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '58',
			'county' => '400',
			'barony' => ''
		]);
		//Angoumois
		//Angouleme
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Angouleme',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
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
			'guild_name' => 'Dyers Guild of Perigueux',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '58',
			'county' => '406',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Perigueux',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
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
		//Aurillac
		//Aurillac
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Aurillac',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '59',
			'county' => '409',
			'barony' => ''
		]);
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
			'guild_name' => 'Skinners Guild of Sauveterre',
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
		//Thiers
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Thiers',
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
			'guild_name' => 'Skinners Guild of Saint Flour',
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
			'guild_name' => 'Tournament of Bourges',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '60',
			'county' => '415',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Bourges',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
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
		//Montlucon
		//Montlucon
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Montlucon',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '61',
			'county' => '418',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Eauze',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '62',
			'county' => '419',
			'barony' => ''
		]);
		//Astarac
		//Mirande
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Mirande',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
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
			'guild_name' => 'Dyers Guild of Auch',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
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
		//Dax
		//Dax
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Dax',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '62',
			'county' => '425',
			'barony' => ''
		]);
		//Bayonne
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Bayonne',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '62',
			'county' => '425',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Bayonne',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '62',
			'county' => '425',
			'barony' => ''
		]);
		//Tartas
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Tartas',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '62',
			'county' => '425',
			'barony' => ''
		]);
		//Fezensac
		//Vic
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Vic',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '62',
			'county' => '426',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Vic',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '62',
			'county' => '426',
			'barony' => ''
		]);
		//Marsan
		//Montmarsan
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Montmarsan',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '62',
			'county' => '427',
			'barony' => ''
		]);
		//Tursan
		//Aire
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Aire',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '62',
			'county' => '428',
			'barony' => ''
		]);
		//Geaune
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Geaune',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '62',
			'county' => '428',
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
			'guild_name' => 'University of Reims',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '63',
			'county' => '429',
			'barony' => ''
		]);
		//Brenois
		//Brienne
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Brienne',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '63',
			'county' => '430',
			'barony' => ''
		]);
		//Precy
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Brienne',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '63',
			'county' => '430',
			'barony' => ''
		]);
		//Blaincourt
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Brienne',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '63',
			'county' => '430',
			'barony' => ''
		]);
		//Vaubercey
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Brienne',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '63',
			'county' => '430',
			'barony' => ''
		]);
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
		//Chalons
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Chalons',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '63',
			'county' => '431',
			'barony' => ''
		]);
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
			'guild_name' => 'Skinners Guild of Vitry',
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
			'guild_name' => 'Skinners Guild of Coulommiers',
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
			'guild_name' => 'Skinners Guild of Crecy',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Provins',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Rose',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '63',
			'county' => '436',
			'barony' => ''
		]);
		//Senois
		//Brienon
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Brienon',
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
			'guild_name' => 'Tournament of Troyes',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '63',
			'county' => '439',
			'barony' => ''
		]);
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
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Troyes',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
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
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '63',
			'county' => '439',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Clairvaux',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '63',
			'county' => '439',
			'barony' => ''
		]);
		//Saint Bernard
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Saint Bernard',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '63',
			'county' => '439',
			'barony' => ''
		]);
		//Fraville
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Fraville',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
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
			'guild_subcategory' => 'Empire',
			'empire' => '2',
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
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '440',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Paris',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '440',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Paris',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
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
			'guild_name' => 'Potterers Guild of Beauvais',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '441',
			'barony' => ''
		]);
		//Goincourt
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Goincourt',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '441',
			'barony' => ''
		]);
		//Gerberoy
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Gerberoy',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '441',
			'barony' => ''
		]);
		//Fouquenies
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Fouquenies',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '441',
			'barony' => ''
		]);
		//Beaumont
		//Jouy
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Jouy',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '442',
			'barony' => ''
		]);
		//Saint Ouen
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Saint Ouen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '442',
			'barony' => ''
		]);
		//Brie
		//Brie
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Brie',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '443',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Brie',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '443',
			'barony' => ''
		]);
		//Melun
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Melun',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '443',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Melun',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '443',
			'barony' => ''
		]);
		//Saint Fargeau
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Saint Fargeau',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '443',
			'barony' => ''
		]);
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
		//Yerres
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Senart',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '443',
			'barony' => ''
		]);
		//Brunoy
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Senart',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '443',
			'barony' => ''
		]);
		//Grosbois
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Grosbois',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '443',
			'barony' => ''
		]);
		//Vincennes
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Vincennes',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Landon',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '445',
			'barony' => ''
		]);
		//Fontainebleau
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Fontainebleau',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '445',
			'barony' => ''
		]);
		//Ganne
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Gatinais',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '445',
			'barony' => ''
		]);
		//Hurepoix
		//Corbeil
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Corbeil',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '446',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Corbeil',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Dourdan',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '446',
			'barony' => ''
		]);
		//Mantois
		//Rambouillet
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Rambouillet',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '447',
			'barony' => ''
		]);
		//Beynes
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Rambouillet',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '447',
			'barony' => ''
		]);
		//Saint Germain
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Saint Germain',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '447',
			'barony' => ''
		]);
		//Mesnil
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Mesnil',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '447',
			'barony' => ''
		]);
		//Senlis
		//Compiegne
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Compiegne',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '448',
			'barony' => ''
		]);
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
		//Valois
		//Laneuf
		DB::table('guilds')->insert([
			'guild_name' => 'Thatchers Guild of Laneuf',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Thatcher',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '450',
			'barony' => ''
		]);
		//Vexin
		//Pontoise
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Pontoise',
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
			'guild_name' => 'Fair of Rouen',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '452',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Rouen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '452',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Rouen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '452',
			'barony' => ''
		]);
		//Harcourt
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Harcourt',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '452',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Harcourt',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '452',
			'barony' => ''
		]);
		//Heurteauville
		DB::table('guilds')->insert([
			'guild_name' => 'Thatchers Guild of Heurteauville',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Thatcher',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '452',
			'barony' => ''
		]);
		//Brionne
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Brionne',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '452',
			'barony' => ''
		]);
		//Alencon
		//Alencon
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Alencon',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '453',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Alencon',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
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
		//Sarceaux
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Sarceaux',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '453',
			'barony' => ''
		]);
		//Avranches
		//Avranches
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Avranches',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '454',
			'barony' => ''
		]);
		//Bayeux
		//Bayeux
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Bayeux',
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
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '455',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Caen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '455',
			'barony' => ''
		]);
		//Caux
		//Tancarville
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Tancarville',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '456',
			'barony' => ''
		]);
		//Coutances
		//Coutances
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Coutances',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '457',
			'barony' => ''
		]);
		//Cherbourg
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Cherbourg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '457',
			'barony' => ''
		]);
		//Hauteville
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Hauteville',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '457',
			'barony' => ''
		]);
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
			'guild_name' => 'Skinners Guild of Saint Lo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '457',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Saint Lo',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '457',
			'barony' => ''
		]);
		//Chanteloup
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Chanteloup',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '457',
			'barony' => ''
		]);
		//Evreux
		//Gaillard
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Gaillard',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '458',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Gaillard',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '458',
			'barony' => ''
		]);
		//Gisors
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Gisors',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '458',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Gisors',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '458',
			'barony' => ''
		]);
		//Villers
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Villers',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '458',
			'barony' => ''
		]);
		//Eu
		//Dieppe
		DB::table('guilds')->insert([
			'guild_name' => 'University of Dieppe',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '459',
			'barony' => ''
		]);
		//Lisieux
		//Lisieux
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Lisieux',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '460',
			'barony' => ''
		]);
		//Falaise
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Falaise',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '460',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Falaise',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '460',
			'barony' => ''
		]);
		//Honfleur
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Honfleur',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '460',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Honfleur',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '460',
			'barony' => ''
		]);
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
			'guild_name' => 'Forest of Orleans',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '66',
			'county' => '462',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Orleans',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '66',
			'county' => '462',
			'barony' => ''
		]);
		//Combreux
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Orleans',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '66',
			'county' => '462',
			'barony' => ''
		]);
		//Blaisois
		//Chambord
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Chambord',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '66',
			'county' => '463',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Chambord',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '66',
			'county' => '463',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Chambord',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '66',
			'county' => '463',
			'barony' => ''
		]);
		//Chaumont
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Giverny',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '66',
			'county' => '463',
			'barony' => ''
		]);
		//Bievre
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Giverny',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '66',
			'county' => '463',
			'barony' => ''
		]);
		//Chartres
		//Chartres
		DB::table('guilds')->insert([
			'guild_name' => 'University of Chartres',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '66',
			'county' => '464',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Chartres',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '66',
			'county' => '464',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Chartres',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '66',
			'county' => '464',
			'barony' => ''
		]);
		//Leveville
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Gats',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '66',
			'county' => '464',
			'barony' => ''
		]);
		//Ouarville
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Ouarville',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Joiners Guild of Chateaudun',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Joiner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '66',
			'county' => '465',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Chateaudun',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '66',
			'county' => '465',
			'barony' => ''
		]);
		//Courtalain
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Senonches',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '66',
			'county' => '465',
			'barony' => ''
		]);
		//Dreux
		//Dreux
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Dreux',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '66',
			'county' => '466',
			'barony' => ''
		]);
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
			'guild_name' => 'Skinners Guild of Etampes',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '66',
			'county' => '467',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Etampes',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Falconer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '66',
			'county' => '467',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Etampes',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '66',
			'county' => '467',
			'barony' => ''
		]);
		//Longpont
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Longpont',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
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
			'guild_name' => 'Skinners Guild of Bethune',
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
			'duchy' => '67',
			'county' => '470',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Amiens',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '470',
			'barony' => ''
		]);
		//Verger
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Verger',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '470',
			'barony' => ''
		]);
		//Fleurie
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Fleurie',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '470',
			'barony' => ''
		]);
		//Boulenois
		//Boulogne
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Boulogne',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '471',
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
			'guild_name' => 'Cutlers Guild of Bruges',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '472',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Bruges',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Ypres',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '472',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Ypres',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
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
		//Bogaerde
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Bogaerde',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '472',
			'barony' => ''
		]);
		//Guines
		//Calais
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Calais',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '473',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Calais',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '473',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Calais',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '473',
			'barony' => ''
		]);
		//Laonnais
		//Laon
		DB::table('guilds')->insert([
			'guild_name' => 'University of Laon',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '474',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Laon',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '474',
			'barony' => ''
		]);
		//Ponthieu
		//Crecy
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Crecy',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '477',
			'barony' => ''
		]);
		//Nouvion
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Crecy',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '477',
			'barony' => ''
		]);
		//Abbekerke
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Abbekerke',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '477',
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
			'guild_name' => 'Cutlers Guild of Tournai',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '479',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Tournai',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Courtrai',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '479',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Courtrai',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '479',
			'barony' => ''
		]);
		//Vermandois
		//Peronne
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Peronne',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '480',
			'barony' => ''
		]);
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
			'guild_name' => 'Cutlers Guild of Saint Quentin',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '480',
			'barony' => ''
		]);
		//Bohain
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Bohain',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
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
			'guild_name' => 'Tournament of Poitiers',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => '481',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Poitiers',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => '481',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Poitiers',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
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
			'guild_name' => 'Skinners Guild of Niort',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => '481',
			'barony' => ''
		]);
		//Chauvigny
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Chauvigny',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => '481',
			'barony' => ''
		]);
		//Vouille
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Vouille',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => '481',
			'barony' => ''
		]);
		//Lusignan
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Vouille',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => '481',
			'barony' => ''
		]);
		//Aunis
		//Rochelle
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Rochelle',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => '482',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Rochelle',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => '482',
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
			'guild_name' => 'Cutlers Guild of Chatellerault',
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
		//Ruffepeyre
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Ruffepeyre',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => '484',
			'barony' => ''
		]);
		//Marche
		//Bellac
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Bellac',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => '485',
			'barony' => ''
		]);
		//Saint Leger
		DB::table('guilds')->insert([
			'guild_name' => 'Thatchers Guild of Saint Leger',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Thatcher',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => '485',
			'barony' => ''
		]);
		//Thouarsais
		//Thouars
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Thouars',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => '486',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Thouars',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => '486',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Thouars',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => '486',
			'barony' => ''
		]);
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
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Fontenay',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => '486',
			'barony' => ''
		]);
		//Buffon
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Buffon',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => '486',
			'barony' => ''
		]);
		//Turenne
		//Savigne
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Savigne',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => '487',
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
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '488',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Toulouse',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '488',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Toulouse',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '488',
			'barony' => ''
		]);
		//Albi
		//Albi
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Albi',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '489',
			'barony' => ''
		]);
		//Carcasonne
		//Carcasonne
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Carcasonne',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '490',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Carcasonne',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '490',
			'barony' => ''
		]);
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
		//Mirepoix
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Mirepoix',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '490',
			'barony' => ''
		]);
		//Foix
		//Foix
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Foix',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '491',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Foix',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '491',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Foix',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '491',
			'barony' => ''
		]);
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
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Tarascon',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '491',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Tarascon',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
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
		//Melgueil
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Melgueil',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '493',
			'barony' => ''
		]);
		//Montpellier
		DB::table('guilds')->insert([
			'guild_name' => 'University of Montpellier',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '493',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Montpellier',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '493',
			'barony' => ''
		]);
		//Maguelonne
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Maguelonne',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Narbonne',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '495',
			'barony' => ''
		]);
		//Beziers
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Beziers',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '495',
			'barony' => ''
		]);
		//Lodeve
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Lodeve',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Agde',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
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
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '497',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Cahors',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
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
			'guild_name' => 'Potterers Guild of Quimper',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '70',
			'county' => '500',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Quimper',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '70',
			'county' => '500',
			'barony' => ''
		]);
		//Ach
		//Ach
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Ach',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '70',
			'county' => '501',
			'barony' => ''
		]);
		//Brest
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Brest',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '70',
			'county' => '501',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Brest',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '70',
			'county' => '501',
			'barony' => ''
		]);
		//Dol
		//Dol
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Dol',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '70',
			'county' => '502',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Dol',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '70',
			'county' => '502',
			'barony' => ''
		]);
		//Combourg
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Combourg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '70',
			'county' => '502',
			'barony' => ''
		]);
		//Saint Malo
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Saint Malo',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '70',
			'county' => '502',
			'barony' => ''
		]);
		//Leon
		//Saint Pol
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Saint Pol',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '70',
			'county' => '503',
			'barony' => ''
		]);
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
		//Poher
		//Rohan
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Rohan',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '70',
			'county' => '504',
			'barony' => ''
		]);
		//Josselin
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Josselin',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '70',
			'county' => '504',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Josselin',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '70',
			'county' => '504',
			'barony' => ''
		]);
		//Vannais
		//Vannes
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Brittany',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '8',
			'duchy' => '70',
			'county' => null,
			'barony' => ''
		]);
		//Domnonee
		//Penthievre
		//Saint Brieuc
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Saint Brieuc',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '71',
			'county' => '506',
			'barony' => ''
		]);
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
			'guild_name' => 'Tournament of Guingamp',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '71',
			'county' => '506',
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
			'guild_name' => 'Potterers Guild of Chatelaudren',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '71',
			'county' => '506',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Chatelaudren',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '71',
			'county' => '506',
			'barony' => ''
		]);
		//Alet
		//Alet
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Alet',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '71',
			'county' => '507',
			'barony' => ''
		]);
		//Tregor
		//Treguier
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Treguier',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '71',
			'county' => '508',
			'barony' => ''
		]);
		//Retz
		//Retz
		//Pornic
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Retz',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '72',
			'county' => '509',
			'barony' => ''
		]);
		//Machecoul
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Machecoul',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '72',
			'county' => '509',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Machecoul',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '72',
			'county' => '509',
			'barony' => ''
		]);
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
			'guild_name' => 'Tournament of Reze',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '72',
			'county' => '509',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Reze',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '72',
			'county' => '509',
			'barony' => ''
		]);
		//Nantais
		//Nantes
		DB::table('guilds')->insert([
			'guild_name' => 'University of Nantes',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '72',
			'county' => '510',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Nantes',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '72',
			'county' => '510',
			'barony' => ''
		]);
		//Chateaubriant
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Chateaubriant',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '72',
			'county' => '510',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Chateaubriant',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '72',
			'county' => '510',
			'barony' => ''
		]);
		//Juigne
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Juigne',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '72',
			'county' => '510',
			'barony' => ''
		]);
		//Rennais
		//Rennes
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Rennes',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '72',
			'county' => '511',
			'barony' => ''
		]);
		//Fougeres
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Fougeres',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '72',
			'county' => '511',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Fougeres',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
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
			'guild_name' => 'Tournament of Galway',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '73',
			'county' => '512',
			'barony' => ''
		]);
		//Tuam
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Tuam',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '73',
			'county' => '512',
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
		//Kilkenny
		//Fertagh
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Fertagh',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '74',
			'county' => '518',
			'barony' => ''
		]);
		//Gowran
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Ossory',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '74',
			'county' => null,
			'barony' => ''
		]);
		//Cuffesgrange
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Cuffesgrange',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '74',
			'county' => '518',
			'barony' => ''
		]);
		//Woolengrange
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Woolengrange',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '74',
			'county' => '518',
			'barony' => ''
		]);
		//Leix
		//Grangebeg
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Grangebeg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '74',
			'county' => '519',
			'barony' => ''
		]);
		//Wexford
		//Wexford
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Wexford',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '74',
			'county' => '522',
			'barony' => ''
		]);
		//Wicklow
		//Wicklow
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Wicklow',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '74',
			'county' => '523',
			'barony' => ''
		]);
		//Kindlestown
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Wicklow',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '74',
			'county' => '523',
			'barony' => ''
		]);
		//Meath
		//Dublin
		//Dublin
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
			'guild_name' => 'Skinners Guild of Dublin',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '75',
			'county' => '524',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Dublin',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '75',
			'county' => '524',
			'barony' => ''
		]);
		//Longford
		//Longford
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Longford',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '75',
			'county' => '525',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Longford',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '75',
			'county' => '525',
			'barony' => ''
		]);
		//Meath
		//Tara
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Meath',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '9',
			'duchy' => '75',
			'county' => null,
			'barony' => ''
		]);
		//Munster
		//Clare
		//Ennis
		DB::table('guilds')->insert([
			'guild_name' => 'University of Ennis',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
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
			'guild_name' => 'Tournament of Cork',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '76',
			'county' => '529',
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
		//Kerry
		//Killarney
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Killarney',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '76',
			'county' => '530',
			'barony' => ''
		]);
		//Aghadoe
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Aghadoe',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '76',
			'county' => '530',
			'barony' => ''
		]);
		//Limerick
		//Limerick
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Limerick',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '76',
			'county' => '531',
			'barony' => ''
		]);
		//Ulster
		//Antrim
		//Carrickfergus
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Carrickfergus',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '76',
			'county' => '532',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Carrickfergus',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '76',
			'county' => '532',
			'barony' => ''
		]);
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
			'guild_name' => 'University of Armagh',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '77',
			'county' => '533',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Armagh',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '77',
			'county' => '533',
			'barony' => ''
		]);
		//Fairview
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Fairview',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '77',
			'county' => '533',
			'barony' => ''
		]);
		//Derry
		//Derry
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Derry',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '77',
			'county' => '535',
			'barony' => ''
		]);
		//Donegal
		//Donegal
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Donegal',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '77',
			'county' => '536',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Donegal',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '77',
			'county' => '536',
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
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '78',
			'county' => '543',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Thetford',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
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
			'guild_name' => 'Potterers Guild of Aylsham',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '78',
			'county' => '543',
			'barony' => ''
		]);
		//Burnham
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Burnham',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
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
			'guild_name' => 'Potterers Guild of Ipswich',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '78',
			'county' => '544',
			'barony' => ''
		]);
		//Lowestoft
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Lowestoft',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '78',
			'county' => '544',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Lowestoft',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '78',
			'county' => '544',
			'barony' => ''
		]);
		//Dunwich
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Dunwich',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Sudbury',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '78',
			'county' => '544',
			'barony' => ''
		]);
		//Wattisham
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Wattisham',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
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
			'guild_name' => 'Dyers Guild of Walden',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '79',
			'county' => '545',
			'barony' => ''
		]);
		//Hertfordshire
		//Hertford
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Hertford',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '79',
			'county' => '546',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Hertford',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '79',
			'county' => '546',
			'barony' => ''
		]);
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
		//Brickendon
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Brickendon',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
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
			'guild_subcategory' => 'Empire',
			'empire' => '3',
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
		//Paddington
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Paddington',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '79',
			'county' => '547',
			'barony' => ''
		]);
		//Hampstead
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Hampstead',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
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
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '80',
			'county' => '548',
			'barony' => ''
		]);
		//Arlingham
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Arlingham',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Warwick',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '80',
			'county' => '549',
			'barony' => ''
		]);
		//Alcester
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Alcester',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
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
			'guild_name' => 'Skinners Guild of Coventry',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '80',
			'county' => '549',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Coventry',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '80',
			'county' => '549',
			'barony' => ''
		]);
		//Winchcombeshire
		//Winchcombe
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Winchcombe',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '80',
			'county' => '550',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Winchcombe',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '80',
			'county' => '550',
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
			'guild_name' => 'Skinners Guild of Worcester',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '80',
			'county' => '551',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Worcester',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '80',
			'county' => '551',
			'barony' => ''
		]);
		//Malvern
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Malvern',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '80',
			'county' => '551',
			'barony' => ''
		]);
		//Kent
		//Aylesfordshire
		//Ashford
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Ashford',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
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
			'guild_subcategory' => 'Scholar_Monastic',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Sandwich',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '81',
			'county' => '553',
			'barony' => ''
		]);
		//Dover
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Dover',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Leeds',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '81',
			'county' => '553',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Leeds',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '81',
			'county' => '553',
			'barony' => ''
		]);
		//Appleby
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Appleby',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Hythe',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Folkestone',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
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
			'guild_subcategory' => 'Scholar_Monastic',
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
			'guild_name' => 'Cutlers Guild of Leicester',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => '556',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Leicester',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => '556',
			'barony' => ''
		]);
		//Belvoir
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Belvoir',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
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
			'guild_name' => 'Tournament of Lincoln',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => '557',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Lincoln',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => '557',
			'barony' => ''
		]);
		//Bourne
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Bourne',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
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
			'guild_name' => 'Potterers Guild of Stamford',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => '557',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Stamford',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
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
		//Nottingham
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Nottingham',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => '558',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Joiners Guild of Nottingham',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Joiner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => '558',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Nottingham',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => '558',
			'barony' => ''
		]);
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
		//Rufford
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Nottingham',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
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
			'guild_name' => 'Skinners Guild of Chester',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '83',
			'county' => '560',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Chester',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '83',
			'county' => '560',
			'barony' => ''
		]);
		//Saighton
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Saighton',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
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
			'guild_name' => 'Skinners Guild of Nantwich',
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
		//Stokesay
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Stokesay',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '83',
			'county' => '562',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Stokesay',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '83',
			'county' => '562',
			'barony' => ''
		]);
		//Ludlow
		DB::table('guilds')->insert([
			'guild_name' => 'University of Ludlow',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '83',
			'county' => '562',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Ludlow',
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
			'guild_name' => 'Cutlers Guild of Lilleshall',
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
			'guild_name' => 'Potterers Guild of Stafford',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '83',
			'county' => '563',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Stafford',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '83',
			'county' => '563',
			'barony' => ''
		]);
		//Lichfield
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Lichfield',
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
			'guild_name' => 'Potterers Guild of Tamworth',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '83',
			'county' => '563',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Tamworth',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '83',
			'county' => '563',
			'barony' => ''
		]);
		//Mid Anglia
		//Bedfordshire
		//Bedford
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Kempston',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => '564',
			'barony' => ''
		]);
		//Elstow
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Marston',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => '564',
			'barony' => ''
		]);
		//Flitwick
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Flitwick',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => '564',
			'barony' => ''
		]);
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
			'guild_name' => 'Potterers Guild of Buckingham',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => '565',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Buckingham',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
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
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => '566',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Cambridge',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => '566',
			'barony' => ''
		]);
		//Ely
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Ely',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => '566',
			'barony' => ''
		]);
		//Bodsey
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Bodsey',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Peterborough',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
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
		//Tetworth
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Bernwood',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => '567',
			'barony' => ''
		]);
		//Waresley
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Waresley',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Northampton',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => '568',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Northampton',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => '568',
			'barony' => ''
		]);
		//Rockingham
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Rockingham',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => '568',
			'barony' => ''
		]);
		//Pipewell
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Pipewell',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
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
			'guild_subcategory' => 'Scholar_Bishop',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Oxford',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => '569',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Oxford',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
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
		//Carlisle
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Carlisle',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '572',
			'barony' => ''
		]);
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
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Appleby',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '572',
			'barony' => ''
		]);
		//Workington
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Workington',
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
			'guild_name' => 'Skinners Guild of Durham',
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
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '573',
			'barony' => ''
		]);
		//Coundon
		DB::table('guilds')->insert([
			'guild_name' => 'Thatchers Guild of Coundon',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Thatcher',
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
		//Ecclesfield
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Wharncliffe',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
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
			'guild_name' => 'Skinners Guild of Alnwick',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '577',
			'barony' => ''
		]);
		//Lancashire
		//Lancaster
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Lancaster',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '578',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Lancaster',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '578',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Lancaster',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '578',
			'barony' => ''
		]);
		//Clitheroe
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Aldcliffe',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '578',
			'barony' => ''
		]);
		//Sawley
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Aldcliffe',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '578',
			'barony' => ''
		]);
		//Marland
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Marland',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '578',
			'barony' => ''
		]);
		//Richmondshire
		//Richmond
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Richmond',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '579',
			'barony' => ''
		]);
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
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '580',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of York',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '580',
			'barony' => ''
		]);
		//Beverley
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Beverley',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '580',
			'barony' => ''
		]);
		//Bridlington
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Bridlington',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '580',
			'barony' => ''
		]);
		//Fountains
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Fountains',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '580',
			'barony' => ''
		]);
		//Cayton
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Cayton',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
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
		//Pontefract
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Pontefract',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '580',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Pontefract',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '580',
			'barony' => ''
		]);
		//Laskill
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Laskill',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
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
		//Arundelshire
		//Arundel
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Arundel',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '86',
			'county' => '581',
			'barony' => ''
		]);
		//Littlehampton
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Littlehampton',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '86',
			'county' => '581',
			'barony' => ''
		]);
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
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Hastings',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '86',
			'county' => '586',
			'barony' => ''
		]);
		//Bexhill
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Combe',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Windsor',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '87',
			'county' => '587',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Windsor',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
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
			'duchy' => '87',
			'county' => '588',
			'barony' => ''
		]);
		//Corfe
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Hurn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '87',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Shawford',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '87',
			'county' => '589',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Winchester',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Southampton',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '87',
			'county' => '589',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Southampton',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '87',
			'county' => '589',
			'barony' => ''
		]);
		//Somersetshire
		//Somerton
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Somerton',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '87',
			'county' => '590',
			'barony' => ''
		]);
		//Sutton
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Sutton',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '87',
			'county' => '590',
			'barony' => ''
		]);
		//Taunton
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Taunton',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '87',
			'county' => '590',
			'barony' => ''
		]);
		//Bruton
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Cogley',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '87',
			'county' => '590',
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
		//Farnham
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Farncombe',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '87',
			'county' => '591',
			'barony' => ''
		]);
		//Northolt
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Northolt',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '87',
			'county' => '591',
			'barony' => ''
		]);
		//Wiltshire
		//Wilton
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Bentley',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '87',
			'county' => '592',
			'barony' => ''
		]);
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
		//Amesbury
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Savernake',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '87',
			'county' => '592',
			'barony' => ''
		]);
		//Easton
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Savernake',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '87',
			'county' => '592',
			'barony' => ''
		]);
		//Malmesbury
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Malmesbury',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '87',
			'county' => '592',
			'barony' => ''
		]);
		//Salisbury
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Salisbury',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '87',
			'county' => '592',
			'barony' => ''
		]);
		//Tisbury
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Tisbury',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '87',
			'county' => '592',
			'barony' => ''
		]);
		//Principality of Wales
		//Cornwall
		//Cornwall
		//Restormel
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Cardinham',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '88',
			'county' => '593',
			'barony' => ''
		]);
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
			'guild_name' => 'Forest of Hurdondown',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '88',
			'county' => '593',
			'barony' => ''
		]);
		//Devonshire
		//Exeter
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Exeter',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '88',
			'county' => '594',
			'barony' => ''
		]);
		//Gidleigh
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Fernworthy',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Falconer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '88',
			'county' => '594',
			'barony' => ''
		]);
		//Lydford
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Abbeyford',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Falconer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '88',
			'county' => '594',
			'barony' => ''
		]);
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
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Bellever',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Falconer',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Plymouth',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
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
			'guild_name' => 'Skinners Guild of Totnes',
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
		//Llantood
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Llantood',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Pembroke',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '89',
			'county' => '597',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Pembroke',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '89',
			'county' => '597',
			'barony' => ''
		]);
		//Carew
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Carew',
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
			'guild_name' => 'Skinners Guild of Tenby',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '89',
			'county' => '597',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Tenby',
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
			'guild_name' => 'Forest of Templeton',
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
		//Newcastle
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Newcastle',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '90',
			'county' => '598',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Newcastle',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '90',
			'county' => '598',
			'barony' => ''
		]);
		//Ewenny
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Ewenny',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
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
		//Saint Donats
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Saint Donats',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '90',
			'county' => '598',
			'barony' => ''
		])
		//Monmouthshire
		//Abergavenny
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Abergavenny',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '90',
			'county' => '599',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Abergavenny',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '90',
			'county' => '599',
			'barony' => ''
		]);
		//Caerphilly
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Caerphilly',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '90',
			'county' => '599',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Caerphilly',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '90',
			'county' => '599',
			'barony' => ''
		]);
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
		//Caerleon
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Caerleon',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '90',
			'county' => '599',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Caerleon',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '90',
			'county' => '599',
			'barony' => ''
		]);
		//Pencoed
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Brynna',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
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
		//Gwynedd
		//Anglesey
		//Beaumaris
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Beaumaris',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '91',
			'county' => '600',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Beaumaris',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '91',
			'county' => '600',
			'barony' => ''
		]);
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
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '11',
			'duchy' => '91',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Caernarfon',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '91',
			'county' => '601',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Caernarfon',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '91',
			'county' => '601',
			'barony' => ''
		]);
		//Conwy
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Conwy',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '91',
			'county' => '601',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Conwy',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '91',
			'county' => '601',
			'barony' => ''
		]);
		//Harlech
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Harlech',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '91',
			'county' => '601',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Harlech',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '91',
			'county' => '601',
			'barony' => ''
		]);
		//Denbighshire
		//Denbigh
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Denbigh',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '91',
			'county' => '602',
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
			'guild_name' => 'Skinners Guild of Brecon',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '92',
			'county' => '604',
			'barony' => ''
		]);
		//Montgomeryshire
		//Montgomery
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Montgomery',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '92',
			'county' => '605',
			'barony' => ''
		]);
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
			'guild_name' => 'Tournament of Powis',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '92',
			'county' => '605',
			'barony' => ''
		]);
		//Radnorshire
		//Cefnllys
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Radnor',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '92',
			'county' => '606',
			'barony' => ''
		]);
		//Kingdom of Scotland
		//Alba
		//Aberdeenshire
		//Aberdeen
		DB::table('guilds')->insert([
			'guild_name' => 'University of Aberdeen',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Aberdeen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '93',
			'county' => '607',
			'barony' => ''
		]);
		//Balmoral
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Balmoral',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '93',
			'county' => '607',
			'barony' => ''
		]);
		//Dundarg
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Balmoral',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '93',
			'county' => '607',
			'barony' => ''
		]);
		//Banffshire
		//Banff
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Banff',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '93',
			'county' => '608',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Banff',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '93',
			'county' => '608',
			'barony' => ''
		]);
		//Doune
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Doune',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '93',
			'county' => '608',
			'barony' => ''
		]);
		//Fife
		//Saint Andrews
		DB::table('guilds')->insert([
			'guild_name' => 'University of Saint Andrews',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '93',
			'county' => '610',
			'barony' => ''
		]);
		//Forfarshire
		//Dundee
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Dundee',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '93',
			'county' => '611',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Dundee',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '93',
			'county' => '611',
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
		//Stonehaven
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Stonehaven',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '93',
			'county' => '612',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Stonehaven',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '93',
			'county' => '612',
			'barony' => ''
		]);
		//Kinrossshire
		//Kinross
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Kinross',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '93',
			'county' => '613',
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
			'guild_name' => 'Cutlers Guild of Perth',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '93',
			'county' => '614',
			'barony' => ''
		]);
		//Clunie
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Craigvinean',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '93',
			'county' => '614',
			'barony' => ''
		]);
		//Abernethy
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Abernethy',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
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
			'guild_name' => 'Skinners Guild of Berwick',
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
		//Coldingham
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Coldingham',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '99',
			'county' => '615',
			'barony' => ''
		]);
		//Edinburghshire
		//Edinburgh
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Bernicia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '12',
			'duchy' => '94',
			'county' => null,
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
			'guild_name' => 'Skinners Guild of Edinburgh',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '94',
			'county' => '616',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Edinburgh',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '94',
			'county' => '616',
			'barony' => ''
		]);
		//Arniston
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Hewan',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '94',
			'county' => '616',
			'barony' => ''
		]);
		//Haddingtonshire
		//Waughton
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Ravencraig',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '94',
			'county' => '617',
			'barony' => ''
		]);
		//Linlithgowshire
		//Grangemouth
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Grangemouth',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '99',
			'county' => '618',
			'barony' => ''
		]);
		//Stirlingshire
		//Stirling
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Stirling',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '94',
			'county' => '619',
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
			'guild_name' => 'Tournament of Dunadd',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '95',
			'county' => '620',
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
			'guild_name' => 'Skinners Guild of Elgin',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '96',
			'county' => '624',
			'barony' => ''
		]);
		//Invernessshire
		//Inverness
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Inverness',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '96',
			'county' => '625',
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
		//Sutherland
		//Dornoch
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Camore',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '96',
			'county' => '627',
			'barony' => ''
		]);
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
		//Kirkcudbrightshire
		//Kirkcudbright
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Kirkcudbright',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '97',
			'county' => '628',
			'barony' => ''
		]);
		//Wigtownshire
		//Wigtown
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Wigtown',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '97',
			'county' => '629',
			'barony' => ''
		]);
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
			'guild_name' => 'Fullers Guild of Dumfries',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '98',
			'county' => '630',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Dumfries',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '98',
			'county' => '630',
			'barony' => ''
		]);
		//Peeblesshire
		//Traquair
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Traquair',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '98',
			'county' => '631',
			'barony' => ''
		]);
		//Roxburghshire
		//Roxburgh
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Roxburgh',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '98',
			'county' => '632',
			'barony' => ''
		]);
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
			'guild_name' => 'Skinners Guild of Jedburgh',
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
		//Drygrange
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Drygrange',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '98',
			'county' => '632',
			'barony' => ''
		]);
		//Strathclyde
		//Ayrshire
		//Grangehill
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Grangehill',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '99',
			'county' => '634',
			'barony' => ''
		]);
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
		//Inchmurrin
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Drumkinnon',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Deer_Hunt',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '99',
			'county' => '635',
			'barony' => ''
		]);
		//Lanarkshire
		//Lanark
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Lanark',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '99',
			'county' => '636',
			'barony' => ''
		]);
		//Glasgow
		DB::table('guilds')->insert([
			'guild_name' => 'University of Glasgow',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
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
			'guild_name' => 'Tournament of Alcaniz',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '100',
			'county' => '638',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Alcaniz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '100',
			'county' => '638',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Alcaniz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '100',
			'county' => '638',
			'barony' => ''
		]);
		//Caspe
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Caspe',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '100',
			'county' => '638',
			'barony' => ''
		]);
		//Codonera
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Codonera',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Kermes',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '100',
			'county' => '638',
			'barony' => ''
		]);
		//Cinca
		//Monzon
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Monzon',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '100',
			'county' => '639',
			'barony' => ''
		]);
		//Fraga
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Fraga',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Kermes',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '100',
			'county' => '639',
			'barony' => ''
		]);
		//Barcelona
		//Bages
		//Manresa
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Manresa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '101',
			'county' => '641',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Manresa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '101',
			'county' => '641',
			'barony' => ''
		]);
		//Cardona
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Cardona',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
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
			'guild_subcategory' => 'Scholar_Bishop',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Barcelona',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '101',
			'county' => '642',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Barcelona',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '101',
			'county' => '642',
			'barony' => ''
		]);
		//Badalona
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Badalona',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '101',
			'county' => '642',
			'barony' => ''
		]);
		//Bergueda
		//Berga
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Berga',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '101',
			'county' => '643',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Berga',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '101',
			'county' => '643',
			'barony' => ''
		]);
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
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Baga',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '101',
			'county' => '643',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Baga',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '101',
			'county' => '643',
			'barony' => ''
		]);
		//Llobregat
		//San Feliu
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of San Feliu',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '101',
			'county' => '644',
			'barony' => ''
		]);
		//San Boi
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of San Boi',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '101',
			'county' => '644',
			'barony' => ''
		]);
		//Maresme
		//Mataro
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Mataro',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '101',
			'county' => '645',
			'barony' => ''
		]);
		//Osona
		//Vic
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Vic',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '101',
			'county' => '646',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Vic',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '101',
			'county' => '646',
			'barony' => ''
		]);
		//Valles
		//Terrassa
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Terrassa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '101',
			'county' => '647',
			'barony' => ''
		]);
		//Bisbal
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Bisbal',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '101',
			'county' => '647',
			'barony' => ''
		]);
		//Girona
		//Cerdanya
		//Puigcerda
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Puigcerda',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '102',
			'county' => '648',
			'barony' => ''
		]);
		//Llivia
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Llivia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '102',
			'county' => '648',
			'barony' => ''
		]);
		//Conflent
		//Corneilla
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Corneilla',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '102',
			'county' => '649',
			'barony' => ''
		]);
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
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Emporda',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
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
			'guild_name' => 'Tournament of Girona',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '102',
			'county' => '651',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Girona',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '102',
			'county' => '651',
			'barony' => ''
		]);
		//Razes
		//Limoux
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Limoux',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '102',
			'county' => '652',
			'barony' => ''
		]);
		//Ripolles
		//Ripoll
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Ripoll',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '102',
			'county' => '653',
			'barony' => ''
		]);
		//Besalu
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Besalu',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
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
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '102',
			'county' => '653',
			'barony' => ''
		]);
		//Santa Maria
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Santa Maria',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
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
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '102',
			'county' => '654',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Perpignan',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '102',
			'county' => '654',
			'barony' => ''
		]);
		//Selva
		//Lloret
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Lloret',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '102',
			'county' => '655',
			'barony' => ''
		]);
		//Huesca
		//Huesca
		//Huesca
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Huesca',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Empire',
			'empire' => '4',
			'kingdom' => '13',
			'duchy' => '103',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Huesca',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '103',
			'county' => '656',
			'barony' => ''
		]);
		//Jacetania
		//Jacca
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Jacca',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '103',
			'county' => '657',
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
			'guild_name' => 'University of Lleida',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '104',
			'county' => '660',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Thatchers Guild of Lleida',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Thatcher',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '104',
			'county' => '660',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Lleida',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '104',
			'county' => '660',
			'barony' => ''
		]);
		//Urgell
		//Urgell
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Urgell',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '104',
			'county' => '662',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Urgell',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '104',
			'county' => '662',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Urgell',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '104',
			'county' => '662',
			'barony' => ''
		]);
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
		//Montsia
		//Amposta
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Amposta',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '105',
			'county' => '663',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Amposta',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '105',
			'county' => '663',
			'barony' => ''
		]);
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
			'guild_name' => 'Tournament of Tarragona',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '105',
			'county' => '664',
			'barony' => ''
		]);
		//Tortosa
		//Tortosa
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Tortosa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '105',
			'county' => '665',
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
			'guild_name' => 'Tournament of Albarracin',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '106',
			'county' => '666',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Albarracin',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '106',
			'county' => '666',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Albarracin',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '106',
			'county' => '666',
			'barony' => ''
		]);
		//Teruel
		//Teruel
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Teruel',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '106',
			'county' => '667',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Teruel',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '106',
			'county' => '667',
			'barony' => ''
		]);
		//Zaragoza
		//Calatayud
		//Calatayud
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Calatayud',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '107',
			'county' => '669',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Calatayud',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
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
			'guild_name' => 'Tournament of Zaragoza',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '107',
			'county' => '670',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Zaragoza',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '107',
			'county' => '670',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Zaragoza',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '107',
			'county' => '670',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Zaragoza',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
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
			'guild_name' => 'Cutlers Guild of Ayala',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '108',
			'county' => '671',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Ayala',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '108',
			'county' => '671',
			'barony' => ''
		]);
		//Gasteiz
		//Gasteiz
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Gasteiz',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '108',
			'county' => '672',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Gasteiz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '108',
			'county' => '672',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Gasteiz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '108',
			'county' => '672',
			'barony' => ''
		]);
		//Rioja
		//Calahorra
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Calahorra',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '108',
			'county' => '673',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Calahorra',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '108',
			'county' => '673',
			'barony' => ''
		]);
		//Anguiano
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Anguiano',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '108',
			'county' => '673',
			'barony' => ''
		]);
		//Gipuzcoa
		//Donostialdea
		//San Sebastian
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Gipuzcoa',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '109',
			'county' => null,
			'barony' => ''
		]);
		//Astigarraga
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Astigarraga',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '109',
			'county' => '674',
			'barony' => ''
		]);
		//Leitzaldea
		//Leitza
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Leitza',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '109',
			'county' => '675',
			'barony' => ''
		]);
		//Mungialdea
		//Butron
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Butron',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '109',
			'county' => '676',
			'barony' => ''
		]);
		//Tolosaldea
		//Tolosa
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Tolosa',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '109',
			'county' => '677',
			'barony' => ''
		]);
		//Amasa
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Amasa',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '109',
			'county' => '677',
			'barony' => ''
		]);
		//Navarre
		//Irunerria
		//Pamplona
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Navarre',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '14',
			'duchy' => '110',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Pamplona',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '110',
			'county' => '679',
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
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '111',
			'county' => '685',
			'barony' => ''
		]);
		//Uribe
		//Berango
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Berango',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '111',
			'county' => '686',
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
			'guild_name' => 'Tournament of Avila',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '112',
			'county' => '687',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Avila',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '112',
			'county' => '687',
			'barony' => ''
		]);
		//Burgos
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
			'guild_name' => 'Tournament of Burgos',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '113',
			'county' => '692',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Burgos',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '113',
			'county' => '692',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Burgos',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '113',
			'county' => '692',
			'barony' => ''
		]);
		//Cubor
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Cubor',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '113',
			'county' => '692',
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
			'guild_name' => 'Potterers Guild of Palencia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '114',
			'county' => '693',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Palencia',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Medina',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Madder',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '114',
			'county' => '693',
			'barony' => ''
		]);
		//Villarcayo
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Villarcayo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '114',
			'county' => '693',
			'barony' => ''
		]);
		//Cerrato
		//Palenzuela
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Palenzuela',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '114',
			'county' => '694',
			'barony' => ''
		]);
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
		//Coca
		//Coca
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Coca',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '115',
			'county' => '696',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Coca',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '115',
			'county' => '696',
			'barony' => ''
		]);
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
			'guild_name' => 'Tournament of Segovia',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '115',
			'county' => '698',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Segovia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '115',
			'county' => '698',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Segovia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '115',
			'county' => '698',
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
			'guild_name' => 'Skinners Guild of Cantimpalos',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '115',
			'county' => '698',
			'barony' => ''
		]);
		//Soria
		//Almazan
		//Almazan
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Almazan',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '116',
			'county' => '700',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Almazan',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '116',
			'county' => '700',
			'barony' => ''
		]);
		//Osma
		//Osma
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Osma',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '116',
			'county' => '703',
			'barony' => ''
		]);
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
			'guild_name' => 'Fullers Guild of Soria',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '116',
			'county' => '704',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Soria',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '116',
			'county' => '704',
			'barony' => ''
		]);
		//Toledo
		//Jara
		//Sevilleja
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Sevilleja',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '117',
			'county' => '705',
			'barony' => ''
		]);
		//Madrid
		//Madrid
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Madrid',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '117',
			'county' => '706',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Madrid',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '117',
			'county' => '706',
			'barony' => ''
		]);
		//Manzanares
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Manzanares',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '117',
			'county' => '706',
			'barony' => ''
		]);
		//Carrion
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Carrion',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '117',
			'county' => '706',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Carrion',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '117',
			'county' => '706',
			'barony' => ''
		]);
		//Talavera
		//Talavera
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Talavera',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '117',
			'county' => '709',
			'barony' => ''
		]);
		//Malpica
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Malpica',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '117',
			'county' => '709',
			'barony' => ''
		]);
		//Oropesa
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Oropesa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '117',
			'county' => '709',
			'barony' => ''
		]);
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
			'guild_name' => 'Cutlers Guild of Toledo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '117',
			'county' => '710',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Toledo',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '117',
			'county' => '710',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Toledo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '117',
			'county' => '710',
			'barony' => ''
		]);
		//Consuegra
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Consuegra',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '117',
			'county' => '710',
			'barony' => ''
		]);
		//Cuerva
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Cuerva',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '117',
			'county' => '710',
			'barony' => ''
		]);
		//Orgaz
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Orgaz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '117',
			'county' => '710',
			'barony' => ''
		]);
		//Almonacid
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Almonacid',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '117',
			'county' => '710',
			'barony' => ''
		]);
		//Minaya
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Minaya',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '117',
			'county' => '710',
			'barony' => ''
		]);
		//Burguillos
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Burguillos',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '117',
			'county' => '710',
			'barony' => ''
		]);
		//Torrijos
		//Torrijos
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Torrijos',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '117',
			'county' => '711',
			'barony' => ''
		]);
		//Vegas
		//Aranjuez
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Calabazas',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '117',
			'county' => '712',
			'barony' => ''
		]);
		//Chinchon
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Calabazas',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '117',
			'county' => '712',
			'barony' => ''
		]);
		//Villarejo
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Calabazas',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '117',
			'county' => '712',
			'barony' => ''
		]);
		//Valladolid
		//Esgueva
		//Renedo
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Esgueva',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '117',
			'county' => '713',
			'barony' => ''
		]);
		//Terradillos
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Esgueva',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '117',
			'county' => '713',
			'barony' => ''
		]);
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
		//Coleme
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Coleme',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
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
			'guild_subcategory' => 'Empire',
			'empire' => '5',
			'kingdom' => '15',
			'duchy' => '118',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Valladolid',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '118',
			'county' => '717',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Valladolid',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Monastic',
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
		//Albergue
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Albergue',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '118',
			'county' => '718',
			'barony' => ''
		]);
		//Kingdom of Galicia
		//Coruna
		//Coruna
		//Coruna
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Coruna',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '119',
			'county' => '719',
			'barony' => ''
		]);
		//Santiago
		//Santiago
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Santiago',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '16',
			'duchy' => '119',
			'county' => null,
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
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '119',
			'county' => '722',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Santiago',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '119',
			'county' => '722',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Thatchers Guild of Santiago',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Thatcher',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '119',
			'county' => '722',
			'barony' => ''
		]);
		//San Miguel
		DB::table('guilds')->insert([
			'guild_name' => 'Thatchers Guild of San Miguel',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Thatcher',
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
			'guild_name' => 'Tournament of Lugo',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '120',
			'county' => '724',
			'barony' => ''
		]);
		//Marina
		//Ribadeo
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Ribadeo',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '120',
			'county' => '725',
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
			'guild_name' => 'Tournament of Ourense',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '121',
			'county' => '731',
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
			'guild_name' => 'Tournament of Pontevedra',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '122',
			'county' => '735',
			'barony' => ''
		]);
		//Vigo
		//Vigo
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Vigo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '122',
			'county' => '736',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Vigo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '122',
			'county' => '736',
			'barony' => ''
		]);
		//Tuy
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Tuy',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '122',
			'county' => '736',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Tuy',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '122',
			'county' => '736',
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
			'guild_name' => 'Tournament of Caceres',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '123',
			'county' => '738',
			'barony' => ''
		]);
		//Leon
		//Astorga
		//Astorga
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Astorga',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '124',
			'county' => '741',
			'barony' => ''
		]);
		//Baneza
		//Baneza
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Baneza',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '124',
			'county' => '742',
			'barony' => ''
		]);
		//Leon
		//Leon
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Leon',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '17',
			'duchy' => '124',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Leon',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '124',
			'county' => '744',
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
		//Ribaseca
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Ribaseca',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
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
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '124',
			'county' => '745',
			'barony' => ''
		]);
		//Salamanca
		//Rodrigo
		//Rodrigo
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Rodrigo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Madder',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '124',
			'county' => '751',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Rodrigo',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '124',
			'county' => '751',
			'barony' => ''
		]);
		//Espeja
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Espeja',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Madder',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '124',
			'county' => '751',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Espeja',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '124',
			'county' => '751',
			'barony' => ''
		]);
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
			'guild_name' => 'University of Salamanca',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
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
		//Tabara
		//Tabara
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Tabara',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '126',
			'county' => '759',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Gijon',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '126',
			'county' => '761',
			'barony' => ''
		]);
		//Navia
		//Navia
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Navia',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '126',
			'county' => '762',
			'barony' => ''
		]);
		//Oviedo
		//Oviedo
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Asturias',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '18',
			'duchy' => '127',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Oviedo',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '127',
			'county' => '763',
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
			'guild_name' => 'Tournament of Santander',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '128',
			'county' => '766',
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
			'guild_name' => 'Potterers Guild of Aveiro',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '129',
			'county' => '768',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Aveiro',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '129',
			'county' => '768',
			'barony' => ''
		]);
		//Braga
		//Braga
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Braga',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '129',
			'county' => '769',
			'barony' => ''
		]);
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
			'guild_name' => 'Potterers Guild of Barcelos',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '129',
			'county' => '769',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Barcelos',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '129',
			'county' => '769',
			'barony' => ''
		]);
		//Guimaraes
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Guimaraes',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '129',
			'county' => '769',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Guimaraes',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '129',
			'county' => '769',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Guimaraes',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Porto',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '129',
			'county' => '770',
			'barony' => ''
		]);
		//Quinta
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Quinta',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '129',
			'county' => '770',
			'barony' => ''
		]);
		//Viana
		//Viana
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Viana',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '129',
			'county' => '771',
			'barony' => ''
		]);
		//Arcos
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Arcos',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '129',
			'county' => '771',
			'barony' => ''
		]);
		//Santa Maria
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Arcos',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '129',
			'county' => '771',
			'barony' => ''
		]);
		//Caminha
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Caminha',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '129',
			'county' => '771',
			'barony' => ''
		]);
		//Beira
		//Branco
		//Branco
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Branco',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '130',
			'county' => '772',
			'barony' => ''
		]);
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
			'guild_name' => 'University of Coimbra',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
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
		//Vila Real
		//Montalegre
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Montalegre',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '131',
			'county' => '777',
			'barony' => ''
		]);
		//Estremadura
		//Leiria
		//Leiria
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Leiria',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '132',
			'county' => '778',
			'barony' => ''
		]);
		//Pombal
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Leiria',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '132',
			'county' => '778',
			'barony' => ''
		]);
		//Nazare
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Leiria',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '132',
			'county' => '778',
			'barony' => ''
		]);
		//Lisboa
		//Lisboa
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Estremadura',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '19',
			'duchy' => '132',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Lisboa',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Lisboa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '132',
			'county' => '779',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Monsanto',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '132',
			'county' => '779',
			'barony' => ''
		]);
		//Cascais
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Cascais',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '132',
			'county' => '779',
			'barony' => ''
		]);
		//Loures
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Cascais',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '132',
			'county' => '779',
			'barony' => ''
		]);
		//Lourinha
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Cascais',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '132',
			'county' => '779',
			'barony' => ''
		]);
		//Sintra
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Cascais',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '132',
			'county' => '779',
			'barony' => ''
		]);
		//Ribatejo
		//Santarem
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Santarem',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '132',
			'county' => '780',
			'barony' => ''
		]);
		//Tomar
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Tomar',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '132',
			'county' => '780',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Tomar',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '132',
			'county' => '780',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Tomar',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '132',
			'county' => '780',
			'barony' => ''
		]);
		//Danelagen
		//Kingdom of Denmark
		//Jutland
		//Aarhus
		//Alling
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Alling',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '133',
			'county' => '782',
			'barony' => ''
		]);
		//Vissing
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Vissing',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '133',
			'county' => '782',
			'barony' => ''
		]);
		//Borglum
		//Vrejlev
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Vrejlev',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '133',
			'county' => '783',
			'barony' => ''
		]);
		//Hundslund
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Hundslund',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '133',
			'county' => '783',
			'barony' => ''
		]);
		//Dueholm
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Dueholm',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '133',
			'county' => '783',
			'barony' => ''
		]);
		//Ribe
		//Ribe
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Ribe',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '133',
			'county' => '784',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Ribe',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '133',
			'county' => '784',
			'barony' => ''
		]);
		//Seem
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Seem',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '133',
			'county' => '784',
			'barony' => ''
		]);
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
			'guild_name' => 'Tournament of Slesvig',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '133',
			'county' => '785',
			'barony' => ''
		]);
		//Flensburg
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Flensburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '133',
			'county' => '785',
			'barony' => ''
		]);
		//Alsborg
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Alsborg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '133',
			'county' => '785',
			'barony' => ''
		]);
		//Sonderborg
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Sonderborg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '133',
			'county' => '785',
			'barony' => ''
		]);
		//Hedeby
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Hedeby',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '133',
			'county' => '785',
			'barony' => ''
		]);
		//Viborg
		//Drastrup
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Drastrup',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '133',
			'county' => '786',
			'barony' => ''
		]);
		//Scania
		//Blekinge
		//Solvesborg
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Solvesborg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '133',
			'county' => '787',
			'barony' => ''
		]);
		//Halland
		//Falkenberg
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '134',
			'county' => '789',
			'barony' => ''
		]);
		//Scania
		//Trelleborg
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Trelleborg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '134',
			'county' => '791',
			'barony' => ''
		]);
		//Lindholmen
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Lindholmen',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '134',
			'county' => '791',
			'barony' => ''
		]);
		//Lund
		DB::table('guilds')->insert([
			'guild_name' => 'University of Lund',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '134',
			'county' => '791',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Lund',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
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
			'guild_name' => 'Tournament of Malmohus',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '134',
			'county' => '791',
			'barony' => ''
		]);
		//Sjaeland
		//Funen
		//Odense
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Odense',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '135',
			'county' => '792',
			'barony' => ''
		]);
		//Faborg
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Faborg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '135',
			'county' => '792',
			'barony' => ''
		]);
		//Svendborg
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Svendborg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '135',
			'county' => '792',
			'barony' => ''
		]);
		//Nyborg
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Nyborg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '135',
			'county' => '792',
			'barony' => ''
		]);
		//Egeskov
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Egeskov',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '135',
			'county' => '792',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Egeskov',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '135',
			'county' => '792',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Egeskov',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '135',
			'county' => '792',
			'barony' => ''
		]);
		//Roskilde
		//Roskilde
		DB::table('guilds')->insert([
			'guild_name' => 'University of Roskilde',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '135',
			'county' => '794',
			'barony' => ''
		]);
		//Sjaeland
		//Kobenhavn
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Sjaeland',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Empire',
			'empire' => '6',
			'kingdom' => '20',
			'duchy' => '135',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Kobenhavn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '135',
			'county' => '795',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Kobenhavn',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Monastic',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Kobenhavn',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '135',
			'county' => '795',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Kobenhavn',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '135',
			'county' => '795',
			'barony' => ''
		]);
		//Soborg
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Soborg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '135',
			'county' => '795',
			'barony' => ''
		]);
		//Soro
		//Soro
		DB::table('guilds')->insert([
			'guild_name' => 'University of Soro',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '135',
			'county' => '796',
			'barony' => ''
		]);
		//Naestved
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Naestved',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '135',
			'county' => '796',
			'barony' => ''
		]);
		//Kingdom of Norway
		//Nordjor
		//Caithness
		//Wick
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Wick',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '136',
			'county' => '797',
			'barony' => ''
		]);
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
		//Shetland
		//Tingwall
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Tingwall',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '136',
			'county' => '799',
			'barony' => ''
		]);
		//Cunningsburgh
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Cunningsburgh',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '136',
			'county' => '799',
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
		//Mull
		//Moy
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Moy',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '137',
			'county' => '802',
			'barony' => ''
		]);
		//Hedmark
		//Hadeland
		//Granavollen
		DB::table('guilds')->insert([
			'guild_name' => 'Thatchers Guild of Granavollen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Thatcher',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '138',
			'county' => '805',
			'barony' => ''
		]);
		//Tingelstad
		DB::table('guilds')->insert([
			'guild_name' => 'Thatchers Guild of Tingelstad',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Thatcher',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '138',
			'county' => '805',
			'barony' => ''
		]);
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
			'guild_name' => 'Tournament of Hamar',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '138',
			'county' => '806',
			'barony' => ''
		]);
		//Romerike
		//Sorum
		DB::table('guilds')->insert([
			'guild_name' => 'Joiners Guild of Sorum',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Joiner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '138',
			'county' => '807',
			'barony' => ''
		]);
		//Lorenskog
		DB::table('guilds')->insert([
			'guild_name' => 'Jioners Guild of Lorenskog',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Joiner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '138',
			'county' => '807',
			'barony' => ''
		]);
		//Oppland
		//Namdal
		//Viklem
		DB::table('guilds')->insert([
			'guild_name' => 'Thatchers Guild of Viklem',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Thatcher',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '139',
			'county' => '809',
			'barony' => ''
		]);
		//Oppland
		//Lillehammer
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Lillehammer',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '139',
			'county' => '810',
			'barony' => ''
		]);
		//Hunn
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Hunn',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '139',
			'county' => '810',
			'barony' => ''
		]);
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
		//Stoksund
		DB::table('guilds')->insert([
			'guild_name' => 'Thatchers Guild of Stoksund',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Thatcher',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '139',
			'county' => '811',
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
		//Jaeren
		//Stavanger
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Stavanger',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '140',
			'county' => '814',
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
		//Grenland
		//Skien
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Skien',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '141',
			'county' => '817',
			'barony' => ''
		]);
		//Telemark
		//Eidsborg
		DB::table('guilds')->insert([
			'guild_name' => 'Thatchers Guild of Eidsborg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Thatcher',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '141',
			'county' => '818',
			'barony' => ''
		]);
		//Bo
		DB::table('guilds')->insert([
			'guild_name' => 'Thatchers Guild of Bo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Thatcher',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '141',
			'county' => '818',
			'barony' => ''
		]);
		//Vestland
		//Hordaland
		//Odda
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Odda',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '142',
			'county' => '819',
			'barony' => ''
		]);
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
			'guild_name' => 'Tournament of Bergen',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Bergen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '142',
			'county' => '821',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Thatchers Guild of Bergen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Thatcher',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '142',
			'county' => '821',
			'barony' => ''
		]);
		//Viken
		//Ostfold
		//Askim
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild of Askim',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Chandler',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '143',
			'county' => '824',
			'barony' => ''
		]);
		//Trogstad
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild of Trogstad',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Chandler',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '143',
			'county' => '824',
			'barony' => ''
		]);
		//Ranrike
		//Bohus
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Bohus',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '143',
			'county' => '825',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Joiners Guild of Bohus',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Joiner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '143',
			'county' => '825',
			'barony' => ''
		]);
		//Vingulmark
		//Oslo
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Viken',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '21',
			'duchy' => '143',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Oslo',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '143',
			'county' => '827',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Joiners Guild of Oslo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Joiner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '143',
			'county' => '827',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Oslo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
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
			'guild_name' => 'Tournament of Visby',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '144',
			'county' => '828',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Visby',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '144',
			'county' => '828',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Visby',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '144',
			'county' => '828',
			'barony' => ''
		]);
		//Hajdeby
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Hajdeby',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '144',
			'county' => '828',
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
			'guild_name' => 'Tournament of Turku',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '146',
			'county' => '835',
			'barony' => ''
		]);
		//Karelia
		//Viborg
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Viborg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '146',
			'county' => '836',
			'barony' => ''
		]);
		//Kexholm
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Kexholm',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '146',
			'county' => '836',
			'barony' => ''
		]);
		//Savonia
		//Saint Michel
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '146',
			'county' => '840',
			'barony' => ''
		]);
		//Smaland
		//Oland
		//Borgholm
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Borgholm',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '147',
			'county' => '842',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild of Borgholm',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Chandler',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '147',
			'county' => '842',
			'barony' => ''
		]);
		//Ottenby
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Halltorp',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '147',
			'county' => '842',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild of Ottenby',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Chandler',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '147',
			'county' => '842',
			'barony' => ''
		]);
		//Halltorp
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Halltorp',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '147',
			'county' => '842',
			'barony' => ''
		]);
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
			'guild_name' => 'Tournament of Kalmar',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '147',
			'county' => '843',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Kalmar',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '147',
			'county' => '843',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Kalmar',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '147',
			'county' => '843',
			'barony' => ''
		]);
		//Svealand
		//Dalarna
		//Hedomora
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Hedomora',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '148',
			'county' => '844',
			'barony' => ''
		]);
		//Avesta
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Avesta',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '148',
			'county' => '844',
			'barony' => ''
		]);
		//Korsgard
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Korsgard',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '148',
			'county' => '844',
			'barony' => ''
		]);
		//Narke
		//Kumla
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Kumla',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '148',
			'county' => '845',
			'barony' => ''
		]);
		//Sodermanland
		//Stockholm
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Svealand',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '22',
			'duchy' => '148',
			'county' => null,
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
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Stockholm',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '148',
			'county' => '846',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Stockholm',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '148',
			'county' => '846',
			'barony' => ''
		]);
		//Osby
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Osby',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '148',
			'county' => '846',
			'barony' => ''
		]);
		//Gripsholm
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Gripsholm',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '148',
			'county' => '846',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Gripsholm',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '148',
			'county' => '846',
			'barony' => ''
		]);
		//Uppland
		//Uppsala
		DB::table('guilds')->insert([
			'guild_name' => 'University of Uppsala',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '148',
			'county' => '847',
			'barony' => ''
		]);
		//Riksby
		DB::table('guilds')->insert([
			'guild_name' => 'Joiners Guild of Riksby',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Joiner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '148',
			'county' => '847',
			'barony' => ''
		]);
		//Stockby
		DB::table('guilds')->insert([
			'guild_name' => 'Jioners Guild of Stockby',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Joiner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '148',
			'county' => '847',
			'barony' => ''
		]);
		//Vastmanland
		//Arboga
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Arboga',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '148',
			'county' => '849',
			'barony' => ''
		]);
		//Bogard
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Bogard',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '148',
			'county' => '849',
			'barony' => ''
		]);
		//Vasteras
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Vasteras',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '148',
			'county' => '849',
			'barony' => ''
		]);
		//Vanstagard
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Vanstagard',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '148',
			'county' => '849',
			'barony' => ''
		]);
		//Vanstagard
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Vallstagard',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '148',
			'county' => '849',
			'barony' => ''
		]);
		//Crown of Poland
		//Kingdom of Poland
		//Greater Poland
		//Gostyn
		//Gostyn
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Gostyn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '149',
			'county' => '850',
			'barony' => ''
		]);
		//Rawitz
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild of Rawitz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Chandler',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '149',
			'county' => '850',
			'barony' => ''
		]);
		//Grodisze
		//Grodisze
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild of Grodisze',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Chandler',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '149',
			'county' => '851',
			'barony' => ''
		]);
		//Wollstein
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Wollstein',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '149',
			'county' => '851',
			'barony' => ''
		]);
		//Kosten
		//Kosten
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Kosten',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '149',
			'county' => '853',
			'barony' => ''
		]);
		//Lissa
		//Lissa
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Greater Poland',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '149',
			'county' => null,
			'barony' => ''
		]);
		//Lesser Poland
		//Chrzanow
		//Libiaz
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild of Libiaz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Chandler',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '150',
			'county' => '856',
			'barony' => ''
		]);
		//Sandez
		//Sandez
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Sandez',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '150',
			'county' => '857',
			'barony' => ''
		]);
		//Voikova
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '150',
			'county' => '857',
			'barony' => ''
		]);
		//Tarnow
		//Tuchow
		DB::table('guilds')->insert([
			'guild_name' => 'Furriers Guild of Tuchow',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Furrier',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '150',
			'county' => '858',
			'barony' => ''
		]);
		//Dunaiz
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Dunaiz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '150',
			'county' => '858',
			'barony' => ''
		]);
		//Ryglitz
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Ryglitz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '150',
			'county' => '858',
			'barony' => ''
		]);
		//Lublin
		//Lublin
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Lesser Poland',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '150',
			'county' => null,
			'barony' => ''
		]);
		//Sandomierz
		//Sandomierz
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Sandomierz',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '150',
			'county' => '862',
			'barony' => ''
		]);
		//Keltz
		DB::table('guilds')->insert([
			'guild_name' => 'Furriers Guild of Keltz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Furrier',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '150',
			'county' => '862',
			'barony' => ''
		]);
		//Swieta Katarzyna
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Swieta Katarzyna',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '150',
			'county' => '862',
			'barony' => ''
		]);
		//Gnesen
		//Gnesen
		//Gnesen
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Gnesen',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '151',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Gnesen',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '151',
			'county' => '863',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Gnesen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '151',
			'county' => '863',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild of Gnesen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Chandler',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '151',
			'county' => '863',
			'barony' => ''
		]);
		//Ruchocin
		DB::table('guilds')->insert([
			'guild_name' => 'Joiners Guild of Ruchocin',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Joiner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '151',
			'county' => '863',
			'barony' => ''
		]);
		//Kolo
		//Kolo
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Kolo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '151',
			'county' => '863',
			'barony' => ''
		]);
		//Kunau
		//Buddenhof
		DB::table('guilds')->insert([
			'guild_name' => 'Joiners Guild of Buddenhof',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Joiner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '151',
			'county' => '865',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '151',
			'county' => '865',
			'barony' => ''
		]);
		//Marszewo
		DB::table('guilds')->insert([
			'guild_name' => 'Joiners Guild of Marszewo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Joiner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '151',
			'county' => '865',
			'barony' => ''
		]);
		//Znin
		//Bartschin
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Bartschin',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '151',
			'county' => '868',
			'barony' => ''
		]);
		//Kalisz
		//Kalisz
		//Kalisz
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Kalisz',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '152',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Kalisz',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '152',
			'county' => '869',
			'barony' => ''
		]);
		//Pleschen
		//Pleschen
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Pleschen',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '152',
			'county' => '870',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Pleschen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '152',
			'county' => '870',
			'barony' => ''
		]);
		//Wielun
		//Wierzchlas
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Wierzchlas',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '152',
			'county' => '872',
			'barony' => ''
		]);
		//Wreschen
		//Wreschen
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Wreschen',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '152',
			'county' => '873',
			'barony' => ''
		]);
		//Krakow
		//Krakow
		//Krakow
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Krakow',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Empire',
			'empire' => '7',
			'kingdom' => '23',
			'duchy' => '153',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Krakow',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '153',
			'county' => '874',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Krakow',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '153',
			'county' => '874',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Krakow',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '153',
			'county' => '874',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Krakow',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '153',
			'county' => '874',
			'barony' => ''
		]);
		//Szlomnik
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Widoma',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '153',
			'county' => '874',
			'barony' => ''
		]);
		//Skala
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Skala',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '153',
			'county' => '874',
			'barony' => ''
		]);
		//Proszowitz
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Proszowitz',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '153',
			'county' => '874',
			'barony' => ''
		]);
		//Niepolomitz
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Niepolomitz',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '153',
			'county' => '874',
			'barony' => ''
		]);
		//Sieroslawitz
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild of Sieroslawitz',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Master_Chandler',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '153',
			'county' => '874',
			'barony' => ''
		]);
		//Olkusz
		//Olkusz
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Wolbrom',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '153',
			'county' => '875',
			'barony' => ''
		]);
		//Wolbrom
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Wolbrom',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '153',
			'county' => '875',
			'barony' => ''
		]);
		//Boleslaw
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '153',
			'county' => '875',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Boleslaw',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '153',
			'county' => '875',
			'barony' => ''
		]);
		//Skiborzyce
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Skiborzyce',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '153',
			'county' => '875',
			'barony' => ''
		]);
		//Czestochowa
		//Olsztyn
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Olsztyn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '153',
			'county' => '876',
			'barony' => ''
		]);
		//Gorlitz
		//Gorlitz
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Gorlitz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '153',
			'county' => '877',
			'barony' => ''
		]);
		//Beitsch
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Beitsch',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '153',
			'county' => '877',
			'barony' => ''
		]);
		//Kuyavia
		//Brodnica
		//Brodnica
		DB::table('guilds')->insert([
			'guild_name' => 'Furriers Guild of Brodnica',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Furrier',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '154',
			'county' => '878',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Brodnica',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '154',
			'county' => '878',
			'barony' => ''
		]);
		//Kruszyny
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Kruszyny',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '154',
			'county' => '878',
			'barony' => ''
		]);
		//Inowroclaw
		//Inowroclaw
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Kuyavia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '154',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Inowroclaw',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '154',
			'county' => '879',
			'barony' => ''
		]);
		//Leipe
		//Dobrin
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Dobrin',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '154',
			'county' => '880',
			'barony' => ''
		]);
		//Zbyszewo
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Zbyszewo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '154',
			'county' => '880',
			'barony' => ''
		]);
		//Radziejow
		//Radziejow
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Radziejow',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '154',
			'county' => '883',
			'barony' => ''
		]);
		//Mazovia
		//Losice
		//Losice
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Losice',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '155',
			'county' => '884',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Losice',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '155',
			'county' => '884',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Losice',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '155',
			'county' => '884',
			'barony' => ''
		]);
		//Sokolow
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Sokolow',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '155',
			'county' => '884',
			'barony' => ''
		]);
		//Makow
		//Pomian
		DB::table('guilds')->insert([
			'guild_name' => 'Joiners Guild of Pomian',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Joiner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '155',
			'county' => '885',
			'barony' => ''
		]);
		//Pultusk
		DB::table('guilds')->insert([
			'guild_name' => 'University of Pultusk',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '155',
			'county' => '885',
			'barony' => ''
		]);
		//Pultusk
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Biala',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '155',
			'county' => '885',
			'barony' => ''
		]);
		//Rawa
		//Rawa
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Mazovia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '155',
			'county' => null,
			'barony' => ''
		]);
		//Plock
		//Plock
		//Plock
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Plock',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '156',
			'county' => null,
			'barony' => ''
		]);
		//Wyszogrod
		DB::table('guilds')->insert([
			'guild_name' => 'Furriers Guild of Wyszogrod',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Furrier',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '156',
			'county' => '890',
			'barony' => ''
		]);
		//Sochaczew
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Sochaczew',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '156',
			'county' => '890',
			'barony' => ''
		]);
		//Mlawa
		//Mlawa
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Mlawa',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '156',
			'county' => '892',
			'barony' => ''
		]);
		//Szrensk
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Szrensk',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '156',
			'county' => '892',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Szrensk',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '156',
			'county' => '892',
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
			'guild_name' => 'Tournament of Posen',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '157',
			'county' => '893',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Posen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '157',
			'county' => '893',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild of Posen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Chandler',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '157',
			'county' => '893',
			'barony' => ''
		]);
		//Moschin
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Dolnoslaskie',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '157',
			'county' => '893',
			'barony' => ''
		]);
		//Chodziez
		//Chodziez
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Chodziez',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '157',
			'county' => '894',
			'barony' => ''
		]);
		//Pila
		//Wirsitz
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Kranja',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '157',
			'county' => '896',
			'barony' => ''
		]);
		//Lobsens
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Kranja',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '157',
			'county' => '896',
			'barony' => ''
		]);
		//Krojanke
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Kranja',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '157',
			'county' => '896',
			'barony' => ''
		]);
		//Samter
		//Samter
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Samter',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '157',
			'county' => '898',
			'barony' => ''
		]);
		//Sieradz
		//Sieradz
		//Sieradz
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Sieradz',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '158',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Sieradz',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '158',
			'county' => '901',
			'barony' => ''
		]);
		//Radom
		//Skaryszew
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Skaryszew',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '158',
			'county' => '902',
			'barony' => ''
		]);
		//Ilza
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Ilza',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '158',
			'county' => '902',
			'barony' => ''
		]);
		//Grojec
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Grojec',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '158',
			'county' => '902',
			'barony' => ''
		]);
		//Warsaw
		//Warsaw
		//Warsaw
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Warsaw',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '159',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Warsaw',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '159',
			'county' => '904',
			'barony' => ''
		]);
		//Brodnow
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Brodnow',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '159',
			'county' => '904',
			'barony' => ''
		]);
		//Grodzisk
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Jaktorowska',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '159',
			'county' => '904',
			'barony' => ''
		]);
		//Czersk
		//Brusy
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild of Brusy',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Chandler',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '159',
			'county' => '905',
			'barony' => ''
		]);
		//Grand Duchy of Lithuania
		//Minsk
		//Minsk
		//Minsk
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Minsk',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '24',
			'duchy' => '160',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Minsk',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '160',
			'county' => '906',
			'barony' => ''
		]);
		//Gomel
		//Gomel
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Gomel',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '160',
			'county' => '907',
			'barony' => ''
		]);
		//Dobrush
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '160',
			'county' => '907',
			'barony' => ''
		]);
		//Mogilev
		//Babruysk
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Babruysk',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '160',
			'county' => '908',
			'barony' => ''
		]);
		//Drutsk
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '160',
			'county' => '908',
			'barony' => ''
		]);
		//Lahoysk
		//Lahoysk
		//Lahoysk
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Lahoysk',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '161',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Lahoysk',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '161',
			'county' => '909',
			'barony' => ''
		]);
		//Barysaw
		//Barysaw
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Barysaw',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '161',
			'county' => '910',
			'barony' => ''
		]);
		//Samogitia
		//Panevezys
		//Kupishik
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Kupishik',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '162',
			'county' => '911',
			'barony' => ''
		]);
		//Schaulen
		//Schaulen
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Schaulen',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '162',
			'county' => '912',
			'barony' => ''
		]);
		//Redau
		//Palanga
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Palanga',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '162',
			'county' => '913',
			'barony' => ''
		]);
		//Telsche
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Samogitia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '162',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Telsche',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '162',
			'county' => '913',
			'barony' => ''
		]);
		//Mazeike
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '162',
			'county' => '913',
			'barony' => ''
		]);
		//Tracken
		//Kauen
		//Kauen
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Kauen',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '163',
			'county' => '915',
			'barony' => ''
		]);
		//Birstonas
		DB::table('guilds')->insert([
			'guild_name' => 'Joiners Guild of Birstonas',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Joiner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '163',
			'county' => '915',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Birstonas',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '163',
			'county' => '915',
			'barony' => ''
		]);
		//Tracken
		//Tracken
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Tracken',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '163',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Tracken',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '163',
			'county' => '916',
			'barony' => ''
		]);
		//Vilnius
		//Vilnius
		//Vilnius
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Vilnius',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => '24',
			'duchy' => '164',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Vilnius',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '164',
			'county' => '917',
			'barony' => ''
		]);
		//Crown of Hungary
		//Kingdom of Hungary
		//Balaton
		//Somogy
		//Siofok
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Siofok',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '165',
			'county' => '921',
			'barony' => ''
		]);
		//Vezprem
		//Vezprem
		DB::table('guilds')->insert([
			'guild_name' => 'Joiners Guild of Vezprem',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Joiner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '165',
			'county' => '924',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Vezprem',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Joiner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '165',
			'county' => '924',
			'barony' => ''
		]);
		//Zala
		//Zalavar
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Balaton',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '165',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Zalavar',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '165',
			'county' => '925',
			'barony' => ''
		]);
		//Tolmaj
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Tolmaj',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '165',
			'county' => '925',
			'barony' => ''
		]);
		//Szanto
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Szanto',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '165',
			'county' => '925',
			'barony' => ''
		]);
		//Buda
		//Bac
		//Pirtov
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Pirtov',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '166',
			'county' => '926',
			'barony' => ''
		]);
		//Tatahaza
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Tatahaza',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '166',
			'county' => '926',
			'barony' => ''
		]);
		//Ujsolt
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Ujsolt',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '166',
			'county' => '926',
			'barony' => ''
		]);
		//Pecs
		//Pecs
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Pecs',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '166',
			'county' => '927',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Pecs',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '166',
			'county' => '927',
			'barony' => ''
		]);
		//Esztergom
		//Esztergom
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Buda',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Empire',
			'empire' => '8',
			'kingdom' => '25',
			'duchy' => '166',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Esztergom',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '166',
			'county' => '928',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Esztergom',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '166',
			'county' => '928',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Esztergom',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '166',
			'county' => '928',
			'barony' => ''
		]);
		//Muzla
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Muzla',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '166',
			'county' => '928',
			'barony' => ''
		]);
		//Heves
		//Eger
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Eger',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '166',
			'county' => '930',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Eger',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '166',
			'county' => '930',
			'barony' => ''
		]);
		//Feltarkan
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Feltarkan',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '166',
			'county' => '930',
			'barony' => ''
		]);
		//Pest
		//Buda
		DB::table('guilds')->insert([
			'guild_name' => 'University of Buda',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '166',
			'county' => '931',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Buda',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '166',
			'county' => '931',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Buda',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '166',
			'county' => '931',
			'barony' => ''
		]);
		//Szolnok
		//Szolnok
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Szolnok',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '166',
			'county' => '932',
			'barony' => ''
		]);
		//Bekes
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Bekes',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '166',
			'county' => '932',
			'barony' => ''
		]);
		//Szarvas
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Szarvas',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '166',
			'county' => '932',
			'barony' => ''
		]);
		//Nitra
		//Nitra
		//Nitra
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Nitra',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '167',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Nitra',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '167',
			'county' => '933',
			'barony' => ''
		]);
		//Holic
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Holic',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '167',
			'county' => '933',
			'barony' => ''
		]);
		//Arva
		//Bingenstad
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Bingenstad',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '167',
			'county' => '934',
			'barony' => ''
		]);
		//Turdoschin
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Turdoschin',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '167',
			'county' => '934',
			'barony' => ''
		]);
		//Komarom
		//Komarom
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Komarom',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '167',
			'county' => '937',
			'barony' => ''
		]);
		//Lipto
		//Liptoszentmiklos
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Liptoszentmiklos',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '167',
			'county' => '938',
			'barony' => ''
		]);
		//Lupca
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Lupca',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '167',
			'county' => '938',
			'barony' => ''
		]);
		//Orava
		//Dolny
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Orava',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '167',
			'county' => '939',
			'barony' => ''
		]);
		//Pozsony
		//Pozsony
		DB::table('guilds')->insert([
			'guild_name' => 'University of Pozsony',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '167',
			'county' => '940',
			'barony' => ''
		]);
		//Trnava
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Trnava',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '167',
			'county' => '940',
			'barony' => ''
		]);
		//Senec
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Senec',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '167',
			'county' => '940',
			'barony' => ''
		]);
		//Trencsen
		//Banovce
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Banovce',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '167',
			'county' => '941',
			'barony' => ''
		]);
		//Bytca
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Bytca',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '167',
			'county' => '941',
			'barony' => ''
		]);
		//Zolyom
		//Besztercebanya
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Besztercebanya',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '167',
			'county' => '942',
			'barony' => ''
		]);
		//Zvolen
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Zvolen',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '167',
			'county' => '942',
			'barony' => ''
		]);
		//Temesvar
		//Temesvar
		//Temesvar
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Temesvar',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '168',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Temesvar',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '168',
			'county' => '943',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Temesvar',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '168',
			'county' => '943',
			'barony' => ''
		]);
		//Deta
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Denta',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '168',
			'county' => '943',
			'barony' => ''
		]);
		//Buzias
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Denta',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '168',
			'county' => '943',
			'barony' => ''
		]);
		//Ciacova
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Denta',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '168',
			'county' => '943',
			'barony' => ''
		]);
		//Ungvar
		//Ungvar
		//Ungvar
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Ungvar',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '169',
			'county' => null,
			'barony' => ''
		]);
		//Bereg
		//Munkacs
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Munkacs',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '169',
			'county' => '949',
			'barony' => ''
		]);
		//Borsod
		//Miskolc
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Miskolc',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '169',
			'county' => '950',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Miskolc',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '169',
			'county' => '950',
			'barony' => ''
		]);
		//Hajdu
		//Debrecen
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Debrecen',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '169',
			'county' => '951',
			'barony' => ''
		]);
		//Szabolcs
		//Harangod
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Harangod',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '169',
			'county' => '952',
			'barony' => ''
		]);
		//Tiszanagyfalu
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Tiszanagyfalu',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '169',
			'county' => '952',
			'barony' => ''
		]);
		//Szatmar
		//Nagysomkut
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Nagysomkut',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '169',
			'county' => '953',
			'barony' => ''
		]);
		//Szepes
		//Levoca
		DB::table('guilds')->insert([
			'guild_name' => 'Furriers Guild of Levoca',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Furrier',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '169',
			'county' => '954',
			'barony' => ''
		]);
		//Zemplen
		//Kysfalud
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Kysfalud',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '169',
			'county' => '955',
			'barony' => ''
		]);
		//Secovce
		DB::table('guilds')->insert([
			'guild_name' => 'Furriers Guild of Secovce',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Furrier',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '169',
			'county' => '955',
			'barony' => ''
		]);
		//Transylvania
		//Marosszek
		//Marosvasarhely
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Marosvasarhely',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '170',
			'county' => '960',
			'barony' => ''
		]);
		//Szeben
		//Nagydisznod
		DB::table('guilds')->insert([
			'guild_name' => 'Furriers Guild of Nagydisznod',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '170',
			'county' => '961',
			'barony' => ''
		]);
		//Nagyszeben
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Nagyszeben',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '170',
			'county' => '961',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Nagyszeben',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '170',
			'county' => '961',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Transylvania',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '170',
			'county' => null,
			'barony' => ''
		]);
		//Kingdom of Croatia
		//Dalmatia
		//Knin
		//Knin
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Dalmatia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '26',
			'duchy' => '171',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Knin',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '171',
			'county' => '964',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Knin',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '171',
			'county' => '964',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armourers Guild of Knin',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '171',
			'county' => '964',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Knin',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '171',
			'county' => '964',
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
			'duchy' => '172',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Ragusa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '172',
			'county' => '968',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Ragusa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '172',
			'county' => '968',
			'barony' => ''
		]);
		//Cetina
		//Sibenik
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Sibenik',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '172',
			'county' => '969',
			'barony' => ''
		]);
		//Slavonia
		//Zagreb
		//Zagreb
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Zagreb',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '173',
			'county' => '971',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Zagreb',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '173',
			'county' => '971',
			'barony' => ''
		]);
		//Bjelovar
		//Bjelovar
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Bjelovar',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '173',
			'county' => '972',
			'barony' => ''
		]);
		//Veroce
		//Osijek
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Slavonia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '173',
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
			'duchy' => '174',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Split',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '174',
			'county' => '977',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Split',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '174',
			'county' => '977',
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
			'duchy' => '175',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Zadar',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '175',
			'county' => '979',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Zadar',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '175',
			'county' => '979',
			'barony' => ''
		]);
		//Benkovac
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Benkovac',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '175',
			'county' => '979',
			'barony' => ''
		]);
		//Rab
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Rab',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '175',
			'county' => '979',
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
			'guild_subcategory' => 'Empire',
			'empire' => '9',
			'kingdom' => '27',
			'duchy' => '176',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Palermo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '176',
			'county' => '982',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Palermo',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '176',
			'county' => '982',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Palermo',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '176',
			'county' => '982',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Palermo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '176',
			'county' => '982',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Palermo',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '176',
			'county' => '982',
			'barony' => ''
		]);
		//Monreale
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Monreale',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '176',
			'county' => '982',
			'barony' => ''
		]);
		//Santa Anna
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Santa Anna',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '176',
			'county' => '982',
			'barony' => ''
		]);
		//Trapani
		//Trapani
		//Trapani
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Trapani',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '177',
			'county' => null,
			'barony' => ''
		]);
		//Alcamo
		//Castellammare
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Castellammare',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '177',
			'county' => '986',
			'barony' => ''
		]);
		//Messina
		//Messina
		//Messina
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Messina',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '178',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Messina',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '178',
			'county' => '988',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Messina',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '178',
			'county' => '988',
			'barony' => ''
		]);
		//Santa Maria
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Santa Maria',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '178',
			'county' => '988',
			'barony' => ''
		]);
		//Agrigento
		//Agrigento
		//Agrigento
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Agrigento',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '179',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Agrigento',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '179',
			'county' => '991',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Agrigento',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Kermes',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '179',
			'county' => '991',
			'barony' => ''
		]);
		//Sciacca
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Sciacca',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '179',
			'county' => '991',
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
			'duchy' => '180',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Catania',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '180',
			'county' => '995',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Catania',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '180',
			'county' => '995',
			'barony' => ''
		]);
		//Caltagirone
		//Caltagirone
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Caltagirone',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '180',
			'county' => '996',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Caltagirone',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '180',
			'county' => '996',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Caltagirone',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '180',
			'county' => '996',
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
			'duchy' => '181',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Siracusa',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '181',
			'county' => '997',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Siracusa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '181',
			'county' => '997',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Siracusa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Kermes',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '181',
			'county' => '997',
			'barony' => ''
		]);
		//Mottava
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Mottava',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '181',
			'county' => '997',
			'barony' => ''
		]);
		//Ragusa
		//Ragusa
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Ragusa',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '181',
			'county' => '999',
			'barony' => ''
		]);
		//Kingdom of Naples
		//Naples
		//Naples
		//Naples
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Naples',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '28',
			'duchy' => '182',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Naples',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '182',
			'county' => '1000',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Naples',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '182',
			'county' => '1000',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Naples',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '182',
			'county' => '1000',
			'barony' => ''
		]);
		//Casoria
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Casoria',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '182',
			'county' => '1000',
			'barony' => ''
		]);
		//Marano
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Licola',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '182',
			'county' => '1000',
			'barony' => ''
		]);
		//Portici
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Portici',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '182',
			'county' => '1000',
			'barony' => ''
		]);
		//Aversa
		//Aversa
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Aversa',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '182',
			'county' => '1001',
			'barony' => ''
		]);
		//Nola
		//Nola
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Nola',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '182',
			'county' => '1002',
			'barony' => ''
		]);
		//Marciano
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Marciano',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '182',
			'county' => '1002',
			'barony' => ''
		]);
		//Saviano
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Saviano',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '182',
			'county' => '1002',
			'barony' => ''
		]);
		//Capua
		//Volturno
		//Pantano
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Pantano',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '183',
			'county' => '1003',
			'barony' => ''
		]);
		//Capua
		//Capua
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Capua',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '183',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Capua',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '183',
			'county' => '1004',
			'barony' => ''
		]);
		//Carinola
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '183',
			'county' => '1004',
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
			'duchy' => '184',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Amalfi',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '184',
			'county' => '1006',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Amalfi',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '184',
			'county' => '1006',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Amalfi',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '183',
			'county' => '1006',
			'barony' => ''
		]);
		//Ravello
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Ravello',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Madder',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '184',
			'county' => '1006',
			'barony' => ''
		]);
		//Scalelle
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Scalelle',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '184',
			'county' => '1006',
			'barony' => ''
		]);
		//Sorrento
		//Sorrento
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Sorrento',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '184',
			'county' => '1007',
			'barony' => ''
		]);
		//Calabria
		//Catanzaro
		//Catanzaro
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Catanzaro',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '185',
			'county' => '1008',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Calabria',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '185',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Catanzaro',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '185',
			'county' => '1008',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Catanzaro',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '185',
			'county' => '1008',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Catanzaro',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '185',
			'county' => '1008',
			'barony' => ''
		]);
		//Squillace
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Squillace',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '185',
			'county' => '1008',
			'barony' => ''
		]);
		//Cosenza
		//Cosenza
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Cosenza',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '185',
			'county' => '1009',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Cosenza',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '185',
			'county' => '1009',
			'barony' => ''
		]);
		//San Vito
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of San Vito',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '185',
			'county' => '1009',
			'barony' => ''
		]);
		//Crotone
		//Crotone
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Crotone',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '185',
			'county' => '1010',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Crotone',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '185',
			'county' => '1010',
			'barony' => ''
		]);
		//Reggio
		//Reggio
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Reggio',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '185',
			'county' => '1011',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Reggio',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '185',
			'county' => '1011',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Reggio',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '185',
			'county' => '1011',
			'barony' => ''
		]);
		//Basilicata
		//Matera
		//Matera
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Matera',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '186',
			'county' => '1012',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Matera',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '186',
			'county' => '1012',
			'barony' => ''
		]);
		//Potenza
		//Potenza
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Potenza',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '186',
			'county' => '1013',
			'barony' => ''
		]);
		//Acerenza
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Basilicata',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '186',
			'county' => null,
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
			'duchy' => '187',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Taranto',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '187',
			'county' => '1014',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Taranto',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '187',
			'county' => '1014',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Taranto',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '187',
			'county' => '1014',
			'barony' => ''
		]);
		//Supersano
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Supersano',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '187',
			'county' => '1014',
			'barony' => ''
		]);
		//Crispiano
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Crispiano',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '187',
			'county' => '1014',
			'barony' => ''
		]);
		//Bari
		//Bari
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Bari',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '187',
			'county' => '1015',
			'barony' => ''
		]);
		//Conversano
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Conversano',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '187',
			'county' => '1015',
			'barony' => ''
		]);
		//Brindisi
		//Mesagne
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Mesagne',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '187',
			'county' => '1016',
			'barony' => ''
		]);
		//San Demetrio
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of San Demetrio',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '187',
			'county' => '1016',
			'barony' => ''
		]);
		//San Donaci
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of San Donaci',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '187',
			'county' => '1016',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Oritana',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '187',
			'county' => '1016',
			'barony' => ''
		]);
		//Lecce
		//Lecce
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Lecce',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '187',
			'county' => '1017',
			'barony' => ''
		]);
		//San Domenico
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of San Domenico',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '187',
			'county' => '1017',
			'barony' => ''
		]);
		//Mazzetta
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Mazzetta',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '187',
			'county' => '1017',
			'barony' => ''
		]);
		//Foggia
		//Foggia
		//Foggia
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Foggia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '188',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Foggia',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '188',
			'county' => '1018',
			'barony' => ''
		]);
		//Bovino
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Bovino',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '188',
			'county' => '1018',
			'barony' => ''
		]);
		//Sangro
		//Fiorentino
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Fiorentino',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '188',
			'county' => '1019',
			'barony' => ''
		]);
		//Termoli
		//San Matteo
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of San Matteo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '188',
			'county' => '1020',
			'barony' => ''
		]);
		//Lesina
		//San Giacomo
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of San Giacomo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '188',
			'county' => '1021',
			'barony' => ''
		]);
		//Benevento
		//Benevento
		//Benevento
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Benevento',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '189',
			'county' => null,
			'barony' => ''
		]);
		//Bojano
		//San Massimo
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '189',
			'county' => '1023',
			'barony' => ''
		]);
		//Molise
		//Frosolone
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Frosolone',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '189',
			'county' => '1025',
			'barony' => ''
		]);
		//Alife
		//San Simeone
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of San Simeone',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '189',
			'county' => '1026',
			'barony' => ''
		]);
		//Calvi
		//Venticano
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Venticano',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '189',
			'county' => '1027',
			'barony' => ''
		]);
		//Celano
		//Santa Jona
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Santa Jona',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '189',
			'county' => '1028',
			'barony' => ''
		]);
		//Mignano
		//Mignano
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Mignano',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '189',
			'county' => '1029',
			'barony' => ''
		]);
		//Triverno
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '189',
			'county' => '1029',
			'barony' => ''
		]);
		//Salerno
		//Salerno
		//Salerno
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Salerno',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '190',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Salerno',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '190',
			'county' => '1030',
			'barony' => ''
		]);
		//San Lorenzo
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of San Lorenzo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '190',
			'county' => '1030',
			'barony' => ''
		]);
		//Cilento
		//San Giacomo
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of San Giacomo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '190',
			'county' => '1032',
			'barony' => ''
		]);
		//Kingdom of Sardinia
		//Gallura
		//Olbia
		//Olbia
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Gallura',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '191',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Olbia',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '191',
			'county' => '1033',
			'barony' => ''
		]);
		//Montacuto
		//Castro
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Castro',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Kermes',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '191',
			'county' => '1034',
			'barony' => ''
		]);
		//Logudoro
		//Torres
		//Torres
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Logudoro',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '192',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Torres',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '192',
			'county' => '1035',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Torres',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '192',
			'county' => '1035',
			'barony' => ''
		]);
		//Sassari
		//Sassari
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Sassari',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '192',
			'county' => '1036',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Sassari',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '192',
			'county' => '1036',
			'barony' => ''
		]);
		//Ottava
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Ottava',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '192',
			'county' => '1036',
			'barony' => ''
		]);
		//Usini
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Usini',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Kermes',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '192',
			'county' => '1036',
			'barony' => ''
		]);
		//Arborea
		//Oristano
		//Oristano
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Arborea',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '193',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Oristano',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '193',
			'county' => '1037',
			'barony' => ''
		]);
		//Campadino
		//Collinas
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Collinas',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '193',
			'county' => '1038',
			'barony' => ''
		]);
		//Cagliari
		//Cagliari
		//Cagliari
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Cagliari',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '29',
			'duchy' => '194',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Cagliari',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Kermes',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '194',
			'county' => '1039',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Cagliari',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '194',
			'county' => '1039',
			'barony' => ''
		]);
		//Monastir
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '194',
			'county' => '1039',
			'barony' => ''
		]);
		//Oglistria
		//Nuoro
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Nuoro',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Kermes',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '194',
			'county' => '1040',
			'barony' => ''
		]);
		//Orosei
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '194',
			'county' => '1040',
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
			'guild_subcategory' => 'Empire',
			'empire' => '10',
			'kingdom' => '30',
			'duchy' => '195',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Constantinople',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '195',
			'county' => '1042',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Constantinople',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '195',
			'county' => '1042',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Constantinople',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '195',
			'county' => '1042',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Constantinople',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '195',
			'county' => '1042',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Constantinople',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '195',
			'county' => '1042',
			'barony' => ''
		]);
		//Kosmidion
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '195',
			'county' => '1042',
			'barony' => ''
		]);
		//Philopation
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '195',
			'county' => '1042',
			'barony' => ''
		]);
		//Pera
		//Galata
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Galata',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '195',
			'county' => '1043',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '195',
			'county' => '1043',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Galata',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '195',
			'county' => '1043',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Galata',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '195',
			'county' => '1043',
			'barony' => ''
		]);
		//Elaia
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Elaia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '195',
			'county' => '1043',
			'barony' => ''
		]);
		//Macedonia
		//Adrianople
		//Adrianople
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Macedonia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '196',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Adrianople',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '196',
			'county' => '1045',
			'barony' => ''
		]);
		//Bergule
		//Ergene
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '196',
			'county' => '1046',
			'barony' => ''
		]);
		//Heroic
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Heroic',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '196',
			'county' => '1046',
			'barony' => ''
		]);
		//Kingdom of Thessalonica
		//Hellas
		//Attica
		//Athens
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Athens',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '197',
			'county' => '1048',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Athens',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '197',
			'county' => '1048',
			'barony' => ''
		]);
		//Piraeus
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Piraeus',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '197',
			'county' => '1048',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Piraeus',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '197',
			'county' => '1048',
			'barony' => ''
		]);
		//Boeotia
		//Thebes
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Hellas',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '197',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Thebes',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '197',
			'county' => '1049',
			'barony' => ''
		]);
		//Euboea
		//Chalcis
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Chalcis',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '197',
			'county' => '1050',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Chalcis',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '197',
			'county' => '1050',
			'barony' => ''
		]);
		//Thessaly
		//Larissa
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Larissa',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '197',
			'county' => '1051',
			'barony' => ''
		]);
		//Peloponessos
		//Corinthia
		//Corinth
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Corinth',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '198',
			'county' => '1053',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Corinth',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '198',
			'county' => '1053',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Corinth',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '198',
			'county' => '1053',
			'barony' => ''
		]);
		//Laconia
		//Mystras
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Peloponessos',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '198',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Mystras',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '198',
			'county' => '1056',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Mystras',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '198',
			'county' => '1056',
			'barony' => ''
		]);
		//Candia
		//Heraklion
		//Heraklion
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Heraklion',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '199',
			'county' => '1057',
			'barony' => ''
		]);
		//Galia
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Galia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '199',
			'county' => '1057',
			'barony' => ''
		]);
		//Chania
		//Chania
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Candia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '199',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Chania',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '199',
			'county' => '1058',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Chania',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '199',
			'county' => '1058',
			'barony' => ''
		]);
		//Archipelago
		//Chios
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Chios',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '200',
			'county' => '1059',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Chios',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '200',
			'county' => '1059',
			'barony' => ''
		]);
		//Pyrgi
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Pyrgi',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Incense',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '200',
			'county' => '1059',
			'barony' => ''
		]);
		//Elata
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Elata',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Incense',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '200',
			'county' => '1059',
			'barony' => ''
		]);
		//Mesta
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Mesta',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Incense',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '200',
			'county' => '1059',
			'barony' => ''
		]);
		//Amani
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Amani',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '200',
			'county' => '1059',
			'barony' => ''
		]);
		//Naxos
		//Naxos
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Archipelago',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '200',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Naxos',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '200',
			'county' => '1060',
			'barony' => ''
		]);
		//Epirus
		//Nicopolis
		//Nicopolis
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Epirus',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '201',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Nicopolis',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '201',
			'county' => '1062',
			'barony' => ''
		]);
		//Cephalonia
		//Cephalonia
		//Agios Giorgios
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Cephalonia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '202',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Agios Giorgios',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '202',
			'county' => '1065',
			'barony' => ''
		]);
		//Zakynthos
		//Zakynthos
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Zakynthos',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '202',
			'county' => '1067',
			'barony' => ''
		]);
		//Thessalonica
		//Thessalonica
		//Thessalonica
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Thessalonica',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '31',
			'duchy' => '203',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Thessalonica',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '203',
			'county' => '1070',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Thessalonica',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '203',
			'county' => '1070',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Thessalonica',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '203',
			'county' => '1070',
			'barony' => ''
		]);
		//Strymon
		//Serres
		//Serres
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Strymon',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '204',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Serres',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '204',
			'county' => '1071',
			'barony' => ''
		]);
		//Kingdom of Trebizond
		//Paphlagonia
		//Germanicopolis
		//Germanicopolis
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Paphlagonia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '205',
			'county' => null,
			'barony' => ''
		]);
		//Amastris
		//Amastris
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Amastris',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '205',
			'county' => '1075',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Joiners Guild of Amastris',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Joiner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '205',
			'county' => '1075',
			'barony' => ''
		]);
		//Hadrianopolis
		//Saframpolis
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '205',
			'county' => '1076',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Saframpolis',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '205',
			'county' => '1076',
			'barony' => ''
		]);
		//Armeniac
		//Amasia
		//Amasia
		DB::table('guilds')->insert([
			'guild_name' => 'University of Amasia',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '206',
			'county' => '1077',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Armeniac',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '206',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Amasia',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '206',
			'county' => '1077',
			'barony' => ''
		]);
		//Amisos
		//Carsamba
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Carsamba',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '206',
			'county' => '1078',
			'barony' => ''
		]);
		//Sinope
		//Sinope
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Sinope',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Kermes',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '206',
			'county' => '1079',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Sinope',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '206',
			'county' => '1079',
			'barony' => ''
		]);
		//Chaldia
		//Trapezus
		//Trapezus
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Trapezus',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '207',
			'county' => '1080',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Trapezus',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '207',
			'county' => '1080',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Chaldia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '32',
			'duchy' => '207',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Trapezus',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '207',
			'county' => '1080',
			'barony' => ''
		]);
		//Crimea
		//Chersonesus
		//Chersonesus
		DB::table('guilds')->insert([
			'guild_name' => 'University of Chersonesus',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '208',
			'county' => '1082',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Crimea',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '208',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Chersonesus',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '208',
			'county' => '1082',
			'barony' => ''
		]);
		//Kingdom of Anatolia
		//Samos
		//Samos
		//Makrini
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Makrini',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '209',
			'county' => '1085',
			'barony' => ''
		]);
		//Smyrna
		//Smyrna
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Samos',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '209',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Smyrna',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '209',
			'county' => '1087',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Smyrna',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '209',
			'county' => '1087',
			'barony' => ''
		]);
		//Menemen
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '209',
			'county' => '1087',
			'barony' => ''
		]);
		//Miletus
		//Miletus
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Miletus',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '209',
			'county' => '1088',
			'barony' => ''
		]);
		//Thracesia
		//Sardes
		//Sardes
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Thracesia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '210',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Sardes',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '210',
			'county' => '1089',
			'barony' => ''
		]);
		//Salihli
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Salihli',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Kermes',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '210',
			'county' => '1089',
			'barony' => ''
		]);
		//Philadelphia
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Philadelphia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '210',
			'county' => '1089',
			'barony' => ''
		]);
		//Chonae
		//Chonae
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '210',
			'county' => '1090',
			'barony' => ''
		]);
		//Attouda
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Attouda',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '210',
			'county' => '1090',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Attouda',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '210',
			'county' => '1090',
			'barony' => ''
		]);
		//Laodicea
		DB::table('guilds')->insert([
			'guild_name' => 'University of Laodicea',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '210',
			'county' => '1090',
			'barony' => ''
		]);
		//Bucellaria
		//Ancyra
		//Ancyra
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Bucellaria',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '211',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Ancyra',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '211',
			'county' => '1091',
			'barony' => ''
		]);
		//Balbadon
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Balbadon',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '211',
			'county' => '1091',
			'barony' => ''
		]);
		//Sarmalius
		//Baliseyh
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Baliseyh',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Kermes',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '211',
			'county' => '1092',
			'barony' => ''
		]);
		//Anatolia
		//Iconium
		//Iconium
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Anatolia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '212',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Iconium',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '212',
			'county' => '1093',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Iconium',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '212',
			'county' => '1093',
			'barony' => ''
		]);
		//Pithoi
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '212',
			'county' => '1093',
			'barony' => ''
		]);
		//Laranda
		//Laranda
		DB::table('guilds')->insert([
			'guild_name' => 'University of Laranda',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '212',
			'county' => '1094',
			'barony' => ''
		]);
		//Sidivre
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '212',
			'county' => '1094',
			'barony' => ''
		]);
		//Cappadocia
		//Caesarea
		//Caesarea
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Cappadocia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '213',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Caesarea',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '213',
			'county' => '1095',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Caesarea',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '213',
			'county' => '1095',
			'barony' => ''
		]);
		//Neapolis
		//Avanos
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Avanos',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '213',
			'county' => '1096',
			'barony' => ''
		]);
		//Seleucia
		//Seleucea
		//Seleucea
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Seleucia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '214',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Seleucea',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '214',
			'county' => '1098',
			'barony' => ''
		]);
		//Adana
		//Adana
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Adana',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '214',
			'county' => '1099',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Adana',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '214',
			'county' => '1099',
			'barony' => ''
		]);
		//Arqakaghni
		DB::table('guilds')->insert([
			'guild_name' => 'University of Arqakaghni',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '214',
			'county' => '1099',
			'barony' => ''
		]);
		//Drazark
		DB::table('guilds')->insert([
			'guild_name' => 'University of Drazark',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '214',
			'county' => '1099',
			'barony' => ''
		]);
		//Yuregir
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Yuregir',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '214',
			'county' => '1099',
			'barony' => ''
		]);
		//Tarsos
		//Tarsos
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Tarsos',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '214',
			'county' => '1100',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Tarsos',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '214',
			'county' => '1100',
			'barony' => ''
		]);
		//Opsicia
		//Cyzicus
		//Cyzicus
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Opsicia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '215',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Cyzicus',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '215',
			'county' => '1101',
			'barony' => ''
		]);
		//Prousa
		//Prousa
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Opsicia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '215',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Prousa',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '215',
			'county' => '1102',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '215',
			'county' => '1102',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Prousa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '215',
			'county' => '1102',
			'barony' => ''
		]);
		//Kotyaion
		//Kotyaion
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Kotyaion',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '215',
			'county' => '1104',
			'barony' => ''
		]);
		//Nicaea
		//Nicaea
		//Nicaea
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Nicaea',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '33',
			'duchy' => '216',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Nicaea',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '216',
			'county' => '1105',
			'barony' => ''
		]);
		//Malagina
		//Malagina
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Malagina',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '216',
			'county' => '1107',
			'barony' => ''
		]);
		//Geyve
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '216',
			'county' => '1107',
			'barony' => ''
		]);
		//Lycia
		//Rhodes
		//Rhodes
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Rhodes',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '217',
			'county' => '1108',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Rhodes',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '217',
			'county' => '1108',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Lycia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '217',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Rhodes',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '217',
			'county' => '1108',
			'barony' => ''
		]);
		//Archangelos
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Archangelos',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '217',
			'county' => '1108',
			'barony' => ''
		]);
		//Pamphylia
		//Attaleia
		//Attaleia
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Attaleia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '218',
			'county' => '1110',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Attaleia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '218',
			'county' => '1110',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Pamphylia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '218',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Attaleia',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '218',
			'county' => '1110',
			'barony' => ''
		]);
		//Saporda
		//Saporda
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Saporda',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Rose',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '218',
			'county' => '1111',
			'barony' => ''
		]);
		//Kingdom of Georgia
		//Colchis
		//Phasis
		//Phasis
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Colchis',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '219',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Phasis',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '219',
			'county' => '1112',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Phasis',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '219',
			'county' => '1112',
			'barony' => ''
		]);
		//Guria
		//Macharadze
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Colchis',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '219',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Macharadze',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '219',
			'county' => '1113',
			'barony' => ''
		]);
		//Pityus
		//Pityus
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Pityus',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '219',
			'county' => '1114',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Pityus',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '219',
			'county' => '1114',
			'barony' => ''
		]);
		//Imereti
		//Gelati
		DB::table('guilds')->insert([
			'guild_name' => 'University of Gelati',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '219',
			'county' => '1115',
			'barony' => ''
		]);
		//Batumi
		//Batumi
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Batumi',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '219',
			'county' => '1116',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Batumi',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '219',
			'county' => '1116',
			'barony' => ''
		]);
		//Javakheti
		//Akhalkalaki
		//Akhalkalaki
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Javakheti',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '220',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Akhalkalaki',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '220',
			'county' => '1117',
			'barony' => ''
		]);
		//Akhaltsikhe
		//Akhaltsikhe
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Akhaltsikhe',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '225',
			'county' => '1118',
			'barony' => ''
		]);
		//Kartli
		//Bolnisi
		//Ratevani
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Ratevani',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '225',
			'county' => '1120',
			'barony' => ''
		]);
		//Tiblisi
		//Tiblisi
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Kartli',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '34',
			'duchy' => '221',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Tiblisi',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '221',
			'county' => '1121',
			'barony' => ''
		]);
		//Kakheti
		//Telavi
		//Ikalto
		DB::table('guilds')->insert([
			'guild_name' => 'University of Ikalto',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '222',
			'county' => '1124',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Kakheti',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '222',
			'county' => null,
			'barony' => ''
		]);
		//Gurjaani
		//Gurjaani
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Gurjaani',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '222',
			'county' => '1125',
			'barony' => ''
		]);
		//Kingdom of Armenia
		//Vaspurakan
		//Van
		//Van
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Vaspurakan',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '223',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Van',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '223',
			'county' => '1126',
			'barony' => ''
		]);
		//Taron
		//Acilisene
		//Acilisene
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Taron',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '224',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Acilisene',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '224',
			'county' => '1130',
			'barony' => ''
		]);
		//Kars
		//Kars
		//Kars
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Kars',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '225',
			'county' => '1132',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Kars',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '35',
			'duchy' => '225',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Kars',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '225',
			'county' => '1132',
			'barony' => ''
		]);
		//Ani
		//Ani
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Ani',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '225',
			'county' => '1133',
			'barony' => ''
		]);
		//Azerbaijan
		//Baku
		//Baku
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Azerbaijan',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '226',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Baku',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '226',
			'county' => '',
			'barony' => ''
		]);
		//Khojasan
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Hokmeli',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '226',
			'county' => '1136',
			'barony' => ''
		]);
		//Sabail
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '226',
			'county' => '1136',
			'barony' => ''
		]);
		//Rasht
		//Rasht
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Rasht',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '226',
			'county' => '1137',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Rasht',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '226',
			'county' => '1137',
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
			'guild_subcategory' => 'Empire',
			'empire' => '11',
			'kingdom' => '36',
			'duchy' => '227',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Kyiv',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '227',
			'county' => '1138',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Kyiv',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '227',
			'county' => '1138',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Kyiv',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '227',
			'county' => '1138',
			'barony' => ''
		]);
		//Podil
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Podil',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '227',
			'county' => '1138',
			'barony' => ''
		]);
		//Chernobyl
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Chernobyl',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '227',
			'county' => '1138',
			'barony' => ''
		]);
		//Lyutizh
		DB::table('guilds')->insert([
			'guild_name' => 'Joiners Guild of Lyutizh',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Joiner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '227',
			'county' => '1138',
			'barony' => ''
		]);
		//Chabany
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Chabany',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '227',
			'county' => '1138',
			'barony' => ''
		]);
		//Kozyn
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Kozyn',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '227',
			'county' => '1138',
			'barony' => ''
		]);
		//Pereyaslavl
		//Pereyaslavl
		//Pereyaslavl
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Pereyaslavl',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '228',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Pereyaslavl',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '228',
			'county' => '1142',
			'barony' => ''
		]);
		//Grand Principality of Chernigov
		//Chernigov
		//Chernigov
		//Chernigov
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Chernigov',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '37',
			'duchy' => '229',
			'county' => null,
			'barony' => ''
		]);
		//Bryansk
		//Kursk
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Kursk',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '229',
			'county' => '1145',
			'barony' => ''
		]);
		//Oryol
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Oryol',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '229',
			'county' => '1145',
			'barony' => ''
		]);
		//Lyubech
		//Loyew
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '229',
			'county' => '1146',
			'barony' => ''
		]);
		//Ryazan
		//Ryazan
		//Ryazan
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Ryazan',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '230',
			'county' => null,
			'barony' => ''
		]);
		//Vorotynsk
		//Vorotynsk
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Vorotynsk',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '230',
			'county' => '1153',
			'barony' => ''
		]);
		//Grand Principality of Ruthenia
		//Halych
		//Halych
		//Halych
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Halych',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '38',
			'duchy' => '231',
			'county' => null,
			'barony' => ''
		]);
		//Peremyshl
		//Peremyshl
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Peremyshl',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '231',
			'county' => '1155',
			'barony' => ''
		]);
		//Sambir
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Sambir',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '231',
			'county' => '1155',
			'barony' => ''
		]);
		//Podolia
		//Podolia
		//Kamianets
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Podolia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '232',
			'county' => null,
			'barony' => ''
		]);
		//Terebovlia
		//Terebovlia
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Terebovlia',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '232',
			'county' => '1159',
			'barony' => ''
		]);
		//Volhynia
		//Volhynia
		//Volodymyr
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Volhynia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '233',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Volodymyr',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '233',
			'county' => '1160',
			'barony' => ''
		]);
		//Lutsk
		//Lutsk
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Lutsk',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '227',
			'county' => '1163',
			'barony' => ''
		]);
		//Turov
		//Turov
		//Turov
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Turov',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '234',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Turov',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '234',
			'county' => '1164',
			'barony' => ''
		]);
		//Grand Principality of Vladimir
		//Vladimir
		//Vladimir
		//Vladimir
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Vladimir',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '39',
			'duchy' => '235',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Vladimir',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '235',
			'county' => '1166',
			'barony' => ''
		]);
		//Gavrilov
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '235',
			'county' => '1166',
			'barony' => ''
		]);
		//Vyazniki
		//Alexandrov
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '235',
			'county' => '1166',
			'barony' => ''
		]);
		//Nizhny Novgorod
		//Gorodets
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Gorodets',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '235',
			'county' => '1168',
			'barony' => ''
		]);
		//Moscow
		//Moscow
		//Moscow
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Moscow',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '236',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Moscow',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '236',
			'county' => '1169',
			'barony' => ''
		]);
		//Suzdal
		//Suzdal
		//Suzdal
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Suzdal',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '237',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Suzdal',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '237',
			'county' => '1173',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Suzdal',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '237',
			'county' => '1173',
			'barony' => ''
		]);
		//Grand Principality of Smolensk
		//Smolensk
		//Smolensk
		//Smolensk
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Smolensk',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '40',
			'duchy' => '238',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Smolensk',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '238',
			'county' => '',
			'barony' => ''
		]);
		//Gnezdovo
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '238',
			'county' => '1176',
			'barony' => ''
		]);
		//Rzhev
		//Rzhev
		//Rzhev
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Rzhev',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '239',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Rzhev',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '239',
			'county' => '1180',
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
			'duchy' => '240',
			'county' => null,
			'barony' => ''
		]);
		//Galich
		//Makaryev
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Makaryev',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '240',
			'county' => '1183',
			'barony' => ''
		]);
		//Rostov
		//Rostov
		DB::table('guilds')->insert([
			'guild_name' => 'Furriers Guild of Rostov',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Furrier',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '240',
			'county' => '1186',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Rostov',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '240',
			'county' => '1186',
			'barony' => ''
		]);
		//Yaroslavl
		//Yaroslavl
		DB::table('guilds')->insert([
			'guild_name' => 'Furriers Guild of Yaroslavl',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Furrier',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '240',
			'county' => '1187',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Yaroslavl',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '240',
			'county' => '1187',
			'barony' => ''
		]);
		//Uglich
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Uglich',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '240',
			'county' => '1187',
			'barony' => ''
		]);
		//Vologda
		DB::table('guilds')->insert([
			'guild_name' => 'Furriers Guild of Vologda',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Furrier',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '240',
			'county' => '1187',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Vologda',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '240',
			'county' => '1187',
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
			'kingdom' => '41',
			'duchy' => '241',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Kontor of Novgorod Peterhof',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '241',
			'county' => '1188',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Furriers Guild of Novgorod',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Furrier',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '241',
			'county' => '1188',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Novgorod',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '241',
			'county' => '1188',
			'barony' => ''
		]);
		//Kresttsy
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '241',
			'county' => '1188',
			'barony' => ''
		]);
		//Lyubytino
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '241',
			'county' => '1188',
			'barony' => ''
		]);
		//Ladoga
		//Ladoga
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Ladoga',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '241',
			'county' => '1189',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Keksholm',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '241',
			'county' => '1189',
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
			'duchy' => '242',
			'county' => null,
			'barony' => ''
		]);
		//Vitebsk
		//Vitebsk
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Vitebsk',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '242',
			'county' => '1192',
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
			'duchy' => '243',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Pleskov',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '243',
			'county' => '1193',
			'barony' => ''
		]);
		//Kholm
		//Kholm
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '243',
			'county' => '1194',
			'barony' => ''
		]);
		//Velikiye Luki
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Velikiye Luki',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '243',
			'county' => '1194',
			'barony' => ''
		]);
		//Bulgarian Empire
		//Kingdom of Bulgaria
		//Preslav
		//Preslav
		//Preslav
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Preslav',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '244',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Preslav',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '244',
			'county' => '1195',
			'barony' => ''
		]);
		//Karvuna
		//Varna
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Varna',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '244',
			'county' => '1198',
			'barony' => ''
		]);
		//Tarnovo
		//Tarnovo
		//Tarnovo
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Tarnovo',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Empire',
			'empire' => '12',
			'kingdom' => '42',
			'duchy' => '245',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Tarnovo',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '245',
			'county' => '1199',
			'barony' => ''
		]);
		//Kopsis
		//Kopsis
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Kopsis',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Rose',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '245',
			'county' => '1200',
			'barony' => ''
		]);
		//Seuthopolis
		//Seuthopolis
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Seuthopolis',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Rose',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '245',
			'county' => '1201',
			'barony' => ''
		]);
		//Philippopolis
		//Philippopolis
		//Philippopolis
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Philippopolis',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '246',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Philippopolis',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '246',
			'county' => '1202',
			'barony' => ''
		]);
		//Ohrid
		//Ohrid
		//Ohrid
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Ohrid',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Bishopric',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '247',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Ohrid',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '247',
			'county' => '1204',
			'barony' => ''
		]);
		//Kastoria
		//Kastoria
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Kastoria',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '247',
			'county' => '1206',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Furriers Guild of Kastoria',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Furrier',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '247',
			'county' => '1206',
			'barony' => ''
		]);
		//Tsetiraki
		DB::table('guilds')->insert([
			'guild_name' => 'Furriers Guild of Tsetiraki',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Furrier',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '247',
			'county' => '1206',
			'barony' => ''
		]);
		//Principality of Wallachia
		//Wallachia
		//Targoviste
		//Targoviste
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Targoviste',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '248',
			'county' => '1207',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Wallachia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '43',
			'duchy' => '248',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Targoviste',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '248',
			'county' => '1207',
			'barony' => ''
		]);
		//Omurtag
		//Omurtag
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Omurtag',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '248',
			'county' => '1208',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Omurtag',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '248',
			'county' => '1208',
			'barony' => ''
		]);
		//Moldavia
		//Suceava
		//Suceava
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Moldavia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '249',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Suceava',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '249',
			'county' => '1210',
			'barony' => ''
		]);
		//Neamt
		//Bistrita
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Bistrita',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '249',
			'county' => '1211',
			'barony' => ''
		]);
		//Serbian Empire
		//Principality of Serbia
		//Rashka
		//Rashka
		//Ras
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Rashka',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Empire',
			'empire' => '13',
			'kingdom' => '44',
			'duchy' => '250',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Ras',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '250',
			'county' => '1218',
			'barony' => ''
		]);
		//Dioclea
		//Scodra
		//Scodra
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Dioclea',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '251',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Scodra',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '251',
			'county' => '1221',
			'barony' => ''
		]);
		//Podrinje
		//Borac
		//Borac
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Podrinje',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '252',
			'county' => null,
			'barony' => ''
		]);
		//Pale
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Pale',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '252',
			'county' => '1224',
			'barony' => ''
		]);
		//Principality of Bosnia
		//Usora
		//Srebrenik
		//Srebrenik
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Usora',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '45',
			'duchy' => '253',
			'county' => null,
			'barony' => ''
		]);
		//Tesanj
		//Doboj
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Doboj',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '253',
			'county' => '1227',
			'barony' => ''
		]);
		//Soli
		//Tuzla
		//Tuzla
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Soli',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '254',
			'county' => null,
			'barony' => ''
		]);
		//Zvornik
		//Zvornik
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Zvornik',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '254',
			'county' => '1229',
			'barony' => ''
		]);
		//Zachumlia
		//Blagaj
		//Blagaj
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Zachumlia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '255',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '255',
			'county' => '1230',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Blagaj',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '255',
			'county' => '1230',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Blagaj',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '255',
			'county' => '1230',
			'barony' => ''
		]);
		//Mostar
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Mostar',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '255',
			'county' => '1230',
			'barony' => ''
		]);
		//Dabar
		//Dabar
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Dabar',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '255',
			'county' => '1232',
			'barony' => ''
		]);
		//Nevesinje
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Nevesinje',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '255',
			'county' => '1232',
			'barony' => ''
		]);
		//Cordoba
		//Kingdom of Andalucia
		//Algeciras
		//Algeciras
		//Algeciras
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Algeciras',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '256',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Algeciras',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '256',
			'county' => '1234',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Algeciras',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '256',
			'county' => '1234',
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
			'duchy' => '257',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Almeria',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '257',
			'county' => '1236',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Almeria',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '257',
			'county' => '1236',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Almeria',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '257',
			'county' => '1236',
			'barony' => ''
		]);
		//Pechina
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '257',
			'county' => '1236',
			'barony' => ''
		]);
		//Gador
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Gador',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '257',
			'county' => '1236',
			'barony' => ''
		]);
		//Santa Fe
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Santa Fe',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '257',
			'county' => '1236',
			'barony' => ''
		]);
		//Alpujarra
		//Laujar
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Laujar',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '257',
			'county' => '1238',
			'barony' => ''
		]);
		//Dalias
		//Ejido
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Ejido',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '257',
			'county' => '1239',
			'barony' => ''
		]);
		//Adra
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Adra',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '257',
			'county' => '1239',
			'barony' => ''
		]);
		//Arcos
		//Cadiz
		//Cadiz
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Cadiz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '258',
			'county' => '1240',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Cadiz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '258',
			'county' => '1240',
			'barony' => ''
		]);
		//Arcos
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Arcos',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '258',
			'county' => null,
			'barony' => ''
		]);
		//Jerez
		//Jerez
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Jerez',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '258',
			'county' => '1241',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Jerez',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '258',
			'county' => '1241',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Jerez',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '258',
			'county' => '1241',
			'barony' => ''
		]);
		//Sanlucar
		//Rota
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '258',
			'county' => '1242',
			'barony' => ''
		]);
		//Tarbasana
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Tarbasana',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '258',
			'county' => '1242',
			'barony' => ''
		]);
		//Carmona
		//Carmona
		//Carmona
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Carmona',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '259',
			'county' => null,
			'barony' => ''
		]);
		//San Rafael
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of San Rafael',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '259',
			'county' => '1243',
			'barony' => ''
		]);
		//Ecija
		//Ecija
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Ecija',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Kermes',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '259',
			'county' => '1244',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Ecija',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '259',
			'county' => '1244',
			'barony' => ''
		]);
		//Cordoba
		//Andujar
		//Andujar
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Andujar',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Kermes',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '260',
			'county' => '1245',
			'barony' => ''
		]);
		//Carpio
		//Carpio
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Carpio',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Madder',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '260',
			'county' => '1246',
			'barony' => ''
		]);
		//Cordoba
		//Cordoba
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Cordoba',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Empire',
			'empire' => '14',
			'kingdom' => '46',
			'duchy' => '260',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Cordoba',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '260',
			'county' => '1247',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Cordoba',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '260',
			'county' => '1247',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Cordoba',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '260',
			'county' => '1247',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Cordoba',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '260',
			'county' => '1247',
			'barony' => ''
		]);
		//Azahara
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Azahara',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '260',
			'county' => '1247',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Azahara',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '260',
			'county' => '1247',
			'barony' => ''
		]);
		//Santa Cruz
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '260',
			'county' => '1247',
			'barony' => ''
		]);
		//Santa Isabel
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Santa Isabel',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '260',
			'county' => '1247',
			'barony' => ''
		]);
		//Subbetica
		//Lucena
		DB::table('guilds')->insert([
			'guild_name' => 'University of Lucena',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '260',
			'county' => '1248',
			'barony' => ''
		]);
		//Cordobesa
		//Aguilar
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Aguilar',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '260',
			'county' => '1250',
			'barony' => ''
		]);
		//Martos
		//Martos
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Martos',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '260',
			'county' => '1251',
			'barony' => ''
		]);
		//Higuera
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Higuera',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '260',
			'county' => '1251',
			'barony' => ''
		]);
		//Pedroche
		//Pedroche
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Pedroche',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '260',
			'county' => '1252',
			'barony' => ''
		]);
		//Santa Eufemia
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Santa Eufemia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '260',
			'county' => '1252',
			'barony' => ''
		]);
		//Granada
		//Alpujarra
		//Castaras
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Castaras',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1253',
			'barony' => ''
		]);
		//Juviles
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Juviles',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1253',
			'barony' => ''
		]);
		//Trevelez
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Trevelez',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1253',
			'barony' => ''
		]);
		//Valor
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Valor',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1253',
			'barony' => ''
		]);
		//Portugos
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Portugos',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1253',
			'barony' => ''
		]);
		//Baeza
		//Baeza
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Baeza',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1254',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Baeza',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1254',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Baeza',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1254',
			'barony' => ''
		]);
		//Bexijar
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Bexijar',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1254',
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
			'duchy' => '261',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Granada',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1256',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Granada',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1256',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Granada',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1256',
			'barony' => ''
		]);
		//Albolote
		DB::table('guilds')->insert([
			'guild_name' => 'Joiners Guild of Albolote',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Joiner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1256',
			'barony' => ''
		]);
		//Alfacar
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Alfacar',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1256',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Alfacar',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1256',
			'barony' => ''
		]);
		//Lachar
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Lachar',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1256',
			'barony' => ''
		]);
		//Pulianas
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Pulianas',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1256',
			'barony' => ''
		]);
		//Aquiliana
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Aquiliana',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1256',
			'barony' => ''
		]);
		//Diarfate
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Diarfate',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1256',
			'barony' => ''
		]);
		//Cijuela
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Cijuela',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1256',
			'barony' => ''
		]);
		//Elvira
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Elvira',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1256',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Elvira',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1256',
			'barony' => ''
		]);
		//Armilla
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Armilla',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1256',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Armilla',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1256',
			'barony' => ''
		]);
		//Genil
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1256',
			'barony' => ''
		]);
		//Guadix
		//Guadix
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Guadix',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1257',
			'barony' => ''
		]);
		//Albunan
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Albunan',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1257',
			'barony' => ''
		]);
		//Benalua
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Benalua',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1257',
			'barony' => ''
		]);
		//Diezma
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1257',
			'barony' => ''
		]);
		//Huelago
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Huelago',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1257',
			'barony' => ''
		]);
		//Reniha
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Reniha',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1257',
			'barony' => ''
		]);
		//Lugros
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Lugros',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1257',
			'barony' => ''
		]);
		//Policar
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Policar',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1257',
			'barony' => ''
		]);
		//Jaen
		//Jaen
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Jaen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1258',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Jaen',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1258',
			'barony' => ''
		]);
		//Lecrin
		//Durcal
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Durcal',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1259',
			'barony' => ''
		]);
		//Malaga
		//Antequerra
		//Antequerra
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Antequerra',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '262',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Antequerra',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '262',
			'county' => '',
			'barony' => ''
		]);
		//Malaga
		//Malaga
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Malaga',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '262',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Malaga',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '262',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Malaga',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '262',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '262',
			'county' => '',
			'barony' => ''
		]);
		//Ronda
		//Ronda
		//Ronda
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Ronda',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '263',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '263',
			'county' => '',
			'barony' => ''
		]);
		//Sevilla
		//Aljarafe
		//Albaida
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Albaida',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '264',
			'county' => '',
			'barony' => ''
		]);
		//Sevilla
		//Sevilla
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Sevilla',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '264',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Sevilla',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '264',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Sevilla',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '264',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Sevilla',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '264',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Sevilla',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '264',
			'county' => '',
			'barony' => ''
		]);
		//Utrera
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Utrera',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '264',
			'county' => '',
			'barony' => ''
		]);
		//San Luis
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of San Luis',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '264',
			'county' => '',
			'barony' => ''
		]);
		//Kingdom of Algarves
		//Algarves
		//Faro
		//Faro
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Algarves',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '47',
			'duchy' => '265',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '265',
			'county' => '',
			'barony' => ''
		]);
		//Silves
		//Silves
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Silves',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Kermes',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '265',
			'county' => '',
			'barony' => ''
		]);
		//Badajoz
		//Badajoz
		//Badajoz
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Badajoz',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '266',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '266',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Badajoz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Kermes',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '266',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Badajoz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '266',
			'county' => '',
			'barony' => ''
		]);
		//Evora
		//Evora
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Evora',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Kermes',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '266',
			'county' => '',
			'barony' => ''
		]);
		//Llerena
		//Llerena
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Llerena',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '266',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Llerena',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Kermes',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '266',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Llerena',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '266',
			'county' => '',
			'barony' => ''
		]);
		//Merida
		//Merida
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Merida',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Kermes',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '266',
			'county' => '',
			'barony' => ''
		]);
		//Huelva
		//Huelva
		//Huelva
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Huelva',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '267',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '267',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Huelva',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Kermes',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '267',
			'county' => '',
			'barony' => ''
		]);
		//Niebla
		//Niebla
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Niebla',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Kermes',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '267',
			'county' => '',
			'barony' => ''
		]);
		//Kingdom of Levante
		//Alpuente
		//Alcarria
		//Huete
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Huete',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '268',
			'county' => '',
			'barony' => ''
		]);
		//Guadalajara
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Guadalajara',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '268',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Guadalajara',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '268',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Guadalajara',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '268',
			'county' => '',
			'barony' => ''
		]);
		//Henares
		//Alcala
		DB::table('guilds')->insert([
			'guild_name' => 'University of Alcala',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '268',
			'county' => '',
			'barony' => ''
		]);
		//Serrania
		//Alpuente
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Alpuente',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '268',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '268',
			'county' => '',
			'barony' => ''
		]);
		//Cuenca
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Cuenca',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '268',
			'county' => '',
			'barony' => ''
		]);
		//Siguenza
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Siguenza',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '268',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Siguenza',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '268',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Siguenza',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '268',
			'county' => '',
			'barony' => ''
		]);
		//Baleares
		//Mallorca
		//Palma
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Baleares',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '269',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '269',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Palma',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '269',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Palma',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '269',
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
			'duchy' => '270',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Albacete',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '270',
			'county' => '',
			'barony' => ''
		]);
		//Alicante
		//Biar
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Biar',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '270',
			'county' => '',
			'barony' => ''
		]);
		//Denia
		//Denia
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Denia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '48',
			'duchy' => '270',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '270',
			'county' => '',
			'barony' => ''
		]);
		//Murcia
		//Murcia
		//Murcia
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Murcia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '271',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '271',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Murcia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '271',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Murcia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '271',
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
			'duchy' => '272',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '272',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Valencia',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '272',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Valencia',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '272',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Valencia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '272',
			'county' => '',
			'barony' => ''
		]);
		//Montesa
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Montesa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '272',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Montesa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '272',
			'county' => '',
			'barony' => ''
		]);
		//Almohad
		//Kingdom of Marrakesh
		//Marrakesh
		//Marrakesh
		//Marrakesh
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Marrakesh',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Empire',
			'empire' => '15',
			'kingdom' => '49',
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Marrakesh',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Safi
		//Safi
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Safi',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Safi',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Tadla
		//
		//
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Tadla',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Sijilmassa
		//Sijilmassa
		//Sijilmassa
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Sijilmassa',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Sijilmassa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Sijilmassa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Ouarzazate
		//Ouarzazate
		//Ouarzazate
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Ouarzazate',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
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
			'guild_name' => 'Potterers Guild of Zagora',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Zagora',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Kingdom of Fez
		//Fez
		//Fez
		//Fez
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Fez',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '50',
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Fez',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Fez',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Fez',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Meknes
		//Meknes
		DB::table('guilds')->insert([
			'guild_name' => 'University of Meknes',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Rabat
		//Rabat
		//Rabat
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Rabat',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Rabat',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Madder',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Rabat',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Sale
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Sale',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Madder',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Sale',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Tangier
		//Tangier
		//Tangier
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Tangier',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Tangier',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Tangier',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Kingdom of Kairouan
		//Kairouan
		//Kairouan
		//Kairouan
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Kairouan',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '51',
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Kairouan',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Tunis
		//Tunis
		//Tunis
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Tunis',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Tunis',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Tunis',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Tunis',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
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
			'guild_name' => 'Court of Djerid',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Tripoli
		//Tripoli
		//Tripoli
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Tripoli',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Sirte
		//Sirte
		//Sirte
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Sirte',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
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
		//Tlemcen
		//Tlemcen
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Tlemcen',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '52',
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Tlemcen',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Oujda
		//Oujda
		//Oujda
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Oujda',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Oujda',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Oujda',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Oran
		//Oran
		//Oran
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Oran',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Oran',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Oran',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Algiers
		//Algiers
		//Algiers
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Algiers',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Tiaret
		//Tiaret
		//Tiaret
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Tiaret',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Mzab
		//Mzab
		//Mzab
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Mzab',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Laghouat
		//Laghouat
		//Laghouat
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Laghouat',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
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
			'guild_name' => 'Tournament of ',
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
		//Ifni
		//Ifni
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Ifni',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '53',
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Taroudant
		//Taroudant
		//Taroudant
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Taroudant',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Taroudant',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Taroudant',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Principality of Figuig
		//Figuig
		//Figuig
		//Figuig
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Figuig',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '54',
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Adrar
		//Tuat
		//Adrar
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Adrar',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
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
			'guild_subcategory' => 'Empire',
			'empire' => '16',
			'kingdom' => '55',
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
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
		DB::table('guilds')->insert([
			'guild_name' => 'University of Baghdad',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
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
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '56',
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Damascus',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Damascus',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Damascus',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Saqba
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Saqba',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Douma
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Dannun
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Nawa
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Nawa',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Qalamoun
		//Qara
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Jayrud
		//Arous
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Dumayr
		//Adra
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Suada
		//Kafr
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Kafr',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Jabal
		//Aleppo
		//Aleppo
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Jabal',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Aleppo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Aleppo',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Aleppo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Homs
		//Homs
		//Homs
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Homs',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		//Tripoli
		//Tripoli
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Tripoli',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Beirut
		//Beirut
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Beirut',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Zahle
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Zahle',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Marjaba
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Marjaba',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Tyre
		//Tyre
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Tyre',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Principality of Najd
		//Najd
		//Kharj
		//Kharj
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Najd',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '57',
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
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
		//Antioch
		//Antioch
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Antioch',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '58',
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Antioch',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Antioch',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Gephyra
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Gephyra',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Daphne
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Daphne',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Seleucia
		DB::table('guilds')->insert([
			'guild_name' => 'Inn of Seleucia',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Seleucia',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
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
			'guild_subcategory' => 'Empire',
			'empire' => '17',
			'kingdom' => '59',
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
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
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Cairo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Cairo',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Fustat
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Fustat',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Alexandria
		//Alexandria
		//Alexandria
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Alexandria',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Alexandria',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Damanhur
		//Damanhur
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Baroud
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Baroud',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Rosetta
		//Balhib
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Balhib',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Mansoura
		//Mansoura
		//Mansoura
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Mansoura',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Dekernes
		//Zmoumis
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Zmoumis',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Madder',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Damietta
		//Damietta
		//Damietta
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Damietta',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Damietta',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Damul
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Damul',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Minya
		//Minya
		//Minya
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Minya',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
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
			'guild_name' => 'Tournament of ',
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
		//Kharga
		//Kharga
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Kharga',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Baritun
		//Baritun
		//Baritun
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Baritun',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
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
			'guild_name' => 'Court of Boula',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Qoseir
		//Banat
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Banat',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Banat',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Kingdom of Jerusalem
		//Jerusalem
		//Jerusalem
		//Jerusalem
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Jerusalem',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '60',
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Jerusalem',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Ascolon
		//Jura
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Jura',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Majdal
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Majdal',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Galilee
		//Tiberias
		//Tiberias
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Galilee',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => '',
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Hattin
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Principality of Hejaz
		//Mecca
		//Mecca
		//Mecca
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Mecca',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '61',
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Mecca',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Incense',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Mecca',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Jeddah
		//Jeddah
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Jeddah',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Incense',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Jeddah',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Taif
		//Taif
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Taif',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Incense',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Medina
		//Medina
		//Medina
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Medina',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Medina',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Incense',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Medina',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Yanbu
		//Yanbu
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Yanbu',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Incense',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Yanbu',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Khaybar
		//Khaybar
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Khaybar',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Incense',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Tabuk
		//Tabuk
		//Tabuk
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Tabuk',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Tabuk',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Incense',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Sharat
		//Muan
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Muan',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Incense',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Hegra
		//Hegra
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Hegra',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Incense',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Khazar Empire
		//Kingdom of Khazaria
		//Aqtobe
		//Aqtobe
		//Aqtobe
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Aqtobe',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Sarkel
		//Sarkel
		//Sarkel
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Sarkel',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Atil
		//Atil
		//Atil
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Atil',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Empire',
			'empire' => '18',
			'kingdom' => '62',
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Bolghar
		//Bolghar
		//Bolghar
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Bolghar',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Bilar
		//Bilar
		//Bilar
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Bilar',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
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
		//Derbent
		//Derbent
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Derbent',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Derbent',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Azov
		//Azov
		//Azov
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Azov',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Azov',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Maghas
		//Maghas
		//Maghas
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Maghas',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '63',
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Maghas',
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
		//Sighnaq
		//Sighnaq
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Sighnaq',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '64',
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Sighnaq',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Sozak
		//Sozak
		//Sozak
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Sozak',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Sozak',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Sibir
		//Sibir
		//Qashliq
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Sibir',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Qashliq',
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
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '65',
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Gurganj',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Gurganj',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Gurganj',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Gurganj',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Khorezm
		//Toprak
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Toprak',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Toprak',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Toprak',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Khiva
		//Khiva
		//Khiva
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Khiva',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Khiva',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Khiva',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Durghan
		//Durghan
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Merv
		//Merv
		//Merv
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Merv',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Merv',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Merv',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Merv',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Merv',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Bayram
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Gyaur
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Gyaur',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Erk
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Erk',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Sarakhs
		//Sarakhs
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Sarakhs',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Sharaf
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Bereket
		//Bereket
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Bereket',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Kyzyl
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Kingdom of Isfahan
		//Isfahan
		//Isfahan
		//Isfahan
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Isfahan',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Empire',
			'empire' => '19',
			'kingdom' => '66',
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Isfahan',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Kashan
		//Kashan
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Kashan',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Rose',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Qom
		//Qom
		DB::table('guilds')->insert([
			'guild_name' => 'University of Qom',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Yazd
		//Yazd
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Yazd',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Yazd',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Yazd',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Chahak
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Chahak',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Karaj
		//Karaj
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Qazvin
		//Qazvin
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Qazvin',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Qazvin',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Shiraz
		//Shiraz
		//Shiraz
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Shiraz',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Shiraz',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
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
		//Hormuz
		//Hormuz
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Hormuz',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '67',
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Kerman
		//Kerman
		//Kerman
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Kerman',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => null,
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Kerman',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Kerman',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Kerman',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Baghin
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Bam
		//Bam
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Rafsinjan
		//Bayaz
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Bayaz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Bayaz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Kuhbanan
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		//Behabad
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Behabad',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'barony' => ''
		]);
		
    }
}
