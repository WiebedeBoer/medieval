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
		
		/*
		title ranks
		1 = virgate
		2 = hide
		3 = tithing
		4 = parish
		5 = barony
		6 = castellany
		7 = county
		8 = march
		9 = duchy
		10 = grand duchy
		11 = kingdom
		12 = empire		
		*/			
		
		//muslim
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

		/*
		title ranks
		1 = virgate
		2 = hide
		3 = tithing
		4 = parish
		5 = barony
		6 = castellany
		7 = county
		8 = march
		9 = duchy
		10 = grand duchy
		11 = kingdom
		12 = empire		
		*/			
		
		//catholic
		//holy roman empire
		//bavaria
		DB::table('titles')->insert([
			'title_name' => 'Arch Marshall',
			'title_category' => 'duke',
			'region' => '8',
			'place' => '29',
			'quarter' => '18517',
			'religion' => '1',
			'rank' => '9',
			'career' => 'prince_elector'
		]);
		//brandenburg
		DB::table('titles')->insert([
			'title_name' => 'Arch Treasurer',
			'title_category' => 'duke',
			'region' => '5',
			'place' => '17',
			'quarter' => '18505',
			'religion' => '1',
			'rank' => '9',
			'career' => 'prince_elector'
		]);
		//saxony
		DB::table('titles')->insert([
			'title_name' => 'Arch Bannerbearer',
			'title_category' => 'margrave',
			'region' => '2',
			'place' => '7',
			'quarter' => '18495',
			'religion' => '1',
			'rank' => '8',
			'career' => 'prince_elector'
		]);
		//cologne
		DB::table('titles')->insert([
			'title_name' => 'Arch Steward',
			'title_category' => 'prince archbishop',
			'region' => '19',
			'place' => '73',
			'quarter' => '17242',
			'religion' => '1',
			'rank' => '9',
			'career' => 'prince_elector'
		]);
		//mainz
		DB::table('titles')->insert([
			'title_name' => 'Arch Chamberlain',
			'title_category' => 'prince archbishop',
			'region' => '18',
			'place' => '69',
			'quarter' => '17238',
			'religion' => '1',
			'rank' => '9',
			'career' => 'prince_elector'
		]);
		//trier
		DB::table('titles')->insert([
			'title_name' => 'Arch Chancellor',
			'title_category' => 'prince archbishop',
			'region' => '20',
			'place' => '77',
			'quarter' => '17246',
			'religion' => '1',
			'rank' => '9',
			'career' => 'prince_elector'
		]);
		//bohemia
		DB::table('titles')->insert([
			'title_name' => 'Arch Cupbearer',
			'title_category' => 'king',
			'region' => '16',
			'place' => '61',
			'quarter' => '18549',
			'religion' => '1',
			'rank' => '3',
			'career' => 'prince_elector'
		]);

		//papal court
		//camerlengo
		DB::table('titles')->insert([
			'title_name' => 'camerlengo',
			'title_category' => 'cardinal',
			'region' => '125',
			'place' => '497',
			'quarter' => '18985',
			'religion' => '1',
			'rank' => '5',
			'career' => 'camerlengo'
		]);

		//heralds
		//france
		DB::table('titles')->insert([
			'title_name' => 'France',
			'title_category' => 'herald',
			'region' => '29',
			'place' => '113',
			'quarter' => '18601',
			'religion' => '1',
			'rank' => '4',
			'career' => 'herald'
		]);
		//england
		DB::table('titles')->insert([
			'title_name' => 'England',
			'title_category' => 'herald',
			'region' => '47',
			'place' => '185',
			'quarter' => '18673',
			'religion' => '1',
			'rank' => '4',
			'career' => 'herald'
		]);
		//scotland
		DB::table('titles')->insert([
			'title_name' => 'Scotland',
			'title_category' => 'herald',
			'region' => '73',
			'place' => '289',
			'quarter' => '18777',
			'religion' => '1',
			'rank' => '4',
			'career' => 'herald'
		]);
		//castile
		DB::table('titles')->insert([
			'title_name' => 'Castile',
			'title_category' => 'herald',
			'region' => '98',
			'place' => '389',
			'quarter' => '18877',
			'religion' => '1',
			'rank' => '4',
			'career' => 'herald'
		]);
		//leon
		DB::table('titles')->insert([
			'title_name' => 'Leon',
			'title_category' => 'herald',
			'region' => '96',
			'place' => '381',
			'quarter' => '18869',
			'religion' => '1',
			'rank' => '4',
			'career' => 'herald'
		]);
		//aragon
		DB::table('titles')->insert([
			'title_name' => 'Aragon',
			'title_category' => 'herald',
			'region' => '89',
			'place' => '353',
			'quarter' => '18841',
			'religion' => '1',
			'rank' => '4',
			'career' => 'herald'
		]);
		//portugal
		DB::table('titles')->insert([
			'title_name' => 'Portugal',
			'title_category' => 'herald',
			'region' => '101',
			'place' => '401',
			'quarter' => '18889',
			'religion' => '1',
			'rank' => '4',
			'career' => 'herald'
		]);
		//naples
		DB::table('titles')->insert([
			'title_name' => 'Naples',
			'title_category' => 'herald',
			'region' => '127',
			'place' => '505',
			'quarter' => '18993',
			'religion' => '1',
			'rank' => '4',
			'career' => 'herald'
		]);
		//sweden
		DB::table('titles')->insert([
			'title_name' => 'Sweden',
			'title_category' => 'herald',
			'region' => '65',
			'place' => '257',
			'quarter' => '18745',
			'religion' => '1',
			'rank' => '4',
			'career' => 'herald'
		]);


		/*
		title ranks
		1 = virgate
		2 = hide
		3 = tithing
		4 = parish
		5 = barony
		6 = castellany
		7 = county
		8 = march
		9 = duchy
		10 = grand duchy
		11 = kingdom
		12 = empire		
		*/			
		
		//greek
		//constantinople
		DB::table('titles')->insert([
			'title_name' => 'Domestikos',
			'title_category' => 'courtier',
			'region' => '207',
			'place' => '825',
			'quarter' => '19313',
			'religion' => '4',
			'rank' => '10',
			'career' => 'courtier'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Varangian',
			'title_category' => 'courtier',
			'region' => '207',
			'place' => '825',
			'quarter' => '19313',
			'religion' => '4',
			'rank' => '3',
			'career' => 'courtier'
		]);

    }
}
