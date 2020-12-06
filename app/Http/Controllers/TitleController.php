<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TitleController extends Controller
{

    //find
    public function find($id)
    {
        $title = Title::with('owners','holders','heirs','regions','places','quarters','religions','votes')->where('title_id',$id)->first();
        $title_exist = is_null($title);
        if($title_exist !=1){
            $this->religion($title->religions->religion,$title->career,$title->category,$title->rank);
        }
        else {
            //do nothing
        }
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
    private function religion($religion,$career,$category,$rank)
    {            
        if($religion =="Catholic"){
            $this->catholic($career,$category,$rank);
        }
        elseif($religion =="Serbian Orthodox"){
            $this->serbian($career,$category,$rank);
        }
        elseif($religion =="Russian Orthodox"){
            $this->russian($career,$category,$rank);
        }
        elseif($religion =="Greek Orthodox"){
            $this->greek($career,$category,$rank);
        }
        elseif($religion =="Muslim"){
            $this->muslim($career,$category,$rank);
        }
        else {
            //do nothing
        }
    }

    //cultures
    private function catholic($career,$category,$rank)
    {            
        if($career ==""){

        }
        elseif($career ==""){

        }
        else {
            //not possible
        }
    }

    private function serbian($career,$category,$rank)
    {            
        if($career ==""){

        }
        elseif($career ==""){

        }
        else {
            //not possible
        }      
    }

    private function russian($career,$category,$rank)
    {            
        if($career ==""){

        }
        elseif($career ==""){

        }
        else {
            //not possible
        }      
    }

    private function greek($career,$category,$rank)
    {            
        if($career ==""){

        }
        elseif($career ==""){

        }
        else {
            //not possible
        }      
    }

    private function muslim($career,$category,$rank)
    {            
        if($career ==""){

        }
        elseif($career ==""){

        }
        else {
            //not possible
        }      
    }

    //election
    public function election()
    {            
      
    }

    //social estates
    public function estate()
    {            
       
    }

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
