<?php

namespace App\Http\Controllers\architecture;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class StoneAdjar extends Controller
{
    //main construct
    public function __construct()
    {

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
        $availableBuildings = [];
        $availableBuildings[''] = '';
        return $availableBuildings;
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
        $availableUpgrades = [];
        $availableUpgrades[''] = '';
        return $availableUpgrades;
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
        $appearances = [];
        $appearances['wall'] = 'stone ashlar';
        $appearances['facade'] = 'drystack';
        $appearances['support'] = 'lintel';
        //hoarding and stone keep
        if($development['era'] === 'Romanesque' || $development['era'] === 'Norman' || $development['era'] === 'Gothic' || $development['era'] === 'Rayonnant' || $development['era'] === 'Flamboyant' || $development['era'] === 'Italian' || $development['era'] === 'Maritime'){
            $appearances['hoarding'] = 'hoarding';
            $appearances['keep'] = 'donjon';      
        } else {
            $appearances['hoarding'] = '';
            $appearances['keep'] = 'bretasche';
        }
        //chimney and lancet
        if($development['era'] === 'Gothic' || $development['era'] === 'Rayonnant' || $development['era'] === 'Flamboyant' || $development['era'] === 'Italian' || $development['era'] === 'Maritime'){
            $appearances['window'] = 'lancet window';    
            $appearances['gallery'] = 'loggia';
            $appearances['roof'] = 'wooden sloped roof';
            $appearances['tiles'] = 'shingles';   
        } else {
            $appearances['window'] = 'sash window';    
            $appearances['gallery'] = '';
            $appearances['roof'] = 'tatched sloped roof';
            $appearances['tiles'] = 'tatch';
        }

        return $appearances;
    }

}