<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use App\Http\Controllers\architecture\AdobeMaghreb;
use App\Http\Controllers\architecture\AdobeMashriq;
use App\Http\Controllers\architecture\AdobePersian;
use App\Http\Controllers\architecture\HalfTimberedFachwerk;
use App\Http\Controllers\architecture\HalfTimberedKhata;
use App\Http\Controllers\architecture\HalfTimberedKonak;
use App\Http\Controllers\architecture\HalfTimberedStudded;
use App\Http\Controllers\architecture\LogChalet;
use App\Http\Controllers\architecture\LogIzba;
use App\Http\Controllers\architecture\LogStave;
use App\Http\Controllers\architecture\StoneAdjar;
use App\Http\Controllers\architecture\StoneCroft;
use App\Http\Controllers\architecture\StoneMudejar;
use App\Http\Controllers\architecture\StoneRomanesque;

class ArchitectureController extends Controller
{
    //main construct
    public function __construct(
        private AdobeMaghreb $adobeMaghreb,
        private AdobeMashriq $adobeMashriq,
        private AdobePersian $adobePersian,
        private HalfTimberedFachwerk $halfTimberedFachwerk,
        private HalfTimberedKhata $halfTimberedKhata,
        private HalfTimberedKonak $halfTimberedKonak,
        private HalfTimberedStudded $halfTimberedStudded,
        private LogChalet $logChalet,
        private LogIzba $logIzba,
        private LogStave $logStave,
        private StoneAdjar $stoneAdjar,
        private StoneCroft $stoneCroft,
        private StoneMudejar $stoneMudejar,
        private StoneRomanesque $stoneRomanesque
    ) {
        $this->middleware('auth');
    }

    //determine buildings
    public function availableBuildings(
        string $vernacularArchitecture,
        ?array $development, 
        ?string $lawCourt, 
        ?string $vegetation,
        ?string $transport, 
        ?string $altitude,
        ?string $religion
    ): array {
      $xml=simplexml_load_file("architecture.xml") or die("Error: Cannot create object");
      //echo $xml->book[0]->title . "<br>";
      //echo $xml->book[1]->title; 
        switch ($vernacularArchitecture) {
            case "Adobe_Maghreb":
                return $this->adobeMaghreb->availableBuildings(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
            case "Adobe_Mashriq":
                return $this->adobeMashriq->availableBuildings(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
            case "Adobe_Persian":
                return $this->adobePersian->availableBuildings(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
            case "Half_Timbered_Fachwerk":
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
            case "Half_Timbered_Khata":
                return $this->halfTimberedKhata->availableBuildings(
                    $vernacularArchitecture,
                    $development, 
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
            case "Half_Timbered_Konak":
                return $this->halfTimberedKonak->availableBuildings(
                    $vernacularArchitecture,
                    $development, 
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
            case "Half_Timbered_Studded":
                return $this->halfTimberedStudded->availableBuildings(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
            case "Log_Chalet":
                return $this->logChalet->availableBuildings(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
              case "Log_Izba":
                return $this->logIzba->availableBuildings(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
            case "Log_Stave":
                return $this->logStave->availableBuildings(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
            case "Stone_Adjar":
                return $this->stoneAdjar->availableBuildings(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
            case "Stone_Croft":
                return $this->stoneCroft->availableBuildings(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
            case "Stone_Mudejar":
                return $this->stoneMudejar->availableBuildings(
                    $vernacularArchitecture, 
                    $development,
                    $lawCourt, 
                    $vegetation,
                    $transport, 
                    $altitude,
                    $religion
                );
              break;
            case "Stone_Romanesque":
                return $this->stoneRomanesque->availableBuildings(
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
        ?array $development, 
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
        ?array $development,
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