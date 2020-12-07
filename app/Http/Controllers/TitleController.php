<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ReligionCatholicController;
use App\Http\Controllers\ReligionSerbianController;
use App\Http\Controllers\ReligionRussianController;
use App\Http\Controllers\ReligionGreekController;
use App\Http\Controllers\ReligionMuslimController;
use App\Title;

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
    private function religion($religion,$career,$category,$rank,$name)
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

    //elections
    //election
    public function election()
    {            
      
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