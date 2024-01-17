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

      $xml=simplexml_load_file("research.xml") or die("Error: Cannot create object");
      //echo $xml->book[0]->title . "<br>";
      //echo $xml->book[1]->title; 

        switch ($masterCategory) {
              case "Lord of the Manor":
                $armsActions = []; //['action','stat','operand','estate','recruit','craft','found','describe']
                $armsActions['charisma'] = ['Appoint Chamberlain','charisma','plus','noble','Chamberlain','','Household','appoint'];
                $armsActions['organization'] = ['Appoint Serjeant at Arms','organization','plus','peasant','Serjeant at Arms','','','appoint'];
                $armsActions['agriculture'] = ['Appoint Steward','agriculture','plus','noble','Steward','','Manorial_Court','appoint'];
                $armsActions['industry'] = ['Appoint Chancellor','industry','plus','clergy','Chancellor','','Chancery','appoint'];
                $armsActions['commerce'] = ['Appoint Admiral','commerce','plus','noble','Admiral','','Admirality','appoint'];              
                $armsActions['justice'] = ['Appoint Constable','justice','plus','noble','Constable','','Stables','appoint'];                
                $armsActions['defenses'] = ['Appoint Marshall','defenses','plus','noble','Marshall','','Armoury','appoint'];
                $masters['technology'] = [];
                $masters['actions'] = $armsActions;
              break;
            case "Serjeant at Arms":
                $serjeantActions = []; //['action','stat','operand','estate','recruit','craft','found','describe']
                $serjeantActions['charisma'] = ['Appoint Master of the Revels','charisma','plus','peasant','Master of the Revels','','Great_Hall','appoint'];
                $serjeantActions['organization'] = ['Appoint Engineer','organization','plus','burgher','Engineer','','Siege_Workshop','appoint'];
                $serjeantActions['agriculture'] = ['Appoint Almoner','agriculture','plus','clergy','Almoner','','Court_Chapel','appoint'];
                $serjeantActions['industry'] = ['Appoint Master Mason','industry','plus','burgher','Master Mason','','Gallery','appoint'];
                $serjeantActions['commerce'] = ['Appoint Treasurer','commerce','plus','noble','Treasurer','','Muniment','appoint'];            
                $serjeantActions['justice'] = ['Appoint Chronicler','justice','plus','clergy','Chronicler','','Scriptorium','appoint'];               
                $serjeantActions['defenses'] = ['Appoint Castellan','defenses','plus','noble','Castellan','','Gatehouse','appoint'];
                $masters['technology'] = [];
                $masters['actions'] = $serjeantActions;
              break;
            case "Steward":
                $stewardActions = []; //['action','stat','operand','estate','recruit','craft','found','describe']
                $stewardActions['charisma'] = ['Enfeof','charisma','plus','peasant','Peasant','','','recruit peasant']; 
                $stewardActions['organization'] = ['Tax','organization','plus','','','','','collect taxes'];
                $stewardActions['agriculture'] = ['Corvee','agriculture','plus','','','','','gather resources'];
                $stewardActions['industry'] = ['Craft','industry','plus','','','','','produce minor items'];  
                $stewardActions['commerce'] = ['Trade','commerce','plus','','','','Caravan','enact landbound trade'];                                                          
                $stewardActions['justice'] = ['Moot','justice','plus','','','','','hold court'];             
                $stewardActions['defenses'] = ['','defenses','plus','','','','',''];         
                $masters['technology'] = ['Crafts','Manorialism','Feudalism'];
                $masters['actions'] = $stewardActions;
              break;
            case "Chancellor":
                $chancellorActions = []; //['action','stat','operand','estate','recruit','craft','found','describe']
                $chancellorActions['charisma'] = ['Ordain','charisma','plus','clergy','Priest','','','recruit priest'];
                $chancellorActions['organization'] = ['Audience','organization','plus','','','','','enact diplomacy'];
                $chancellorActions['agriculture'] = ['','agriculture','plus','','','','','']; 
                $chancellorActions['industry'] = ['','industry','plus','','','','','']; 
                $chancellorActions['commerce'] = ['Enroll','commerce','plus','','','','University','found higher learning'];              
                $chancellorActions['justice'] = ['Proselytize','justice','plus','','','','','convert population'];
                $chancellorActions['defenses'] = ['','defenses','plus','','','','',''];
                $masters['technology'] = ['Scholasticism'];
                $masters['actions'] = $chancellorActions;
              break;
            case "Treasurer":
                $treasureActions = []; //['action','stat','operand','estate','recruit','craft','found','describe']
                $treasureActions['charisma'] = ['Design','charisma','plus','burgher','Craftsman','Masterpiece','','design masterpiece'];
                $treasureActions['organization'] = ['Claim','organization','plus','','','','','claim titles'];
                $treasureActions['agriculture'] = ['','agriculture','plus','','','','','']; 
                $treasureActions['industry'] = ['Equip','industry','plus','','','Armor','','equip with armor'];
                $treasureActions['commerce'] = ['Furnish','commerce','plus','','','Furnishing','','furnish a holding'];          
                $treasureActions['justice'] = ['Audit','justice','plus','','','','','keep accounts'];
                $treasureActions['defenses'] = ['','defenses','plus','','','','',''];
                $masters['technology'] = ['Finance'];
                $masters['actions'] = $treasureActions;
              break;
            case "Chamberlain":
                $chamberlainActions = []; //['action','stat','operand','estate','recruit','craft','found','describe']
                $chamberlainActions['charisma'] = ['Ennoblement','charisma','plus','noble','Noble','','','recruit noble'];
                $chamberlainActions['organization'] = ['Banquet','organization','plus','peasant','Pantler','','','hold banquet'];
                $chamberlainActions['agriculture'] = ['Provision','agriculture','plus','peasant','Butler','','','store provisions'];
                $chamberlainActions['industry'] = ['Drape','industry','plus','peasant','Valet','Robe','','clothe and hand out wardrobe'];
                $chamberlainActions['commerce'] = ['Network','commerce','plus','noble','Wife','','','host wedding'];       
                $chamberlainActions['justice'] = ['Plot','justice','minus','peasant','Herald','','','scheme or plot or assassinate'];             
                $chamberlainActions['defenses'] = ['Lodge','defenses','plus','burgher','Innkeeper','','','lodge guests'];
                $masters['technology'] = ['Wardrobe'];
                $masters['actions'] = $chamberlainActions;
              break;
            case "Constable":
                $constableActions = []; //['action','stat','operand','estate','recruit','craft','found','describe']
                $constableActions['charisma'] = ['Adoubement','charisma','plus','noble','Knight','','','recruit cavalry'];
                $constableActions['organization'] = ['','organization','plus','','','','',''];
                $constableActions['agriculture'] = ['Chevauchee','agriculture','minus','','','','','cavalry charge and raid holding']; 
                $constableActions['industry'] = ['Muster','industry','plus','','','Horse','','muster cavalry']; 
                $constableActions['commerce'] = ['Ambush','commerce','minus','','','','','maraud landbound trade'];                
                $constableActions['justice'] = ['Charge','justice','minus','','','','','enact a charge'];           
                $constableActions['defenses'] = ['Camp','defenses','plus','','','','Camp','setup camp']; 
                $masters['technologies'] = ['Cavalry'];
                $masters['actions'] = $constableActions;
              break;
            case "Marshall":
                $marshallActions = []; //['action','stat','operand','estate','recruit','craft','found','describe']
                $marshallActions['charisma'] = ['Levy','charisma','plus','peasant','Sergeant','','','levy troops'];
                $marshallActions['organization'] = ['Train','organization','plus','','','','','train troops'];
                $marshallActions['agriculture'] = ['Battle','agriculture','minus','','','','','enact a battle'];
                $marshallActions['industry'] = ['Arm','industry','plus','','','Arms','','arm troops'];
                $marshallActions['commerce'] = ['Campaign','commerce','plus','','','','Army','move army and launch army'];            
                $marshallActions['justice'] = ['Garrison','justice','plus','','','','Garrison','garrison a settlement or holding'];            
                $marshallActions['defenses'] = ['Skirmish','defenses','minus','','','','','enact a skirmish'];
                $masters['technologies'] = ['Skirmish','Melee_Polearm','Melee_Sword','Helmets','Armor'];
                $masters['actions'] = $marshallActions;
              break;
            case "Admiral":
                $admiralActions = []; //['action','stat','operand','estate','recruit','craft','found','describe']
                $admiralActions['charisma'] = ['Captain','charisma','plus','burgher','Captain','','','recruit captain'];
                $admiralActions['organization'] = ['','organization','plus','','','','',''];
                $admiralActions['agriculture'] = ['Fish','agriculture','plus','','','','','fishing']; 
                $admiralActions['industry'] = ['Launch','industry','plus','','','Ship','','build vessel'];
                $admiralActions['commerce'] = ['Sail','commerce','plus','','','','Convoy','enact seabound trade'];            
                $admiralActions['justice'] = ['Plunder','justice','minus','','','','','pirate seabound trade'];              
                $admiralActions['defenses'] =['Blockade','defenses','minus','','','','','blockade port'];
                $masters['technology'] = ['Port'];
                $masters['actions'] = $admiralActions;
              break;
            case "Master of the Revels":
                $revelActions = []; //['action','stat','operand','estate','recruit','craft','found','describe']
                $revelActions['charisma'] = ['','charisma','plus','','','','',''];
                $revelActions['organization'] = ['','organization','plus','','','','',''];
                $revelActions['agriculture'] = ['Feast','agriculture','plus','peasant','Minstrel','','','hold feast'];
                $revelActions['industry'] = ['Hunt','industry','plus','peasant','Gamekeeper','','','hold hunt'];''; 
                $revelActions['commerce'] = ['Fairs','commerce','plus','burgher','Merchant','','','hold trade fair'];              
                $revelActions['justice'] = ['Joust','justice','plus','peasant','Herald','','','hold tournament'];             
                $revelActions['defenses'] = ['','defenses','plus','','','','',''];
                $masters['technology'] = ['Entertainment'];
                $masters['actions'] = $revelActions;
              break;
            case "Chronicler":
                $chroniclerActions = []; //['action','stat','operand','estate','recruit','craft','found','describe']
                $chroniclerActions['charisma'] = ['Tonsure','charisma','plus','clergy','Monk','','','recruit monk'];
                $chroniclerActions['organization'] = ['','organization','plus','','','','',''];
                $chroniclerActions['agriculture'] = ['','agriculture','plus','','','','',''];
                $chroniclerActions['industry'] = ['Illustrate','industry','plus','','','Book','','illuminate a book']; 
                $chroniclerActions['commerce'] = ['Survey','commerce','plus','','','','','enact survey'];          
                $chroniclerActions['justice'] = ['','justice','plus','','','','',''];
                $chroniclerActions['defenses'] = ['','defenses','plus','','','','','']; 
                $masters['technology'] = ['Scriptures'];
                $masters['actions'] = $chroniclerActions;
              break;
            case "Almoner":
                $almonerActions = []; //['action','stat','operand','estate','recruit','craft','found','describe']
                $almonerActions['charisma'] = ['Vow','charisma','plus','noble','Crusader','','','recruit a crusader']; 
                $almonerActions['organization'] = ['','organization','plus','','','','',''];
                $almonerActions['agriculture'] = ['Heal','agriculture','plus','','','','Hospital','heal troops or population'];
                $almonerActions['industry'] = ['Donate','industry','plus','','','','','donate to the poor '];
                $almonerActions['commerce'] = ['Pilgrimage','commerce','plus','','','','Pilgrimage','go on pilgrimage'];       
                $almonerActions['justice'] = ['Crusade','justice','plus','','','','Crusade','launch crusade'];
                $almonerActions['defenses'] = ['','defenses','plus','','','','',''];
                $masters['technology'] = ['Monasticism'];
                $masters['actions'] = $almonerActions;
              break;
            case "Master Mason":
                $builderActions = []; //['action','stat','operand','estate','recruit','craft','found','describe']
                $builderActions['charisma'] = ['Architect','charisma','plus','peasant','Architect','','','recruit architect'];
                $builderActions['organization'] = ['','organization','plus','','','','',''];
                $builderActions['agriculture'] = ['','agriculture','plus','','','','',''];
                $builderActions['industry'] = ['Construct','industry','plus','','','','Holding','construct buildings'];
                $builderActions['commerce'] = ['Upgrade','commerce','plus','','','','','improve buildings and holdings'];         
                $builderActions['justice'] = ['','justice','plus','','','','',''];         
                $builderActions['defenses'] = ['Restore','defenses','plus','','','','','restore fortifications'];
                $masters['technologies'] = ['Construction'];
                $masters['actions'] = $builderActions;
              break;
            case "Castellan":
                $castleActions = []; //['action','stat','operand','estate','recruit','craft','found','describe']
                $castleActions['charisma'] =  ['Guard','charisma','plus','peasant','Guard','','','guard settlement or holding'];
                $castleActions['organization'] = ['','organization','plus','','','','',''];
                $castleActions['agriculture'] = ['','agriculture','plus','','','','',''];
                $castleActions['industry'] = ['','industry','plus','','','','',''];
                $castleActions['commerce'] = ['','commerce','plus','','','','',''];      
                $castleActions['justice'] = ['','justice','plus','','','','',''];        
                $castleActions['defenses'] = ['Fortify','defenses','plus','','','','','construct castles and fortifications'];  
                $masters['technologies'] = ['Fortification'];
                $masters['actions'] = $castleActions;
              break;
            case "Engineer":
                $engineerActions = []; //['action','stat','operand','estate','recruit','craft','found','describe']
                $engineerActions['charisma'] = ['Contract','charisma','plus','peasant','Gynour','','','recruit engineer'];
                $engineerActions['organization'] = ['Engineer','organization','plus','','','Siege_Engine','','create siege equipment'];
                $engineerActions['agriculture'] = ['Sap','agriculture','minus','','','','','mine walls'];
                $engineerActions['industry'] = ['Bombard','industry','minus','','','','','bombard holding'];
                $engineerActions['commerce'] = ['Investment','commerce','minus','','','','','encircle holding'];               
                $engineerActions['justice'] = ['','justice','plus','','','','',''];               
                $engineerActions['defenses'] = ['Besiege','defenses','minus','','','','','besiege walls'];
                $masters['technology'] = ['Siegecraft'];
                $masters['actions'] = $engineerActions;
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