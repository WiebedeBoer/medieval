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
    //patriarch = 6
    //archdiocese = 5
    //diocese = 4
    //glebe or archimandrite = 3
    //chapelry or hegumen = 2
    //vicarage or monk = 1
    //layman = 0

    //type: elective church
    //religion: serbian
    private function elective_church_serbian($category,$rank,$name)
    {            
        if($category =="patriarch"){
            $selected_title->name ="patriarch";
            $selected_title->rank =4;
            $selected_title->church =6;
        }
        elseif($category =="prince archbishop"){
            $selected_title->name ="archbishop";
            $selected_title->rank =4;
            $selected_title->church =5;
        }
        elseif($category =="prince bishop"){
            $selected_title->name ="bishop";
            $selected_title->rank =4;
            $selected_title->church =4;
        }
        elseif($category =="archbishop"){
            $selected_title->name ="archbishop";
            $selected_title->rank =4;
            $selected_title->church =5;
        }
        elseif($category =="bishop"){
            $selected_title->name ="bishop";
            $selected_title->rank =4;
            $selected_title->church =4;
        } 
        elseif($category =="priest"){
            $selected_title->name ="priest";
            $selected_title->rank =4;
            $selected_title->church =3;
        } 
        else {
            if($rank >=3){
                $selected_title->name ="chaplain";
                $selected_title->rank =3;
                $selected_title->church =2;
            }
            else {
                $selected_title->name ="acolyte";
                $selected_title->rank =2;
                $selected_title->church =1;
            }  
        }    
        return $elected_title;  
    }

    //type: elective monastic
    //religion: serbian
    private function elective_monastic_serbian($category,$rank,$name)
    {            
        if($category =="prince abbot"){
            $selected_title->name ="archimandrite";
            $selected_title->rank =4;
            $selected_title->church =3;
        }
        elseif($category =="prince provost"){
            $selected_title->name ="archimandrite";
            $selected_title->rank =4;
            $selected_title->church =3;
        }
        elseif($category =="abbot"){
            $selected_title->name ="archimandrite";
            $selected_title->rank =4;
            $selected_title->church =3;
        }
        else {
            if($rank >=3){
                $selected_title->name ="hegumen";
                $selected_title->rank =3;
                $selected_title->church =2;
            }
            else {
                $selected_title->name ="monk";
                $selected_title->rank =2;
                $selected_title->church =1;
            }            
        }       
        return $elected_title; 
    }

    //type: burgher
    //religion: serbian
    private function burgher_serbian($category,$rank,$name)
    {            
        if($category =="doge"){
            $selected_title->name ="doge";
            $selected_title->rank =$rank;
        }
        elseif($category =="rector"){
            $selected_title->name ="rector";
            $selected_title->rank =$rank;
        }
        elseif($category =="gonfalier"){
            $selected_title->name ="gonfalier";
            $selected_title->rank =$rank;
        }
        elseif($category =="burgrave"){
            $selected_title->name ="burgrave";
            $selected_title->rank =$rank;
        }    
        elseif($category =="lord warden"){
            $selected_title->name ="lord warden";
            $selected_title->rank =$rank;
        }
        elseif($category =="high mayor"){
            $selected_title->name ="lord mayor";
            $selected_title->rank =$rank;
        }
        elseif($category =="lord mayor"){
            $selected_title->name ="lord mayor";
            $selected_title->rank =$rank;
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

    //type: primogeniture
    //religion: serbian
    private function noble_serbian($category,$rank,$name)
    {            
        if($category =="emperor"){
            $selected_title->name ="tsar";
            $selected_title->rank =12;
        }
        elseif($category =="highking" || $category =="king"){
            $selected_title->name ="tsar";
            $selected_title->rank =12;
        }
        elseif($category =="archduke"){
            $selected_title->name ="veliki knyaz";
            $selected_title->rank =10;
        }
        elseif($category =="grand_duke"){
            $selected_title->name ="veliki knyaz";
            $selected_title->rank =10;
        }
        elseif($category =="prince"){
            $selected_title->name ="knyaz";
            $selected_title->rank =9;
        }
        elseif($category =="duke"){
            $selected_title->name ="knyaz";
            $selected_title->rank =9;
        } 
        elseif($category =="margrave"){
            $selected_title->name ="voivode";
            $selected_title->rank =$rank; //8
        } 
        elseif($category =="count"){
            $selected_title->name ="count";
            $selected_title->rank =$rank;
        } 
        elseif($category =="burgrave"){
            $selected_title->name ="castellan";
            $selected_title->rank =$rank;
        } 
        elseif($category =="baron"){
            $selected_title->name ="boyar";
            $selected_title->rank =$rank;
        } 
        elseif($category =="lord"){
            $selected_title->name ="gospodar";
            $selected_title->rank =$rank;
        } 
        elseif($category =="knight"){
            $selected_title->name ="knight";
            $selected_title->rank =$rank;
        } 
        else {
            $selected_title->name ="squire";
            $selected_title->rank =2;
        }        
        $selected_title->church =0; 
        return $elected_title; 
    }

    //type: delegate
    //religion: serbian
    private function delegate_serbian($category,$rank,$name)
    {            
        $selected_title->name ="grandmaster";
        $selected_title->rank =$rank;
        $selected_title->church =0; 
        return $elected_title; 
    }

    //type: hunt
    //religion: russian
    private function hunt_serbian($category,$rank,$name)
    {            
        if($category =="gamekeeper"){
            $selected_title->name ="gamekeeper";
            $selected_title->rank =3;
        }
        else {
            $selected_title->name ="falconer";
            $selected_title->rank =3;
        }
        $selected_title->church =0; 
        return $elected_title;
    }

    //type: inn
    //religion: russian
    private function inn_serbian($category,$rank,$name)
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
    //religion: russian
    private function warden_serbian($category,$rank,$name)
    {            
        $selected_title->name ="lord warden";
        $selected_title->rank =$rank;
        $selected_title->church =0; 
        return $elected_title;
    }

    //type: guild
    //religion: russian
    private function guild_serbian($category,$rank,$name)
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

    //type: peasant
    //religion: russian
    private function peasant_serbian($category,$rank,$name)
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
                $selected_title->name ="smerd";
                $selected_title->rank =1;
            } 
        }
        $selected_title->church =0; 
        return $elected_title;
    }

}
