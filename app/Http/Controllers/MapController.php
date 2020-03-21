<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;

class MapController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }	
	
    public function cattle()
    {            
		$regiondata = Region::all();
		return view('map.cattle', compact('regiondata'));        
    }
	
	public function goat()
    {            
		$regiondata = Region::all();
		return view('map.goat', compact('regiondata'));        
    }
	
	public function herb()
    {            
		$regiondata = Region::all();
		return view('map.herb', compact('regiondata'));        
    }	
	
	public function ride()
    {            
		$regiondata = Region::all();
		return view('map.ride', compact('regiondata'));        
    }	
	
	public function sheep()
    {            
		$regiondata = Region::all();
		return view('map.sheep', compact('regiondata'));        
    }	

	public function style()
    {            
		$regiondata = Region::all();
		return view('map.style', compact('regiondata'));        
    }
	
	public function literature()
    {            
		$regiondata = Region::all();
		return view('map.literature', compact('regiondata'));        
    }
	
}
