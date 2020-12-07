<?php

use Illuminate\Database\Seeder;

class NobleTitlesSeeder extends Seeder
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

	DB::table('titles')->insert([
	'title_name' => 'Bremen',
	'title_category' => 'knight',
	'region' => '1',
	'place' => '1',
	'quarter' => '18489',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Oldenburg',
	'title_category' => 'count',
	'region' => '1',
	'place' => '2',
	'quarter' => '18490',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hamburg',
	'title_category' => 'knight',
	'region' => '1',
	'place' => '3',
	'quarter' => '18491',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Corvey',
	'title_category' => 'knight',
	'region' => '1',
	'place' => '4',
	'quarter' => '18492',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Meissen',
	'title_category' => 'margrave',
	'region' => '2',
	'place' => '5',
	'quarter' => '18493',
	'religion' => '1',
	'rank' => '8',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dresden',
	'title_category' => 'margrave',
	'region' => '2',
	'place' => '6',
	'quarter' => '18494',
	'religion' => '1',
	'rank' => '8',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Erfurt',
	'title_category' => 'margrave',
	'region' => '2',
	'place' => '7',
	'quarter' => '18495',
	'religion' => '1',
	'rank' => '8',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chemnitz',
	'title_category' => 'baron',
	'region' => '2',
	'place' => '8',
	'quarter' => '18496',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Magdeburg',
	'title_category' => 'knight',
	'region' => '3',
	'place' => '9',
	'quarter' => '18497',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Merseburg',
	'title_category' => 'knight',
	'region' => '3',
	'place' => '10',
	'quarter' => '18498',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Halberstadt',
	'title_category' => 'knight',
	'region' => '3',
	'place' => '11',
	'quarter' => '18499',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gernrode',
	'title_category' => 'knight',
	'region' => '3',
	'place' => '12',
	'quarter' => '18500',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Schwerin',
	'title_category' => 'duke',
	'region' => '4',
	'place' => '13',
	'quarter' => '18501',
	'religion' => '1',
	'rank' => '9',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rostock',
	'title_category' => 'lord',
	'region' => '4',
	'place' => '14',
	'quarter' => '18502',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lubeck',
	'title_category' => 'knight',
	'region' => '4',
	'place' => '15',
	'quarter' => '18503',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Broda',
	'title_category' => 'knight',
	'region' => '4',
	'place' => '16',
	'quarter' => '18504',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Brandenburg',
	'title_category' => 'duke',
	'region' => '5',
	'place' => '17',
	'quarter' => '18505',
	'religion' => '1',
	'rank' => '9',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Salzwedel',
	'title_category' => 'margrave',
	'region' => '5',
	'place' => '18',
	'quarter' => '18506',
	'religion' => '1',
	'rank' => '8',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Havelberg',
	'title_category' => 'knight',
	'region' => '5',
	'place' => '19',
	'quarter' => '18507',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lindow',
	'title_category' => 'knight',
	'region' => '5',
	'place' => '20',
	'quarter' => '18508',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Stettin',
	'title_category' => 'knight',
	'region' => '6',
	'place' => '21',
	'quarter' => '18509',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Greifenberg',
	'title_category' => 'baron',
	'region' => '6',
	'place' => '22',
	'quarter' => '18510',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kolberg',
	'title_category' => 'knight',
	'region' => '6',
	'place' => '23',
	'quarter' => '18511',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Greifswald',
	'title_category' => 'knight',
	'region' => '6',
	'place' => '24',
	'quarter' => '18512',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Munster',
	'title_category' => 'knight',
	'region' => '7',
	'place' => '25',
	'quarter' => '18513',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bielefeld',
	'title_category' => 'count',
	'region' => '7',
	'place' => '26',
	'quarter' => '18514',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Osnabruck',
	'title_category' => 'knight',
	'region' => '7',
	'place' => '27',
	'quarter' => '18515',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Paderborn',
	'title_category' => 'knight',
	'region' => '7',
	'place' => '28',
	'quarter' => '18516',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Regensburg',
	'title_category' => 'duke',
	'region' => '8',
	'place' => '29',
	'quarter' => '18517',
	'religion' => '1',
	'rank' => '9',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Augsburg',
	'title_category' => 'knight',
	'region' => '8',
	'place' => '30',
	'quarter' => '18518',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Wurzburg',
	'title_category' => 'knight',
	'region' => '8',
	'place' => '31',
	'quarter' => '18519',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nuremberg',
	'title_category' => 'burgrave',
	'region' => '8',
	'place' => '32',
	'quarter' => '18520',
	'religion' => '1',
	'rank' => '6',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Salzburg',
	'title_category' => 'knight',
	'region' => '9',
	'place' => '33',
	'quarter' => '18521',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hohenwerfen',
	'title_category' => 'count',
	'region' => '9',
	'place' => '34',
	'quarter' => '18522',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hallstat',
	'title_category' => 'knight',
	'region' => '9',
	'place' => '35',
	'quarter' => '18523',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Berchtesgaden',
	'title_category' => 'knight',
	'region' => '9',
	'place' => '36',
	'quarter' => '18524',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vienna',
	'title_category' => 'duke',
	'region' => '10',
	'place' => '37',
	'quarter' => '18525',
	'religion' => '1',
	'rank' => '9',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Schaunberg',
	'title_category' => 'count',
	'region' => '10',
	'place' => '38',
	'quarter' => '18526',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sankt Polten',
	'title_category' => 'knight',
	'region' => '10',
	'place' => '39',
	'quarter' => '18527',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pressburg',
	'title_category' => 'count',
	'region' => '10',
	'place' => '40',
	'quarter' => '18528',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Graz',
	'title_category' => 'duke',
	'region' => '11',
	'place' => '41',
	'quarter' => '18529',
	'religion' => '1',
	'rank' => '9',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hohenwang',
	'title_category' => 'count',
	'region' => '11',
	'place' => '42',
	'quarter' => '18530',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Styraburg',
	'title_category' => 'margrave',
	'region' => '11',
	'place' => '43',
	'quarter' => '18531',
	'religion' => '1',
	'rank' => '8',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Seckau',
	'title_category' => 'knight',
	'region' => '11',
	'place' => '44',
	'quarter' => '18532',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Innsbruck',
	'title_category' => 'knight',
	'region' => '12',
	'place' => '45',
	'quarter' => '18533',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bozen',
	'title_category' => 'knight',
	'region' => '12',
	'place' => '46',
	'quarter' => '18534',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Trent',
	'title_category' => 'knight',
	'region' => '12',
	'place' => '47',
	'quarter' => '18535',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Brixen',
	'title_category' => 'knight',
	'region' => '12',
	'place' => '48',
	'quarter' => '18536',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ulm',
	'title_category' => 'knight',
	'region' => '13',
	'place' => '49',
	'quarter' => '18537',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hohenzollern',
	'title_category' => 'count',
	'region' => '13',
	'place' => '50',
	'quarter' => '18538',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Freiburg',
	'title_category' => 'count',
	'region' => '13',
	'place' => '51',
	'quarter' => '18539',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hohenstaufen',
	'title_category' => 'count',
	'region' => '13',
	'place' => '52',
	'quarter' => '18540',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bern',
	'title_category' => 'knight',
	'region' => '14',
	'place' => '53',
	'quarter' => '18541',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zurich',
	'title_category' => 'knight',
	'region' => '14',
	'place' => '54',
	'quarter' => '18542',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Basel',
	'title_category' => 'knight',
	'region' => '14',
	'place' => '55',
	'quarter' => '18543',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sankt Gallen',
	'title_category' => 'knight',
	'region' => '14',
	'place' => '56',
	'quarter' => '18544',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hagenau',
	'title_category' => 'count',
	'region' => '15',
	'place' => '57',
	'quarter' => '18545',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Colmar',
	'title_category' => 'knight',
	'region' => '15',
	'place' => '58',
	'quarter' => '18546',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Strassbourg',
	'title_category' => 'knight',
	'region' => '15',
	'place' => '59',
	'quarter' => '18547',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Wissembourg',
	'title_category' => 'knight',
	'region' => '15',
	'place' => '60',
	'quarter' => '18548',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Prague',
	'title_category' => 'lord',
	'region' => '16',
	'place' => '61',
	'quarter' => '18549',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Karlstein',
	'title_category' => 'burgrave',
	'region' => '16',
	'place' => '62',
	'quarter' => '18550',
	'religion' => '1',
	'rank' => '6',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pilsen',
	'title_category' => 'burgrave',
	'region' => '16',
	'place' => '63',
	'quarter' => '18551',
	'religion' => '1',
	'rank' => '6',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Plass',
	'title_category' => 'knight',
	'region' => '16',
	'place' => '64',
	'quarter' => '18552',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Brunn',
	'title_category' => 'margrave',
	'region' => '17',
	'place' => '65',
	'quarter' => '18553',
	'religion' => '1',
	'rank' => '8',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zlin',
	'title_category' => 'lord',
	'region' => '17',
	'place' => '66',
	'quarter' => '18554',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Olmutz',
	'title_category' => 'knight',
	'region' => '17',
	'place' => '67',
	'quarter' => '18555',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Trebitz',
	'title_category' => 'knight',
	'region' => '17',
	'place' => '68',
	'quarter' => '18556',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mainz',
	'title_category' => 'knight',
	'region' => '18',
	'place' => '69',
	'quarter' => '18557',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Heidelberg',
	'title_category' => 'knight',
	'region' => '18',
	'place' => '70',
	'quarter' => '18558',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Frankfurt',
	'title_category' => 'knight',
	'region' => '18',
	'place' => '71',
	'quarter' => '18559',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Fulda',
	'title_category' => 'knight',
	'region' => '18',
	'place' => '72',
	'quarter' => '18560',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cologne',
	'title_category' => 'knight',
	'region' => '19',
	'place' => '73',
	'quarter' => '18561',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aachen',
	'title_category' => 'lord',
	'region' => '19',
	'place' => '74',
	'quarter' => '18562',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Liege',
	'title_category' => 'knight',
	'region' => '19',
	'place' => '75',
	'quarter' => '18563',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Stavelot',
	'title_category' => 'knight',
	'region' => '19',
	'place' => '76',
	'quarter' => '18564',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Trier',
	'title_category' => 'knight',
	'region' => '20',
	'place' => '77',
	'quarter' => '18565',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Luxembourg',
	'title_category' => 'count',
	'region' => '20',
	'place' => '78',
	'quarter' => '18566',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Metz',
	'title_category' => 'knight',
	'region' => '20',
	'place' => '79',
	'quarter' => '18567',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pruem',
	'title_category' => 'knight',
	'region' => '20',
	'place' => '80',
	'quarter' => '18568',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Guelders',
	'title_category' => 'duke',
	'region' => '21',
	'place' => '81',
	'quarter' => '18569',
	'religion' => '1',
	'rank' => '9',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zutphen',
	'title_category' => 'count',
	'region' => '21',
	'place' => '82',
	'quarter' => '18570',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nimeguen',
	'title_category' => 'count',
	'region' => '21',
	'place' => '83',
	'quarter' => '18571',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Deventer',
	'title_category' => 'knight',
	'region' => '21',
	'place' => '84',
	'quarter' => '18572',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dorestad',
	'title_category' => 'lord',
	'region' => '22',
	'place' => '85',
	'quarter' => '18573',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gouda',
	'title_category' => 'lord',
	'region' => '22',
	'place' => '86',
	'quarter' => '18574',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Utrecht',
	'title_category' => 'knight',
	'region' => '22',
	'place' => '87',
	'quarter' => '18575',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Amsterdam',
	'title_category' => 'knight',
	'region' => '22',
	'place' => '88',
	'quarter' => '18576',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sneek',
	'title_category' => 'lord',
	'region' => '23',
	'place' => '89',
	'quarter' => '18577',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Emden',
	'title_category' => 'count',
	'region' => '23',
	'place' => '90',
	'quarter' => '18578',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Groningen',
	'title_category' => 'baron',
	'region' => '23',
	'place' => '91',
	'quarter' => '18579',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dokkum',
	'title_category' => 'lord',
	'region' => '23',
	'place' => '92',
	'quarter' => '18580',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Louvain',
	'title_category' => 'count',
	'region' => '24',
	'place' => '93',
	'quarter' => '18581',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Breda',
	'title_category' => 'burgrave',
	'region' => '24',
	'place' => '94',
	'quarter' => '18582',
	'religion' => '1',
	'rank' => '6',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Antwerp',
	'title_category' => 'burgrave',
	'region' => '24',
	'place' => '95',
	'quarter' => '18583',
	'religion' => '1',
	'rank' => '6',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Thorn',
	'title_category' => 'knight',
	'region' => '24',
	'place' => '96',
	'quarter' => '18584',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bruges',
	'title_category' => 'burgrave',
	'region' => '25',
	'place' => '97',
	'quarter' => '18585',
	'religion' => '1',
	'rank' => '6',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ghent',
	'title_category' => 'count',
	'region' => '25',
	'place' => '98',
	'quarter' => '18586',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cambrai',
	'title_category' => 'knight',
	'region' => '25',
	'place' => '99',
	'quarter' => '18587',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ypres',
	'title_category' => 'burgrave',
	'region' => '25',
	'place' => '100',
	'quarter' => '18588',
	'religion' => '1',
	'rank' => '6',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Klagenfurt',
	'title_category' => 'margrave',
	'region' => '26',
	'place' => '101',
	'quarter' => '18589',
	'religion' => '1',
	'rank' => '8',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Treffen',
	'title_category' => 'count',
	'region' => '26',
	'place' => '102',
	'quarter' => '18590',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gorizia',
	'title_category' => 'count',
	'region' => '26',
	'place' => '103',
	'quarter' => '18591',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Moosburg',
	'title_category' => 'knight',
	'region' => '26',
	'place' => '104',
	'quarter' => '18592',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Krainburg',
	'title_category' => 'margrave',
	'region' => '27',
	'place' => '105',
	'quarter' => '18593',
	'religion' => '1',
	'rank' => '8',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Heunburg',
	'title_category' => 'count',
	'region' => '27',
	'place' => '106',
	'quarter' => '18594',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Laibach',
	'title_category' => 'knight',
	'region' => '27',
	'place' => '107',
	'quarter' => '18595',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sittich',
	'title_category' => 'knight',
	'region' => '27',
	'place' => '108',
	'quarter' => '18596',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vannes',
	'title_category' => 'duke',
	'region' => '28',
	'place' => '109',
	'quarter' => '18597',
	'religion' => '1',
	'rank' => '9',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rohan',
	'title_category' => 'burgrave',
	'region' => '28',
	'place' => '110',
	'quarter' => '18598',
	'religion' => '1',
	'rank' => '6',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Quimper',
	'title_category' => 'knight',
	'region' => '28',
	'place' => '111',
	'quarter' => '18599',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Redon',
	'title_category' => 'knight',
	'region' => '28',
	'place' => '112',
	'quarter' => '18600',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Paris',
	'title_category' => 'lord',
	'region' => '29',
	'place' => '113',
	'quarter' => '18601',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Meaux',
	'title_category' => 'knight',
	'region' => '29',
	'place' => '114',
	'quarter' => '18602',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chartres',
	'title_category' => 'knight',
	'region' => '29',
	'place' => '115',
	'quarter' => '18603',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saint Denis',
	'title_category' => 'knight',
	'region' => '29',
	'place' => '116',
	'quarter' => '18604',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bar',
	'title_category' => 'count',
	'region' => '30',
	'place' => '117',
	'quarter' => '18605',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Neufchateau',
	'title_category' => 'baron',
	'region' => '30',
	'place' => '118',
	'quarter' => '18606',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Verdun',
	'title_category' => 'knight',
	'region' => '30',
	'place' => '119',
	'quarter' => '18607',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Langres',
	'title_category' => 'knight',
	'region' => '30',
	'place' => '120',
	'quarter' => '18608',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Amiens',
	'title_category' => 'count',
	'region' => '31',
	'place' => '121',
	'quarter' => '18609',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Boulogne',
	'title_category' => 'count',
	'region' => '31',
	'place' => '122',
	'quarter' => '18610',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Laon',
	'title_category' => 'knight',
	'region' => '31',
	'place' => '123',
	'quarter' => '18611',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saint Omer',
	'title_category' => 'burgrave',
	'region' => '31',
	'place' => '124',
	'quarter' => '18612',
	'religion' => '1',
	'rank' => '6',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rouen',
	'title_category' => 'duke',
	'region' => '32',
	'place' => '125',
	'quarter' => '18613',
	'religion' => '1',
	'rank' => '9',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Caen',
	'title_category' => 'count',
	'region' => '32',
	'place' => '126',
	'quarter' => '18614',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lisieux',
	'title_category' => 'count',
	'region' => '32',
	'place' => '127',
	'quarter' => '18615',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bayeux',
	'title_category' => 'burgrave',
	'region' => '32',
	'place' => '128',
	'quarter' => '18616',
	'religion' => '1',
	'rank' => '6',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Troyes',
	'title_category' => 'count',
	'region' => '33',
	'place' => '129',
	'quarter' => '18617',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Thierry',
	'title_category' => 'count',
	'region' => '33',
	'place' => '130',
	'quarter' => '18618',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Reims',
	'title_category' => 'knight',
	'region' => '33',
	'place' => '131',
	'quarter' => '18619',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Clairvaux',
	'title_category' => 'knight',
	'region' => '33',
	'place' => '132',
	'quarter' => '18620',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Orleans',
	'title_category' => 'count',
	'region' => '34',
	'place' => '133',
	'quarter' => '18621',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chateaudun',
	'title_category' => 'count',
	'region' => '34',
	'place' => '134',
	'quarter' => '18622',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Blois',
	'title_category' => 'count',
	'region' => '34',
	'place' => '135',
	'quarter' => '18623',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vendome',
	'title_category' => 'count',
	'region' => '34',
	'place' => '136',
	'quarter' => '18624',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tours',
	'title_category' => 'count',
	'region' => '35',
	'place' => '137',
	'quarter' => '18625',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Plessis',
	'title_category' => 'lord',
	'region' => '35',
	'place' => '138',
	'quarter' => '18626',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chinon',
	'title_category' => 'burgrave',
	'region' => '35',
	'place' => '139',
	'quarter' => '18627',
	'religion' => '1',
	'rank' => '6',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Loches',
	'title_category' => 'baron',
	'region' => '35',
	'place' => '140',
	'quarter' => '18628',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Angers',
	'title_category' => 'count',
	'region' => '36',
	'place' => '141',
	'quarter' => '18629',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gontier',
	'title_category' => 'burgrave',
	'region' => '36',
	'place' => '142',
	'quarter' => '18630',
	'religion' => '1',
	'rank' => '6',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mans',
	'title_category' => 'count',
	'region' => '36',
	'place' => '143',
	'quarter' => '18631',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Laval',
	'title_category' => 'count',
	'region' => '36',
	'place' => '144',
	'quarter' => '18632',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Poitiers',
	'title_category' => 'count',
	'region' => '37',
	'place' => '145',
	'quarter' => '18633',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chatellerault',
	'title_category' => 'burgrave',
	'region' => '37',
	'place' => '146',
	'quarter' => '18634',
	'religion' => '1',
	'rank' => '6',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Montmorillon',
	'title_category' => 'lord',
	'region' => '37',
	'place' => '147',
	'quarter' => '18635',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vauclair',
	'title_category' => 'lord',
	'region' => '37',
	'place' => '148',
	'quarter' => '18636',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bourges',
	'title_category' => 'count',
	'region' => '38',
	'place' => '149',
	'quarter' => '18637',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chateauroux',
	'title_category' => 'lord',
	'region' => '38',
	'place' => '150',
	'quarter' => '18638',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nevers',
	'title_category' => 'count',
	'region' => '38',
	'place' => '151',
	'quarter' => '18639',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vezelay',
	'title_category' => 'knight',
	'region' => '38',
	'place' => '152',
	'quarter' => '18640',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Moulins',
	'title_category' => 'count',
	'region' => '39',
	'place' => '153',
	'quarter' => '18641',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Montlucon',
	'title_category' => 'lord',
	'region' => '39',
	'place' => '154',
	'quarter' => '18642',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gueret',
	'title_category' => 'burgrave',
	'region' => '39',
	'place' => '155',
	'quarter' => '18643',
	'religion' => '1',
	'rank' => '6',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vichy',
	'title_category' => 'burgrave',
	'region' => '39',
	'place' => '156',
	'quarter' => '18644',
	'religion' => '1',
	'rank' => '6',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Clermont Ferrand',
	'title_category' => 'count',
	'region' => '40',
	'place' => '157',
	'quarter' => '18645',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Montbrison',
	'title_category' => 'count',
	'region' => '40',
	'place' => '158',
	'quarter' => '18646',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Puy en Velay',
	'title_category' => 'knight',
	'region' => '40',
	'place' => '159',
	'quarter' => '18647',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Issoire',
	'title_category' => 'knight',
	'region' => '40',
	'place' => '160',
	'quarter' => '18648',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Arles',
	'title_category' => 'lord',
	'region' => '41',
	'place' => '161',
	'quarter' => '18649',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aix',
	'title_category' => 'knight',
	'region' => '41',
	'place' => '162',
	'quarter' => '18650',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Marseille',
	'title_category' => 'knight',
	'region' => '41',
	'place' => '163',
	'quarter' => '18651',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Avignon',
	'title_category' => 'count',
	'region' => '41',
	'place' => '164',
	'quarter' => '18652',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Toulouse',
	'title_category' => 'count',
	'region' => '42',
	'place' => '165',
	'quarter' => '18653',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Carcasonne',
	'title_category' => 'count',
	'region' => '42',
	'place' => '166',
	'quarter' => '18654',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Narbonne',
	'title_category' => 'burgrave',
	'region' => '42',
	'place' => '167',
	'quarter' => '18655',
	'religion' => '1',
	'rank' => '6',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saint Benoit',
	'title_category' => 'knight',
	'region' => '42',
	'place' => '168',
	'quarter' => '18656',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bordeaux',
	'title_category' => 'count',
	'region' => '43',
	'place' => '169',
	'quarter' => '18657',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cahors',
	'title_category' => 'count',
	'region' => '43',
	'place' => '170',
	'quarter' => '18658',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Auch',
	'title_category' => 'knight',
	'region' => '43',
	'place' => '171',
	'quarter' => '18659',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Montauban',
	'title_category' => 'knight',
	'region' => '43',
	'place' => '172',
	'quarter' => '18660',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Angouleme',
	'title_category' => 'count',
	'region' => '44',
	'place' => '173',
	'quarter' => '18661',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Limoges',
	'title_category' => 'count',
	'region' => '44',
	'place' => '174',
	'quarter' => '18662',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Perigeux',
	'title_category' => 'count',
	'region' => '44',
	'place' => '175',
	'quarter' => '18663',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tulle',
	'title_category' => 'knight',
	'region' => '44',
	'place' => '176',
	'quarter' => '18664',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Grenoble',
	'title_category' => 'count',
	'region' => '45',
	'place' => '177',
	'quarter' => '18665',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vienne',
	'title_category' => 'knight',
	'region' => '45',
	'place' => '178',
	'quarter' => '18666',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lyon',
	'title_category' => 'burgrave',
	'region' => '45',
	'place' => '179',
	'quarter' => '18667',
	'religion' => '1',
	'rank' => '6',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Autun',
	'title_category' => 'knight',
	'region' => '45',
	'place' => '180',
	'quarter' => '18668',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dijon',
	'title_category' => 'count',
	'region' => '46',
	'place' => '181',
	'quarter' => '18669',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Besancon',
	'title_category' => 'knight',
	'region' => '46',
	'place' => '182',
	'quarter' => '18670',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chalon',
	'title_category' => 'knight',
	'region' => '46',
	'place' => '183',
	'quarter' => '18671',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Citeaux',
	'title_category' => 'knight',
	'region' => '46',
	'place' => '184',
	'quarter' => '18672',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'London',
	'title_category' => 'lord',
	'region' => '47',
	'place' => '185',
	'quarter' => '18673',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Windsor',
	'title_category' => 'baron',
	'region' => '47',
	'place' => '186',
	'quarter' => '18674',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Guildford',
	'title_category' => 'count',
	'region' => '47',
	'place' => '187',
	'quarter' => '18675',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Westminster',
	'title_category' => 'baron',
	'region' => '47',
	'place' => '188',
	'quarter' => '18676',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Canterbury',
	'title_category' => 'baron',
	'region' => '48',
	'place' => '189',
	'quarter' => '18677',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dover',
	'title_category' => 'burgrave',
	'region' => '48',
	'place' => '190',
	'quarter' => '18678',
	'religion' => '1',
	'rank' => '6',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ashford',
	'title_category' => 'knight',
	'region' => '48',
	'place' => '191',
	'quarter' => '18679',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Maidstone',
	'title_category' => 'count',
	'region' => '48',
	'place' => '192',
	'quarter' => '18680',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Winchester',
	'title_category' => 'count',
	'region' => '49',
	'place' => '193',
	'quarter' => '18681',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Southampton',
	'title_category' => 'baron',
	'region' => '49',
	'place' => '194',
	'quarter' => '18682',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Wells',
	'title_category' => 'knight',
	'region' => '49',
	'place' => '195',
	'quarter' => '18683',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Wimborne',
	'title_category' => 'knight',
	'region' => '49',
	'place' => '196',
	'quarter' => '18684',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Truro',
	'title_category' => 'count',
	'region' => '50',
	'place' => '197',
	'quarter' => '18685',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bodmin',
	'title_category' => 'burgrave',
	'region' => '50',
	'place' => '198',
	'quarter' => '18686',
	'religion' => '1',
	'rank' => '6',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saint German',
	'title_category' => 'knight',
	'region' => '50',
	'place' => '199',
	'quarter' => '18687',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Madron',
	'title_category' => 'knight',
	'region' => '50',
	'place' => '200',
	'quarter' => '18688',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Norwich',
	'title_category' => 'count',
	'region' => '51',
	'place' => '201',
	'quarter' => '18689',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ipswich',
	'title_category' => 'count',
	'region' => '51',
	'place' => '202',
	'quarter' => '18690',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saint Edmunds',
	'title_category' => 'knight',
	'region' => '51',
	'place' => '203',
	'quarter' => '18691',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Croxton',
	'title_category' => 'knight',
	'region' => '51',
	'place' => '204',
	'quarter' => '18692',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'York',
	'title_category' => 'count',
	'region' => '52',
	'place' => '205',
	'quarter' => '18693',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Durham',
	'title_category' => 'knight',
	'region' => '52',
	'place' => '206',
	'quarter' => '18694',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Scarborough',
	'title_category' => 'knight',
	'region' => '52',
	'place' => '207',
	'quarter' => '18695',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lancaster',
	'title_category' => 'count',
	'region' => '52',
	'place' => '208',
	'quarter' => '18696',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Worcester',
	'title_category' => 'count',
	'region' => '53',
	'place' => '209',
	'quarter' => '18697',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gloucester',
	'title_category' => 'margrave',
	'region' => '53',
	'place' => '210',
	'quarter' => '18698',
	'religion' => '1',
	'rank' => '8',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bristol',
	'title_category' => 'knight',
	'region' => '53',
	'place' => '211',
	'quarter' => '18699',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cirencester',
	'title_category' => 'knight',
	'region' => '53',
	'place' => '212',
	'quarter' => '18700',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ely',
	'title_category' => 'knight',
	'region' => '54',
	'place' => '213',
	'quarter' => '18701',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cambridge',
	'title_category' => 'count',
	'region' => '54',
	'place' => '214',
	'quarter' => '18702',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Oxford',
	'title_category' => 'count',
	'region' => '54',
	'place' => '215',
	'quarter' => '18703',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saint Albans',
	'title_category' => 'knight',
	'region' => '54',
	'place' => '216',
	'quarter' => '18704',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tamworth',
	'title_category' => 'baron',
	'region' => '55',
	'place' => '217',
	'quarter' => '18705',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Warwick',
	'title_category' => 'count',
	'region' => '55',
	'place' => '218',
	'quarter' => '18706',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Stafford',
	'title_category' => 'burgrave',
	'region' => '55',
	'place' => '219',
	'quarter' => '18707',
	'religion' => '1',
	'rank' => '6',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Leicester',
	'title_category' => 'count',
	'region' => '55',
	'place' => '220',
	'quarter' => '18708',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lincoln',
	'title_category' => 'count',
	'region' => '56',
	'place' => '221',
	'quarter' => '18709',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nottingham',
	'title_category' => 'count',
	'region' => '56',
	'place' => '222',
	'quarter' => '18710',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Boston',
	'title_category' => 'burgrave',
	'region' => '56',
	'place' => '223',
	'quarter' => '18711',
	'religion' => '1',
	'rank' => '6',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Stamford',
	'title_category' => 'knight',
	'region' => '56',
	'place' => '224',
	'quarter' => '18712',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Caernarfon',
	'title_category' => 'lord',
	'region' => '57',
	'place' => '225',
	'quarter' => '18713',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Harlech',
	'title_category' => 'baron',
	'region' => '57',
	'place' => '226',
	'quarter' => '18714',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bangor',
	'title_category' => 'knight',
	'region' => '57',
	'place' => '227',
	'quarter' => '18715',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Conwy',
	'title_category' => 'baron',
	'region' => '57',
	'place' => '228',
	'quarter' => '18716',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chester',
	'title_category' => 'margrave',
	'region' => '58',
	'place' => '229',
	'quarter' => '18717',
	'religion' => '1',
	'rank' => '8',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Shrewsbury',
	'title_category' => 'margrave',
	'region' => '58',
	'place' => '230',
	'quarter' => '18718',
	'religion' => '1',
	'rank' => '8',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Glasbury',
	'title_category' => 'knight',
	'region' => '58',
	'place' => '231',
	'quarter' => '18719',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Llanllugan',
	'title_category' => 'knight',
	'region' => '58',
	'place' => '232',
	'quarter' => '18720',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Caerwent',
	'title_category' => 'baron',
	'region' => '59',
	'place' => '233',
	'quarter' => '18721',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Carmarthen',
	'title_category' => 'count',
	'region' => '59',
	'place' => '234',
	'quarter' => '18722',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cardiff',
	'title_category' => 'count',
	'region' => '59',
	'place' => '235',
	'quarter' => '18723',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Abergavenny',
	'title_category' => 'lord',
	'region' => '59',
	'place' => '236',
	'quarter' => '18724',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Oslo',
	'title_category' => 'lord',
	'region' => '60',
	'place' => '237',
	'quarter' => '18725',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tonsborg',
	'title_category' => 'count',
	'region' => '60',
	'place' => '238',
	'quarter' => '18726',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hamar',
	'title_category' => 'count',
	'region' => '60',
	'place' => '239',
	'quarter' => '18727',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gimsoy',
	'title_category' => 'knight',
	'region' => '60',
	'place' => '240',
	'quarter' => '18728',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bergen',
	'title_category' => 'count',
	'region' => '61',
	'place' => '241',
	'quarter' => '18729',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Holm',
	'title_category' => 'count',
	'region' => '61',
	'place' => '242',
	'quarter' => '18730',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Stavanger',
	'title_category' => 'count',
	'region' => '61',
	'place' => '243',
	'quarter' => '18731',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Halsnoy',
	'title_category' => 'knight',
	'region' => '61',
	'place' => '244',
	'quarter' => '18732',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Copenhagen',
	'title_category' => 'lord',
	'region' => '62',
	'place' => '245',
	'quarter' => '18733',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kalundborg',
	'title_category' => 'baron',
	'region' => '62',
	'place' => '246',
	'quarter' => '18734',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Roskilde',
	'title_category' => 'count',
	'region' => '62',
	'place' => '247',
	'quarter' => '18735',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Esrum',
	'title_category' => 'knight',
	'region' => '62',
	'place' => '248',
	'quarter' => '18736',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lund',
	'title_category' => 'knight',
	'region' => '63',
	'place' => '249',
	'quarter' => '18737',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Trelleborg',
	'title_category' => 'lord',
	'region' => '63',
	'place' => '250',
	'quarter' => '18738',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Halmstad',
	'title_category' => 'count',
	'region' => '63',
	'place' => '251',
	'quarter' => '18739',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Herrevad',
	'title_category' => 'knight',
	'region' => '63',
	'place' => '252',
	'quarter' => '18740',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aarhus',
	'title_category' => 'count',
	'region' => '64',
	'place' => '253',
	'quarter' => '18741',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aalborg',
	'title_category' => 'count',
	'region' => '64',
	'place' => '254',
	'quarter' => '18742',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ripen',
	'title_category' => 'knight',
	'region' => '64',
	'place' => '255',
	'quarter' => '18743',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Essenbaek',
	'title_category' => 'knight',
	'region' => '64',
	'place' => '256',
	'quarter' => '18744',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Stockholm',
	'title_category' => 'lord',
	'region' => '65',
	'place' => '257',
	'quarter' => '18745',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vasteras',
	'title_category' => 'count',
	'region' => '65',
	'place' => '258',
	'quarter' => '18746',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Uppsala',
	'title_category' => 'count',
	'region' => '65',
	'place' => '259',
	'quarter' => '18747',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Eskilstuna',
	'title_category' => 'knight',
	'region' => '65',
	'place' => '260',
	'quarter' => '18748',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Visby',
	'title_category' => 'count',
	'region' => '66',
	'place' => '261',
	'quarter' => '18749',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kalmar',
	'title_category' => 'count',
	'region' => '66',
	'place' => '262',
	'quarter' => '18750',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vaxjo',
	'title_category' => 'count',
	'region' => '66',
	'place' => '263',
	'quarter' => '18751',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nydala',
	'title_category' => 'knight',
	'region' => '66',
	'place' => '264',
	'quarter' => '18752',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Skara',
	'title_category' => 'knight',
	'region' => '67',
	'place' => '265',
	'quarter' => '18753',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dalaborg',
	'title_category' => 'count',
	'region' => '67',
	'place' => '266',
	'quarter' => '18754',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Jonkoping',
	'title_category' => 'count',
	'region' => '67',
	'place' => '267',
	'quarter' => '18755',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vadstena',
	'title_category' => 'knight',
	'region' => '67',
	'place' => '268',
	'quarter' => '18756',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Riga',
	'title_category' => 'knight',
	'region' => '68',
	'place' => '269',
	'quarter' => '18757',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Wenden',
	'title_category' => 'count',
	'region' => '68',
	'place' => '270',
	'quarter' => '18758',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Walk',
	'title_category' => 'lord',
	'region' => '68',
	'place' => '271',
	'quarter' => '18759',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dunaburg',
	'title_category' => 'lord',
	'region' => '68',
	'place' => '272',
	'quarter' => '18760',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pilten',
	'title_category' => 'knight',
	'region' => '69',
	'place' => '273',
	'quarter' => '18761',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Libau',
	'title_category' => 'lord',
	'region' => '69',
	'place' => '274',
	'quarter' => '18762',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Goldingen',
	'title_category' => 'lord',
	'region' => '69',
	'place' => '275',
	'quarter' => '18763',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Talsen',
	'title_category' => 'lord',
	'region' => '69',
	'place' => '276',
	'quarter' => '18764',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Marienburg',
	'title_category' => 'duke',
	'region' => '70',
	'place' => '277',
	'quarter' => '18765',
	'religion' => '1',
	'rank' => '9',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Elbing',
	'title_category' => 'count',
	'region' => '70',
	'place' => '278',
	'quarter' => '18766',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Danzig',
	'title_category' => 'margrave',
	'region' => '70',
	'place' => '279',
	'quarter' => '18767',
	'religion' => '1',
	'rank' => '8',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Koningsberg',
	'title_category' => 'knight',
	'region' => '70',
	'place' => '280',
	'quarter' => '18768',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Memelburg',
	'title_category' => 'lord',
	'region' => '71',
	'place' => '281',
	'quarter' => '18769',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saule',
	'title_category' => 'lord',
	'region' => '71',
	'place' => '282',
	'quarter' => '18770',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tilsit',
	'title_category' => 'lord',
	'region' => '71',
	'place' => '283',
	'quarter' => '18771',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Georgenburg',
	'title_category' => 'lord',
	'region' => '71',
	'place' => '284',
	'quarter' => '18772',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Reval',
	'title_category' => 'knight',
	'region' => '72',
	'place' => '285',
	'quarter' => '18773',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Weissenstein',
	'title_category' => 'lord',
	'region' => '72',
	'place' => '286',
	'quarter' => '18774',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Arensburg',
	'title_category' => 'knight',
	'region' => '72',
	'place' => '287',
	'quarter' => '18775',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hapsal',
	'title_category' => 'knight',
	'region' => '72',
	'place' => '288',
	'quarter' => '18776',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Edinburgh',
	'title_category' => 'lord',
	'region' => '73',
	'place' => '289',
	'quarter' => '18777',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Linlithgow',
	'title_category' => 'baron',
	'region' => '73',
	'place' => '290',
	'quarter' => '18778',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dunbar',
	'title_category' => 'count',
	'region' => '73',
	'place' => '291',
	'quarter' => '18779',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Haddington',
	'title_category' => 'knight',
	'region' => '73',
	'place' => '292',
	'quarter' => '18780',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bamburgh',
	'title_category' => 'count',
	'region' => '74',
	'place' => '293',
	'quarter' => '18781',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Alnwick',
	'title_category' => 'margrave',
	'region' => '74',
	'place' => '294',
	'quarter' => '18782',
	'religion' => '1',
	'rank' => '8',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Berwick',
	'title_category' => 'baron',
	'region' => '74',
	'place' => '295',
	'quarter' => '18783',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Jedburgh',
	'title_category' => 'count',
	'region' => '74',
	'place' => '296',
	'quarter' => '18784',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dumbarton',
	'title_category' => 'baron',
	'region' => '75',
	'place' => '297',
	'quarter' => '18785',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kilmarnock',
	'title_category' => 'knight',
	'region' => '75',
	'place' => '298',
	'quarter' => '18786',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Glasgow',
	'title_category' => 'baron',
	'region' => '75',
	'place' => '299',
	'quarter' => '18787',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ayr',
	'title_category' => 'count',
	'region' => '75',
	'place' => '300',
	'quarter' => '18788',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Carlisle',
	'title_category' => 'margrave',
	'region' => '76',
	'place' => '301',
	'quarter' => '18789',
	'religion' => '1',
	'rank' => '8',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Caerloverock',
	'title_category' => 'baron',
	'region' => '76',
	'place' => '302',
	'quarter' => '18790',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Whithorn',
	'title_category' => 'knight',
	'region' => '76',
	'place' => '303',
	'quarter' => '18791',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kirkcudbright',
	'title_category' => 'knight',
	'region' => '76',
	'place' => '304',
	'quarter' => '18792',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dunadd',
	'title_category' => 'baron',
	'region' => '77',
	'place' => '305',
	'quarter' => '18793',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dunollie',
	'title_category' => 'lord',
	'region' => '77',
	'place' => '306',
	'quarter' => '18794',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dunaverty',
	'title_category' => 'count',
	'region' => '77',
	'place' => '307',
	'quarter' => '18795',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Iona',
	'title_category' => 'knight',
	'region' => '77',
	'place' => '308',
	'quarter' => '18796',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Perth',
	'title_category' => 'count',
	'region' => '78',
	'place' => '309',
	'quarter' => '18797',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Stirling',
	'title_category' => 'count',
	'region' => '78',
	'place' => '310',
	'quarter' => '18798',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saint Andrews',
	'title_category' => 'knight',
	'region' => '78',
	'place' => '311',
	'quarter' => '18799',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dunfermline',
	'title_category' => 'knight',
	'region' => '78',
	'place' => '312',
	'quarter' => '18800',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Elgin',
	'title_category' => 'count',
	'region' => '79',
	'place' => '313',
	'quarter' => '18801',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nairn',
	'title_category' => 'count',
	'region' => '79',
	'place' => '314',
	'quarter' => '18802',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mortlach',
	'title_category' => 'knight',
	'region' => '79',
	'place' => '315',
	'quarter' => '18803',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aberdeen',
	'title_category' => 'count',
	'region' => '79',
	'place' => '316',
	'quarter' => '18804',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dundee',
	'title_category' => 'burgrave',
	'region' => '80',
	'place' => '317',
	'quarter' => '18805',
	'religion' => '1',
	'rank' => '6',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Forfar',
	'title_category' => 'baron',
	'region' => '80',
	'place' => '318',
	'quarter' => '18806',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Scone',
	'title_category' => 'knight',
	'region' => '80',
	'place' => '319',
	'quarter' => '18807',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Arbroath',
	'title_category' => 'knight',
	'region' => '80',
	'place' => '320',
	'quarter' => '18808',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dingwall',
	'title_category' => 'baron',
	'region' => '81',
	'place' => '321',
	'quarter' => '18809',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Helmsdale',
	'title_category' => 'baron',
	'region' => '81',
	'place' => '322',
	'quarter' => '18810',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rosemarkie',
	'title_category' => 'knight',
	'region' => '81',
	'place' => '323',
	'quarter' => '18811',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dornoch',
	'title_category' => 'knight',
	'region' => '81',
	'place' => '324',
	'quarter' => '18812',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dublin',
	'title_category' => 'lord',
	'region' => '82',
	'place' => '325',
	'quarter' => '18813',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tara',
	'title_category' => 'lord',
	'region' => '82',
	'place' => '326',
	'quarter' => '18814',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kildare',
	'title_category' => 'count',
	'region' => '82',
	'place' => '327',
	'quarter' => '18815',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Millmount',
	'title_category' => 'burgrave',
	'region' => '82',
	'place' => '328',
	'quarter' => '18816',
	'religion' => '1',
	'rank' => '6',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Armagh',
	'title_category' => 'lord',
	'region' => '83',
	'place' => '329',
	'quarter' => '18817',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Carrickfergus',
	'title_category' => 'baron',
	'region' => '83',
	'place' => '330',
	'quarter' => '18818',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Derry',
	'title_category' => 'baron',
	'region' => '83',
	'place' => '331',
	'quarter' => '18819',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Clogher',
	'title_category' => 'knight',
	'region' => '83',
	'place' => '332',
	'quarter' => '18820',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Wexford',
	'title_category' => 'lord',
	'region' => '84',
	'place' => '333',
	'quarter' => '18821',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kells',
	'title_category' => 'knight',
	'region' => '84',
	'place' => '334',
	'quarter' => '18822',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Waterford',
	'title_category' => 'baron',
	'region' => '84',
	'place' => '335',
	'quarter' => '18823',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Durrow',
	'title_category' => 'knight',
	'region' => '84',
	'place' => '336',
	'quarter' => '18824',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cashel',
	'title_category' => 'lord',
	'region' => '85',
	'place' => '337',
	'quarter' => '18825',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Limerick',
	'title_category' => 'count',
	'region' => '85',
	'place' => '338',
	'quarter' => '18826',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cork',
	'title_category' => 'count',
	'region' => '85',
	'place' => '339',
	'quarter' => '18827',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Roscrea',
	'title_category' => 'lord',
	'region' => '85',
	'place' => '340',
	'quarter' => '18828',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Galway',
	'title_category' => 'count',
	'region' => '86',
	'place' => '341',
	'quarter' => '18829',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mayo',
	'title_category' => 'count',
	'region' => '86',
	'place' => '342',
	'quarter' => '18830',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tuam',
	'title_category' => 'lord',
	'region' => '86',
	'place' => '343',
	'quarter' => '18831',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Achonry',
	'title_category' => 'baron',
	'region' => '86',
	'place' => '344',
	'quarter' => '18832',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pamplona',
	'title_category' => 'lord',
	'region' => '87',
	'place' => '345',
	'quarter' => '18833',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Olite',
	'title_category' => 'baron',
	'region' => '87',
	'place' => '346',
	'quarter' => '18834',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tudela',
	'title_category' => 'count',
	'region' => '87',
	'place' => '347',
	'quarter' => '18835',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Leyre',
	'title_category' => 'knight',
	'region' => '87',
	'place' => '348',
	'quarter' => '18836',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'San Sebastian',
	'title_category' => 'knight',
	'region' => '88',
	'place' => '349',
	'quarter' => '18837',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Durango',
	'title_category' => 'lord',
	'region' => '88',
	'place' => '350',
	'quarter' => '18838',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bilbao',
	'title_category' => 'count',
	'region' => '88',
	'place' => '351',
	'quarter' => '18839',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gastehiz',
	'title_category' => 'count',
	'region' => '88',
	'place' => '352',
	'quarter' => '18840',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Jaca',
	'title_category' => 'lord',
	'region' => '89',
	'place' => '353',
	'quarter' => '18841',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Monzon',
	'title_category' => 'count',
	'region' => '89',
	'place' => '354',
	'quarter' => '18842',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Huesca',
	'title_category' => 'count',
	'region' => '89',
	'place' => '355',
	'quarter' => '18843',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sobrarbe',
	'title_category' => 'knight',
	'region' => '89',
	'place' => '356',
	'quarter' => '18844',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zaragoza',
	'title_category' => 'lord',
	'region' => '90',
	'place' => '357',
	'quarter' => '18845',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Molina de Aragon',
	'title_category' => 'count',
	'region' => '90',
	'place' => '358',
	'quarter' => '18846',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Albarracin',
	'title_category' => 'lord',
	'region' => '90',
	'place' => '359',
	'quarter' => '18847',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rueda',
	'title_category' => 'knight',
	'region' => '90',
	'place' => '360',
	'quarter' => '18848',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gerona',
	'title_category' => 'count',
	'region' => '91',
	'place' => '361',
	'quarter' => '18849',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ripoll',
	'title_category' => 'count',
	'region' => '91',
	'place' => '362',
	'quarter' => '18850',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Emporda',
	'title_category' => 'count',
	'region' => '91',
	'place' => '363',
	'quarter' => '18851',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sant Feliu de Guixols',
	'title_category' => 'knight',
	'region' => '91',
	'place' => '364',
	'quarter' => '18852',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Barcelona',
	'title_category' => 'lord',
	'region' => '92',
	'place' => '365',
	'quarter' => '18853',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Barbens',
	'title_category' => 'baron',
	'region' => '92',
	'place' => '366',
	'quarter' => '18854',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Manresa',
	'title_category' => 'knight',
	'region' => '92',
	'place' => '367',
	'quarter' => '18855',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Monserrat',
	'title_category' => 'knight',
	'region' => '92',
	'place' => '368',
	'quarter' => '18856',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Valencia',
	'title_category' => 'lord',
	'region' => '93',
	'place' => '369',
	'quarter' => '18857',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sagunto',
	'title_category' => 'baron',
	'region' => '93',
	'place' => '370',
	'quarter' => '18858',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Castellon',
	'title_category' => 'count',
	'region' => '93',
	'place' => '371',
	'quarter' => '18859',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Serra',
	'title_category' => 'knight',
	'region' => '93',
	'place' => '372',
	'quarter' => '18860',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Denia',
	'title_category' => 'lord',
	'region' => '94',
	'place' => '373',
	'quarter' => '18861',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Guadalest',
	'title_category' => 'baron',
	'region' => '94',
	'place' => '374',
	'quarter' => '18862',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Alicante',
	'title_category' => 'count',
	'region' => '94',
	'place' => '375',
	'quarter' => '18863',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gandia',
	'title_category' => 'knight',
	'region' => '94',
	'place' => '376',
	'quarter' => '18864',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Palma',
	'title_category' => 'lord',
	'region' => '95',
	'place' => '377',
	'quarter' => '18865',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pollenca',
	'title_category' => 'baron',
	'region' => '95',
	'place' => '378',
	'quarter' => '18866',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Menorca',
	'title_category' => 'count',
	'region' => '95',
	'place' => '379',
	'quarter' => '18867',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ibiza',
	'title_category' => 'count',
	'region' => '95',
	'place' => '380',
	'quarter' => '18868',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Leon',
	'title_category' => 'lord',
	'region' => '96',
	'place' => '381',
	'quarter' => '18869',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Robla',
	'title_category' => 'count',
	'region' => '96',
	'place' => '382',
	'quarter' => '18870',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'San Guillermo',
	'title_category' => 'knight',
	'region' => '96',
	'place' => '383',
	'quarter' => '18871',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sahagun',
	'title_category' => 'knight',
	'region' => '96',
	'place' => '384',
	'quarter' => '18872',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Oviedo',
	'title_category' => 'lord',
	'region' => '97',
	'place' => '385',
	'quarter' => '18873',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aviles',
	'title_category' => 'count',
	'region' => '97',
	'place' => '386',
	'quarter' => '18874',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gijon',
	'title_category' => 'count',
	'region' => '97',
	'place' => '387',
	'quarter' => '18875',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Santo Toribio',
	'title_category' => 'knight',
	'region' => '97',
	'place' => '388',
	'quarter' => '18876',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Valladolid',
	'title_category' => 'lord',
	'region' => '98',
	'place' => '389',
	'quarter' => '18877',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Avila',
	'title_category' => 'margrave',
	'region' => '98',
	'place' => '390',
	'quarter' => '18878',
	'religion' => '1',
	'rank' => '8',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Segovia',
	'title_category' => 'count',
	'region' => '98',
	'place' => '391',
	'quarter' => '18879',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Salamanca',
	'title_category' => 'count',
	'region' => '98',
	'place' => '392',
	'quarter' => '18880',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Burgos',
	'title_category' => 'count',
	'region' => '99',
	'place' => '393',
	'quarter' => '18881',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Santo Domingo de Silos',
	'title_category' => 'knight',
	'region' => '99',
	'place' => '394',
	'quarter' => '18882',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Palencia',
	'title_category' => 'knight',
	'region' => '99',
	'place' => '395',
	'quarter' => '18883',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'San Millan',
	'title_category' => 'knight',
	'region' => '99',
	'place' => '396',
	'quarter' => '18884',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Santiago',
	'title_category' => 'lord',
	'region' => '100',
	'place' => '397',
	'quarter' => '18885',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ourense',
	'title_category' => 'knight',
	'region' => '100',
	'place' => '398',
	'quarter' => '18886',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Coruna',
	'title_category' => 'knight',
	'region' => '100',
	'place' => '399',
	'quarter' => '18887',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ponferrada',
	'title_category' => 'lord',
	'region' => '100',
	'place' => '400',
	'quarter' => '18888',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lisbon',
	'title_category' => 'lord',
	'region' => '101',
	'place' => '401',
	'quarter' => '18889',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sintra',
	'title_category' => 'count',
	'region' => '101',
	'place' => '402',
	'quarter' => '18890',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Santarem',
	'title_category' => 'knight',
	'region' => '101',
	'place' => '403',
	'quarter' => '18891',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Alcobaca',
	'title_category' => 'knight',
	'region' => '101',
	'place' => '404',
	'quarter' => '18892',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Porto',
	'title_category' => 'duke',
	'region' => '102',
	'place' => '405',
	'quarter' => '18893',
	'religion' => '1',
	'rank' => '9',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Guimaraes',
	'title_category' => 'count',
	'region' => '102',
	'place' => '406',
	'quarter' => '18894',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Viana',
	'title_category' => 'knight',
	'region' => '102',
	'place' => '407',
	'quarter' => '18895',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aveiro',
	'title_category' => 'knight',
	'region' => '102',
	'place' => '408',
	'quarter' => '18896',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Braganca',
	'title_category' => 'duke',
	'region' => '103',
	'place' => '409',
	'quarter' => '18897',
	'religion' => '1',
	'rank' => '9',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sanabria',
	'title_category' => 'count',
	'region' => '103',
	'place' => '410',
	'quarter' => '18898',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Verin',
	'title_category' => 'lord',
	'region' => '103',
	'place' => '411',
	'quarter' => '18899',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mirandela',
	'title_category' => 'baron',
	'region' => '103',
	'place' => '412',
	'quarter' => '18900',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Coimbra',
	'title_category' => 'knight',
	'region' => '104',
	'place' => '413',
	'quarter' => '18901',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tomar',
	'title_category' => 'lord',
	'region' => '104',
	'place' => '414',
	'quarter' => '18902',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Leiria',
	'title_category' => 'baron',
	'region' => '104',
	'place' => '415',
	'quarter' => '18903',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pombal',
	'title_category' => 'margrave',
	'region' => '104',
	'place' => '416',
	'quarter' => '18904',
	'religion' => '1',
	'rank' => '8',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Evora',
	'title_category' => 'knight',
	'region' => '105',
	'place' => '417',
	'quarter' => '18905',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Alcacer',
	'title_category' => 'baron',
	'region' => '105',
	'place' => '418',
	'quarter' => '18906',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Moura',
	'title_category' => 'knight',
	'region' => '105',
	'place' => '419',
	'quarter' => '18907',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Avis',
	'title_category' => 'lord',
	'region' => '105',
	'place' => '420',
	'quarter' => '18908',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Faro',
	'title_category' => 'count',
	'region' => '106',
	'place' => '421',
	'quarter' => '18909',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Paderne',
	'title_category' => 'lord',
	'region' => '106',
	'place' => '422',
	'quarter' => '18910',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Alvor',
	'title_category' => 'baron',
	'region' => '106',
	'place' => '423',
	'quarter' => '18911',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Silves',
	'title_category' => 'knight',
	'region' => '106',
	'place' => '424',
	'quarter' => '18912',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cordoba',
	'title_category' => 'lord',
	'region' => '107',
	'place' => '425',
	'quarter' => '18913',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Andujar',
	'title_category' => 'baron',
	'region' => '107',
	'place' => '426',
	'quarter' => '18914',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Jaen',
	'title_category' => 'count',
	'region' => '107',
	'place' => '427',
	'quarter' => '18915',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ecija',
	'title_category' => 'lord',
	'region' => '107',
	'place' => '428',
	'quarter' => '18916',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sevilla',
	'title_category' => 'lord',
	'region' => '108',
	'place' => '429',
	'quarter' => '18917',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Osuna',
	'title_category' => 'count',
	'region' => '108',
	'place' => '430',
	'quarter' => '18918',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cadiz',
	'title_category' => 'count',
	'region' => '108',
	'place' => '431',
	'quarter' => '18919',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Huelva',
	'title_category' => 'count',
	'region' => '108',
	'place' => '432',
	'quarter' => '18920',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Badajoz',
	'title_category' => 'lord',
	'region' => '109',
	'place' => '433',
	'quarter' => '18921',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zafra',
	'title_category' => 'baron',
	'region' => '109',
	'place' => '434',
	'quarter' => '18922',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Merida',
	'title_category' => 'count',
	'region' => '109',
	'place' => '435',
	'quarter' => '18923',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Olivenza',
	'title_category' => 'count',
	'region' => '109',
	'place' => '436',
	'quarter' => '18924',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Toledo',
	'title_category' => 'lord',
	'region' => '110',
	'place' => '437',
	'quarter' => '18925',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Almaden',
	'title_category' => 'count',
	'region' => '110',
	'place' => '438',
	'quarter' => '18926',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Consuegra',
	'title_category' => 'baron',
	'region' => '110',
	'place' => '439',
	'quarter' => '18927',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Talavera',
	'title_category' => 'lord',
	'region' => '110',
	'place' => '440',
	'quarter' => '18928',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Granada',
	'title_category' => 'lord',
	'region' => '111',
	'place' => '441',
	'quarter' => '18929',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Alcaudete',
	'title_category' => 'baron',
	'region' => '111',
	'place' => '442',
	'quarter' => '18930',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Antquera',
	'title_category' => 'count',
	'region' => '111',
	'place' => '443',
	'quarter' => '18931',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Guadix',
	'title_category' => 'baron',
	'region' => '111',
	'place' => '444',
	'quarter' => '18932',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Almeria',
	'title_category' => 'lord',
	'region' => '112',
	'place' => '445',
	'quarter' => '18933',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Baza',
	'title_category' => 'count',
	'region' => '112',
	'place' => '446',
	'quarter' => '18934',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Motril',
	'title_category' => 'baron',
	'region' => '112',
	'place' => '447',
	'quarter' => '18935',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lorca',
	'title_category' => 'count',
	'region' => '112',
	'place' => '448',
	'quarter' => '18936',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Murcia',
	'title_category' => 'lord',
	'region' => '113',
	'place' => '449',
	'quarter' => '18937',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Alcoy',
	'title_category' => 'baron',
	'region' => '113',
	'place' => '450',
	'quarter' => '18938',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Alicante',
	'title_category' => 'count',
	'region' => '113',
	'place' => '451',
	'quarter' => '18939',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cartagena',
	'title_category' => 'count',
	'region' => '113',
	'place' => '452',
	'quarter' => '18940',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Malaga',
	'title_category' => 'lord',
	'region' => '114',
	'place' => '453',
	'quarter' => '18941',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Loja',
	'title_category' => 'lord',
	'region' => '114',
	'place' => '454',
	'quarter' => '18942',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Marbella',
	'title_category' => 'baron',
	'region' => '114',
	'place' => '455',
	'quarter' => '18943',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ronda',
	'title_category' => 'count',
	'region' => '114',
	'place' => '456',
	'quarter' => '18944',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Milan',
	'title_category' => 'duke',
	'region' => '115',
	'place' => '457',
	'quarter' => '18945',
	'religion' => '1',
	'rank' => '9',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Brescia',
	'title_category' => 'count',
	'region' => '115',
	'place' => '458',
	'quarter' => '18946',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pavia',
	'title_category' => 'lord',
	'region' => '115',
	'place' => '459',
	'quarter' => '18947',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cremona',
	'title_category' => 'knight',
	'region' => '115',
	'place' => '460',
	'quarter' => '18948',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Verona',
	'title_category' => 'margrave',
	'region' => '116',
	'place' => '461',
	'quarter' => '18949',
	'religion' => '1',
	'rank' => '8',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Padua',
	'title_category' => 'burgrave',
	'region' => '116',
	'place' => '462',
	'quarter' => '18950',
	'religion' => '1',
	'rank' => '6',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vicenza',
	'title_category' => 'knight',
	'region' => '116',
	'place' => '463',
	'quarter' => '18951',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mantua',
	'title_category' => 'duke',
	'region' => '116',
	'place' => '464',
	'quarter' => '18952',
	'religion' => '1',
	'rank' => '9',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Genoa',
	'title_category' => 'knight',
	'region' => '117',
	'place' => '465',
	'quarter' => '18953',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Noli',
	'title_category' => 'knight',
	'region' => '117',
	'place' => '466',
	'quarter' => '18954',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aleria',
	'title_category' => 'count',
	'region' => '117',
	'place' => '467',
	'quarter' => '18955',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bobbio',
	'title_category' => 'knight',
	'region' => '117',
	'place' => '468',
	'quarter' => '18956',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Venice',
	'title_category' => 'knight',
	'region' => '118',
	'place' => '469',
	'quarter' => '18957',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Treviso',
	'title_category' => 'margrave',
	'region' => '118',
	'place' => '470',
	'quarter' => '18958',
	'religion' => '1',
	'rank' => '8',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chioggia',
	'title_category' => 'knight',
	'region' => '118',
	'place' => '471',
	'quarter' => '18959',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Belluno',
	'title_category' => 'knight',
	'region' => '118',
	'place' => '472',
	'quarter' => '18960',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ravenna',
	'title_category' => 'lord',
	'region' => '119',
	'place' => '473',
	'quarter' => '18961',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cesena',
	'title_category' => 'knight',
	'region' => '119',
	'place' => '474',
	'quarter' => '18962',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Forli',
	'title_category' => 'knight',
	'region' => '119',
	'place' => '475',
	'quarter' => '18963',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rimini',
	'title_category' => 'lord',
	'region' => '119',
	'place' => '476',
	'quarter' => '18964',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Modena',
	'title_category' => 'duke',
	'region' => '120',
	'place' => '477',
	'quarter' => '18965',
	'religion' => '1',
	'rank' => '9',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Parma',
	'title_category' => 'knight',
	'region' => '120',
	'place' => '478',
	'quarter' => '18966',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ferrara',
	'title_category' => 'count',
	'region' => '120',
	'place' => '479',
	'quarter' => '18967',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bologna',
	'title_category' => 'knight',
	'region' => '120',
	'place' => '480',
	'quarter' => '18968',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aquileja',
	'title_category' => 'knight',
	'region' => '121',
	'place' => '481',
	'quarter' => '18969',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pordenone',
	'title_category' => 'knight',
	'region' => '121',
	'place' => '482',
	'quarter' => '18970',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Udine',
	'title_category' => 'knight',
	'region' => '121',
	'place' => '483',
	'quarter' => '18971',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gemona',
	'title_category' => 'knight',
	'region' => '121',
	'place' => '484',
	'quarter' => '18972',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Turin',
	'title_category' => 'margrave',
	'region' => '122',
	'place' => '485',
	'quarter' => '18973',
	'religion' => '1',
	'rank' => '8',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ivrea',
	'title_category' => 'knight',
	'region' => '122',
	'place' => '486',
	'quarter' => '18974',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Asti',
	'title_category' => 'knight',
	'region' => '122',
	'place' => '487',
	'quarter' => '18975',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pinerollo',
	'title_category' => 'knight',
	'region' => '122',
	'place' => '488',
	'quarter' => '18976',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Florence',
	'title_category' => 'knight',
	'region' => '123',
	'place' => '489',
	'quarter' => '18977',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Siena',
	'title_category' => 'knight',
	'region' => '123',
	'place' => '490',
	'quarter' => '18978',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Arezzo',
	'title_category' => 'knight',
	'region' => '123',
	'place' => '491',
	'quarter' => '18979',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Grosseto',
	'title_category' => 'knight',
	'region' => '123',
	'place' => '492',
	'quarter' => '18980',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Spoleto',
	'title_category' => 'knight',
	'region' => '124',
	'place' => '493',
	'quarter' => '18981',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aquila',
	'title_category' => 'lord',
	'region' => '124',
	'place' => '494',
	'quarter' => '18982',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ancona',
	'title_category' => 'knight',
	'region' => '124',
	'place' => '495',
	'quarter' => '18983',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Assissi',
	'title_category' => 'knight',
	'region' => '124',
	'place' => '496',
	'quarter' => '18984',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rome',
	'title_category' => 'lord',
	'region' => '125',
	'place' => '497',
	'quarter' => '18985',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Frascati',
	'title_category' => 'baron',
	'region' => '125',
	'place' => '498',
	'quarter' => '18986',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tivoli',
	'title_category' => 'knight',
	'region' => '125',
	'place' => '499',
	'quarter' => '18987',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Subiaco',
	'title_category' => 'knight',
	'region' => '125',
	'place' => '500',
	'quarter' => '18988',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pisa',
	'title_category' => 'knight',
	'region' => '126',
	'place' => '501',
	'quarter' => '18989',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Carrara',
	'title_category' => 'duke',
	'region' => '126',
	'place' => '502',
	'quarter' => '18990',
	'religion' => '1',
	'rank' => '9',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lucca',
	'title_category' => 'duke',
	'region' => '126',
	'place' => '503',
	'quarter' => '18991',
	'religion' => '1',
	'rank' => '9',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Volterra',
	'title_category' => 'knight',
	'region' => '126',
	'place' => '504',
	'quarter' => '18992',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Naples',
	'title_category' => 'lord',
	'region' => '127',
	'place' => '505',
	'quarter' => '18993',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gaeta',
	'title_category' => 'knight',
	'region' => '127',
	'place' => '506',
	'quarter' => '18994',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Amalfi',
	'title_category' => 'knight',
	'region' => '127',
	'place' => '507',
	'quarter' => '18995',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cassino',
	'title_category' => 'knight',
	'region' => '127',
	'place' => '508',
	'quarter' => '18996',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Taranto',
	'title_category' => 'lord',
	'region' => '128',
	'place' => '509',
	'quarter' => '18997',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bari',
	'title_category' => 'baron',
	'region' => '128',
	'place' => '510',
	'quarter' => '18998',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Siponto',
	'title_category' => 'knight',
	'region' => '128',
	'place' => '511',
	'quarter' => '18999',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Brindisi',
	'title_category' => 'count',
	'region' => '128',
	'place' => '512',
	'quarter' => '19000',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cosenza',
	'title_category' => 'duke',
	'region' => '129',
	'place' => '513',
	'quarter' => '19001',
	'religion' => '1',
	'rank' => '9',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rossano',
	'title_category' => 'lord',
	'region' => '129',
	'place' => '514',
	'quarter' => '19002',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tropea',
	'title_category' => 'lord',
	'region' => '129',
	'place' => '515',
	'quarter' => '19003',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vivarium',
	'title_category' => 'knight',
	'region' => '129',
	'place' => '516',
	'quarter' => '19004',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Benevento',
	'title_category' => 'lord',
	'region' => '130',
	'place' => '517',
	'quarter' => '19005',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Monteverde',
	'title_category' => 'baron',
	'region' => '130',
	'place' => '518',
	'quarter' => '19006',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Potenza',
	'title_category' => 'knight',
	'region' => '130',
	'place' => '519',
	'quarter' => '19007',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Viggiano',
	'title_category' => 'knight',
	'region' => '130',
	'place' => '520',
	'quarter' => '19008',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sassari',
	'title_category' => 'lord',
	'region' => '131',
	'place' => '521',
	'quarter' => '19009',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Olbia',
	'title_category' => 'count',
	'region' => '131',
	'place' => '522',
	'quarter' => '19010',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bosa',
	'title_category' => 'knight',
	'region' => '131',
	'place' => '523',
	'quarter' => '19011',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Porto Torres',
	'title_category' => 'count',
	'region' => '131',
	'place' => '524',
	'quarter' => '19012',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cagliari',
	'title_category' => 'count',
	'region' => '132',
	'place' => '525',
	'quarter' => '19013',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Oristano',
	'title_category' => 'count',
	'region' => '132',
	'place' => '526',
	'quarter' => '19014',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dolia',
	'title_category' => 'knight',
	'region' => '132',
	'place' => '527',
	'quarter' => '19015',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Iglesias',
	'title_category' => 'knight',
	'region' => '132',
	'place' => '528',
	'quarter' => '19016',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Palermo',
	'title_category' => 'lord',
	'region' => '133',
	'place' => '529',
	'quarter' => '19017',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Agrigento',
	'title_category' => 'count',
	'region' => '133',
	'place' => '530',
	'quarter' => '19018',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cefalu',
	'title_category' => 'baron',
	'region' => '133',
	'place' => '531',
	'quarter' => '19019',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Marsala',
	'title_category' => 'knight',
	'region' => '133',
	'place' => '532',
	'quarter' => '19020',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Messina',
	'title_category' => 'count',
	'region' => '134',
	'place' => '533',
	'quarter' => '19021',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Taormina',
	'title_category' => 'baron',
	'region' => '134',
	'place' => '534',
	'quarter' => '19022',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Catania',
	'title_category' => 'baron',
	'region' => '134',
	'place' => '535',
	'quarter' => '19023',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Troina',
	'title_category' => 'baron',
	'region' => '134',
	'place' => '536',
	'quarter' => '19024',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Siracusa',
	'title_category' => 'count',
	'region' => '135',
	'place' => '537',
	'quarter' => '19025',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Caltagirone',
	'title_category' => 'lord',
	'region' => '135',
	'place' => '538',
	'quarter' => '19026',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Valletta',
	'title_category' => 'count',
	'region' => '135',
	'place' => '539',
	'quarter' => '19027',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Modica',
	'title_category' => 'count',
	'region' => '135',
	'place' => '540',
	'quarter' => '19028',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tangiers',
	'title_category' => 'count',
	'region' => '136',
	'place' => '541',
	'quarter' => '19029',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ceuta',
	'title_category' => 'count',
	'region' => '136',
	'place' => '542',
	'quarter' => '19030',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ouazzane',
	'title_category' => 'count',
	'region' => '136',
	'place' => '543',
	'quarter' => '19031',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tetouan',
	'title_category' => 'count',
	'region' => '136',
	'place' => '544',
	'quarter' => '19032',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Anfa',
	'title_category' => 'count',
	'region' => '137',
	'place' => '545',
	'quarter' => '19033',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rabat',
	'title_category' => 'count',
	'region' => '137',
	'place' => '546',
	'quarter' => '19034',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sale',
	'title_category' => 'baron',
	'region' => '137',
	'place' => '547',
	'quarter' => '19035',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Fedala',
	'title_category' => 'count',
	'region' => '137',
	'place' => '548',
	'quarter' => '19036',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Fez',
	'title_category' => 'lord',
	'region' => '138',
	'place' => '549',
	'quarter' => '19037',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sefrou',
	'title_category' => 'baron',
	'region' => '138',
	'place' => '550',
	'quarter' => '19038',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Taza',
	'title_category' => 'count',
	'region' => '138',
	'place' => '551',
	'quarter' => '19039',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Meknes',
	'title_category' => 'count',
	'region' => '138',
	'place' => '552',
	'quarter' => '19040',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Marrakesh',
	'title_category' => 'lord',
	'region' => '139',
	'place' => '553',
	'quarter' => '19041',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ouarzazate',
	'title_category' => 'count',
	'region' => '139',
	'place' => '554',
	'quarter' => '19042',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mogador',
	'title_category' => 'count',
	'region' => '139',
	'place' => '555',
	'quarter' => '19043',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Benhaddou',
	'title_category' => 'count',
	'region' => '139',
	'place' => '556',
	'quarter' => '19044',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Taroudant',
	'title_category' => 'lord',
	'region' => '140',
	'place' => '557',
	'quarter' => '19045',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Agadir',
	'title_category' => 'count',
	'region' => '140',
	'place' => '558',
	'quarter' => '19046',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tindouf',
	'title_category' => 'count',
	'region' => '140',
	'place' => '559',
	'quarter' => '19047',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tinmel',
	'title_category' => 'count',
	'region' => '140',
	'place' => '560',
	'quarter' => '19048',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Figuig',
	'title_category' => 'count',
	'region' => '141',
	'place' => '561',
	'quarter' => '19049',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sijilmassa',
	'title_category' => 'lord',
	'region' => '141',
	'place' => '562',
	'quarter' => '19050',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tinghir',
	'title_category' => 'count',
	'region' => '141',
	'place' => '563',
	'quarter' => '19051',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rachidiya',
	'title_category' => 'baron',
	'region' => '141',
	'place' => '564',
	'quarter' => '19052',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tlemcen',
	'title_category' => 'lord',
	'region' => '142',
	'place' => '565',
	'quarter' => '19053',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Oujda',
	'title_category' => 'baron',
	'region' => '142',
	'place' => '566',
	'quarter' => '19054',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mellila',
	'title_category' => 'count',
	'region' => '142',
	'place' => '567',
	'quarter' => '19055',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Taourirt',
	'title_category' => 'baron',
	'region' => '142',
	'place' => '568',
	'quarter' => '19056',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Oran',
	'title_category' => 'count',
	'region' => '143',
	'place' => '569',
	'quarter' => '19057',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mostaganem',
	'title_category' => 'count',
	'region' => '143',
	'place' => '570',
	'quarter' => '19058',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tiaret',
	'title_category' => 'count',
	'region' => '143',
	'place' => '571',
	'quarter' => '19059',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mascara',
	'title_category' => 'count',
	'region' => '143',
	'place' => '572',
	'quarter' => '19060',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Djelfa',
	'title_category' => 'count',
	'region' => '144',
	'place' => '573',
	'quarter' => '19061',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Laghouat',
	'title_category' => 'baron',
	'region' => '144',
	'place' => '574',
	'quarter' => '19062',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ghardaia',
	'title_category' => 'count',
	'region' => '144',
	'place' => '575',
	'quarter' => '19063',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Menia',
	'title_category' => 'lord',
	'region' => '144',
	'place' => '576',
	'quarter' => '19064',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Khaled',
	'title_category' => 'baron',
	'region' => '145',
	'place' => '577',
	'quarter' => '19065',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Biskra',
	'title_category' => 'count',
	'region' => '145',
	'place' => '578',
	'quarter' => '19066',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ouargla',
	'title_category' => 'count',
	'region' => '145',
	'place' => '579',
	'quarter' => '19067',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Touggourt',
	'title_category' => 'count',
	'region' => '145',
	'place' => '580',
	'quarter' => '19068',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Algiers',
	'title_category' => 'count',
	'region' => '146',
	'place' => '581',
	'quarter' => '19069',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Medea',
	'title_category' => 'baron',
	'region' => '146',
	'place' => '582',
	'quarter' => '19070',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tedelles',
	'title_category' => 'baron',
	'region' => '146',
	'place' => '583',
	'quarter' => '19071',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Achir',
	'title_category' => 'baron',
	'region' => '146',
	'place' => '584',
	'quarter' => '19072',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bejaia',
	'title_category' => 'baron',
	'region' => '147',
	'place' => '585',
	'quarter' => '19073',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Jijel',
	'title_category' => 'baron',
	'region' => '147',
	'place' => '586',
	'quarter' => '19074',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Setif',
	'title_category' => 'count',
	'region' => '147',
	'place' => '587',
	'quarter' => '19075',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Eulma',
	'title_category' => 'baron',
	'region' => '147',
	'place' => '588',
	'quarter' => '19076',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Annaba',
	'title_category' => 'baron',
	'region' => '148',
	'place' => '589',
	'quarter' => '19077',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tabarka',
	'title_category' => 'baron',
	'region' => '148',
	'place' => '590',
	'quarter' => '19078',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Jendouba',
	'title_category' => 'baron',
	'region' => '148',
	'place' => '591',
	'quarter' => '19079',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kaf',
	'title_category' => 'baron',
	'region' => '148',
	'place' => '592',
	'quarter' => '19080',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tunis',
	'title_category' => 'count',
	'region' => '149',
	'place' => '593',
	'quarter' => '19081',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zaghouan',
	'title_category' => 'baron',
	'region' => '149',
	'place' => '594',
	'quarter' => '19082',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hammamet',
	'title_category' => 'count',
	'region' => '149',
	'place' => '595',
	'quarter' => '19083',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bizerte',
	'title_category' => 'count',
	'region' => '149',
	'place' => '596',
	'quarter' => '19084',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kairouan',
	'title_category' => 'lord',
	'region' => '150',
	'place' => '597',
	'quarter' => '19085',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sousse',
	'title_category' => 'count',
	'region' => '150',
	'place' => '598',
	'quarter' => '19086',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sfax',
	'title_category' => 'count',
	'region' => '150',
	'place' => '599',
	'quarter' => '19087',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mahdia',
	'title_category' => 'baron',
	'region' => '150',
	'place' => '600',
	'quarter' => '19088',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gabes',
	'title_category' => 'count',
	'region' => '151',
	'place' => '601',
	'quarter' => '19089',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gafsa',
	'title_category' => 'count',
	'region' => '151',
	'place' => '602',
	'quarter' => '19090',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kebili',
	'title_category' => 'count',
	'region' => '151',
	'place' => '603',
	'quarter' => '19091',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tozeur',
	'title_category' => 'baron',
	'region' => '151',
	'place' => '604',
	'quarter' => '19092',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ghadames',
	'title_category' => 'count',
	'region' => '152',
	'place' => '605',
	'quarter' => '19093',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Medenine',
	'title_category' => 'count',
	'region' => '152',
	'place' => '606',
	'quarter' => '19094',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tamanrasset',
	'title_category' => 'baron',
	'region' => '152',
	'place' => '607',
	'quarter' => '19095',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ghat',
	'title_category' => 'count',
	'region' => '152',
	'place' => '608',
	'quarter' => '19096',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tripoli',
	'title_category' => 'count',
	'region' => '153',
	'place' => '609',
	'quarter' => '19097',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zliten',
	'title_category' => 'baron',
	'region' => '153',
	'place' => '610',
	'quarter' => '19098',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Misrata',
	'title_category' => 'count',
	'region' => '153',
	'place' => '611',
	'quarter' => '19099',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zuwara',
	'title_category' => 'baron',
	'region' => '153',
	'place' => '612',
	'quarter' => '19100',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Germa',
	'title_category' => 'count',
	'region' => '154',
	'place' => '613',
	'quarter' => '19101',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sabha',
	'title_category' => 'baron',
	'region' => '154',
	'place' => '614',
	'quarter' => '19102',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zouila',
	'title_category' => 'baron',
	'region' => '154',
	'place' => '615',
	'quarter' => '19103',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Qatrun',
	'title_category' => 'baron',
	'region' => '154',
	'place' => '616',
	'quarter' => '19104',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kufra',
	'title_category' => 'count',
	'region' => '155',
	'place' => '617',
	'quarter' => '19105',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ghiranghedi',
	'title_category' => 'lord',
	'region' => '155',
	'place' => '618',
	'quarter' => '19106',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Awjila',
	'title_category' => 'baron',
	'region' => '155',
	'place' => '619',
	'quarter' => '19107',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Marada',
	'title_category' => 'baron',
	'region' => '155',
	'place' => '620',
	'quarter' => '19108',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Benghazi',
	'title_category' => 'count',
	'region' => '156',
	'place' => '621',
	'quarter' => '19109',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Derna',
	'title_category' => 'baron',
	'region' => '156',
	'place' => '622',
	'quarter' => '19110',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tobruk',
	'title_category' => 'baron',
	'region' => '156',
	'place' => '623',
	'quarter' => '19111',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ajdabiya',
	'title_category' => 'baron',
	'region' => '156',
	'place' => '624',
	'quarter' => '19112',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Alexandria',
	'title_category' => 'count',
	'region' => '157',
	'place' => '625',
	'quarter' => '19113',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rosetta',
	'title_category' => 'count',
	'region' => '157',
	'place' => '626',
	'quarter' => '19114',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Damietta',
	'title_category' => 'count',
	'region' => '157',
	'place' => '627',
	'quarter' => '19115',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mansoura',
	'title_category' => 'count',
	'region' => '157',
	'place' => '628',
	'quarter' => '19116',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cairo',
	'title_category' => 'lord',
	'region' => '158',
	'place' => '629',
	'quarter' => '19117',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Helwan',
	'title_category' => 'count',
	'region' => '158',
	'place' => '630',
	'quarter' => '19118',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Fayum',
	'title_category' => 'count',
	'region' => '158',
	'place' => '631',
	'quarter' => '19119',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Natrun',
	'title_category' => 'lord',
	'region' => '158',
	'place' => '632',
	'quarter' => '19120',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Minya',
	'title_category' => 'count',
	'region' => '159',
	'place' => '633',
	'quarter' => '19121',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Siwa',
	'title_category' => 'baron',
	'region' => '159',
	'place' => '634',
	'quarter' => '19122',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Farafra',
	'title_category' => 'count',
	'region' => '159',
	'place' => '635',
	'quarter' => '19123',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Anba Boula',
	'title_category' => 'lord',
	'region' => '159',
	'place' => '636',
	'quarter' => '19124',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Asyut',
	'title_category' => 'count',
	'region' => '160',
	'place' => '637',
	'quarter' => '19125',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kharga',
	'title_category' => 'baron',
	'region' => '160',
	'place' => '638',
	'quarter' => '19126',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aswan',
	'title_category' => 'count',
	'region' => '160',
	'place' => '639',
	'quarter' => '19127',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zinaiqa',
	'title_category' => 'lord',
	'region' => '160',
	'place' => '640',
	'quarter' => '19128',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Liegnitz',
	'title_category' => 'duke',
	'region' => '161',
	'place' => '641',
	'quarter' => '19129',
	'religion' => '1',
	'rank' => '9',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Glogau',
	'title_category' => 'duke',
	'region' => '161',
	'place' => '642',
	'quarter' => '19130',
	'religion' => '1',
	'rank' => '9',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Breslau',
	'title_category' => 'knight',
	'region' => '161',
	'place' => '643',
	'quarter' => '19131',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Leubus',
	'title_category' => 'knight',
	'region' => '161',
	'place' => '644',
	'quarter' => '19132',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Krakow',
	'title_category' => 'lord',
	'region' => '162',
	'place' => '645',
	'quarter' => '19133',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Teczyn',
	'title_category' => 'burgrave',
	'region' => '162',
	'place' => '646',
	'quarter' => '19134',
	'religion' => '1',
	'rank' => '6',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tarnau',
	'title_category' => 'burgrave',
	'region' => '162',
	'place' => '647',
	'quarter' => '19135',
	'religion' => '1',
	'rank' => '6',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Salzberg',
	'title_category' => 'knight',
	'region' => '162',
	'place' => '648',
	'quarter' => '19136',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gnesen',
	'title_category' => 'burgrave',
	'region' => '163',
	'place' => '649',
	'quarter' => '19137',
	'religion' => '1',
	'rank' => '6',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Posen',
	'title_category' => 'duke',
	'region' => '163',
	'place' => '650',
	'quarter' => '19138',
	'religion' => '1',
	'rank' => '9',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Konin',
	'title_category' => 'knight',
	'region' => '163',
	'place' => '651',
	'quarter' => '19139',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kalisz',
	'title_category' => 'burgrave',
	'region' => '163',
	'place' => '652',
	'quarter' => '19140',
	'religion' => '1',
	'rank' => '6',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Plock',
	'title_category' => 'duke',
	'region' => '164',
	'place' => '653',
	'quarter' => '19141',
	'religion' => '1',
	'rank' => '9',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Warsaw',
	'title_category' => 'count',
	'region' => '164',
	'place' => '654',
	'quarter' => '19142',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Leslau',
	'title_category' => 'knight',
	'region' => '164',
	'place' => '655',
	'quarter' => '19143',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Radomir',
	'title_category' => 'burgrave',
	'region' => '164',
	'place' => '656',
	'quarter' => '19144',
	'religion' => '1',
	'rank' => '6',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Brest',
	'title_category' => 'burgrave',
	'region' => '165',
	'place' => '657',
	'quarter' => '19145',
	'religion' => '1',
	'rank' => '6',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Goroden',
	'title_category' => 'baron',
	'region' => '165',
	'place' => '658',
	'quarter' => '19146',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kobryn',
	'title_category' => 'baron',
	'region' => '165',
	'place' => '659',
	'quarter' => '19147',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Wolkowysk',
	'title_category' => 'baron',
	'region' => '165',
	'place' => '660',
	'quarter' => '19148',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tracken',
	'title_category' => 'lord',
	'region' => '166',
	'place' => '661',
	'quarter' => '19149',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vilnius',
	'title_category' => 'count',
	'region' => '166',
	'place' => '662',
	'quarter' => '19150',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kauen',
	'title_category' => 'count',
	'region' => '166',
	'place' => '663',
	'quarter' => '19151',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Minsk',
	'title_category' => 'count',
	'region' => '166',
	'place' => '664',
	'quarter' => '19152',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pula',
	'title_category' => 'count',
	'region' => '167',
	'place' => '665',
	'quarter' => '19153',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rovigno',
	'title_category' => 'lord',
	'region' => '167',
	'place' => '666',
	'quarter' => '19154',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vikla',
	'title_category' => 'count',
	'region' => '167',
	'place' => '667',
	'quarter' => '19155',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Trsat',
	'title_category' => 'count',
	'region' => '167',
	'place' => '668',
	'quarter' => '19156',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ragusa',
	'title_category' => 'knight',
	'region' => '168',
	'place' => '669',
	'quarter' => '19157',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zadar',
	'title_category' => 'knight',
	'region' => '168',
	'place' => '670',
	'quarter' => '19158',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Split',
	'title_category' => 'count',
	'region' => '168',
	'place' => '671',
	'quarter' => '19159',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Biograd',
	'title_category' => 'baron',
	'region' => '168',
	'place' => '672',
	'quarter' => '19160',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Knin',
	'title_category' => 'lord',
	'region' => '169',
	'place' => '673',
	'quarter' => '19161',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bihac',
	'title_category' => 'count',
	'region' => '169',
	'place' => '674',
	'quarter' => '19162',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Konjic',
	'title_category' => 'knight',
	'region' => '169',
	'place' => '675',
	'quarter' => '19163',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kotor',
	'title_category' => 'duke',
	'region' => '169',
	'place' => '676',
	'quarter' => '19164',
	'religion' => '1',
	'rank' => '9',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gyor',
	'title_category' => 'count',
	'region' => '170',
	'place' => '677',
	'quarter' => '19165',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tyrnau',
	'title_category' => 'knight',
	'region' => '170',
	'place' => '678',
	'quarter' => '19166',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nitra',
	'title_category' => 'duke',
	'region' => '170',
	'place' => '679',
	'quarter' => '19167',
	'religion' => '1',
	'rank' => '9',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sopron',
	'title_category' => 'baron',
	'region' => '170',
	'place' => '680',
	'quarter' => '19168',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Veszprem',
	'title_category' => 'count',
	'region' => '171',
	'place' => '681',
	'quarter' => '19169',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Fehervar',
	'title_category' => 'count',
	'region' => '171',
	'place' => '682',
	'quarter' => '19170',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Egerszeg',
	'title_category' => 'count',
	'region' => '171',
	'place' => '683',
	'quarter' => '19171',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pecs',
	'title_category' => 'count',
	'region' => '171',
	'place' => '684',
	'quarter' => '19172',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Esztergom',
	'title_category' => 'lord',
	'region' => '172',
	'place' => '685',
	'quarter' => '19173',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bystrica',
	'title_category' => 'knight',
	'region' => '172',
	'place' => '686',
	'quarter' => '19174',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Krupina',
	'title_category' => 'knight',
	'region' => '172',
	'place' => '687',
	'quarter' => '19175',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Leua',
	'title_category' => 'count',
	'region' => '172',
	'place' => '688',
	'quarter' => '19176',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Eger',
	'title_category' => 'baron',
	'region' => '173',
	'place' => '689',
	'quarter' => '19177',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Diosgyor',
	'title_category' => 'count',
	'region' => '173',
	'place' => '690',
	'quarter' => '19178',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bartfeld',
	'title_category' => 'knight',
	'region' => '173',
	'place' => '691',
	'quarter' => '19179',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kassow',
	'title_category' => 'lord',
	'region' => '173',
	'place' => '692',
	'quarter' => '19180',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Buda',
	'title_category' => 'duke',
	'region' => '174',
	'place' => '693',
	'quarter' => '19181',
	'religion' => '1',
	'rank' => '9',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kecskemet',
	'title_category' => 'count',
	'region' => '174',
	'place' => '694',
	'quarter' => '19182',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Debrecen',
	'title_category' => 'knight',
	'region' => '174',
	'place' => '695',
	'quarter' => '19183',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zounok',
	'title_category' => 'count',
	'region' => '174',
	'place' => '696',
	'quarter' => '19184',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pecs',
	'title_category' => 'count',
	'region' => '175',
	'place' => '697',
	'quarter' => '19185',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vukovar',
	'title_category' => 'count',
	'region' => '175',
	'place' => '698',
	'quarter' => '19186',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kalocsa',
	'title_category' => 'knight',
	'region' => '175',
	'place' => '699',
	'quarter' => '19187',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Virovitica',
	'title_category' => 'count',
	'region' => '175',
	'place' => '700',
	'quarter' => '19188',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Alba Julia',
	'title_category' => 'duke',
	'region' => '176',
	'place' => '701',
	'quarter' => '19189',
	'religion' => '1',
	'rank' => '9',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Schaasburg',
	'title_category' => 'count',
	'region' => '176',
	'place' => '702',
	'quarter' => '19190',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Klausenburg',
	'title_category' => 'count',
	'region' => '176',
	'place' => '703',
	'quarter' => '19191',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Carta',
	'title_category' => 'knight',
	'region' => '176',
	'place' => '704',
	'quarter' => '19192',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Targu Jiu',
	'title_category' => 'count',
	'region' => '177',
	'place' => '705',
	'quarter' => '19193',
	'religion' => '2',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Drobeta',
	'title_category' => 'burgrave',
	'region' => '177',
	'place' => '706',
	'quarter' => '19194',
	'religion' => '2',
	'rank' => '6',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Curtea Arges',
	'title_category' => 'lord',
	'region' => '177',
	'place' => '707',
	'quarter' => '19195',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tismana',
	'title_category' => 'lord',
	'region' => '177',
	'place' => '708',
	'quarter' => '19196',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Targoviste',
	'title_category' => 'count',
	'region' => '178',
	'place' => '709',
	'quarter' => '19197',
	'religion' => '2',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bucharest',
	'title_category' => 'baron',
	'region' => '178',
	'place' => '710',
	'quarter' => '19198',
	'religion' => '2',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Torzburg',
	'title_category' => 'burgrave',
	'region' => '178',
	'place' => '711',
	'quarter' => '19199',
	'religion' => '2',
	'rank' => '6',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kronstadt',
	'title_category' => 'burgrave',
	'region' => '178',
	'place' => '712',
	'quarter' => '19200',
	'religion' => '2',
	'rank' => '6',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Constanta',
	'title_category' => 'count',
	'region' => '179',
	'place' => '713',
	'quarter' => '19201',
	'religion' => '2',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Harsova',
	'title_category' => 'baron',
	'region' => '179',
	'place' => '714',
	'quarter' => '19202',
	'religion' => '2',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tulcea',
	'title_category' => 'baron',
	'region' => '179',
	'place' => '715',
	'quarter' => '19203',
	'religion' => '2',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Calarasi',
	'title_category' => 'baron',
	'region' => '179',
	'place' => '716',
	'quarter' => '19204',
	'religion' => '2',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Suceava',
	'title_category' => 'lord',
	'region' => '180',
	'place' => '717',
	'quarter' => '19205',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Orhei',
	'title_category' => 'baron',
	'region' => '180',
	'place' => '718',
	'quarter' => '19206',
	'religion' => '2',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Odessa',
	'title_category' => 'count',
	'region' => '180',
	'place' => '719',
	'quarter' => '19207',
	'religion' => '2',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chisinau',
	'title_category' => 'baron',
	'region' => '180',
	'place' => '720',
	'quarter' => '19208',
	'religion' => '2',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sofia',
	'title_category' => 'count',
	'region' => '181',
	'place' => '721',
	'quarter' => '19209',
	'religion' => '2',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pleven',
	'title_category' => 'count',
	'region' => '181',
	'place' => '722',
	'quarter' => '19210',
	'religion' => '2',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Stip',
	'title_category' => 'baron',
	'region' => '181',
	'place' => '723',
	'quarter' => '19211',
	'religion' => '2',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rila',
	'title_category' => 'lord',
	'region' => '181',
	'place' => '724',
	'quarter' => '19212',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Varna',
	'title_category' => 'count',
	'region' => '182',
	'place' => '725',
	'quarter' => '19213',
	'religion' => '2',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pliska',
	'title_category' => 'count',
	'region' => '182',
	'place' => '726',
	'quarter' => '19214',
	'religion' => '2',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Preslav',
	'title_category' => 'lord',
	'region' => '182',
	'place' => '727',
	'quarter' => '19215',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tarnovo',
	'title_category' => 'count',
	'region' => '182',
	'place' => '728',
	'quarter' => '19216',
	'religion' => '2',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gorazde',
	'title_category' => 'duke',
	'region' => '183',
	'place' => '729',
	'quarter' => '19217',
	'religion' => '2',
	'rank' => '9',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zenica',
	'title_category' => 'count',
	'region' => '183',
	'place' => '730',
	'quarter' => '19218',
	'religion' => '2',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sebrenik',
	'title_category' => 'baron',
	'region' => '183',
	'place' => '731',
	'quarter' => '19219',
	'religion' => '2',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Visegrad',
	'title_category' => 'count',
	'region' => '183',
	'place' => '732',
	'quarter' => '19220',
	'religion' => '2',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Belgrade',
	'title_category' => 'count',
	'region' => '184',
	'place' => '733',
	'quarter' => '19221',
	'religion' => '2',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rasa',
	'title_category' => 'lord',
	'region' => '184',
	'place' => '734',
	'quarter' => '19222',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Valjevo',
	'title_category' => 'baron',
	'region' => '184',
	'place' => '735',
	'quarter' => '19223',
	'religion' => '2',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bukovo',
	'title_category' => 'lord',
	'region' => '184',
	'place' => '736',
	'quarter' => '19224',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rashka',
	'title_category' => 'lord',
	'region' => '185',
	'place' => '737',
	'quarter' => '19225',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bukovo',
	'title_category' => 'lord',
	'region' => '185',
	'place' => '738',
	'quarter' => '19226',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Krusevac',
	'title_category' => 'count',
	'region' => '185',
	'place' => '739',
	'quarter' => '19227',
	'religion' => '2',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zica',
	'title_category' => 'lord',
	'region' => '185',
	'place' => '740',
	'quarter' => '19228',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Prizren',
	'title_category' => 'count',
	'region' => '186',
	'place' => '741',
	'quarter' => '19229',
	'religion' => '2',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kumanovo',
	'title_category' => 'count',
	'region' => '186',
	'place' => '742',
	'quarter' => '19230',
	'religion' => '2',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Skopje',
	'title_category' => 'count',
	'region' => '186',
	'place' => '743',
	'quarter' => '19231',
	'religion' => '2',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vitina',
	'title_category' => 'lord',
	'region' => '186',
	'place' => '744',
	'quarter' => '19232',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pristina',
	'title_category' => 'count',
	'region' => '187',
	'place' => '745',
	'quarter' => '19233',
	'religion' => '2',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zvecan',
	'title_category' => 'count',
	'region' => '187',
	'place' => '746',
	'quarter' => '19234',
	'religion' => '2',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pec',
	'title_category' => 'lord',
	'region' => '187',
	'place' => '747',
	'quarter' => '19235',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Berane',
	'title_category' => 'lord',
	'region' => '187',
	'place' => '748',
	'quarter' => '19236',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Monastyrski',
	'title_category' => 'lord',
	'region' => '188',
	'place' => '749',
	'quarter' => '19237',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Samkarsh',
	'title_category' => 'count',
	'region' => '188',
	'place' => '750',
	'quarter' => '19238',
	'religion' => '3',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Poltava',
	'title_category' => 'count',
	'region' => '188',
	'place' => '751',
	'quarter' => '19239',
	'religion' => '3',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Oleshia',
	'title_category' => 'baron',
	'region' => '188',
	'place' => '752',
	'quarter' => '19240',
	'religion' => '3',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pereyaslav',
	'title_category' => 'lord',
	'region' => '189',
	'place' => '753',
	'quarter' => '19241',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Korsun',
	'title_category' => 'lord',
	'region' => '189',
	'place' => '754',
	'quarter' => '19242',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kaniv',
	'title_category' => 'baron',
	'region' => '189',
	'place' => '755',
	'quarter' => '19243',
	'religion' => '3',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cherkasy',
	'title_category' => 'baron',
	'region' => '189',
	'place' => '756',
	'quarter' => '19244',
	'religion' => '3',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kiev',
	'title_category' => 'lord',
	'region' => '190',
	'place' => '757',
	'quarter' => '19245',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Borispyl',
	'title_category' => 'baron',
	'region' => '190',
	'place' => '758',
	'quarter' => '19246',
	'religion' => '3',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Yuriev',
	'title_category' => 'baron',
	'region' => '190',
	'place' => '759',
	'quarter' => '19247',
	'religion' => '3',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pechersk',
	'title_category' => 'lord',
	'region' => '190',
	'place' => '760',
	'quarter' => '19248',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Halych',
	'title_category' => 'lord',
	'region' => '191',
	'place' => '761',
	'quarter' => '19249',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kolomyia',
	'title_category' => 'lord',
	'region' => '191',
	'place' => '762',
	'quarter' => '19250',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lviv',
	'title_category' => 'count',
	'region' => '191',
	'place' => '763',
	'quarter' => '19251',
	'religion' => '3',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Terebovlia',
	'title_category' => 'count',
	'region' => '191',
	'place' => '764',
	'quarter' => '19252',
	'religion' => '3',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Turov',
	'title_category' => 'lord',
	'region' => '192',
	'place' => '765',
	'quarter' => '19253',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pinesk',
	'title_category' => 'baron',
	'region' => '192',
	'place' => '766',
	'quarter' => '19254',
	'religion' => '3',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Slutsk',
	'title_category' => 'count',
	'region' => '192',
	'place' => '767',
	'quarter' => '19255',
	'religion' => '3',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Korosten',
	'title_category' => 'baron',
	'region' => '192',
	'place' => '768',
	'quarter' => '19256',
	'religion' => '3',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tchernigov',
	'title_category' => 'lord',
	'region' => '193',
	'place' => '769',
	'quarter' => '19257',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lyubech',
	'title_category' => 'baron',
	'region' => '193',
	'place' => '770',
	'quarter' => '19258',
	'religion' => '3',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gomel',
	'title_category' => 'count',
	'region' => '193',
	'place' => '771',
	'quarter' => '19259',
	'religion' => '3',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mazyr',
	'title_category' => 'lord',
	'region' => '193',
	'place' => '772',
	'quarter' => '19260',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Polotsk',
	'title_category' => 'lord',
	'region' => '194',
	'place' => '773',
	'quarter' => '19261',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Orsha',
	'title_category' => 'baron',
	'region' => '194',
	'place' => '774',
	'quarter' => '19262',
	'religion' => '3',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vitebsk',
	'title_category' => 'count',
	'region' => '194',
	'place' => '775',
	'quarter' => '19263',
	'religion' => '3',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Barysaw',
	'title_category' => 'baron',
	'region' => '194',
	'place' => '776',
	'quarter' => '19264',
	'religion' => '3',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Smolensk',
	'title_category' => 'lord',
	'region' => '195',
	'place' => '777',
	'quarter' => '19265',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bryansk',
	'title_category' => 'count',
	'region' => '195',
	'place' => '778',
	'quarter' => '19266',
	'religion' => '3',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vyazma',
	'title_category' => 'baron',
	'region' => '195',
	'place' => '779',
	'quarter' => '19267',
	'religion' => '3',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Roslav',
	'title_category' => 'baron',
	'region' => '195',
	'place' => '780',
	'quarter' => '19268',
	'religion' => '3',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ryazan',
	'title_category' => 'lord',
	'region' => '196',
	'place' => '781',
	'quarter' => '19269',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kolomna',
	'title_category' => 'baron',
	'region' => '196',
	'place' => '782',
	'quarter' => '19270',
	'religion' => '3',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kasimov',
	'title_category' => 'baron',
	'region' => '196',
	'place' => '783',
	'quarter' => '19271',
	'religion' => '3',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tula',
	'title_category' => 'baron',
	'region' => '196',
	'place' => '784',
	'quarter' => '19272',
	'religion' => '3',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Moscow',
	'title_category' => 'lord',
	'region' => '197',
	'place' => '785',
	'quarter' => '19273',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sergiev',
	'title_category' => 'lord',
	'region' => '197',
	'place' => '786',
	'quarter' => '19274',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zvenigorod',
	'title_category' => 'baron',
	'region' => '197',
	'place' => '787',
	'quarter' => '19275',
	'religion' => '3',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Simonov',
	'title_category' => 'lord',
	'region' => '197',
	'place' => '788',
	'quarter' => '19276',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pleskov',
	'title_category' => 'lord',
	'region' => '198',
	'place' => '789',
	'quarter' => '19277',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Porkhov',
	'title_category' => 'lord',
	'region' => '198',
	'place' => '790',
	'quarter' => '19278',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ostrov',
	'title_category' => 'count',
	'region' => '198',
	'place' => '791',
	'quarter' => '19279',
	'religion' => '3',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gdov',
	'title_category' => 'count',
	'region' => '198',
	'place' => '792',
	'quarter' => '19280',
	'religion' => '3',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Novgorod',
	'title_category' => 'lord',
	'region' => '199',
	'place' => '793',
	'quarter' => '19281',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rusa',
	'title_category' => 'count',
	'region' => '199',
	'place' => '794',
	'quarter' => '19282',
	'religion' => '3',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ladoga',
	'title_category' => 'count',
	'region' => '199',
	'place' => '795',
	'quarter' => '19283',
	'religion' => '3',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Schlisselburg',
	'title_category' => 'baron',
	'region' => '199',
	'place' => '796',
	'quarter' => '19284',
	'religion' => '3',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bolgar',
	'title_category' => 'count',
	'region' => '200',
	'place' => '797',
	'quarter' => '19285',
	'religion' => '3',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bilyar',
	'title_category' => 'baron',
	'region' => '200',
	'place' => '798',
	'quarter' => '19286',
	'religion' => '3',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kazan',
	'title_category' => 'baron',
	'region' => '200',
	'place' => '799',
	'quarter' => '19287',
	'religion' => '3',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ufa',
	'title_category' => 'count',
	'region' => '200',
	'place' => '800',
	'quarter' => '19288',
	'religion' => '3',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vladimir',
	'title_category' => 'count',
	'region' => '201',
	'place' => '801',
	'quarter' => '19289',
	'religion' => '3',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vyazniki',
	'title_category' => 'lord',
	'region' => '201',
	'place' => '802',
	'quarter' => '19290',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Suzdal',
	'title_category' => 'baron',
	'region' => '201',
	'place' => '803',
	'quarter' => '19291',
	'religion' => '3',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nizhny',
	'title_category' => 'count',
	'region' => '201',
	'place' => '804',
	'quarter' => '19292',
	'religion' => '3',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vologda',
	'title_category' => 'count',
	'region' => '202',
	'place' => '805',
	'quarter' => '19293',
	'religion' => '3',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rybinsk',
	'title_category' => 'baron',
	'region' => '202',
	'place' => '806',
	'quarter' => '19294',
	'religion' => '3',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cherepovets',
	'title_category' => 'lord',
	'region' => '202',
	'place' => '807',
	'quarter' => '19295',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kirillov',
	'title_category' => 'lord',
	'region' => '202',
	'place' => '808',
	'quarter' => '19296',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Oryol',
	'title_category' => 'baron',
	'region' => '203',
	'place' => '809',
	'quarter' => '19297',
	'religion' => '3',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Novosil',
	'title_category' => 'count',
	'region' => '203',
	'place' => '810',
	'quarter' => '19298',
	'religion' => '3',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kromy',
	'title_category' => 'baron',
	'region' => '203',
	'place' => '811',
	'quarter' => '19299',
	'religion' => '3',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lipetsk',
	'title_category' => 'baron',
	'region' => '203',
	'place' => '812',
	'quarter' => '19300',
	'religion' => '3',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sevsk',
	'title_category' => 'baron',
	'region' => '204',
	'place' => '813',
	'quarter' => '19301',
	'religion' => '3',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rylsk',
	'title_category' => 'baron',
	'region' => '204',
	'place' => '814',
	'quarter' => '19302',
	'religion' => '3',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kursk',
	'title_category' => 'count',
	'region' => '204',
	'place' => '815',
	'quarter' => '19303',
	'religion' => '3',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Olgov',
	'title_category' => 'count',
	'region' => '204',
	'place' => '816',
	'quarter' => '19304',
	'religion' => '3',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Atil',
	'title_category' => 'lord',
	'region' => '205',
	'place' => '817',
	'quarter' => '19305',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saraibatu',
	'title_category' => 'count',
	'region' => '205',
	'place' => '818',
	'quarter' => '19306',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saraiberke',
	'title_category' => 'count',
	'region' => '205',
	'place' => '819',
	'quarter' => '19307',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Khumar',
	'title_category' => 'count',
	'region' => '205',
	'place' => '820',
	'quarter' => '19308',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gurganj',
	'title_category' => 'lord',
	'region' => '206',
	'place' => '821',
	'quarter' => '19309',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Khiva',
	'title_category' => 'count',
	'region' => '206',
	'place' => '822',
	'quarter' => '19310',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saraidzhuk',
	'title_category' => 'count',
	'region' => '206',
	'place' => '823',
	'quarter' => '19311',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mishrian',
	'title_category' => 'count',
	'region' => '206',
	'place' => '824',
	'quarter' => '19312',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Constantinople',
	'title_category' => 'lord',
	'region' => '207',
	'place' => '825',
	'quarter' => '19313',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Redosto',
	'title_category' => 'baron',
	'region' => '207',
	'place' => '826',
	'quarter' => '19314',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Edirne',
	'title_category' => 'count',
	'region' => '207',
	'place' => '827',
	'quarter' => '19315',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Corlu',
	'title_category' => 'baron',
	'region' => '207',
	'place' => '828',
	'quarter' => '19316',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Thessaloniki',
	'title_category' => 'lord',
	'region' => '208',
	'place' => '829',
	'quarter' => '19317',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Stratonicea',
	'title_category' => 'baron',
	'region' => '208',
	'place' => '830',
	'quarter' => '19318',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Melnik',
	'title_category' => 'lord',
	'region' => '208',
	'place' => '831',
	'quarter' => '19319',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hilandar',
	'title_category' => 'lord',
	'region' => '208',
	'place' => '832',
	'quarter' => '19320',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Athens',
	'title_category' => 'lord',
	'region' => '209',
	'place' => '833',
	'quarter' => '19321',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lamia',
	'title_category' => 'baron',
	'region' => '209',
	'place' => '834',
	'quarter' => '19322',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Thebes',
	'title_category' => 'count',
	'region' => '209',
	'place' => '835',
	'quarter' => '19323',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Larissa',
	'title_category' => 'count',
	'region' => '209',
	'place' => '836',
	'quarter' => '19324',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mystras',
	'title_category' => 'lord',
	'region' => '210',
	'place' => '837',
	'quarter' => '19325',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Modon',
	'title_category' => 'baron',
	'region' => '210',
	'place' => '838',
	'quarter' => '19326',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Corinth',
	'title_category' => 'count',
	'region' => '210',
	'place' => '839',
	'quarter' => '19327',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Glarentza',
	'title_category' => 'baron',
	'region' => '210',
	'place' => '840',
	'quarter' => '19328',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Arta',
	'title_category' => 'lord',
	'region' => '211',
	'place' => '841',
	'quarter' => '19329',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gardiki',
	'title_category' => 'baron',
	'region' => '211',
	'place' => '842',
	'quarter' => '19330',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ioannina',
	'title_category' => 'count',
	'region' => '211',
	'place' => '843',
	'quarter' => '19331',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Amfissa',
	'title_category' => 'lord',
	'region' => '211',
	'place' => '844',
	'quarter' => '19332',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kruja',
	'title_category' => 'lord',
	'region' => '212',
	'place' => '845',
	'quarter' => '19333',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Durres',
	'title_category' => 'count',
	'region' => '212',
	'place' => '846',
	'quarter' => '19334',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ohrid',
	'title_category' => 'baron',
	'region' => '212',
	'place' => '847',
	'quarter' => '19335',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saint Jovan',
	'title_category' => 'lord',
	'region' => '212',
	'place' => '848',
	'quarter' => '19336',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kastoria',
	'title_category' => 'duke',
	'region' => '213',
	'place' => '849',
	'quarter' => '19337',
	'religion' => '4',
	'rank' => '9',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bitola',
	'title_category' => 'count',
	'region' => '213',
	'place' => '850',
	'quarter' => '19338',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Prilep',
	'title_category' => 'baron',
	'region' => '213',
	'place' => '851',
	'quarter' => '19339',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Berat',
	'title_category' => 'count',
	'region' => '213',
	'place' => '852',
	'quarter' => '19340',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Iraklion',
	'title_category' => 'count',
	'region' => '214',
	'place' => '853',
	'quarter' => '19341',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lemnos',
	'title_category' => 'baron',
	'region' => '214',
	'place' => '854',
	'quarter' => '19342',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chania',
	'title_category' => 'baron',
	'region' => '214',
	'place' => '855',
	'quarter' => '19343',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Patros',
	'title_category' => 'baron',
	'region' => '214',
	'place' => '856',
	'quarter' => '19344',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Smyrna',
	'title_category' => 'lord',
	'region' => '215',
	'place' => '857',
	'quarter' => '19345',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Samos',
	'title_category' => 'baron',
	'region' => '215',
	'place' => '858',
	'quarter' => '19346',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chios',
	'title_category' => 'lord',
	'region' => '215',
	'place' => '859',
	'quarter' => '19347',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Patmos',
	'title_category' => 'lord',
	'region' => '215',
	'place' => '860',
	'quarter' => '19348',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tralles',
	'title_category' => 'lord',
	'region' => '216',
	'place' => '861',
	'quarter' => '19349',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Miletus',
	'title_category' => 'count',
	'region' => '216',
	'place' => '862',
	'quarter' => '19350',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Efese',
	'title_category' => 'count',
	'region' => '216',
	'place' => '863',
	'quarter' => '19351',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sardes',
	'title_category' => 'count',
	'region' => '216',
	'place' => '864',
	'quarter' => '19352',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nicaea',
	'title_category' => 'lord',
	'region' => '217',
	'place' => '865',
	'quarter' => '19353',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kios',
	'title_category' => 'baron',
	'region' => '217',
	'place' => '866',
	'quarter' => '19354',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bursa',
	'title_category' => 'lord',
	'region' => '217',
	'place' => '867',
	'quarter' => '19355',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pergamum',
	'title_category' => 'count',
	'region' => '217',
	'place' => '868',
	'quarter' => '19356',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ikonion',
	'title_category' => 'lord',
	'region' => '218',
	'place' => '869',
	'quarter' => '19357',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mistheia',
	'title_category' => 'lord',
	'region' => '218',
	'place' => '870',
	'quarter' => '19358',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Laranda',
	'title_category' => 'lord',
	'region' => '218',
	'place' => '871',
	'quarter' => '19359',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ousakeion',
	'title_category' => 'baron',
	'region' => '218',
	'place' => '872',
	'quarter' => '19360',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Coracesium',
	'title_category' => 'lord',
	'region' => '219',
	'place' => '873',
	'quarter' => '19361',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rhodos',
	'title_category' => 'duke',
	'region' => '219',
	'place' => '874',
	'quarter' => '19362',
	'religion' => '4',
	'rank' => '9',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Attalia',
	'title_category' => 'count',
	'region' => '219',
	'place' => '875',
	'quarter' => '19363',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Makre',
	'title_category' => 'baron',
	'region' => '219',
	'place' => '876',
	'quarter' => '19364',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ancyra',
	'title_category' => 'lord',
	'region' => '220',
	'place' => '877',
	'quarter' => '19365',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gordion',
	'title_category' => 'baron',
	'region' => '220',
	'place' => '878',
	'quarter' => '19366',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cotyaeum',
	'title_category' => 'count',
	'region' => '220',
	'place' => '879',
	'quarter' => '19367',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dorylaeum',
	'title_category' => 'baron',
	'region' => '220',
	'place' => '880',
	'quarter' => '19368',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sinope',
	'title_category' => 'lord',
	'region' => '221',
	'place' => '881',
	'quarter' => '19369',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kastamuni',
	'title_category' => 'count',
	'region' => '221',
	'place' => '882',
	'quarter' => '19370',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Amasra',
	'title_category' => 'count',
	'region' => '221',
	'place' => '883',
	'quarter' => '19371',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Claudiopolis',
	'title_category' => 'count',
	'region' => '221',
	'place' => '884',
	'quarter' => '19372',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tarsus',
	'title_category' => 'count',
	'region' => '222',
	'place' => '885',
	'quarter' => '19373',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Adana',
	'title_category' => 'count',
	'region' => '222',
	'place' => '886',
	'quarter' => '19374',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nicosia',
	'title_category' => 'baron',
	'region' => '222',
	'place' => '887',
	'quarter' => '19375',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Limasol',
	'title_category' => 'count',
	'region' => '222',
	'place' => '888',
	'quarter' => '19376',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Caesarea',
	'title_category' => 'lord',
	'region' => '223',
	'place' => '889',
	'quarter' => '19377',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Garsaura',
	'title_category' => 'count',
	'region' => '223',
	'place' => '890',
	'quarter' => '19378',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Magida',
	'title_category' => 'count',
	'region' => '223',
	'place' => '891',
	'quarter' => '19379',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Muskara',
	'title_category' => 'baron',
	'region' => '223',
	'place' => '892',
	'quarter' => '19380',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Trebizond',
	'title_category' => 'lord',
	'region' => '224',
	'place' => '893',
	'quarter' => '19381',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bayberdon',
	'title_category' => 'count',
	'region' => '224',
	'place' => '894',
	'quarter' => '19382',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Riza',
	'title_category' => 'baron',
	'region' => '224',
	'place' => '895',
	'quarter' => '19383',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kerasous',
	'title_category' => 'count',
	'region' => '224',
	'place' => '896',
	'quarter' => '19384',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Edessa',
	'title_category' => 'count',
	'region' => '225',
	'place' => '897',
	'quarter' => '19385',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Semsur',
	'title_category' => 'baron',
	'region' => '225',
	'place' => '898',
	'quarter' => '19386',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Amouda',
	'title_category' => 'baron',
	'region' => '225',
	'place' => '899',
	'quarter' => '19387',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Antep',
	'title_category' => 'lord',
	'region' => '225',
	'place' => '900',
	'quarter' => '19388',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Amasia',
	'title_category' => 'count',
	'region' => '226',
	'place' => '901',
	'quarter' => '19389',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Samsun',
	'title_category' => 'lord',
	'region' => '226',
	'place' => '902',
	'quarter' => '19390',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Corum',
	'title_category' => 'baron',
	'region' => '226',
	'place' => '903',
	'quarter' => '19391',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Takat',
	'title_category' => 'baron',
	'region' => '226',
	'place' => '904',
	'quarter' => '19392',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Diyarbakir',
	'title_category' => 'lord',
	'region' => '227',
	'place' => '905',
	'quarter' => '19393',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Harput',
	'title_category' => 'baron',
	'region' => '227',
	'place' => '906',
	'quarter' => '19394',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Erzincan',
	'title_category' => 'lord',
	'region' => '227',
	'place' => '907',
	'quarter' => '19395',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Romanoupolis',
	'title_category' => 'count',
	'region' => '227',
	'place' => '908',
	'quarter' => '19396',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sivas',
	'title_category' => 'lord',
	'region' => '228',
	'place' => '909',
	'quarter' => '19397',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Divrigi',
	'title_category' => 'knight',
	'region' => '228',
	'place' => '910',
	'quarter' => '19398',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Albistan',
	'title_category' => 'count',
	'region' => '228',
	'place' => '911',
	'quarter' => '19399',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tavium',
	'title_category' => 'count',
	'region' => '228',
	'place' => '912',
	'quarter' => '19400',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Batumi',
	'title_category' => 'duke',
	'region' => '229',
	'place' => '913',
	'quarter' => '19401',
	'religion' => '4',
	'rank' => '9',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Poti',
	'title_category' => 'count',
	'region' => '229',
	'place' => '914',
	'quarter' => '19402',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pitsunda',
	'title_category' => 'count',
	'region' => '229',
	'place' => '915',
	'quarter' => '19403',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kutais',
	'title_category' => 'knight',
	'region' => '229',
	'place' => '916',
	'quarter' => '19404',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tiflis',
	'title_category' => 'lord',
	'region' => '230',
	'place' => '917',
	'quarter' => '19405',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Surami',
	'title_category' => 'duke',
	'region' => '230',
	'place' => '918',
	'quarter' => '19406',
	'religion' => '4',
	'rank' => '9',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gori',
	'title_category' => 'count',
	'region' => '230',
	'place' => '919',
	'quarter' => '19407',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Akhalkalaki',
	'title_category' => 'count',
	'region' => '230',
	'place' => '920',
	'quarter' => '19408',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Derbent',
	'title_category' => 'count',
	'region' => '231',
	'place' => '921',
	'quarter' => '19409',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Baku',
	'title_category' => 'count',
	'region' => '231',
	'place' => '922',
	'quarter' => '19410',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mingecevir',
	'title_category' => 'count',
	'region' => '231',
	'place' => '923',
	'quarter' => '19411',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Balanjar',
	'title_category' => 'count',
	'region' => '231',
	'place' => '924',
	'quarter' => '19412',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ani',
	'title_category' => 'lord',
	'region' => '232',
	'place' => '925',
	'quarter' => '19413',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Yerevan',
	'title_category' => 'count',
	'region' => '232',
	'place' => '926',
	'quarter' => '19414',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ghars',
	'title_category' => 'count',
	'region' => '232',
	'place' => '927',
	'quarter' => '19415',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kirants',
	'title_category' => 'lord',
	'region' => '232',
	'place' => '928',
	'quarter' => '19416',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nakhichevan',
	'title_category' => 'lord',
	'region' => '233',
	'place' => '929',
	'quarter' => '19417',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Khoy',
	'title_category' => 'count',
	'region' => '233',
	'place' => '930',
	'quarter' => '19418',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ordubad',
	'title_category' => 'count',
	'region' => '233',
	'place' => '931',
	'quarter' => '19419',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Baghaberd',
	'title_category' => 'count',
	'region' => '233',
	'place' => '932',
	'quarter' => '19420',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tatvan',
	'title_category' => 'count',
	'region' => '234',
	'place' => '933',
	'quarter' => '19421',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Manzikert',
	'title_category' => 'count',
	'region' => '234',
	'place' => '934',
	'quarter' => '19422',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bitlis',
	'title_category' => 'lord',
	'region' => '234',
	'place' => '935',
	'quarter' => '19423',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Arakelots',
	'title_category' => 'lord',
	'region' => '234',
	'place' => '936',
	'quarter' => '19424',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mardin',
	'title_category' => 'lord',
	'region' => '235',
	'place' => '937',
	'quarter' => '19425',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saird',
	'title_category' => 'count',
	'region' => '235',
	'place' => '938',
	'quarter' => '19426',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cepha',
	'title_category' => 'lord',
	'region' => '235',
	'place' => '939',
	'quarter' => '19427',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nisibis',
	'title_category' => 'lord',
	'region' => '235',
	'place' => '940',
	'quarter' => '19428',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Van',
	'title_category' => 'count',
	'region' => '236',
	'place' => '941',
	'quarter' => '19429',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Berkri',
	'title_category' => 'baron',
	'region' => '236',
	'place' => '942',
	'quarter' => '19430',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Archesh',
	'title_category' => 'count',
	'region' => '236',
	'place' => '943',
	'quarter' => '19431',
	'religion' => '4',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ostan',
	'title_category' => 'baron',
	'region' => '236',
	'place' => '944',
	'quarter' => '19432',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nishapur',
	'title_category' => 'count',
	'region' => '237',
	'place' => '945',
	'quarter' => '19433',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Beyhaq',
	'title_category' => 'count',
	'region' => '237',
	'place' => '946',
	'quarter' => '19434',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mashhad',
	'title_category' => 'count',
	'region' => '237',
	'place' => '947',
	'quarter' => '19435',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Konjikala',
	'title_category' => 'count',
	'region' => '237',
	'place' => '948',
	'quarter' => '19436',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kashmar',
	'title_category' => 'count',
	'region' => '238',
	'place' => '949',
	'quarter' => '19437',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gonabad',
	'title_category' => 'count',
	'region' => '238',
	'place' => '950',
	'quarter' => '19438',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tabas',
	'title_category' => 'count',
	'region' => '238',
	'place' => '951',
	'quarter' => '19439',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Birjand',
	'title_category' => 'count',
	'region' => '238',
	'place' => '952',
	'quarter' => '19440',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kerman',
	'title_category' => 'count',
	'region' => '239',
	'place' => '953',
	'quarter' => '19441',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bam',
	'title_category' => 'baron',
	'region' => '239',
	'place' => '954',
	'quarter' => '19442',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rafsanjan',
	'title_category' => 'count',
	'region' => '239',
	'place' => '955',
	'quarter' => '19443',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sirjan',
	'title_category' => 'count',
	'region' => '239',
	'place' => '956',
	'quarter' => '19444',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Shiraz',
	'title_category' => 'lord',
	'region' => '240',
	'place' => '957',
	'quarter' => '19445',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bushire',
	'title_category' => 'count',
	'region' => '240',
	'place' => '958',
	'quarter' => '19446',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hormuz',
	'title_category' => 'lord',
	'region' => '240',
	'place' => '959',
	'quarter' => '19447',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Yasuj',
	'title_category' => 'count',
	'region' => '240',
	'place' => '960',
	'quarter' => '19448',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Isfahan',
	'title_category' => 'lord',
	'region' => '241',
	'place' => '961',
	'quarter' => '19449',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dezgord',
	'title_category' => 'lord',
	'region' => '241',
	'place' => '962',
	'quarter' => '19450',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Yazd',
	'title_category' => 'count',
	'region' => '241',
	'place' => '963',
	'quarter' => '19451',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zavareh',
	'title_category' => 'count',
	'region' => '241',
	'place' => '964',
	'quarter' => '19452',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rhages',
	'title_category' => 'count',
	'region' => '242',
	'place' => '965',
	'quarter' => '19453',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kashan',
	'title_category' => 'count',
	'region' => '242',
	'place' => '966',
	'quarter' => '19454',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ghom',
	'title_category' => 'count',
	'region' => '242',
	'place' => '967',
	'quarter' => '19455',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Qazvin',
	'title_category' => 'count',
	'region' => '242',
	'place' => '968',
	'quarter' => '19456',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Astarabad',
	'title_category' => 'count',
	'region' => '243',
	'place' => '969',
	'quarter' => '19457',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Alamut',
	'title_category' => 'baron',
	'region' => '243',
	'place' => '970',
	'quarter' => '19458',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Amol',
	'title_category' => 'count',
	'region' => '243',
	'place' => '971',
	'quarter' => '19459',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rasht',
	'title_category' => 'count',
	'region' => '243',
	'place' => '972',
	'quarter' => '19460',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tabriz',
	'title_category' => 'count',
	'region' => '244',
	'place' => '973',
	'quarter' => '19461',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sofian',
	'title_category' => 'baron',
	'region' => '244',
	'place' => '974',
	'quarter' => '19462',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zanjan',
	'title_category' => 'count',
	'region' => '244',
	'place' => '975',
	'quarter' => '19463',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ardabil',
	'title_category' => 'count',
	'region' => '244',
	'place' => '976',
	'quarter' => '19464',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hamadan',
	'title_category' => 'count',
	'region' => '245',
	'place' => '977',
	'quarter' => '19465',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kermanshah',
	'title_category' => 'count',
	'region' => '245',
	'place' => '978',
	'quarter' => '19466',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Falak',
	'title_category' => 'lord',
	'region' => '245',
	'place' => '979',
	'quarter' => '19467',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bukan',
	'title_category' => 'lord',
	'region' => '245',
	'place' => '980',
	'quarter' => '19468',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hajr',
	'title_category' => 'lord',
	'region' => '246',
	'place' => '981',
	'quarter' => '19469',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Buraidah',
	'title_category' => 'count',
	'region' => '246',
	'place' => '982',
	'quarter' => '19470',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hadjar',
	'title_category' => 'count',
	'region' => '246',
	'place' => '983',
	'quarter' => '19471',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hail',
	'title_category' => 'count',
	'region' => '246',
	'place' => '984',
	'quarter' => '19472',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mecca',
	'title_category' => 'lord',
	'region' => '247',
	'place' => '985',
	'quarter' => '19473',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Taif',
	'title_category' => 'count',
	'region' => '247',
	'place' => '986',
	'quarter' => '19474',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Jeddah',
	'title_category' => 'count',
	'region' => '247',
	'place' => '987',
	'quarter' => '19475',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Medina',
	'title_category' => 'count',
	'region' => '247',
	'place' => '988',
	'quarter' => '19476',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dedan',
	'title_category' => 'count',
	'region' => '248',
	'place' => '989',
	'quarter' => '19477',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Eilat',
	'title_category' => 'count',
	'region' => '248',
	'place' => '990',
	'quarter' => '19478',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tayma',
	'title_category' => 'count',
	'region' => '248',
	'place' => '991',
	'quarter' => '19479',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Maan',
	'title_category' => 'count',
	'region' => '248',
	'place' => '992',
	'quarter' => '19480',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Jerusalem',
	'title_category' => 'lord',
	'region' => '249',
	'place' => '993',
	'quarter' => '19481',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ascalon',
	'title_category' => 'count',
	'region' => '249',
	'place' => '994',
	'quarter' => '19482',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hebron',
	'title_category' => 'count',
	'region' => '249',
	'place' => '995',
	'quarter' => '19483',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Jaffa',
	'title_category' => 'count',
	'region' => '249',
	'place' => '996',
	'quarter' => '19484',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Acre',
	'title_category' => 'duke',
	'region' => '250',
	'place' => '997',
	'quarter' => '19485',
	'religion' => '5',
	'rank' => '9',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nazareth',
	'title_category' => 'count',
	'region' => '250',
	'place' => '998',
	'quarter' => '19486',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nablus',
	'title_category' => 'count',
	'region' => '250',
	'place' => '999',
	'quarter' => '19487',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tyre',
	'title_category' => 'count',
	'region' => '250',
	'place' => '1000',
	'quarter' => '19488',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bosra',
	'title_category' => 'count',
	'region' => '251',
	'place' => '1001',
	'quarter' => '19489',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Amman',
	'title_category' => 'count',
	'region' => '251',
	'place' => '1002',
	'quarter' => '19490',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Irbid',
	'title_category' => 'count',
	'region' => '251',
	'place' => '1003',
	'quarter' => '19491',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Salkhad',
	'title_category' => 'lord',
	'region' => '251',
	'place' => '1004',
	'quarter' => '19492',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Damascus',
	'title_category' => 'lord',
	'region' => '252',
	'place' => '1005',
	'quarter' => '19493',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kasr al Gharbi',
	'title_category' => 'baron',
	'region' => '252',
	'place' => '1006',
	'quarter' => '19494',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Palmyra',
	'title_category' => 'count',
	'region' => '252',
	'place' => '1007',
	'quarter' => '19495',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nabek',
	'title_category' => 'lord',
	'region' => '252',
	'place' => '1008',
	'quarter' => '19496',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Homs',
	'title_category' => 'count',
	'region' => '253',
	'place' => '1009',
	'quarter' => '19497',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Qusayr',
	'title_category' => 'count',
	'region' => '253',
	'place' => '1010',
	'quarter' => '19498',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Salamiyah',
	'title_category' => 'count',
	'region' => '253',
	'place' => '1011',
	'quarter' => '19499',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hama',
	'title_category' => 'baron',
	'region' => '253',
	'place' => '1012',
	'quarter' => '19500',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tripoli',
	'title_category' => 'count',
	'region' => '254',
	'place' => '1013',
	'quarter' => '19501',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tartous',
	'title_category' => 'count',
	'region' => '254',
	'place' => '1014',
	'quarter' => '19502',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Beirut',
	'title_category' => 'count',
	'region' => '254',
	'place' => '1015',
	'quarter' => '19503',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Margat',
	'title_category' => 'count',
	'region' => '254',
	'place' => '1016',
	'quarter' => '19504',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Antioch',
	'title_category' => 'lord',
	'region' => '255',
	'place' => '1017',
	'quarter' => '19505',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Alexandretta',
	'title_category' => 'count',
	'region' => '255',
	'place' => '1018',
	'quarter' => '19506',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Idlib',
	'title_category' => 'count',
	'region' => '255',
	'place' => '1019',
	'quarter' => '19507',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Afrin',
	'title_category' => 'knight',
	'region' => '255',
	'place' => '1020',
	'quarter' => '19508',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aleppo',
	'title_category' => 'count',
	'region' => '256',
	'place' => '1021',
	'quarter' => '19509',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Manbij',
	'title_category' => 'count',
	'region' => '256',
	'place' => '1022',
	'quarter' => '19510',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bab',
	'title_category' => 'count',
	'region' => '256',
	'place' => '1023',
	'quarter' => '19511',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Safira',
	'title_category' => 'count',
	'region' => '256',
	'place' => '1024',
	'quarter' => '19512',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Raqqa',
	'title_category' => 'count',
	'region' => '257',
	'place' => '1025',
	'quarter' => '19513',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Jabar',
	'title_category' => 'baron',
	'region' => '257',
	'place' => '1026',
	'quarter' => '19514',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rhesaina',
	'title_category' => 'count',
	'region' => '257',
	'place' => '1027',
	'quarter' => '19515',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zor',
	'title_category' => 'count',
	'region' => '257',
	'place' => '1028',
	'quarter' => '19516',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Erbil',
	'title_category' => 'count',
	'region' => '258',
	'place' => '1029',
	'quarter' => '19517',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mosul',
	'title_category' => 'count',
	'region' => '258',
	'place' => '1030',
	'quarter' => '19518',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kirkuk',
	'title_category' => 'count',
	'region' => '258',
	'place' => '1031',
	'quarter' => '19519',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Telafer',
	'title_category' => 'count',
	'region' => '258',
	'place' => '1032',
	'quarter' => '19520',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Baghdad',
	'title_category' => 'lord',
	'region' => '259',
	'place' => '1033',
	'quarter' => '19521',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_gentry'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tikrit',
	'title_category' => 'count',
	'region' => '259',
	'place' => '1034',
	'quarter' => '19522',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Anbar',
	'title_category' => 'count',
	'region' => '259',
	'place' => '1035',
	'quarter' => '19523',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Samarra',
	'title_category' => 'count',
	'region' => '259',
	'place' => '1036',
	'quarter' => '19524',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Samawah',
	'title_category' => 'count',
	'region' => '260',
	'place' => '1037',
	'quarter' => '19525',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Karbala',
	'title_category' => 'count',
	'region' => '260',
	'place' => '1038',
	'quarter' => '19526',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kufah',
	'title_category' => 'count',
	'region' => '260',
	'place' => '1039',
	'quarter' => '19527',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Najaf',
	'title_category' => 'count',
	'region' => '260',
	'place' => '1040',
	'quarter' => '19528',
	'religion' => '5',
	'rank' => '7',
	'career' => 'fixed_nobility'
	]);
	
		
		
    }
}
