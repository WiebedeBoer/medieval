<?php

use Illuminate\Database\Seeder;

class InnTitlesSeeder extends Seeder
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

		//hostlers
		DB::table('titles')->insert([
			'title_name' => 'Achir',
			'title_category' => 'hostler',
			'region' => '146',
			'place' => '584',
			'quarter' => '16009',
			'religion' => '5',
			'rank' => '4',
			'career' => 'tavern_hostler'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Poltava',
			'title_category' => 'hostler',
			'region' => '188',
			'place' => '751',
			'quarter' => '16010',
			'religion' => '3',
			'rank' => '4',
			'career' => 'tavern_hostler'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Oleshia',
			'title_category' => 'hostler',
			'region' => '188',
			'place' => '752',
			'quarter' => '16011',
			'religion' => '3',
			'rank' => '4',
			'career' => 'tavern_hostler'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Cherkasy',
			'title_category' => 'hostler',
			'region' => '189',
			'place' => '756',
			'quarter' => '16012',
			'religion' => '3',
			'rank' => '4',
			'career' => 'tavern_hostler'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Borispyl',
			'title_category' => 'hostler',
			'region' => '190',
			'place' => '758',
			'quarter' => '16013',
			'religion' => '3',
			'rank' => '4',
			'career' => 'tavern_hostler'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Korosten',
			'title_category' => 'hostler',
			'region' => '192',
			'place' => '768',
			'quarter' => '16014',
			'religion' => '3',
			'rank' => '4',
			'career' => 'tavern_hostler'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Lyubech',
			'title_category' => 'hostler',
			'region' => '193',
			'place' => '770',
			'quarter' => '16015',
			'religion' => '3',
			'rank' => '4',
			'career' => 'tavern_hostler'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Orsha',
			'title_category' => 'hostler',
			'region' => '194',
			'place' => '774',
			'quarter' => '16016',
			'religion' => '3',
			'rank' => '4',
			'career' => 'tavern_hostler'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Barysaw',
			'title_category' => 'hostler',
			'region' => '194',
			'place' => '776',
			'quarter' => '16017',
			'religion' => '3',
			'rank' => '4',
			'career' => 'tavern_hostler'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Rybinsk',
			'title_category' => 'hostler',
			'region' => '202',
			'place' => '806',
			'quarter' => '16018',
			'religion' => '3',
			'rank' => '4',
			'career' => 'tavern_hostler'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Lipetsk',
			'title_category' => 'hostler',
			'region' => '203',
			'place' => '812',
			'quarter' => '16019',
			'religion' => '3',
			'rank' => '4',
			'career' => 'tavern_hostler'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Olgov',
			'title_category' => 'hostler',
			'region' => '204',
			'place' => '816',
			'quarter' => '16020',
			'religion' => '3',
			'rank' => '4',
			'career' => 'tavern_hostler'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Mashhad',
			'title_category' => 'hostler',
			'region' => '237',
			'place' => '947',
			'quarter' => '16021',
			'religion' => '5',
			'rank' => '4',
			'career' => 'tavern_hostler'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Kerman',
			'title_category' => 'hostler',
			'region' => '239',
			'place' => '953',
			'quarter' => '16022',
			'religion' => '5',
			'rank' => '4',
			'career' => 'tavern_hostler'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Yazd',
			'title_category' => 'hostler',
			'region' => '241',
			'place' => '963',
			'quarter' => '16023',
			'religion' => '5',
			'rank' => '4',
			'career' => 'tavern_hostler'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Qazvin',
			'title_category' => 'hostler',
			'region' => '242',
			'place' => '968',
			'quarter' => '16024',
			'religion' => '5',
			'rank' => '4',
			'career' => 'tavern_hostler'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Sofian',
			'title_category' => 'hostler',
			'region' => '244',
			'place' => '974',
			'quarter' => '16025',
			'religion' => '5',
			'rank' => '4',
			'career' => 'tavern_hostler'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Kermanshah',
			'title_category' => 'hostler',
			'region' => '245',
			'place' => '978',
			'quarter' => '16026',
			'religion' => '5',
			'rank' => '4',
			'career' => 'tavern_hostler'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Maan',
			'title_category' => 'hostler',
			'region' => '248',
			'place' => '992',
			'quarter' => '16027',
			'religion' => '5',
			'rank' => '4',
			'career' => 'tavern_hostler'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Qusayr',
			'title_category' => 'hostler',
			'region' => '253',
			'place' => '1010',
			'quarter' => '16028',
			'religion' => '5',
			'rank' => '4',
			'career' => 'tavern_hostler'
			]); 


//innkeepers
DB::table('titles')->insert([
'title_name' => 'Bremen',
'title_category' => 'innkeeper',
'region' => '1',
'place' => '1',
'quarter' => '9435',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bremen',
'title_category' => 'innkeeper',
'region' => '1',
'place' => '1',
'quarter' => '9436',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bremen',
'title_category' => 'innkeeper',
'region' => '1',
'place' => '1',
'quarter' => '9437',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bremen',
'title_category' => 'innkeeper',
'region' => '1',
'place' => '1',
'quarter' => '9438',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Oldenburg',
'title_category' => 'innkeeper',
'region' => '1',
'place' => '2',
'quarter' => '9439',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Oldenburg',
'title_category' => 'innkeeper',
'region' => '1',
'place' => '2',
'quarter' => '9440',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Oldenburg',
'title_category' => 'innkeeper',
'region' => '1',
'place' => '2',
'quarter' => '9441',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Oldenburg',
'title_category' => 'innkeeper',
'region' => '1',
'place' => '2',
'quarter' => '9442',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hamburg',
'title_category' => 'innkeeper',
'region' => '1',
'place' => '3',
'quarter' => '9443',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hamburg',
'title_category' => 'innkeeper',
'region' => '1',
'place' => '3',
'quarter' => '9444',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hamburg',
'title_category' => 'innkeeper',
'region' => '1',
'place' => '3',
'quarter' => '9445',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hamburg',
'title_category' => 'innkeeper',
'region' => '1',
'place' => '3',
'quarter' => '9446',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Corvey',
'title_category' => 'innkeeper',
'region' => '1',
'place' => '4',
'quarter' => '9447',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Corvey',
'title_category' => 'innkeeper',
'region' => '1',
'place' => '4',
'quarter' => '9448',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Corvey',
'title_category' => 'innkeeper',
'region' => '1',
'place' => '4',
'quarter' => '9449',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Corvey',
'title_category' => 'innkeeper',
'region' => '1',
'place' => '4',
'quarter' => '9450',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Meissen',
'title_category' => 'innkeeper',
'region' => '2',
'place' => '5',
'quarter' => '9451',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Meissen',
'title_category' => 'innkeeper',
'region' => '2',
'place' => '5',
'quarter' => '9452',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Meissen',
'title_category' => 'innkeeper',
'region' => '2',
'place' => '5',
'quarter' => '9453',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Meissen',
'title_category' => 'innkeeper',
'region' => '2',
'place' => '5',
'quarter' => '9454',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dresden',
'title_category' => 'innkeeper',
'region' => '2',
'place' => '6',
'quarter' => '9455',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dresden',
'title_category' => 'innkeeper',
'region' => '2',
'place' => '6',
'quarter' => '9456',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dresden',
'title_category' => 'innkeeper',
'region' => '2',
'place' => '6',
'quarter' => '9457',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dresden',
'title_category' => 'innkeeper',
'region' => '2',
'place' => '6',
'quarter' => '9458',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Erfurt',
'title_category' => 'innkeeper',
'region' => '2',
'place' => '7',
'quarter' => '9459',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Erfurt',
'title_category' => 'innkeeper',
'region' => '2',
'place' => '7',
'quarter' => '9460',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Erfurt',
'title_category' => 'innkeeper',
'region' => '2',
'place' => '7',
'quarter' => '9461',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Erfurt',
'title_category' => 'innkeeper',
'region' => '2',
'place' => '7',
'quarter' => '9462',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chemnitz',
'title_category' => 'innkeeper',
'region' => '2',
'place' => '8',
'quarter' => '9463',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chemnitz',
'title_category' => 'innkeeper',
'region' => '2',
'place' => '8',
'quarter' => '9464',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chemnitz',
'title_category' => 'innkeeper',
'region' => '2',
'place' => '8',
'quarter' => '9465',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chemnitz',
'title_category' => 'innkeeper',
'region' => '2',
'place' => '8',
'quarter' => '9466',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Magdeburg',
'title_category' => 'innkeeper',
'region' => '3',
'place' => '9',
'quarter' => '9467',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Magdeburg',
'title_category' => 'innkeeper',
'region' => '3',
'place' => '9',
'quarter' => '9468',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Magdeburg',
'title_category' => 'innkeeper',
'region' => '3',
'place' => '9',
'quarter' => '9469',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Magdeburg',
'title_category' => 'innkeeper',
'region' => '3',
'place' => '9',
'quarter' => '9470',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Merseburg',
'title_category' => 'innkeeper',
'region' => '3',
'place' => '10',
'quarter' => '9471',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Merseburg',
'title_category' => 'innkeeper',
'region' => '3',
'place' => '10',
'quarter' => '9472',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Merseburg',
'title_category' => 'innkeeper',
'region' => '3',
'place' => '10',
'quarter' => '9473',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Merseburg',
'title_category' => 'innkeeper',
'region' => '3',
'place' => '10',
'quarter' => '9474',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Halberstadt',
'title_category' => 'innkeeper',
'region' => '3',
'place' => '11',
'quarter' => '9475',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Halberstadt',
'title_category' => 'innkeeper',
'region' => '3',
'place' => '11',
'quarter' => '9476',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Halberstadt',
'title_category' => 'innkeeper',
'region' => '3',
'place' => '11',
'quarter' => '9477',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Halberstadt',
'title_category' => 'innkeeper',
'region' => '3',
'place' => '11',
'quarter' => '9478',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gernrode',
'title_category' => 'innkeeper',
'region' => '3',
'place' => '12',
'quarter' => '9479',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gernrode',
'title_category' => 'innkeeper',
'region' => '3',
'place' => '12',
'quarter' => '9480',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gernrode',
'title_category' => 'innkeeper',
'region' => '3',
'place' => '12',
'quarter' => '9481',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gernrode',
'title_category' => 'innkeeper',
'region' => '3',
'place' => '12',
'quarter' => '9482',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Schwerin',
'title_category' => 'innkeeper',
'region' => '4',
'place' => '13',
'quarter' => '9483',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Schwerin',
'title_category' => 'innkeeper',
'region' => '4',
'place' => '13',
'quarter' => '9484',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Schwerin',
'title_category' => 'innkeeper',
'region' => '4',
'place' => '13',
'quarter' => '9485',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Schwerin',
'title_category' => 'innkeeper',
'region' => '4',
'place' => '13',
'quarter' => '9486',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rostock',
'title_category' => 'innkeeper',
'region' => '4',
'place' => '14',
'quarter' => '9487',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rostock',
'title_category' => 'innkeeper',
'region' => '4',
'place' => '14',
'quarter' => '9488',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rostock',
'title_category' => 'innkeeper',
'region' => '4',
'place' => '14',
'quarter' => '9489',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rostock',
'title_category' => 'innkeeper',
'region' => '4',
'place' => '14',
'quarter' => '9490',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lubeck',
'title_category' => 'innkeeper',
'region' => '4',
'place' => '15',
'quarter' => '9491',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lubeck',
'title_category' => 'innkeeper',
'region' => '4',
'place' => '15',
'quarter' => '9492',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lubeck',
'title_category' => 'innkeeper',
'region' => '4',
'place' => '15',
'quarter' => '9493',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lubeck',
'title_category' => 'innkeeper',
'region' => '4',
'place' => '15',
'quarter' => '9494',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Broda',
'title_category' => 'innkeeper',
'region' => '4',
'place' => '16',
'quarter' => '9495',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Broda',
'title_category' => 'innkeeper',
'region' => '4',
'place' => '16',
'quarter' => '9496',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Broda',
'title_category' => 'innkeeper',
'region' => '4',
'place' => '16',
'quarter' => '9497',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Broda',
'title_category' => 'innkeeper',
'region' => '4',
'place' => '16',
'quarter' => '9498',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Brandenburg',
'title_category' => 'innkeeper',
'region' => '5',
'place' => '17',
'quarter' => '9499',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Brandenburg',
'title_category' => 'innkeeper',
'region' => '5',
'place' => '17',
'quarter' => '9500',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Brandenburg',
'title_category' => 'innkeeper',
'region' => '5',
'place' => '17',
'quarter' => '9501',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Brandenburg',
'title_category' => 'innkeeper',
'region' => '5',
'place' => '17',
'quarter' => '9502',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Salzwedel',
'title_category' => 'innkeeper',
'region' => '5',
'place' => '18',
'quarter' => '9503',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Salzwedel',
'title_category' => 'innkeeper',
'region' => '5',
'place' => '18',
'quarter' => '9504',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Salzwedel',
'title_category' => 'innkeeper',
'region' => '5',
'place' => '18',
'quarter' => '9505',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Salzwedel',
'title_category' => 'innkeeper',
'region' => '5',
'place' => '18',
'quarter' => '9506',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Havelberg',
'title_category' => 'innkeeper',
'region' => '5',
'place' => '19',
'quarter' => '9507',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Havelberg',
'title_category' => 'innkeeper',
'region' => '5',
'place' => '19',
'quarter' => '9508',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Havelberg',
'title_category' => 'innkeeper',
'region' => '5',
'place' => '19',
'quarter' => '9509',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Havelberg',
'title_category' => 'innkeeper',
'region' => '5',
'place' => '19',
'quarter' => '9510',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lindow',
'title_category' => 'innkeeper',
'region' => '5',
'place' => '20',
'quarter' => '9511',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lindow',
'title_category' => 'innkeeper',
'region' => '5',
'place' => '20',
'quarter' => '9512',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lindow',
'title_category' => 'innkeeper',
'region' => '5',
'place' => '20',
'quarter' => '9513',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lindow',
'title_category' => 'innkeeper',
'region' => '5',
'place' => '20',
'quarter' => '9514',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Stettin',
'title_category' => 'innkeeper',
'region' => '6',
'place' => '21',
'quarter' => '9515',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Stettin',
'title_category' => 'innkeeper',
'region' => '6',
'place' => '21',
'quarter' => '9516',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Stettin',
'title_category' => 'innkeeper',
'region' => '6',
'place' => '21',
'quarter' => '9517',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Stettin',
'title_category' => 'innkeeper',
'region' => '6',
'place' => '21',
'quarter' => '9518',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Greifenberg',
'title_category' => 'innkeeper',
'region' => '6',
'place' => '22',
'quarter' => '9519',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Greifenberg',
'title_category' => 'innkeeper',
'region' => '6',
'place' => '22',
'quarter' => '9520',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Greifenberg',
'title_category' => 'innkeeper',
'region' => '6',
'place' => '22',
'quarter' => '9521',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Greifenberg',
'title_category' => 'innkeeper',
'region' => '6',
'place' => '22',
'quarter' => '9522',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kolberg',
'title_category' => 'innkeeper',
'region' => '6',
'place' => '23',
'quarter' => '9523',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kolberg',
'title_category' => 'innkeeper',
'region' => '6',
'place' => '23',
'quarter' => '9524',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kolberg',
'title_category' => 'innkeeper',
'region' => '6',
'place' => '23',
'quarter' => '9525',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kolberg',
'title_category' => 'innkeeper',
'region' => '6',
'place' => '23',
'quarter' => '9526',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Greifswald',
'title_category' => 'innkeeper',
'region' => '6',
'place' => '24',
'quarter' => '9527',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Greifswald',
'title_category' => 'innkeeper',
'region' => '6',
'place' => '24',
'quarter' => '9528',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Greifswald',
'title_category' => 'innkeeper',
'region' => '6',
'place' => '24',
'quarter' => '9529',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Greifswald',
'title_category' => 'innkeeper',
'region' => '6',
'place' => '24',
'quarter' => '9530',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Munster',
'title_category' => 'innkeeper',
'region' => '7',
'place' => '25',
'quarter' => '9531',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Munster',
'title_category' => 'innkeeper',
'region' => '7',
'place' => '25',
'quarter' => '9532',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Munster',
'title_category' => 'innkeeper',
'region' => '7',
'place' => '25',
'quarter' => '9533',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Munster',
'title_category' => 'innkeeper',
'region' => '7',
'place' => '25',
'quarter' => '9534',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bielefeld',
'title_category' => 'innkeeper',
'region' => '7',
'place' => '26',
'quarter' => '9535',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bielefeld',
'title_category' => 'innkeeper',
'region' => '7',
'place' => '26',
'quarter' => '9536',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bielefeld',
'title_category' => 'innkeeper',
'region' => '7',
'place' => '26',
'quarter' => '9537',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bielefeld',
'title_category' => 'innkeeper',
'region' => '7',
'place' => '26',
'quarter' => '9538',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Osnabruck',
'title_category' => 'innkeeper',
'region' => '7',
'place' => '27',
'quarter' => '9539',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Osnabruck',
'title_category' => 'innkeeper',
'region' => '7',
'place' => '27',
'quarter' => '9540',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Osnabruck',
'title_category' => 'innkeeper',
'region' => '7',
'place' => '27',
'quarter' => '9541',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Osnabruck',
'title_category' => 'innkeeper',
'region' => '7',
'place' => '27',
'quarter' => '9542',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Paderborn',
'title_category' => 'innkeeper',
'region' => '7',
'place' => '28',
'quarter' => '9543',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Paderborn',
'title_category' => 'innkeeper',
'region' => '7',
'place' => '28',
'quarter' => '9544',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Paderborn',
'title_category' => 'innkeeper',
'region' => '7',
'place' => '28',
'quarter' => '9545',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Paderborn',
'title_category' => 'innkeeper',
'region' => '7',
'place' => '28',
'quarter' => '9546',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Regensburg',
'title_category' => 'innkeeper',
'region' => '8',
'place' => '29',
'quarter' => '9547',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Regensburg',
'title_category' => 'innkeeper',
'region' => '8',
'place' => '29',
'quarter' => '9548',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Regensburg',
'title_category' => 'innkeeper',
'region' => '8',
'place' => '29',
'quarter' => '9549',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Regensburg',
'title_category' => 'innkeeper',
'region' => '8',
'place' => '29',
'quarter' => '9550',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Augsburg',
'title_category' => 'innkeeper',
'region' => '8',
'place' => '30',
'quarter' => '9551',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Augsburg',
'title_category' => 'innkeeper',
'region' => '8',
'place' => '30',
'quarter' => '9552',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Augsburg',
'title_category' => 'innkeeper',
'region' => '8',
'place' => '30',
'quarter' => '9553',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Augsburg',
'title_category' => 'innkeeper',
'region' => '8',
'place' => '30',
'quarter' => '9554',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Wurzburg',
'title_category' => 'innkeeper',
'region' => '8',
'place' => '31',
'quarter' => '9555',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Wurzburg',
'title_category' => 'innkeeper',
'region' => '8',
'place' => '31',
'quarter' => '9556',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Wurzburg',
'title_category' => 'innkeeper',
'region' => '8',
'place' => '31',
'quarter' => '9557',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Wurzburg',
'title_category' => 'innkeeper',
'region' => '8',
'place' => '31',
'quarter' => '9558',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nuremberg',
'title_category' => 'innkeeper',
'region' => '8',
'place' => '32',
'quarter' => '9559',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nuremberg',
'title_category' => 'innkeeper',
'region' => '8',
'place' => '32',
'quarter' => '9560',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nuremberg',
'title_category' => 'innkeeper',
'region' => '8',
'place' => '32',
'quarter' => '9561',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nuremberg',
'title_category' => 'innkeeper',
'region' => '8',
'place' => '32',
'quarter' => '9562',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Salzburg',
'title_category' => 'innkeeper',
'region' => '9',
'place' => '33',
'quarter' => '9563',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Salzburg',
'title_category' => 'innkeeper',
'region' => '9',
'place' => '33',
'quarter' => '9564',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Salzburg',
'title_category' => 'innkeeper',
'region' => '9',
'place' => '33',
'quarter' => '9565',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Salzburg',
'title_category' => 'innkeeper',
'region' => '9',
'place' => '33',
'quarter' => '9566',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hohenwerfen',
'title_category' => 'innkeeper',
'region' => '9',
'place' => '34',
'quarter' => '9567',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hohenwerfen',
'title_category' => 'innkeeper',
'region' => '9',
'place' => '34',
'quarter' => '9568',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hohenwerfen',
'title_category' => 'innkeeper',
'region' => '9',
'place' => '34',
'quarter' => '9569',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hohenwerfen',
'title_category' => 'innkeeper',
'region' => '9',
'place' => '34',
'quarter' => '9570',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hallstat',
'title_category' => 'innkeeper',
'region' => '9',
'place' => '35',
'quarter' => '9571',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hallstat',
'title_category' => 'innkeeper',
'region' => '9',
'place' => '35',
'quarter' => '9572',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hallstat',
'title_category' => 'innkeeper',
'region' => '9',
'place' => '35',
'quarter' => '9573',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hallstat',
'title_category' => 'innkeeper',
'region' => '9',
'place' => '35',
'quarter' => '9574',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Berchtesgaden',
'title_category' => 'innkeeper',
'region' => '9',
'place' => '36',
'quarter' => '9575',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Berchtesgaden',
'title_category' => 'innkeeper',
'region' => '9',
'place' => '36',
'quarter' => '9576',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Berchtesgaden',
'title_category' => 'innkeeper',
'region' => '9',
'place' => '36',
'quarter' => '9577',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Berchtesgaden',
'title_category' => 'innkeeper',
'region' => '9',
'place' => '36',
'quarter' => '9578',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vienna',
'title_category' => 'innkeeper',
'region' => '10',
'place' => '37',
'quarter' => '9579',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vienna',
'title_category' => 'innkeeper',
'region' => '10',
'place' => '37',
'quarter' => '9580',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vienna',
'title_category' => 'innkeeper',
'region' => '10',
'place' => '37',
'quarter' => '9581',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vienna',
'title_category' => 'innkeeper',
'region' => '10',
'place' => '37',
'quarter' => '9582',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Schaunberg',
'title_category' => 'innkeeper',
'region' => '10',
'place' => '38',
'quarter' => '9583',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Schaunberg',
'title_category' => 'innkeeper',
'region' => '10',
'place' => '38',
'quarter' => '9584',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Schaunberg',
'title_category' => 'innkeeper',
'region' => '10',
'place' => '38',
'quarter' => '9585',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Schaunberg',
'title_category' => 'innkeeper',
'region' => '10',
'place' => '38',
'quarter' => '9586',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sankt Polten',
'title_category' => 'innkeeper',
'region' => '10',
'place' => '39',
'quarter' => '9587',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sankt Polten',
'title_category' => 'innkeeper',
'region' => '10',
'place' => '39',
'quarter' => '9588',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sankt Polten',
'title_category' => 'innkeeper',
'region' => '10',
'place' => '39',
'quarter' => '9589',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sankt Polten',
'title_category' => 'innkeeper',
'region' => '10',
'place' => '39',
'quarter' => '9590',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pressburg',
'title_category' => 'innkeeper',
'region' => '10',
'place' => '40',
'quarter' => '9591',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pressburg',
'title_category' => 'innkeeper',
'region' => '10',
'place' => '40',
'quarter' => '9592',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pressburg',
'title_category' => 'innkeeper',
'region' => '10',
'place' => '40',
'quarter' => '9593',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pressburg',
'title_category' => 'innkeeper',
'region' => '10',
'place' => '40',
'quarter' => '9594',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Graz',
'title_category' => 'innkeeper',
'region' => '11',
'place' => '41',
'quarter' => '9595',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Graz',
'title_category' => 'innkeeper',
'region' => '11',
'place' => '41',
'quarter' => '9596',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Graz',
'title_category' => 'innkeeper',
'region' => '11',
'place' => '41',
'quarter' => '9597',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Graz',
'title_category' => 'innkeeper',
'region' => '11',
'place' => '41',
'quarter' => '9598',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hohenwang',
'title_category' => 'innkeeper',
'region' => '11',
'place' => '42',
'quarter' => '9599',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hohenwang',
'title_category' => 'innkeeper',
'region' => '11',
'place' => '42',
'quarter' => '9600',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hohenwang',
'title_category' => 'innkeeper',
'region' => '11',
'place' => '42',
'quarter' => '9601',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hohenwang',
'title_category' => 'innkeeper',
'region' => '11',
'place' => '42',
'quarter' => '9602',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Styraburg',
'title_category' => 'innkeeper',
'region' => '11',
'place' => '43',
'quarter' => '9603',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Styraburg',
'title_category' => 'innkeeper',
'region' => '11',
'place' => '43',
'quarter' => '9604',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Styraburg',
'title_category' => 'innkeeper',
'region' => '11',
'place' => '43',
'quarter' => '9605',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Styraburg',
'title_category' => 'innkeeper',
'region' => '11',
'place' => '43',
'quarter' => '9606',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Seckau',
'title_category' => 'innkeeper',
'region' => '11',
'place' => '44',
'quarter' => '9607',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Seckau',
'title_category' => 'innkeeper',
'region' => '11',
'place' => '44',
'quarter' => '9608',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Seckau',
'title_category' => 'innkeeper',
'region' => '11',
'place' => '44',
'quarter' => '9609',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Seckau',
'title_category' => 'innkeeper',
'region' => '11',
'place' => '44',
'quarter' => '9610',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Innsbruck',
'title_category' => 'innkeeper',
'region' => '12',
'place' => '45',
'quarter' => '9611',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Innsbruck',
'title_category' => 'innkeeper',
'region' => '12',
'place' => '45',
'quarter' => '9612',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Innsbruck',
'title_category' => 'innkeeper',
'region' => '12',
'place' => '45',
'quarter' => '9613',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Innsbruck',
'title_category' => 'innkeeper',
'region' => '12',
'place' => '45',
'quarter' => '9614',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bozen',
'title_category' => 'innkeeper',
'region' => '12',
'place' => '46',
'quarter' => '9615',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bozen',
'title_category' => 'innkeeper',
'region' => '12',
'place' => '46',
'quarter' => '9616',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bozen',
'title_category' => 'innkeeper',
'region' => '12',
'place' => '46',
'quarter' => '9617',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bozen',
'title_category' => 'innkeeper',
'region' => '12',
'place' => '46',
'quarter' => '9618',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Trent',
'title_category' => 'innkeeper',
'region' => '12',
'place' => '47',
'quarter' => '9619',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Trent',
'title_category' => 'innkeeper',
'region' => '12',
'place' => '47',
'quarter' => '9620',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Trent',
'title_category' => 'innkeeper',
'region' => '12',
'place' => '47',
'quarter' => '9621',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Trent',
'title_category' => 'innkeeper',
'region' => '12',
'place' => '47',
'quarter' => '9622',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Brixen',
'title_category' => 'innkeeper',
'region' => '12',
'place' => '48',
'quarter' => '9623',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Brixen',
'title_category' => 'innkeeper',
'region' => '12',
'place' => '48',
'quarter' => '9624',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Brixen',
'title_category' => 'innkeeper',
'region' => '12',
'place' => '48',
'quarter' => '9625',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Brixen',
'title_category' => 'innkeeper',
'region' => '12',
'place' => '48',
'quarter' => '9626',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ulm',
'title_category' => 'innkeeper',
'region' => '13',
'place' => '49',
'quarter' => '9627',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ulm',
'title_category' => 'innkeeper',
'region' => '13',
'place' => '49',
'quarter' => '9628',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ulm',
'title_category' => 'innkeeper',
'region' => '13',
'place' => '49',
'quarter' => '9629',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ulm',
'title_category' => 'innkeeper',
'region' => '13',
'place' => '49',
'quarter' => '9630',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hohenzollern',
'title_category' => 'innkeeper',
'region' => '13',
'place' => '50',
'quarter' => '9631',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hohenzollern',
'title_category' => 'innkeeper',
'region' => '13',
'place' => '50',
'quarter' => '9632',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hohenzollern',
'title_category' => 'innkeeper',
'region' => '13',
'place' => '50',
'quarter' => '9633',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hohenzollern',
'title_category' => 'innkeeper',
'region' => '13',
'place' => '50',
'quarter' => '9634',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Freiburg',
'title_category' => 'innkeeper',
'region' => '13',
'place' => '51',
'quarter' => '9635',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Freiburg',
'title_category' => 'innkeeper',
'region' => '13',
'place' => '51',
'quarter' => '9636',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Freiburg',
'title_category' => 'innkeeper',
'region' => '13',
'place' => '51',
'quarter' => '9637',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Freiburg',
'title_category' => 'innkeeper',
'region' => '13',
'place' => '51',
'quarter' => '9638',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hohenstaufen',
'title_category' => 'innkeeper',
'region' => '13',
'place' => '52',
'quarter' => '9639',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hohenstaufen',
'title_category' => 'innkeeper',
'region' => '13',
'place' => '52',
'quarter' => '9640',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hohenstaufen',
'title_category' => 'innkeeper',
'region' => '13',
'place' => '52',
'quarter' => '9641',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hohenstaufen',
'title_category' => 'innkeeper',
'region' => '13',
'place' => '52',
'quarter' => '9642',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bern',
'title_category' => 'innkeeper',
'region' => '14',
'place' => '53',
'quarter' => '9643',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bern',
'title_category' => 'innkeeper',
'region' => '14',
'place' => '53',
'quarter' => '9644',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bern',
'title_category' => 'innkeeper',
'region' => '14',
'place' => '53',
'quarter' => '9645',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bern',
'title_category' => 'innkeeper',
'region' => '14',
'place' => '53',
'quarter' => '9646',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zurich',
'title_category' => 'innkeeper',
'region' => '14',
'place' => '54',
'quarter' => '9647',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zurich',
'title_category' => 'innkeeper',
'region' => '14',
'place' => '54',
'quarter' => '9648',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zurich',
'title_category' => 'innkeeper',
'region' => '14',
'place' => '54',
'quarter' => '9649',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zurich',
'title_category' => 'innkeeper',
'region' => '14',
'place' => '54',
'quarter' => '9650',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Basel',
'title_category' => 'innkeeper',
'region' => '14',
'place' => '55',
'quarter' => '9651',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Basel',
'title_category' => 'innkeeper',
'region' => '14',
'place' => '55',
'quarter' => '9652',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Basel',
'title_category' => 'innkeeper',
'region' => '14',
'place' => '55',
'quarter' => '9653',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Basel',
'title_category' => 'innkeeper',
'region' => '14',
'place' => '55',
'quarter' => '9654',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sankt Gallen',
'title_category' => 'innkeeper',
'region' => '14',
'place' => '56',
'quarter' => '9655',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sankt Gallen',
'title_category' => 'innkeeper',
'region' => '14',
'place' => '56',
'quarter' => '9656',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sankt Gallen',
'title_category' => 'innkeeper',
'region' => '14',
'place' => '56',
'quarter' => '9657',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sankt Gallen',
'title_category' => 'innkeeper',
'region' => '14',
'place' => '56',
'quarter' => '9658',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hagenau',
'title_category' => 'innkeeper',
'region' => '15',
'place' => '57',
'quarter' => '9659',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hagenau',
'title_category' => 'innkeeper',
'region' => '15',
'place' => '57',
'quarter' => '9660',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hagenau',
'title_category' => 'innkeeper',
'region' => '15',
'place' => '57',
'quarter' => '9661',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hagenau',
'title_category' => 'innkeeper',
'region' => '15',
'place' => '57',
'quarter' => '9662',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Colmar',
'title_category' => 'innkeeper',
'region' => '15',
'place' => '58',
'quarter' => '9663',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Colmar',
'title_category' => 'innkeeper',
'region' => '15',
'place' => '58',
'quarter' => '9664',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Colmar',
'title_category' => 'innkeeper',
'region' => '15',
'place' => '58',
'quarter' => '9665',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Colmar',
'title_category' => 'innkeeper',
'region' => '15',
'place' => '58',
'quarter' => '9666',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Strassbourg',
'title_category' => 'innkeeper',
'region' => '15',
'place' => '59',
'quarter' => '9667',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Strassbourg',
'title_category' => 'innkeeper',
'region' => '15',
'place' => '59',
'quarter' => '9668',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Strassbourg',
'title_category' => 'innkeeper',
'region' => '15',
'place' => '59',
'quarter' => '9669',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Strassbourg',
'title_category' => 'innkeeper',
'region' => '15',
'place' => '59',
'quarter' => '9670',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Wissembourg',
'title_category' => 'innkeeper',
'region' => '15',
'place' => '60',
'quarter' => '9671',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Wissembourg',
'title_category' => 'innkeeper',
'region' => '15',
'place' => '60',
'quarter' => '9672',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Wissembourg',
'title_category' => 'innkeeper',
'region' => '15',
'place' => '60',
'quarter' => '9673',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Wissembourg',
'title_category' => 'innkeeper',
'region' => '15',
'place' => '60',
'quarter' => '9674',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Prague',
'title_category' => 'innkeeper',
'region' => '16',
'place' => '61',
'quarter' => '9675',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Prague',
'title_category' => 'innkeeper',
'region' => '16',
'place' => '61',
'quarter' => '9676',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Prague',
'title_category' => 'innkeeper',
'region' => '16',
'place' => '61',
'quarter' => '9677',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Prague',
'title_category' => 'innkeeper',
'region' => '16',
'place' => '61',
'quarter' => '9678',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Karlstein',
'title_category' => 'innkeeper',
'region' => '16',
'place' => '62',
'quarter' => '9679',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Karlstein',
'title_category' => 'innkeeper',
'region' => '16',
'place' => '62',
'quarter' => '9680',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Karlstein',
'title_category' => 'innkeeper',
'region' => '16',
'place' => '62',
'quarter' => '9681',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Karlstein',
'title_category' => 'innkeeper',
'region' => '16',
'place' => '62',
'quarter' => '9682',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pilsen',
'title_category' => 'innkeeper',
'region' => '16',
'place' => '63',
'quarter' => '9683',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pilsen',
'title_category' => 'innkeeper',
'region' => '16',
'place' => '63',
'quarter' => '9684',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pilsen',
'title_category' => 'innkeeper',
'region' => '16',
'place' => '63',
'quarter' => '9685',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pilsen',
'title_category' => 'innkeeper',
'region' => '16',
'place' => '63',
'quarter' => '9686',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Plass',
'title_category' => 'innkeeper',
'region' => '16',
'place' => '64',
'quarter' => '9687',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Plass',
'title_category' => 'innkeeper',
'region' => '16',
'place' => '64',
'quarter' => '9688',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Plass',
'title_category' => 'innkeeper',
'region' => '16',
'place' => '64',
'quarter' => '9689',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Plass',
'title_category' => 'innkeeper',
'region' => '16',
'place' => '64',
'quarter' => '9690',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Brunn',
'title_category' => 'innkeeper',
'region' => '17',
'place' => '65',
'quarter' => '9691',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Brunn',
'title_category' => 'innkeeper',
'region' => '17',
'place' => '65',
'quarter' => '9692',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Brunn',
'title_category' => 'innkeeper',
'region' => '17',
'place' => '65',
'quarter' => '9693',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Brunn',
'title_category' => 'innkeeper',
'region' => '17',
'place' => '65',
'quarter' => '9694',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zlin',
'title_category' => 'innkeeper',
'region' => '17',
'place' => '66',
'quarter' => '9695',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zlin',
'title_category' => 'innkeeper',
'region' => '17',
'place' => '66',
'quarter' => '9696',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zlin',
'title_category' => 'innkeeper',
'region' => '17',
'place' => '66',
'quarter' => '9697',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zlin',
'title_category' => 'innkeeper',
'region' => '17',
'place' => '66',
'quarter' => '9698',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Olmutz',
'title_category' => 'innkeeper',
'region' => '17',
'place' => '67',
'quarter' => '9699',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Olmutz',
'title_category' => 'innkeeper',
'region' => '17',
'place' => '67',
'quarter' => '9700',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Olmutz',
'title_category' => 'innkeeper',
'region' => '17',
'place' => '67',
'quarter' => '9701',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Olmutz',
'title_category' => 'innkeeper',
'region' => '17',
'place' => '67',
'quarter' => '9702',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Trebitz',
'title_category' => 'innkeeper',
'region' => '17',
'place' => '68',
'quarter' => '9703',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Trebitz',
'title_category' => 'innkeeper',
'region' => '17',
'place' => '68',
'quarter' => '9704',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Trebitz',
'title_category' => 'innkeeper',
'region' => '17',
'place' => '68',
'quarter' => '9705',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Trebitz',
'title_category' => 'innkeeper',
'region' => '17',
'place' => '68',
'quarter' => '9706',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mainz',
'title_category' => 'innkeeper',
'region' => '18',
'place' => '69',
'quarter' => '9707',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mainz',
'title_category' => 'innkeeper',
'region' => '18',
'place' => '69',
'quarter' => '9708',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mainz',
'title_category' => 'innkeeper',
'region' => '18',
'place' => '69',
'quarter' => '9709',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mainz',
'title_category' => 'innkeeper',
'region' => '18',
'place' => '69',
'quarter' => '9710',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Heidelberg',
'title_category' => 'innkeeper',
'region' => '18',
'place' => '70',
'quarter' => '9711',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Heidelberg',
'title_category' => 'innkeeper',
'region' => '18',
'place' => '70',
'quarter' => '9712',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Heidelberg',
'title_category' => 'innkeeper',
'region' => '18',
'place' => '70',
'quarter' => '9713',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Heidelberg',
'title_category' => 'innkeeper',
'region' => '18',
'place' => '70',
'quarter' => '9714',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Frankfurt',
'title_category' => 'innkeeper',
'region' => '18',
'place' => '71',
'quarter' => '9715',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Frankfurt',
'title_category' => 'innkeeper',
'region' => '18',
'place' => '71',
'quarter' => '9716',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Frankfurt',
'title_category' => 'innkeeper',
'region' => '18',
'place' => '71',
'quarter' => '9717',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Frankfurt',
'title_category' => 'innkeeper',
'region' => '18',
'place' => '71',
'quarter' => '9718',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Fulda',
'title_category' => 'innkeeper',
'region' => '18',
'place' => '72',
'quarter' => '9719',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Fulda',
'title_category' => 'innkeeper',
'region' => '18',
'place' => '72',
'quarter' => '9720',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Fulda',
'title_category' => 'innkeeper',
'region' => '18',
'place' => '72',
'quarter' => '9721',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Fulda',
'title_category' => 'innkeeper',
'region' => '18',
'place' => '72',
'quarter' => '9722',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cologne',
'title_category' => 'innkeeper',
'region' => '19',
'place' => '73',
'quarter' => '9723',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cologne',
'title_category' => 'innkeeper',
'region' => '19',
'place' => '73',
'quarter' => '9724',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cologne',
'title_category' => 'innkeeper',
'region' => '19',
'place' => '73',
'quarter' => '9725',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cologne',
'title_category' => 'innkeeper',
'region' => '19',
'place' => '73',
'quarter' => '9726',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aachen',
'title_category' => 'innkeeper',
'region' => '19',
'place' => '74',
'quarter' => '9727',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aachen',
'title_category' => 'innkeeper',
'region' => '19',
'place' => '74',
'quarter' => '9728',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aachen',
'title_category' => 'innkeeper',
'region' => '19',
'place' => '74',
'quarter' => '9729',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aachen',
'title_category' => 'innkeeper',
'region' => '19',
'place' => '74',
'quarter' => '9730',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Liege',
'title_category' => 'innkeeper',
'region' => '19',
'place' => '75',
'quarter' => '9731',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Liege',
'title_category' => 'innkeeper',
'region' => '19',
'place' => '75',
'quarter' => '9732',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Liege',
'title_category' => 'innkeeper',
'region' => '19',
'place' => '75',
'quarter' => '9733',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Liege',
'title_category' => 'innkeeper',
'region' => '19',
'place' => '75',
'quarter' => '9734',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Stavelot',
'title_category' => 'innkeeper',
'region' => '19',
'place' => '76',
'quarter' => '9735',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Stavelot',
'title_category' => 'innkeeper',
'region' => '19',
'place' => '76',
'quarter' => '9736',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Stavelot',
'title_category' => 'innkeeper',
'region' => '19',
'place' => '76',
'quarter' => '9737',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Stavelot',
'title_category' => 'innkeeper',
'region' => '19',
'place' => '76',
'quarter' => '9738',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Trier',
'title_category' => 'innkeeper',
'region' => '20',
'place' => '77',
'quarter' => '9739',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Trier',
'title_category' => 'innkeeper',
'region' => '20',
'place' => '77',
'quarter' => '9740',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Trier',
'title_category' => 'innkeeper',
'region' => '20',
'place' => '77',
'quarter' => '9741',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Trier',
'title_category' => 'innkeeper',
'region' => '20',
'place' => '77',
'quarter' => '9742',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Luxembourg',
'title_category' => 'innkeeper',
'region' => '20',
'place' => '78',
'quarter' => '9743',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Luxembourg',
'title_category' => 'innkeeper',
'region' => '20',
'place' => '78',
'quarter' => '9744',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Luxembourg',
'title_category' => 'innkeeper',
'region' => '20',
'place' => '78',
'quarter' => '9745',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Luxembourg',
'title_category' => 'innkeeper',
'region' => '20',
'place' => '78',
'quarter' => '9746',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Metz',
'title_category' => 'innkeeper',
'region' => '20',
'place' => '79',
'quarter' => '9747',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Metz',
'title_category' => 'innkeeper',
'region' => '20',
'place' => '79',
'quarter' => '9748',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Metz',
'title_category' => 'innkeeper',
'region' => '20',
'place' => '79',
'quarter' => '9749',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Metz',
'title_category' => 'innkeeper',
'region' => '20',
'place' => '79',
'quarter' => '9750',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pruem',
'title_category' => 'innkeeper',
'region' => '20',
'place' => '80',
'quarter' => '9751',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pruem',
'title_category' => 'innkeeper',
'region' => '20',
'place' => '80',
'quarter' => '9752',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pruem',
'title_category' => 'innkeeper',
'region' => '20',
'place' => '80',
'quarter' => '9753',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pruem',
'title_category' => 'innkeeper',
'region' => '20',
'place' => '80',
'quarter' => '9754',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Guelders',
'title_category' => 'innkeeper',
'region' => '21',
'place' => '81',
'quarter' => '9755',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Guelders',
'title_category' => 'innkeeper',
'region' => '21',
'place' => '81',
'quarter' => '9756',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Guelders',
'title_category' => 'innkeeper',
'region' => '21',
'place' => '81',
'quarter' => '9757',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Guelders',
'title_category' => 'innkeeper',
'region' => '21',
'place' => '81',
'quarter' => '9758',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zutphen',
'title_category' => 'innkeeper',
'region' => '21',
'place' => '82',
'quarter' => '9759',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zutphen',
'title_category' => 'innkeeper',
'region' => '21',
'place' => '82',
'quarter' => '9760',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zutphen',
'title_category' => 'innkeeper',
'region' => '21',
'place' => '82',
'quarter' => '9761',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zutphen',
'title_category' => 'innkeeper',
'region' => '21',
'place' => '82',
'quarter' => '9762',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nimeguen',
'title_category' => 'innkeeper',
'region' => '21',
'place' => '83',
'quarter' => '9763',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nimeguen',
'title_category' => 'innkeeper',
'region' => '21',
'place' => '83',
'quarter' => '9764',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nimeguen',
'title_category' => 'innkeeper',
'region' => '21',
'place' => '83',
'quarter' => '9765',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nimeguen',
'title_category' => 'innkeeper',
'region' => '21',
'place' => '83',
'quarter' => '9766',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Deventer',
'title_category' => 'innkeeper',
'region' => '21',
'place' => '84',
'quarter' => '9767',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Deventer',
'title_category' => 'innkeeper',
'region' => '21',
'place' => '84',
'quarter' => '9768',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Deventer',
'title_category' => 'innkeeper',
'region' => '21',
'place' => '84',
'quarter' => '9769',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Deventer',
'title_category' => 'innkeeper',
'region' => '21',
'place' => '84',
'quarter' => '9770',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dorestad',
'title_category' => 'innkeeper',
'region' => '22',
'place' => '85',
'quarter' => '9771',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dorestad',
'title_category' => 'innkeeper',
'region' => '22',
'place' => '85',
'quarter' => '9772',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dorestad',
'title_category' => 'innkeeper',
'region' => '22',
'place' => '85',
'quarter' => '9773',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dorestad',
'title_category' => 'innkeeper',
'region' => '22',
'place' => '85',
'quarter' => '9774',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gouda',
'title_category' => 'innkeeper',
'region' => '22',
'place' => '86',
'quarter' => '9775',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gouda',
'title_category' => 'innkeeper',
'region' => '22',
'place' => '86',
'quarter' => '9776',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gouda',
'title_category' => 'innkeeper',
'region' => '22',
'place' => '86',
'quarter' => '9777',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gouda',
'title_category' => 'innkeeper',
'region' => '22',
'place' => '86',
'quarter' => '9778',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Utrecht',
'title_category' => 'innkeeper',
'region' => '22',
'place' => '87',
'quarter' => '9779',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Utrecht',
'title_category' => 'innkeeper',
'region' => '22',
'place' => '87',
'quarter' => '9780',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Utrecht',
'title_category' => 'innkeeper',
'region' => '22',
'place' => '87',
'quarter' => '9781',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Utrecht',
'title_category' => 'innkeeper',
'region' => '22',
'place' => '87',
'quarter' => '9782',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Amsterdam',
'title_category' => 'innkeeper',
'region' => '22',
'place' => '88',
'quarter' => '9783',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Amsterdam',
'title_category' => 'innkeeper',
'region' => '22',
'place' => '88',
'quarter' => '9784',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Amsterdam',
'title_category' => 'innkeeper',
'region' => '22',
'place' => '88',
'quarter' => '9785',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Amsterdam',
'title_category' => 'innkeeper',
'region' => '22',
'place' => '88',
'quarter' => '9786',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sneek',
'title_category' => 'innkeeper',
'region' => '23',
'place' => '89',
'quarter' => '9787',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sneek',
'title_category' => 'innkeeper',
'region' => '23',
'place' => '89',
'quarter' => '9788',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sneek',
'title_category' => 'innkeeper',
'region' => '23',
'place' => '89',
'quarter' => '9789',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sneek',
'title_category' => 'innkeeper',
'region' => '23',
'place' => '89',
'quarter' => '9790',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Emden',
'title_category' => 'innkeeper',
'region' => '23',
'place' => '90',
'quarter' => '9791',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Emden',
'title_category' => 'innkeeper',
'region' => '23',
'place' => '90',
'quarter' => '9792',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Emden',
'title_category' => 'innkeeper',
'region' => '23',
'place' => '90',
'quarter' => '9793',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Emden',
'title_category' => 'innkeeper',
'region' => '23',
'place' => '90',
'quarter' => '9794',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Groningen',
'title_category' => 'innkeeper',
'region' => '23',
'place' => '91',
'quarter' => '9795',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Groningen',
'title_category' => 'innkeeper',
'region' => '23',
'place' => '91',
'quarter' => '9796',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Groningen',
'title_category' => 'innkeeper',
'region' => '23',
'place' => '91',
'quarter' => '9797',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Groningen',
'title_category' => 'innkeeper',
'region' => '23',
'place' => '91',
'quarter' => '9798',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dokkum',
'title_category' => 'innkeeper',
'region' => '23',
'place' => '92',
'quarter' => '9799',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dokkum',
'title_category' => 'innkeeper',
'region' => '23',
'place' => '92',
'quarter' => '9800',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dokkum',
'title_category' => 'innkeeper',
'region' => '23',
'place' => '92',
'quarter' => '9801',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dokkum',
'title_category' => 'innkeeper',
'region' => '23',
'place' => '92',
'quarter' => '9802',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Louvain',
'title_category' => 'innkeeper',
'region' => '24',
'place' => '93',
'quarter' => '9803',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Louvain',
'title_category' => 'innkeeper',
'region' => '24',
'place' => '93',
'quarter' => '9804',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Louvain',
'title_category' => 'innkeeper',
'region' => '24',
'place' => '93',
'quarter' => '9805',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Louvain',
'title_category' => 'innkeeper',
'region' => '24',
'place' => '93',
'quarter' => '9806',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Breda',
'title_category' => 'innkeeper',
'region' => '24',
'place' => '94',
'quarter' => '9807',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Breda',
'title_category' => 'innkeeper',
'region' => '24',
'place' => '94',
'quarter' => '9808',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Breda',
'title_category' => 'innkeeper',
'region' => '24',
'place' => '94',
'quarter' => '9809',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Breda',
'title_category' => 'innkeeper',
'region' => '24',
'place' => '94',
'quarter' => '9810',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Antwerp',
'title_category' => 'innkeeper',
'region' => '24',
'place' => '95',
'quarter' => '9811',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Antwerp',
'title_category' => 'innkeeper',
'region' => '24',
'place' => '95',
'quarter' => '9812',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Antwerp',
'title_category' => 'innkeeper',
'region' => '24',
'place' => '95',
'quarter' => '9813',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Antwerp',
'title_category' => 'innkeeper',
'region' => '24',
'place' => '95',
'quarter' => '9814',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Thorn',
'title_category' => 'innkeeper',
'region' => '24',
'place' => '96',
'quarter' => '9815',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Thorn',
'title_category' => 'innkeeper',
'region' => '24',
'place' => '96',
'quarter' => '9816',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Thorn',
'title_category' => 'innkeeper',
'region' => '24',
'place' => '96',
'quarter' => '9817',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Thorn',
'title_category' => 'innkeeper',
'region' => '24',
'place' => '96',
'quarter' => '9818',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bruges',
'title_category' => 'innkeeper',
'region' => '25',
'place' => '97',
'quarter' => '9819',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bruges',
'title_category' => 'innkeeper',
'region' => '25',
'place' => '97',
'quarter' => '9820',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bruges',
'title_category' => 'innkeeper',
'region' => '25',
'place' => '97',
'quarter' => '9821',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bruges',
'title_category' => 'innkeeper',
'region' => '25',
'place' => '97',
'quarter' => '9822',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ghent',
'title_category' => 'innkeeper',
'region' => '25',
'place' => '98',
'quarter' => '9823',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ghent',
'title_category' => 'innkeeper',
'region' => '25',
'place' => '98',
'quarter' => '9824',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ghent',
'title_category' => 'innkeeper',
'region' => '25',
'place' => '98',
'quarter' => '9825',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ghent',
'title_category' => 'innkeeper',
'region' => '25',
'place' => '98',
'quarter' => '9826',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cambrai',
'title_category' => 'innkeeper',
'region' => '25',
'place' => '99',
'quarter' => '9827',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cambrai',
'title_category' => 'innkeeper',
'region' => '25',
'place' => '99',
'quarter' => '9828',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cambrai',
'title_category' => 'innkeeper',
'region' => '25',
'place' => '99',
'quarter' => '9829',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cambrai',
'title_category' => 'innkeeper',
'region' => '25',
'place' => '99',
'quarter' => '9830',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ypres',
'title_category' => 'innkeeper',
'region' => '25',
'place' => '100',
'quarter' => '9831',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ypres',
'title_category' => 'innkeeper',
'region' => '25',
'place' => '100',
'quarter' => '9832',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ypres',
'title_category' => 'innkeeper',
'region' => '25',
'place' => '100',
'quarter' => '9833',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ypres',
'title_category' => 'innkeeper',
'region' => '25',
'place' => '100',
'quarter' => '9834',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Klagenfurt',
'title_category' => 'innkeeper',
'region' => '26',
'place' => '101',
'quarter' => '9835',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Klagenfurt',
'title_category' => 'innkeeper',
'region' => '26',
'place' => '101',
'quarter' => '9836',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Klagenfurt',
'title_category' => 'innkeeper',
'region' => '26',
'place' => '101',
'quarter' => '9837',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Klagenfurt',
'title_category' => 'innkeeper',
'region' => '26',
'place' => '101',
'quarter' => '9838',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Treffen',
'title_category' => 'innkeeper',
'region' => '26',
'place' => '102',
'quarter' => '9839',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Treffen',
'title_category' => 'innkeeper',
'region' => '26',
'place' => '102',
'quarter' => '9840',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Treffen',
'title_category' => 'innkeeper',
'region' => '26',
'place' => '102',
'quarter' => '9841',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Treffen',
'title_category' => 'innkeeper',
'region' => '26',
'place' => '102',
'quarter' => '9842',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gorizia',
'title_category' => 'innkeeper',
'region' => '26',
'place' => '103',
'quarter' => '9843',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gorizia',
'title_category' => 'innkeeper',
'region' => '26',
'place' => '103',
'quarter' => '9844',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gorizia',
'title_category' => 'innkeeper',
'region' => '26',
'place' => '103',
'quarter' => '9845',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gorizia',
'title_category' => 'innkeeper',
'region' => '26',
'place' => '103',
'quarter' => '9846',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Moosburg',
'title_category' => 'innkeeper',
'region' => '26',
'place' => '104',
'quarter' => '9847',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Moosburg',
'title_category' => 'innkeeper',
'region' => '26',
'place' => '104',
'quarter' => '9848',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Moosburg',
'title_category' => 'innkeeper',
'region' => '26',
'place' => '104',
'quarter' => '9849',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Moosburg',
'title_category' => 'innkeeper',
'region' => '26',
'place' => '104',
'quarter' => '9850',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Krainburg',
'title_category' => 'innkeeper',
'region' => '27',
'place' => '105',
'quarter' => '9851',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Krainburg',
'title_category' => 'innkeeper',
'region' => '27',
'place' => '105',
'quarter' => '9852',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Krainburg',
'title_category' => 'innkeeper',
'region' => '27',
'place' => '105',
'quarter' => '9853',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Krainburg',
'title_category' => 'innkeeper',
'region' => '27',
'place' => '105',
'quarter' => '9854',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Heunburg',
'title_category' => 'innkeeper',
'region' => '27',
'place' => '106',
'quarter' => '9855',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Heunburg',
'title_category' => 'innkeeper',
'region' => '27',
'place' => '106',
'quarter' => '9856',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Heunburg',
'title_category' => 'innkeeper',
'region' => '27',
'place' => '106',
'quarter' => '9857',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Heunburg',
'title_category' => 'innkeeper',
'region' => '27',
'place' => '106',
'quarter' => '9858',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Laibach',
'title_category' => 'innkeeper',
'region' => '27',
'place' => '107',
'quarter' => '9859',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Laibach',
'title_category' => 'innkeeper',
'region' => '27',
'place' => '107',
'quarter' => '9860',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Laibach',
'title_category' => 'innkeeper',
'region' => '27',
'place' => '107',
'quarter' => '9861',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Laibach',
'title_category' => 'innkeeper',
'region' => '27',
'place' => '107',
'quarter' => '9862',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sittich',
'title_category' => 'innkeeper',
'region' => '27',
'place' => '108',
'quarter' => '9863',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sittich',
'title_category' => 'innkeeper',
'region' => '27',
'place' => '108',
'quarter' => '9864',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sittich',
'title_category' => 'innkeeper',
'region' => '27',
'place' => '108',
'quarter' => '9865',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sittich',
'title_category' => 'innkeeper',
'region' => '27',
'place' => '108',
'quarter' => '9866',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vannes',
'title_category' => 'innkeeper',
'region' => '28',
'place' => '109',
'quarter' => '9867',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vannes',
'title_category' => 'innkeeper',
'region' => '28',
'place' => '109',
'quarter' => '9868',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vannes',
'title_category' => 'innkeeper',
'region' => '28',
'place' => '109',
'quarter' => '9869',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vannes',
'title_category' => 'innkeeper',
'region' => '28',
'place' => '109',
'quarter' => '9870',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rohan',
'title_category' => 'innkeeper',
'region' => '28',
'place' => '110',
'quarter' => '9871',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rohan',
'title_category' => 'innkeeper',
'region' => '28',
'place' => '110',
'quarter' => '9872',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rohan',
'title_category' => 'innkeeper',
'region' => '28',
'place' => '110',
'quarter' => '9873',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rohan',
'title_category' => 'innkeeper',
'region' => '28',
'place' => '110',
'quarter' => '9874',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Quimper',
'title_category' => 'innkeeper',
'region' => '28',
'place' => '111',
'quarter' => '9875',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Quimper',
'title_category' => 'innkeeper',
'region' => '28',
'place' => '111',
'quarter' => '9876',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Quimper',
'title_category' => 'innkeeper',
'region' => '28',
'place' => '111',
'quarter' => '9877',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Quimper',
'title_category' => 'innkeeper',
'region' => '28',
'place' => '111',
'quarter' => '9878',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Redon',
'title_category' => 'innkeeper',
'region' => '28',
'place' => '112',
'quarter' => '9879',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Redon',
'title_category' => 'innkeeper',
'region' => '28',
'place' => '112',
'quarter' => '9880',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Redon',
'title_category' => 'innkeeper',
'region' => '28',
'place' => '112',
'quarter' => '9881',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Redon',
'title_category' => 'innkeeper',
'region' => '28',
'place' => '112',
'quarter' => '9882',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Paris',
'title_category' => 'innkeeper',
'region' => '29',
'place' => '113',
'quarter' => '9883',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Paris',
'title_category' => 'innkeeper',
'region' => '29',
'place' => '113',
'quarter' => '9884',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Paris',
'title_category' => 'innkeeper',
'region' => '29',
'place' => '113',
'quarter' => '9885',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Paris',
'title_category' => 'innkeeper',
'region' => '29',
'place' => '113',
'quarter' => '9886',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Meaux',
'title_category' => 'innkeeper',
'region' => '29',
'place' => '114',
'quarter' => '9887',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Meaux',
'title_category' => 'innkeeper',
'region' => '29',
'place' => '114',
'quarter' => '9888',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Meaux',
'title_category' => 'innkeeper',
'region' => '29',
'place' => '114',
'quarter' => '9889',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Meaux',
'title_category' => 'innkeeper',
'region' => '29',
'place' => '114',
'quarter' => '9890',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chartres',
'title_category' => 'innkeeper',
'region' => '29',
'place' => '115',
'quarter' => '9891',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chartres',
'title_category' => 'innkeeper',
'region' => '29',
'place' => '115',
'quarter' => '9892',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chartres',
'title_category' => 'innkeeper',
'region' => '29',
'place' => '115',
'quarter' => '9893',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chartres',
'title_category' => 'innkeeper',
'region' => '29',
'place' => '115',
'quarter' => '9894',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Denis',
'title_category' => 'innkeeper',
'region' => '29',
'place' => '116',
'quarter' => '9895',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Denis',
'title_category' => 'innkeeper',
'region' => '29',
'place' => '116',
'quarter' => '9896',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Denis',
'title_category' => 'innkeeper',
'region' => '29',
'place' => '116',
'quarter' => '9897',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Denis',
'title_category' => 'innkeeper',
'region' => '29',
'place' => '116',
'quarter' => '9898',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bar',
'title_category' => 'innkeeper',
'region' => '30',
'place' => '117',
'quarter' => '9899',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bar',
'title_category' => 'innkeeper',
'region' => '30',
'place' => '117',
'quarter' => '9900',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bar',
'title_category' => 'innkeeper',
'region' => '30',
'place' => '117',
'quarter' => '9901',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bar',
'title_category' => 'innkeeper',
'region' => '30',
'place' => '117',
'quarter' => '9902',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Neufchateau',
'title_category' => 'innkeeper',
'region' => '30',
'place' => '118',
'quarter' => '9903',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Neufchateau',
'title_category' => 'innkeeper',
'region' => '30',
'place' => '118',
'quarter' => '9904',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Neufchateau',
'title_category' => 'innkeeper',
'region' => '30',
'place' => '118',
'quarter' => '9905',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Neufchateau',
'title_category' => 'innkeeper',
'region' => '30',
'place' => '118',
'quarter' => '9906',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Verdun',
'title_category' => 'innkeeper',
'region' => '30',
'place' => '119',
'quarter' => '9907',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Verdun',
'title_category' => 'innkeeper',
'region' => '30',
'place' => '119',
'quarter' => '9908',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Verdun',
'title_category' => 'innkeeper',
'region' => '30',
'place' => '119',
'quarter' => '9909',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Verdun',
'title_category' => 'innkeeper',
'region' => '30',
'place' => '119',
'quarter' => '9910',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Langres',
'title_category' => 'innkeeper',
'region' => '30',
'place' => '120',
'quarter' => '9911',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Langres',
'title_category' => 'innkeeper',
'region' => '30',
'place' => '120',
'quarter' => '9912',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Langres',
'title_category' => 'innkeeper',
'region' => '30',
'place' => '120',
'quarter' => '9913',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Langres',
'title_category' => 'innkeeper',
'region' => '30',
'place' => '120',
'quarter' => '9914',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Amiens',
'title_category' => 'innkeeper',
'region' => '31',
'place' => '121',
'quarter' => '9915',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Amiens',
'title_category' => 'innkeeper',
'region' => '31',
'place' => '121',
'quarter' => '9916',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Amiens',
'title_category' => 'innkeeper',
'region' => '31',
'place' => '121',
'quarter' => '9917',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Amiens',
'title_category' => 'innkeeper',
'region' => '31',
'place' => '121',
'quarter' => '9918',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Boulogne',
'title_category' => 'innkeeper',
'region' => '31',
'place' => '122',
'quarter' => '9919',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Boulogne',
'title_category' => 'innkeeper',
'region' => '31',
'place' => '122',
'quarter' => '9920',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Boulogne',
'title_category' => 'innkeeper',
'region' => '31',
'place' => '122',
'quarter' => '9921',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Boulogne',
'title_category' => 'innkeeper',
'region' => '31',
'place' => '122',
'quarter' => '9922',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Laon',
'title_category' => 'innkeeper',
'region' => '31',
'place' => '123',
'quarter' => '9923',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Laon',
'title_category' => 'innkeeper',
'region' => '31',
'place' => '123',
'quarter' => '9924',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Laon',
'title_category' => 'innkeeper',
'region' => '31',
'place' => '123',
'quarter' => '9925',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Laon',
'title_category' => 'innkeeper',
'region' => '31',
'place' => '123',
'quarter' => '9926',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Omer',
'title_category' => 'innkeeper',
'region' => '31',
'place' => '124',
'quarter' => '9927',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Omer',
'title_category' => 'innkeeper',
'region' => '31',
'place' => '124',
'quarter' => '9928',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Omer',
'title_category' => 'innkeeper',
'region' => '31',
'place' => '124',
'quarter' => '9929',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Omer',
'title_category' => 'innkeeper',
'region' => '31',
'place' => '124',
'quarter' => '9930',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rouen',
'title_category' => 'innkeeper',
'region' => '32',
'place' => '125',
'quarter' => '9931',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rouen',
'title_category' => 'innkeeper',
'region' => '32',
'place' => '125',
'quarter' => '9932',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rouen',
'title_category' => 'innkeeper',
'region' => '32',
'place' => '125',
'quarter' => '9933',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rouen',
'title_category' => 'innkeeper',
'region' => '32',
'place' => '125',
'quarter' => '9934',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Caen',
'title_category' => 'innkeeper',
'region' => '32',
'place' => '126',
'quarter' => '9935',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Caen',
'title_category' => 'innkeeper',
'region' => '32',
'place' => '126',
'quarter' => '9936',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Caen',
'title_category' => 'innkeeper',
'region' => '32',
'place' => '126',
'quarter' => '9937',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Caen',
'title_category' => 'innkeeper',
'region' => '32',
'place' => '126',
'quarter' => '9938',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lisieux',
'title_category' => 'innkeeper',
'region' => '32',
'place' => '127',
'quarter' => '9939',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lisieux',
'title_category' => 'innkeeper',
'region' => '32',
'place' => '127',
'quarter' => '9940',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lisieux',
'title_category' => 'innkeeper',
'region' => '32',
'place' => '127',
'quarter' => '9941',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lisieux',
'title_category' => 'innkeeper',
'region' => '32',
'place' => '127',
'quarter' => '9942',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bayeux',
'title_category' => 'innkeeper',
'region' => '32',
'place' => '128',
'quarter' => '9943',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bayeux',
'title_category' => 'innkeeper',
'region' => '32',
'place' => '128',
'quarter' => '9944',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bayeux',
'title_category' => 'innkeeper',
'region' => '32',
'place' => '128',
'quarter' => '9945',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bayeux',
'title_category' => 'innkeeper',
'region' => '32',
'place' => '128',
'quarter' => '9946',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Troyes',
'title_category' => 'innkeeper',
'region' => '33',
'place' => '129',
'quarter' => '9947',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Troyes',
'title_category' => 'innkeeper',
'region' => '33',
'place' => '129',
'quarter' => '9948',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Troyes',
'title_category' => 'innkeeper',
'region' => '33',
'place' => '129',
'quarter' => '9949',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Troyes',
'title_category' => 'innkeeper',
'region' => '33',
'place' => '129',
'quarter' => '9950',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Thierry',
'title_category' => 'innkeeper',
'region' => '33',
'place' => '130',
'quarter' => '9951',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Thierry',
'title_category' => 'innkeeper',
'region' => '33',
'place' => '130',
'quarter' => '9952',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Thierry',
'title_category' => 'innkeeper',
'region' => '33',
'place' => '130',
'quarter' => '9953',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Thierry',
'title_category' => 'innkeeper',
'region' => '33',
'place' => '130',
'quarter' => '9954',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Reims',
'title_category' => 'innkeeper',
'region' => '33',
'place' => '131',
'quarter' => '9955',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Reims',
'title_category' => 'innkeeper',
'region' => '33',
'place' => '131',
'quarter' => '9956',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Reims',
'title_category' => 'innkeeper',
'region' => '33',
'place' => '131',
'quarter' => '9957',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Reims',
'title_category' => 'innkeeper',
'region' => '33',
'place' => '131',
'quarter' => '9958',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Clairvaux',
'title_category' => 'innkeeper',
'region' => '33',
'place' => '132',
'quarter' => '9959',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Clairvaux',
'title_category' => 'innkeeper',
'region' => '33',
'place' => '132',
'quarter' => '9960',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Clairvaux',
'title_category' => 'innkeeper',
'region' => '33',
'place' => '132',
'quarter' => '9961',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Clairvaux',
'title_category' => 'innkeeper',
'region' => '33',
'place' => '132',
'quarter' => '9962',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Orleans',
'title_category' => 'innkeeper',
'region' => '34',
'place' => '133',
'quarter' => '9963',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Orleans',
'title_category' => 'innkeeper',
'region' => '34',
'place' => '133',
'quarter' => '9964',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Orleans',
'title_category' => 'innkeeper',
'region' => '34',
'place' => '133',
'quarter' => '9965',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Orleans',
'title_category' => 'innkeeper',
'region' => '34',
'place' => '133',
'quarter' => '9966',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chateaudun',
'title_category' => 'innkeeper',
'region' => '34',
'place' => '134',
'quarter' => '9967',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chateaudun',
'title_category' => 'innkeeper',
'region' => '34',
'place' => '134',
'quarter' => '9968',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chateaudun',
'title_category' => 'innkeeper',
'region' => '34',
'place' => '134',
'quarter' => '9969',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chateaudun',
'title_category' => 'innkeeper',
'region' => '34',
'place' => '134',
'quarter' => '9970',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Blois',
'title_category' => 'innkeeper',
'region' => '34',
'place' => '135',
'quarter' => '9971',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Blois',
'title_category' => 'innkeeper',
'region' => '34',
'place' => '135',
'quarter' => '9972',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Blois',
'title_category' => 'innkeeper',
'region' => '34',
'place' => '135',
'quarter' => '9973',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Blois',
'title_category' => 'innkeeper',
'region' => '34',
'place' => '135',
'quarter' => '9974',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vendome',
'title_category' => 'innkeeper',
'region' => '34',
'place' => '136',
'quarter' => '9975',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vendome',
'title_category' => 'innkeeper',
'region' => '34',
'place' => '136',
'quarter' => '9976',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vendome',
'title_category' => 'innkeeper',
'region' => '34',
'place' => '136',
'quarter' => '9977',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vendome',
'title_category' => 'innkeeper',
'region' => '34',
'place' => '136',
'quarter' => '9978',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tours',
'title_category' => 'innkeeper',
'region' => '35',
'place' => '137',
'quarter' => '9979',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tours',
'title_category' => 'innkeeper',
'region' => '35',
'place' => '137',
'quarter' => '9980',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tours',
'title_category' => 'innkeeper',
'region' => '35',
'place' => '137',
'quarter' => '9981',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tours',
'title_category' => 'innkeeper',
'region' => '35',
'place' => '137',
'quarter' => '9982',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Plessis',
'title_category' => 'innkeeper',
'region' => '35',
'place' => '138',
'quarter' => '9983',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Plessis',
'title_category' => 'innkeeper',
'region' => '35',
'place' => '138',
'quarter' => '9984',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Plessis',
'title_category' => 'innkeeper',
'region' => '35',
'place' => '138',
'quarter' => '9985',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Plessis',
'title_category' => 'innkeeper',
'region' => '35',
'place' => '138',
'quarter' => '9986',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chinon',
'title_category' => 'innkeeper',
'region' => '35',
'place' => '139',
'quarter' => '9987',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chinon',
'title_category' => 'innkeeper',
'region' => '35',
'place' => '139',
'quarter' => '9988',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chinon',
'title_category' => 'innkeeper',
'region' => '35',
'place' => '139',
'quarter' => '9989',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chinon',
'title_category' => 'innkeeper',
'region' => '35',
'place' => '139',
'quarter' => '9990',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Loches',
'title_category' => 'innkeeper',
'region' => '35',
'place' => '140',
'quarter' => '9991',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Loches',
'title_category' => 'innkeeper',
'region' => '35',
'place' => '140',
'quarter' => '9992',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Loches',
'title_category' => 'innkeeper',
'region' => '35',
'place' => '140',
'quarter' => '9993',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Loches',
'title_category' => 'innkeeper',
'region' => '35',
'place' => '140',
'quarter' => '9994',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Angers',
'title_category' => 'innkeeper',
'region' => '36',
'place' => '141',
'quarter' => '9995',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Angers',
'title_category' => 'innkeeper',
'region' => '36',
'place' => '141',
'quarter' => '9996',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Angers',
'title_category' => 'innkeeper',
'region' => '36',
'place' => '141',
'quarter' => '9997',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Angers',
'title_category' => 'innkeeper',
'region' => '36',
'place' => '141',
'quarter' => '9998',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gontier',
'title_category' => 'innkeeper',
'region' => '36',
'place' => '142',
'quarter' => '9999',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gontier',
'title_category' => 'innkeeper',
'region' => '36',
'place' => '142',
'quarter' => '10000',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gontier',
'title_category' => 'innkeeper',
'region' => '36',
'place' => '142',
'quarter' => '10001',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gontier',
'title_category' => 'innkeeper',
'region' => '36',
'place' => '142',
'quarter' => '10002',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mans',
'title_category' => 'innkeeper',
'region' => '36',
'place' => '143',
'quarter' => '10003',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mans',
'title_category' => 'innkeeper',
'region' => '36',
'place' => '143',
'quarter' => '10004',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mans',
'title_category' => 'innkeeper',
'region' => '36',
'place' => '143',
'quarter' => '10005',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mans',
'title_category' => 'innkeeper',
'region' => '36',
'place' => '143',
'quarter' => '10006',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Laval',
'title_category' => 'innkeeper',
'region' => '36',
'place' => '144',
'quarter' => '10007',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Laval',
'title_category' => 'innkeeper',
'region' => '36',
'place' => '144',
'quarter' => '10008',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Laval',
'title_category' => 'innkeeper',
'region' => '36',
'place' => '144',
'quarter' => '10009',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Laval',
'title_category' => 'innkeeper',
'region' => '36',
'place' => '144',
'quarter' => '10010',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Poitiers',
'title_category' => 'innkeeper',
'region' => '37',
'place' => '145',
'quarter' => '10011',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Poitiers',
'title_category' => 'innkeeper',
'region' => '37',
'place' => '145',
'quarter' => '10012',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Poitiers',
'title_category' => 'innkeeper',
'region' => '37',
'place' => '145',
'quarter' => '10013',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Poitiers',
'title_category' => 'innkeeper',
'region' => '37',
'place' => '145',
'quarter' => '10014',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chatellerault',
'title_category' => 'innkeeper',
'region' => '37',
'place' => '146',
'quarter' => '10015',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chatellerault',
'title_category' => 'innkeeper',
'region' => '37',
'place' => '146',
'quarter' => '10016',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chatellerault',
'title_category' => 'innkeeper',
'region' => '37',
'place' => '146',
'quarter' => '10017',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chatellerault',
'title_category' => 'innkeeper',
'region' => '37',
'place' => '146',
'quarter' => '10018',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Montmorillon',
'title_category' => 'innkeeper',
'region' => '37',
'place' => '147',
'quarter' => '10019',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Montmorillon',
'title_category' => 'innkeeper',
'region' => '37',
'place' => '147',
'quarter' => '10020',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Montmorillon',
'title_category' => 'innkeeper',
'region' => '37',
'place' => '147',
'quarter' => '10021',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Montmorillon',
'title_category' => 'innkeeper',
'region' => '37',
'place' => '147',
'quarter' => '10022',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vauclair',
'title_category' => 'innkeeper',
'region' => '37',
'place' => '148',
'quarter' => '10023',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vauclair',
'title_category' => 'innkeeper',
'region' => '37',
'place' => '148',
'quarter' => '10024',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vauclair',
'title_category' => 'innkeeper',
'region' => '37',
'place' => '148',
'quarter' => '10025',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vauclair',
'title_category' => 'innkeeper',
'region' => '37',
'place' => '148',
'quarter' => '10026',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bourges',
'title_category' => 'innkeeper',
'region' => '38',
'place' => '149',
'quarter' => '10027',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bourges',
'title_category' => 'innkeeper',
'region' => '38',
'place' => '149',
'quarter' => '10028',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bourges',
'title_category' => 'innkeeper',
'region' => '38',
'place' => '149',
'quarter' => '10029',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bourges',
'title_category' => 'innkeeper',
'region' => '38',
'place' => '149',
'quarter' => '10030',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chateauroux',
'title_category' => 'innkeeper',
'region' => '38',
'place' => '150',
'quarter' => '10031',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chateauroux',
'title_category' => 'innkeeper',
'region' => '38',
'place' => '150',
'quarter' => '10032',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chateauroux',
'title_category' => 'innkeeper',
'region' => '38',
'place' => '150',
'quarter' => '10033',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chateauroux',
'title_category' => 'innkeeper',
'region' => '38',
'place' => '150',
'quarter' => '10034',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nevers',
'title_category' => 'innkeeper',
'region' => '38',
'place' => '151',
'quarter' => '10035',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nevers',
'title_category' => 'innkeeper',
'region' => '38',
'place' => '151',
'quarter' => '10036',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nevers',
'title_category' => 'innkeeper',
'region' => '38',
'place' => '151',
'quarter' => '10037',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nevers',
'title_category' => 'innkeeper',
'region' => '38',
'place' => '151',
'quarter' => '10038',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vezelay',
'title_category' => 'innkeeper',
'region' => '38',
'place' => '152',
'quarter' => '10039',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vezelay',
'title_category' => 'innkeeper',
'region' => '38',
'place' => '152',
'quarter' => '10040',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vezelay',
'title_category' => 'innkeeper',
'region' => '38',
'place' => '152',
'quarter' => '10041',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vezelay',
'title_category' => 'innkeeper',
'region' => '38',
'place' => '152',
'quarter' => '10042',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Moulins',
'title_category' => 'innkeeper',
'region' => '39',
'place' => '153',
'quarter' => '10043',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Moulins',
'title_category' => 'innkeeper',
'region' => '39',
'place' => '153',
'quarter' => '10044',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Moulins',
'title_category' => 'innkeeper',
'region' => '39',
'place' => '153',
'quarter' => '10045',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Moulins',
'title_category' => 'innkeeper',
'region' => '39',
'place' => '153',
'quarter' => '10046',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Montlucon',
'title_category' => 'innkeeper',
'region' => '39',
'place' => '154',
'quarter' => '10047',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Montlucon',
'title_category' => 'innkeeper',
'region' => '39',
'place' => '154',
'quarter' => '10048',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Montlucon',
'title_category' => 'innkeeper',
'region' => '39',
'place' => '154',
'quarter' => '10049',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Montlucon',
'title_category' => 'innkeeper',
'region' => '39',
'place' => '154',
'quarter' => '10050',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gueret',
'title_category' => 'innkeeper',
'region' => '39',
'place' => '155',
'quarter' => '10051',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gueret',
'title_category' => 'innkeeper',
'region' => '39',
'place' => '155',
'quarter' => '10052',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gueret',
'title_category' => 'innkeeper',
'region' => '39',
'place' => '155',
'quarter' => '10053',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gueret',
'title_category' => 'innkeeper',
'region' => '39',
'place' => '155',
'quarter' => '10054',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vichy',
'title_category' => 'innkeeper',
'region' => '39',
'place' => '156',
'quarter' => '10055',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vichy',
'title_category' => 'innkeeper',
'region' => '39',
'place' => '156',
'quarter' => '10056',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vichy',
'title_category' => 'innkeeper',
'region' => '39',
'place' => '156',
'quarter' => '10057',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vichy',
'title_category' => 'innkeeper',
'region' => '39',
'place' => '156',
'quarter' => '10058',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Clermont Ferrand',
'title_category' => 'innkeeper',
'region' => '40',
'place' => '157',
'quarter' => '10059',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Clermont Ferrand',
'title_category' => 'innkeeper',
'region' => '40',
'place' => '157',
'quarter' => '10060',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Clermont Ferrand',
'title_category' => 'innkeeper',
'region' => '40',
'place' => '157',
'quarter' => '10061',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Clermont Ferrand',
'title_category' => 'innkeeper',
'region' => '40',
'place' => '157',
'quarter' => '10062',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Montbrison',
'title_category' => 'innkeeper',
'region' => '40',
'place' => '158',
'quarter' => '10063',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Montbrison',
'title_category' => 'innkeeper',
'region' => '40',
'place' => '158',
'quarter' => '10064',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Montbrison',
'title_category' => 'innkeeper',
'region' => '40',
'place' => '158',
'quarter' => '10065',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Montbrison',
'title_category' => 'innkeeper',
'region' => '40',
'place' => '158',
'quarter' => '10066',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Puy en Velay',
'title_category' => 'innkeeper',
'region' => '40',
'place' => '159',
'quarter' => '10067',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Puy en Velay',
'title_category' => 'innkeeper',
'region' => '40',
'place' => '159',
'quarter' => '10068',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Puy en Velay',
'title_category' => 'innkeeper',
'region' => '40',
'place' => '159',
'quarter' => '10069',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Puy en Velay',
'title_category' => 'innkeeper',
'region' => '40',
'place' => '159',
'quarter' => '10070',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Issoire',
'title_category' => 'innkeeper',
'region' => '40',
'place' => '160',
'quarter' => '10071',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Issoire',
'title_category' => 'innkeeper',
'region' => '40',
'place' => '160',
'quarter' => '10072',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Issoire',
'title_category' => 'innkeeper',
'region' => '40',
'place' => '160',
'quarter' => '10073',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Issoire',
'title_category' => 'innkeeper',
'region' => '40',
'place' => '160',
'quarter' => '10074',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Arles',
'title_category' => 'innkeeper',
'region' => '41',
'place' => '161',
'quarter' => '10075',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Arles',
'title_category' => 'innkeeper',
'region' => '41',
'place' => '161',
'quarter' => '10076',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Arles',
'title_category' => 'innkeeper',
'region' => '41',
'place' => '161',
'quarter' => '10077',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Arles',
'title_category' => 'innkeeper',
'region' => '41',
'place' => '161',
'quarter' => '10078',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aix',
'title_category' => 'innkeeper',
'region' => '41',
'place' => '162',
'quarter' => '10079',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aix',
'title_category' => 'innkeeper',
'region' => '41',
'place' => '162',
'quarter' => '10080',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aix',
'title_category' => 'innkeeper',
'region' => '41',
'place' => '162',
'quarter' => '10081',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aix',
'title_category' => 'innkeeper',
'region' => '41',
'place' => '162',
'quarter' => '10082',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Marseille',
'title_category' => 'innkeeper',
'region' => '41',
'place' => '163',
'quarter' => '10083',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Marseille',
'title_category' => 'innkeeper',
'region' => '41',
'place' => '163',
'quarter' => '10084',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Marseille',
'title_category' => 'innkeeper',
'region' => '41',
'place' => '163',
'quarter' => '10085',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Marseille',
'title_category' => 'innkeeper',
'region' => '41',
'place' => '163',
'quarter' => '10086',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Avignon',
'title_category' => 'innkeeper',
'region' => '41',
'place' => '164',
'quarter' => '10087',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Avignon',
'title_category' => 'innkeeper',
'region' => '41',
'place' => '164',
'quarter' => '10088',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Avignon',
'title_category' => 'innkeeper',
'region' => '41',
'place' => '164',
'quarter' => '10089',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Avignon',
'title_category' => 'innkeeper',
'region' => '41',
'place' => '164',
'quarter' => '10090',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Toulouse',
'title_category' => 'innkeeper',
'region' => '42',
'place' => '165',
'quarter' => '10091',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Toulouse',
'title_category' => 'innkeeper',
'region' => '42',
'place' => '165',
'quarter' => '10092',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Toulouse',
'title_category' => 'innkeeper',
'region' => '42',
'place' => '165',
'quarter' => '10093',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Toulouse',
'title_category' => 'innkeeper',
'region' => '42',
'place' => '165',
'quarter' => '10094',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Carcasonne',
'title_category' => 'innkeeper',
'region' => '42',
'place' => '166',
'quarter' => '10095',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Carcasonne',
'title_category' => 'innkeeper',
'region' => '42',
'place' => '166',
'quarter' => '10096',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Carcasonne',
'title_category' => 'innkeeper',
'region' => '42',
'place' => '166',
'quarter' => '10097',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Carcasonne',
'title_category' => 'innkeeper',
'region' => '42',
'place' => '166',
'quarter' => '10098',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Narbonne',
'title_category' => 'innkeeper',
'region' => '42',
'place' => '167',
'quarter' => '10099',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Narbonne',
'title_category' => 'innkeeper',
'region' => '42',
'place' => '167',
'quarter' => '10100',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Narbonne',
'title_category' => 'innkeeper',
'region' => '42',
'place' => '167',
'quarter' => '10101',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Narbonne',
'title_category' => 'innkeeper',
'region' => '42',
'place' => '167',
'quarter' => '10102',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Benoit',
'title_category' => 'innkeeper',
'region' => '42',
'place' => '168',
'quarter' => '10103',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Benoit',
'title_category' => 'innkeeper',
'region' => '42',
'place' => '168',
'quarter' => '10104',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Benoit',
'title_category' => 'innkeeper',
'region' => '42',
'place' => '168',
'quarter' => '10105',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Benoit',
'title_category' => 'innkeeper',
'region' => '42',
'place' => '168',
'quarter' => '10106',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bordeaux',
'title_category' => 'innkeeper',
'region' => '43',
'place' => '169',
'quarter' => '10107',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bordeaux',
'title_category' => 'innkeeper',
'region' => '43',
'place' => '169',
'quarter' => '10108',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bordeaux',
'title_category' => 'innkeeper',
'region' => '43',
'place' => '169',
'quarter' => '10109',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bordeaux',
'title_category' => 'innkeeper',
'region' => '43',
'place' => '169',
'quarter' => '10110',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cahors',
'title_category' => 'innkeeper',
'region' => '43',
'place' => '170',
'quarter' => '10111',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cahors',
'title_category' => 'innkeeper',
'region' => '43',
'place' => '170',
'quarter' => '10112',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cahors',
'title_category' => 'innkeeper',
'region' => '43',
'place' => '170',
'quarter' => '10113',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cahors',
'title_category' => 'innkeeper',
'region' => '43',
'place' => '170',
'quarter' => '10114',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Auch',
'title_category' => 'innkeeper',
'region' => '43',
'place' => '171',
'quarter' => '10115',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Auch',
'title_category' => 'innkeeper',
'region' => '43',
'place' => '171',
'quarter' => '10116',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Auch',
'title_category' => 'innkeeper',
'region' => '43',
'place' => '171',
'quarter' => '10117',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Auch',
'title_category' => 'innkeeper',
'region' => '43',
'place' => '171',
'quarter' => '10118',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Montauban',
'title_category' => 'innkeeper',
'region' => '43',
'place' => '172',
'quarter' => '10119',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Montauban',
'title_category' => 'innkeeper',
'region' => '43',
'place' => '172',
'quarter' => '10120',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Montauban',
'title_category' => 'innkeeper',
'region' => '43',
'place' => '172',
'quarter' => '10121',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Montauban',
'title_category' => 'innkeeper',
'region' => '43',
'place' => '172',
'quarter' => '10122',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Angouleme',
'title_category' => 'innkeeper',
'region' => '44',
'place' => '173',
'quarter' => '10123',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Angouleme',
'title_category' => 'innkeeper',
'region' => '44',
'place' => '173',
'quarter' => '10124',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Angouleme',
'title_category' => 'innkeeper',
'region' => '44',
'place' => '173',
'quarter' => '10125',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Angouleme',
'title_category' => 'innkeeper',
'region' => '44',
'place' => '173',
'quarter' => '10126',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Limoges',
'title_category' => 'innkeeper',
'region' => '44',
'place' => '174',
'quarter' => '10127',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Limoges',
'title_category' => 'innkeeper',
'region' => '44',
'place' => '174',
'quarter' => '10128',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Limoges',
'title_category' => 'innkeeper',
'region' => '44',
'place' => '174',
'quarter' => '10129',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Limoges',
'title_category' => 'innkeeper',
'region' => '44',
'place' => '174',
'quarter' => '10130',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Perigeux',
'title_category' => 'innkeeper',
'region' => '44',
'place' => '175',
'quarter' => '10131',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Perigeux',
'title_category' => 'innkeeper',
'region' => '44',
'place' => '175',
'quarter' => '10132',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Perigeux',
'title_category' => 'innkeeper',
'region' => '44',
'place' => '175',
'quarter' => '10133',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Perigeux',
'title_category' => 'innkeeper',
'region' => '44',
'place' => '175',
'quarter' => '10134',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tulle',
'title_category' => 'innkeeper',
'region' => '44',
'place' => '176',
'quarter' => '10135',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tulle',
'title_category' => 'innkeeper',
'region' => '44',
'place' => '176',
'quarter' => '10136',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tulle',
'title_category' => 'innkeeper',
'region' => '44',
'place' => '176',
'quarter' => '10137',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tulle',
'title_category' => 'innkeeper',
'region' => '44',
'place' => '176',
'quarter' => '10138',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Grenoble',
'title_category' => 'innkeeper',
'region' => '45',
'place' => '177',
'quarter' => '10139',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Grenoble',
'title_category' => 'innkeeper',
'region' => '45',
'place' => '177',
'quarter' => '10140',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Grenoble',
'title_category' => 'innkeeper',
'region' => '45',
'place' => '177',
'quarter' => '10141',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Grenoble',
'title_category' => 'innkeeper',
'region' => '45',
'place' => '177',
'quarter' => '10142',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vienne',
'title_category' => 'innkeeper',
'region' => '45',
'place' => '178',
'quarter' => '10143',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vienne',
'title_category' => 'innkeeper',
'region' => '45',
'place' => '178',
'quarter' => '10144',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vienne',
'title_category' => 'innkeeper',
'region' => '45',
'place' => '178',
'quarter' => '10145',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vienne',
'title_category' => 'innkeeper',
'region' => '45',
'place' => '178',
'quarter' => '10146',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lyon',
'title_category' => 'innkeeper',
'region' => '45',
'place' => '179',
'quarter' => '10147',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lyon',
'title_category' => 'innkeeper',
'region' => '45',
'place' => '179',
'quarter' => '10148',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lyon',
'title_category' => 'innkeeper',
'region' => '45',
'place' => '179',
'quarter' => '10149',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lyon',
'title_category' => 'innkeeper',
'region' => '45',
'place' => '179',
'quarter' => '10150',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Autun',
'title_category' => 'innkeeper',
'region' => '45',
'place' => '180',
'quarter' => '10151',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Autun',
'title_category' => 'innkeeper',
'region' => '45',
'place' => '180',
'quarter' => '10152',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Autun',
'title_category' => 'innkeeper',
'region' => '45',
'place' => '180',
'quarter' => '10153',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Autun',
'title_category' => 'innkeeper',
'region' => '45',
'place' => '180',
'quarter' => '10154',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dijon',
'title_category' => 'innkeeper',
'region' => '46',
'place' => '181',
'quarter' => '10155',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dijon',
'title_category' => 'innkeeper',
'region' => '46',
'place' => '181',
'quarter' => '10156',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dijon',
'title_category' => 'innkeeper',
'region' => '46',
'place' => '181',
'quarter' => '10157',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dijon',
'title_category' => 'innkeeper',
'region' => '46',
'place' => '181',
'quarter' => '10158',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Besancon',
'title_category' => 'innkeeper',
'region' => '46',
'place' => '182',
'quarter' => '10159',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Besancon',
'title_category' => 'innkeeper',
'region' => '46',
'place' => '182',
'quarter' => '10160',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Besancon',
'title_category' => 'innkeeper',
'region' => '46',
'place' => '182',
'quarter' => '10161',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Besancon',
'title_category' => 'innkeeper',
'region' => '46',
'place' => '182',
'quarter' => '10162',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chalon',
'title_category' => 'innkeeper',
'region' => '46',
'place' => '183',
'quarter' => '10163',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chalon',
'title_category' => 'innkeeper',
'region' => '46',
'place' => '183',
'quarter' => '10164',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chalon',
'title_category' => 'innkeeper',
'region' => '46',
'place' => '183',
'quarter' => '10165',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chalon',
'title_category' => 'innkeeper',
'region' => '46',
'place' => '183',
'quarter' => '10166',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Citeaux',
'title_category' => 'innkeeper',
'region' => '46',
'place' => '184',
'quarter' => '10167',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Citeaux',
'title_category' => 'innkeeper',
'region' => '46',
'place' => '184',
'quarter' => '10168',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Citeaux',
'title_category' => 'innkeeper',
'region' => '46',
'place' => '184',
'quarter' => '10169',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Citeaux',
'title_category' => 'innkeeper',
'region' => '46',
'place' => '184',
'quarter' => '10170',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'London',
'title_category' => 'innkeeper',
'region' => '47',
'place' => '185',
'quarter' => '10171',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'London',
'title_category' => 'innkeeper',
'region' => '47',
'place' => '185',
'quarter' => '10172',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'London',
'title_category' => 'innkeeper',
'region' => '47',
'place' => '185',
'quarter' => '10173',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'London',
'title_category' => 'innkeeper',
'region' => '47',
'place' => '185',
'quarter' => '10174',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Windsor',
'title_category' => 'innkeeper',
'region' => '47',
'place' => '186',
'quarter' => '10175',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Windsor',
'title_category' => 'innkeeper',
'region' => '47',
'place' => '186',
'quarter' => '10176',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Windsor',
'title_category' => 'innkeeper',
'region' => '47',
'place' => '186',
'quarter' => '10177',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Windsor',
'title_category' => 'innkeeper',
'region' => '47',
'place' => '186',
'quarter' => '10178',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Guildford',
'title_category' => 'innkeeper',
'region' => '47',
'place' => '187',
'quarter' => '10179',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Guildford',
'title_category' => 'innkeeper',
'region' => '47',
'place' => '187',
'quarter' => '10180',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Guildford',
'title_category' => 'innkeeper',
'region' => '47',
'place' => '187',
'quarter' => '10181',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Guildford',
'title_category' => 'innkeeper',
'region' => '47',
'place' => '187',
'quarter' => '10182',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Westminster',
'title_category' => 'innkeeper',
'region' => '47',
'place' => '188',
'quarter' => '10183',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Westminster',
'title_category' => 'innkeeper',
'region' => '47',
'place' => '188',
'quarter' => '10184',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Westminster',
'title_category' => 'innkeeper',
'region' => '47',
'place' => '188',
'quarter' => '10185',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Westminster',
'title_category' => 'innkeeper',
'region' => '47',
'place' => '188',
'quarter' => '10186',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Canterbury',
'title_category' => 'innkeeper',
'region' => '48',
'place' => '189',
'quarter' => '10187',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Canterbury',
'title_category' => 'innkeeper',
'region' => '48',
'place' => '189',
'quarter' => '10188',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Canterbury',
'title_category' => 'innkeeper',
'region' => '48',
'place' => '189',
'quarter' => '10189',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Canterbury',
'title_category' => 'innkeeper',
'region' => '48',
'place' => '189',
'quarter' => '10190',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dover',
'title_category' => 'innkeeper',
'region' => '48',
'place' => '190',
'quarter' => '10191',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dover',
'title_category' => 'innkeeper',
'region' => '48',
'place' => '190',
'quarter' => '10192',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dover',
'title_category' => 'innkeeper',
'region' => '48',
'place' => '190',
'quarter' => '10193',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dover',
'title_category' => 'innkeeper',
'region' => '48',
'place' => '190',
'quarter' => '10194',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ashford',
'title_category' => 'innkeeper',
'region' => '48',
'place' => '191',
'quarter' => '10195',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ashford',
'title_category' => 'innkeeper',
'region' => '48',
'place' => '191',
'quarter' => '10196',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ashford',
'title_category' => 'innkeeper',
'region' => '48',
'place' => '191',
'quarter' => '10197',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ashford',
'title_category' => 'innkeeper',
'region' => '48',
'place' => '191',
'quarter' => '10198',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Maidstone',
'title_category' => 'innkeeper',
'region' => '48',
'place' => '192',
'quarter' => '10199',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Maidstone',
'title_category' => 'innkeeper',
'region' => '48',
'place' => '192',
'quarter' => '10200',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Maidstone',
'title_category' => 'innkeeper',
'region' => '48',
'place' => '192',
'quarter' => '10201',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Maidstone',
'title_category' => 'innkeeper',
'region' => '48',
'place' => '192',
'quarter' => '10202',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Winchester',
'title_category' => 'innkeeper',
'region' => '49',
'place' => '193',
'quarter' => '10203',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Winchester',
'title_category' => 'innkeeper',
'region' => '49',
'place' => '193',
'quarter' => '10204',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Winchester',
'title_category' => 'innkeeper',
'region' => '49',
'place' => '193',
'quarter' => '10205',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Winchester',
'title_category' => 'innkeeper',
'region' => '49',
'place' => '193',
'quarter' => '10206',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Southampton',
'title_category' => 'innkeeper',
'region' => '49',
'place' => '194',
'quarter' => '10207',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Southampton',
'title_category' => 'innkeeper',
'region' => '49',
'place' => '194',
'quarter' => '10208',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Southampton',
'title_category' => 'innkeeper',
'region' => '49',
'place' => '194',
'quarter' => '10209',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Southampton',
'title_category' => 'innkeeper',
'region' => '49',
'place' => '194',
'quarter' => '10210',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Wells',
'title_category' => 'innkeeper',
'region' => '49',
'place' => '195',
'quarter' => '10211',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Wells',
'title_category' => 'innkeeper',
'region' => '49',
'place' => '195',
'quarter' => '10212',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Wells',
'title_category' => 'innkeeper',
'region' => '49',
'place' => '195',
'quarter' => '10213',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Wells',
'title_category' => 'innkeeper',
'region' => '49',
'place' => '195',
'quarter' => '10214',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Wimborne',
'title_category' => 'innkeeper',
'region' => '49',
'place' => '196',
'quarter' => '10215',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Wimborne',
'title_category' => 'innkeeper',
'region' => '49',
'place' => '196',
'quarter' => '10216',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Wimborne',
'title_category' => 'innkeeper',
'region' => '49',
'place' => '196',
'quarter' => '10217',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Wimborne',
'title_category' => 'innkeeper',
'region' => '49',
'place' => '196',
'quarter' => '10218',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Truro',
'title_category' => 'innkeeper',
'region' => '50',
'place' => '197',
'quarter' => '10219',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Truro',
'title_category' => 'innkeeper',
'region' => '50',
'place' => '197',
'quarter' => '10220',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Truro',
'title_category' => 'innkeeper',
'region' => '50',
'place' => '197',
'quarter' => '10221',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Truro',
'title_category' => 'innkeeper',
'region' => '50',
'place' => '197',
'quarter' => '10222',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bodmin',
'title_category' => 'innkeeper',
'region' => '50',
'place' => '198',
'quarter' => '10223',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bodmin',
'title_category' => 'innkeeper',
'region' => '50',
'place' => '198',
'quarter' => '10224',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bodmin',
'title_category' => 'innkeeper',
'region' => '50',
'place' => '198',
'quarter' => '10225',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bodmin',
'title_category' => 'innkeeper',
'region' => '50',
'place' => '198',
'quarter' => '10226',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saint German',
'title_category' => 'innkeeper',
'region' => '50',
'place' => '199',
'quarter' => '10227',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saint German',
'title_category' => 'innkeeper',
'region' => '50',
'place' => '199',
'quarter' => '10228',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saint German',
'title_category' => 'innkeeper',
'region' => '50',
'place' => '199',
'quarter' => '10229',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saint German',
'title_category' => 'innkeeper',
'region' => '50',
'place' => '199',
'quarter' => '10230',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Madron',
'title_category' => 'innkeeper',
'region' => '50',
'place' => '200',
'quarter' => '10231',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Madron',
'title_category' => 'innkeeper',
'region' => '50',
'place' => '200',
'quarter' => '10232',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Madron',
'title_category' => 'innkeeper',
'region' => '50',
'place' => '200',
'quarter' => '10233',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Madron',
'title_category' => 'innkeeper',
'region' => '50',
'place' => '200',
'quarter' => '10234',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Norwich',
'title_category' => 'innkeeper',
'region' => '51',
'place' => '201',
'quarter' => '10235',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Norwich',
'title_category' => 'innkeeper',
'region' => '51',
'place' => '201',
'quarter' => '10236',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Norwich',
'title_category' => 'innkeeper',
'region' => '51',
'place' => '201',
'quarter' => '10237',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Norwich',
'title_category' => 'innkeeper',
'region' => '51',
'place' => '201',
'quarter' => '10238',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ipswich',
'title_category' => 'innkeeper',
'region' => '51',
'place' => '202',
'quarter' => '10239',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ipswich',
'title_category' => 'innkeeper',
'region' => '51',
'place' => '202',
'quarter' => '10240',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ipswich',
'title_category' => 'innkeeper',
'region' => '51',
'place' => '202',
'quarter' => '10241',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ipswich',
'title_category' => 'innkeeper',
'region' => '51',
'place' => '202',
'quarter' => '10242',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Edmunds',
'title_category' => 'innkeeper',
'region' => '51',
'place' => '203',
'quarter' => '10243',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Edmunds',
'title_category' => 'innkeeper',
'region' => '51',
'place' => '203',
'quarter' => '10244',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Edmunds',
'title_category' => 'innkeeper',
'region' => '51',
'place' => '203',
'quarter' => '10245',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Edmunds',
'title_category' => 'innkeeper',
'region' => '51',
'place' => '203',
'quarter' => '10246',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Croxton',
'title_category' => 'innkeeper',
'region' => '51',
'place' => '204',
'quarter' => '10247',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Croxton',
'title_category' => 'innkeeper',
'region' => '51',
'place' => '204',
'quarter' => '10248',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Croxton',
'title_category' => 'innkeeper',
'region' => '51',
'place' => '204',
'quarter' => '10249',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Croxton',
'title_category' => 'innkeeper',
'region' => '51',
'place' => '204',
'quarter' => '10250',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'York',
'title_category' => 'innkeeper',
'region' => '52',
'place' => '205',
'quarter' => '10251',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'York',
'title_category' => 'innkeeper',
'region' => '52',
'place' => '205',
'quarter' => '10252',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'York',
'title_category' => 'innkeeper',
'region' => '52',
'place' => '205',
'quarter' => '10253',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'York',
'title_category' => 'innkeeper',
'region' => '52',
'place' => '205',
'quarter' => '10254',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Durham',
'title_category' => 'innkeeper',
'region' => '52',
'place' => '206',
'quarter' => '10255',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Durham',
'title_category' => 'innkeeper',
'region' => '52',
'place' => '206',
'quarter' => '10256',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Durham',
'title_category' => 'innkeeper',
'region' => '52',
'place' => '206',
'quarter' => '10257',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Durham',
'title_category' => 'innkeeper',
'region' => '52',
'place' => '206',
'quarter' => '10258',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Scarborough',
'title_category' => 'innkeeper',
'region' => '52',
'place' => '207',
'quarter' => '10259',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Scarborough',
'title_category' => 'innkeeper',
'region' => '52',
'place' => '207',
'quarter' => '10260',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Scarborough',
'title_category' => 'innkeeper',
'region' => '52',
'place' => '207',
'quarter' => '10261',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Scarborough',
'title_category' => 'innkeeper',
'region' => '52',
'place' => '207',
'quarter' => '10262',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lancaster',
'title_category' => 'innkeeper',
'region' => '52',
'place' => '208',
'quarter' => '10263',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lancaster',
'title_category' => 'innkeeper',
'region' => '52',
'place' => '208',
'quarter' => '10264',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lancaster',
'title_category' => 'innkeeper',
'region' => '52',
'place' => '208',
'quarter' => '10265',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lancaster',
'title_category' => 'innkeeper',
'region' => '52',
'place' => '208',
'quarter' => '10266',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Worcester',
'title_category' => 'innkeeper',
'region' => '53',
'place' => '209',
'quarter' => '10267',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Worcester',
'title_category' => 'innkeeper',
'region' => '53',
'place' => '209',
'quarter' => '10268',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Worcester',
'title_category' => 'innkeeper',
'region' => '53',
'place' => '209',
'quarter' => '10269',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Worcester',
'title_category' => 'innkeeper',
'region' => '53',
'place' => '209',
'quarter' => '10270',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gloucester',
'title_category' => 'innkeeper',
'region' => '53',
'place' => '210',
'quarter' => '10271',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gloucester',
'title_category' => 'innkeeper',
'region' => '53',
'place' => '210',
'quarter' => '10272',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gloucester',
'title_category' => 'innkeeper',
'region' => '53',
'place' => '210',
'quarter' => '10273',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gloucester',
'title_category' => 'innkeeper',
'region' => '53',
'place' => '210',
'quarter' => '10274',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bristol',
'title_category' => 'innkeeper',
'region' => '53',
'place' => '211',
'quarter' => '10275',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bristol',
'title_category' => 'innkeeper',
'region' => '53',
'place' => '211',
'quarter' => '10276',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bristol',
'title_category' => 'innkeeper',
'region' => '53',
'place' => '211',
'quarter' => '10277',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bristol',
'title_category' => 'innkeeper',
'region' => '53',
'place' => '211',
'quarter' => '10278',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cirencester',
'title_category' => 'innkeeper',
'region' => '53',
'place' => '212',
'quarter' => '10279',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cirencester',
'title_category' => 'innkeeper',
'region' => '53',
'place' => '212',
'quarter' => '10280',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cirencester',
'title_category' => 'innkeeper',
'region' => '53',
'place' => '212',
'quarter' => '10281',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cirencester',
'title_category' => 'innkeeper',
'region' => '53',
'place' => '212',
'quarter' => '10282',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ely',
'title_category' => 'innkeeper',
'region' => '54',
'place' => '213',
'quarter' => '10283',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ely',
'title_category' => 'innkeeper',
'region' => '54',
'place' => '213',
'quarter' => '10284',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ely',
'title_category' => 'innkeeper',
'region' => '54',
'place' => '213',
'quarter' => '10285',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ely',
'title_category' => 'innkeeper',
'region' => '54',
'place' => '213',
'quarter' => '10286',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cambridge',
'title_category' => 'innkeeper',
'region' => '54',
'place' => '214',
'quarter' => '10287',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cambridge',
'title_category' => 'innkeeper',
'region' => '54',
'place' => '214',
'quarter' => '10288',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cambridge',
'title_category' => 'innkeeper',
'region' => '54',
'place' => '214',
'quarter' => '10289',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cambridge',
'title_category' => 'innkeeper',
'region' => '54',
'place' => '214',
'quarter' => '10290',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Oxford',
'title_category' => 'innkeeper',
'region' => '54',
'place' => '215',
'quarter' => '10291',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Oxford',
'title_category' => 'innkeeper',
'region' => '54',
'place' => '215',
'quarter' => '10292',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Oxford',
'title_category' => 'innkeeper',
'region' => '54',
'place' => '215',
'quarter' => '10293',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Oxford',
'title_category' => 'innkeeper',
'region' => '54',
'place' => '215',
'quarter' => '10294',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Albans',
'title_category' => 'innkeeper',
'region' => '54',
'place' => '216',
'quarter' => '10295',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Albans',
'title_category' => 'innkeeper',
'region' => '54',
'place' => '216',
'quarter' => '10296',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Albans',
'title_category' => 'innkeeper',
'region' => '54',
'place' => '216',
'quarter' => '10297',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Albans',
'title_category' => 'innkeeper',
'region' => '54',
'place' => '216',
'quarter' => '10298',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tamworth',
'title_category' => 'innkeeper',
'region' => '55',
'place' => '217',
'quarter' => '10299',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tamworth',
'title_category' => 'innkeeper',
'region' => '55',
'place' => '217',
'quarter' => '10300',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tamworth',
'title_category' => 'innkeeper',
'region' => '55',
'place' => '217',
'quarter' => '10301',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tamworth',
'title_category' => 'innkeeper',
'region' => '55',
'place' => '217',
'quarter' => '10302',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Warwick',
'title_category' => 'innkeeper',
'region' => '55',
'place' => '218',
'quarter' => '10303',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Warwick',
'title_category' => 'innkeeper',
'region' => '55',
'place' => '218',
'quarter' => '10304',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Warwick',
'title_category' => 'innkeeper',
'region' => '55',
'place' => '218',
'quarter' => '10305',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Warwick',
'title_category' => 'innkeeper',
'region' => '55',
'place' => '218',
'quarter' => '10306',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Stafford',
'title_category' => 'innkeeper',
'region' => '55',
'place' => '219',
'quarter' => '10307',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Stafford',
'title_category' => 'innkeeper',
'region' => '55',
'place' => '219',
'quarter' => '10308',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Stafford',
'title_category' => 'innkeeper',
'region' => '55',
'place' => '219',
'quarter' => '10309',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Stafford',
'title_category' => 'innkeeper',
'region' => '55',
'place' => '219',
'quarter' => '10310',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Leicester',
'title_category' => 'innkeeper',
'region' => '55',
'place' => '220',
'quarter' => '10311',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Leicester',
'title_category' => 'innkeeper',
'region' => '55',
'place' => '220',
'quarter' => '10312',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Leicester',
'title_category' => 'innkeeper',
'region' => '55',
'place' => '220',
'quarter' => '10313',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Leicester',
'title_category' => 'innkeeper',
'region' => '55',
'place' => '220',
'quarter' => '10314',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lincoln',
'title_category' => 'innkeeper',
'region' => '56',
'place' => '221',
'quarter' => '10315',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lincoln',
'title_category' => 'innkeeper',
'region' => '56',
'place' => '221',
'quarter' => '10316',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lincoln',
'title_category' => 'innkeeper',
'region' => '56',
'place' => '221',
'quarter' => '10317',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lincoln',
'title_category' => 'innkeeper',
'region' => '56',
'place' => '221',
'quarter' => '10318',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nottingham',
'title_category' => 'innkeeper',
'region' => '56',
'place' => '222',
'quarter' => '10319',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nottingham',
'title_category' => 'innkeeper',
'region' => '56',
'place' => '222',
'quarter' => '10320',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nottingham',
'title_category' => 'innkeeper',
'region' => '56',
'place' => '222',
'quarter' => '10321',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nottingham',
'title_category' => 'innkeeper',
'region' => '56',
'place' => '222',
'quarter' => '10322',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Boston',
'title_category' => 'innkeeper',
'region' => '56',
'place' => '223',
'quarter' => '10323',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Boston',
'title_category' => 'innkeeper',
'region' => '56',
'place' => '223',
'quarter' => '10324',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Boston',
'title_category' => 'innkeeper',
'region' => '56',
'place' => '223',
'quarter' => '10325',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Boston',
'title_category' => 'innkeeper',
'region' => '56',
'place' => '223',
'quarter' => '10326',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Stamford',
'title_category' => 'innkeeper',
'region' => '56',
'place' => '224',
'quarter' => '10327',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Stamford',
'title_category' => 'innkeeper',
'region' => '56',
'place' => '224',
'quarter' => '10328',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Stamford',
'title_category' => 'innkeeper',
'region' => '56',
'place' => '224',
'quarter' => '10329',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Stamford',
'title_category' => 'innkeeper',
'region' => '56',
'place' => '224',
'quarter' => '10330',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Caernarfon',
'title_category' => 'innkeeper',
'region' => '57',
'place' => '225',
'quarter' => '10331',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Caernarfon',
'title_category' => 'innkeeper',
'region' => '57',
'place' => '225',
'quarter' => '10332',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Caernarfon',
'title_category' => 'innkeeper',
'region' => '57',
'place' => '225',
'quarter' => '10333',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Caernarfon',
'title_category' => 'innkeeper',
'region' => '57',
'place' => '225',
'quarter' => '10334',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Harlech',
'title_category' => 'innkeeper',
'region' => '57',
'place' => '226',
'quarter' => '10335',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Harlech',
'title_category' => 'innkeeper',
'region' => '57',
'place' => '226',
'quarter' => '10336',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Harlech',
'title_category' => 'innkeeper',
'region' => '57',
'place' => '226',
'quarter' => '10337',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Harlech',
'title_category' => 'innkeeper',
'region' => '57',
'place' => '226',
'quarter' => '10338',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bangor',
'title_category' => 'innkeeper',
'region' => '57',
'place' => '227',
'quarter' => '10339',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bangor',
'title_category' => 'innkeeper',
'region' => '57',
'place' => '227',
'quarter' => '10340',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bangor',
'title_category' => 'innkeeper',
'region' => '57',
'place' => '227',
'quarter' => '10341',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bangor',
'title_category' => 'innkeeper',
'region' => '57',
'place' => '227',
'quarter' => '10342',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Conwy',
'title_category' => 'innkeeper',
'region' => '57',
'place' => '228',
'quarter' => '10343',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Conwy',
'title_category' => 'innkeeper',
'region' => '57',
'place' => '228',
'quarter' => '10344',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Conwy',
'title_category' => 'innkeeper',
'region' => '57',
'place' => '228',
'quarter' => '10345',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Conwy',
'title_category' => 'innkeeper',
'region' => '57',
'place' => '228',
'quarter' => '10346',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chester',
'title_category' => 'innkeeper',
'region' => '58',
'place' => '229',
'quarter' => '10347',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chester',
'title_category' => 'innkeeper',
'region' => '58',
'place' => '229',
'quarter' => '10348',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chester',
'title_category' => 'innkeeper',
'region' => '58',
'place' => '229',
'quarter' => '10349',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chester',
'title_category' => 'innkeeper',
'region' => '58',
'place' => '229',
'quarter' => '10350',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Shrewsbury',
'title_category' => 'innkeeper',
'region' => '58',
'place' => '230',
'quarter' => '10351',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Shrewsbury',
'title_category' => 'innkeeper',
'region' => '58',
'place' => '230',
'quarter' => '10352',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Shrewsbury',
'title_category' => 'innkeeper',
'region' => '58',
'place' => '230',
'quarter' => '10353',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Shrewsbury',
'title_category' => 'innkeeper',
'region' => '58',
'place' => '230',
'quarter' => '10354',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Glasbury',
'title_category' => 'innkeeper',
'region' => '58',
'place' => '231',
'quarter' => '10355',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Glasbury',
'title_category' => 'innkeeper',
'region' => '58',
'place' => '231',
'quarter' => '10356',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Glasbury',
'title_category' => 'innkeeper',
'region' => '58',
'place' => '231',
'quarter' => '10357',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Glasbury',
'title_category' => 'innkeeper',
'region' => '58',
'place' => '231',
'quarter' => '10358',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Llanllugan',
'title_category' => 'innkeeper',
'region' => '58',
'place' => '232',
'quarter' => '10359',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Llanllugan',
'title_category' => 'innkeeper',
'region' => '58',
'place' => '232',
'quarter' => '10360',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Llanllugan',
'title_category' => 'innkeeper',
'region' => '58',
'place' => '232',
'quarter' => '10361',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Llanllugan',
'title_category' => 'innkeeper',
'region' => '58',
'place' => '232',
'quarter' => '10362',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Caerwent',
'title_category' => 'innkeeper',
'region' => '59',
'place' => '233',
'quarter' => '10363',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Caerwent',
'title_category' => 'innkeeper',
'region' => '59',
'place' => '233',
'quarter' => '10364',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Caerwent',
'title_category' => 'innkeeper',
'region' => '59',
'place' => '233',
'quarter' => '10365',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Caerwent',
'title_category' => 'innkeeper',
'region' => '59',
'place' => '233',
'quarter' => '10366',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Carmarthen',
'title_category' => 'innkeeper',
'region' => '59',
'place' => '234',
'quarter' => '10367',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Carmarthen',
'title_category' => 'innkeeper',
'region' => '59',
'place' => '234',
'quarter' => '10368',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Carmarthen',
'title_category' => 'innkeeper',
'region' => '59',
'place' => '234',
'quarter' => '10369',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Carmarthen',
'title_category' => 'innkeeper',
'region' => '59',
'place' => '234',
'quarter' => '10370',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cardiff',
'title_category' => 'innkeeper',
'region' => '59',
'place' => '235',
'quarter' => '10371',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cardiff',
'title_category' => 'innkeeper',
'region' => '59',
'place' => '235',
'quarter' => '10372',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cardiff',
'title_category' => 'innkeeper',
'region' => '59',
'place' => '235',
'quarter' => '10373',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cardiff',
'title_category' => 'innkeeper',
'region' => '59',
'place' => '235',
'quarter' => '10374',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Abergavenny',
'title_category' => 'innkeeper',
'region' => '59',
'place' => '236',
'quarter' => '10375',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Abergavenny',
'title_category' => 'innkeeper',
'region' => '59',
'place' => '236',
'quarter' => '10376',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Abergavenny',
'title_category' => 'innkeeper',
'region' => '59',
'place' => '236',
'quarter' => '10377',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Abergavenny',
'title_category' => 'innkeeper',
'region' => '59',
'place' => '236',
'quarter' => '10378',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Oslo',
'title_category' => 'innkeeper',
'region' => '60',
'place' => '237',
'quarter' => '10379',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Oslo',
'title_category' => 'innkeeper',
'region' => '60',
'place' => '237',
'quarter' => '10380',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Oslo',
'title_category' => 'innkeeper',
'region' => '60',
'place' => '237',
'quarter' => '10381',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Oslo',
'title_category' => 'innkeeper',
'region' => '60',
'place' => '237',
'quarter' => '10382',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tonsborg',
'title_category' => 'innkeeper',
'region' => '60',
'place' => '238',
'quarter' => '10383',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tonsborg',
'title_category' => 'innkeeper',
'region' => '60',
'place' => '238',
'quarter' => '10384',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tonsborg',
'title_category' => 'innkeeper',
'region' => '60',
'place' => '238',
'quarter' => '10385',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tonsborg',
'title_category' => 'innkeeper',
'region' => '60',
'place' => '238',
'quarter' => '10386',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hamar',
'title_category' => 'innkeeper',
'region' => '60',
'place' => '239',
'quarter' => '10387',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hamar',
'title_category' => 'innkeeper',
'region' => '60',
'place' => '239',
'quarter' => '10388',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hamar',
'title_category' => 'innkeeper',
'region' => '60',
'place' => '239',
'quarter' => '10389',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hamar',
'title_category' => 'innkeeper',
'region' => '60',
'place' => '239',
'quarter' => '10390',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gimsoy',
'title_category' => 'innkeeper',
'region' => '60',
'place' => '240',
'quarter' => '10391',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gimsoy',
'title_category' => 'innkeeper',
'region' => '60',
'place' => '240',
'quarter' => '10392',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gimsoy',
'title_category' => 'innkeeper',
'region' => '60',
'place' => '240',
'quarter' => '10393',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gimsoy',
'title_category' => 'innkeeper',
'region' => '60',
'place' => '240',
'quarter' => '10394',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bergen',
'title_category' => 'innkeeper',
'region' => '61',
'place' => '241',
'quarter' => '10395',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bergen',
'title_category' => 'innkeeper',
'region' => '61',
'place' => '241',
'quarter' => '10396',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bergen',
'title_category' => 'innkeeper',
'region' => '61',
'place' => '241',
'quarter' => '10397',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bergen',
'title_category' => 'innkeeper',
'region' => '61',
'place' => '241',
'quarter' => '10398',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Holm',
'title_category' => 'innkeeper',
'region' => '61',
'place' => '242',
'quarter' => '10399',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Holm',
'title_category' => 'innkeeper',
'region' => '61',
'place' => '242',
'quarter' => '10400',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Holm',
'title_category' => 'innkeeper',
'region' => '61',
'place' => '242',
'quarter' => '10401',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Holm',
'title_category' => 'innkeeper',
'region' => '61',
'place' => '242',
'quarter' => '10402',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Stavanger',
'title_category' => 'innkeeper',
'region' => '61',
'place' => '243',
'quarter' => '10403',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Stavanger',
'title_category' => 'innkeeper',
'region' => '61',
'place' => '243',
'quarter' => '10404',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Stavanger',
'title_category' => 'innkeeper',
'region' => '61',
'place' => '243',
'quarter' => '10405',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Stavanger',
'title_category' => 'innkeeper',
'region' => '61',
'place' => '243',
'quarter' => '10406',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Halsnoy',
'title_category' => 'innkeeper',
'region' => '61',
'place' => '244',
'quarter' => '10407',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Halsnoy',
'title_category' => 'innkeeper',
'region' => '61',
'place' => '244',
'quarter' => '10408',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Halsnoy',
'title_category' => 'innkeeper',
'region' => '61',
'place' => '244',
'quarter' => '10409',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Halsnoy',
'title_category' => 'innkeeper',
'region' => '61',
'place' => '244',
'quarter' => '10410',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Copenhagen',
'title_category' => 'innkeeper',
'region' => '62',
'place' => '245',
'quarter' => '10411',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Copenhagen',
'title_category' => 'innkeeper',
'region' => '62',
'place' => '245',
'quarter' => '10412',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Copenhagen',
'title_category' => 'innkeeper',
'region' => '62',
'place' => '245',
'quarter' => '10413',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Copenhagen',
'title_category' => 'innkeeper',
'region' => '62',
'place' => '245',
'quarter' => '10414',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kalundborg',
'title_category' => 'innkeeper',
'region' => '62',
'place' => '246',
'quarter' => '10415',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kalundborg',
'title_category' => 'innkeeper',
'region' => '62',
'place' => '246',
'quarter' => '10416',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kalundborg',
'title_category' => 'innkeeper',
'region' => '62',
'place' => '246',
'quarter' => '10417',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kalundborg',
'title_category' => 'innkeeper',
'region' => '62',
'place' => '246',
'quarter' => '10418',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Roskilde',
'title_category' => 'innkeeper',
'region' => '62',
'place' => '247',
'quarter' => '10419',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Roskilde',
'title_category' => 'innkeeper',
'region' => '62',
'place' => '247',
'quarter' => '10420',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Roskilde',
'title_category' => 'innkeeper',
'region' => '62',
'place' => '247',
'quarter' => '10421',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Roskilde',
'title_category' => 'innkeeper',
'region' => '62',
'place' => '247',
'quarter' => '10422',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Esrum',
'title_category' => 'innkeeper',
'region' => '62',
'place' => '248',
'quarter' => '10423',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Esrum',
'title_category' => 'innkeeper',
'region' => '62',
'place' => '248',
'quarter' => '10424',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Esrum',
'title_category' => 'innkeeper',
'region' => '62',
'place' => '248',
'quarter' => '10425',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Esrum',
'title_category' => 'innkeeper',
'region' => '62',
'place' => '248',
'quarter' => '10426',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lund',
'title_category' => 'innkeeper',
'region' => '63',
'place' => '249',
'quarter' => '10427',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lund',
'title_category' => 'innkeeper',
'region' => '63',
'place' => '249',
'quarter' => '10428',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lund',
'title_category' => 'innkeeper',
'region' => '63',
'place' => '249',
'quarter' => '10429',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lund',
'title_category' => 'innkeeper',
'region' => '63',
'place' => '249',
'quarter' => '10430',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Trelleborg',
'title_category' => 'innkeeper',
'region' => '63',
'place' => '250',
'quarter' => '10431',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Trelleborg',
'title_category' => 'innkeeper',
'region' => '63',
'place' => '250',
'quarter' => '10432',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Trelleborg',
'title_category' => 'innkeeper',
'region' => '63',
'place' => '250',
'quarter' => '10433',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Trelleborg',
'title_category' => 'innkeeper',
'region' => '63',
'place' => '250',
'quarter' => '10434',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Halmstad',
'title_category' => 'innkeeper',
'region' => '63',
'place' => '251',
'quarter' => '10435',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Halmstad',
'title_category' => 'innkeeper',
'region' => '63',
'place' => '251',
'quarter' => '10436',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Halmstad',
'title_category' => 'innkeeper',
'region' => '63',
'place' => '251',
'quarter' => '10437',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Halmstad',
'title_category' => 'innkeeper',
'region' => '63',
'place' => '251',
'quarter' => '10438',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Herrevad',
'title_category' => 'innkeeper',
'region' => '63',
'place' => '252',
'quarter' => '10439',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Herrevad',
'title_category' => 'innkeeper',
'region' => '63',
'place' => '252',
'quarter' => '10440',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Herrevad',
'title_category' => 'innkeeper',
'region' => '63',
'place' => '252',
'quarter' => '10441',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Herrevad',
'title_category' => 'innkeeper',
'region' => '63',
'place' => '252',
'quarter' => '10442',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aarhus',
'title_category' => 'innkeeper',
'region' => '64',
'place' => '253',
'quarter' => '10443',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aarhus',
'title_category' => 'innkeeper',
'region' => '64',
'place' => '253',
'quarter' => '10444',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aarhus',
'title_category' => 'innkeeper',
'region' => '64',
'place' => '253',
'quarter' => '10445',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aarhus',
'title_category' => 'innkeeper',
'region' => '64',
'place' => '253',
'quarter' => '10446',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aalborg',
'title_category' => 'innkeeper',
'region' => '64',
'place' => '254',
'quarter' => '10447',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aalborg',
'title_category' => 'innkeeper',
'region' => '64',
'place' => '254',
'quarter' => '10448',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aalborg',
'title_category' => 'innkeeper',
'region' => '64',
'place' => '254',
'quarter' => '10449',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aalborg',
'title_category' => 'innkeeper',
'region' => '64',
'place' => '254',
'quarter' => '10450',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ripen',
'title_category' => 'innkeeper',
'region' => '64',
'place' => '255',
'quarter' => '10451',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ripen',
'title_category' => 'innkeeper',
'region' => '64',
'place' => '255',
'quarter' => '10452',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ripen',
'title_category' => 'innkeeper',
'region' => '64',
'place' => '255',
'quarter' => '10453',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ripen',
'title_category' => 'innkeeper',
'region' => '64',
'place' => '255',
'quarter' => '10454',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Essenbaek',
'title_category' => 'innkeeper',
'region' => '64',
'place' => '256',
'quarter' => '10455',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Essenbaek',
'title_category' => 'innkeeper',
'region' => '64',
'place' => '256',
'quarter' => '10456',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Essenbaek',
'title_category' => 'innkeeper',
'region' => '64',
'place' => '256',
'quarter' => '10457',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Essenbaek',
'title_category' => 'innkeeper',
'region' => '64',
'place' => '256',
'quarter' => '10458',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Stockholm',
'title_category' => 'innkeeper',
'region' => '65',
'place' => '257',
'quarter' => '10459',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Stockholm',
'title_category' => 'innkeeper',
'region' => '65',
'place' => '257',
'quarter' => '10460',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Stockholm',
'title_category' => 'innkeeper',
'region' => '65',
'place' => '257',
'quarter' => '10461',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Stockholm',
'title_category' => 'innkeeper',
'region' => '65',
'place' => '257',
'quarter' => '10462',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vasteras',
'title_category' => 'innkeeper',
'region' => '65',
'place' => '258',
'quarter' => '10463',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vasteras',
'title_category' => 'innkeeper',
'region' => '65',
'place' => '258',
'quarter' => '10464',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vasteras',
'title_category' => 'innkeeper',
'region' => '65',
'place' => '258',
'quarter' => '10465',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vasteras',
'title_category' => 'innkeeper',
'region' => '65',
'place' => '258',
'quarter' => '10466',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Uppsala',
'title_category' => 'innkeeper',
'region' => '65',
'place' => '259',
'quarter' => '10467',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Uppsala',
'title_category' => 'innkeeper',
'region' => '65',
'place' => '259',
'quarter' => '10468',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Uppsala',
'title_category' => 'innkeeper',
'region' => '65',
'place' => '259',
'quarter' => '10469',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Uppsala',
'title_category' => 'innkeeper',
'region' => '65',
'place' => '259',
'quarter' => '10470',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Eskilstuna',
'title_category' => 'innkeeper',
'region' => '65',
'place' => '260',
'quarter' => '10471',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Eskilstuna',
'title_category' => 'innkeeper',
'region' => '65',
'place' => '260',
'quarter' => '10472',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Eskilstuna',
'title_category' => 'innkeeper',
'region' => '65',
'place' => '260',
'quarter' => '10473',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Eskilstuna',
'title_category' => 'innkeeper',
'region' => '65',
'place' => '260',
'quarter' => '10474',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Visby',
'title_category' => 'innkeeper',
'region' => '66',
'place' => '261',
'quarter' => '10475',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Visby',
'title_category' => 'innkeeper',
'region' => '66',
'place' => '261',
'quarter' => '10476',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Visby',
'title_category' => 'innkeeper',
'region' => '66',
'place' => '261',
'quarter' => '10477',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Visby',
'title_category' => 'innkeeper',
'region' => '66',
'place' => '261',
'quarter' => '10478',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kalmar',
'title_category' => 'innkeeper',
'region' => '66',
'place' => '262',
'quarter' => '10479',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kalmar',
'title_category' => 'innkeeper',
'region' => '66',
'place' => '262',
'quarter' => '10480',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kalmar',
'title_category' => 'innkeeper',
'region' => '66',
'place' => '262',
'quarter' => '10481',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kalmar',
'title_category' => 'innkeeper',
'region' => '66',
'place' => '262',
'quarter' => '10482',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vaxjo',
'title_category' => 'innkeeper',
'region' => '66',
'place' => '263',
'quarter' => '10483',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vaxjo',
'title_category' => 'innkeeper',
'region' => '66',
'place' => '263',
'quarter' => '10484',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vaxjo',
'title_category' => 'innkeeper',
'region' => '66',
'place' => '263',
'quarter' => '10485',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vaxjo',
'title_category' => 'innkeeper',
'region' => '66',
'place' => '263',
'quarter' => '10486',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nydala',
'title_category' => 'innkeeper',
'region' => '66',
'place' => '264',
'quarter' => '10487',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nydala',
'title_category' => 'innkeeper',
'region' => '66',
'place' => '264',
'quarter' => '10488',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nydala',
'title_category' => 'innkeeper',
'region' => '66',
'place' => '264',
'quarter' => '10489',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nydala',
'title_category' => 'innkeeper',
'region' => '66',
'place' => '264',
'quarter' => '10490',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Skara',
'title_category' => 'innkeeper',
'region' => '67',
'place' => '265',
'quarter' => '10491',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Skara',
'title_category' => 'innkeeper',
'region' => '67',
'place' => '265',
'quarter' => '10492',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Skara',
'title_category' => 'innkeeper',
'region' => '67',
'place' => '265',
'quarter' => '10493',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Skara',
'title_category' => 'innkeeper',
'region' => '67',
'place' => '265',
'quarter' => '10494',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dalaborg',
'title_category' => 'innkeeper',
'region' => '67',
'place' => '266',
'quarter' => '10495',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dalaborg',
'title_category' => 'innkeeper',
'region' => '67',
'place' => '266',
'quarter' => '10496',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dalaborg',
'title_category' => 'innkeeper',
'region' => '67',
'place' => '266',
'quarter' => '10497',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dalaborg',
'title_category' => 'innkeeper',
'region' => '67',
'place' => '266',
'quarter' => '10498',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jonkoping',
'title_category' => 'innkeeper',
'region' => '67',
'place' => '267',
'quarter' => '10499',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jonkoping',
'title_category' => 'innkeeper',
'region' => '67',
'place' => '267',
'quarter' => '10500',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jonkoping',
'title_category' => 'innkeeper',
'region' => '67',
'place' => '267',
'quarter' => '10501',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jonkoping',
'title_category' => 'innkeeper',
'region' => '67',
'place' => '267',
'quarter' => '10502',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vadstena',
'title_category' => 'innkeeper',
'region' => '67',
'place' => '268',
'quarter' => '10503',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vadstena',
'title_category' => 'innkeeper',
'region' => '67',
'place' => '268',
'quarter' => '10504',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vadstena',
'title_category' => 'innkeeper',
'region' => '67',
'place' => '268',
'quarter' => '10505',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vadstena',
'title_category' => 'innkeeper',
'region' => '67',
'place' => '268',
'quarter' => '10506',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Riga',
'title_category' => 'innkeeper',
'region' => '68',
'place' => '269',
'quarter' => '10507',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Riga',
'title_category' => 'innkeeper',
'region' => '68',
'place' => '269',
'quarter' => '10508',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Riga',
'title_category' => 'innkeeper',
'region' => '68',
'place' => '269',
'quarter' => '10509',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Riga',
'title_category' => 'innkeeper',
'region' => '68',
'place' => '269',
'quarter' => '10510',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Wenden',
'title_category' => 'innkeeper',
'region' => '68',
'place' => '270',
'quarter' => '10511',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Wenden',
'title_category' => 'innkeeper',
'region' => '68',
'place' => '270',
'quarter' => '10512',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Wenden',
'title_category' => 'innkeeper',
'region' => '68',
'place' => '270',
'quarter' => '10513',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Wenden',
'title_category' => 'innkeeper',
'region' => '68',
'place' => '270',
'quarter' => '10514',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Walk',
'title_category' => 'innkeeper',
'region' => '68',
'place' => '271',
'quarter' => '10515',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Walk',
'title_category' => 'innkeeper',
'region' => '68',
'place' => '271',
'quarter' => '10516',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Walk',
'title_category' => 'innkeeper',
'region' => '68',
'place' => '271',
'quarter' => '10517',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Walk',
'title_category' => 'innkeeper',
'region' => '68',
'place' => '271',
'quarter' => '10518',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dunaburg',
'title_category' => 'innkeeper',
'region' => '68',
'place' => '272',
'quarter' => '10519',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dunaburg',
'title_category' => 'innkeeper',
'region' => '68',
'place' => '272',
'quarter' => '10520',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dunaburg',
'title_category' => 'innkeeper',
'region' => '68',
'place' => '272',
'quarter' => '10521',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dunaburg',
'title_category' => 'innkeeper',
'region' => '68',
'place' => '272',
'quarter' => '10522',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pilten',
'title_category' => 'innkeeper',
'region' => '69',
'place' => '273',
'quarter' => '10523',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pilten',
'title_category' => 'innkeeper',
'region' => '69',
'place' => '273',
'quarter' => '10524',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pilten',
'title_category' => 'innkeeper',
'region' => '69',
'place' => '273',
'quarter' => '10525',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pilten',
'title_category' => 'innkeeper',
'region' => '69',
'place' => '273',
'quarter' => '10526',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Libau',
'title_category' => 'innkeeper',
'region' => '69',
'place' => '274',
'quarter' => '10527',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Libau',
'title_category' => 'innkeeper',
'region' => '69',
'place' => '274',
'quarter' => '10528',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Libau',
'title_category' => 'innkeeper',
'region' => '69',
'place' => '274',
'quarter' => '10529',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Libau',
'title_category' => 'innkeeper',
'region' => '69',
'place' => '274',
'quarter' => '10530',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Goldingen',
'title_category' => 'innkeeper',
'region' => '69',
'place' => '275',
'quarter' => '10531',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Goldingen',
'title_category' => 'innkeeper',
'region' => '69',
'place' => '275',
'quarter' => '10532',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Goldingen',
'title_category' => 'innkeeper',
'region' => '69',
'place' => '275',
'quarter' => '10533',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Goldingen',
'title_category' => 'innkeeper',
'region' => '69',
'place' => '275',
'quarter' => '10534',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Talsen',
'title_category' => 'innkeeper',
'region' => '69',
'place' => '276',
'quarter' => '10535',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Talsen',
'title_category' => 'innkeeper',
'region' => '69',
'place' => '276',
'quarter' => '10536',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Talsen',
'title_category' => 'innkeeper',
'region' => '69',
'place' => '276',
'quarter' => '10537',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Talsen',
'title_category' => 'innkeeper',
'region' => '69',
'place' => '276',
'quarter' => '10538',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Marienburg',
'title_category' => 'innkeeper',
'region' => '70',
'place' => '277',
'quarter' => '10539',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Marienburg',
'title_category' => 'innkeeper',
'region' => '70',
'place' => '277',
'quarter' => '10540',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Marienburg',
'title_category' => 'innkeeper',
'region' => '70',
'place' => '277',
'quarter' => '10541',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Marienburg',
'title_category' => 'innkeeper',
'region' => '70',
'place' => '277',
'quarter' => '10542',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Elbing',
'title_category' => 'innkeeper',
'region' => '70',
'place' => '278',
'quarter' => '10543',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Elbing',
'title_category' => 'innkeeper',
'region' => '70',
'place' => '278',
'quarter' => '10544',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Elbing',
'title_category' => 'innkeeper',
'region' => '70',
'place' => '278',
'quarter' => '10545',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Elbing',
'title_category' => 'innkeeper',
'region' => '70',
'place' => '278',
'quarter' => '10546',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Danzig',
'title_category' => 'innkeeper',
'region' => '70',
'place' => '279',
'quarter' => '10547',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Danzig',
'title_category' => 'innkeeper',
'region' => '70',
'place' => '279',
'quarter' => '10548',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Danzig',
'title_category' => 'innkeeper',
'region' => '70',
'place' => '279',
'quarter' => '10549',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Danzig',
'title_category' => 'innkeeper',
'region' => '70',
'place' => '279',
'quarter' => '10550',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Koningsberg',
'title_category' => 'innkeeper',
'region' => '70',
'place' => '280',
'quarter' => '10551',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Koningsberg',
'title_category' => 'innkeeper',
'region' => '70',
'place' => '280',
'quarter' => '10552',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Koningsberg',
'title_category' => 'innkeeper',
'region' => '70',
'place' => '280',
'quarter' => '10553',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Koningsberg',
'title_category' => 'innkeeper',
'region' => '70',
'place' => '280',
'quarter' => '10554',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Memelburg',
'title_category' => 'innkeeper',
'region' => '71',
'place' => '281',
'quarter' => '10555',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Memelburg',
'title_category' => 'innkeeper',
'region' => '71',
'place' => '281',
'quarter' => '10556',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Memelburg',
'title_category' => 'innkeeper',
'region' => '71',
'place' => '281',
'quarter' => '10557',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Memelburg',
'title_category' => 'innkeeper',
'region' => '71',
'place' => '281',
'quarter' => '10558',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saule',
'title_category' => 'innkeeper',
'region' => '71',
'place' => '282',
'quarter' => '10559',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saule',
'title_category' => 'innkeeper',
'region' => '71',
'place' => '282',
'quarter' => '10560',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saule',
'title_category' => 'innkeeper',
'region' => '71',
'place' => '282',
'quarter' => '10561',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saule',
'title_category' => 'innkeeper',
'region' => '71',
'place' => '282',
'quarter' => '10562',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tilsit',
'title_category' => 'innkeeper',
'region' => '71',
'place' => '283',
'quarter' => '10563',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tilsit',
'title_category' => 'innkeeper',
'region' => '71',
'place' => '283',
'quarter' => '10564',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tilsit',
'title_category' => 'innkeeper',
'region' => '71',
'place' => '283',
'quarter' => '10565',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tilsit',
'title_category' => 'innkeeper',
'region' => '71',
'place' => '283',
'quarter' => '10566',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Georgenburg',
'title_category' => 'innkeeper',
'region' => '71',
'place' => '284',
'quarter' => '10567',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Georgenburg',
'title_category' => 'innkeeper',
'region' => '71',
'place' => '284',
'quarter' => '10568',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Georgenburg',
'title_category' => 'innkeeper',
'region' => '71',
'place' => '284',
'quarter' => '10569',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Georgenburg',
'title_category' => 'innkeeper',
'region' => '71',
'place' => '284',
'quarter' => '10570',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Reval',
'title_category' => 'innkeeper',
'region' => '72',
'place' => '285',
'quarter' => '10571',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Reval',
'title_category' => 'innkeeper',
'region' => '72',
'place' => '285',
'quarter' => '10572',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Reval',
'title_category' => 'innkeeper',
'region' => '72',
'place' => '285',
'quarter' => '10573',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Reval',
'title_category' => 'innkeeper',
'region' => '72',
'place' => '285',
'quarter' => '10574',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Weissenstein',
'title_category' => 'innkeeper',
'region' => '72',
'place' => '286',
'quarter' => '10575',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Weissenstein',
'title_category' => 'innkeeper',
'region' => '72',
'place' => '286',
'quarter' => '10576',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Weissenstein',
'title_category' => 'innkeeper',
'region' => '72',
'place' => '286',
'quarter' => '10577',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Weissenstein',
'title_category' => 'innkeeper',
'region' => '72',
'place' => '286',
'quarter' => '10578',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Arensburg',
'title_category' => 'innkeeper',
'region' => '72',
'place' => '287',
'quarter' => '10579',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Arensburg',
'title_category' => 'innkeeper',
'region' => '72',
'place' => '287',
'quarter' => '10580',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Arensburg',
'title_category' => 'innkeeper',
'region' => '72',
'place' => '287',
'quarter' => '10581',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Arensburg',
'title_category' => 'innkeeper',
'region' => '72',
'place' => '287',
'quarter' => '10582',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hapsal',
'title_category' => 'innkeeper',
'region' => '72',
'place' => '288',
'quarter' => '10583',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hapsal',
'title_category' => 'innkeeper',
'region' => '72',
'place' => '288',
'quarter' => '10584',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hapsal',
'title_category' => 'innkeeper',
'region' => '72',
'place' => '288',
'quarter' => '10585',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hapsal',
'title_category' => 'innkeeper',
'region' => '72',
'place' => '288',
'quarter' => '10586',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Edinburgh',
'title_category' => 'innkeeper',
'region' => '73',
'place' => '289',
'quarter' => '10587',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Edinburgh',
'title_category' => 'innkeeper',
'region' => '73',
'place' => '289',
'quarter' => '10588',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Edinburgh',
'title_category' => 'innkeeper',
'region' => '73',
'place' => '289',
'quarter' => '10589',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Edinburgh',
'title_category' => 'innkeeper',
'region' => '73',
'place' => '289',
'quarter' => '10590',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Linlithgow',
'title_category' => 'innkeeper',
'region' => '73',
'place' => '290',
'quarter' => '10591',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Linlithgow',
'title_category' => 'innkeeper',
'region' => '73',
'place' => '290',
'quarter' => '10592',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Linlithgow',
'title_category' => 'innkeeper',
'region' => '73',
'place' => '290',
'quarter' => '10593',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Linlithgow',
'title_category' => 'innkeeper',
'region' => '73',
'place' => '290',
'quarter' => '10594',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dunbar',
'title_category' => 'innkeeper',
'region' => '73',
'place' => '291',
'quarter' => '10595',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dunbar',
'title_category' => 'innkeeper',
'region' => '73',
'place' => '291',
'quarter' => '10596',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dunbar',
'title_category' => 'innkeeper',
'region' => '73',
'place' => '291',
'quarter' => '10597',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dunbar',
'title_category' => 'innkeeper',
'region' => '73',
'place' => '291',
'quarter' => '10598',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Haddington',
'title_category' => 'innkeeper',
'region' => '73',
'place' => '292',
'quarter' => '10599',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Haddington',
'title_category' => 'innkeeper',
'region' => '73',
'place' => '292',
'quarter' => '10600',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Haddington',
'title_category' => 'innkeeper',
'region' => '73',
'place' => '292',
'quarter' => '10601',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Haddington',
'title_category' => 'innkeeper',
'region' => '73',
'place' => '292',
'quarter' => '10602',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bamburgh',
'title_category' => 'innkeeper',
'region' => '74',
'place' => '293',
'quarter' => '10603',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bamburgh',
'title_category' => 'innkeeper',
'region' => '74',
'place' => '293',
'quarter' => '10604',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bamburgh',
'title_category' => 'innkeeper',
'region' => '74',
'place' => '293',
'quarter' => '10605',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bamburgh',
'title_category' => 'innkeeper',
'region' => '74',
'place' => '293',
'quarter' => '10606',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alnwick',
'title_category' => 'innkeeper',
'region' => '74',
'place' => '294',
'quarter' => '10607',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alnwick',
'title_category' => 'innkeeper',
'region' => '74',
'place' => '294',
'quarter' => '10608',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alnwick',
'title_category' => 'innkeeper',
'region' => '74',
'place' => '294',
'quarter' => '10609',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alnwick',
'title_category' => 'innkeeper',
'region' => '74',
'place' => '294',
'quarter' => '10610',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Berwick',
'title_category' => 'innkeeper',
'region' => '74',
'place' => '295',
'quarter' => '10611',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Berwick',
'title_category' => 'innkeeper',
'region' => '74',
'place' => '295',
'quarter' => '10612',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Berwick',
'title_category' => 'innkeeper',
'region' => '74',
'place' => '295',
'quarter' => '10613',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Berwick',
'title_category' => 'innkeeper',
'region' => '74',
'place' => '295',
'quarter' => '10614',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jedburgh',
'title_category' => 'innkeeper',
'region' => '74',
'place' => '296',
'quarter' => '10615',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jedburgh',
'title_category' => 'innkeeper',
'region' => '74',
'place' => '296',
'quarter' => '10616',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jedburgh',
'title_category' => 'innkeeper',
'region' => '74',
'place' => '296',
'quarter' => '10617',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jedburgh',
'title_category' => 'innkeeper',
'region' => '74',
'place' => '296',
'quarter' => '10618',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dumbarton',
'title_category' => 'innkeeper',
'region' => '75',
'place' => '297',
'quarter' => '10619',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dumbarton',
'title_category' => 'innkeeper',
'region' => '75',
'place' => '297',
'quarter' => '10620',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dumbarton',
'title_category' => 'innkeeper',
'region' => '75',
'place' => '297',
'quarter' => '10621',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dumbarton',
'title_category' => 'innkeeper',
'region' => '75',
'place' => '297',
'quarter' => '10622',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kilmarnock',
'title_category' => 'innkeeper',
'region' => '75',
'place' => '298',
'quarter' => '10623',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kilmarnock',
'title_category' => 'innkeeper',
'region' => '75',
'place' => '298',
'quarter' => '10624',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kilmarnock',
'title_category' => 'innkeeper',
'region' => '75',
'place' => '298',
'quarter' => '10625',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kilmarnock',
'title_category' => 'innkeeper',
'region' => '75',
'place' => '298',
'quarter' => '10626',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Glasgow',
'title_category' => 'innkeeper',
'region' => '75',
'place' => '299',
'quarter' => '10627',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Glasgow',
'title_category' => 'innkeeper',
'region' => '75',
'place' => '299',
'quarter' => '10628',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Glasgow',
'title_category' => 'innkeeper',
'region' => '75',
'place' => '299',
'quarter' => '10629',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Glasgow',
'title_category' => 'innkeeper',
'region' => '75',
'place' => '299',
'quarter' => '10630',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ayr',
'title_category' => 'innkeeper',
'region' => '75',
'place' => '300',
'quarter' => '10631',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ayr',
'title_category' => 'innkeeper',
'region' => '75',
'place' => '300',
'quarter' => '10632',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ayr',
'title_category' => 'innkeeper',
'region' => '75',
'place' => '300',
'quarter' => '10633',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ayr',
'title_category' => 'innkeeper',
'region' => '75',
'place' => '300',
'quarter' => '10634',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Carlisle',
'title_category' => 'innkeeper',
'region' => '76',
'place' => '301',
'quarter' => '10635',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Carlisle',
'title_category' => 'innkeeper',
'region' => '76',
'place' => '301',
'quarter' => '10636',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Carlisle',
'title_category' => 'innkeeper',
'region' => '76',
'place' => '301',
'quarter' => '10637',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Carlisle',
'title_category' => 'innkeeper',
'region' => '76',
'place' => '301',
'quarter' => '10638',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Caerloverock',
'title_category' => 'innkeeper',
'region' => '76',
'place' => '302',
'quarter' => '10639',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Caerloverock',
'title_category' => 'innkeeper',
'region' => '76',
'place' => '302',
'quarter' => '10640',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Caerloverock',
'title_category' => 'innkeeper',
'region' => '76',
'place' => '302',
'quarter' => '10641',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Caerloverock',
'title_category' => 'innkeeper',
'region' => '76',
'place' => '302',
'quarter' => '10642',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Whithorn',
'title_category' => 'innkeeper',
'region' => '76',
'place' => '303',
'quarter' => '10643',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Whithorn',
'title_category' => 'innkeeper',
'region' => '76',
'place' => '303',
'quarter' => '10644',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Whithorn',
'title_category' => 'innkeeper',
'region' => '76',
'place' => '303',
'quarter' => '10645',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Whithorn',
'title_category' => 'innkeeper',
'region' => '76',
'place' => '303',
'quarter' => '10646',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kirkcudbright',
'title_category' => 'innkeeper',
'region' => '76',
'place' => '304',
'quarter' => '10647',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kirkcudbright',
'title_category' => 'innkeeper',
'region' => '76',
'place' => '304',
'quarter' => '10648',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kirkcudbright',
'title_category' => 'innkeeper',
'region' => '76',
'place' => '304',
'quarter' => '10649',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kirkcudbright',
'title_category' => 'innkeeper',
'region' => '76',
'place' => '304',
'quarter' => '10650',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dunadd',
'title_category' => 'innkeeper',
'region' => '77',
'place' => '305',
'quarter' => '10651',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dunadd',
'title_category' => 'innkeeper',
'region' => '77',
'place' => '305',
'quarter' => '10652',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dunadd',
'title_category' => 'innkeeper',
'region' => '77',
'place' => '305',
'quarter' => '10653',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dunadd',
'title_category' => 'innkeeper',
'region' => '77',
'place' => '305',
'quarter' => '10654',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dunollie',
'title_category' => 'innkeeper',
'region' => '77',
'place' => '306',
'quarter' => '10655',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dunollie',
'title_category' => 'innkeeper',
'region' => '77',
'place' => '306',
'quarter' => '10656',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dunollie',
'title_category' => 'innkeeper',
'region' => '77',
'place' => '306',
'quarter' => '10657',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dunollie',
'title_category' => 'innkeeper',
'region' => '77',
'place' => '306',
'quarter' => '10658',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dunaverty',
'title_category' => 'innkeeper',
'region' => '77',
'place' => '307',
'quarter' => '10659',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dunaverty',
'title_category' => 'innkeeper',
'region' => '77',
'place' => '307',
'quarter' => '10660',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dunaverty',
'title_category' => 'innkeeper',
'region' => '77',
'place' => '307',
'quarter' => '10661',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dunaverty',
'title_category' => 'innkeeper',
'region' => '77',
'place' => '307',
'quarter' => '10662',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Iona',
'title_category' => 'innkeeper',
'region' => '77',
'place' => '308',
'quarter' => '10663',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Iona',
'title_category' => 'innkeeper',
'region' => '77',
'place' => '308',
'quarter' => '10664',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Iona',
'title_category' => 'innkeeper',
'region' => '77',
'place' => '308',
'quarter' => '10665',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Iona',
'title_category' => 'innkeeper',
'region' => '77',
'place' => '308',
'quarter' => '10666',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Perth',
'title_category' => 'innkeeper',
'region' => '78',
'place' => '309',
'quarter' => '10667',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Perth',
'title_category' => 'innkeeper',
'region' => '78',
'place' => '309',
'quarter' => '10668',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Perth',
'title_category' => 'innkeeper',
'region' => '78',
'place' => '309',
'quarter' => '10669',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Perth',
'title_category' => 'innkeeper',
'region' => '78',
'place' => '309',
'quarter' => '10670',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Stirling',
'title_category' => 'innkeeper',
'region' => '78',
'place' => '310',
'quarter' => '10671',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Stirling',
'title_category' => 'innkeeper',
'region' => '78',
'place' => '310',
'quarter' => '10672',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Stirling',
'title_category' => 'innkeeper',
'region' => '78',
'place' => '310',
'quarter' => '10673',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Stirling',
'title_category' => 'innkeeper',
'region' => '78',
'place' => '310',
'quarter' => '10674',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Andrews',
'title_category' => 'innkeeper',
'region' => '78',
'place' => '311',
'quarter' => '10675',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Andrews',
'title_category' => 'innkeeper',
'region' => '78',
'place' => '311',
'quarter' => '10676',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Andrews',
'title_category' => 'innkeeper',
'region' => '78',
'place' => '311',
'quarter' => '10677',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Andrews',
'title_category' => 'innkeeper',
'region' => '78',
'place' => '311',
'quarter' => '10678',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dunfermline',
'title_category' => 'innkeeper',
'region' => '78',
'place' => '312',
'quarter' => '10679',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dunfermline',
'title_category' => 'innkeeper',
'region' => '78',
'place' => '312',
'quarter' => '10680',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dunfermline',
'title_category' => 'innkeeper',
'region' => '78',
'place' => '312',
'quarter' => '10681',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dunfermline',
'title_category' => 'innkeeper',
'region' => '78',
'place' => '312',
'quarter' => '10682',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Elgin',
'title_category' => 'innkeeper',
'region' => '79',
'place' => '313',
'quarter' => '10683',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Elgin',
'title_category' => 'innkeeper',
'region' => '79',
'place' => '313',
'quarter' => '10684',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Elgin',
'title_category' => 'innkeeper',
'region' => '79',
'place' => '313',
'quarter' => '10685',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Elgin',
'title_category' => 'innkeeper',
'region' => '79',
'place' => '313',
'quarter' => '10686',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nairn',
'title_category' => 'innkeeper',
'region' => '79',
'place' => '314',
'quarter' => '10687',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nairn',
'title_category' => 'innkeeper',
'region' => '79',
'place' => '314',
'quarter' => '10688',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nairn',
'title_category' => 'innkeeper',
'region' => '79',
'place' => '314',
'quarter' => '10689',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nairn',
'title_category' => 'innkeeper',
'region' => '79',
'place' => '314',
'quarter' => '10690',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mortlach',
'title_category' => 'innkeeper',
'region' => '79',
'place' => '315',
'quarter' => '10691',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mortlach',
'title_category' => 'innkeeper',
'region' => '79',
'place' => '315',
'quarter' => '10692',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mortlach',
'title_category' => 'innkeeper',
'region' => '79',
'place' => '315',
'quarter' => '10693',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mortlach',
'title_category' => 'innkeeper',
'region' => '79',
'place' => '315',
'quarter' => '10694',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aberdeen',
'title_category' => 'innkeeper',
'region' => '79',
'place' => '316',
'quarter' => '10695',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aberdeen',
'title_category' => 'innkeeper',
'region' => '79',
'place' => '316',
'quarter' => '10696',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aberdeen',
'title_category' => 'innkeeper',
'region' => '79',
'place' => '316',
'quarter' => '10697',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aberdeen',
'title_category' => 'innkeeper',
'region' => '79',
'place' => '316',
'quarter' => '10698',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dundee',
'title_category' => 'innkeeper',
'region' => '80',
'place' => '317',
'quarter' => '10699',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dundee',
'title_category' => 'innkeeper',
'region' => '80',
'place' => '317',
'quarter' => '10700',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dundee',
'title_category' => 'innkeeper',
'region' => '80',
'place' => '317',
'quarter' => '10701',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dundee',
'title_category' => 'innkeeper',
'region' => '80',
'place' => '317',
'quarter' => '10702',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Forfar',
'title_category' => 'innkeeper',
'region' => '80',
'place' => '318',
'quarter' => '10703',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Forfar',
'title_category' => 'innkeeper',
'region' => '80',
'place' => '318',
'quarter' => '10704',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Forfar',
'title_category' => 'innkeeper',
'region' => '80',
'place' => '318',
'quarter' => '10705',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Forfar',
'title_category' => 'innkeeper',
'region' => '80',
'place' => '318',
'quarter' => '10706',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Scone',
'title_category' => 'innkeeper',
'region' => '80',
'place' => '319',
'quarter' => '10707',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Scone',
'title_category' => 'innkeeper',
'region' => '80',
'place' => '319',
'quarter' => '10708',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Scone',
'title_category' => 'innkeeper',
'region' => '80',
'place' => '319',
'quarter' => '10709',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Scone',
'title_category' => 'innkeeper',
'region' => '80',
'place' => '319',
'quarter' => '10710',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Arbroath',
'title_category' => 'innkeeper',
'region' => '80',
'place' => '320',
'quarter' => '10711',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Arbroath',
'title_category' => 'innkeeper',
'region' => '80',
'place' => '320',
'quarter' => '10712',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Arbroath',
'title_category' => 'innkeeper',
'region' => '80',
'place' => '320',
'quarter' => '10713',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Arbroath',
'title_category' => 'innkeeper',
'region' => '80',
'place' => '320',
'quarter' => '10714',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dingwall',
'title_category' => 'innkeeper',
'region' => '81',
'place' => '321',
'quarter' => '10715',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dingwall',
'title_category' => 'innkeeper',
'region' => '81',
'place' => '321',
'quarter' => '10716',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dingwall',
'title_category' => 'innkeeper',
'region' => '81',
'place' => '321',
'quarter' => '10717',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dingwall',
'title_category' => 'innkeeper',
'region' => '81',
'place' => '321',
'quarter' => '10718',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Helmsdale',
'title_category' => 'innkeeper',
'region' => '81',
'place' => '322',
'quarter' => '10719',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Helmsdale',
'title_category' => 'innkeeper',
'region' => '81',
'place' => '322',
'quarter' => '10720',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Helmsdale',
'title_category' => 'innkeeper',
'region' => '81',
'place' => '322',
'quarter' => '10721',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Helmsdale',
'title_category' => 'innkeeper',
'region' => '81',
'place' => '322',
'quarter' => '10722',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rosemarkie',
'title_category' => 'innkeeper',
'region' => '81',
'place' => '323',
'quarter' => '10723',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rosemarkie',
'title_category' => 'innkeeper',
'region' => '81',
'place' => '323',
'quarter' => '10724',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rosemarkie',
'title_category' => 'innkeeper',
'region' => '81',
'place' => '323',
'quarter' => '10725',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rosemarkie',
'title_category' => 'innkeeper',
'region' => '81',
'place' => '323',
'quarter' => '10726',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dornoch',
'title_category' => 'innkeeper',
'region' => '81',
'place' => '324',
'quarter' => '10727',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dornoch',
'title_category' => 'innkeeper',
'region' => '81',
'place' => '324',
'quarter' => '10728',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dornoch',
'title_category' => 'innkeeper',
'region' => '81',
'place' => '324',
'quarter' => '10729',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dornoch',
'title_category' => 'innkeeper',
'region' => '81',
'place' => '324',
'quarter' => '10730',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dublin',
'title_category' => 'innkeeper',
'region' => '82',
'place' => '325',
'quarter' => '10731',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dublin',
'title_category' => 'innkeeper',
'region' => '82',
'place' => '325',
'quarter' => '10732',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dublin',
'title_category' => 'innkeeper',
'region' => '82',
'place' => '325',
'quarter' => '10733',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dublin',
'title_category' => 'innkeeper',
'region' => '82',
'place' => '325',
'quarter' => '10734',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tara',
'title_category' => 'innkeeper',
'region' => '82',
'place' => '326',
'quarter' => '10735',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tara',
'title_category' => 'innkeeper',
'region' => '82',
'place' => '326',
'quarter' => '10736',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tara',
'title_category' => 'innkeeper',
'region' => '82',
'place' => '326',
'quarter' => '10737',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tara',
'title_category' => 'innkeeper',
'region' => '82',
'place' => '326',
'quarter' => '10738',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kildare',
'title_category' => 'innkeeper',
'region' => '82',
'place' => '327',
'quarter' => '10739',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kildare',
'title_category' => 'innkeeper',
'region' => '82',
'place' => '327',
'quarter' => '10740',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kildare',
'title_category' => 'innkeeper',
'region' => '82',
'place' => '327',
'quarter' => '10741',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kildare',
'title_category' => 'innkeeper',
'region' => '82',
'place' => '327',
'quarter' => '10742',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Millmount',
'title_category' => 'innkeeper',
'region' => '82',
'place' => '328',
'quarter' => '10743',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Millmount',
'title_category' => 'innkeeper',
'region' => '82',
'place' => '328',
'quarter' => '10744',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Millmount',
'title_category' => 'innkeeper',
'region' => '82',
'place' => '328',
'quarter' => '10745',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Millmount',
'title_category' => 'innkeeper',
'region' => '82',
'place' => '328',
'quarter' => '10746',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Armagh',
'title_category' => 'innkeeper',
'region' => '83',
'place' => '329',
'quarter' => '10747',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Armagh',
'title_category' => 'innkeeper',
'region' => '83',
'place' => '329',
'quarter' => '10748',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Armagh',
'title_category' => 'innkeeper',
'region' => '83',
'place' => '329',
'quarter' => '10749',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Armagh',
'title_category' => 'innkeeper',
'region' => '83',
'place' => '329',
'quarter' => '10750',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Carrickfergus',
'title_category' => 'innkeeper',
'region' => '83',
'place' => '330',
'quarter' => '10751',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Carrickfergus',
'title_category' => 'innkeeper',
'region' => '83',
'place' => '330',
'quarter' => '10752',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Carrickfergus',
'title_category' => 'innkeeper',
'region' => '83',
'place' => '330',
'quarter' => '10753',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Carrickfergus',
'title_category' => 'innkeeper',
'region' => '83',
'place' => '330',
'quarter' => '10754',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Derry',
'title_category' => 'innkeeper',
'region' => '83',
'place' => '331',
'quarter' => '10755',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Derry',
'title_category' => 'innkeeper',
'region' => '83',
'place' => '331',
'quarter' => '10756',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Derry',
'title_category' => 'innkeeper',
'region' => '83',
'place' => '331',
'quarter' => '10757',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Derry',
'title_category' => 'innkeeper',
'region' => '83',
'place' => '331',
'quarter' => '10758',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Clogher',
'title_category' => 'innkeeper',
'region' => '83',
'place' => '332',
'quarter' => '10759',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Clogher',
'title_category' => 'innkeeper',
'region' => '83',
'place' => '332',
'quarter' => '10760',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Clogher',
'title_category' => 'innkeeper',
'region' => '83',
'place' => '332',
'quarter' => '10761',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Clogher',
'title_category' => 'innkeeper',
'region' => '83',
'place' => '332',
'quarter' => '10762',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Wexford',
'title_category' => 'innkeeper',
'region' => '84',
'place' => '333',
'quarter' => '10763',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Wexford',
'title_category' => 'innkeeper',
'region' => '84',
'place' => '333',
'quarter' => '10764',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Wexford',
'title_category' => 'innkeeper',
'region' => '84',
'place' => '333',
'quarter' => '10765',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Wexford',
'title_category' => 'innkeeper',
'region' => '84',
'place' => '333',
'quarter' => '10766',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kells',
'title_category' => 'innkeeper',
'region' => '84',
'place' => '334',
'quarter' => '10767',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kells',
'title_category' => 'innkeeper',
'region' => '84',
'place' => '334',
'quarter' => '10768',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kells',
'title_category' => 'innkeeper',
'region' => '84',
'place' => '334',
'quarter' => '10769',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kells',
'title_category' => 'innkeeper',
'region' => '84',
'place' => '334',
'quarter' => '10770',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Waterford',
'title_category' => 'innkeeper',
'region' => '84',
'place' => '335',
'quarter' => '10771',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Waterford',
'title_category' => 'innkeeper',
'region' => '84',
'place' => '335',
'quarter' => '10772',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Waterford',
'title_category' => 'innkeeper',
'region' => '84',
'place' => '335',
'quarter' => '10773',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Waterford',
'title_category' => 'innkeeper',
'region' => '84',
'place' => '335',
'quarter' => '10774',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Durrow',
'title_category' => 'innkeeper',
'region' => '84',
'place' => '336',
'quarter' => '10775',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Durrow',
'title_category' => 'innkeeper',
'region' => '84',
'place' => '336',
'quarter' => '10776',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Durrow',
'title_category' => 'innkeeper',
'region' => '84',
'place' => '336',
'quarter' => '10777',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Durrow',
'title_category' => 'innkeeper',
'region' => '84',
'place' => '336',
'quarter' => '10778',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cashel',
'title_category' => 'innkeeper',
'region' => '85',
'place' => '337',
'quarter' => '10779',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cashel',
'title_category' => 'innkeeper',
'region' => '85',
'place' => '337',
'quarter' => '10780',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cashel',
'title_category' => 'innkeeper',
'region' => '85',
'place' => '337',
'quarter' => '10781',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cashel',
'title_category' => 'innkeeper',
'region' => '85',
'place' => '337',
'quarter' => '10782',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Limerick',
'title_category' => 'innkeeper',
'region' => '85',
'place' => '338',
'quarter' => '10783',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Limerick',
'title_category' => 'innkeeper',
'region' => '85',
'place' => '338',
'quarter' => '10784',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Limerick',
'title_category' => 'innkeeper',
'region' => '85',
'place' => '338',
'quarter' => '10785',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Limerick',
'title_category' => 'innkeeper',
'region' => '85',
'place' => '338',
'quarter' => '10786',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cork',
'title_category' => 'innkeeper',
'region' => '85',
'place' => '339',
'quarter' => '10787',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cork',
'title_category' => 'innkeeper',
'region' => '85',
'place' => '339',
'quarter' => '10788',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cork',
'title_category' => 'innkeeper',
'region' => '85',
'place' => '339',
'quarter' => '10789',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cork',
'title_category' => 'innkeeper',
'region' => '85',
'place' => '339',
'quarter' => '10790',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Roscrea',
'title_category' => 'innkeeper',
'region' => '85',
'place' => '340',
'quarter' => '10791',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Roscrea',
'title_category' => 'innkeeper',
'region' => '85',
'place' => '340',
'quarter' => '10792',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Roscrea',
'title_category' => 'innkeeper',
'region' => '85',
'place' => '340',
'quarter' => '10793',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Roscrea',
'title_category' => 'innkeeper',
'region' => '85',
'place' => '340',
'quarter' => '10794',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Galway',
'title_category' => 'innkeeper',
'region' => '86',
'place' => '341',
'quarter' => '10795',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Galway',
'title_category' => 'innkeeper',
'region' => '86',
'place' => '341',
'quarter' => '10796',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Galway',
'title_category' => 'innkeeper',
'region' => '86',
'place' => '341',
'quarter' => '10797',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Galway',
'title_category' => 'innkeeper',
'region' => '86',
'place' => '341',
'quarter' => '10798',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mayo',
'title_category' => 'innkeeper',
'region' => '86',
'place' => '342',
'quarter' => '10799',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mayo',
'title_category' => 'innkeeper',
'region' => '86',
'place' => '342',
'quarter' => '10800',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mayo',
'title_category' => 'innkeeper',
'region' => '86',
'place' => '342',
'quarter' => '10801',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mayo',
'title_category' => 'innkeeper',
'region' => '86',
'place' => '342',
'quarter' => '10802',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tuam',
'title_category' => 'innkeeper',
'region' => '86',
'place' => '343',
'quarter' => '10803',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tuam',
'title_category' => 'innkeeper',
'region' => '86',
'place' => '343',
'quarter' => '10804',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tuam',
'title_category' => 'innkeeper',
'region' => '86',
'place' => '343',
'quarter' => '10805',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tuam',
'title_category' => 'innkeeper',
'region' => '86',
'place' => '343',
'quarter' => '10806',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Achonry',
'title_category' => 'innkeeper',
'region' => '86',
'place' => '344',
'quarter' => '10807',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Achonry',
'title_category' => 'innkeeper',
'region' => '86',
'place' => '344',
'quarter' => '10808',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Achonry',
'title_category' => 'innkeeper',
'region' => '86',
'place' => '344',
'quarter' => '10809',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Achonry',
'title_category' => 'innkeeper',
'region' => '86',
'place' => '344',
'quarter' => '10810',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pamplona',
'title_category' => 'innkeeper',
'region' => '87',
'place' => '345',
'quarter' => '10811',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pamplona',
'title_category' => 'innkeeper',
'region' => '87',
'place' => '345',
'quarter' => '10812',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pamplona',
'title_category' => 'innkeeper',
'region' => '87',
'place' => '345',
'quarter' => '10813',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pamplona',
'title_category' => 'innkeeper',
'region' => '87',
'place' => '345',
'quarter' => '10814',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Olite',
'title_category' => 'innkeeper',
'region' => '87',
'place' => '346',
'quarter' => '10815',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Olite',
'title_category' => 'innkeeper',
'region' => '87',
'place' => '346',
'quarter' => '10816',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Olite',
'title_category' => 'innkeeper',
'region' => '87',
'place' => '346',
'quarter' => '10817',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Olite',
'title_category' => 'innkeeper',
'region' => '87',
'place' => '346',
'quarter' => '10818',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tudela',
'title_category' => 'innkeeper',
'region' => '87',
'place' => '347',
'quarter' => '10819',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tudela',
'title_category' => 'innkeeper',
'region' => '87',
'place' => '347',
'quarter' => '10820',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tudela',
'title_category' => 'innkeeper',
'region' => '87',
'place' => '347',
'quarter' => '10821',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tudela',
'title_category' => 'innkeeper',
'region' => '87',
'place' => '347',
'quarter' => '10822',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Leyre',
'title_category' => 'innkeeper',
'region' => '87',
'place' => '348',
'quarter' => '10823',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Leyre',
'title_category' => 'innkeeper',
'region' => '87',
'place' => '348',
'quarter' => '10824',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Leyre',
'title_category' => 'innkeeper',
'region' => '87',
'place' => '348',
'quarter' => '10825',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Leyre',
'title_category' => 'innkeeper',
'region' => '87',
'place' => '348',
'quarter' => '10826',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'San Sebastian',
'title_category' => 'innkeeper',
'region' => '88',
'place' => '349',
'quarter' => '10827',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'San Sebastian',
'title_category' => 'innkeeper',
'region' => '88',
'place' => '349',
'quarter' => '10828',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'San Sebastian',
'title_category' => 'innkeeper',
'region' => '88',
'place' => '349',
'quarter' => '10829',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'San Sebastian',
'title_category' => 'innkeeper',
'region' => '88',
'place' => '349',
'quarter' => '10830',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Durango',
'title_category' => 'innkeeper',
'region' => '88',
'place' => '350',
'quarter' => '10831',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Durango',
'title_category' => 'innkeeper',
'region' => '88',
'place' => '350',
'quarter' => '10832',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Durango',
'title_category' => 'innkeeper',
'region' => '88',
'place' => '350',
'quarter' => '10833',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Durango',
'title_category' => 'innkeeper',
'region' => '88',
'place' => '350',
'quarter' => '10834',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bilbao',
'title_category' => 'innkeeper',
'region' => '88',
'place' => '351',
'quarter' => '10835',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bilbao',
'title_category' => 'innkeeper',
'region' => '88',
'place' => '351',
'quarter' => '10836',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bilbao',
'title_category' => 'innkeeper',
'region' => '88',
'place' => '351',
'quarter' => '10837',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bilbao',
'title_category' => 'innkeeper',
'region' => '88',
'place' => '351',
'quarter' => '10838',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gastehiz',
'title_category' => 'innkeeper',
'region' => '88',
'place' => '352',
'quarter' => '10839',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gastehiz',
'title_category' => 'innkeeper',
'region' => '88',
'place' => '352',
'quarter' => '10840',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gastehiz',
'title_category' => 'innkeeper',
'region' => '88',
'place' => '352',
'quarter' => '10841',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gastehiz',
'title_category' => 'innkeeper',
'region' => '88',
'place' => '352',
'quarter' => '10842',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jaca',
'title_category' => 'innkeeper',
'region' => '89',
'place' => '353',
'quarter' => '10843',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jaca',
'title_category' => 'innkeeper',
'region' => '89',
'place' => '353',
'quarter' => '10844',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jaca',
'title_category' => 'innkeeper',
'region' => '89',
'place' => '353',
'quarter' => '10845',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jaca',
'title_category' => 'innkeeper',
'region' => '89',
'place' => '353',
'quarter' => '10846',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Monzon',
'title_category' => 'innkeeper',
'region' => '89',
'place' => '354',
'quarter' => '10847',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Monzon',
'title_category' => 'innkeeper',
'region' => '89',
'place' => '354',
'quarter' => '10848',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Monzon',
'title_category' => 'innkeeper',
'region' => '89',
'place' => '354',
'quarter' => '10849',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Monzon',
'title_category' => 'innkeeper',
'region' => '89',
'place' => '354',
'quarter' => '10850',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Huesca',
'title_category' => 'innkeeper',
'region' => '89',
'place' => '355',
'quarter' => '10851',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Huesca',
'title_category' => 'innkeeper',
'region' => '89',
'place' => '355',
'quarter' => '10852',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Huesca',
'title_category' => 'innkeeper',
'region' => '89',
'place' => '355',
'quarter' => '10853',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Huesca',
'title_category' => 'innkeeper',
'region' => '89',
'place' => '355',
'quarter' => '10854',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sobrarbe',
'title_category' => 'innkeeper',
'region' => '89',
'place' => '356',
'quarter' => '10855',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sobrarbe',
'title_category' => 'innkeeper',
'region' => '89',
'place' => '356',
'quarter' => '10856',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sobrarbe',
'title_category' => 'innkeeper',
'region' => '89',
'place' => '356',
'quarter' => '10857',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sobrarbe',
'title_category' => 'innkeeper',
'region' => '89',
'place' => '356',
'quarter' => '10858',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zaragoza',
'title_category' => 'innkeeper',
'region' => '90',
'place' => '357',
'quarter' => '10859',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zaragoza',
'title_category' => 'innkeeper',
'region' => '90',
'place' => '357',
'quarter' => '10860',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zaragoza',
'title_category' => 'innkeeper',
'region' => '90',
'place' => '357',
'quarter' => '10861',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zaragoza',
'title_category' => 'innkeeper',
'region' => '90',
'place' => '357',
'quarter' => '10862',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Molina de Aragon',
'title_category' => 'innkeeper',
'region' => '90',
'place' => '358',
'quarter' => '10863',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Molina de Aragon',
'title_category' => 'innkeeper',
'region' => '90',
'place' => '358',
'quarter' => '10864',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Molina de Aragon',
'title_category' => 'innkeeper',
'region' => '90',
'place' => '358',
'quarter' => '10865',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Molina de Aragon',
'title_category' => 'innkeeper',
'region' => '90',
'place' => '358',
'quarter' => '10866',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Albarracin',
'title_category' => 'innkeeper',
'region' => '90',
'place' => '359',
'quarter' => '10867',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Albarracin',
'title_category' => 'innkeeper',
'region' => '90',
'place' => '359',
'quarter' => '10868',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Albarracin',
'title_category' => 'innkeeper',
'region' => '90',
'place' => '359',
'quarter' => '10869',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Albarracin',
'title_category' => 'innkeeper',
'region' => '90',
'place' => '359',
'quarter' => '10870',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rueda',
'title_category' => 'innkeeper',
'region' => '90',
'place' => '360',
'quarter' => '10871',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rueda',
'title_category' => 'innkeeper',
'region' => '90',
'place' => '360',
'quarter' => '10872',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rueda',
'title_category' => 'innkeeper',
'region' => '90',
'place' => '360',
'quarter' => '10873',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rueda',
'title_category' => 'innkeeper',
'region' => '90',
'place' => '360',
'quarter' => '10874',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gerona',
'title_category' => 'innkeeper',
'region' => '91',
'place' => '361',
'quarter' => '10875',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gerona',
'title_category' => 'innkeeper',
'region' => '91',
'place' => '361',
'quarter' => '10876',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gerona',
'title_category' => 'innkeeper',
'region' => '91',
'place' => '361',
'quarter' => '10877',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gerona',
'title_category' => 'innkeeper',
'region' => '91',
'place' => '361',
'quarter' => '10878',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ripoll',
'title_category' => 'innkeeper',
'region' => '91',
'place' => '362',
'quarter' => '10879',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ripoll',
'title_category' => 'innkeeper',
'region' => '91',
'place' => '362',
'quarter' => '10880',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ripoll',
'title_category' => 'innkeeper',
'region' => '91',
'place' => '362',
'quarter' => '10881',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ripoll',
'title_category' => 'innkeeper',
'region' => '91',
'place' => '362',
'quarter' => '10882',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Emporda',
'title_category' => 'innkeeper',
'region' => '91',
'place' => '363',
'quarter' => '10883',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Emporda',
'title_category' => 'innkeeper',
'region' => '91',
'place' => '363',
'quarter' => '10884',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Emporda',
'title_category' => 'innkeeper',
'region' => '91',
'place' => '363',
'quarter' => '10885',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Emporda',
'title_category' => 'innkeeper',
'region' => '91',
'place' => '363',
'quarter' => '10886',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sant Feliu de Guixols',
'title_category' => 'innkeeper',
'region' => '91',
'place' => '364',
'quarter' => '10887',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sant Feliu de Guixols',
'title_category' => 'innkeeper',
'region' => '91',
'place' => '364',
'quarter' => '10888',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sant Feliu de Guixols',
'title_category' => 'innkeeper',
'region' => '91',
'place' => '364',
'quarter' => '10889',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sant Feliu de Guixols',
'title_category' => 'innkeeper',
'region' => '91',
'place' => '364',
'quarter' => '10890',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Barcelona',
'title_category' => 'innkeeper',
'region' => '92',
'place' => '365',
'quarter' => '10891',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Barcelona',
'title_category' => 'innkeeper',
'region' => '92',
'place' => '365',
'quarter' => '10892',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Barcelona',
'title_category' => 'innkeeper',
'region' => '92',
'place' => '365',
'quarter' => '10893',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Barcelona',
'title_category' => 'innkeeper',
'region' => '92',
'place' => '365',
'quarter' => '10894',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Barbens',
'title_category' => 'innkeeper',
'region' => '92',
'place' => '366',
'quarter' => '10895',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Barbens',
'title_category' => 'innkeeper',
'region' => '92',
'place' => '366',
'quarter' => '10896',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Barbens',
'title_category' => 'innkeeper',
'region' => '92',
'place' => '366',
'quarter' => '10897',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Barbens',
'title_category' => 'innkeeper',
'region' => '92',
'place' => '366',
'quarter' => '10898',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Manresa',
'title_category' => 'innkeeper',
'region' => '92',
'place' => '367',
'quarter' => '10899',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Manresa',
'title_category' => 'innkeeper',
'region' => '92',
'place' => '367',
'quarter' => '10900',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Manresa',
'title_category' => 'innkeeper',
'region' => '92',
'place' => '367',
'quarter' => '10901',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Manresa',
'title_category' => 'innkeeper',
'region' => '92',
'place' => '367',
'quarter' => '10902',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Monserrat',
'title_category' => 'innkeeper',
'region' => '92',
'place' => '368',
'quarter' => '10903',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Monserrat',
'title_category' => 'innkeeper',
'region' => '92',
'place' => '368',
'quarter' => '10904',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Monserrat',
'title_category' => 'innkeeper',
'region' => '92',
'place' => '368',
'quarter' => '10905',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Monserrat',
'title_category' => 'innkeeper',
'region' => '92',
'place' => '368',
'quarter' => '10906',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Valencia',
'title_category' => 'innkeeper',
'region' => '93',
'place' => '369',
'quarter' => '10907',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Valencia',
'title_category' => 'innkeeper',
'region' => '93',
'place' => '369',
'quarter' => '10908',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Valencia',
'title_category' => 'innkeeper',
'region' => '93',
'place' => '369',
'quarter' => '10909',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Valencia',
'title_category' => 'innkeeper',
'region' => '93',
'place' => '369',
'quarter' => '10910',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sagunto',
'title_category' => 'innkeeper',
'region' => '93',
'place' => '370',
'quarter' => '10911',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sagunto',
'title_category' => 'innkeeper',
'region' => '93',
'place' => '370',
'quarter' => '10912',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sagunto',
'title_category' => 'innkeeper',
'region' => '93',
'place' => '370',
'quarter' => '10913',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sagunto',
'title_category' => 'innkeeper',
'region' => '93',
'place' => '370',
'quarter' => '10914',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Castellon',
'title_category' => 'innkeeper',
'region' => '93',
'place' => '371',
'quarter' => '10915',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Castellon',
'title_category' => 'innkeeper',
'region' => '93',
'place' => '371',
'quarter' => '10916',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Castellon',
'title_category' => 'innkeeper',
'region' => '93',
'place' => '371',
'quarter' => '10917',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Castellon',
'title_category' => 'innkeeper',
'region' => '93',
'place' => '371',
'quarter' => '10918',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Serra',
'title_category' => 'innkeeper',
'region' => '93',
'place' => '372',
'quarter' => '10919',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Serra',
'title_category' => 'innkeeper',
'region' => '93',
'place' => '372',
'quarter' => '10920',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Serra',
'title_category' => 'innkeeper',
'region' => '93',
'place' => '372',
'quarter' => '10921',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Serra',
'title_category' => 'innkeeper',
'region' => '93',
'place' => '372',
'quarter' => '10922',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Denia',
'title_category' => 'innkeeper',
'region' => '94',
'place' => '373',
'quarter' => '10923',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Denia',
'title_category' => 'innkeeper',
'region' => '94',
'place' => '373',
'quarter' => '10924',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Denia',
'title_category' => 'innkeeper',
'region' => '94',
'place' => '373',
'quarter' => '10925',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Denia',
'title_category' => 'innkeeper',
'region' => '94',
'place' => '373',
'quarter' => '10926',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Guadalest',
'title_category' => 'innkeeper',
'region' => '94',
'place' => '374',
'quarter' => '10927',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Guadalest',
'title_category' => 'innkeeper',
'region' => '94',
'place' => '374',
'quarter' => '10928',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Guadalest',
'title_category' => 'innkeeper',
'region' => '94',
'place' => '374',
'quarter' => '10929',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Guadalest',
'title_category' => 'innkeeper',
'region' => '94',
'place' => '374',
'quarter' => '10930',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alicante',
'title_category' => 'innkeeper',
'region' => '94',
'place' => '375',
'quarter' => '10931',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alicante',
'title_category' => 'innkeeper',
'region' => '94',
'place' => '375',
'quarter' => '10932',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alicante',
'title_category' => 'innkeeper',
'region' => '94',
'place' => '375',
'quarter' => '10933',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alicante',
'title_category' => 'innkeeper',
'region' => '94',
'place' => '375',
'quarter' => '10934',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gandia',
'title_category' => 'innkeeper',
'region' => '94',
'place' => '376',
'quarter' => '10935',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gandia',
'title_category' => 'innkeeper',
'region' => '94',
'place' => '376',
'quarter' => '10936',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gandia',
'title_category' => 'innkeeper',
'region' => '94',
'place' => '376',
'quarter' => '10937',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gandia',
'title_category' => 'innkeeper',
'region' => '94',
'place' => '376',
'quarter' => '10938',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Palma',
'title_category' => 'innkeeper',
'region' => '95',
'place' => '377',
'quarter' => '10939',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Palma',
'title_category' => 'innkeeper',
'region' => '95',
'place' => '377',
'quarter' => '10940',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Palma',
'title_category' => 'innkeeper',
'region' => '95',
'place' => '377',
'quarter' => '10941',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Palma',
'title_category' => 'innkeeper',
'region' => '95',
'place' => '377',
'quarter' => '10942',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pollenca',
'title_category' => 'innkeeper',
'region' => '95',
'place' => '378',
'quarter' => '10943',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pollenca',
'title_category' => 'innkeeper',
'region' => '95',
'place' => '378',
'quarter' => '10944',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pollenca',
'title_category' => 'innkeeper',
'region' => '95',
'place' => '378',
'quarter' => '10945',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pollenca',
'title_category' => 'innkeeper',
'region' => '95',
'place' => '378',
'quarter' => '10946',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Menorca',
'title_category' => 'innkeeper',
'region' => '95',
'place' => '379',
'quarter' => '10947',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Menorca',
'title_category' => 'innkeeper',
'region' => '95',
'place' => '379',
'quarter' => '10948',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Menorca',
'title_category' => 'innkeeper',
'region' => '95',
'place' => '379',
'quarter' => '10949',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Menorca',
'title_category' => 'innkeeper',
'region' => '95',
'place' => '379',
'quarter' => '10950',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ibiza',
'title_category' => 'innkeeper',
'region' => '95',
'place' => '380',
'quarter' => '10951',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ibiza',
'title_category' => 'innkeeper',
'region' => '95',
'place' => '380',
'quarter' => '10952',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ibiza',
'title_category' => 'innkeeper',
'region' => '95',
'place' => '380',
'quarter' => '10953',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ibiza',
'title_category' => 'innkeeper',
'region' => '95',
'place' => '380',
'quarter' => '10954',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Leon',
'title_category' => 'innkeeper',
'region' => '96',
'place' => '381',
'quarter' => '10955',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Leon',
'title_category' => 'innkeeper',
'region' => '96',
'place' => '381',
'quarter' => '10956',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Leon',
'title_category' => 'innkeeper',
'region' => '96',
'place' => '381',
'quarter' => '10957',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Leon',
'title_category' => 'innkeeper',
'region' => '96',
'place' => '381',
'quarter' => '10958',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Robla',
'title_category' => 'innkeeper',
'region' => '96',
'place' => '382',
'quarter' => '10959',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Robla',
'title_category' => 'innkeeper',
'region' => '96',
'place' => '382',
'quarter' => '10960',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Robla',
'title_category' => 'innkeeper',
'region' => '96',
'place' => '382',
'quarter' => '10961',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Robla',
'title_category' => 'innkeeper',
'region' => '96',
'place' => '382',
'quarter' => '10962',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'San Guillermo',
'title_category' => 'innkeeper',
'region' => '96',
'place' => '383',
'quarter' => '10963',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'San Guillermo',
'title_category' => 'innkeeper',
'region' => '96',
'place' => '383',
'quarter' => '10964',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'San Guillermo',
'title_category' => 'innkeeper',
'region' => '96',
'place' => '383',
'quarter' => '10965',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'San Guillermo',
'title_category' => 'innkeeper',
'region' => '96',
'place' => '383',
'quarter' => '10966',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sahagun',
'title_category' => 'innkeeper',
'region' => '96',
'place' => '384',
'quarter' => '10967',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sahagun',
'title_category' => 'innkeeper',
'region' => '96',
'place' => '384',
'quarter' => '10968',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sahagun',
'title_category' => 'innkeeper',
'region' => '96',
'place' => '384',
'quarter' => '10969',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sahagun',
'title_category' => 'innkeeper',
'region' => '96',
'place' => '384',
'quarter' => '10970',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Oviedo',
'title_category' => 'innkeeper',
'region' => '97',
'place' => '385',
'quarter' => '10971',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Oviedo',
'title_category' => 'innkeeper',
'region' => '97',
'place' => '385',
'quarter' => '10972',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Oviedo',
'title_category' => 'innkeeper',
'region' => '97',
'place' => '385',
'quarter' => '10973',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Oviedo',
'title_category' => 'innkeeper',
'region' => '97',
'place' => '385',
'quarter' => '10974',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aviles',
'title_category' => 'innkeeper',
'region' => '97',
'place' => '386',
'quarter' => '10975',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aviles',
'title_category' => 'innkeeper',
'region' => '97',
'place' => '386',
'quarter' => '10976',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aviles',
'title_category' => 'innkeeper',
'region' => '97',
'place' => '386',
'quarter' => '10977',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aviles',
'title_category' => 'innkeeper',
'region' => '97',
'place' => '386',
'quarter' => '10978',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gijon',
'title_category' => 'innkeeper',
'region' => '97',
'place' => '387',
'quarter' => '10979',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gijon',
'title_category' => 'innkeeper',
'region' => '97',
'place' => '387',
'quarter' => '10980',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gijon',
'title_category' => 'innkeeper',
'region' => '97',
'place' => '387',
'quarter' => '10981',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gijon',
'title_category' => 'innkeeper',
'region' => '97',
'place' => '387',
'quarter' => '10982',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Santo Toribio',
'title_category' => 'innkeeper',
'region' => '97',
'place' => '388',
'quarter' => '10983',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Santo Toribio',
'title_category' => 'innkeeper',
'region' => '97',
'place' => '388',
'quarter' => '10984',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Santo Toribio',
'title_category' => 'innkeeper',
'region' => '97',
'place' => '388',
'quarter' => '10985',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Santo Toribio',
'title_category' => 'innkeeper',
'region' => '97',
'place' => '388',
'quarter' => '10986',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Valladolid',
'title_category' => 'innkeeper',
'region' => '98',
'place' => '389',
'quarter' => '10987',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Valladolid',
'title_category' => 'innkeeper',
'region' => '98',
'place' => '389',
'quarter' => '10988',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Valladolid',
'title_category' => 'innkeeper',
'region' => '98',
'place' => '389',
'quarter' => '10989',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Valladolid',
'title_category' => 'innkeeper',
'region' => '98',
'place' => '389',
'quarter' => '10990',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Avila',
'title_category' => 'innkeeper',
'region' => '98',
'place' => '390',
'quarter' => '10991',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Avila',
'title_category' => 'innkeeper',
'region' => '98',
'place' => '390',
'quarter' => '10992',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Avila',
'title_category' => 'innkeeper',
'region' => '98',
'place' => '390',
'quarter' => '10993',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Avila',
'title_category' => 'innkeeper',
'region' => '98',
'place' => '390',
'quarter' => '10994',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Segovia',
'title_category' => 'innkeeper',
'region' => '98',
'place' => '391',
'quarter' => '10995',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Segovia',
'title_category' => 'innkeeper',
'region' => '98',
'place' => '391',
'quarter' => '10996',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Segovia',
'title_category' => 'innkeeper',
'region' => '98',
'place' => '391',
'quarter' => '10997',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Segovia',
'title_category' => 'innkeeper',
'region' => '98',
'place' => '391',
'quarter' => '10998',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Salamanca',
'title_category' => 'innkeeper',
'region' => '98',
'place' => '392',
'quarter' => '10999',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Salamanca',
'title_category' => 'innkeeper',
'region' => '98',
'place' => '392',
'quarter' => '11000',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Salamanca',
'title_category' => 'innkeeper',
'region' => '98',
'place' => '392',
'quarter' => '11001',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Salamanca',
'title_category' => 'innkeeper',
'region' => '98',
'place' => '392',
'quarter' => '11002',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Burgos',
'title_category' => 'innkeeper',
'region' => '99',
'place' => '393',
'quarter' => '11003',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Burgos',
'title_category' => 'innkeeper',
'region' => '99',
'place' => '393',
'quarter' => '11004',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Burgos',
'title_category' => 'innkeeper',
'region' => '99',
'place' => '393',
'quarter' => '11005',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Burgos',
'title_category' => 'innkeeper',
'region' => '99',
'place' => '393',
'quarter' => '11006',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Santo Domingo de Silos',
'title_category' => 'innkeeper',
'region' => '99',
'place' => '394',
'quarter' => '11007',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Santo Domingo de Silos',
'title_category' => 'innkeeper',
'region' => '99',
'place' => '394',
'quarter' => '11008',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Santo Domingo de Silos',
'title_category' => 'innkeeper',
'region' => '99',
'place' => '394',
'quarter' => '11009',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Santo Domingo de Silos',
'title_category' => 'innkeeper',
'region' => '99',
'place' => '394',
'quarter' => '11010',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Palencia',
'title_category' => 'innkeeper',
'region' => '99',
'place' => '395',
'quarter' => '11011',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Palencia',
'title_category' => 'innkeeper',
'region' => '99',
'place' => '395',
'quarter' => '11012',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Palencia',
'title_category' => 'innkeeper',
'region' => '99',
'place' => '395',
'quarter' => '11013',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Palencia',
'title_category' => 'innkeeper',
'region' => '99',
'place' => '395',
'quarter' => '11014',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'San Millan',
'title_category' => 'innkeeper',
'region' => '99',
'place' => '396',
'quarter' => '11015',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'San Millan',
'title_category' => 'innkeeper',
'region' => '99',
'place' => '396',
'quarter' => '11016',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'San Millan',
'title_category' => 'innkeeper',
'region' => '99',
'place' => '396',
'quarter' => '11017',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'San Millan',
'title_category' => 'innkeeper',
'region' => '99',
'place' => '396',
'quarter' => '11018',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Santiago',
'title_category' => 'innkeeper',
'region' => '100',
'place' => '397',
'quarter' => '11019',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Santiago',
'title_category' => 'innkeeper',
'region' => '100',
'place' => '397',
'quarter' => '11020',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Santiago',
'title_category' => 'innkeeper',
'region' => '100',
'place' => '397',
'quarter' => '11021',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Santiago',
'title_category' => 'innkeeper',
'region' => '100',
'place' => '397',
'quarter' => '11022',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ourense',
'title_category' => 'innkeeper',
'region' => '100',
'place' => '398',
'quarter' => '11023',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ourense',
'title_category' => 'innkeeper',
'region' => '100',
'place' => '398',
'quarter' => '11024',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ourense',
'title_category' => 'innkeeper',
'region' => '100',
'place' => '398',
'quarter' => '11025',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ourense',
'title_category' => 'innkeeper',
'region' => '100',
'place' => '398',
'quarter' => '11026',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Coruna',
'title_category' => 'innkeeper',
'region' => '100',
'place' => '399',
'quarter' => '11027',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Coruna',
'title_category' => 'innkeeper',
'region' => '100',
'place' => '399',
'quarter' => '11028',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Coruna',
'title_category' => 'innkeeper',
'region' => '100',
'place' => '399',
'quarter' => '11029',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Coruna',
'title_category' => 'innkeeper',
'region' => '100',
'place' => '399',
'quarter' => '11030',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ponferrada',
'title_category' => 'innkeeper',
'region' => '100',
'place' => '400',
'quarter' => '11031',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ponferrada',
'title_category' => 'innkeeper',
'region' => '100',
'place' => '400',
'quarter' => '11032',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ponferrada',
'title_category' => 'innkeeper',
'region' => '100',
'place' => '400',
'quarter' => '11033',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ponferrada',
'title_category' => 'innkeeper',
'region' => '100',
'place' => '400',
'quarter' => '11034',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lisbon',
'title_category' => 'innkeeper',
'region' => '101',
'place' => '401',
'quarter' => '11035',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lisbon',
'title_category' => 'innkeeper',
'region' => '101',
'place' => '401',
'quarter' => '11036',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lisbon',
'title_category' => 'innkeeper',
'region' => '101',
'place' => '401',
'quarter' => '11037',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lisbon',
'title_category' => 'innkeeper',
'region' => '101',
'place' => '401',
'quarter' => '11038',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sintra',
'title_category' => 'innkeeper',
'region' => '101',
'place' => '402',
'quarter' => '11039',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sintra',
'title_category' => 'innkeeper',
'region' => '101',
'place' => '402',
'quarter' => '11040',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sintra',
'title_category' => 'innkeeper',
'region' => '101',
'place' => '402',
'quarter' => '11041',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sintra',
'title_category' => 'innkeeper',
'region' => '101',
'place' => '402',
'quarter' => '11042',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Santarem',
'title_category' => 'innkeeper',
'region' => '101',
'place' => '403',
'quarter' => '11043',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Santarem',
'title_category' => 'innkeeper',
'region' => '101',
'place' => '403',
'quarter' => '11044',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Santarem',
'title_category' => 'innkeeper',
'region' => '101',
'place' => '403',
'quarter' => '11045',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Santarem',
'title_category' => 'innkeeper',
'region' => '101',
'place' => '403',
'quarter' => '11046',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alcobaca',
'title_category' => 'innkeeper',
'region' => '101',
'place' => '404',
'quarter' => '11047',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alcobaca',
'title_category' => 'innkeeper',
'region' => '101',
'place' => '404',
'quarter' => '11048',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alcobaca',
'title_category' => 'innkeeper',
'region' => '101',
'place' => '404',
'quarter' => '11049',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alcobaca',
'title_category' => 'innkeeper',
'region' => '101',
'place' => '404',
'quarter' => '11050',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Porto',
'title_category' => 'innkeeper',
'region' => '102',
'place' => '405',
'quarter' => '11051',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Porto',
'title_category' => 'innkeeper',
'region' => '102',
'place' => '405',
'quarter' => '11052',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Porto',
'title_category' => 'innkeeper',
'region' => '102',
'place' => '405',
'quarter' => '11053',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Porto',
'title_category' => 'innkeeper',
'region' => '102',
'place' => '405',
'quarter' => '11054',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Guimaraes',
'title_category' => 'innkeeper',
'region' => '102',
'place' => '406',
'quarter' => '11055',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Guimaraes',
'title_category' => 'innkeeper',
'region' => '102',
'place' => '406',
'quarter' => '11056',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Guimaraes',
'title_category' => 'innkeeper',
'region' => '102',
'place' => '406',
'quarter' => '11057',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Guimaraes',
'title_category' => 'innkeeper',
'region' => '102',
'place' => '406',
'quarter' => '11058',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Viana',
'title_category' => 'innkeeper',
'region' => '102',
'place' => '407',
'quarter' => '11059',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Viana',
'title_category' => 'innkeeper',
'region' => '102',
'place' => '407',
'quarter' => '11060',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Viana',
'title_category' => 'innkeeper',
'region' => '102',
'place' => '407',
'quarter' => '11061',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Viana',
'title_category' => 'innkeeper',
'region' => '102',
'place' => '407',
'quarter' => '11062',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aveiro',
'title_category' => 'innkeeper',
'region' => '102',
'place' => '408',
'quarter' => '11063',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aveiro',
'title_category' => 'innkeeper',
'region' => '102',
'place' => '408',
'quarter' => '11064',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aveiro',
'title_category' => 'innkeeper',
'region' => '102',
'place' => '408',
'quarter' => '11065',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aveiro',
'title_category' => 'innkeeper',
'region' => '102',
'place' => '408',
'quarter' => '11066',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Braganca',
'title_category' => 'innkeeper',
'region' => '103',
'place' => '409',
'quarter' => '11067',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Braganca',
'title_category' => 'innkeeper',
'region' => '103',
'place' => '409',
'quarter' => '11068',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Braganca',
'title_category' => 'innkeeper',
'region' => '103',
'place' => '409',
'quarter' => '11069',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Braganca',
'title_category' => 'innkeeper',
'region' => '103',
'place' => '409',
'quarter' => '11070',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sanabria',
'title_category' => 'innkeeper',
'region' => '103',
'place' => '410',
'quarter' => '11071',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sanabria',
'title_category' => 'innkeeper',
'region' => '103',
'place' => '410',
'quarter' => '11072',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sanabria',
'title_category' => 'innkeeper',
'region' => '103',
'place' => '410',
'quarter' => '11073',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sanabria',
'title_category' => 'innkeeper',
'region' => '103',
'place' => '410',
'quarter' => '11074',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Verin',
'title_category' => 'innkeeper',
'region' => '103',
'place' => '411',
'quarter' => '11075',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Verin',
'title_category' => 'innkeeper',
'region' => '103',
'place' => '411',
'quarter' => '11076',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Verin',
'title_category' => 'innkeeper',
'region' => '103',
'place' => '411',
'quarter' => '11077',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Verin',
'title_category' => 'innkeeper',
'region' => '103',
'place' => '411',
'quarter' => '11078',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mirandela',
'title_category' => 'innkeeper',
'region' => '103',
'place' => '412',
'quarter' => '11079',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mirandela',
'title_category' => 'innkeeper',
'region' => '103',
'place' => '412',
'quarter' => '11080',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mirandela',
'title_category' => 'innkeeper',
'region' => '103',
'place' => '412',
'quarter' => '11081',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mirandela',
'title_category' => 'innkeeper',
'region' => '103',
'place' => '412',
'quarter' => '11082',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Coimbra',
'title_category' => 'innkeeper',
'region' => '104',
'place' => '413',
'quarter' => '11083',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Coimbra',
'title_category' => 'innkeeper',
'region' => '104',
'place' => '413',
'quarter' => '11084',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Coimbra',
'title_category' => 'innkeeper',
'region' => '104',
'place' => '413',
'quarter' => '11085',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Coimbra',
'title_category' => 'innkeeper',
'region' => '104',
'place' => '413',
'quarter' => '11086',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tomar',
'title_category' => 'innkeeper',
'region' => '104',
'place' => '414',
'quarter' => '11087',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tomar',
'title_category' => 'innkeeper',
'region' => '104',
'place' => '414',
'quarter' => '11088',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tomar',
'title_category' => 'innkeeper',
'region' => '104',
'place' => '414',
'quarter' => '11089',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tomar',
'title_category' => 'innkeeper',
'region' => '104',
'place' => '414',
'quarter' => '11090',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Leiria',
'title_category' => 'innkeeper',
'region' => '104',
'place' => '415',
'quarter' => '11091',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Leiria',
'title_category' => 'innkeeper',
'region' => '104',
'place' => '415',
'quarter' => '11092',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Leiria',
'title_category' => 'innkeeper',
'region' => '104',
'place' => '415',
'quarter' => '11093',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Leiria',
'title_category' => 'innkeeper',
'region' => '104',
'place' => '415',
'quarter' => '11094',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pombal',
'title_category' => 'innkeeper',
'region' => '104',
'place' => '416',
'quarter' => '11095',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pombal',
'title_category' => 'innkeeper',
'region' => '104',
'place' => '416',
'quarter' => '11096',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pombal',
'title_category' => 'innkeeper',
'region' => '104',
'place' => '416',
'quarter' => '11097',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pombal',
'title_category' => 'innkeeper',
'region' => '104',
'place' => '416',
'quarter' => '11098',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Evora',
'title_category' => 'innkeeper',
'region' => '105',
'place' => '417',
'quarter' => '11099',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Evora',
'title_category' => 'innkeeper',
'region' => '105',
'place' => '417',
'quarter' => '11100',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Evora',
'title_category' => 'innkeeper',
'region' => '105',
'place' => '417',
'quarter' => '11101',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Evora',
'title_category' => 'innkeeper',
'region' => '105',
'place' => '417',
'quarter' => '11102',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alcacer',
'title_category' => 'innkeeper',
'region' => '105',
'place' => '418',
'quarter' => '11103',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alcacer',
'title_category' => 'innkeeper',
'region' => '105',
'place' => '418',
'quarter' => '11104',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alcacer',
'title_category' => 'innkeeper',
'region' => '105',
'place' => '418',
'quarter' => '11105',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alcacer',
'title_category' => 'innkeeper',
'region' => '105',
'place' => '418',
'quarter' => '11106',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Moura',
'title_category' => 'innkeeper',
'region' => '105',
'place' => '419',
'quarter' => '11107',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Moura',
'title_category' => 'innkeeper',
'region' => '105',
'place' => '419',
'quarter' => '11108',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Moura',
'title_category' => 'innkeeper',
'region' => '105',
'place' => '419',
'quarter' => '11109',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Moura',
'title_category' => 'innkeeper',
'region' => '105',
'place' => '419',
'quarter' => '11110',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Avis',
'title_category' => 'innkeeper',
'region' => '105',
'place' => '420',
'quarter' => '11111',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Avis',
'title_category' => 'innkeeper',
'region' => '105',
'place' => '420',
'quarter' => '11112',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Avis',
'title_category' => 'innkeeper',
'region' => '105',
'place' => '420',
'quarter' => '11113',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Avis',
'title_category' => 'innkeeper',
'region' => '105',
'place' => '420',
'quarter' => '11114',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Faro',
'title_category' => 'innkeeper',
'region' => '106',
'place' => '421',
'quarter' => '11115',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Faro',
'title_category' => 'innkeeper',
'region' => '106',
'place' => '421',
'quarter' => '11116',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Faro',
'title_category' => 'innkeeper',
'region' => '106',
'place' => '421',
'quarter' => '11117',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Faro',
'title_category' => 'innkeeper',
'region' => '106',
'place' => '421',
'quarter' => '11118',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Paderne',
'title_category' => 'innkeeper',
'region' => '106',
'place' => '422',
'quarter' => '11119',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Paderne',
'title_category' => 'innkeeper',
'region' => '106',
'place' => '422',
'quarter' => '11120',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Paderne',
'title_category' => 'innkeeper',
'region' => '106',
'place' => '422',
'quarter' => '11121',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Paderne',
'title_category' => 'innkeeper',
'region' => '106',
'place' => '422',
'quarter' => '11122',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alvor',
'title_category' => 'innkeeper',
'region' => '106',
'place' => '423',
'quarter' => '11123',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alvor',
'title_category' => 'innkeeper',
'region' => '106',
'place' => '423',
'quarter' => '11124',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alvor',
'title_category' => 'innkeeper',
'region' => '106',
'place' => '423',
'quarter' => '11125',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alvor',
'title_category' => 'innkeeper',
'region' => '106',
'place' => '423',
'quarter' => '11126',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Silves',
'title_category' => 'innkeeper',
'region' => '106',
'place' => '424',
'quarter' => '11127',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Silves',
'title_category' => 'innkeeper',
'region' => '106',
'place' => '424',
'quarter' => '11128',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Silves',
'title_category' => 'innkeeper',
'region' => '106',
'place' => '424',
'quarter' => '11129',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Silves',
'title_category' => 'innkeeper',
'region' => '106',
'place' => '424',
'quarter' => '11130',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cordoba',
'title_category' => 'innkeeper',
'region' => '107',
'place' => '425',
'quarter' => '11131',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cordoba',
'title_category' => 'innkeeper',
'region' => '107',
'place' => '425',
'quarter' => '11132',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cordoba',
'title_category' => 'innkeeper',
'region' => '107',
'place' => '425',
'quarter' => '11133',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cordoba',
'title_category' => 'innkeeper',
'region' => '107',
'place' => '425',
'quarter' => '11134',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Andujar',
'title_category' => 'innkeeper',
'region' => '107',
'place' => '426',
'quarter' => '11135',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Andujar',
'title_category' => 'innkeeper',
'region' => '107',
'place' => '426',
'quarter' => '11136',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Andujar',
'title_category' => 'innkeeper',
'region' => '107',
'place' => '426',
'quarter' => '11137',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Andujar',
'title_category' => 'innkeeper',
'region' => '107',
'place' => '426',
'quarter' => '11138',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jaen',
'title_category' => 'innkeeper',
'region' => '107',
'place' => '427',
'quarter' => '11139',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jaen',
'title_category' => 'innkeeper',
'region' => '107',
'place' => '427',
'quarter' => '11140',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jaen',
'title_category' => 'innkeeper',
'region' => '107',
'place' => '427',
'quarter' => '11141',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jaen',
'title_category' => 'innkeeper',
'region' => '107',
'place' => '427',
'quarter' => '11142',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ecija',
'title_category' => 'innkeeper',
'region' => '107',
'place' => '428',
'quarter' => '11143',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ecija',
'title_category' => 'innkeeper',
'region' => '107',
'place' => '428',
'quarter' => '11144',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ecija',
'title_category' => 'innkeeper',
'region' => '107',
'place' => '428',
'quarter' => '11145',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ecija',
'title_category' => 'innkeeper',
'region' => '107',
'place' => '428',
'quarter' => '11146',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sevilla',
'title_category' => 'innkeeper',
'region' => '108',
'place' => '429',
'quarter' => '11147',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sevilla',
'title_category' => 'innkeeper',
'region' => '108',
'place' => '429',
'quarter' => '11148',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sevilla',
'title_category' => 'innkeeper',
'region' => '108',
'place' => '429',
'quarter' => '11149',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sevilla',
'title_category' => 'innkeeper',
'region' => '108',
'place' => '429',
'quarter' => '11150',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Osuna',
'title_category' => 'innkeeper',
'region' => '108',
'place' => '430',
'quarter' => '11151',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Osuna',
'title_category' => 'innkeeper',
'region' => '108',
'place' => '430',
'quarter' => '11152',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Osuna',
'title_category' => 'innkeeper',
'region' => '108',
'place' => '430',
'quarter' => '11153',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Osuna',
'title_category' => 'innkeeper',
'region' => '108',
'place' => '430',
'quarter' => '11154',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cadiz',
'title_category' => 'innkeeper',
'region' => '108',
'place' => '431',
'quarter' => '11155',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cadiz',
'title_category' => 'innkeeper',
'region' => '108',
'place' => '431',
'quarter' => '11156',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cadiz',
'title_category' => 'innkeeper',
'region' => '108',
'place' => '431',
'quarter' => '11157',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cadiz',
'title_category' => 'innkeeper',
'region' => '108',
'place' => '431',
'quarter' => '11158',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Huelva',
'title_category' => 'innkeeper',
'region' => '108',
'place' => '432',
'quarter' => '11159',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Huelva',
'title_category' => 'innkeeper',
'region' => '108',
'place' => '432',
'quarter' => '11160',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Huelva',
'title_category' => 'innkeeper',
'region' => '108',
'place' => '432',
'quarter' => '11161',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Huelva',
'title_category' => 'innkeeper',
'region' => '108',
'place' => '432',
'quarter' => '11162',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Badajoz',
'title_category' => 'innkeeper',
'region' => '109',
'place' => '433',
'quarter' => '11163',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Badajoz',
'title_category' => 'innkeeper',
'region' => '109',
'place' => '433',
'quarter' => '11164',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Badajoz',
'title_category' => 'innkeeper',
'region' => '109',
'place' => '433',
'quarter' => '11165',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Badajoz',
'title_category' => 'innkeeper',
'region' => '109',
'place' => '433',
'quarter' => '11166',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zafra',
'title_category' => 'innkeeper',
'region' => '109',
'place' => '434',
'quarter' => '11167',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zafra',
'title_category' => 'innkeeper',
'region' => '109',
'place' => '434',
'quarter' => '11168',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zafra',
'title_category' => 'innkeeper',
'region' => '109',
'place' => '434',
'quarter' => '11169',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zafra',
'title_category' => 'innkeeper',
'region' => '109',
'place' => '434',
'quarter' => '11170',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Merida',
'title_category' => 'innkeeper',
'region' => '109',
'place' => '435',
'quarter' => '11171',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Merida',
'title_category' => 'innkeeper',
'region' => '109',
'place' => '435',
'quarter' => '11172',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Merida',
'title_category' => 'innkeeper',
'region' => '109',
'place' => '435',
'quarter' => '11173',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Merida',
'title_category' => 'innkeeper',
'region' => '109',
'place' => '435',
'quarter' => '11174',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Olivenza',
'title_category' => 'innkeeper',
'region' => '109',
'place' => '436',
'quarter' => '11175',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Olivenza',
'title_category' => 'innkeeper',
'region' => '109',
'place' => '436',
'quarter' => '11176',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Olivenza',
'title_category' => 'innkeeper',
'region' => '109',
'place' => '436',
'quarter' => '11177',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Olivenza',
'title_category' => 'innkeeper',
'region' => '109',
'place' => '436',
'quarter' => '11178',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Toledo',
'title_category' => 'innkeeper',
'region' => '110',
'place' => '437',
'quarter' => '11179',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Toledo',
'title_category' => 'innkeeper',
'region' => '110',
'place' => '437',
'quarter' => '11180',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Toledo',
'title_category' => 'innkeeper',
'region' => '110',
'place' => '437',
'quarter' => '11181',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Toledo',
'title_category' => 'innkeeper',
'region' => '110',
'place' => '437',
'quarter' => '11182',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Almaden',
'title_category' => 'innkeeper',
'region' => '110',
'place' => '438',
'quarter' => '11183',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Almaden',
'title_category' => 'innkeeper',
'region' => '110',
'place' => '438',
'quarter' => '11184',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Almaden',
'title_category' => 'innkeeper',
'region' => '110',
'place' => '438',
'quarter' => '11185',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Almaden',
'title_category' => 'innkeeper',
'region' => '110',
'place' => '438',
'quarter' => '11186',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Consuegra',
'title_category' => 'innkeeper',
'region' => '110',
'place' => '439',
'quarter' => '11187',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Consuegra',
'title_category' => 'innkeeper',
'region' => '110',
'place' => '439',
'quarter' => '11188',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Consuegra',
'title_category' => 'innkeeper',
'region' => '110',
'place' => '439',
'quarter' => '11189',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Consuegra',
'title_category' => 'innkeeper',
'region' => '110',
'place' => '439',
'quarter' => '11190',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Talavera',
'title_category' => 'innkeeper',
'region' => '110',
'place' => '440',
'quarter' => '11191',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Talavera',
'title_category' => 'innkeeper',
'region' => '110',
'place' => '440',
'quarter' => '11192',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Talavera',
'title_category' => 'innkeeper',
'region' => '110',
'place' => '440',
'quarter' => '11193',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Talavera',
'title_category' => 'innkeeper',
'region' => '110',
'place' => '440',
'quarter' => '11194',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Granada',
'title_category' => 'innkeeper',
'region' => '111',
'place' => '441',
'quarter' => '11195',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Granada',
'title_category' => 'innkeeper',
'region' => '111',
'place' => '441',
'quarter' => '11196',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Granada',
'title_category' => 'innkeeper',
'region' => '111',
'place' => '441',
'quarter' => '11197',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Granada',
'title_category' => 'innkeeper',
'region' => '111',
'place' => '441',
'quarter' => '11198',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alcaudete',
'title_category' => 'innkeeper',
'region' => '111',
'place' => '442',
'quarter' => '11199',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alcaudete',
'title_category' => 'innkeeper',
'region' => '111',
'place' => '442',
'quarter' => '11200',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alcaudete',
'title_category' => 'innkeeper',
'region' => '111',
'place' => '442',
'quarter' => '11201',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alcaudete',
'title_category' => 'innkeeper',
'region' => '111',
'place' => '442',
'quarter' => '11202',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Antquera',
'title_category' => 'innkeeper',
'region' => '111',
'place' => '443',
'quarter' => '11203',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Antquera',
'title_category' => 'innkeeper',
'region' => '111',
'place' => '443',
'quarter' => '11204',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Antquera',
'title_category' => 'innkeeper',
'region' => '111',
'place' => '443',
'quarter' => '11205',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Antquera',
'title_category' => 'innkeeper',
'region' => '111',
'place' => '443',
'quarter' => '11206',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Guadix',
'title_category' => 'innkeeper',
'region' => '111',
'place' => '444',
'quarter' => '11207',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Guadix',
'title_category' => 'innkeeper',
'region' => '111',
'place' => '444',
'quarter' => '11208',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Guadix',
'title_category' => 'innkeeper',
'region' => '111',
'place' => '444',
'quarter' => '11209',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Guadix',
'title_category' => 'innkeeper',
'region' => '111',
'place' => '444',
'quarter' => '11210',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Almeria',
'title_category' => 'innkeeper',
'region' => '112',
'place' => '445',
'quarter' => '11211',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Almeria',
'title_category' => 'innkeeper',
'region' => '112',
'place' => '445',
'quarter' => '11212',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Almeria',
'title_category' => 'innkeeper',
'region' => '112',
'place' => '445',
'quarter' => '11213',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Almeria',
'title_category' => 'innkeeper',
'region' => '112',
'place' => '445',
'quarter' => '11214',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Baza',
'title_category' => 'innkeeper',
'region' => '112',
'place' => '446',
'quarter' => '11215',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Baza',
'title_category' => 'innkeeper',
'region' => '112',
'place' => '446',
'quarter' => '11216',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Baza',
'title_category' => 'innkeeper',
'region' => '112',
'place' => '446',
'quarter' => '11217',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Baza',
'title_category' => 'innkeeper',
'region' => '112',
'place' => '446',
'quarter' => '11218',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Motril',
'title_category' => 'innkeeper',
'region' => '112',
'place' => '447',
'quarter' => '11219',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Motril',
'title_category' => 'innkeeper',
'region' => '112',
'place' => '447',
'quarter' => '11220',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Motril',
'title_category' => 'innkeeper',
'region' => '112',
'place' => '447',
'quarter' => '11221',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Motril',
'title_category' => 'innkeeper',
'region' => '112',
'place' => '447',
'quarter' => '11222',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lorca',
'title_category' => 'innkeeper',
'region' => '112',
'place' => '448',
'quarter' => '11223',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lorca',
'title_category' => 'innkeeper',
'region' => '112',
'place' => '448',
'quarter' => '11224',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lorca',
'title_category' => 'innkeeper',
'region' => '112',
'place' => '448',
'quarter' => '11225',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lorca',
'title_category' => 'innkeeper',
'region' => '112',
'place' => '448',
'quarter' => '11226',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Murcia',
'title_category' => 'innkeeper',
'region' => '113',
'place' => '449',
'quarter' => '11227',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Murcia',
'title_category' => 'innkeeper',
'region' => '113',
'place' => '449',
'quarter' => '11228',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Murcia',
'title_category' => 'innkeeper',
'region' => '113',
'place' => '449',
'quarter' => '11229',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Murcia',
'title_category' => 'innkeeper',
'region' => '113',
'place' => '449',
'quarter' => '11230',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alcoy',
'title_category' => 'innkeeper',
'region' => '113',
'place' => '450',
'quarter' => '11231',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alcoy',
'title_category' => 'innkeeper',
'region' => '113',
'place' => '450',
'quarter' => '11232',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alcoy',
'title_category' => 'innkeeper',
'region' => '113',
'place' => '450',
'quarter' => '11233',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alcoy',
'title_category' => 'innkeeper',
'region' => '113',
'place' => '450',
'quarter' => '11234',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alicante',
'title_category' => 'innkeeper',
'region' => '113',
'place' => '451',
'quarter' => '11235',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alicante',
'title_category' => 'innkeeper',
'region' => '113',
'place' => '451',
'quarter' => '11236',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alicante',
'title_category' => 'innkeeper',
'region' => '113',
'place' => '451',
'quarter' => '11237',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alicante',
'title_category' => 'innkeeper',
'region' => '113',
'place' => '451',
'quarter' => '11238',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cartagena',
'title_category' => 'innkeeper',
'region' => '113',
'place' => '452',
'quarter' => '11239',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cartagena',
'title_category' => 'innkeeper',
'region' => '113',
'place' => '452',
'quarter' => '11240',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cartagena',
'title_category' => 'innkeeper',
'region' => '113',
'place' => '452',
'quarter' => '11241',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cartagena',
'title_category' => 'innkeeper',
'region' => '113',
'place' => '452',
'quarter' => '11242',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Malaga',
'title_category' => 'innkeeper',
'region' => '114',
'place' => '453',
'quarter' => '11243',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Malaga',
'title_category' => 'innkeeper',
'region' => '114',
'place' => '453',
'quarter' => '11244',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Malaga',
'title_category' => 'innkeeper',
'region' => '114',
'place' => '453',
'quarter' => '11245',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Malaga',
'title_category' => 'innkeeper',
'region' => '114',
'place' => '453',
'quarter' => '11246',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Loja',
'title_category' => 'innkeeper',
'region' => '114',
'place' => '454',
'quarter' => '11247',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Loja',
'title_category' => 'innkeeper',
'region' => '114',
'place' => '454',
'quarter' => '11248',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Loja',
'title_category' => 'innkeeper',
'region' => '114',
'place' => '454',
'quarter' => '11249',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Loja',
'title_category' => 'innkeeper',
'region' => '114',
'place' => '454',
'quarter' => '11250',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Marbella',
'title_category' => 'innkeeper',
'region' => '114',
'place' => '455',
'quarter' => '11251',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Marbella',
'title_category' => 'innkeeper',
'region' => '114',
'place' => '455',
'quarter' => '11252',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Marbella',
'title_category' => 'innkeeper',
'region' => '114',
'place' => '455',
'quarter' => '11253',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Marbella',
'title_category' => 'innkeeper',
'region' => '114',
'place' => '455',
'quarter' => '11254',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ronda',
'title_category' => 'innkeeper',
'region' => '114',
'place' => '456',
'quarter' => '11255',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ronda',
'title_category' => 'innkeeper',
'region' => '114',
'place' => '456',
'quarter' => '11256',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ronda',
'title_category' => 'innkeeper',
'region' => '114',
'place' => '456',
'quarter' => '11257',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ronda',
'title_category' => 'innkeeper',
'region' => '114',
'place' => '456',
'quarter' => '11258',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Milan',
'title_category' => 'innkeeper',
'region' => '115',
'place' => '457',
'quarter' => '11259',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Milan',
'title_category' => 'innkeeper',
'region' => '115',
'place' => '457',
'quarter' => '11260',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Milan',
'title_category' => 'innkeeper',
'region' => '115',
'place' => '457',
'quarter' => '11261',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Milan',
'title_category' => 'innkeeper',
'region' => '115',
'place' => '457',
'quarter' => '11262',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Brescia',
'title_category' => 'innkeeper',
'region' => '115',
'place' => '458',
'quarter' => '11263',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Brescia',
'title_category' => 'innkeeper',
'region' => '115',
'place' => '458',
'quarter' => '11264',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Brescia',
'title_category' => 'innkeeper',
'region' => '115',
'place' => '458',
'quarter' => '11265',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Brescia',
'title_category' => 'innkeeper',
'region' => '115',
'place' => '458',
'quarter' => '11266',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pavia',
'title_category' => 'innkeeper',
'region' => '115',
'place' => '459',
'quarter' => '11267',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pavia',
'title_category' => 'innkeeper',
'region' => '115',
'place' => '459',
'quarter' => '11268',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pavia',
'title_category' => 'innkeeper',
'region' => '115',
'place' => '459',
'quarter' => '11269',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pavia',
'title_category' => 'innkeeper',
'region' => '115',
'place' => '459',
'quarter' => '11270',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cremona',
'title_category' => 'innkeeper',
'region' => '115',
'place' => '460',
'quarter' => '11271',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cremona',
'title_category' => 'innkeeper',
'region' => '115',
'place' => '460',
'quarter' => '11272',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cremona',
'title_category' => 'innkeeper',
'region' => '115',
'place' => '460',
'quarter' => '11273',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cremona',
'title_category' => 'innkeeper',
'region' => '115',
'place' => '460',
'quarter' => '11274',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Verona',
'title_category' => 'innkeeper',
'region' => '116',
'place' => '461',
'quarter' => '11275',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Verona',
'title_category' => 'innkeeper',
'region' => '116',
'place' => '461',
'quarter' => '11276',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Verona',
'title_category' => 'innkeeper',
'region' => '116',
'place' => '461',
'quarter' => '11277',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Verona',
'title_category' => 'innkeeper',
'region' => '116',
'place' => '461',
'quarter' => '11278',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Padua',
'title_category' => 'innkeeper',
'region' => '116',
'place' => '462',
'quarter' => '11279',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Padua',
'title_category' => 'innkeeper',
'region' => '116',
'place' => '462',
'quarter' => '11280',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Padua',
'title_category' => 'innkeeper',
'region' => '116',
'place' => '462',
'quarter' => '11281',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Padua',
'title_category' => 'innkeeper',
'region' => '116',
'place' => '462',
'quarter' => '11282',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vicenza',
'title_category' => 'innkeeper',
'region' => '116',
'place' => '463',
'quarter' => '11283',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vicenza',
'title_category' => 'innkeeper',
'region' => '116',
'place' => '463',
'quarter' => '11284',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vicenza',
'title_category' => 'innkeeper',
'region' => '116',
'place' => '463',
'quarter' => '11285',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vicenza',
'title_category' => 'innkeeper',
'region' => '116',
'place' => '463',
'quarter' => '11286',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mantua',
'title_category' => 'innkeeper',
'region' => '116',
'place' => '464',
'quarter' => '11287',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mantua',
'title_category' => 'innkeeper',
'region' => '116',
'place' => '464',
'quarter' => '11288',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mantua',
'title_category' => 'innkeeper',
'region' => '116',
'place' => '464',
'quarter' => '11289',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mantua',
'title_category' => 'innkeeper',
'region' => '116',
'place' => '464',
'quarter' => '11290',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Genoa',
'title_category' => 'innkeeper',
'region' => '117',
'place' => '465',
'quarter' => '11291',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Genoa',
'title_category' => 'innkeeper',
'region' => '117',
'place' => '465',
'quarter' => '11292',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Genoa',
'title_category' => 'innkeeper',
'region' => '117',
'place' => '465',
'quarter' => '11293',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Genoa',
'title_category' => 'innkeeper',
'region' => '117',
'place' => '465',
'quarter' => '11294',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Noli',
'title_category' => 'innkeeper',
'region' => '117',
'place' => '466',
'quarter' => '11295',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Noli',
'title_category' => 'innkeeper',
'region' => '117',
'place' => '466',
'quarter' => '11296',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Noli',
'title_category' => 'innkeeper',
'region' => '117',
'place' => '466',
'quarter' => '11297',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Noli',
'title_category' => 'innkeeper',
'region' => '117',
'place' => '466',
'quarter' => '11298',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aleria',
'title_category' => 'innkeeper',
'region' => '117',
'place' => '467',
'quarter' => '11299',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aleria',
'title_category' => 'innkeeper',
'region' => '117',
'place' => '467',
'quarter' => '11300',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aleria',
'title_category' => 'innkeeper',
'region' => '117',
'place' => '467',
'quarter' => '11301',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aleria',
'title_category' => 'innkeeper',
'region' => '117',
'place' => '467',
'quarter' => '11302',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bobbio',
'title_category' => 'innkeeper',
'region' => '117',
'place' => '468',
'quarter' => '11303',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bobbio',
'title_category' => 'innkeeper',
'region' => '117',
'place' => '468',
'quarter' => '11304',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bobbio',
'title_category' => 'innkeeper',
'region' => '117',
'place' => '468',
'quarter' => '11305',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bobbio',
'title_category' => 'innkeeper',
'region' => '117',
'place' => '468',
'quarter' => '11306',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Venice',
'title_category' => 'innkeeper',
'region' => '118',
'place' => '469',
'quarter' => '11307',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Venice',
'title_category' => 'innkeeper',
'region' => '118',
'place' => '469',
'quarter' => '11308',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Venice',
'title_category' => 'innkeeper',
'region' => '118',
'place' => '469',
'quarter' => '11309',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Venice',
'title_category' => 'innkeeper',
'region' => '118',
'place' => '469',
'quarter' => '11310',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Treviso',
'title_category' => 'innkeeper',
'region' => '118',
'place' => '470',
'quarter' => '11311',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Treviso',
'title_category' => 'innkeeper',
'region' => '118',
'place' => '470',
'quarter' => '11312',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Treviso',
'title_category' => 'innkeeper',
'region' => '118',
'place' => '470',
'quarter' => '11313',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Treviso',
'title_category' => 'innkeeper',
'region' => '118',
'place' => '470',
'quarter' => '11314',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chioggia',
'title_category' => 'innkeeper',
'region' => '118',
'place' => '471',
'quarter' => '11315',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chioggia',
'title_category' => 'innkeeper',
'region' => '118',
'place' => '471',
'quarter' => '11316',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chioggia',
'title_category' => 'innkeeper',
'region' => '118',
'place' => '471',
'quarter' => '11317',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chioggia',
'title_category' => 'innkeeper',
'region' => '118',
'place' => '471',
'quarter' => '11318',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Belluno',
'title_category' => 'innkeeper',
'region' => '118',
'place' => '472',
'quarter' => '11319',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Belluno',
'title_category' => 'innkeeper',
'region' => '118',
'place' => '472',
'quarter' => '11320',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Belluno',
'title_category' => 'innkeeper',
'region' => '118',
'place' => '472',
'quarter' => '11321',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Belluno',
'title_category' => 'innkeeper',
'region' => '118',
'place' => '472',
'quarter' => '11322',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ravenna',
'title_category' => 'innkeeper',
'region' => '119',
'place' => '473',
'quarter' => '11323',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ravenna',
'title_category' => 'innkeeper',
'region' => '119',
'place' => '473',
'quarter' => '11324',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ravenna',
'title_category' => 'innkeeper',
'region' => '119',
'place' => '473',
'quarter' => '11325',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ravenna',
'title_category' => 'innkeeper',
'region' => '119',
'place' => '473',
'quarter' => '11326',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cesena',
'title_category' => 'innkeeper',
'region' => '119',
'place' => '474',
'quarter' => '11327',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cesena',
'title_category' => 'innkeeper',
'region' => '119',
'place' => '474',
'quarter' => '11328',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cesena',
'title_category' => 'innkeeper',
'region' => '119',
'place' => '474',
'quarter' => '11329',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cesena',
'title_category' => 'innkeeper',
'region' => '119',
'place' => '474',
'quarter' => '11330',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Forli',
'title_category' => 'innkeeper',
'region' => '119',
'place' => '475',
'quarter' => '11331',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Forli',
'title_category' => 'innkeeper',
'region' => '119',
'place' => '475',
'quarter' => '11332',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Forli',
'title_category' => 'innkeeper',
'region' => '119',
'place' => '475',
'quarter' => '11333',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Forli',
'title_category' => 'innkeeper',
'region' => '119',
'place' => '475',
'quarter' => '11334',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rimini',
'title_category' => 'innkeeper',
'region' => '119',
'place' => '476',
'quarter' => '11335',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rimini',
'title_category' => 'innkeeper',
'region' => '119',
'place' => '476',
'quarter' => '11336',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rimini',
'title_category' => 'innkeeper',
'region' => '119',
'place' => '476',
'quarter' => '11337',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rimini',
'title_category' => 'innkeeper',
'region' => '119',
'place' => '476',
'quarter' => '11338',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Modena',
'title_category' => 'innkeeper',
'region' => '120',
'place' => '477',
'quarter' => '11339',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Modena',
'title_category' => 'innkeeper',
'region' => '120',
'place' => '477',
'quarter' => '11340',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Modena',
'title_category' => 'innkeeper',
'region' => '120',
'place' => '477',
'quarter' => '11341',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Modena',
'title_category' => 'innkeeper',
'region' => '120',
'place' => '477',
'quarter' => '11342',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Parma',
'title_category' => 'innkeeper',
'region' => '120',
'place' => '478',
'quarter' => '11343',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Parma',
'title_category' => 'innkeeper',
'region' => '120',
'place' => '478',
'quarter' => '11344',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Parma',
'title_category' => 'innkeeper',
'region' => '120',
'place' => '478',
'quarter' => '11345',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Parma',
'title_category' => 'innkeeper',
'region' => '120',
'place' => '478',
'quarter' => '11346',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ferrara',
'title_category' => 'innkeeper',
'region' => '120',
'place' => '479',
'quarter' => '11347',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ferrara',
'title_category' => 'innkeeper',
'region' => '120',
'place' => '479',
'quarter' => '11348',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ferrara',
'title_category' => 'innkeeper',
'region' => '120',
'place' => '479',
'quarter' => '11349',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ferrara',
'title_category' => 'innkeeper',
'region' => '120',
'place' => '479',
'quarter' => '11350',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bologna',
'title_category' => 'innkeeper',
'region' => '120',
'place' => '480',
'quarter' => '11351',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bologna',
'title_category' => 'innkeeper',
'region' => '120',
'place' => '480',
'quarter' => '11352',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bologna',
'title_category' => 'innkeeper',
'region' => '120',
'place' => '480',
'quarter' => '11353',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bologna',
'title_category' => 'innkeeper',
'region' => '120',
'place' => '480',
'quarter' => '11354',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aquileja',
'title_category' => 'innkeeper',
'region' => '121',
'place' => '481',
'quarter' => '11355',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aquileja',
'title_category' => 'innkeeper',
'region' => '121',
'place' => '481',
'quarter' => '11356',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aquileja',
'title_category' => 'innkeeper',
'region' => '121',
'place' => '481',
'quarter' => '11357',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aquileja',
'title_category' => 'innkeeper',
'region' => '121',
'place' => '481',
'quarter' => '11358',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pordenone',
'title_category' => 'innkeeper',
'region' => '121',
'place' => '482',
'quarter' => '11359',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pordenone',
'title_category' => 'innkeeper',
'region' => '121',
'place' => '482',
'quarter' => '11360',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pordenone',
'title_category' => 'innkeeper',
'region' => '121',
'place' => '482',
'quarter' => '11361',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pordenone',
'title_category' => 'innkeeper',
'region' => '121',
'place' => '482',
'quarter' => '11362',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Udine',
'title_category' => 'innkeeper',
'region' => '121',
'place' => '483',
'quarter' => '11363',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Udine',
'title_category' => 'innkeeper',
'region' => '121',
'place' => '483',
'quarter' => '11364',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Udine',
'title_category' => 'innkeeper',
'region' => '121',
'place' => '483',
'quarter' => '11365',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Udine',
'title_category' => 'innkeeper',
'region' => '121',
'place' => '483',
'quarter' => '11366',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gemona',
'title_category' => 'innkeeper',
'region' => '121',
'place' => '484',
'quarter' => '11367',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gemona',
'title_category' => 'innkeeper',
'region' => '121',
'place' => '484',
'quarter' => '11368',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gemona',
'title_category' => 'innkeeper',
'region' => '121',
'place' => '484',
'quarter' => '11369',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gemona',
'title_category' => 'innkeeper',
'region' => '121',
'place' => '484',
'quarter' => '11370',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Turin',
'title_category' => 'innkeeper',
'region' => '122',
'place' => '485',
'quarter' => '11371',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Turin',
'title_category' => 'innkeeper',
'region' => '122',
'place' => '485',
'quarter' => '11372',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Turin',
'title_category' => 'innkeeper',
'region' => '122',
'place' => '485',
'quarter' => '11373',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Turin',
'title_category' => 'innkeeper',
'region' => '122',
'place' => '485',
'quarter' => '11374',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ivrea',
'title_category' => 'innkeeper',
'region' => '122',
'place' => '486',
'quarter' => '11375',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ivrea',
'title_category' => 'innkeeper',
'region' => '122',
'place' => '486',
'quarter' => '11376',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ivrea',
'title_category' => 'innkeeper',
'region' => '122',
'place' => '486',
'quarter' => '11377',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ivrea',
'title_category' => 'innkeeper',
'region' => '122',
'place' => '486',
'quarter' => '11378',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Asti',
'title_category' => 'innkeeper',
'region' => '122',
'place' => '487',
'quarter' => '11379',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Asti',
'title_category' => 'innkeeper',
'region' => '122',
'place' => '487',
'quarter' => '11380',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Asti',
'title_category' => 'innkeeper',
'region' => '122',
'place' => '487',
'quarter' => '11381',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Asti',
'title_category' => 'innkeeper',
'region' => '122',
'place' => '487',
'quarter' => '11382',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pinerollo',
'title_category' => 'innkeeper',
'region' => '122',
'place' => '488',
'quarter' => '11383',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pinerollo',
'title_category' => 'innkeeper',
'region' => '122',
'place' => '488',
'quarter' => '11384',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pinerollo',
'title_category' => 'innkeeper',
'region' => '122',
'place' => '488',
'quarter' => '11385',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pinerollo',
'title_category' => 'innkeeper',
'region' => '122',
'place' => '488',
'quarter' => '11386',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Florence',
'title_category' => 'innkeeper',
'region' => '123',
'place' => '489',
'quarter' => '11387',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Florence',
'title_category' => 'innkeeper',
'region' => '123',
'place' => '489',
'quarter' => '11388',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Florence',
'title_category' => 'innkeeper',
'region' => '123',
'place' => '489',
'quarter' => '11389',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Florence',
'title_category' => 'innkeeper',
'region' => '123',
'place' => '489',
'quarter' => '11390',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Siena',
'title_category' => 'innkeeper',
'region' => '123',
'place' => '490',
'quarter' => '11391',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Siena',
'title_category' => 'innkeeper',
'region' => '123',
'place' => '490',
'quarter' => '11392',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Siena',
'title_category' => 'innkeeper',
'region' => '123',
'place' => '490',
'quarter' => '11393',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Siena',
'title_category' => 'innkeeper',
'region' => '123',
'place' => '490',
'quarter' => '11394',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Arezzo',
'title_category' => 'innkeeper',
'region' => '123',
'place' => '491',
'quarter' => '11395',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Arezzo',
'title_category' => 'innkeeper',
'region' => '123',
'place' => '491',
'quarter' => '11396',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Arezzo',
'title_category' => 'innkeeper',
'region' => '123',
'place' => '491',
'quarter' => '11397',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Arezzo',
'title_category' => 'innkeeper',
'region' => '123',
'place' => '491',
'quarter' => '11398',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Grosseto',
'title_category' => 'innkeeper',
'region' => '123',
'place' => '492',
'quarter' => '11399',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Grosseto',
'title_category' => 'innkeeper',
'region' => '123',
'place' => '492',
'quarter' => '11400',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Grosseto',
'title_category' => 'innkeeper',
'region' => '123',
'place' => '492',
'quarter' => '11401',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Grosseto',
'title_category' => 'innkeeper',
'region' => '123',
'place' => '492',
'quarter' => '11402',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Spoleto',
'title_category' => 'innkeeper',
'region' => '124',
'place' => '493',
'quarter' => '11403',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Spoleto',
'title_category' => 'innkeeper',
'region' => '124',
'place' => '493',
'quarter' => '11404',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Spoleto',
'title_category' => 'innkeeper',
'region' => '124',
'place' => '493',
'quarter' => '11405',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Spoleto',
'title_category' => 'innkeeper',
'region' => '124',
'place' => '493',
'quarter' => '11406',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aquila',
'title_category' => 'innkeeper',
'region' => '124',
'place' => '494',
'quarter' => '11407',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aquila',
'title_category' => 'innkeeper',
'region' => '124',
'place' => '494',
'quarter' => '11408',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aquila',
'title_category' => 'innkeeper',
'region' => '124',
'place' => '494',
'quarter' => '11409',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aquila',
'title_category' => 'innkeeper',
'region' => '124',
'place' => '494',
'quarter' => '11410',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ancona',
'title_category' => 'innkeeper',
'region' => '124',
'place' => '495',
'quarter' => '11411',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ancona',
'title_category' => 'innkeeper',
'region' => '124',
'place' => '495',
'quarter' => '11412',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ancona',
'title_category' => 'innkeeper',
'region' => '124',
'place' => '495',
'quarter' => '11413',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ancona',
'title_category' => 'innkeeper',
'region' => '124',
'place' => '495',
'quarter' => '11414',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Assissi',
'title_category' => 'innkeeper',
'region' => '124',
'place' => '496',
'quarter' => '11415',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Assissi',
'title_category' => 'innkeeper',
'region' => '124',
'place' => '496',
'quarter' => '11416',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Assissi',
'title_category' => 'innkeeper',
'region' => '124',
'place' => '496',
'quarter' => '11417',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Assissi',
'title_category' => 'innkeeper',
'region' => '124',
'place' => '496',
'quarter' => '11418',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rome',
'title_category' => 'innkeeper',
'region' => '125',
'place' => '497',
'quarter' => '11419',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rome',
'title_category' => 'innkeeper',
'region' => '125',
'place' => '497',
'quarter' => '11420',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rome',
'title_category' => 'innkeeper',
'region' => '125',
'place' => '497',
'quarter' => '11421',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rome',
'title_category' => 'innkeeper',
'region' => '125',
'place' => '497',
'quarter' => '11422',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Frascati',
'title_category' => 'innkeeper',
'region' => '125',
'place' => '498',
'quarter' => '11423',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Frascati',
'title_category' => 'innkeeper',
'region' => '125',
'place' => '498',
'quarter' => '11424',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Frascati',
'title_category' => 'innkeeper',
'region' => '125',
'place' => '498',
'quarter' => '11425',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Frascati',
'title_category' => 'innkeeper',
'region' => '125',
'place' => '498',
'quarter' => '11426',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tivoli',
'title_category' => 'innkeeper',
'region' => '125',
'place' => '499',
'quarter' => '11427',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tivoli',
'title_category' => 'innkeeper',
'region' => '125',
'place' => '499',
'quarter' => '11428',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tivoli',
'title_category' => 'innkeeper',
'region' => '125',
'place' => '499',
'quarter' => '11429',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tivoli',
'title_category' => 'innkeeper',
'region' => '125',
'place' => '499',
'quarter' => '11430',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Subiaco',
'title_category' => 'innkeeper',
'region' => '125',
'place' => '500',
'quarter' => '11431',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Subiaco',
'title_category' => 'innkeeper',
'region' => '125',
'place' => '500',
'quarter' => '11432',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Subiaco',
'title_category' => 'innkeeper',
'region' => '125',
'place' => '500',
'quarter' => '11433',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Subiaco',
'title_category' => 'innkeeper',
'region' => '125',
'place' => '500',
'quarter' => '11434',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pisa',
'title_category' => 'innkeeper',
'region' => '126',
'place' => '501',
'quarter' => '11435',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pisa',
'title_category' => 'innkeeper',
'region' => '126',
'place' => '501',
'quarter' => '11436',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pisa',
'title_category' => 'innkeeper',
'region' => '126',
'place' => '501',
'quarter' => '11437',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pisa',
'title_category' => 'innkeeper',
'region' => '126',
'place' => '501',
'quarter' => '11438',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Carrara',
'title_category' => 'innkeeper',
'region' => '126',
'place' => '502',
'quarter' => '11439',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Carrara',
'title_category' => 'innkeeper',
'region' => '126',
'place' => '502',
'quarter' => '11440',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Carrara',
'title_category' => 'innkeeper',
'region' => '126',
'place' => '502',
'quarter' => '11441',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Carrara',
'title_category' => 'innkeeper',
'region' => '126',
'place' => '502',
'quarter' => '11442',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lucca',
'title_category' => 'innkeeper',
'region' => '126',
'place' => '503',
'quarter' => '11443',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lucca',
'title_category' => 'innkeeper',
'region' => '126',
'place' => '503',
'quarter' => '11444',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lucca',
'title_category' => 'innkeeper',
'region' => '126',
'place' => '503',
'quarter' => '11445',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lucca',
'title_category' => 'innkeeper',
'region' => '126',
'place' => '503',
'quarter' => '11446',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Volterra',
'title_category' => 'innkeeper',
'region' => '126',
'place' => '504',
'quarter' => '11447',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Volterra',
'title_category' => 'innkeeper',
'region' => '126',
'place' => '504',
'quarter' => '11448',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Volterra',
'title_category' => 'innkeeper',
'region' => '126',
'place' => '504',
'quarter' => '11449',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Volterra',
'title_category' => 'innkeeper',
'region' => '126',
'place' => '504',
'quarter' => '11450',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Naples',
'title_category' => 'innkeeper',
'region' => '127',
'place' => '505',
'quarter' => '11451',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Naples',
'title_category' => 'innkeeper',
'region' => '127',
'place' => '505',
'quarter' => '11452',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Naples',
'title_category' => 'innkeeper',
'region' => '127',
'place' => '505',
'quarter' => '11453',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Naples',
'title_category' => 'innkeeper',
'region' => '127',
'place' => '505',
'quarter' => '11454',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gaeta',
'title_category' => 'innkeeper',
'region' => '127',
'place' => '506',
'quarter' => '11455',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gaeta',
'title_category' => 'innkeeper',
'region' => '127',
'place' => '506',
'quarter' => '11456',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gaeta',
'title_category' => 'innkeeper',
'region' => '127',
'place' => '506',
'quarter' => '11457',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gaeta',
'title_category' => 'innkeeper',
'region' => '127',
'place' => '506',
'quarter' => '11458',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Amalfi',
'title_category' => 'innkeeper',
'region' => '127',
'place' => '507',
'quarter' => '11459',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Amalfi',
'title_category' => 'innkeeper',
'region' => '127',
'place' => '507',
'quarter' => '11460',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Amalfi',
'title_category' => 'innkeeper',
'region' => '127',
'place' => '507',
'quarter' => '11461',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Amalfi',
'title_category' => 'innkeeper',
'region' => '127',
'place' => '507',
'quarter' => '11462',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cassino',
'title_category' => 'innkeeper',
'region' => '127',
'place' => '508',
'quarter' => '11463',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cassino',
'title_category' => 'innkeeper',
'region' => '127',
'place' => '508',
'quarter' => '11464',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cassino',
'title_category' => 'innkeeper',
'region' => '127',
'place' => '508',
'quarter' => '11465',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cassino',
'title_category' => 'innkeeper',
'region' => '127',
'place' => '508',
'quarter' => '11466',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Taranto',
'title_category' => 'innkeeper',
'region' => '128',
'place' => '509',
'quarter' => '11467',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Taranto',
'title_category' => 'innkeeper',
'region' => '128',
'place' => '509',
'quarter' => '11468',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Taranto',
'title_category' => 'innkeeper',
'region' => '128',
'place' => '509',
'quarter' => '11469',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Taranto',
'title_category' => 'innkeeper',
'region' => '128',
'place' => '509',
'quarter' => '11470',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bari',
'title_category' => 'innkeeper',
'region' => '128',
'place' => '510',
'quarter' => '11471',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bari',
'title_category' => 'innkeeper',
'region' => '128',
'place' => '510',
'quarter' => '11472',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bari',
'title_category' => 'innkeeper',
'region' => '128',
'place' => '510',
'quarter' => '11473',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bari',
'title_category' => 'innkeeper',
'region' => '128',
'place' => '510',
'quarter' => '11474',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Siponto',
'title_category' => 'innkeeper',
'region' => '128',
'place' => '511',
'quarter' => '11475',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Siponto',
'title_category' => 'innkeeper',
'region' => '128',
'place' => '511',
'quarter' => '11476',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Siponto',
'title_category' => 'innkeeper',
'region' => '128',
'place' => '511',
'quarter' => '11477',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Siponto',
'title_category' => 'innkeeper',
'region' => '128',
'place' => '511',
'quarter' => '11478',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Brindisi',
'title_category' => 'innkeeper',
'region' => '128',
'place' => '512',
'quarter' => '11479',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Brindisi',
'title_category' => 'innkeeper',
'region' => '128',
'place' => '512',
'quarter' => '11480',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Brindisi',
'title_category' => 'innkeeper',
'region' => '128',
'place' => '512',
'quarter' => '11481',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Brindisi',
'title_category' => 'innkeeper',
'region' => '128',
'place' => '512',
'quarter' => '11482',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cosenza',
'title_category' => 'innkeeper',
'region' => '129',
'place' => '513',
'quarter' => '11483',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cosenza',
'title_category' => 'innkeeper',
'region' => '129',
'place' => '513',
'quarter' => '11484',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cosenza',
'title_category' => 'innkeeper',
'region' => '129',
'place' => '513',
'quarter' => '11485',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cosenza',
'title_category' => 'innkeeper',
'region' => '129',
'place' => '513',
'quarter' => '11486',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rossano',
'title_category' => 'innkeeper',
'region' => '129',
'place' => '514',
'quarter' => '11487',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rossano',
'title_category' => 'innkeeper',
'region' => '129',
'place' => '514',
'quarter' => '11488',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rossano',
'title_category' => 'innkeeper',
'region' => '129',
'place' => '514',
'quarter' => '11489',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rossano',
'title_category' => 'innkeeper',
'region' => '129',
'place' => '514',
'quarter' => '11490',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tropea',
'title_category' => 'innkeeper',
'region' => '129',
'place' => '515',
'quarter' => '11491',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tropea',
'title_category' => 'innkeeper',
'region' => '129',
'place' => '515',
'quarter' => '11492',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tropea',
'title_category' => 'innkeeper',
'region' => '129',
'place' => '515',
'quarter' => '11493',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tropea',
'title_category' => 'innkeeper',
'region' => '129',
'place' => '515',
'quarter' => '11494',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vivarium',
'title_category' => 'innkeeper',
'region' => '129',
'place' => '516',
'quarter' => '11495',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vivarium',
'title_category' => 'innkeeper',
'region' => '129',
'place' => '516',
'quarter' => '11496',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vivarium',
'title_category' => 'innkeeper',
'region' => '129',
'place' => '516',
'quarter' => '11497',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vivarium',
'title_category' => 'innkeeper',
'region' => '129',
'place' => '516',
'quarter' => '11498',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Benevento',
'title_category' => 'innkeeper',
'region' => '130',
'place' => '517',
'quarter' => '11499',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Benevento',
'title_category' => 'innkeeper',
'region' => '130',
'place' => '517',
'quarter' => '11500',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Benevento',
'title_category' => 'innkeeper',
'region' => '130',
'place' => '517',
'quarter' => '11501',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Benevento',
'title_category' => 'innkeeper',
'region' => '130',
'place' => '517',
'quarter' => '11502',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Monteverde',
'title_category' => 'innkeeper',
'region' => '130',
'place' => '518',
'quarter' => '11503',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Monteverde',
'title_category' => 'innkeeper',
'region' => '130',
'place' => '518',
'quarter' => '11504',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Monteverde',
'title_category' => 'innkeeper',
'region' => '130',
'place' => '518',
'quarter' => '11505',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Monteverde',
'title_category' => 'innkeeper',
'region' => '130',
'place' => '518',
'quarter' => '11506',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Potenza',
'title_category' => 'innkeeper',
'region' => '130',
'place' => '519',
'quarter' => '11507',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Potenza',
'title_category' => 'innkeeper',
'region' => '130',
'place' => '519',
'quarter' => '11508',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Potenza',
'title_category' => 'innkeeper',
'region' => '130',
'place' => '519',
'quarter' => '11509',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Potenza',
'title_category' => 'innkeeper',
'region' => '130',
'place' => '519',
'quarter' => '11510',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Viggiano',
'title_category' => 'innkeeper',
'region' => '130',
'place' => '520',
'quarter' => '11511',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Viggiano',
'title_category' => 'innkeeper',
'region' => '130',
'place' => '520',
'quarter' => '11512',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Viggiano',
'title_category' => 'innkeeper',
'region' => '130',
'place' => '520',
'quarter' => '11513',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Viggiano',
'title_category' => 'innkeeper',
'region' => '130',
'place' => '520',
'quarter' => '11514',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sassari',
'title_category' => 'innkeeper',
'region' => '131',
'place' => '521',
'quarter' => '11515',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sassari',
'title_category' => 'innkeeper',
'region' => '131',
'place' => '521',
'quarter' => '11516',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sassari',
'title_category' => 'innkeeper',
'region' => '131',
'place' => '521',
'quarter' => '11517',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sassari',
'title_category' => 'innkeeper',
'region' => '131',
'place' => '521',
'quarter' => '11518',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Olbia',
'title_category' => 'innkeeper',
'region' => '131',
'place' => '522',
'quarter' => '11519',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Olbia',
'title_category' => 'innkeeper',
'region' => '131',
'place' => '522',
'quarter' => '11520',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Olbia',
'title_category' => 'innkeeper',
'region' => '131',
'place' => '522',
'quarter' => '11521',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Olbia',
'title_category' => 'innkeeper',
'region' => '131',
'place' => '522',
'quarter' => '11522',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bosa',
'title_category' => 'innkeeper',
'region' => '131',
'place' => '523',
'quarter' => '11523',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bosa',
'title_category' => 'innkeeper',
'region' => '131',
'place' => '523',
'quarter' => '11524',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bosa',
'title_category' => 'innkeeper',
'region' => '131',
'place' => '523',
'quarter' => '11525',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bosa',
'title_category' => 'innkeeper',
'region' => '131',
'place' => '523',
'quarter' => '11526',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Porto Torres',
'title_category' => 'innkeeper',
'region' => '131',
'place' => '524',
'quarter' => '11527',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Porto Torres',
'title_category' => 'innkeeper',
'region' => '131',
'place' => '524',
'quarter' => '11528',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Porto Torres',
'title_category' => 'innkeeper',
'region' => '131',
'place' => '524',
'quarter' => '11529',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Porto Torres',
'title_category' => 'innkeeper',
'region' => '131',
'place' => '524',
'quarter' => '11530',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cagliari',
'title_category' => 'innkeeper',
'region' => '132',
'place' => '525',
'quarter' => '11531',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cagliari',
'title_category' => 'innkeeper',
'region' => '132',
'place' => '525',
'quarter' => '11532',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cagliari',
'title_category' => 'innkeeper',
'region' => '132',
'place' => '525',
'quarter' => '11533',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cagliari',
'title_category' => 'innkeeper',
'region' => '132',
'place' => '525',
'quarter' => '11534',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Oristano',
'title_category' => 'innkeeper',
'region' => '132',
'place' => '526',
'quarter' => '11535',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Oristano',
'title_category' => 'innkeeper',
'region' => '132',
'place' => '526',
'quarter' => '11536',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Oristano',
'title_category' => 'innkeeper',
'region' => '132',
'place' => '526',
'quarter' => '11537',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Oristano',
'title_category' => 'innkeeper',
'region' => '132',
'place' => '526',
'quarter' => '11538',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dolia',
'title_category' => 'innkeeper',
'region' => '132',
'place' => '527',
'quarter' => '11539',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dolia',
'title_category' => 'innkeeper',
'region' => '132',
'place' => '527',
'quarter' => '11540',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dolia',
'title_category' => 'innkeeper',
'region' => '132',
'place' => '527',
'quarter' => '11541',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dolia',
'title_category' => 'innkeeper',
'region' => '132',
'place' => '527',
'quarter' => '11542',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Iglesias',
'title_category' => 'innkeeper',
'region' => '132',
'place' => '528',
'quarter' => '11543',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Iglesias',
'title_category' => 'innkeeper',
'region' => '132',
'place' => '528',
'quarter' => '11544',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Iglesias',
'title_category' => 'innkeeper',
'region' => '132',
'place' => '528',
'quarter' => '11545',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Iglesias',
'title_category' => 'innkeeper',
'region' => '132',
'place' => '528',
'quarter' => '11546',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Palermo',
'title_category' => 'innkeeper',
'region' => '133',
'place' => '529',
'quarter' => '11547',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Palermo',
'title_category' => 'innkeeper',
'region' => '133',
'place' => '529',
'quarter' => '11548',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Palermo',
'title_category' => 'innkeeper',
'region' => '133',
'place' => '529',
'quarter' => '11549',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Palermo',
'title_category' => 'innkeeper',
'region' => '133',
'place' => '529',
'quarter' => '11550',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Agrigento',
'title_category' => 'innkeeper',
'region' => '133',
'place' => '530',
'quarter' => '11551',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Agrigento',
'title_category' => 'innkeeper',
'region' => '133',
'place' => '530',
'quarter' => '11552',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Agrigento',
'title_category' => 'innkeeper',
'region' => '133',
'place' => '530',
'quarter' => '11553',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Agrigento',
'title_category' => 'innkeeper',
'region' => '133',
'place' => '530',
'quarter' => '11554',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cefalu',
'title_category' => 'innkeeper',
'region' => '133',
'place' => '531',
'quarter' => '11555',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cefalu',
'title_category' => 'innkeeper',
'region' => '133',
'place' => '531',
'quarter' => '11556',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cefalu',
'title_category' => 'innkeeper',
'region' => '133',
'place' => '531',
'quarter' => '11557',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cefalu',
'title_category' => 'innkeeper',
'region' => '133',
'place' => '531',
'quarter' => '11558',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Marsala',
'title_category' => 'innkeeper',
'region' => '133',
'place' => '532',
'quarter' => '11559',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Marsala',
'title_category' => 'innkeeper',
'region' => '133',
'place' => '532',
'quarter' => '11560',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Marsala',
'title_category' => 'innkeeper',
'region' => '133',
'place' => '532',
'quarter' => '11561',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Marsala',
'title_category' => 'innkeeper',
'region' => '133',
'place' => '532',
'quarter' => '11562',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Messina',
'title_category' => 'innkeeper',
'region' => '134',
'place' => '533',
'quarter' => '11563',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Messina',
'title_category' => 'innkeeper',
'region' => '134',
'place' => '533',
'quarter' => '11564',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Messina',
'title_category' => 'innkeeper',
'region' => '134',
'place' => '533',
'quarter' => '11565',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Messina',
'title_category' => 'innkeeper',
'region' => '134',
'place' => '533',
'quarter' => '11566',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Taormina',
'title_category' => 'innkeeper',
'region' => '134',
'place' => '534',
'quarter' => '11567',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Taormina',
'title_category' => 'innkeeper',
'region' => '134',
'place' => '534',
'quarter' => '11568',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Taormina',
'title_category' => 'innkeeper',
'region' => '134',
'place' => '534',
'quarter' => '11569',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Taormina',
'title_category' => 'innkeeper',
'region' => '134',
'place' => '534',
'quarter' => '11570',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Catania',
'title_category' => 'innkeeper',
'region' => '134',
'place' => '535',
'quarter' => '11571',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Catania',
'title_category' => 'innkeeper',
'region' => '134',
'place' => '535',
'quarter' => '11572',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Catania',
'title_category' => 'innkeeper',
'region' => '134',
'place' => '535',
'quarter' => '11573',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Catania',
'title_category' => 'innkeeper',
'region' => '134',
'place' => '535',
'quarter' => '11574',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Troina',
'title_category' => 'innkeeper',
'region' => '134',
'place' => '536',
'quarter' => '11575',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Troina',
'title_category' => 'innkeeper',
'region' => '134',
'place' => '536',
'quarter' => '11576',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Troina',
'title_category' => 'innkeeper',
'region' => '134',
'place' => '536',
'quarter' => '11577',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Troina',
'title_category' => 'innkeeper',
'region' => '134',
'place' => '536',
'quarter' => '11578',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Siracusa',
'title_category' => 'innkeeper',
'region' => '135',
'place' => '537',
'quarter' => '11579',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Siracusa',
'title_category' => 'innkeeper',
'region' => '135',
'place' => '537',
'quarter' => '11580',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Siracusa',
'title_category' => 'innkeeper',
'region' => '135',
'place' => '537',
'quarter' => '11581',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Siracusa',
'title_category' => 'innkeeper',
'region' => '135',
'place' => '537',
'quarter' => '11582',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Caltagirone',
'title_category' => 'innkeeper',
'region' => '135',
'place' => '538',
'quarter' => '11583',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Caltagirone',
'title_category' => 'innkeeper',
'region' => '135',
'place' => '538',
'quarter' => '11584',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Caltagirone',
'title_category' => 'innkeeper',
'region' => '135',
'place' => '538',
'quarter' => '11585',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Caltagirone',
'title_category' => 'innkeeper',
'region' => '135',
'place' => '538',
'quarter' => '11586',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Valletta',
'title_category' => 'innkeeper',
'region' => '135',
'place' => '539',
'quarter' => '11587',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Valletta',
'title_category' => 'innkeeper',
'region' => '135',
'place' => '539',
'quarter' => '11588',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Valletta',
'title_category' => 'innkeeper',
'region' => '135',
'place' => '539',
'quarter' => '11589',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Valletta',
'title_category' => 'innkeeper',
'region' => '135',
'place' => '539',
'quarter' => '11590',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Modica',
'title_category' => 'innkeeper',
'region' => '135',
'place' => '540',
'quarter' => '11591',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Modica',
'title_category' => 'innkeeper',
'region' => '135',
'place' => '540',
'quarter' => '11592',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Modica',
'title_category' => 'innkeeper',
'region' => '135',
'place' => '540',
'quarter' => '11593',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Modica',
'title_category' => 'innkeeper',
'region' => '135',
'place' => '540',
'quarter' => '11594',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tangiers',
'title_category' => 'innkeeper',
'region' => '136',
'place' => '541',
'quarter' => '11595',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tangiers',
'title_category' => 'innkeeper',
'region' => '136',
'place' => '541',
'quarter' => '11596',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tangiers',
'title_category' => 'innkeeper',
'region' => '136',
'place' => '541',
'quarter' => '11597',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tangiers',
'title_category' => 'innkeeper',
'region' => '136',
'place' => '541',
'quarter' => '11598',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ceuta',
'title_category' => 'innkeeper',
'region' => '136',
'place' => '542',
'quarter' => '11599',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ceuta',
'title_category' => 'innkeeper',
'region' => '136',
'place' => '542',
'quarter' => '11600',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ceuta',
'title_category' => 'innkeeper',
'region' => '136',
'place' => '542',
'quarter' => '11601',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ceuta',
'title_category' => 'innkeeper',
'region' => '136',
'place' => '542',
'quarter' => '11602',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ouazzane',
'title_category' => 'innkeeper',
'region' => '136',
'place' => '543',
'quarter' => '11603',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ouazzane',
'title_category' => 'innkeeper',
'region' => '136',
'place' => '543',
'quarter' => '11604',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ouazzane',
'title_category' => 'innkeeper',
'region' => '136',
'place' => '543',
'quarter' => '11605',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ouazzane',
'title_category' => 'innkeeper',
'region' => '136',
'place' => '543',
'quarter' => '11606',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tetouan',
'title_category' => 'innkeeper',
'region' => '136',
'place' => '544',
'quarter' => '11607',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tetouan',
'title_category' => 'innkeeper',
'region' => '136',
'place' => '544',
'quarter' => '11608',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tetouan',
'title_category' => 'innkeeper',
'region' => '136',
'place' => '544',
'quarter' => '11609',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tetouan',
'title_category' => 'innkeeper',
'region' => '136',
'place' => '544',
'quarter' => '11610',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Anfa',
'title_category' => 'innkeeper',
'region' => '137',
'place' => '545',
'quarter' => '11611',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Anfa',
'title_category' => 'innkeeper',
'region' => '137',
'place' => '545',
'quarter' => '11612',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Anfa',
'title_category' => 'innkeeper',
'region' => '137',
'place' => '545',
'quarter' => '11613',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Anfa',
'title_category' => 'innkeeper',
'region' => '137',
'place' => '545',
'quarter' => '11614',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rabat',
'title_category' => 'innkeeper',
'region' => '137',
'place' => '546',
'quarter' => '11615',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rabat',
'title_category' => 'innkeeper',
'region' => '137',
'place' => '546',
'quarter' => '11616',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rabat',
'title_category' => 'innkeeper',
'region' => '137',
'place' => '546',
'quarter' => '11617',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rabat',
'title_category' => 'innkeeper',
'region' => '137',
'place' => '546',
'quarter' => '11618',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sale',
'title_category' => 'innkeeper',
'region' => '137',
'place' => '547',
'quarter' => '11619',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sale',
'title_category' => 'innkeeper',
'region' => '137',
'place' => '547',
'quarter' => '11620',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sale',
'title_category' => 'innkeeper',
'region' => '137',
'place' => '547',
'quarter' => '11621',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sale',
'title_category' => 'innkeeper',
'region' => '137',
'place' => '547',
'quarter' => '11622',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Fedala',
'title_category' => 'innkeeper',
'region' => '137',
'place' => '548',
'quarter' => '11623',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Fedala',
'title_category' => 'innkeeper',
'region' => '137',
'place' => '548',
'quarter' => '11624',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Fedala',
'title_category' => 'innkeeper',
'region' => '137',
'place' => '548',
'quarter' => '11625',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Fedala',
'title_category' => 'innkeeper',
'region' => '137',
'place' => '548',
'quarter' => '11626',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Fez',
'title_category' => 'innkeeper',
'region' => '138',
'place' => '549',
'quarter' => '11627',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Fez',
'title_category' => 'innkeeper',
'region' => '138',
'place' => '549',
'quarter' => '11628',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Fez',
'title_category' => 'innkeeper',
'region' => '138',
'place' => '549',
'quarter' => '11629',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Fez',
'title_category' => 'innkeeper',
'region' => '138',
'place' => '549',
'quarter' => '11630',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sefrou',
'title_category' => 'innkeeper',
'region' => '138',
'place' => '550',
'quarter' => '11631',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sefrou',
'title_category' => 'innkeeper',
'region' => '138',
'place' => '550',
'quarter' => '11632',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sefrou',
'title_category' => 'innkeeper',
'region' => '138',
'place' => '550',
'quarter' => '11633',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sefrou',
'title_category' => 'innkeeper',
'region' => '138',
'place' => '550',
'quarter' => '11634',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Taza',
'title_category' => 'innkeeper',
'region' => '138',
'place' => '551',
'quarter' => '11635',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Taza',
'title_category' => 'innkeeper',
'region' => '138',
'place' => '551',
'quarter' => '11636',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Taza',
'title_category' => 'innkeeper',
'region' => '138',
'place' => '551',
'quarter' => '11637',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Taza',
'title_category' => 'innkeeper',
'region' => '138',
'place' => '551',
'quarter' => '11638',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Meknes',
'title_category' => 'innkeeper',
'region' => '138',
'place' => '552',
'quarter' => '11639',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Meknes',
'title_category' => 'innkeeper',
'region' => '138',
'place' => '552',
'quarter' => '11640',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Meknes',
'title_category' => 'innkeeper',
'region' => '138',
'place' => '552',
'quarter' => '11641',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Meknes',
'title_category' => 'innkeeper',
'region' => '138',
'place' => '552',
'quarter' => '11642',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Marrakesh',
'title_category' => 'innkeeper',
'region' => '139',
'place' => '553',
'quarter' => '11643',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Marrakesh',
'title_category' => 'innkeeper',
'region' => '139',
'place' => '553',
'quarter' => '11644',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Marrakesh',
'title_category' => 'innkeeper',
'region' => '139',
'place' => '553',
'quarter' => '11645',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Marrakesh',
'title_category' => 'innkeeper',
'region' => '139',
'place' => '553',
'quarter' => '11646',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ouarzazate',
'title_category' => 'innkeeper',
'region' => '139',
'place' => '554',
'quarter' => '11647',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ouarzazate',
'title_category' => 'innkeeper',
'region' => '139',
'place' => '554',
'quarter' => '11648',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ouarzazate',
'title_category' => 'innkeeper',
'region' => '139',
'place' => '554',
'quarter' => '11649',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ouarzazate',
'title_category' => 'innkeeper',
'region' => '139',
'place' => '554',
'quarter' => '11650',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mogador',
'title_category' => 'innkeeper',
'region' => '139',
'place' => '555',
'quarter' => '11651',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mogador',
'title_category' => 'innkeeper',
'region' => '139',
'place' => '555',
'quarter' => '11652',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mogador',
'title_category' => 'innkeeper',
'region' => '139',
'place' => '555',
'quarter' => '11653',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mogador',
'title_category' => 'innkeeper',
'region' => '139',
'place' => '555',
'quarter' => '11654',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Benhaddou',
'title_category' => 'innkeeper',
'region' => '139',
'place' => '556',
'quarter' => '11655',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Benhaddou',
'title_category' => 'innkeeper',
'region' => '139',
'place' => '556',
'quarter' => '11656',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Benhaddou',
'title_category' => 'innkeeper',
'region' => '139',
'place' => '556',
'quarter' => '11657',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Benhaddou',
'title_category' => 'innkeeper',
'region' => '139',
'place' => '556',
'quarter' => '11658',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Taroudant',
'title_category' => 'innkeeper',
'region' => '140',
'place' => '557',
'quarter' => '11659',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Taroudant',
'title_category' => 'innkeeper',
'region' => '140',
'place' => '557',
'quarter' => '11660',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Taroudant',
'title_category' => 'innkeeper',
'region' => '140',
'place' => '557',
'quarter' => '11661',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Taroudant',
'title_category' => 'innkeeper',
'region' => '140',
'place' => '557',
'quarter' => '11662',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Agadir',
'title_category' => 'innkeeper',
'region' => '140',
'place' => '558',
'quarter' => '11663',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Agadir',
'title_category' => 'innkeeper',
'region' => '140',
'place' => '558',
'quarter' => '11664',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Agadir',
'title_category' => 'innkeeper',
'region' => '140',
'place' => '558',
'quarter' => '11665',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Agadir',
'title_category' => 'innkeeper',
'region' => '140',
'place' => '558',
'quarter' => '11666',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tindouf',
'title_category' => 'innkeeper',
'region' => '140',
'place' => '559',
'quarter' => '11667',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tindouf',
'title_category' => 'innkeeper',
'region' => '140',
'place' => '559',
'quarter' => '11668',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tindouf',
'title_category' => 'innkeeper',
'region' => '140',
'place' => '559',
'quarter' => '11669',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tindouf',
'title_category' => 'innkeeper',
'region' => '140',
'place' => '559',
'quarter' => '11670',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tinmel',
'title_category' => 'innkeeper',
'region' => '140',
'place' => '560',
'quarter' => '11671',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tinmel',
'title_category' => 'innkeeper',
'region' => '140',
'place' => '560',
'quarter' => '11672',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tinmel',
'title_category' => 'innkeeper',
'region' => '140',
'place' => '560',
'quarter' => '11673',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tinmel',
'title_category' => 'innkeeper',
'region' => '140',
'place' => '560',
'quarter' => '11674',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Figuig',
'title_category' => 'innkeeper',
'region' => '141',
'place' => '561',
'quarter' => '11675',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Figuig',
'title_category' => 'innkeeper',
'region' => '141',
'place' => '561',
'quarter' => '11676',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Figuig',
'title_category' => 'innkeeper',
'region' => '141',
'place' => '561',
'quarter' => '11677',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Figuig',
'title_category' => 'innkeeper',
'region' => '141',
'place' => '561',
'quarter' => '11678',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sijilmassa',
'title_category' => 'innkeeper',
'region' => '141',
'place' => '562',
'quarter' => '11679',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sijilmassa',
'title_category' => 'innkeeper',
'region' => '141',
'place' => '562',
'quarter' => '11680',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sijilmassa',
'title_category' => 'innkeeper',
'region' => '141',
'place' => '562',
'quarter' => '11681',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sijilmassa',
'title_category' => 'innkeeper',
'region' => '141',
'place' => '562',
'quarter' => '11682',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tinghir',
'title_category' => 'innkeeper',
'region' => '141',
'place' => '563',
'quarter' => '11683',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tinghir',
'title_category' => 'innkeeper',
'region' => '141',
'place' => '563',
'quarter' => '11684',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tinghir',
'title_category' => 'innkeeper',
'region' => '141',
'place' => '563',
'quarter' => '11685',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tinghir',
'title_category' => 'innkeeper',
'region' => '141',
'place' => '563',
'quarter' => '11686',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rachidiya',
'title_category' => 'innkeeper',
'region' => '141',
'place' => '564',
'quarter' => '11687',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rachidiya',
'title_category' => 'innkeeper',
'region' => '141',
'place' => '564',
'quarter' => '11688',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rachidiya',
'title_category' => 'innkeeper',
'region' => '141',
'place' => '564',
'quarter' => '11689',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rachidiya',
'title_category' => 'innkeeper',
'region' => '141',
'place' => '564',
'quarter' => '11690',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tlemcen',
'title_category' => 'innkeeper',
'region' => '142',
'place' => '565',
'quarter' => '11691',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tlemcen',
'title_category' => 'innkeeper',
'region' => '142',
'place' => '565',
'quarter' => '11692',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tlemcen',
'title_category' => 'innkeeper',
'region' => '142',
'place' => '565',
'quarter' => '11693',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tlemcen',
'title_category' => 'innkeeper',
'region' => '142',
'place' => '565',
'quarter' => '11694',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Oujda',
'title_category' => 'innkeeper',
'region' => '142',
'place' => '566',
'quarter' => '11695',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Oujda',
'title_category' => 'innkeeper',
'region' => '142',
'place' => '566',
'quarter' => '11696',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Oujda',
'title_category' => 'innkeeper',
'region' => '142',
'place' => '566',
'quarter' => '11697',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Oujda',
'title_category' => 'innkeeper',
'region' => '142',
'place' => '566',
'quarter' => '11698',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mellila',
'title_category' => 'innkeeper',
'region' => '142',
'place' => '567',
'quarter' => '11699',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mellila',
'title_category' => 'innkeeper',
'region' => '142',
'place' => '567',
'quarter' => '11700',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mellila',
'title_category' => 'innkeeper',
'region' => '142',
'place' => '567',
'quarter' => '11701',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mellila',
'title_category' => 'innkeeper',
'region' => '142',
'place' => '567',
'quarter' => '11702',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Taourirt',
'title_category' => 'innkeeper',
'region' => '142',
'place' => '568',
'quarter' => '11703',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Taourirt',
'title_category' => 'innkeeper',
'region' => '142',
'place' => '568',
'quarter' => '11704',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Taourirt',
'title_category' => 'innkeeper',
'region' => '142',
'place' => '568',
'quarter' => '11705',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Taourirt',
'title_category' => 'innkeeper',
'region' => '142',
'place' => '568',
'quarter' => '11706',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Oran',
'title_category' => 'innkeeper',
'region' => '143',
'place' => '569',
'quarter' => '11707',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Oran',
'title_category' => 'innkeeper',
'region' => '143',
'place' => '569',
'quarter' => '11708',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Oran',
'title_category' => 'innkeeper',
'region' => '143',
'place' => '569',
'quarter' => '11709',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Oran',
'title_category' => 'innkeeper',
'region' => '143',
'place' => '569',
'quarter' => '11710',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mostaganem',
'title_category' => 'innkeeper',
'region' => '143',
'place' => '570',
'quarter' => '11711',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mostaganem',
'title_category' => 'innkeeper',
'region' => '143',
'place' => '570',
'quarter' => '11712',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mostaganem',
'title_category' => 'innkeeper',
'region' => '143',
'place' => '570',
'quarter' => '11713',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mostaganem',
'title_category' => 'innkeeper',
'region' => '143',
'place' => '570',
'quarter' => '11714',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tiaret',
'title_category' => 'innkeeper',
'region' => '143',
'place' => '571',
'quarter' => '11715',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tiaret',
'title_category' => 'innkeeper',
'region' => '143',
'place' => '571',
'quarter' => '11716',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tiaret',
'title_category' => 'innkeeper',
'region' => '143',
'place' => '571',
'quarter' => '11717',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tiaret',
'title_category' => 'innkeeper',
'region' => '143',
'place' => '571',
'quarter' => '11718',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mascara',
'title_category' => 'innkeeper',
'region' => '143',
'place' => '572',
'quarter' => '11719',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mascara',
'title_category' => 'innkeeper',
'region' => '143',
'place' => '572',
'quarter' => '11720',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mascara',
'title_category' => 'innkeeper',
'region' => '143',
'place' => '572',
'quarter' => '11721',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mascara',
'title_category' => 'innkeeper',
'region' => '143',
'place' => '572',
'quarter' => '11722',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Djelfa',
'title_category' => 'innkeeper',
'region' => '144',
'place' => '573',
'quarter' => '11723',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Djelfa',
'title_category' => 'innkeeper',
'region' => '144',
'place' => '573',
'quarter' => '11724',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Djelfa',
'title_category' => 'innkeeper',
'region' => '144',
'place' => '573',
'quarter' => '11725',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Djelfa',
'title_category' => 'innkeeper',
'region' => '144',
'place' => '573',
'quarter' => '11726',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Laghouat',
'title_category' => 'innkeeper',
'region' => '144',
'place' => '574',
'quarter' => '11727',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Laghouat',
'title_category' => 'innkeeper',
'region' => '144',
'place' => '574',
'quarter' => '11728',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Laghouat',
'title_category' => 'innkeeper',
'region' => '144',
'place' => '574',
'quarter' => '11729',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Laghouat',
'title_category' => 'innkeeper',
'region' => '144',
'place' => '574',
'quarter' => '11730',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ghardaia',
'title_category' => 'innkeeper',
'region' => '144',
'place' => '575',
'quarter' => '11731',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ghardaia',
'title_category' => 'innkeeper',
'region' => '144',
'place' => '575',
'quarter' => '11732',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ghardaia',
'title_category' => 'innkeeper',
'region' => '144',
'place' => '575',
'quarter' => '11733',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ghardaia',
'title_category' => 'innkeeper',
'region' => '144',
'place' => '575',
'quarter' => '11734',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Menia',
'title_category' => 'innkeeper',
'region' => '144',
'place' => '576',
'quarter' => '11735',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Menia',
'title_category' => 'innkeeper',
'region' => '144',
'place' => '576',
'quarter' => '11736',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Menia',
'title_category' => 'innkeeper',
'region' => '144',
'place' => '576',
'quarter' => '11737',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Menia',
'title_category' => 'innkeeper',
'region' => '144',
'place' => '576',
'quarter' => '11738',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Khaled',
'title_category' => 'innkeeper',
'region' => '145',
'place' => '577',
'quarter' => '11739',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Khaled',
'title_category' => 'innkeeper',
'region' => '145',
'place' => '577',
'quarter' => '11740',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Khaled',
'title_category' => 'innkeeper',
'region' => '145',
'place' => '577',
'quarter' => '11741',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Khaled',
'title_category' => 'innkeeper',
'region' => '145',
'place' => '577',
'quarter' => '11742',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Biskra',
'title_category' => 'innkeeper',
'region' => '145',
'place' => '578',
'quarter' => '11743',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Biskra',
'title_category' => 'innkeeper',
'region' => '145',
'place' => '578',
'quarter' => '11744',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Biskra',
'title_category' => 'innkeeper',
'region' => '145',
'place' => '578',
'quarter' => '11745',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Biskra',
'title_category' => 'innkeeper',
'region' => '145',
'place' => '578',
'quarter' => '11746',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ouargla',
'title_category' => 'innkeeper',
'region' => '145',
'place' => '579',
'quarter' => '11747',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ouargla',
'title_category' => 'innkeeper',
'region' => '145',
'place' => '579',
'quarter' => '11748',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ouargla',
'title_category' => 'innkeeper',
'region' => '145',
'place' => '579',
'quarter' => '11749',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ouargla',
'title_category' => 'innkeeper',
'region' => '145',
'place' => '579',
'quarter' => '11750',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Touggourt',
'title_category' => 'innkeeper',
'region' => '145',
'place' => '580',
'quarter' => '11751',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Touggourt',
'title_category' => 'innkeeper',
'region' => '145',
'place' => '580',
'quarter' => '11752',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Touggourt',
'title_category' => 'innkeeper',
'region' => '145',
'place' => '580',
'quarter' => '11753',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Touggourt',
'title_category' => 'innkeeper',
'region' => '145',
'place' => '580',
'quarter' => '11754',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Algiers',
'title_category' => 'innkeeper',
'region' => '146',
'place' => '581',
'quarter' => '11755',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Algiers',
'title_category' => 'innkeeper',
'region' => '146',
'place' => '581',
'quarter' => '11756',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Algiers',
'title_category' => 'innkeeper',
'region' => '146',
'place' => '581',
'quarter' => '11757',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Algiers',
'title_category' => 'innkeeper',
'region' => '146',
'place' => '581',
'quarter' => '11758',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Medea',
'title_category' => 'innkeeper',
'region' => '146',
'place' => '582',
'quarter' => '11759',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Medea',
'title_category' => 'innkeeper',
'region' => '146',
'place' => '582',
'quarter' => '11760',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Medea',
'title_category' => 'innkeeper',
'region' => '146',
'place' => '582',
'quarter' => '11761',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Medea',
'title_category' => 'innkeeper',
'region' => '146',
'place' => '582',
'quarter' => '11762',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tedelles',
'title_category' => 'innkeeper',
'region' => '146',
'place' => '583',
'quarter' => '11763',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tedelles',
'title_category' => 'innkeeper',
'region' => '146',
'place' => '583',
'quarter' => '11764',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tedelles',
'title_category' => 'innkeeper',
'region' => '146',
'place' => '583',
'quarter' => '11765',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tedelles',
'title_category' => 'innkeeper',
'region' => '146',
'place' => '583',
'quarter' => '11766',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Achir',
'title_category' => 'innkeeper',
'region' => '146',
'place' => '584',
'quarter' => '11767',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Achir',
'title_category' => 'innkeeper',
'region' => '146',
'place' => '584',
'quarter' => '11768',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Achir',
'title_category' => 'innkeeper',
'region' => '146',
'place' => '584',
'quarter' => '11769',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Achir',
'title_category' => 'innkeeper',
'region' => '146',
'place' => '584',
'quarter' => '11770',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bejaia',
'title_category' => 'innkeeper',
'region' => '147',
'place' => '585',
'quarter' => '11771',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bejaia',
'title_category' => 'innkeeper',
'region' => '147',
'place' => '585',
'quarter' => '11772',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bejaia',
'title_category' => 'innkeeper',
'region' => '147',
'place' => '585',
'quarter' => '11773',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bejaia',
'title_category' => 'innkeeper',
'region' => '147',
'place' => '585',
'quarter' => '11774',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jijel',
'title_category' => 'innkeeper',
'region' => '147',
'place' => '586',
'quarter' => '11775',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jijel',
'title_category' => 'innkeeper',
'region' => '147',
'place' => '586',
'quarter' => '11776',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jijel',
'title_category' => 'innkeeper',
'region' => '147',
'place' => '586',
'quarter' => '11777',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jijel',
'title_category' => 'innkeeper',
'region' => '147',
'place' => '586',
'quarter' => '11778',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Setif',
'title_category' => 'innkeeper',
'region' => '147',
'place' => '587',
'quarter' => '11779',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Setif',
'title_category' => 'innkeeper',
'region' => '147',
'place' => '587',
'quarter' => '11780',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Setif',
'title_category' => 'innkeeper',
'region' => '147',
'place' => '587',
'quarter' => '11781',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Setif',
'title_category' => 'innkeeper',
'region' => '147',
'place' => '587',
'quarter' => '11782',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Eulma',
'title_category' => 'innkeeper',
'region' => '147',
'place' => '588',
'quarter' => '11783',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Eulma',
'title_category' => 'innkeeper',
'region' => '147',
'place' => '588',
'quarter' => '11784',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Eulma',
'title_category' => 'innkeeper',
'region' => '147',
'place' => '588',
'quarter' => '11785',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Eulma',
'title_category' => 'innkeeper',
'region' => '147',
'place' => '588',
'quarter' => '11786',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Annaba',
'title_category' => 'innkeeper',
'region' => '148',
'place' => '589',
'quarter' => '11787',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Annaba',
'title_category' => 'innkeeper',
'region' => '148',
'place' => '589',
'quarter' => '11788',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Annaba',
'title_category' => 'innkeeper',
'region' => '148',
'place' => '589',
'quarter' => '11789',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Annaba',
'title_category' => 'innkeeper',
'region' => '148',
'place' => '589',
'quarter' => '11790',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tabarka',
'title_category' => 'innkeeper',
'region' => '148',
'place' => '590',
'quarter' => '11791',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tabarka',
'title_category' => 'innkeeper',
'region' => '148',
'place' => '590',
'quarter' => '11792',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tabarka',
'title_category' => 'innkeeper',
'region' => '148',
'place' => '590',
'quarter' => '11793',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tabarka',
'title_category' => 'innkeeper',
'region' => '148',
'place' => '590',
'quarter' => '11794',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jendouba',
'title_category' => 'innkeeper',
'region' => '148',
'place' => '591',
'quarter' => '11795',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jendouba',
'title_category' => 'innkeeper',
'region' => '148',
'place' => '591',
'quarter' => '11796',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jendouba',
'title_category' => 'innkeeper',
'region' => '148',
'place' => '591',
'quarter' => '11797',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jendouba',
'title_category' => 'innkeeper',
'region' => '148',
'place' => '591',
'quarter' => '11798',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kaf',
'title_category' => 'innkeeper',
'region' => '148',
'place' => '592',
'quarter' => '11799',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kaf',
'title_category' => 'innkeeper',
'region' => '148',
'place' => '592',
'quarter' => '11800',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kaf',
'title_category' => 'innkeeper',
'region' => '148',
'place' => '592',
'quarter' => '11801',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kaf',
'title_category' => 'innkeeper',
'region' => '148',
'place' => '592',
'quarter' => '11802',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tunis',
'title_category' => 'innkeeper',
'region' => '149',
'place' => '593',
'quarter' => '11803',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tunis',
'title_category' => 'innkeeper',
'region' => '149',
'place' => '593',
'quarter' => '11804',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tunis',
'title_category' => 'innkeeper',
'region' => '149',
'place' => '593',
'quarter' => '11805',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tunis',
'title_category' => 'innkeeper',
'region' => '149',
'place' => '593',
'quarter' => '11806',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zaghouan',
'title_category' => 'innkeeper',
'region' => '149',
'place' => '594',
'quarter' => '11807',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zaghouan',
'title_category' => 'innkeeper',
'region' => '149',
'place' => '594',
'quarter' => '11808',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zaghouan',
'title_category' => 'innkeeper',
'region' => '149',
'place' => '594',
'quarter' => '11809',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zaghouan',
'title_category' => 'innkeeper',
'region' => '149',
'place' => '594',
'quarter' => '11810',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hammamet',
'title_category' => 'innkeeper',
'region' => '149',
'place' => '595',
'quarter' => '11811',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hammamet',
'title_category' => 'innkeeper',
'region' => '149',
'place' => '595',
'quarter' => '11812',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hammamet',
'title_category' => 'innkeeper',
'region' => '149',
'place' => '595',
'quarter' => '11813',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hammamet',
'title_category' => 'innkeeper',
'region' => '149',
'place' => '595',
'quarter' => '11814',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bizerte',
'title_category' => 'innkeeper',
'region' => '149',
'place' => '596',
'quarter' => '11815',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bizerte',
'title_category' => 'innkeeper',
'region' => '149',
'place' => '596',
'quarter' => '11816',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bizerte',
'title_category' => 'innkeeper',
'region' => '149',
'place' => '596',
'quarter' => '11817',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bizerte',
'title_category' => 'innkeeper',
'region' => '149',
'place' => '596',
'quarter' => '11818',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kairouan',
'title_category' => 'innkeeper',
'region' => '150',
'place' => '597',
'quarter' => '11819',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kairouan',
'title_category' => 'innkeeper',
'region' => '150',
'place' => '597',
'quarter' => '11820',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kairouan',
'title_category' => 'innkeeper',
'region' => '150',
'place' => '597',
'quarter' => '11821',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kairouan',
'title_category' => 'innkeeper',
'region' => '150',
'place' => '597',
'quarter' => '11822',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sousse',
'title_category' => 'innkeeper',
'region' => '150',
'place' => '598',
'quarter' => '11823',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sousse',
'title_category' => 'innkeeper',
'region' => '150',
'place' => '598',
'quarter' => '11824',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sousse',
'title_category' => 'innkeeper',
'region' => '150',
'place' => '598',
'quarter' => '11825',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sousse',
'title_category' => 'innkeeper',
'region' => '150',
'place' => '598',
'quarter' => '11826',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sfax',
'title_category' => 'innkeeper',
'region' => '150',
'place' => '599',
'quarter' => '11827',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sfax',
'title_category' => 'innkeeper',
'region' => '150',
'place' => '599',
'quarter' => '11828',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sfax',
'title_category' => 'innkeeper',
'region' => '150',
'place' => '599',
'quarter' => '11829',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sfax',
'title_category' => 'innkeeper',
'region' => '150',
'place' => '599',
'quarter' => '11830',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mahdia',
'title_category' => 'innkeeper',
'region' => '150',
'place' => '600',
'quarter' => '11831',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mahdia',
'title_category' => 'innkeeper',
'region' => '150',
'place' => '600',
'quarter' => '11832',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mahdia',
'title_category' => 'innkeeper',
'region' => '150',
'place' => '600',
'quarter' => '11833',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mahdia',
'title_category' => 'innkeeper',
'region' => '150',
'place' => '600',
'quarter' => '11834',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gabes',
'title_category' => 'innkeeper',
'region' => '151',
'place' => '601',
'quarter' => '11835',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gabes',
'title_category' => 'innkeeper',
'region' => '151',
'place' => '601',
'quarter' => '11836',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gabes',
'title_category' => 'innkeeper',
'region' => '151',
'place' => '601',
'quarter' => '11837',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gabes',
'title_category' => 'innkeeper',
'region' => '151',
'place' => '601',
'quarter' => '11838',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gafsa',
'title_category' => 'innkeeper',
'region' => '151',
'place' => '602',
'quarter' => '11839',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gafsa',
'title_category' => 'innkeeper',
'region' => '151',
'place' => '602',
'quarter' => '11840',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gafsa',
'title_category' => 'innkeeper',
'region' => '151',
'place' => '602',
'quarter' => '11841',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gafsa',
'title_category' => 'innkeeper',
'region' => '151',
'place' => '602',
'quarter' => '11842',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kebili',
'title_category' => 'innkeeper',
'region' => '151',
'place' => '603',
'quarter' => '11843',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kebili',
'title_category' => 'innkeeper',
'region' => '151',
'place' => '603',
'quarter' => '11844',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kebili',
'title_category' => 'innkeeper',
'region' => '151',
'place' => '603',
'quarter' => '11845',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kebili',
'title_category' => 'innkeeper',
'region' => '151',
'place' => '603',
'quarter' => '11846',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tozeur',
'title_category' => 'innkeeper',
'region' => '151',
'place' => '604',
'quarter' => '11847',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tozeur',
'title_category' => 'innkeeper',
'region' => '151',
'place' => '604',
'quarter' => '11848',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tozeur',
'title_category' => 'innkeeper',
'region' => '151',
'place' => '604',
'quarter' => '11849',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tozeur',
'title_category' => 'innkeeper',
'region' => '151',
'place' => '604',
'quarter' => '11850',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ghadames',
'title_category' => 'innkeeper',
'region' => '152',
'place' => '605',
'quarter' => '11851',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ghadames',
'title_category' => 'innkeeper',
'region' => '152',
'place' => '605',
'quarter' => '11852',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ghadames',
'title_category' => 'innkeeper',
'region' => '152',
'place' => '605',
'quarter' => '11853',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ghadames',
'title_category' => 'innkeeper',
'region' => '152',
'place' => '605',
'quarter' => '11854',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Medenine',
'title_category' => 'innkeeper',
'region' => '152',
'place' => '606',
'quarter' => '11855',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Medenine',
'title_category' => 'innkeeper',
'region' => '152',
'place' => '606',
'quarter' => '11856',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Medenine',
'title_category' => 'innkeeper',
'region' => '152',
'place' => '606',
'quarter' => '11857',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Medenine',
'title_category' => 'innkeeper',
'region' => '152',
'place' => '606',
'quarter' => '11858',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tamanrasset',
'title_category' => 'innkeeper',
'region' => '152',
'place' => '607',
'quarter' => '11859',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tamanrasset',
'title_category' => 'innkeeper',
'region' => '152',
'place' => '607',
'quarter' => '11860',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tamanrasset',
'title_category' => 'innkeeper',
'region' => '152',
'place' => '607',
'quarter' => '11861',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tamanrasset',
'title_category' => 'innkeeper',
'region' => '152',
'place' => '607',
'quarter' => '11862',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ghat',
'title_category' => 'innkeeper',
'region' => '152',
'place' => '608',
'quarter' => '11863',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ghat',
'title_category' => 'innkeeper',
'region' => '152',
'place' => '608',
'quarter' => '11864',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ghat',
'title_category' => 'innkeeper',
'region' => '152',
'place' => '608',
'quarter' => '11865',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ghat',
'title_category' => 'innkeeper',
'region' => '152',
'place' => '608',
'quarter' => '11866',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tripoli',
'title_category' => 'innkeeper',
'region' => '153',
'place' => '609',
'quarter' => '11867',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tripoli',
'title_category' => 'innkeeper',
'region' => '153',
'place' => '609',
'quarter' => '11868',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tripoli',
'title_category' => 'innkeeper',
'region' => '153',
'place' => '609',
'quarter' => '11869',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tripoli',
'title_category' => 'innkeeper',
'region' => '153',
'place' => '609',
'quarter' => '11870',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zliten',
'title_category' => 'innkeeper',
'region' => '153',
'place' => '610',
'quarter' => '11871',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zliten',
'title_category' => 'innkeeper',
'region' => '153',
'place' => '610',
'quarter' => '11872',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zliten',
'title_category' => 'innkeeper',
'region' => '153',
'place' => '610',
'quarter' => '11873',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zliten',
'title_category' => 'innkeeper',
'region' => '153',
'place' => '610',
'quarter' => '11874',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Misrata',
'title_category' => 'innkeeper',
'region' => '153',
'place' => '611',
'quarter' => '11875',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Misrata',
'title_category' => 'innkeeper',
'region' => '153',
'place' => '611',
'quarter' => '11876',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Misrata',
'title_category' => 'innkeeper',
'region' => '153',
'place' => '611',
'quarter' => '11877',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Misrata',
'title_category' => 'innkeeper',
'region' => '153',
'place' => '611',
'quarter' => '11878',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zuwara',
'title_category' => 'innkeeper',
'region' => '153',
'place' => '612',
'quarter' => '11879',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zuwara',
'title_category' => 'innkeeper',
'region' => '153',
'place' => '612',
'quarter' => '11880',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zuwara',
'title_category' => 'innkeeper',
'region' => '153',
'place' => '612',
'quarter' => '11881',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zuwara',
'title_category' => 'innkeeper',
'region' => '153',
'place' => '612',
'quarter' => '11882',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Germa',
'title_category' => 'innkeeper',
'region' => '154',
'place' => '613',
'quarter' => '11883',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Germa',
'title_category' => 'innkeeper',
'region' => '154',
'place' => '613',
'quarter' => '11884',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Germa',
'title_category' => 'innkeeper',
'region' => '154',
'place' => '613',
'quarter' => '11885',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Germa',
'title_category' => 'innkeeper',
'region' => '154',
'place' => '613',
'quarter' => '11886',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sabha',
'title_category' => 'innkeeper',
'region' => '154',
'place' => '614',
'quarter' => '11887',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sabha',
'title_category' => 'innkeeper',
'region' => '154',
'place' => '614',
'quarter' => '11888',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sabha',
'title_category' => 'innkeeper',
'region' => '154',
'place' => '614',
'quarter' => '11889',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sabha',
'title_category' => 'innkeeper',
'region' => '154',
'place' => '614',
'quarter' => '11890',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zouila',
'title_category' => 'innkeeper',
'region' => '154',
'place' => '615',
'quarter' => '11891',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zouila',
'title_category' => 'innkeeper',
'region' => '154',
'place' => '615',
'quarter' => '11892',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zouila',
'title_category' => 'innkeeper',
'region' => '154',
'place' => '615',
'quarter' => '11893',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zouila',
'title_category' => 'innkeeper',
'region' => '154',
'place' => '615',
'quarter' => '11894',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Qatrun',
'title_category' => 'innkeeper',
'region' => '154',
'place' => '616',
'quarter' => '11895',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Qatrun',
'title_category' => 'innkeeper',
'region' => '154',
'place' => '616',
'quarter' => '11896',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Qatrun',
'title_category' => 'innkeeper',
'region' => '154',
'place' => '616',
'quarter' => '11897',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Qatrun',
'title_category' => 'innkeeper',
'region' => '154',
'place' => '616',
'quarter' => '11898',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kufra',
'title_category' => 'innkeeper',
'region' => '155',
'place' => '617',
'quarter' => '11899',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kufra',
'title_category' => 'innkeeper',
'region' => '155',
'place' => '617',
'quarter' => '11900',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kufra',
'title_category' => 'innkeeper',
'region' => '155',
'place' => '617',
'quarter' => '11901',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kufra',
'title_category' => 'innkeeper',
'region' => '155',
'place' => '617',
'quarter' => '11902',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ghiranghedi',
'title_category' => 'innkeeper',
'region' => '155',
'place' => '618',
'quarter' => '11903',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ghiranghedi',
'title_category' => 'innkeeper',
'region' => '155',
'place' => '618',
'quarter' => '11904',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ghiranghedi',
'title_category' => 'innkeeper',
'region' => '155',
'place' => '618',
'quarter' => '11905',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ghiranghedi',
'title_category' => 'innkeeper',
'region' => '155',
'place' => '618',
'quarter' => '11906',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Awjila',
'title_category' => 'innkeeper',
'region' => '155',
'place' => '619',
'quarter' => '11907',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Awjila',
'title_category' => 'innkeeper',
'region' => '155',
'place' => '619',
'quarter' => '11908',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Awjila',
'title_category' => 'innkeeper',
'region' => '155',
'place' => '619',
'quarter' => '11909',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Awjila',
'title_category' => 'innkeeper',
'region' => '155',
'place' => '619',
'quarter' => '11910',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Marada',
'title_category' => 'innkeeper',
'region' => '155',
'place' => '620',
'quarter' => '11911',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Marada',
'title_category' => 'innkeeper',
'region' => '155',
'place' => '620',
'quarter' => '11912',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Marada',
'title_category' => 'innkeeper',
'region' => '155',
'place' => '620',
'quarter' => '11913',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Marada',
'title_category' => 'innkeeper',
'region' => '155',
'place' => '620',
'quarter' => '11914',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Benghazi',
'title_category' => 'innkeeper',
'region' => '156',
'place' => '621',
'quarter' => '11915',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Benghazi',
'title_category' => 'innkeeper',
'region' => '156',
'place' => '621',
'quarter' => '11916',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Benghazi',
'title_category' => 'innkeeper',
'region' => '156',
'place' => '621',
'quarter' => '11917',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Benghazi',
'title_category' => 'innkeeper',
'region' => '156',
'place' => '621',
'quarter' => '11918',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Derna',
'title_category' => 'innkeeper',
'region' => '156',
'place' => '622',
'quarter' => '11919',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Derna',
'title_category' => 'innkeeper',
'region' => '156',
'place' => '622',
'quarter' => '11920',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Derna',
'title_category' => 'innkeeper',
'region' => '156',
'place' => '622',
'quarter' => '11921',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Derna',
'title_category' => 'innkeeper',
'region' => '156',
'place' => '622',
'quarter' => '11922',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tobruk',
'title_category' => 'innkeeper',
'region' => '156',
'place' => '623',
'quarter' => '11923',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tobruk',
'title_category' => 'innkeeper',
'region' => '156',
'place' => '623',
'quarter' => '11924',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tobruk',
'title_category' => 'innkeeper',
'region' => '156',
'place' => '623',
'quarter' => '11925',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tobruk',
'title_category' => 'innkeeper',
'region' => '156',
'place' => '623',
'quarter' => '11926',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ajdabiya',
'title_category' => 'innkeeper',
'region' => '156',
'place' => '624',
'quarter' => '11927',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ajdabiya',
'title_category' => 'innkeeper',
'region' => '156',
'place' => '624',
'quarter' => '11928',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ajdabiya',
'title_category' => 'innkeeper',
'region' => '156',
'place' => '624',
'quarter' => '11929',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ajdabiya',
'title_category' => 'innkeeper',
'region' => '156',
'place' => '624',
'quarter' => '11930',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alexandria',
'title_category' => 'innkeeper',
'region' => '157',
'place' => '625',
'quarter' => '11931',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alexandria',
'title_category' => 'innkeeper',
'region' => '157',
'place' => '625',
'quarter' => '11932',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alexandria',
'title_category' => 'innkeeper',
'region' => '157',
'place' => '625',
'quarter' => '11933',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alexandria',
'title_category' => 'innkeeper',
'region' => '157',
'place' => '625',
'quarter' => '11934',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rosetta',
'title_category' => 'innkeeper',
'region' => '157',
'place' => '626',
'quarter' => '11935',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rosetta',
'title_category' => 'innkeeper',
'region' => '157',
'place' => '626',
'quarter' => '11936',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rosetta',
'title_category' => 'innkeeper',
'region' => '157',
'place' => '626',
'quarter' => '11937',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rosetta',
'title_category' => 'innkeeper',
'region' => '157',
'place' => '626',
'quarter' => '11938',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Damietta',
'title_category' => 'innkeeper',
'region' => '157',
'place' => '627',
'quarter' => '11939',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Damietta',
'title_category' => 'innkeeper',
'region' => '157',
'place' => '627',
'quarter' => '11940',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Damietta',
'title_category' => 'innkeeper',
'region' => '157',
'place' => '627',
'quarter' => '11941',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Damietta',
'title_category' => 'innkeeper',
'region' => '157',
'place' => '627',
'quarter' => '11942',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mansoura',
'title_category' => 'innkeeper',
'region' => '157',
'place' => '628',
'quarter' => '11943',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mansoura',
'title_category' => 'innkeeper',
'region' => '157',
'place' => '628',
'quarter' => '11944',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mansoura',
'title_category' => 'innkeeper',
'region' => '157',
'place' => '628',
'quarter' => '11945',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mansoura',
'title_category' => 'innkeeper',
'region' => '157',
'place' => '628',
'quarter' => '11946',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cairo',
'title_category' => 'innkeeper',
'region' => '158',
'place' => '629',
'quarter' => '11947',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cairo',
'title_category' => 'innkeeper',
'region' => '158',
'place' => '629',
'quarter' => '11948',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cairo',
'title_category' => 'innkeeper',
'region' => '158',
'place' => '629',
'quarter' => '11949',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cairo',
'title_category' => 'innkeeper',
'region' => '158',
'place' => '629',
'quarter' => '11950',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Helwan',
'title_category' => 'innkeeper',
'region' => '158',
'place' => '630',
'quarter' => '11951',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Helwan',
'title_category' => 'innkeeper',
'region' => '158',
'place' => '630',
'quarter' => '11952',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Helwan',
'title_category' => 'innkeeper',
'region' => '158',
'place' => '630',
'quarter' => '11953',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Helwan',
'title_category' => 'innkeeper',
'region' => '158',
'place' => '630',
'quarter' => '11954',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Fayum',
'title_category' => 'innkeeper',
'region' => '158',
'place' => '631',
'quarter' => '11955',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Fayum',
'title_category' => 'innkeeper',
'region' => '158',
'place' => '631',
'quarter' => '11956',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Fayum',
'title_category' => 'innkeeper',
'region' => '158',
'place' => '631',
'quarter' => '11957',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Fayum',
'title_category' => 'innkeeper',
'region' => '158',
'place' => '631',
'quarter' => '11958',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Natrun',
'title_category' => 'innkeeper',
'region' => '158',
'place' => '632',
'quarter' => '11959',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Natrun',
'title_category' => 'innkeeper',
'region' => '158',
'place' => '632',
'quarter' => '11960',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Natrun',
'title_category' => 'innkeeper',
'region' => '158',
'place' => '632',
'quarter' => '11961',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Natrun',
'title_category' => 'innkeeper',
'region' => '158',
'place' => '632',
'quarter' => '11962',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Minya',
'title_category' => 'innkeeper',
'region' => '159',
'place' => '633',
'quarter' => '11963',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Minya',
'title_category' => 'innkeeper',
'region' => '159',
'place' => '633',
'quarter' => '11964',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Minya',
'title_category' => 'innkeeper',
'region' => '159',
'place' => '633',
'quarter' => '11965',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Minya',
'title_category' => 'innkeeper',
'region' => '159',
'place' => '633',
'quarter' => '11966',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Siwa',
'title_category' => 'innkeeper',
'region' => '159',
'place' => '634',
'quarter' => '11967',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Siwa',
'title_category' => 'innkeeper',
'region' => '159',
'place' => '634',
'quarter' => '11968',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Siwa',
'title_category' => 'innkeeper',
'region' => '159',
'place' => '634',
'quarter' => '11969',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Siwa',
'title_category' => 'innkeeper',
'region' => '159',
'place' => '634',
'quarter' => '11970',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Farafra',
'title_category' => 'innkeeper',
'region' => '159',
'place' => '635',
'quarter' => '11971',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Farafra',
'title_category' => 'innkeeper',
'region' => '159',
'place' => '635',
'quarter' => '11972',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Farafra',
'title_category' => 'innkeeper',
'region' => '159',
'place' => '635',
'quarter' => '11973',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Farafra',
'title_category' => 'innkeeper',
'region' => '159',
'place' => '635',
'quarter' => '11974',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Anba Boula',
'title_category' => 'innkeeper',
'region' => '159',
'place' => '636',
'quarter' => '11975',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Anba Boula',
'title_category' => 'innkeeper',
'region' => '159',
'place' => '636',
'quarter' => '11976',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Anba Boula',
'title_category' => 'innkeeper',
'region' => '159',
'place' => '636',
'quarter' => '11977',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Anba Boula',
'title_category' => 'innkeeper',
'region' => '159',
'place' => '636',
'quarter' => '11978',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Asyut',
'title_category' => 'innkeeper',
'region' => '160',
'place' => '637',
'quarter' => '11979',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Asyut',
'title_category' => 'innkeeper',
'region' => '160',
'place' => '637',
'quarter' => '11980',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Asyut',
'title_category' => 'innkeeper',
'region' => '160',
'place' => '637',
'quarter' => '11981',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Asyut',
'title_category' => 'innkeeper',
'region' => '160',
'place' => '637',
'quarter' => '11982',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kharga',
'title_category' => 'innkeeper',
'region' => '160',
'place' => '638',
'quarter' => '11983',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kharga',
'title_category' => 'innkeeper',
'region' => '160',
'place' => '638',
'quarter' => '11984',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kharga',
'title_category' => 'innkeeper',
'region' => '160',
'place' => '638',
'quarter' => '11985',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kharga',
'title_category' => 'innkeeper',
'region' => '160',
'place' => '638',
'quarter' => '11986',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aswan',
'title_category' => 'innkeeper',
'region' => '160',
'place' => '639',
'quarter' => '11987',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aswan',
'title_category' => 'innkeeper',
'region' => '160',
'place' => '639',
'quarter' => '11988',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aswan',
'title_category' => 'innkeeper',
'region' => '160',
'place' => '639',
'quarter' => '11989',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aswan',
'title_category' => 'innkeeper',
'region' => '160',
'place' => '639',
'quarter' => '11990',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zinaiqa',
'title_category' => 'innkeeper',
'region' => '160',
'place' => '640',
'quarter' => '11991',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zinaiqa',
'title_category' => 'innkeeper',
'region' => '160',
'place' => '640',
'quarter' => '11992',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zinaiqa',
'title_category' => 'innkeeper',
'region' => '160',
'place' => '640',
'quarter' => '11993',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zinaiqa',
'title_category' => 'innkeeper',
'region' => '160',
'place' => '640',
'quarter' => '11994',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Liegnitz',
'title_category' => 'innkeeper',
'region' => '161',
'place' => '641',
'quarter' => '11995',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Liegnitz',
'title_category' => 'innkeeper',
'region' => '161',
'place' => '641',
'quarter' => '11996',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Liegnitz',
'title_category' => 'innkeeper',
'region' => '161',
'place' => '641',
'quarter' => '11997',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Liegnitz',
'title_category' => 'innkeeper',
'region' => '161',
'place' => '641',
'quarter' => '11998',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Glogau',
'title_category' => 'innkeeper',
'region' => '161',
'place' => '642',
'quarter' => '11999',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Glogau',
'title_category' => 'innkeeper',
'region' => '161',
'place' => '642',
'quarter' => '12000',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Glogau',
'title_category' => 'innkeeper',
'region' => '161',
'place' => '642',
'quarter' => '12001',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Glogau',
'title_category' => 'innkeeper',
'region' => '161',
'place' => '642',
'quarter' => '12002',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Breslau',
'title_category' => 'innkeeper',
'region' => '161',
'place' => '643',
'quarter' => '12003',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Breslau',
'title_category' => 'innkeeper',
'region' => '161',
'place' => '643',
'quarter' => '12004',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Breslau',
'title_category' => 'innkeeper',
'region' => '161',
'place' => '643',
'quarter' => '12005',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Breslau',
'title_category' => 'innkeeper',
'region' => '161',
'place' => '643',
'quarter' => '12006',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Leubus',
'title_category' => 'innkeeper',
'region' => '161',
'place' => '644',
'quarter' => '12007',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Leubus',
'title_category' => 'innkeeper',
'region' => '161',
'place' => '644',
'quarter' => '12008',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Leubus',
'title_category' => 'innkeeper',
'region' => '161',
'place' => '644',
'quarter' => '12009',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Leubus',
'title_category' => 'innkeeper',
'region' => '161',
'place' => '644',
'quarter' => '12010',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Krakow',
'title_category' => 'innkeeper',
'region' => '162',
'place' => '645',
'quarter' => '12011',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Krakow',
'title_category' => 'innkeeper',
'region' => '162',
'place' => '645',
'quarter' => '12012',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Krakow',
'title_category' => 'innkeeper',
'region' => '162',
'place' => '645',
'quarter' => '12013',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Krakow',
'title_category' => 'innkeeper',
'region' => '162',
'place' => '645',
'quarter' => '12014',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Teczyn',
'title_category' => 'innkeeper',
'region' => '162',
'place' => '646',
'quarter' => '12015',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Teczyn',
'title_category' => 'innkeeper',
'region' => '162',
'place' => '646',
'quarter' => '12016',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Teczyn',
'title_category' => 'innkeeper',
'region' => '162',
'place' => '646',
'quarter' => '12017',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Teczyn',
'title_category' => 'innkeeper',
'region' => '162',
'place' => '646',
'quarter' => '12018',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tarnau',
'title_category' => 'innkeeper',
'region' => '162',
'place' => '647',
'quarter' => '12019',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tarnau',
'title_category' => 'innkeeper',
'region' => '162',
'place' => '647',
'quarter' => '12020',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tarnau',
'title_category' => 'innkeeper',
'region' => '162',
'place' => '647',
'quarter' => '12021',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tarnau',
'title_category' => 'innkeeper',
'region' => '162',
'place' => '647',
'quarter' => '12022',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Salzberg',
'title_category' => 'innkeeper',
'region' => '162',
'place' => '648',
'quarter' => '12023',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Salzberg',
'title_category' => 'innkeeper',
'region' => '162',
'place' => '648',
'quarter' => '12024',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Salzberg',
'title_category' => 'innkeeper',
'region' => '162',
'place' => '648',
'quarter' => '12025',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Salzberg',
'title_category' => 'innkeeper',
'region' => '162',
'place' => '648',
'quarter' => '12026',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gnesen',
'title_category' => 'innkeeper',
'region' => '163',
'place' => '649',
'quarter' => '12027',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gnesen',
'title_category' => 'innkeeper',
'region' => '163',
'place' => '649',
'quarter' => '12028',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gnesen',
'title_category' => 'innkeeper',
'region' => '163',
'place' => '649',
'quarter' => '12029',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gnesen',
'title_category' => 'innkeeper',
'region' => '163',
'place' => '649',
'quarter' => '12030',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Posen',
'title_category' => 'innkeeper',
'region' => '163',
'place' => '650',
'quarter' => '12031',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Posen',
'title_category' => 'innkeeper',
'region' => '163',
'place' => '650',
'quarter' => '12032',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Posen',
'title_category' => 'innkeeper',
'region' => '163',
'place' => '650',
'quarter' => '12033',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Posen',
'title_category' => 'innkeeper',
'region' => '163',
'place' => '650',
'quarter' => '12034',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Konin',
'title_category' => 'innkeeper',
'region' => '163',
'place' => '651',
'quarter' => '12035',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Konin',
'title_category' => 'innkeeper',
'region' => '163',
'place' => '651',
'quarter' => '12036',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Konin',
'title_category' => 'innkeeper',
'region' => '163',
'place' => '651',
'quarter' => '12037',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Konin',
'title_category' => 'innkeeper',
'region' => '163',
'place' => '651',
'quarter' => '12038',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kalisz',
'title_category' => 'innkeeper',
'region' => '163',
'place' => '652',
'quarter' => '12039',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kalisz',
'title_category' => 'innkeeper',
'region' => '163',
'place' => '652',
'quarter' => '12040',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kalisz',
'title_category' => 'innkeeper',
'region' => '163',
'place' => '652',
'quarter' => '12041',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kalisz',
'title_category' => 'innkeeper',
'region' => '163',
'place' => '652',
'quarter' => '12042',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Plock',
'title_category' => 'innkeeper',
'region' => '164',
'place' => '653',
'quarter' => '12043',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Plock',
'title_category' => 'innkeeper',
'region' => '164',
'place' => '653',
'quarter' => '12044',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Plock',
'title_category' => 'innkeeper',
'region' => '164',
'place' => '653',
'quarter' => '12045',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Plock',
'title_category' => 'innkeeper',
'region' => '164',
'place' => '653',
'quarter' => '12046',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Warsaw',
'title_category' => 'innkeeper',
'region' => '164',
'place' => '654',
'quarter' => '12047',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Warsaw',
'title_category' => 'innkeeper',
'region' => '164',
'place' => '654',
'quarter' => '12048',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Warsaw',
'title_category' => 'innkeeper',
'region' => '164',
'place' => '654',
'quarter' => '12049',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Warsaw',
'title_category' => 'innkeeper',
'region' => '164',
'place' => '654',
'quarter' => '12050',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Leslau',
'title_category' => 'innkeeper',
'region' => '164',
'place' => '655',
'quarter' => '12051',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Leslau',
'title_category' => 'innkeeper',
'region' => '164',
'place' => '655',
'quarter' => '12052',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Leslau',
'title_category' => 'innkeeper',
'region' => '164',
'place' => '655',
'quarter' => '12053',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Leslau',
'title_category' => 'innkeeper',
'region' => '164',
'place' => '655',
'quarter' => '12054',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Radomir',
'title_category' => 'innkeeper',
'region' => '164',
'place' => '656',
'quarter' => '12055',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Radomir',
'title_category' => 'innkeeper',
'region' => '164',
'place' => '656',
'quarter' => '12056',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Radomir',
'title_category' => 'innkeeper',
'region' => '164',
'place' => '656',
'quarter' => '12057',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Radomir',
'title_category' => 'innkeeper',
'region' => '164',
'place' => '656',
'quarter' => '12058',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Brest',
'title_category' => 'innkeeper',
'region' => '165',
'place' => '657',
'quarter' => '12059',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Brest',
'title_category' => 'innkeeper',
'region' => '165',
'place' => '657',
'quarter' => '12060',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Brest',
'title_category' => 'innkeeper',
'region' => '165',
'place' => '657',
'quarter' => '12061',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Brest',
'title_category' => 'innkeeper',
'region' => '165',
'place' => '657',
'quarter' => '12062',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Goroden',
'title_category' => 'innkeeper',
'region' => '165',
'place' => '658',
'quarter' => '12063',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Goroden',
'title_category' => 'innkeeper',
'region' => '165',
'place' => '658',
'quarter' => '12064',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Goroden',
'title_category' => 'innkeeper',
'region' => '165',
'place' => '658',
'quarter' => '12065',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Goroden',
'title_category' => 'innkeeper',
'region' => '165',
'place' => '658',
'quarter' => '12066',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kobryn',
'title_category' => 'innkeeper',
'region' => '165',
'place' => '659',
'quarter' => '12067',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kobryn',
'title_category' => 'innkeeper',
'region' => '165',
'place' => '659',
'quarter' => '12068',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kobryn',
'title_category' => 'innkeeper',
'region' => '165',
'place' => '659',
'quarter' => '12069',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kobryn',
'title_category' => 'innkeeper',
'region' => '165',
'place' => '659',
'quarter' => '12070',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Wolkowysk',
'title_category' => 'innkeeper',
'region' => '165',
'place' => '660',
'quarter' => '12071',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Wolkowysk',
'title_category' => 'innkeeper',
'region' => '165',
'place' => '660',
'quarter' => '12072',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Wolkowysk',
'title_category' => 'innkeeper',
'region' => '165',
'place' => '660',
'quarter' => '12073',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Wolkowysk',
'title_category' => 'innkeeper',
'region' => '165',
'place' => '660',
'quarter' => '12074',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tracken',
'title_category' => 'innkeeper',
'region' => '166',
'place' => '661',
'quarter' => '12075',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tracken',
'title_category' => 'innkeeper',
'region' => '166',
'place' => '661',
'quarter' => '12076',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tracken',
'title_category' => 'innkeeper',
'region' => '166',
'place' => '661',
'quarter' => '12077',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tracken',
'title_category' => 'innkeeper',
'region' => '166',
'place' => '661',
'quarter' => '12078',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vilnius',
'title_category' => 'innkeeper',
'region' => '166',
'place' => '662',
'quarter' => '12079',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vilnius',
'title_category' => 'innkeeper',
'region' => '166',
'place' => '662',
'quarter' => '12080',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vilnius',
'title_category' => 'innkeeper',
'region' => '166',
'place' => '662',
'quarter' => '12081',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vilnius',
'title_category' => 'innkeeper',
'region' => '166',
'place' => '662',
'quarter' => '12082',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kauen',
'title_category' => 'innkeeper',
'region' => '166',
'place' => '663',
'quarter' => '12083',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kauen',
'title_category' => 'innkeeper',
'region' => '166',
'place' => '663',
'quarter' => '12084',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kauen',
'title_category' => 'innkeeper',
'region' => '166',
'place' => '663',
'quarter' => '12085',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kauen',
'title_category' => 'innkeeper',
'region' => '166',
'place' => '663',
'quarter' => '12086',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Minsk',
'title_category' => 'innkeeper',
'region' => '166',
'place' => '664',
'quarter' => '12087',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Minsk',
'title_category' => 'innkeeper',
'region' => '166',
'place' => '664',
'quarter' => '12088',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Minsk',
'title_category' => 'innkeeper',
'region' => '166',
'place' => '664',
'quarter' => '12089',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Minsk',
'title_category' => 'innkeeper',
'region' => '166',
'place' => '664',
'quarter' => '12090',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pula',
'title_category' => 'innkeeper',
'region' => '167',
'place' => '665',
'quarter' => '12091',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pula',
'title_category' => 'innkeeper',
'region' => '167',
'place' => '665',
'quarter' => '12092',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pula',
'title_category' => 'innkeeper',
'region' => '167',
'place' => '665',
'quarter' => '12093',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pula',
'title_category' => 'innkeeper',
'region' => '167',
'place' => '665',
'quarter' => '12094',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rovigno',
'title_category' => 'innkeeper',
'region' => '167',
'place' => '666',
'quarter' => '12095',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rovigno',
'title_category' => 'innkeeper',
'region' => '167',
'place' => '666',
'quarter' => '12096',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rovigno',
'title_category' => 'innkeeper',
'region' => '167',
'place' => '666',
'quarter' => '12097',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rovigno',
'title_category' => 'innkeeper',
'region' => '167',
'place' => '666',
'quarter' => '12098',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vikla',
'title_category' => 'innkeeper',
'region' => '167',
'place' => '667',
'quarter' => '12099',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vikla',
'title_category' => 'innkeeper',
'region' => '167',
'place' => '667',
'quarter' => '12100',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vikla',
'title_category' => 'innkeeper',
'region' => '167',
'place' => '667',
'quarter' => '12101',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vikla',
'title_category' => 'innkeeper',
'region' => '167',
'place' => '667',
'quarter' => '12102',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Trsat',
'title_category' => 'innkeeper',
'region' => '167',
'place' => '668',
'quarter' => '12103',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Trsat',
'title_category' => 'innkeeper',
'region' => '167',
'place' => '668',
'quarter' => '12104',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Trsat',
'title_category' => 'innkeeper',
'region' => '167',
'place' => '668',
'quarter' => '12105',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Trsat',
'title_category' => 'innkeeper',
'region' => '167',
'place' => '668',
'quarter' => '12106',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ragusa',
'title_category' => 'innkeeper',
'region' => '168',
'place' => '669',
'quarter' => '12107',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ragusa',
'title_category' => 'innkeeper',
'region' => '168',
'place' => '669',
'quarter' => '12108',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ragusa',
'title_category' => 'innkeeper',
'region' => '168',
'place' => '669',
'quarter' => '12109',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ragusa',
'title_category' => 'innkeeper',
'region' => '168',
'place' => '669',
'quarter' => '12110',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zadar',
'title_category' => 'innkeeper',
'region' => '168',
'place' => '670',
'quarter' => '12111',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zadar',
'title_category' => 'innkeeper',
'region' => '168',
'place' => '670',
'quarter' => '12112',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zadar',
'title_category' => 'innkeeper',
'region' => '168',
'place' => '670',
'quarter' => '12113',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zadar',
'title_category' => 'innkeeper',
'region' => '168',
'place' => '670',
'quarter' => '12114',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Split',
'title_category' => 'innkeeper',
'region' => '168',
'place' => '671',
'quarter' => '12115',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Split',
'title_category' => 'innkeeper',
'region' => '168',
'place' => '671',
'quarter' => '12116',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Split',
'title_category' => 'innkeeper',
'region' => '168',
'place' => '671',
'quarter' => '12117',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Split',
'title_category' => 'innkeeper',
'region' => '168',
'place' => '671',
'quarter' => '12118',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Biograd',
'title_category' => 'innkeeper',
'region' => '168',
'place' => '672',
'quarter' => '12119',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Biograd',
'title_category' => 'innkeeper',
'region' => '168',
'place' => '672',
'quarter' => '12120',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Biograd',
'title_category' => 'innkeeper',
'region' => '168',
'place' => '672',
'quarter' => '12121',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Biograd',
'title_category' => 'innkeeper',
'region' => '168',
'place' => '672',
'quarter' => '12122',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Knin',
'title_category' => 'innkeeper',
'region' => '169',
'place' => '673',
'quarter' => '12123',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Knin',
'title_category' => 'innkeeper',
'region' => '169',
'place' => '673',
'quarter' => '12124',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Knin',
'title_category' => 'innkeeper',
'region' => '169',
'place' => '673',
'quarter' => '12125',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Knin',
'title_category' => 'innkeeper',
'region' => '169',
'place' => '673',
'quarter' => '12126',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bihac',
'title_category' => 'innkeeper',
'region' => '169',
'place' => '674',
'quarter' => '12127',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bihac',
'title_category' => 'innkeeper',
'region' => '169',
'place' => '674',
'quarter' => '12128',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bihac',
'title_category' => 'innkeeper',
'region' => '169',
'place' => '674',
'quarter' => '12129',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bihac',
'title_category' => 'innkeeper',
'region' => '169',
'place' => '674',
'quarter' => '12130',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Konjic',
'title_category' => 'innkeeper',
'region' => '169',
'place' => '675',
'quarter' => '12131',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Konjic',
'title_category' => 'innkeeper',
'region' => '169',
'place' => '675',
'quarter' => '12132',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Konjic',
'title_category' => 'innkeeper',
'region' => '169',
'place' => '675',
'quarter' => '12133',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Konjic',
'title_category' => 'innkeeper',
'region' => '169',
'place' => '675',
'quarter' => '12134',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kotor',
'title_category' => 'innkeeper',
'region' => '169',
'place' => '676',
'quarter' => '12135',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kotor',
'title_category' => 'innkeeper',
'region' => '169',
'place' => '676',
'quarter' => '12136',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kotor',
'title_category' => 'innkeeper',
'region' => '169',
'place' => '676',
'quarter' => '12137',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kotor',
'title_category' => 'innkeeper',
'region' => '169',
'place' => '676',
'quarter' => '12138',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gyor',
'title_category' => 'innkeeper',
'region' => '170',
'place' => '677',
'quarter' => '12139',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gyor',
'title_category' => 'innkeeper',
'region' => '170',
'place' => '677',
'quarter' => '12140',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gyor',
'title_category' => 'innkeeper',
'region' => '170',
'place' => '677',
'quarter' => '12141',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gyor',
'title_category' => 'innkeeper',
'region' => '170',
'place' => '677',
'quarter' => '12142',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tyrnau',
'title_category' => 'innkeeper',
'region' => '170',
'place' => '678',
'quarter' => '12143',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tyrnau',
'title_category' => 'innkeeper',
'region' => '170',
'place' => '678',
'quarter' => '12144',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tyrnau',
'title_category' => 'innkeeper',
'region' => '170',
'place' => '678',
'quarter' => '12145',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tyrnau',
'title_category' => 'innkeeper',
'region' => '170',
'place' => '678',
'quarter' => '12146',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nitra',
'title_category' => 'innkeeper',
'region' => '170',
'place' => '679',
'quarter' => '12147',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nitra',
'title_category' => 'innkeeper',
'region' => '170',
'place' => '679',
'quarter' => '12148',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nitra',
'title_category' => 'innkeeper',
'region' => '170',
'place' => '679',
'quarter' => '12149',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nitra',
'title_category' => 'innkeeper',
'region' => '170',
'place' => '679',
'quarter' => '12150',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sopron',
'title_category' => 'innkeeper',
'region' => '170',
'place' => '680',
'quarter' => '12151',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sopron',
'title_category' => 'innkeeper',
'region' => '170',
'place' => '680',
'quarter' => '12152',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sopron',
'title_category' => 'innkeeper',
'region' => '170',
'place' => '680',
'quarter' => '12153',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sopron',
'title_category' => 'innkeeper',
'region' => '170',
'place' => '680',
'quarter' => '12154',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Veszprem',
'title_category' => 'innkeeper',
'region' => '171',
'place' => '681',
'quarter' => '12155',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Veszprem',
'title_category' => 'innkeeper',
'region' => '171',
'place' => '681',
'quarter' => '12156',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Veszprem',
'title_category' => 'innkeeper',
'region' => '171',
'place' => '681',
'quarter' => '12157',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Veszprem',
'title_category' => 'innkeeper',
'region' => '171',
'place' => '681',
'quarter' => '12158',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Fehervar',
'title_category' => 'innkeeper',
'region' => '171',
'place' => '682',
'quarter' => '12159',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Fehervar',
'title_category' => 'innkeeper',
'region' => '171',
'place' => '682',
'quarter' => '12160',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Fehervar',
'title_category' => 'innkeeper',
'region' => '171',
'place' => '682',
'quarter' => '12161',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Fehervar',
'title_category' => 'innkeeper',
'region' => '171',
'place' => '682',
'quarter' => '12162',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Egerszeg',
'title_category' => 'innkeeper',
'region' => '171',
'place' => '683',
'quarter' => '12163',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Egerszeg',
'title_category' => 'innkeeper',
'region' => '171',
'place' => '683',
'quarter' => '12164',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Egerszeg',
'title_category' => 'innkeeper',
'region' => '171',
'place' => '683',
'quarter' => '12165',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Egerszeg',
'title_category' => 'innkeeper',
'region' => '171',
'place' => '683',
'quarter' => '12166',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pecs',
'title_category' => 'innkeeper',
'region' => '171',
'place' => '684',
'quarter' => '12167',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pecs',
'title_category' => 'innkeeper',
'region' => '171',
'place' => '684',
'quarter' => '12168',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pecs',
'title_category' => 'innkeeper',
'region' => '171',
'place' => '684',
'quarter' => '12169',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pecs',
'title_category' => 'innkeeper',
'region' => '171',
'place' => '684',
'quarter' => '12170',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Esztergom',
'title_category' => 'innkeeper',
'region' => '172',
'place' => '685',
'quarter' => '12171',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Esztergom',
'title_category' => 'innkeeper',
'region' => '172',
'place' => '685',
'quarter' => '12172',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Esztergom',
'title_category' => 'innkeeper',
'region' => '172',
'place' => '685',
'quarter' => '12173',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Esztergom',
'title_category' => 'innkeeper',
'region' => '172',
'place' => '685',
'quarter' => '12174',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bystrica',
'title_category' => 'innkeeper',
'region' => '172',
'place' => '686',
'quarter' => '12175',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bystrica',
'title_category' => 'innkeeper',
'region' => '172',
'place' => '686',
'quarter' => '12176',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bystrica',
'title_category' => 'innkeeper',
'region' => '172',
'place' => '686',
'quarter' => '12177',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bystrica',
'title_category' => 'innkeeper',
'region' => '172',
'place' => '686',
'quarter' => '12178',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Krupina',
'title_category' => 'innkeeper',
'region' => '172',
'place' => '687',
'quarter' => '12179',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Krupina',
'title_category' => 'innkeeper',
'region' => '172',
'place' => '687',
'quarter' => '12180',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Krupina',
'title_category' => 'innkeeper',
'region' => '172',
'place' => '687',
'quarter' => '12181',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Krupina',
'title_category' => 'innkeeper',
'region' => '172',
'place' => '687',
'quarter' => '12182',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Leua',
'title_category' => 'innkeeper',
'region' => '172',
'place' => '688',
'quarter' => '12183',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Leua',
'title_category' => 'innkeeper',
'region' => '172',
'place' => '688',
'quarter' => '12184',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Leua',
'title_category' => 'innkeeper',
'region' => '172',
'place' => '688',
'quarter' => '12185',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Leua',
'title_category' => 'innkeeper',
'region' => '172',
'place' => '688',
'quarter' => '12186',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Eger',
'title_category' => 'innkeeper',
'region' => '173',
'place' => '689',
'quarter' => '12187',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Eger',
'title_category' => 'innkeeper',
'region' => '173',
'place' => '689',
'quarter' => '12188',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Eger',
'title_category' => 'innkeeper',
'region' => '173',
'place' => '689',
'quarter' => '12189',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Eger',
'title_category' => 'innkeeper',
'region' => '173',
'place' => '689',
'quarter' => '12190',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Diosgyor',
'title_category' => 'innkeeper',
'region' => '173',
'place' => '690',
'quarter' => '12191',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Diosgyor',
'title_category' => 'innkeeper',
'region' => '173',
'place' => '690',
'quarter' => '12192',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Diosgyor',
'title_category' => 'innkeeper',
'region' => '173',
'place' => '690',
'quarter' => '12193',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Diosgyor',
'title_category' => 'innkeeper',
'region' => '173',
'place' => '690',
'quarter' => '12194',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bartfeld',
'title_category' => 'innkeeper',
'region' => '173',
'place' => '691',
'quarter' => '12195',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bartfeld',
'title_category' => 'innkeeper',
'region' => '173',
'place' => '691',
'quarter' => '12196',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bartfeld',
'title_category' => 'innkeeper',
'region' => '173',
'place' => '691',
'quarter' => '12197',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bartfeld',
'title_category' => 'innkeeper',
'region' => '173',
'place' => '691',
'quarter' => '12198',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kassow',
'title_category' => 'innkeeper',
'region' => '173',
'place' => '692',
'quarter' => '12199',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kassow',
'title_category' => 'innkeeper',
'region' => '173',
'place' => '692',
'quarter' => '12200',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kassow',
'title_category' => 'innkeeper',
'region' => '173',
'place' => '692',
'quarter' => '12201',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kassow',
'title_category' => 'innkeeper',
'region' => '173',
'place' => '692',
'quarter' => '12202',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Buda',
'title_category' => 'innkeeper',
'region' => '174',
'place' => '693',
'quarter' => '12203',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Buda',
'title_category' => 'innkeeper',
'region' => '174',
'place' => '693',
'quarter' => '12204',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Buda',
'title_category' => 'innkeeper',
'region' => '174',
'place' => '693',
'quarter' => '12205',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Buda',
'title_category' => 'innkeeper',
'region' => '174',
'place' => '693',
'quarter' => '12206',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kecskemet',
'title_category' => 'innkeeper',
'region' => '174',
'place' => '694',
'quarter' => '12207',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kecskemet',
'title_category' => 'innkeeper',
'region' => '174',
'place' => '694',
'quarter' => '12208',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kecskemet',
'title_category' => 'innkeeper',
'region' => '174',
'place' => '694',
'quarter' => '12209',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kecskemet',
'title_category' => 'innkeeper',
'region' => '174',
'place' => '694',
'quarter' => '12210',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Debrecen',
'title_category' => 'innkeeper',
'region' => '174',
'place' => '695',
'quarter' => '12211',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Debrecen',
'title_category' => 'innkeeper',
'region' => '174',
'place' => '695',
'quarter' => '12212',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Debrecen',
'title_category' => 'innkeeper',
'region' => '174',
'place' => '695',
'quarter' => '12213',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Debrecen',
'title_category' => 'innkeeper',
'region' => '174',
'place' => '695',
'quarter' => '12214',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zounok',
'title_category' => 'innkeeper',
'region' => '174',
'place' => '696',
'quarter' => '12215',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zounok',
'title_category' => 'innkeeper',
'region' => '174',
'place' => '696',
'quarter' => '12216',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zounok',
'title_category' => 'innkeeper',
'region' => '174',
'place' => '696',
'quarter' => '12217',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zounok',
'title_category' => 'innkeeper',
'region' => '174',
'place' => '696',
'quarter' => '12218',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pecs',
'title_category' => 'innkeeper',
'region' => '175',
'place' => '697',
'quarter' => '12219',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pecs',
'title_category' => 'innkeeper',
'region' => '175',
'place' => '697',
'quarter' => '12220',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pecs',
'title_category' => 'innkeeper',
'region' => '175',
'place' => '697',
'quarter' => '12221',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pecs',
'title_category' => 'innkeeper',
'region' => '175',
'place' => '697',
'quarter' => '12222',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vukovar',
'title_category' => 'innkeeper',
'region' => '175',
'place' => '698',
'quarter' => '12223',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vukovar',
'title_category' => 'innkeeper',
'region' => '175',
'place' => '698',
'quarter' => '12224',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vukovar',
'title_category' => 'innkeeper',
'region' => '175',
'place' => '698',
'quarter' => '12225',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vukovar',
'title_category' => 'innkeeper',
'region' => '175',
'place' => '698',
'quarter' => '12226',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kalocsa',
'title_category' => 'innkeeper',
'region' => '175',
'place' => '699',
'quarter' => '12227',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kalocsa',
'title_category' => 'innkeeper',
'region' => '175',
'place' => '699',
'quarter' => '12228',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kalocsa',
'title_category' => 'innkeeper',
'region' => '175',
'place' => '699',
'quarter' => '12229',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kalocsa',
'title_category' => 'innkeeper',
'region' => '175',
'place' => '699',
'quarter' => '12230',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Virovitica',
'title_category' => 'innkeeper',
'region' => '175',
'place' => '700',
'quarter' => '12231',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Virovitica',
'title_category' => 'innkeeper',
'region' => '175',
'place' => '700',
'quarter' => '12232',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Virovitica',
'title_category' => 'innkeeper',
'region' => '175',
'place' => '700',
'quarter' => '12233',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Virovitica',
'title_category' => 'innkeeper',
'region' => '175',
'place' => '700',
'quarter' => '12234',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alba Julia',
'title_category' => 'innkeeper',
'region' => '176',
'place' => '701',
'quarter' => '12235',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alba Julia',
'title_category' => 'innkeeper',
'region' => '176',
'place' => '701',
'quarter' => '12236',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alba Julia',
'title_category' => 'innkeeper',
'region' => '176',
'place' => '701',
'quarter' => '12237',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alba Julia',
'title_category' => 'innkeeper',
'region' => '176',
'place' => '701',
'quarter' => '12238',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Schaasburg',
'title_category' => 'innkeeper',
'region' => '176',
'place' => '702',
'quarter' => '12239',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Schaasburg',
'title_category' => 'innkeeper',
'region' => '176',
'place' => '702',
'quarter' => '12240',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Schaasburg',
'title_category' => 'innkeeper',
'region' => '176',
'place' => '702',
'quarter' => '12241',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Schaasburg',
'title_category' => 'innkeeper',
'region' => '176',
'place' => '702',
'quarter' => '12242',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Klausenburg',
'title_category' => 'innkeeper',
'region' => '176',
'place' => '703',
'quarter' => '12243',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Klausenburg',
'title_category' => 'innkeeper',
'region' => '176',
'place' => '703',
'quarter' => '12244',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Klausenburg',
'title_category' => 'innkeeper',
'region' => '176',
'place' => '703',
'quarter' => '12245',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Klausenburg',
'title_category' => 'innkeeper',
'region' => '176',
'place' => '703',
'quarter' => '12246',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Carta',
'title_category' => 'innkeeper',
'region' => '176',
'place' => '704',
'quarter' => '12247',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Carta',
'title_category' => 'innkeeper',
'region' => '176',
'place' => '704',
'quarter' => '12248',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Carta',
'title_category' => 'innkeeper',
'region' => '176',
'place' => '704',
'quarter' => '12249',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Carta',
'title_category' => 'innkeeper',
'region' => '176',
'place' => '704',
'quarter' => '12250',
'religion' => '1',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Targu Jiu',
'title_category' => 'innkeeper',
'region' => '177',
'place' => '705',
'quarter' => '12251',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Targu Jiu',
'title_category' => 'innkeeper',
'region' => '177',
'place' => '705',
'quarter' => '12252',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Targu Jiu',
'title_category' => 'innkeeper',
'region' => '177',
'place' => '705',
'quarter' => '12253',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Targu Jiu',
'title_category' => 'innkeeper',
'region' => '177',
'place' => '705',
'quarter' => '12254',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Drobeta',
'title_category' => 'innkeeper',
'region' => '177',
'place' => '706',
'quarter' => '12255',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Drobeta',
'title_category' => 'innkeeper',
'region' => '177',
'place' => '706',
'quarter' => '12256',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Drobeta',
'title_category' => 'innkeeper',
'region' => '177',
'place' => '706',
'quarter' => '12257',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Drobeta',
'title_category' => 'innkeeper',
'region' => '177',
'place' => '706',
'quarter' => '12258',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Curtea Arges',
'title_category' => 'innkeeper',
'region' => '177',
'place' => '707',
'quarter' => '12259',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Curtea Arges',
'title_category' => 'innkeeper',
'region' => '177',
'place' => '707',
'quarter' => '12260',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Curtea Arges',
'title_category' => 'innkeeper',
'region' => '177',
'place' => '707',
'quarter' => '12261',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Curtea Arges',
'title_category' => 'innkeeper',
'region' => '177',
'place' => '707',
'quarter' => '12262',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tismana',
'title_category' => 'innkeeper',
'region' => '177',
'place' => '708',
'quarter' => '12263',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tismana',
'title_category' => 'innkeeper',
'region' => '177',
'place' => '708',
'quarter' => '12264',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tismana',
'title_category' => 'innkeeper',
'region' => '177',
'place' => '708',
'quarter' => '12265',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tismana',
'title_category' => 'innkeeper',
'region' => '177',
'place' => '708',
'quarter' => '12266',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Targoviste',
'title_category' => 'innkeeper',
'region' => '178',
'place' => '709',
'quarter' => '12267',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Targoviste',
'title_category' => 'innkeeper',
'region' => '178',
'place' => '709',
'quarter' => '12268',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Targoviste',
'title_category' => 'innkeeper',
'region' => '178',
'place' => '709',
'quarter' => '12269',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Targoviste',
'title_category' => 'innkeeper',
'region' => '178',
'place' => '709',
'quarter' => '12270',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bucharest',
'title_category' => 'innkeeper',
'region' => '178',
'place' => '710',
'quarter' => '12271',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bucharest',
'title_category' => 'innkeeper',
'region' => '178',
'place' => '710',
'quarter' => '12272',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bucharest',
'title_category' => 'innkeeper',
'region' => '178',
'place' => '710',
'quarter' => '12273',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bucharest',
'title_category' => 'innkeeper',
'region' => '178',
'place' => '710',
'quarter' => '12274',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Torzburg',
'title_category' => 'innkeeper',
'region' => '178',
'place' => '711',
'quarter' => '12275',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Torzburg',
'title_category' => 'innkeeper',
'region' => '178',
'place' => '711',
'quarter' => '12276',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Torzburg',
'title_category' => 'innkeeper',
'region' => '178',
'place' => '711',
'quarter' => '12277',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Torzburg',
'title_category' => 'innkeeper',
'region' => '178',
'place' => '711',
'quarter' => '12278',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kronstadt',
'title_category' => 'innkeeper',
'region' => '178',
'place' => '712',
'quarter' => '12279',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kronstadt',
'title_category' => 'innkeeper',
'region' => '178',
'place' => '712',
'quarter' => '12280',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kronstadt',
'title_category' => 'innkeeper',
'region' => '178',
'place' => '712',
'quarter' => '12281',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kronstadt',
'title_category' => 'innkeeper',
'region' => '178',
'place' => '712',
'quarter' => '12282',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Constanta',
'title_category' => 'innkeeper',
'region' => '179',
'place' => '713',
'quarter' => '12283',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Constanta',
'title_category' => 'innkeeper',
'region' => '179',
'place' => '713',
'quarter' => '12284',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Constanta',
'title_category' => 'innkeeper',
'region' => '179',
'place' => '713',
'quarter' => '12285',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Constanta',
'title_category' => 'innkeeper',
'region' => '179',
'place' => '713',
'quarter' => '12286',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Harsova',
'title_category' => 'innkeeper',
'region' => '179',
'place' => '714',
'quarter' => '12287',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Harsova',
'title_category' => 'innkeeper',
'region' => '179',
'place' => '714',
'quarter' => '12288',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Harsova',
'title_category' => 'innkeeper',
'region' => '179',
'place' => '714',
'quarter' => '12289',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Harsova',
'title_category' => 'innkeeper',
'region' => '179',
'place' => '714',
'quarter' => '12290',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tulcea',
'title_category' => 'innkeeper',
'region' => '179',
'place' => '715',
'quarter' => '12291',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tulcea',
'title_category' => 'innkeeper',
'region' => '179',
'place' => '715',
'quarter' => '12292',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tulcea',
'title_category' => 'innkeeper',
'region' => '179',
'place' => '715',
'quarter' => '12293',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tulcea',
'title_category' => 'innkeeper',
'region' => '179',
'place' => '715',
'quarter' => '12294',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Calarasi',
'title_category' => 'innkeeper',
'region' => '179',
'place' => '716',
'quarter' => '12295',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Calarasi',
'title_category' => 'innkeeper',
'region' => '179',
'place' => '716',
'quarter' => '12296',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Calarasi',
'title_category' => 'innkeeper',
'region' => '179',
'place' => '716',
'quarter' => '12297',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Calarasi',
'title_category' => 'innkeeper',
'region' => '179',
'place' => '716',
'quarter' => '12298',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Suceava',
'title_category' => 'innkeeper',
'region' => '180',
'place' => '717',
'quarter' => '12299',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Suceava',
'title_category' => 'innkeeper',
'region' => '180',
'place' => '717',
'quarter' => '12300',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Suceava',
'title_category' => 'innkeeper',
'region' => '180',
'place' => '717',
'quarter' => '12301',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Suceava',
'title_category' => 'innkeeper',
'region' => '180',
'place' => '717',
'quarter' => '12302',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Orhei',
'title_category' => 'innkeeper',
'region' => '180',
'place' => '718',
'quarter' => '12303',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Orhei',
'title_category' => 'innkeeper',
'region' => '180',
'place' => '718',
'quarter' => '12304',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Orhei',
'title_category' => 'innkeeper',
'region' => '180',
'place' => '718',
'quarter' => '12305',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Orhei',
'title_category' => 'innkeeper',
'region' => '180',
'place' => '718',
'quarter' => '12306',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Odessa',
'title_category' => 'innkeeper',
'region' => '180',
'place' => '719',
'quarter' => '12307',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Odessa',
'title_category' => 'innkeeper',
'region' => '180',
'place' => '719',
'quarter' => '12308',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Odessa',
'title_category' => 'innkeeper',
'region' => '180',
'place' => '719',
'quarter' => '12309',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Odessa',
'title_category' => 'innkeeper',
'region' => '180',
'place' => '719',
'quarter' => '12310',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chisinau',
'title_category' => 'innkeeper',
'region' => '180',
'place' => '720',
'quarter' => '12311',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chisinau',
'title_category' => 'innkeeper',
'region' => '180',
'place' => '720',
'quarter' => '12312',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chisinau',
'title_category' => 'innkeeper',
'region' => '180',
'place' => '720',
'quarter' => '12313',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chisinau',
'title_category' => 'innkeeper',
'region' => '180',
'place' => '720',
'quarter' => '12314',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sofia',
'title_category' => 'innkeeper',
'region' => '181',
'place' => '721',
'quarter' => '12315',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sofia',
'title_category' => 'innkeeper',
'region' => '181',
'place' => '721',
'quarter' => '12316',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sofia',
'title_category' => 'innkeeper',
'region' => '181',
'place' => '721',
'quarter' => '12317',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sofia',
'title_category' => 'innkeeper',
'region' => '181',
'place' => '721',
'quarter' => '12318',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pleven',
'title_category' => 'innkeeper',
'region' => '181',
'place' => '722',
'quarter' => '12319',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pleven',
'title_category' => 'innkeeper',
'region' => '181',
'place' => '722',
'quarter' => '12320',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pleven',
'title_category' => 'innkeeper',
'region' => '181',
'place' => '722',
'quarter' => '12321',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pleven',
'title_category' => 'innkeeper',
'region' => '181',
'place' => '722',
'quarter' => '12322',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Stip',
'title_category' => 'innkeeper',
'region' => '181',
'place' => '723',
'quarter' => '12323',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Stip',
'title_category' => 'innkeeper',
'region' => '181',
'place' => '723',
'quarter' => '12324',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Stip',
'title_category' => 'innkeeper',
'region' => '181',
'place' => '723',
'quarter' => '12325',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Stip',
'title_category' => 'innkeeper',
'region' => '181',
'place' => '723',
'quarter' => '12326',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rila',
'title_category' => 'innkeeper',
'region' => '181',
'place' => '724',
'quarter' => '12327',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rila',
'title_category' => 'innkeeper',
'region' => '181',
'place' => '724',
'quarter' => '12328',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rila',
'title_category' => 'innkeeper',
'region' => '181',
'place' => '724',
'quarter' => '12329',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rila',
'title_category' => 'innkeeper',
'region' => '181',
'place' => '724',
'quarter' => '12330',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Varna',
'title_category' => 'innkeeper',
'region' => '182',
'place' => '725',
'quarter' => '12331',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Varna',
'title_category' => 'innkeeper',
'region' => '182',
'place' => '725',
'quarter' => '12332',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Varna',
'title_category' => 'innkeeper',
'region' => '182',
'place' => '725',
'quarter' => '12333',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Varna',
'title_category' => 'innkeeper',
'region' => '182',
'place' => '725',
'quarter' => '12334',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pliska',
'title_category' => 'innkeeper',
'region' => '182',
'place' => '726',
'quarter' => '12335',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pliska',
'title_category' => 'innkeeper',
'region' => '182',
'place' => '726',
'quarter' => '12336',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pliska',
'title_category' => 'innkeeper',
'region' => '182',
'place' => '726',
'quarter' => '12337',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pliska',
'title_category' => 'innkeeper',
'region' => '182',
'place' => '726',
'quarter' => '12338',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Preslav',
'title_category' => 'innkeeper',
'region' => '182',
'place' => '727',
'quarter' => '12339',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Preslav',
'title_category' => 'innkeeper',
'region' => '182',
'place' => '727',
'quarter' => '12340',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Preslav',
'title_category' => 'innkeeper',
'region' => '182',
'place' => '727',
'quarter' => '12341',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Preslav',
'title_category' => 'innkeeper',
'region' => '182',
'place' => '727',
'quarter' => '12342',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tarnovo',
'title_category' => 'innkeeper',
'region' => '182',
'place' => '728',
'quarter' => '12343',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tarnovo',
'title_category' => 'innkeeper',
'region' => '182',
'place' => '728',
'quarter' => '12344',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tarnovo',
'title_category' => 'innkeeper',
'region' => '182',
'place' => '728',
'quarter' => '12345',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tarnovo',
'title_category' => 'innkeeper',
'region' => '182',
'place' => '728',
'quarter' => '12346',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gorazde',
'title_category' => 'innkeeper',
'region' => '183',
'place' => '729',
'quarter' => '12347',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gorazde',
'title_category' => 'innkeeper',
'region' => '183',
'place' => '729',
'quarter' => '12348',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gorazde',
'title_category' => 'innkeeper',
'region' => '183',
'place' => '729',
'quarter' => '12349',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gorazde',
'title_category' => 'innkeeper',
'region' => '183',
'place' => '729',
'quarter' => '12350',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zenica',
'title_category' => 'innkeeper',
'region' => '183',
'place' => '730',
'quarter' => '12351',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zenica',
'title_category' => 'innkeeper',
'region' => '183',
'place' => '730',
'quarter' => '12352',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zenica',
'title_category' => 'innkeeper',
'region' => '183',
'place' => '730',
'quarter' => '12353',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zenica',
'title_category' => 'innkeeper',
'region' => '183',
'place' => '730',
'quarter' => '12354',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sebrenik',
'title_category' => 'innkeeper',
'region' => '183',
'place' => '731',
'quarter' => '12355',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sebrenik',
'title_category' => 'innkeeper',
'region' => '183',
'place' => '731',
'quarter' => '12356',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sebrenik',
'title_category' => 'innkeeper',
'region' => '183',
'place' => '731',
'quarter' => '12357',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sebrenik',
'title_category' => 'innkeeper',
'region' => '183',
'place' => '731',
'quarter' => '12358',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Visegrad',
'title_category' => 'innkeeper',
'region' => '183',
'place' => '732',
'quarter' => '12359',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Visegrad',
'title_category' => 'innkeeper',
'region' => '183',
'place' => '732',
'quarter' => '12360',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Visegrad',
'title_category' => 'innkeeper',
'region' => '183',
'place' => '732',
'quarter' => '12361',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Visegrad',
'title_category' => 'innkeeper',
'region' => '183',
'place' => '732',
'quarter' => '12362',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Belgrade',
'title_category' => 'innkeeper',
'region' => '184',
'place' => '733',
'quarter' => '12363',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Belgrade',
'title_category' => 'innkeeper',
'region' => '184',
'place' => '733',
'quarter' => '12364',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Belgrade',
'title_category' => 'innkeeper',
'region' => '184',
'place' => '733',
'quarter' => '12365',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Belgrade',
'title_category' => 'innkeeper',
'region' => '184',
'place' => '733',
'quarter' => '12366',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rasa',
'title_category' => 'innkeeper',
'region' => '184',
'place' => '734',
'quarter' => '12367',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rasa',
'title_category' => 'innkeeper',
'region' => '184',
'place' => '734',
'quarter' => '12368',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rasa',
'title_category' => 'innkeeper',
'region' => '184',
'place' => '734',
'quarter' => '12369',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rasa',
'title_category' => 'innkeeper',
'region' => '184',
'place' => '734',
'quarter' => '12370',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Valjevo',
'title_category' => 'innkeeper',
'region' => '184',
'place' => '735',
'quarter' => '12371',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Valjevo',
'title_category' => 'innkeeper',
'region' => '184',
'place' => '735',
'quarter' => '12372',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Valjevo',
'title_category' => 'innkeeper',
'region' => '184',
'place' => '735',
'quarter' => '12373',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Valjevo',
'title_category' => 'innkeeper',
'region' => '184',
'place' => '735',
'quarter' => '12374',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bukovo',
'title_category' => 'innkeeper',
'region' => '184',
'place' => '736',
'quarter' => '12375',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bukovo',
'title_category' => 'innkeeper',
'region' => '184',
'place' => '736',
'quarter' => '12376',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bukovo',
'title_category' => 'innkeeper',
'region' => '184',
'place' => '736',
'quarter' => '12377',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bukovo',
'title_category' => 'innkeeper',
'region' => '184',
'place' => '736',
'quarter' => '12378',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rashka',
'title_category' => 'innkeeper',
'region' => '185',
'place' => '737',
'quarter' => '12379',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rashka',
'title_category' => 'innkeeper',
'region' => '185',
'place' => '737',
'quarter' => '12380',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rashka',
'title_category' => 'innkeeper',
'region' => '185',
'place' => '737',
'quarter' => '12381',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rashka',
'title_category' => 'innkeeper',
'region' => '185',
'place' => '737',
'quarter' => '12382',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bukovo',
'title_category' => 'innkeeper',
'region' => '185',
'place' => '738',
'quarter' => '12383',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bukovo',
'title_category' => 'innkeeper',
'region' => '185',
'place' => '738',
'quarter' => '12384',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bukovo',
'title_category' => 'innkeeper',
'region' => '185',
'place' => '738',
'quarter' => '12385',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bukovo',
'title_category' => 'innkeeper',
'region' => '185',
'place' => '738',
'quarter' => '12386',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Krusevac',
'title_category' => 'innkeeper',
'region' => '185',
'place' => '739',
'quarter' => '12387',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Krusevac',
'title_category' => 'innkeeper',
'region' => '185',
'place' => '739',
'quarter' => '12388',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Krusevac',
'title_category' => 'innkeeper',
'region' => '185',
'place' => '739',
'quarter' => '12389',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Krusevac',
'title_category' => 'innkeeper',
'region' => '185',
'place' => '739',
'quarter' => '12390',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zica',
'title_category' => 'innkeeper',
'region' => '185',
'place' => '740',
'quarter' => '12391',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zica',
'title_category' => 'innkeeper',
'region' => '185',
'place' => '740',
'quarter' => '12392',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zica',
'title_category' => 'innkeeper',
'region' => '185',
'place' => '740',
'quarter' => '12393',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zica',
'title_category' => 'innkeeper',
'region' => '185',
'place' => '740',
'quarter' => '12394',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Prizren',
'title_category' => 'innkeeper',
'region' => '186',
'place' => '741',
'quarter' => '12395',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Prizren',
'title_category' => 'innkeeper',
'region' => '186',
'place' => '741',
'quarter' => '12396',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Prizren',
'title_category' => 'innkeeper',
'region' => '186',
'place' => '741',
'quarter' => '12397',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Prizren',
'title_category' => 'innkeeper',
'region' => '186',
'place' => '741',
'quarter' => '12398',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kumanovo',
'title_category' => 'innkeeper',
'region' => '186',
'place' => '742',
'quarter' => '12399',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kumanovo',
'title_category' => 'innkeeper',
'region' => '186',
'place' => '742',
'quarter' => '12400',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kumanovo',
'title_category' => 'innkeeper',
'region' => '186',
'place' => '742',
'quarter' => '12401',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kumanovo',
'title_category' => 'innkeeper',
'region' => '186',
'place' => '742',
'quarter' => '12402',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Skopje',
'title_category' => 'innkeeper',
'region' => '186',
'place' => '743',
'quarter' => '12403',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Skopje',
'title_category' => 'innkeeper',
'region' => '186',
'place' => '743',
'quarter' => '12404',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Skopje',
'title_category' => 'innkeeper',
'region' => '186',
'place' => '743',
'quarter' => '12405',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Skopje',
'title_category' => 'innkeeper',
'region' => '186',
'place' => '743',
'quarter' => '12406',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vitina',
'title_category' => 'innkeeper',
'region' => '186',
'place' => '744',
'quarter' => '12407',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vitina',
'title_category' => 'innkeeper',
'region' => '186',
'place' => '744',
'quarter' => '12408',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vitina',
'title_category' => 'innkeeper',
'region' => '186',
'place' => '744',
'quarter' => '12409',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vitina',
'title_category' => 'innkeeper',
'region' => '186',
'place' => '744',
'quarter' => '12410',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pristina',
'title_category' => 'innkeeper',
'region' => '187',
'place' => '745',
'quarter' => '12411',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pristina',
'title_category' => 'innkeeper',
'region' => '187',
'place' => '745',
'quarter' => '12412',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pristina',
'title_category' => 'innkeeper',
'region' => '187',
'place' => '745',
'quarter' => '12413',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pristina',
'title_category' => 'innkeeper',
'region' => '187',
'place' => '745',
'quarter' => '12414',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zvecan',
'title_category' => 'innkeeper',
'region' => '187',
'place' => '746',
'quarter' => '12415',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zvecan',
'title_category' => 'innkeeper',
'region' => '187',
'place' => '746',
'quarter' => '12416',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zvecan',
'title_category' => 'innkeeper',
'region' => '187',
'place' => '746',
'quarter' => '12417',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zvecan',
'title_category' => 'innkeeper',
'region' => '187',
'place' => '746',
'quarter' => '12418',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pec',
'title_category' => 'innkeeper',
'region' => '187',
'place' => '747',
'quarter' => '12419',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pec',
'title_category' => 'innkeeper',
'region' => '187',
'place' => '747',
'quarter' => '12420',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pec',
'title_category' => 'innkeeper',
'region' => '187',
'place' => '747',
'quarter' => '12421',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pec',
'title_category' => 'innkeeper',
'region' => '187',
'place' => '747',
'quarter' => '12422',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Berane',
'title_category' => 'innkeeper',
'region' => '187',
'place' => '748',
'quarter' => '12423',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Berane',
'title_category' => 'innkeeper',
'region' => '187',
'place' => '748',
'quarter' => '12424',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Berane',
'title_category' => 'innkeeper',
'region' => '187',
'place' => '748',
'quarter' => '12425',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Berane',
'title_category' => 'innkeeper',
'region' => '187',
'place' => '748',
'quarter' => '12426',
'religion' => '2',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Monastyrski',
'title_category' => 'innkeeper',
'region' => '188',
'place' => '749',
'quarter' => '12427',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Monastyrski',
'title_category' => 'innkeeper',
'region' => '188',
'place' => '749',
'quarter' => '12428',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Monastyrski',
'title_category' => 'innkeeper',
'region' => '188',
'place' => '749',
'quarter' => '12429',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Monastyrski',
'title_category' => 'innkeeper',
'region' => '188',
'place' => '749',
'quarter' => '12430',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Samkarsh',
'title_category' => 'innkeeper',
'region' => '188',
'place' => '750',
'quarter' => '12431',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Samkarsh',
'title_category' => 'innkeeper',
'region' => '188',
'place' => '750',
'quarter' => '12432',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Samkarsh',
'title_category' => 'innkeeper',
'region' => '188',
'place' => '750',
'quarter' => '12433',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Samkarsh',
'title_category' => 'innkeeper',
'region' => '188',
'place' => '750',
'quarter' => '12434',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Poltava',
'title_category' => 'innkeeper',
'region' => '188',
'place' => '751',
'quarter' => '12435',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Poltava',
'title_category' => 'innkeeper',
'region' => '188',
'place' => '751',
'quarter' => '12436',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Poltava',
'title_category' => 'innkeeper',
'region' => '188',
'place' => '751',
'quarter' => '12437',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Poltava',
'title_category' => 'innkeeper',
'region' => '188',
'place' => '751',
'quarter' => '12438',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Oleshia',
'title_category' => 'innkeeper',
'region' => '188',
'place' => '752',
'quarter' => '12439',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Oleshia',
'title_category' => 'innkeeper',
'region' => '188',
'place' => '752',
'quarter' => '12440',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Oleshia',
'title_category' => 'innkeeper',
'region' => '188',
'place' => '752',
'quarter' => '12441',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Oleshia',
'title_category' => 'innkeeper',
'region' => '188',
'place' => '752',
'quarter' => '12442',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pereyaslav',
'title_category' => 'innkeeper',
'region' => '189',
'place' => '753',
'quarter' => '12443',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pereyaslav',
'title_category' => 'innkeeper',
'region' => '189',
'place' => '753',
'quarter' => '12444',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pereyaslav',
'title_category' => 'innkeeper',
'region' => '189',
'place' => '753',
'quarter' => '12445',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pereyaslav',
'title_category' => 'innkeeper',
'region' => '189',
'place' => '753',
'quarter' => '12446',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Korsun',
'title_category' => 'innkeeper',
'region' => '189',
'place' => '754',
'quarter' => '12447',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Korsun',
'title_category' => 'innkeeper',
'region' => '189',
'place' => '754',
'quarter' => '12448',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Korsun',
'title_category' => 'innkeeper',
'region' => '189',
'place' => '754',
'quarter' => '12449',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Korsun',
'title_category' => 'innkeeper',
'region' => '189',
'place' => '754',
'quarter' => '12450',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kaniv',
'title_category' => 'innkeeper',
'region' => '189',
'place' => '755',
'quarter' => '12451',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kaniv',
'title_category' => 'innkeeper',
'region' => '189',
'place' => '755',
'quarter' => '12452',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kaniv',
'title_category' => 'innkeeper',
'region' => '189',
'place' => '755',
'quarter' => '12453',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kaniv',
'title_category' => 'innkeeper',
'region' => '189',
'place' => '755',
'quarter' => '12454',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cherkasy',
'title_category' => 'innkeeper',
'region' => '189',
'place' => '756',
'quarter' => '12455',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cherkasy',
'title_category' => 'innkeeper',
'region' => '189',
'place' => '756',
'quarter' => '12456',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cherkasy',
'title_category' => 'innkeeper',
'region' => '189',
'place' => '756',
'quarter' => '12457',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cherkasy',
'title_category' => 'innkeeper',
'region' => '189',
'place' => '756',
'quarter' => '12458',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kiev',
'title_category' => 'innkeeper',
'region' => '190',
'place' => '757',
'quarter' => '12459',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kiev',
'title_category' => 'innkeeper',
'region' => '190',
'place' => '757',
'quarter' => '12460',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kiev',
'title_category' => 'innkeeper',
'region' => '190',
'place' => '757',
'quarter' => '12461',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kiev',
'title_category' => 'innkeeper',
'region' => '190',
'place' => '757',
'quarter' => '12462',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Borispyl',
'title_category' => 'innkeeper',
'region' => '190',
'place' => '758',
'quarter' => '12463',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Borispyl',
'title_category' => 'innkeeper',
'region' => '190',
'place' => '758',
'quarter' => '12464',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Borispyl',
'title_category' => 'innkeeper',
'region' => '190',
'place' => '758',
'quarter' => '12465',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Borispyl',
'title_category' => 'innkeeper',
'region' => '190',
'place' => '758',
'quarter' => '12466',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Yuriev',
'title_category' => 'innkeeper',
'region' => '190',
'place' => '759',
'quarter' => '12467',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Yuriev',
'title_category' => 'innkeeper',
'region' => '190',
'place' => '759',
'quarter' => '12468',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Yuriev',
'title_category' => 'innkeeper',
'region' => '190',
'place' => '759',
'quarter' => '12469',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Yuriev',
'title_category' => 'innkeeper',
'region' => '190',
'place' => '759',
'quarter' => '12470',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pechersk',
'title_category' => 'innkeeper',
'region' => '190',
'place' => '760',
'quarter' => '12471',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pechersk',
'title_category' => 'innkeeper',
'region' => '190',
'place' => '760',
'quarter' => '12472',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pechersk',
'title_category' => 'innkeeper',
'region' => '190',
'place' => '760',
'quarter' => '12473',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pechersk',
'title_category' => 'innkeeper',
'region' => '190',
'place' => '760',
'quarter' => '12474',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Halych',
'title_category' => 'innkeeper',
'region' => '191',
'place' => '761',
'quarter' => '12475',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Halych',
'title_category' => 'innkeeper',
'region' => '191',
'place' => '761',
'quarter' => '12476',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Halych',
'title_category' => 'innkeeper',
'region' => '191',
'place' => '761',
'quarter' => '12477',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Halych',
'title_category' => 'innkeeper',
'region' => '191',
'place' => '761',
'quarter' => '12478',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kolomyia',
'title_category' => 'innkeeper',
'region' => '191',
'place' => '762',
'quarter' => '12479',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kolomyia',
'title_category' => 'innkeeper',
'region' => '191',
'place' => '762',
'quarter' => '12480',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kolomyia',
'title_category' => 'innkeeper',
'region' => '191',
'place' => '762',
'quarter' => '12481',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kolomyia',
'title_category' => 'innkeeper',
'region' => '191',
'place' => '762',
'quarter' => '12482',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lviv',
'title_category' => 'innkeeper',
'region' => '191',
'place' => '763',
'quarter' => '12483',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lviv',
'title_category' => 'innkeeper',
'region' => '191',
'place' => '763',
'quarter' => '12484',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lviv',
'title_category' => 'innkeeper',
'region' => '191',
'place' => '763',
'quarter' => '12485',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lviv',
'title_category' => 'innkeeper',
'region' => '191',
'place' => '763',
'quarter' => '12486',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Terebovlia',
'title_category' => 'innkeeper',
'region' => '191',
'place' => '764',
'quarter' => '12487',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Terebovlia',
'title_category' => 'innkeeper',
'region' => '191',
'place' => '764',
'quarter' => '12488',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Terebovlia',
'title_category' => 'innkeeper',
'region' => '191',
'place' => '764',
'quarter' => '12489',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Terebovlia',
'title_category' => 'innkeeper',
'region' => '191',
'place' => '764',
'quarter' => '12490',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Turov',
'title_category' => 'innkeeper',
'region' => '192',
'place' => '765',
'quarter' => '12491',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Turov',
'title_category' => 'innkeeper',
'region' => '192',
'place' => '765',
'quarter' => '12492',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Turov',
'title_category' => 'innkeeper',
'region' => '192',
'place' => '765',
'quarter' => '12493',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Turov',
'title_category' => 'innkeeper',
'region' => '192',
'place' => '765',
'quarter' => '12494',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pinesk',
'title_category' => 'innkeeper',
'region' => '192',
'place' => '766',
'quarter' => '12495',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pinesk',
'title_category' => 'innkeeper',
'region' => '192',
'place' => '766',
'quarter' => '12496',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pinesk',
'title_category' => 'innkeeper',
'region' => '192',
'place' => '766',
'quarter' => '12497',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pinesk',
'title_category' => 'innkeeper',
'region' => '192',
'place' => '766',
'quarter' => '12498',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Slutsk',
'title_category' => 'innkeeper',
'region' => '192',
'place' => '767',
'quarter' => '12499',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Slutsk',
'title_category' => 'innkeeper',
'region' => '192',
'place' => '767',
'quarter' => '12500',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Slutsk',
'title_category' => 'innkeeper',
'region' => '192',
'place' => '767',
'quarter' => '12501',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Slutsk',
'title_category' => 'innkeeper',
'region' => '192',
'place' => '767',
'quarter' => '12502',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Korosten',
'title_category' => 'innkeeper',
'region' => '192',
'place' => '768',
'quarter' => '12503',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Korosten',
'title_category' => 'innkeeper',
'region' => '192',
'place' => '768',
'quarter' => '12504',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Korosten',
'title_category' => 'innkeeper',
'region' => '192',
'place' => '768',
'quarter' => '12505',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Korosten',
'title_category' => 'innkeeper',
'region' => '192',
'place' => '768',
'quarter' => '12506',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tchernigov',
'title_category' => 'innkeeper',
'region' => '193',
'place' => '769',
'quarter' => '12507',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tchernigov',
'title_category' => 'innkeeper',
'region' => '193',
'place' => '769',
'quarter' => '12508',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tchernigov',
'title_category' => 'innkeeper',
'region' => '193',
'place' => '769',
'quarter' => '12509',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tchernigov',
'title_category' => 'innkeeper',
'region' => '193',
'place' => '769',
'quarter' => '12510',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lyubech',
'title_category' => 'innkeeper',
'region' => '193',
'place' => '770',
'quarter' => '12511',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lyubech',
'title_category' => 'innkeeper',
'region' => '193',
'place' => '770',
'quarter' => '12512',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lyubech',
'title_category' => 'innkeeper',
'region' => '193',
'place' => '770',
'quarter' => '12513',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lyubech',
'title_category' => 'innkeeper',
'region' => '193',
'place' => '770',
'quarter' => '12514',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gomel',
'title_category' => 'innkeeper',
'region' => '193',
'place' => '771',
'quarter' => '12515',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gomel',
'title_category' => 'innkeeper',
'region' => '193',
'place' => '771',
'quarter' => '12516',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gomel',
'title_category' => 'innkeeper',
'region' => '193',
'place' => '771',
'quarter' => '12517',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gomel',
'title_category' => 'innkeeper',
'region' => '193',
'place' => '771',
'quarter' => '12518',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mazyr',
'title_category' => 'innkeeper',
'region' => '193',
'place' => '772',
'quarter' => '12519',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mazyr',
'title_category' => 'innkeeper',
'region' => '193',
'place' => '772',
'quarter' => '12520',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mazyr',
'title_category' => 'innkeeper',
'region' => '193',
'place' => '772',
'quarter' => '12521',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mazyr',
'title_category' => 'innkeeper',
'region' => '193',
'place' => '772',
'quarter' => '12522',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Polotsk',
'title_category' => 'innkeeper',
'region' => '194',
'place' => '773',
'quarter' => '12523',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Polotsk',
'title_category' => 'innkeeper',
'region' => '194',
'place' => '773',
'quarter' => '12524',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Polotsk',
'title_category' => 'innkeeper',
'region' => '194',
'place' => '773',
'quarter' => '12525',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Polotsk',
'title_category' => 'innkeeper',
'region' => '194',
'place' => '773',
'quarter' => '12526',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Orsha',
'title_category' => 'innkeeper',
'region' => '194',
'place' => '774',
'quarter' => '12527',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Orsha',
'title_category' => 'innkeeper',
'region' => '194',
'place' => '774',
'quarter' => '12528',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Orsha',
'title_category' => 'innkeeper',
'region' => '194',
'place' => '774',
'quarter' => '12529',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Orsha',
'title_category' => 'innkeeper',
'region' => '194',
'place' => '774',
'quarter' => '12530',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vitebsk',
'title_category' => 'innkeeper',
'region' => '194',
'place' => '775',
'quarter' => '12531',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vitebsk',
'title_category' => 'innkeeper',
'region' => '194',
'place' => '775',
'quarter' => '12532',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vitebsk',
'title_category' => 'innkeeper',
'region' => '194',
'place' => '775',
'quarter' => '12533',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vitebsk',
'title_category' => 'innkeeper',
'region' => '194',
'place' => '775',
'quarter' => '12534',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Barysaw',
'title_category' => 'innkeeper',
'region' => '194',
'place' => '776',
'quarter' => '12535',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Barysaw',
'title_category' => 'innkeeper',
'region' => '194',
'place' => '776',
'quarter' => '12536',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Barysaw',
'title_category' => 'innkeeper',
'region' => '194',
'place' => '776',
'quarter' => '12537',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Barysaw',
'title_category' => 'innkeeper',
'region' => '194',
'place' => '776',
'quarter' => '12538',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Smolensk',
'title_category' => 'innkeeper',
'region' => '195',
'place' => '777',
'quarter' => '12539',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Smolensk',
'title_category' => 'innkeeper',
'region' => '195',
'place' => '777',
'quarter' => '12540',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Smolensk',
'title_category' => 'innkeeper',
'region' => '195',
'place' => '777',
'quarter' => '12541',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Smolensk',
'title_category' => 'innkeeper',
'region' => '195',
'place' => '777',
'quarter' => '12542',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bryansk',
'title_category' => 'innkeeper',
'region' => '195',
'place' => '778',
'quarter' => '12543',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bryansk',
'title_category' => 'innkeeper',
'region' => '195',
'place' => '778',
'quarter' => '12544',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bryansk',
'title_category' => 'innkeeper',
'region' => '195',
'place' => '778',
'quarter' => '12545',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bryansk',
'title_category' => 'innkeeper',
'region' => '195',
'place' => '778',
'quarter' => '12546',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vyazma',
'title_category' => 'innkeeper',
'region' => '195',
'place' => '779',
'quarter' => '12547',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vyazma',
'title_category' => 'innkeeper',
'region' => '195',
'place' => '779',
'quarter' => '12548',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vyazma',
'title_category' => 'innkeeper',
'region' => '195',
'place' => '779',
'quarter' => '12549',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vyazma',
'title_category' => 'innkeeper',
'region' => '195',
'place' => '779',
'quarter' => '12550',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Roslav',
'title_category' => 'innkeeper',
'region' => '195',
'place' => '780',
'quarter' => '12551',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Roslav',
'title_category' => 'innkeeper',
'region' => '195',
'place' => '780',
'quarter' => '12552',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Roslav',
'title_category' => 'innkeeper',
'region' => '195',
'place' => '780',
'quarter' => '12553',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Roslav',
'title_category' => 'innkeeper',
'region' => '195',
'place' => '780',
'quarter' => '12554',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ryazan',
'title_category' => 'innkeeper',
'region' => '196',
'place' => '781',
'quarter' => '12555',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ryazan',
'title_category' => 'innkeeper',
'region' => '196',
'place' => '781',
'quarter' => '12556',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ryazan',
'title_category' => 'innkeeper',
'region' => '196',
'place' => '781',
'quarter' => '12557',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ryazan',
'title_category' => 'innkeeper',
'region' => '196',
'place' => '781',
'quarter' => '12558',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kolomna',
'title_category' => 'innkeeper',
'region' => '196',
'place' => '782',
'quarter' => '12559',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kolomna',
'title_category' => 'innkeeper',
'region' => '196',
'place' => '782',
'quarter' => '12560',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kolomna',
'title_category' => 'innkeeper',
'region' => '196',
'place' => '782',
'quarter' => '12561',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kolomna',
'title_category' => 'innkeeper',
'region' => '196',
'place' => '782',
'quarter' => '12562',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kasimov',
'title_category' => 'innkeeper',
'region' => '196',
'place' => '783',
'quarter' => '12563',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kasimov',
'title_category' => 'innkeeper',
'region' => '196',
'place' => '783',
'quarter' => '12564',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kasimov',
'title_category' => 'innkeeper',
'region' => '196',
'place' => '783',
'quarter' => '12565',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kasimov',
'title_category' => 'innkeeper',
'region' => '196',
'place' => '783',
'quarter' => '12566',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tula',
'title_category' => 'innkeeper',
'region' => '196',
'place' => '784',
'quarter' => '12567',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tula',
'title_category' => 'innkeeper',
'region' => '196',
'place' => '784',
'quarter' => '12568',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tula',
'title_category' => 'innkeeper',
'region' => '196',
'place' => '784',
'quarter' => '12569',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tula',
'title_category' => 'innkeeper',
'region' => '196',
'place' => '784',
'quarter' => '12570',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Moscow',
'title_category' => 'innkeeper',
'region' => '197',
'place' => '785',
'quarter' => '12571',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Moscow',
'title_category' => 'innkeeper',
'region' => '197',
'place' => '785',
'quarter' => '12572',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Moscow',
'title_category' => 'innkeeper',
'region' => '197',
'place' => '785',
'quarter' => '12573',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Moscow',
'title_category' => 'innkeeper',
'region' => '197',
'place' => '785',
'quarter' => '12574',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sergiev',
'title_category' => 'innkeeper',
'region' => '197',
'place' => '786',
'quarter' => '12575',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sergiev',
'title_category' => 'innkeeper',
'region' => '197',
'place' => '786',
'quarter' => '12576',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sergiev',
'title_category' => 'innkeeper',
'region' => '197',
'place' => '786',
'quarter' => '12577',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sergiev',
'title_category' => 'innkeeper',
'region' => '197',
'place' => '786',
'quarter' => '12578',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zvenigorod',
'title_category' => 'innkeeper',
'region' => '197',
'place' => '787',
'quarter' => '12579',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zvenigorod',
'title_category' => 'innkeeper',
'region' => '197',
'place' => '787',
'quarter' => '12580',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zvenigorod',
'title_category' => 'innkeeper',
'region' => '197',
'place' => '787',
'quarter' => '12581',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zvenigorod',
'title_category' => 'innkeeper',
'region' => '197',
'place' => '787',
'quarter' => '12582',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Simonov',
'title_category' => 'innkeeper',
'region' => '197',
'place' => '788',
'quarter' => '12583',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Simonov',
'title_category' => 'innkeeper',
'region' => '197',
'place' => '788',
'quarter' => '12584',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Simonov',
'title_category' => 'innkeeper',
'region' => '197',
'place' => '788',
'quarter' => '12585',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Simonov',
'title_category' => 'innkeeper',
'region' => '197',
'place' => '788',
'quarter' => '12586',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pleskov',
'title_category' => 'innkeeper',
'region' => '198',
'place' => '789',
'quarter' => '12587',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pleskov',
'title_category' => 'innkeeper',
'region' => '198',
'place' => '789',
'quarter' => '12588',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pleskov',
'title_category' => 'innkeeper',
'region' => '198',
'place' => '789',
'quarter' => '12589',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pleskov',
'title_category' => 'innkeeper',
'region' => '198',
'place' => '789',
'quarter' => '12590',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Porkhov',
'title_category' => 'innkeeper',
'region' => '198',
'place' => '790',
'quarter' => '12591',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Porkhov',
'title_category' => 'innkeeper',
'region' => '198',
'place' => '790',
'quarter' => '12592',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Porkhov',
'title_category' => 'innkeeper',
'region' => '198',
'place' => '790',
'quarter' => '12593',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Porkhov',
'title_category' => 'innkeeper',
'region' => '198',
'place' => '790',
'quarter' => '12594',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ostrov',
'title_category' => 'innkeeper',
'region' => '198',
'place' => '791',
'quarter' => '12595',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ostrov',
'title_category' => 'innkeeper',
'region' => '198',
'place' => '791',
'quarter' => '12596',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ostrov',
'title_category' => 'innkeeper',
'region' => '198',
'place' => '791',
'quarter' => '12597',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ostrov',
'title_category' => 'innkeeper',
'region' => '198',
'place' => '791',
'quarter' => '12598',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gdov',
'title_category' => 'innkeeper',
'region' => '198',
'place' => '792',
'quarter' => '12599',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gdov',
'title_category' => 'innkeeper',
'region' => '198',
'place' => '792',
'quarter' => '12600',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gdov',
'title_category' => 'innkeeper',
'region' => '198',
'place' => '792',
'quarter' => '12601',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gdov',
'title_category' => 'innkeeper',
'region' => '198',
'place' => '792',
'quarter' => '12602',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Novgorod',
'title_category' => 'innkeeper',
'region' => '199',
'place' => '793',
'quarter' => '12603',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Novgorod',
'title_category' => 'innkeeper',
'region' => '199',
'place' => '793',
'quarter' => '12604',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Novgorod',
'title_category' => 'innkeeper',
'region' => '199',
'place' => '793',
'quarter' => '12605',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Novgorod',
'title_category' => 'innkeeper',
'region' => '199',
'place' => '793',
'quarter' => '12606',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rusa',
'title_category' => 'innkeeper',
'region' => '199',
'place' => '794',
'quarter' => '12607',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rusa',
'title_category' => 'innkeeper',
'region' => '199',
'place' => '794',
'quarter' => '12608',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rusa',
'title_category' => 'innkeeper',
'region' => '199',
'place' => '794',
'quarter' => '12609',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rusa',
'title_category' => 'innkeeper',
'region' => '199',
'place' => '794',
'quarter' => '12610',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ladoga',
'title_category' => 'innkeeper',
'region' => '199',
'place' => '795',
'quarter' => '12611',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ladoga',
'title_category' => 'innkeeper',
'region' => '199',
'place' => '795',
'quarter' => '12612',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ladoga',
'title_category' => 'innkeeper',
'region' => '199',
'place' => '795',
'quarter' => '12613',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ladoga',
'title_category' => 'innkeeper',
'region' => '199',
'place' => '795',
'quarter' => '12614',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Schlisselburg',
'title_category' => 'innkeeper',
'region' => '199',
'place' => '796',
'quarter' => '12615',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Schlisselburg',
'title_category' => 'innkeeper',
'region' => '199',
'place' => '796',
'quarter' => '12616',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Schlisselburg',
'title_category' => 'innkeeper',
'region' => '199',
'place' => '796',
'quarter' => '12617',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Schlisselburg',
'title_category' => 'innkeeper',
'region' => '199',
'place' => '796',
'quarter' => '12618',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bolgar',
'title_category' => 'innkeeper',
'region' => '200',
'place' => '797',
'quarter' => '12619',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bolgar',
'title_category' => 'innkeeper',
'region' => '200',
'place' => '797',
'quarter' => '12620',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bolgar',
'title_category' => 'innkeeper',
'region' => '200',
'place' => '797',
'quarter' => '12621',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bolgar',
'title_category' => 'innkeeper',
'region' => '200',
'place' => '797',
'quarter' => '12622',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bilyar',
'title_category' => 'innkeeper',
'region' => '200',
'place' => '798',
'quarter' => '12623',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bilyar',
'title_category' => 'innkeeper',
'region' => '200',
'place' => '798',
'quarter' => '12624',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bilyar',
'title_category' => 'innkeeper',
'region' => '200',
'place' => '798',
'quarter' => '12625',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bilyar',
'title_category' => 'innkeeper',
'region' => '200',
'place' => '798',
'quarter' => '12626',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kazan',
'title_category' => 'innkeeper',
'region' => '200',
'place' => '799',
'quarter' => '12627',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kazan',
'title_category' => 'innkeeper',
'region' => '200',
'place' => '799',
'quarter' => '12628',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kazan',
'title_category' => 'innkeeper',
'region' => '200',
'place' => '799',
'quarter' => '12629',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kazan',
'title_category' => 'innkeeper',
'region' => '200',
'place' => '799',
'quarter' => '12630',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ufa',
'title_category' => 'innkeeper',
'region' => '200',
'place' => '800',
'quarter' => '12631',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ufa',
'title_category' => 'innkeeper',
'region' => '200',
'place' => '800',
'quarter' => '12632',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ufa',
'title_category' => 'innkeeper',
'region' => '200',
'place' => '800',
'quarter' => '12633',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ufa',
'title_category' => 'innkeeper',
'region' => '200',
'place' => '800',
'quarter' => '12634',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vladimir',
'title_category' => 'innkeeper',
'region' => '201',
'place' => '801',
'quarter' => '12635',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vladimir',
'title_category' => 'innkeeper',
'region' => '201',
'place' => '801',
'quarter' => '12636',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vladimir',
'title_category' => 'innkeeper',
'region' => '201',
'place' => '801',
'quarter' => '12637',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vladimir',
'title_category' => 'innkeeper',
'region' => '201',
'place' => '801',
'quarter' => '12638',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vyazniki',
'title_category' => 'innkeeper',
'region' => '201',
'place' => '802',
'quarter' => '12639',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vyazniki',
'title_category' => 'innkeeper',
'region' => '201',
'place' => '802',
'quarter' => '12640',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vyazniki',
'title_category' => 'innkeeper',
'region' => '201',
'place' => '802',
'quarter' => '12641',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vyazniki',
'title_category' => 'innkeeper',
'region' => '201',
'place' => '802',
'quarter' => '12642',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Suzdal',
'title_category' => 'innkeeper',
'region' => '201',
'place' => '803',
'quarter' => '12643',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Suzdal',
'title_category' => 'innkeeper',
'region' => '201',
'place' => '803',
'quarter' => '12644',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Suzdal',
'title_category' => 'innkeeper',
'region' => '201',
'place' => '803',
'quarter' => '12645',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Suzdal',
'title_category' => 'innkeeper',
'region' => '201',
'place' => '803',
'quarter' => '12646',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nizhny',
'title_category' => 'innkeeper',
'region' => '201',
'place' => '804',
'quarter' => '12647',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nizhny',
'title_category' => 'innkeeper',
'region' => '201',
'place' => '804',
'quarter' => '12648',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nizhny',
'title_category' => 'innkeeper',
'region' => '201',
'place' => '804',
'quarter' => '12649',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nizhny',
'title_category' => 'innkeeper',
'region' => '201',
'place' => '804',
'quarter' => '12650',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vologda',
'title_category' => 'innkeeper',
'region' => '202',
'place' => '805',
'quarter' => '12651',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vologda',
'title_category' => 'innkeeper',
'region' => '202',
'place' => '805',
'quarter' => '12652',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vologda',
'title_category' => 'innkeeper',
'region' => '202',
'place' => '805',
'quarter' => '12653',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Vologda',
'title_category' => 'innkeeper',
'region' => '202',
'place' => '805',
'quarter' => '12654',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rybinsk',
'title_category' => 'innkeeper',
'region' => '202',
'place' => '806',
'quarter' => '12655',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rybinsk',
'title_category' => 'innkeeper',
'region' => '202',
'place' => '806',
'quarter' => '12656',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rybinsk',
'title_category' => 'innkeeper',
'region' => '202',
'place' => '806',
'quarter' => '12657',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rybinsk',
'title_category' => 'innkeeper',
'region' => '202',
'place' => '806',
'quarter' => '12658',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cherepovets',
'title_category' => 'innkeeper',
'region' => '202',
'place' => '807',
'quarter' => '12659',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cherepovets',
'title_category' => 'innkeeper',
'region' => '202',
'place' => '807',
'quarter' => '12660',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cherepovets',
'title_category' => 'innkeeper',
'region' => '202',
'place' => '807',
'quarter' => '12661',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cherepovets',
'title_category' => 'innkeeper',
'region' => '202',
'place' => '807',
'quarter' => '12662',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kirillov',
'title_category' => 'innkeeper',
'region' => '202',
'place' => '808',
'quarter' => '12663',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kirillov',
'title_category' => 'innkeeper',
'region' => '202',
'place' => '808',
'quarter' => '12664',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kirillov',
'title_category' => 'innkeeper',
'region' => '202',
'place' => '808',
'quarter' => '12665',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kirillov',
'title_category' => 'innkeeper',
'region' => '202',
'place' => '808',
'quarter' => '12666',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Oryol',
'title_category' => 'innkeeper',
'region' => '203',
'place' => '809',
'quarter' => '12667',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Oryol',
'title_category' => 'innkeeper',
'region' => '203',
'place' => '809',
'quarter' => '12668',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Oryol',
'title_category' => 'innkeeper',
'region' => '203',
'place' => '809',
'quarter' => '12669',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Oryol',
'title_category' => 'innkeeper',
'region' => '203',
'place' => '809',
'quarter' => '12670',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Novosil',
'title_category' => 'innkeeper',
'region' => '203',
'place' => '810',
'quarter' => '12671',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Novosil',
'title_category' => 'innkeeper',
'region' => '203',
'place' => '810',
'quarter' => '12672',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Novosil',
'title_category' => 'innkeeper',
'region' => '203',
'place' => '810',
'quarter' => '12673',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Novosil',
'title_category' => 'innkeeper',
'region' => '203',
'place' => '810',
'quarter' => '12674',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kromy',
'title_category' => 'innkeeper',
'region' => '203',
'place' => '811',
'quarter' => '12675',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kromy',
'title_category' => 'innkeeper',
'region' => '203',
'place' => '811',
'quarter' => '12676',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kromy',
'title_category' => 'innkeeper',
'region' => '203',
'place' => '811',
'quarter' => '12677',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kromy',
'title_category' => 'innkeeper',
'region' => '203',
'place' => '811',
'quarter' => '12678',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lipetsk',
'title_category' => 'innkeeper',
'region' => '203',
'place' => '812',
'quarter' => '12679',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lipetsk',
'title_category' => 'innkeeper',
'region' => '203',
'place' => '812',
'quarter' => '12680',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lipetsk',
'title_category' => 'innkeeper',
'region' => '203',
'place' => '812',
'quarter' => '12681',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lipetsk',
'title_category' => 'innkeeper',
'region' => '203',
'place' => '812',
'quarter' => '12682',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sevsk',
'title_category' => 'innkeeper',
'region' => '204',
'place' => '813',
'quarter' => '12683',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sevsk',
'title_category' => 'innkeeper',
'region' => '204',
'place' => '813',
'quarter' => '12684',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sevsk',
'title_category' => 'innkeeper',
'region' => '204',
'place' => '813',
'quarter' => '12685',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sevsk',
'title_category' => 'innkeeper',
'region' => '204',
'place' => '813',
'quarter' => '12686',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rylsk',
'title_category' => 'innkeeper',
'region' => '204',
'place' => '814',
'quarter' => '12687',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rylsk',
'title_category' => 'innkeeper',
'region' => '204',
'place' => '814',
'quarter' => '12688',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rylsk',
'title_category' => 'innkeeper',
'region' => '204',
'place' => '814',
'quarter' => '12689',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rylsk',
'title_category' => 'innkeeper',
'region' => '204',
'place' => '814',
'quarter' => '12690',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kursk',
'title_category' => 'innkeeper',
'region' => '204',
'place' => '815',
'quarter' => '12691',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kursk',
'title_category' => 'innkeeper',
'region' => '204',
'place' => '815',
'quarter' => '12692',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kursk',
'title_category' => 'innkeeper',
'region' => '204',
'place' => '815',
'quarter' => '12693',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kursk',
'title_category' => 'innkeeper',
'region' => '204',
'place' => '815',
'quarter' => '12694',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Olgov',
'title_category' => 'innkeeper',
'region' => '204',
'place' => '816',
'quarter' => '12695',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Olgov',
'title_category' => 'innkeeper',
'region' => '204',
'place' => '816',
'quarter' => '12696',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Olgov',
'title_category' => 'innkeeper',
'region' => '204',
'place' => '816',
'quarter' => '12697',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Olgov',
'title_category' => 'innkeeper',
'region' => '204',
'place' => '816',
'quarter' => '12698',
'religion' => '3',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Atil',
'title_category' => 'innkeeper',
'region' => '205',
'place' => '817',
'quarter' => '12699',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Atil',
'title_category' => 'innkeeper',
'region' => '205',
'place' => '817',
'quarter' => '12700',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Atil',
'title_category' => 'innkeeper',
'region' => '205',
'place' => '817',
'quarter' => '12701',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Atil',
'title_category' => 'innkeeper',
'region' => '205',
'place' => '817',
'quarter' => '12702',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saraibatu',
'title_category' => 'innkeeper',
'region' => '205',
'place' => '818',
'quarter' => '12703',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saraibatu',
'title_category' => 'innkeeper',
'region' => '205',
'place' => '818',
'quarter' => '12704',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saraibatu',
'title_category' => 'innkeeper',
'region' => '205',
'place' => '818',
'quarter' => '12705',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saraibatu',
'title_category' => 'innkeeper',
'region' => '205',
'place' => '818',
'quarter' => '12706',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saraiberke',
'title_category' => 'innkeeper',
'region' => '205',
'place' => '819',
'quarter' => '12707',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saraiberke',
'title_category' => 'innkeeper',
'region' => '205',
'place' => '819',
'quarter' => '12708',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saraiberke',
'title_category' => 'innkeeper',
'region' => '205',
'place' => '819',
'quarter' => '12709',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saraiberke',
'title_category' => 'innkeeper',
'region' => '205',
'place' => '819',
'quarter' => '12710',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Khumar',
'title_category' => 'innkeeper',
'region' => '205',
'place' => '820',
'quarter' => '12711',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Khumar',
'title_category' => 'innkeeper',
'region' => '205',
'place' => '820',
'quarter' => '12712',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Khumar',
'title_category' => 'innkeeper',
'region' => '205',
'place' => '820',
'quarter' => '12713',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Khumar',
'title_category' => 'innkeeper',
'region' => '205',
'place' => '820',
'quarter' => '12714',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gurganj',
'title_category' => 'innkeeper',
'region' => '206',
'place' => '821',
'quarter' => '12715',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gurganj',
'title_category' => 'innkeeper',
'region' => '206',
'place' => '821',
'quarter' => '12716',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gurganj',
'title_category' => 'innkeeper',
'region' => '206',
'place' => '821',
'quarter' => '12717',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gurganj',
'title_category' => 'innkeeper',
'region' => '206',
'place' => '821',
'quarter' => '12718',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Khiva',
'title_category' => 'innkeeper',
'region' => '206',
'place' => '822',
'quarter' => '12719',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Khiva',
'title_category' => 'innkeeper',
'region' => '206',
'place' => '822',
'quarter' => '12720',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Khiva',
'title_category' => 'innkeeper',
'region' => '206',
'place' => '822',
'quarter' => '12721',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Khiva',
'title_category' => 'innkeeper',
'region' => '206',
'place' => '822',
'quarter' => '12722',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saraidzhuk',
'title_category' => 'innkeeper',
'region' => '206',
'place' => '823',
'quarter' => '12723',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saraidzhuk',
'title_category' => 'innkeeper',
'region' => '206',
'place' => '823',
'quarter' => '12724',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saraidzhuk',
'title_category' => 'innkeeper',
'region' => '206',
'place' => '823',
'quarter' => '12725',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saraidzhuk',
'title_category' => 'innkeeper',
'region' => '206',
'place' => '823',
'quarter' => '12726',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mishrian',
'title_category' => 'innkeeper',
'region' => '206',
'place' => '824',
'quarter' => '12727',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mishrian',
'title_category' => 'innkeeper',
'region' => '206',
'place' => '824',
'quarter' => '12728',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mishrian',
'title_category' => 'innkeeper',
'region' => '206',
'place' => '824',
'quarter' => '12729',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mishrian',
'title_category' => 'innkeeper',
'region' => '206',
'place' => '824',
'quarter' => '12730',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Constantinople',
'title_category' => 'innkeeper',
'region' => '207',
'place' => '825',
'quarter' => '12731',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Constantinople',
'title_category' => 'innkeeper',
'region' => '207',
'place' => '825',
'quarter' => '12732',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Constantinople',
'title_category' => 'innkeeper',
'region' => '207',
'place' => '825',
'quarter' => '12733',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Constantinople',
'title_category' => 'innkeeper',
'region' => '207',
'place' => '825',
'quarter' => '12734',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Redosto',
'title_category' => 'innkeeper',
'region' => '207',
'place' => '826',
'quarter' => '12735',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Redosto',
'title_category' => 'innkeeper',
'region' => '207',
'place' => '826',
'quarter' => '12736',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Redosto',
'title_category' => 'innkeeper',
'region' => '207',
'place' => '826',
'quarter' => '12737',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Redosto',
'title_category' => 'innkeeper',
'region' => '207',
'place' => '826',
'quarter' => '12738',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Edirne',
'title_category' => 'innkeeper',
'region' => '207',
'place' => '827',
'quarter' => '12739',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Edirne',
'title_category' => 'innkeeper',
'region' => '207',
'place' => '827',
'quarter' => '12740',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Edirne',
'title_category' => 'innkeeper',
'region' => '207',
'place' => '827',
'quarter' => '12741',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Edirne',
'title_category' => 'innkeeper',
'region' => '207',
'place' => '827',
'quarter' => '12742',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Corlu',
'title_category' => 'innkeeper',
'region' => '207',
'place' => '828',
'quarter' => '12743',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Corlu',
'title_category' => 'innkeeper',
'region' => '207',
'place' => '828',
'quarter' => '12744',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Corlu',
'title_category' => 'innkeeper',
'region' => '207',
'place' => '828',
'quarter' => '12745',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Corlu',
'title_category' => 'innkeeper',
'region' => '207',
'place' => '828',
'quarter' => '12746',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Thessaloniki',
'title_category' => 'innkeeper',
'region' => '208',
'place' => '829',
'quarter' => '12747',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Thessaloniki',
'title_category' => 'innkeeper',
'region' => '208',
'place' => '829',
'quarter' => '12748',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Thessaloniki',
'title_category' => 'innkeeper',
'region' => '208',
'place' => '829',
'quarter' => '12749',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Thessaloniki',
'title_category' => 'innkeeper',
'region' => '208',
'place' => '829',
'quarter' => '12750',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Stratonicea',
'title_category' => 'innkeeper',
'region' => '208',
'place' => '830',
'quarter' => '12751',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Stratonicea',
'title_category' => 'innkeeper',
'region' => '208',
'place' => '830',
'quarter' => '12752',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Stratonicea',
'title_category' => 'innkeeper',
'region' => '208',
'place' => '830',
'quarter' => '12753',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Stratonicea',
'title_category' => 'innkeeper',
'region' => '208',
'place' => '830',
'quarter' => '12754',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Melnik',
'title_category' => 'innkeeper',
'region' => '208',
'place' => '831',
'quarter' => '12755',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Melnik',
'title_category' => 'innkeeper',
'region' => '208',
'place' => '831',
'quarter' => '12756',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Melnik',
'title_category' => 'innkeeper',
'region' => '208',
'place' => '831',
'quarter' => '12757',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Melnik',
'title_category' => 'innkeeper',
'region' => '208',
'place' => '831',
'quarter' => '12758',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hilandar',
'title_category' => 'innkeeper',
'region' => '208',
'place' => '832',
'quarter' => '12759',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hilandar',
'title_category' => 'innkeeper',
'region' => '208',
'place' => '832',
'quarter' => '12760',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hilandar',
'title_category' => 'innkeeper',
'region' => '208',
'place' => '832',
'quarter' => '12761',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hilandar',
'title_category' => 'innkeeper',
'region' => '208',
'place' => '832',
'quarter' => '12762',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Athens',
'title_category' => 'innkeeper',
'region' => '209',
'place' => '833',
'quarter' => '12763',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Athens',
'title_category' => 'innkeeper',
'region' => '209',
'place' => '833',
'quarter' => '12764',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Athens',
'title_category' => 'innkeeper',
'region' => '209',
'place' => '833',
'quarter' => '12765',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Athens',
'title_category' => 'innkeeper',
'region' => '209',
'place' => '833',
'quarter' => '12766',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lamia',
'title_category' => 'innkeeper',
'region' => '209',
'place' => '834',
'quarter' => '12767',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lamia',
'title_category' => 'innkeeper',
'region' => '209',
'place' => '834',
'quarter' => '12768',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lamia',
'title_category' => 'innkeeper',
'region' => '209',
'place' => '834',
'quarter' => '12769',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lamia',
'title_category' => 'innkeeper',
'region' => '209',
'place' => '834',
'quarter' => '12770',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Thebes',
'title_category' => 'innkeeper',
'region' => '209',
'place' => '835',
'quarter' => '12771',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Thebes',
'title_category' => 'innkeeper',
'region' => '209',
'place' => '835',
'quarter' => '12772',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Thebes',
'title_category' => 'innkeeper',
'region' => '209',
'place' => '835',
'quarter' => '12773',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Thebes',
'title_category' => 'innkeeper',
'region' => '209',
'place' => '835',
'quarter' => '12774',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Larissa',
'title_category' => 'innkeeper',
'region' => '209',
'place' => '836',
'quarter' => '12775',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Larissa',
'title_category' => 'innkeeper',
'region' => '209',
'place' => '836',
'quarter' => '12776',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Larissa',
'title_category' => 'innkeeper',
'region' => '209',
'place' => '836',
'quarter' => '12777',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Larissa',
'title_category' => 'innkeeper',
'region' => '209',
'place' => '836',
'quarter' => '12778',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mystras',
'title_category' => 'innkeeper',
'region' => '210',
'place' => '837',
'quarter' => '12779',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mystras',
'title_category' => 'innkeeper',
'region' => '210',
'place' => '837',
'quarter' => '12780',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mystras',
'title_category' => 'innkeeper',
'region' => '210',
'place' => '837',
'quarter' => '12781',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mystras',
'title_category' => 'innkeeper',
'region' => '210',
'place' => '837',
'quarter' => '12782',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Modon',
'title_category' => 'innkeeper',
'region' => '210',
'place' => '838',
'quarter' => '12783',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Modon',
'title_category' => 'innkeeper',
'region' => '210',
'place' => '838',
'quarter' => '12784',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Modon',
'title_category' => 'innkeeper',
'region' => '210',
'place' => '838',
'quarter' => '12785',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Modon',
'title_category' => 'innkeeper',
'region' => '210',
'place' => '838',
'quarter' => '12786',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Corinth',
'title_category' => 'innkeeper',
'region' => '210',
'place' => '839',
'quarter' => '12787',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Corinth',
'title_category' => 'innkeeper',
'region' => '210',
'place' => '839',
'quarter' => '12788',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Corinth',
'title_category' => 'innkeeper',
'region' => '210',
'place' => '839',
'quarter' => '12789',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Corinth',
'title_category' => 'innkeeper',
'region' => '210',
'place' => '839',
'quarter' => '12790',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Glarentza',
'title_category' => 'innkeeper',
'region' => '210',
'place' => '840',
'quarter' => '12791',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Glarentza',
'title_category' => 'innkeeper',
'region' => '210',
'place' => '840',
'quarter' => '12792',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Glarentza',
'title_category' => 'innkeeper',
'region' => '210',
'place' => '840',
'quarter' => '12793',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Glarentza',
'title_category' => 'innkeeper',
'region' => '210',
'place' => '840',
'quarter' => '12794',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Arta',
'title_category' => 'innkeeper',
'region' => '211',
'place' => '841',
'quarter' => '12795',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Arta',
'title_category' => 'innkeeper',
'region' => '211',
'place' => '841',
'quarter' => '12796',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Arta',
'title_category' => 'innkeeper',
'region' => '211',
'place' => '841',
'quarter' => '12797',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Arta',
'title_category' => 'innkeeper',
'region' => '211',
'place' => '841',
'quarter' => '12798',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gardiki',
'title_category' => 'innkeeper',
'region' => '211',
'place' => '842',
'quarter' => '12799',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gardiki',
'title_category' => 'innkeeper',
'region' => '211',
'place' => '842',
'quarter' => '12800',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gardiki',
'title_category' => 'innkeeper',
'region' => '211',
'place' => '842',
'quarter' => '12801',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gardiki',
'title_category' => 'innkeeper',
'region' => '211',
'place' => '842',
'quarter' => '12802',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ioannina',
'title_category' => 'innkeeper',
'region' => '211',
'place' => '843',
'quarter' => '12803',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ioannina',
'title_category' => 'innkeeper',
'region' => '211',
'place' => '843',
'quarter' => '12804',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ioannina',
'title_category' => 'innkeeper',
'region' => '211',
'place' => '843',
'quarter' => '12805',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ioannina',
'title_category' => 'innkeeper',
'region' => '211',
'place' => '843',
'quarter' => '12806',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Amfissa',
'title_category' => 'innkeeper',
'region' => '211',
'place' => '844',
'quarter' => '12807',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Amfissa',
'title_category' => 'innkeeper',
'region' => '211',
'place' => '844',
'quarter' => '12808',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Amfissa',
'title_category' => 'innkeeper',
'region' => '211',
'place' => '844',
'quarter' => '12809',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Amfissa',
'title_category' => 'innkeeper',
'region' => '211',
'place' => '844',
'quarter' => '12810',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kruja',
'title_category' => 'innkeeper',
'region' => '212',
'place' => '845',
'quarter' => '12811',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kruja',
'title_category' => 'innkeeper',
'region' => '212',
'place' => '845',
'quarter' => '12812',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kruja',
'title_category' => 'innkeeper',
'region' => '212',
'place' => '845',
'quarter' => '12813',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kruja',
'title_category' => 'innkeeper',
'region' => '212',
'place' => '845',
'quarter' => '12814',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Durres',
'title_category' => 'innkeeper',
'region' => '212',
'place' => '846',
'quarter' => '12815',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Durres',
'title_category' => 'innkeeper',
'region' => '212',
'place' => '846',
'quarter' => '12816',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Durres',
'title_category' => 'innkeeper',
'region' => '212',
'place' => '846',
'quarter' => '12817',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Durres',
'title_category' => 'innkeeper',
'region' => '212',
'place' => '846',
'quarter' => '12818',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ohrid',
'title_category' => 'innkeeper',
'region' => '212',
'place' => '847',
'quarter' => '12819',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ohrid',
'title_category' => 'innkeeper',
'region' => '212',
'place' => '847',
'quarter' => '12820',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ohrid',
'title_category' => 'innkeeper',
'region' => '212',
'place' => '847',
'quarter' => '12821',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ohrid',
'title_category' => 'innkeeper',
'region' => '212',
'place' => '847',
'quarter' => '12822',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Jovan',
'title_category' => 'innkeeper',
'region' => '212',
'place' => '848',
'quarter' => '12823',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Jovan',
'title_category' => 'innkeeper',
'region' => '212',
'place' => '848',
'quarter' => '12824',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Jovan',
'title_category' => 'innkeeper',
'region' => '212',
'place' => '848',
'quarter' => '12825',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Jovan',
'title_category' => 'innkeeper',
'region' => '212',
'place' => '848',
'quarter' => '12826',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kastoria',
'title_category' => 'innkeeper',
'region' => '213',
'place' => '849',
'quarter' => '12827',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kastoria',
'title_category' => 'innkeeper',
'region' => '213',
'place' => '849',
'quarter' => '12828',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kastoria',
'title_category' => 'innkeeper',
'region' => '213',
'place' => '849',
'quarter' => '12829',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kastoria',
'title_category' => 'innkeeper',
'region' => '213',
'place' => '849',
'quarter' => '12830',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bitola',
'title_category' => 'innkeeper',
'region' => '213',
'place' => '850',
'quarter' => '12831',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bitola',
'title_category' => 'innkeeper',
'region' => '213',
'place' => '850',
'quarter' => '12832',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bitola',
'title_category' => 'innkeeper',
'region' => '213',
'place' => '850',
'quarter' => '12833',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bitola',
'title_category' => 'innkeeper',
'region' => '213',
'place' => '850',
'quarter' => '12834',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Prilep',
'title_category' => 'innkeeper',
'region' => '213',
'place' => '851',
'quarter' => '12835',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Prilep',
'title_category' => 'innkeeper',
'region' => '213',
'place' => '851',
'quarter' => '12836',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Prilep',
'title_category' => 'innkeeper',
'region' => '213',
'place' => '851',
'quarter' => '12837',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Prilep',
'title_category' => 'innkeeper',
'region' => '213',
'place' => '851',
'quarter' => '12838',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Berat',
'title_category' => 'innkeeper',
'region' => '213',
'place' => '852',
'quarter' => '12839',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Berat',
'title_category' => 'innkeeper',
'region' => '213',
'place' => '852',
'quarter' => '12840',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Berat',
'title_category' => 'innkeeper',
'region' => '213',
'place' => '852',
'quarter' => '12841',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Berat',
'title_category' => 'innkeeper',
'region' => '213',
'place' => '852',
'quarter' => '12842',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Iraklion',
'title_category' => 'innkeeper',
'region' => '214',
'place' => '853',
'quarter' => '12843',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Iraklion',
'title_category' => 'innkeeper',
'region' => '214',
'place' => '853',
'quarter' => '12844',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Iraklion',
'title_category' => 'innkeeper',
'region' => '214',
'place' => '853',
'quarter' => '12845',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Iraklion',
'title_category' => 'innkeeper',
'region' => '214',
'place' => '853',
'quarter' => '12846',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lemnos',
'title_category' => 'innkeeper',
'region' => '214',
'place' => '854',
'quarter' => '12847',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lemnos',
'title_category' => 'innkeeper',
'region' => '214',
'place' => '854',
'quarter' => '12848',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lemnos',
'title_category' => 'innkeeper',
'region' => '214',
'place' => '854',
'quarter' => '12849',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Lemnos',
'title_category' => 'innkeeper',
'region' => '214',
'place' => '854',
'quarter' => '12850',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chania',
'title_category' => 'innkeeper',
'region' => '214',
'place' => '855',
'quarter' => '12851',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chania',
'title_category' => 'innkeeper',
'region' => '214',
'place' => '855',
'quarter' => '12852',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chania',
'title_category' => 'innkeeper',
'region' => '214',
'place' => '855',
'quarter' => '12853',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chania',
'title_category' => 'innkeeper',
'region' => '214',
'place' => '855',
'quarter' => '12854',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Patros',
'title_category' => 'innkeeper',
'region' => '214',
'place' => '856',
'quarter' => '12855',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Patros',
'title_category' => 'innkeeper',
'region' => '214',
'place' => '856',
'quarter' => '12856',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Patros',
'title_category' => 'innkeeper',
'region' => '214',
'place' => '856',
'quarter' => '12857',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Patros',
'title_category' => 'innkeeper',
'region' => '214',
'place' => '856',
'quarter' => '12858',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Smyrna',
'title_category' => 'innkeeper',
'region' => '215',
'place' => '857',
'quarter' => '12859',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Smyrna',
'title_category' => 'innkeeper',
'region' => '215',
'place' => '857',
'quarter' => '12860',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Smyrna',
'title_category' => 'innkeeper',
'region' => '215',
'place' => '857',
'quarter' => '12861',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Smyrna',
'title_category' => 'innkeeper',
'region' => '215',
'place' => '857',
'quarter' => '12862',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Samos',
'title_category' => 'innkeeper',
'region' => '215',
'place' => '858',
'quarter' => '12863',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Samos',
'title_category' => 'innkeeper',
'region' => '215',
'place' => '858',
'quarter' => '12864',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Samos',
'title_category' => 'innkeeper',
'region' => '215',
'place' => '858',
'quarter' => '12865',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Samos',
'title_category' => 'innkeeper',
'region' => '215',
'place' => '858',
'quarter' => '12866',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chios',
'title_category' => 'innkeeper',
'region' => '215',
'place' => '859',
'quarter' => '12867',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chios',
'title_category' => 'innkeeper',
'region' => '215',
'place' => '859',
'quarter' => '12868',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chios',
'title_category' => 'innkeeper',
'region' => '215',
'place' => '859',
'quarter' => '12869',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Chios',
'title_category' => 'innkeeper',
'region' => '215',
'place' => '859',
'quarter' => '12870',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Patmos',
'title_category' => 'innkeeper',
'region' => '215',
'place' => '860',
'quarter' => '12871',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Patmos',
'title_category' => 'innkeeper',
'region' => '215',
'place' => '860',
'quarter' => '12872',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Patmos',
'title_category' => 'innkeeper',
'region' => '215',
'place' => '860',
'quarter' => '12873',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Patmos',
'title_category' => 'innkeeper',
'region' => '215',
'place' => '860',
'quarter' => '12874',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tralles',
'title_category' => 'innkeeper',
'region' => '216',
'place' => '861',
'quarter' => '12875',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tralles',
'title_category' => 'innkeeper',
'region' => '216',
'place' => '861',
'quarter' => '12876',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tralles',
'title_category' => 'innkeeper',
'region' => '216',
'place' => '861',
'quarter' => '12877',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tralles',
'title_category' => 'innkeeper',
'region' => '216',
'place' => '861',
'quarter' => '12878',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Miletus',
'title_category' => 'innkeeper',
'region' => '216',
'place' => '862',
'quarter' => '12879',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Miletus',
'title_category' => 'innkeeper',
'region' => '216',
'place' => '862',
'quarter' => '12880',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Miletus',
'title_category' => 'innkeeper',
'region' => '216',
'place' => '862',
'quarter' => '12881',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Miletus',
'title_category' => 'innkeeper',
'region' => '216',
'place' => '862',
'quarter' => '12882',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Efese',
'title_category' => 'innkeeper',
'region' => '216',
'place' => '863',
'quarter' => '12883',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Efese',
'title_category' => 'innkeeper',
'region' => '216',
'place' => '863',
'quarter' => '12884',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Efese',
'title_category' => 'innkeeper',
'region' => '216',
'place' => '863',
'quarter' => '12885',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Efese',
'title_category' => 'innkeeper',
'region' => '216',
'place' => '863',
'quarter' => '12886',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sardes',
'title_category' => 'innkeeper',
'region' => '216',
'place' => '864',
'quarter' => '12887',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sardes',
'title_category' => 'innkeeper',
'region' => '216',
'place' => '864',
'quarter' => '12888',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sardes',
'title_category' => 'innkeeper',
'region' => '216',
'place' => '864',
'quarter' => '12889',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sardes',
'title_category' => 'innkeeper',
'region' => '216',
'place' => '864',
'quarter' => '12890',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nicaea',
'title_category' => 'innkeeper',
'region' => '217',
'place' => '865',
'quarter' => '12891',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nicaea',
'title_category' => 'innkeeper',
'region' => '217',
'place' => '865',
'quarter' => '12892',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nicaea',
'title_category' => 'innkeeper',
'region' => '217',
'place' => '865',
'quarter' => '12893',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nicaea',
'title_category' => 'innkeeper',
'region' => '217',
'place' => '865',
'quarter' => '12894',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kios',
'title_category' => 'innkeeper',
'region' => '217',
'place' => '866',
'quarter' => '12895',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kios',
'title_category' => 'innkeeper',
'region' => '217',
'place' => '866',
'quarter' => '12896',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kios',
'title_category' => 'innkeeper',
'region' => '217',
'place' => '866',
'quarter' => '12897',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kios',
'title_category' => 'innkeeper',
'region' => '217',
'place' => '866',
'quarter' => '12898',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bursa',
'title_category' => 'innkeeper',
'region' => '217',
'place' => '867',
'quarter' => '12899',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bursa',
'title_category' => 'innkeeper',
'region' => '217',
'place' => '867',
'quarter' => '12900',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bursa',
'title_category' => 'innkeeper',
'region' => '217',
'place' => '867',
'quarter' => '12901',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bursa',
'title_category' => 'innkeeper',
'region' => '217',
'place' => '867',
'quarter' => '12902',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pergamum',
'title_category' => 'innkeeper',
'region' => '217',
'place' => '868',
'quarter' => '12903',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pergamum',
'title_category' => 'innkeeper',
'region' => '217',
'place' => '868',
'quarter' => '12904',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pergamum',
'title_category' => 'innkeeper',
'region' => '217',
'place' => '868',
'quarter' => '12905',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pergamum',
'title_category' => 'innkeeper',
'region' => '217',
'place' => '868',
'quarter' => '12906',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ikonion',
'title_category' => 'innkeeper',
'region' => '218',
'place' => '869',
'quarter' => '12907',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ikonion',
'title_category' => 'innkeeper',
'region' => '218',
'place' => '869',
'quarter' => '12908',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ikonion',
'title_category' => 'innkeeper',
'region' => '218',
'place' => '869',
'quarter' => '12909',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ikonion',
'title_category' => 'innkeeper',
'region' => '218',
'place' => '869',
'quarter' => '12910',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mistheia',
'title_category' => 'innkeeper',
'region' => '218',
'place' => '870',
'quarter' => '12911',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mistheia',
'title_category' => 'innkeeper',
'region' => '218',
'place' => '870',
'quarter' => '12912',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mistheia',
'title_category' => 'innkeeper',
'region' => '218',
'place' => '870',
'quarter' => '12913',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mistheia',
'title_category' => 'innkeeper',
'region' => '218',
'place' => '870',
'quarter' => '12914',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Laranda',
'title_category' => 'innkeeper',
'region' => '218',
'place' => '871',
'quarter' => '12915',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Laranda',
'title_category' => 'innkeeper',
'region' => '218',
'place' => '871',
'quarter' => '12916',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Laranda',
'title_category' => 'innkeeper',
'region' => '218',
'place' => '871',
'quarter' => '12917',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Laranda',
'title_category' => 'innkeeper',
'region' => '218',
'place' => '871',
'quarter' => '12918',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ousakeion',
'title_category' => 'innkeeper',
'region' => '218',
'place' => '872',
'quarter' => '12919',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ousakeion',
'title_category' => 'innkeeper',
'region' => '218',
'place' => '872',
'quarter' => '12920',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ousakeion',
'title_category' => 'innkeeper',
'region' => '218',
'place' => '872',
'quarter' => '12921',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ousakeion',
'title_category' => 'innkeeper',
'region' => '218',
'place' => '872',
'quarter' => '12922',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Coracesium',
'title_category' => 'innkeeper',
'region' => '219',
'place' => '873',
'quarter' => '12923',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Coracesium',
'title_category' => 'innkeeper',
'region' => '219',
'place' => '873',
'quarter' => '12924',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Coracesium',
'title_category' => 'innkeeper',
'region' => '219',
'place' => '873',
'quarter' => '12925',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Coracesium',
'title_category' => 'innkeeper',
'region' => '219',
'place' => '873',
'quarter' => '12926',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rhodos',
'title_category' => 'innkeeper',
'region' => '219',
'place' => '874',
'quarter' => '12927',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rhodos',
'title_category' => 'innkeeper',
'region' => '219',
'place' => '874',
'quarter' => '12928',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rhodos',
'title_category' => 'innkeeper',
'region' => '219',
'place' => '874',
'quarter' => '12929',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rhodos',
'title_category' => 'innkeeper',
'region' => '219',
'place' => '874',
'quarter' => '12930',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Attalia',
'title_category' => 'innkeeper',
'region' => '219',
'place' => '875',
'quarter' => '12931',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Attalia',
'title_category' => 'innkeeper',
'region' => '219',
'place' => '875',
'quarter' => '12932',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Attalia',
'title_category' => 'innkeeper',
'region' => '219',
'place' => '875',
'quarter' => '12933',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Attalia',
'title_category' => 'innkeeper',
'region' => '219',
'place' => '875',
'quarter' => '12934',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Makre',
'title_category' => 'innkeeper',
'region' => '219',
'place' => '876',
'quarter' => '12935',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Makre',
'title_category' => 'innkeeper',
'region' => '219',
'place' => '876',
'quarter' => '12936',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Makre',
'title_category' => 'innkeeper',
'region' => '219',
'place' => '876',
'quarter' => '12937',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Makre',
'title_category' => 'innkeeper',
'region' => '219',
'place' => '876',
'quarter' => '12938',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ancyra',
'title_category' => 'innkeeper',
'region' => '220',
'place' => '877',
'quarter' => '12939',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ancyra',
'title_category' => 'innkeeper',
'region' => '220',
'place' => '877',
'quarter' => '12940',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ancyra',
'title_category' => 'innkeeper',
'region' => '220',
'place' => '877',
'quarter' => '12941',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ancyra',
'title_category' => 'innkeeper',
'region' => '220',
'place' => '877',
'quarter' => '12942',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gordion',
'title_category' => 'innkeeper',
'region' => '220',
'place' => '878',
'quarter' => '12943',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gordion',
'title_category' => 'innkeeper',
'region' => '220',
'place' => '878',
'quarter' => '12944',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gordion',
'title_category' => 'innkeeper',
'region' => '220',
'place' => '878',
'quarter' => '12945',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gordion',
'title_category' => 'innkeeper',
'region' => '220',
'place' => '878',
'quarter' => '12946',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cotyaeum',
'title_category' => 'innkeeper',
'region' => '220',
'place' => '879',
'quarter' => '12947',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cotyaeum',
'title_category' => 'innkeeper',
'region' => '220',
'place' => '879',
'quarter' => '12948',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cotyaeum',
'title_category' => 'innkeeper',
'region' => '220',
'place' => '879',
'quarter' => '12949',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cotyaeum',
'title_category' => 'innkeeper',
'region' => '220',
'place' => '879',
'quarter' => '12950',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dorylaeum',
'title_category' => 'innkeeper',
'region' => '220',
'place' => '880',
'quarter' => '12951',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dorylaeum',
'title_category' => 'innkeeper',
'region' => '220',
'place' => '880',
'quarter' => '12952',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dorylaeum',
'title_category' => 'innkeeper',
'region' => '220',
'place' => '880',
'quarter' => '12953',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dorylaeum',
'title_category' => 'innkeeper',
'region' => '220',
'place' => '880',
'quarter' => '12954',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sinope',
'title_category' => 'innkeeper',
'region' => '221',
'place' => '881',
'quarter' => '12955',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sinope',
'title_category' => 'innkeeper',
'region' => '221',
'place' => '881',
'quarter' => '12956',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sinope',
'title_category' => 'innkeeper',
'region' => '221',
'place' => '881',
'quarter' => '12957',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sinope',
'title_category' => 'innkeeper',
'region' => '221',
'place' => '881',
'quarter' => '12958',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kastamuni',
'title_category' => 'innkeeper',
'region' => '221',
'place' => '882',
'quarter' => '12959',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kastamuni',
'title_category' => 'innkeeper',
'region' => '221',
'place' => '882',
'quarter' => '12960',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kastamuni',
'title_category' => 'innkeeper',
'region' => '221',
'place' => '882',
'quarter' => '12961',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kastamuni',
'title_category' => 'innkeeper',
'region' => '221',
'place' => '882',
'quarter' => '12962',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Amasra',
'title_category' => 'innkeeper',
'region' => '221',
'place' => '883',
'quarter' => '12963',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Amasra',
'title_category' => 'innkeeper',
'region' => '221',
'place' => '883',
'quarter' => '12964',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Amasra',
'title_category' => 'innkeeper',
'region' => '221',
'place' => '883',
'quarter' => '12965',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Amasra',
'title_category' => 'innkeeper',
'region' => '221',
'place' => '883',
'quarter' => '12966',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Claudiopolis',
'title_category' => 'innkeeper',
'region' => '221',
'place' => '884',
'quarter' => '12967',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Claudiopolis',
'title_category' => 'innkeeper',
'region' => '221',
'place' => '884',
'quarter' => '12968',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Claudiopolis',
'title_category' => 'innkeeper',
'region' => '221',
'place' => '884',
'quarter' => '12969',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Claudiopolis',
'title_category' => 'innkeeper',
'region' => '221',
'place' => '884',
'quarter' => '12970',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tarsus',
'title_category' => 'innkeeper',
'region' => '222',
'place' => '885',
'quarter' => '12971',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tarsus',
'title_category' => 'innkeeper',
'region' => '222',
'place' => '885',
'quarter' => '12972',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tarsus',
'title_category' => 'innkeeper',
'region' => '222',
'place' => '885',
'quarter' => '12973',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tarsus',
'title_category' => 'innkeeper',
'region' => '222',
'place' => '885',
'quarter' => '12974',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Adana',
'title_category' => 'innkeeper',
'region' => '222',
'place' => '886',
'quarter' => '12975',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Adana',
'title_category' => 'innkeeper',
'region' => '222',
'place' => '886',
'quarter' => '12976',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Adana',
'title_category' => 'innkeeper',
'region' => '222',
'place' => '886',
'quarter' => '12977',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Adana',
'title_category' => 'innkeeper',
'region' => '222',
'place' => '886',
'quarter' => '12978',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nicosia',
'title_category' => 'innkeeper',
'region' => '222',
'place' => '887',
'quarter' => '12979',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nicosia',
'title_category' => 'innkeeper',
'region' => '222',
'place' => '887',
'quarter' => '12980',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nicosia',
'title_category' => 'innkeeper',
'region' => '222',
'place' => '887',
'quarter' => '12981',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nicosia',
'title_category' => 'innkeeper',
'region' => '222',
'place' => '887',
'quarter' => '12982',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Limasol',
'title_category' => 'innkeeper',
'region' => '222',
'place' => '888',
'quarter' => '12983',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Limasol',
'title_category' => 'innkeeper',
'region' => '222',
'place' => '888',
'quarter' => '12984',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Limasol',
'title_category' => 'innkeeper',
'region' => '222',
'place' => '888',
'quarter' => '12985',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Limasol',
'title_category' => 'innkeeper',
'region' => '222',
'place' => '888',
'quarter' => '12986',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Caesarea',
'title_category' => 'innkeeper',
'region' => '223',
'place' => '889',
'quarter' => '12987',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Caesarea',
'title_category' => 'innkeeper',
'region' => '223',
'place' => '889',
'quarter' => '12988',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Caesarea',
'title_category' => 'innkeeper',
'region' => '223',
'place' => '889',
'quarter' => '12989',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Caesarea',
'title_category' => 'innkeeper',
'region' => '223',
'place' => '889',
'quarter' => '12990',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Garsaura',
'title_category' => 'innkeeper',
'region' => '223',
'place' => '890',
'quarter' => '12991',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Garsaura',
'title_category' => 'innkeeper',
'region' => '223',
'place' => '890',
'quarter' => '12992',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Garsaura',
'title_category' => 'innkeeper',
'region' => '223',
'place' => '890',
'quarter' => '12993',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Garsaura',
'title_category' => 'innkeeper',
'region' => '223',
'place' => '890',
'quarter' => '12994',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Magida',
'title_category' => 'innkeeper',
'region' => '223',
'place' => '891',
'quarter' => '12995',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Magida',
'title_category' => 'innkeeper',
'region' => '223',
'place' => '891',
'quarter' => '12996',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Magida',
'title_category' => 'innkeeper',
'region' => '223',
'place' => '891',
'quarter' => '12997',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Magida',
'title_category' => 'innkeeper',
'region' => '223',
'place' => '891',
'quarter' => '12998',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Muskara',
'title_category' => 'innkeeper',
'region' => '223',
'place' => '892',
'quarter' => '12999',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Muskara',
'title_category' => 'innkeeper',
'region' => '223',
'place' => '892',
'quarter' => '13000',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Muskara',
'title_category' => 'innkeeper',
'region' => '223',
'place' => '892',
'quarter' => '13001',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Muskara',
'title_category' => 'innkeeper',
'region' => '223',
'place' => '892',
'quarter' => '13002',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Trebizond',
'title_category' => 'innkeeper',
'region' => '224',
'place' => '893',
'quarter' => '13003',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Trebizond',
'title_category' => 'innkeeper',
'region' => '224',
'place' => '893',
'quarter' => '13004',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Trebizond',
'title_category' => 'innkeeper',
'region' => '224',
'place' => '893',
'quarter' => '13005',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Trebizond',
'title_category' => 'innkeeper',
'region' => '224',
'place' => '893',
'quarter' => '13006',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bayberdon',
'title_category' => 'innkeeper',
'region' => '224',
'place' => '894',
'quarter' => '13007',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bayberdon',
'title_category' => 'innkeeper',
'region' => '224',
'place' => '894',
'quarter' => '13008',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bayberdon',
'title_category' => 'innkeeper',
'region' => '224',
'place' => '894',
'quarter' => '13009',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bayberdon',
'title_category' => 'innkeeper',
'region' => '224',
'place' => '894',
'quarter' => '13010',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Riza',
'title_category' => 'innkeeper',
'region' => '224',
'place' => '895',
'quarter' => '13011',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Riza',
'title_category' => 'innkeeper',
'region' => '224',
'place' => '895',
'quarter' => '13012',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Riza',
'title_category' => 'innkeeper',
'region' => '224',
'place' => '895',
'quarter' => '13013',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Riza',
'title_category' => 'innkeeper',
'region' => '224',
'place' => '895',
'quarter' => '13014',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kerasous',
'title_category' => 'innkeeper',
'region' => '224',
'place' => '896',
'quarter' => '13015',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kerasous',
'title_category' => 'innkeeper',
'region' => '224',
'place' => '896',
'quarter' => '13016',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kerasous',
'title_category' => 'innkeeper',
'region' => '224',
'place' => '896',
'quarter' => '13017',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kerasous',
'title_category' => 'innkeeper',
'region' => '224',
'place' => '896',
'quarter' => '13018',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Edessa',
'title_category' => 'innkeeper',
'region' => '225',
'place' => '897',
'quarter' => '13019',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Edessa',
'title_category' => 'innkeeper',
'region' => '225',
'place' => '897',
'quarter' => '13020',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Edessa',
'title_category' => 'innkeeper',
'region' => '225',
'place' => '897',
'quarter' => '13021',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Edessa',
'title_category' => 'innkeeper',
'region' => '225',
'place' => '897',
'quarter' => '13022',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Semsur',
'title_category' => 'innkeeper',
'region' => '225',
'place' => '898',
'quarter' => '13023',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Semsur',
'title_category' => 'innkeeper',
'region' => '225',
'place' => '898',
'quarter' => '13024',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Semsur',
'title_category' => 'innkeeper',
'region' => '225',
'place' => '898',
'quarter' => '13025',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Semsur',
'title_category' => 'innkeeper',
'region' => '225',
'place' => '898',
'quarter' => '13026',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Amouda',
'title_category' => 'innkeeper',
'region' => '225',
'place' => '899',
'quarter' => '13027',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Amouda',
'title_category' => 'innkeeper',
'region' => '225',
'place' => '899',
'quarter' => '13028',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Amouda',
'title_category' => 'innkeeper',
'region' => '225',
'place' => '899',
'quarter' => '13029',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Amouda',
'title_category' => 'innkeeper',
'region' => '225',
'place' => '899',
'quarter' => '13030',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Antep',
'title_category' => 'innkeeper',
'region' => '225',
'place' => '900',
'quarter' => '13031',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Antep',
'title_category' => 'innkeeper',
'region' => '225',
'place' => '900',
'quarter' => '13032',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Antep',
'title_category' => 'innkeeper',
'region' => '225',
'place' => '900',
'quarter' => '13033',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Antep',
'title_category' => 'innkeeper',
'region' => '225',
'place' => '900',
'quarter' => '13034',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Amasia',
'title_category' => 'innkeeper',
'region' => '226',
'place' => '901',
'quarter' => '13035',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Amasia',
'title_category' => 'innkeeper',
'region' => '226',
'place' => '901',
'quarter' => '13036',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Amasia',
'title_category' => 'innkeeper',
'region' => '226',
'place' => '901',
'quarter' => '13037',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Amasia',
'title_category' => 'innkeeper',
'region' => '226',
'place' => '901',
'quarter' => '13038',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Samsun',
'title_category' => 'innkeeper',
'region' => '226',
'place' => '902',
'quarter' => '13039',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Samsun',
'title_category' => 'innkeeper',
'region' => '226',
'place' => '902',
'quarter' => '13040',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Samsun',
'title_category' => 'innkeeper',
'region' => '226',
'place' => '902',
'quarter' => '13041',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Samsun',
'title_category' => 'innkeeper',
'region' => '226',
'place' => '902',
'quarter' => '13042',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Corum',
'title_category' => 'innkeeper',
'region' => '226',
'place' => '903',
'quarter' => '13043',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Corum',
'title_category' => 'innkeeper',
'region' => '226',
'place' => '903',
'quarter' => '13044',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Corum',
'title_category' => 'innkeeper',
'region' => '226',
'place' => '903',
'quarter' => '13045',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Corum',
'title_category' => 'innkeeper',
'region' => '226',
'place' => '903',
'quarter' => '13046',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Takat',
'title_category' => 'innkeeper',
'region' => '226',
'place' => '904',
'quarter' => '13047',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Takat',
'title_category' => 'innkeeper',
'region' => '226',
'place' => '904',
'quarter' => '13048',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Takat',
'title_category' => 'innkeeper',
'region' => '226',
'place' => '904',
'quarter' => '13049',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Takat',
'title_category' => 'innkeeper',
'region' => '226',
'place' => '904',
'quarter' => '13050',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Diyarbakir',
'title_category' => 'innkeeper',
'region' => '227',
'place' => '905',
'quarter' => '13051',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Diyarbakir',
'title_category' => 'innkeeper',
'region' => '227',
'place' => '905',
'quarter' => '13052',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Diyarbakir',
'title_category' => 'innkeeper',
'region' => '227',
'place' => '905',
'quarter' => '13053',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Diyarbakir',
'title_category' => 'innkeeper',
'region' => '227',
'place' => '905',
'quarter' => '13054',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Harput',
'title_category' => 'innkeeper',
'region' => '227',
'place' => '906',
'quarter' => '13055',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Harput',
'title_category' => 'innkeeper',
'region' => '227',
'place' => '906',
'quarter' => '13056',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Harput',
'title_category' => 'innkeeper',
'region' => '227',
'place' => '906',
'quarter' => '13057',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Harput',
'title_category' => 'innkeeper',
'region' => '227',
'place' => '906',
'quarter' => '13058',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Erzincan',
'title_category' => 'innkeeper',
'region' => '227',
'place' => '907',
'quarter' => '13059',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Erzincan',
'title_category' => 'innkeeper',
'region' => '227',
'place' => '907',
'quarter' => '13060',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Erzincan',
'title_category' => 'innkeeper',
'region' => '227',
'place' => '907',
'quarter' => '13061',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Erzincan',
'title_category' => 'innkeeper',
'region' => '227',
'place' => '907',
'quarter' => '13062',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Romanoupolis',
'title_category' => 'innkeeper',
'region' => '227',
'place' => '908',
'quarter' => '13063',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Romanoupolis',
'title_category' => 'innkeeper',
'region' => '227',
'place' => '908',
'quarter' => '13064',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Romanoupolis',
'title_category' => 'innkeeper',
'region' => '227',
'place' => '908',
'quarter' => '13065',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Romanoupolis',
'title_category' => 'innkeeper',
'region' => '227',
'place' => '908',
'quarter' => '13066',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sivas',
'title_category' => 'innkeeper',
'region' => '228',
'place' => '909',
'quarter' => '13067',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sivas',
'title_category' => 'innkeeper',
'region' => '228',
'place' => '909',
'quarter' => '13068',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sivas',
'title_category' => 'innkeeper',
'region' => '228',
'place' => '909',
'quarter' => '13069',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sivas',
'title_category' => 'innkeeper',
'region' => '228',
'place' => '909',
'quarter' => '13070',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Divrigi',
'title_category' => 'innkeeper',
'region' => '228',
'place' => '910',
'quarter' => '13071',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Divrigi',
'title_category' => 'innkeeper',
'region' => '228',
'place' => '910',
'quarter' => '13072',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Divrigi',
'title_category' => 'innkeeper',
'region' => '228',
'place' => '910',
'quarter' => '13073',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Divrigi',
'title_category' => 'innkeeper',
'region' => '228',
'place' => '910',
'quarter' => '13074',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Albistan',
'title_category' => 'innkeeper',
'region' => '228',
'place' => '911',
'quarter' => '13075',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Albistan',
'title_category' => 'innkeeper',
'region' => '228',
'place' => '911',
'quarter' => '13076',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Albistan',
'title_category' => 'innkeeper',
'region' => '228',
'place' => '911',
'quarter' => '13077',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Albistan',
'title_category' => 'innkeeper',
'region' => '228',
'place' => '911',
'quarter' => '13078',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tavium',
'title_category' => 'innkeeper',
'region' => '228',
'place' => '912',
'quarter' => '13079',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tavium',
'title_category' => 'innkeeper',
'region' => '228',
'place' => '912',
'quarter' => '13080',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tavium',
'title_category' => 'innkeeper',
'region' => '228',
'place' => '912',
'quarter' => '13081',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tavium',
'title_category' => 'innkeeper',
'region' => '228',
'place' => '912',
'quarter' => '13082',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Batumi',
'title_category' => 'innkeeper',
'region' => '229',
'place' => '913',
'quarter' => '13083',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Batumi',
'title_category' => 'innkeeper',
'region' => '229',
'place' => '913',
'quarter' => '13084',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Batumi',
'title_category' => 'innkeeper',
'region' => '229',
'place' => '913',
'quarter' => '13085',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Batumi',
'title_category' => 'innkeeper',
'region' => '229',
'place' => '913',
'quarter' => '13086',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Poti',
'title_category' => 'innkeeper',
'region' => '229',
'place' => '914',
'quarter' => '13087',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Poti',
'title_category' => 'innkeeper',
'region' => '229',
'place' => '914',
'quarter' => '13088',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Poti',
'title_category' => 'innkeeper',
'region' => '229',
'place' => '914',
'quarter' => '13089',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Poti',
'title_category' => 'innkeeper',
'region' => '229',
'place' => '914',
'quarter' => '13090',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pitsunda',
'title_category' => 'innkeeper',
'region' => '229',
'place' => '915',
'quarter' => '13091',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pitsunda',
'title_category' => 'innkeeper',
'region' => '229',
'place' => '915',
'quarter' => '13092',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pitsunda',
'title_category' => 'innkeeper',
'region' => '229',
'place' => '915',
'quarter' => '13093',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Pitsunda',
'title_category' => 'innkeeper',
'region' => '229',
'place' => '915',
'quarter' => '13094',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kutais',
'title_category' => 'innkeeper',
'region' => '229',
'place' => '916',
'quarter' => '13095',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kutais',
'title_category' => 'innkeeper',
'region' => '229',
'place' => '916',
'quarter' => '13096',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kutais',
'title_category' => 'innkeeper',
'region' => '229',
'place' => '916',
'quarter' => '13097',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kutais',
'title_category' => 'innkeeper',
'region' => '229',
'place' => '916',
'quarter' => '13098',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tiflis',
'title_category' => 'innkeeper',
'region' => '230',
'place' => '917',
'quarter' => '13099',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tiflis',
'title_category' => 'innkeeper',
'region' => '230',
'place' => '917',
'quarter' => '13100',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tiflis',
'title_category' => 'innkeeper',
'region' => '230',
'place' => '917',
'quarter' => '13101',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tiflis',
'title_category' => 'innkeeper',
'region' => '230',
'place' => '917',
'quarter' => '13102',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Surami',
'title_category' => 'innkeeper',
'region' => '230',
'place' => '918',
'quarter' => '13103',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Surami',
'title_category' => 'innkeeper',
'region' => '230',
'place' => '918',
'quarter' => '13104',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Surami',
'title_category' => 'innkeeper',
'region' => '230',
'place' => '918',
'quarter' => '13105',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Surami',
'title_category' => 'innkeeper',
'region' => '230',
'place' => '918',
'quarter' => '13106',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gori',
'title_category' => 'innkeeper',
'region' => '230',
'place' => '919',
'quarter' => '13107',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gori',
'title_category' => 'innkeeper',
'region' => '230',
'place' => '919',
'quarter' => '13108',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gori',
'title_category' => 'innkeeper',
'region' => '230',
'place' => '919',
'quarter' => '13109',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gori',
'title_category' => 'innkeeper',
'region' => '230',
'place' => '919',
'quarter' => '13110',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Akhalkalaki',
'title_category' => 'innkeeper',
'region' => '230',
'place' => '920',
'quarter' => '13111',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Akhalkalaki',
'title_category' => 'innkeeper',
'region' => '230',
'place' => '920',
'quarter' => '13112',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Akhalkalaki',
'title_category' => 'innkeeper',
'region' => '230',
'place' => '920',
'quarter' => '13113',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Akhalkalaki',
'title_category' => 'innkeeper',
'region' => '230',
'place' => '920',
'quarter' => '13114',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Derbent',
'title_category' => 'innkeeper',
'region' => '231',
'place' => '921',
'quarter' => '13115',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Derbent',
'title_category' => 'innkeeper',
'region' => '231',
'place' => '921',
'quarter' => '13116',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Derbent',
'title_category' => 'innkeeper',
'region' => '231',
'place' => '921',
'quarter' => '13117',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Derbent',
'title_category' => 'innkeeper',
'region' => '231',
'place' => '921',
'quarter' => '13118',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Baku',
'title_category' => 'innkeeper',
'region' => '231',
'place' => '922',
'quarter' => '13119',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Baku',
'title_category' => 'innkeeper',
'region' => '231',
'place' => '922',
'quarter' => '13120',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Baku',
'title_category' => 'innkeeper',
'region' => '231',
'place' => '922',
'quarter' => '13121',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Baku',
'title_category' => 'innkeeper',
'region' => '231',
'place' => '922',
'quarter' => '13122',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mingecevir',
'title_category' => 'innkeeper',
'region' => '231',
'place' => '923',
'quarter' => '13123',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mingecevir',
'title_category' => 'innkeeper',
'region' => '231',
'place' => '923',
'quarter' => '13124',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mingecevir',
'title_category' => 'innkeeper',
'region' => '231',
'place' => '923',
'quarter' => '13125',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mingecevir',
'title_category' => 'innkeeper',
'region' => '231',
'place' => '923',
'quarter' => '13126',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Balanjar',
'title_category' => 'innkeeper',
'region' => '231',
'place' => '924',
'quarter' => '13127',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Balanjar',
'title_category' => 'innkeeper',
'region' => '231',
'place' => '924',
'quarter' => '13128',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Balanjar',
'title_category' => 'innkeeper',
'region' => '231',
'place' => '924',
'quarter' => '13129',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Balanjar',
'title_category' => 'innkeeper',
'region' => '231',
'place' => '924',
'quarter' => '13130',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ani',
'title_category' => 'innkeeper',
'region' => '232',
'place' => '925',
'quarter' => '13131',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ani',
'title_category' => 'innkeeper',
'region' => '232',
'place' => '925',
'quarter' => '13132',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ani',
'title_category' => 'innkeeper',
'region' => '232',
'place' => '925',
'quarter' => '13133',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ani',
'title_category' => 'innkeeper',
'region' => '232',
'place' => '925',
'quarter' => '13134',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Yerevan',
'title_category' => 'innkeeper',
'region' => '232',
'place' => '926',
'quarter' => '13135',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Yerevan',
'title_category' => 'innkeeper',
'region' => '232',
'place' => '926',
'quarter' => '13136',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Yerevan',
'title_category' => 'innkeeper',
'region' => '232',
'place' => '926',
'quarter' => '13137',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Yerevan',
'title_category' => 'innkeeper',
'region' => '232',
'place' => '926',
'quarter' => '13138',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ghars',
'title_category' => 'innkeeper',
'region' => '232',
'place' => '927',
'quarter' => '13139',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ghars',
'title_category' => 'innkeeper',
'region' => '232',
'place' => '927',
'quarter' => '13140',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ghars',
'title_category' => 'innkeeper',
'region' => '232',
'place' => '927',
'quarter' => '13141',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ghars',
'title_category' => 'innkeeper',
'region' => '232',
'place' => '927',
'quarter' => '13142',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kirants',
'title_category' => 'innkeeper',
'region' => '232',
'place' => '928',
'quarter' => '13143',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kirants',
'title_category' => 'innkeeper',
'region' => '232',
'place' => '928',
'quarter' => '13144',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kirants',
'title_category' => 'innkeeper',
'region' => '232',
'place' => '928',
'quarter' => '13145',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kirants',
'title_category' => 'innkeeper',
'region' => '232',
'place' => '928',
'quarter' => '13146',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nakhichevan',
'title_category' => 'innkeeper',
'region' => '233',
'place' => '929',
'quarter' => '13147',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nakhichevan',
'title_category' => 'innkeeper',
'region' => '233',
'place' => '929',
'quarter' => '13148',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nakhichevan',
'title_category' => 'innkeeper',
'region' => '233',
'place' => '929',
'quarter' => '13149',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nakhichevan',
'title_category' => 'innkeeper',
'region' => '233',
'place' => '929',
'quarter' => '13150',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Khoy',
'title_category' => 'innkeeper',
'region' => '233',
'place' => '930',
'quarter' => '13151',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Khoy',
'title_category' => 'innkeeper',
'region' => '233',
'place' => '930',
'quarter' => '13152',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Khoy',
'title_category' => 'innkeeper',
'region' => '233',
'place' => '930',
'quarter' => '13153',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Khoy',
'title_category' => 'innkeeper',
'region' => '233',
'place' => '930',
'quarter' => '13154',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ordubad',
'title_category' => 'innkeeper',
'region' => '233',
'place' => '931',
'quarter' => '13155',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ordubad',
'title_category' => 'innkeeper',
'region' => '233',
'place' => '931',
'quarter' => '13156',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ordubad',
'title_category' => 'innkeeper',
'region' => '233',
'place' => '931',
'quarter' => '13157',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ordubad',
'title_category' => 'innkeeper',
'region' => '233',
'place' => '931',
'quarter' => '13158',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Baghaberd',
'title_category' => 'innkeeper',
'region' => '233',
'place' => '932',
'quarter' => '13159',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Baghaberd',
'title_category' => 'innkeeper',
'region' => '233',
'place' => '932',
'quarter' => '13160',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Baghaberd',
'title_category' => 'innkeeper',
'region' => '233',
'place' => '932',
'quarter' => '13161',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Baghaberd',
'title_category' => 'innkeeper',
'region' => '233',
'place' => '932',
'quarter' => '13162',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tatvan',
'title_category' => 'innkeeper',
'region' => '234',
'place' => '933',
'quarter' => '13163',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tatvan',
'title_category' => 'innkeeper',
'region' => '234',
'place' => '933',
'quarter' => '13164',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tatvan',
'title_category' => 'innkeeper',
'region' => '234',
'place' => '933',
'quarter' => '13165',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tatvan',
'title_category' => 'innkeeper',
'region' => '234',
'place' => '933',
'quarter' => '13166',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Manzikert',
'title_category' => 'innkeeper',
'region' => '234',
'place' => '934',
'quarter' => '13167',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Manzikert',
'title_category' => 'innkeeper',
'region' => '234',
'place' => '934',
'quarter' => '13168',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Manzikert',
'title_category' => 'innkeeper',
'region' => '234',
'place' => '934',
'quarter' => '13169',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Manzikert',
'title_category' => 'innkeeper',
'region' => '234',
'place' => '934',
'quarter' => '13170',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bitlis',
'title_category' => 'innkeeper',
'region' => '234',
'place' => '935',
'quarter' => '13171',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bitlis',
'title_category' => 'innkeeper',
'region' => '234',
'place' => '935',
'quarter' => '13172',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bitlis',
'title_category' => 'innkeeper',
'region' => '234',
'place' => '935',
'quarter' => '13173',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bitlis',
'title_category' => 'innkeeper',
'region' => '234',
'place' => '935',
'quarter' => '13174',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Arakelots',
'title_category' => 'innkeeper',
'region' => '234',
'place' => '936',
'quarter' => '13175',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Arakelots',
'title_category' => 'innkeeper',
'region' => '234',
'place' => '936',
'quarter' => '13176',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Arakelots',
'title_category' => 'innkeeper',
'region' => '234',
'place' => '936',
'quarter' => '13177',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Arakelots',
'title_category' => 'innkeeper',
'region' => '234',
'place' => '936',
'quarter' => '13178',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mardin',
'title_category' => 'innkeeper',
'region' => '235',
'place' => '937',
'quarter' => '13179',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mardin',
'title_category' => 'innkeeper',
'region' => '235',
'place' => '937',
'quarter' => '13180',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mardin',
'title_category' => 'innkeeper',
'region' => '235',
'place' => '937',
'quarter' => '13181',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mardin',
'title_category' => 'innkeeper',
'region' => '235',
'place' => '937',
'quarter' => '13182',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saird',
'title_category' => 'innkeeper',
'region' => '235',
'place' => '938',
'quarter' => '13183',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saird',
'title_category' => 'innkeeper',
'region' => '235',
'place' => '938',
'quarter' => '13184',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saird',
'title_category' => 'innkeeper',
'region' => '235',
'place' => '938',
'quarter' => '13185',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Saird',
'title_category' => 'innkeeper',
'region' => '235',
'place' => '938',
'quarter' => '13186',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cepha',
'title_category' => 'innkeeper',
'region' => '235',
'place' => '939',
'quarter' => '13187',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cepha',
'title_category' => 'innkeeper',
'region' => '235',
'place' => '939',
'quarter' => '13188',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cepha',
'title_category' => 'innkeeper',
'region' => '235',
'place' => '939',
'quarter' => '13189',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Cepha',
'title_category' => 'innkeeper',
'region' => '235',
'place' => '939',
'quarter' => '13190',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nisibis',
'title_category' => 'innkeeper',
'region' => '235',
'place' => '940',
'quarter' => '13191',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nisibis',
'title_category' => 'innkeeper',
'region' => '235',
'place' => '940',
'quarter' => '13192',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nisibis',
'title_category' => 'innkeeper',
'region' => '235',
'place' => '940',
'quarter' => '13193',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nisibis',
'title_category' => 'innkeeper',
'region' => '235',
'place' => '940',
'quarter' => '13194',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Van',
'title_category' => 'innkeeper',
'region' => '236',
'place' => '941',
'quarter' => '13195',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Van',
'title_category' => 'innkeeper',
'region' => '236',
'place' => '941',
'quarter' => '13196',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Van',
'title_category' => 'innkeeper',
'region' => '236',
'place' => '941',
'quarter' => '13197',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Van',
'title_category' => 'innkeeper',
'region' => '236',
'place' => '941',
'quarter' => '13198',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Berkri',
'title_category' => 'innkeeper',
'region' => '236',
'place' => '942',
'quarter' => '13199',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Berkri',
'title_category' => 'innkeeper',
'region' => '236',
'place' => '942',
'quarter' => '13200',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Berkri',
'title_category' => 'innkeeper',
'region' => '236',
'place' => '942',
'quarter' => '13201',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Berkri',
'title_category' => 'innkeeper',
'region' => '236',
'place' => '942',
'quarter' => '13202',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Archesh',
'title_category' => 'innkeeper',
'region' => '236',
'place' => '943',
'quarter' => '13203',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Archesh',
'title_category' => 'innkeeper',
'region' => '236',
'place' => '943',
'quarter' => '13204',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Archesh',
'title_category' => 'innkeeper',
'region' => '236',
'place' => '943',
'quarter' => '13205',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Archesh',
'title_category' => 'innkeeper',
'region' => '236',
'place' => '943',
'quarter' => '13206',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ostan',
'title_category' => 'innkeeper',
'region' => '236',
'place' => '944',
'quarter' => '13207',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ostan',
'title_category' => 'innkeeper',
'region' => '236',
'place' => '944',
'quarter' => '13208',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ostan',
'title_category' => 'innkeeper',
'region' => '236',
'place' => '944',
'quarter' => '13209',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ostan',
'title_category' => 'innkeeper',
'region' => '236',
'place' => '944',
'quarter' => '13210',
'religion' => '4',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nishapur',
'title_category' => 'innkeeper',
'region' => '237',
'place' => '945',
'quarter' => '13211',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nishapur',
'title_category' => 'innkeeper',
'region' => '237',
'place' => '945',
'quarter' => '13212',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nishapur',
'title_category' => 'innkeeper',
'region' => '237',
'place' => '945',
'quarter' => '13213',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nishapur',
'title_category' => 'innkeeper',
'region' => '237',
'place' => '945',
'quarter' => '13214',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Beyhaq',
'title_category' => 'innkeeper',
'region' => '237',
'place' => '946',
'quarter' => '13215',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Beyhaq',
'title_category' => 'innkeeper',
'region' => '237',
'place' => '946',
'quarter' => '13216',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Beyhaq',
'title_category' => 'innkeeper',
'region' => '237',
'place' => '946',
'quarter' => '13217',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Beyhaq',
'title_category' => 'innkeeper',
'region' => '237',
'place' => '946',
'quarter' => '13218',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mashhad',
'title_category' => 'innkeeper',
'region' => '237',
'place' => '947',
'quarter' => '13219',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mashhad',
'title_category' => 'innkeeper',
'region' => '237',
'place' => '947',
'quarter' => '13220',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mashhad',
'title_category' => 'innkeeper',
'region' => '237',
'place' => '947',
'quarter' => '13221',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mashhad',
'title_category' => 'innkeeper',
'region' => '237',
'place' => '947',
'quarter' => '13222',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Konjikala',
'title_category' => 'innkeeper',
'region' => '237',
'place' => '948',
'quarter' => '13223',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Konjikala',
'title_category' => 'innkeeper',
'region' => '237',
'place' => '948',
'quarter' => '13224',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Konjikala',
'title_category' => 'innkeeper',
'region' => '237',
'place' => '948',
'quarter' => '13225',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Konjikala',
'title_category' => 'innkeeper',
'region' => '237',
'place' => '948',
'quarter' => '13226',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kashmar',
'title_category' => 'innkeeper',
'region' => '238',
'place' => '949',
'quarter' => '13227',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kashmar',
'title_category' => 'innkeeper',
'region' => '238',
'place' => '949',
'quarter' => '13228',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kashmar',
'title_category' => 'innkeeper',
'region' => '238',
'place' => '949',
'quarter' => '13229',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kashmar',
'title_category' => 'innkeeper',
'region' => '238',
'place' => '949',
'quarter' => '13230',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gonabad',
'title_category' => 'innkeeper',
'region' => '238',
'place' => '950',
'quarter' => '13231',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gonabad',
'title_category' => 'innkeeper',
'region' => '238',
'place' => '950',
'quarter' => '13232',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gonabad',
'title_category' => 'innkeeper',
'region' => '238',
'place' => '950',
'quarter' => '13233',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Gonabad',
'title_category' => 'innkeeper',
'region' => '238',
'place' => '950',
'quarter' => '13234',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tabas',
'title_category' => 'innkeeper',
'region' => '238',
'place' => '951',
'quarter' => '13235',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tabas',
'title_category' => 'innkeeper',
'region' => '238',
'place' => '951',
'quarter' => '13236',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tabas',
'title_category' => 'innkeeper',
'region' => '238',
'place' => '951',
'quarter' => '13237',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tabas',
'title_category' => 'innkeeper',
'region' => '238',
'place' => '951',
'quarter' => '13238',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Birjand',
'title_category' => 'innkeeper',
'region' => '238',
'place' => '952',
'quarter' => '13239',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Birjand',
'title_category' => 'innkeeper',
'region' => '238',
'place' => '952',
'quarter' => '13240',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Birjand',
'title_category' => 'innkeeper',
'region' => '238',
'place' => '952',
'quarter' => '13241',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Birjand',
'title_category' => 'innkeeper',
'region' => '238',
'place' => '952',
'quarter' => '13242',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kerman',
'title_category' => 'innkeeper',
'region' => '239',
'place' => '953',
'quarter' => '13243',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kerman',
'title_category' => 'innkeeper',
'region' => '239',
'place' => '953',
'quarter' => '13244',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kerman',
'title_category' => 'innkeeper',
'region' => '239',
'place' => '953',
'quarter' => '13245',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kerman',
'title_category' => 'innkeeper',
'region' => '239',
'place' => '953',
'quarter' => '13246',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bam',
'title_category' => 'innkeeper',
'region' => '239',
'place' => '954',
'quarter' => '13247',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bam',
'title_category' => 'innkeeper',
'region' => '239',
'place' => '954',
'quarter' => '13248',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bam',
'title_category' => 'innkeeper',
'region' => '239',
'place' => '954',
'quarter' => '13249',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bam',
'title_category' => 'innkeeper',
'region' => '239',
'place' => '954',
'quarter' => '13250',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rafsanjan',
'title_category' => 'innkeeper',
'region' => '239',
'place' => '955',
'quarter' => '13251',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rafsanjan',
'title_category' => 'innkeeper',
'region' => '239',
'place' => '955',
'quarter' => '13252',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rafsanjan',
'title_category' => 'innkeeper',
'region' => '239',
'place' => '955',
'quarter' => '13253',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rafsanjan',
'title_category' => 'innkeeper',
'region' => '239',
'place' => '955',
'quarter' => '13254',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sirjan',
'title_category' => 'innkeeper',
'region' => '239',
'place' => '956',
'quarter' => '13255',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sirjan',
'title_category' => 'innkeeper',
'region' => '239',
'place' => '956',
'quarter' => '13256',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sirjan',
'title_category' => 'innkeeper',
'region' => '239',
'place' => '956',
'quarter' => '13257',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sirjan',
'title_category' => 'innkeeper',
'region' => '239',
'place' => '956',
'quarter' => '13258',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Shiraz',
'title_category' => 'innkeeper',
'region' => '240',
'place' => '957',
'quarter' => '13259',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Shiraz',
'title_category' => 'innkeeper',
'region' => '240',
'place' => '957',
'quarter' => '13260',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Shiraz',
'title_category' => 'innkeeper',
'region' => '240',
'place' => '957',
'quarter' => '13261',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Shiraz',
'title_category' => 'innkeeper',
'region' => '240',
'place' => '957',
'quarter' => '13262',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bushire',
'title_category' => 'innkeeper',
'region' => '240',
'place' => '958',
'quarter' => '13263',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bushire',
'title_category' => 'innkeeper',
'region' => '240',
'place' => '958',
'quarter' => '13264',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bushire',
'title_category' => 'innkeeper',
'region' => '240',
'place' => '958',
'quarter' => '13265',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bushire',
'title_category' => 'innkeeper',
'region' => '240',
'place' => '958',
'quarter' => '13266',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hormuz',
'title_category' => 'innkeeper',
'region' => '240',
'place' => '959',
'quarter' => '13267',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hormuz',
'title_category' => 'innkeeper',
'region' => '240',
'place' => '959',
'quarter' => '13268',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hormuz',
'title_category' => 'innkeeper',
'region' => '240',
'place' => '959',
'quarter' => '13269',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hormuz',
'title_category' => 'innkeeper',
'region' => '240',
'place' => '959',
'quarter' => '13270',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Yasuj',
'title_category' => 'innkeeper',
'region' => '240',
'place' => '960',
'quarter' => '13271',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Yasuj',
'title_category' => 'innkeeper',
'region' => '240',
'place' => '960',
'quarter' => '13272',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Yasuj',
'title_category' => 'innkeeper',
'region' => '240',
'place' => '960',
'quarter' => '13273',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Yasuj',
'title_category' => 'innkeeper',
'region' => '240',
'place' => '960',
'quarter' => '13274',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Isfahan',
'title_category' => 'innkeeper',
'region' => '241',
'place' => '961',
'quarter' => '13275',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Isfahan',
'title_category' => 'innkeeper',
'region' => '241',
'place' => '961',
'quarter' => '13276',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Isfahan',
'title_category' => 'innkeeper',
'region' => '241',
'place' => '961',
'quarter' => '13277',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Isfahan',
'title_category' => 'innkeeper',
'region' => '241',
'place' => '961',
'quarter' => '13278',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dezgord',
'title_category' => 'innkeeper',
'region' => '241',
'place' => '962',
'quarter' => '13279',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dezgord',
'title_category' => 'innkeeper',
'region' => '241',
'place' => '962',
'quarter' => '13280',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dezgord',
'title_category' => 'innkeeper',
'region' => '241',
'place' => '962',
'quarter' => '13281',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dezgord',
'title_category' => 'innkeeper',
'region' => '241',
'place' => '962',
'quarter' => '13282',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Yazd',
'title_category' => 'innkeeper',
'region' => '241',
'place' => '963',
'quarter' => '13283',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Yazd',
'title_category' => 'innkeeper',
'region' => '241',
'place' => '963',
'quarter' => '13284',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Yazd',
'title_category' => 'innkeeper',
'region' => '241',
'place' => '963',
'quarter' => '13285',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Yazd',
'title_category' => 'innkeeper',
'region' => '241',
'place' => '963',
'quarter' => '13286',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zavareh',
'title_category' => 'innkeeper',
'region' => '241',
'place' => '964',
'quarter' => '13287',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zavareh',
'title_category' => 'innkeeper',
'region' => '241',
'place' => '964',
'quarter' => '13288',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zavareh',
'title_category' => 'innkeeper',
'region' => '241',
'place' => '964',
'quarter' => '13289',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zavareh',
'title_category' => 'innkeeper',
'region' => '241',
'place' => '964',
'quarter' => '13290',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rhages',
'title_category' => 'innkeeper',
'region' => '242',
'place' => '965',
'quarter' => '13291',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rhages',
'title_category' => 'innkeeper',
'region' => '242',
'place' => '965',
'quarter' => '13292',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rhages',
'title_category' => 'innkeeper',
'region' => '242',
'place' => '965',
'quarter' => '13293',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rhages',
'title_category' => 'innkeeper',
'region' => '242',
'place' => '965',
'quarter' => '13294',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kashan',
'title_category' => 'innkeeper',
'region' => '242',
'place' => '966',
'quarter' => '13295',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kashan',
'title_category' => 'innkeeper',
'region' => '242',
'place' => '966',
'quarter' => '13296',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kashan',
'title_category' => 'innkeeper',
'region' => '242',
'place' => '966',
'quarter' => '13297',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kashan',
'title_category' => 'innkeeper',
'region' => '242',
'place' => '966',
'quarter' => '13298',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ghom',
'title_category' => 'innkeeper',
'region' => '242',
'place' => '967',
'quarter' => '13299',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ghom',
'title_category' => 'innkeeper',
'region' => '242',
'place' => '967',
'quarter' => '13300',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ghom',
'title_category' => 'innkeeper',
'region' => '242',
'place' => '967',
'quarter' => '13301',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ghom',
'title_category' => 'innkeeper',
'region' => '242',
'place' => '967',
'quarter' => '13302',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Qazvin',
'title_category' => 'innkeeper',
'region' => '242',
'place' => '968',
'quarter' => '13303',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Qazvin',
'title_category' => 'innkeeper',
'region' => '242',
'place' => '968',
'quarter' => '13304',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Qazvin',
'title_category' => 'innkeeper',
'region' => '242',
'place' => '968',
'quarter' => '13305',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Qazvin',
'title_category' => 'innkeeper',
'region' => '242',
'place' => '968',
'quarter' => '13306',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Astarabad',
'title_category' => 'innkeeper',
'region' => '243',
'place' => '969',
'quarter' => '13307',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Astarabad',
'title_category' => 'innkeeper',
'region' => '243',
'place' => '969',
'quarter' => '13308',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Astarabad',
'title_category' => 'innkeeper',
'region' => '243',
'place' => '969',
'quarter' => '13309',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Astarabad',
'title_category' => 'innkeeper',
'region' => '243',
'place' => '969',
'quarter' => '13310',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alamut',
'title_category' => 'innkeeper',
'region' => '243',
'place' => '970',
'quarter' => '13311',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alamut',
'title_category' => 'innkeeper',
'region' => '243',
'place' => '970',
'quarter' => '13312',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alamut',
'title_category' => 'innkeeper',
'region' => '243',
'place' => '970',
'quarter' => '13313',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alamut',
'title_category' => 'innkeeper',
'region' => '243',
'place' => '970',
'quarter' => '13314',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Amol',
'title_category' => 'innkeeper',
'region' => '243',
'place' => '971',
'quarter' => '13315',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Amol',
'title_category' => 'innkeeper',
'region' => '243',
'place' => '971',
'quarter' => '13316',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Amol',
'title_category' => 'innkeeper',
'region' => '243',
'place' => '971',
'quarter' => '13317',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Amol',
'title_category' => 'innkeeper',
'region' => '243',
'place' => '971',
'quarter' => '13318',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rasht',
'title_category' => 'innkeeper',
'region' => '243',
'place' => '972',
'quarter' => '13319',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rasht',
'title_category' => 'innkeeper',
'region' => '243',
'place' => '972',
'quarter' => '13320',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rasht',
'title_category' => 'innkeeper',
'region' => '243',
'place' => '972',
'quarter' => '13321',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rasht',
'title_category' => 'innkeeper',
'region' => '243',
'place' => '972',
'quarter' => '13322',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tabriz',
'title_category' => 'innkeeper',
'region' => '244',
'place' => '973',
'quarter' => '13323',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tabriz',
'title_category' => 'innkeeper',
'region' => '244',
'place' => '973',
'quarter' => '13324',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tabriz',
'title_category' => 'innkeeper',
'region' => '244',
'place' => '973',
'quarter' => '13325',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tabriz',
'title_category' => 'innkeeper',
'region' => '244',
'place' => '973',
'quarter' => '13326',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sofian',
'title_category' => 'innkeeper',
'region' => '244',
'place' => '974',
'quarter' => '13327',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sofian',
'title_category' => 'innkeeper',
'region' => '244',
'place' => '974',
'quarter' => '13328',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sofian',
'title_category' => 'innkeeper',
'region' => '244',
'place' => '974',
'quarter' => '13329',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Sofian',
'title_category' => 'innkeeper',
'region' => '244',
'place' => '974',
'quarter' => '13330',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zanjan',
'title_category' => 'innkeeper',
'region' => '244',
'place' => '975',
'quarter' => '13331',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zanjan',
'title_category' => 'innkeeper',
'region' => '244',
'place' => '975',
'quarter' => '13332',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zanjan',
'title_category' => 'innkeeper',
'region' => '244',
'place' => '975',
'quarter' => '13333',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zanjan',
'title_category' => 'innkeeper',
'region' => '244',
'place' => '975',
'quarter' => '13334',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ardabil',
'title_category' => 'innkeeper',
'region' => '244',
'place' => '976',
'quarter' => '13335',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ardabil',
'title_category' => 'innkeeper',
'region' => '244',
'place' => '976',
'quarter' => '13336',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ardabil',
'title_category' => 'innkeeper',
'region' => '244',
'place' => '976',
'quarter' => '13337',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ardabil',
'title_category' => 'innkeeper',
'region' => '244',
'place' => '976',
'quarter' => '13338',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hamadan',
'title_category' => 'innkeeper',
'region' => '245',
'place' => '977',
'quarter' => '13339',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hamadan',
'title_category' => 'innkeeper',
'region' => '245',
'place' => '977',
'quarter' => '13340',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hamadan',
'title_category' => 'innkeeper',
'region' => '245',
'place' => '977',
'quarter' => '13341',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hamadan',
'title_category' => 'innkeeper',
'region' => '245',
'place' => '977',
'quarter' => '13342',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kermanshah',
'title_category' => 'innkeeper',
'region' => '245',
'place' => '978',
'quarter' => '13343',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kermanshah',
'title_category' => 'innkeeper',
'region' => '245',
'place' => '978',
'quarter' => '13344',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kermanshah',
'title_category' => 'innkeeper',
'region' => '245',
'place' => '978',
'quarter' => '13345',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kermanshah',
'title_category' => 'innkeeper',
'region' => '245',
'place' => '978',
'quarter' => '13346',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Falak',
'title_category' => 'innkeeper',
'region' => '245',
'place' => '979',
'quarter' => '13347',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Falak',
'title_category' => 'innkeeper',
'region' => '245',
'place' => '979',
'quarter' => '13348',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Falak',
'title_category' => 'innkeeper',
'region' => '245',
'place' => '979',
'quarter' => '13349',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Falak',
'title_category' => 'innkeeper',
'region' => '245',
'place' => '979',
'quarter' => '13350',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bukan',
'title_category' => 'innkeeper',
'region' => '245',
'place' => '980',
'quarter' => '13351',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bukan',
'title_category' => 'innkeeper',
'region' => '245',
'place' => '980',
'quarter' => '13352',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bukan',
'title_category' => 'innkeeper',
'region' => '245',
'place' => '980',
'quarter' => '13353',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bukan',
'title_category' => 'innkeeper',
'region' => '245',
'place' => '980',
'quarter' => '13354',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hajr',
'title_category' => 'innkeeper',
'region' => '246',
'place' => '981',
'quarter' => '13355',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hajr',
'title_category' => 'innkeeper',
'region' => '246',
'place' => '981',
'quarter' => '13356',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hajr',
'title_category' => 'innkeeper',
'region' => '246',
'place' => '981',
'quarter' => '13357',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hajr',
'title_category' => 'innkeeper',
'region' => '246',
'place' => '981',
'quarter' => '13358',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Buraidah',
'title_category' => 'innkeeper',
'region' => '246',
'place' => '982',
'quarter' => '13359',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Buraidah',
'title_category' => 'innkeeper',
'region' => '246',
'place' => '982',
'quarter' => '13360',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Buraidah',
'title_category' => 'innkeeper',
'region' => '246',
'place' => '982',
'quarter' => '13361',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Buraidah',
'title_category' => 'innkeeper',
'region' => '246',
'place' => '982',
'quarter' => '13362',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hadjar',
'title_category' => 'innkeeper',
'region' => '246',
'place' => '983',
'quarter' => '13363',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hadjar',
'title_category' => 'innkeeper',
'region' => '246',
'place' => '983',
'quarter' => '13364',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hadjar',
'title_category' => 'innkeeper',
'region' => '246',
'place' => '983',
'quarter' => '13365',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hadjar',
'title_category' => 'innkeeper',
'region' => '246',
'place' => '983',
'quarter' => '13366',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hail',
'title_category' => 'innkeeper',
'region' => '246',
'place' => '984',
'quarter' => '13367',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hail',
'title_category' => 'innkeeper',
'region' => '246',
'place' => '984',
'quarter' => '13368',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hail',
'title_category' => 'innkeeper',
'region' => '246',
'place' => '984',
'quarter' => '13369',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hail',
'title_category' => 'innkeeper',
'region' => '246',
'place' => '984',
'quarter' => '13370',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mecca',
'title_category' => 'innkeeper',
'region' => '247',
'place' => '985',
'quarter' => '13371',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mecca',
'title_category' => 'innkeeper',
'region' => '247',
'place' => '985',
'quarter' => '13372',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mecca',
'title_category' => 'innkeeper',
'region' => '247',
'place' => '985',
'quarter' => '13373',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mecca',
'title_category' => 'innkeeper',
'region' => '247',
'place' => '985',
'quarter' => '13374',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Taif',
'title_category' => 'innkeeper',
'region' => '247',
'place' => '986',
'quarter' => '13375',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Taif',
'title_category' => 'innkeeper',
'region' => '247',
'place' => '986',
'quarter' => '13376',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Taif',
'title_category' => 'innkeeper',
'region' => '247',
'place' => '986',
'quarter' => '13377',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Taif',
'title_category' => 'innkeeper',
'region' => '247',
'place' => '986',
'quarter' => '13378',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jeddah',
'title_category' => 'innkeeper',
'region' => '247',
'place' => '987',
'quarter' => '13379',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jeddah',
'title_category' => 'innkeeper',
'region' => '247',
'place' => '987',
'quarter' => '13380',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jeddah',
'title_category' => 'innkeeper',
'region' => '247',
'place' => '987',
'quarter' => '13381',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jeddah',
'title_category' => 'innkeeper',
'region' => '247',
'place' => '987',
'quarter' => '13382',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Medina',
'title_category' => 'innkeeper',
'region' => '247',
'place' => '988',
'quarter' => '13383',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Medina',
'title_category' => 'innkeeper',
'region' => '247',
'place' => '988',
'quarter' => '13384',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Medina',
'title_category' => 'innkeeper',
'region' => '247',
'place' => '988',
'quarter' => '13385',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Medina',
'title_category' => 'innkeeper',
'region' => '247',
'place' => '988',
'quarter' => '13386',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dedan',
'title_category' => 'innkeeper',
'region' => '248',
'place' => '989',
'quarter' => '13387',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dedan',
'title_category' => 'innkeeper',
'region' => '248',
'place' => '989',
'quarter' => '13388',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dedan',
'title_category' => 'innkeeper',
'region' => '248',
'place' => '989',
'quarter' => '13389',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Dedan',
'title_category' => 'innkeeper',
'region' => '248',
'place' => '989',
'quarter' => '13390',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Eilat',
'title_category' => 'innkeeper',
'region' => '248',
'place' => '990',
'quarter' => '13391',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Eilat',
'title_category' => 'innkeeper',
'region' => '248',
'place' => '990',
'quarter' => '13392',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Eilat',
'title_category' => 'innkeeper',
'region' => '248',
'place' => '990',
'quarter' => '13393',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Eilat',
'title_category' => 'innkeeper',
'region' => '248',
'place' => '990',
'quarter' => '13394',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tayma',
'title_category' => 'innkeeper',
'region' => '248',
'place' => '991',
'quarter' => '13395',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tayma',
'title_category' => 'innkeeper',
'region' => '248',
'place' => '991',
'quarter' => '13396',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tayma',
'title_category' => 'innkeeper',
'region' => '248',
'place' => '991',
'quarter' => '13397',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tayma',
'title_category' => 'innkeeper',
'region' => '248',
'place' => '991',
'quarter' => '13398',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Maan',
'title_category' => 'innkeeper',
'region' => '248',
'place' => '992',
'quarter' => '13399',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Maan',
'title_category' => 'innkeeper',
'region' => '248',
'place' => '992',
'quarter' => '13400',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Maan',
'title_category' => 'innkeeper',
'region' => '248',
'place' => '992',
'quarter' => '13401',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Maan',
'title_category' => 'innkeeper',
'region' => '248',
'place' => '992',
'quarter' => '13402',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jerusalem',
'title_category' => 'innkeeper',
'region' => '249',
'place' => '993',
'quarter' => '13403',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jerusalem',
'title_category' => 'innkeeper',
'region' => '249',
'place' => '993',
'quarter' => '13404',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jerusalem',
'title_category' => 'innkeeper',
'region' => '249',
'place' => '993',
'quarter' => '13405',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jerusalem',
'title_category' => 'innkeeper',
'region' => '249',
'place' => '993',
'quarter' => '13406',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ascalon',
'title_category' => 'innkeeper',
'region' => '249',
'place' => '994',
'quarter' => '13407',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ascalon',
'title_category' => 'innkeeper',
'region' => '249',
'place' => '994',
'quarter' => '13408',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ascalon',
'title_category' => 'innkeeper',
'region' => '249',
'place' => '994',
'quarter' => '13409',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Ascalon',
'title_category' => 'innkeeper',
'region' => '249',
'place' => '994',
'quarter' => '13410',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hebron',
'title_category' => 'innkeeper',
'region' => '249',
'place' => '995',
'quarter' => '13411',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hebron',
'title_category' => 'innkeeper',
'region' => '249',
'place' => '995',
'quarter' => '13412',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hebron',
'title_category' => 'innkeeper',
'region' => '249',
'place' => '995',
'quarter' => '13413',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hebron',
'title_category' => 'innkeeper',
'region' => '249',
'place' => '995',
'quarter' => '13414',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jaffa',
'title_category' => 'innkeeper',
'region' => '249',
'place' => '996',
'quarter' => '13415',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jaffa',
'title_category' => 'innkeeper',
'region' => '249',
'place' => '996',
'quarter' => '13416',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jaffa',
'title_category' => 'innkeeper',
'region' => '249',
'place' => '996',
'quarter' => '13417',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jaffa',
'title_category' => 'innkeeper',
'region' => '249',
'place' => '996',
'quarter' => '13418',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Acre',
'title_category' => 'innkeeper',
'region' => '250',
'place' => '997',
'quarter' => '13419',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Acre',
'title_category' => 'innkeeper',
'region' => '250',
'place' => '997',
'quarter' => '13420',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Acre',
'title_category' => 'innkeeper',
'region' => '250',
'place' => '997',
'quarter' => '13421',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Acre',
'title_category' => 'innkeeper',
'region' => '250',
'place' => '997',
'quarter' => '13422',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nazareth',
'title_category' => 'innkeeper',
'region' => '250',
'place' => '998',
'quarter' => '13423',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nazareth',
'title_category' => 'innkeeper',
'region' => '250',
'place' => '998',
'quarter' => '13424',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nazareth',
'title_category' => 'innkeeper',
'region' => '250',
'place' => '998',
'quarter' => '13425',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nazareth',
'title_category' => 'innkeeper',
'region' => '250',
'place' => '998',
'quarter' => '13426',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nablus',
'title_category' => 'innkeeper',
'region' => '250',
'place' => '999',
'quarter' => '13427',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nablus',
'title_category' => 'innkeeper',
'region' => '250',
'place' => '999',
'quarter' => '13428',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nablus',
'title_category' => 'innkeeper',
'region' => '250',
'place' => '999',
'quarter' => '13429',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nablus',
'title_category' => 'innkeeper',
'region' => '250',
'place' => '999',
'quarter' => '13430',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tyre',
'title_category' => 'innkeeper',
'region' => '250',
'place' => '1000',
'quarter' => '13431',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tyre',
'title_category' => 'innkeeper',
'region' => '250',
'place' => '1000',
'quarter' => '13432',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tyre',
'title_category' => 'innkeeper',
'region' => '250',
'place' => '1000',
'quarter' => '13433',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tyre',
'title_category' => 'innkeeper',
'region' => '250',
'place' => '1000',
'quarter' => '13434',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bosra',
'title_category' => 'innkeeper',
'region' => '251',
'place' => '1001',
'quarter' => '13435',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bosra',
'title_category' => 'innkeeper',
'region' => '251',
'place' => '1001',
'quarter' => '13436',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bosra',
'title_category' => 'innkeeper',
'region' => '251',
'place' => '1001',
'quarter' => '13437',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bosra',
'title_category' => 'innkeeper',
'region' => '251',
'place' => '1001',
'quarter' => '13438',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Amman',
'title_category' => 'innkeeper',
'region' => '251',
'place' => '1002',
'quarter' => '13439',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Amman',
'title_category' => 'innkeeper',
'region' => '251',
'place' => '1002',
'quarter' => '13440',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Amman',
'title_category' => 'innkeeper',
'region' => '251',
'place' => '1002',
'quarter' => '13441',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Amman',
'title_category' => 'innkeeper',
'region' => '251',
'place' => '1002',
'quarter' => '13442',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Irbid',
'title_category' => 'innkeeper',
'region' => '251',
'place' => '1003',
'quarter' => '13443',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Irbid',
'title_category' => 'innkeeper',
'region' => '251',
'place' => '1003',
'quarter' => '13444',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Irbid',
'title_category' => 'innkeeper',
'region' => '251',
'place' => '1003',
'quarter' => '13445',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Irbid',
'title_category' => 'innkeeper',
'region' => '251',
'place' => '1003',
'quarter' => '13446',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Salkhad',
'title_category' => 'innkeeper',
'region' => '251',
'place' => '1004',
'quarter' => '13447',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Salkhad',
'title_category' => 'innkeeper',
'region' => '251',
'place' => '1004',
'quarter' => '13448',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Salkhad',
'title_category' => 'innkeeper',
'region' => '251',
'place' => '1004',
'quarter' => '13449',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Salkhad',
'title_category' => 'innkeeper',
'region' => '251',
'place' => '1004',
'quarter' => '13450',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Damascus',
'title_category' => 'innkeeper',
'region' => '252',
'place' => '1005',
'quarter' => '13451',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Damascus',
'title_category' => 'innkeeper',
'region' => '252',
'place' => '1005',
'quarter' => '13452',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Damascus',
'title_category' => 'innkeeper',
'region' => '252',
'place' => '1005',
'quarter' => '13453',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Damascus',
'title_category' => 'innkeeper',
'region' => '252',
'place' => '1005',
'quarter' => '13454',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kasr al Gharbi',
'title_category' => 'innkeeper',
'region' => '252',
'place' => '1006',
'quarter' => '13455',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kasr al Gharbi',
'title_category' => 'innkeeper',
'region' => '252',
'place' => '1006',
'quarter' => '13456',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kasr al Gharbi',
'title_category' => 'innkeeper',
'region' => '252',
'place' => '1006',
'quarter' => '13457',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kasr al Gharbi',
'title_category' => 'innkeeper',
'region' => '252',
'place' => '1006',
'quarter' => '13458',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Palmyra',
'title_category' => 'innkeeper',
'region' => '252',
'place' => '1007',
'quarter' => '13459',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Palmyra',
'title_category' => 'innkeeper',
'region' => '252',
'place' => '1007',
'quarter' => '13460',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Palmyra',
'title_category' => 'innkeeper',
'region' => '252',
'place' => '1007',
'quarter' => '13461',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Palmyra',
'title_category' => 'innkeeper',
'region' => '252',
'place' => '1007',
'quarter' => '13462',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nabek',
'title_category' => 'innkeeper',
'region' => '252',
'place' => '1008',
'quarter' => '13463',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nabek',
'title_category' => 'innkeeper',
'region' => '252',
'place' => '1008',
'quarter' => '13464',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nabek',
'title_category' => 'innkeeper',
'region' => '252',
'place' => '1008',
'quarter' => '13465',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Nabek',
'title_category' => 'innkeeper',
'region' => '252',
'place' => '1008',
'quarter' => '13466',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Homs',
'title_category' => 'innkeeper',
'region' => '253',
'place' => '1009',
'quarter' => '13467',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Homs',
'title_category' => 'innkeeper',
'region' => '253',
'place' => '1009',
'quarter' => '13468',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Homs',
'title_category' => 'innkeeper',
'region' => '253',
'place' => '1009',
'quarter' => '13469',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Homs',
'title_category' => 'innkeeper',
'region' => '253',
'place' => '1009',
'quarter' => '13470',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Qusayr',
'title_category' => 'innkeeper',
'region' => '253',
'place' => '1010',
'quarter' => '13471',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Qusayr',
'title_category' => 'innkeeper',
'region' => '253',
'place' => '1010',
'quarter' => '13472',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Qusayr',
'title_category' => 'innkeeper',
'region' => '253',
'place' => '1010',
'quarter' => '13473',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Qusayr',
'title_category' => 'innkeeper',
'region' => '253',
'place' => '1010',
'quarter' => '13474',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Salamiyah',
'title_category' => 'innkeeper',
'region' => '253',
'place' => '1011',
'quarter' => '13475',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Salamiyah',
'title_category' => 'innkeeper',
'region' => '253',
'place' => '1011',
'quarter' => '13476',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Salamiyah',
'title_category' => 'innkeeper',
'region' => '253',
'place' => '1011',
'quarter' => '13477',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Salamiyah',
'title_category' => 'innkeeper',
'region' => '253',
'place' => '1011',
'quarter' => '13478',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hama',
'title_category' => 'innkeeper',
'region' => '253',
'place' => '1012',
'quarter' => '13479',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hama',
'title_category' => 'innkeeper',
'region' => '253',
'place' => '1012',
'quarter' => '13480',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hama',
'title_category' => 'innkeeper',
'region' => '253',
'place' => '1012',
'quarter' => '13481',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Hama',
'title_category' => 'innkeeper',
'region' => '253',
'place' => '1012',
'quarter' => '13482',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tripoli',
'title_category' => 'innkeeper',
'region' => '254',
'place' => '1013',
'quarter' => '13483',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tripoli',
'title_category' => 'innkeeper',
'region' => '254',
'place' => '1013',
'quarter' => '13484',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tripoli',
'title_category' => 'innkeeper',
'region' => '254',
'place' => '1013',
'quarter' => '13485',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tripoli',
'title_category' => 'innkeeper',
'region' => '254',
'place' => '1013',
'quarter' => '13486',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tartous',
'title_category' => 'innkeeper',
'region' => '254',
'place' => '1014',
'quarter' => '13487',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tartous',
'title_category' => 'innkeeper',
'region' => '254',
'place' => '1014',
'quarter' => '13488',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tartous',
'title_category' => 'innkeeper',
'region' => '254',
'place' => '1014',
'quarter' => '13489',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tartous',
'title_category' => 'innkeeper',
'region' => '254',
'place' => '1014',
'quarter' => '13490',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Beirut',
'title_category' => 'innkeeper',
'region' => '254',
'place' => '1015',
'quarter' => '13491',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Beirut',
'title_category' => 'innkeeper',
'region' => '254',
'place' => '1015',
'quarter' => '13492',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Beirut',
'title_category' => 'innkeeper',
'region' => '254',
'place' => '1015',
'quarter' => '13493',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Beirut',
'title_category' => 'innkeeper',
'region' => '254',
'place' => '1015',
'quarter' => '13494',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Margat',
'title_category' => 'innkeeper',
'region' => '254',
'place' => '1016',
'quarter' => '13495',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Margat',
'title_category' => 'innkeeper',
'region' => '254',
'place' => '1016',
'quarter' => '13496',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Margat',
'title_category' => 'innkeeper',
'region' => '254',
'place' => '1016',
'quarter' => '13497',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Margat',
'title_category' => 'innkeeper',
'region' => '254',
'place' => '1016',
'quarter' => '13498',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Antioch',
'title_category' => 'innkeeper',
'region' => '255',
'place' => '1017',
'quarter' => '13499',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Antioch',
'title_category' => 'innkeeper',
'region' => '255',
'place' => '1017',
'quarter' => '13500',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Antioch',
'title_category' => 'innkeeper',
'region' => '255',
'place' => '1017',
'quarter' => '13501',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Antioch',
'title_category' => 'innkeeper',
'region' => '255',
'place' => '1017',
'quarter' => '13502',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alexandretta',
'title_category' => 'innkeeper',
'region' => '255',
'place' => '1018',
'quarter' => '13503',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alexandretta',
'title_category' => 'innkeeper',
'region' => '255',
'place' => '1018',
'quarter' => '13504',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alexandretta',
'title_category' => 'innkeeper',
'region' => '255',
'place' => '1018',
'quarter' => '13505',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Alexandretta',
'title_category' => 'innkeeper',
'region' => '255',
'place' => '1018',
'quarter' => '13506',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Idlib',
'title_category' => 'innkeeper',
'region' => '255',
'place' => '1019',
'quarter' => '13507',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Idlib',
'title_category' => 'innkeeper',
'region' => '255',
'place' => '1019',
'quarter' => '13508',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Idlib',
'title_category' => 'innkeeper',
'region' => '255',
'place' => '1019',
'quarter' => '13509',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Idlib',
'title_category' => 'innkeeper',
'region' => '255',
'place' => '1019',
'quarter' => '13510',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Afrin',
'title_category' => 'innkeeper',
'region' => '255',
'place' => '1020',
'quarter' => '13511',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Afrin',
'title_category' => 'innkeeper',
'region' => '255',
'place' => '1020',
'quarter' => '13512',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Afrin',
'title_category' => 'innkeeper',
'region' => '255',
'place' => '1020',
'quarter' => '13513',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Afrin',
'title_category' => 'innkeeper',
'region' => '255',
'place' => '1020',
'quarter' => '13514',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aleppo',
'title_category' => 'innkeeper',
'region' => '256',
'place' => '1021',
'quarter' => '13515',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aleppo',
'title_category' => 'innkeeper',
'region' => '256',
'place' => '1021',
'quarter' => '13516',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aleppo',
'title_category' => 'innkeeper',
'region' => '256',
'place' => '1021',
'quarter' => '13517',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Aleppo',
'title_category' => 'innkeeper',
'region' => '256',
'place' => '1021',
'quarter' => '13518',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Manbij',
'title_category' => 'innkeeper',
'region' => '256',
'place' => '1022',
'quarter' => '13519',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Manbij',
'title_category' => 'innkeeper',
'region' => '256',
'place' => '1022',
'quarter' => '13520',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Manbij',
'title_category' => 'innkeeper',
'region' => '256',
'place' => '1022',
'quarter' => '13521',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Manbij',
'title_category' => 'innkeeper',
'region' => '256',
'place' => '1022',
'quarter' => '13522',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bab',
'title_category' => 'innkeeper',
'region' => '256',
'place' => '1023',
'quarter' => '13523',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bab',
'title_category' => 'innkeeper',
'region' => '256',
'place' => '1023',
'quarter' => '13524',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bab',
'title_category' => 'innkeeper',
'region' => '256',
'place' => '1023',
'quarter' => '13525',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Bab',
'title_category' => 'innkeeper',
'region' => '256',
'place' => '1023',
'quarter' => '13526',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Safira',
'title_category' => 'innkeeper',
'region' => '256',
'place' => '1024',
'quarter' => '13527',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Safira',
'title_category' => 'innkeeper',
'region' => '256',
'place' => '1024',
'quarter' => '13528',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Safira',
'title_category' => 'innkeeper',
'region' => '256',
'place' => '1024',
'quarter' => '13529',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Safira',
'title_category' => 'innkeeper',
'region' => '256',
'place' => '1024',
'quarter' => '13530',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Raqqa',
'title_category' => 'innkeeper',
'region' => '257',
'place' => '1025',
'quarter' => '13531',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Raqqa',
'title_category' => 'innkeeper',
'region' => '257',
'place' => '1025',
'quarter' => '13532',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Raqqa',
'title_category' => 'innkeeper',
'region' => '257',
'place' => '1025',
'quarter' => '13533',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Raqqa',
'title_category' => 'innkeeper',
'region' => '257',
'place' => '1025',
'quarter' => '13534',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jabar',
'title_category' => 'innkeeper',
'region' => '257',
'place' => '1026',
'quarter' => '13535',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jabar',
'title_category' => 'innkeeper',
'region' => '257',
'place' => '1026',
'quarter' => '13536',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jabar',
'title_category' => 'innkeeper',
'region' => '257',
'place' => '1026',
'quarter' => '13537',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Jabar',
'title_category' => 'innkeeper',
'region' => '257',
'place' => '1026',
'quarter' => '13538',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rhesaina',
'title_category' => 'innkeeper',
'region' => '257',
'place' => '1027',
'quarter' => '13539',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rhesaina',
'title_category' => 'innkeeper',
'region' => '257',
'place' => '1027',
'quarter' => '13540',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rhesaina',
'title_category' => 'innkeeper',
'region' => '257',
'place' => '1027',
'quarter' => '13541',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Rhesaina',
'title_category' => 'innkeeper',
'region' => '257',
'place' => '1027',
'quarter' => '13542',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zor',
'title_category' => 'innkeeper',
'region' => '257',
'place' => '1028',
'quarter' => '13543',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zor',
'title_category' => 'innkeeper',
'region' => '257',
'place' => '1028',
'quarter' => '13544',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zor',
'title_category' => 'innkeeper',
'region' => '257',
'place' => '1028',
'quarter' => '13545',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Zor',
'title_category' => 'innkeeper',
'region' => '257',
'place' => '1028',
'quarter' => '13546',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Erbil',
'title_category' => 'innkeeper',
'region' => '258',
'place' => '1029',
'quarter' => '13547',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Erbil',
'title_category' => 'innkeeper',
'region' => '258',
'place' => '1029',
'quarter' => '13548',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Erbil',
'title_category' => 'innkeeper',
'region' => '258',
'place' => '1029',
'quarter' => '13549',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Erbil',
'title_category' => 'innkeeper',
'region' => '258',
'place' => '1029',
'quarter' => '13550',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mosul',
'title_category' => 'innkeeper',
'region' => '258',
'place' => '1030',
'quarter' => '13551',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mosul',
'title_category' => 'innkeeper',
'region' => '258',
'place' => '1030',
'quarter' => '13552',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mosul',
'title_category' => 'innkeeper',
'region' => '258',
'place' => '1030',
'quarter' => '13553',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Mosul',
'title_category' => 'innkeeper',
'region' => '258',
'place' => '1030',
'quarter' => '13554',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kirkuk',
'title_category' => 'innkeeper',
'region' => '258',
'place' => '1031',
'quarter' => '13555',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kirkuk',
'title_category' => 'innkeeper',
'region' => '258',
'place' => '1031',
'quarter' => '13556',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kirkuk',
'title_category' => 'innkeeper',
'region' => '258',
'place' => '1031',
'quarter' => '13557',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kirkuk',
'title_category' => 'innkeeper',
'region' => '258',
'place' => '1031',
'quarter' => '13558',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Telafer',
'title_category' => 'innkeeper',
'region' => '258',
'place' => '1032',
'quarter' => '13559',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Telafer',
'title_category' => 'innkeeper',
'region' => '258',
'place' => '1032',
'quarter' => '13560',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Telafer',
'title_category' => 'innkeeper',
'region' => '258',
'place' => '1032',
'quarter' => '13561',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Telafer',
'title_category' => 'innkeeper',
'region' => '258',
'place' => '1032',
'quarter' => '13562',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Baghdad',
'title_category' => 'innkeeper',
'region' => '259',
'place' => '1033',
'quarter' => '13563',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Baghdad',
'title_category' => 'innkeeper',
'region' => '259',
'place' => '1033',
'quarter' => '13564',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Baghdad',
'title_category' => 'innkeeper',
'region' => '259',
'place' => '1033',
'quarter' => '13565',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Baghdad',
'title_category' => 'innkeeper',
'region' => '259',
'place' => '1033',
'quarter' => '13566',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tikrit',
'title_category' => 'innkeeper',
'region' => '259',
'place' => '1034',
'quarter' => '13567',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tikrit',
'title_category' => 'innkeeper',
'region' => '259',
'place' => '1034',
'quarter' => '13568',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tikrit',
'title_category' => 'innkeeper',
'region' => '259',
'place' => '1034',
'quarter' => '13569',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Tikrit',
'title_category' => 'innkeeper',
'region' => '259',
'place' => '1034',
'quarter' => '13570',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Anbar',
'title_category' => 'innkeeper',
'region' => '259',
'place' => '1035',
'quarter' => '13571',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Anbar',
'title_category' => 'innkeeper',
'region' => '259',
'place' => '1035',
'quarter' => '13572',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Anbar',
'title_category' => 'innkeeper',
'region' => '259',
'place' => '1035',
'quarter' => '13573',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Anbar',
'title_category' => 'innkeeper',
'region' => '259',
'place' => '1035',
'quarter' => '13574',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Samarra',
'title_category' => 'innkeeper',
'region' => '259',
'place' => '1036',
'quarter' => '13575',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Samarra',
'title_category' => 'innkeeper',
'region' => '259',
'place' => '1036',
'quarter' => '13576',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Samarra',
'title_category' => 'innkeeper',
'region' => '259',
'place' => '1036',
'quarter' => '13577',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Samarra',
'title_category' => 'innkeeper',
'region' => '259',
'place' => '1036',
'quarter' => '13578',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Samawah',
'title_category' => 'innkeeper',
'region' => '260',
'place' => '1037',
'quarter' => '13579',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Samawah',
'title_category' => 'innkeeper',
'region' => '260',
'place' => '1037',
'quarter' => '13580',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Samawah',
'title_category' => 'innkeeper',
'region' => '260',
'place' => '1037',
'quarter' => '13581',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Samawah',
'title_category' => 'innkeeper',
'region' => '260',
'place' => '1037',
'quarter' => '13582',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Karbala',
'title_category' => 'innkeeper',
'region' => '260',
'place' => '1038',
'quarter' => '13583',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Karbala',
'title_category' => 'innkeeper',
'region' => '260',
'place' => '1038',
'quarter' => '13584',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Karbala',
'title_category' => 'innkeeper',
'region' => '260',
'place' => '1038',
'quarter' => '13585',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Karbala',
'title_category' => 'innkeeper',
'region' => '260',
'place' => '1038',
'quarter' => '13586',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kufah',
'title_category' => 'innkeeper',
'region' => '260',
'place' => '1039',
'quarter' => '13587',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kufah',
'title_category' => 'innkeeper',
'region' => '260',
'place' => '1039',
'quarter' => '13588',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kufah',
'title_category' => 'innkeeper',
'region' => '260',
'place' => '1039',
'quarter' => '13589',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Kufah',
'title_category' => 'innkeeper',
'region' => '260',
'place' => '1039',
'quarter' => '13590',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Najaf',
'title_category' => 'innkeeper',
'region' => '260',
'place' => '1040',
'quarter' => '13591',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Najaf',
'title_category' => 'innkeeper',
'region' => '260',
'place' => '1040',
'quarter' => '13592',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Najaf',
'title_category' => 'innkeeper',
'region' => '260',
'place' => '1040',
'quarter' => '13593',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);
DB::table('titles')->insert([
'title_name' => 'Najaf',
'title_category' => 'innkeeper',
'region' => '260',
'place' => '1040',
'quarter' => '13594',
'religion' => '5',
'rank' => '4',
'career' => 'tavern_innkeeper'
]);

    }
}