<?php

use Illuminate\Database\Seeder;

class CourtTitlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('titles')->insert([
			'title_name' => 'Ottoman',
			'title_category' => 'sultan',
			'region' => '217',
			'place' => '867',
			'quarter' => '19355',
			'religion' => '5',
			'rank' => '12',
			'career' => 'sultanate'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Andalucia',
			'title_category' => 'grand vizier',
			'region' => '107',
			'place' => '425',
			'quarter' => '18913',
			'religion' => '5',
			'rank' => '10',
			'career' => 'fixed_vizier'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Marrakesh',
			'title_category' => 'grand vizier',
			'region' => '139',
			'place' => '553',
			'quarter' => '19041',
			'religion' => '5',
			'rank' => '10',
			'career' => 'fixed_vizier'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Egypt',
			'title_category' => 'grand vizier',
			'region' => '158',
			'place' => '629',
			'quarter' => '19117',
			'religion' => '5',
			'rank' => '10',
			'career' => 'fixed_vizier'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Baghdad',
			'title_category' => 'grand vizier',
			'region' => '259',
			'place' => '1033',
			'quarter' => '19521',
			'religion' => '5',
			'rank' => '10',
			'career' => 'fixed_vizier'
		]); 

    }
}
