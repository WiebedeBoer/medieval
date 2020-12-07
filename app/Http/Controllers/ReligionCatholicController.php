<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReligionCatholicController extends Controller
{
    //catholic
    public function religion($career,$category,$rank,$name)
    {            
        //royalty
        if($career =="elective_empire"){
            $selected_title = $this->elective_empire_catholic($category,$rank,$name);
            $controlled_title->succession ="elective_empire";
        }
        elseif($career =="fixed_empire" || $career =="fixed_royalty"){
            $selected_title = $this->noble_catholic($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }
        elseif($career =="tanistry_royalty"){
            $selected_title = $this->tanistry_monarchy_catholic($category,$rank,$name);
            $controlled_title->succession ="tanistry_monarchy";
        }
        elseif($career =="confederate_temporal"){
            $selected_title = $this->noble_catholic($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }
        elseif($career =="fixed_sharifate"){
            $selected_title = $this->noble_catholic($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }
        elseif($career =="fixed_caliphate"){
            $selected_title = $this->noble_catholic($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }
        //republic
        elseif($career =="merchant_republic"){
            $selected_title = $this->elective_catholic($category,$rank,$name);
            $controlled_title->succession ="elective burgher";
        }
        elseif($career =="maritime_republic"){
            $selected_title = $this->elective_catholic($category,$rank,$name);
            $controlled_title->succession ="elective burgher";
        }
        //court
        elseif($career =="prince_elector"){
            $selected_title = $this->court_catholic($category,$rank,$name);
            $controlled_title->succession ="elector";
        }  
        elseif($career =="herald"){
            $selected_title = $this->herald_catholic($category,$rank,$name);
            $controlled_title->succession ="delegate";
        }  
        elseif($career =="camerlengo"){
            $selected_title = $this->herald_catholic($category,$rank,$name);
            $controlled_title->succession ="camerlengo";
        }  
        //nobility
        elseif($career =="fixed_nobility"){
            $selected_title = $this->noble_catholic($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }
        //gentry
        elseif($career =="fixed_gentry"){
            $selected_title = $this->noble_catholic($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }             
        //papacy
        elseif($career =="elective_papacy"){
            $selected_title = $this->papacy_catholic($category,$rank,$name);
            $controlled_title->succession ="papacy";
        }
        //patriarch
        elseif($career =="patriarchy"){
            $selected_title = $this->elective_church_catholic($category,$rank,$name);  
            $controlled_title->succession ="elective church";
        }
        //church
        elseif($career =="confederate_ecclessiastical"){
            $selected_title = $this->elective_church_catholic($category,$rank,$name);
            $controlled_title->succession ="elective church";
        }
        elseif($career =="fixed_eclessiastical"){
            $selected_title = $this->elective_church_catholic($category,$rank,$name);
            $controlled_title->succession ="elective church";
        }
        //crusader
        elseif($career =="crusader_grandmaster" || $career =="commander_teutonic" || $career =="commander_hospitaller" || $career =="commander_templar"){
            $selected_title = $this->crusader_catholic($category,$rank,$name);
            $controlled_title->succession ="elective crusader";
        }
        //monastic
        elseif($career =="monastic_grandmaster" || $career =="fixed_monastic"){
            $selected_title = $this->elective_monastic_catholic($category,$rank,$name);
            $controlled_title->succession ="elective monastic";
        }
        //burgher
        elseif($career =="fixed_burgher"){
            $selected_title = $this->burgher_catholic($category,$rank,$name);
            $controlled_title->succession ="elective burgher";
        }
        //guild
        elseif($career =="knight_grandmaster"){
            $selected_title = $this->delegate_catholic($category,$rank,$name);
            $controlled_title->succession ="delegate";
        }
        elseif($career =="trade_league" || $career =="trade_kontor" || $career =="trade_fair"){
            $selected_title = $this->guild_catholic($category,$rank,$name);
            $controlled_title->succession ="elective guild";
        }
        elseif($career =="guild_grandmaster"){
            $selected_title = $this->guild_catholic($category,$rank,$name);
            $controlled_title->succession ="elective guild";
        }
        elseif($career =="college_master" || $career =="fixed_hospice" || $career =="harbour_master"){
            $selected_title = $this->warden_catholic($category,$rank,$name);
            $controlled_title->succession ="elective burgher";
        }
        //hunt
        elseif($career =="hunt_game" || $career =="hunt_falcon"){
            $selected_title = $this->hunt_catholic($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }
        //innkeeper
        elseif($career =="tavern_hostler" || $career =="tavern_innkeeper"){
            $selected_title = $this->inn_catholic($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }
        //peasant
        elseif($career =="fixed_peasantry"){
            $selected_title = $this->peasant_catholic($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }
        else {
            //not possible
            $controlled_title ="inaccessible";
        }
        return $controlled_title;  
    }

    //type: elective empire
    //religion: catholic
    private function elective_empire_catholic($category,$rank,$name)
    {            
        $selected_title->name ="emperor";
        return $elected_title;
    }

    //type: papacy
    //religion: catholic
    private function papacy_catholic($category,$rank,$name)
    {            
        $selected_title->name ="pope";
        return $elected_title;
    }

    //type: elector
    //religion: catholic
    private function court_catholic($category,$rank,$name)
    {            
        $selected_title->name = $name;
        return $elected_title;
    }

    //type: camerlengo
    //religion: catholic
    private function camerlengo_catholic($category,$rank,$name)
    {            
        $selected_title->name = "camerlengo";
        return $elected_title;
    }

    //type: elector
    //religion: catholic
    private function herald_catholic($category,$rank,$name)
    {            
        $selected_title->name = "herald of ".$name;
        return $elected_title;
    }

    //type: elective church
    //religion: catholic
    private function elective_church_catholic($category,$rank,$name)
    {                  
        if($category =="patriarch"){
            $selected_title->name ="patriarch";
        }
        elseif($category =="prince archbishop"){
            $selected_title->name ="prince archbishop";
        }
        elseif($category =="prince bishop"){
            $selected_title->name ="prince bishop";
        }
        elseif($category =="archbishop"){
            $selected_title->name ="archbishop";
        }
        elseif($category =="bishop"){
            $selected_title->name ="bishop";
        } 
        elseif($category =="priest"){
            $selected_title->name ="priest";
        } 
        else {
            if($rank >=3){
                $selected_title->name ="chaplain";
            }
            else {
                $selected_title->name ="vicar";
            }  
        }    
        return $elected_title;
    }

    //type: elective monastic
    //religion: catholic
    private function elective_monastic_catholic($category,$rank,$name)
    {    
        if($category =="grandmaster"){
            $selected_title->name ="grandmaster";
        }              
        elseif($category =="prince abbot"){
            $selected_title->name ="prince abbot";
        }
        elseif($category =="prince provost"){
            $selected_title->name ="prince provost";
        }
        elseif($category =="abbot"){
            $selected_title->name ="lord abbot";
        }
        else {
            if($rank >=3){
                $selected_title->name ="prior";
            }
            else {
                $selected_title->name ="monk";
            }            
        }       
        return $elected_title;
    }

    //type: tanistry monarchy
    //religion: catholic
    private function tanistry_monarchy_catholic($category,$rank,$name)
    {            
        if($category =="highking"){
            $selected_title->name ="high king";
        }
        else {
            $selected_title->name ="petty king";
        }
        return $elected_title;
    }

    //type: hunt
    //religion: catholic
    private function hunt_catholic($category,$rank,$name)
    {            
        if($category =="gamekeeper"){
            $selected_title->name ="gamekeeper";
        }
        else {
            $selected_title->name ="falconer";
        }
        return $elected_title;
    }

    //type: inn
    //religion: catholic
    private function inn_catholic($category,$rank,$name)
    {            
        if($category =="hostler"){
            $selected_title->name ="hostler";
        }
        elseif($category =="innkeeper"){
            $selected_title->name ="innkeeper";
        }
        else {
            $selected_title->name ="publican";
        }
        return $elected_title;
    }

    //type: warden
    //religion: catholic
    private function warden_catholic($category,$rank,$name)
    {            
        $selected_title->name ="lord warden";
        return $elected_title;
    }

    //type: peasant
    //religion: catholic
    private function peasant_catholic($category,$rank,$name)
    {            
        if($category =="sheriff"){
            $selected_title->name ="sheriff";
        }
        elseif($category =="bailiff"){
            $selected_title->name ="bailiff";
        }
        elseif($category =="reeve"){
            $selected_title->name ="reeve";
        }
        else {
            if($rank >=3){
                $selected_title->name ="hufner";
            }
            elseif($rank ==2){
                $selected_title->name ="cottar";
            }
            else {
                $selected_title->name ="serf";
            } 
        }
        return $elected_title;
    }

    //type: burgher
    //religion: catholic
    private function burgher_catholic($category,$rank,$name)
    {    
        if($category =="doge"){
            $selected_title->name ="doge";
        }
        elseif($category =="rector"){
            $selected_title->name ="rector";
        }
        elseif($category =="gonfalier"){
            $selected_title->name ="gonfalier";
        }
        elseif($category =="burgrave"){
            $selected_title->name ="burgrave";
        }    
        elseif($category =="lord warden"){
            $selected_title->name ="lord warden";
        }
        elseif($category =="lord mayor"){
            $selected_title->name ="lord mayor";
        }
        else {
            if($rank >=3){
                $selected_title->name ="patrician";
            }
            else {
                $selected_title->name ="burgher";
            } 
        }      
        return $elected_title;
    }

    //type: guild
    //religion: catholic
    private function guild_catholic($category,$rank,$name)
    {                  
        if($category =="alderman master" || $category =="alderman"){
            $selected_title->name ="alderman";
        }
        else {
            $selected_title->name ="master craftsman";
        }      
        return $elected_title;
    }

    //type: noble
    //religion: catholic
    private function noble_catholic($category,$rank,$name)
    {             
        if($category =="emperor"){
            $selected_title->name ="emperor";
        }
        elseif($category =="highking" || $category =="king"){
            $selected_title->name ="king";
        }
        elseif($category =="archduke"){
            $selected_title->name ="arch duke";
        }
        elseif($category =="grand_duke"){
            $selected_title->name ="grand duke";
        }
        elseif($category =="prince"){
            $selected_title->name ="prince";
        }
        elseif($category =="duke"){
            $selected_title->name ="duke";
        } 
        elseif($category =="margrave"){
            $selected_title->name ="margrave";
        } 
        elseif($category =="count"){
            $selected_title->name ="count";
        } 
        elseif($category =="burgrave"){
            $selected_title->name ="burgrave";
        } 
        elseif($category =="baron"){
            $selected_title->name ="baron";
        } 
        elseif($category =="lord"){
            $selected_title->name ="lord";
        } 
        elseif($category =="knight"){
            $selected_title->name ="knight";
        } 
        else {
            $selected_title->name ="squire";
        }        
        
        return $elected_title;
    }

    //type: delegate
    //religion: catholic
    private function delegate_catholic($category,$rank,$name)
    {            
        $selected_title->name ="grandmaster";
        return $elected_title;
    }

    //type: crusader
    //religion: catholic
    private function crusader_catholic($category,$rank,$name)
    {            
        if($category =="grandmaster"){
            $selected_title->name ="grandmaster";
        } 
        elseif($category =="commander"){
            $selected_title->name ="knight commander";
        } 
        else {
            if($rank >=3){
                $selected_title->name ="crusader knight";
            }
            else {
                $selected_title->name ="crusader sergeant";
            }  
        }
        return $elected_title;
    }

}