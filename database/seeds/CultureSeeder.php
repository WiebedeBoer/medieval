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
'culture_description' => 'Occitan is a Gallo-Romance group in what is now modern France and Spain. Troubadours who were composers of music and poetry began in the region. Eleanor of Aquitaine, queen consort of first France and then England, was born in Poitiers and was one of the richest women in the whole of western Europe. Places like Bordeaux grew rich in the wine trade and Toulouse was inmensely wealthy dye to the dyes trade. The region is also home to Carcassonne a renowned heavily fortified city.'	     	         
]);  
//17
DB::table('cultures')->insert([            
'culture_name' => 'Breton',	
'warrior_culture' => 'Frankish',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1300_virelai_Dame_Jolie',
'culture_description' => 'Britanny is a region in the west of modern France. The war of the Breton succession was a conflict between the Counts of Blois and the Montforts of Brittany for control of the duchy of Brittany, then a fief of the kingdom of France. The conflict formed an integral part of the Hundred Years War between England and France. After another war called the Mad War it ultimately led to union of Brittany and France and the loss of Breton independence. In the late middle ages Brittany saw an economic golden age and grew wealthy in shipbuilding and the manufacture of hemp and linen.'	     	         
]); 
//18
DB::table('cultures')->insert([            
'culture_name' => 'English',	
'warrior_culture' => 'Anglo-Saxon',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1300_scarborough_fair',
'culture_description' => 'The name England is derived from the Angles, a Germanic tribe. Anglo-Saxon petty kingdoms gradually coalesced into the kingdom of England. Much of England during the Viking was subject to the Danelaw, an area held by Vikings. The Normans under william the Conqueror conquered England after Harold Godwinson was defeated in the battle of Hastings. English kings build many castles in Wales to subjugate the land and there were frequent border skirmishes with the Scots and held large parts of modern Ireland under the lordship of Ireland and large swathes of modern France such as the duchy of Aquitaine. England fought the Hundred Years War with France which started out of a Capetian-Plantagenet rivalry, it ended with the House of Valois retaining the French throne. Monasticism flourished, providing philosophers, and the universities of Oxford and Cambridge were founded with royal patronage. English trade in wool flourished. In the late middle ages England saw a civil war between the Yorkist and Lancastrian branches of the English royal family, known as the war of the Roses. '	     	         
]);
//19
DB::table('cultures')->insert([            
'culture_name' => 'Welsh',	
'warrior_culture' => 'Celtic',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1500_morrisons_jig',
'culture_description' => 'The Welsh are a Celtic group. A series of dynastic marriages led to much of Wales gradually merging into what became known as the principality of Wales. After the conquest of England by the Normans, a series of lordships were established on the borders with Wales. These lordships known as the marcher lords gradually began conquering Wales. To help maintain his dominance, king Edward constructed a series of great stone castles. A Welsh nobleman, Owain Glyndwr, revolted against King Henry IV of England. Owain inflicted a number of defeats on the English forces and for a few years controlled most of Wales. Eventually the English forces were able to regain control of Wales and the rebellion died out, but Owain himself was never captured. Welsh bards were influential in songs and poetry.'	     	         
]); 
//20
DB::table('cultures')->insert([            
'culture_name' => 'Scottish',	
'warrior_culture' => 'Celtic',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1500_morrisons_jig',
'culture_description' => 'The Scots are a Celtic group. Petty kingdoms gradually merged to form the kingdom of Scotland. Vikings frequently raided Scotland in the early middle ages. A patchwork of Scottish clans ruled different parts of Scotland, but were gradually centralized under royal power. The death of king Alexander III  broke the line of succession and led to the Scottish war of independence with the English and ended with Robert the Bruce crowned as king of Scotland. A civil war and lack of an heir meant the House of Stewart came to the throne for the remainder of the middle ages. Scotland experienced greater prosperity in the late middle ages and grew wealthy from the trade in wool, cheese and fish.'	     	         
]); 
//21
DB::table('cultures')->insert([            
'culture_name' => 'Pictish',	
'warrior_culture' => 'Celtic',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1500_morrisons_jig',
'culture_description' => 'The Picts are a Celtic group that was found in modern Scotland. By the high middle ages they were gradually replaced by the Scots. The kingdom of Alba the largest of the Pictish petty kingdoms of Scotland was for most of the early medieval period by the Alpinid dynasty untill they were replaced by the House of Dunkeld.'	     	         
]); 
//22
DB::table('cultures')->insert([            
'culture_name' => 'Irish',	
'warrior_culture' => 'Celtic',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1500_morrisons_jig',
'culture_description' => 'The Irish are a Celtic group. Irish missionaries and scholars exerted great influence throughout much of western Europe in the spread of Christianity and medieval philosophy. Early medieval Ireland was ruled by several petty kings and a high king. Vikings frequently raided along the Irish coast and also founded towns. In the high middle ages Ireland was invaded by the Normans and much of the land was eventually under the reign of the Lordship of Ireland. The economy was mainly driven by livestock farming and metal working.'	     	         
]); 
//23
DB::table('cultures')->insert([            
'culture_name' => 'Neapolitan',	
'warrior_culture' => 'Italian',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1300_saltarello',
'culture_description' => 'Despite repeatedly being in union with the kingdom of Sicily, the kingdom of Naples was an independent kingdom in its own right. Aragonese and Angevin and Norman influence was great in what is now the southern part of modern Italy as well as Byzantine influence in the farthest parts in the south. Other powerful entities were the maritime city states of Amalfi and Gaeta, the duchy of Benevento and the principality of Taranto. Amalfi was one of the first city-states to grow rich in the maritime trade, but declined when it was conquered by the Pisans.'	     	         
]);  
//24
DB::table('cultures')->insert([            
'culture_name' => 'Sardinian',	
'warrior_culture' => 'Italian',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1300_saltarello',
'culture_description' => 'The influence of the Byzantine empire was great in early medieval Sardinia. Eventually several smaller kingdoms emerged known as Judicates. Many of these smaller kingdoms or republics were allied with maritime city-states on the mainland such as Genoa or Pisa. The Aragonese arrived in the late middle ages and took control of the island.'	     	         
]); 
//25
DB::table('cultures')->insert([            
'culture_name' => 'Sicilian',	
'warrior_culture' => 'Italian',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1300_saltarello',
'culture_description' => 'The Byzantines held sway in Sicily in the early middle ages, untill the island was conquered by the Moors. By the high middle ages Norman mercenaries gradually took control over the island, untill the Hauteville dynasty was replaced by the Swabian Hohenstaufen dynasty. The latter reign ended in the war of the Sicilian Vespers when the Angevins attempted to take control, after which a period of Aragonese reign started, when the island became part of the crown of Aragon. The Sicilian economy grew rich, despite the continual upheaval. Sicily exported large quantities of grains and cloth.'	     	         
]);  
//26
DB::table('cultures')->insert([            
'culture_name' => 'Catalan',	
'warrior_culture' => 'Spanish',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1200_ductia_Alfonso_el_Sabio',
'culture_description' => 'The Catalans are a Romance group. Catalan rulers expanded north up the Ebro river and south near Valencia and also conquered the Balearic islands. The Catalans were important in the development of early medieval smelting techniques with the Catalan forge. By the high middle ages the county of Barcelona entered into a dynastic union with the kingdom or Aragon, to form the Crown of Aragon. This allowed the Aragonese o gradually conquer muslim held lands in what is nowadays the southern of part of modern Spain in a process known as the reconquista. '	     	         
]); 
//27
DB::table('cultures')->insert([            
'culture_name' => 'Aragonese',	
'warrior_culture' => 'Spanish',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1200_ductia_Alfonso_el_Sabio',
'culture_description' => 'The kingdom of Aragon originally started out as a Carolingian county on the southern borders of the empire. With the death of Sancho III of Navarre his kingdom was divided amongst his sons. Ramiro received Aragon and by defeating his elder brother, Ramiro achieved independence for Aragon. The Kingdom of Aragon gave the name to the Crown of Aragon, with the dynastic union resulting from the marriage of the Princess of Aragon, Petronilla, and the Count of Barcelona, Ramon Berenguer IV. Their son Alfonso II inherited all of the territories within the House of Aragon and within the House of Barcelona. The Crown of Aragon became a part of the Spanish monarchy after the dynastic union with Castile. These unions ensured strengthening of Christian ties, that allowed for the gradual conquest of muslim held Spain in the process known as the reconquista.'	     	         
]); 
//28
DB::table('cultures')->insert([            
'culture_name' => 'Navarrese',	
'warrior_culture' => 'Spanish',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1200_ductia_Alfonso_el_Sabio',
'culture_description' => 'The Kingdom of Navarre was a kingdom that occupied lands on either side of the western Pyrenees mountains along the Atlantic coast in present-day Spain and France. The medieval state took form around the city of Pamplona during the first centuries of the Iberian Reconquista. A series of partitions and dynastic changes led to a diminution of its territory and to periods of rule by the kings of Aragon and later France. Another dynastic dispute led to internal divisions and the eventual conquest of the southern part of the kingdom.'	     	         
]); 
//29
DB::table('cultures')->insert([            
'culture_name' => 'Castillian',	
'warrior_culture' => 'Spanish',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1200_ductia_Alfonso_el_Sabio',
'culture_description' => 'The kingdom of Castile was a kingdom located on the Iberian peninsula. The kingdom united with the kingdom of Leon. Throughout the middle ages the Castilian kings made extensive conquests in the southern parts of Iberian peninsula at the expense of the islamic principalities. The Kingdoms of Castile and of Leon, with their southern acquisitions, came to be known collectively as the Crown of Castile. In the late middle ages much of Castile was ruled by the house of Trastamara. The high central plateau within the kingdom was a vast sheep pasturage and Castile grew wealthy in the trade of wool. '	     	         
]); 
//30
DB::table('cultures')->insert([            
'culture_name' => 'Leonese',	
'warrior_culture' => 'Spanish',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1200_ductia_Alfonso_el_Sabio',
'culture_description' => 'The Kingdom of Leon was a kingdom situated in the northwest region of the Iberian Peninsula. The kingdom was founded when the Christian princes of Asturias along the northern coast of the peninsula shifted their capital from Oviedo to the city of Leon. The kings of Leon fought civil wars, wars against neighbouring kingdoms as well as campaigns to repel invasions by both the Moors and the Vikings. In the high middle ages the kingdom of Leon formed an union with the kingdom of Castile as the Crown of Castile.'	     	         
]); 
//31
DB::table('cultures')->insert([            
'culture_name' => 'Galician',	
'warrior_culture' => 'Spanish',
'chivalry_culture' => 'Western',	
'manorial_culture' => 'Catholic',
'commercial_culture' => 'Western',
'troubadour' => '1200_ductia_Alfonso_el_Sabio',
'culture_description' => 'The Kingdom of Galicia was kingdom in the northwest of the Iberian Peninsula. Compostela became capital of Galicia in the high middle ages. Its capital was also an important catholic pelgrimage site. Queen Urraca, married a Burgundian nobleman, Raymond of Burgundy, who had participated in the Crusades against the Almoravids. His military victories as well as his Anscarid lineage justified this union. This union gave rise to the House of Burgundy, which would rule in Galicia, Leon, and Castile until the death of King Peter.'	     	         
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
