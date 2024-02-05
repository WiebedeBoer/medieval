<?php

use Illuminate\Database\Seeder;

class HideSeeder extends Seeder
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
        DB::table('hides')->insert([
			'hide_name' => '',			
			'de_jure_tithing' => '',			
			'position' => '',			//centre, north, south, east, west, northwest, northeast, southwest, southeast	
			'hide_category' => ' ',		//
			'hide_plot' => '',		    //
            'logis' => '',			    //
            'casale' => '',		        //
            'virgate' => '',		    //
            'oxgang' => '',		        //	
            'realm' => '',              //(realm); default=null
            'tenure' => '',             //(feudal tenure); default=null
			'allod' => null,		    //(allodial); default=null
			'caput_baroniae' => null	//(caput baroniae); default=null
        ]);
		*/ 
        
        
        /*
        //no. hides:     category:                   starter building:   urban/rural: tithing: 
        //                
        //      6        Husting (Church Farmer)     Cottage             rural        Ecclesiastical Locale 
        //      5        Husting (Monastery Farmer)  Cottage             rural        Monastical Locale 
        //      5        Husting (Gentry)            Hallhouse           rural        Castle Locale
        //      11       Burgage                     Townhouse           urban        Market Locale, Commons, Farmer Marke, Port Locale
        //      16       Husting (Farmer)            Cottage             rural        Farmer Marke 
        //      6        Husting (Verderer)          Cottage             rural        Fauxburg
        //      4        Husting (Port)              Cottage             rural        Port Locale
        //
        //total:
        //
        //      49
        */ 
        
        //    
        DB::table('hides')->insert([
            'hide_name' => '',
            'de_jure_tithing' => '',
            'position' => 'centre',
            'hide_category' => '',
            'hide_plot' => '',
            'logis' => 'Waste',
            'casale' => 'Waste',
            'virgate' => 'Waste',	
            'oxgang' => 'Waste'
        ]);
        DB::table('hides')->insert([
            'hide_name' => '',
            'de_jure_tithing' => '',
            'position' => 'east',
            'hide_category' => '',
            'hide_plot' => '',
            'logis' => 'Waste',
            'casale' => 'Waste',
            'virgate' => 'Waste',	
            'oxgang' => 'Waste'
        ]);
        DB::table('hides')->insert([
            'hide_name' => '',
            'de_jure_tithing' => '',
            'position' => 'west',
            'hide_category' => '',
            'hide_plot' => '',
            'logis' => 'Waste',
            'casale' => 'Waste',
            'virgate' => 'Waste',	
            'oxgang' => 'Waste'
        ]);
        DB::table('hides')->insert([
            'hide_name' => '',
            'de_jure_tithing' => '',
            'position' => 'north',
            'hide_category' => '',
            'hide_plot' => '',
            'logis' => 'Waste',
            'casale' => 'Waste',
            'virgate' => 'Waste',	
            'oxgang' => 'Waste'
        ]);
        DB::table('hides')->insert([
            'hide_name' => '',
            'de_jure_tithing' => '',
            'position' => 'south',
            'hide_category' => '',
            'hide_plot' => '',
            'logis' => 'Waste',
            'casale' => 'Waste',
            'virgate' => 'Waste',	
            'oxgang' => 'Waste'
        ]);
        DB::table('hides')->insert([
            'hide_name' => '',
            'de_jure_tithing' => '',
            'position' => 'southwest',
            'hide_category' => '',
            'hide_plot' => '',
            'logis' => 'Waste',
            'casale' => 'Waste',
            'virgate' => 'Waste',	
            'oxgang' => 'Waste'
        ]);
        DB::table('hides')->insert([
            'hide_name' => '',
            'de_jure_tithing' => '',
            'position' => 'southeast',
            'hide_category' => '',
            'hide_plot' => '',
            'logis' => 'Waste',
            'casale' => 'Waste',
            'virgate' => 'Waste',	
            'oxgang' => 'Waste'
        ]);
        DB::table('hides')->insert([
            'hide_name' => '',
            'de_jure_tithing' => '',
            'position' => 'northwest',
            'hide_category' => '',
            'hide_plot' => '',
            'logis' => 'Waste',
            'casale' => 'Waste',
            'virgate' => 'Waste',	
            'oxgang' => 'Waste'
        ]);
        DB::table('hides')->insert([
            'hide_name' => '',
            'de_jure_tithing' => '',
            'position' => 'northeast',
            'hide_category' => '',
            'hide_plot' => '',
            'logis' => 'Waste',
            'casale' => 'Waste',
            'virgate' => 'Waste',	
            'oxgang' => 'Waste'
        ]);
    }
}