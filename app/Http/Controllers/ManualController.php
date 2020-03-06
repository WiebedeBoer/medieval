<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManualController extends Controller
{
	//manual main
    public function index()
    {       
        return view('manual.index');        
    }
	
    public function roles()
    {       
        return view('manual.roles');        
    }
	
    public function feudalism()
    {       
        return view('manual.feudalism');        
    }
	
    public function heraldry()
    {       
        return view('manual.heraldry');        
    }	

    public function chivalry()
    {       
        return view('manual.chivalry');        
    }	

    public function manorialism()
    {       
        return view('manual.manorialism');        
    }	

    public function monasticism()
    {       
        return view('manual.monasticism');        
    }	

    public function scholasticism()
    {       
        return view('manual.scholasticism');        
    }	

    public function commerce()
    {       
        return view('manual.commerce');        
    }	

    public function military()
    {       
        return view('manual.military');        
    }	

    public function farming()
    {       
        return view('manual.farming');        
    }	

    public function construction()
    {       
        return view('manual.construction');        
    }	

    public function culture()
    {       
        return view('manual.culture');        
    }		
	
    public function church()
    {       
        return view('manual.church');        
    }	
	
}
