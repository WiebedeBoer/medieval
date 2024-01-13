<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use architecture\HalfTimberedFachwerk;

class ArchitectureController extends Controller
{
    //main construct
    public function __construct(
        private HalfTimberedFachwerk $halfTimberedFachwerk,
    ) {
        $this->middleware('auth');
    }

    //determine buildings
    public function availableBuildings(
        string $vernacularArchitecture,
        ?string $development, 
        ?string $lawCourt, 
        ?string $vegetation,
        ?string $transport, 
        ?string $altitude,
        ?string $religion
    ): array {
        switch ($vernacularArchitecture) {
            case "HalfTimberedFachwerk":
                return $this->halfTimberedFachwerk->availableBuildings(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
            case "HalfTimberedStudded":
                return $this->halfTimberedFachwerk->availableBuildings(
                    $vernacularArchitecture,
                    $development, 
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
            case "HalfTimberedKhata":
                return $this->halfTimberedFachwerk->availableBuildings(
                    $vernacularArchitecture,
                    $development, 
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
            case "HalfTimberedKonak":
                return $this->halfTimberedFachwerk->availableBuildings(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
            case "LogChalet":
                return $this->halfTimberedFachwerk->availableBuildings(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
              case "LogStave":
                return $this->halfTimberedFachwerk->availableBuildings(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
              case "LogIzba":
                return $this->halfTimberedFachwerk->availableBuildings(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
              case "StoneCroft":
                return $this->halfTimberedFachwerk->availableBuildings(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
              case "StoneMudejar":
                return $this->halfTimberedFachwerk->availableBuildings(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
              case "StoneRomanesque":
                return $this->halfTimberedFachwerk->availableBuildings(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
              case "StoneAdjar":
                return $this->halfTimberedFachwerk->availableBuildings(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
              case "AdobeMashriq":
                return $this->halfTimberedFachwerk->availableBuildings(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
              case "AdobeMaghreb":
                return $this->halfTimberedFachwerk->availableBuildings(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
              case "AdobePersian":
                return $this->halfTimberedFachwerk->availableBuildings(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
            default:
                return $this->defaultBuildings();
        } 
    }

    //determine upgrades
    public function availableUpgrades(
        string $vernacularArchitecture,
        ?string $development, 
        ?string $lawCourt, 
        ?string $vegetation,
        ?string $transport, 
        ?string $altitude,
        ?string $religion
    ): array {
        switch ($vernacularArchitecture) {
            case "HalfTimberedFachwerk":
                return $this->halfTimberedFachwerk->availableUpgrades(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
            case "HalfTimberedStudded":
                return $this->halfTimberedFachwerk->availableUpgrades(
                    $vernacularArchitecture,
                    $development, 
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
            case "HalfTimberedKhata":
                return $this->halfTimberedFachwerk->availableUpgrades(
                    $vernacularArchitecture,
                    $development, 
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
            case "HalfTimberedKonak":
                return $this->halfTimberedFachwerk->availableUpgrades(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
            case "LogChalet":
                return $this->halfTimberedFachwerk->availableUpgrades(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
              case "LogStave":
                return $this->halfTimberedFachwerk->availableUpgrades(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
              case "LogIzba":
                return $this->halfTimberedFachwerk->availableUpgrades(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
              case "StoneCroft":
                return $this->halfTimberedFachwerk->availableUpgrades(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
              case "StoneMudejar":
                return $this->halfTimberedFachwerk->availableUpgrades(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
              case "StoneRomanesque":
                return $this->halfTimberedFachwerk->availableUpgrades(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
              case "StoneAdjar":
                return $this->halfTimberedFachwerk->availableUpgrades(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
              case "AdobeMashriq":
                return $this->halfTimberedFachwerk->availableUpgrades(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
              case "AdobeMaghreb":
                return $this->halfTimberedFachwerk->availableUpgrades(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
              case "AdobePersian":
                return $this->halfTimberedFachwerk->availableUpgrades(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
            default:
                return $this->defaultUpgrades();
        } 
    }

    //determine appearances
    public function determineAppearances(
        string $vernacularArchitecture, 
        ?string $development,
        ?string $lawCourt, 
        ?string $vegetation,
        ?string $transport, 
        ?string $altitude,
        ?string $religion
    ): array {
        switch ($vernacularArchitecture) {
            case "HalfTimberedFachwerk":
                return $this->halfTimberedFachwerk->determineAppearances(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
            case "HalfTimberedStudded":
                return $this->halfTimberedFachwerk->determineAppearances(
                    $vernacularArchitecture,
                    $development, 
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
            case "HalfTimberedKhata":
                return $this->halfTimberedFachwerk->determineAppearances(
                    $vernacularArchitecture,
                    $development, 
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
            case "HalfTimberedKonak":
                return $this->halfTimberedFachwerk->determineAppearances(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
            case "LogChalet":
                return $this->halfTimberedFachwerk->determineAppearances(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
              case "LogStave":
                return $this->halfTimberedFachwerk->determineAppearances(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
              case "LogIzba":
                return $this->halfTimberedFachwerk->determineAppearances(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
              case "StoneCroft":
                return $this->halfTimberedFachwerk->determineAppearances(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
              case "StoneMudejar":
                return $this->halfTimberedFachwerk->determineAppearances(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
              case "StoneRomanesque":
                return $this->halfTimberedFachwerk->determineAppearances(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
              case "StoneAdjar":
                return $this->halfTimberedFachwerk->determineAppearances(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
              case "AdobeMashriq":
                return $this->halfTimberedFachwerk->determineAppearances(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
              case "AdobeMaghreb":
                return $this->halfTimberedFachwerk->determineAppearances(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
              case "AdobePersian":
                return $this->halfTimberedFachwerk->determineAppearances(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
            default:
                return $this->defaultAppearances();
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

    private function defaultAppearances(): array 
    {
        $defaultAppearances = [];
        $defaultAppearances['wall'] = '';
        $defaultAppearances['window'] = '';
        $defaultAppearances['facade'] = '';
        $defaultAppearances['gallery'] = '';
        $defaultAppearances['support'] = '';
        $defaultAppearances['roof'] = '';
        $defaultAppearances['tiles'] = '';
        return $defaultAppearances;
    }

}