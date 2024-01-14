<?php

namespace App\Http\Controllers\architecture;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class HalfTimberedKonak extends Controller
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
        $appearances['wall'] = 'wattle and daub';
        $appearances['facade'] = 'whitewashed';
        $appearances['support'] = 'studded timber beams';
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
            $appearances['window'] = 'mashrabiya';
            $appearances['gallery'] = 'mashrabiya';
            $appearances['roof'] = 'tiled sloped roof';
            $appearances['tiles'] = 'terracotta tiles';
        } else {
            $appearances['window'] = 'sash window';  
            $appearances['gallery'] = '';
            $appearances['roof'] = 'tatched sloped roof';
            $appearances['tiles'] = 'tatch';    
        }     
        return $appearances;
    }

}