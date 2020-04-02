<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Culture;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class TutorialController extends Controller
{
    //tutorials
	public function dynasty()
    {       
        $cultures = Culture::orderBy('culture_name','ASC')->get();	
		return view('tutorial.dynasty', compact('cultures'));        
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
