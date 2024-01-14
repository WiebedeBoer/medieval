<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use App\Http\Controllers\construction\BurgageQuarter;
use App\Http\Controllers\construction\CastleQuarter;
use App\Http\Controllers\construction\CathedralClose;
use App\Http\Controllers\construction\ClericalClose;
use App\Http\Controllers\construction\CrusaderCommandery;
use App\Http\Controllers\construction\FactoryQuarter;
use App\Http\Controllers\construction\GateQuarter;
use App\Http\Controllers\construction\GentryQuarter;
use App\Http\Controllers\construction\HallQuarter;
use App\Http\Controllers\construction\HospitalQuarter;
use App\Http\Controllers\construction\HuntingQuarter;
use App\Http\Controllers\construction\JewryQuarter;
use App\Http\Controllers\construction\KnightFee;
use App\Http\Controllers\construction\MarketQuarter;
use App\Http\Controllers\construction\MonasticGrange;
use App\Http\Controllers\construction\MonasticClose;
use App\Http\Controllers\construction\PortQuarter;
use App\Http\Controllers\construction\Tiltyard;
use App\Http\Controllers\construction\Tithing;
use App\Http\Controllers\construction\UniversityQuarter;

class ConstructionController extends Controller
{
    //main construct
    public function __construct(
        private BurgageQuarter $burgageQuarter,
        private CastleQuarter $castleQuarter,
        private CathedralClose $cathedralClose,
        private ClericalClose $clericalClose,
        private CrusaderCommandery $crusaderCommandery,
        private FactoryQuarter $factoryQuarter,
        private GateQuarter $gateQuarter,
        private GentryQuarter $gentryQuarter,
        private HallQuarter $hallQuarter,
        private HospitalQuarter $hospitalQuarter,
        private HuntingQuarter $huntingQuarter,
        private JewryQuarter $jewryQuarter,
        private KnightFee $knightFee,
        private MarketQuarter $marketQuarter,
        private MonasticClose $monasticClose,
        private MonasticGrange $monasticGrange,   
        private PortQuarter $portQuarter,
        private Tiltyard $tiltyard,
        private Tithing $tithing,
        private UniversityQuarter $universityQuarter
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
        ?array $chivalricSociety,
        ?array $monasticSociety,
        ?array $ecclesiasticalSociety,
        ?array $courtSociety,
        ?array $craftSociety,
        ?array $feastSociety
    ): array {
        switch ($category) {
            case "Burgage_Quarter":
                return $this->burgageQuarter->availableBuildings(
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
            case "Castle_Quarter":
                return $this->castleQuarter->availableBuildings(
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
            case "Cathedral_Close":
                return $this->cathedralClose->availableBuildings(
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
            case "Clerical_Close":
                return $this->clericalClose->availableBuildings(
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
            case "Crusader_Commandery":
                return $this->crusaderCommandery->availableBuildings(
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
            case "Factory":
                return $this->factoryQuarter->availableBuildings(
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
            case "Gate_Quarter":
                return $this->gateQuarter->availableBuildings(
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
            case "Gentry_Quarter":
                return $this->gentryQuarter->availableBuildings(
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
            case "Hall_Quarter":
                return $this->hallQuarter->availableBuildings(
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
            case "Hunting_Quarter":
                return $this->huntingQuarter->availableBuildings(
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
            case "Hospital_Quarter":
                return $this->hospitalQuarter->availableBuildings(
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
            case "Jewry_Quarter":
                return $this->jewryQuarter->availableBuildings(
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
            case "Knight_Fee":
                return $this->knightFee->availableBuildings(
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
            case "Market_Quarter":
                return $this->marketQuarter->availableBuildings(
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
            case "Monastic_Close":
                return $this->monasticClose->availableBuildings(
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
            case "Monastic_Grange":
                return $this->monasticGrange->availableBuildings(
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
            case "Port_Quarter":
                return $this->portQuarter->availableBuildings(
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
            case "Tiltyard":
                return $this->tithing->availableBuildings(
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
            case "Tithing":
                return $this->tithing->availableBuildings(
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
            case "University_Quarter":
                return $this->universityQuarter->availableBuildings(
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
        ?array $chivalricSociety,
        ?array $monasticSociety,
        ?array $ecclesiasticalSociety,
        ?array $courtSociety,
        ?array $craftSociety,
        ?array $feastSociety
    ): array {
        switch ($category) {
            case "Burgage_Quarter":
                return $this->burgageQuarter->availableUpgrades(
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
            case "Castle_Quarter":
                return $this->castleQuarter->availableUpgrades(
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
            case "Cathedral_Close":
                return $this->cathedralClose->availableUpgrades(
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
            case "Clerical_Close":
                return $this->clericalClose->availableUpgrades(
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
            case "Crusader_Commandery":
                return $this->crusaderCommandery->availableUpgrades(
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
            case "Factory":
                return $this->factoryQuarter->availableUpgrades(
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
            case "Gate_Quarter":
                return $this->gateQuarter->availableUpgrades(
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
            case "Gentry_Quarter":
                return $this->gentryQuarter->availableUpgrades(
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
            case "Hall_Quarter":
                return $this->hallQuarter->availableUpgrades(
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
            case "Hunting_Quarter":
                return $this->huntingQuarter->availableUpgrades(
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
            case "Hospital_Quarter":
                return $this->hospitalQuarter->availableUpgrades(
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
            case "Jewry_Quarter":
                return $this->jewryQuarter->availableUpgrades(
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
            case "Knight_Fee":
                return $this->knightFee->availableUpgrades(
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
            case "Market_Quarter":
                return $this->marketQuarter->availableUpgrades(
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
            case "Monastic_Close":
                return $this->monasticClose->availableUpgrades(
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
            case "Monastic_Grange":
                return $this->monasticGrange->availableUpgrades(
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
            case "Port_Quarter":
                return $this->portQuarter->availableUpgrades(
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
            case "Tiltyard":
                return $this->tithing->availableUpgrades(
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
            case "Tithing":
                return $this->tithing->availableUpgrades(
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
            case "University_Quarter":
                return $this->universityQuarter->availableUpgrades(
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