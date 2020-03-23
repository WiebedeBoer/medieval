<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PlaceSeeder extends Seeder
{
	//places
    public function run()
    {

DB::table('places')->insert([
'region' => '1',
'place_name' => 'Bremen',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'knight',
'church' => 'prince-archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'cooper',
'arms' => 'shipyard',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '1',
'place_name' => 'Oldenburg',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'sheriff',
'monastic' => 'teutonic',
'factory' => 'fuller',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '1',
'place_name' => 'Hamburg',
'place_type' => 'city',
'population' => '2000',
'fortification' => 'burgh',
'commerce' => 'salt',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'granary',
'arms' => 'shipyard',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '1',
'place_name' => 'Corvey',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'fortified_abbey',
'commerce' => 'fruit',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'prince-abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);
DB::table('places')->insert([
'region' => '2',
'place_name' => 'Meissen',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'fruit',
'feudal' => 'margrave',
'church' => 'prince-bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'woad',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '2',
'place_name' => 'Dresden',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'poultry',
'feudal' => 'margrave',
'church' => 'prince-archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'leather',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '2',
'place_name' => 'Erfurt',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'margrave',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'woad',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '2',
'place_name' => 'Chemnitz',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'iron',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'tailor',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '3',
'place_name' => 'Magdeburg',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'salt',
'feudal' => 'knight',
'church' => 'prince-archbishop',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '3',
'place_name' => 'Merseburg',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'fruit',
'feudal' => 'knight',
'church' => 'prince-bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '3',
'place_name' => 'Halberstadt',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'iron',
'feudal' => 'knight',
'church' => 'prince-bishop',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'leather',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '3',
'place_name' => 'Gernrode',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'fortified_abbey',
'commerce' => 'iron',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'prince-abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '4',
'place_name' => 'Schwerin',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'duke',
'church' => 'prince-bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '4',
'place_name' => 'Rostock',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'teutonic',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '4',
'place_name' => 'Lubeck',
'place_type' => 'city',
'population' => '2000',
'fortification' => 'town_hall',
'commerce' => 'grain',
'feudal' => 'knight',
'church' => 'prince-bishop',
'civil' => 'lord_mayor',
'monastic' => 'teutonic',
'factory' => 'cooper',
'arms' => 'shipyard',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '4',
'place_name' => 'Broda',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'fruit',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '5',
'place_name' => 'Brandenburg',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'honey',
'feudal' => 'duke',
'church' => 'prince-bishop',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '5',
'place_name' => 'Salzwedel',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'salt',
'feudal' => 'margrave',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '5',
'place_name' => 'Havelberg',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'grain',
'feudal' => 'knight',
'church' => 'prince-bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '5',
'place_name' => 'Lindow',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_scriptorium',
'commerce' => 'fruit',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);
DB::table('places')->insert([
'region' => '6',
'place_name' => 'Stettin',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'duck',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '6',
'place_name' => 'Greifenberg',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '6',
'place_name' => 'Kolberg',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'duck',
'feudal' => 'knight',
'church' => 'prince-bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '6',
'place_name' => 'Greifswald',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'duck',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'university'
]);
DB::table('places')->insert([
'region' => '7',
'place_name' => 'Munster',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'poultry',
'feudal' => 'knight',
'church' => 'prince-bishop',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'mint',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '7',
'place_name' => 'Bielefeld',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'sheriff',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '7',
'place_name' => 'Osnabruck',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'grain',
'feudal' => 'knight',
'church' => 'prince-bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'cooper',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '7',
'place_name' => 'Paderborn',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'abbey_grange',
'commerce' => 'fruit',
'feudal' => 'knight',
'church' => 'prince-bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '8',
'place_name' => 'Regensburg',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'chancery',
'commerce' => 'duck',
'feudal' => 'duke',
'church' => 'prince-bishop',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'granary',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '8',
'place_name' => 'Augsburg',
'place_type' => 'castle',
'population' => '2000',
'fortification' => 'chancery',
'commerce' => 'flax',
'feudal' => 'knight',
'church' => 'prince-bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'tailor',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '8',
'place_name' => 'Wurzburg',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'prince-bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '8',
'place_name' => 'Nuremberg',
'place_type' => 'abbey',
'population' => '2000',
'fortification' => 'chancery',
'commerce' => 'grain',
'feudal' => 'burgrave',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'bookbinder',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '9',
'place_name' => 'Salzburg',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'wool',
'feudal' => 'knight',
'church' => 'prince-archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '9',
'place_name' => 'Hohenwerfen',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'cheese',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'sheriff',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '9',
'place_name' => 'Hallstat',
'place_type' => 'city',
'population' => '600',
'fortification' => 'town_hall',
'commerce' => 'salt',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '9',
'place_name' => 'Berchtesgaden',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'fortified_abbey',
'commerce' => 'cheese',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'prince-provost',
'factory' => 'leather',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '10',
'place_name' => 'Vienna',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'duke',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'cooper',
'arms' => 'smithy',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '10',
'place_name' => 'Schaunberg',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'cheese',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'sheriff',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '10',
'place_name' => 'Sankt Polten',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'fruit',
'feudal' => 'knight',
'church' => 'prince-bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'cooper',
'arms' => 'none',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '10',
'place_name' => 'Pressburg',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'glasswork',
'arms' => 'smithy',
'education' => 'university'
]);
DB::table('places')->insert([
'region' => '11',
'place_name' => 'Graz',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'iron',
'feudal' => 'duke',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '11',
'place_name' => 'Hohenwang',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'cheese',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '11',
'place_name' => 'Styraburg',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'cheese',
'feudal' => 'margrave',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '11',
'place_name' => 'Seckau',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);
DB::table('places')->insert([
'region' => '12',
'place_name' => 'Innsbruck',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'armorer',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '12',
'place_name' => 'Bozen',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'town_hall',
'commerce' => 'wool',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '12',
'place_name' => 'Trent',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'prince-bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'cooper',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '12',
'place_name' => 'Brixen',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'grain',
'feudal' => 'knight',
'church' => 'prince-bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '13',
'place_name' => 'Ulm',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'mint',
'arms' => 'none',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '13',
'place_name' => 'Hohenzollern',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'silver',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'sheriff',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '13',
'place_name' => 'Freiburg',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'honey',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '13',
'place_name' => 'Hohenstaufen',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'cheese',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'sheriff',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'smithy',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '14',
'place_name' => 'Bern',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'town_hall',
'commerce' => 'cheese',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'leather',
'arms' => 'smithy',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '14',
'place_name' => 'Zurich',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'town_hall',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'cooper',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '14',
'place_name' => 'Basel',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'prince-bishop',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'bookbinder',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '14',
'place_name' => 'Sankt Gallen',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'fortified_abbey',
'commerce' => 'poultry',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'prince-abbot',
'factory' => 'glasswork',
'arms' => 'none',
'education' => 'library'
]);
DB::table('places')->insert([
'region' => '15',
'place_name' => 'Hagenau',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '15',
'place_name' => 'Colmar',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '15',
'place_name' => 'Strassbourg',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'prince-bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'bookbinder',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '15',
'place_name' => 'Wissembourg',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'salt',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'prince-abbot',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '16',
'place_name' => 'Prague',
'place_type' => 'capital',
'population' => '10000',
'fortification' => 'royal_court',
'commerce' => 'poultry',
'feudal' => 'king',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'glasswork',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '16',
'place_name' => 'Karlstein',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'burgrave',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '16',
'place_name' => 'Pilsen',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'burgrave',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '16',
'place_name' => 'Plass',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'fruit',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '17',
'place_name' => 'Brunn',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'wine',
'feudal' => 'margrave',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'glasswork',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '17',
'place_name' => 'Zlin',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'leather',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '17',
'place_name' => 'Olmutz',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'cheese',
'feudal' => 'knight',
'church' => 'prince-bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '17',
'place_name' => 'Trebitz',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'silver',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '18',
'place_name' => 'Mainz',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'chancery',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'prince-archbishop',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'bookbinder',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '18',
'place_name' => 'Heidelberg',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'prince-bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'granary',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '18',
'place_name' => 'Frankfurt',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'cooper',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '18',
'place_name' => 'Fulda',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'fortified_abbey',
'commerce' => 'grain',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'prince-abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);
DB::table('places')->insert([
'region' => '19',
'place_name' => 'Cologne',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'chancery',
'commerce' => 'grain',
'feudal' => 'knight',
'church' => 'prince-archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'potterer',
'arms' => 'smithy',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '19',
'place_name' => 'Aachen',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'town_hall',
'commerce' => 'lead',
'feudal' => 'king',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '19',
'place_name' => 'Liege',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'lead',
'feudal' => 'knight',
'church' => 'prince-bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'watermill',
'arms' => 'none',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '19',
'place_name' => 'Stavelot',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'fortified_abbey',
'commerce' => 'fruit',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'prince-abbot',
'factory' => 'granary',
'arms' => 'none',
'education' => 'library'
]);
DB::table('places')->insert([
'region' => '20',
'place_name' => 'Trier',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'chancery',
'commerce' => 'fruit',
'feudal' => 'knight',
'church' => 'prince-archbishop',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'watermill',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '20',
'place_name' => 'Luxembourg',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'watermill',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '20',
'place_name' => 'Metz',
'place_type' => 'city',
'population' => '2000',
'fortification' => 'bishop_palace',
'commerce' => 'salt',
'feudal' => 'knight',
'church' => 'prince-bishop',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '20',
'place_name' => 'Pruem',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'fortified_abbey',
'commerce' => 'fruit',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'prince-abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'hospice'
]);
DB::table('places')->insert([
'region' => '21',
'place_name' => 'Guelders',
'place_type' => 'capital',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'fruit',
'feudal' => 'duke',
'church' => 'priest',
'civil' => 'sheriff',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '21',
'place_name' => 'Zutphen',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'poultry',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '21',
'place_name' => 'Nimeguen',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'fruit',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'glasswork',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '21',
'place_name' => 'Deventer',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'cheese',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'bookbinder',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '22',
'place_name' => 'Dorestad',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'cooper',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '22',
'place_name' => 'Gouda',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'cheese',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'bookbinder',
'arms' => 'none',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '22',
'place_name' => 'Utrecht',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'cheese',
'feudal' => 'knight',
'church' => 'prince-bishop',
'civil' => 'lord_mayor',
'monastic' => 'teutonic',
'factory' => 'windmill',
'arms' => 'none',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '22',
'place_name' => 'Amsterdam',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'cheese',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'cooper',
'arms' => 'shipyard',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '23',
'place_name' => 'Sneek',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wool',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'teutonic',
'factory' => 'windmill',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '23',
'place_name' => 'Emden',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'windmill',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '23',
'place_name' => 'Groningen',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'poultry',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'windmill',
'arms' => 'none',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '23',
'place_name' => 'Dokkum',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'cheese',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'windmill',
'arms' => 'shipyard',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '24',
'place_name' => 'Louvain',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'burgh',
'commerce' => 'poultry',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'tailor',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '24',
'place_name' => 'Breda',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'wool',
'feudal' => 'burgrave',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'leather',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '24',
'place_name' => 'Antwerp',
'place_type' => 'city',
'population' => '2000',
'fortification' => 'mountain_castle',
'commerce' => 'flax',
'feudal' => 'burgrave',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'tailor',
'arms' => 'shipyard',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '24',
'place_name' => 'Thorn',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'fortified_abbey',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'prince-abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '25',
'place_name' => 'Bruges',
'place_type' => 'capital',
'population' => '10000',
'fortification' => 'mountain_castle',
'commerce' => 'poultry',
'feudal' => 'burgrave',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'tailor',
'arms' => 'shipyard',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '25',
'place_name' => 'Ghent',
'place_type' => 'castle',
'population' => '2000',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'tailor',
'arms' => 'armorer',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '25',
'place_name' => 'Cambrai',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'flax',
'feudal' => 'knight',
'church' => 'prince-bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'woad',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '25',
'place_name' => 'Ypres',
'place_type' => 'abbey',
'population' => '2000',
'fortification' => 'mountain_castle',
'commerce' => 'flax',
'feudal' => 'burgrave',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'tailor',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '26',
'place_name' => 'Klagenfurt',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'margrave',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '26',
'place_name' => 'Treffen',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '26',
'place_name' => 'Gorizia',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'prince-bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'mint',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '26',
'place_name' => 'Moosburg',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'grain',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '27',
'place_name' => 'Krainburg',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'honey',
'feudal' => 'margrave',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fur',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '27',
'place_name' => 'Heunburg',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'sheriff',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '27',
'place_name' => 'Laibach',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'grain',
'feudal' => 'knight',
'church' => 'prince-bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '27',
'place_name' => 'Sittich',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'honey',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);
DB::table('places')->insert([
'region' => '28',
'place_name' => 'Vannes',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'duke',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '28',
'place_name' => 'Rohan',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'fruit',
'feudal' => 'burgrave',
'church' => 'priest',
'civil' => 'sheriff',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '28',
'place_name' => 'Quimper',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'flax',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'woad',
'arms' => 'shipyard',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '28',
'place_name' => 'Redon',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'honey',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);
DB::table('places')->insert([
'region' => '29',
'place_name' => 'Paris',
'place_type' => 'capital',
'population' => '10000',
'fortification' => 'royal_court',
'commerce' => 'poultry',
'feudal' => 'king',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'tailor',
'arms' => 'armorer',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '29',
'place_name' => 'Meaux',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'cheese',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '29',
'place_name' => 'Chartres',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'grain',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'leather',
'arms' => 'armorer',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '29',
'place_name' => 'Saint Denis',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'fortified_abbey',
'commerce' => 'grain',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'madder',
'arms' => 'none',
'education' => 'library'
]);
DB::table('places')->insert([
'region' => '30',
'place_name' => 'Bar',
'place_type' => 'capital',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'sheriff',
'monastic' => 'templar',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '30',
'place_name' => 'Neufchateau',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '30',
'place_name' => 'Verdun',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'grain',
'feudal' => 'knight',
'church' => 'prince-bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'glasswork',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '30',
'place_name' => 'Langres',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'cheese',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'none',
'arms' => 'none',
'education' => 'hospice'
]);
DB::table('places')->insert([
'region' => '31',
'place_name' => 'Amiens',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'poultry',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'woad',
'arms' => 'none',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '31',
'place_name' => 'Boulogne',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'cheese',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '31',
'place_name' => 'Laon',
'place_type' => 'city',
'population' => '2000',
'fortification' => 'bishop_palace',
'commerce' => 'grain',
'feudal' => 'knight',
'church' => 'prince-bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '31',
'place_name' => 'Saint Omer',
'place_type' => 'abbey',
'population' => '2000',
'fortification' => 'burgh',
'commerce' => 'flax',
'feudal' => 'burgrave',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'tailor',
'arms' => 'none',
'education' => 'library'
]);
DB::table('places')->insert([
'region' => '32',
'place_name' => 'Rouen',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'chancery',
'commerce' => 'duck',
'feudal' => 'duke',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'cooper',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '32',
'place_name' => 'Caen',
'place_type' => 'castle',
'population' => '2000',
'fortification' => 'mountain_castle',
'commerce' => 'fruit',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '32',
'place_name' => 'Lisieux',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'cheese',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'woad',
'arms' => 'shipyard',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '32',
'place_name' => 'Bayeux',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'flax',
'feudal' => 'burgrave',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '33',
'place_name' => 'Troyes',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'flax',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '33',
'place_name' => 'Thierry',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'sheriff',
'monastic' => 'templar',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '33',
'place_name' => 'Reims',
'place_type' => 'city',
'population' => '600',
'fortification' => 'chancery',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'prince-archbishop',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '33',
'place_name' => 'Clairvaux',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '34',
'place_name' => 'Orleans',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'burgh',
'commerce' => 'cheese',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'granary',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '34',
'place_name' => 'Chateaudun',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'sheriff',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '34',
'place_name' => 'Blois',
'place_type' => 'city',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '34',
'place_name' => 'Vendome',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'sheriff',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '35',
'place_name' => 'Tours',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'mint',
'arms' => 'armorer',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '35',
'place_name' => 'Plessis',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '35',
'place_name' => 'Chinon',
'place_type' => 'city',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'wine',
'feudal' => 'burgrave',
'church' => 'priest',
'civil' => 'sheriff',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '35',
'place_name' => 'Loches',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '36',
'place_name' => 'Angers',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'windmill',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '36',
'place_name' => 'Gontier',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'cheese',
'feudal' => 'burgrave',
'church' => 'priest',
'civil' => 'sheriff',
'monastic' => 'templar',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '36',
'place_name' => 'Mans',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'glasswork',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '36',
'place_name' => 'Laval',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'cheese',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'sheriff',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '37',
'place_name' => 'Poitiers',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'iron',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '37',
'place_name' => 'Chatellerault',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'wine',
'feudal' => 'burgrave',
'church' => 'priest',
'civil' => 'sheriff',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '37',
'place_name' => 'Montmorillon',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '37',
'place_name' => 'Vauclair',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'wine',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '38',
'place_name' => 'Bourges',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '38',
'place_name' => 'Chateauroux',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'wine',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '38',
'place_name' => 'Nevers',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'iron',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '38',
'place_name' => 'Vezelay',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'fortified_abbey',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '39',
'place_name' => 'Moulins',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'poultry',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '39',
'place_name' => 'Montlucon',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'wine',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '39',
'place_name' => 'Gueret',
'place_type' => 'city',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'wine',
'feudal' => 'burgrave',
'church' => 'priest',
'civil' => 'sheriff',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '39',
'place_name' => 'Vichy',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'wine',
'feudal' => 'burgrave',
'church' => 'priest',
'civil' => 'sheriff',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '40',
'place_name' => 'Clermont Ferrand',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'watermill',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '40',
'place_name' => 'Montbrison',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'sheriff',
'monastic' => 'none',
'factory' => 'cooper',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '40',
'place_name' => 'Puy en Velay',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'poultry',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '40',
'place_name' => 'Issoire',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'fruit',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '41',
'place_name' => 'Arles',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'wine',
'feudal' => 'king',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'armorer',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '41',
'place_name' => 'Aix',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'olive_oil',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'woad',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '41',
'place_name' => 'Marseille',
'place_type' => 'city',
'population' => '2000',
'fortification' => 'bishop_palace',
'commerce' => 'olive_oil',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'soapmaker',
'arms' => 'shipyard',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '41',
'place_name' => 'Avignon',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'university'
]);
DB::table('places')->insert([
'region' => '42',
'place_name' => 'Toulouse',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'woad',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '42',
'place_name' => 'Carcasonne',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'windmill',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '42',
'place_name' => 'Narbonne',
'place_type' => 'city',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'olive_oil',
'feudal' => 'burgrave',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'windmill',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '42',
'place_name' => 'Saint Benoit',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'iron',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'woad',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '43',
'place_name' => 'Bordeaux',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'cooper',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '43',
'place_name' => 'Cahors',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'mint',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '43',
'place_name' => 'Auch',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'grain',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '43',
'place_name' => 'Montauban',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'grain',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'woad',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '44',
'place_name' => 'Angouleme',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'cooper',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '44',
'place_name' => 'Limoges',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'cheese',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '44',
'place_name' => 'Perigeux',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'salt',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '44',
'place_name' => 'Tulle',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '45',
'place_name' => 'Grenoble',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'poultry',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'cooper',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '45',
'place_name' => 'Vienne',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'iron',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'vintner',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '45',
'place_name' => 'Lyon',
'place_type' => 'city',
'population' => '2000',
'fortification' => 'mountain_castle',
'commerce' => 'wine',
'feudal' => 'burgrave',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'watermill',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '45',
'place_name' => 'Autun',
'place_type' => 'abbey',
'population' => '2000',
'fortification' => 'bishop_palace',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '46',
'place_name' => 'Dijon',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'potterer',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '46',
'place_name' => 'Besancon',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'cheese',
'feudal' => 'knight',
'church' => 'prince-archbishop',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '46',
'place_name' => 'Chalon',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'cooper',
'arms' => 'none',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '46',
'place_name' => 'Citeaux',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'honey',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);
DB::table('places')->insert([
'region' => '47',
'place_name' => 'London',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'royal_court',
'commerce' => 'wool',
'feudal' => 'king',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'cooper',
'arms' => 'shipyard',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '47',
'place_name' => 'Windsor',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'duck',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'watermill',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '47',
'place_name' => 'Guildford',
'place_type' => 'city',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'cheese',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '47',
'place_name' => 'Westminster',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'chancery',
'commerce' => 'wool',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'hospice'
]);
DB::table('places')->insert([
'region' => '48',
'place_name' => 'Canterbury',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'baron',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'glasswork',
'arms' => 'none',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '48',
'place_name' => 'Dover',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'flax',
'feudal' => 'burgrave',
'church' => 'priest',
'civil' => 'lord_warden',
'monastic' => 'none',
'factory' => 'windmill',
'arms' => 'shipyard',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '48',
'place_name' => 'Ashford',
'place_type' => 'city',
'population' => '600',
'fortification' => 'town_hall',
'commerce' => 'cheese',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'potterer',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '48',
'place_name' => 'Maidstone',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '49',
'place_name' => 'Winchester',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '49',
'place_name' => 'Southampton',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'pigs',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'cooper',
'arms' => 'none',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '49',
'place_name' => 'Wells',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'silver',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'granary',
'arms' => 'none',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '49',
'place_name' => 'Wimborne',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'wool',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);
DB::table('places')->insert([
'region' => '50',
'place_name' => 'Truro',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'tin',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_warden',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '50',
'place_name' => 'Bodmin',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'tin',
'feudal' => 'burgrave',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '50',
'place_name' => 'Saint German',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'tin',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '50',
'place_name' => 'Madron',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'poultry',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '51',
'place_name' => 'Norwich',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'burgh',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'madder',
'arms' => 'none',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '51',
'place_name' => 'Ipswich',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'cheese',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '51',
'place_name' => 'Saint Edmunds',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'wool',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '51',
'place_name' => 'Croxton',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'wool',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '52',
'place_name' => 'York',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'burgh',
'commerce' => 'cheese',
'feudal' => 'count',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'mint',
'arms' => 'armorer',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '52',
'place_name' => 'Durham',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'cheese',
'feudal' => 'knight',
'church' => 'prince-bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'leather',
'arms' => 'none',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '52',
'place_name' => 'Scarborough',
'place_type' => 'city',
'population' => '600',
'fortification' => 'town_hall',
'commerce' => 'wool',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '52',
'place_name' => 'Lancaster',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '53',
'place_name' => 'Worcester',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'iron',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '53',
'place_name' => 'Gloucester',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'iron',
'feudal' => 'margrave',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'cooper',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '53',
'place_name' => 'Bristol',
'place_type' => 'city',
'population' => '600',
'fortification' => 'town_hall',
'commerce' => 'grain',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '53',
'place_name' => 'Cirencester',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'town_hall',
'commerce' => 'cheese',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'hospice'
]);
DB::table('places')->insert([
'region' => '54',
'place_name' => 'Ely',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wool',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '54',
'place_name' => 'Cambridge',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'watermill',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '54',
'place_name' => 'Oxford',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'pigs',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '54',
'place_name' => 'Saint Albans',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'abbey_scriptorium',
'commerce' => 'wool',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);
DB::table('places')->insert([
'region' => '55',
'place_name' => 'Tamworth',
'place_type' => 'capital',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'templar',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '55',
'place_name' => 'Warwick',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '55',
'place_name' => 'Stafford',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'cheese',
'feudal' => 'burgrave',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'smithy',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '55',
'place_name' => 'Leicester',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '56',
'place_name' => 'Lincoln',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'woad',
'arms' => 'none',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '56',
'place_name' => 'Nottingham',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'sheriff',
'monastic' => 'lord_abbot',
'factory' => 'fuller',
'arms' => 'none',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '56',
'place_name' => 'Boston',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'poultry',
'feudal' => 'burgrave',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'woad',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '56',
'place_name' => 'Stamford',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'town_hall',
'commerce' => 'cheese',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '57',
'place_name' => 'Caernarfon',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'royal_court',
'commerce' => 'cheese',
'feudal' => 'prince',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '57',
'place_name' => 'Harlech',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'duck',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '57',
'place_name' => 'Bangor',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'cheese',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '57',
'place_name' => 'Conwy',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'cheese',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '58',
'place_name' => 'Chester',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'lead',
'feudal' => 'margrave',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '58',
'place_name' => 'Shrewsbury',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'lead',
'feudal' => 'margrave',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '58',
'place_name' => 'Glasbury',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'fruit',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '58',
'place_name' => 'Llanllugan',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'wool',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '59',
'place_name' => 'Caerwent',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'duck',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '59',
'place_name' => 'Carmarthen',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'pigs',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '59',
'place_name' => 'Cardiff',
'place_type' => 'city',
'population' => '600',
'fortification' => 'water_castle',
'commerce' => 'duck',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '59',
'place_name' => 'Abergavenny',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'cheese',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '60',
'place_name' => 'Oslo',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'royal_court',
'commerce' => 'cheese',
'feudal' => 'king',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'shipyard',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '60',
'place_name' => 'Tonsborg',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'chancery',
'commerce' => 'cheese',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'sheriff',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '60',
'place_name' => 'Hamar',
'place_type' => 'city',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'fruit',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '60',
'place_name' => 'Gimsoy',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'cheese',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '61',
'place_name' => 'Bergen',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'fruit',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'cooper',
'arms' => 'shipyard',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '61',
'place_name' => 'Holm',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '61',
'place_name' => 'Stavanger',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'poultry',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'shipyard',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '61',
'place_name' => 'Halsnoy',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'cheese',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '62',
'place_name' => 'Copenhagen',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'king',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'leather',
'arms' => 'shipyard',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '62',
'place_name' => 'Kalundborg',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '62',
'place_name' => 'Roskilde',
'place_type' => 'city',
'population' => '600',
'fortification' => 'chancery',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '62',
'place_name' => 'Esrum',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'cheese',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);
DB::table('places')->insert([
'region' => '63',
'place_name' => 'Lund',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'grain',
'feudal' => 'knight',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '63',
'place_name' => 'Trelleborg',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '63',
'place_name' => 'Halmstad',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '63',
'place_name' => 'Herrevad',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'grain',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);
DB::table('places')->insert([
'region' => '64',
'place_name' => 'Aarhus',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'windmill',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '64',
'place_name' => 'Aalborg',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '64',
'place_name' => 'Ripen',
'place_type' => 'city',
'population' => '600',
'fortification' => 'town_hall',
'commerce' => 'wool',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'shipyard',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '64',
'place_name' => 'Essenbaek',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'fruit',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '65',
'place_name' => 'Stockholm',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'royal_court',
'commerce' => 'wool',
'feudal' => 'king',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'cooper',
'arms' => 'shipyard',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '65',
'place_name' => 'Vasteras',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'iron',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '65',
'place_name' => 'Uppsala',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '65',
'place_name' => 'Eskilstuna',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'iron',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '66',
'place_name' => 'Visby',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'chancery',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '66',
'place_name' => 'Kalmar',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'water_castle',
'commerce' => 'duck',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '66',
'place_name' => 'Vaxjo',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'pigs',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '66',
'place_name' => 'Nydala',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'honey',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '67',
'place_name' => 'Skara',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'chancery',
'commerce' => 'grain',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '67',
'place_name' => 'Dalaborg',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'pigs',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '67',
'place_name' => 'Jonkoping',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'pigs',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '67',
'place_name' => 'Vadstena',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'honey',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '68',
'place_name' => 'Riga',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'bishop_palace',
'commerce' => 'honey',
'feudal' => 'knight',
'church' => 'prince-archbishop',
'civil' => 'lord_mayor',
'monastic' => 'teutonic',
'factory' => 'cooper',
'arms' => 'shipyard',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '68',
'place_name' => 'Wenden',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'teutonic',
'factory' => 'windmill',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '68',
'place_name' => 'Walk',
'place_type' => 'city',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'flax',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'teutonic',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '68',
'place_name' => 'Dunaburg',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'honey',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'teutonic',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '69',
'place_name' => 'Pilten',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'grain',
'feudal' => 'knight',
'church' => 'prince-bishop',
'civil' => 'lord_mayor',
'monastic' => 'teutonic',
'factory' => 'windmill',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '69',
'place_name' => 'Libau',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'honey',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'teutonic',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '69',
'place_name' => 'Goldingen',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wool',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'teutonic',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '69',
'place_name' => 'Talsen',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'pigs',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'teutonic',
'factory' => 'none',
'arms' => 'none',
'education' => 'hospice'
]);
DB::table('places')->insert([
'region' => '70',
'place_name' => 'Marienburg',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'chancery',
'commerce' => 'grain',
'feudal' => 'duke',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'teutonic',
'factory' => 'windmill',
'arms' => 'none',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '70',
'place_name' => 'Elbing',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'flax',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'teutonic',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '70',
'place_name' => 'Danzig',
'place_type' => 'city',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'margrave',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'teutonic',
'factory' => 'cooper',
'arms' => 'shipyard',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '70',
'place_name' => 'Koningsberg',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'knight',
'church' => 'prince-bishop',
'civil' => 'lord_mayor',
'monastic' => 'teutonic',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '71',
'place_name' => 'Memelburg',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'honey',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'teutonic',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '71',
'place_name' => 'Saule',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'pigs',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'teutonic',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '71',
'place_name' => 'Tilsit',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'cheese',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'teutonic',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '71',
'place_name' => 'Georgenburg',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'honey',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'teutonic',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '72',
'place_name' => 'Reval',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'duke',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'teutonic',
'factory' => 'windmill',
'arms' => 'shipyard',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '72',
'place_name' => 'Weissenstein',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'teutonic',
'factory' => 'windmill',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '72',
'place_name' => 'Arensburg',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'cheese',
'feudal' => 'knight',
'church' => 'prince-bishop',
'civil' => 'lord_mayor',
'monastic' => 'teutonic',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '72',
'place_name' => 'Hapsal',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'grain',
'feudal' => 'knight',
'church' => 'prince-bishop',
'civil' => 'lord_mayor',
'monastic' => 'teutonic',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '73',
'place_name' => 'Edinburgh',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'royal_court',
'commerce' => 'grain',
'feudal' => 'king',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '73',
'place_name' => 'Linlithgow',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'templar',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '73',
'place_name' => 'Dunbar',
'place_type' => 'city',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'sheriff',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '73',
'place_name' => 'Haddington',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'town_hall',
'commerce' => 'wool',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '74',
'place_name' => 'Bamburgh',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '74',
'place_name' => 'Alnwick',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'cheese',
'feudal' => 'margrave',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'templar',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '74',
'place_name' => 'Berwick',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'cheese',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '74',
'place_name' => 'Jedburgh',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'granary',
'arms' => 'smithy',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '75',
'place_name' => 'Dumbarton',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wool',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '75',
'place_name' => 'Kilmarnock',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'cheese',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '75',
'place_name' => 'Glasgow',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wool',
'feudal' => 'baron',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '75',
'place_name' => 'Ayr',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'cheese',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'hospice'
]);
DB::table('places')->insert([
'region' => '76',
'place_name' => 'Carlisle',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'silver',
'feudal' => 'margrave',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'leather',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '76',
'place_name' => 'Caerloverock',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'water_castle',
'commerce' => 'poultry',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '76',
'place_name' => 'Whithorn',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'cheese',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '76',
'place_name' => 'Kirkcudbright',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'cheese',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '77',
'place_name' => 'Dunadd',
'place_type' => 'capital',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'wool',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '77',
'place_name' => 'Dunollie',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'cheese',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '77',
'place_name' => 'Dunaverty',
'place_type' => 'city',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'sheriff',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '77',
'place_name' => 'Iona',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'wool',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);
DB::table('places')->insert([
'region' => '78',
'place_name' => 'Perth',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '78',
'place_name' => 'Stirling',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'mint',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '78',
'place_name' => 'Saint Andrews',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'rubies',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '78',
'place_name' => 'Dunfermline',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'fortified_abbey',
'commerce' => 'wool',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '79',
'place_name' => 'Elgin',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '79',
'place_name' => 'Nairn',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'pigs',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'sheriff',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '79',
'place_name' => 'Mortlach',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '79',
'place_name' => 'Aberdeen',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'university'
]);
DB::table('places')->insert([
'region' => '80',
'place_name' => 'Dundee',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'burgrave',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '80',
'place_name' => 'Forfar',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'water_castle',
'commerce' => 'poultry',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '80',
'place_name' => 'Scone',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wool',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '80',
'place_name' => 'Arbroath',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'fruit',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '81',
'place_name' => 'Dingwall',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'pigs',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '81',
'place_name' => 'Helmsdale',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'pigs',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '81',
'place_name' => 'Rosemarkie',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'pigs',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '81',
'place_name' => 'Dornoch',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'pigs',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '82',
'place_name' => 'Dublin',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'king',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '82',
'place_name' => 'Tara',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'lead',
'feudal' => 'king',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'hospitaller',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '82',
'place_name' => 'Kildare',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'cheese',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '82',
'place_name' => 'Millmount',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'burgrave',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '83',
'place_name' => 'Armagh',
'place_type' => 'capital',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'pigs',
'feudal' => 'king',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '83',
'place_name' => 'Carrickfergus',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'salt',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '83',
'place_name' => 'Derry',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'pigs',
'feudal' => 'baron',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'shipyard',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '83',
'place_name' => 'Clogher',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'fruit',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '84',
'place_name' => 'Wexford',
'place_type' => 'capital',
'population' => '120',
'fortification' => 'fortified_abbey',
'commerce' => 'grain',
'feudal' => 'king',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'templar',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '84',
'place_name' => 'Kells',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'abbey_scriptorium',
'commerce' => 'grain',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '84',
'place_name' => 'Waterford',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'cheese',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'watermill',
'arms' => 'none',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '84',
'place_name' => 'Durrow',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'fruit',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);
DB::table('places')->insert([
'region' => '85',
'place_name' => 'Cashel',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'fruit',
'feudal' => 'king',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '85',
'place_name' => 'Limerick',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'leather',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '85',
'place_name' => 'Cork',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'cheese',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'watermill',
'arms' => 'none',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '85',
'place_name' => 'Roscrea',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'silver',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);
DB::table('places')->insert([
'region' => '86',
'place_name' => 'Galway',
'place_type' => 'capital',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'sheriff',
'monastic' => 'lord_abbot',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '86',
'place_name' => 'Mayo',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'watermill',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '86',
'place_name' => 'Tuam',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'grain',
'feudal' => 'king',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '86',
'place_name' => 'Achonry',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'fruit',
'feudal' => 'baron',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '87',
'place_name' => 'Pamplona',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'royal_court',
'commerce' => 'olive_oil',
'feudal' => 'king',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'none',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '87',
'place_name' => 'Olite',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'olive_oil',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'hospitaller',
'factory' => 'none',
'arms' => 'armorer',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '87',
'place_name' => 'Tudela',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'olive_oil',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '87',
'place_name' => 'Leyre',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'fruit',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '88',
'place_name' => 'San Sebastian',
'place_type' => 'capital',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'poultry',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '88',
'place_name' => 'Durango',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'cheese',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '88',
'place_name' => 'Bilbao',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'iron',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'cooper',
'arms' => 'shipyard',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '88',
'place_name' => 'Gastehiz',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'olive_oil',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);
DB::table('places')->insert([
'region' => '89',
'place_name' => 'Jaca',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'royal_court',
'commerce' => 'grain',
'feudal' => 'king',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '89',
'place_name' => 'Monzon',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '89',
'place_name' => 'Huesca',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'windmill',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '89',
'place_name' => 'Sobrarbe',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'fruit',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '90',
'place_name' => 'Zaragoza',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'royal_court',
'commerce' => 'wine',
'feudal' => 'prince',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'armorer',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '90',
'place_name' => 'Molina de Aragon',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'sheriff',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '90',
'place_name' => 'Albarracin',
'place_type' => 'city',
'population' => '600',
'fortification' => 'royal_court',
'commerce' => 'wool',
'feudal' => 'prince',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'leather',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '90',
'place_name' => 'Rueda',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'grain',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'watermill',
'arms' => 'none',
'education' => 'library'
]);
DB::table('places')->insert([
'region' => '91',
'place_name' => 'Gerona',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'none',
'arms' => 'none',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '91',
'place_name' => 'Ripoll',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'iron',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'fuller',
'arms' => 'armorer',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '91',
'place_name' => 'Emporda',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'vintner',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '91',
'place_name' => 'Sant Feliu de Guixols',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'poultry',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '92',
'place_name' => 'Barcelona',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'royal_court',
'commerce' => 'olive_oil',
'feudal' => 'prince',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'madder',
'arms' => 'shipyard',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '92',
'place_name' => 'Barbens',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'wool',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'hospitaller',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '92',
'place_name' => 'Manresa',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'salt',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'vintner',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '92',
'place_name' => 'Monserrat',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_scriptorium',
'commerce' => 'wool',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);
DB::table('places')->insert([
'region' => '93',
'place_name' => 'Valencia',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'royal_court',
'commerce' => 'silk',
'feudal' => 'prince',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'mint',
'arms' => 'shipyard',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '93',
'place_name' => 'Sagunto',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'olive_oil',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '93',
'place_name' => 'Castellon',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'olive_oil',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '93',
'place_name' => 'Serra',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'olive_oil',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '94',
'place_name' => 'Denia',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'royal_court',
'commerce' => 'olive_oil',
'feudal' => 'prince',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '94',
'place_name' => 'Guadalest',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'olive_oil',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '94',
'place_name' => 'Alicante',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '94',
'place_name' => 'Gandia',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'olive_oil',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '95',
'place_name' => 'Palma',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'royal_court',
'commerce' => 'grain',
'feudal' => 'prince',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'mint',
'arms' => 'shipyard',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '95',
'place_name' => 'Pollenca',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'cheese',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '95',
'place_name' => 'Menorca',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'olive_oil',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'windmill',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '95',
'place_name' => 'Ibiza',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'olive_oil',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'windmill',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '96',
'place_name' => 'Leon',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'royal_court',
'commerce' => 'honey',
'feudal' => 'king',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'vintner',
'arms' => 'none',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '96',
'place_name' => 'Robla',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'honey',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '96',
'place_name' => 'San Guillermo',
'place_type' => 'city',
'population' => '120',
'fortification' => 'bishop_palace',
'commerce' => 'wool',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '96',
'place_name' => 'Sahagun',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_scriptorium',
'commerce' => 'wool',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);
DB::table('places')->insert([
'region' => '97',
'place_name' => 'Oviedo',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'royal_court',
'commerce' => 'flax',
'feudal' => 'prince',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '97',
'place_name' => 'Aviles',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'salt',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '97',
'place_name' => 'Gijon',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'poultry',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'cooper',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '97',
'place_name' => 'Santo Toribio',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'wool',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);
DB::table('places')->insert([
'region' => '98',
'place_name' => 'Valladolid',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'royal_court',
'commerce' => 'wine',
'feudal' => 'king',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'granary',
'arms' => 'armorer',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '98',
'place_name' => 'Avila',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'emeralds',
'feudal' => 'margrave',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fuller',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '98',
'place_name' => 'Segovia',
'place_type' => 'city',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'soapmaker',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '98',
'place_name' => 'Salamanca',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'abbey_grange',
'commerce' => 'pigs',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'university'
]);
DB::table('places')->insert([
'region' => '99',
'place_name' => 'Burgos',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '99',
'place_name' => 'Santo Domingo de Silos',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'fortified_abbey',
'commerce' => 'wool',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'hospitaller',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '99',
'place_name' => 'Palencia',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'granary',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '99',
'place_name' => 'San Millan',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'fruit',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);
DB::table('places')->insert([
'region' => '100',
'place_name' => 'Santiago',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'royal_court',
'commerce' => 'wine',
'feudal' => 'king',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '100',
'place_name' => 'Ourense',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'chancery',
'commerce' => 'tin',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'vintner',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '100',
'place_name' => 'Coruna',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'salt',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '100',
'place_name' => 'Ponferrada',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'gold',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'templar',
'factory' => 'vintner',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '101',
'place_name' => 'Lisbon',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'royal_court',
'commerce' => 'honey',
'feudal' => 'king',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'madder',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '101',
'place_name' => 'Sintra',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'honey',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'templar',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '101',
'place_name' => 'Santarem',
'place_type' => 'city',
'population' => '600',
'fortification' => 'town_hall',
'commerce' => 'cheese',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '101',
'place_name' => 'Alcobaca',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'fruit',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);
DB::table('places')->insert([
'region' => '102',
'place_name' => 'Porto',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'mountain_castle',
'commerce' => 'wine',
'feudal' => 'duke',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'cooper',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '102',
'place_name' => 'Guimaraes',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'fruit',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '102',
'place_name' => 'Viana',
'place_type' => 'city',
'population' => '600',
'fortification' => 'town_hall',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'cooper',
'arms' => 'shipyard',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '102',
'place_name' => 'Aveiro',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'town_hall',
'commerce' => 'salt',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'vintner',
'arms' => 'smithy',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '103',
'place_name' => 'Braganca',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'wine',
'feudal' => 'duke',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '103',
'place_name' => 'Sanabria',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '103',
'place_name' => 'Verin',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '103',
'place_name' => 'Mirandela',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '104',
'place_name' => 'Coimbra',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'chancery',
'commerce' => 'olive_oil',
'feudal' => 'knight',
'church' => 'prince-bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '104',
'place_name' => 'Tomar',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'olive_oil',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'templar',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '104',
'place_name' => 'Leiria',
'place_type' => 'city',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'wine',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'windmill',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '104',
'place_name' => 'Pombal',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'wine',
'feudal' => 'margrave',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'templar',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '105',
'place_name' => 'Evora',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'chancery',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'madder',
'arms' => 'none',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '105',
'place_name' => 'Alcacer',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'olive_oil',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'windmill',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '105',
'place_name' => 'Moura',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '105',
'place_name' => 'Avis',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'wine',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'templar',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '106',
'place_name' => 'Faro',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'madder',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '106',
'place_name' => 'Paderne',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'olive_oil',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'windmill',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '106',
'place_name' => 'Alvor',
'place_type' => 'city',
'population' => '600',
'fortification' => 'abbey_grange',
'commerce' => 'olive_oil',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'madder',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '106',
'place_name' => 'Silves',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'olive_oil',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'madder',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '107',
'place_name' => 'Cordoba',
'place_type' => 'capital',
'population' => '10000',
'fortification' => 'royal_court',
'commerce' => 'olive_oil',
'feudal' => 'king',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'leather',
'arms' => 'armorer',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '107',
'place_name' => 'Andujar',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'cheese',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '107',
'place_name' => 'Jaen',
'place_type' => 'city',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'olive_oil',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '107',
'place_name' => 'Ecija',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'town_hall',
'commerce' => 'cheese',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '108',
'place_name' => 'Sevilla',
'place_type' => 'capital',
'population' => '10000',
'fortification' => 'royal_court',
'commerce' => 'sugar',
'feudal' => 'prince',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'potterer',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '108',
'place_name' => 'Osuna',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'leather',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '108',
'place_name' => 'Cadiz',
'place_type' => 'city',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'honey',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'soapmaker',
'arms' => 'shipyard',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '108',
'place_name' => 'Huelva',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'abbey_grange',
'commerce' => 'iron',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'mint',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '109',
'place_name' => 'Badajoz',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'royal_court',
'commerce' => 'wine',
'feudal' => 'prince',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'madder',
'arms' => 'none',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '109',
'place_name' => 'Zafra',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'wine',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '109',
'place_name' => 'Merida',
'place_type' => 'city',
'population' => '2000',
'fortification' => 'water_castle',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'madder',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '109',
'place_name' => 'Olivenza',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'sheriff',
'monastic' => 'none',
'factory' => 'madder',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '110',
'place_name' => 'Toledo',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'royal_court',
'commerce' => 'grain',
'feudal' => 'prince',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'potterer',
'arms' => 'none',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '110',
'place_name' => 'Almaden',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'gold',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '110',
'place_name' => 'Consuegra',
'place_type' => 'city',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'wine',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'windmill',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '110',
'place_name' => 'Talavera',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'olive_oil',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'potterer',
'arms' => 'none',
'education' => 'library'
]);
DB::table('places')->insert([
'region' => '111',
'place_name' => 'Granada',
'place_type' => 'capital',
'population' => '10000',
'fortification' => 'royal_court',
'commerce' => 'silk',
'feudal' => 'prince',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'tailor',
'arms' => 'armorer',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '111',
'place_name' => 'Alcaudete',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'olive_oil',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '111',
'place_name' => 'Antquera',
'place_type' => 'city',
'population' => '120',
'fortification' => 'bishop_palace',
'commerce' => 'olive_oil',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'sheriff',
'monastic' => 'none',
'factory' => 'potterer',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '111',
'place_name' => 'Guadix',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'wool',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'library'
]);
DB::table('places')->insert([
'region' => '112',
'place_name' => 'Almeria',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'royal_court',
'commerce' => 'silk',
'feudal' => 'prince',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'madder',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '112',
'place_name' => 'Baza',
'place_type' => 'castle',
'population' => '2000',
'fortification' => 'mountain_castle',
'commerce' => 'iron',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'vintner',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '112',
'place_name' => 'Motril',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'sugar',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '112',
'place_name' => 'Lorca',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'lead',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'windmill',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '113',
'place_name' => 'Murcia',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'iron',
'feudal' => 'prince',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'windmill',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '113',
'place_name' => 'Alcoy',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'wine',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '113',
'place_name' => 'Alicante',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '113',
'place_name' => 'Cartagena',
'place_type' => 'abbey',
'population' => '2000',
'fortification' => 'mountain_castle',
'commerce' => 'olive_oil',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'madder',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '114',
'place_name' => 'Malaga',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'sugar',
'feudal' => 'prince',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '114',
'place_name' => 'Loja',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'wine',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '114',
'place_name' => 'Marbella',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'silk',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '114',
'place_name' => 'Ronda',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'emeralds',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'vintner',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '115',
'place_name' => 'Milan',
'place_type' => 'capital',
'population' => '10000',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'duke',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'tailor',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '115',
'place_name' => 'Brescia',
'place_type' => 'castle',
'population' => '2000',
'fortification' => 'mountain_castle',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'bookbinder',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '115',
'place_name' => 'Pavia',
'place_type' => 'city',
'population' => '2000',
'fortification' => 'royal_court',
'commerce' => 'grain',
'feudal' => 'king',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'leather',
'arms' => 'armorer',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '115',
'place_name' => 'Cremona',
'place_type' => 'abbey',
'population' => '2000',
'fortification' => 'town_hall',
'commerce' => 'pigs',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'granary',
'arms' => 'smithy',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '116',
'place_name' => 'Verona',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'mountain_castle',
'commerce' => 'flax',
'feudal' => 'margrave',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'granary',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '116',
'place_name' => 'Padua',
'place_type' => 'castle',
'population' => '2000',
'fortification' => 'town_hall',
'commerce' => 'poultry',
'feudal' => 'burgrave',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'granary',
'arms' => 'smithy',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '116',
'place_name' => 'Vicenza',
'place_type' => 'city',
'population' => '600',
'fortification' => 'town_hall',
'commerce' => 'wool',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'bookbinder',
'arms' => 'smithy',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '116',
'place_name' => 'Mantua',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'wool',
'feudal' => 'duke',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'bookbinder',
'arms' => 'armorer',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '117',
'place_name' => 'Genoa',
'place_type' => 'capital',
'population' => '10000',
'fortification' => 'ducal_residence',
'commerce' => 'silk',
'feudal' => 'knight',
'church' => 'lord_archbishop',
'civil' => 'doge',
'monastic' => 'hospitaller',
'factory' => 'woad',
'arms' => 'shipyard',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '117',
'place_name' => 'Noli',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'ducal_residence',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'doge',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'shipyard',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '117',
'place_name' => 'Aleria',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'olive_oil',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '117',
'place_name' => 'Bobbio',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_scriptorium',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '118',
'place_name' => 'Venice',
'place_type' => 'capital',
'population' => '10000',
'fortification' => 'ducal_residence',
'commerce' => 'silk',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'doge',
'monastic' => 'teutonic',
'factory' => 'tailor',
'arms' => 'shipyard',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '118',
'place_name' => 'Treviso',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'flax',
'feudal' => 'margrave',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'bookbinder',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '118',
'place_name' => 'Chioggia',
'place_type' => 'city',
'population' => '600',
'fortification' => 'town_hall',
'commerce' => 'salt',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '118',
'place_name' => 'Belluno',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'wool',
'feudal' => 'knight',
'church' => 'prince-bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '119',
'place_name' => 'Ravenna',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'town_hall',
'commerce' => 'wine',
'feudal' => 'lord',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'mint',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '119',
'place_name' => 'Cesena',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '119',
'place_name' => 'Forli',
'place_type' => 'city',
'population' => '600',
'fortification' => 'town_hall',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '119',
'place_name' => 'Rimini',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'lord',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);
DB::table('places')->insert([
'region' => '120',
'place_name' => 'Modena',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'wine',
'feudal' => 'duke',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'smithy',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '120',
'place_name' => 'Parma',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'town_hall',
'commerce' => 'cheese',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'mint',
'arms' => 'smithy',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '120',
'place_name' => 'Ferrara',
'place_type' => 'city',
'population' => '2000',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'tailor',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '120',
'place_name' => 'Bologna',
'place_type' => 'abbey',
'population' => '2000',
'fortification' => 'town_hall',
'commerce' => 'flax',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'bookbinder',
'arms' => 'smithy',
'education' => 'university'
]);
DB::table('places')->insert([
'region' => '121',
'place_name' => 'Aquileja',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'prince-archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '121',
'place_name' => 'Pordenone',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wool',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '121',
'place_name' => 'Udine',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'cooper',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '121',
'place_name' => 'Gemona',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'town_hall',
'commerce' => 'iron',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'vintner',
'arms' => 'smithy',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '122',
'place_name' => 'Turin',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'burgh',
'commerce' => 'cheese',
'feudal' => 'margrave',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'glasswork',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '122',
'place_name' => 'Ivrea',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fuller',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '122',
'place_name' => 'Asti',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'fruit',
'feudal' => 'knight',
'church' => 'prince-bishop',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'woad',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '122',
'place_name' => 'Pinerollo',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'fortified_abbey',
'commerce' => 'cheese',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'prince-abbot',
'factory' => 'fuller',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '123',
'place_name' => 'Florence',
'place_type' => 'capital',
'population' => '10000',
'fortification' => 'ducal_residence',
'commerce' => 'olive_oil',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'doge',
'monastic' => 'lord_abbot',
'factory' => 'mint',
'arms' => 'smithy',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '123',
'place_name' => 'Siena',
'place_type' => 'castle',
'population' => '2000',
'fortification' => 'ducal_residence',
'commerce' => 'olive_oil',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'doge',
'monastic' => 'templar',
'factory' => 'potterer',
'arms' => 'smithy',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '123',
'place_name' => 'Arezzo',
'place_type' => 'city',
'population' => '600',
'fortification' => 'town_hall',
'commerce' => 'poultry',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'woad',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '123',
'place_name' => 'Grosseto',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'town_hall',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'windmill',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '124',
'place_name' => 'Spoleto',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'town_hall',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '124',
'place_name' => 'Aquila',
'place_type' => 'castle',
'population' => '2000',
'fortification' => 'mountain_castle',
'commerce' => 'wool',
'feudal' => 'lord',
'church' => 'lord_bishop',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'saffron',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '124',
'place_name' => 'Ancona',
'place_type' => 'city',
'population' => '2000',
'fortification' => 'ducal_residence',
'commerce' => 'poultry',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'doge',
'monastic' => 'lord_abbot',
'factory' => 'cooper',
'arms' => 'shipyard',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '124',
'place_name' => 'Assissi',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'fortified_abbey',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '125',
'place_name' => 'Rome',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'papal_palace',
'commerce' => 'cheese',
'feudal' => 'prince',
'church' => 'pope',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'glasswork',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '125',
'place_name' => 'Frascati',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'baron',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '125',
'place_name' => 'Tivoli',
'place_type' => 'city',
'population' => '600',
'fortification' => 'town_hall',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '125',
'place_name' => 'Subiaco',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'hospice'
]);
DB::table('places')->insert([
'region' => '126',
'place_name' => 'Pisa',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'ducal_residence',
'commerce' => 'olive_oil',
'feudal' => 'knight',
'church' => 'lord_archbishop',
'civil' => 'doge',
'monastic' => 'hospitaller',
'factory' => 'tailor',
'arms' => 'shipyard',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '126',
'place_name' => 'Carrara',
'place_type' => 'castle',
'population' => '2000',
'fortification' => 'mountain_castle',
'commerce' => 'wine',
'feudal' => 'duke',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '126',
'place_name' => 'Lucca',
'place_type' => 'city',
'population' => '2000',
'fortification' => 'mountain_castle',
'commerce' => 'silk',
'feudal' => 'duke',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'woad',
'arms' => 'smithy',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '126',
'place_name' => 'Volterra',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'woad',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '127',
'place_name' => 'Naples',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'royal_court',
'commerce' => 'flax',
'feudal' => 'king',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'cooper',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '127',
'place_name' => 'Gaeta',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'ducal_residence',
'commerce' => 'silk',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'doge',
'monastic' => 'none',
'factory' => 'cooper',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '127',
'place_name' => 'Amalfi',
'place_type' => 'city',
'population' => '2000',
'fortification' => 'ducal_residence',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'lord_archbishop',
'civil' => 'doge',
'monastic' => 'lord_abbot',
'factory' => 'leather',
'arms' => 'shipyard',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '127',
'place_name' => 'Cassino',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_scriptorium',
'commerce' => 'olive_oil',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);
DB::table('places')->insert([
'region' => '128',
'place_name' => 'Taranto',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'royal_court',
'commerce' => 'iron',
'feudal' => 'prince',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fuller',
'arms' => 'shipyard',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '128',
'place_name' => 'Bari',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'baron',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'tailor',
'arms' => 'shipyard',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '128',
'place_name' => 'Siponto',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'grain',
'feudal' => 'knight',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'teutonic',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '128',
'place_name' => 'Brindisi',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '129',
'place_name' => 'Cosenza',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'duke',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'bookbinder',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '129',
'place_name' => 'Rossano',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'wine',
'feudal' => 'lord',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '129',
'place_name' => 'Tropea',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'olive_oil',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '129',
'place_name' => 'Vivarium',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);
DB::table('places')->insert([
'region' => '130',
'place_name' => 'Benevento',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'royal_court',
'commerce' => 'wine',
'feudal' => 'prince',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'none',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '130',
'place_name' => 'Monteverde',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'baron',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '130',
'place_name' => 'Potenza',
'place_type' => 'city',
'population' => '600',
'fortification' => 'town_hall',
'commerce' => 'cheese',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'granary',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '130',
'place_name' => 'Viggiano',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'cheese',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '131',
'place_name' => 'Sassari',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'royal_court',
'commerce' => 'iron',
'feudal' => 'king',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'granary',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '131',
'place_name' => 'Olbia',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'madder',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '131',
'place_name' => 'Bosa',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'olive_oil',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '131',
'place_name' => 'Porto Torres',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'granary',
'arms' => 'shipyard',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '132',
'place_name' => 'Cagliari',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'mountain_castle',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'granary',
'arms' => 'shipyard',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '132',
'place_name' => 'Oristano',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'emeralds',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'madder',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '132',
'place_name' => 'Dolia',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'cheese',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '132',
'place_name' => 'Iglesias',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'silver',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'madder',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '133',
'place_name' => 'Palermo',
'place_type' => 'capital',
'population' => '10000',
'fortification' => 'royal_court',
'commerce' => 'silk',
'feudal' => 'king',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'glasswork',
'arms' => 'shipyard',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '133',
'place_name' => 'Agrigento',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'salt',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'teutonic',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '133',
'place_name' => 'Cefalu',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'sugar',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '133',
'place_name' => 'Marsala',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'town_hall',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'fishery',
'arms' => 'smithy',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '134',
'place_name' => 'Messina',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'mountain_castle',
'commerce' => 'pigs',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '134',
'place_name' => 'Taormina',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'baron',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '134',
'place_name' => 'Catania',
'place_type' => 'city',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'iron',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '134',
'place_name' => 'Troina',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'baron',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '135',
'place_name' => 'Siracusa',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'mint',
'arms' => 'shipyard',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '135',
'place_name' => 'Caltagirone',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'wine',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'potterer',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '135',
'place_name' => 'Valletta',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'olive_oil',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'fishery',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '135',
'place_name' => 'Modica',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'cheese',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '136',
'place_name' => 'Tangiers',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'olive_oil',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '136',
'place_name' => 'Ceuta',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'sugar',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '136',
'place_name' => 'Ouazzane',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '136',
'place_name' => 'Tetouan',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '137',
'place_name' => 'Anfa',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'leather',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '137',
'place_name' => 'Rabat',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'cloth',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '137',
'place_name' => 'Sale',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'cloth',
'arms' => 'shipyard',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '137',
'place_name' => 'Fedala',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '138',
'place_name' => 'Fez',
'place_type' => 'capital',
'population' => '10000',
'fortification' => 'royal_court',
'commerce' => 'flax',
'feudal' => 'king',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'madder',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '138',
'place_name' => 'Sefrou',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '138',
'place_name' => 'Taza',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'tailor',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '138',
'place_name' => 'Meknes',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'olive_oil',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'scriptorium',
'arms' => 'armorer',
'education' => 'university'
]);
DB::table('places')->insert([
'region' => '139',
'place_name' => 'Marrakesh',
'place_type' => 'capital',
'population' => '10000',
'fortification' => 'royal_court',
'commerce' => 'olive_oil',
'feudal' => 'king',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'tailor',
'arms' => 'smithy',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '139',
'place_name' => 'Ouarzazate',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'fruit',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'tailor',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '139',
'place_name' => 'Mogador',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'sugar',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'mint',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '139',
'place_name' => 'Benhaddou',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'fruit',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '140',
'place_name' => 'Taroudant',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'royal_court',
'commerce' => 'sugar',
'feudal' => 'prince',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'woad',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '140',
'place_name' => 'Agadir',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'dates',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '140',
'place_name' => 'Tindouf',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'salt',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'ivory',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '140',
'place_name' => 'Tinmel',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '141',
'place_name' => 'Figuig',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'dates',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '141',
'place_name' => 'Sijilmassa',
'place_type' => 'castle',
'population' => '2000',
'fortification' => 'royal_court',
'commerce' => 'gold',
'feudal' => 'prince',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'leather',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '141',
'place_name' => 'Tinghir',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'dates',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '141',
'place_name' => 'Rachidiya',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'burgh',
'commerce' => 'dates',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '142',
'place_name' => 'Tlemcen',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'burgh',
'commerce' => 'olive_oil',
'feudal' => 'king',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'tailor',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '142',
'place_name' => 'Oujda',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'lead',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'leather',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '142',
'place_name' => 'Mellila',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'iron',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '142',
'place_name' => 'Taourirt',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'burgh',
'commerce' => 'olive_oil',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'armorer',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '143',
'place_name' => 'Oran',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'olive_oil',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'madder',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '143',
'place_name' => 'Mostaganem',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'olive_oil',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'madder',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '143',
'place_name' => 'Tiaret',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '143',
'place_name' => 'Mascara',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'olive_oil',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'leather',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '144',
'place_name' => 'Djelfa',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'dates',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '144',
'place_name' => 'Laghouat',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'dates',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'tailor',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '144',
'place_name' => 'Ghardaia',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'dates',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'tailor',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '144',
'place_name' => 'Menia',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'dates',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'armorer',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '145',
'place_name' => 'Khaled',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'dates',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '145',
'place_name' => 'Biskra',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'dates',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '145',
'place_name' => 'Ouargla',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'dates',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '145',
'place_name' => 'Touggourt',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'abbey_grange',
'commerce' => 'dates',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '146',
'place_name' => 'Algiers',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '146',
'place_name' => 'Medea',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wool',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '146',
'place_name' => 'Tedelles',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'olive_oil',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '146',
'place_name' => 'Achir',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'roadside_inn',
'commerce' => 'olive_oil',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '147',
'place_name' => 'Bejaia',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'iron',
'feudal' => 'baron',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '147',
'place_name' => 'Jijel',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'olive_oil',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'leather',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '147',
'place_name' => 'Setif',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'tailor',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '147',
'place_name' => 'Eulma',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '148',
'place_name' => 'Annaba',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'iron',
'feudal' => 'baron',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '148',
'place_name' => 'Tabarka',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'poultry',
'feudal' => 'baron',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'madder',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '148',
'place_name' => 'Jendouba',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '148',
'place_name' => 'Kaf',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '149',
'place_name' => 'Tunis',
'place_type' => 'capital',
'population' => '10000',
'fortification' => 'burgh',
'commerce' => 'olive_oil',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'tailor',
'arms' => 'shipyard',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '149',
'place_name' => 'Zaghouan',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'olive_oil',
'feudal' => 'baron',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '149',
'place_name' => 'Hammamet',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'olive_oil',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '149',
'place_name' => 'Bizerte',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'olive_oil',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'madder',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '150',
'place_name' => 'Kairouan',
'place_type' => 'capital',
'population' => '10000',
'fortification' => 'royal_court',
'commerce' => 'olive_oil',
'feudal' => 'king',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'smithy',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '150',
'place_name' => 'Sousse',
'place_type' => 'castle',
'population' => '2000',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'leather',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '150',
'place_name' => 'Sfax',
'place_type' => 'city',
'population' => '2000',
'fortification' => 'burgh',
'commerce' => 'olive_oil',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'tailor',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '150',
'place_name' => 'Mahdia',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'poultry',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '151',
'place_name' => 'Gabes',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'sugar',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '151',
'place_name' => 'Gafsa',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'dates',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '151',
'place_name' => 'Kebili',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'dates',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '151',
'place_name' => 'Tozeur',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'dates',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '152',
'place_name' => 'Ghadames',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'salt',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '152',
'place_name' => 'Medenine',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'dates',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '152',
'place_name' => 'Tamanrasset',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'salt',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'ivory',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '152',
'place_name' => 'Ghat',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'salt',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'ivory',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '153',
'place_name' => 'Tripoli',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'dates',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '153',
'place_name' => 'Zliten',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'dates',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '153',
'place_name' => 'Misrata',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'dates',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '153',
'place_name' => 'Zuwara',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'dates',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '154',
'place_name' => 'Germa',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'salt',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '154',
'place_name' => 'Sabha',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'dates',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '154',
'place_name' => 'Zouila',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'dates',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '154',
'place_name' => 'Qatrun',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'salt',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'ivory',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '155',
'place_name' => 'Kufra',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'salt',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'ivory',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '155',
'place_name' => 'Ghiranghedi',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'dates',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '155',
'place_name' => 'Awjila',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'dates',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '155',
'place_name' => 'Marada',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'dates',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '156',
'place_name' => 'Benghazi',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'olive_oil',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fishery',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '156',
'place_name' => 'Derna',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'dates',
'feudal' => 'baron',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '156',
'place_name' => 'Tobruk',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'dates',
'feudal' => 'baron',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '156',
'place_name' => 'Ajdabiya',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'dates',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '157',
'place_name' => 'Alexandria',
'place_type' => 'capital',
'population' => '10000',
'fortification' => 'burgh',
'commerce' => 'poultry',
'feudal' => 'count',
'church' => 'patriarch',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'mint',
'arms' => 'shipyard',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '157',
'place_name' => 'Rosetta',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'sugar',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '157',
'place_name' => 'Damietta',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'cheese',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'granary',
'arms' => 'shipyard',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '157',
'place_name' => 'Mansoura',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'flax',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'smithy',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '158',
'place_name' => 'Cairo',
'place_type' => 'capital',
'population' => '10000',
'fortification' => 'royal_court',
'commerce' => 'sugar',
'feudal' => 'king',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'potterer',
'arms' => 'smithy',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '158',
'place_name' => 'Helwan',
'place_type' => 'castle',
'population' => '2000',
'fortification' => 'burgh',
'commerce' => 'iron',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'tailor',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '158',
'place_name' => 'Fayum',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'dates',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '158',
'place_name' => 'Natrun',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'salt',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '159',
'place_name' => 'Minya',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'poultry',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'granary',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '159',
'place_name' => 'Siwa',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'dates',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '159',
'place_name' => 'Farafra',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'dates',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '159',
'place_name' => 'Anba Boula',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_scriptorium',
'commerce' => 'fruit',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);
DB::table('places')->insert([
'region' => '160',
'place_name' => 'Asyut',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'burgh',
'commerce' => 'sugar',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '160',
'place_name' => 'Kharga',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'salt',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'ivory',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '160',
'place_name' => 'Aswan',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'emeralds',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '160',
'place_name' => 'Zinaiqa',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'fruit',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '161',
'place_name' => 'Liegnitz',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'burgh',
'commerce' => 'silver',
'feudal' => 'duke',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'potterer',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '161',
'place_name' => 'Glogau',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'honey',
'feudal' => 'duke',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'madder',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '161',
'place_name' => 'Breslau',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'honey',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'madder',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '161',
'place_name' => 'Leubus',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'fruit',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'prince-abbot',
'factory' => 'madder',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '162',
'place_name' => 'Krakow',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'royal_court',
'commerce' => 'grain',
'feudal' => 'king',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'glasswork',
'arms' => 'armorer',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '162',
'place_name' => 'Teczyn',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'burgrave',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '162',
'place_name' => 'Tarnau',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'burgrave',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fur',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '162',
'place_name' => 'Salzberg',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'abbey_grange',
'commerce' => 'salt',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '163',
'place_name' => 'Gnesen',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'burgrave',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'windmill',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '163',
'place_name' => 'Posen',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'duke',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'cooper',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '163',
'place_name' => 'Konin',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'honey',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '163',
'place_name' => 'Kalisz',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'burgrave',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '164',
'place_name' => 'Plock',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'duke',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '164',
'place_name' => 'Warsaw',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'honey',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '164',
'place_name' => 'Leslau',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'grain',
'feudal' => 'knight',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '164',
'place_name' => 'Radomir',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'burgrave',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '165',
'place_name' => 'Brest',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'burgrave',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '165',
'place_name' => 'Goroden',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '165',
'place_name' => 'Kobryn',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '165',
'place_name' => 'Wolkowysk',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'cheese',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '166',
'place_name' => 'Tracken',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'mountain_castle',
'commerce' => 'poultry',
'feudal' => 'grand_duke',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fuller',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '166',
'place_name' => 'Vilnius',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'chancery',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fur',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '166',
'place_name' => 'Kauen',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'honey',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '166',
'place_name' => 'Minsk',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'cheese',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'leather',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '167',
'place_name' => 'Pula',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '167',
'place_name' => 'Rovigno',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '167',
'place_name' => 'Vikla',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '167',
'place_name' => 'Trsat',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'sheriff',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '168',
'place_name' => 'Ragusa',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'ducal_residence',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'doge',
'monastic' => 'none',
'factory' => 'mint',
'arms' => 'shipyard',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '168',
'place_name' => 'Zadar',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fishery',
'arms' => 'smithy',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '168',
'place_name' => 'Split',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'olive_oil',
'feudal' => 'count',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'shipyard',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '168',
'place_name' => 'Biograd',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'baron',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '169',
'place_name' => 'Knin',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'royal_court',
'commerce' => 'wine',
'feudal' => 'king',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '169',
'place_name' => 'Bihac',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '169',
'place_name' => 'Konjic',
'place_type' => 'city',
'population' => '600',
'fortification' => 'town_hall',
'commerce' => 'wine',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fur',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '169',
'place_name' => 'Kotor',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'duke',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'bookbinder',
'arms' => 'none',
'education' => 'hospice'
]);
DB::table('places')->insert([
'region' => '170',
'place_name' => 'Gyor',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '170',
'place_name' => 'Tyrnau',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'town_hall',
'commerce' => 'cheese',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '170',
'place_name' => 'Nitra',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'duke',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'glasswork',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '170',
'place_name' => 'Sopron',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'wine',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'hospitaller',
'factory' => 'windmill',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '171',
'place_name' => 'Veszprem',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'pigs',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '171',
'place_name' => 'Fehervar',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'chancery',
'commerce' => 'fruit',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '171',
'place_name' => 'Egerszeg',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'bookbinder',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '171',
'place_name' => 'Pecs',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'fruit',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'university'
]);
DB::table('places')->insert([
'region' => '172',
'place_name' => 'Esztergom',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'royal_court',
'commerce' => 'cheese',
'feudal' => 'king',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'granary',
'arms' => 'armorer',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '172',
'place_name' => 'Bystrica',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'town_hall',
'commerce' => 'iron',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '172',
'place_name' => 'Krupina',
'place_type' => 'city',
'population' => '600',
'fortification' => 'town_hall',
'commerce' => 'gold',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '172',
'place_name' => 'Leua',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'sheriff',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '173',
'place_name' => 'Eger',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'baron',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '173',
'place_name' => 'Diosgyor',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '173',
'place_name' => 'Bartfeld',
'place_type' => 'city',
'population' => '600',
'fortification' => 'town_hall',
'commerce' => 'grain',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '173',
'place_name' => 'Kassow',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '174',
'place_name' => 'Buda',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'chancery',
'commerce' => 'cheese',
'feudal' => 'duke',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'granary',
'arms' => 'smithy',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '174',
'place_name' => 'Kecskemet',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '174',
'place_name' => 'Debrecen',
'place_type' => 'city',
'population' => '600',
'fortification' => 'town_hall',
'commerce' => 'wool',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'windmill',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '174',
'place_name' => 'Zounok',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '175',
'place_name' => 'Pecs',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'fruit',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '175',
'place_name' => 'Vukovar',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'tailor',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '175',
'place_name' => 'Kalocsa',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'flax',
'feudal' => 'knight',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'granary',
'arms' => 'none',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '175',
'place_name' => 'Virovitica',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'hospitaller',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '176',
'place_name' => 'Alba Julia',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'duke',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '176',
'place_name' => 'Schaasburg',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'cheese',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'potterer',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '176',
'place_name' => 'Klausenburg',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'poultry',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'teutonic',
'factory' => 'cooper',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '176',
'place_name' => 'Carta',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_scriptorium',
'commerce' => 'wool',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);
DB::table('places')->insert([
'region' => '177',
'place_name' => 'Targu Jiu',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '177',
'place_name' => 'Drobeta',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'honey',
'feudal' => 'burgrave',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '177',
'place_name' => 'Curtea Arges',
'place_type' => 'city',
'population' => '600',
'fortification' => 'royal_court',
'commerce' => 'grain',
'feudal' => 'prince',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '177',
'place_name' => 'Tismana',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'honey',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '178',
'place_name' => 'Targoviste',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'potterer',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '178',
'place_name' => 'Bucharest',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'cheese',
'feudal' => 'baron',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'windmill',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '178',
'place_name' => 'Torzburg',
'place_type' => 'city',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'poultry',
'feudal' => 'burgrave',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'teutonic',
'factory' => 'mint',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '178',
'place_name' => 'Kronstadt',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'poultry',
'feudal' => 'burgrave',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'cooper',
'arms' => 'smithy',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '179',
'place_name' => 'Constanta',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'shipyard',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '179',
'place_name' => 'Harsova',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '179',
'place_name' => 'Tulcea',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '179',
'place_name' => 'Calarasi',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'flax',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'glasswork',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '180',
'place_name' => 'Suceava',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'prince',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '180',
'place_name' => 'Orhei',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'cheese',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '180',
'place_name' => 'Odessa',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '180',
'place_name' => 'Chisinau',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'honey',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'tailor',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '181',
'place_name' => 'Sofia',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'cheese',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '181',
'place_name' => 'Pleven',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '181',
'place_name' => 'Stip',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'baron',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'tailor',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '181',
'place_name' => 'Rila',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'honey',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'windmill',
'arms' => 'none',
'education' => 'library'
]);
DB::table('places')->insert([
'region' => '182',
'place_name' => 'Varna',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'windmill',
'arms' => 'shipyard',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '182',
'place_name' => 'Pliska',
'place_type' => 'castle',
'population' => '2000',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'glasswork',
'arms' => 'none',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '182',
'place_name' => 'Preslav',
'place_type' => 'city',
'population' => '2000',
'fortification' => 'royal_court',
'commerce' => 'grain',
'feudal' => 'king',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'armorer',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '182',
'place_name' => 'Tarnovo',
'place_type' => 'abbey',
'population' => '2000',
'fortification' => 'mountain_castle',
'commerce' => 'salt',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'hospice'
]);
DB::table('places')->insert([
'region' => '183',
'place_name' => 'Gorazde',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'duke',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fur',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '183',
'place_name' => 'Zenica',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'cheese',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '183',
'place_name' => 'Sebrenik',
'place_type' => 'city',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '183',
'place_name' => 'Visegrad',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'honey',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '184',
'place_name' => 'Belgrade',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '184',
'place_name' => 'Rasa',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'abbey_scriptorium',
'commerce' => 'wine',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '184',
'place_name' => 'Valjevo',
'place_type' => 'city',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'iron',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '184',
'place_name' => 'Bukovo',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'honey',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'granary',
'arms' => 'none',
'education' => 'library'
]);
DB::table('places')->insert([
'region' => '185',
'place_name' => 'Rashka',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'royal_court',
'commerce' => 'grain',
'feudal' => 'prince',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '185',
'place_name' => 'Bukovo',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'honey',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '185',
'place_name' => 'Krusevac',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'pigs',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '185',
'place_name' => 'Zica',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'fruit',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '186',
'place_name' => 'Prizren',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'fruit',
'feudal' => 'count',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '186',
'place_name' => 'Kumanovo',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'lead',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'leather',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '186',
'place_name' => 'Skopje',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'mint',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '186',
'place_name' => 'Vitina',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'honey',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '187',
'place_name' => 'Pristina',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'mint',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '187',
'place_name' => 'Zvecan',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'gold',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '187',
'place_name' => 'Pec',
'place_type' => 'city',
'population' => '120',
'fortification' => 'burgh',
'commerce' => 'fruit',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'mint',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '187',
'place_name' => 'Berane',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'honey',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '188',
'place_name' => 'Monastyrski',
'place_type' => 'capital',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'fruit',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '188',
'place_name' => 'Samkarsh',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '188',
'place_name' => 'Poltava',
'place_type' => 'city',
'population' => '120',
'fortification' => 'roadside_inn',
'commerce' => 'cheese',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '188',
'place_name' => 'Oleshia',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'roadside_inn',
'commerce' => 'pigs',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '189',
'place_name' => 'Pereyaslav',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'royal_court',
'commerce' => 'grain',
'feudal' => 'prince',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'armorer',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '189',
'place_name' => 'Korsun',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'fur',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '189',
'place_name' => 'Kaniv',
'place_type' => 'city',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fur',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '189',
'place_name' => 'Cherkasy',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'roadside_inn',
'commerce' => 'cheese',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '190',
'place_name' => 'Kiev',
'place_type' => 'capital',
'population' => '10000',
'fortification' => 'royal_court',
'commerce' => 'honey',
'feudal' => 'prince',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'glasswork',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '190',
'place_name' => 'Borispyl',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'roadside_inn',
'commerce' => 'grain',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '190',
'place_name' => 'Yuriev',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '190',
'place_name' => 'Pechersk',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'honey',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);
DB::table('places')->insert([
'region' => '191',
'place_name' => 'Halych',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'royal_court',
'commerce' => 'grain',
'feudal' => 'prince',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '191',
'place_name' => 'Kolomyia',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'salt',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'leather',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '191',
'place_name' => 'Lviv',
'place_type' => 'city',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'poultry',
'feudal' => 'count',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'mint',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '191',
'place_name' => 'Terebovlia',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'flax',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '192',
'place_name' => 'Turov',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'royal_court',
'commerce' => 'grain',
'feudal' => 'prince',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '192',
'place_name' => 'Pinesk',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '192',
'place_name' => 'Slutsk',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fur',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '192',
'place_name' => 'Korosten',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'roadside_inn',
'commerce' => 'grain',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '193',
'place_name' => 'Tchernigov',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'royal_court',
'commerce' => 'grain',
'feudal' => 'prince',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'mint',
'arms' => 'none',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '193',
'place_name' => 'Lyubech',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'roadside_inn',
'commerce' => 'honey',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '193',
'place_name' => 'Gomel',
'place_type' => 'city',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '193',
'place_name' => 'Mazyr',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'fruit',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '194',
'place_name' => 'Polotsk',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'royal_court',
'commerce' => 'flax',
'feudal' => 'prince',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fur',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '194',
'place_name' => 'Orsha',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'roadside_inn',
'commerce' => 'flax',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '194',
'place_name' => 'Vitebsk',
'place_type' => 'city',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fur',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '194',
'place_name' => 'Barysaw',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'roadside_inn',
'commerce' => 'flax',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '195',
'place_name' => 'Smolensk',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'royal_court',
'commerce' => 'grain',
'feudal' => 'prince',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fur',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '195',
'place_name' => 'Bryansk',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '195',
'place_name' => 'Vyazma',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '195',
'place_name' => 'Roslav',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '196',
'place_name' => 'Ryazan',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'royal_court',
'commerce' => 'cheese',
'feudal' => 'prince',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '196',
'place_name' => 'Kolomna',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'fur',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '196',
'place_name' => 'Kasimov',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wool',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '196',
'place_name' => 'Tula',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '197',
'place_name' => 'Moscow',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'royal_court',
'commerce' => 'grain',
'feudal' => 'prince',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fur',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '197',
'place_name' => 'Sergiev',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'grain',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'fur',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '197',
'place_name' => 'Zvenigorod',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'honey',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '197',
'place_name' => 'Simonov',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'honey',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '198',
'place_name' => 'Pleskov',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'royal_court',
'commerce' => 'flax',
'feudal' => 'prince',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fur',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '198',
'place_name' => 'Porkhov',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'flax',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'fur',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '198',
'place_name' => 'Ostrov',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fur',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '198',
'place_name' => 'Gdov',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'flax',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'fur',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '199',
'place_name' => 'Novgorod',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'royal_court',
'commerce' => 'wool',
'feudal' => 'prince',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'windmill',
'arms' => 'armorer',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '199',
'place_name' => 'Rusa',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'salt',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'fur',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '199',
'place_name' => 'Ladoga',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fur',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '199',
'place_name' => 'Schlisselburg',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'water_castle',
'commerce' => 'duck',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '200',
'place_name' => 'Bolgar',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fur',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '200',
'place_name' => 'Bilyar',
'place_type' => 'castle',
'population' => '2000',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fur',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '200',
'place_name' => 'Kazan',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'flax',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fur',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '200',
'place_name' => 'Ufa',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'flax',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fur',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '201',
'place_name' => 'Vladimir',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fur',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '201',
'place_name' => 'Vyazniki',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'flax',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'fur',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '201',
'place_name' => 'Suzdal',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'flax',
'feudal' => 'baron',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'windmill',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '201',
'place_name' => 'Nizhny',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fur',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '202',
'place_name' => 'Vologda',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'flax',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fur',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '202',
'place_name' => 'Rybinsk',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'roadside_inn',
'commerce' => 'wool',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '202',
'place_name' => 'Cherepovets',
'place_type' => 'city',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'grain',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'fur',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '202',
'place_name' => 'Kirillov',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'grain',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'fur',
'arms' => 'none',
'education' => 'library'
]);
DB::table('places')->insert([
'region' => '203',
'place_name' => 'Oryol',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '203',
'place_name' => 'Novosil',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '203',
'place_name' => 'Kromy',
'place_type' => 'city',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '203',
'place_name' => 'Lipetsk',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'roadside_inn',
'commerce' => 'grain',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '204',
'place_name' => 'Sevsk',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '204',
'place_name' => 'Rylsk',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '204',
'place_name' => 'Kursk',
'place_type' => 'city',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'windmill',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '204',
'place_name' => 'Olgov',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'roadside_inn',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '205',
'place_name' => 'Atil',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'royal_court',
'commerce' => 'wool',
'feudal' => 'king',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '205',
'place_name' => 'Saraibatu',
'place_type' => 'castle',
'population' => '10000',
'fortification' => 'ducal_residence',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'mint',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '205',
'place_name' => 'Saraiberke',
'place_type' => 'city',
'population' => '2000',
'fortification' => 'ducal_residence',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'potterer',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '205',
'place_name' => 'Khumar',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '206',
'place_name' => 'Gurganj',
'place_type' => 'capital',
'population' => '10000',
'fortification' => 'royal_court',
'commerce' => 'wool',
'feudal' => 'king',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'potterer',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '206',
'place_name' => 'Khiva',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'ducal_residence',
'commerce' => 'silk',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'tailor',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '206',
'place_name' => 'Saraidzhuk',
'place_type' => 'city',
'population' => '600',
'fortification' => 'ducal_residence',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'mint',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '206',
'place_name' => 'Mishrian',
'place_type' => 'abbey',
'population' => '2000',
'fortification' => 'ducal_residence',
'commerce' => 'silk',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '207',
'place_name' => 'Constantinople',
'place_type' => 'capital',
'population' => '10000',
'fortification' => 'royal_court',
'commerce' => 'silk',
'feudal' => 'king',
'church' => 'patriarch',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'tailor',
'arms' => 'shipyard',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '207',
'place_name' => 'Redosto',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'olive_oil',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '207',
'place_name' => 'Edirne',
'place_type' => 'city',
'population' => '2000',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'potterer',
'arms' => 'smithy',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '207',
'place_name' => 'Corlu',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'baron',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '208',
'place_name' => 'Thessaloniki',
'place_type' => 'capital',
'population' => '10000',
'fortification' => 'royal_court',
'commerce' => 'wool',
'feudal' => 'prince',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fishery',
'arms' => 'smithy',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '208',
'place_name' => 'Stratonicea',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'gold',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '208',
'place_name' => 'Melnik',
'place_type' => 'city',
'population' => '600',
'fortification' => 'royal_court',
'commerce' => 'wine',
'feudal' => 'prince',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '208',
'place_name' => 'Hilandar',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_scriptorium',
'commerce' => 'olive_oil',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);
DB::table('places')->insert([
'region' => '209',
'place_name' => 'Athens',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'royal_court',
'commerce' => 'olive_oil',
'feudal' => 'prince',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'mint',
'arms' => 'shipyard',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '209',
'place_name' => 'Lamia',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '209',
'place_name' => 'Thebes',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'silk',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '209',
'place_name' => 'Larissa',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '210',
'place_name' => 'Mystras',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'royal_court',
'commerce' => 'olive_oil',
'feudal' => 'prince',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'none',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '210',
'place_name' => 'Modon',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'poultry',
'feudal' => 'baron',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'teutonic',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '210',
'place_name' => 'Corinth',
'place_type' => 'city',
'population' => '2000',
'fortification' => 'burgh',
'commerce' => 'silk',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'madder',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '210',
'place_name' => 'Glarentza',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'cheese',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'teutonic',
'factory' => 'tailor',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '211',
'place_name' => 'Arta',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'royal_court',
'commerce' => 'cheese',
'feudal' => 'prince',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'woad',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '211',
'place_name' => 'Gardiki',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'wine',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'hospitaller',
'factory' => 'none',
'arms' => 'shipyard',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '211',
'place_name' => 'Ioannina',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '211',
'place_name' => 'Amfissa',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'olive_oil',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '212',
'place_name' => 'Kruja',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'royal_court',
'commerce' => 'honey',
'feudal' => 'prince',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'vintner',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '212',
'place_name' => 'Durres',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'lord_archbishop',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'leather',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '212',
'place_name' => 'Ohrid',
'place_type' => 'city',
'population' => '2000',
'fortification' => 'burgh',
'commerce' => 'fruit',
'feudal' => 'baron',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '212',
'place_name' => 'Saint Jovan',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'fruit',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '213',
'place_name' => 'Kastoria',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'duke',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fur',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '213',
'place_name' => 'Bitola',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'fur',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '213',
'place_name' => 'Prilep',
'place_type' => 'city',
'population' => '600',
'fortification' => 'bishop_palace',
'commerce' => 'rubies',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fur',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '213',
'place_name' => 'Berat',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'silver',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'leather',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '214',
'place_name' => 'Iraklion',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'cheese',
'feudal' => 'count',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'saffron',
'arms' => 'none',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '214',
'place_name' => 'Lemnos',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '214',
'place_name' => 'Chania',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'cheese',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'saffron',
'arms' => 'shipyard',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '214',
'place_name' => 'Patros',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'shipyard',
'education' => 'hospice'
]);
DB::table('places')->insert([
'region' => '215',
'place_name' => 'Smyrna',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'royal_court',
'commerce' => 'cheese',
'feudal' => 'prince',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'tailor',
'arms' => 'shipyard',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '215',
'place_name' => 'Samos',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'madder',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '215',
'place_name' => 'Chios',
'place_type' => 'city',
'population' => '2000',
'fortification' => 'burgh',
'commerce' => 'salt',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '215',
'place_name' => 'Patmos',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_scriptorium',
'commerce' => 'olive_oil',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);
DB::table('places')->insert([
'region' => '216',
'place_name' => 'Tralles',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'royal_court',
'commerce' => 'olive_oil',
'feudal' => 'prince',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'madder',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '216',
'place_name' => 'Miletus',
'place_type' => 'castle',
'population' => '2000',
'fortification' => 'mountain_castle',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'madder',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '216',
'place_name' => 'Efese',
'place_type' => 'city',
'population' => '2000',
'fortification' => 'burgh',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'mint',
'arms' => 'none',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '216',
'place_name' => 'Sardes',
'place_type' => 'abbey',
'population' => '2000',
'fortification' => 'burgh',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '217',
'place_name' => 'Nicaea',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'royal_court',
'commerce' => 'olive_oil',
'feudal' => 'prince',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'glasswork',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '217',
'place_name' => 'Kios',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wool',
'feudal' => 'baron',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '217',
'place_name' => 'Bursa',
'place_type' => 'city',
'population' => '2000',
'fortification' => 'royal_court',
'commerce' => 'silk',
'feudal' => 'prince',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'cooper',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '217',
'place_name' => 'Pergamum',
'place_type' => 'abbey',
'population' => '2000',
'fortification' => 'burgh',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'leather',
'arms' => 'none',
'education' => 'hospice'
]);
DB::table('places')->insert([
'region' => '218',
'place_name' => 'Ikonion',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'royal_court',
'commerce' => 'flax',
'feudal' => 'prince',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'tailor',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '218',
'place_name' => 'Mistheia',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'royal_court',
'commerce' => 'grain',
'feudal' => 'prince',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '218',
'place_name' => 'Laranda',
'place_type' => 'city',
'population' => '600',
'fortification' => 'royal_court',
'commerce' => 'grain',
'feudal' => 'prince',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'armorer',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '218',
'place_name' => 'Ousakeion',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'poultry',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'leather',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '219',
'place_name' => 'Coracesium',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'royal_court',
'commerce' => 'fruit',
'feudal' => 'prince',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '219',
'place_name' => 'Rhodos',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'wine',
'feudal' => 'duke',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '219',
'place_name' => 'Attalia',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'olive_oil',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'shipyard',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '219',
'place_name' => 'Makre',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'flax',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'madder',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '220',
'place_name' => 'Ancyra',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'prince',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'madder',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '220',
'place_name' => 'Gordion',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'tailor',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '220',
'place_name' => 'Cotyaeum',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'fruit',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'potterer',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '220',
'place_name' => 'Dorylaeum',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'honey',
'feudal' => 'baron',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '221',
'place_name' => 'Sinope',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'royal_court',
'commerce' => 'flax',
'feudal' => 'prince',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'shipyard',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '221',
'place_name' => 'Kastamuni',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'honey',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '221',
'place_name' => 'Amasra',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'honey',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'shipyard',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '221',
'place_name' => 'Claudiopolis',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'honey',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '222',
'place_name' => 'Tarsus',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'potterer',
'arms' => 'shipyard',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '222',
'place_name' => 'Adana',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'teutonic',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '222',
'place_name' => 'Nicosia',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wool',
'feudal' => 'baron',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '222',
'place_name' => 'Limasol',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'mint',
'arms' => 'shipyard',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '223',
'place_name' => 'Caesarea',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wool',
'feudal' => 'prince',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'leather',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '223',
'place_name' => 'Garsaura',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '223',
'place_name' => 'Magida',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'iron',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '223',
'place_name' => 'Muskara',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '224',
'place_name' => 'Trebizond',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'silver',
'feudal' => 'grand_duke',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'shipyard',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '224',
'place_name' => 'Bayberdon',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'honey',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'mint',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '224',
'place_name' => 'Riza',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'flax',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '224',
'place_name' => 'Kerasous',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'fruit',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '225',
'place_name' => 'Edessa',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'leather',
'arms' => 'none',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '225',
'place_name' => 'Semsur',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'gold',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'glasswork',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '225',
'place_name' => 'Amouda',
'place_type' => 'city',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'fruit',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '225',
'place_name' => 'Antep',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'cheese',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'hospitaller',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '226',
'place_name' => 'Amasia',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'smithy',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '226',
'place_name' => 'Samsun',
'place_type' => 'castle',
'population' => '2000',
'fortification' => 'royal_court',
'commerce' => 'flax',
'feudal' => 'prince',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'shipyard',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '226',
'place_name' => 'Corum',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wool',
'feudal' => 'baron',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '226',
'place_name' => 'Takat',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '227',
'place_name' => 'Diyarbakir',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'royal_court',
'commerce' => 'iron',
'feudal' => 'prince',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '227',
'place_name' => 'Harput',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'honey',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'vintner',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '227',
'place_name' => 'Erzincan',
'place_type' => 'city',
'population' => '600',
'fortification' => 'royal_court',
'commerce' => 'silver',
'feudal' => 'prince',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'tailor',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '227',
'place_name' => 'Romanoupolis',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '228',
'place_name' => 'Sivas',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'royal_court',
'commerce' => 'silk',
'feudal' => 'prince',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'smithy',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '228',
'place_name' => 'Divrigi',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'silver',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '228',
'place_name' => 'Albistan',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'gold',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '228',
'place_name' => 'Tavium',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '229',
'place_name' => 'Batumi',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'fruit',
'feudal' => 'duke',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '229',
'place_name' => 'Poti',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'gold',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '229',
'place_name' => 'Pitsunda',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'fruit',
'feudal' => 'count',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '229',
'place_name' => 'Kutais',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'silk',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'vintner',
'arms' => 'none',
'education' => 'hospice'
]);
DB::table('places')->insert([
'region' => '230',
'place_name' => 'Tiflis',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'royal_court',
'commerce' => 'iron',
'feudal' => 'king',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'armorer',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '230',
'place_name' => 'Surami',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'duke',
'church' => 'priest',
'civil' => 'sheriff',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '230',
'place_name' => 'Gori',
'place_type' => 'city',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'sheriff',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '230',
'place_name' => 'Akhalkalaki',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'cheese',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '231',
'place_name' => 'Derbent',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '231',
'place_name' => 'Baku',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'mint',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '231',
'place_name' => 'Mingecevir',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '231',
'place_name' => 'Balanjar',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '232',
'place_name' => 'Ani',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'royal_court',
'commerce' => 'cheese',
'feudal' => 'king',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'tailor',
'arms' => 'armorer',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '232',
'place_name' => 'Yerevan',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'tailor',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '232',
'place_name' => 'Ghars',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'cheese',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '232',
'place_name' => 'Kirants',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'fruit',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '233',
'place_name' => 'Nakhichevan',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'royal_court',
'commerce' => 'flax',
'feudal' => 'prince',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'leather',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '233',
'place_name' => 'Khoy',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'salt',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '233',
'place_name' => 'Ordubad',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'silk',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'vintner',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '233',
'place_name' => 'Baghaberd',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'cheese',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'armorer',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '234',
'place_name' => 'Tatvan',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'salt',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '234',
'place_name' => 'Manzikert',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'salt',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'madder',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '234',
'place_name' => 'Bitlis',
'place_type' => 'city',
'population' => '600',
'fortification' => 'royal_court',
'commerce' => 'silver',
'feudal' => 'prince',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '234',
'place_name' => 'Arakelots',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'fruit',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '235',
'place_name' => 'Mardin',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'royal_court',
'commerce' => 'grain',
'feudal' => 'prince',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'armorer',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '235',
'place_name' => 'Saird',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'tailor',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '235',
'place_name' => 'Cepha',
'place_type' => 'city',
'population' => '600',
'fortification' => 'royal_court',
'commerce' => 'wool',
'feudal' => 'prince',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'scriptorium',
'arms' => 'smithy',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '235',
'place_name' => 'Nisibis',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'fruit',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '236',
'place_name' => 'Van',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '236',
'place_name' => 'Berkri',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'iron',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '236',
'place_name' => 'Archesh',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '236',
'place_name' => 'Ostan',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'honey',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'vintner',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '237',
'place_name' => 'Nishapur',
'place_type' => 'capital',
'population' => '10000',
'fortification' => 'chancery',
'commerce' => 'sapphire',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'potterer',
'arms' => 'smithy',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '237',
'place_name' => 'Beyhaq',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fuller',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '237',
'place_name' => 'Mashhad',
'place_type' => 'city',
'population' => '600',
'fortification' => 'roadside_inn',
'commerce' => 'silk',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'tailor',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '237',
'place_name' => 'Konjikala',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'silk',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'vintner',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '238',
'place_name' => 'Kashmar',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'silk',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'tailor',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '238',
'place_name' => 'Gonabad',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'silk',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'saffron',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '238',
'place_name' => 'Tabas',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'dates',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '238',
'place_name' => 'Birjand',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'silk',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'saffron',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '239',
'place_name' => 'Kerman',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'roadside_inn',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'tailor',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '239',
'place_name' => 'Bam',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'silk',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '239',
'place_name' => 'Rafsanjan',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'dates',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'tailor',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '239',
'place_name' => 'Sirjan',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'gold',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '240',
'place_name' => 'Shiraz',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'royal_court',
'commerce' => 'wine',
'feudal' => 'king',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'tailor',
'arms' => 'smithy',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '240',
'place_name' => 'Bushire',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'dates',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '240',
'place_name' => 'Hormuz',
'place_type' => 'city',
'population' => '600',
'fortification' => 'royal_court',
'commerce' => 'iron',
'feudal' => 'prince',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'shipyard',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '240',
'place_name' => 'Yasuj',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'dates',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'mint',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '241',
'place_name' => 'Isfahan',
'place_type' => 'capital',
'population' => '10000',
'fortification' => 'royal_court',
'commerce' => 'dates',
'feudal' => 'prince',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'tailor',
'arms' => 'armorer',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '241',
'place_name' => 'Dezgord',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'dates',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '241',
'place_name' => 'Yazd',
'place_type' => 'city',
'population' => '600',
'fortification' => 'roadside_inn',
'commerce' => 'silk',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'mint',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '241',
'place_name' => 'Zavareh',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'dates',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '242',
'place_name' => 'Rhages',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'burgh',
'commerce' => 'silk',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'granary',
'arms' => 'none',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '242',
'place_name' => 'Kashan',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'silk',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'tailor',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '242',
'place_name' => 'Ghom',
'place_type' => 'city',
'population' => '2000',
'fortification' => 'burgh',
'commerce' => 'silver',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '242',
'place_name' => 'Qazvin',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'roadside_inn',
'commerce' => 'dates',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'tailor',
'arms' => 'none',
'education' => 'library'
]);
DB::table('places')->insert([
'region' => '243',
'place_name' => 'Astarabad',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'mint',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '243',
'place_name' => 'Alamut',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'scriptorium',
'arms' => 'smithy',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '243',
'place_name' => 'Amol',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'fruit',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'tailor',
'arms' => 'smithy',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '243',
'place_name' => 'Rasht',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '244',
'place_name' => 'Tabriz',
'place_type' => 'capital',
'population' => '10000',
'fortification' => 'burgh',
'commerce' => 'cheese',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'tailor',
'arms' => 'none',
'education' => 'library'
]);

DB::table('places')->insert([
'region' => '244',
'place_name' => 'Sofian',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'roadside_inn',
'commerce' => 'wine',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '244',
'place_name' => 'Zanjan',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'silver',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'tailor',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '244',
'place_name' => 'Ardabil',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'silk',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'vintner',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '245',
'place_name' => 'Hamadan',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'mint',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '245',
'place_name' => 'Kermanshah',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'roadside_inn',
'commerce' => 'fruit',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'tailor',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '245',
'place_name' => 'Falak',
'place_type' => 'city',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'fruit',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '245',
'place_name' => 'Bukan',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'fruit',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '246',
'place_name' => 'Hajr',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'royal_court',
'commerce' => 'gold',
'feudal' => 'prince',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fuller',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '246',
'place_name' => 'Buraidah',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'dates',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fuller',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '246',
'place_name' => 'Hadjar',
'place_type' => 'city',
'population' => '2000',
'fortification' => 'burgh',
'commerce' => 'dates',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'tailor',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '246',
'place_name' => 'Hail',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'dates',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '247',
'place_name' => 'Mecca',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'royal_court',
'commerce' => 'dates',
'feudal' => 'prince',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'mint',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '247',
'place_name' => 'Taif',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'dates',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'mint',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '247',
'place_name' => 'Jeddah',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'dates',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'shipyard',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '247',
'place_name' => 'Medina',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'chancery',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'mint',
'arms' => 'none',
'education' => 'hospice'
]);
DB::table('places')->insert([
'region' => '248',
'place_name' => 'Dedan',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'dates',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '248',
'place_name' => 'Eilat',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'iron',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '248',
'place_name' => 'Tayma',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'salt',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '248',
'place_name' => 'Maan',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'roadside_inn',
'commerce' => 'dates',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '249',
'place_name' => 'Jerusalem',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'royal_court',
'commerce' => 'grain',
'feudal' => 'king',
'church' => 'patriarch',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'tailor',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '249',
'place_name' => 'Ascalon',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'hospitaller',
'factory' => 'woad',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '249',
'place_name' => 'Hebron',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'potterer',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '249',
'place_name' => 'Jaffa',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'olive_oil',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'templar',
'factory' => 'windmill',
'arms' => 'smithy',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '250',
'place_name' => 'Acre',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'sugar',
'feudal' => 'duke',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '250',
'place_name' => 'Nazareth',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'iron',
'feudal' => 'count',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'mint',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '250',
'place_name' => 'Nablus',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'cheese',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'soapmaker',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '250',
'place_name' => 'Tyre',
'place_type' => 'abbey',
'population' => '2000',
'fortification' => 'burgh',
'commerce' => 'sugar',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'glasswork',
'arms' => 'shipyard',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '251',
'place_name' => 'Bosra',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'dates',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'vintner',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '251',
'place_name' => 'Amman',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'dates',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'mint',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '251',
'place_name' => 'Irbid',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'honey',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '251',
'place_name' => 'Salkhad',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'dates',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'armorer',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '252',
'place_name' => 'Damascus',
'place_type' => 'capital',
'population' => '10000',
'fortification' => 'royal_court',
'commerce' => 'dates',
'feudal' => 'king',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'tailor',
'arms' => 'smithy',
'education' => 'hospice'
]);

DB::table('places')->insert([
'region' => '252',
'place_name' => 'Kasr al Gharbi',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'dates',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'armorer',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '252',
'place_name' => 'Palmyra',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'dates',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '252',
'place_name' => 'Nabek',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'abbey_grange',
'commerce' => 'fruit',
'feudal' => 'lord',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'lord_abbot',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '253',
'place_name' => 'Homs',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'windmill',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '253',
'place_name' => 'Qusayr',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'roadside_inn',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '253',
'place_name' => 'Salamiyah',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '253',
'place_name' => 'Hama',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'abbey_grange',
'commerce' => 'grain',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'potterer',
'arms' => 'none',
'education' => 'university'
]);
DB::table('places')->insert([
'region' => '254',
'place_name' => 'Tripoli',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'burgh',
'commerce' => 'sugar',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'hospitaller',
'factory' => 'tailor',
'arms' => 'shipyard',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '254',
'place_name' => 'Tartous',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'poultry',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'windmill',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '254',
'place_name' => 'Beirut',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'olive_oil',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'woad',
'arms' => 'shipyard',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '254',
'place_name' => 'Margat',
'place_type' => 'abbey',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'wine',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'sheriff',
'monastic' => 'hospitaller',
'factory' => 'leather',
'arms' => 'armorer',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '255',
'place_name' => 'Antioch',
'place_type' => 'capital',
'population' => '10000',
'fortification' => 'royal_court',
'commerce' => 'olive_oil',
'feudal' => 'prince',
'church' => 'patriarch',
'civil' => 'lord_mayor',
'monastic' => 'templar',
'factory' => 'mint',
'arms' => 'smithy',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '255',
'place_name' => 'Alexandretta',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'olive_oil',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fishery',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '255',
'place_name' => 'Idlib',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'olive_oil',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'tailor',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '255',
'place_name' => 'Afrin',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'abbey_grange',
'commerce' => 'olive_oil',
'feudal' => 'knight',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'tailor',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '256',
'place_name' => 'Aleppo',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'olive_oil',
'feudal' => 'count',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'soapmaker',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '256',
'place_name' => 'Manbij',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '256',
'place_name' => 'Bab',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'wool',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '256',
'place_name' => 'Safira',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'salt',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '257',
'place_name' => 'Raqqa',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'lord_abbot',
'factory' => 'potterer',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '257',
'place_name' => 'Jabar',
'place_type' => 'castle',
'population' => '120',
'fortification' => 'mountain_castle',
'commerce' => 'grain',
'feudal' => 'baron',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '257',
'place_name' => 'Rhesaina',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '257',
'place_name' => 'Zor',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'dates',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'reeve',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '258',
'place_name' => 'Erbil',
'place_type' => 'capital',
'population' => '2000',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'woad',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '258',
'place_name' => 'Mosul',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'mountain_castle',
'commerce' => 'flax',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'tailor',
'arms' => 'smithy',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '258',
'place_name' => 'Kirkuk',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'woad',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '258',
'place_name' => 'Telafer',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'fuller',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '259',
'place_name' => 'Baghdad',
'place_type' => 'capital',
'population' => '10000',
'fortification' => 'royal_court',
'commerce' => 'sugar',
'feudal' => 'king',
'church' => 'lord_archbishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'mint',
'arms' => 'smithy',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '259',
'place_name' => 'Tikrit',
'place_type' => 'castle',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'none',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '259',
'place_name' => 'Anbar',
'place_type' => 'city',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'sugar',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '259',
'place_name' => 'Samarra',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'grain',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'potterer',
'arms' => 'none',
'education' => 'none'
]);
DB::table('places')->insert([
'region' => '260',
'place_name' => 'Samawah',
'place_type' => 'capital',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'sugar',
'feudal' => 'count',
'church' => 'priest',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'tailor',
'arms' => 'none',
'education' => 'none'
]);

DB::table('places')->insert([
'region' => '260',
'place_name' => 'Karbala',
'place_type' => 'castle',
'population' => '2000',
'fortification' => 'burgh',
'commerce' => 'sugar',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'granary',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '260',
'place_name' => 'Kufah',
'place_type' => 'city',
'population' => '2000',
'fortification' => 'chancery',
'commerce' => 'dates',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'scriptorium',
'arms' => 'none',
'education' => 'university'
]);

DB::table('places')->insert([
'region' => '260',
'place_name' => 'Najaf',
'place_type' => 'abbey',
'population' => '600',
'fortification' => 'burgh',
'commerce' => 'sugar',
'feudal' => 'count',
'church' => 'lord_bishop',
'civil' => 'lord_mayor',
'monastic' => 'none',
'factory' => 'tailor',
'arms' => 'none',
'education' => 'university'
]);        
    }
}
