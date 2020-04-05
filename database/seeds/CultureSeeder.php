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
'culture_description' => 'Franconia emerged after conquests by early Frankish and became one of the tribal duchies of the Eastern Franks. The Babenbergs and Conradines fought for power in Franconia. Ultimately this discord led to the Babenberg Feud which was fuelled and controlled by the crown. The outcome of this feud meant the loss of power for the Babenbergs, but indirectly resulted in the Conradines winning the crown of East Francia. The region did not become a strong regional force such as those which formed in Saxony, Bavaria and Swabia. Nuremberg Castle was the seat of the Burgraviate of Nuremberg. The burgraviate was ruled by the Zollerns, the Franconian line of the later House of Hohenzollern. Under the Hohenstaufen kings, Franconia became the centre of power in the Empire. Franconia too played a role in the rise of the House of the Habsburgs. The Teutonic Order was formed in the region, taking much possession in Franconia.'	     	         
]); 
//6
DB::table('cultures')->insert([            
'culture_name' => 'Saxon',	
'warrior_culture' => 'German',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1400_la_suite_meurtriere',
'culture_description' => 'The Saxons were a group of early Germanic peoples whose name was given in the early Middle Ages to a large country near the North Sea coast of what is now Germany. Together with Frisians, Jutish, and Angles they settled large parts of what became England. Together with the Lombards they settled parts of modern northern Italy and with the Franks settled parts of what is modern France. The Saxon duchy of Hamaland played an important role in the formation of the duchy of Guelders. Charlemagne and Louis the Pious supported Christian vernacular works in order to evangelise the Saxons more efficiently. The Saxon nobility became vigorous supporters of monasticism and formed a bulwark of Christianity against paganism to the east and north. Notable monastic centres were Fulda, Corvey and verden.'	     	         
]); 
//7
DB::table('cultures')->insert([            
'culture_name' => 'Bavarian',	
'warrior_culture' => 'German',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1400_la_suite_meurtriere',
'culture_description' => 'The Bavarians were a group of early Germanic peoples. The Duchy of Bavaria was a stem duchy of the Holy Roman Empire and the Margraviate of Austria was formed an eastern march to the Duchy of Bavaria and ultimately became a duchy in its own right, the Duchy of Austria. Austria ultimately falling under the dominion of the House of Habsburg. '	     	         
]); 
//8
DB::table('cultures')->insert([            
'culture_name' => 'Swabian',	
'warrior_culture' => 'German',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1400_la_suite_meurtriere',
'culture_description' => 'The swabians were a group of early Germanic peoples. The Duchy of Swabia was a stem duchy of the Holy Roman Empire. Swabian cities formed a league of Swabian citiesd in the high middle ages. A Swiss confederacy was formed too in the high middle ages and became de facto independent following the Burgundian wars and Swabian wars.'	     	         
]); 
//9
DB::table('cultures')->insert([            
'culture_name' => 'Carinthian',	
'warrior_culture' => 'German',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1400_la_suite_meurtriere',
'culture_description' => 'The march of Carinthia arose from the territory that was bequeathed by Louis the German his son Carloman, king of Bavaria, to his natural son Arnulf of Carinthia. The march ultimately became a Duchy with the march of Carniola seperating from it. Much of the area was ruled by the House of Sponheim and later by the Habsburg dynasty.'	     	         
]); 
//10
DB::table('cultures')->insert([            
'culture_name' => 'Flemish',	
'warrior_culture' => 'German',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1400_la_suite_meurtriere',
'culture_description' => 'The Flemish are a Germanic group in the region of Flanders in what is modern Belgium.The county of Flanders was a feudal fief in West Francia. The first count was Baldwin I of Flanders, eloped with a daughter of his king Charles the Bald. Flanders developed as a medieval economic power with a large degree of political autonomy. While its trading cities remained strong, it was weakened and divided when districts fell under direct French royal rule. During the late Middle Ages Flemish trading towns made it one of the richest and most urbanized parts of Europe, weaving the wool of neighbouring lands into cloth for both domestic use and export. As a consequence, a sophisticated culture developed, with impressive art and architecture, rivaling those of northern Italy. Increasingly powerful in the high middle ages the urban communes were instrumental in defeating a French attempt at annexation, finally defeating the French in the Battle of the Golden Spurs. Two years later, the uprising was defeated and Flanders indirectly remained part of the French Crown. Flemish prosperity waned in the late middle ages, due to widespread European population decline following the Black Death and the disruption of trade during the Hundred Years War.'	     	         
]); 
//11
DB::table('cultures')->insert([            
'culture_name' => 'Bohemian',	
'warrior_culture' => 'German',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1400_la_suite_meurtriere',
'culture_description' => 'The kingdom of Bohemia was in what is the modern Czech republic. The kingdom of Bohemia was established by the Premyslid dynasty from the Duchy of Bohemia and later ruled by the House of Luxembourg and then the Jagiellonian dynasty. Numerous kings of Bohemia were also elected Holy Roman Emperors. King Ottokar II married a German princess, Margaret of Babenberg, and became duke of Austria. He thereby acquired Upper Austria, Lower Austria, and part of Styria. He conquered the rest of Styria, most of Carinthia, and parts of Carniola. He was called the king of iron and gold, because of his conquests and wealth. Bohemia entered its golden age during the reign of the House of Luxembourg. Extensive building projects were undertaken by king Charles IV, including the royal castle in Prague and the university of Prague.'	     	         
]); 
//12
DB::table('cultures')->insert([            
'culture_name' => 'Lombard',	
'warrior_culture' => 'Italian',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1400_la_suite_meurtriere',
'culture_description' => 'The Lombards or Longobards are a Germanic group in what is now the northern part of modern Italy. Lombard nobles ruled southern parts of the Italian peninsula. The resulting wars between Guelphs and Ghibellines, the anti-imperialist and imperialist factions, respectively, were characteristic of Italian politics in the middle ages. The absence of an Italian monarch in later years led to the rise of Italian city-states. Some cities like Venice, Genoa, and Milan became great trading metropoles. In the late middle ages just as the Italian Renaissance was beginning, Italy was the economic capital of Western Europe and the Italian States were the top manufacturers of finished woolen products. It also traded luxury items like ceramics, glassware, lace and silk and it was the birthplace of merchant banks.'	     	         
]); 
//13
DB::table('cultures')->insert([            
'culture_name' => 'Tuscan',	
'warrior_culture' => 'Italian',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1400_la_suite_meurtriere',
'culture_description' => 'What started out as the march of Tuscany became home to some large and influential Italian city-states such as Pisa and Florence. Pilgrims travelling along the Via Francigena between Rome and France brought wealth and development during the medieval period. Communes grew rich from trade in silk and fine wines and established merchants banks. One family from Florence who benefitted from the growing wealth and power was the ruling Medici family.'	     	         
]); 
//14
DB::table('cultures')->insert([            
'culture_name' => 'Frankish',	
'warrior_culture' => 'Frankish',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1300_virelai_Dame_Jolie',
'culture_description' => 'Though French is a Romance language, the Franks were a Germanic group from the middle and lower Rhine region. The Carolingian empire of Charlemagne unified much of western Europe in the early middle ages. Though fragmented throughout much the middle ages, France came under increasing control of the House of Capet and later the house of Valois and Anjou. It remained one of the most powerful kingdoms in Europe. The Capetian-Plantagenet rivalry fuelled the Hundred Years war. A French peasant by the name of Joan of Arc helped stem the tide in favor of France. France was at the center and often originator of a vibrant cultural production that extended across much of western Europe, including the transition from Romanesque architecture to Gothic architecture and Gothic art and the foundation of medieval universities.'	     	         
]);
//15
DB::table('cultures')->insert([            
'culture_name' => 'Arpitan',	
'warrior_culture' => 'Frankish',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1300_virelai_Dame_Jolie',
'culture_description' => 'Arpitan is a Gallo-Romance group in what is now modern France, Switzerland and part of northern Italy. Often part of Burgundian lands. Much of the area was gradually ruled over by the House of Savoy, or broke off into the Swiss confederacy. The region was heavily involved in the textile trade between France and Italy and produced a lot of wine, cheese, and meat.'	     	         
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
