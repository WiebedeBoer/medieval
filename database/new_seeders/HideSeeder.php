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
            'overlord' => null,		    //default=null	
            'tenant' => null,		    //default=null
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
        //      4        Husting (Serf)              Cottage             rural        Commons
        //
        //total:
        //
        //      53
        */ 
        
        //
        //market locale, centre    
        DB::table('hides')->insert([
            'hide_name' => '',
            'de_jure_tithing' => '',
            'position' => '4,4',
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
            'position' => '4,5',
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
            'position' => '4,6',
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
            'position' => '5,4',
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
            'position' => '5,5',
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
            'position' => '5,6',
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
            'position' => '6,4',
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
            'position' => '6,5',
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
            'position' => '6,6',
            'hide_category' => '',
            'hide_plot' => '',
            'logis' => 'Waste',
            'casale' => 'Waste',
            'virgate' => 'Waste',	
            'oxgang' => 'Waste'
        ]);
        //castle locale, east   
        DB::table('hides')->insert([
            'hide_name' => '',
            'de_jure_tithing' => '',
            'position' => '4,7',
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
            'position' => '4,8',
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
            'position' => '4,9',
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
            'position' => '5,7',
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
            'position' => '5,8',
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
            'position' => '5,9',
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
            'position' => '6,7',
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
            'position' => '6,8',
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
            'position' => '6,9',
            'hide_category' => '',
            'hide_plot' => '',
            'logis' => 'Waste',
            'casale' => 'Waste',
            'virgate' => 'Waste',	
            'oxgang' => 'Waste'
        ]);
        //monastic locale, west   
        DB::table('hides')->insert([
            'hide_name' => '',
            'de_jure_tithing' => '',
            'position' => '4,1',
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
            'position' => '4,2',
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
            'position' => '4,3',
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
            'position' => '5,1',
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
            'position' => '5,2',
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
            'position' => '5,3',
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
            'position' => '6,1',
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
            'position' => '6,2',
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
            'position' => '6,3',
            'hide_category' => '',
            'hide_plot' => '',
            'logis' => 'Waste',
            'casale' => 'Waste',
            'virgate' => 'Waste',	
            'oxgang' => 'Waste'
        ]);
        //ecclesiastical locale, north   
        DB::table('hides')->insert([
            'hide_name' => '',
            'de_jure_tithing' => '',
            'position' => '1,4',
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
            'position' => '1,5',
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
            'position' => '1,6',
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
            'position' => '2,4',
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
            'position' => '2,5',
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
            'position' => '2,6',
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
            'position' => '3,4',
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
            'position' => '3,6',
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
            'position' => '3,6',
            'hide_category' => '',
            'hide_plot' => '',
            'logis' => 'Waste',
            'casale' => 'Waste',
            'virgate' => 'Waste',	
            'oxgang' => 'Waste'
        ]);
        //port locale, south   
        DB::table('hides')->insert([
            'hide_name' => '',
            'de_jure_tithing' => '',
            'position' => '7,4',
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
            'position' => '7,5',
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
            'position' => '7,6',
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
            'position' => '8,4',
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
            'position' => '8,5',
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
            'position' => '8,6',
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
            'position' => '9,4',
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
            'position' => '9,5',
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
            'position' => '9,6',
            'hide_category' => '',
            'hide_plot' => '',
            'logis' => 'Waste',
            'casale' => 'Waste',
            'virgate' => 'Waste',	
            'oxgang' => 'Waste'
        ]);
        //commons, southwest   
        DB::table('hides')->insert([
            'hide_name' => '',
            'de_jure_tithing' => '',
            'position' => '7,1',
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
            'position' => '7,2',
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
            'position' => '7,3',
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
            'position' => '8,1',
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
            'position' => '8,2',
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
            'position' => '8,3',
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
            'position' => '9,1',
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
            'position' => '9,2',
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
            'position' => '9,3',
            'hide_category' => '',
            'hide_plot' => '',
            'logis' => 'Waste',
            'casale' => 'Waste',
            'virgate' => 'Waste',	
            'oxgang' => 'Waste'
        ]);
        //fauxburg, southeast   
        DB::table('hides')->insert([
            'hide_name' => '',
            'de_jure_tithing' => '',
            'position' => '7,7',
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
            'position' => '7,8',
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
            'position' => '7,9',
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
            'position' => '8,7',
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
            'position' => '8,8',
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
            'position' => '8,9',
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
            'position' => '9,7',
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
            'position' => '9,8',
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
            'position' => '9,9',
            'hide_category' => '',
            'hide_plot' => '',
            'logis' => 'Waste',
            'casale' => 'Waste',
            'virgate' => 'Waste',	
            'oxgang' => 'Waste'
        ]);
        //farmer marke, northwest   
        DB::table('hides')->insert([
            'hide_name' => '',
            'de_jure_tithing' => '',
            'position' => '1,1',
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
            'position' => '1,2',
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
            'position' => '1,3',
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
            'position' => '2,1',
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
            'position' => '2,2',
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
            'position' => '2,3',
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
            'position' => '3,1',
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
            'position' => '3,2',
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
            'position' => '3,3',
            'hide_category' => '',
            'hide_plot' => '',
            'logis' => 'Waste',
            'casale' => 'Waste',
            'virgate' => 'Waste',	
            'oxgang' => 'Waste'
        ]);
        //farmer marke, northeast   
        DB::table('hides')->insert([
            'hide_name' => '',
            'de_jure_tithing' => '',
            'position' => '1,7',
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
            'position' => '1,8',
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
            'position' => '1,9',
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
            'position' => '2,7',
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
            'position' => '2,8',
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
            'position' => '2,9',
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
            'position' => '3,7',
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
            'position' => '3,8',
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
            'position' => '3,9',
            'hide_category' => '',
            'hide_plot' => '',
            'logis' => 'Waste',
            'casale' => 'Waste',
            'virgate' => 'Waste',	
            'oxgang' => 'Waste'
        ]);
    }
}