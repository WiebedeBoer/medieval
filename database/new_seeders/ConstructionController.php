<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use construction\BurgageQuarter;
use construction\CastleQuarter;
use construction\CathedralClose;
use construction\ClericalClose;
use construction\CrusaderCommandery;
use construction\FactoryQuarter;
use construction\GateQuarter;
use construction\GentryQuarter;
use construction\HallQuarter;
use construction\HospitalQuarter;
use construction\HuntingQuarter;
use construction\JewryQuarter;
use construction\KnightFee;
use construction\MarketQuarter;
use construction\MonasticGrange;
use construction\MonasticClose;
use construction\PortQuarter;
use construction\Tiltyard;
use construction\Tithing;
use construction\UniversityQuarter;

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
        ?string $chivalricSociety,
        ?string $monasticSociety,
        ?string $ecclesiasticalSociety,
        ?string $courtSociety,
        ?string $craftSociety,
        ?string $feastSociety
    ): array {
        switch ($category) {
            case "Burgage Quarter":
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
            case "Castle Quarter":
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
            case "Cathedral Close":
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
            case "Clerical Close":
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
            case "Crusader Commandery":
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
            case "Gate Quarter":
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
            case "Gentry Quarter":
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
            case "Hall Quarter":
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
            case "Hunting Quarter":
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
            case "Hospital Quarter":
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
            case "Jewry Quarter":
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
            case "Knight Fee":
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
            case "Market Quarter":
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
            case "Monastic Close":
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
            case "Monastic Grange":
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
            case "Port Quarter":
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
            case "University Quarter":
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
        ?string $chivalricSociety,
        ?string $monasticSociety,
        ?string $ecclesiasticalSociety,
        ?string $courtSociety,
        ?string $craftSociety,
        ?string $feastSociety
    ): array {
        switch ($category) {
            case "Burgage Quarter":
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
            case "Castle Quarter":
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
            case "Cathedral Close":
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
            case "Clerical Close":
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
            case "Crusader Commandery":
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
            case "Gate Quarter":
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
            case "Gentry Quarter":
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
            case "Hall Quarter":
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
            case "Hunting Quarter":
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
            case "Hospital Quarter":
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
            case "Jewry Quarter":
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
            case "Knight Fee":
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
            case "Market Quarter":
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
            case "Monastic Close":
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
            case "Monastic Grange":
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
            case "Port Quarter":
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
            case "University Quarter":
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