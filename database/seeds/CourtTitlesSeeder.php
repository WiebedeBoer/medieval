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
		//cardinal prince archbishops
		DB::table('titles')->insert([
			'title_name' => 'Reims',
			'title_category' => 'cardinal',
			'region' => '33',
			'place' => '131',
			'quarter' => '17300',
			'religion' => '1',
			'rank' => '9',
			'career' => 'cardinal'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Besancon',
			'title_category' => 'cardinal',
			'region' => '46',
			'place' => '182',
			'quarter' => '17351',
			'religion' => '1',
			'rank' => '9',
			'career' => 'cardinal'
		]);
		//cardinal archbishops
		DB::table('titles')->insert([
			'title_name' => 'Ravenna',
			'title_category' => 'cardinal',
			'region' => '119',
			'place' => '473',
			'quarter' => '17642',
			'religion' => '1',
			'rank' => '5',
			'career' => 'cardinal'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Benevento',
			'title_category' => 'cardinal',
			'region' => '130',
			'place' => '517',
			'quarter' => '17686',
			'religion' => '1',
			'rank' => '5',
			'career' => 'cardinal'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Pisa',
			'title_category' => 'cardinal',
			'region' => '126',
			'place' => '501',
			'quarter' => '17670',
			'religion' => '1',
			'rank' => '5',
			'career' => 'cardinal'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Milan',
			'title_category' => 'cardinal',
			'region' => '115',
			'place' => '457',
			'quarter' => '17626',
			'religion' => '1',
			'rank' => '5',
			'career' => 'cardinal'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Naples',
			'title_category' => 'cardinal',
			'region' => '127',
			'place' => '505',
			'quarter' => '17674',
			'religion' => '1',
			'rank' => '5',
			'career' => 'cardinal'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Brindisi',
			'title_category' => 'cardinal',
			'region' => '128',
			'place' => '512',
			'quarter' => '17681',
			'religion' => '1',
			'rank' => '5',
			'career' => 'cardinal'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Genoa',
			'title_category' => 'cardinal',
			'region' => '117',
			'place' => '465',
			'quarter' => '17634',
			'religion' => '1',
			'rank' => '5',
			'career' => 'cardinal'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Lyon',
			'title_category' => 'cardinal',
			'region' => '45',
			'place' => '179',
			'quarter' => '17348',
			'religion' => '1',
			'rank' => '5',
			'career' => 'cardinal'
			]);
		DB::table('titles')->insert([
			'title_name' => 'Bourges',
			'title_category' => 'cardinal',
			'region' => '38',
			'place' => '149',
			'quarter' => '17318',
			'religion' => '1',
			'rank' => '5',
			'career' => 'cardinal'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Canterbury',
			'title_category' => 'cardinal',
			'region' => '48',
			'place' => '189',
			'quarter' => '17358',
			'religion' => '1',
			'rank' => '5',
			'career' => 'cardinal'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Esztergom',
			'title_category' => 'cardinal',
			'region' => '172',
			'place' => '685',
			'quarter' => '17854',
			'religion' => '1',
			'rank' => '5',
			'career' => 'cardinal'
		]);
		//cardinal bishops
		DB::table('titles')->insert([
			'title_name' => 'Aquila',
			'title_category' => 'cardinal',
			'region' => '124',
			'place' => '494',
			'quarter' => '17663',
			'religion' => '1',
			'rank' => '5',
			'career' => 'cardinal'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Tivoli',
			'title_category' => 'cardinal',
			'region' => '125',
			'place' => '499',
			'quarter' => '17668',
			'religion' => '1',
			'rank' => '5',
			'career' => 'cardinal'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Verona',
			'title_category' => 'cardinal',
			'region' => '116',
			'place' => '461',
			'quarter' => '17630',
			'religion' => '1',
			'rank' => '5',
			'career' => 'cardinal'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Bologna',
			'title_category' => 'cardinal',
			'region' => '120',
			'place' => '480',
			'quarter' => '17649',
			'religion' => '1',
			'rank' => '5',
			'career' => 'cardinal'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Parma',
			'title_category' => 'cardinal',
			'region' => '120',
			'place' => '478',
			'quarter' => '17647',
			'religion' => '1',
			'rank' => '5',
			'career' => 'cardinal'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Rimini',
			'title_category' => 'cardinal',
			'region' => '119',
			'place' => '476',
			'quarter' => '17645',
			'religion' => '1',
			'rank' => '5',
			'career' => 'cardinal'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Brescia',
			'title_category' => 'cardinal',
			'region' => '115',
			'place' => '458',
			'quarter' => '17627',
			'religion' => '1',
			'rank' => '5',
			'career' => 'cardinal'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Lucca',
			'title_category' => 'cardinal',
			'region' => '126',
			'place' => '503',
			'quarter' => '17672',
			'religion' => '1',
			'rank' => '5',
			'career' => 'cardinal'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Florence',
			'title_category' => 'cardinal',
			'region' => '123',
			'place' => '489',
			'quarter' => '17658',
			'religion' => '1',
			'rank' => '5',
			'career' => 'cardinal'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Pavia',
			'title_category' => 'cardinal',
			'region' => '115',
			'place' => '459',
			'quarter' => '17628',
			'religion' => '1',
			'rank' => '5',
			'career' => 'cardinal'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Porto',
			'title_category' => 'cardinal',
			'region' => '102',
			'place' => '405',
			'quarter' => '17574',
			'religion' => '1',
			'rank' => '5',
			'career' => 'cardinal'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Narbonne',
			'title_category' => 'cardinal',
			'region' => '42',
			'place' => '167',
			'quarter' => '17336',
			'religion' => '1',
			'rank' => '5',
			'career' => 'cardinal'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Vienne',
			'title_category' => 'cardinal',
			'region' => '45',
			'place' => '178',
			'quarter' => '17347',
			'religion' => '1',
			'rank' => '5',
			'career' => 'cardinal'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Avignon',
			'title_category' => 'cardinal',
			'region' => '41',
			'place' => '164',
			'quarter' => '17333',
			'religion' => '1',
			'rank' => '5',
			'career' => 'cardinal'
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

		//catholic grand officers
		DB::table('titles')->insert([
			'title_name' => 'Grand Huntsman of Brabant',
			'title_category' => 'gamekeeper',
			'region' => '24',
			'place' => '93',
			'quarter' => '18581',
			'religion' => '1',
			'rank' => '4',
			'career' => 'grand_officer'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Grand Pantner of Flanders',
			'title_category' => 'pantner',
			'region' => '25',
			'place' => '98',
			'quarter' => '18586',
			'religion' => '1',
			'rank' => '4',
			'career' => 'grand_officer'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Grand Huntsman of France',
			'title_category' => 'gamekeeper',
			'region' => '29',
			'place' => '113',
			'quarter' => '18601',
			'religion' => '1',
			'rank' => '4',
			'career' => 'grand_officer'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Grand Pantner of France',
			'title_category' => 'pantner',
			'region' => '29',
			'place' => '113',
			'quarter' => '18601',
			'religion' => '1',
			'rank' => '4',
			'career' => 'grand_officer'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Grand Butler of France',
			'title_category' => 'butler',
			'region' => '29',
			'place' => '113',
			'quarter' => '18601',
			'religion' => '1',
			'rank' => '4',
			'career' => 'grand_officer'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Grand Butler of Castile',
			'title_category' => 'butler',
			'region' => '98',
			'place' => '389',
			'quarter' => '18877',
			'religion' => '1',
			'rank' => '4',
			'career' => 'grand_officer'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Grand Butler of Leon',
			'title_category' => 'butler',
			'region' => '96',
			'place' => '381',
			'quarter' => '18869',
			'religion' => '1',
			'rank' => '4',
			'career' => 'grand_officer'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Grand Pantner of Scotland',
			'title_category' => 'pantner',
			'region' => '73',
			'place' => '289',
			'quarter' => '18777',
			'religion' => '1',
			'rank' => '4',
			'career' => 'grand_officer'
		]);
		DB::table('titles')->insert([
			'title_name' => 'High Treasurer of England',
			'title_category' => 'treasurer',
			'region' => '47',
			'place' => '185',
			'quarter' => '18673',
			'religion' => '1',
			'rank' => '4',
			'career' => 'grand_officer'
		]);
		DB::table('titles')->insert([
			'title_name' => 'High Constable of Aragon',
			'title_category' => 'constable',
			'region' => '89',
			'place' => '353',
			'quarter' => '18841',
			'religion' => '1',
			'rank' => '4',
			'career' => 'grand_officer'
		]);
		DB::table('titles')->insert([
			'title_name' => 'High Constable of Castile',
			'title_category' => 'constable',
			'region' => '98',
			'place' => '389',
			'quarter' => '18877',
			'religion' => '1',
			'rank' => '4',
			'career' => 'grand_officer'
		]);
		DB::table('titles')->insert([
			'title_name' => 'High Constable of Leon',
			'title_category' => 'constable',
			'region' => '96',
			'place' => '381',
			'quarter' => '18869',
			'religion' => '1',
			'rank' => '4',
			'career' => 'grand_officer'
		]);
		DB::table('titles')->insert([
			'title_name' => 'High Constable of England',
			'title_category' => 'constable',
			'region' => '47',
			'place' => '185',
			'quarter' => '18673',
			'religion' => '1',
			'rank' => '4',
			'career' => 'grand_officer'
		]);
		DB::table('titles')->insert([
			'title_name' => 'High Constable of France',
			'title_category' => 'constable',
			'region' => '29',
			'place' => '113',
			'quarter' => '18601',
			'religion' => '1',
			'rank' => '4',
			'career' => 'grand_officer'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Bannerbearer of Aragon',
			'title_category' => 'bannerbearer',
			'region' => '89',
			'place' => '353',
			'quarter' => '18841',
			'religion' => '1',
			'rank' => '4',
			'career' => 'grand_officer'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Bannerbearer of Castile',
			'title_category' => 'bannerbearer',
			'region' => '98',
			'place' => '389',
			'quarter' => '18877',
			'religion' => '1',
			'rank' => '4',
			'career' => 'grand_officer'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Bannerbearer of Leon',
			'title_category' => 'bannerbearer',
			'region' => '96',
			'place' => '381',
			'quarter' => '18869',
			'religion' => '1',
			'rank' => '4',
			'career' => 'grand_officer'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Bannerbearer of Navarre',
			'title_category' => 'bannerbearer',
			'region' => '87',
			'place' => '345',
			'quarter' => '18833',
			'religion' => '1',
			'rank' => '4',
			'career' => 'grand_officer'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Bannerbearer of Portugal',
			'title_category' => 'bannerbearer',
			'region' => '101',
			'place' => '401',
			'quarter' => '18889',
			'religion' => '1',
			'rank' => '4',
			'career' => 'grand_officer'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Justiciar of England',
			'title_category' => 'justiciar',
			'region' => '47',
			'place' => '185',
			'quarter' => '18673',
			'religion' => '1',
			'rank' => '4',
			'career' => 'grand_officer'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Justiciar of Scotland',
			'title_category' => 'justiciar',
			'region' => '73',
			'place' => '289',
			'quarter' => '18777',
			'religion' => '1',
			'rank' => '4',
			'career' => 'grand_officer'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Justiciar of Sicily',
			'title_category' => 'justiciar',
			'region' => '133',
			'place' => '529',
			'quarter' => '19017',
			'religion' => '1',
			'rank' => '4',
			'career' => 'grand_officer'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Justiciar of Sweden',
			'title_category' => 'justiciar',
			'region' => '65',
			'place' => '257',
			'quarter' => '18745',
			'religion' => '1',
			'rank' => '4',
			'career' => 'grand_officer'
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
		//georgian and armenian

    }
}
