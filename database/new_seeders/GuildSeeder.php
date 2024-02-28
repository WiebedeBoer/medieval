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
			'hundred' => ''						//default = null
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
		//Royal_Court & (!Empire):						Court		Major_Kingdom				(51)
		//Chancellery & (!Court) & (Church State):		Court		Church_Kingdom				(1)
		//Chancellery & (!Court) & (Monastic State):	Court		Monastic_Kingdom			(1)
		//Ducal_Court:									Court		Petty_Kingdom				(236)
		//Chancellery & (!Court) & (Archbishop):		Court		Bishopric					(18)
		//Signoria:										Court		Republic					(14)
		//
		//												(152)
		//Cathedral_School:								University	Scholar_Bishop				(120)									*
		//Monastic_School:								University	Scholar_Monastic			(52)									*
		//
		//												(769)													name:
		//Guild_Potter:									Craft		Master_Potterer				(113)			Potterers				*
		//Guild_Smith:									Craft		Master_Smith				(90)			Cutlers					*
		//Guild_Tanner:									Craft		Master_Tanner				(124)			Skinners				*
		//Guild_Furrier:								Craft		Master_Furrier				(20)			Furriers				*
		//Guild_Silk:									Craft		Master_Silk_Weaver			(52)			Silk Weavers			*
		//Guild_Cloth:									Craft		Master_Draper				(41)			Drapers					*
		//Guild_Dyer_Woad:								Craft		Master_Dyer_Woad			(58)			Dyers					*
		//Guild_Dyer_Kermes:							Craft		Master_Dyer_Kermes			(28)			Dyers					*
		//Guild_Dyer_Madder:							Craft		Master_Dyer_Madder			(10)			Dyers					*
		//Guild_Dyer_Saffron:							Craft		Master_Dyer_Saffron			(37)			Dyers					*
		//Guild_Perfume_Lavender:						Craft		Master_Perfumer_Lavender	(80)			Perfumers				*
		//Guild_Perfume_Incense:						Craft		Master_Perfumer_Incense		(12)			Perfumers				*
		//Guild_Perfume_Rose:							Craft		Master_Perfumer_Rose		(11)			Perfumers				*
		//Guild_Perfume_Cedar:							Craft		Master_Perfumer_Cedar		(4)				Perfumers				*
		//
		//Arsenal:										Craft		Master_Mariner				(99)			Mariners				*
		//Armoury_Mill:									Craft		Master_Platner				(32)			Platners				*
		//Armoury:										Craft		Master_Armorer				(139)			Armorers				*
		//
		//Guild_Thatcher:								Craft		Master_Thatcher				(17)			Thatchers				*
		//Guild_Joiner:									Craft		Master_Joiner				(18)			Joiners					*
		//Guild_Miller:									Craft		Master_Miller				(87)			Millers					*
		//Guild_Fuller:									Craft		Master_Fuller				(76)			Fullers					*
		//Guild_Vintner:								Craft		Master_Vintner				(62)			Vintners				*
		//Guild_Cheesemonger:							Craft		Master_Cheesemonger			(39)			Cheesemongers			*
		//Guild_Chandler:								Craft		Master_Chandler				(29)			Chandlers				*
		//Guild_Ironworks:								Craft		Master_Ironmonger			(43)			Forge					*
		//
		//												(1079)
		//Tiltyard:										Feast		Tournament					(575)			Tourney:	575			*
		//Trade_Fair:									Feast		Fair						(296)			Fairs:		296			*
		//Coaching_Inn:									Feast		Tavern						(194)			Inns:		194			217?
		//Hunting_Lodge_Boar:							Feast		Hunt_Boar					(64)			Hunting:	176			*
		//Hunting_Lodge_Deer:							Feast		Hunt_Deer					(93)									*
		//Hunting_Lodge_Hare:							Feast		Hunt_Falconer				(20)									*
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
			'hundred' => null
		]);		
		DB::table('guilds')->insert([
			'guild_name' => 'Greek Orthodox',
			'guild_category' => 'Cleric',
			'guild_subcategory' => 'Cleric_Orthodox_Greek',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'hundred' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Bulgarian Orthodox',
			'guild_category' => 'Cleric',
			'guild_subcategory' => 'Cleric_Orthodox_Bulgarian',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'hundred' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Serbian Orthodox',
			'guild_category' => 'Cleric',
			'guild_subcategory' => 'Cleric_Orthodox_Serbian',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'hundred' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Sunni Islam',
			'guild_category' => 'Cleric',
			'guild_subcategory' => 'Cleric_Muslim_Sunni',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'hundred' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Shia Islam',
			'guild_category' => 'Cleric',
			'guild_subcategory' => 'Cleric_Muslim_Shia',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'hundred' => null
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
			'hundred' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Carmelite Order',
			'guild_category' => 'Monastic',
			'guild_subcategory' => 'Monk_Catholic_Mendicant',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'hundred' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dominican Order',
			'guild_category' => 'Monastic',
			'guild_subcategory' => 'Monk_Catholic_Mendicant',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'hundred' => null
		]);	
		DB::table('guilds')->insert([
			'guild_name' => 'Franciscan Order',
			'guild_category' => 'Monastic',
			'guild_subcategory' => 'Monk_Catholic_Mendicant',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'hundred' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Trinitarian Order',
			'guild_category' => 'Monastic',
			'guild_subcategory' => 'Monk_Catholic_Mendicant',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'hundred' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Benedictine Order',
			'guild_category' => 'Monastic',
			'guild_subcategory' => 'Monk_Catholic_Canon',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'hundred' => null
		]);	
		DB::table('guilds')->insert([
			'guild_name' => 'Carthusian Order',
			'guild_category' => 'Monastic',
			'guild_subcategory' => 'Monk_Catholic_Canon',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'hundred' => null
		]);		
		DB::table('guilds')->insert([
			'guild_name' => 'Cistercian Order',
			'guild_category' => 'Monastic',
			'guild_subcategory' => 'Monk_Catholic_Canon',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'hundred' => null
		]);	
		DB::table('guilds')->insert([
			'guild_name' => 'Norbertine Order',
			'guild_category' => 'Monastic',
			'guild_subcategory' => 'Monk_Catholic_Canon',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'hundred' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Pauline Order',
			'guild_category' => 'Monastic',
			'guild_subcategory' => 'Monk_Catholic_Canon',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'hundred' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Greek Orthodox',
			'guild_category' => 'Monastic',
			'guild_subcategory' => 'Monk_Orthodox_Greek',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'hundred' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Bulgarian Orthodox',
			'guild_category' => 'Monastic',
			'guild_subcategory' => 'Monk_Orthodox_Bulgarian',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'hundred' => null
		]);	
		DB::table('guilds')->insert([
			'guild_name' => 'Serbian Orthodox',
			'guild_category' => 'Monastic',
			'guild_subcategory' => 'Monk_Orthodox_Serbian',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'hundred' => null
		]);			
		DB::table('guilds')->insert([
			'guild_name' => 'Sufi Order',
			'guild_category' => 'Monastic',
			'guild_subcategory' => 'Monk_Muslim_Sufi',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'hundred' => null
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
			'hundred' => null
		]);	
		DB::table('guilds')->insert([
			'guild_name' => 'Knights Hospitaller',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Crusader_Hospitaller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'hundred' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Teutonic Knights',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Crusader_Teutonic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => null,
			'county' => null,
			'hundred' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of Saint Anthony',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => '1',
			'duchy' => null,
			'county' => null,
			'hundred' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of Saint Hubert',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => '1',
			'duchy' => null,
			'county' => null,
			'hundred' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Blessed Mary',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Crusader_Common',
			'empire' => null,
			'kingdom' => '2',
			'duchy' => null,
			'county' => null,
			'hundred' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of Jesus Christ',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Crusader_Common',
			'empire' => null,
			'kingdom' => '2',
			'duchy' => null,
			'county' => null,
			'hundred' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Golden Fleece',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => '4',
			'duchy' => null,
			'county' => null,
			'hundred' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Holy Sepulchre',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Crusader_Common',
			'empire' => null,
			'kingdom' => '5',
			'duchy' => null,
			'county' => null,
			'hundred' => null
		]);	
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Holy Ghost',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Crusader_Common',
			'empire' => null,
			'kingdom' => '7',
			'duchy' => null,
			'county' => null,
			'hundred' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Star',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => '7',
			'duchy' => null,
			'county' => null,
			'hundred' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of Saint Michael',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => '7',
			'duchy' => null,
			'county' => null,
			'hundred' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Ermine',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => '8',
			'duchy' => null,
			'county' => null,
			'hundred' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Garter',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => '10',
			'duchy' => null,
			'county' => null,
			'hundred' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of Montesa',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Crusader_Common',
			'empire' => null,
			'kingdom' => '13',
			'duchy' => null,
			'county' => null,
			'hundred' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of Calatrava',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Crusader_Common',
			'empire' => null,
			'kingdom' => '15',
			'duchy' => null,
			'county' => null,
			'hundred' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Band',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => '15',
			'duchy' => null,
			'county' => null,
			'hundred' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of Santiago',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Crusader_Common',
			'empire' => null,
			'kingdom' => '16',
			'duchy' => null,
			'county' => null,
			'hundred' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of Alcantara',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Crusader_Common',
			'empire' => null,
			'kingdom' => '17',
			'duchy' => null,
			'county' => null,
			'hundred' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of Aviz',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Crusader_Common',
			'empire' => null,
			'kingdom' => '19',
			'duchy' => null,
			'county' => null,
			'hundred' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Tower and the Sword',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => '19',
			'duchy' => null,
			'county' => null,
			'hundred' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of Saint George',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => '25',
			'duchy' => null,
			'county' => null,
			'hundred' => null
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Knights of the Knot',
			'guild_category' => 'Chivalric',
			'guild_subcategory' => 'Knight',
			'empire' => null,
			'kingdom' => '28',
			'duchy' => null,
			'county' => null,
			'hundred' => null
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Vienna',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '1',
			'county' => '3',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Vienna',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '1',
			'county' => '3',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Vienna',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '1',
			'county' => '3',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Vienna',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '1',
			'county' => '3',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Kreuzenstein',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '1',
			'county' => '3',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Nuremberg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '2',
			'county' => '7',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Nuremberg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '2',
			'county' => '7',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Nuremberg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '2',
			'county' => '7',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Brussels',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => '12',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Brussels',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => '12',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Brussels',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => '12',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Louvain',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => '12',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Louvain',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => '12',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Louvain',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => '12',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Antwerp',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => '16',
			'hundred' => ''
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
			'hundred' => ''
		]);	
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Turnhout',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => '16',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Turnhout',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => '16',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Ghent',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => '17',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Ghent',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => '17',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Ghent',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '3',
			'county' => '17',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Graz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '4',
			'county' => '20',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Krainburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '5',
			'county' => '27',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Krainburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '5',
			'county' => '27',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Rotenburg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '6',
			'county' => '30',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Hohenstein',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '6',
			'county' => '35',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Wurzburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '6',
			'county' => '37',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Wurzburg',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '6',
			'county' => '37',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		//Waalwick
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Waalwick',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => '47',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		//Rotterdam
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Rotterdam',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => '50',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Utrecht',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => '51',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Dorestadt',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => '51',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Leithen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '',
			'county' => '',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => '65',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Hoorn',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '7',
			'county' => '65',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Deventer',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '8',
			'county' => '70',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Julich',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '9',
			'county' => '73',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Julich',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '9',
			'county' => '73',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Aachen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '9',
			'county' => '73',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Huy',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '10',
			'county' => '78',
			'hundred' => ''
		]);
		//Ciney
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Ciney',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '10',
			'county' => '78',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Metz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '11',
			'county' => '81',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Nancy',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '11',
			'county' => '87',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Luxembourg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '12',
			'county' => '88',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Brunswick',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '13',
			'county' => '94',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '13',
			'county' => '99',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Osterode',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '13',
			'county' => '99',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Styraburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '14',
			'county' => '100',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Innsbruck',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '14',
			'county' => '102',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Innsbruck',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '14',
			'county' => '102',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Innsbruck',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '14',
			'county' => '102',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Kufstein',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '14',
			'county' => '102',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Kufstein',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '14',
			'county' => '102',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Tirol',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '14',
			'county' => '104',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Tirol',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '14',
			'county' => '104',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Augsburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '108',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Augsburg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '108',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Augsburg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '108',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Wittelsbach',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '108',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Wittelsbach',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '108',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Freiburg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '109',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Basel',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '109',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Basel',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '109',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Hohenzollern',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '116',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Hohenzollern',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '116',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Falkenstein',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '116',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Falkenstein',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '116',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Hohenstaufen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '116',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Hohenstaufen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '116',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Zurich',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '120',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Winterthur',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '15',
			'county' => '120',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Erfurt',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '16',
			'county' => '121',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Erfurt',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '16',
			'county' => '121',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Muhlhausen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '16',
			'county' => '123',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Arnstadt',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '16',
			'county' => '125',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Naumburg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '16',
			'county' => '128',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Zwickau',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '16',
			'county' => '129',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Zwickau',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '16',
			'county' => '129',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Plauen',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '16',
			'county' => '129',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Bremen',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
			'county' => '130',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Bremen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
			'county' => '130',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Bremen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
			'county' => '130',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Heger',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
			'county' => '138',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Warendorf',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
			'county' => '148',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Attendorn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
			'county' => '150',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Attendorn',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '17',
			'county' => '150',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Cologne',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '18',
			'county' => '151',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Cologne',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '18',
			'county' => '151',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Cologne',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '18',
			'county' => '151',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Cologne',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '18',
			'county' => '151',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Magdeburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '19',
			'county' => '155',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Magdeburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '19',
			'county' => '155',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Magdeburg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '19',
			'county' => '155',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Halberstadt',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '19',
			'county' => '158',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Salzwedel',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '19',
			'county' => '160',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Mainz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '162',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Mainz',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '162',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Mainz',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '162',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Kassel',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '164',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Kassel',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '164',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Fritzlar',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '164',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Limburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '165',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Wetzlar',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '165',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Frankfurt',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '172',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Frankfurt',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '172',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		//Massenheim
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Massenheim',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '172',
			'hundred' => ''
		]);
		//Munzenberg
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Homburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Falconer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '172',
			'hundred' => ''
		]);
		//Bettenhausen
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Bettenhausen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '20',
			'county' => '172',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Salzburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '21',
			'county' => '174',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Trier',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '22',
			'county' => '179',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Trier',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '22',
			'county' => '179',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Milano',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '183',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Milano',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '183',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Milano',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '183',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Milano',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '183',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Bergamo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '184',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Brescia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '185',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Modena',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '191',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Pavia',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '194',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Pavia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '194',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Pavia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '194',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Piacenza',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '23',
			'county' => '195',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Asti',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
			'county' => '200',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Cuneo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
			'county' => '204',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Novalesa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
			'county' => '207',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Turino',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
			'county' => '208',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Turino',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
			'county' => '208',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Turino',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
			'county' => '208',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Vercelli',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
			'county' => '209',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Vigevano',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
			'county' => '210',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Vigevano',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '24',
			'county' => '210',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Siena',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '25',
			'county' => '211',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Siena',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '25',
			'county' => '211',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Siena',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '25',
			'county' => '211',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Siena',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '25',
			'county' => '211',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Siena',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '25',
			'county' => '211',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Grosseto',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '25',
			'county' => '212',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Verona',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '26',
			'county' => '215',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Verona',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '26',
			'county' => '215',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Este',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '26',
			'county' => '216',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Vicenza',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '26',
			'county' => '218',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Trent',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '26',
			'county' => '219',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Aquileia',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '27',
			'county' => '220',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Florence',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '28',
			'county' => '223',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Florence',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '28',
			'county' => '223',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Florence',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '28',
			'county' => '223',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Florence',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '28',
			'county' => '223',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Florence',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '28',
			'county' => '223',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Arezzo',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '28',
			'county' => '224',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Arezzo',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '28',
			'county' => '224',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Arezzo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '28',
			'county' => '224',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Perugia',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '28',
			'county' => '226',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Genoa',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '29',
			'county' => '228',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Genoa',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '29',
			'county' => '228',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Genoa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '29',
			'county' => '228',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Genoa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '29',
			'county' => '228',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Noli',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '30',
			'county' => '231',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Noli',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '30',
			'county' => '231',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Oneglia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '31',
			'county' => '234',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Ventimiglia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '31',
			'county' => '236',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Lucca',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '32',
			'county' => '237',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Lucca',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '32',
			'county' => '237',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Pistoia',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '32',
			'county' => '238',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Pistoia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '32',
			'county' => '238',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Pescia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '32',
			'county' => '238',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Pisa',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '33',
			'county' => '239',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Pisa',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '33',
			'county' => '239',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Pisa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '33',
			'county' => '239',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Pisa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '33',
			'county' => '239',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '33',
			'county' => '239',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Riparbella',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '33',
			'county' => '242',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Venice',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '34',
			'county' => '244',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Venice',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '34',
			'county' => '244',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Venice',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '34',
			'county' => '244',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Venice',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '34',
			'county' => '244',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Treviso',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '34',
			'county' => '246',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Prague',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '35',
			'county' => '247',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Prague',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '35',
			'county' => '247',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Prague',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '35',
			'county' => '247',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Prague',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '35',
			'county' => '247',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Prague',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '35',
			'county' => '247',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Wunschelburg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '35',
			'county' => '251',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Meissen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '36',
			'county' => '259',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Leipzig',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '36',
			'county' => '261',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Leipzig',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '36',
			'county' => '261',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Leipzig',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '36',
			'county' => '261',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Senftenberg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '36',
			'county' => '262',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Lebusa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '36',
			'county' => '262',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Brunn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '37',
			'county' => '264',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Olmutz',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '37',
			'county' => '266',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Jauer',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '38',
			'county' => '270',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Furriers Guild of Jauer',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Furrier',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '38',
			'county' => '270',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Glogau',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '38',
			'county' => '271',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Glogau',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '38',
			'county' => '271',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Liegnitz',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '38',
			'county' => '273',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Liegnitz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '38',
			'county' => '273',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Schweidnitz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '38',
			'county' => '275',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Striegau',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '38',
			'county' => '275',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Schmiedeberg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '38',
			'county' => '275',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Hirschberg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '38',
			'county' => '275',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Breslau',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '39',
			'county' => '277',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Nevers',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '40',
			'county' => '291',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Grenoble',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '41',
			'county' => '293',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Grenoble',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '41',
			'county' => '293',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '41',
			'county' => '293',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Lyon',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '41',
			'county' => '298',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Lyon',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '41',
			'county' => '298',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Besancon',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '42',
			'county' => '302',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Besancon',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '42',
			'county' => '302',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Dole',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '42',
			'county' => '302',
			'hundred' => ''
		]);
		//Granges
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Granges',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '42',
			'county' => '302',
			'hundred' => ''
		]);
		//Lons
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Lons',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '42',
			'county' => '302',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Bern',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '42',
			'county' => '303',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Solothurn',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '42',
			'county' => '304',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Orange',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '43',
			'county' => '308',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Avignon',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '43',
			'county' => '309',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		//Montjoyer
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Montjoyer',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '43',
			'county' => '310',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Aix',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '44',
			'county' => '311',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Aix',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '44',
			'county' => '311',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Arles',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '44',
			'county' => '312',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Arles',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '44',
			'county' => '312',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Arles',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '44',
			'county' => '312',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Tarascon',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '44',
			'county' => '312',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Baux',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '44',
			'county' => '313',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Marseille',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '44',
			'county' => '314',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Nice',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '44',
			'county' => '315',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Frejus',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '44',
			'county' => '315',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Toulon',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '44',
			'county' => '316',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Chambery',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '45',
			'county' => '317',
			'hundred' => ''
		]);
		//Aosta
		//Aosta
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Aosta',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '45',
			'county' => '318',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Rome',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '46',
			'county' => '323',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Rome',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '46',
			'county' => '323',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Rome',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '46',
			'county' => '323',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Rome',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '46',
			'county' => '323',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Ferrara',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '47',
			'county' => '328',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Ferrara',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '47',
			'county' => '328',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Bologna',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '47',
			'county' => '329',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Bologna',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '47',
			'county' => '329',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Ravenna',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '47',
			'county' => '331',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Ancona',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '48',
			'county' => '332',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Ancona',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '48',
			'county' => '332',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Riga',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '50',
			'county' => '339',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Riga',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '50',
			'county' => '339',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Riga',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '50',
			'county' => '339',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Riga',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '50',
			'county' => '339',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Riga',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '50',
			'county' => '339',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild of Windau',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Chandler',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '50',
			'county' => '344',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Furriers Guild of Lemsal',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Furrier',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '50',
			'county' => '347',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Reval',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '51',
			'county' => '349',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Marienburg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '52',
			'county' => '351',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Koningsberg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '52',
			'county' => '358',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Koningsberg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '52',
			'county' => '358',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament  of Danzig',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '53',
			'county' => '359',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Danzig',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '53',
			'county' => '359',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Danzig',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '53',
			'county' => '359',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '53',
			'county' => '359',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild of Dirschau',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Chandler',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '53',
			'county' => '361',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Graudenz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '53',
			'county' => '363',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Putzig',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '53',
			'county' => '365',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild of Stralsund',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Chandler',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '54',
			'county' => '376',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Stettin',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '54',
			'county' => '383',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Brandenburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '55',
			'county' => '385',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Brandenburg',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '55',
			'county' => '385',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Brandenburg',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '55',
			'county' => '385',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Mecklenburg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '56',
			'county' => '392',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Wismar',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '56',
			'county' => '392',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Lubeck',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '56',
			'county' => '394',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Lubeck',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '56',
			'county' => '394',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Angers',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '57',
			'county' => '395',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Angers',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '57',
			'county' => '395',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Laval',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '57',
			'county' => '396',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Laval',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '57',
			'county' => '396',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Chinon',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '57',
			'county' => '398',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Bordeaux',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '58',
			'county' => '400',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Bordeaux',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '58',
			'county' => '400',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Bordeaux',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '58',
			'county' => '400',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Bordeaux',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '58',
			'county' => '400',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Perigueux',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '58',
			'county' => '406',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Sauveterre',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '59',
			'county' => '410',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Saint Flour',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '59',
			'county' => '414',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Bourges',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '60',
			'county' => '415',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Bourges',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '60',
			'county' => '415',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Eauze',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '62',
			'county' => '419',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Auch',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '62',
			'county' => '420',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '62',
			'county' => '423',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Bayonne',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '62',
			'county' => '425',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Vic',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '62',
			'county' => '426',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Reims',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '63',
			'county' => '429',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Vitry',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '63',
			'county' => '431',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '63',
			'county' => '436',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Provins',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Rose',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '63',
			'county' => '436',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Troyes',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '63',
			'county' => '439',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Troyes',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '63',
			'county' => '439',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Clairvaux',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '63',
			'county' => '439',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Paris',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '440',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Paris',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '440',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Paris',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '440',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Paris',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '440',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Paris',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '440',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Brie',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '443',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Melun',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '443',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Lagny',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '443',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Landon',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '445',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Corbeil',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '446',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Dourdan',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '64',
			'county' => '446',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Rouen',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '452',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Rouen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '452',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Rouen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '452',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Harcourt',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '452',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		//Bec
		DB::table('guilds')->insert([
			'guild_name' => 'University of Bec',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '452',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Alencon',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '453',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Argentan',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '453',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Caen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '455',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Saint Lo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '457',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Saint Lo',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '457',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Gaillard',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '458',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Gisors',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '458',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Falaise',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '460',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Honfleur',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '460',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Honfleur',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '65',
			'county' => '460',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Orleans',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '66',
			'county' => '462',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Orleans',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '66',
			'county' => '462',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Chambord',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '66',
			'county' => '463',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Chambord',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '66',
			'county' => '463',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Chartres',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '66',
			'county' => '464',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Chartres',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '66',
			'county' => '464',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Joiners Guild of Chateaudun',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Joiner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '66',
			'county' => '465',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Chateaudun',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '66',
			'county' => '465',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Etampes',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Falconer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '66',
			'county' => '467',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Etampes',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '66',
			'county' => '467',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Saint Omer',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '469',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Amiens',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '470',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Amiens',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '470',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Kontor of Bruges Easterling House',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '472',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Bruges',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '472',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Bruges',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '472',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Ypres',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '472',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Ypres',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '472',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Ypres',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '472',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Lille',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '472',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Lille',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '472',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Douai',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '472',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Douai',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '472',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Poperinge',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '472',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Calais',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '473',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Calais',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '473',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Laon',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '474',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Tournai',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '479',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Tournai',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '479',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Tournai',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '479',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Courtrai',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '479',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Courtrai',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '479',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Saint Quentin',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '67',
			'county' => '480',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Poitiers',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => '481',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Poitiers',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => '481',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Poitiers',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => '481',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Poitiers',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => '481',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Niort',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => '481',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Rochelle',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => '482',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => '483',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Thouars',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => '486',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Thouars',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => '486',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Fontenay',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '68',
			'county' => '486',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Toulouse',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '488',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Toulouse',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '488',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Toulouse',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '488',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Toulouse',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '488',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Carcasonne',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '490',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Foix',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '491',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Foix',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '491',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Tarascon',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '491',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Tarascon',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '491',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Langogne',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '492',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Montpellier',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '493',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Narbonne',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '495',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Narbonne',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '495',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Agde',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '495',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Cahors',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '497',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Cahors',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '69',
			'county' => '497',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Quimper',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '70',
			'county' => '500',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Quimper',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '70',
			'county' => '500',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Brest',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '70',
			'county' => '501',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Dol',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '70',
			'county' => '502',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Josselin',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '70',
			'county' => '504',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Vannes',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '70',
			'county' => '505',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Guingamp',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '71',
			'county' => '506',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Chatelaudren',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '71',
			'county' => '506',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Chatelaudren',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '71',
			'county' => '506',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Machecoul',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '72',
			'county' => '509',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Reze',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '72',
			'county' => '509',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Reze',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '72',
			'county' => '509',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Nantes',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '72',
			'county' => '510',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Chateaubriant',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '72',
			'county' => '510',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Fougeres',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '72',
			'county' => '511',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Galway',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '73',
			'county' => '512',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		//Waterford
		//Waterford
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Waterford',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '74',
			'county' => '521',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Dublin',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '75',
			'county' => '524',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Dublin',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '75',
			'county' => '524',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Longford',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '75',
			'county' => '525',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Cork',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '76',
			'county' => '529',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Carrickfergus',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '76',
			'county' => '532',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Armagh',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '77',
			'county' => '533',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Armagh',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '77',
			'county' => '533',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Donegal',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '77',
			'county' => '536',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Norwich',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '78',
			'county' => '543',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Thetford',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '78',
			'county' => '543',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Aylsham',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '78',
			'county' => '543',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Lowestoft',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '78',
			'county' => '544',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Sudbury',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '78',
			'county' => '544',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Sudbury',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '78',
			'county' => '544',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Hadleigh',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '79',
			'county' => '545',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Walden',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '79',
			'county' => '545',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Hertford',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '79',
			'county' => '546',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Berkhamsted',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Falconer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '79',
			'county' => '546',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Berkhamsted',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '79',
			'county' => '546',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Kontor of London Steelyard',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '79',
			'county' => '547',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of London',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '79',
			'county' => '547',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of London',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '79',
			'county' => '547',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Westminster',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '79',
			'county' => '547',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Wotton',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '80',
			'county' => '548',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Warwick',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '80',
			'county' => '549',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Coventry',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '80',
			'county' => '549',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Winchcombe',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '80',
			'county' => '550',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Worcester',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '80',
			'county' => '551',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Worcester',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '80',
			'county' => '551',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Canterbury',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '81',
			'county' => '553',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Sandwich',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '81',
			'county' => '553',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Leeds',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '81',
			'county' => '553',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Leeds',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '81',
			'county' => '553',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Hythe',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '81',
			'county' => '554',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Folkestone',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '81',
			'county' => '554',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Derby',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => '555',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Derby',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => '555',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Leicester',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => '556',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Lincoln',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => '557',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Lincoln',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => '557',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Lincoln',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => '557',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Stamford',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => '557',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Stamford',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => '557',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Joiners Guild of Nottingham',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Joiner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => '558',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Nottingham',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '82',
			'county' => '558',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Chester',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '83',
			'county' => '560',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		//Herefordshire
		//Hereford
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Hereford',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '83',
			'county' => '561',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Stokesay',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '83',
			'county' => '562',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Ludlow',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '83',
			'county' => '562',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Stafford',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '83',
			'county' => '563',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Stafford',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '83',
			'county' => '563',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Tamworth',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '83',
			'county' => '563',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Tamworth',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '83',
			'county' => '563',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Buckingham',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => '565',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Cambridge',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => '566',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Cambridge',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => '566',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Peterborough',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Woad',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => '566',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Northampton',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => '568',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Northampton',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => '568',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Northampton',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => '568',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Northampton',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => '568',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Oxford',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => '569',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Oxford',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => '569',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Oxford',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '84',
			'county' => '569',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '571',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Appleby',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '572',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		//Tickhill
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Tickhill',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '574',
			'hundred' => ''
		]);
		//Wellingley
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Wellingley',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '574',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Lancaster',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '578',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Lancaster',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '578',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of York',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '580',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of York',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '580',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of York',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '580',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Pontefract',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '85',
			'county' => '580',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Hastings',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '86',
			'county' => '586',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Windsor',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '87',
			'county' => '587',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Windsor',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '87',
			'county' => '587',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Winchester',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '87',
			'county' => '589',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Shawford',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '87',
			'county' => '589',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Winchester',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '87',
			'county' => '589',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Southampton',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '87',
			'county' => '589',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Southampton',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '87',
			'county' => '589',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Trowbridge',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '87',
			'county' => '592',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Hurdondown',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '88',
			'county' => '593',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Bellever',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Falconer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '88',
			'county' => '594',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '88',
			'county' => '594',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '88',
			'county' => '594',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Plymouth',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '88',
			'county' => '594',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Pembroke',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '89',
			'county' => '597',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Pembroke',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '89',
			'county' => '597',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Haverford',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '89',
			'county' => '597',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Newcastle',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '90',
			'county' => '598',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Abergavenny',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '90',
			'county' => '599',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Caerphilly',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '90',
			'county' => '599',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Caerleon',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '90',
			'county' => '599',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Beaumaris',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '91',
			'county' => '600',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Caernarfon',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '91',
			'county' => '601',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Caernarfon',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '91',
			'county' => '601',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Conwy',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '91',
			'county' => '601',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Harlech',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '91',
			'county' => '601',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Powis',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '92',
			'county' => '605',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Aberdeen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '93',
			'county' => '607',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Aberdeen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '93',
			'county' => '607',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Banff',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '93',
			'county' => '608',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Dundee',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '93',
			'county' => '611',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Stonehaven',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '93',
			'county' => '612',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Perth',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '93',
			'county' => '614',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Berwick',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '94',
			'county' => '615',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Edinburgh',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '94',
			'county' => '616',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '94',
			'county' => '616',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Edinburgh',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '94',
			'county' => '616',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Edinburgh',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '94',
			'county' => '616',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Dunadd',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '95',
			'county' => '620',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Dumfries',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '98',
			'county' => '630',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Dumfries',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '98',
			'county' => '630',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Jedburgh',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '98',
			'county' => '632',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Alcaniz',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '100',
			'county' => '638',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Alcaniz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '100',
			'county' => '638',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Alcaniz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '100',
			'county' => '638',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Manresa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '101',
			'county' => '641',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Barcelona',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '101',
			'county' => '642',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Barcelona',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '101',
			'county' => '642',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Barcelona',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '101',
			'county' => '642',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Barcelona',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '101',
			'county' => '642',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Barcelona',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '101',
			'county' => '642',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Berga',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '101',
			'county' => '643',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Baga',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '101',
			'county' => '643',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Baga',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '101',
			'county' => '643',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Vic',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '101',
			'county' => '646',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Emporda',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '102',
			'county' => '650',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Girona',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '102',
			'county' => '651',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Girona',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '102',
			'county' => '651',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Girona',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '102',
			'county' => '651',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Olot',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '102',
			'county' => '653',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Perpignan',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Lavender',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '102',
			'county' => '654',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Huesca',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '103',
			'county' => '656',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Lleida',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '104',
			'county' => '660',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Thatchers Guild of Lleida',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Thatcher',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '104',
			'county' => '660',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Lleida',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '104',
			'county' => '660',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Urgell',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '104',
			'county' => '662',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Urgell',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '104',
			'county' => '662',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Amposta',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '105',
			'county' => '663',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Tarragona',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '105',
			'county' => '664',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Tarragona',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '105',
			'county' => '664',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Albarracin',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '106',
			'county' => '666',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Albarracin',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '106',
			'county' => '666',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Albarracin',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '106',
			'county' => '666',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Teruel',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '106',
			'county' => '667',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Calatayud',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '107',
			'county' => '669',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Zaragoza',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '107',
			'county' => '670',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Zaragoza',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '107',
			'county' => '670',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Zaragoza',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '107',
			'county' => '670',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Zaragoza',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '107',
			'county' => '670',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Ayala',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '108',
			'county' => '671',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Ayala',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '108',
			'county' => '671',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Gasteiz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '108',
			'county' => '672',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Gasteiz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '108',
			'county' => '672',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Calahorra',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '108',
			'county' => '673',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Pamplona',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '110',
			'county' => '679',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Pamplona',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '110',
			'county' => '679',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '111',
			'county' => '685',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Avila',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '112',
			'county' => '687',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Avila',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '112',
			'county' => '687',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Burgos',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '113',
			'county' => '692',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Burgos',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '113',
			'county' => '692',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Burgos',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '113',
			'county' => '692',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Burgos',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '113',
			'county' => '692',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Palencia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '114',
			'county' => '693',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Palencia',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '114',
			'county' => '693',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Medina',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Madder',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '114',
			'county' => '693',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Coca',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '115',
			'county' => '696',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Segovia',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '115',
			'county' => '698',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Segovia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '115',
			'county' => '698',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Segovia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '115',
			'county' => '698',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Segovia',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '115',
			'county' => '698',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Almazan',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '116',
			'county' => '700',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Soria',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '116',
			'county' => '704',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Soria',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '116',
			'county' => '704',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Soria',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '116',
			'county' => '704',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Madrid',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '117',
			'county' => '706',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Carrion',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '117',
			'county' => '706',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Toledo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '117',
			'county' => '710',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Toledo',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '117',
			'county' => '710',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Toledo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '117',
			'county' => '710',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Toledo',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '117',
			'county' => '710',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Valladolid',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '118',
			'county' => '717',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Valladolid',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '118',
			'county' => '717',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Santiago',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '119',
			'county' => '722',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Santiago',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '119',
			'county' => '722',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Santiago',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '119',
			'county' => '722',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Thatchers Guild of Santiago',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Thatcher',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '119',
			'county' => '722',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Lugo',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '120',
			'county' => '724',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Ourense',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '121',
			'county' => '731',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Pontevedra',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '122',
			'county' => '735',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Vigo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '122',
			'county' => '736',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Tuy',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '122',
			'county' => '736',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Caceres',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '123',
			'county' => '738',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Leon',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '124',
			'county' => '744',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Leon',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '124',
			'county' => '744',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Rodrigo',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '124',
			'county' => '751',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Espeja',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '124',
			'county' => '751',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Salamanca',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '125',
			'county' => '752',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Gijon',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '126',
			'county' => '761',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Oviedo',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '127',
			'county' => '763',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Oviedo',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '127',
			'county' => '763',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Santander',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '128',
			'county' => '766',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Santander',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '128',
			'county' => '766',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Aveiro',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '129',
			'county' => '768',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Aveiro',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '129',
			'county' => '768',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Barcelos',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '129',
			'county' => '769',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Barcelos',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '129',
			'county' => '769',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Guimaraes',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '129',
			'county' => '769',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Guimaraes',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '129',
			'county' => '769',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Porto',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '129',
			'county' => '770',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Porto',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '129',
			'county' => '770',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Coimbra',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '130',
			'county' => '773',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Lisboa',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '132',
			'county' => '779',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Lisboa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '132',
			'county' => '779',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Lisboa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '132',
			'county' => '779',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Monsanto',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '132',
			'county' => '779',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Tomar',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '132',
			'county' => '780',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Tomar',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '132',
			'county' => '780',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Ribe',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '133',
			'county' => '784',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Slesvig',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '133',
			'county' => '785',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		//Halland
		//Falkenberg
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Falkenberg',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Falconer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '134',
			'county' => '789',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Lund',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '134',
			'county' => '791',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Malmohus',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '134',
			'county' => '791',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Egeskov',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '135',
			'county' => '792',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Egeskov',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '135',
			'county' => '792',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Kobenhavn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '135',
			'county' => '795',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Kobenhavn',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '135',
			'county' => '795',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Kobenhavn',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '135',
			'county' => '795',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Kobenhavn',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '135',
			'county' => '795',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Kobenhavn',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '135',
			'county' => '795',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Hamar',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '138',
			'county' => '806',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Bergen',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '142',
			'county' => '',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Kontor of Bergen Tyskebryggen',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '142',
			'county' => '821',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Bergen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '142',
			'county' => '821',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Bergen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '142',
			'county' => '821',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Thatchers Guild of Bergen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Thatcher',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '142',
			'county' => '821',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Joiners Guild of Bohus',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Joiner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '143',
			'county' => '825',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Oslo',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '143',
			'county' => '827',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Oslo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '143',
			'county' => '827',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Joiners Guild of Oslo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Joiner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '143',
			'county' => '827',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Oslo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '143',
			'county' => '827',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Visby',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '144',
			'county' => '828',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Visby',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '144',
			'county' => '828',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Visby',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '144',
			'county' => '828',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Visby',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '144',
			'county' => '828',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Turku',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '146',
			'county' => '835',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Turku',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '146',
			'county' => '835',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild of Borgholm',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Chandler',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '147',
			'county' => '842',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild of Ottenby',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Chandler',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '147',
			'county' => '842',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Kalmar',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '147',
			'county' => '843',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Kalmar',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '147',
			'county' => '843',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Kalmar',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '147',
			'county' => '843',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Stockholm',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '148',
			'county' => '846',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Stockholm',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '148',
			'county' => '846',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Stockholm',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '148',
			'county' => '846',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Gripsholm',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '148',
			'county' => '846',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Wollstein',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '149',
			'county' => '851',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Kosten',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '149',
			'county' => '853',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Sandez',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '150',
			'county' => '857',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Gnesen',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '151',
			'county' => '863',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Gnesen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '151',
			'county' => '863',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild of Gnesen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Chandler',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '151',
			'county' => '863',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '151',
			'county' => '865',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Kalisz',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '152',
			'county' => '869',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Pleschen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '152',
			'county' => '870',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Krakow',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '153',
			'county' => '874',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Krakow',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '153',
			'county' => '874',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Krakow',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '153',
			'county' => '874',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Krakow',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '153',
			'county' => '874',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Krakow',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '153',
			'county' => '874',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		//Olkusz
		//Olkusz
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Olkusz',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '153',
			'county' => '875',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Boleslaw',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '153',
			'county' => '875',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Brodnica',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '154',
			'county' => '878',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Inowroclaw',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '154',
			'county' => '879',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Losice',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '155',
			'county' => '884',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Losice',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '155',
			'county' => '884',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Szrensk',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '156',
			'county' => '892',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Posen',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '157',
			'county' => '893',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Posen',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '157',
			'county' => '893',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Posen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '157',
			'county' => '893',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild of Posen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Chandler',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '157',
			'county' => '893',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Chodziez',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '157',
			'county' => '894',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Sieradz',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '158',
			'county' => '901',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Warsaw',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '159',
			'county' => '904',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Minsk',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '160',
			'county' => '906',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Lahoysk',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '161',
			'county' => '909',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Telsche',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '162',
			'county' => '913',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Birstonas',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '163',
			'county' => '915',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Tracken',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '163',
			'county' => '916',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Vilnius',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '164',
			'county' => '917',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Vilnius',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '164',
			'county' => '917',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Vezprem',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '165',
			'county' => '924',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Zalavar',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '165',
			'county' => '925',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Pecs',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '166',
			'county' => '927',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Esztergom',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '166',
			'county' => '928',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Esztergom',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '166',
			'county' => '928',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Esztergom',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '166',
			'county' => '928',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Eger',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '166',
			'county' => '930',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Buda',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '166',
			'county' => '931',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Buda',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '166',
			'county' => '931',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Buda',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '166',
			'county' => '931',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Nitra',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '167',
			'county' => '933',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Temesvar',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '168',
			'county' => '943',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Temesvar',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '168',
			'county' => '943',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Miskolc',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '169',
			'county' => '950',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		//Szeben
		//Nagydisznod
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Nagydisznod',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '170',
			'county' => '961',
			'hundred' => ''
		]);
		//Nagyszeben
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Nagyszeben',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '170',
			'county' => '961',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Nagyszeben',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '170',
			'county' => '961',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Transylvania',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '170',
			'county' => null,
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Knin',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '171',
			'county' => '964',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Knin',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '171',
			'county' => '964',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armourers Guild of Knin',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '171',
			'county' => '964',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Knin',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '171',
			'county' => '964',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Ragusa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '172',
			'county' => '968',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Ragusa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '172',
			'county' => '968',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Ragusa',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '172',
			'county' => '968',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Zagreb',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '173',
			'county' => '971',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Split',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '174',
			'county' => '977',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Split',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '174',
			'county' => '977',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Zadar',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '175',
			'county' => '979',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Zadar',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '175',
			'county' => '979',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Palermo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '176',
			'county' => '982',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Palermo',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '176',
			'county' => '982',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Palermo',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '176',
			'county' => '982',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Palermo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '176',
			'county' => '982',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Palermo',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '176',
			'county' => '982',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Messina',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '178',
			'county' => '988',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Messina',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '178',
			'county' => '988',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Agrigento',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '179',
			'county' => '991',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Agrigento',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Kermes',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '179',
			'county' => '991',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Catania',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '180',
			'county' => '995',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Catania',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '180',
			'county' => '995',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Caltagirone',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '180',
			'county' => '996',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Caltagirone',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '180',
			'county' => '996',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Siracusa',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '181',
			'county' => '997',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Siracusa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '181',
			'county' => '997',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Siracusa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Kermes',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '181',
			'county' => '997',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Naples',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '182',
			'county' => '1000',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Naples',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '182',
			'county' => '1000',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Naples',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '182',
			'county' => '1000',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Capua',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '183',
			'county' => '1004',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Amalfi',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '184',
			'county' => '1006',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Amalfi',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '184',
			'county' => '1006',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Amalfi',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '183',
			'county' => '1006',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Amalfi',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '183',
			'county' => '1006',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Calabria',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '185',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Catanzaro',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '185',
			'county' => '1008',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Catanzaro',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '185',
			'county' => '1008',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Catanzaro',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '185',
			'county' => '1008',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Cosenza',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '185',
			'county' => '1009',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Crotone',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '185',
			'county' => '1010',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Reggio',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '185',
			'county' => '1011',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Reggio',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '185',
			'county' => '1011',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Matera',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '186',
			'county' => '1012',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Taranto',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '187',
			'county' => '1014',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Taranto',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '187',
			'county' => '1014',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Taranto',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '187',
			'county' => '1014',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Oritana',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '187',
			'county' => '1016',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Foggia',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '188',
			'county' => '1018',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Salerno',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '190',
			'county' => '1030',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Olbia',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '191',
			'county' => '1033',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Torres',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '192',
			'county' => '1035',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Torres',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '192',
			'county' => '1035',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Sassari',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '192',
			'county' => '1036',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Oristano',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '193',
			'county' => '1037',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Cagliari',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Kermes',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '194',
			'county' => '1039',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Cagliari',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '194',
			'county' => '1039',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Cagliari',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '194',
			'county' => '1039',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Constantinople',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '195',
			'county' => '1042',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Constantinople',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '195',
			'county' => '1042',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Constantinople',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '195',
			'county' => '1042',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Constantinople',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '195',
			'county' => '1042',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Constantinople',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '195',
			'county' => '1042',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '195',
			'county' => '1043',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Galata',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '195',
			'county' => '1043',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Galata',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '195',
			'county' => '1043',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Adrianople',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '196',
			'county' => '1045',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Athens',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '197',
			'county' => '1048',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Piraeus',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '197',
			'county' => '1048',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Thebes',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '197',
			'county' => '1049',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Chalcis',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '197',
			'county' => '1050',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Corinth',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '198',
			'county' => '1053',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Corinth',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '198',
			'county' => '1053',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Mystras',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '198',
			'county' => '1056',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Mystras',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '198',
			'county' => '1056',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Chania',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '199',
			'county' => '1058',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Chania',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '199',
			'county' => '1058',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Chios',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '200',
			'county' => '1059',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Naxos',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '200',
			'county' => '1060',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Nicopolis',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '201',
			'county' => '1062',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Agios Giorgios',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '202',
			'county' => '1065',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Thessalonica',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '203',
			'county' => '1070',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Thessalonica',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '203',
			'county' => '1070',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Thessalonica',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '203',
			'county' => '1070',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Serres',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '204',
			'county' => '1071',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Joiners Guild of Amastris',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Joiner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '205',
			'county' => '1075',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Saframpolis',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '205',
			'county' => '1076',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Armeniac',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '206',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Amasia',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '206',
			'county' => '1077',
			'hundred' => ''
		]);
		//Sebasteia
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Sebasteia',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '206',
			'county' => '1077',
			'hundred' => ''
		]);
		//Amisos
		//Carsamba
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Carsamba',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '206',
			'county' => '1078',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Sinope',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '206',
			'county' => '1079',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Trapezus',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '207',
			'county' => '1080',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Chaldia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '32',
			'duchy' => '207',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Trapezus',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '207',
			'county' => '1080',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Trapezus',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '207',
			'county' => '1080',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Crimea',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '208',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Chersonesus',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '208',
			'county' => '1082',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Chersonesus',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '208',
			'county' => '1082',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Smyrna',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '209',
			'county' => '1087',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Smyrna',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '209',
			'county' => '1087',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Smyrna',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '209',
			'county' => '1087',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Sardes',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '210',
			'county' => '1089',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Attouda',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '210',
			'county' => '1090',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Attouda',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '210',
			'county' => '1090',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Ancyra',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '211',
			'county' => '1091',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Iconium',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '212',
			'county' => '1093',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Iconium',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '212',
			'county' => '1093',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Caesarea',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '213',
			'county' => '1095',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Caesarea',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '213',
			'county' => '1095',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Caesarea',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '213',
			'county' => '1095',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Caesarea',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '213',
			'county' => '1095',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Seleucea',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '214',
			'county' => '1098',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Seleucea',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '214',
			'county' => '1098',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Adana',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '214',
			'county' => '1099',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Tarsos',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '214',
			'county' => '1100',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Cyzicus',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '215',
			'county' => '1101',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Prousa',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '215',
			'county' => '1102',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '215',
			'county' => '1102',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Prousa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '215',
			'county' => '1102',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Nicaea',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '216',
			'county' => '1105',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Rhodes',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '217',
			'county' => '1108',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Lycia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '217',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Rhodes',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '217',
			'county' => '1108',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Attaleia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '218',
			'county' => '1110',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Pamphylia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '218',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Attaleia',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '218',
			'county' => '1110',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Phasis',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '219',
			'county' => '1112',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Phasis',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '219',
			'county' => '1112',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Phasis',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '219',
			'county' => '1112',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Macharadze',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '219',
			'county' => '1113',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Pityus',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '219',
			'county' => '1114',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Batumi',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '219',
			'county' => '1116',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Akhalkalaki',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '220',
			'county' => '1117',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Tiblisi',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '221',
			'county' => '1121',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Tiblisi',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '221',
			'county' => '1121',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Kakheti',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '222',
			'county' => null,
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Van',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '223',
			'county' => '1126',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Acilisene',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '224',
			'county' => '1130',
			'hundred' => ''
		]);
		//Tercan
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '224',
			'county' => '1130',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Kars',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '35',
			'duchy' => '225',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Kars',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '225',
			'county' => '1132',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Ani',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '225',
			'county' => '1133',
			'hundred' => ''
		]);
		//Yerevan
		//Yerevan
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Yerevan',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '225',
			'county' => '1135',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Baku',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '226',
			'county' => '',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Rasht',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '226',
			'county' => '1137',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Kyiv',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '227',
			'county' => '1138',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Kyiv',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '227',
			'county' => '1138',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Kyiv',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '227',
			'county' => '1138',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Pereyaslavl',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '228',
			'county' => '1142',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Halych',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '38',
			'county' => '231',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Sambir',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '231',
			'county' => '1155',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Volodymyr',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '233',
			'county' => '1160',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Turov',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '234',
			'county' => '1164',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Vladimir',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '235',
			'county' => '1166',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Moscow',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '236',
			'county' => '1169',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Suzdal',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '237',
			'county' => '1173',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Suzdal',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '237',
			'county' => '1173',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Smolensk',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '238',
			'county' => '1176',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Rzhev',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '239',
			'county' => '1180',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Rostov',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '240',
			'county' => '1186',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Yaroslavl',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '240',
			'county' => '1187',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Vologda',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '240',
			'county' => '1187',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Kontor of Novgorod Peterhof',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '241',
			'county' => '1188',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Furriers Guild of Novgorod',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Furrier',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '241',
			'county' => '1188',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Novgorod',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '241',
			'county' => '1188',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Ladoga',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '241',
			'county' => '1189',
			'hundred' => ''
		]);
		//Keksholm
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Keksholm',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '241',
			'county' => '1189',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Pleskov',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '243',
			'county' => '1193',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Preslav',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '244',
			'county' => '1195',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Preslav',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '244',
			'county' => '1195',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Tarnovo',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '245',
			'county' => '1199',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Tarnovo',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '245',
			'county' => '1199',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Philippopolis',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '246',
			'county' => '1202',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Ohrid',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '247',
			'county' => '1204',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Furriers Guild of Kastoria',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Furrier',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '247',
			'county' => '1206',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Wallachia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '43',
			'duchy' => '248',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Targoviste',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '248',
			'county' => '1207',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Omurtag',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '248',
			'county' => '1208',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Suceava',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '249',
			'county' => '1210',
			'hundred' => ''
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
			'hundred' => ''
		]);
		//Akkerman
		//Akkerman
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Akkerman',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '249',
			'county' => '1212',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Ras',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '250',
			'county' => '1218',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Ras',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '250',
			'county' => '1218',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Scodra',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '251',
			'county' => '1221',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '255',
			'county' => '1230',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Blagaj',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '255',
			'county' => '1230',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Blagaj',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '255',
			'county' => '1230',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Algeciras',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '256',
			'county' => '1234',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Algeciras',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '256',
			'county' => '1234',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Almeria',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '257',
			'county' => '1236',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Almeria',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '257',
			'county' => '1236',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Almeria',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '257',
			'county' => '1236',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Cadiz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '258',
			'county' => '1240',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Cadiz',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '258',
			'county' => '1240',
			'hundred' => ''
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
			'hundred' => ''
		]);
		//Ubrique
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Ubrique',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '258',
			'county' => '1240',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Jerez',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '258',
			'county' => '1241',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Jerez',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '258',
			'county' => '1241',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Ecija',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '259',
			'county' => '1244',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Cordoba',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '260',
			'county' => '1247',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Cordoba',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '260',
			'county' => '1247',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Cordoba',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '260',
			'county' => '1247',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Cordoba',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '260',
			'county' => '1247',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Azahara',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '260',
			'county' => '1247',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		//Baena
		//Qasira
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Qasira',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '260',
			'county' => '1249',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Baeza',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1254',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Baeza',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1254',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Granada',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1256',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Granada',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1256',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Granada',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1256',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Alfacar',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1256',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Elvira',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1256',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Armilla',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1256',
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Jaen',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1258',
			'hundred' => ''
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
			'hundred' => ''
		]);
		//Cehel
		//Berchules
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Berchules',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1261',
			'hundred' => ''
		]);
		//Valor
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Valor',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '261',
			'county' => '1261',
			'hundred' => ''
		]);
		//Malaga
		//Alhama
		//Askudar
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Askudar',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '262',
			'county' => '1263',
			'hundred' => ''
		]);
		//Malaha
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Malaha',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '262',
			'county' => '1263',
			'hundred' => ''
		]);
		//Huelma
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Huelma',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '262',
			'county' => '1263',
			'hundred' => ''
		]);
		//Zafarraya
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Zafarraya',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '262',
			'county' => '1263',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '262',
			'county' => '1263',
			'hundred' => ''
		]);
		//Antequerra
		//Antequerra
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Antequerra',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '262',
			'county' => '1264',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Antequerra',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '262',
			'county' => '1264',
			'hundred' => ''
		]);
		//Alameda
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Alameda',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '262',
			'county' => '1264',
			'hundred' => ''
		]);
		//Loja
		//Loja
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Loja',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '262',
			'county' => '1265',
			'hundred' => ''
		]);
		//Algarin
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Algarin',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '262',
			'county' => '1265',
			'hundred' => ''
		]);
		//Montefrio
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Montefrio',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '262',
			'county' => '1265',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Malaga',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '262',
			'county' => '1266',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Malaga',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '262',
			'county' => '1266',
			'hundred' => ''
		]);
		//Ronda
		//Marbella
		//Marbella
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Marbella',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '263',
			'county' => '1267',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Marbella',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '263',
			'county' => '1267',
			'hundred' => ''
		]);
		//Ojen
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Ojen',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '263',
			'county' => '1267',
			'hundred' => ''
		]);
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Ronda',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '263',
			'county' => '1268',
			'hundred' => ''
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
			'county' => '1269',
			'hundred' => ''
		]);
		//Olivares
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Olivares',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '264',
			'county' => '1269',
			'hundred' => ''
		]);
		//Pilas
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Pilas',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '264',
			'county' => '1269',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Sevilla',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '264',
			'county' => '1271',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Sevilla',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '264',
			'county' => '1271',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Sevilla',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '264',
			'county' => '1271',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Platners Guild of Sevilla',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Platner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '264',
			'county' => '1271',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Sevilla',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '264',
			'county' => '1271',
			'hundred' => ''
		]);
		//Utrera
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Utrera',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '264',
			'county' => '1271',
			'hundred' => ''
		]);
		//San Luis
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of San Luis',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '264',
			'county' => '1271',
			'hundred' => ''
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
			'hundred' => ''
		]);
		//Mertola
		//Mertola
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Mertola',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '265',
			'county' => '1273',
			'hundred' => ''
		]);
		//Moura
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Moura',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '265',
			'county' => '1273',
			'hundred' => ''
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
			'county' => '1274',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Badajoz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Kermes',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '266',
			'county' => '1275',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Badajoz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '266',
			'county' => '1275',
			'hundred' => ''
		]);
		//Elvas
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Elvas',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Kermes',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '266',
			'county' => '1275',
			'hundred' => ''
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
			'county' => '1277',
			'hundred' => ''
		]);
		//Arraiolos
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Arraiolos',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '266',
			'county' => '1277',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Arraiolos',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '266',
			'county' => '1277',
			'hundred' => ''
		]);
		//Redondo
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Redondo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '266',
			'county' => '1277',
			'hundred' => ''
		]);
		//Guadiana
		//Medellin
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Medellin',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '266',
			'county' => '1278',
			'hundred' => ''
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
			'county' => '1279',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Llerena',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Kermes',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '266',
			'county' => '1279',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Llerena',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '266',
			'county' => '1279',
			'hundred' => ''
		]);
		//Azuaga
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Azuaga',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Kermes',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '266',
			'county' => '1279',
			'hundred' => ''
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
			'county' => '1280',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Merida',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '266',
			'county' => '1280',
			'hundred' => ''
		]);
		//Mirandilla
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Mirandilla',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '266',
			'county' => '1280',
			'hundred' => ''
		]);
		//San Servan
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of San Servan',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Kermes',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '266',
			'county' => '1280',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Merida',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Boar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '266',
			'county' => '1280',
			'hundred' => ''
		]);
		//Portalegre
		//Avis
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Avis',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '266',
			'county' => '1282',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Avis',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '266',
			'county' => '1282',
			'hundred' => ''
		]);
		//Huelva
		//Aracena
		//Aracena
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Aracena',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Kermes',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '267',
			'county' => '1284',
			'hundred' => ''
		]);
		//Aroche
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Aroche',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Kermes',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '267',
			'county' => '1284',
			'hundred' => ''
		]);
		//Cala
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Cala',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Kermes',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '267',
			'county' => '1284',
			'hundred' => ''
		]);
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Huelva',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '267',
			'county' => '1285',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Huelva',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Kermes',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '267',
			'county' => '1285',
			'hundred' => ''
		]);
		//Cartaya
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Cartaya',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '267',
			'county' => '1285',
			'hundred' => ''
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
			'county' => '1286',
			'hundred' => ''
		]);
		//Moguer
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Moguer',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Kermes',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '267',
			'county' => '1286',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Moguer',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '267',
			'county' => '1286',
			'hundred' => ''
		]);
		//Almonte
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Almonte',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '267',
			'county' => '1286',
			'hundred' => ''
		]);
		//Palos
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Palos',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '267',
			'county' => '1286',
			'hundred' => ''
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
			'county' => '1287',
			'hundred' => ''
		]);
		//Guadalajara
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Guadalajara',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '268',
			'county' => '1287',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Guadalajara',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '268',
			'county' => '1287',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Guadalajara',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '268',
			'county' => '1287',
			'hundred' => ''
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
			'county' => '1289',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Alcala',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Kermes',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '268',
			'county' => '1289',
			'hundred' => ''
		]);
		//Medinaceli
		//Valladares
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Valladares',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '268',
			'county' => '1290',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Alpuente',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '268',
			'county' => '1292',
			'hundred' => ''
		]);
		//Cuenca
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Cuenca',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '268',
			'county' => '1292',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Cuenca',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '268',
			'county' => '1292',
			'hundred' => ''
		]);
		//Siguenza
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Siguenza',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '268',
			'county' => '1292',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Siguenza',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '268',
			'county' => '1292',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Siguenza',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '268',
			'county' => '1292',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Palma',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '269',
			'county' => '1294',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Palma',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '269',
			'county' => '1294',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Palma',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '269',
			'county' => '1294',
			'hundred' => ''
		]);
		//Santa Eugenia
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Santa Eugenia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '264',
			'county' => '1294',
			'hundred' => ''
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
			'county' => '1296',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Albacete',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '270',
			'county' => '1296',
			'hundred' => ''
		]);
		//Alcira
		//Ternils
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Ternils',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '270',
			'county' => '1298',
			'hundred' => ''
		]);
		//Alcoy
		//Ibi
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Ibi',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '270',
			'county' => '1299',
			'hundred' => ''
		]);
		//Favanella
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Favanella',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '270',
			'county' => '1299',
			'hundred' => ''
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
			'county' => '1300',
			'hundred' => ''
		]);
		//Almagro
		//Almagro
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Almagro',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '270',
			'county' => '1301',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Almagro',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '270',
			'county' => '1301',
			'hundred' => ''
		]);
		//Granatula
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Granatula',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '270',
			'county' => '1301',
			'hundred' => ''
		]);
		//Valenzuela
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Valenzuela',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '270',
			'county' => '1301',
			'hundred' => ''
		]);
		//Chinchilla
		//Pozo
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '270',
			'county' => '1302',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Denia',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '270',
			'county' => '1304',
			'hundred' => ''
		]);
		//Pedreguer
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Pedreguer',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '270',
			'county' => '1304',
			'hundred' => ''
		]);
		//Jativa
		//Genoves
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Genoves',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '270',
			'county' => '1305',
			'hundred' => ''
		]);
		//Estubeny
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Estubeny',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '270',
			'county' => '1305',
			'hundred' => ''
		]);
		//Murcia
		//Cartagena
		//Pacheco
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Pacheco',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '271',
			'county' => '1307',
			'hundred' => ''
		]);
		//Hellin
		//Alborajico
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Alborajico',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '271',
			'county' => '1309',
			'hundred' => ''
		]);
		//Albatana
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Albatana',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '271',
			'county' => '1309',
			'hundred' => ''
		]);
		//Ontur
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Ontur',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '271',
			'county' => '1309',
			'hundred' => ''
		]);
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Murcia',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '271',
			'county' => '1311',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Murcia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '271',
			'county' => '1311',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Murcia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '271',
			'county' => '1311',
			'hundred' => ''
		]);
		//Alquerias
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Alquerias',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '271',
			'county' => '1311',
			'hundred' => ''
		]);
		//Alguazas
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Alguazas',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '271',
			'county' => '1311',
			'hundred' => ''
		]);
		//Beniel
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Beniel',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '271',
			'county' => '1311',
			'hundred' => ''
		]);
		//Zeneta
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Zeneta',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '271',
			'county' => '1311',
			'hundred' => ''
		]);
		//Albudeite
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Albudeite',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '271',
			'county' => '1311',
			'hundred' => ''
		]);
		//Orihuela
		//Orihuela
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Orihuela',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '271',
			'county' => '1312',
			'hundred' => ''
		]);
		//Rojales
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Rojales',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '271',
			'county' => '1312',
			'hundred' => ''
		]);
		//Valencia
		//Castellon
		//Tahalfazar
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Tahalfazar',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '272',
			'county' => '1314',
			'hundred' => ''
		]);
		//Benifaixo
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild of Benifaixo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Cheesemonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '272',
			'county' => '1314',
			'hundred' => ''
		]);
		//Borriol
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Borriol',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '272',
			'county' => '1314',
			'hundred' => ''
		]);
		//Morella
		//Morella
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Morella',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '272',
			'county' => '1315',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Morella',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '272',
			'county' => '1315',
			'hundred' => ''
		]);
		//Peniscola
		//Vinaroz
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Vinaroz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '272',
			'county' => '1316',
			'hundred' => ''
		]);
		//Benigazlum
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Benigazlum',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '272',
			'county' => '1316',
			'hundred' => ''
		]);
		//Traiguera
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Traiguera',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '272',
			'county' => '1316',
			'hundred' => ''
		]);
		//Estellers
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Estellers',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '272',
			'county' => '1316',
			'hundred' => ''
		]);
		//San Clemente
		//Almarcha
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Aljibe',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Falconer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '272',
			'county' => '1317',
			'hundred' => ''
		]);
		//Honrubia
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '272',
			'county' => '1317',
			'hundred' => ''
		]);
		//Pedernoso
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Aljibe',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Falconer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '272',
			'county' => '1317',
			'hundred' => ''
		]);
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Valencia',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '272',
			'county' => '1318',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Valencia',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '272',
			'county' => '1318',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Valencia',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '272',
			'county' => '1318',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Valencia',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '272',
			'county' => '1318',
			'hundred' => ''
		]);
		//Montesa
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Montesa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '272',
			'county' => '1318',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Montesa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '272',
			'county' => '1318',
			'hundred' => ''
		]);
		//Benetuser
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Benetuser',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '272',
			'county' => '1318',
			'hundred' => ''
		]);
		//Aldamosfar
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Aldamosfar',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '272',
			'county' => '1318',
			'hundred' => ''
		]);
		//Sedavi
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Sedavi',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '272',
			'county' => '1318',
			'hundred' => ''
		]);
		//Masanasa
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Masanasa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '272',
			'county' => '1318',
			'hundred' => ''
		]);
		//Silla
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Silla',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '272',
			'county' => '1318',
			'hundred' => ''
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
			'duchy' => '273',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Marrakesh',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '273',
			'county' => '1319',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Marrakesh',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '273',
			'county' => '1319',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Marrakesh',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '273',
			'county' => '1319',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Marrakesh',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '273',
			'county' => '1319',
			'hundred' => ''
		]);
		//Safi
		//Safi
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Safi',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '273',
			'county' => '1320',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Safi',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '273',
			'county' => '1320',
			'hundred' => ''
		]);
		//Mogador
		//Baroud
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Baroud',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '273',
			'county' => '1321',
			'hundred' => ''
		]);
		//Aghmat
		//Aghmat
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Aghmat',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '273',
			'county' => '1322',
			'hundred' => ''
		]);
		//Tadla
		//Khenifra
		//Khenifra
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Khenifra',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '274',
			'county' => '1323',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Khenifra',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Cedar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '274',
			'county' => '1323',
			'hundred' => ''
		]);
		//Mellal
		//Mellal
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Mellal',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '274',
			'county' => '1324',
			'hundred' => ''
		]);
		//Tadla
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Tadla',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '274',
			'county' => null,
			'hundred' => ''
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
			'duchy' => '275',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Sijilmassa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '275',
			'county' => '1325',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Sijilmassa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '275',
			'county' => '1325',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '275',
			'county' => '1325',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Sijilmassa',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '275',
			'county' => '1325',
			'hundred' => ''
		]);
		//Rissani
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '275',
			'county' => '1325',
			'hundred' => ''
		]);
		//Merzouga
		//Tamegroute
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Tamegroute',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '275',
			'county' => '1326',
			'hundred' => ''
		]);
		//Erfoud
		//Erfoud
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Erfoud',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '275',
			'county' => '1327',
			'hundred' => ''
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
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Ouarzazate',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '276',
			'county' => '1328',
			'hundred' => ''
		]);
		//Taznakht
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Taznakht',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '276',
			'county' => '1328',
			'hundred' => ''
		]);
		//Zagora
		//Zagora
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Zagora',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '276',
			'county' => '1329',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Zagora',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '276',
			'county' => '1329',
			'hundred' => ''
		]);
		//Agdz
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '276',
			'county' => '1329',
			'hundred' => ''
		]);
		//Tinghir
		//Tinghir
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Tinghir',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Rose',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '276',
			'county' => '1330',
			'hundred' => ''
		]);
		//Mgouna
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Mgouna',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Rose',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '276',
			'county' => '1330',
			'hundred' => ''
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
			'duchy' => '277',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '277',
			'county' => '1331',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Fez',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '277',
			'county' => '1331',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Fez',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '277',
			'county' => '1331',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Fez',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '277',
			'county' => '1331',
			'hundred' => ''
		]);
		//Sefrou
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Sefrou',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '277',
			'county' => '1331',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Sefrou',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Cedar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '277',
			'county' => '1331',
			'hundred' => ''
		]);
		//Bhalil
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Bhalil',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '277',
			'county' => '1331',
			'hundred' => ''
		]);
		//Taza
		DB::table('guilds')->insert([
			'guild_name' => 'University of Taza',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '277',
			'county' => '1331',
			'hundred' => ''
		]);
		//Meknes
		//Meknes
		DB::table('guilds')->insert([
			'guild_name' => 'University of Meknes',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '277',
			'county' => '1332',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Meknes',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Cedar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '277',
			'county' => '1332',
			'hundred' => ''
		]);
		//Zerhoun
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Zerhoun',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '277',
			'county' => '1332',
			'hundred' => ''
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
			'duchy' => '278',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Rabat',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Madder',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '278',
			'county' => '1333',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Rabat',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '278',
			'county' => '1333',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '278',
			'county' => '1333',
			'hundred' => ''
		]);
		//Sale
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Sale',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Madder',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '278',
			'county' => '1333',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Sale',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '278',
			'county' => '1333',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Sale',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '278',
			'county' => '1333',
			'hundred' => ''
		]);
		//Mehdya
		//Kenitra
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Kenitra',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '278',
			'county' => '1334',
			'hundred' => ''
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
			'duchy' => '279',
			'county' => '1335',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Tangier',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '279',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Tangier',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '279',
			'county' => '1335',
			'hundred' => ''
		]);
		//Kebir
		//Kebir
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Kebir',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '279',
			'county' => '1337',
			'hundred' => ''
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
			'duchy' => '280',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Kairouan',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '280',
			'county' => '1339',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '280',
			'county' => '1339',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Kairouan',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '280',
			'county' => '1339',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Kairouan',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '280',
			'county' => '1339',
			'hundred' => ''
		]);
		//Raqqada
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Raqqada',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '280',
			'county' => '1339',
			'hundred' => ''
		]);
		//Mahdia
		//Monastir
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '280',
			'county' => '1340',
			'hundred' => ''
		]);
		//Susa
		//Susa
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '280',
			'county' => '1341',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Susa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '280',
			'county' => '1341',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Susa',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '280',
			'county' => '1341',
			'hundred' => ''
		]);
		//Upenna
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Upenna',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '280',
			'county' => '1341',
			'hundred' => ''
		]);
		//Msaken
		DB::table('guilds')->insert([
			'guild_name' => 'University of Msaken',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '280',
			'county' => '1341',
			'hundred' => ''
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
			'duchy' => '281',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Tunis',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '281',
			'county' => '1343',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Tunis',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '281',
			'county' => '1343',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Tunis',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '281',
			'county' => '1343',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Tunis',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '281',
			'county' => '1343',
			'hundred' => ''
		]);
		//Marsa
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Marsa',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '281',
			'county' => '1343',
			'hundred' => ''
		]);
		//Djerid
		//Djerid
		//Gafsa
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Djerid',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Bishopric',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '282',
			'county' => null,
			'hundred' => ''
		]);
		//Tozeur
		//Tozeur
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Tozeur',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '282',
			'county' => '1346',
			'hundred' => ''
		]);
		//Nefta
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Nefta',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '282',
			'county' => '1346',
			'hundred' => ''
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
			'duchy' => '283',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Tripoli',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '283',
			'county' => '1347',
			'hundred' => ''
		]);
		//Misrata
		//Misrata
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '282',
			'county' => '1348',
			'hundred' => ''
		]);
		//Zliten
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Zliten',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '282',
			'county' => '1348',
			'hundred' => ''
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
			'duchy' => '284',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Sirte',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '284',
			'county' => '1349',
			'hundred' => ''
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
			'duchy' => '285',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Tlemcen',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '285',
			'county' => '1351',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '285',
			'county' => '1351',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Tlemcen',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '285',
			'county' => '1351',
			'hundred' => ''
		]);
		//Mansourah
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Mansourah',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '285',
			'county' => '1351',
			'hundred' => ''
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
			'duchy' => '286',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Oujda',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '286',
			'county' => '1353',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Oujda',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '286',
			'county' => '1353',
			'hundred' => ''
		]);
		//Nador
		//Segangan
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Segangan',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '286',
			'county' => '1354',
			'hundred' => ''
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
			'duchy' => '287',
			'county' => '1355',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Oran',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '287',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Oran',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '287',
			'county' => '1355',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Oran',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '287',
			'county' => '1355',
			'hundred' => ''
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
			'duchy' => '288',
			'county' => null,
			'hundred' => ''
		]);
		//Mitidja
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Mitidja',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Cedar',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '288',
			'county' => '1358',
			'hundred' => ''
		]);
		//Hadjar
		//Tatilti
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Tatilti',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '288',
			'county' => '1359',
			'hundred' => ''
		]);
		//Titteri
		//Medea
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Medea',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '288',
			'county' => '1361',
			'hundred' => ''
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
			'duchy' => '289',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Tiaret',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '289',
			'county' => '1362',
			'hundred' => ''
		]);
		//Mzab
		//Mzab
		//Ghardaia
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Mzab',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '290',
			'county' => null,
			'hundred' => ''
		]);
		//Bounoura
		//Bounoura
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Bounoura',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '290',
			'county' => '1365',
			'hundred' => ''
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
			'duchy' => '291',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Laghouat',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '291',
			'county' => '1366',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Laghouat',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '291',
			'county' => '1366',
			'hundred' => ''
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
			'duchy' => '292',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Djelfa',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '292',
			'county' => '1368',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Djelfa',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '292',
			'county' => '1368',
			'hundred' => ''
		]);
		//Tuggert
		//Tuggert
		//Tuggert
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Tuggert',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '293',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Tuggert',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '293',
			'county' => '1370',
			'hundred' => ''
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
			'duchy' => '294',
			'county' => null,
			'hundred' => ''
		]);
		//Tiznit
		//Tiznit
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Tiznit',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '294',
			'county' => '1373',
			'hundred' => ''
		]);
		//Bounaamane
		DB::table('guilds')->insert([
			'guild_name' => 'University of Bounaamane',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '294',
			'county' => '1373',
			'hundred' => ''
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
			'duchy' => '295',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Taroudant',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '295',
			'county' => '1374',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Taroudant',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '295',
			'county' => '1374',
			'hundred' => ''
		]);
		//Tinmel
		//Tinmel
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Tinmel',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '295',
			'county' => '1376',
			'hundred' => ''
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
			'duchy' => '296',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Figuig',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '296',
			'county' => '1377',
			'hundred' => ''
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
			'duchy' => '297',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Adrar',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '297',
			'county' => '1380',
			'hundred' => ''
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
			'duchy' => '298',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Baghdad',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '298',
			'county' => '1382',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Baghdad',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '298',
			'county' => '1382',
			'hundred' => ''
		]);
		//Shareban
		//Shareban
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Shareban',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '298',
			'county' => '1383',
			'hundred' => ''
		]);
		//Baqubah
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '298',
			'county' => '1383',
			'hundred' => ''
		]);
		//Khanaqin
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '298',
			'county' => '1383',
			'hundred' => ''
		]);
		//Anbar
		//Pumbedita
		DB::table('guilds')->insert([
			'guild_name' => 'University of Pumbedita',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '298',
			'county' => '1384',
			'hundred' => ''
		]);
		//Basra
		//Basra
		DB::table('guilds')->insert([
			'guild_name' => 'University of Basra',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '298',
			'county' => '1385',
			'hundred' => ''
		]);
		//Karbala
		//Hillah
		DB::table('guilds')->insert([
			'guild_name' => 'University of Hillah',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '298',
			'county' => '1386',
			'hundred' => ''
		]);
		//Najaf
		//Kufah
		DB::table('guilds')->insert([
			'guild_name' => 'University of Kufah',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '298',
			'county' => '1387',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Forest of Kufah',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Hunt_Deer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '298',
			'county' => '1387',
			'hundred' => ''
		]);
		//Erbil
		//Erbil
		//Erbil
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Erbil',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Empire',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '299',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Erbil',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '299',
			'county' => '1388',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Erbil',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '300',
			'county' => '1388',
			'hundred' => ''
		]);
		//Khanzad
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '300',
			'county' => '1388',
			'hundred' => ''
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
			'duchy' => '300',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '300',
			'county' => '1390',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Damascus',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '300',
			'county' => '1390',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Damascus',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '300',
			'county' => '1390',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Damascus',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '300',
			'county' => '1390',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Damascus',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '300',
			'county' => '1390',
			'hundred' => ''
		]);
		//Saqba
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Saqba',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '300',
			'county' => '1390',
			'hundred' => ''
		]);
		//Douma
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '300',
			'county' => '1390',
			'hundred' => ''
		]);
		//Dannun
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '300',
			'county' => '1390',
			'hundred' => ''
		]);
		//Nawa
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Nawa',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '300',
			'county' => '1390',
			'hundred' => ''
		]);
		//Qalamoun
		//Qara
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '300',
			'county' => '1391',
			'hundred' => ''
		]);
		//Jayrud
		//Arous
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '300',
			'county' => '1392',
			'hundred' => ''
		]);
		//Dumayr
		//Adra
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '300',
			'county' => '1393',
			'hundred' => ''
		]);
		//Suada
		//Kafr
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Kafr',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '300',
			'county' => '1394',
			'hundred' => ''
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
			'duchy' => '301',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '301',
			'county' => '1396',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Aleppo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '301',
			'county' => '1396',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Aleppo',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '301',
			'county' => '1396',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Aleppo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '301',
			'county' => '1396',
			'hundred' => ''
		]);
		//Kabir
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Kabir',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '301',
			'county' => '1396',
			'hundred' => ''
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
			'duchy' => '302',
			'county' => null,
			'hundred' => ''
		]);
		//Tripoli
		//Tripoli
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Tripoli',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '302',
			'county' => '1399',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '302',
			'county' => '1399',
			'hundred' => ''
		]);
		//Beirut
		//Beirut
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Beirut',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '302',
			'county' => '1400',
			'hundred' => ''
		]);
		//Zahle
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Zahle',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '302',
			'county' => '1400',
			'hundred' => ''
		]);
		//Marjaba
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Marjaba',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '302',
			'county' => '1400',
			'hundred' => ''
		]);
		//Tyre
		//Tyre
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Tyre',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '302',
			'county' => '1402',
			'hundred' => ''
		]);
		//Rabia
		//Mosul
		//Mosul
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Rabia',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Empire',
			'empire' => '16',
			'kingdom' => '55',
			'duchy' => '303',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Mosul',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '303',
			'county' => '',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Mosul',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '303',
			'county' => '1403',
			'hundred' => ''
		]);
		//Hatra
		//Hatra
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '303',
			'county' => '1405',
			'hundred' => ''
		]);
		//Sinjar
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '303',
			'county' => '1405',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Sinjar',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Monastic',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '303',
			'county' => '1405',
			'hundred' => ''
		]);
		//Bakr
		//Amida
		//Amida
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Bakr',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '304',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '304',
			'county' => '1407',
			'hundred' => ''
		]);
		//Karahan
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '304',
			'county' => '1407',
			'hundred' => ''
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
			'duchy' => '305',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Kharj',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '305',
			'county' => '1409',
			'hundred' => ''
		]);
		//Qarma
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '305',
			'county' => '1409',
			'hundred' => ''
		]);
		//Turaif
		//Muzahmiyya
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Muzahmiyya',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '305',
			'county' => '1410',
			'hundred' => ''
		]);
		//Khatt
		//Uqair
		//Uqair
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Khatt',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '57',
			'duchy' => '306',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Uqair',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '306',
			'county' => '1412',
			'hundred' => ''
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
			'duchy' => '307',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Antioch',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '307',
			'county' => '1413',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Antioch',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '307',
			'county' => '1413',
			'hundred' => ''
		]);
		//Gephyra
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Gephyra',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '307',
			'county' => '1413',
			'hundred' => ''
		]);
		//Daphne
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Daphne',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '307',
			'county' => '1413',
			'hundred' => ''
		]);
		//Seleucia
		DB::table('guilds')->insert([
			'guild_name' => 'Inn of Seleucia',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '307',
			'county' => '1413',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Seleucia',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '307',
			'county' => '1413',
			'hundred' => ''
		]);
		//Mudar
		//Edessa
		//Edessa
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Mudar',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '308',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Edessa',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '308',
			'county' => '1418',
			'hundred' => ''
		]);
		//Harran
		//Harran
		DB::table('guilds')->insert([
			'guild_name' => 'University of Harran',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '308',
			'county' => '1419',
			'hundred' => ''
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
			'duchy' => '309',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Cairo',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '309',
			'county' => '1420',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Cairo',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '309',
			'county' => '1420',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Cairo',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '309',
			'county' => '1420',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Cairo',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '309',
			'county' => '1420',
			'hundred' => ''
		]);
		//Fustat
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Fustat',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '309',
			'county' => '1420',
			'hundred' => ''
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
			'duchy' => '310',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Alexandria',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '310',
			'county' => '1422',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Alexandria',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '310',
			'county' => '1422',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Alexandria',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '310',
			'county' => '1422',
			'hundred' => ''
		]);
		//Damanhur
		//Damanhur
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '310',
			'county' => '1423',
			'hundred' => ''
		]);
		//Baroud
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Baroud',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '310',
			'county' => '1423',
			'hundred' => ''
		]);
		//Rosetta
		//Balhib
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Balhib',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '310',
			'county' => '1424',
			'hundred' => ''
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
			'duchy' => '311',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Mansoura',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '311',
			'county' => '1425',
			'hundred' => ''
		]);
		//Dekernes
		//Zmoumis
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Zmoumis',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Madder',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '311',
			'county' => '1426',
			'hundred' => ''
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
			'duchy' => '312',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of ',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '312',
			'county' => '1427',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Damietta',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '312',
			'county' => '1427',
			'hundred' => ''
		]);
		//Damul
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Damul',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '312',
			'county' => '1427',
			'hundred' => ''
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
			'duchy' => '313',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Minya',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '313',
			'county' => '1429',
			'hundred' => ''
		]);
		//Mallawi
		//Mallawi
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Mallawi',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '313',
			'county' => '1430',
			'hundred' => ''
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
			'duchy' => '314',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Asyut',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '314',
			'county' => '1431',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Asyut',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '314',
			'county' => '1431',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Asyut',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '314',
			'county' => '1431',
			'hundred' => ''
		]);
		//Abu
		//Manfalut
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Manfalut',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '314',
			'county' => '1433',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Manfalut',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '314',
			'county' => '1433',
			'hundred' => ''
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
			'duchy' => '315',
			'county' => null,
			'hundred' => ''
		]);
		//Wahat
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Wahat',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '315',
			'county' => '1434',
			'hundred' => ''
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
			'duchy' => '316',
			'county' => null,
			'hundred' => ''
		]);
		//Siwa
		//Shali
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Shali',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '316',
			'county' => '1437',
			'hundred' => ''
		]);
		//Boula
		//Qoseir
		//Banat
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Boula',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '317',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Banat',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '317',
			'county' => '1440',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Banat',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '317',
			'county' => '1440',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Banat',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '317',
			'county' => '1440',
			'hundred' => ''
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
			'duchy' => '318',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Jerusalem',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '318',
			'county' => '1441',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild of Jerusalem',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Smith',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '318',
			'county' => '1441',
			'hundred' => ''
		]);
		//Hizma
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Hizma',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '318',
			'county' => '1441',
			'hundred' => ''
		]);
		//Ascolon
		//Jura
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild of Jura',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Vintner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '318',
			'county' => '1442',
			'hundred' => ''
		]);
		//Majdal
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Majdal',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '318',
			'county' => '1442',
			'hundred' => ''
		]);
		//Galilee
		//Tiberias
		//Tiberias
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Galilee',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '319',
			'county' => null,
			'hundred' => ''
		]);
		//Hattin
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '319',
			'county' => '1444',
			'hundred' => ''
		]);
		//Haifa
		//Haifa
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Haifa',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '319',
			'county' => '1446',
			'hundred' => ''
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
			'duchy' => '320',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Mecca',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Incense',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '320',
			'county' => '1447',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Mecca',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '320',
			'county' => '1447',
			'hundred' => ''
		]);
		//Jeddah
		//Jeddah
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Jeddah',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Incense',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '320',
			'county' => '1448',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Jeddah',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '320',
			'county' => '1448',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Jeddah',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '320',
			'county' => '1448',
			'hundred' => ''
		]);
		//Taif
		//Taif
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Taif',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Incense',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '320',
			'county' => '1449',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Taif',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '320',
			'county' => '1449',
			'hundred' => ''
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
			'duchy' => '321',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Medina',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Incense',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '321',
			'county' => '1450',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Medina',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '321',
			'county' => '1450',
			'hundred' => ''
		]);
		//Yanbu
		//Yanbu
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Yanbu',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Incense',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '321',
			'county' => '1451',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Mariners Guild of Yanbu',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Mariner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '321',
			'county' => '1451',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Yanbu',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '321',
			'county' => '1451',
			'hundred' => ''
		]);
		//Khaybar
		//Khaybar
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Khaybar',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Incense',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '321',
			'county' => '1452',
			'hundred' => ''
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
			'duchy' => '322',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Tabuk',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Incense',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '322',
			'county' => '1453',
			'hundred' => ''
		]);
		//Sharat
		//Muan
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Muan',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Incense',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '322',
			'county' => '1454',
			'hundred' => ''
		]);
		//Hegra
		//Hegra
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Hegra',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Incense',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '322',
			'county' => '1455',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Hegra',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '322',
			'county' => '1455',
			'hundred' => ''
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
			'duchy' => '323',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Aqtobe',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '323',
			'county' => '1456',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Aqtobe',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '323',
			'county' => '1456',
			'hundred' => ''
		]);
		//Araltobe
		//Araltobe
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Araltobe',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '323',
			'county' => '1457',
			'hundred' => ''
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
			'duchy' => '324',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Sarkel',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '324',
			'county' => '1458',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Sarkel',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '324',
			'county' => '1458',
			'hundred' => ''
		]);
		//Mayaki
		//Mayaki
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Mayaki',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '324',
			'county' => '1459',
			'hundred' => ''
		]);
		//Khazaran
		//Sarayberke
		//Sarayberke
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Khazaran',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Empire',
			'empire' => '18',
			'kingdom' => '62',
			'duchy' => '325',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Sarayberke',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '325',
			'county' => '1460',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Sarayberke',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '325',
			'county' => '1460',
			'hundred' => ''
		]);
		//Sarayjuk
		//Sarayjuk
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Sarayjuk',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '325',
			'county' => '1461',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Sarayjuk',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '325',
			'county' => '1461',
			'hundred' => ''
		]);
		//Tatar
		//Bolghar
		//Bolghar
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Tatar',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '326',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Bolghar',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '326',
			'county' => '1462',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Furriers Guild of Bolghar',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Furrier',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '326',
			'county' => '1462',
			'hundred' => ''
		]);	
		//Samara
		DB::table('guilds')->insert([
			'guild_name' => 'Furriers Guild of Samara',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Furrier',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '326',
			'county' => '1462',
			'hundred' => ''
		]);	
		//Suar
		//Suar
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Suar',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '326',
			'county' => '1463',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Furriers Guild of Suar',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Furrier',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '326',
			'county' => '1464',
			'hundred' => ''
		]);
		//Qashan
		DB::table('guilds')->insert([
			'guild_name' => 'Furriers Guild of Qashan',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Furrier',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '326',
			'county' => '1463',
			'hundred' => ''
		]);	
		//Bilar
		//Bilar
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Bilar',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '326',
			'county' => '1464',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Bilar',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '326',
			'county' => '1464',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Bilar',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '326',
			'county' => '1464',
			'hundred' => ''
		]);
		//Cukataw
		DB::table('guilds')->insert([
			'guild_name' => 'Furriers Guild of Cukataw',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Furrier',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '326',
			'county' => '1464',
			'hundred' => ''
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
			'duchy' => '327',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Derbent',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '327',
			'county' => '1464',
			'hundred' => ''
		]);
		//Tarki
		//Balanjar
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Balanjar',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '327',
			'county' => '1465',
			'hundred' => ''
		]);
		//Makhachkala
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Makhachkala',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '327',
			'county' => '1465',
			'hundred' => ''
		]);
		//Alania
		//Azov
		//Azov
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Azov',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '328',
			'county' => '',
			'hundred' => ''
		]);
		//Tmutarakan
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '328',
			'county' => '',
			'hundred' => ''
		]);
		//Maghas
		//Maghas
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Alania',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '63',
			'duchy' => '328',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Maghas',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '328',
			'county' => '1469',
			'hundred' => ''
		]);
		//Kingdom of Cumania
		//Kazakh
		//Sighnaq
		//Sighnaq
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Kazakh',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '64',
			'duchy' => '329',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Sighnaq',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '329',
			'county' => '1470',
			'hundred' => ''
		]);
		//Otrar
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Otrar',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '329',
			'county' => '1470',
			'hundred' => ''
		]);
		//Sozak
		//Sozak
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Sozak',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '329',
			'county' => '1471',
			'hundred' => ''
		]);
		//Sibir
		//Sibir
		//Qashliq
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Sibir',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Major_Kingdom',
			'empire' => null,
			'kingdom' => '64',
			'duchy' => '330',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Qashliq',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '330',
			'county' => '1472',
			'hundred' => ''
		]);
		//Bashkor
		//Ufa
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Ufa',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '330',
			'county' => '1473',
			'hundred' => ''
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
			'duchy' => '331',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Gurganj',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '331',
			'county' => '1474',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild of Gurganj',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Potterer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '331',
			'county' => '1474',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Gurganj',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '331',
			'county' => '1474',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Gurganj',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '331',
			'county' => '1474',
			'hundred' => ''
		]);
		//Khorezm
		//Toprak
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Toprak',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '331',
			'county' => '1475',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Toprak',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '331',
			'county' => '1475',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Toprak',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '331',
			'county' => '1475',
			'hundred' => ''
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
			'duchy' => '332',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Khiva',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '332',
			'county' => '1476',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Khiva',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '332',
			'county' => '1476',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Khiva',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '332',
			'county' => '1476',
			'hundred' => ''
		]);
		//Durghan
		//Durghan
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '332',
			'county' => '1477',
			'hundred' => ''
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
			'duchy' => '333',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Merv',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '333',
			'county' => '1478',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Merv',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '333',
			'county' => '1478',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Merv',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '333',
			'county' => '1478',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Merv',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '333',
			'county' => '1478',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Merv',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '333',
			'county' => '1478',
			'hundred' => ''
		]);
		//Bayram
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '333',
			'county' => '1478',
			'hundred' => ''
		]);
		//Gyaur
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Gyaur',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '333',
			'county' => '1478',
			'hundred' => ''
		]);
		//Erk
		DB::table('guilds')->insert([
			'guild_name' => 'Millers Guild of Erk',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Miller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '333',
			'county' => '1478',
			'hundred' => ''
		]);
		//Sarakhs
		//Sarakhs
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Sarakhs',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '333',
			'county' => '1479',
			'hundred' => ''
		]);
		//Sharaf
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '333',
			'county' => '1479',
			'hundred' => ''
		]);
		//Bereket
		//Bereket
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Bereket',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '333',
			'county' => '1480',
			'hundred' => ''
		]);
		//Kyzyl
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '333',
			'county' => '1480',
			'hundred' => ''
		]);
		//Kingdom of Isfahan
		//Jibal
		//Isfahan
		//Isfahan
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Jibal',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Empire',
			'empire' => '19',
			'kingdom' => '66',
			'duchy' => '334',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Isfahan',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '334',
			'county' => '1481',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Isfahan',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Rose',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '334',
			'county' => '1481',
			'hundred' => ''
		]);
		//Kavraskan
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '334',
			'county' => '1481',
			'hundred' => ''
		]);
		//Kashan
		//Kashan
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Kashan',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Rose',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '334',
			'county' => '1482',
			'hundred' => ''
		]);
		//Meshgan
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '334',
			'county' => '1482',
			'hundred' => ''
		]);
		//Barzak
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Barzak',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Rose',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '334',
			'county' => '1482',
			'hundred' => ''
		]);
		//Niaser
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Niaser',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Rose',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '334',
			'county' => '1482',
			'hundred' => ''
		]);
		//Kamsar
		DB::table('guilds')->insert([
			'guild_name' => 'Perfumers Guild of Kamsar',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Perfumer_Rose',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '334',
			'county' => '1482',
			'hundred' => ''
		]);
		//Qom
		//Qom
		DB::table('guilds')->insert([
			'guild_name' => 'University of Qom',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '334',
			'county' => '1483',
			'hundred' => ''
		]);
		//Sarafjakan
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '334',
			'county' => '1483',
			'hundred' => ''
		]);
		//Yazd
		//Yazd
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Yazd',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '334',
			'county' => '1484',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Yazd',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '334',
			'county' => '1484',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Yazd',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '334',
			'county' => '1484',
			'hundred' => ''
		]);
		//Chahak
		DB::table('guilds')->insert([
			'guild_name' => 'Forge of Chahak',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Ironmonger',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '334',
			'county' => '1484',
			'hundred' => ''
		]);
		//Karaj
		//Karaj
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '334',
			'county' => '1485',
			'hundred' => ''
		]);
		//Garmdarreh
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '334',
			'county' => '1485',
			'hundred' => ''
		]);
		//Qazvin
		//Qazvin
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '334',
			'county' => '1486',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Qazvin',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '334',
			'county' => '1486',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Qazvin',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '334',
			'county' => '1486',
			'hundred' => ''
		]);
		//Rhages
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '334',
			'county' => '1486',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Rhages',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '334',
			'county' => '1486',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Rhages',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '334',
			'county' => '1486',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Rhages',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '334',
			'county' => '1486',
			'hundred' => ''
		]);
		//Fars
		//Shiraz
		//Shiraz
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Fars',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '335',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Shiraz',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '335',
			'county' => '1487',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Shiraz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '335',
			'county' => '1487',
			'hundred' => ''
		]);
		//Fasa
		//Fasa
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild of Fasa',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Draper',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '335',
			'county' => '1488',
			'hundred' => ''
		]);
		//Darab
		//Darab
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Darab',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '335',
			'county' => '1489',
			'hundred' => ''
		]);
		//Pashkan
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '335',
			'county' => '1489',
			'hundred' => ''
		]);
		//Daylam
		//Gorgan
		//Gorgan
		DB::table('guilds')->insert([
			'guild_name' => 'Court of Daylam',
			'guild_category' => 'Court',
			'guild_subcategory' => 'Petty_Kingdom',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '336',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Gorgan',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '336',
			'county' => '1490',
			'hundred' => ''
		]);
		//Abaskun
		DB::table('guilds')->insert([
			'guild_name' => 'Skinners Guild of Abaskun',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Tanner',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '336',
			'county' => '1490',
			'hundred' => ''
		]);
		//Amol
		//Amol
		DB::table('guilds')->insert([
			'guild_name' => 'Silk Weavers Guild of Amol',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Silk_Weaver',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '336',
			'county' => '1491',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Amol',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '336',
			'county' => '1491',
			'hundred' => ''
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
			'duchy' => '337',
			'county' => null,
			'hundred' => ''
		]);
		//Naderi
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Naderi',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '337',
			'county' => '1492',
			'hundred' => ''
		]);
		//Ramkan
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '337',
			'county' => '1492',
			'hundred' => ''
		]);
		//Minab
		//Kargan
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '337',
			'county' => '1493',
			'hundred' => ''
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
			'duchy' => '338',
			'county' => null,
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Fair of Kerman',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Fair',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '338',
			'county' => '1496',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild of Kerman',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Dyer_Saffron',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '338',
			'county' => '1496',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'University of Kerman',
			'guild_category' => 'University',
			'guild_subcategory' => 'Scholar_Bishop',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '338',
			'county' => '1496',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Tournament of Kerman',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tournament',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '338',
			'county' => '1496',
			'hundred' => ''
		]);
		//Baghin
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '338',
			'county' => '1496',
			'hundred' => ''
		]);
		//Bam
		//Bam
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '338',
			'county' => '1497',
			'hundred' => ''
		]);
		//Rafsinjan
		//Bayaz
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Bayaz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '338',
			'county' => '1498',
			'hundred' => ''
		]);
		DB::table('guilds')->insert([
			'guild_name' => 'Armorers Guild of Bayaz',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Armorer',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '338',
			'county' => '1498',
			'hundred' => ''
		]);
		//Kuhbanan
		DB::table('guilds')->insert([
			'guild_name' => 'Inn',
			'guild_category' => 'Feast',
			'guild_subcategory' => 'Tavern',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '338',
			'county' => '1498',
			'hundred' => ''
		]);
		//Behabad
		DB::table('guilds')->insert([
			'guild_name' => 'Fullers Guild of Behabad',
			'guild_category' => 'Craft',
			'guild_subcategory' => 'Master_Fuller',
			'empire' => null,
			'kingdom' => null,
			'duchy' => '338',
			'county' => '1498',
			'hundred' => ''
		]);
		
    }
}
