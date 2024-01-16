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
              case "Lord of the Manor":
                $armsActions = [];
                $armsActions['charisma'] = 'Appoint Chamberlain';
                $armsActions['organization'] = 'Appoint Serjeant at Arms';
                $armsActions['agriculture'] = 'Appoint Steward';
                $armsActions['industry'] = 'Appoint Chancellor';
                $armsActions['commerce'] = 'Appoint Admiral';               
                $armsActions['justice'] = 'Appoint Constable';                
                $armsActions['defenses'] = 'Appoint Marshall';
                $masters['technology'] = [];
                $masters['actions'] = $armsActions;
              break;
            case "Serjeant at Arms":
                $serjeantActions = [];
                $serjeantActions['charisma'] = 'Appoint Master of the Revels';
                $serjeantActions['organization'] = 'Appoint Engineer';
                $serjeantActions['agriculture'] = 'Appoint Almoner';
                $serjeantActions['industry'] = 'Appoint Master Mason';
                $serjeantActions['commerce'] = 'Appoint Treasurer';              
                $serjeantActions['justice'] = 'Appoint Chronicler';                
                $serjeantActions['defenses'] = 'Appoint Castellan'; 
                $masters['technology'] = [];
                $masters['actions'] = $serjeantActions;
              break;
            case "Steward":
                $stewardActions = [];
                $stewardActions['charisma'] = 'Enfeof'; //recruit peasant
                $stewardActions['organization'] = 'Collect Taxes'; //collect taxes
                $stewardActions['agriculture'] = 'Corvee'; //(+agriculture) gather resources
                $stewardActions['industry'] = 'Craft'; //(+industry) craft items 
                $stewardActions['commerce'] = 'Trade'; //(+commerce) enact landbound trade                                                         
                $stewardActions['justice'] = 'Hold Court'; //(+justice) hold court               
                $stewardActions['defenses'] = '';          
                $masters['technology'] = ['Crafts','Manorialism','Feudalism'];
                $masters['actions'] = $stewardActions;
              break;
            case "Chancellor":
                $chancellorActions = [];
                $chancellorActions['charisma'] = 'Ordain'; //recruit priest
                $chancellorActions['organization'] = 'Claim'; //claim title
                $chancellorActions['agriculture'] = ''; //
                $chancellorActions['industry'] = ''; //
                $chancellorActions['commerce'] = 'Herald'; //(+commerce) enact diplomacy               
                $chancellorActions['justice'] = 'Proselytize'; //(+justice) convert population
                $chancellorActions['defenses'] = ''; //
                $masters['technology'] = ['Scholasticism'];
                $masters['actions'] = $chancellorActions;
              break;
            case "Treasurer":
                $treasureActions = [];
                $treasureActions['charisma'] = ''; // 
                $treasureActions['organization'] = ''; //
                $treasureActions['agriculture'] = ''; //
                $treasureActions['industry'] = ''; //
                $treasureActions['commerce'] = 'Drape'; //(+commerce) clothe and hand out wardrobe             
                $treasureActions['justice'] = 'Audit'; //(+justice) keep accounts
                $treasureActions['defenses'] = ''; //
                $masters['technology'] = ['Finance'];
                $masters['actions'] = $treasureActions;
              break;
            case "Chamberlain":
                $chamberlainActions = [];
                $chamberlainActions['charisma'] = 'Ennoblement'; //recruit noble
                $chamberlainActions['organization'] = 'Invite Debutante'; //recruit maiden
                $chamberlainActions['agriculture'] = ''; //
                $chamberlainActions['industry'] = ''; //
                $chamberlainActions['commerce'] = 'Network'; //(+commerce) increase spy network           
                $chamberlainActions['justice'] = 'Plot'; //(+justice) scheme or plot or assassinate            
                $chamberlainActions['defenses'] = ''; //
                $masters['technology'] = ['Wardrobe'];
                $masters['actions'] = $chamberlainActions;
              break;
            case "Constable":
                $constableActions = [];
                $constableActions['charisma'] = 'Adoubement'; //recruit knight
                $constableActions['organization'] = ''; //
                $constableActions['agriculture'] = 'Ambush'; //(+agriculture) enact an ambush
                $constableActions['industry'] = 'Muster'; //(+industry) muster cavalry
                $constableActions['commerce'] = 'Charge'; //(+commerce) enact a cavalry charge                
                $constableActions['justice'] = 'Raid'; //(+justice) launch a raid               
                $constableActions['defenses'] = ''; //
                $masters['technologies'] = ['Cavalry'];
                $masters['actions'] = $constableActions;
              break;
            case "Marshall":
                $marshallActions = [];
                $marshallActions['charisma'] = 'Levy'; //recruit infantry
                $marshallActions['organization'] = 'Train'; //train troops
                $marshallActions['agriculture'] = 'Battle'; //(+agriculture) enact a battle
                $marshallActions['industry'] = 'Arm'; //(+industry) arm troops
                $marshallActions['commerce'] = 'Campaign'; //(+commerce) move army and launch army              
                $marshallActions['justice'] = 'Guard'; //(+justice) guard settlement or holding             
                $marshallActions['defenses'] = 'Skirmish'; //(+defenses) enact a skirmish
                $masters['technologies'] = ['Skirmish','Melee_Polearm','Melee_Sword','Helmets','Armor'];
                $masters['actions'] = $marshallActions;
              break;
            case "Admiral":
                $admiralActions = [];
                $admiralActions['charisma'] = 'Invite Captain'; //recruit navy
                $admiralActions['organization'] = ''; //
                $admiralActions['agriculture'] = ''; //
                $admiralActions['industry'] = 'Launch Ship'; //(+industry) build vessel
                $admiralActions['commerce'] = 'Sail'; //(+commerce) enact seabound trade            
                $admiralActions['justice'] = 'Plunder'; //(+justice) pirate seabound trade               
                $admiralActions['defenses'] = 'Blockade'; //blockade port
                $masters['technology'] = ['Port'];
                $masters['actions'] = $admiralActions;
              break;
            case "Master of the Revels":
                $revelActions = [];
                $revelActions['charisma'] = 'Hire Minstrel'; //recruit entertainer
                $revelActions['organization'] = ''; //
                $revelActions['agriculture'] = 'Feast'; //(+agriculture) hold feast
                $revelActions['industry'] = 'Hunt'; //(+industry) hold hunt 
                $revelActions['commerce'] = 'Fairs'; //(+commerce) hold trade fairs              
                $revelActions['justice'] = 'Joust'; //(+justice) hold tournament            
                $revelActions['defenses'] = ''; // 
                $masters['technology'] = ['Entertainment'];
                $masters['actions'] = $revelActions;
              break;
            case "Chronicler":
                $chroniclerActions = [];
                $chroniclerActions['charisma'] = 'Tonsure'; //recruit monk
                $chroniclerActions['organization'] = ''; //
                $chroniclerActions['agriculture'] = ''; //
                $chroniclerActions['industry'] = 'Illustrate'; //(+industry) create great book 
                $chroniclerActions['commerce'] = ''; //           
                $chroniclerActions['justice'] = 'Survey'; //(+justice) create survey
                $chroniclerActions['defenses'] = ''; // 
                $masters['technology'] = ['Scriptures'];
                $masters['actions'] = $chroniclerActions;
              break;
            case "Almoner":
                $almonerActions = [];
                $almonerActions['charisma'] = 'Crusade'; //recruit crusader
                $almonerActions['organization'] = ''; //
                $almonerActions['agriculture'] = 'Heal'; //(+agriculture) heal staff or troops or population
                $almonerActions['industry'] = ''; //
                $almonerActions['commerce'] = 'Donate'; //(+commerce) donate money to the poor           
                $almonerActions['justice'] = ''; //
                $almonerActions['defenses'] = ''; // 
                $masters['technology'] = ['Monasticism'];
                $masters['actions'] = $almonerActions;
              break;
            case "Master Mason":
                $builderActions = [];
                $builderActions['charisma'] = ''; //recruit builder
                $builderActions['organization'] = ''; //
                $builderActions['agriculture'] = ''; //
                $builderActions['industry'] = 'Construct'; //(+industry) construct buildings and holdings
                $builderActions['commerce'] = 'Upgrade'; //(+commerce) improve buildings and holdings        
                $builderActions['justice'] = ''; //          
                $builderActions['defenses'] = ''; //
                $masters['technologies'] = ['Construction'];
                $masters['actions'] = $builderActions;
              break;
            case "Castellan":
                $castleActions = [];
                $castleActions['charisma'] = 'Garrison'; //recruit guard
                $castleActions['organization'] = ''; //
                $castleActions['agriculture'] = ''; //
                $castleActions['industry'] = ''; //
                $castleActions['commerce'] = ''; //      
                $castleActions['justice'] = ''; //         
                $castleActions['defenses'] = 'Fortify'; //(+defenses) construct castles and fortifications 
                $masters['technologies'] = ['Fortification'];
                $masters['actions'] = $castleActions;
              break;
            case "Engineer":
                $engineerActions = [];
                $engineerActions['charisma'] = ''; //recruit besieger
                $engineerActions['organization'] = ''; //
                $engineerActions['agriculture'] = ''; //
                $engineerActions['industry'] = 'Besiege'; //(+industry) create siege equipment
                $engineerActions['commerce'] = ''; //               
                $engineerActions['justice'] = ''; //                
                $engineerActions['defenses'] = 'Restore'; //(+defenses) restore fortifications 
                $masters['technology'] = ['Siegecraft'];
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
            case "Feudalism":
                $technologies['masters'] = ['Steward'];
              break;
            case "Wardrobe":
                $technologies['masters'] = ['Chamberlain'];
              break;
            case "Scholasticism":
                $technologies['masters'] = ['Chancellor'];
              break;
            case "Monasticism":
                $technologies['masters'] = ['Almoner'];
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
                $technologies['masters'] = ['Castellan'];
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