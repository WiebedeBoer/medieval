<?php

namespace App\Http\Controllers\architecture;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class HalfTimberedStudded extends Controller
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
        $appearances['wall'] = 'wattle and daub';
        $appearances['facade'] = 'whitewashed';
        $appearances['support'] = 'studded timber beams'; 
        //hoarding and stone keep
        if($development == 'Romanesque' || $development == 'Norman' || $development == 'Gothic' || $development == 'Rayonnant' || $development == 'Flamboyant' || $development == 'Italian' || $development == 'Maritime'){
            $appearances['hoarding'] = 'hoarding';
            $appearances['keep'] = 'donjon';      
        } else {
            $appearances['hoarding'] = '';
            $appearances['keep'] = 'bretasche';
        }
        //chimney and lancet
        if($development == 'Gothic' || $development == 'Rayonnant' || $development == 'Flamboyant' || $development == 'Italian' || $development == 'Maritime'){         
            $appearances['window'] = 'lancet window';    
            $appearances['gallery'] = 'balustrade'; 
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