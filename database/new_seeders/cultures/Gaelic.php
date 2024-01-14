<?php

namespace App\Http\Controllers\cultures;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class Gaelic extends Controller
{
    //main construct
    public function __construct()
    {

    }

    public function determineCultureFeatures(
      ?string $building, 
      ?string $holding,
      ?array $development,
      ?string $cycle,
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
        $features = [];
        $features['building'] = $this->determineBuilding($building);
        $features['holding'] = $this->determineHolding($holding);
        $features['rank'] = $this->determineRank($rank);
        $features['title'] = $this->determineTitle($title);
        $features['literature'] = $this->determineLiterature();
        $features['military'] = $this->determineMilitary();
        $features['country'] = $this->determineCountry();
        $features['heraldry'] = $this->determineHeraldicBanner($title, $estate, $chivalricSociety, $monasticSociety, $features['country']);
        $features['clergy'] = $this->determineClergyUnits($building, $holding, $development, $rank, $title, $estate, $religion, $monasticSociety, $ecclesiasticalSociety);
        $features['monastic'] = $this->determineMonasticUnits($building, $holding, $development, $rank, $title, $estate, $religion, $monasticSociety, $ecclesiasticalSociety);
        $features['burgher'] = $this->determineBurgherUnits($building, $holding, $development, $rank, $title, $estate, $courtSociety, $craftSociety, $feastSociety);
        $features['feudal'] = $this->determineFeudalUnits($building, $holding, $development, $rank, $title, $estate, $chivalricSociety, $courtSociety, $craftSociety, $feastSociety);        
        $features['crusader'] = $this->determineCrusaderUnits($building, $holding, $development, $rank, $title, $estate, $religion, $chivalricSociety);
        return $features;
    }

    private function determineHeraldicBanner(?string $title, ?string $estate, ?array $chivalricSociety, ?array $monasticSociety, string $country): array 
    {
      $heraldry = [];
      if($chivalricSociety !== null){
        if($chivalricSociety['guild_subcategory'] === 'Crusader_Templar'){
          $heraldry['caparison'] = 'templar'; //knight horse
          $heraldry['tabard'] = 'templar'; //knight surcoat
          $heraldry['banner_of_arms'] = 'templar'; //standard bearer
          $heraldry['banderole'] = 'templar'; //knight lance, bishop crosier, ship mast
        } elseif($chivalricSociety['guild_subcategory'] === 'Crusader_Hospitaller'){
          $heraldry['caparison'] = 'hospitaller'; //knight horse
          $heraldry['tabard'] = 'hospitaller'; //knight surcoat
          $heraldry['banner_of_arms'] = 'hospitaller'; //standard bearer
          $heraldry['banderole'] = 'hospitaller'; //knight lance, bishop crosier, ship mast
        } elseif($chivalricSociety['guild_subcategory'] === 'Crusader_Teutonic'){
          $heraldry['caparison'] = 'teutonic'; //knight horse
          $heraldry['tabard'] = 'teutonic'; //knight surcoat
          $heraldry['banner_of_arms'] = 'teutonic'; //standard bearer
          $heraldry['banderole'] = 'teutonic'; //knight lance, bishop crosier, ship mast
        } else {
          $heraldry['caparison'] = $country; //knight horse
          $heraldry['tabard'] = $country; //knight surcoat
          $heraldry['banner_of_arms'] = $country; //standard bearer
          $heraldry['banderole'] = $country; //knight lance, bishop crosier, ship mast
        }
      } else {
        $heraldry['caparison'] = $country; //knight horse
        $heraldry['tabard'] = $country; //knight surcoat
        $heraldry['banner_of_arms'] = $country; //standard bearer
        $heraldry['banderole'] = $country; //knight lance, bishop crosier, ship mast
      }
      $heraldry['gonfalon'] = $country; //community gate, university gate, oratory gate, guild hall gate, castle gate
      if($monasticSociety !== null){
        if($monasticSociety['guild_name'] === 'Dominican Order'){
          $heraldry['scapular'] = 'habit_black'; //monk garment
        } elseif($monasticSociety['guild_name'] === 'Benedictine Order'){
          $heraldry['scapular'] = 'habit_black'; //monk garment
        } elseif($monasticSociety['guild_name'] === 'Cistercian Order'){
          $heraldry['scapular'] = 'habit_black'; //monk garment
        } elseif ($monasticSociety['guild_name'] === 'Franciscan Order'){
          $heraldry['scapular'] = 'habit_grey'; //monk garment
        } elseif ($monasticSociety['guild_name'] === 'Carthusian Order'){
          $heraldry['scapular'] = 'habit_white'; //monk garment
        } elseif ($monasticSociety['guild_name'] === 'Norbertine Order'){
          $heraldry['scapular'] = 'habit_white'; //monk garment
        } elseif ($monasticSociety['guild_name'] === 'Pauline Order'){
          $heraldry['scapular'] = 'habit_white'; //monk garment
        } elseif ($monasticSociety['guild_name'] === 'Sufi Order'){
          $heraldry['scapular'] = 'habit_white'; //monk garment
        } else {
          $heraldry['scapular'] = 'habit_brown'; //monk garment     
        }
      } else {
        $heraldry['scapular'] = 'habit_brown'; //monk garment
      }     
      return $heraldry;
    }

    private function determineCountry(): string 
    {
        return 'celtic';
    }

    private function determineLiterature(): array 
    {
      $cycles = [];
      $cycles[] = 'Matter_Britain';
      return $cycles;
    }

    private function determineMilitary(): string 
    {
        return 'celtic';
    }

    private function determineClergyUnits(
      ?string $building, 
      ?string $holding,
      ?array $development,
      ?string $rank, 
      ?string $title,
      ?string $estate,
      ?string $religion,
      ?array $monasticSociety,
      ?array $ecclesiasticalSociety    
    ): array {
        $clergyUnits = [];
        $clergyUnits[''] = '';
        return $clergyUnits;
    }

    private function determineMonasticUnits(
      ?string $building, 
      ?string $holding,
      ?array $development,
      ?string $rank, 
      ?string $title,
      ?string $estate,
      ?string $religion,
      ?array $monasticSociety,
      ?array $ecclesiasticalSociety    
    ): array {
        $monasticUnits = [];
        $monasticUnits[''] = '';
        return $monasticUnits;
    }

    private function determineBurgherUnits(
      ?string $building, 
      ?string $holding,
      ?array $development,
      ?string $rank, 
      ?string $title,
      ?string $estate,
      ?array $courtSociety,
      ?array $craftSociety,
      ?array $feastSociety     
    ): array {
        $burgherUnits = [];
        $burgherUnits[''] = '';
        return $burgherUnits;
    }

    private function determineFeudalUnits(
      ?string $building, 
      ?string $holding,
      ?array $development,
      ?string $rank, 
      ?string $title,
      ?string $estate,
      ?array $chivalricSociety,
      ?array $courtSociety,
      ?array $craftSociety,
      ?array $feastSociety    
    ): array {
        $feudalUnits = [];
        //foot skirmish
        if($development['skirmish'] === 'Maritime'){
          $feudalUnits['infantry_skirmisher'] = '';
          $feudalUnits['infantry_archer'] = '';
          $feudalUnits['infantry_crossbow'] = '';
          if($development['siege'] === 'Rayonnant' || $development['siege'] === 'Flamboyant' || $development['siege'] === 'Italian' || $development['siege'] === 'Maritime'){
            $feudalUnits['infantry_matchlock'] = 'Arquebusier';    
          } else {
            $feudalUnits['infantry_matchlock'] = '';
          } 
        } elseif($development['skirmish'] === 'Italian'){
          $feudalUnits['infantry_skirmisher'] = '';
          $feudalUnits['infantry_archer'] = '';
          $feudalUnits['infantry_crossbow'] = '';
          if($development['siege'] === 'Rayonnant' || $development['siege'] === 'Flamboyant' || $development['siege'] === 'Italian' || $development['siege'] === 'Maritime'){
            $feudalUnits['infantry_matchlock'] = 'Culveriner';    
          } else {
            $feudalUnits['infantry_matchlock'] = '';
          } 
        } elseif($development['skirmish'] === 'Flamboyant'){
          $feudalUnits['infantry_skirmisher'] = '';
          $feudalUnits['infantry_archer'] = '';
          $feudalUnits['infantry_crossbow'] = '';
          if($development['siege'] === 'Rayonnant' || $development['siege'] === 'Flamboyant' || $development['siege'] === 'Italian' || $development['siege'] === 'Maritime'){
            $feudalUnits['infantry_matchlock'] = '';    
          } else {
            $feudalUnits['infantry_matchlock'] = '';
          }  
        } elseif($development['skirmish'] === 'Rayonnant'){
          $feudalUnits['infantry_skirmisher'] = '';
          $feudalUnits['infantry_archer'] = '';
          $feudalUnits['infantry_crossbow'] = '';
          if($development['siege'] === 'Rayonnant' || $development['siege'] === 'Flamboyant' || $development['siege'] === 'Italian' || $development['siege'] === 'Maritime'){
            $feudalUnits['infantry_matchlock'] = '';    
          } else {
            $feudalUnits['infantry_matchlock'] = '';
          }   
        } elseif($development['skirmish'] === 'Gothic'){
          $feudalUnits['infantry_skirmisher'] = '';
          $feudalUnits['infantry_archer'] = '';
          $feudalUnits['infantry_crossbow'] = '';
          $feudalUnits['infantry_matchlock'] = '';
        } elseif($development['skirmish'] === 'Romanesque' || $development['skirmish'] === 'Norman'){
          $feudalUnits['infantry_skirmisher'] = '';
          $feudalUnits['infantry_archer'] = '';
          $feudalUnits['infantry_crossbow'] = '';
          $feudalUnits['infantry_matchlock'] = '';
        } elseif($development['skirmish'] === 'Ottonian'){
          $feudalUnits['infantry_skirmisher'] = '';
          $feudalUnits['infantry_archer'] = '';
          $feudalUnits['infantry_crossbow'] = '';
          $feudalUnits['infantry_matchlock'] = '';
        } elseif($development['skirmish'] === 'Carolingian' || $development['skirmish'] === 'Viking'){
          $feudalUnits['infantry_skirmisher'] = '';
          $feudalUnits['infantry_archer'] = '';
          $feudalUnits['infantry_crossbow'] = '';
          $feudalUnits['infantry_matchlock'] = '';
        } elseif($development['skirmish'] === 'Merovingian'){
          $feudalUnits['infantry_skirmisher'] = '';
          $feudalUnits['infantry_archer'] = '';
          $feudalUnits['infantry_crossbow'] = '';
          $feudalUnits['infantry_matchlock'] = '';
        } else {
          $feudalUnits['infantry_skirmisher'] = '';
          $feudalUnits['infantry_archer'] = '';
          $feudalUnits['infantry_crossbow'] = '';
          $feudalUnits['infantry_matchlock'] = '';
        }
        //foot polearm
        if($development['polearm'] === 'Maritime'){
          $feudalUnits['infantry_spear'] = '';
          $feudalUnits['infantry_battle_axe'] = '';
          $feudalUnits['infantry_bludgeon'] = '';
        } elseif($development['polearm'] === 'Italian'){
          $feudalUnits['infantry_spear'] = '';
          $feudalUnits['infantry_battle_axe'] = '';
          $feudalUnits['infantry_bludgeon'] = '';
        } elseif($development['polearm'] === 'Flamboyant'){
          $feudalUnits['infantry_spear'] = '';
          $feudalUnits['infantry_battle_axe'] = '';
          $feudalUnits['infantry_bludgeon'] = '';
        } elseif($development['polearm'] === 'Rayonnant'){
          $feudalUnits['infantry_spear'] = '';
          $feudalUnits['infantry_battle_axe'] = '';
          $feudalUnits['infantry_bludgeon'] = '';
        } elseif($development['polearm'] === 'Gothic'){
          $feudalUnits['infantry_spear'] = '';
          $feudalUnits['infantry_battle_axe'] = '';
          $feudalUnits['infantry_bludgeon'] = '';
        } elseif($development['polearm'] === 'Norman'){
          $feudalUnits['infantry_spear'] = '';
          $feudalUnits['infantry_battle_axe'] = '';
          $feudalUnits['infantry_bludgeon'] = '';
        } elseif($development['polearm'] === 'Norman'){
          $feudalUnits['infantry_spear'] = '';
          $feudalUnits['infantry_battle_axe'] = '';
          $feudalUnits['infantry_bludgeon'] = '';
        } elseif($development['polearm'] === 'Viking' || $development['polearm'] === 'Ottonian'){
          $feudalUnits['infantry_spear'] = '';
          $feudalUnits['infantry_battle_axe'] = '';
          $feudalUnits['infantry_bludgeon'] = '';
        } elseif($development['polearm'] === 'Merovingian' || $development['polearm'] === 'Carolingian'){
          $feudalUnits['infantry_spear'] = '';
          $feudalUnits['infantry_battle_axe'] = '';
          $feudalUnits['infantry_bludgeon'] = '';
        } else {
          $feudalUnits['infantry_spear'] = '';
          $feudalUnits['infantry_battle_axe'] = '';
          $feudalUnits['infantry_bludgeon'] = '';
        }
        //foot sword
        if($development['sword'] === 'Maritime'){
          $feudalUnits['infantry_sword'] = '';
        } elseif($development['sword'] === 'Italian'){
            $feudalUnits['infantry_sword'] = '';
        } elseif($development['sword'] === 'Rayonnant' || $development['sword'] === 'Flamboyant'){
          $feudalUnits['infantry_sword'] = '';
        } elseif($development['sword'] === 'Gothic'){
          $feudalUnits['infantry_sword'] = '';
        } elseif($development['sword'] === 'Romanesque' || $development['sword'] === 'Norman'){
          $feudalUnits['infantry_sword'] = '';
        } elseif($development['skirmish'] === 'Ottonian' || $development['sword'] === 'Merovingian' || $development['sword'] === 'Viking' || $development['sword'] === 'Carolingian' || $development['sword'] === 'Ottonian'){
          $feudalUnits['infantry_sword'] = '';
        } else {
          $feudalUnits['infantry_sword'] = '';
        }
        //mounted
        if($development['cavalry'] === 'Maritime'){
          if($development['skirmish'] === 'Romanesque' || $development['skirmish'] === 'Norman' || $development['skirmish'] === 'Gothic' || $development['skirmish'] === 'Rayonnant' || $development['skirmish'] === 'Flamboyant' || $development['skirmish'] === 'Italian' || $development['skirmish'] === 'Maritime'){
            $feudalUnits['cavalry_skirmisher'] = '';
            $feudalUnits['cavalry_archer'] = '';         
            if($chivalricSociety['guild_subcategory'] === 'Crusader_Templar' || $chivalricSociety['guild_subcategory'] === 'Crusader_Hospitaller' || ['guild_subcategory'] === 'Crusader_Common' || $monasticSociety['guild_subcategory'] === 'Monk_Orthodox_Greek'){
              $feudalUnits['cavalry_crossbow'] = 'Turcopolier';
            } else {
              $feudalUnits['cavalry_crossbow'] = '';
            }
          } elseif($development['skirmish'] === 'Ottonian'){ 
            $feudalUnits['cavalry_skirmisher'] = '';
            $feudalUnits['cavalry_archer'] = '';
            if($chivalricSociety['guild_subcategory'] === 'Crusader_Templar' || $chivalricSociety['guild_subcategory'] === 'Crusader_Hospitaller' || ['guild_subcategory'] === 'Crusader_Common' || $monasticSociety['guild_subcategory'] === 'Monk_Orthodox_Greek'){
              $feudalUnits['cavalry_crossbow'] = 'Turcopolier';
            } else {
              $feudalUnits['cavalry_crossbow'] = '';
            }  
          } else {
            $feudalUnits['cavalry_skirmisher'] = '';
            $feudalUnits['cavalry_archer'] = '';
            $feudalUnits['cavalry_crossbow'] = '';
          }      
          $feudalUnits['cavalry_lance'] = '';
          $feudalUnits['cavalry_bludgeon'] = '';
          $feudalUnits['cavalry_sword'] = '';
        } elseif($development['cavalry'] === 'Italian'){
          if($development['skirmish'] === 'Romanesque' || $development['skirmish'] === 'Norman' || $development['skirmish'] === 'Gothic' || $development['skirmish'] === 'Rayonnant' || $development['skirmish'] === 'Flamboyant' || $development['skirmish'] === 'Italian' || $development['skirmish'] === 'Maritime'){
            $feudalUnits['cavalry_skirmisher'] = '';
            $feudalUnits['cavalry_archer'] = '';
            if($chivalricSociety['guild_subcategory'] === 'Crusader_Templar' || $chivalricSociety['guild_subcategory'] === 'Crusader_Hospitaller' || ['guild_subcategory'] === 'Crusader_Common' || $monasticSociety['guild_subcategory'] === 'Monk_Orthodox_Greek'){
              $feudalUnits['cavalry_crossbow'] = 'Turcopolier';
            } else {
              $feudalUnits['cavalry_crossbow'] = '';
            }
          } elseif($development['skirmish'] === 'Ottonian'){ 
            $feudalUnits['cavalry_skirmisher'] = '';
            $feudalUnits['cavalry_archer'] = '';
            if($chivalricSociety['guild_subcategory'] === 'Crusader_Templar' || $chivalricSociety['guild_subcategory'] === 'Crusader_Hospitaller' || ['guild_subcategory'] === 'Crusader_Common' || $monasticSociety['guild_subcategory'] === 'Monk_Orthodox_Greek'){
              $feudalUnits['cavalry_crossbow'] = 'Turcopolier';
            } else {
              $feudalUnits['cavalry_crossbow'] = '';
            } 
          } else {
            $feudalUnits['cavalry_skirmisher'] = '';
            $feudalUnits['cavalry_archer'] = '';
            $feudalUnits['cavalry_crossbow'] = '';
          } 
          $feudalUnits['cavalry_lance'] = '';
          $feudalUnits['cavalry_bludgeon'] = '';
          $feudalUnits['cavalry_sword'] = '';    
        } elseif($development['cavalry'] === 'Flamboyant'){
          if($development['skirmish'] === 'Romanesque' || $development['skirmish'] === 'Norman' || $development['skirmish'] === 'Gothic' || $development['skirmish'] === 'Rayonnant' || $development['skirmish'] === 'Flamboyant' || $development['skirmish'] === 'Italian' || $development['skirmish'] === 'Maritime'){
            $feudalUnits['cavalry_skirmisher'] = '';
            $feudalUnits['cavalry_archer'] = '';
            if($chivalricSociety['guild_subcategory'] === 'Crusader_Templar' || $chivalricSociety['guild_subcategory'] === 'Crusader_Hospitaller' || ['guild_subcategory'] === 'Crusader_Common' || $monasticSociety['guild_subcategory'] === 'Monk_Orthodox_Greek'){
              $feudalUnits['cavalry_crossbow'] = 'Turcopolier';
            } else {
              $feudalUnits['cavalry_crossbow'] = '';
            }
          } elseif($development['skirmish'] === 'Ottonian'){ 
            $feudalUnits['cavalry_skirmisher'] = '';
            $feudalUnits['cavalry_archer'] = '';
            if($chivalricSociety['guild_subcategory'] === 'Crusader_Templar' || $chivalricSociety['guild_subcategory'] === 'Crusader_Hospitaller' || ['guild_subcategory'] === 'Crusader_Common' || $monasticSociety['guild_subcategory'] === 'Monk_Orthodox_Greek'){
              $feudalUnits['cavalry_crossbow'] = 'Turcopolier';
            } else {
              $feudalUnits['cavalry_crossbow'] = '';
            } 
          } else {
            $feudalUnits['cavalry_skirmisher'] = '';
            $feudalUnits['cavalry_archer'] = '';
            $feudalUnits['cavalry_crossbow'] = '';
          } 
          $feudalUnits['cavalry_lance'] = '';
          $feudalUnits['cavalry_bludgeon'] = '';
          $feudalUnits['cavalry_sword'] = ''; 
        } elseif($development['cavalry'] === 'Rayonnant'){
          if($development['skirmish'] === 'Romanesque' || $development['skirmish'] === 'Norman' || $development['skirmish'] === 'Gothic' || $development['skirmish'] === 'Rayonnant' || $development['skirmish'] === 'Flamboyant' || $development['skirmish'] === 'Italian' || $development['skirmish'] === 'Maritime'){
            $feudalUnits['cavalry_skirmisher'] = '';
            $feudalUnits['cavalry_archer'] = '';
            if($chivalricSociety['guild_subcategory'] === 'Crusader_Templar' || $chivalricSociety['guild_subcategory'] === 'Crusader_Hospitaller' || ['guild_subcategory'] === 'Crusader_Common' || $monasticSociety['guild_subcategory'] === 'Monk_Orthodox_Greek'){
              $feudalUnits['cavalry_crossbow'] = 'Turcopolier';
            } else {
              $feudalUnits['cavalry_crossbow'] = '';
            }
          } elseif($development['skirmish'] === 'Ottonian'){ 
            $feudalUnits['cavalry_skirmisher'] = '';
            $feudalUnits['cavalry_archer'] = '';
            if($chivalricSociety['guild_subcategory'] === 'Crusader_Templar' || $chivalricSociety['guild_subcategory'] === 'Crusader_Hospitaller' || ['guild_subcategory'] === 'Crusader_Common' || $monasticSociety['guild_subcategory'] === 'Monk_Orthodox_Greek'){
              $feudalUnits['cavalry_crossbow'] = 'Turcopolier';
            } else {
              $feudalUnits['cavalry_crossbow'] = '';
            } 
          } else {
            $feudalUnits['cavalry_skirmisher'] = '';
            $feudalUnits['cavalry_archer'] = '';
            $feudalUnits['cavalry_crossbow'] = '';
          } 
          $feudalUnits['cavalry_lance'] = '';
          $feudalUnits['cavalry_bludgeon'] = '';
          $feudalUnits['cavalry_sword'] = '';    
        } elseif($development['cavalry'] === 'Gothic'){
          if($development['skirmish'] === 'Romanesque' || $development['skirmish'] === 'Norman' || $development['skirmish'] === 'Gothic' || $development['skirmish'] === 'Rayonnant' || $development['skirmish'] === 'Flamboyant' || $development['skirmish'] === 'Italian' || $development['skirmish'] === 'Maritime'){
            $feudalUnits['cavalry_skirmisher'] = '';
            $feudalUnits['cavalry_archer'] = '';
            if($chivalricSociety['guild_subcategory'] === 'Crusader_Templar' || $chivalricSociety['guild_subcategory'] === 'Crusader_Hospitaller' || ['guild_subcategory'] === 'Crusader_Common' || $monasticSociety['guild_subcategory'] === 'Monk_Orthodox_Greek'){
              $feudalUnits['cavalry_crossbow'] = 'Turcopolier';
            } else {
              $feudalUnits['cavalry_crossbow'] = '';
            }
          } elseif($development['skirmish'] === 'Ottonian'){ 
            $feudalUnits['cavalry_skirmisher'] = '';
            $feudalUnits['cavalry_archer'] = '';
            if($chivalricSociety['guild_subcategory'] === 'Crusader_Templar' || $chivalricSociety['guild_subcategory'] === 'Crusader_Hospitaller' || ['guild_subcategory'] === 'Crusader_Common' || $monasticSociety['guild_subcategory'] === 'Monk_Orthodox_Greek'){
              $feudalUnits['cavalry_crossbow'] = 'Turcopolier';
            } else {
              $feudalUnits['cavalry_crossbow'] = '';
            }
          } else {
            $feudalUnits['cavalry_skirmisher'] = '';
            $feudalUnits['cavalry_archer'] = '';
            $feudalUnits['cavalry_crossbow'] = '';
          } 
          $feudalUnits['cavalry_lance'] = '';
          $feudalUnits['cavalry_bludgeon'] = '';
          $feudalUnits['cavalry_sword'] = '';   
        } elseif($development['cavalry'] === 'Norman'){
          if($development['skirmish'] === 'Romanesque' || $development['skirmish'] === 'Norman' || $development['skirmish'] === 'Gothic' || $development['skirmish'] === 'Rayonnant' || $development['skirmish'] === 'Flamboyant' || $development['skirmish'] === 'Italian' || $development['skirmish'] === 'Maritime'){
            $feudalUnits['cavalry_skirmisher'] = '';
            $feudalUnits['cavalry_archer'] = '';
            if($chivalricSociety['guild_subcategory'] === 'Crusader_Templar' || $chivalricSociety['guild_subcategory'] === 'Crusader_Hospitaller' || ['guild_subcategory'] === 'Crusader_Common' || $monasticSociety['guild_subcategory'] === 'Monk_Orthodox_Greek'){
              $feudalUnits['cavalry_crossbow'] = 'Turcopolier';
            } else {
              $feudalUnits['cavalry_crossbow'] = '';
            }
          } elseif($development['skirmish'] === 'Ottonian'){ 
            $feudalUnits['cavalry_skirmisher'] = '';
            $feudalUnits['cavalry_archer'] = '';
            if($chivalricSociety['guild_subcategory'] === 'Crusader_Templar' || $chivalricSociety['guild_subcategory'] === 'Crusader_Hospitaller' || ['guild_subcategory'] === 'Crusader_Common' || $monasticSociety['guild_subcategory'] === 'Monk_Orthodox_Greek'){
              $feudalUnits['cavalry_crossbow'] = 'Turcopolier';
            } else {
              $feudalUnits['cavalry_crossbow'] = '';
            }  
          } else {
            $feudalUnits['cavalry_skirmisher'] = '';
            $feudalUnits['cavalry_archer'] = '';
            $feudalUnits['cavalry_crossbow'] = '';
          } 
          $feudalUnits['cavalry_lance'] = '';
          $feudalUnits['cavalry_bludgeon'] = '';
          $feudalUnits['cavalry_sword'] = ''; 
        } elseif($development['cavalry'] === 'Romanesque'){
          if($development['skirmish'] === 'Romanesque' || $development['skirmish'] === 'Norman' || $development['skirmish'] === 'Gothic' || $development['skirmish'] === 'Rayonnant' || $development['skirmish'] === 'Flamboyant' || $development['skirmish'] === 'Italian' || $development['skirmish'] === 'Maritime'){
            $feudalUnits['cavalry_skirmisher'] = '';
            $feudalUnits['cavalry_archer'] = '';
            $feudalUnits['cavalry_crossbow'] = '';
          } elseif($development['skirmish'] === 'Ottonian'){ 
            $feudalUnits['cavalry_skirmisher'] = '';
            $feudalUnits['cavalry_archer'] = '';
            $feudalUnits['cavalry_crossbow'] = '';   
          } else {
            $feudalUnits['cavalry_skirmisher'] = '';
            $feudalUnits['cavalry_archer'] = '';
            $feudalUnits['cavalry_crossbow'] = '';
          } 
          $feudalUnits['cavalry_lance'] = '';
          $feudalUnits['cavalry_bludgeon'] = '';
          $feudalUnits['cavalry_sword'] = '';   
        } elseif($development['cavalry'] === 'Ottonian'){
          if($development['skirmish'] === 'Romanesque' || $development['skirmish'] === 'Norman' || $development['skirmish'] === 'Gothic' || $development['skirmish'] === 'Rayonnant' || $development['skirmish'] === 'Flamboyant' || $development['skirmish'] === 'Italian' || $development['skirmish'] === 'Maritime'){
            $feudalUnits['cavalry_skirmisher'] = '';
            $feudalUnits['cavalry_archer'] = '';
            $feudalUnits['cavalry_crossbow'] = '';
          } elseif($development['skirmish'] === 'Ottonian'){ 
            $feudalUnits['cavalry_skirmisher'] = '';
            $feudalUnits['cavalry_archer'] = '';
            $feudalUnits['cavalry_crossbow'] = '';   
          } else {
            $feudalUnits['cavalry_skirmisher'] = '';
            $feudalUnits['cavalry_archer'] = '';
            $feudalUnits['cavalry_crossbow'] = '';
          } 
          $feudalUnits['cavalry_lance'] = '';
          $feudalUnits['cavalry_bludgeon'] = '';
          $feudalUnits['cavalry_sword'] = '';   
        } elseif($development['cavalry'] === 'Viking'){
          $feudalUnits['cavalry_skirmisher'] = '';
          $feudalUnits['cavalry_archer'] = '';
          $feudalUnits['cavalry_crossbow'] = '';
          $feudalUnits['cavalry_lance'] = '';
          $feudalUnits['cavalry_bludgeon'] = '';
          $feudalUnits['cavalry_sword'] = ''; 
        } elseif($development['cavalry'] === 'Carolingian'){
          $feudalUnits['cavalry_skirmisher'] = '';
          $feudalUnits['cavalry_archer'] = '';
          $feudalUnits['cavalry_crossbow'] = '';
          $feudalUnits['cavalry_lance'] = '';
          $feudalUnits['cavalry_bludgeon'] = '';
          $feudalUnits['cavalry_sword'] = '';
        } elseif($development['cavalry'] === 'Merovingian'){
          $feudalUnits['cavalry_skirmisher'] = '';
          $feudalUnits['cavalry_archer'] = '';
          $feudalUnits['cavalry_crossbow'] = '';
          $feudalUnits['cavalry_lance'] = '';
          $feudalUnits['cavalry_bludgeon'] = '';
          $feudalUnits['cavalry_sword'] = '';     
        } else {
          $feudalUnits['cavalry_skirmisher'] = '';
          $feudalUnits['cavalry_archer'] = '';
          $feudalUnits['cavalry_crossbow'] = '';
          $feudalUnits['cavalry_lance'] = '';
          $feudalUnits['cavalry_bludgeon'] = '';
          $feudalUnits['cavalry_sword'] = '';   
        }
        //siege
        if($development['siege'] === 'Flamboyant' || $development['siege'] === 'Italian' || $development['siege'] === 'Maritime'){
          $feudalUnits['siege'] = 'Cannon';  
        } elseif($development['siege'] === 'Gothic' || $development['siege'] === 'Rayonnant'){
          $feudalUnits['siege'] = 'Trebuchet'; 
        } elseif($development['siege'] === 'Norman'){
          $feudalUnits['siege'] = 'Springald';
        } elseif($development['siege'] === 'Merovingian' || $development['siege'] === 'Carolingian' || $development['siege'] === 'Viking' || $development['siege'] === 'Ottonian' || $development['siege'] === 'Romanesque'){
          $feudalUnits['siege'] = 'Mangonel';         
        } else {
          $feudalUnits['siege'] = '';
        }  
        return $feudalUnits;
    }

    private function determineCrusaderUnits(      
      ?string $building, 
      ?string $holding,
      ?array $development,
      ?string $rank, 
      ?string $title,
      ?string $estate,
      ?string $religion,
      ?array $chivalricSociety   
    ): array {
        $crusaderUnits = [];
        $crusaderUnits[''] = '';
        return $crusaderUnits;
    }

    private function determineBuilding(string $building): string 
    {
        switch ($building) {
            case "":
                return '';
              break;
            case "":
                return '';
              break;
            case "":
                return '';
              break;
            case "":
                return '';
              break;
            case "":
                return '';
              break;
            default:
                return '';
        } 
    }

    private function determineHolding(string $holding): string 
    {
        switch ($holding) {
            case "":
                return '';
              break;
            case "":
                return '';
              break;
            case "":
                return '';
              break;
            case "":
                return '';
              break;
            case "":
                return '';
              break;
            default:
                return '';
        } 
    }

    private function determineRank(string $rank): string 
    {
        switch ($rank) {
            case "":
                return '';
              break;
            case "":
                return '';
              break;
            case "":
                return '';
              break;
            case "":
                return '';
              break;
            case "":
                return '';
              break;
            default:
                return '';
        } 
    }

    private function determineTitle(string $title): string 
    {
        switch ($title) {
            case "":
                return '';
              break;
            case "":
                return '';
              break;
            case "":
                return '';
              break;
            case "":
                return '';
              break;
            case "":
                return '';
              break;
            default:
                return '';
        } 
    }

}