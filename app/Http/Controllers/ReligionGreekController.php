<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReligionGreekController extends Controller
{
    //greek
    public function religion($career,$category,$rank,$name)
    {            
        //royalty
        if($career =="elective_empire"){
            $selected_title = $this->noble_greek($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }
        elseif($career =="fixed_empire" || $career =="fixed_royalty"){
            $selected_title = $this->noble_greek($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }
        elseif($career =="tanistry_royalty"){
            $selected_title = $this->noble_greek($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }
        elseif($career =="confederate_temporal"){
            $selected_title = $this->noble_greek($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }
        elseif($career =="fixed_sharifate"){
            $selected_title = $this->noble_greek($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }
        elseif($career =="fixed_caliphate"){
            $selected_title = $this->noble_greek($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }
        //republic
        elseif($career =="merchant_republic"){
            $selected_title = $this->burgher_greek($category,$rank,$name);
            $controlled_title->succession ="elective burgher";
        }
        elseif($career =="maritime_republic"){
            $selected_title = $this->burgher_greek($category,$rank,$name);
            $controlled_title->succession ="elective burgher";
        }
        //court
        elseif($career =="courtier"){
            $selected_title = $this->court_greek($category,$rank,$name);
            $controlled_title->succession ="court";
        }  
        //nobility
        elseif($career =="fixed_nobility"){
            $selected_title = $this->noble_greek($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }
        //gentry
        elseif($career =="fixed_gentry"){
            $selected_title = $this->noble_greek($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }             
        //patriarch
        elseif($career =="greek_patriarchy"){
            $selected_title = $this->elective_church_greek($category,$rank,$name);
            $controlled_title->succession ="elective church";
        }
        //church
        elseif($career =="confederate_ecclessiastical"){
            $selected_title = $this->elective_church_greek($category,$rank,$name);
            $controlled_title->succession ="elective church";
        }
        elseif($career =="fixed_eclessiastical"){
            $selected_title = $this->elective_church_greek($category,$rank,$name);
            $controlled_title->succession ="elective church";
        }
        //monastic
        elseif($career =="fixed_monastic"){
            $selected_title = $this->elective_monastic_greek($category,$rank,$name);
            $controlled_title->succession ="elective monastic";
        }
        //burgher
        elseif($career =="fixed_burgher"){
            $selected_title = $this->burgher_greek($category,$rank,$name);
            $controlled_title->succession ="elective burgher";
        }
        //guild
        elseif($career =="knight_grandmaster"){
            $selected_title = $this->delegate_greek($category,$rank,$name);
            $controlled_title->succession ="delegate";
        }
        elseif($career =="trade_league" || $career =="trade_kontor" || $career =="trade_fair"){
            $selected_title = $this->guild_greek($category,$rank,$name);
            $controlled_title->succession ="elective guild";
        }
        elseif($career =="guild_grandmaster"){
            $selected_title = $this->guild_greek($category,$rank,$name);
            $controlled_title->succession ="elective guild";
        }
        elseif($career =="college_master" || $career =="fixed_hospice" || $career =="harbour_master"){
            $selected_title = $this->guild_greek($category,$rank,$name);
            $controlled_title->succession ="elective burgher";
        }
        //hunt
        elseif($career =="hunt_game" || $career =="hunt_falcon"){
            $selected_title = $this->hunt_greek($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }
        //innkeeper
        elseif($career =="tavern_hostler" || $career =="tavern_innkeeper"){
            $selected_title = $this->inn_greek($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }
        //peasant
        elseif($career =="fixed_peasantry"){
            $selected_title = $this->peasant_greek($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }
        else {
            //not possible
            $controlled_title ="inaccessible";
        }
        return $controlled_title;  
    }

    //type: elective church
    //religion: greek
    private function elective_church_greek($category,$rank,$name)
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
    //religion: greek
    private function elective_monastic_greek($category,$rank,$name)
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

    //type: hunt
    //religion: greek
    private function hunt_greek($category,$rank,$name)
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
    //religion: greek
    private function inn_greek($category,$rank,$name)
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
    //religion: greek
    private function warden_catholic($category,$rank,$name)
    {            
        $selected_title->name ="sakellarios";
        return $elected_title;
    }

    //type: peasant
    //religion: greek
    private function peasant_greek($category,$rank,$name)
    {            
        if($category =="sheriff"){
            $selected_title->name ="katepano";
        }
        elseif($category =="bailiff"){
            $selected_title->name ="kephale";
        }
        elseif($category =="reeve"){
            $selected_title->name ="kourator";
        }
        else {
            if($rank >=3){
                $selected_title->name ="boidatos";
            }
            elseif($rank ==2){
                $selected_title->name ="paroikos";
            }
            else {
                $selected_title->name ="serf";
            } 
        }
        return $elected_title;
    }

    //type: burgher
    //religion: greek
    private function burgher_greek($category,$rank,$name)
    {    
        if($category =="doge"){
            $selected_title->name ="praetor";
        }
        elseif($category =="rector"){
            $selected_title->name ="praetor";
        }
        elseif($category =="gonfalier"){
            $selected_title->name ="praetor";
        }
        elseif($category =="burgrave"){
            $selected_title->name ="quaestor";
        }    
        elseif($category =="lord warden"){
            $selected_title->name ="sakellarios";
        }
        elseif($category =="lord mayor"){
            $selected_title->name ="horeiarios";
        }
        else {
            if($rank >=3){
                $selected_title->name ="patrikios";
            }
            else {
                $selected_title->name ="burgher";
            } 
        }      
        return $elected_title;
    }

    //type: court
    //religion: greek
    private function court_greek($category,$rank,$name)
    {                  

        $selected_title->name =$name;      
        return $elected_title;
    }

    //type: guild
    //religion: greek
    private function guild_greek($category,$rank,$name)
    {                  
        if($category =="alderman master" || $category =="alderman"){
            $selected_title->name ="sakellarios";
        }
        else {
            $selected_title->name ="master craftsman";
        }      
        return $elected_title;
    }

    //type: noble
    //religion: greek
    private function noble_greek($category,$rank,$name)
    {             
        if($category =="emperor"){
            $selected_title->name ="basileus";
        }
        elseif($category =="highking" || $category =="king"){
            $selected_title->name ="basileus";
        }
        elseif($category =="archduke"){
            $selected_title->name ="megas doux";
        }
        elseif($category =="grand_duke"){
            $selected_title->name ="despot";
        }
        elseif($category =="prince"){
            $selected_title->name ="doux";
        }
        elseif($category =="duke"){
            $selected_title->name ="doux";
        } 
        elseif($category =="margrave"){
            $selected_title->name ="tourmarch";
        } 
        elseif($category =="count"){
            $selected_title->name ="comes";
        } 
        elseif($category =="burgrave"){
            $selected_title->name ="kentarchos";
        } 
        elseif($category =="baron"){
            $selected_title->name ="dekarchos";
        } 
        elseif($category =="lord"){
            $selected_title->name ="logothetes";
        } 
        elseif($category =="knight"){
            $selected_title->name ="kataphraktos";
        } 
        else {
            $selected_title->name ="kavallarios";
        }        
        
        return $elected_title;
    }

    //type: delegate
    //religion: greek
    private function delegate_greek($category,$rank,$name)
    {            
        $selected_title->name ="grandmaster";
        return $elected_title;
    }


}
