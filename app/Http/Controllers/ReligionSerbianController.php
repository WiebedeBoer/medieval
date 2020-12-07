<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReligionSerbianController extends Controller
{
    //serbian
    public function religion($career,$category,$rank,$name)
    {            
        //royalty
        if($career =="elective_empire"){
            $selected_title = $this->noble_serbian($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }
        elseif($career =="fixed_empire" || $career =="fixed_royalty"){
            $selected_title = $this->noble_serbian($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }
        elseif($career =="tanistry_royalty"){
            $selected_title = $this->noble_serbian($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }
        elseif($career =="confederate_temporal"){
            $selected_title = $this->noble_serbian($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }
        elseif($career =="fixed_sharifate"){
            $selected_title = $this->noble_serbian($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }
        elseif($career =="fixed_caliphate"){
            $selected_title = $this->noble_serbian($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }
        //republic
        elseif($career =="merchant_republic"){
            $selected_title = $this->burgher_serbian($category,$rank,$name);
            $controlled_title->succession ="elective burgher";
        }
        elseif($career =="maritime_republic"){
            $selected_title = $this->burgher_serbian($category,$rank,$name);
            $controlled_title->succession ="elective burgher";
        }
        //nobility
        elseif($career =="fixed_nobility"){
            $selected_title = $this->noble_serbian($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }
        //gentry
        elseif($career =="fixed_gentry"){
            $selected_title = $this->noble_serbian($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }             
        //patriarch
        elseif($career =="serbian_patriarchy"){
            $selected_title = $this->elective_church_serbian($category,$rank,$name);
            $controlled_title->succession ="elective church";
        }
        //church
        elseif($career =="confederate_ecclessiastical"){
            $selected_title = $this->elective_church_serbian($category,$rank,$name);
            $controlled_title->succession ="elective church";
        }
        elseif($career =="fixed_eclessiastical"){
            $selected_title = $this->elective_church_serbian($category,$rank,$name);
            $controlled_title->succession ="elective church";
        }
        //monastic
        elseif($career =="fixed_monastic"){
            $selected_title = $this->elective_monastic_serbian($category,$rank,$name);
            $controlled_title->succession ="elective monastic";
        }
        //burgher
        elseif($career =="fixed_burgher"){
            $selected_title = $this->burgher_serbian($category,$rank,$name);
            $controlled_title->succession ="elective burgher";
        }
        //guild
        elseif($career =="knight_grandmaster"){
            $selected_title = $this->delegate_serbian($category,$rank,$name);
            $controlled_title->succession ="delegate";
        }
        elseif($career =="trade_league" || $career =="trade_kontor" || $career =="trade_fair"){
            $selected_title = $this->guild_serbian($category,$rank,$name);
            $controlled_title->succession ="elective guild";
        }
        elseif($career =="guild_grandmaster"){
            $selected_title = $this->guild_serbian($category,$rank,$name);
            $controlled_title->succession ="elective guild";
        }
        elseif($career =="college_master" || $career =="fixed_hospice" || $career =="harbour_master"){
            $selected_title = $this->warden_serbian($category,$rank,$name);
            $controlled_title->succession ="elective burgher";
        }
        //hunt
        elseif($career =="hunt_game" || $career =="hunt_falcon"){
            $selected_title = $this->hunt_serbian($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }
        //innkeeper
        elseif($career =="tavern_hostler" || $career =="tavern_innkeeper"){
            $selected_title = $this->inn_serbian($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }
        //peasant
        elseif($career =="fixed_peasantry"){
            $selected_title = $this->peasant_serbian($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }
        else {
            //not possible
            $controlled_title ="inaccessible";
        }
        return $controlled_title;  
    }

    //type: elective church
    //religion: serbian
    private function elective_church_serbian()
    {            
        if($category =="patriarch"){
            $selected_title->name ="patriarch";
        }
        elseif($category =="prince archbishop"){
            $selected_title->name ="archbishop";
        }
        elseif($category =="prince bishop"){
            $selected_title->name ="bishop";
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
                $selected_title->name ="acolyte";
            }  
        }    
        return $elected_title;    
    }

    //type: elective monastic
    //religion: serbian
    private function elective_monastic_serbian()
    {            
        if($category =="prince abbot"){
            $selected_title->name ="archimandrite";
        }
        elseif($category =="prince provost"){
            $selected_title->name ="archimandrite";
        }
        elseif($category =="abbot"){
            $selected_title->name ="archimandrite";
        }
        else {
            if($rank >=3){
                $selected_title->name ="hegumen";
            }
            else {
                $selected_title->name ="monk";
            }            
        }       
        return $elected_title;  
    }

    //type: burgher
    //religion: serbian
    private function burgher_serbian()
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

    //type: primogeniture
    //religion: serbian
    private function noble_serbian()
    {            
        if($category =="emperor"){
            $selected_title->name ="tsar";
        }
        elseif($category =="highking" || $category =="king"){
            $selected_title->name ="tsar";
        }
        elseif($category =="archduke"){
            $selected_title->name ="veliki knyaz";
        }
        elseif($category =="grand_duke"){
            $selected_title->name ="veliki knyaz";
        }
        elseif($category =="prince"){
            $selected_title->name ="knyaz";
        }
        elseif($category =="duke"){
            $selected_title->name ="knyaz";
        } 
        elseif($category =="margrave"){
            $selected_title->name ="voivode";
        } 
        elseif($category =="count"){
            $selected_title->name ="count";
        } 
        elseif($category =="burgrave"){
            $selected_title->name ="castellan";
        } 
        elseif($category =="baron"){
            $selected_title->name ="boyar";
        } 
        elseif($category =="lord"){
            $selected_title->name ="gospodar";
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
    //religion: serbian
    private function delegate_serbian()
    {            
        $selected_title->name ="grandmaster";
        return $elected_title; 
    }

    //type: hunt
    //religion: russian
    private function hunt_serbian($category,$rank,$name)
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
    //religion: russian
    private function inn_serbian($category,$rank,$name)
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
    //religion: russian
    private function warden_serbian($category,$rank,$name)
    {            
        $selected_title->name ="lord warden";
        return $elected_title;
    }

    //type: guild
    //religion: russian
    private function guild_serbian($category,$rank,$name)
    {                  
        if($category =="alderman master" || $category =="alderman"){
            $selected_title->name ="alderman";
        }
        else {
            $selected_title->name ="master craftsman";
        }      
        return $elected_title;
    }

    //type: peasant
    //religion: russian
    private function peasant_serbian($category,$rank,$name)
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
                $selected_title->name ="smerd";
            } 
        }
        return $elected_title;
    }

}
