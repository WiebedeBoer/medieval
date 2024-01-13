<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class CastleQuarter extends Controller
{
    //main construct
    public function __construct()
    {

    }

    //determine buildings
    public function availableBuildings(
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
        $availableBuildings = [];
        $availableBuildings[''] = '';
        return $availableBuildings;
    }

    //determine upgrades
    public function availableUpgrades(
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
        $availableUpgrades = [];
        $availableUpgrades[''] = '';
        return $availableUpgrades;
    }

}