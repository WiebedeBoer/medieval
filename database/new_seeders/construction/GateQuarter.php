<?php

namespace App\Http\Controllers\construction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class GateQuarter extends Controller
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
        ?array $chivalricSociety,
        ?array $monasticSociety,
        ?array $ecclesiasticalSociety,
        ?array $courtSociety,
        ?array $craftSociety,
        ?array $feastSociety
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
        ?array $chivalricSociety,
        ?array $monasticSociety,
        ?array $ecclesiasticalSociety,
        ?array $courtSociety,
        ?array $craftSociety,
        ?array $feastSociety
    ): array {
        $availableUpgrades = [];
        $availableUpgrades[''] = '';
        return $availableUpgrades;
    }

}