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
            $controlled_title->succession ="empire";
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
            $selected_title = $this->warden_greek($category,$rank,$name);
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
    //religion: greek
    private function elective_church_greek($category,$rank,$name)
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
    //religion: greek
    private function elective_monastic_greek($category,$rank,$name)
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

    //type: hunt
    //religion: greek
    private function hunt_greek($category,$rank,$name)
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
    //religion: greek
    private function inn_greek($category,$rank,$name)
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
    //religion: greek
    private function warden_greek($category,$rank,$name)
    {            
        $selected_title->name ="sakellarios";
        $selected_title->rank =$rank;
        $selected_title->church =0; 
        return $elected_title;
    }

    //type: peasant
    //religion: greek
    private function peasant_greek($category,$rank,$name)
    {            
        if($category =="sheriff"){
            $selected_title->name ="katepano";
            $selected_title->rank =$rank;
        }
        elseif($category =="bailiff"){
            $selected_title->name ="kephale";
            $selected_title->rank =$rank;
        }
        elseif($category =="reeve"){
            $selected_title->name ="kourator";
            $selected_title->rank =$rank;
        }
        else {
            if($rank >=3){
                $selected_title->name ="boidatos";
                $selected_title->rank =3;
            }
            elseif($rank ==2){
                $selected_title->name ="paroikos";
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
    //religion: greek
    private function burgher_greek($category,$rank,$name)
    {    
        if($category =="doge"){
            $selected_title->name ="praetor";
            $selected_title->rank =$rank;
        }
        elseif($category =="rector"){
            $selected_title->name ="praetor";
            $selected_title->rank =$rank;
        }
        elseif($category =="gonfalier"){
            $selected_title->name ="praetor";
            $selected_title->rank =$rank;
        }
        elseif($category =="burgrave"){
            $selected_title->name ="quaestor";
            $selected_title->rank =$rank;
        }    
        elseif($category =="lord warden"){
            $selected_title->name ="sakellarios";
            $selected_title->rank =4;
        }
        elseif($category =="high mayor"){
            $selected_title->name ="horeiarios";
            $selected_title->rank =$rank;
        }
        elseif($category =="lord mayor"){
            $selected_title->name ="horeiarios";
            $selected_title->rank =$rank;
        }
        else {
            if($rank >=3){
                $selected_title->name ="patrikios";
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

    //type: court
    //religion: greek
    private function court_greek($category,$rank,$name)
    {                  
        $selected_title->name =$name; 
        $selected_title->rank =$rank; 
        $selected_title->church =0;     
        return $elected_title;
    }

    //type: guild
    //religion: greek
    private function guild_greek($category,$rank,$name)
    {                  
        if($category =="alderman master" || $category =="alderman"){
            $selected_title->name ="sakellarios";
            $selected_title->rank =$rank;
        }
        else {
            $selected_title->name ="master craftsman";
            $selected_title->rank =$rank;
        }   
        $selected_title->church =0;    
        return $elected_title;
    }

    //type: noble
    //religion: greek
    private function noble_greek($category,$rank,$name)
    {             
        if($category =="emperor"){
            $selected_title->name ="basileus";
            $selected_title->rank =$rank;
        }
        elseif($category =="highking" || $category =="king"){
            $selected_title->name ="basileus";
            $selected_title->rank =11;
        }
        elseif($category =="archduke"){
            $selected_title->name ="megas doux";
            $selected_title->rank =$rank;
        }
        elseif($category =="grand_duke"){
            $selected_title->name ="despot";
            $selected_title->rank =$rank;
        }
        elseif($category =="prince"){
            $selected_title->name ="doux";
            $selected_title->rank =$rank;
        }
        elseif($category =="duke"){
            $selected_title->name ="doux";
            $selected_title->rank =$rank;
        } 
        elseif($category =="margrave"){
            $selected_title->name ="tourmarch";
            $selected_title->rank =$rank;
        } 
        elseif($category =="count"){
            $selected_title->name ="comes";
            $selected_title->rank =$rank;
        } 
        elseif($category =="burgrave"){
            $selected_title->name ="kentarchos";
            $selected_title->rank =$rank;
        } 
        elseif($category =="baron"){
            $selected_title->name ="dekarchos";
            $selected_title->rank =$rank;
        } 
        elseif($category =="lord"){
            $selected_title->name ="logothetes";
            $selected_title->rank =$rank;
        } 
        elseif($category =="knight"){
            $selected_title->name ="kataphraktos";
            $selected_title->rank =$rank;
        } 
        else {
            $selected_title->name ="kavallarios";
            $selected_title->rank =2;
        }        
        $selected_title->church =0; 
        return $elected_title;
    }

    //type: delegate
    //religion: greek
    private function delegate_greek($category,$rank,$name)
    {            
        $selected_title->name ="grandmaster";
        $selected_title->rank =$rank;
        $selected_title->church =0; 
        return $elected_title;
    }


}
