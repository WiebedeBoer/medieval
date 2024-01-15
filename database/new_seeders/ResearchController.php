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
            case "Steward":
                $stewardActions = [];
                $stewardActions['charisma'] = ''; //recruit
                $stewardActions['organization'] = 'Collect Taxes'; //collect taxes
                $stewardActions['agriculture'] = 'Corvee'; //improve agriculture and gather resources
                $stewardActions['industry'] = 'Craft'; //improve industry and craft items 
                $stewardActions['commerce'] = 'Trade'; //improve commerce and enact landbound trade                                                         
                $stewardActions['justice'] = 'Hold Court'; //improve justice and hold court               
                $stewardActions['defenses'] = '';          
                $masters['technology'] = ['Crafts','Manorialism'];
                $masters['actions'] = $stewardActions;
              break;
            case "Chancellor":
                $chancellorActions = [];
                $chancellorActions['charisma'] = 'Ordain'; //recruit priest
                $chancellorActions['organization'] = 'Claim'; //claim title
                $chancellorActions['agriculture'] = 'Heal'; //heal staff or troops or population
                $chancellorActions['industry'] = '';
                $chancellorActions['commerce'] = 'Herald'; //enact diplomacy               
                $chancellorActions['justice'] = 'Proselytize'; //convert population
                $chancellorActions['defenses'] = ''; 
                $masters['technology'] = ['Feudalism','Monasticism','Scholasticism'];
                $masters['actions'] = $chancellorActions;
              break;
            case "Chamberlain":
                $chamberlainActions = [];
                $chamberlainActions['charisma'] = 'Ennoblement'; //recruit noble
                $chamberlainActions['organization'] = 'Invite Debutante'; //recruit maiden
                $chamberlainActions['agriculture'] = ''; //
                $chamberlainActions['industry'] = ''; //
                $chamberlainActions['commerce'] = 'Network'; //improve spy network           
                $chamberlainActions['justice'] = 'Plot'; //scheme or plot or assassinate            
                $chamberlainActions['defenses'] = ''; //
                $masters['technology'] = ['Wardrobe'];
                $masters['actions'] = $chamberlainActions;
              break;
            case "Constable":
                $constableActions = [];
                $constableActions['charisma'] = 'Adoubement'; //recruit knight
                $constableActions['organization'] = ''; //
                $constableActions['agriculture'] = 'Ambush'; //enact an ambush
                $constableActions['industry'] = 'Muster'; //muster cavalry
                $constableActions['commerce'] = 'Charge'; //enact a cavalry charge                
                $constableActions['justice'] = 'Raid'; //launch a raid               
                $constableActions['defenses'] = ''; //
                $masters['technologies'] = ['Cavalry'];
                $masters['actions'] = $constableActions;
              break;
            case "Marshall":
                $marshallActions = [];
                $marshallActions['charisma'] = 'Levy'; //recruit infantry
                $marshallActions['organization'] = 'Train'; //train troops
                $marshallActions['agriculture'] = 'Battle'; //enact a battle
                $marshallActions['industry'] = 'Arm'; //arm troops
                $marshallActions['commerce'] = 'Campaign'; //move army and launch army              
                $marshallActions['justice'] = 'Guard'; //guard settlement or holding             
                $marshallActions['defenses'] = 'Skirmish'; //enact a skirmish
                $masters['technologies'] = ['Skirmish','Melee_Polearm','Melee_Sword','Helmets','Armor'];
                $masters['actions'] = $marshallActions;
              break;
            case "Admiral":
                $admiralActions = [];
                $admiralActions['charisma'] = 'Invite Captain'; //recruit navy
                $admiralActions['organization'] = ''; //
                $admiralActions['agriculture'] = ''; //
                $admiralActions['industry'] = 'Launch Ship'; //build vessel
                $admiralActions['commerce'] = 'Sail'; //enact seabound trade            
                $admiralActions['justice'] = 'Plunder'; //pirate seabound trade               
                $admiralActions['defenses'] = 'Blockade'; //blockade port
                $masters['technology'] = ['Port'];
                $masters['actions'] = $admiralActions;
              break;
            case "Master of the Revels":
                $revelActions = [];
                $revelActions['charisma'] = 'Hire Minstrel'; //recruit entertainer
                $revelActions['organization'] = ''; //
                $revelActions['agriculture'] = 'Feast'; //hold feast
                $revelActions['industry'] = 'Hunt'; //hold hunt 
                $revelActions['commerce'] = 'Fairs'; //hold trade fairs              
                $revelActions['justice'] = ''; //             
                $revelActions['defenses'] = 'Joust'; //hold tournament 
                $masters['technology'] = ['Entertainment'];
                $masters['actions'] = $revelActions;
              break;
            case "Chronicler":
                $chroniclerActions = [];
                $chroniclerActions['charisma'] = 'Tonsure'; //recruit monk
                $chroniclerActions['organization'] = ''; //
                $chroniclerActions['agriculture'] = ''; //
                $chroniclerActions['industry'] = 'Illustrate'; //create great book 
                $chroniclerActions['commerce'] = ''; //           
                $chroniclerActions['justice'] = 'Survey'; //create survey
                $chroniclerActions['defenses'] = ''; // 
                $masters['technology'] = ['Scriptures'];
                $masters['actions'] = $chroniclerActions;
              break;
            case "Master Mason":
                $builderActions = [];
                $builderActions['charisma'] = ''; //recruit
                $builderActions['organization'] = ''; //
                $builderActions['agriculture'] = ''; //
                $builderActions['industry'] = 'Construct'; //construct buildings and holdings
                $builderActions['commerce'] = 'Upgrade'; //improve buildings and holdings        
                $builderActions['justice'] = ''; //          
                $builderActions['defenses'] = 'Fortify'; //construct castles and fortifications 
                $masters['technologies'] = ['Construction','Fortification'];
                $masters['actions'] = $builderActions;
              break;
            case "Engineer":
                $engineerActions = [];
                $engineerActions['charisma'] = ''; //recruit
                $engineerActions['organization'] = ''; //
                $engineerActions['agriculture'] = ''; //
                $engineerActions['industry'] = 'Besiege'; //create siege equipment
                $engineerActions['commerce'] = ''; //               
                $engineerActions['justice'] = ''; //                
                $engineerActions['defenses'] = 'Restore'; //restore fortifications 
                $masters['technology'] = ['Siegecraft'];
                $masters['actions'] = ['',''];
              break;
            case "Lord of the Manor":
                $armsActions = [];
                $armsActions['charisma'] = 'Appoint Chamberlain'; //
                $armsActions['organization'] = 'Appoint Serjeant at Arms'; //
                $armsActions['agriculture'] = 'Appoint Steward'; //
                $armsActions['industry'] = 'Appoint Chancellor'; //
                $armsActions['commerce'] = 'Appoint Admiral'; //               
                $armsActions['justice'] = 'Appoint Constable'; //                
                $armsActions['defenses'] = 'Appoint Marshall'; // 
                $masters['technology'] = [];
                $masters['actions'] = ['',''];
              break;
            case "Serjeant at Arms":
                $engineerActions = [];
                $engineerActions['charisma'] = ''; //
                $engineerActions['organization'] = ''; //
                $engineerActions['agriculture'] = ''; //
                $engineerActions['industry'] = 'Appoint Master Mason'; //
                $engineerActions['commerce'] = 'Appoint Master of the Revels'; //               
                $engineerActions['justice'] = 'Appoint Chronicler'; //                
                $engineerActions['defenses'] = 'Appoint Engineer'; // 
                $masters['technology'] = [];
                $masters['actions'] = ['',''];
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
            case "Scholasticism":
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
        $defaultMasters['master'] = 'Employ';
        return $defaultMasters;
    }

}