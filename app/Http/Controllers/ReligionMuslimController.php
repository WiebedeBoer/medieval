<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReligionMuslimController extends Controller
{
    //muslim
    public function religion($career,$category,$rank)
    {            
        //royalty
        if($career =="elective_empire"){
            $selected_title = $this->noble_muslim($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }
        elseif($career =="fixed_empire" || $career =="fixed_royalty"){
            $selected_title = $this->noble_muslim($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }
        elseif($career =="tanistry_royalty"){
            $selected_title = $this->noble_muslim($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }
        elseif($career =="confederate_temporal"){
            $selected_title = $this->noble_muslim($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }
        elseif($career =="fixed_sharifate"){
            $selected_title = $this->sharifate_muslim($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }
        elseif($career =="fixed_caliphate"){
            $selected_title = $this->caliphate_muslim($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }
        //republic
        elseif($career =="merchant_republic"){
            $selected_title = $this->burgher_muslim($category,$rank,$name);
            $controlled_title->succession ="elective";
        }
        elseif($career =="maritime_republic"){
            $selected_title = $this->burgher_muslim($category,$rank,$name);
            $controlled_title->succession ="elective";
        }
        //court
        elseif($career =="sultanate"){
            $selected_title = $this->sultanate_muslim($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }
        elseif($career =="fixed_vizier"){
            $selected_title = $this->court_muslim($category,$rank,$name);
            $controlled_title->succession ="court";
        }  
        //nobility
        elseif($career =="fixed_nobility"){
            $selected_title = $this->noble_muslim($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }
        //gentry
        elseif($career =="fixed_gentry"){
            $selected_title = $this->noble_muslim($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }             
        //church
        elseif($career =="confederate_ecclessiastical"){
            $selected_title = $this->elective_mosque_muslim($category,$rank,$name);
            $controlled_title->succession ="elective church";
        }
        elseif($career =="fixed_eclessiastical"){
            $selected_title = $this->elective_mosque_muslim($category,$rank,$name);
            $controlled_title->succession ="elective church";
        }
        //monastic
        elseif($career =="fixed_monastic"){
            $selected_title = $this->elective_sufi_muslim($category,$rank,$name);
            $controlled_title->succession ="elective monastic";
        }
        //burgher
        elseif($career =="fixed_burgher"){
            $selected_title = $this->burgher_muslim($category,$rank,$name);
            $controlled_title->succession ="elective";
        }
        //guild
        elseif($career =="knight_grandmaster"){
            $selected_title = $this->delegate_muslim($category,$rank,$name);
            $controlled_title->succession ="delegate";
        }
        elseif($career =="trade_league" || $career =="trade_kontor" || $career =="trade_fair"){
            $selected_title = $this->guild_muslim($category,$rank,$name);
            $controlled_title->succession ="elective";
        }
        elseif($career =="guild_grandmaster"){
            $selected_title = $this->guild_muslim($category,$rank,$name);
            $controlled_title->succession ="elective";
        }
        elseif($career =="college_master"){
            $selected_title = $this->school_muslim($category,$rank,$name);
            $controlled_title->succession ="elective";
        }
        elseif($career =="fixed_hospice" || $career =="harbour_master"){
            $selected_title = $this->warden_muslim($category,$rank,$name);
            $controlled_title->succession ="elective";
        }
        //hunt
        elseif($career =="hunt_game" || $career =="hunt_falcon"){
            $selected_title = $this->hunt_muslim($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }
        //innkeeper
        elseif($career =="tavern_hostler" || $career =="tavern_innkeeper"){
            $selected_title = $this->inn_muslim($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }
        //peasant
        elseif($career =="fixed_peasantry"){
            $selected_title = $this->peasant_muslim($category,$rank,$name);
            $controlled_title->succession ="primogeniture";
        }
        else {
            //not possible
            $controlled_title ="inaccessible";
        }
        return $controlled_title;   
    }

    //type: elective church
    //religion: muslim
    private function elective_mosque_muslim($category,$rank,$name)
    {            
        if($category =="prince archbishop"){
            $selected_title->name ="qadi";
        }
        elseif($category =="prince bishop"){
            $selected_title->name ="qadi";
        }
        elseif($category =="archbishop"){
            $selected_title->name ="mufti";
        }
        elseif($category =="bishop"){
            $selected_title->name ="mufassir";
        } 
        elseif($category =="priest"){
            $selected_title->name ="imam";
        } 
        else {
            if($rank >=3){
                $selected_title->name ="faqih";
            }
            else {
                $selected_title->name ="mullah";
            }  
        }    
        return $elected_title;
    }

    //type: elective sufi
    //religion: muslim
    private function elective_sufi_muslim($category,$rank,$name)
    {            
        if($category =="prince abbot"){
            $selected_title->name ="khawaja";
        }
        elseif($category =="prince provost"){
            $selected_title->name ="murshid";
        }
        elseif($category =="abbot"){
            $selected_title->name ="khawaja";
        }
        else {
            if($rank >=3){
                $selected_title->name ="faqir";
            }
            else {
                $selected_title->name ="dervish";
            }            
        }       
        return $elected_title; 
    }

    //type: court
    //religion: muslim
    private function court_muslim($category,$rank,$name)
    {            
        $selected_title->name ="grand vizier of ".$name;
        return $elected_title;   
    }

    //type: sharifate
    //religion: muslim
    private function sharifate_muslim($category,$rank,$name)
    {            
        $selected_title->name ="sharif of Mecca";
        return $elected_title;   
    }

    //type: caliphate
    //religion: muslim
    private function caliphate_muslim($category,$rank,$name)
    {            
        $selected_title->name ="caliph of ".$name;
        return $elected_title;   
    }

    //type: sultanate
    //religion: muslim
    private function sultanate_muslim($category,$rank,$name)
    {            
        $selected_title->name ="sultan";
        return $elected_title;    
    }

    //type: hunt
    //religion: muslim
    private function hunt_muslim($category,$rank,$name)
    {            
        $selected_title->name ="alsaqir";   
        return $elected_title;
    }

    //type: inn
    //religion: muslim
    private function inn_muslim($category,$rank,$name)
    {            
        if($category =="hostler"){
            $selected_title->name ="hostler";
        }
        elseif($category =="innkeeper"){
            $selected_title->name ="innkeeper";
        }
        else {
            $selected_title->name ="shopkeeper";
        }
        return $elected_title;
    }

    //type: burgher
    //religion: muslim
    private function burgher_muslim($category,$rank,$name)
    {            
        if($category =="doge"){
            $selected_title->name ="murabit";
        }
        elseif($category =="rector"){
            $selected_title->name ="murabit";
        }
        elseif($category =="gonfalier"){
            $selected_title->name ="murabit";
        }
        elseif($category =="burgrave"){
            $selected_title->name ="murabit";
        }    
        elseif($category =="lord warden"){
            $selected_title->name ="mohtaseb";
        }
        elseif($category =="lord mayor"){
            $selected_title->name ="khazindar";
        }
        else {
            if($rank >=3){
                $selected_title->name ="sahib";
            }
            else {
                $selected_title->name ="katib";
            } 
        }      
        return $elected_title;

    }

    //type: peasant
    //religion: muslim
    private function peasant_muslim($category,$rank,$name)
    {            
        if($category =="sheriff"){
            $selected_title->name ="sheikh";
        }
        elseif($category =="bailiff"){
            $selected_title->name ="saghir";
        }
        elseif($category =="reeve"){
            $selected_title->name ="vizier";
        }
        else {
            if($rank >=2){
                $selected_title->name ="bedouin";
            }
            else {
                $selected_title->name ="ghilam";
            } 
        }
        return $elected_title;
    }

    //type: school
    //religion: muslim
    private function school_muslim($category,$rank,$name)
    {            
        $selected_title->name ="mufti";
        return $elected_title;
    }

    //type: warden
    //religion: muslim
    private function warden_muslim($category,$rank,$name)
    {            
        $selected_title->name ="mohtaseb";
        return $elected_title;
    }

    //type: guild
    //religion: muslim
    private function guild_muslim($category,$rank,$name)
    {                  
        if($category =="alderman master" || $category =="alderman"){
            $selected_title->name ="mohtaseb";
        }
        else {
            $selected_title->name ="mushrif";
        }      
        return $elected_title;
    }

    //type: primogeniture
    //religion: muslim
    private function noble_muslim($category,$rank,$name)
    {            
        if($category =="emperor" || $category =="highking" || $category =="king" || $category =="archduke" || $category =="grandduke"){
            $selected_title->name ="malik";
        }
        elseif($category =="prince"){
            $selected_title->name ="emir";
        }
        elseif($category =="duke"){
            $selected_title->name ="emir";
        } 
        elseif($category =="margrave"){
            $selected_title->name ="hakim";
        } 
        elseif($category =="count"){
            $selected_title->name ="sheikh";
        } 
        elseif($category =="baron"){
            $selected_title->name ="wali";
        } 
        elseif($category =="lord"){
            $selected_title->name ="hajib";
        } 
        elseif($category =="knight"){
            $selected_title->name ="faris";
        } 
        else {
            $selected_title->name ="ghazi";
        } 

        return $elected_title;
    }

    //type: delegate
    //religion: muslim
    private function delegate_muslim($category,$rank,$name)
    {            
        $selected_title->name ="saghir";
        return $elected_title;
    }


}
