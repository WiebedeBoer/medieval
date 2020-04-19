<?php

use Illuminate\Database\Seeder;

class SteadCultureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		//1
		DB::table('stead_cultures')->insert([
			'culture_name' => 'Scandinavian'
		]);	
		//2
		DB::table('stead_cultures')->insert([
			'culture_name' => 'German'
		]);	
		//3
		DB::table('stead_cultures')->insert([
			'culture_name' => 'English'
		]);			
		//4
		DB::table('stead_cultures')->insert([
			'culture_name' => 'Celtic'
		]);	
		//5
		DB::table('stead_cultures')->insert([
			'culture_name' => 'Frankish'
		]);	
		//6
		DB::table('stead_cultures')->insert([
			'culture_name' => 'Italian'
		]);	
		//7
		DB::table('stead_cultures')->insert([
			'culture_name' => 'Spanish'
		]);	
		//8
		DB::table('stead_cultures')->insert([
			'culture_name' => 'Andalucian'
		]);			
		//9
		DB::table('stead_cultures')->insert([
			'culture_name' => 'Polish'
		]);			
		//10
		DB::table('stead_cultures')->insert([
			'culture_name' => 'Hungarian'
		]);	
		//11
		DB::table('stead_cultures')->insert([
			'culture_name' => 'Croatian'
		]);	
		//12		
		DB::table('stead_cultures')->insert([
			'culture_name' => 'Wallachian'
		]);
		//13		
		DB::table('stead_cultures')->insert([
			'culture_name' => 'Russian'
		]);		
		//14	
		DB::table('stead_cultures')->insert([
			'culture_name' => 'Bulgarian'
		]);	
		//15	
		DB::table('stead_cultures')->insert([
			'culture_name' => 'Byzantine'
		]);	
		//16	
		DB::table('stead_cultures')->insert([
			'culture_name' => 'Georgian'
		]);	
		//17	
		DB::table('stead_cultures')->insert([
			'culture_name' => 'Arabic'
		]);	
		//18	
		DB::table('stead_cultures')->insert([
			'culture_name' => 'Turkish'
		]);	
		//19	
		DB::table('stead_cultures')->insert([
			'culture_name' => 'Mongol'
		]);			
		
    }
}
