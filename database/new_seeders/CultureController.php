<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use cultures\Franconian;
use cultures\Frisian;
use cultures\Flemish;
use cultures\Saxon;
use cultures\Wendish;
use cultures\Bavarian;
use cultures\Swabian;
use cultures\Lombard;

class CultureController extends Controller
{
    //main construct
    public function __construct(
        private Franconian $franconian,
        private Frisian $frisian,
        private Flemish $flemish,
        private Saxon $saxon,
        private Wendish $wendish,
        private Bavarian $bavarian,
        private Swabian $swabian,
        private Lombard $lombard
    ) {
        $this->middleware('auth');
    }

    //culture determine
    public function determineCulture(
        string $culture, 
        ?string $building, 
        ?string $holding,
        ?string $rank, 
        ?string $title,
        ?string $estate,
        ?string $religion,
        ?string $chivalricSociety,
        ?string $monasticSociety,
        ?string $ecclesiasticalSociety,
        ?string $courtSociety,
        ?string $craftSociety,
        ?string $feastSociety
    ): array {
        switch ($culture) {
            case "Franconian":
                return $this->franconian->determineCultureFeatures(
                    $building,
                    $holding,
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
                return $this->franconian->determineCultureFeatures(
                    $building,
                    $holding,
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
                return $this->franconian->determineCultureFeatures(
                    $building,
                    $holding,
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
                return $this->franconian->determineCultureFeatures(
                    $building,
                    $holding,
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
                return $this->franconian->determineCultureFeatures(
                    $building,
                    $holding,
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