<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class ResearchController extends Controller
{
    //main construct
    public function __construct(

    ) {
        $this->middleware('auth');
    }

    //determine masters
    public function determineMaster(
        string $masterCategory,
    ): array {
        switch ($masterCategory) {
            case "Admiral":
                $masters['technology'] = ['Port'];
                $masters['actions'] = ['Invite_Captain','Launch_Ship','Sail'];
              break;
            case "Steward":
                $masters['technology'] = ['Crafts','Manorialism'];
                $masters['actions'] = ['Collect_Taxes','Craft','Trade'];
              break;
            case "Chamberlain":
                $masters['technology'] = ['Wardrobe'];
                $masters['actions'] = ['Ennoblement','Debut','Plot','Network','Hold_Court'];
              break;
            case "Master of the Revels":
                $masters['technology'] = ['Entertainment'];
                $masters['actions'] = ['Feast','Fairs','Hunt','Joust'];
              break;
            case "Chronicler":
                $masters['technology'] = ['Scriptures'];
                $masters['actions'] = ['Survey','Illustrate','Tonsure'];
              break;
            case "Chancellor":
                $masters['technology'] = ['Feudalism','Monasticism','Scholasticism'];
                $masters['actions'] = ['Herald','Claim','Proselytize','Ordain','Heal'];
              break;
            case "Engineer":
                $masters['technology'] = ['Siegecraft'];
                $masters['actions'] = ['Besiege','Restore'];
              break;
            case "Master Mason":
                $masters['technologies'] = ['Construction','Fortification'];
                $masters['actions'] = ['Construct','Fortify'];
              break;
            case "Constable":
                $masters['technologies'] = ['Cavalry'];
                $masters['actions'] = ['Muster','Charge','Adoubement'];
              break;
            case "Marshall":
                $masters['technologies'] = ['Skirmish','Melee_Polearm','Melee_Sword','Helmets','Armor'];
                $masters['actions'] = ['Levy','Train','Campaign','Skirmish','Battle'];
              break;
            default:
                return $this->defaultMasters();
        } 
    }

    public function determineTechnology(
        string $technologyCategory,
    ): array {
        switch ($technologyCategory) {
            case "Port":
                $technologies['masters'] = ['Admiral'];
              break;
            case "Crafts":
                $technologies['masters'] = ['Steward'];
              break;
            case "Manorialism":
                $technologies['masters'] = ['Steward'];
              break;
            case "Wardrobe":
                $technologies['masters'] = ['Chamberlain'];
              break;
            case "Feudalism":
                $technologies['masters'] = ['Chancellor'];
              break;
            case "Monasticism":
                $technologies['masters'] = ['Chancellor'];
              break;
            case "Science":
                $technologies['masters'] = ['Chancellor'];
              break;
            case "Entertainment":
                $technologies['masters'] = ['Master of the Revels'];
              break;
            case "Scriptures":
                $technologies['masters'] = ['Chronicler'];
              break;
            case "Siegecraft":
                $technologies['masters'] = ['Engineer'];
              break;
            case "Fortification":
                $technologies['masters'] = ['Master Mason'];
              break;
            case "Construction":
                $technologies['masters'] = ['Master Mason'];
              break;
            case "Cavalry":
                $technologies['masters'] = ['Constable'];
              break;
            case "Armor":
                $technologies['masters'] = ['Marshall'];
              break;
            case "Helmets":
                $technologies['masters'] = ['Marshall'];
              break;
            case "Skirmish":
                $technologies['masters'] = ['Marshall'];
              break;
            case "Melee_Polearm":
                $technologies['masters'] = ['Marshall'];
              break;
            case "Melee_Sword":
                $technologies['masters'] = ['Marshall'];
              break;
            default:
                return $this->defaultMasters();
        } 
    }

    private function defaultUpgrades(): array 
    {
        $defaultUpgrades = [];
        $defaultUpgrades['upgrade'] = '';
        return $defaultUpgrades;
    }

    private function defaultSciences(): array 
    {
        $defaultSciences = [];
        $defaultSciences['science'] = '';
        return $defaultSciences;
    }

    private function defaultMasters(): array 
    {
        $defaultMasters = [];
        $defaultMasters['master'] = '';
        return $defaultMasters;
    }

}