<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RegionSeeder extends Seeder
{
	//regions
    public function run()
    {


DB::table('regions')->insert([
'region_name' => 'Lower Saxony',
'rank' => 'prince-archbishopric',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'heather',
'style' => 'hunt',
'ride' => 'stud',
'culture' => '6',
'cycle' => 'ottonian',
'goat' => 'none',
'sheep' => 'East_Friesian',
'cattle' => 'none',
'region_x' => '839',
'region_y' => '635'
]);

DB::table('regions')->insert([
'region_name' => 'Upper Saxony',
'rank' => 'march',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'none',
'style' => 'joust',
'ride' => 'stud',
'culture' => '6',
'cycle' => 'none',
'goat' => 'Thuringian',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1028',
'region_y' => '761'
]);

DB::table('regions')->insert([
'region_name' => 'Anhalt',
'rank' => 'prince-archbishopric',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'none',
'culture' => '6',
'cycle' => 'none',
'goat' => 'Thuringian',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '953',
'region_y' => '699'
]);

DB::table('regions')->insert([
'region_name' => 'Mecklenburg',
'rank' => 'duchy',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'none',
'style' => 'fair',
'ride' => 'stud',
'culture' => '6',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '944',
'region_y' => '597'
]);

DB::table('regions')->insert([
'region_name' => 'Brandenburg',
'rank' => 'duchy',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'none',
'style' => 'falconry',
'ride' => 'none',
'culture' => '6',
'cycle' => 'ottonian',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '990',
'region_y' => '679'
]);

DB::table('regions')->insert([
'region_name' => 'Pomerania',
'rank' => 'duchy',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'none',
'culture' => '6',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1070',
'region_y' => '612'
]);

DB::table('regions')->insert([
'region_name' => 'Munsterland',
'rank' => 'prince-bishopric',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'heather',
'style' => 'hunt',
'ride' => 'stud',
'culture' => '6',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'East_Friesian',
'cattle' => 'none',
'region_x' => '791',
'region_y' => '710'
]);

DB::table('regions')->insert([
'region_name' => 'Bavaria',
'rank' => 'duchy',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'hops',
'style' => 'joust',
'ride' => 'stud',
'culture' => '7',
'cycle' => 'ottonian',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '972',
'region_y' => '897'
]);

DB::table('regions')->insert([
'region_name' => 'Salzburg',
'rank' => 'prince-archbishopric',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '7',
'cycle' => 'ottonian',
'goat' => 'Alpine',
'sheep' => 'Zaupelschaf',
'cattle' => 'Braunvieh',
'region_x' => '1011',
'region_y' => '970'
]);

DB::table('regions')->insert([
'region_name' => 'Austria',
'rank' => 'duchy',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'none',
'style' => 'falconry',
'ride' => 'stud',
'culture' => '7',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Braunvieh',
'region_x' => '1145',
'region_y' => '947'
]);

DB::table('regions')->insert([
'region_name' => 'Styria',
'rank' => 'duchy',
'climate' => 'temperate_woodlands',
'herb' => 'heather',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '7',
'cycle' => 'ottonian',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Braunvieh',
'region_x' => '1066',
'region_y' => '964'
]);

DB::table('regions')->insert([
'region_name' => 'Tyrolia',
'rank' => 'duchy',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'none',
'style' => 'joust',
'ride' => 'stud',
'culture' => '7',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Zaupelschaf',
'cattle' => 'none',
'region_x' => '944',
'region_y' => '1003'
]);

DB::table('regions')->insert([
'region_name' => 'Swabia',
'rank' => 'duchy',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'hops',
'style' => 'hunt',
'ride' => 'none',
'culture' => '8',
'cycle' => 'ottonian',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Fleckvieh',
'region_x' => '886',
'region_y' => '935'
]);

DB::table('regions')->insert([
'region_name' => 'Schwyz',
'rank' => 'prince-bishopric',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'elder',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '8',
'cycle' => 'ottonian',
'goat' => 'Alpine',
'sheep' => 'none',
'cattle' => 'Fleckvieh',
'region_x' => '784',
'region_y' => '1022'
]);

DB::table('regions')->insert([
'region_name' => 'Alsace',
'rank' => 'county',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'none',
'culture' => '8',
'cycle' => 'ottonian',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '796',
'region_y' => '924'
]);

DB::table('regions')->insert([
'region_name' => 'Bohemia',
'rank' => 'kingdom',
'climate' => 'temperate_woodlands',
'herb' => 'hops',
'style' => 'hunt',
'ride' => 'stud',
'culture' => '11',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Rotvieh',
'region_x' => '1066',
'region_y' => '831'
]);

DB::table('regions')->insert([
'region_name' => 'Moravia',
'rank' => 'march',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'stud',
'culture' => '11',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Rotvieh',
'region_x' => '1155',
'region_y' => '886'
]);

DB::table('regions')->insert([
'region_name' => 'Franconia',
'rank' => 'prince-archbishopric',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'hops',
'style' => 'hunt',
'ride' => 'none',
'culture' => '5',
'cycle' => 'ottonian',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '816',
'region_y' => '836'
]);

DB::table('regions')->insert([
'region_name' => 'Lower Lorraine',
'rank' => 'prince-archbishopric',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'heather',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '5',
'cycle' => 'ottonian',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '764',
'region_y' => '776'
]);

DB::table('regions')->insert([
'region_name' => 'Upper Lorraine',
'rank' => 'prince-archbishopric',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'heather',
'style' => 'hunt',
'ride' => 'none',
'culture' => '5',
'cycle' => 'ottonian',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '751',
'region_y' => '851'
]);

DB::table('regions')->insert([
'region_name' => 'Guelders',
'rank' => 'duchy',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'none',
'style' => 'falconry',
'ride' => 'stud',
'culture' => '5',
'cycle' => 'ottonian',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Blaarkop',
'region_x' => '738',
'region_y' => '739'
]);

DB::table('regions')->insert([
'region_name' => 'Holland',
'rank' => 'county',
'climate' => 'temperate_grasslands_marshes',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'stud',
'culture' => '4',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Friesian',
'region_x' => '699',
'region_y' => '709'
]);

DB::table('regions')->insert([
'region_name' => 'Frisia',
'rank' => 'county',
'climate' => 'temperate_grasslands_marshes',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'stud',
'culture' => '4',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'East_Friesian',
'cattle' => 'Friesian',
'region_x' => '712',
'region_y' => '639'
]);

DB::table('regions')->insert([
'region_name' => 'Brabant',
'rank' => 'duchy',
'climate' => 'temperate_grasslands_marshes',
'herb' => 'hops',
'style' => 'hunt',
'ride' => 'stud',
'culture' => '10',
'cycle' => 'none',
'goat' => 'Thuringian',
'sheep' => 'East_Friesian',
'cattle' => 'none',
'region_x' => '673',
'region_y' => '780'
]);

DB::table('regions')->insert([
'region_name' => 'Flanders',
'rank' => 'county',
'climate' => 'temperate_grasslands_marshes',
'herb' => 'hops',
'style' => 'joust',
'ride' => 'stud',
'culture' => '10',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '633',
'region_y' => '769'
]);

DB::table('regions')->insert([
'region_name' => 'Carinthia',
'rank' => 'march',
'climate' => 'temperate_woodlands',
'herb' => 'elder',
'style' => 'minstrel',
'ride' => 'stud',
'culture' => '9',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1033',
'region_y' => '1080'
]);

DB::table('regions')->insert([
'region_name' => 'Carniola',
'rank' => 'march',
'climate' => 'temperate_woodlands',
'herb' => 'elder',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '9',
'cycle' => 'ottonian',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1064',
'region_y' => '1063'
]);

DB::table('regions')->insert([
'region_name' => 'Brittany',
'rank' => 'duchy',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'stud',
'culture' => '17',
'cycle' => 'britain',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '371',
'region_y' => '980'
]);

DB::table('regions')->insert([
'region_name' => 'Ile de France',
'rank' => 'kingdom',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'lavender',
'style' => 'joust',
'ride' => 'stud',
'culture' => '14',
'cycle' => 'carolingian',
'goat' => 'Poitou',
'sheep' => 'none',
'cattle' => 'Normande',
'region_x' => '578',
'region_y' => '906'
]);

DB::table('regions')->insert([
'region_name' => 'Bar',
'rank' => 'duchy',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'none',
'culture' => '14',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Normande',
'region_x' => '691',
'region_y' => '912'
]);

DB::table('regions')->insert([
'region_name' => 'Picardy',
'rank' => 'county',
'climate' => 'temperate_grasslands_marshes',
'herb' => 'hops',
'style' => 'joust',
'ride' => 'stud',
'culture' => '14',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Normande',
'region_x' => '575',
'region_y' => '842'
]);

DB::table('regions')->insert([
'region_name' => 'Normandy',
'rank' => 'duchy',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'stud',
'culture' => '14',
'cycle' => 'carolingian',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Normande',
'region_x' => '527',
'region_y' => '870'
]);

DB::table('regions')->insert([
'region_name' => 'Champagne',
'rank' => 'prince-archbishopric',
'climate' => 'temperate_woodlands',
'herb' => 'lavender',
'style' => 'fair',
'ride' => 'none',
'culture' => '14',
'cycle' => 'carolingian',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '645',
'region_y' => '881'
]);

DB::table('regions')->insert([
'region_name' => 'Orleans',
'rank' => 'duchy',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'joust',
'ride' => 'stud',
'culture' => '14',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Normande',
'region_x' => '559',
'region_y' => '965'
]);

DB::table('regions')->insert([
'region_name' => 'Touraine',
'rank' => 'duchy',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '14',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '510',
'region_y' => '995'
]);

DB::table('regions')->insert([
'region_name' => 'Anjou',
'rank' => 'duchy',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '14',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Parthenais',
'region_x' => '461',
'region_y' => '990'
]);

DB::table('regions')->insert([
'region_name' => 'Poitou',
'rank' => 'duchy',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'none',
'culture' => '14',
'cycle' => 'carolingian',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '496',
'region_y' => '1044'
]);

DB::table('regions')->insert([
'region_name' => 'Berry',
'rank' => 'duchy',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '14',
'cycle' => 'carolingian',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '580',
'region_y' => '1013'
]);

DB::table('regions')->insert([
'region_name' => 'Bourbonnais',
'rank' => 'duchy',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'none',
'culture' => '14',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '618',
'region_y' => '1044'
]);

DB::table('regions')->insert([
'region_name' => 'Auvergne',
'rank' => 'duchy',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '16',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '607',
'region_y' => '1090'
]);

DB::table('regions')->insert([
'region_name' => 'Provence',
'rank' => 'county',
'climate' => 'mediterranean_shrublands_marshes',
'herb' => 'lavender',
'style' => 'joust',
'ride' => 'stud',
'culture' => '16',
'cycle' => 'occitan',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '670',
'region_y' => '1210'
]);

DB::table('regions')->insert([
'region_name' => 'Languedoc',
'rank' => 'duchy',
'climate' => 'mediterranean_shrublands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '16',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '541',
'region_y' => '1215'
]);

DB::table('regions')->insert([
'region_name' => 'Aquitaine',
'rank' => 'duchy',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'stud',
'culture' => '16',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '460',
'region_y' => '1145'
]);

DB::table('regions')->insert([
'region_name' => 'Angouleme',
'rank' => 'duchy',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'stud',
'culture' => '16',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Limousine',
'region_x' => '489',
'region_y' => '1098'
]);

DB::table('regions')->insert([
'region_name' => 'Viennois',
'rank' => 'duchy',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'stud',
'culture' => '15',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '714',
'region_y' => '1124'
]);

DB::table('regions')->insert([
'region_name' => 'Burgundy',
'rank' => 'prince-archbishopric',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'none',
'style' => 'joust',
'ride' => 'stud',
'culture' => '15',
'cycle' => 'carolingian',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Charolais',
'region_x' => '686',
'region_y' => '999'
]);

DB::table('regions')->insert([
'region_name' => 'Essex',
'rank' => 'kingdom',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'none',
'culture' => '18',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Ryeland',
'cattle' => 'Gloucester',
'region_x' => '478',
'region_y' => '739'
]);

DB::table('regions')->insert([
'region_name' => 'Kent',
'rank' => 'county',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'hops',
'style' => 'falconry',
'ride' => 'none',
'culture' => '18',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Ryeland',
'cattle' => 'Gloucester',
'region_x' => '526',
'region_y' => '753'
]);

DB::table('regions')->insert([
'region_name' => 'Wessex',
'rank' => 'county',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '18',
'cycle' => 'britain',
'goat' => 'none',
'sheep' => 'Ryeland',
'cattle' => 'none',
'region_x' => '429',
'region_y' => '767'
]);

DB::table('regions')->insert([
'region_name' => 'Cornwall',
'rank' => 'duchy',
'climate' => 'temperate_woodlands',
'herb' => 'heather',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '18',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '279',
'region_y' => '819'
]);

DB::table('regions')->insert([
'region_name' => 'East Anglia',
'rank' => 'duchy',
'climate' => 'temperate_grasslands_marshes',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'stud',
'culture' => '18',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Ryeland',
'cattle' => 'Gloucester',
'region_x' => '534',
'region_y' => '665'
]);

DB::table('regions')->insert([
'region_name' => 'Northumbria',
'rank' => 'march',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'joust',
'ride' => 'stud',
'culture' => '18',
'cycle' => 'none',
'goat' => 'British',
'sheep' => 'Herdwick',
'cattle' => 'Gloucester',
'region_x' => '439',
'region_y' => '575'
]);

DB::table('regions')->insert([
'region_name' => 'Hwicce',
'rank' => 'county',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'none',
'culture' => '18',
'cycle' => 'britain',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Gloucester',
'region_x' => '394',
'region_y' => '693'
]);

DB::table('regions')->insert([
'region_name' => 'Middle Anglia',
'rank' => 'county',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'none',
'style' => 'falconry',
'ride' => 'none',
'culture' => '18',
'cycle' => 'britain',
'goat' => 'none',
'sheep' => 'Ryeland',
'cattle' => 'none',
'region_x' => '494',
'region_y' => '680'
]);

DB::table('regions')->insert([
'region_name' => 'Mercia',
'rank' => 'county',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'heather',
'style' => 'joust',
'ride' => 'stud',
'culture' => '18',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Gloucester',
'region_x' => '413',
'region_y' => '665'
]);

DB::table('regions')->insert([
'region_name' => 'Lindsey',
'rank' => 'county',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'none',
'culture' => '18',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Lincoln',
'cattle' => 'Gloucester',
'region_x' => '461',
'region_y' => '625'
]);

DB::table('regions')->insert([
'region_name' => 'Gwynedd',
'rank' => 'principality',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '19',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Gloucester',
'region_x' => '310',
'region_y' => '632'
]);

DB::table('regions')->insert([
'region_name' => 'Powys',
'rank' => 'march',
'climate' => 'temperate_woodlands',
'herb' => 'heather',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '19',
'cycle' => 'britain',
'goat' => 'none',
'sheep' => 'Ryeland',
'cattle' => 'none',
'region_x' => '372',
'region_y' => '661'
]);

DB::table('regions')->insert([
'region_name' => 'Gwent',
'rank' => 'county',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'stud',
'culture' => '19',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Gloucester',
'region_x' => '354',
'region_y' => '740'
]);

DB::table('regions')->insert([
'region_name' => 'Vestfold',
'rank' => 'kingdom',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '3',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Fjall',
'region_x' => '918',
'region_y' => '133'
]);

DB::table('regions')->insert([
'region_name' => 'Hordaland',
'rank' => 'county',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'none',
'culture' => '3',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Short_Tailed',
'cattle' => 'Fjall',
'region_x' => '698',
'region_y' => '94'
]);

DB::table('regions')->insert([
'region_name' => 'Sjaelland',
'rank' => 'kingdom',
'climate' => 'temperate_woodlands',
'herb' => 'elder',
'style' => 'hunt',
'ride' => 'stud',
'culture' => '1',
'cycle' => 'norse',
'goat' => 'Norwegian',
'sheep' => 'none',
'cattle' => 'Angeln',
'region_x' => '991',
'region_y' => '455'
]);

DB::table('regions')->insert([
'region_name' => 'Scania',
'rank' => 'county',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '1',
'cycle' => 'norse',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1016',
'region_y' => '453'
]);

DB::table('regions')->insert([
'region_name' => 'Jutland',
'rank' => 'county',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '1',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Short_Tailed',
'cattle' => 'none',
'region_x' => '895',
'region_y' => '419'
]);

DB::table('regions')->insert([
'region_name' => 'Svaeland',
'rank' => 'kingdom',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '2',
'cycle' => 'norse',
'goat' => 'none',
'sheep' => 'Short_Tailed',
'cattle' => 'none',
'region_x' => '1213',
'region_y' => '180'
]);

DB::table('regions')->insert([
'region_name' => 'Smaland',
'rank' => 'county',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'none',
'culture' => '2',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Short_Tailed',
'cattle' => 'none',
'region_x' => '1144',
'region_y' => '382'
]);

DB::table('regions')->insert([
'region_name' => 'Gotaland',
'rank' => 'county',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '2',
'cycle' => 'norse',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1026',
'region_y' => '253'
]);

DB::table('regions')->insert([
'region_name' => 'Livonia',
'rank' => 'prince-archbishopric',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'tavern',
'ride' => 'none',
'culture' => '33',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1457',
'region_y' => '361'
]);

DB::table('regions')->insert([
'region_name' => 'Courland',
'rank' => 'duchy',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'tavern',
'ride' => 'none',
'culture' => '33',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Short_Tailed',
'cattle' => 'none',
'region_x' => '1358',
'region_y' => '342'
]);

DB::table('regions')->insert([
'region_name' => 'Prussia',
'rank' => 'duchy',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'none',
'style' => 'tavern',
'ride' => 'none',
'culture' => '34',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1252',
'region_y' => '570'
]);

DB::table('regions')->insert([
'region_name' => 'Samogitia',
'rank' => 'county',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'none',
'style' => 'tavern',
'ride' => 'none',
'culture' => '33',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Rotvieh',
'region_x' => '1338',
'region_y' => '453'
]);

DB::table('regions')->insert([
'region_name' => 'Estonia',
'rank' => 'duchy',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'none',
'culture' => '33',
'cycle' => 'ottonian',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Rotvieh',
'region_x' => '1484',
'region_y' => '172'
]);

DB::table('regions')->insert([
'region_name' => 'Lothian',
'rank' => 'kingdom',
'climate' => 'temperate_grasslands',
'herb' => 'none',
'style' => 'joust',
'ride' => 'stud',
'culture' => '20',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Short_Tailed',
'cattle' => 'none',
'region_x' => '354',
'region_y' => '435'
]);

DB::table('regions')->insert([
'region_name' => 'Bernicia',
'rank' => 'march',
'climate' => 'temperate_grasslands',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'none',
'culture' => '20',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Short_Tailed',
'cattle' => 'Highland',
'region_x' => '401',
'region_y' => '447'
]);

DB::table('regions')->insert([
'region_name' => 'Strathclyde',
'rank' => 'county',
'climate' => 'temperate_grasslands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '20',
'cycle' => 'celtic',
'goat' => 'none',
'sheep' => 'Short_Tailed',
'cattle' => 'Highland',
'region_x' => '299',
'region_y' => '436'
]);

DB::table('regions')->insert([
'region_name' => 'Galloway',
'rank' => 'county',
'climate' => 'temperate_grasslands_marshes',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'none',
'culture' => '20',
'cycle' => 'none',
'goat' => 'British',
'sheep' => 'none',
'cattle' => 'Highland',
'region_x' => '319',
'region_y' => '514'
]);

DB::table('regions')->insert([
'region_name' => 'Dalriada',
'rank' => 'county',
'climate' => 'temperate_grasslands_marshes',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'none',
'culture' => '20',
'cycle' => 'celtic',
'goat' => 'none',
'sheep' => 'Short_Tailed',
'cattle' => 'Highland',
'region_x' => '224',
'region_y' => '408'
]);

DB::table('regions')->insert([
'region_name' => 'Fib',
'rank' => 'county',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '21',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Short_Tailed',
'cattle' => 'none',
'region_x' => '344',
'region_y' => '403'
]);

DB::table('regions')->insert([
'region_name' => 'Fortriu',
'rank' => 'county',
'climate' => 'temperate_woodlands',
'herb' => 'heather',
'style' => 'hunt',
'ride' => 'none',
'culture' => '21',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Short_Tailed',
'cattle' => 'none',
'region_x' => '348',
'region_y' => '309'
]);

DB::table('regions')->insert([
'region_name' => 'Alba',
'rank' => 'county',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '21',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Short_Tailed',
'cattle' => 'none',
'region_x' => '361',
'region_y' => '397'
]);

DB::table('regions')->insert([
'region_name' => 'Caith',
'rank' => 'county',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'tavern',
'ride' => 'none',
'culture' => '21',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '304',
'region_y' => '313'
]);

DB::table('regions')->insert([
'region_name' => 'Meath',
'rank' => 'kingdom',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '22',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Irish_Moiled',
'region_x' => '229',
'region_y' => '618'
]);

DB::table('regions')->insert([
'region_name' => 'Ulster',
'rank' => 'county',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '22',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '213',
'region_y' => '548'
]);

DB::table('regions')->insert([
'region_name' => 'Leinster',
'rank' => 'county',
'climate' => 'temperate_grasslands_marshes',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '22',
'cycle' => 'celtic',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Irish_Moiled',
'region_x' => '221',
'region_y' => '686'
]);

DB::table('regions')->insert([
'region_name' => 'Munster',
'rank' => 'county',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'none',
'culture' => '22',
'cycle' => 'celtic',
'goat' => 'British',
'sheep' => 'none',
'cattle' => 'Irish_Moiled',
'region_x' => '163',
'region_y' => '673'
]);

DB::table('regions')->insert([
'region_name' => 'Connaught',
'rank' => 'county',
'climate' => 'temperate_grasslands_marshes',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'stud',
'culture' => '22',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Short_Tailed',
'cattle' => 'none',
'region_x' => '116',
'region_y' => '622'
]);

DB::table('regions')->insert([
'region_name' => 'Navarre',
'rank' => 'kingdom',
'climate' => 'mediterranean_shrublands',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'none',
'culture' => '28',
'cycle' => 'navarrese',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '417',
'region_y' => '1258'
]);

DB::table('regions')->insert([
'region_name' => 'Biscay',
'rank' => 'county',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'falconry',
'ride' => 'none',
'culture' => '28',
'cycle' => 'navarrese',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Pirenaica',
'region_x' => '404',
'region_y' => '1230'
]);

DB::table('regions')->insert([
'region_name' => 'Aragon',
'rank' => 'kingdom',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'stud',
'culture' => '27',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '461',
'region_y' => '1272'
]);

DB::table('regions')->insert([
'region_name' => 'Zaragoza',
'rank' => 'principality',
'climate' => 'mediterranean_shrublands_marshes',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '27',
'cycle' => 'aragonese',
'goat' => 'Murciana',
'sheep' => 'Merino',
'cattle' => 'none',
'region_x' => '447',
'region_y' => '1321'
]);

DB::table('regions')->insert([
'region_name' => 'Gerona',
'rank' => 'county',
'climate' => 'mediterranean_shrublands',
'herb' => 'rosemary',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '26',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Merino',
'cattle' => 'none',
'region_x' => '597',
'region_y' => '1304'
]);

DB::table('regions')->insert([
'region_name' => 'Barcelona',
'rank' => 'principality',
'climate' => 'mediterranean_shrublands',
'herb' => 'lavender',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '26',
'cycle' => 'catalan',
'goat' => 'none',
'sheep' => 'Merino',
'cattle' => 'none',
'region_x' => '571',
'region_y' => '1335'
]);

DB::table('regions')->insert([
'region_name' => 'Valencia',
'rank' => 'principality',
'climate' => 'mediterranean_shrublands',
'herb' => 'none',
'style' => 'tavern',
'ride' => 'none',
'culture' => '26',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '469',
'region_y' => '1437'
]);

DB::table('regions')->insert([
'region_name' => 'Denia',
'rank' => 'principality',
'climate' => 'mediterranean_shrublands',
'herb' => 'lavender',
'style' => 'hunt',
'ride' => 'none',
'culture' => '26',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '487',
'region_y' => '1470'
]);

DB::table('regions')->insert([
'region_name' => 'Baleares',
'rank' => 'principality',
'climate' => 'mediterranean_shrublands',
'herb' => 'lavender',
'style' => 'tavern',
'ride' => 'stud',
'culture' => '26',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Andalusian',
'region_x' => '590',
'region_y' => '1432'
]);

DB::table('regions')->insert([
'region_name' => 'Leon',
'rank' => 'kingdom',
'climate' => 'temperate_grasslands',
'herb' => 'none',
'style' => 'joust',
'ride' => 'stud',
'culture' => '30',
'cycle' => 'castilian',
'goat' => 'none',
'sheep' => 'Churra',
'cattle' => 'none',
'region_x' => '258',
'region_y' => '1269'
]);

DB::table('regions')->insert([
'region_name' => 'Asturias',
'rank' => 'principality',
'climate' => 'temperate_grasslands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '30',
'cycle' => 'asturian',
'goat' => 'none',
'sheep' => 'Churra',
'cattle' => 'none',
'region_x' => '246',
'region_y' => '1227'
]);

DB::table('regions')->insert([
'region_name' => 'Castile',
'rank' => 'kingdom',
'climate' => 'steppe',
'herb' => 'none',
'style' => 'joust',
'ride' => 'stud',
'culture' => '29',
'cycle' => 'castilian',
'goat' => 'none',
'sheep' => 'Churra',
'cattle' => 'none',
'region_x' => '291',
'region_y' => '1321'
]);

DB::table('regions')->insert([
'region_name' => 'Burgos',
'rank' => 'county',
'climate' => 'steppe',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'stud',
'culture' => '29',
'cycle' => 'castilian',
'goat' => 'none',
'sheep' => 'Churra',
'cattle' => 'none',
'region_x' => '333',
'region_y' => '1284'
]);

DB::table('regions')->insert([
'region_name' => 'Galicia',
'rank' => 'kingdom',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'reliquary',
'ride' => 'stud',
'culture' => '31',
'cycle' => 'galician',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '138',
'region_y' => '1254'
]);

DB::table('regions')->insert([
'region_name' => 'Estremadura',
'rank' => 'kingdom',
'climate' => 'mediterranean_shrublands',
'herb' => 'rosemary',
'style' => 'minstrel',
'ride' => 'stud',
'culture' => '32',
'cycle' => 'galician',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Andalusian',
'region_x' => '112',
'region_y' => '1476'
]);

DB::table('regions')->insert([
'region_name' => 'Porto',
'rank' => 'duchy',
'climate' => 'mediterranean_shrublands_marshes',
'herb' => 'none',
'style' => 'fair',
'ride' => 'stud',
'culture' => '32',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '133',
'region_y' => '1347'
]);

DB::table('regions')->insert([
'region_name' => 'Braganca',
'rank' => 'duchy',
'climate' => 'mediterranean_shrublands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'stud',
'culture' => '32',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Churra',
'cattle' => 'none',
'region_x' => '209',
'region_y' => '1314'
]);

DB::table('regions')->insert([
'region_name' => 'Beira',
'rank' => 'county',
'climate' => 'mediterranean_woodlands_marshes',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'stud',
'culture' => '32',
'cycle' => 'galician',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '143',
'region_y' => '1398'
]);

DB::table('regions')->insert([
'region_name' => 'Alentejo',
'rank' => 'county',
'climate' => 'mediterranean_woodlands',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'none',
'culture' => '53',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '162',
'region_y' => '1484'
]);

DB::table('regions')->insert([
'region_name' => 'Algarve',
'rank' => 'county',
'climate' => 'mediterranean_woodlands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '53',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '161',
'region_y' => '1563'
]);

DB::table('regions')->insert([
'region_name' => 'Cordoba',
'rank' => 'kingdom',
'climate' => 'mediterranean_woodlands_marshes',
'herb' => 'lavender',
'style' => 'bazaar',
'ride' => 'stud',
'culture' => '46',
'cycle' => 'none',
'goat' => 'Murciana',
'sheep' => 'none',
'cattle' => 'Andalusian',
'region_x' => '289',
'region_y' => '1519'
]);

DB::table('regions')->insert([
'region_name' => 'Sevilla',
'rank' => 'principality',
'climate' => 'mediterranean_woodlands_marshes',
'herb' => 'lavender',
'style' => 'bazaar',
'ride' => 'stud',
'culture' => '46',
'cycle' => 'none',
'goat' => 'Murciana',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '241',
'region_y' => '1544'
]);

DB::table('regions')->insert([
'region_name' => 'Badajoz',
'rank' => 'principality',
'climate' => 'mediterranean_woodlands_marshes',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'stud',
'culture' => '46',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '201',
'region_y' => '1467'
]);

DB::table('regions')->insert([
'region_name' => 'Toledo',
'rank' => 'principality',
'climate' => 'mediterranean_shrublands_marshes',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '46',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '320',
'region_y' => '1417'
]);

DB::table('regions')->insert([
'region_name' => 'Granada',
'rank' => 'principality',
'climate' => 'mediterranean_shrublands_marshes',
'herb' => 'rosemary',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '46',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Merino',
'cattle' => 'none',
'region_x' => '337',
'region_y' => '1556'
]);

DB::table('regions')->insert([
'region_name' => 'Almeria',
'rank' => 'principality',
'climate' => 'mediterranean_shrublands_marshes',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '46',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '383',
'region_y' => '1572'
]);

DB::table('regions')->insert([
'region_name' => 'Murcia',
'rank' => 'principality',
'climate' => 'mediterranean_shrublands',
'herb' => 'none',
'style' => 'falconry',
'ride' => 'none',
'culture' => '46',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '437',
'region_y' => '1515'
]);

DB::table('regions')->insert([
'region_name' => 'Malaga',
'rank' => 'principality',
'climate' => 'mediterranean_shrublands_marshes',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '46',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '304',
'region_y' => '1578'
]);

DB::table('regions')->insert([
'region_name' => 'Lombardy',
'rank' => 'kingdom',
'climate' => 'temperate_grasslands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '12',
'cycle' => 'lombard',
'goat' => 'Alpine',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '854',
'region_y' => '1108'
]);

DB::table('regions')->insert([
'region_name' => 'Verona',
'rank' => 'march',
'climate' => 'temperate_grasslands_marshes',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'stud',
'culture' => '12',
'cycle' => 'friulian',
'goat' => 'none',
'sheep' => 'Zaupelschaf',
'cattle' => 'none',
'region_x' => '927',
'region_y' => '1110'
]);

DB::table('regions')->insert([
'region_name' => 'Genoa',
'rank' => 'duchy',
'climate' => 'mediterranean_shrublands',
'herb' => 'none',
'style' => 'fair',
'ride' => 'none',
'culture' => '12',
'cycle' => 'ligurian',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '845',
'region_y' => '1169'
]);

DB::table('regions')->insert([
'region_name' => 'Venice',
'rank' => 'duchy',
'climate' => 'temperate_grasslands_marshes',
'herb' => 'none',
'style' => 'fair',
'ride' => 'none',
'culture' => '12',
'cycle' => 'friulian',
'goat' => 'none',
'sheep' => 'Zaupelschaf',
'cattle' => 'none',
'region_x' => '981',
'region_y' => '1110'
]);

DB::table('regions')->insert([
'region_name' => 'Romagna',
'rank' => 'county',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'none',
'culture' => '12',
'cycle' => 'lombard',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '977',
'region_y' => '1168'
]);

DB::table('regions')->insert([
'region_name' => 'Emilia',
'rank' => 'duchy',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '12',
'cycle' => 'lombard',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Piedmontese',
'region_x' => '925',
'region_y' => '1156'
]);

DB::table('regions')->insert([
'region_name' => 'Aquileja',
'rank' => 'prince-archbishopric',
'climate' => 'temperate_grasslands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '12',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Zaupelschaf',
'cattle' => 'none',
'region_x' => '1023',
'region_y' => '1091'
]);

DB::table('regions')->insert([
'region_name' => 'Turin',
'rank' => 'march',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'none',
'culture' => '12',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Zaupelschaf',
'cattle' => 'Piedmontese',
'region_x' => '794',
'region_y' => '1131'
]);

DB::table('regions')->insert([
'region_name' => 'Tuscany',
'rank' => 'duchy',
'climate' => 'mediterranean_shrublands',
'herb' => 'rosemary',
'style' => 'joust',
'ride' => 'stud',
'culture' => '13',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '923',
'region_y' => '1205'
]);

DB::table('regions')->insert([
'region_name' => 'Spoleto',
'rank' => 'duchy',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'joust',
'ride' => 'stud',
'culture' => '13',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Zaupelschaf',
'cattle' => 'none',
'region_x' => '998',
'region_y' => '1262'
]);

DB::table('regions')->insert([
'region_name' => 'Lazio',
'rank' => 'papacy',
'climate' => 'mediterranean_shrublands',
'herb' => 'none',
'style' => 'reliquary',
'ride' => 'none',
'culture' => '13',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Piedmontese',
'region_x' => '988',
'region_y' => '1307'
]);

DB::table('regions')->insert([
'region_name' => 'Pisa',
'rank' => 'duchy',
'climate' => 'mediterranean_woodlands',
'herb' => 'none',
'style' => 'fair',
'ride' => 'none',
'culture' => '13',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '904',
'region_y' => '1208'
]);

DB::table('regions')->insert([
'region_name' => 'Naples',
'rank' => 'kingdom',
'climate' => 'mediterranean_shrublands',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'stud',
'culture' => '23',
'cycle' => 'neapolitan',
'goat' => 'Garganica',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1060',
'region_y' => '1365'
]);

DB::table('regions')->insert([
'region_name' => 'Apulia',
'rank' => 'principality',
'climate' => 'mediterranean_shrublands',
'herb' => 'rosemary',
'style' => 'minstrel',
'ride' => 'stud',
'culture' => '23',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Fat_Tailed',
'cattle' => 'none',
'region_x' => '1180',
'region_y' => '1385'
]);

DB::table('regions')->insert([
'region_name' => 'Calabria',
'rank' => 'duchy',
'climate' => 'mediterranean_woodlands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '23',
'cycle' => 'sicilian',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1140',
'region_y' => '1447'
]);

DB::table('regions')->insert([
'region_name' => 'Benevento',
'rank' => 'principality',
'climate' => 'mediterranean_shrublands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '23',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Anatolian',
'region_x' => '1081',
'region_y' => '1350'
]);

DB::table('regions')->insert([
'region_name' => 'Sardinia',
'rank' => 'kingdom',
'climate' => 'mediterranean_shrublands',
'herb' => 'rosemary',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '24',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '829',
'region_y' => '1371'
]);

DB::table('regions')->insert([
'region_name' => 'Cagliari',
'rank' => 'county',
'climate' => 'mediterranean_shrublands',
'herb' => 'rosemary',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '24',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Piedmontese',
'region_x' => '852',
'region_y' => '1452'
]);

DB::table('regions')->insert([
'region_name' => 'Mazara',
'rank' => 'kingdom',
'climate' => 'mediterranean_shrublands_marshes',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '25',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1023',
'region_y' => '1508'
]);

DB::table('regions')->insert([
'region_name' => 'Demona',
'rank' => 'county',
'climate' => 'mediterranean_shrublands_marshes',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'none',
'culture' => '25',
'cycle' => 'sicilian',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1111',
'region_y' => '1504'
]);

DB::table('regions')->insert([
'region_name' => 'Siracusa',
'rank' => 'county',
'climate' => 'mediterranean_shrublands_marshes',
'herb' => 'rosemary',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '25',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Anatolian',
'region_x' => '1101',
'region_y' => '1561'
]);

DB::table('regions')->insert([
'region_name' => 'Tangiers',
'rank' => 'county',
'climate' => 'mediterranean_woodlands_marshes',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'stud',
'culture' => '52',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '247',
'region_y' => '1626'
]);

DB::table('regions')->insert([
'region_name' => 'Anfa',
'rank' => 'county',
'climate' => 'mediterranean_woodlands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '52',
'cycle' => 'none',
'goat' => 'Maltese',
'sheep' => 'Fat_Tailed',
'cattle' => 'none',
'region_x' => '176',
'region_y' => '1733'
]);

DB::table('regions')->insert([
'region_name' => 'Fez',
'rank' => 'kingdom',
'climate' => 'mediterranean_woodlands',
'herb' => 'none',
'style' => 'falconry',
'ride' => 'stud',
'culture' => '52',
'cycle' => 'arabic',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '280',
'region_y' => '1712'
]);

DB::table('regions')->insert([
'region_name' => 'Marrakesh',
'rank' => 'kingdom',
'climate' => 'mediterranean_woodlands_marshes',
'herb' => 'none',
'style' => 'bazaar',
'ride' => 'none',
'culture' => '52',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '161',
'region_y' => '1827'
]);

DB::table('regions')->insert([
'region_name' => 'Ifni',
'rank' => 'principality',
'climate' => 'mediterranean_woodlands_marshes',
'herb' => 'lavender',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '52',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '124',
'region_y' => '1883'
]);

DB::table('regions')->insert([
'region_name' => 'Figuig',
'rank' => 'principality',
'climate' => 'desert',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'camel',
'culture' => '52',
'cycle' => 'none',
'goat' => 'Maltese',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '434',
'region_y' => '1803'
]);

DB::table('regions')->insert([
'region_name' => 'Tlemcen',
'rank' => 'kingdom',
'climate' => 'mediterranean_shrublands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '52',
'cycle' => 'none',
'goat' => 'Maltese',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '429',
'region_y' => '1670'
]);

DB::table('regions')->insert([
'region_name' => 'Orania',
'rank' => 'county',
'climate' => 'mediterranean_shrublands',
'herb' => 'rosemary',
'style' => 'minstrel',
'ride' => 'stud',
'culture' => '52',
'cycle' => 'arabic',
'goat' => 'Maltese',
'sheep' => 'Fat_Tailed',
'cattle' => 'none',
'region_x' => '457',
'region_y' => '1630'
]);

DB::table('regions')->insert([
'region_name' => 'Mzab',
'rank' => 'county',
'climate' => 'desert',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'camel',
'culture' => '52',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '615',
'region_y' => '1679'
]);

DB::table('regions')->insert([
'region_name' => 'Ouled',
'rank' => 'county',
'climate' => 'desert',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'camel',
'culture' => '52',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '689',
'region_y' => '1692'
]);

DB::table('regions')->insert([
'region_name' => 'Algiers',
'rank' => 'county',
'climate' => 'mediterranean_woodlands',
'herb' => 'none',
'style' => 'caravan',
'ride' => 'stud',
'culture' => '52',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Fat_Tailed',
'cattle' => 'none',
'region_x' => '607',
'region_y' => '1578'
]);

DB::table('regions')->insert([
'region_name' => 'Bejaia',
'rank' => 'county',
'climate' => 'mediterranean_woodlands',
'herb' => 'rosemary',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '52',
'cycle' => 'none',
'goat' => 'Maltese',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '687',
'region_y' => '1577'
]);

DB::table('regions')->insert([
'region_name' => 'Annaba',
'rank' => 'county',
'climate' => 'mediterranean_woodlands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '52',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '796',
'region_y' => '1568'
]);

DB::table('regions')->insert([
'region_name' => 'Tunisia',
'rank' => 'county',
'climate' => 'mediterranean_shrublands',
'herb' => 'lavender',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '52',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '894',
'region_y' => '1574'
]);

DB::table('regions')->insert([
'region_name' => 'Kairouan',
'rank' => 'kingdom',
'climate' => 'mediterranean_shrublands',
'herb' => 'rosemary',
'style' => 'bazaar',
'ride' => 'none',
'culture' => '51',
'cycle' => 'arabic',
'goat' => 'Maltese',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '890',
'region_y' => '1630'
]);

DB::table('regions')->insert([
'region_name' => 'Gabes',
'rank' => 'county',
'climate' => 'desert_marshes',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'camel',
'culture' => '51',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '891',
'region_y' => '1719'
]);

DB::table('regions')->insert([
'region_name' => 'Djerba',
'rank' => 'county',
'climate' => 'desert',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'camel',
'culture' => '51',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '867',
'region_y' => '1896'
]);

DB::table('regions')->insert([
'region_name' => 'Tripolitana',
'rank' => 'county',
'climate' => 'desert',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'camel',
'culture' => '51',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1017',
'region_y' => '1768'
]);

DB::table('regions')->insert([
'region_name' => 'Germa',
'rank' => 'county',
'climate' => 'desert',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'camel',
'culture' => '51',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1011',
'region_y' => '2064'
]);

DB::table('regions')->insert([
'region_name' => 'Senoussi',
'rank' => 'county',
'climate' => 'desert',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'camel',
'culture' => '50',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1425',
'region_y' => '2167'
]);

DB::table('regions')->insert([
'region_name' => 'Cyrenaica',
'rank' => 'county',
'climate' => 'desert',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'camel',
'culture' => '50',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1300',
'region_y' => '1805'
]);

DB::table('regions')->insert([
'region_name' => 'Delta',
'rank' => 'county',
'climate' => 'desert_marshes',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'camel',
'culture' => '50',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Anatolian',
'region_x' => '1693',
'region_y' => '1848'
]);

DB::table('regions')->insert([
'region_name' => 'Cairo',
'rank' => 'kingdom',
'climate' => 'desert_marshes',
'herb' => 'none',
'style' => 'bazaar',
'ride' => 'stud',
'culture' => '50',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1744',
'region_y' => '1901'
]);

DB::table('regions')->insert([
'region_name' => 'Minya',
'rank' => 'county',
'climate' => 'desert_marshes',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'camel',
'culture' => '50',
'cycle' => 'arabic',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1727',
'region_y' => '1993'
]);

DB::table('regions')->insert([
'region_name' => 'Asyut',
'rank' => 'county',
'climate' => 'desert_marshes',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'camel',
'culture' => '50',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1743',
'region_y' => '2034'
]);

DB::table('regions')->insert([
'region_name' => 'Silesia',
'rank' => 'duchy',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'none',
'style' => 'tavern',
'ride' => 'none',
'culture' => '35',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1137',
'region_y' => '760'
]);

DB::table('regions')->insert([
'region_name' => 'Lesser Poland',
'rank' => 'kingdom',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'tavern',
'ride' => 'none',
'culture' => '35',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1289',
'region_y' => '832'
]);

DB::table('regions')->insert([
'region_name' => 'Greater Poland',
'rank' => 'duchy',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'tavern',
'ride' => 'stud',
'culture' => '35',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1194',
'region_y' => '671'
]);

DB::table('regions')->insert([
'region_name' => 'Masovia',
'rank' => 'duchy',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'tavern',
'ride' => 'none',
'culture' => '35',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1280',
'region_y' => '670'
]);

DB::table('regions')->insert([
'region_name' => 'Brest',
'rank' => 'county',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'none',
'culture' => '36',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Rotvieh',
'region_x' => '1442',
'region_y' => '701'
]);

DB::table('regions')->insert([
'region_name' => 'Lithuania',
'rank' => 'duchy',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'stud',
'culture' => '36',
'cycle' => 'none',
'goat' => 'Carpathian',
'sheep' => 'Short_Tailed',
'cattle' => 'Rotvieh',
'region_x' => '1490',
'region_y' => '529'
]);

DB::table('regions')->insert([
'region_name' => 'Istria',
'rank' => 'county',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '38',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1043',
'region_y' => '1143'
]);

DB::table('regions')->insert([
'region_name' => 'Dalmatia',
'rank' => 'duchy',
'climate' => 'temperate_woodlands',
'herb' => 'rosemary',
'style' => 'hunt',
'ride' => 'none',
'culture' => '38',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1215',
'region_y' => '1267'
]);

DB::table('regions')->insert([
'region_name' => 'Croatia',
'rank' => 'duchy',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'stud',
'culture' => '38',
'cycle' => 'croatian',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1138',
'region_y' => '1190'
]);

DB::table('regions')->insert([
'region_name' => 'Burgenland',
'rank' => 'duchy',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'tavern',
'ride' => 'none',
'culture' => '37',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Braunvieh',
'region_x' => '1197',
'region_y' => '978'
]);

DB::table('regions')->insert([
'region_name' => 'Veszprem',
'rank' => 'county',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'tavern',
'ride' => 'none',
'culture' => '37',
'cycle' => 'hungarian',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1207',
'region_y' => '1013'
]);

DB::table('regions')->insert([
'region_name' => 'Esztergom',
'rank' => 'kingdom',
'climate' => 'steppe',
'herb' => 'none',
'style' => 'tavern',
'ride' => 'stud',
'culture' => '37',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Zaupelschaf',
'cattle' => 'Braunvieh',
'region_x' => '1241',
'region_y' => '971'
]);

DB::table('regions')->insert([
'region_name' => 'Eger',
'rank' => 'county',
'climate' => 'steppe',
'herb' => 'none',
'style' => 'tavern',
'ride' => 'stud',
'culture' => '37',
'cycle' => 'hungarian',
'goat' => 'none',
'sheep' => 'Zaupelschaf',
'cattle' => 'none',
'region_x' => '1307',
'region_y' => '964'
]);

DB::table('regions')->insert([
'region_name' => 'Vac',
'rank' => 'duchy',
'climate' => 'steppe',
'herb' => 'none',
'style' => 'falconry',
'ride' => 'stud',
'culture' => '37',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Zaupelschaf',
'cattle' => 'Podolian',
'region_x' => '1253',
'region_y' => '989'
]);

DB::table('regions')->insert([
'region_name' => 'Pecs',
'rank' => 'county',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'tavern',
'ride' => 'none',
'culture' => '37',
'cycle' => 'hungarian',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1220',
'region_y' => '1074'
]);

DB::table('regions')->insert([
'region_name' => 'Transsylvania',
'rank' => 'duchy',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'elder',
'style' => 'hunt',
'ride' => 'none',
'culture' => '37',
'cycle' => 'hungarian',
'goat' => 'none',
'sheep' => 'Zaupelschaf',
'cattle' => 'Podolian',
'region_x' => '1435',
'region_y' => '1073'
]);

DB::table('regions')->insert([
'region_name' => 'Oltenia',
'rank' => 'principality',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'tavern',
'ride' => 'none',
'culture' => '41',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1424',
'region_y' => '1133'
]);

DB::table('regions')->insert([
'region_name' => 'Mutenia',
'rank' => 'county',
'climate' => 'temperate_woodlands',
'herb' => 'elder',
'style' => 'tavern',
'ride' => 'stud',
'culture' => '41',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Podolian',
'region_x' => '1511',
'region_y' => '1140'
]);

DB::table('regions')->insert([
'region_name' => 'Besarabia',
'rank' => 'county',
'climate' => 'temperate_grasslands',
'herb' => 'none',
'style' => 'tavern',
'ride' => 'none',
'culture' => '41',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1642',
'region_y' => '1183'
]);

DB::table('regions')->insert([
'region_name' => 'Moldova',
'rank' => 'principality',
'climate' => 'steppe',
'herb' => 'none',
'style' => 'fair',
'ride' => 'stud',
'culture' => '41',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Podolian',
'region_x' => '1544',
'region_y' => '982'
]);

DB::table('regions')->insert([
'region_name' => 'Sofia',
'rank' => 'county',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'stud',
'culture' => '40',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Podolian',
'region_x' => '1426',
'region_y' => '1264'
]);

DB::table('regions')->insert([
'region_name' => 'Varna',
'rank' => 'kingdom',
'climate' => 'temperate_grasslands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '40',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1611',
'region_y' => '1236'
]);

DB::table('regions')->insert([
'region_name' => 'Bosnia',
'rank' => 'duchy',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '39',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Podolian',
'region_x' => '1249',
'region_y' => '1211'
]);

DB::table('regions')->insert([
'region_name' => 'Syrmia',
'rank' => 'county',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'stud',
'culture' => '39',
'cycle' => 'serbian',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1310',
'region_y' => '1147'
]);

DB::table('regions')->insert([
'region_name' => 'Rashka',
'rank' => 'principality',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '39',
'cycle' => 'serbian',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1317',
'region_y' => '1231'
]);

DB::table('regions')->insert([
'region_name' => 'Serbia',
'rank' => 'county',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'none',
'culture' => '39',
'cycle' => 'none',
'goat' => 'Cretan',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1321',
'region_y' => '1291'
]);

DB::table('regions')->insert([
'region_name' => 'Kosovo',
'rank' => 'county',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '39',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Bardoka',
'cattle' => 'none',
'region_x' => '1339',
'region_y' => '1267'
]);

DB::table('regions')->insert([
'region_name' => 'Oleshia',
'rank' => 'county',
'climate' => 'steppe',
'herb' => 'none',
'style' => 'coaching',
'ride' => 'stud',
'culture' => '42',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Rotvieh',
'region_x' => '1801',
'region_y' => '1041'
]);

DB::table('regions')->insert([
'region_name' => 'Pereyaslav',
'rank' => 'principality',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'coaching',
'ride' => 'none',
'culture' => '42',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Rotvieh',
'region_x' => '1755',
'region_y' => '832'
]);

DB::table('regions')->insert([
'region_name' => 'Kiev',
'rank' => 'principality',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'none',
'culture' => '42',
'cycle' => 'russian',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1717',
'region_y' => '807'
]);

DB::table('regions')->insert([
'region_name' => 'Halych',
'rank' => 'principality',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'none',
'culture' => '42',
'cycle' => 'none',
'goat' => 'Carpathian',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1483',
'region_y' => '889'
]);

DB::table('regions')->insert([
'region_name' => 'Turov',
'rank' => 'principality',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'coaching',
'ride' => 'none',
'culture' => '42',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1604',
'region_y' => '703'
]);

DB::table('regions')->insert([
'region_name' => 'Tchernigov',
'rank' => 'principality',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'coaching',
'ride' => 'stud',
'culture' => '42',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1747',
'region_y' => '740'
]);

DB::table('regions')->insert([
'region_name' => 'Polotsk',
'rank' => 'principality',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'coaching',
'ride' => 'none',
'culture' => '42',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1647',
'region_y' => '469'
]);

DB::table('regions')->insert([
'region_name' => 'Smolensk',
'rank' => 'principality',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '42',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1780',
'region_y' => '517'
]);

DB::table('regions')->insert([
'region_name' => 'Ryazan',
'rank' => 'principality',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '42',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Short_Tailed',
'cattle' => 'Rotvieh',
'region_x' => '2088',
'region_y' => '530'
]);

DB::table('regions')->insert([
'region_name' => 'Muscovy',
'rank' => 'principality',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'none',
'culture' => '42',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '2003',
'region_y' => '449'
]);

DB::table('regions')->insert([
'region_name' => 'Pleskov',
'rank' => 'principality',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'none',
'culture' => '42',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1627',
'region_y' => '297'
]);

DB::table('regions')->insert([
'region_name' => 'Novgorod',
'rank' => 'principality',
'climate' => 'temperate_woodlands_marshes',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'stud',
'culture' => '42',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Short_Tailed',
'cattle' => 'none',
'region_x' => '1747',
'region_y' => '242'
]);

DB::table('regions')->insert([
'region_name' => 'Bolgar',
'rank' => 'county',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'stud',
'culture' => '42',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '2467',
'region_y' => '506'
]);

DB::table('regions')->insert([
'region_name' => 'Vladimir',
'rank' => 'county',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '42',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '2117',
'region_y' => '421'
]);

DB::table('regions')->insert([
'region_name' => 'Vologda',
'rank' => 'county',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'coaching',
'ride' => 'none',
'culture' => '42',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Short_Tailed',
'cattle' => 'none',
'region_x' => '2095',
'region_y' => '187'
]);

DB::table('regions')->insert([
'region_name' => 'Oryol',
'rank' => 'county',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'coaching',
'ride' => 'none',
'culture' => '42',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1942',
'region_y' => '643'
]);

DB::table('regions')->insert([
'region_name' => 'Kursk',
'rank' => 'county',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'coaching',
'ride' => 'none',
'culture' => '42',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1946',
'region_y' => '724'
]);

DB::table('regions')->insert([
'region_name' => 'Atil',
'rank' => 'kingdom',
'climate' => 'steppe',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'stud',
'culture' => '54',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Thin_Tailed',
'cattle' => 'none',
'region_x' => '2427',
'region_y' => '1056'
]);

DB::table('regions')->insert([
'region_name' => 'Khiva',
'rank' => 'kingdom',
'climate' => 'steppe',
'herb' => 'none',
'style' => 'falconry',
'ride' => 'stud',
'culture' => '54',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Thin_Tailed',
'cattle' => 'none',
'region_x' => '2922',
'region_y' => '1336'
]);

DB::table('regions')->insert([
'region_name' => 'Thrace',
'rank' => 'kingdom',
'climate' => 'mediterranean_shrublands_marshes',
'herb' => 'none',
'style' => 'bazaar',
'ride' => 'stud',
'culture' => '43',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1654',
'region_y' => '1356'
]);

DB::table('regions')->insert([
'region_name' => 'Thessaloniki',
'rank' => 'principality',
'climate' => 'mediterranean_woodlands',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'none',
'culture' => '43',
'cycle' => 'byzantine',
'goat' => 'none',
'sheep' => 'Serrai',
'cattle' => 'none',
'region_x' => '1410',
'region_y' => '1375'
]);

DB::table('regions')->insert([
'region_name' => 'Hellas',
'rank' => 'principality',
'climate' => 'mediterranean_shrublands',
'herb' => 'rosemary',
'style' => 'hunt',
'ride' => 'none',
'culture' => '43',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1441',
'region_y' => '1515'
]);

DB::table('regions')->insert([
'region_name' => 'Peloponnesos',
'rank' => 'principality',
'climate' => 'mediterranean_shrublands',
'herb' => 'rosemary',
'style' => 'tavern',
'ride' => 'none',
'culture' => '43',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Anatolian',
'region_x' => '1390',
'region_y' => '1561'
]);

DB::table('regions')->insert([
'region_name' => 'Nicopolis',
'rank' => 'principality',
'climate' => 'mediterranean_woodlands',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'none',
'culture' => '43',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Anatolian',
'region_x' => '1332',
'region_y' => '1453'
]);

DB::table('regions')->insert([
'region_name' => 'Epirus',
'rank' => 'principality',
'climate' => 'mediterranean_woodlands',
'herb' => 'none',
'style' => 'tavern',
'ride' => 'none',
'culture' => '43',
'cycle' => 'byzantine',
'goat' => 'Cretan',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1282',
'region_y' => '1330'
]);

DB::table('regions')->insert([
'region_name' => 'Macedonia',
'rank' => 'duchy',
'climate' => 'mediterranean_woodlands',
'herb' => 'none',
'style' => 'tavern',
'ride' => 'none',
'culture' => '43',
'cycle' => 'none',
'goat' => 'Cretan',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1343',
'region_y' => '1382'
]);

DB::table('regions')->insert([
'region_name' => 'Aegean',
'rank' => 'county',
'climate' => 'mediterranean_woodlands',
'herb' => 'rosemary',
'style' => 'hunt',
'ride' => 'none',
'culture' => '43',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Anatolian',
'region_x' => '1500',
'region_y' => '1648'
]);

DB::table('regions')->insert([
'region_name' => 'Samos',
'rank' => 'principality',
'climate' => 'mediterranean_shrublands',
'herb' => 'frankincense',
'style' => 'tavern',
'ride' => 'none',
'culture' => '43',
'cycle' => 'byzantine',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Anatolian',
'region_x' => '1581',
'region_y' => '1492'
]);

DB::table('regions')->insert([
'region_name' => 'Thracesia',
'rank' => 'principality',
'climate' => 'mediterranean_shrublands',
'herb' => 'none',
'style' => 'tavern',
'ride' => 'none',
'culture' => '43',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Thin_Tailed',
'cattle' => 'none',
'region_x' => '1608',
'region_y' => '1522'
]);

DB::table('regions')->insert([
'region_name' => 'Opsicia',
'rank' => 'principality',
'climate' => 'mediterranean_shrublands',
'herb' => 'none',
'style' => 'tavern',
'ride' => 'none',
'culture' => '43',
'cycle' => 'none',
'goat' => 'Angora',
'sheep' => 'Thin_Tailed',
'cattle' => 'none',
'region_x' => '1685',
'region_y' => '1387'
]);

DB::table('regions')->insert([
'region_name' => 'Anatolia',
'rank' => 'principality',
'climate' => 'mediterranean_woodlands',
'herb' => 'none',
'style' => 'tavern',
'ride' => 'none',
'culture' => '43',
'cycle' => 'byzantine',
'goat' => 'Angora',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1797',
'region_y' => '1520'
]);

DB::table('regions')->insert([
'region_name' => 'Cibyrrhaeot',
'rank' => 'principality',
'climate' => 'mediterranean_shrublands',
'herb' => 'lavender',
'style' => 'tavern',
'ride' => 'none',
'culture' => '43',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1776',
'region_y' => '1587'
]);

DB::table('regions')->insert([
'region_name' => 'Bucellaria',
'rank' => 'county',
'climate' => 'steppe',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'stud',
'culture' => '43',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1811',
'region_y' => '1412'
]);

DB::table('regions')->insert([
'region_name' => 'Paphlagonia',
'rank' => 'principality',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'tavern',
'ride' => 'none',
'culture' => '43',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1904',
'region_y' => '1300'
]);

DB::table('regions')->insert([
'region_name' => 'Cilicia',
'rank' => 'county',
'climate' => 'mediterranean_shrublands_marshes',
'herb' => 'none',
'style' => 'tavern',
'ride' => 'none',
'culture' => '43',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Thin_Tailed',
'cattle' => 'none',
'region_x' => '1883',
'region_y' => '1574'
]);

DB::table('regions')->insert([
'region_name' => 'Cappadocia',
'rank' => 'principality',
'climate' => 'steppe',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'stud',
'culture' => '43',
'cycle' => 'none',
'goat' => 'Angora',
'sheep' => 'Thin_Tailed',
'cattle' => 'none',
'region_x' => '1918',
'region_y' => '1477'
]);

DB::table('regions')->insert([
'region_name' => 'Chaldea',
'rank' => 'county',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'tavern',
'ride' => 'none',
'culture' => '43',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '2089',
'region_y' => '1357'
]);

DB::table('regions')->insert([
'region_name' => 'Edessa',
'rank' => 'county',
'climate' => 'mediterranean_shrublands',
'herb' => 'none',
'style' => 'tavern',
'ride' => 'none',
'culture' => '43',
'cycle' => 'none',
'goat' => 'Angora',
'sheep' => 'none',
'cattle' => 'Anatolian',
'region_x' => '2052',
'region_y' => '1555'
]);

DB::table('regions')->insert([
'region_name' => 'Armeniac',
'rank' => 'principality',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '43',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Thin_Tailed',
'cattle' => 'none',
'region_x' => '1932',
'region_y' => '1374'
]);

DB::table('regions')->insert([
'region_name' => 'Hexacomia',
'rank' => 'principality',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'tavern',
'ride' => 'none',
'culture' => '43',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '2109',
'region_y' => '1517'
]);

DB::table('regions')->insert([
'region_name' => 'Sebasteia',
'rank' => 'principality',
'climate' => 'steppe',
'herb' => 'none',
'style' => 'tavern',
'ride' => 'stud',
'culture' => '43',
'cycle' => 'byzantine',
'goat' => 'none',
'sheep' => 'Thin_Tailed',
'cattle' => 'none',
'region_x' => '1981',
'region_y' => '1422'
]);

DB::table('regions')->insert([
'region_name' => 'Abchasia',
'rank' => 'duchy',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'none',
'culture' => '44',
'cycle' => 'kannada',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '2167',
'region_y' => '1322'
]);

DB::table('regions')->insert([
'region_name' => 'Georgia',
'rank' => 'kingdom',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'bazaar',
'ride' => 'stud',
'culture' => '44',
'cycle' => 'kannada',
'goat' => 'none',
'sheep' => 'Thin_Tailed',
'cattle' => 'Anatolian',
'region_x' => '2295',
'region_y' => '1317'
]);

DB::table('regions')->insert([
'region_name' => 'Derbent',
'rank' => 'county',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'stud',
'culture' => '44',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '2435',
'region_y' => '1299'
]);

DB::table('regions')->insert([
'region_name' => 'Kars',
'rank' => 'kingdom',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '45',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Anatolian',
'region_x' => '2245',
'region_y' => '1383'
]);

DB::table('regions')->insert([
'region_name' => 'Artsakh',
'rank' => 'principality',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '45',
'cycle' => 'none',
'goat' => 'Angora',
'sheep' => 'none',
'cattle' => 'Anatolian',
'region_x' => '2320',
'region_y' => '1451'
]);

DB::table('regions')->insert([
'region_name' => 'Armenia',
'rank' => 'principality',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '45',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '2185',
'region_y' => '1493'
]);

DB::table('regions')->insert([
'region_name' => 'Mardin',
'rank' => 'principality',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '45',
'cycle' => 'armenian',
'goat' => 'none',
'sheep' => 'Fat_Tailed',
'cattle' => 'none',
'region_x' => '2130',
'region_y' => '1548'
]);

DB::table('regions')->insert([
'region_name' => 'Van',
'rank' => 'county',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'hunt',
'ride' => 'none',
'culture' => '45',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '2237',
'region_y' => '1488'
]);

DB::table('regions')->insert([
'region_name' => 'Khorasan',
'rank' => 'county',
'climate' => 'mediterranean_shrublands',
'herb' => 'none',
'style' => 'caravan',
'ride' => 'none',
'culture' => '55',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Fat_Tailed',
'cattle' => 'none',
'region_x' => '2861',
'region_y' => '1605'
]);

DB::table('regions')->insert([
'region_name' => 'Sistan',
'rank' => 'county',
'climate' => 'desert',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'camel',
'culture' => '55',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '2848',
'region_y' => '1652'
]);

DB::table('regions')->insert([
'region_name' => 'Kerman',
'rank' => '',
'climate' => 'desert',
'herb' => 'none',
'style' => 'caravan',
'ride' => 'camel',
'culture' => '55',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Fat_Tailed',
'cattle' => 'none',
'region_x' => '2791',
'region_y' => '1890'
]);

DB::table('regions')->insert([
'region_name' => 'Fars',
'rank' => 'kingdom',
'climate' => 'desert',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '55',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '2609',
'region_y' => '1924'
]);

DB::table('regions')->insert([
'region_name' => 'Jibal',
'rank' => 'principality',
'climate' => 'desert',
'herb' => 'none',
'style' => 'caravan',
'ride' => 'camel',
'culture' => '55',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '2572',
'region_y' => '1778'
]);

DB::table('regions')->insert([
'region_name' => 'Rhages',
'rank' => 'county',
'climate' => 'desert',
'herb' => 'none',
'style' => 'caravan',
'ride' => 'camel',
'culture' => '55',
'cycle' => 'persian',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '2561',
'region_y' => '1631'
]);

DB::table('regions')->insert([
'region_name' => 'Gorgan',
'rank' => 'county',
'climate' => 'mediterranean_woodlands',
'herb' => 'elder',
'style' => 'minstrel',
'ride' => 'stud',
'culture' => '55',
'cycle' => 'persian',
'goat' => 'none',
'sheep' => 'Fat_Tailed',
'cattle' => 'none',
'region_x' => '2684',
'region_y' => '1573'
]);

DB::table('regions')->insert([
'region_name' => 'Azerbaijan',
'rank' => 'county',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'caravan',
'ride' => 'none',
'culture' => '55',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Anatolian',
'region_x' => '2354',
'region_y' => '1509'
]);

DB::table('regions')->insert([
'region_name' => 'Kurdistan',
'rank' => 'county',
'climate' => 'temperate_woodlands',
'herb' => 'none',
'style' => 'caravan',
'ride' => 'stud',
'culture' => '55',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Fat_Tailed',
'cattle' => 'none',
'region_x' => '2445',
'region_y' => '1675'
]);

DB::table('regions')->insert([
'region_name' => 'Najd',
'rank' => 'principality',
'climate' => 'desert',
'herb' => 'none',
'style' => 'falconry',
'ride' => 'camel',
'culture' => '48',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Arabi',
'cattle' => 'none',
'region_x' => '2369',
'region_y' => '2144'
]);

DB::table('regions')->insert([
'region_name' => 'Hejaz',
'rank' => 'principality',
'climate' => 'desert',
'herb' => 'frankincense',
'style' => 'pilgrimage',
'ride' => 'stud',
'culture' => '49',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '2092',
'region_y' => '2292'
]);

DB::table('regions')->insert([
'region_name' => 'Dedan',
'rank' => 'county',
'climate' => 'desert',
'herb' => 'none',
'style' => 'caravan',
'ride' => 'camel',
'culture' => '49',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '2018',
'region_y' => '2063'
]);

DB::table('regions')->insert([
'region_name' => 'Jerusalem',
'rank' => 'kingdom',
'climate' => 'mediterranean_woodlands_marshes',
'herb' => 'frankincense',
'style' => 'reliquary',
'ride' => 'stud',
'culture' => '47',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1907',
'region_y' => '1821'
]);

DB::table('regions')->insert([
'region_name' => 'Acre',
'rank' => 'duchy',
'climate' => 'mediterranean_shrublands_marshes',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '47',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'Anatolian',
'region_x' => '1902',
'region_y' => '1766'
]);

DB::table('regions')->insert([
'region_name' => 'Bosra',
'rank' => 'county',
'climate' => 'desert',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'camel',
'culture' => '47',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1957',
'region_y' => '1787'
]);

DB::table('regions')->insert([
'region_name' => 'Damascus',
'rank' => 'kingdom',
'climate' => 'desert',
'herb' => 'none',
'style' => 'falconry',
'ride' => 'stud',
'culture' => '47',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1949',
'region_y' => '1737'
]);

DB::table('regions')->insert([
'region_name' => 'Homs',
'rank' => 'county',
'climate' => 'mediterranean_shrublands_marshes',
'herb' => 'none',
'style' => 'caravan',
'ride' => 'none',
'culture' => '47',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1968',
'region_y' => '1678'
]);

DB::table('regions')->insert([
'region_name' => 'Tripoli',
'rank' => 'county',
'climate' => 'mediterranean_woodlands_marshes',
'herb' => 'cedar',
'style' => 'minstrel',
'ride' => 'camel',
'culture' => '47',
'cycle' => 'none',
'goat' => 'Cretan',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1932',
'region_y' => '1692'
]);

DB::table('regions')->insert([
'region_name' => 'Antioch',
'rank' => 'principality',
'climate' => 'mediterranean_shrublands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '47',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '1944',
'region_y' => '1606'
]);

DB::table('regions')->insert([
'region_name' => 'Aleppo',
'rank' => 'county',
'climate' => 'mediterranean_shrublands',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'none',
'culture' => '47',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Fat_Tailed',
'cattle' => 'none',
'region_x' => '1984',
'region_y' => '1604'
]);

DB::table('regions')->insert([
'region_name' => 'Raqqa',
'rank' => 'county',
'climate' => 'desert_marshes',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'camel',
'culture' => '47',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '2059',
'region_y' => '1617'
]);

DB::table('regions')->insert([
'region_name' => 'Erbil',
'rank' => 'county',
'climate' => 'desert_marshes',
'herb' => 'none',
'style' => 'minstrel',
'ride' => 'camel',
'culture' => '47',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'Fat_Tailed',
'cattle' => 'none',
'region_x' => '2263',
'region_y' => '1605'
]);

DB::table('regions')->insert([
'region_name' => 'Baghdad',
'rank' => 'kingdom',
'climate' => 'desert_marshes',
'herb' => 'none',
'style' => 'bazaar',
'ride' => 'stud',
'culture' => '47',
'cycle' => 'none',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '2275',
'region_y' => '1747'
]);

DB::table('regions')->insert([
'region_name' => 'Kufah',
'rank' => 'county',
'climate' => 'desert_marshes',
'herb' => 'none',
'style' => 'falconry',
'ride' => 'stud',
'culture' => '47',
'cycle' => 'arabic',
'goat' => 'none',
'sheep' => 'none',
'cattle' => 'none',
'region_x' => '2286',
'region_y' => '1810'
]);


    }
}
