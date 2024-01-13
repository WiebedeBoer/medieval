<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class AdobeMashriq extends Controller
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
        $appearances['wall'] = 'adobe';
        $appearances['facade'] = 'adobe';
        $appearances['support'] = 'lintel';
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
            $appearances['window'] = 'mashrabiya';
            $appearances['gallery'] = 'balustrade';
            $appearances['roof'] = 'adobe flat roof';
            $appearances['tiles'] = 'adobe';
        } else {       
            $appearances['window'] = 'sash window';
            $appearances['gallery'] = ''; 
            $appearances['roof'] = 'adobe flat roof';
            $appearances['tiles'] = 'adobe';       
        }   
        return $appearances;
    }

}