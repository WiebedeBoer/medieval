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
		//fixed types		
		//1, marke, 1-1, 1-4, 1-7, 3-1, 4-7, 5-7, 7-1, 7-3, 7-7
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'marke'
		]);
		//2, hospital, 2-3
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'hospital'
		]);	
		//3, gateway, 2-4, 3-2, 5-6, 6-3
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'gateway'
		]);
		//4, castellany, 3-3
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'castellany'
		]);	
		//5, market, 4-3
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'market'
		]);
		//6, diocese, 4-4
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'diocese'
		]);
		//7, port, 4-6
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'port'
		]);
		//8, centre, 5-3
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'centre'
		]);	
		//9, university, 5-4
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'university'
		]);	
		//10, tiltyard, 6-6
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'tiltyard'
		]);
		//11, industry, 3-6
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'industry'
		]);
		//special fixed types
		//12, citadel, 3-3
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'citadel'
		]);	
		//13, roadside inn, 5-2
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'roadside_inn'
		]);	
		//14, fortified abbey, 4-2
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'fortified_abbey'
		]);	
		//15, abbey grange, 4-2
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'abbey_grange'
		]);	
		//16, abbey scriptorium, 4-2
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'abbey_scriptorium'
		]);			
		//flexible types
		//17, lordship
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'lordship'
		]);	
		//18, factory
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'factory'
		]);	
		//19, inn
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'inn'
		]);	
		//20, commandery
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'commandery'
		]);
		//21, abbacy
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'abbacy'
		]);
		//22, parish
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'parish'
		]);
		//23, farmstead
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'farmstead'
		]);			
    }
}
