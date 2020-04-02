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
'troubadour' => '1500_dizzi_jig',
'culture_description' => 'The Danes were a North Germanic tribe inhabiting the area now comprising Denmark proper, and the Scanian provinces of modern southern Sweden, during the Viking Age. They founded what became the Kingdom of Denmark. The name of their realm is believed to mean Danish March, in Old Low German, referring to their southern border zone between the Eider and Schlei rivers, known as Danevirke. 
The Danes began a long era of well-organised raids across the coasts and rivers of Europe. Some of the raids were followed by a gradual succession of Danish settlers and during this epoch, large areas outside Scandinavia were settled by the Danes, including the Danelaw in England and countryside and newly established towns in modern Ireland, the Netherlands and northern France. King Cnut the Great ruled an extensive North Sea Empire for nearly 20 years, consisting of Denmark, England, Norway, southern Sweden and parts of northern Germany. '	         
]); 
//2
DB::table('cultures')->insert([            
'culture_name' => 'Swedish',	
'warrior_culture' => 'Scandinavian',
'chivalry_culture' => 'Nordic',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1500_dizzi_jig',
'culture_description' => 'The Swedes were a North Germanic tribe native to modern Sweden. During the Viking period, it is believed that the Swedes expanded from eastern Sweden. It is believed that Swedish Vikings and Gutar mainly travelled east and south, going to Finland, the Baltic countries, Russia, Belarus, Ukraine the Black Sea and further as far as Baghdad. Their routes passed through the Dnieper down south to Constantinople, on which they did numerous raids. The Byzantine Emperor Theophilos noticed their great skills in war and invited them to serve as his personal bodyguard, known as the varangian guard. '	     	         
]); 
//3
DB::table('cultures')->insert([            
'culture_name' => 'Norwegian',	
'warrior_culture' => 'Scandinavian',
'chivalry_culture' => 'Nordic',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1500_dizzi_jig',
'culture_description' => 'Norwegians are a North Germanic group native to Norway. Norwegian or Norse Vikings travelled north and west and founded vibrant communities in the Faroe Islands, Shetland, Orkney, Iceland, Ireland, Scotland, and northern England. They conducted extensive raids in Ireland and founded the cities of Cork, Dublin, and Limerick. In 947, a new wave of Norwegian Vikings appeared in England when Erik Bloodaxe captured York. In the 8th century and onwards, Norwegian and Danish Vikings also settled in Normandy, most famously those led by Rollo, and thus began the tradition of the Normans meaning men from the north, who expanded to England, Sicily, and other Mediterranean islands. '	     	         
]); 
//4
DB::table('cultures')->insert([            
'culture_name' => 'Frisian',	
'warrior_culture' => 'German',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1400_la_suite_meurtriere',
'culture_description' => 'The Frisians are a Germanic group indigenous to the coastal parts of modernday the Netherlands and northwestern Germany. The ancient Frisii enter recorded history in ancient Roman accounts. Frisian territory had expanded westward to the North Sea coast and, in the early middle ages, southward down to Dorestad. Frisian territory had expanded westward to the North Sea coast and, in the 7th century, southward down to Dorestad. Frisians also settled in England. Frisian nobles came into increasing conflict with the Franks to their south, resulting in a series of wars. These wars benefited attempts by Anglo-Irish missionaries which had begun with Saint Boniface to convert the Frisian populace to Christianity. After the death of Charlemagne, the Frisian territories were in theory under the control of the Count of Holland, but in practice the Hollandic counts were often unable to assert themselves as the sovereign lords of Frisia. The resulting stalemate resulted in a period called the Frisian freedom, when feudalism and serfdom practically did not exist, and in which the Frisian lands only owed their allegiance to the Holy Roman Emperor. '	     	         
]);
//5
DB::table('cultures')->insert([            
'culture_name' => 'Franconian',	
'warrior_culture' => 'German',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1400_la_suite_meurtriere',
'culture_description' => ''	     	         
]); 
//6
DB::table('cultures')->insert([            
'culture_name' => 'Saxon',	
'warrior_culture' => 'German',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1400_la_suite_meurtriere',
'culture_description' => ''	     	         
]); 
//7
DB::table('cultures')->insert([            
'culture_name' => 'Bavarian',	
'warrior_culture' => 'German',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1400_la_suite_meurtriere',
'culture_description' => ''	     	         
]); 
//8
DB::table('cultures')->insert([            
'culture_name' => 'Swabian',	
'warrior_culture' => 'German',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1400_la_suite_meurtriere',
'culture_description' => ''	     	         
]); 
//9
DB::table('cultures')->insert([            
'culture_name' => 'Carinthian',	
'warrior_culture' => 'German',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1400_la_suite_meurtriere',
'culture_description' => ''	     	         
]); 
//10
DB::table('cultures')->insert([            
'culture_name' => 'Flemish',	
'warrior_culture' => 'German',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1400_la_suite_meurtriere',
'culture_description' => ''	     	         
]); 
//11
DB::table('cultures')->insert([            
'culture_name' => 'Bohemian',	
'warrior_culture' => 'German',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1400_la_suite_meurtriere',
'culture_description' => ''	     	         
]); 
//12
DB::table('cultures')->insert([            
'culture_name' => 'Lombard',	
'warrior_culture' => 'Italian',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1400_la_suite_meurtriere',
'culture_description' => ''	     	         
]); 
//13
DB::table('cultures')->insert([            
'culture_name' => 'Tuscan',	
'warrior_culture' => 'Italian',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1400_la_suite_meurtriere',
'culture_description' => ''	     	         
]); 
//14
DB::table('cultures')->insert([            
'culture_name' => 'Frankish',	
'warrior_culture' => 'Frankish',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1300_virelai_Dame_Jolie',
'culture_description' => ''	     	         
]);
//15
DB::table('cultures')->insert([            
'culture_name' => 'Arpitan',	
'warrior_culture' => 'Frankish',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1300_virelai_Dame_Jolie',
'culture_description' => ''	     	         
]);  
//16
DB::table('cultures')->insert([            
'culture_name' => 'Occitan',	
'warrior_culture' => 'Frankish',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1100_troubadour_A_Chanter_M_er',
'culture_description' => ''	     	         
]);  
//17
DB::table('cultures')->insert([            
'culture_name' => 'Breton',	
'warrior_culture' => 'Frankish',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1300_virelai_Dame_Jolie',
'culture_description' => ''	     	         
]); 
//18
DB::table('cultures')->insert([            
'culture_name' => 'English',	
'warrior_culture' => 'Anglo-Saxon',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1300_scarborough_fair',
'culture_description' => ''	     	         
]);
//19
DB::table('cultures')->insert([            
'culture_name' => 'Welsh',	
'warrior_culture' => 'Celtic',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1500_morrisons_jig',
'culture_description' => ''	     	         
]); 
//20
DB::table('cultures')->insert([            
'culture_name' => 'Scottish',	
'warrior_culture' => 'Celtic',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1500_morrisons_jig',
'culture_description' => ''	     	         
]); 
//21
DB::table('cultures')->insert([            
'culture_name' => 'Pictish',	
'warrior_culture' => 'Celtic',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1500_morrisons_jig',
'culture_description' => ''	     	         
]); 
//22
DB::table('cultures')->insert([            
'culture_name' => 'Irish',	
'warrior_culture' => 'Celtic',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1500_morrisons_jig',
'culture_description' => ''	     	         
]); 
//23
DB::table('cultures')->insert([            
'culture_name' => 'Neapolitan',	
'warrior_culture' => 'Italian',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1300_saltarello',
'culture_description' => ''	     	         
]);  
//24
DB::table('cultures')->insert([            
'culture_name' => 'Sardinian',	
'warrior_culture' => 'Italian',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1300_saltarello',
'culture_description' => ''	     	         
]); 
//25
DB::table('cultures')->insert([            
'culture_name' => 'Sicilian',	
'warrior_culture' => 'Italian',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1300_saltarello',
'culture_description' => ''	     	         
]);  
//26
DB::table('cultures')->insert([            
'culture_name' => 'Catalan',	
'warrior_culture' => 'Spanish',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1200_ductia_Alfonso_el_Sabio',
'culture_description' => ''	     	         
]); 
//27
DB::table('cultures')->insert([            
'culture_name' => 'Aragonese',	
'warrior_culture' => 'Spanish',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1200_ductia_Alfonso_el_Sabio',
'culture_description' => ''	     	         
]); 
//28
DB::table('cultures')->insert([            
'culture_name' => 'Navarrese',	
'warrior_culture' => 'Spanish',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1200_ductia_Alfonso_el_Sabio',
'culture_description' => ''	     	         
]); 
//29
DB::table('cultures')->insert([            
'culture_name' => 'Castillian',	
'warrior_culture' => 'Spanish',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1200_ductia_Alfonso_el_Sabio',
'culture_description' => ''	     	         
]); 
//30
DB::table('cultures')->insert([            
'culture_name' => 'Leonese',	
'warrior_culture' => 'Spanish',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1200_ductia_Alfonso_el_Sabio',
'culture_description' => ''	     	         
]); 
//31
DB::table('cultures')->insert([            
'culture_name' => 'Galician',	
'warrior_culture' => 'Spanish',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1200_ductia_Alfonso_el_Sabio',
'culture_description' => ''	     	         
]); 
//32
DB::table('cultures')->insert([            
'culture_name' => 'Portuguese',	
'warrior_culture' => 'Spanish',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1200_ductia_Alfonso_el_Sabio',
'culture_description' => ''	     	         
]);   
//33
DB::table('cultures')->insert([            
'culture_name' => 'Livonian',	
'warrior_culture' => 'German',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1200_minnesang_Palastinesong',
'culture_description' => ''	     	         
]); 
//34
DB::table('cultures')->insert([            
'culture_name' => 'Prussian',	
'warrior_culture' => 'German',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1200_minnesang_Palastinesong',
'culture_description' => ''	     	         
]);          
//35
DB::table('cultures')->insert([            
'culture_name' => 'Polish',	
'warrior_culture' => 'Polish',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1500_dizzi_jig',
'culture_description' => ''	     	         
]); 
//36
DB::table('cultures')->insert([            
'culture_name' => 'Lithuanian',	
'warrior_culture' => 'Polish',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1500_dizzi_jig',
'culture_description' => ''	     		         
]); 
//37
DB::table('cultures')->insert([            
'culture_name' => 'Hungarian',	
'warrior_culture' => 'Hungarian',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1400_la_suite_meurtriere',
'culture_description' => ''	     	         
]); 
//38
DB::table('cultures')->insert([            
'culture_name' => 'Croatian',	
'warrior_culture' => 'Croatian',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1400_la_suite_meurtriere',
'culture_description' => ''	     	         
]); 
//39
DB::table('cultures')->insert([            
'culture_name' => 'Serbian',	
'warrior_culture' => 'Balkan',
'chivalry_culture' => 'Eastern',	
'manorial_culture' => 'Serbian Orthodox',
'commercial_culture' => 'Western',
'troubadour' => '1000_gregorian_Byzantine',
'culture_description' => ''	     	         
]); 
//40
DB::table('cultures')->insert([            
'culture_name' => 'Bulgarian',	
'warrior_culture' => 'Balkan',
'chivalry_culture' => 'Eastern',	
'manorial_culture' => 'Serbian Orthodox',
'commercial_culture' => 'Western',
'troubadour' => '1000_gregorian_Byzantine',
'culture_description' => ''	     	         
]);
//41
DB::table('cultures')->insert([            
'culture_name' => 'Wallachian',	
'warrior_culture' => 'Balkan',
'chivalry_culture' => 'Eastern',	
'manorial_culture' => 'Serbian Orthodox',
'commercial_culture' => 'Western',
'troubadour' => '1000_gregorian_Byzantine',
'culture_description' => ''	     	         
]);
//42
DB::table('cultures')->insert([            
'culture_name' => 'Russian',	
'warrior_culture' => 'Kievan Rus',
'chivalry_culture' => 'Steppe',	
'manorial_culture' => 'Russian Orthodox',
'commercial_culture' => 'Western',
'troubadour' => '1500_russian_winter',
'culture_description' => ''	     	         
]);
//43
DB::table('cultures')->insert([            
'culture_name' => 'Byzantine',	
'warrior_culture' => 'Byzantine',
'chivalry_culture' => 'Eastern',	
'manorial_culture' => 'Greek Orthodox',
'commercial_culture' => 'Western',
'troubadour' => '1000_gregorian_Byzantine',
'culture_description' => ''	     	         
]);
//44
DB::table('cultures')->insert([            
'culture_name' => 'Georgian',	
'warrior_culture' => 'Byzantine',
'chivalry_culture' => 'Eastern',	
'manorial_culture' => 'Greek Orthodox',
'commercial_culture' => 'Western',
'troubadour' => '1000_gregorian_Byzantine',
'culture_description' => ''	     	         
]);
//45
DB::table('cultures')->insert([            
'culture_name' => 'Armenian',	
'warrior_culture' => 'Byzantine',
'chivalry_culture' => 'Eastern',	
'manorial_culture' => 'Greek Orthodox',
'commercial_culture' => 'Western',
'troubadour' => '1000_gregorian_Byzantine',
'culture_description' => ''	     	         
]);
//46
DB::table('cultures')->insert([            
'culture_name' => 'Andalucian',	
'warrior_culture' => 'Arabic',
'chivalry_culture' => 'Arabic',	
'manorial_culture' => 'Muslim',
'commercial_culture' => 'Oriental',
'troubadour' => '1200_tarab_andalusi',
'culture_description' => ''	     	         
]);
//47
DB::table('cultures')->insert([            
'culture_name' => 'Mashriq',	
'warrior_culture' => 'Arabic',
'chivalry_culture' => 'Arabic',	
'manorial_culture' => 'Muslim',
'commercial_culture' => 'Oriental',
'troubadour' => '1000_maqam_rast_Shuruq',
'culture_description' => ''	     	         
]);
//48
DB::table('cultures')->insert([            
'culture_name' => 'Nadj',	
'warrior_culture' => 'Arabic',
'chivalry_culture' => 'Arabic',	
'manorial_culture' => 'Muslim',
'commercial_culture' => 'Oriental',
'troubadour' => '1000_maqam_rast_Shuruq',
'culture_description' => ''	     	         
]);
//49
DB::table('cultures')->insert([            
'culture_name' => 'Hejaz',	
'warrior_culture' => 'Arabic',
'chivalry_culture' => 'Arabic',	
'manorial_culture' => 'Muslim',
'commercial_culture' => 'Oriental',
'troubadour' => '1000_maqam_rast_Shuruq',
'culture_description' => ''	     	         
]);
//50
DB::table('cultures')->insert([            
'culture_name' => 'Misr',	
'warrior_culture' => 'Arabic',
'chivalry_culture' => 'Arabic',	
'manorial_culture' => 'Muslim',
'commercial_culture' => 'Oriental',
'troubadour' => '1000_maqam_rast_Shuruq',
'culture_description' => ''	     	         
]);
//51
DB::table('cultures')->insert([            
'culture_name' => 'Ifriqiya',	
'warrior_culture' => 'Arabic',
'chivalry_culture' => 'Arabic',	
'manorial_culture' => 'Muslim',
'commercial_culture' => 'Oriental',
'troubadour' => '1000_maqam_rast_Shuruq',
'culture_description' => ''	     	         
]);
//52
DB::table('cultures')->insert([            
'culture_name' => 'Maghreb',	
'warrior_culture' => 'Arabic',
'chivalry_culture' => 'Arabic',	
'manorial_culture' => 'Muslim',
'commercial_culture' => 'Oriental',
'troubadour' => '1000_maqam_rast_Shuruq',
'culture_description' => ''	     	         
]);
//53
DB::table('cultures')->insert([            
'culture_name' => 'Gharb',	
'warrior_culture' => 'Arabic',
'chivalry_culture' => 'Arabic',	
'manorial_culture' => 'Muslim',
'commercial_culture' => 'Oriental',
'troubadour' => '1200_tarab_andalusi',
'culture_description' => ''	     	         
]);
//54
DB::table('cultures')->insert([            
'culture_name' => 'Turkish',	
'warrior_culture' => 'Turkish',
'chivalry_culture' => 'Steppe',	
'manorial_culture' => 'Muslim',
'commercial_culture' => 'Oriental',
'troubadour' => '1000_maqam_bayati_Taqsim',
'culture_description' => ''	     	         
]);
//55
DB::table('cultures')->insert([            
'culture_name' => 'Persian',	
'warrior_culture' => 'Turkish',
'chivalry_culture' => 'Steppe',	
'manorial_culture' => 'Muslim',
'commercial_culture' => 'Oriental',
'troubadour' => '1000_maqam_bayati_Taqsim',
'culture_description' => ''	     	         
]);
//56
DB::table('cultures')->insert([            
'culture_name' => 'Mongol',	
'warrior_culture' => 'Mongol',
'chivalry_culture' => 'Steppe',	
'manorial_culture' => 'Muslim',
'commercial_culture' => 'Oriental',
'troubadour' => '1000_mongol_throat_Tes_Goliin_Magtaal',
'culture_description' => ''	     	         
]);
    }
}
