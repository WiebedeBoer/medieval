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
		//mines
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
		//quarry
		//35
		DB::table('building_categories')->insert([            
		'building_name' => 'quarry',
		'building_type' => 'quarry'
		]);
		//claypit	
		//36
		DB::table('building_categories')->insert([            
		'building_name' => 'clay pit',
		'building_type' => 'pit'
		]);	
		//businesses	
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
		'religion' => '1'
		]);	
		//81
		DB::table('building_categories')->insert([            
		'building_name' => 'chapel',
		'building_type' => 'clergy',
		'religion' => '4'
		]);	
		//82
		DB::table('building_categories')->insert([            
		'building_name' => 'chapel',
		'building_type' => 'clergy',
		'religion' => '3'
		]);	
		//83
		DB::table('building_categories')->insert([            
		'building_name' => 'chapel',
		'building_type' => 'clergy',
		'religion' => '2'
		]);	
		//84
		DB::table('building_categories')->insert([            
		'building_name' => 'musalla',
		'building_type' => 'clergy',
		'religion' => '5'
		]);			
		
		//churches
		//85 catholic
		DB::table('building_categories')->insert([            
		'building_name' => 'church',
		'building_type' => 'clergy',
		'religion' => '1'
		]);	
		//86 greek orthodox
		DB::table('building_categories')->insert([            
		'building_name' => 'church',
		'building_type' => 'clergy',
		'religion' => '4'
		]);	
		//87 serbian orthodox
		DB::table('building_categories')->insert([            
		'building_name' => 'church',
		'building_type' => 'clergy',
		'religion' => '3'
		]);	
		//88 russian orthodox
		DB::table('building_categories')->insert([            
		'building_name' => 'church',
		'building_type' => 'clergy',
		'religion' => '2'
		]);	
		//89
		DB::table('building_categories')->insert([            
		'building_name' => 'mosque',
		'building_type' => 'clergy',
		'religion' => '5'
		]);	
		
		//fortified churches
		//90
		DB::table('building_categories')->insert([            
		'building_name' => 'fortified church',
		'building_type' => 'clergy',
		'religion' => '1'
		]);	
		//91
		DB::table('building_categories')->insert([            
		'building_name' => 'fortified church',
		'building_type' => 'clergy',
		'religion' => '4'
		]);	
		//92
		DB::table('building_categories')->insert([            
		'building_name' => 'fortified church',
		'building_type' => 'clergy',
		'religion' => '3'
		]);	
		//93
		DB::table('building_categories')->insert([            
		'building_name' => 'fortified church',
		'building_type' => 'clergy',
		'religion' => '2'
		]);	
		//94
		DB::table('building_categories')->insert([            
		'building_name' => 'fortified mosque',
		'building_type' => 'clergy',
		'religion' => '5'
		]);			
	
		//fortress churches
		//95
		DB::table('building_categories')->insert([            
		'building_name' => 'church fortress',
		'building_type' => 'clergy',
		'religion' => '1'
		]);	
		//96
		DB::table('building_categories')->insert([            
		'building_name' => 'church fortress',
		'building_type' => 'clergy',
		'religion' => '4'
		]);	
		//97
		DB::table('building_categories')->insert([            
		'building_name' => 'church fortress',
		'building_type' => 'clergy',
		'religion' => '3'
		]);	
		//98
		DB::table('building_categories')->insert([            
		'building_name' => 'church fortress',
		'building_type' => 'clergy',
		'religion' => '2'
		]);	
		//99
		DB::table('building_categories')->insert([            
		'building_name' => 'amsar',
		'building_type' => 'clergy',
		'religion' => '5'
		]);		
		
		//cathedrals
		//100 catholic
		DB::table('building_categories')->insert([            
		'building_name' => 'cathedral',
		'building_type' => 'clergy',
		'religion' => '1'
		]);	
		//101 greek orthodox
		DB::table('building_categories')->insert([            
		'building_name' => 'cathedral',
		'building_type' => 'clergy',
		'religion' => '4'
		]);	
		//102 serbian orthodox
		DB::table('building_categories')->insert([            
		'building_name' => 'cathedral',
		'building_type' => 'clergy',
		'religion' => '3'
		]);	
		//103 russian orthodox
		DB::table('building_categories')->insert([            
		'building_name' => 'cathedral',
		'building_type' => 'clergy',
		'religion' => '2'
		]);	
		//104
		DB::table('building_categories')->insert([            
		'building_name' => 'grand mosque',
		'building_type' => 'clergy',
		'religion' => '5'
		]);	

		//catholic monastic
		//105
		DB::table('building_categories')->insert([            
		'building_name' => 'hermitage',
		'building_type' => 'monastic',
		'religion' => '1'
		]);			
		//106
		DB::table('building_categories')->insert([            
		'building_name' => 'priory',
		'building_type' => 'monastic',
		'religion' => '1'
		]);	
		//107
		DB::table('building_categories')->insert([            
		'building_name' => 'abbey',
		'building_type' => 'monastic',
		'religion' => '1'
		]);	
		//108
		DB::table('building_categories')->insert([            
		'building_name' => 'fortified abbey',
		'building_type' => 'monastic',
		'religion' => '1'
		]);	
		
		//greek orthodox monastic
		//109
		DB::table('building_categories')->insert([            
		'building_name' => 'hermitage',
		'building_type' => 'monastic',
		'religion' => '4'
		]);			
		//110
		DB::table('building_categories')->insert([            
		'building_name' => 'priory',
		'building_type' => 'monastic',
		'religion' => '4'
		]);	
		//111
		DB::table('building_categories')->insert([            
		'building_name' => 'abbey',
		'building_type' => 'monastic',
		'religion' => '4'
		]);	
		//112
		DB::table('building_categories')->insert([            
		'building_name' => 'fortified abbey',
		'building_type' => 'monastic',
		'religion' => '4'
		]);	
		
		//russian orthodox monastic
		//113
		DB::table('building_categories')->insert([            
		'building_name' => 'hermitage',
		'building_type' => 'monastic',
		'religion' => '3'
		]);			
		//114
		DB::table('building_categories')->insert([            
		'building_name' => 'priory',
		'building_type' => 'monastic',
		'religion' => '3'
		]);	
		//115
		DB::table('building_categories')->insert([            
		'building_name' => 'abbey',
		'building_type' => 'monastic',
		'religion' => '3'
		]);	
		//116
		DB::table('building_categories')->insert([            
		'building_name' => 'fortified abbey',
		'building_type' => 'monastic',
		'religion' => '3'
		]);			

		//serbian orthodox monastic
		//117
		DB::table('building_categories')->insert([            
		'building_name' => 'hermitage',
		'building_type' => 'monastic',
		'religion' => '2'
		]);			
		//118
		DB::table('building_categories')->insert([            
		'building_name' => 'priory',
		'building_type' => 'monastic',
		'religion' => '2'
		]);	
		//119
		DB::table('building_categories')->insert([            
		'building_name' => 'abbey',
		'building_type' => 'monastic',
		'religion' => '2'
		]);	
		//120
		DB::table('building_categories')->insert([            
		'building_name' => 'fortified abbey',
		'building_type' => 'monastic',
		'religion' => '2'
		]);	
		
		//muslim sufi
		//121
		DB::table('building_categories')->insert([            
		'building_name' => 'hermitage',
		'building_type' => 'monastic',
		'religion' => '5'
		]);		
		//122
		DB::table('building_categories')->insert([            
		'building_name' => 'dayr',
		'building_type' => 'monastic',
		'religion' => '5'
		]);
		//123
		DB::table('building_categories')->insert([            
		'building_name' => 'khanqah',
		'building_type' => 'monastic',
		'religion' => '5'
		]);
		//124
		DB::table('building_categories')->insert([            
		'building_name' => 'ribat',
		'building_type' => 'monastic',
		'religion' => '5'
		]);
		
		//crusader
		//125
		DB::table('building_categories')->insert([            
		'building_name' => 'chapterhouse',
		'building_type' => 'crusader',
		'religion' => '1'
		]);	

		//glebe
		//126
		DB::table('building_categories')->insert([            
		'building_name' => 'rectory',
		'building_type' => 'clergy',
		'religion' => '1'
		]);
		//127
		DB::table('building_categories')->insert([            
		'building_name' => 'rectory',
		'building_type' => 'clergy',
		'religion' => '4'
		]);	
		//128
		DB::table('building_categories')->insert([            
		'building_name' => 'rectory',
		'building_type' => 'clergy',
		'religion' => '3'
		]);	
		//129
		DB::table('building_categories')->insert([            
		'building_name' => 'rectory',
		'building_type' => 'clergy',
		'religion' => '2'
		]);			
		//130
		DB::table('building_categories')->insert([            
		'building_name' => 'manzil',
		'building_type' => 'clergy',
		'religion' => '5'
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
		'religion' => '1'
		]);
		//133
		DB::table('building_categories')->insert([            
		'building_name' => 'university',
		'building_type' => 'education',
		'religion' => '4'
		]);	
		//134
		DB::table('building_categories')->insert([            
		'building_name' => 'university',
		'building_type' => 'education',
		'religion' => '3'
		]);	
		//135
		DB::table('building_categories')->insert([            
		'building_name' => 'university',
		'building_type' => 'education',
		'religion' => '2'
		]);	
		//136
		DB::table('building_categories')->insert([            
		'building_name' => 'madrassa',
		'building_type' => 'education',
		'religion' => '5'
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
		'religion' => '1'
		]);
		//139
		DB::table('building_categories')->insert([            
		'building_name' => 'hospital',
		'building_type' => 'health',
		'religion' => '4'
		]);	
		//140
		DB::table('building_categories')->insert([            
		'building_name' => 'hospital',
		'building_type' => 'health',
		'religion' => '3'
		]);	
		//141
		DB::table('building_categories')->insert([            
		'building_name' => 'hospital',
		'building_type' => 'health',
		'religion' => '2'
		]);	
		//142
		DB::table('building_categories')->insert([            
		'building_name' => 'khastakhaneh',
		'building_type' => 'health',
		'religion' => '5'
		]);

		//catholic defenses
		//143
		DB::table('building_categories')->insert([            
		'building_name' => 'cottage',
		'building_type' => 'defenses',
		'religion' => '1'
		]);				
		//144
		DB::table('building_categories')->insert([            
		'building_name' => 'townhouse',
		'building_type' => 'defenses',
		'religion' => '1'
		]);				
		//145
		DB::table('building_categories')->insert([            
		'building_name' => 'housebarn',
		'building_type' => 'defenses',
		'religion' => '1'
		]);				
		//146
		DB::table('building_categories')->insert([            
		'building_name' => 'bastle house',
		'building_type' => 'defenses',
		'religion' => '1'
		]);				
		//147
		DB::table('building_categories')->insert([            
		'building_name' => 'merchant house',
		'building_type' => 'defenses',
		'religion' => '1'
		]);		
		//148
		DB::table('building_categories')->insert([            
		'building_name' => 'strong house',
		'building_type' => 'defenses',
		'religion' => '1'
		]);				
		//149
		DB::table('building_categories')->insert([            
		'building_name' => 'chivalric house',
		'building_type' => 'defenses',
		'religion' => '1'
		]);	
		//150
		DB::table('building_categories')->insert([            
		'building_name' => 'hall house',
		'building_type' => 'defenses',
		'religion' => '1'
		]);				
		//151
		DB::table('building_categories')->insert([            
		'building_name' => 'hall keep',
		'building_type' => 'defenses',
		'religion' => '1'
		]);		
		//152
		DB::table('building_categories')->insert([            
		'building_name' => 'gatehouse keep',
		'building_type' => 'defenses',
		'religion' => '1'
		]);				
		//153
		DB::table('building_categories')->insert([            
		'building_name' => 'motte and bailey castle',
		'building_type' => 'defenses',
		'religion' => '1'
		]);				
		//154
		DB::table('building_categories')->insert([            
		'building_name' => 'tower castle',
		'building_type' => 'defenses',
		'religion' => '1'
		]);				
		//155
		DB::table('building_categories')->insert([            
		'building_name' => 'courtyard castle',
		'building_type' => 'defenses',
		'religion' => '1'
		]);				
		//156
		DB::table('building_categories')->insert([            
		'building_name' => 'z plan castle',
		'building_type' => 'defenses',
		'religion' => '1'
		]);		
		//157
		DB::table('building_categories')->insert([            
		'building_name' => 'l plan castle',
		'building_type' => 'defenses',
		'religion' => '1'
		]);		
		//158
		DB::table('building_categories')->insert([            
		'building_name' => 'towered castle',
		'building_type' => 'defenses',
		'religion' => '1'
		]);		
		//159
		DB::table('building_categories')->insert([            
		'building_name' => 'concentric castle',
		'building_type' => 'defenses',
		'religion' => '1'
		]);				
		//160
		DB::table('building_categories')->insert([            
		'building_name' => 'citadel',
		'building_type' => 'defenses',
		'religion' => '1'
		]);	
		//161
		DB::table('building_categories')->insert([            
		'building_name' => 'palais',
		'building_type' => 'defenses',
		'religion' => '1'
		]);	
		
		//Serbian Orthodox defenses
		//162
		DB::table('building_categories')->insert([            
		'building_name' => 'cottage',
		'building_type' => 'defenses',
		'religion' => '2'
		]);				
		//163
		DB::table('building_categories')->insert([            
		'building_name' => 'townhouse',
		'building_type' => 'defenses',
		'religion' => '2'
		]);				
		//164
		DB::table('building_categories')->insert([            
		'building_name' => 'housebarn',
		'building_type' => 'defenses',
		'religion' => '2'
		]);				
		//165
		DB::table('building_categories')->insert([            
		'building_name' => 'bastle house',
		'building_type' => 'defenses',
		'religion' => '2'
		]);				
		//166
		DB::table('building_categories')->insert([            
		'building_name' => 'merchant house',
		'building_type' => 'defenses',
		'religion' => '2'
		]);		
		//167
		DB::table('building_categories')->insert([            
		'building_name' => 'strong house',
		'building_type' => 'defenses',
		'religion' => '2'
		]);				
		//168
		DB::table('building_categories')->insert([            
		'building_name' => 'chivalric house',
		'building_type' => 'defenses',
		'religion' => '2'
		]);	
		//169
		DB::table('building_categories')->insert([            
		'building_name' => 'hall house',
		'building_type' => 'defenses',
		'religion' => '2'
		]);				
		//170
		DB::table('building_categories')->insert([            
		'building_name' => 'hall keep',
		'building_type' => 'defenses',
		'religion' => '2'
		]);		
		//171
		DB::table('building_categories')->insert([            
		'building_name' => 'gatehouse keep',
		'building_type' => 'defenses',
		'religion' => '2'
		]);				
		//172
		DB::table('building_categories')->insert([            
		'building_name' => 'motte and bailey castle',
		'building_type' => 'defenses',
		'religion' => '2'
		]);				
		//173
		DB::table('building_categories')->insert([            
		'building_name' => 'tower castle',
		'building_type' => 'defenses',
		'religion' => '2'
		]);				
		//174
		DB::table('building_categories')->insert([            
		'building_name' => 'courtyard castle',
		'building_type' => 'defenses',
		'religion' => '2'
		]);				
		//175
		DB::table('building_categories')->insert([            
		'building_name' => 'z plan castle',
		'building_type' => 'defenses',
		'religion' => '2'
		]);		
		//176
		DB::table('building_categories')->insert([            
		'building_name' => 'l plan castle',
		'building_type' => 'defenses',
		'religion' => '2'
		]);		
		//177
		DB::table('building_categories')->insert([            
		'building_name' => 'towered castle',
		'building_type' => 'defenses',
		'religion' => '2'
		]);		
		//178
		DB::table('building_categories')->insert([            
		'building_name' => 'concentric castle',
		'building_type' => 'defenses',
		'religion' => '2'
		]);				
		//179
		DB::table('building_categories')->insert([            
		'building_name' => 'citadel',
		'building_type' => 'defenses',
		'religion' => '2'
		]);	
		//180
		DB::table('building_categories')->insert([            
		'building_name' => 'palais',
		'building_type' => 'defenses',
		'religion' => '2'
		]);
		
		//Greek Orthodox defenses
		//181
		DB::table('building_categories')->insert([            
		'building_name' => 'cottage',
		'building_type' => 'defenses',
		'religion' => '4'
		]);				
		//182
		DB::table('building_categories')->insert([            
		'building_name' => 'townhouse',
		'building_type' => 'defenses',
		'religion' => '4'
		]);				
		//183
		DB::table('building_categories')->insert([            
		'building_name' => 'housebarn',
		'building_type' => 'defenses',
		'religion' => '4'
		]);				
		//184
		DB::table('building_categories')->insert([            
		'building_name' => 'bastle house',
		'building_type' => 'defenses',
		'religion' => '4'
		]);				
		//185
		DB::table('building_categories')->insert([            
		'building_name' => 'merchant house',
		'building_type' => 'defenses',
		'religion' => '4'
		]);		
		//186
		DB::table('building_categories')->insert([            
		'building_name' => 'strong house',
		'building_type' => 'defenses',
		'religion' => '4'
		]);				
		//187
		DB::table('building_categories')->insert([            
		'building_name' => 'chivalric house',
		'building_type' => 'defenses',
		'religion' => '4'
		]);	
		//188
		DB::table('building_categories')->insert([            
		'building_name' => 'hall house',
		'building_type' => 'defenses',
		'religion' => '4'
		]);				
		//189
		DB::table('building_categories')->insert([            
		'building_name' => 'hall keep',
		'building_type' => 'defenses',
		'religion' => '4'
		]);		
		//190
		DB::table('building_categories')->insert([            
		'building_name' => 'gatehouse keep',
		'building_type' => 'defenses',
		'religion' => '4'
		]);				
		//191
		DB::table('building_categories')->insert([            
		'building_name' => 'motte and bailey castle',
		'building_type' => 'defenses',
		'religion' => '4'
		]);				
		//192
		DB::table('building_categories')->insert([            
		'building_name' => 'tower castle',
		'building_type' => 'defenses',
		'religion' => '4'
		]);				
		//193
		DB::table('building_categories')->insert([            
		'building_name' => 'courtyard castle',
		'building_type' => 'defenses',
		'religion' => '4'
		]);				
		//194
		DB::table('building_categories')->insert([            
		'building_name' => 'z plan castle',
		'building_type' => 'defenses',
		'religion' => '4'
		]);		
		//195
		DB::table('building_categories')->insert([            
		'building_name' => 'l plan castle',
		'building_type' => 'defenses',
		'religion' => '4'
		]);		
		//196
		DB::table('building_categories')->insert([            
		'building_name' => 'towered castle',
		'building_type' => 'defenses',
		'religion' => '4'
		]);		
		//197
		DB::table('building_categories')->insert([            
		'building_name' => 'concentric castle',
		'building_type' => 'defenses',
		'religion' => '4'
		]);				
		//198
		DB::table('building_categories')->insert([            
		'building_name' => 'citadel',
		'building_type' => 'defenses',
		'religion' => '4'
		]);	
		//199
		DB::table('building_categories')->insert([            
		'building_name' => 'palais',
		'building_type' => 'defenses',
		'religion' => '4'
		]);
		
		//Russian Orthodox defenses
		//200
		DB::table('building_categories')->insert([            
		'building_name' => 'cottage',
		'building_type' => 'defenses',
		'religion' => '3'
		]);				
		//201
		DB::table('building_categories')->insert([            
		'building_name' => 'townhouse',
		'building_type' => 'defenses',
		'religion' => '3'
		]);				
		//202
		DB::table('building_categories')->insert([            
		'building_name' => 'housebarn',
		'building_type' => 'defenses',
		'religion' => '3'
		]);				
		//203
		DB::table('building_categories')->insert([            
		'building_name' => 'bastle house',
		'building_type' => 'defenses',
		'religion' => '3'
		]);				
		//204
		DB::table('building_categories')->insert([            
		'building_name' => 'merchant house',
		'building_type' => 'defenses',
		'religion' => '3'
		]);		
		//205
		DB::table('building_categories')->insert([            
		'building_name' => 'strong house',
		'building_type' => 'defenses',
		'religion' => '3'
		]);				
		//206
		DB::table('building_categories')->insert([            
		'building_name' => 'chivalric house',
		'building_type' => 'defenses',
		'religion' => '3'
		]);	
		//207
		DB::table('building_categories')->insert([            
		'building_name' => 'hall house',
		'building_type' => 'defenses',
		'religion' => '3'
		]);				
		//208
		DB::table('building_categories')->insert([            
		'building_name' => 'hall keep',
		'building_type' => 'defenses',
		'religion' => '3'
		]);		
		//209
		DB::table('building_categories')->insert([            
		'building_name' => 'gatehouse keep',
		'building_type' => 'defenses',
		'religion' => '3'
		]);				
		//210
		DB::table('building_categories')->insert([            
		'building_name' => 'motte and bailey castle',
		'building_type' => 'defenses',
		'religion' => '3'
		]);				
		//211
		DB::table('building_categories')->insert([            
		'building_name' => 'tower castle',
		'building_type' => 'defenses',
		'religion' => '3'
		]);				
		//212
		DB::table('building_categories')->insert([            
		'building_name' => 'courtyard castle',
		'building_type' => 'defenses',
		'religion' => '3'
		]);				
		//213
		DB::table('building_categories')->insert([            
		'building_name' => 'z plan castle',
		'building_type' => 'defenses',
		'religion' => '3'
		]);		
		//214
		DB::table('building_categories')->insert([            
		'building_name' => 'l plan castle',
		'building_type' => 'defenses',
		'religion' => '3'
		]);		
		//215
		DB::table('building_categories')->insert([            
		'building_name' => 'towered castle',
		'building_type' => 'defenses',
		'religion' => '3'
		]);		
		//216
		DB::table('building_categories')->insert([            
		'building_name' => 'concentric castle',
		'building_type' => 'defenses',
		'religion' => '3'
		]);				
		//217
		DB::table('building_categories')->insert([            
		'building_name' => 'citadel',
		'building_type' => 'defenses',
		'religion' => '3'
		]);	
		//218
		DB::table('building_categories')->insert([            
		'building_name' => 'palais',
		'building_type' => 'defenses',
		'religion' => '3'
		]);
		
		//Muslim defenses
		//219
		DB::table('building_categories')->insert([            
		'building_name' => 'cottage',
		'building_type' => 'defenses',
		'religion' => '5'
		]);				
		//220
		DB::table('building_categories')->insert([            
		'building_name' => 'townhouse',
		'building_type' => 'defenses',
		'religion' => '5'
		]);				
		//221
		DB::table('building_categories')->insert([            
		'building_name' => 'mazraea',
		'building_type' => 'defenses',
		'religion' => '5'
		]);				
		//222
		DB::table('building_categories')->insert([            
		'building_name' => 'qalat',
		'building_type' => 'defenses',
		'religion' => '5'
		]);				
		//223
		DB::table('building_categories')->insert([            
		'building_name' => 'courtyard house',
		'building_type' => 'defenses',
		'religion' => '5'
		]);		
		//224
		DB::table('building_categories')->insert([            
		'building_name' => 'strong house',
		'building_type' => 'defenses',
		'religion' => '5'
		]);				
		//225
		DB::table('building_categories')->insert([            
		'building_name' => 'chivalric house',
		'building_type' => 'defenses',
		'religion' => '5'
		]);	
		//226
		DB::table('building_categories')->insert([            
		'building_name' => 'hall house',
		'building_type' => 'defenses',
		'religion' => '5'
		]);				
		//227
		DB::table('building_categories')->insert([            
		'building_name' => 'hall kasbah',
		'building_type' => 'defenses',
		'religion' => '5'
		]);		
		//228
		DB::table('building_categories')->insert([            
		'building_name' => 'gatehouse kasbah',
		'building_type' => 'defenses',
		'religion' => '5'
		]);				
		//229
		DB::table('building_categories')->insert([            
		'building_name' => 'motte and bailey ksar',
		'building_type' => 'defenses',
		'religion' => '5'
		]);				
		//230
		DB::table('building_categories')->insert([            
		'building_name' => 'tower ksar',
		'building_type' => 'defenses',
		'religion' => '5'
		]);				
		//231
		DB::table('building_categories')->insert([            
		'building_name' => 'courtyard ksar',
		'building_type' => 'defenses',
		'religion' => '5'
		]);				
		//232
		DB::table('building_categories')->insert([            
		'building_name' => 'z plan ksar',
		'building_type' => 'defenses',
		'religion' => '5'
		]);		
		//233
		DB::table('building_categories')->insert([            
		'building_name' => 'l plan ksar',
		'building_type' => 'defenses',
		'religion' => '5'
		]);		
		//234
		DB::table('building_categories')->insert([            
		'building_name' => 'towered ksar',
		'building_type' => 'defenses',
		'religion' => '5'
		]);		
		//235
		DB::table('building_categories')->insert([            
		'building_name' => 'concentric ksar',
		'building_type' => 'defenses',
		'religion' => '5'
		]);				
		//236
		DB::table('building_categories')->insert([            
		'building_name' => 'alqasbah',
		'building_type' => 'defenses',
		'religion' => '5'
		]);	
		//237
		DB::table('building_categories')->insert([            
		'building_name' => 'palais',
		'building_type' => 'defenses',
		'religion' => '5'
		]);

		//catholic inns
		//238
		DB::table('building_categories')->insert([            
		'building_name' => 'tavern',
		'building_type' => 'hostel',
		'religion' => '1'
		]);	
		//239
		DB::table('building_categories')->insert([            
		'building_name' => 'inn',
		'building_type' => 'hostel',
		'religion' => '1'
		]);	
		//240
		DB::table('building_categories')->insert([            
		'building_name' => 'roadside inn',
		'building_type' => 'hostel',
		'religion' => '1'
		]);	
		
		//serbian orthodox inns
		//241
		DB::table('building_categories')->insert([            
		'building_name' => 'tavern',
		'building_type' => 'hostel',
		'religion' => '2'
		]);	
		//242
		DB::table('building_categories')->insert([            
		'building_name' => 'inn',
		'building_type' => 'hostel',
		'religion' => '2'
		]);	
		//243
		DB::table('building_categories')->insert([            
		'building_name' => 'roadside inn',
		'building_type' => 'hostel',
		'religion' => '2'
		]);	
		
		//greek orthodox inns
		//244
		DB::table('building_categories')->insert([            
		'building_name' => 'tavern',
		'building_type' => 'hostel',
		'religion' => '4'
		]);	
		//245
		DB::table('building_categories')->insert([            
		'building_name' => 'inn',
		'building_type' => 'hostel',
		'religion' => '4'
		]);	
		//246
		DB::table('building_categories')->insert([            
		'building_name' => 'roadside inn',
		'building_type' => 'hostel',
		'religion' => '4'
		]);	
		
		//russian orthodox inns
		//247
		DB::table('building_categories')->insert([            
		'building_name' => 'tavern',
		'building_type' => 'hostel',
		'religion' => '3'
		]);	
		//248
		DB::table('building_categories')->insert([            
		'building_name' => 'inn',
		'building_type' => 'hostel',
		'religion' => '3'
		]);	
		//249
		DB::table('building_categories')->insert([            
		'building_name' => 'roadside inn',
		'building_type' => 'hostel',
		'religion' => '3'
		]);	
		
		//muslim inns
		//250
		DB::table('building_categories')->insert([            
		'building_name' => 'khan',
		'building_type' => 'hostel',
		'religion' => '5'
		]);	
		//251
		DB::table('building_categories')->insert([            
		'building_name' => 'funduq',
		'building_type' => 'hostel',
		'religion' => '5'
		]);	
		//252
		DB::table('building_categories')->insert([            
		'building_name' => 'caravanserai',
		'building_type' => 'hostel',
		'religion' => '5'
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
		'religion' => '1'
		]);	
		//258
		DB::table('building_categories')->insert([            
		'building_name' => 'fair',
		'building_type' => 'commerce',
		'religion' => '1'
		]);	
		
		//serbian orthodox commerce
		//259
		DB::table('building_categories')->insert([            
		'building_name' => 'market',
		'building_type' => 'commerce',
		'religion' => '2'
		]);	
		//260
		DB::table('building_categories')->insert([            
		'building_name' => 'fair',
		'building_type' => 'commerce',
		'religion' => '2'
		]);	
		
		//greek orthodox commerce
		//261
		DB::table('building_categories')->insert([            
		'building_name' => 'market',
		'building_type' => 'commerce',
		'religion' => '4'
		]);	
		//262
		DB::table('building_categories')->insert([            
		'building_name' => 'fair',
		'building_type' => 'commerce',
		'religion' => '4'
		]);	
		
		//russian orthodox commerce
		//263
		DB::table('building_categories')->insert([            
		'building_name' => 'market',
		'building_type' => 'commerce',
		'religion' => '3'
		]);	
		//264
		DB::table('building_categories')->insert([            
		'building_name' => 'fair',
		'building_type' => 'commerce',
		'religion' => '3'
		]);	
		
		//muslim commerce
		//265
		DB::table('building_categories')->insert([            
		'building_name' => 'souq',
		'building_type' => 'commerce',
		'religion' => '5'
		]);	
		//266
		DB::table('building_categories')->insert([            
		'building_name' => 'bazaar',
		'building_type' => 'commerce',
		'religion' => '5'
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
		'religion' => '1'
		]);
		//272
		DB::table('building_categories')->insert([            
		'building_name' => 'tithe barn',
		'building_type' => 'storage',
		'religion' => '4'
		]);	
		//273
		DB::table('building_categories')->insert([            
		'building_name' => 'tithe barn',
		'building_type' => 'storage',
		'religion' => '3'
		]);	
		//274
		DB::table('building_categories')->insert([            
		'building_name' => 'tithe barn',
		'building_type' => 'storage',
		'religion' => '2'
		]);	
		//275
		DB::table('building_categories')->insert([            
		'building_name' => 'ghorfa',
		'building_type' => 'storage',
		'religion' => '5'
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
