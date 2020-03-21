<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CultureSeeder extends Seeder
{
	//cultures
    public function run()
    {
//1        
DB::table('cultures')->insert([            
'culture_name' => 'Danish',	
'warrior_culture' => 'Scandinavian',
'chivalry_culture' => 'Nordic',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1500_dizzi_jig'	         
]); 
//2
DB::table('cultures')->insert([            
'culture_name' => 'Swedish',	
'warrior_culture' => 'Scandinavian',
'chivalry_culture' => 'Nordic',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1500_dizzi_jig'	         
]); 
//3
DB::table('cultures')->insert([            
'culture_name' => 'Norwegian',	
'warrior_culture' => 'Scandinavian',
'chivalry_culture' => 'Nordic',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1500_dizzi_jig'	         
]); 
//4
DB::table('cultures')->insert([            
'culture_name' => 'Frisian',	
'warrior_culture' => 'German',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1400_la_suite_meurtriere'	         
]);
//5
DB::table('cultures')->insert([            
'culture_name' => 'Franconian',	
'warrior_culture' => 'German',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1400_la_suite_meurtriere'	         
]); 
//6
DB::table('cultures')->insert([            
'culture_name' => 'Saxon',	
'warrior_culture' => 'German',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1400_la_suite_meurtriere'	         
]); 
//7
DB::table('cultures')->insert([            
'culture_name' => 'Bavarian',	
'warrior_culture' => 'German',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1400_la_suite_meurtriere'	         
]); 
//8
DB::table('cultures')->insert([            
'culture_name' => 'Swabian',	
'warrior_culture' => 'German',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1400_la_suite_meurtriere'	         
]); 
//9
DB::table('cultures')->insert([            
'culture_name' => 'Carinthian',	
'warrior_culture' => 'German',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1400_la_suite_meurtriere'	         
]); 
//10
DB::table('cultures')->insert([            
'culture_name' => 'Flemish',	
'warrior_culture' => 'German',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1400_la_suite_meurtriere'	         
]); 
//11
DB::table('cultures')->insert([            
'culture_name' => 'Bohemian',	
'warrior_culture' => 'German',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1400_la_suite_meurtriere'	         
]); 
//12
DB::table('cultures')->insert([            
'culture_name' => 'Lombard',	
'warrior_culture' => 'Italian',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1400_la_suite_meurtriere'	         
]); 
//13
DB::table('cultures')->insert([            
'culture_name' => 'Tuscan',	
'warrior_culture' => 'Italian',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1400_la_suite_meurtriere'	         
]); 
//14
DB::table('cultures')->insert([            
'culture_name' => 'Frankish',	
'warrior_culture' => 'Frankish',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1300_virelai_Dame_Jolie'	         
]);
//15
DB::table('cultures')->insert([            
'culture_name' => 'Arpitan',	
'warrior_culture' => 'Frankish',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1300_virelai_Dame_Jolie'	         
]);  
//16
DB::table('cultures')->insert([            
'culture_name' => 'Occitan',	
'warrior_culture' => 'Frankish',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1100_troubadour_A_Chanter_M_er'	         
]);  
//17
DB::table('cultures')->insert([            
'culture_name' => 'Breton',	
'warrior_culture' => 'Frankish',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1300_virelai_Dame_Jolie'	         
]); 
//18
DB::table('cultures')->insert([            
'culture_name' => 'English',	
'warrior_culture' => 'Anglo-Saxon',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1300_scarborough_fair'	         
]);
//19
DB::table('cultures')->insert([            
'culture_name' => 'Welsh',	
'warrior_culture' => 'Celtic',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1500_morrisons_jig'	         
]); 
//20
DB::table('cultures')->insert([            
'culture_name' => 'Scottish',	
'warrior_culture' => 'Celtic',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1500_morrisons_jig'	         
]); 
//21
DB::table('cultures')->insert([            
'culture_name' => 'Pictish',	
'warrior_culture' => 'Celtic',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1500_morrisons_jig'	         
]); 
//22
DB::table('cultures')->insert([            
'culture_name' => 'Irish',	
'warrior_culture' => 'Celtic',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1500_morrisons_jig'	         
]); 
//23
DB::table('cultures')->insert([            
'culture_name' => 'Neapolitan',	
'warrior_culture' => 'Italian',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1300_saltarello'	         
]);  
//24
DB::table('cultures')->insert([            
'culture_name' => 'Sardinian',	
'warrior_culture' => 'Italian',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1300_saltarello'	         
]); 
//25
DB::table('cultures')->insert([            
'culture_name' => 'Sicilian',	
'warrior_culture' => 'Italian',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1300_saltarello'	         
]);  
//26
DB::table('cultures')->insert([            
'culture_name' => 'Catalan',	
'warrior_culture' => 'Spanish',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1200_ductia_Alfonso_el_Sabio'	         
]); 
//27
DB::table('cultures')->insert([            
'culture_name' => 'Aragonese',	
'warrior_culture' => 'Spanish',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1200_ductia_Alfonso_el_Sabio'	         
]); 
//28
DB::table('cultures')->insert([            
'culture_name' => 'Navarrese',	
'warrior_culture' => 'Spanish',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1200_ductia_Alfonso_el_Sabio'	         
]); 
//29
DB::table('cultures')->insert([            
'culture_name' => 'Castillian',	
'warrior_culture' => 'Spanish',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1200_ductia_Alfonso_el_Sabio'	         
]); 
//30
DB::table('cultures')->insert([            
'culture_name' => 'Leonese',	
'warrior_culture' => 'Spanish',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1200_ductia_Alfonso_el_Sabio'	         
]); 
//31
DB::table('cultures')->insert([            
'culture_name' => 'Galician',	
'warrior_culture' => 'Spanish',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1200_ductia_Alfonso_el_Sabio'	         
]); 
//32
DB::table('cultures')->insert([            
'culture_name' => 'Portuguese',	
'warrior_culture' => 'Spanish',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1200_ductia_Alfonso_el_Sabio'	         
]);   
//33
DB::table('cultures')->insert([            
'culture_name' => 'Livonian',	
'warrior_culture' => 'German',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1200_minnesang_Palastinesong'	         
]); 
//34
DB::table('cultures')->insert([            
'culture_name' => 'Prussian',	
'warrior_culture' => 'German',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1200_minnesang_Palastinesong'	         
]);          
//35
DB::table('cultures')->insert([            
'culture_name' => 'Polish',	
'warrior_culture' => 'Polish',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1500_dizzi_jig'	         
]); 
//36
DB::table('cultures')->insert([            
'culture_name' => 'Lithuanian',	
'warrior_culture' => 'Polish',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1500_dizzi_jig'		         
]); 
//37
DB::table('cultures')->insert([            
'culture_name' => 'Hungarian',	
'warrior_culture' => 'Hungarian',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1400_la_suite_meurtriere'	         
]); 
//38
DB::table('cultures')->insert([            
'culture_name' => 'Croatian',	
'warrior_culture' => 'Croatian',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1400_la_suite_meurtriere'	         
]); 
//39
DB::table('cultures')->insert([            
'culture_name' => 'Serbian',	
'warrior_culture' => 'Balkan',
'chivalry_culture' => 'Eastern',	
'manorial_culture' => 'Serbian Orthodox',
'commercial_culture' => 'Western',
'troubadour' => '1000_gregorian_Byzantine'	         
]); 
//40
DB::table('cultures')->insert([            
'culture_name' => 'Bulgarian',	
'warrior_culture' => 'Balkan',
'chivalry_culture' => 'Eastern',	
'manorial_culture' => 'Serbian Orthodox',
'commercial_culture' => 'Western',
'troubadour' => '1000_gregorian_Byzantine'	         
]);
//41
DB::table('cultures')->insert([            
'culture_name' => 'Wallachian',	
'warrior_culture' => 'Balkan',
'chivalry_culture' => 'Eastern',	
'manorial_culture' => 'Serbian Orthodox',
'commercial_culture' => 'Western',
'troubadour' => '1000_gregorian_Byzantine'	         
]);
//42
DB::table('cultures')->insert([            
'culture_name' => 'Russian',	
'warrior_culture' => 'Kievan Rus',
'chivalry_culture' => 'Steppe',	
'manorial_culture' => 'Russian Orthodox',
'commercial_culture' => 'Western',
'troubadour' => '1500_russian_winter'	         
]);
//43
DB::table('cultures')->insert([            
'culture_name' => 'Byzantine',	
'warrior_culture' => 'Byzantine',
'chivalry_culture' => 'Eastern',	
'manorial_culture' => 'Greek Orthodox',
'commercial_culture' => 'Western',
'troubadour' => '1000_gregorian_Byzantine'	         
]);
//44
DB::table('cultures')->insert([            
'culture_name' => 'Georgian',	
'warrior_culture' => 'Byzantine',
'chivalry_culture' => 'Eastern',	
'manorial_culture' => 'Greek Orthodox',
'commercial_culture' => 'Western',
'troubadour' => '1000_gregorian_Byzantine'	         
]);
//45
DB::table('cultures')->insert([            
'culture_name' => 'Armenian',	
'warrior_culture' => 'Byzantine',
'chivalry_culture' => 'Eastern',	
'manorial_culture' => 'Greek Orthodox',
'commercial_culture' => 'Western',
'troubadour' => '1000_gregorian_Byzantine'	         
]);
//46
DB::table('cultures')->insert([            
'culture_name' => 'Andalucian',	
'warrior_culture' => 'Arabic',
'chivalry_culture' => 'Arabic',	
'manorial_culture' => 'Muslim',
'commercial_culture' => 'Oriental',
'troubadour' => '1200_tarab_andalusi'	         
]);
//47
DB::table('cultures')->insert([            
'culture_name' => 'Mashriq',	
'warrior_culture' => 'Arabic',
'chivalry_culture' => 'Arabic',	
'manorial_culture' => 'Muslim',
'commercial_culture' => 'Oriental',
'troubadour' => '1000_maqam_rast_Shuruq'	         
]);
//48
DB::table('cultures')->insert([            
'culture_name' => 'Nadj',	
'warrior_culture' => 'Arabic',
'chivalry_culture' => 'Arabic',	
'manorial_culture' => 'Muslim',
'commercial_culture' => 'Oriental',
'troubadour' => '1000_maqam_rast_Shuruq'	         
]);
//49
DB::table('cultures')->insert([            
'culture_name' => 'Hejaz',	
'warrior_culture' => 'Arabic',
'chivalry_culture' => 'Arabic',	
'manorial_culture' => 'Muslim',
'commercial_culture' => 'Oriental',
'troubadour' => '1000_maqam_rast_Shuruq'	         
]);
//50
DB::table('cultures')->insert([            
'culture_name' => 'Misr',	
'warrior_culture' => 'Arabic',
'chivalry_culture' => 'Arabic',	
'manorial_culture' => 'Muslim',
'commercial_culture' => 'Oriental',
'troubadour' => '1000_maqam_rast_Shuruq'	         
]);
//51
DB::table('cultures')->insert([            
'culture_name' => 'Ifriqiya',	
'warrior_culture' => 'Arabic',
'chivalry_culture' => 'Arabic',	
'manorial_culture' => 'Muslim',
'commercial_culture' => 'Oriental',
'troubadour' => '1000_maqam_rast_Shuruq'	         
]);
//52
DB::table('cultures')->insert([            
'culture_name' => 'Maghreb',	
'warrior_culture' => 'Arabic',
'chivalry_culture' => 'Arabic',	
'manorial_culture' => 'Muslim',
'commercial_culture' => 'Oriental',
'troubadour' => '1000_maqam_rast_Shuruq'	         
]);
//53
DB::table('cultures')->insert([            
'culture_name' => 'Gharb',	
'warrior_culture' => 'Arabic',
'chivalry_culture' => 'Arabic',	
'manorial_culture' => 'Muslim',
'commercial_culture' => 'Oriental',
'troubadour' => '1200_tarab_andalusi'	         
]);
//54
DB::table('cultures')->insert([            
'culture_name' => 'Turkish',	
'warrior_culture' => 'Turkish',
'chivalry_culture' => 'Steppe',	
'manorial_culture' => 'Muslim',
'commercial_culture' => 'Oriental',
'troubadour' => '1000_maqam_bayati_Taqsim'	         
]);
//55
DB::table('cultures')->insert([            
'culture_name' => 'Persian',	
'warrior_culture' => 'Turkish',
'chivalry_culture' => 'Steppe',	
'manorial_culture' => 'Muslim',
'commercial_culture' => 'Oriental',
'troubadour' => '1000_maqam_bayati_Taqsim'	         
]);
//56
DB::table('cultures')->insert([            
'culture_name' => 'Mongol',	
'warrior_culture' => 'Mongol',
'chivalry_culture' => 'Steppe',	
'manorial_culture' => 'Muslim',
'commercial_culture' => 'Oriental',
'troubadour' => '1000_mongol_throat_Tes_Goliin_Magtaal'	         
]);
    }
}
