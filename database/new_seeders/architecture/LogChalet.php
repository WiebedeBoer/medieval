<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class LogChalet extends Controller
{
    //main construct
    public function __construct()
    {

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
        $availableBuildings = [];
        $availableBuildings[''] = '';
        return $availableBuildings;
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
        $availableUpgrades = [];
        $availableUpgrades[''] = '';
        return $availableUpgrades;
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
        $appearances = [];
        $appearances['wall'] = '';
        $appearances['window'] = '';
        $appearances['facade'] = '';
        $appearances['gallery'] = '';
        $appearances['support'] = '';
        $appearances['roof'] = '';
        $appearances['tiles'] = '';
        return $appearances;
    }

}