<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorialController extends Controller
{
    //tutorials
	public function dynasty()
    {       
        return view('tutorial.dynasty');        
    }
	
    public function character()
    {       
        return view('tutorial.character');        
    }
	
    public function estate()
    {       
        return view('tutorial.estate');        
    }
}
