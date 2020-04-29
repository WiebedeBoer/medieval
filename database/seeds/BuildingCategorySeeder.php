<?php

use Illuminate\Database\Seeder;

class BuildingCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
		//businesses
		//1
		DB::table('building_categories')->insert([            
		'building_name' => 'chicken coop',
		'building_type' => 'paddock'
		]);	
		//2
		DB::table('building_categories')->insert([            
		'building_name' => 'duck coop',
		'building_type' => 'paddock'
		]);	
		//3
		DB::table('building_categories')->insert([            
		'building_name' => 'shepherd',
		'building_type' => 'paddock'
		]);	
		//4
		DB::table('building_categories')->insert([            
		'building_name' => 'swineherd',
		'building_type' => 'paddock'
		]);	
		//5
		DB::table('building_categories')->insert([            
		'building_name' => 'cowherd',
		'building_type' => 'paddock'
		]);	
		//6
		DB::table('building_categories')->insert([            
		'building_name' => 'horseherd',
		'building_type' => 'paddock'
		]);	
		//7
		DB::table('building_categories')->insert([            
		'building_name' => 'camelherd',
		'building_type' => 'paddock'
		]);	
		//8
		DB::table('building_categories')->insert([            
		'building_name' => 'fishery',
		'building_type' => 'fishery'
		]);	
		//9
		DB::table('building_categories')->insert([            
		'building_name' => 'sugar plantation',
		'building_type' => 'plantation'
		]);	
		//10
		DB::table('building_categories')->insert([            
		'building_name' => 'dates plantation',
		'building_type' => 'plantation'
		]);	
		//11
		DB::table('building_categories')->insert([            
		'building_name' => 'orchard',
		'building_type' => 'plantation'
		]);	
		//12
		DB::table('building_categories')->insert([            
		'building_name' => 'olive yard',
		'building_type' => 'plantation'
		]);	
		//13
		DB::table('building_categories')->insert([            
		'building_name' => 'apiary',
		'building_type' => 'coppice woodland'
		]);	
		//14
		DB::table('building_categories')->insert([            
		'building_name' => 'forester',
		'building_type' => 'coppice woodland'
		]);	
		//15
		DB::table('building_categories')->insert([            
		'building_name' => 'falconer',
		'building_type' => 'kingswood'
		]);	
		//16
		DB::table('building_categories')->insert([            
		'building_name' => 'gameward',
		'building_type' => 'kingswood'
		]);	
		//17
		DB::table('building_categories')->insert([            
		'building_name' => 'trapper',
		'building_type' => 'kingswood'
		]);	
		//18
		DB::table('building_categories')->insert([            
		'building_name' => 'grain field',
		'building_type' => 'field'
		]);	
		//19
		DB::table('building_categories')->insert([            
		'building_name' => 'vineyard',
		'building_type' => 'field'
		]);	
		//20
		DB::table('building_categories')->insert([            
		'building_name' => 'flax field',
		'building_type' => 'field'
		]);
		//21
		DB::table('building_categories')->insert([            
		'building_name' => 'elderberry field',
		'building_type' => 'field'
		]);	
		//22
		DB::table('building_categories')->insert([            
		'building_name' => 'lavender field',
		'building_type' => 'field'
		]);	
		//23
		DB::table('building_categories')->insert([            
		'building_name' => 'woad field',
		'building_type' => 'field'
		]);		
		//24
		DB::table('building_categories')->insert([            
		'building_name' => 'madder field',
		'building_type' => 'field'
		]);		
		//25
		DB::table('building_categories')->insert([            
		'building_name' => 'herbal garden',
		'building_type' => 'field'
		]);	
		//26
		DB::table('building_categories')->insert([            
		'building_name' => 'heath',
		'building_type' => 'field'
		]);	
		//27
		DB::table('building_categories')->insert([            
		'building_name' => 'lead mine',
		'building_type' => 'mine'
		]);	
		//28
		DB::table('building_categories')->insert([            
		'building_name' => 'iron mine',
		'building_type' => 'mine'
		]);	
		//29
		DB::table('building_categories')->insert([            
		'building_name' => 'gold mine',
		'building_type' => 'mine'
		]);	
		//30
		DB::table('building_categories')->insert([            
		'building_name' => 'silver mine',
		'building_type' => 'mine'
		]);		
		//31
		DB::table('building_categories')->insert([            
		'building_name' => 'tin mine',
		'building_type' => 'mine'
		]);	
		//32
		DB::table('building_categories')->insert([            
		'building_name' => 'emerald mine',
		'building_type' => 'mine'
		]);	
		//33
		DB::table('building_categories')->insert([            
		'building_name' => 'ruby mine',
		'building_type' => 'mine'
		]);		
		//34
		DB::table('building_categories')->insert([            
		'building_name' => 'salt mine',
		'building_type' => 'mine'
		]);	
		//35
		DB::table('building_categories')->insert([            
		'building_name' => 'quarry',
		'building_type' => 'quarry'
		]);	
		//36
		DB::table('building_categories')->insert([            
		'building_name' => 'clay pit',
		'building_type' => 'pit'
		]);		
		//37
		DB::table('building_categories')->insert([            
		'building_name' => 'butcher',
		'building_type' => 'food shop'
		]);	
		//38
		DB::table('building_categories')->insert([            
		'building_name' => 'vintner',
		'building_type' => 'food shop'
		]);	
		//39
		DB::table('building_categories')->insert([            
		'building_name' => 'brewery',
		'building_type' => 'food shop'
		]);	
		//40
		DB::table('building_categories')->insert([            
		'building_name' => 'bakery',
		'building_type' => 'food shop'
		]);		
		//41
		DB::table('building_categories')->insert([            
		'building_name' => 'cheesemonger',
		'building_type' => 'food shop'
		]);		
		//42
		DB::table('building_categories')->insert([            
		'building_name' => 'butter maker',
		'building_type' => 'food shop'
		]);	
		//43
		DB::table('building_categories')->insert([            
		'building_name' => 'fishmonger',
		'building_type' => 'food shop'
		]);	
		//44
		DB::table('building_categories')->insert([            
		'building_name' => 'weaponsmith',
		'building_type' => 'armorer'
		]);	
		//45
		DB::table('building_categories')->insert([            
		'building_name' => 'bowyer',
		'building_type' => 'armorer'
		]);	
		//46
		DB::table('building_categories')->insert([            
		'building_name' => 'poleturner',
		'building_type' => 'armorer'
		]);	
		//47
		DB::table('building_categories')->insert([            
		'building_name' => 'chandler',
		'building_type' => 'crafts'
		]);		
		//48
		DB::table('building_categories')->insert([            
		'building_name' => 'rope maker',
		'building_type' => 'crafts'
		]);		
		//49
		DB::table('building_categories')->insert([            
		'building_name' => 'basket maker',
		'building_type' => 'crafts'
		]);	
		//50
		DB::table('building_categories')->insert([            
		'building_name' => 'soap maker',
		'building_type' => 'crafts'
		]);	
		//51
		DB::table('building_categories')->insert([            
		'building_name' => 'carpenter',
		'building_type' => 'crafts'
		]);	
		//52
		DB::table('building_categories')->insert([            
		'building_name' => 'painter',
		'building_type' => 'atelier'
		]);	
		//53
		DB::table('building_categories')->insert([            
		'building_name' => 'perfumer',
		'building_type' => 'atelier'
		]);	
		//54
		DB::table('building_categories')->insert([            
		'building_name' => 'bookbinder',
		'building_type' => 'atelier'
		]);	
		//55
		DB::table('building_categories')->insert([            
		'building_name' => 'caravaner',
		'building_type' => 'importer'
		]);		
		//56
		DB::table('building_categories')->insert([            
		'building_name' => 'sugarcane mill',
		'building_type' => 'mill'
		]);	
		//57
		DB::table('building_categories')->insert([            
		'building_name' => 'gristmill',
		'building_type' => 'mill'
		]);	
		//58
		DB::table('building_categories')->insert([            
		'building_name' => 'oil mill',
		'building_type' => 'mill'
		]);	
		//59
		DB::table('building_categories')->insert([            
		'building_name' => 'flax mill',
		'building_type' => 'mill'
		]);	
		//60
		DB::table('building_categories')->insert([            
		'building_name' => 'fulling mill',
		'building_type' => 'mill'
		]);		
		//61
		DB::table('building_categories')->insert([            
		'building_name' => 'sawmill',
		'building_type' => 'mill'
		]);
		//62
		DB::table('building_categories')->insert([            
		'building_name' => 'paper mill',
		'building_type' => 'mill'
		]);	
		//63
		DB::table('building_categories')->insert([            
		'building_name' => 'tannery',
		'building_type' => 'cloth shop'
		]);	
		//64
		DB::table('building_categories')->insert([            
		'building_name' => 'dyer',
		'building_type' => 'cloth shop'
		]);	
		//65
		DB::table('building_categories')->insert([            
		'building_name' => 'weaver',
		'building_type' => 'cloth shop'
		]);		
		//66
		DB::table('building_categories')->insert([            
		'building_name' => 'furrier',
		'building_type' => 'cloth shop'
		]);	
		//67
		DB::table('building_categories')->insert([            
		'building_name' => 'carpet maker',
		'building_type' => 'cloth shop'
		]);	
		//68
		DB::table('building_categories')->insert([            
		'building_name' => 'tailor',
		'building_type' => 'cloth shop'
		]);	
		//69
		DB::table('building_categories')->insert([            
		'building_name' => 'armorer',
		'building_type' => 'cloth shop'
		]);	
		//70
		DB::table('building_categories')->insert([            
		'building_name' => 'potterer',
		'building_type' => 'furnace'
		]);	
		//71
		DB::table('building_categories')->insert([            
		'building_name' => 'brick maker',
		'building_type' => 'furnace'
		]);
		//72
		DB::table('building_categories')->insert([            
		'building_name' => 'tile maker',
		'building_type' => 'furnace'
		]);	
		//73
		DB::table('building_categories')->insert([            
		'building_name' => 'smelter',
		'building_type' => 'furnace'
		]);	
		//74
		DB::table('building_categories')->insert([            
		'building_name' => 'glassmaker',
		'building_type' => 'furnace'
		]);		
		//75
		DB::table('building_categories')->insert([            
		'building_name' => 'blacksmith',
		'building_type' => 'furnace'
		]);	
		//76
		DB::table('building_categories')->insert([            
		'building_name' => 'jeweler',
		'building_type' => 'furnace'
		]);	
		//77
		DB::table('building_categories')->insert([            
		'building_name' => 'goldsmith',
		'building_type' => 'furnace'
		]);	
		//78
		DB::table('building_categories')->insert([            
		'building_name' => 'silversmith',
		'building_type' => 'furnace'
		]);	
		//79
		DB::table('building_categories')->insert([            
		'building_name' => 'pewterer',
		'building_type' => 'furnace'
		]);			
		
		//chapels
		//80
		DB::table('building_categories')->insert([            
		'building_name' => 'chapel',
		'building_type' => 'clergy',
		'religion' => 'Catholic'
		]);	
		//81
		DB::table('building_categories')->insert([            
		'building_name' => 'chapel',
		'building_type' => 'clergy',
		'religion' => 'Greek Orthodox'
		]);	
		//82
		DB::table('building_categories')->insert([            
		'building_name' => 'chapel',
		'building_type' => 'clergy',
		'religion' => 'Russian Orthodox'
		]);	
		//83
		DB::table('building_categories')->insert([            
		'building_name' => 'chapel',
		'building_type' => 'clergy',
		'religion' => 'Serbian Orthodox'
		]);	
		//84
		DB::table('building_categories')->insert([            
		'building_name' => 'musalla',
		'building_type' => 'clergy',
		'religion' => 'Muslim'
		]);			
		
		//churches
		//85
		DB::table('building_categories')->insert([            
		'building_name' => 'church',
		'building_type' => 'clergy',
		'religion' => 'Catholic'
		]);	
		//86
		DB::table('building_categories')->insert([            
		'building_name' => 'church',
		'building_type' => 'clergy',
		'religion' => 'Greek Orthodox'
		]);	
		//87
		DB::table('building_categories')->insert([            
		'building_name' => 'church',
		'building_type' => 'clergy',
		'religion' => 'Russian Orthodox'
		]);	
		//88
		DB::table('building_categories')->insert([            
		'building_name' => 'church',
		'building_type' => 'clergy',
		'religion' => 'Serbian Orthodox'
		]);	
		//89
		DB::table('building_categories')->insert([            
		'building_name' => 'mosque',
		'building_type' => 'clergy',
		'religion' => 'Muslim'
		]);	
		
		//fortified churches
		//90
		DB::table('building_categories')->insert([            
		'building_name' => 'fortified church',
		'building_type' => 'clergy',
		'religion' => 'Catholic'
		]);	
		//91
		DB::table('building_categories')->insert([            
		'building_name' => 'fortified church',
		'building_type' => 'clergy',
		'religion' => 'Greek Orthodox'
		]);	
		//92
		DB::table('building_categories')->insert([            
		'building_name' => 'fortified church',
		'building_type' => 'clergy',
		'religion' => 'Russian Orthodox'
		]);	
		//93
		DB::table('building_categories')->insert([            
		'building_name' => 'fortified church',
		'building_type' => 'clergy',
		'religion' => 'Serbian Orthodox'
		]);	
		//94
		DB::table('building_categories')->insert([            
		'building_name' => 'fortified mosque',
		'building_type' => 'clergy',
		'religion' => 'Muslim'
		]);			
	
		//fortress churches
		//95
		DB::table('building_categories')->insert([            
		'building_name' => 'church fortress',
		'building_type' => 'clergy',
		'religion' => 'Catholic'
		]);	
		//96
		DB::table('building_categories')->insert([            
		'building_name' => 'church fortress',
		'building_type' => 'clergy',
		'religion' => 'Greek Orthodox'
		]);	
		//97
		DB::table('building_categories')->insert([            
		'building_name' => 'church fortress',
		'building_type' => 'clergy',
		'religion' => 'Russian Orthodox'
		]);	
		//98
		DB::table('building_categories')->insert([            
		'building_name' => 'church fortress',
		'building_type' => 'clergy',
		'religion' => 'Serbian Orthodox'
		]);	
		//99
		DB::table('building_categories')->insert([            
		'building_name' => 'amsar',
		'building_type' => 'clergy',
		'religion' => 'Muslim'
		]);		
		
		//cathedrals
		//100
		DB::table('building_categories')->insert([            
		'building_name' => 'cathedral',
		'building_type' => 'clergy',
		'religion' => 'Catholic'
		]);	
		//101
		DB::table('building_categories')->insert([            
		'building_name' => 'cathedral',
		'building_type' => 'clergy',
		'religion' => 'Greek Orthodox'
		]);	
		//102
		DB::table('building_categories')->insert([            
		'building_name' => 'cathedral',
		'building_type' => 'clergy',
		'religion' => 'Russian Orthodox'
		]);	
		//103
		DB::table('building_categories')->insert([            
		'building_name' => 'cathedral',
		'building_type' => 'clergy',
		'religion' => 'Serbian Orthodox'
		]);	
		//104
		DB::table('building_categories')->insert([            
		'building_name' => 'grand mosque',
		'building_type' => 'clergy',
		'religion' => 'Muslim'
		]);	

		//catholic monastic
		//105
		DB::table('building_categories')->insert([            
		'building_name' => 'hermitage',
		'building_type' => 'monastic',
		'religion' => 'Catholic'
		]);			
		//106
		DB::table('building_categories')->insert([            
		'building_name' => 'priory',
		'building_type' => 'monastic',
		'religion' => 'Catholic'
		]);	
		//107
		DB::table('building_categories')->insert([            
		'building_name' => 'abbey',
		'building_type' => 'monastic',
		'religion' => 'Catholic'
		]);	
		//108
		DB::table('building_categories')->insert([            
		'building_name' => 'fortified abbey',
		'building_type' => 'monastic',
		'religion' => 'Catholic'
		]);	
		
		//greek orthodox monastic
		//109
		DB::table('building_categories')->insert([            
		'building_name' => 'hermitage',
		'building_type' => 'monastic',
		'religion' => 'Greek Orthodox'
		]);			
		//110
		DB::table('building_categories')->insert([            
		'building_name' => 'priory',
		'building_type' => 'monastic',
		'religion' => 'Greek Orthodox'
		]);	
		//111
		DB::table('building_categories')->insert([            
		'building_name' => 'abbey',
		'building_type' => 'monastic',
		'religion' => 'Greek Orthodox'
		]);	
		//112
		DB::table('building_categories')->insert([            
		'building_name' => 'fortified abbey',
		'building_type' => 'monastic',
		'religion' => 'Greek Orthodox'
		]);	
		
		//russian orthodox monastic
		//113
		DB::table('building_categories')->insert([            
		'building_name' => 'hermitage',
		'building_type' => 'monastic',
		'religion' => 'Russian Orthodox'
		]);			
		//114
		DB::table('building_categories')->insert([            
		'building_name' => 'priory',
		'building_type' => 'monastic',
		'religion' => 'Russian Orthodox'
		]);	
		//115
		DB::table('building_categories')->insert([            
		'building_name' => 'abbey',
		'building_type' => 'monastic',
		'religion' => 'Russian Orthodox'
		]);	
		//116
		DB::table('building_categories')->insert([            
		'building_name' => 'fortified abbey',
		'building_type' => 'monastic',
		'religion' => 'Russian Orthodox'
		]);			

		//serbian orthodox monastic
		//117
		DB::table('building_categories')->insert([            
		'building_name' => 'hermitage',
		'building_type' => 'monastic',
		'religion' => 'Serbian Orthodox'
		]);			
		//118
		DB::table('building_categories')->insert([            
		'building_name' => 'priory',
		'building_type' => 'monastic',
		'religion' => 'Serbian Orthodox'
		]);	
		//119
		DB::table('building_categories')->insert([            
		'building_name' => 'abbey',
		'building_type' => 'monastic',
		'religion' => 'Serbian Orthodox'
		]);	
		//120
		DB::table('building_categories')->insert([            
		'building_name' => 'fortified abbey',
		'building_type' => 'monastic',
		'religion' => 'Serbian Orthodox'
		]);	
		
		//muslim sufi
		//121
		DB::table('building_categories')->insert([            
		'building_name' => 'hermitage',
		'building_type' => 'monastic',
		'religion' => 'Muslim'
		]);		
		//122
		DB::table('building_categories')->insert([            
		'building_name' => 'dayr',
		'building_type' => 'monastic',
		'religion' => 'Muslim'
		]);
		//123
		DB::table('building_categories')->insert([            
		'building_name' => 'khanqah',
		'building_type' => 'monastic',
		'religion' => 'Muslim'
		]);
		//124
		DB::table('building_categories')->insert([            
		'building_name' => 'ribat',
		'building_type' => 'monastic',
		'religion' => 'Muslim'
		]);
		
		//crusader
		//125
		DB::table('building_categories')->insert([            
		'building_name' => 'chapterhouse',
		'building_type' => 'crusader',
		'religion' => 'Catholic'
		]);	

		//glebe
		//126
		DB::table('building_categories')->insert([            
		'building_name' => 'rectory',
		'building_type' => 'clergy',
		'religion' => 'Catholic'
		]);
		//127
		DB::table('building_categories')->insert([            
		'building_name' => 'rectory',
		'building_type' => 'clergy',
		'religion' => 'Greek Orthodox'
		]);	
		//128
		DB::table('building_categories')->insert([            
		'building_name' => 'rectory',
		'building_type' => 'clergy',
		'religion' => 'Russian Orthodox'
		]);	
		//129
		DB::table('building_categories')->insert([            
		'building_name' => 'rectory',
		'building_type' => 'clergy',
		'religion' => 'Serbian Orthodox'
		]);			
		//130
		DB::table('building_categories')->insert([            
		'building_name' => 'manzil',
		'building_type' => 'clergy',
		'religion' => 'Muslim'
		]);	
		
		//education
		//131
		DB::table('building_categories')->insert([            
		'building_name' => 'school',
		'building_type' => 'education'
		]);	
		//132
		DB::table('building_categories')->insert([            
		'building_name' => 'university',
		'building_type' => 'education',
		'religion' => 'Catholic'
		]);
		//133
		DB::table('building_categories')->insert([            
		'building_name' => 'university',
		'building_type' => 'education',
		'religion' => 'Greek Orthodox'
		]);	
		//134
		DB::table('building_categories')->insert([            
		'building_name' => 'university',
		'building_type' => 'education',
		'religion' => 'Russian Orthodox'
		]);	
		//135
		DB::table('building_categories')->insert([            
		'building_name' => 'university',
		'building_type' => 'education',
		'religion' => 'Serbian Orthodox'
		]);	
		//136
		DB::table('building_categories')->insert([            
		'building_name' => 'madrassa',
		'building_type' => 'education',
		'religion' => 'Muslim'
		]);	
		
		//health
		//137
		DB::table('building_categories')->insert([            
		'building_name' => 'almshouse',
		'building_type' => 'health'
		]);	
		//138	
		DB::table('building_categories')->insert([            
		'building_name' => 'hospital',
		'building_type' => 'health',
		'religion' => 'Catholic'
		]);
		//139
		DB::table('building_categories')->insert([            
		'building_name' => 'hospital',
		'building_type' => 'health',
		'religion' => 'Greek Orthodox'
		]);	
		//140
		DB::table('building_categories')->insert([            
		'building_name' => 'hospital',
		'building_type' => 'health',
		'religion' => 'Russian Orthodox'
		]);	
		//141
		DB::table('building_categories')->insert([            
		'building_name' => 'hospital',
		'building_type' => 'health',
		'religion' => 'Serbian Orthodox'
		]);	
		//142
		DB::table('building_categories')->insert([            
		'building_name' => 'khastakhaneh',
		'building_type' => 'health',
		'religion' => 'Muslim'
		]);

		//catholic defenses
		//143
		DB::table('building_categories')->insert([            
		'building_name' => 'cottage',
		'building_type' => 'defenses',
		'religion' => 'Catholic'
		]);				
		//144
		DB::table('building_categories')->insert([            
		'building_name' => 'townhouse',
		'building_type' => 'defenses',
		'religion' => 'Catholic'
		]);				
		//145
		DB::table('building_categories')->insert([            
		'building_name' => 'housebarn',
		'building_type' => 'defenses',
		'religion' => 'Catholic'
		]);				
		//146
		DB::table('building_categories')->insert([            
		'building_name' => 'bastle house',
		'building_type' => 'defenses',
		'religion' => 'Catholic'
		]);				
		//147
		DB::table('building_categories')->insert([            
		'building_name' => 'merchant house',
		'building_type' => 'defenses',
		'religion' => 'Catholic'
		]);		
		//148
		DB::table('building_categories')->insert([            
		'building_name' => 'strong house',
		'building_type' => 'defenses',
		'religion' => 'Catholic'
		]);				
		//149
		DB::table('building_categories')->insert([            
		'building_name' => 'chivalric house',
		'building_type' => 'defenses',
		'religion' => 'Catholic'
		]);	
		//150
		DB::table('building_categories')->insert([            
		'building_name' => 'hall house',
		'building_type' => 'defenses',
		'religion' => 'Catholic'
		]);				
		//151
		DB::table('building_categories')->insert([            
		'building_name' => 'hall keep',
		'building_type' => 'defenses',
		'religion' => 'Catholic'
		]);		
		//152
		DB::table('building_categories')->insert([            
		'building_name' => 'gatehouse keep',
		'building_type' => 'defenses',
		'religion' => 'Catholic'
		]);				
		//153
		DB::table('building_categories')->insert([            
		'building_name' => 'motte and bailey castle',
		'building_type' => 'defenses',
		'religion' => 'Catholic'
		]);				
		//154
		DB::table('building_categories')->insert([            
		'building_name' => 'tower castle',
		'building_type' => 'defenses',
		'religion' => 'Catholic'
		]);				
		//155
		DB::table('building_categories')->insert([            
		'building_name' => 'courtyard castle',
		'building_type' => 'defenses',
		'religion' => 'Catholic'
		]);				
		//156
		DB::table('building_categories')->insert([            
		'building_name' => 'z plan castle',
		'building_type' => 'defenses',
		'religion' => 'Catholic'
		]);		
		//157
		DB::table('building_categories')->insert([            
		'building_name' => 'l plan castle',
		'building_type' => 'defenses',
		'religion' => 'Catholic'
		]);		
		//158
		DB::table('building_categories')->insert([            
		'building_name' => 'towered castle',
		'building_type' => 'defenses',
		'religion' => 'Catholic'
		]);		
		//159
		DB::table('building_categories')->insert([            
		'building_name' => 'concentric castle',
		'building_type' => 'defenses',
		'religion' => 'Catholic'
		]);				
		//160
		DB::table('building_categories')->insert([            
		'building_name' => 'citadel',
		'building_type' => 'defenses',
		'religion' => 'Catholic'
		]);	
		//161
		DB::table('building_categories')->insert([            
		'building_name' => 'palais',
		'building_type' => 'defenses',
		'religion' => 'Catholic'
		]);	
		
		//Serbian Orthodox defenses
		//162
		DB::table('building_categories')->insert([            
		'building_name' => 'cottage',
		'building_type' => 'defenses',
		'religion' => 'Serbian Orthodox'
		]);				
		//163
		DB::table('building_categories')->insert([            
		'building_name' => 'townhouse',
		'building_type' => 'defenses',
		'religion' => 'Serbian Orthodox'
		]);				
		//164
		DB::table('building_categories')->insert([            
		'building_name' => 'housebarn',
		'building_type' => 'defenses',
		'religion' => 'Serbian Orthodox'
		]);				
		//165
		DB::table('building_categories')->insert([            
		'building_name' => 'bastle house',
		'building_type' => 'defenses',
		'religion' => 'Serbian Orthodox'
		]);				
		//166
		DB::table('building_categories')->insert([            
		'building_name' => 'merchant house',
		'building_type' => 'defenses',
		'religion' => 'Serbian Orthodox'
		]);		
		//167
		DB::table('building_categories')->insert([            
		'building_name' => 'strong house',
		'building_type' => 'defenses',
		'religion' => 'Serbian Orthodox'
		]);				
		//168
		DB::table('building_categories')->insert([            
		'building_name' => 'chivalric house',
		'building_type' => 'defenses',
		'religion' => 'Serbian Orthodox'
		]);	
		//169
		DB::table('building_categories')->insert([            
		'building_name' => 'hall house',
		'building_type' => 'defenses',
		'religion' => 'Serbian Orthodox'
		]);				
		//170
		DB::table('building_categories')->insert([            
		'building_name' => 'hall keep',
		'building_type' => 'defenses',
		'religion' => 'Serbian Orthodox'
		]);		
		//171
		DB::table('building_categories')->insert([            
		'building_name' => 'gatehouse keep',
		'building_type' => 'defenses',
		'religion' => 'Serbian Orthodox'
		]);				
		//172
		DB::table('building_categories')->insert([            
		'building_name' => 'motte and bailey castle',
		'building_type' => 'defenses',
		'religion' => 'Serbian Orthodox'
		]);				
		//173
		DB::table('building_categories')->insert([            
		'building_name' => 'tower castle',
		'building_type' => 'defenses',
		'religion' => 'Serbian Orthodox'
		]);				
		//174
		DB::table('building_categories')->insert([            
		'building_name' => 'courtyard castle',
		'building_type' => 'defenses',
		'religion' => 'Serbian Orthodox'
		]);				
		//175
		DB::table('building_categories')->insert([            
		'building_name' => 'z plan castle',
		'building_type' => 'defenses',
		'religion' => 'Serbian Orthodox'
		]);		
		//176
		DB::table('building_categories')->insert([            
		'building_name' => 'l plan castle',
		'building_type' => 'defenses',
		'religion' => 'Serbian Orthodox'
		]);		
		//177
		DB::table('building_categories')->insert([            
		'building_name' => 'towered castle',
		'building_type' => 'defenses',
		'religion' => 'Serbian Orthodox'
		]);		
		//178
		DB::table('building_categories')->insert([            
		'building_name' => 'concentric castle',
		'building_type' => 'defenses',
		'religion' => 'Serbian Orthodox'
		]);				
		//179
		DB::table('building_categories')->insert([            
		'building_name' => 'citadel',
		'building_type' => 'defenses',
		'religion' => 'Serbian Orthodox'
		]);	
		//180
		DB::table('building_categories')->insert([            
		'building_name' => 'palais',
		'building_type' => 'defenses',
		'religion' => 'Serbian Orthodox'
		]);
		
		//Greek Orthodox defenses
		//181
		DB::table('building_categories')->insert([            
		'building_name' => 'cottage',
		'building_type' => 'defenses',
		'religion' => 'Greek Orthodox'
		]);				
		//182
		DB::table('building_categories')->insert([            
		'building_name' => 'townhouse',
		'building_type' => 'defenses',
		'religion' => 'Greek Orthodox'
		]);				
		//183
		DB::table('building_categories')->insert([            
		'building_name' => 'housebarn',
		'building_type' => 'defenses',
		'religion' => 'Greek Orthodox'
		]);				
		//184
		DB::table('building_categories')->insert([            
		'building_name' => 'bastle house',
		'building_type' => 'defenses',
		'religion' => 'Greek Orthodox'
		]);				
		//185
		DB::table('building_categories')->insert([            
		'building_name' => 'merchant house',
		'building_type' => 'defenses',
		'religion' => 'Greek Orthodox'
		]);		
		//186
		DB::table('building_categories')->insert([            
		'building_name' => 'strong house',
		'building_type' => 'defenses',
		'religion' => 'Greek Orthodox'
		]);				
		//187
		DB::table('building_categories')->insert([            
		'building_name' => 'chivalric house',
		'building_type' => 'defenses',
		'religion' => 'Greek Orthodox'
		]);	
		//188
		DB::table('building_categories')->insert([            
		'building_name' => 'hall house',
		'building_type' => 'defenses',
		'religion' => 'Greek Orthodox'
		]);				
		//189
		DB::table('building_categories')->insert([            
		'building_name' => 'hall keep',
		'building_type' => 'defenses',
		'religion' => 'Greek Orthodox'
		]);		
		//190
		DB::table('building_categories')->insert([            
		'building_name' => 'gatehouse keep',
		'building_type' => 'defenses',
		'religion' => 'Greek Orthodox'
		]);				
		//191
		DB::table('building_categories')->insert([            
		'building_name' => 'motte and bailey castle',
		'building_type' => 'defenses',
		'religion' => 'Greek Orthodox'
		]);				
		//192
		DB::table('building_categories')->insert([            
		'building_name' => 'tower castle',
		'building_type' => 'defenses',
		'religion' => 'Greek Orthodox'
		]);				
		//193
		DB::table('building_categories')->insert([            
		'building_name' => 'courtyard castle',
		'building_type' => 'defenses',
		'religion' => 'Greek Orthodox'
		]);				
		//194
		DB::table('building_categories')->insert([            
		'building_name' => 'z plan castle',
		'building_type' => 'defenses',
		'religion' => 'Greek Orthodox'
		]);		
		//195
		DB::table('building_categories')->insert([            
		'building_name' => 'l plan castle',
		'building_type' => 'defenses',
		'religion' => 'Greek Orthodox'
		]);		
		//196
		DB::table('building_categories')->insert([            
		'building_name' => 'towered castle',
		'building_type' => 'defenses',
		'religion' => 'Greek Orthodox'
		]);		
		//197
		DB::table('building_categories')->insert([            
		'building_name' => 'concentric castle',
		'building_type' => 'defenses',
		'religion' => 'Greek Orthodox'
		]);				
		//198
		DB::table('building_categories')->insert([            
		'building_name' => 'citadel',
		'building_type' => 'defenses',
		'religion' => 'Greek Orthodox'
		]);	
		//199
		DB::table('building_categories')->insert([            
		'building_name' => 'palais',
		'building_type' => 'defenses',
		'religion' => 'Greek Orthodox'
		]);
		
		//Russian Orthodox defenses
		//200
		DB::table('building_categories')->insert([            
		'building_name' => 'cottage',
		'building_type' => 'defenses',
		'religion' => 'Russian Orthodox'
		]);				
		//201
		DB::table('building_categories')->insert([            
		'building_name' => 'townhouse',
		'building_type' => 'defenses',
		'religion' => 'Russian Orthodox'
		]);				
		//202
		DB::table('building_categories')->insert([            
		'building_name' => 'housebarn',
		'building_type' => 'defenses',
		'religion' => 'Russian Orthodox'
		]);				
		//203
		DB::table('building_categories')->insert([            
		'building_name' => 'bastle house',
		'building_type' => 'defenses',
		'religion' => 'Russian Orthodox'
		]);				
		//204
		DB::table('building_categories')->insert([            
		'building_name' => 'merchant house',
		'building_type' => 'defenses',
		'religion' => 'Russian Orthodox'
		]);		
		//205
		DB::table('building_categories')->insert([            
		'building_name' => 'strong house',
		'building_type' => 'defenses',
		'religion' => 'Russian Orthodox'
		]);				
		//206
		DB::table('building_categories')->insert([            
		'building_name' => 'chivalric house',
		'building_type' => 'defenses',
		'religion' => 'Russian Orthodox'
		]);	
		//207
		DB::table('building_categories')->insert([            
		'building_name' => 'hall house',
		'building_type' => 'defenses',
		'religion' => 'Russian Orthodox'
		]);				
		//208
		DB::table('building_categories')->insert([            
		'building_name' => 'hall keep',
		'building_type' => 'defenses',
		'religion' => 'Russian Orthodox'
		]);		
		//209
		DB::table('building_categories')->insert([            
		'building_name' => 'gatehouse keep',
		'building_type' => 'defenses',
		'religion' => 'Russian Orthodox'
		]);				
		//210
		DB::table('building_categories')->insert([            
		'building_name' => 'motte and bailey castle',
		'building_type' => 'defenses',
		'religion' => 'Russian Orthodox'
		]);				
		//211
		DB::table('building_categories')->insert([            
		'building_name' => 'tower castle',
		'building_type' => 'defenses',
		'religion' => 'Russian Orthodox'
		]);				
		//212
		DB::table('building_categories')->insert([            
		'building_name' => 'courtyard castle',
		'building_type' => 'defenses',
		'religion' => 'Russian Orthodox'
		]);				
		//213
		DB::table('building_categories')->insert([            
		'building_name' => 'z plan castle',
		'building_type' => 'defenses',
		'religion' => 'Russian Orthodox'
		]);		
		//214
		DB::table('building_categories')->insert([            
		'building_name' => 'l plan castle',
		'building_type' => 'defenses',
		'religion' => 'Russian Orthodox'
		]);		
		//215
		DB::table('building_categories')->insert([            
		'building_name' => 'towered castle',
		'building_type' => 'defenses',
		'religion' => 'Russian Orthodox'
		]);		
		//216
		DB::table('building_categories')->insert([            
		'building_name' => 'concentric castle',
		'building_type' => 'defenses',
		'religion' => 'Russian Orthodox'
		]);				
		//217
		DB::table('building_categories')->insert([            
		'building_name' => 'citadel',
		'building_type' => 'defenses',
		'religion' => 'Russian Orthodox'
		]);	
		//218
		DB::table('building_categories')->insert([            
		'building_name' => 'palais',
		'building_type' => 'defenses',
		'religion' => 'Russian Orthodox'
		]);
		
		//Muslim defenses
		//219
		DB::table('building_categories')->insert([            
		'building_name' => 'cottage',
		'building_type' => 'defenses',
		'religion' => 'Muslim'
		]);				
		//220
		DB::table('building_categories')->insert([            
		'building_name' => 'townhouse',
		'building_type' => 'defenses',
		'religion' => 'Muslim'
		]);				
		//221
		DB::table('building_categories')->insert([            
		'building_name' => 'mazraea',
		'building_type' => 'defenses',
		'religion' => 'Muslim'
		]);				
		//222
		DB::table('building_categories')->insert([            
		'building_name' => 'qalat',
		'building_type' => 'defenses',
		'religion' => 'Muslim'
		]);				
		//223
		DB::table('building_categories')->insert([            
		'building_name' => 'courtyard house',
		'building_type' => 'defenses',
		'religion' => 'Muslim'
		]);		
		//224
		DB::table('building_categories')->insert([            
		'building_name' => 'strong house',
		'building_type' => 'defenses',
		'religion' => 'Muslim'
		]);				
		//225
		DB::table('building_categories')->insert([            
		'building_name' => 'chivalric house',
		'building_type' => 'defenses',
		'religion' => 'Muslim'
		]);	
		//226
		DB::table('building_categories')->insert([            
		'building_name' => 'hall house',
		'building_type' => 'defenses',
		'religion' => 'Muslim'
		]);				
		//227
		DB::table('building_categories')->insert([            
		'building_name' => 'hall kasbah',
		'building_type' => 'defenses',
		'religion' => 'Muslim'
		]);		
		//228
		DB::table('building_categories')->insert([            
		'building_name' => 'gatehouse kasbah',
		'building_type' => 'defenses',
		'religion' => 'Muslim'
		]);				
		//229
		DB::table('building_categories')->insert([            
		'building_name' => 'motte and bailey ksar',
		'building_type' => 'defenses',
		'religion' => 'Muslim'
		]);				
		//230
		DB::table('building_categories')->insert([            
		'building_name' => 'tower ksar',
		'building_type' => 'defenses',
		'religion' => 'Muslim'
		]);				
		//231
		DB::table('building_categories')->insert([            
		'building_name' => 'courtyard ksar',
		'building_type' => 'defenses',
		'religion' => 'Muslim'
		]);				
		//232
		DB::table('building_categories')->insert([            
		'building_name' => 'z plan ksar',
		'building_type' => 'defenses',
		'religion' => 'Muslim'
		]);		
		//233
		DB::table('building_categories')->insert([            
		'building_name' => 'l plan ksar',
		'building_type' => 'defenses',
		'religion' => 'Muslim'
		]);		
		//234
		DB::table('building_categories')->insert([            
		'building_name' => 'towered ksar',
		'building_type' => 'defenses',
		'religion' => 'Muslim'
		]);		
		//235
		DB::table('building_categories')->insert([            
		'building_name' => 'concentric ksar',
		'building_type' => 'defenses',
		'religion' => 'Muslim'
		]);				
		//236
		DB::table('building_categories')->insert([            
		'building_name' => 'alqasbah',
		'building_type' => 'defenses',
		'religion' => 'Muslim'
		]);	
		//237
		DB::table('building_categories')->insert([            
		'building_name' => 'palais',
		'building_type' => 'defenses',
		'religion' => 'Muslim'
		]);

		//catholic inns
		//238
		DB::table('building_categories')->insert([            
		'building_name' => 'tavern',
		'building_type' => 'hostel',
		'religion' => 'Catholic'
		]);	
		//239
		DB::table('building_categories')->insert([            
		'building_name' => 'inn',
		'building_type' => 'hostel',
		'religion' => 'Catholic'
		]);	
		//240
		DB::table('building_categories')->insert([            
		'building_name' => 'roadside inn',
		'building_type' => 'hostel',
		'religion' => 'Catholic'
		]);	
		
		//serbian orthodox inns
		//241
		DB::table('building_categories')->insert([            
		'building_name' => 'tavern',
		'building_type' => 'hostel',
		'religion' => 'Serbian Orthodox'
		]);	
		//242
		DB::table('building_categories')->insert([            
		'building_name' => 'inn',
		'building_type' => 'hostel',
		'religion' => 'Serbian Orthodox'
		]);	
		//243
		DB::table('building_categories')->insert([            
		'building_name' => 'roadside inn',
		'building_type' => 'hostel',
		'religion' => 'Serbian Orthodox'
		]);	
		
		//greek orthodox inns
		//244
		DB::table('building_categories')->insert([            
		'building_name' => 'tavern',
		'building_type' => 'hostel',
		'religion' => 'Greek Orthodox'
		]);	
		//245
		DB::table('building_categories')->insert([            
		'building_name' => 'inn',
		'building_type' => 'hostel',
		'religion' => 'Greek Orthodox'
		]);	
		//246
		DB::table('building_categories')->insert([            
		'building_name' => 'roadside inn',
		'building_type' => 'hostel',
		'religion' => 'Greek Orthodox'
		]);	
		
		//russian orthodox inns
		//247
		DB::table('building_categories')->insert([            
		'building_name' => 'tavern',
		'building_type' => 'hostel',
		'religion' => 'Russian Orthodox'
		]);	
		//248
		DB::table('building_categories')->insert([            
		'building_name' => 'inn',
		'building_type' => 'hostel',
		'religion' => 'Russian Orthodox'
		]);	
		//249
		DB::table('building_categories')->insert([            
		'building_name' => 'roadside inn',
		'building_type' => 'hostel',
		'religion' => 'Russian Orthodox'
		]);	
		
		//muslim inns
		//250
		DB::table('building_categories')->insert([            
		'building_name' => 'khan',
		'building_type' => 'hostel',
		'religion' => 'Muslim'
		]);	
		//251
		DB::table('building_categories')->insert([            
		'building_name' => 'funduq',
		'building_type' => 'hostel',
		'religion' => 'Muslim'
		]);	
		//252
		DB::table('building_categories')->insert([            
		'building_name' => 'caravanserai',
		'building_type' => 'hostel',
		'religion' => 'Muslim'
		]);	
		
		//common port
		//253
		DB::table('building_categories')->insert([            
		'building_name' => 'port',
		'building_type' => 'port'
		]);	
		//254
		DB::table('building_categories')->insert([            
		'building_name' => 'factory',
		'building_type' => 'port'
		]);	
		//255
		DB::table('building_categories')->insert([            
		'building_name' => 'staple port',
		'building_type' => 'port'
		]);	
		
		//common guild
		//256
		DB::table('building_categories')->insert([            
		'building_name' => 'guild hall',
		'building_type' => 'guild'
		]);	
		
		//catholic commerce
		//257
		DB::table('building_categories')->insert([            
		'building_name' => 'market',
		'building_type' => 'commerce',
		'religion' => 'Catholic'
		]);	
		//258
		DB::table('building_categories')->insert([            
		'building_name' => 'fair',
		'building_type' => 'commerce',
		'religion' => 'Catholic'
		]);	
		
		//serbian orthodox commerce
		//259
		DB::table('building_categories')->insert([            
		'building_name' => 'market',
		'building_type' => 'commerce',
		'religion' => 'Serbian Orthodox'
		]);	
		//260
		DB::table('building_categories')->insert([            
		'building_name' => 'fair',
		'building_type' => 'commerce',
		'religion' => 'Serbian Orthodox'
		]);	
		
		//greek orthodox commerce
		//261
		DB::table('building_categories')->insert([            
		'building_name' => 'market',
		'building_type' => 'commerce',
		'religion' => 'Greek Orthodox'
		]);	
		//262
		DB::table('building_categories')->insert([            
		'building_name' => 'fair',
		'building_type' => 'commerce',
		'religion' => 'Greek Orthodox'
		]);	
		
		//russian orthodox commerce
		//263
		DB::table('building_categories')->insert([            
		'building_name' => 'market',
		'building_type' => 'commerce',
		'religion' => 'Russian Orthodox'
		]);	
		//264
		DB::table('building_categories')->insert([            
		'building_name' => 'fair',
		'building_type' => 'commerce',
		'religion' => 'Russian Orthodox'
		]);	
		
		//muslim commerce
		//265
		DB::table('building_categories')->insert([            
		'building_name' => 'souq',
		'building_type' => 'commerce',
		'religion' => 'Muslim'
		]);	
		//266
		DB::table('building_categories')->insert([            
		'building_name' => 'bazaar',
		'building_type' => 'commerce',
		'religion' => 'Muslim'
		]);	
		
		//common town 
		//267
		DB::table('building_categories')->insert([            
		'building_name' => 'town hall',
		'building_type' => 'town'
		]);			
		//268
		DB::table('building_categories')->insert([            
		'building_name' => 'town gate',
		'building_type' => 'gate'
		]);			
		
		//common entertainment
		//269
		DB::table('building_categories')->insert([            
		'building_name' => 'hunting lodge',
		'building_type' => 'entertainment'
		]);	
		//270
		DB::table('building_categories')->insert([            
		'building_name' => 'tiltyard',
		'building_type' => 'entertainment'
		]);	

		//storage
		//271
		DB::table('building_categories')->insert([            
		'building_name' => 'tithe barn',
		'building_type' => 'storage',
		'religion' => 'Catholic'
		]);
		//272
		DB::table('building_categories')->insert([            
		'building_name' => 'tithe barn',
		'building_type' => 'storage',
		'religion' => 'Greek Orthodox'
		]);	
		//273
		DB::table('building_categories')->insert([            
		'building_name' => 'tithe barn',
		'building_type' => 'storage',
		'religion' => 'Russian Orthodox'
		]);	
		//274
		DB::table('building_categories')->insert([            
		'building_name' => 'tithe barn',
		'building_type' => 'storage',
		'religion' => 'Serbian Orthodox'
		]);	
		//275
		DB::table('building_categories')->insert([            
		'building_name' => 'ghorfa',
		'building_type' => 'storage',
		'religion' => 'Muslim'
		]);
		//manor defenses
		//276
		DB::table('building_categories')->insert([            
		'building_name' => 'gatehouse',
		'building_type' => 'manor'
		]);	
		//277
		DB::table('building_categories')->insert([            
		'building_name' => 'curtain wall',
		'building_type' => 'manor'
		]);	
		//278
		DB::table('building_categories')->insert([            
		'building_name' => 'ringwork',
		'building_type' => 'manor'
		]);	
		//279
		DB::table('building_categories')->insert([            
		'building_name' => 'stables',
		'building_type' => 'manor'
		]);	
		//280
		DB::table('building_categories')->insert([            
		'building_name' => 'watchtower',
		'building_type' => 'manor'
		]);			
		
    }
}
