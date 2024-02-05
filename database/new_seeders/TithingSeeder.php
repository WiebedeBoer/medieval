<?php

use Illuminate\Database\Seeder;

class TithingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
		/*
			castle construction					cost				salary
			motte-and-bailey 3 months			tower 300			knight 40
			castle 2 to 10 years				small castle 600
			
		*/
		
		/*
		//example
        DB::table('tithings')->insert([
			'tithing_name' => '',			
			'de_jure_hundred' => '',			
			'position' => '',				//centre, north, south, east, west, northwest, northeast, southwest, southeast
			'manor_court' => '',			//
			'tithing_category' => ' ',		//
			'tithing_quarter' => '',		//	
			'empire' => null,				//(emperor); default=null
			'kingdom' => null,				//(king); default=null
			'duchy' => null,				//(duke); default=null
			'county' => null,				//(count); default=null
			'barony' => null,				//(baron); default=null
			'tithing' => null				//(); default=null
        ]);
		*/


			
		/*
		//
		//manor_court:
		//
		//Court_Royal
		//Court_Ducal
		//Court_County
		//Court_Baron
		//Court_Knight
		//Court_University
		//Court_Chancellery
		//Court_Advocate
		//
		//tithing_category:			tithing_quarter:
		//
		//Market Locale				Piazza, Village_Green
		//Ecclesiastical Locale		Cathedral_Close, Clerical_Close
		//Monastical Locale			Monastic_Close, Monastic_Grange
		//Castle Locale				Castle_Close, Commandery, Knight_Fee, Casalis_Gentry
		//Port Locale				Dockyard, Factory
		//Fauxburg					Tiltyard, Kingswood, Coaching_Inn
		//Farmer Marke				Casalis
		//Commons					Allmend
		//
		//tithing_quarter:			tithing_category:		hide category:			
		//
		//Castle_Close				Martial 			=	Castle_Keep, Stables_Plot, Gatehouse, Armoury
		//Commandery				Martial 			=	Parish, Chapelry, Cloister, Chapterhouse, Stables_Plot
		//Knight_Fee				Martial 			=	Manor_House, Stables_Plot
		//Gentry_Quarter			Martial 			=	Husting, Stables_Plot
		//
		//Clerical_Close			Ecclesiastical 		=	Diocese, Parish, Chapelry, Cloister, Palace, Rectory, Chancellery
		//Cathedral_Close			Ecclesiastical		=	Diocese, Parish, Chapelry, Cloister, Palace, Rectory, Chancellery
		//
		//University_Locale			Educational 		=	Parish, Chapelry, Cloister, Porter_Lodge, College_Plot
		//
		//Hospital_Locale			Medical 			=	Parish, Chapelry, Cloister, Almshouse, Infirmary_Plot
		//
		//Monastic_Close 			Monastical 			=	Parish, Chapelry, Cloister, Infirmary_Plot, Cartulary, Scriptorium
		//Monastic_Grange			Monastical 			=	Chapelry, Tithe_Barn, Burgage_Plot, Mill
		// 				
		//Hunting_Locale			Recreational		=	Hunting_Lodge, Kingswood
		//Tiltyard					Recreational		=	Grandstand, Stables_Plot, Guild_Hall
		//
		//Hall_Locale				Governmental		=	Town_Hall, Moot_Hall, Mint, Armoury, Coaching_Inn, Tavern_Plot
		//
		//Market_Locale				Commercial			=	Market_Hall, Trade_Fair, Guild_Hall, Cloth_Hall, Merchant_Bank
		//Factory_Locale			Commercial			=	Warehouse_Plot, Granary, Stables_Plot, Workshop_Plot, Mill
		//
		//Port_Locale				Transitional		=	Wharf, Fishery_Plot, Arsenal, Coaching_Inn, Tavern_Plot
		//Gate_Locale				Transitional		=	Gatehouse, Coaching_Inn, Tavern_Plot, Stables_Plot, Workshop_Plot
		//
		//Jewry_Quarter				Residential			=	Bathhouse, Merchant_Bank, Burgage_Plot, Workshop_Plot
		//Burgage_Quarter			Residential			=	Patrician_House, Burgage_Plot, Workshop_Plot
		//
		//Tithing					Agricultural		=	Cottage_Plot, Stables_Plot, Paddock, Field, Claypit, Mine, Quarry, Woodland, Coppice, Moorland 
			
		*/
			
		/*
		type:					hide_quarter:
		Fortified				=	Castle_Keep, Manor_House, Gatehouse, Town_Hall, Moot_Hall, Cloth_Hall, Cloister, Wharf, Porter_Lodge, Coaching_Inn
		Library					=	College_Plot, Cartulary, Scriptorium, Chancellery
		Health					=	Almshouse, Infirmary_Plot
		Ecclesiastical			=	Diocese, Parish, Chapelry, Episcopal_Palace, Rectory
		Crusader				=	Chapterhouse
		Monastical				=	Cloister
		Gentry					=	Castle_Keep, Manor_House, Husting, Stables_Plot, Armoury, Arsenal, Bathhouse, Patrician_House, Gatehouse, Porter_Lodge
		Mercantile				=	Burgage_Plot, Guild_Hall, Workshop_Plot, Merchant_Bank, Market_Hall, Trade_Fair, Town_Hall, Cloth_Hall, Mint, Mill, Wharf
		Villein					=	Moot_Hall, Cottage_Plot
		Entertainment			=	Coaching_Inn, Tavern_Plot, Hunting_Lodge, Grandstand
		Transport				=	Stables_Plot
		Storage					=	Tithe_Barn, Granary, Warehouse_Plot
		Court					=	Castle_Keep, Manor_House, Town_Hall, Moot_Hall, Porter_Lodge, Chancellery, Chapterhouse, Wharf
		Resource				=	Claypit, Mine, Quarry, Fishery_Plot, Kingswood, Woodland, Coppice, Moorland, Paddock, Field
		*/
			

		//Holy Roman Empire	
		//Germany
		//Austria
		// 
		//
		DB::table('tithings')->insert([
			'tithing_name' => '',
			'de_jure_hundred' => '',
			'position' => 'centre',
			'manor_court' => '',
			'tithing_category' => 'Market Locale',
			'tithing_quarter' => ''
		]);
		DB::table('tithings')->insert([
			'tithing_name' => '',
			'de_jure_hundred' => '',
			'position' => 'east',
			'manor_court' => '',
			'tithing_category' => 'Castle Locale',
			'tithing_quarter' => ''
		]);
		DB::table('tithings')->insert([
			'tithing_name' => '',
			'de_jure_hundred' => '',
			'position' => 'west',
			'manor_court' => '',
			'tithing_category' => 'Monastical Locale',
			'tithing_quarter' => ''
		]);
		DB::table('tithings')->insert([
			'tithing_name' => '',
			'de_jure_hundred' => '',
			'position' => 'north',
			'manor_court' => '',
			'tithing_category' => 'Ecclesiastical Locale',
			'tithing_quarter' => ''
		]);
		DB::table('tithings')->insert([
			'tithing_name' => '',
			'de_jure_hundred' => '',
			'position' => 'south',
			'manor_court' => '',
			'tithing_category' => 'Port Locale',
			'tithing_quarter' => ''
		]);
		DB::table('tithings')->insert([
			'tithing_name' => '',
			'de_jure_hundred' => '',
			'position' => 'southwest',
			'manor_court' => '',
			'tithing_category' => 'Commons',
			'tithing_quarter' => ''
		]);
		DB::table('tithings')->insert([
			'tithing_name' => '',
			'de_jure_hundred' => '',
			'position' => 'southeast',
			'manor_court' => '',
			'tithing_category' => 'Fauxburg',
			'tithing_quarter' => ''
		]);
		DB::table('tithings')->insert([
			'tithing_name' => '',
			'de_jure_hundred' => '',
			'position' => 'northwest',
			'manor_court' => '',
			'tithing_category' => 'Farmer Marke',
			'tithing_quarter' => ''
		]);
		DB::table('tithings')->insert([
			'tithing_name' => '',
			'de_jure_hundred' => '',
			'position' => 'northeast',
			'manor_court' => '',
			'tithing_category' => 'Farmer Marke',
			'tithing_quarter' => ''
		]);
	}
}