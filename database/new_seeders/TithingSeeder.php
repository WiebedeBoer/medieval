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
				'tithing_category' => ' ',		//Feudal, Ecclesiastical, Monastic_Order, Crusader_Order, Knightly_Estate, Burgher, Villager, Monastic_Grange
				'de_jure_barony' => '',			
				'position' => '',				
				'manor_court' => '',			//Court_Royal, Court_Ducal, Court_County, Court_Baron, Court_Knight, Court_University, Court_Chancellery, Court_Advocate
				'tithing_quarter' => '',		//Ecclesiastical_Liberty, Monastic_Liberty, Commandery, Knight_Fee, Gentry_Quarter, Hall_Quarter, Market_Quarter, Tithing, Monastic_Grange
				'hide_northeast' => '',			//, , , ; default=Fallow
				'hide_northwest' => '',			//, , , ; default=Fallow
				'hide_southeast' => '',			//, , , ; default=Fallow
				'hide_southwest' => '',			//, , , ; default=Fallow		
				'imperial_realm' => null,		(empire); default=null
				'realm' => null,					(kingdom); default=null
				'petty_realm' => null,			(duchy); default=null
				'shire' => null,					(county); default=null
				'barony' => null,				(barony); default=null
				'tithing' => null,				(tithing); default=null,
				'allod' => null					(allodial); default=null
            ]);
			*/
			
			/*
			tithing_quarter:				hide_type:			hide_quarter:
			
			* Castle_Quarter			=						Castle_Keep, Stables_Plot, Gatehouse, Armoury
			* Knight_Fee				=						Manor_House, Stables_Plot
			* Gentry_Quarter			=						Husting, Stables_Plot
			
			* Ecclesiastical_Liberty	=						Diocese, Parish, Chapelry, Cloister, Palace, Rectory, Chancellery
			* University_Quarter		=						Parish, Chapelry, Cloister, Porter_Lodge, College_Plot
			* Hospital_Quarter			=						Parish, Chapelry, Cloister, Almshouse, Infirmary_Plot
			* Monastic_Liberty 			=						Parish, Chapelry, Cloister, Infirmary_Plot, Cartulary, Scriptorium
			* Monastic_Grange			=						Chapelry, Tithe_Barn, Burgage_Plot, Mill
			* Commandery				=						Parish, Chapelry, Cloister, Chapterhouse, Stables_Plot
							
			* Hunting_Quarter			=						Hunting_Lodge, Kingswood
			* Tiltyard					=						Grandstand, Stables_Plot, Guild_Hall
			
			* Market_Quarter			=						Market_Hall, Trade_Fair, Guild_Hall, Cloth_Hall, Merchant_Bank
			* Port_Quarter				=						Wharf, Fishery_Plot, Arsenal, Coaching_Inn, Tavern_Plot
			* Gate_Quarter				=						Gatehouse, Coaching_Inn, Tavern_Plot, Stables_Plot, Workshop_Plot
			* Factory					=						Warehouse_Plot, Granary, Stables_Plot, Workshop_Plot, Mill
			* Jewry_Quarter				=						Bathhouse, Burgage_Plot, Merchant_Bank, Workshop_Plot
			* Burgage_Quarter			=						Patrician_House, Burgage_Plot, Workshop_Plot
			* Hall_Quarter				=						Town_Hall, Moot_Hall, Mint, Armoury, Coaching_Inn, Tavern_Plot
			* Tithing					=						Cottage_Plot, Claypit, Mine, Quarry, Woodland, Coppice, Moorland, Paddock, Field, Stables_Plot
			
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
				'tithing_category' => 'Feudal',
				'de_jure_barony' => '',
				'position' => '',
				'manor_court' => '',
				'tithing_quarter' => '',
				'hide_northeast' => '',
				'hide_northwest' => '',
				'hide_southeast' => '',
				'hide_southwest' => ''
			]);
			DB::table('tithings')->insert([
				'tithing_name' => '',
				'tithing_category' => 'Feudal',
				'de_jure_barony' => '',
				'position' => '',
				'manor_court' => '',
				'tithing_quarter' => '',
				'hide_northeast' => '',
				'hide_northwest' => '',
				'hide_southeast' => '',
				'hide_southwest' => ''
			]);
	}
}