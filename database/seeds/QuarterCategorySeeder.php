<?php

use Illuminate\Database\Seeder;

class QuarterCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		//outside rural
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'marke'
		]);
		//noble defenses
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'citadel'
		]);	
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'castellany'
		]);		
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'lordship'
		]);	
		//town defenses
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'inner bailey'
		]);
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'outer bailey'
		]);
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'bastide'
		]);	
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'roadside inn'
		]);	
		//manor
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'manor'
		]);	
		//port
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'factory'
		]);			
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'port'
		]);
		//fair
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'market'
		]);			
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'fair'
		]);			
		//tiltyard
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'tiltyard'
		]);
		//monastic
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'commandery'
		]);
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'abbacy'
		]);
		//clergy
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'chapelry'
		]);
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'parish'
		]);
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'diocese'
		]);
		//university
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'university'
		]);	
		//hospital
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'hospital'
		]);		
    }
}
