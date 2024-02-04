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
			//example
            DB::table('tithings')->insert([
				'hide_name' => '',			
				'de_jure_tithing' => '',			
				'position' => '',				//centre, north, south, east, west, northwest, northeast, southwest, southeast	
				'hide_category' => ' ',		    //
				'hide_plot' => '',		        //
                'logis' => '',			        //
                'casale' => '',		            //
                'virgate' => '',		        //
                'oxgang' => '',		            //	
                'realm' => '',                  //(realm); default=null
                'tenure' => '',                 //(feudal tenure); default=null
				'allod' => null,				//(allodial); default=null
				'caput_baroniae' => null		//(caput baroniae); default=null
            ]);
			*/       
        
        
        
    DB::table('tithings')->insert([
        'hide_name' => '',
        'de_jure_tithing' => '',
        'position' => '',
        'hide_category' => '',
        'hide_plot' => '',
        'logis' => 'None',
        'casale' => 'None',
        'virgate' => 'None',	
        'oxgang' => 'None'
        ]);
}
}