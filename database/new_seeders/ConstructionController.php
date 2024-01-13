<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use construction\Castle;

class ConstructionController extends Controller
{
    //main construct
    public function __construct(
        private Castle $castle,
    ) {
        $this->middleware('auth');
    }

    //determine buildings
    public function availableBuildings(
        string $category, 
        ?string $culture, 
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
        switch ($category) {
            case "Castle":
                return $this->castle->availableBuildings(
                    $category, 
                    $culture,
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
                return $this->castle->availableBuildings(
                    $category, 
                    $culture,
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
                return $this->castle->availableBuildings(
                    $category, 
                    $culture,
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
                return $this->castle->availableBuildings(
                    $category, 
                    $culture,
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
                return $this->castle->availableBuildings(
                    $category, 
                    $culture,
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
                return $this->defaultBuildings();
        }
    }

    //determine upgrades
    public function availableUpgrades(
        string $category, 
        ?string $culture,
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
        switch ($category) {
            case "Castle":
                return $this->castle->availableUpgrades(
                    $category, 
                    $culture,
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
                return $this->castle->availableUpgrades(
                    $category, 
                    $culture,
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
                return $this->castle->availableUpgrades(
                    $category, 
                    $culture,
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
                return $this->castle->availableUpgrades(
                    $category, 
                    $culture,
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
                return $this->castle->availableUpgrades(
                    $category, 
                    $culture,
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
                return $this->defaultUpgrades();
        }
    }

    private function defaultUpgrades(): array 
    {
        $defaultUpgrades = [];
        $defaultUpgrades['building'] = '';
        return $defaultUpgrades;
    }

    private function defaultBuildings(): array 
    {
        $defaultBuildings = [];
        $defaultBuildings['building'] = '';
        return $defaultBuildings;
    }

}