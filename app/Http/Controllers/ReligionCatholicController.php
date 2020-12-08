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

    //secular ranks
    //empire = 12
    //kingdom = 11
    //grand duchy = 10
    //duchy = 9
    //march = 8
    //county = 7
    //castellany = 6
    //barony or manor = 5
    //parish or town or lordship = 4
    //tithing or quarter = 3
    //hide = 2
    //virgate = 1

    //church ranks
    //pope = 7
    //patriarch or cardinal = 6
    //archdiocese = 5
    //diocese = 4
    //glebe or abbot = 3
    //chapelry or priory = 2
    //vicarage or monk = 1
    //layman = 0

    //type: elective empire
    //religion: catholic
    private function elective_empire_catholic($category,$rank,$name)
    {            
        $selected_title->name ="emperor";
        $selected_title->rank =$rank;
        $selected_title->church =0;
        return $elected_title;
    }

    //type: papacy
    //religion: catholic
    private function papacy_catholic($category,$rank,$name)
    {            
        $selected_title->name ="pope";
        $selected_title->rank =$rank;
        $selected_title->church =7;
        return $elected_title;
    }

    //type: elector
    //religion: catholic
    private function court_catholic($category,$rank,$name)
    {            
        $selected_title->name =$name;
        $selected_title->rank =$rank;
        $selected_title->church =0;
        return $elected_title;
    }

    //type: camerlengo
    //religion: catholic
    private function camerlengo_catholic($category,$rank,$name)
    {            
        $selected_title->name = "camerlengo";
        $selected_title->rank =$rank;
        $selected_title->church =6;
        return $elected_title;
    }

    //type: elector
    //religion: catholic
    private function herald_catholic($category,$rank,$name)
    {            
        $selected_title->name = "herald of ".$name;
        $selected_title->rank =$rank;
        $selected_title->church =0;
        return $elected_title;
    }

    //type: elective church
    //religion: catholic
    private function elective_church_catholic($category,$rank,$name)
    {                  
        if($category =="patriarch"){
            $selected_title->name ="patriarch";
            $selected_title->rank =$rank;
            $selected_title->church =6;
        }
        elseif($category =="prince archbishop"){
            $selected_title->name ="prince archbishop";
            $selected_title->rank =$rank;
            $selected_title->church =5;
        }
        elseif($category =="prince bishop"){
            $selected_title->name ="prince bishop";
            $selected_title->rank =$rank; //7
            $selected_title->church =4;
        }
        elseif($category =="archbishop"){
            $selected_title->name ="lord archbishop";
            $selected_title->rank =$rank;
            $selected_title->church =5;
        }
        elseif($category =="bishop"){
            $selected_title->name ="lord bishop";
            $selected_title->rank =$rank; //5
            $selected_title->church =4;
        } 
        elseif($category =="priest"){
            $selected_title->name ="priest";
            $selected_title->rank =$rank;
            $selected_title->church =3;
        } 
        else {
            if($rank >=3){
                $selected_title->name ="chaplain";
                $selected_title->rank =3;
                $selected_title->church =2;
            }
            else {
                $selected_title->name ="vicar";
                $selected_title->rank =2;
                $selected_title->church =1;
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
            $selected_title->rank =$rank;
            $selected_title->church =4; 
        }              
        elseif($category =="prince abbot"){
            $selected_title->name ="prince abbot";
            $selected_title->rank =$rank;
            $selected_title->church =3; 
        }
        elseif($category =="prince provost"){
            $selected_title->name ="prince provost";
            $selected_title->rank =$rank;
            $selected_title->church =3; 
        }
        elseif($category =="abbot"){
            $selected_title->name ="lord abbot";
            $selected_title->rank =$rank;
            $selected_title->church =3; 
        }
        else {
            if($rank >=3){
                $selected_title->name ="prior";
                $selected_title->rank =$rank;
                $selected_title->church =2; 
            }
            else {
                $selected_title->name ="monk";
                $selected_title->rank =$rank;
                $selected_title->church =1; 
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
            $selected_title->rank =$rank;
        }
        else {
            $selected_title->name ="petty king";
            $selected_title->rank =$rank;
        }
        $selected_title->church =0;
        return $elected_title;
    }

    //type: hunt
    //religion: catholic
    private function hunt_catholic($category,$rank,$name)
    {            
        if($category =="gamekeeper"){
            $selected_title->name ="gamekeeper";
            $selected_title->rank =$rank;
        }
        else {
            $selected_title->name ="falconer";
            $selected_title->rank =$rank;
        }
        $selected_title->church =0;
        return $elected_title;
    }

    //type: inn
    //religion: catholic
    private function inn_catholic($category,$rank,$name)
    {            
        if($category =="hostler"){
            $selected_title->name ="hostler";
            $selected_title->rank =4;
        }
        elseif($category =="innkeeper"){
            $selected_title->name ="innkeeper";
            $selected_title->rank =3;
        }
        else {
            $selected_title->name ="publican";
            $selected_title->rank =2;
        }
        $selected_title->church =0;
        return $elected_title;
    }

    //type: warden
    //religion: catholic
    private function warden_catholic($category,$rank,$name)
    {            
        $selected_title->name ="lord warden";
        $selected_title->rank =$rank;
        $selected_title->church =0;
        return $elected_title;
    }

    //type: peasant
    //religion: catholic
    private function peasant_catholic($category,$rank,$name)
    {            
        if($category =="sheriff"){
            $selected_title->name ="sheriff";
            $selected_title->rank =$rank;
        }
        elseif($category =="bailiff"){
            $selected_title->name ="bailiff";
            $selected_title->rank =$rank;
        }
        elseif($category =="reeve"){
            $selected_title->name ="reeve";
            $selected_title->rank =$rank;
        }
        else {
            if($rank >=3){
                $selected_title->name ="hufner";
                $selected_title->rank =3;
            }
            elseif($rank ==2){
                $selected_title->name ="cottar";
                $selected_title->rank =2;
            }
            else {
                $selected_title->name ="serf";
                $selected_title->rank =1;
            } 
        }
        $selected_title->church =0;
        return $elected_title;
    }

    //type: burgher
    //religion: catholic
    private function burgher_catholic($category,$rank,$name)
    {    
        if($category =="doge"){
            $selected_title->name ="doge";
            $selected_title->rank =$rank; //10
        }
        elseif($category =="rector"){
            $selected_title->name ="rector";
            $selected_title->rank =$rank; //10
        }
        elseif($category =="gonfalier"){
            $selected_title->name ="gonfalier";
            $selected_title->rank =$rank; //10
        }
        elseif($category =="burgrave"){
            $selected_title->name ="burgrave";
            $selected_title->rank =$rank; //6
        }    
        elseif($category =="lord warden"){
            $selected_title->name ="lord warden";
            $selected_title->rank =$rank; //5
        }
        elseif($category =="high mayor"){
            $selected_title->name ="high mayor";
            $selected_title->rank =$rank; //4
        }
        elseif($category =="lord mayor"){
            $selected_title->name ="lord mayor";
            $selected_title->rank =$rank; //4
        }
        else {
            if($rank >=3){
                $selected_title->name ="patrician";
                $selected_title->rank =3;
            }
            else {
                $selected_title->name ="burgher";
                $selected_title->rank =2;
            } 
        } 
        $selected_title->church =0;     
        return $elected_title;
    }

    //type: guild
    //religion: catholic
    private function guild_catholic($category,$rank,$name)
    {                  
        if($category =="alderman master" || $category =="alderman"){
            $selected_title->name ="alderman";
            $selected_title->rank =3;
        }
        else {
            $selected_title->name ="master craftsman";
            $selected_title->rank =3;
        }  
        $selected_title->church =0;    
        return $elected_title;
    }

    //type: noble
    //religion: catholic
    private function noble_catholic($category,$rank,$name)
    {             
        if($category =="emperor"){
            $selected_title->name ="emperor";
            $selected_title->rank =$rank; //12
        }
        elseif($category =="highking" || $category =="king"){
            $selected_title->name ="king";
            $selected_title->rank =11; //11
        }
        elseif($category =="archduke"){
            $selected_title->name ="arch duke";
            $selected_title->rank =$rank; //10
        }
        elseif($category =="grand_duke"){
            $selected_title->name ="grand duke";
            $selected_title->rank =$rank; //10
        }
        elseif($category =="prince"){
            $selected_title->name ="prince";
            $selected_title->rank =$rank; //10
        }
        elseif($category =="duke"){
            $selected_title->name ="duke";
            $selected_title->rank =$rank; //9
        } 
        elseif($category =="margrave"){
            $selected_title->name ="margrave";
            $selected_title->rank =$rank; //8
        } 
        elseif($category =="count"){
            $selected_title->name ="count";
            $selected_title->rank =$rank; //7
        } 
        elseif($category =="burgrave"){
            $selected_title->name ="burgrave";
            $selected_title->rank =$rank; //6
        } 
        elseif($category =="baron"){
            $selected_title->name ="baron";
            $selected_title->rank =$rank; //5
        } 
        elseif($category =="lord"){
            $selected_title->name ="lord";
            $selected_title->rank =$rank; //4
        } 
        elseif($category =="knight"){
            $selected_title->name ="knight";
            $selected_title->rank =3;
        } 
        else {
            $selected_title->name ="squire";
            $selected_title->rank =2;
        }        
        $selected_title->church =0;
        return $elected_title;
    }

    //type: delegate
    //religion: catholic
    private function delegate_catholic($category,$rank,$name)
    {            
        $selected_title->name ="grandmaster";
        $selected_title->rank =$rank;
        $selected_title->church =0;
        return $elected_title;
    }

    //type: crusader
    //religion: catholic
    private function crusader_catholic($category,$rank,$name)
    {            
        if($category =="grandmaster"){
            $selected_title->name ="grandmaster";
            $selected_title->rank =$rank;
            $selected_title->church =0;
        } 
        elseif($category =="commander"){
            $selected_title->name ="knight commander";
            $selected_title->rank =$rank;
            $selected_title->church =0;
        } 
        else {
            if($rank >=3){
                $selected_title->name ="crusader knight";
                $selected_title->rank =3;
                $selected_title->church =0;
            }
            else {
                $selected_title->name ="crusader sergeant";
                $selected_title->rank =2;
                $selected_title->church =1;
            }  
        }
        return $elected_title;
    }

}