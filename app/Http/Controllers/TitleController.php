<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ReligionCatholicController;
use App\Http\Controllers\ReligionSerbianController;
use App\Http\Controllers\ReligionRussianController;
use App\Http\Controllers\ReligionGreekController;
use App\Http\Controllers\ReligionMuslimController;
use App\Title;
use App\Person;
use App\Parents;

class TitleController extends Controller
{

    //find
    public function find($id)
    {
        $title = Title::with('owners','holders','heirs','regions','places','quarters','religions','votes')->where('title_id',$id)->first();
        $title_exist = is_null($title);
        if($title_exist !=1){
            $controlled_title = $this->religion($title->religions->religion,$title->career,$title->category,$title->rank,$title->title_name);
        }
        else {
            //do nothing
            $controlled_title ="vacant";
        }
        return $controlled_title;
    }

    //feudal ranks
    public function feudal($liege_rank,$vassal_rank)
    {            
        //vassalize possible
        if($liege_rank >$vassal_rank){
            $possibility =1;
        }
        //not possible
        else {
            $possibility =0;
        }
        //rteturn
        return $possibility;
    }

     //vassalize
     public function vassal()
     {            
      
     }  

    //religion
    public function religion($religion,$career,$category,$rank,$name)
    {            
        if($religion =="Catholic"){
            $religion_controller = new ReligionCatholicController;
            $controlled_title = $religion_controller->religion($career,$category,$rank,$name);
        }
        elseif($religion =="Serbian Orthodox"){
            $religion_controller = new ReligionSerbianController;
            $controlled_title = $religion_controller->religion($career,$category,$rank,$name);
        }
        elseif($religion =="Russian Orthodox"){
            $religion_controller = new ReligionRussianController;
            $controlled_title = $religion_controller->religion($career,$category,$rank,$name);
        }
        elseif($religion =="Greek Orthodox"){
            $religion_controller = new ReligionGreekController;
            $controlled_title = $religion_controller->religion($career,$category,$rank,$name);
        }
        elseif($religion =="Muslim"){
            $religion_controller = new ReligionMuslimController;
            $controlled_title = $religion_controller->religion($career,$category,$rank,$name);
        }
        else {
            //do nothing
            $controlled_title ="inaccessible";
        }
        return $controlled_title;
    }

    //succession types
    public function succession($succession_type,$succession_rank,$succession_church,$title)
    {
        $owner = $title->owner;
        $holder = $title->holder;
        $heir = $title->heir;
        $region = $title->region;
        $place = $title->place;
        $quarter = $title->quarter;
        $id = $title->title_id;

        if($owner <3 && $holder <3){
            $claim ="can be claimed";
            return $claim;
        }
        else {
            if($succession_type =="primogeniture"){
                $heirs = $this->primogeniture($owner,$holder);
                return $heirs;
            }
            elseif($succession_type =="seniority"){
                $heirs = $this->seniority($owner,$holder);
                return $heirs;
            }
            elseif($succession_type =="papacy"){
                $pope = $this->papacy();
                return $pope;
            }
            elseif($succession_type =="camerlengo"){
                $camerlengo = $this->camerlengo();
                return $camerlengo;
            }
            elseif($succession_type =="cardinal"){
                $cardinals = $this->cardinal();
                return $cardinals;
            }
            elseif($succession_type =="delegate"){
                $grandmaster = $this->delegate();
                return $grandmaster;
            }
            elseif($succession_type =="herald"){
                $herald = $this->herald($owner,$holder);
                return $herald;
            }
            elseif($succession_type =="grand"){
                $herald = $this->grand($owner,$holder,$region,$place,$quarter);
                return $herald;
            }
            elseif($succession_type =="empire"){
                $empire = $this->empire();
                return $empire;
            }
            elseif($succession_type =="elector"){
                $electors = $this->elector();
                return $electors;
            }
            elseif($succession_type =="court"){
                $courtiers = $this->court($owner);
                return $courtiers;
            }
            elseif($succession_type =="elective church"){
                $election = $this->church($holder,$succession_church,$region,$place,$quarter);
                return $election;
            }
            elseif($succession_type =="elective crusader"){
                $election = $this->crusader($holder,$succession_church,$region,$place,$quarter);
                return $election;
            }
            elseif($succession_type =="elective monastic"){
                $election = $this->monastic($holder,$succession_church,$region,$place,$quarter);
                return $election;
            }
            elseif($succession_type =="elective guild"){
                $election = $this->guild($holder,$region,$place,$quarter,$id);
                return $election;
            }
            elseif($succession_type =="elective burgher"){
                $election = $this->burgher($holder,$succession_rank,$region,$place,$quarter);
                return $election;    
            }
            else {
                $error ="inaccessible";
                return $error;
            }
        }
    }

    //succession

    //agnatic primogeniture
    private function primogeniture($owner,$holder)
    {
        $person = Person::where('person_id',$holder)->first();
        $dynasty = $person->dynasty;
        //count
        $i = 1;
        $people_count = Person::where('dynasty',$dynasty)->where('gender',1)->where('alive',1)->where('person_id','<>',$holder)->count();
        //limit to 20 succession
        if($people_count >=25){
            $alive_count = 25;
            $people =[];  
            $daddy = $this->daddy_check($holder);
            $people = primogeniture_children($people,$heir,$i,$alive_count,$daddy);
        }
        //no heirs
        elseif($people_count <1){
            $alive_count = 0;
            $people =[]; 
        }
        //limited succession
        else {
            $alive_count = $people_count;
            $people =[];   
            $daddy = $this->daddy_check($holder);  
            $people = primogeniture_children($people,$heir,$i,$alive_count,$daddy);
        }  
        return $people;
    }

    //agnatic seniority
    private function seniority($owner,$holder)
    {
        $person = Person::where('person_id',$holder)->first();
        $dynasty = $person->dynasty;
        //todo izgoi rule
        //count
        $i = 1;
        $people_count = Person::where('dynasty',$dynasty)->where('gender',1)->where('alive',1)->count();
        //seniority
        //limit to 20 succession
        if($people_count >=20){
            $alive_count = 20;
            $people =[];  
            $daddy = $this->daddy_check($holder);
            $people = seniority_brother($people,$heir,$i,$alive_count,$daddy);
        }
        //no heirs
        elseif($people_count <1){
            $alive_count = 0;
            $people =[]; 
        }
        //limited succession
        else {
            $alive_count = $people_count;
            $people =[];   
            $daddy = $this->daddy_check($holder);  
            $people = seniority_brother($people,$heir,$i,$alive_count,$daddy);
        }       
        return $people;
    }

    //see if there is a father
    private function daddy_check($heir)
    {
        $father_count = Parents::where('child',$heir)->where('father','<>',1)->count(); 
        if($father_count ==1){
            $father = Parents::where('child',$heir)->where('father','<>',1)->first(); 
            $daddy = $father->father;
        }
        else {
            $daddy =1;
        } 
        return $daddy;
    }

    //primogeniture children
    private function primogeniture_children($people,$heir,$i,$max,$daddy)
    {      
        while($i <$max){
            $children_count = Parents::with('kids')->where('father',$heir)->count();
            if($children_count >=1){
                $children = Parents::with('kids')->where('father',$heir)->orderBy('parentage_id','ASC')->get();
                foreach($children as $kid){
                    if($kid->kids->alive ==1){
                        array_push($people,$kid->kids);
                        $i++;
                    }
                    else {
                        $grandchildren = $this->primogeniture_children($people,$kid->child,$i,$max,$kid->father);
                        $grandchildren_count = count($grandchildren);
                        $i = $grandchildren_count;                    
                    }
                }
            }
            else {
                $father = $this->daddy_check($heir);
                if($father >1){
                    $brothers = $this->primogeniture_brother($people,$heir,$i,$max,$father);
                    $brother_count = count($brothers);
                    $i = $brother_count;   
                }
            }
        }
        return $people;
    }

    //primogeniture brother
    private function primogeniture_brother($people,$heir,$i,$max,$father)
    {
        while($i <$max){
            $brothers_count = Parents::with('kids')->where('father',$father)->where('child','<>',$heir)->count();
            if($brothers_count >=1){
                $brothers = Parents::with('kids')->where('father',$father)->where('child','<>',$heir)->orderBy('parentage_id','ASC')->get();
                foreach($brothers as $brother){
                    if($brother->kids->alive ==1){
                        array_push($people,$brother->kids);
                        $i++;
                    }
                    else {
                        $nephews = $this->primogeniture_children($people,$heir,$i,$max,$brother->father);
                        $nephew_count = count($nephews);
                        $i = $nephew_count; 
                    }
                }
            }
            else {
                $cousins = $this->primogeniture_brother($people,$brother->child,$i,$max,$father);
                $cousins_count = count($cousins);
                $i = $cousins_count;    
            }         
        } 
        return $people;   
    }

    //seniority brother
    private function seniority_brother($people,$heir,$i,$max,$father)
    {
        while($i <$max){
            $brothers_count = Parents::with('kids')->where('father',$father)->where('child','<>',$heir)->count();
            if($brothers_count >=1){
                $brothers = Parents::with('kids')->where('father',$father)->where('child','<>',$heir)->orderBy('parentage_id','ASC')->get();
                foreach($brothers as $brother){
                    if($brother->kids->alive ==1){
                        array_push($people,$brother->kids);
                        $i++;
                    }
                    else {
                        $cousins = $this->seniority_brother($people,$brother->child,$i,$max,$brother->father);
                        $cousins_count = count($cousins);
                        $i = $cousins_count;   
                    }
                }
            }
            else {
                $nephews = $this->seniority_children($people,$heir,$i,$max,$father);
                $nephew_count = count($nephews);
                $i = $nephew_count;   
            }         
        } 
        return $people;   
    }

    //seniority children
    private function seniority_children($people,$heir,$i,$max,$daddy)
    {      
        while($i <$max){
            $children_count = Parents::with('kids')->where('father',$heir)->count();
            if($children_count >=1){
                $children = Parents::with('kids')->where('father',$heir)->orderBy('parentage_id','ASC')->get();
                foreach($children as $kid){
                    if($kid->kids->alive ==1){
                        array_push($people,$kid->kids);
                        $i++;
                    }
                    else {
                        $grandchildren = $this->seniority_brother($people,$kid->child,$i,$max,$kid->father);
                        $grandchildren_count = count($grandchildren);
                        $i = $grandchildren_count;                    
                    }
                }
            }
            else {
                $father = $this->daddy_check($heir);
                if($father >1){
                    $brothers = $this->seniority_children($people,$heir,$i,$max,$father);
                    $brother_count = count($grandchildren);
                    $i = $brother_count;   
                }
            }
        }
        return $people;
    }

    //elections

    //papacy
    private function papacy()
    {
        //all bishops or higher
        $elections = Title::where('religion',1)->where('rank','>',5)->where('holder','>',1)->get(); 
        return $elections;
    }

    //church
    private function church($holder,$rank,$region,$place,$quarter)
    {
        //all in place and lower 
        $elections = Title::with('owners','holders','heirs','regions','places','quarters','religions','votes')->where('place',$place)->where('holder','>',1)->get();  
        foreach($elections as $title){
            $controlled_title = $this->religion($title->religions->religion,$title->career,$title->category,$title->rank,$title->title_name);
            if($controlled_title->rank >$rank && $controlled_title->succession =="elective church"){
                $title->electable = 1;
            }
            else {
                $title->electable = 0;
            }
        }
        return $elections;
    }

    //crusader
    private function crusader($holder,$rank,$region,$place,$quarter)
    {
        //all in place and lower 
        $elections = Title::with('owners','holders','heirs','regions','places','quarters','religions','votes')->where('place',$place)->where('holder','>',1)->get(); 
        foreach($elections as $title){
            $controlled_title = $this->religion($title->religions->religion,$title->career,$title->category,$title->rank,$title->title_name);
            if($controlled_title->rank >$rank  && $controlled_title->succession =="elective crusader"){
                $title->electable = 1;
            }
            else {
                $title->electable = 0;
            }
        }
        return $elections;
    }

    //monastic
    private function monastic($holder,$rank,$region,$place,$quarter)
    {
        //all in place and lower 
        $elections = Title::with('owners','holders','heirs','regions','places','quarters','religions','votes')->where('place',$place)->where('holder','>',1)->get(); 
        foreach($elections as $title){
            $controlled_title = $this->religion($title->religions->religion,$title->career,$title->category,$title->rank,$title->title_name);
            if($controlled_title->rank >$rank && $controlled_title->succession =="elective monastic"){
                $title->electable = 1;
            }
            else {
                $title->electable = 0;
            }
        }
        return $elections;
    }

    //guild
    private function guild($holder,$region,$place,$quarter,$id)
    {
        $elections;
        //todo guild members
        return $elections;
    }

    //burgher
    private function burgher($holder,$rank,$region,$place,$quarter)
    {
        //all in place and lower 
        $elections = Title::with('owners','holders','heirs','regions','places','quarters','religions','votes')->where('place',$place)->where('holder','>',1)->get(); 
        foreach($elections as $title){
            $controlled_title = $this->religion($title->religions->religion,$title->career,$title->category,$title->rank,$title->title_name);
            if($controlled_title->rank >$rank && $controlled_title->succession =="elective burgher"){
                $title->electable = 1;
            }
            else {
                $title->electable = 0;
            }
        }
        return $elections;
    }

    //empire
    private function empire()
    {
        $succession;
        //todo empire members
        return $succession;
    }

    //attached

    //elector
    private function elector()
    {
        $elector ="prince_elector";
        $attachment = Title::with('owners','holders','heirs','regions','places','quarters','religions','votes')->where('career',$elector)->where('holder','>',1)->get();
        return $attachment;
    }

    //appointed

    //camerlengo and cardinal
    private function camerlengo()
    {
        //all bishops or higher
        $appointment = Title::where('religion',1)->where('rank','>',5)->where('holder','>',1)->get(); 
        return $appointment;
    }

    //cardinals
    private function cardinal()
    {
        //all cardinals and camerlengo
        $cardinal ="cardinal";
        $appointment = Title::where('title_category',$cardinal)->get(); 
        return $appointment;
    }

    //delegate
    private function delegate()
    {
        $appointment;
        //todo realm members
        return $appointment;
    }

    //court
    private function court()
    {
        $career ="fixed_nobility";
        //todo realm members
        $appointment = Title::with('owners','holders','heirs','regions','places','quarters','religions','votes')->where('career',$career)->where('holder','>',1)->get();
        return $appointment;
    }

    //herald
    private function herald($owner,$holder)
    {
        $career ="fixed_nobility";
        //todo realm members
        $appointment = Title::with('owners','holders','heirs','regions','places','quarters','religions','votes')->where('career',$career)->where('holder','>',1)->get();
        return $appointment;
    }

    //herald
    private function grand($owner,$holder,$region,$place,$quarter)
    {
        $career ="grand_officer";
        //todo court members
        $appointment = Title::with('owners','holders','heirs','regions','places','quarters','religions','votes')->where('career',$career)->where('place',$place)->where('quarter',$quarter)->where('holder','>',1)->get();
        return $appointment;
    }

    //ownership
    //region owner
    public function region()
    {            
       
    }

    //place owner
    public function place()
    {            
       
    }

    //quarter owner
    public function quarter()
    {            
       
    }

}