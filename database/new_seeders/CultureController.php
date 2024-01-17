<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use App\Http\Controllers\cultures\Franconian;
use App\Http\Controllers\cultures\Frisian;
use App\Http\Controllers\cultures\Flemish;
use App\Http\Controllers\cultures\Saxon;
use App\Http\Controllers\cultures\Bavarian;
use App\Http\Controllers\cultures\Swabian;
use App\Http\Controllers\cultures\Lombard;
use App\Http\Controllers\cultures\Arpitan;
use App\Http\Controllers\cultures\Frankish;
use App\Http\Controllers\cultures\Norman;
use App\Http\Controllers\cultures\Occitan;
use App\Http\Controllers\cultures\Breton;
use App\Http\Controllers\cultures\Irish;
use App\Http\Controllers\cultures\English;
use App\Http\Controllers\cultures\Welsh;
use App\Http\Controllers\cultures\Gealic;
use App\Http\Controllers\cultures\Pictish;
use App\Http\Controllers\cultures\Norwegian;
use App\Http\Controllers\cultures\Danish;
use App\Http\Controllers\cultures\Catalan;
use App\Http\Controllers\cultures\Navarrese;
use App\Http\Controllers\cultures\Aragonese;
use App\Http\Controllers\cultures\Castillian;
use App\Http\Controllers\cultures\Leonese;
use App\Http\Controllers\cultures\Galician;
use App\Http\Controllers\cultures\Asturian;
use App\Http\Controllers\cultures\Cantabrian;
use App\Http\Controllers\cultures\Portuguese;
use App\Http\Controllers\cultures\Polish;
use App\Http\Controllers\cultures\Silesian;
use App\Http\Controllers\cultures\Lithuanian;
use App\Http\Controllers\cultures\Livonian;
use App\Http\Controllers\cultures\Prussian;
use App\Http\Controllers\cultures\Wendish;
use App\Http\Controllers\cultures\Bohemian;
use App\Http\Controllers\cultures\Moravian;
use App\Http\Controllers\cultures\Hungarian;
use App\Http\Controllers\cultures\Croatian;
use App\Http\Controllers\cultures\Greek;
use App\Http\Controllers\cultures\Sicilian;
use App\Http\Controllers\cultures\Neapolitan;
use App\Http\Controllers\cultures\Sardinian;
use App\Http\Controllers\cultures\Georgian;
use App\Http\Controllers\cultures\Armenian;
use App\Http\Controllers\cultures\Bulgarian;
use App\Http\Controllers\cultures\Wallachian;
use App\Http\Controllers\cultures\Serbian;
use App\Http\Controllers\cultures\Russian;
use App\Http\Controllers\cultures\Ruthenian;
use App\Http\Controllers\cultures\Moorish;
use App\Http\Controllers\cultures\Arabic;
use App\Http\Controllers\cultures\Turkic;
use App\Http\Controllers\cultures\Persian;
use App\Http\Controllers\cultures\Mongolian;

class CultureController extends Controller
{
    //main construct
    public function __construct(
        private Franconian $franconian,
        private Frisian $frisian,
        private Flemish $flemish,
        private Saxon $saxon,
        private Bavarian $bavarian,
        private Swabian $swabian,
        private Lombard $lombard,
        private Arpitan $arpitan,
        private Frankish $frankish,
        private Norman $norman,
        private Occitan $occitan,
        private Breton $breton,
        private Irish $irish,
        private English $english,
        private Welsh $welsh,
        private Gaelic $gealic,
        private Pictish $pictish,
        private Norwegian $norwegian,
        private Danish $danish,
        private Swedish $swedish,
        private Finnish $finnish,
        private Catalan $catalan,
        private Navarrese $navarrese,
        private Aragonese $aragonese,
        private Castillian $castillian,
        private Leonese $leonese,
        private Galician $galician,
        private Asturian $asturian,
        private Cantabrian $cantabrian,
        private Portuguese $portuguese,
        private Polish $polish,
        private Silesian $silesian,
        private Lithuanian $lithuanian,
        private Livonian $livonian,
        private Prussian $prussian,
        private Wendish $wendish,
        private Bohemian $bohemian,
        private Moravian $moravian,
        private Hungarian $hungarian,
        private Croatian $croatian,
        private Greek $greek,
        private Sicilian $sicilian,
        private Neapolitan $neapolitan,
        private Sardinian $sardinian,
        private Georgian $georgian,
        private Armenian $armenian,
        private Bulgarian $bulgarian,
        private Wallachian $wallachian,
        private Serbian $serbian,
        private Russian $russian,
        private Ruthenian $ruthenian,
        private Moorish $moorish,
        private Arabic $arabic,
        private Turkic $turkic,
        private Persian $persian,
        private Mongolian $mongolian
    ) {
        $this->middleware('auth');
    }

    //culture features determine
    public function determineCulture(
        string $culture, 
        ?string $building, 
        ?string $holding,
        ?array $development,
        ?string $cycle,
        ?string $rank, 
        ?string $title,
        ?string $estate,
        ?string $religion,
        ?array $chivalricSociety,
        ?array $monasticSociety,
        ?array $ecclesiasticalSociety,
        ?array $courtSociety,
        ?array $craftSociety,
        ?array $feastSociety
    ): array {
      $xml=simplexml_load_file("culture.xml") or die("Error: Cannot create object");
      //echo $xml->book[0]->title . "<br>";
      //echo $xml->book[1]->title; 
        switch ($culture) {
            case "Franconian":
                return $this->franconian->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break;
            case "Frisian":
                return $this->frisian->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break;
            case "Flemish":
                return $this->flemish->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break;
            case "Saxon":
                return $this->saxon->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break;
            case "Bavarian":
                return $this->bavarian->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break;
            case "Swabian":
                return $this->swabian->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break;
            case "Lombard":
                return $this->lombard->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break;
            case "Arpitan":
                return $this->arpitan->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break;
            case "Frankish":
                return $this->frankish->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break;
            case "Norman":
                return $this->frankish->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break;
            case "Occitan":
                return $this->occitan->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break;
            case "Breton":
                return $this->breton->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break;
            case "Irish":
                return $this->irish->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break; 
            case "English":
                return $this->english->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break; 
            case "Welsh":
                return $this->welsh->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break; 
            case "Gaelic":
                return $this->gaelic->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break;
            case "Pictish":
                return $this->pictish->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break;
            case "Norwegian":
                return $this->norwegian->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break; 
            case "Danish":
                return $this->danish->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break;
            case "Swedish":
                return $this->swedish->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break; 
            case "Finnish":
                return $this->finnish->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break; 
            case "Catalan":
                return $this->catalan->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break;
            case "Navarrese":
                return $this->navarrese->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break; 
            case "Aragonese":
                return $this->aragonese->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break;
            case "Castillian":
                return $this->castillian->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break;
            case "Leonese":
                return $this->leonese->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break;
            case "Galician":
                return $this->galician->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break;
            case "Asturian":
                return $this->asturian->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break; 
            case "Cantabrian":
                return $this->cantabrian->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break; 
            case "Portuguese":
                return $this->portuguese->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break;
            case "Polish":
                return $this->polish->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break;
            case "Silesian":
                return $this->silesian->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break;
            case "Lithuanian":
                return $this->lithuanian->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break;
            case "Livonian":
                return $this->livonian->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break; 
            case "Prussian":
                return $this->prussian->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break;
            case "Wendish":
                return $this->wendish->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break; 
            case "Bohemian":
                return $this->bohemian->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break; 
            case "Moravian":
                return $this->moravian->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break;
            case "Hungarian":
                return $this->hungarian->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break; 
            case "Croatian":
                return $this->croatian->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break;
            case "Greek":
                return $this->greek->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break; 
            case "Sicilian":
                return $this->sicilian->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break; 
            case "Neapolitan":
                return $this->neapolitan->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break; 
            case "Sardinian":
                return $this->sardinian->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break; 
            case "Georgian":
                return $this->georgian->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break;
            case "Armenian":
                return $this->armenian->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break;
            case "Bulgarian":
                return $this->bulgarian->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break; 
            case "Wallachian":
                return $this->wallachian->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break;
            case "Serbian":
                return $this->serbian->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break;
            case "Russian":
                return $this->russian->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break;
            case "Ruthenian":
                return $this->ruthenian->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break; 
            case "Moorish":
                return $this->moorish->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break; 
            case "Arabic":
                return $this->arabic->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break; 
            case "Turkic":
                return $this->turkic->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break;
            case "Persian":
                return $this->persian->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break;
            case "Mongolian":
                return $this->mongolian->determineCultureFeatures(
                    $building,
                    $holding,
                    $development,
                    $cycle,
                    $rank,
                    $title,
                    $estate,
                    $religion,
                    $chivalricSociety,
                    $monasticSociety,
                    $ecclesiasticalSociety,
                    $courtSociety,
                    $craftSociety,
                    $feastSociety
                );
              break;         
            default:
                return $this->defaultFeatures();
        }        
    }

    private function defaultfeatures(): array 
    {
        $defaultFeatures = [];
        $defaultFeatures['building'] = '';
        $defaultFeatures['holding'] = '';
        $defaultFeatures['rank'] = '';
        $defaultFeatures['title'] = '';
        $defaultFeatures['literature'] = '';
        $defaultFeatures['military'] = '';
        return $defaultFeatures;
    }

}