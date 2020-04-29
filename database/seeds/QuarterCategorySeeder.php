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
		//1, outside rural
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'marke'
		]);
		//2 noble defenses
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'citadel'
		]);
		//3
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'castellany'
		]);	
		//4
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'lordship'
		]);	
		//5, town defenses
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'inner bailey'
		]);
		//6,
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'outer bailey'
		]);
		//7,
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'bastide'
		]);	
		//8,
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'roadside inn'
		]);	
		//9 manor
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'manor'
		]);	
		//10, port
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'factory'
		]);	
		//11,
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'port'
		]);
		//12, fair
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'market'
		]);
		//13,
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'fair'
		]);			
		//14, tiltyard
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'tiltyard'
		]);
		//15, monastic
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'commandery'
		]);
		//16, 
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'abbacy'
		]);
		//17, clergy
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'chapelry'
		]);
		//18,
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'parish'
		]);
		//19,
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'diocese'
		]);
		//20, university
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'university'
		]);	
		//21, hospital
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'hospital'
		]);	
		//22, farmstead
		DB::table('quarter_categories')->insert([
			'quarter_name' => 'farmstead'
		]);			
    }
}
